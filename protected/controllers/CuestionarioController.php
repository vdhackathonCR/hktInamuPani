<?php
class CuestionarioController extends Controller
{

	public function actionIndex()
	{
		if(isset($_POST["txt_sms"]))
		{
			$phone=$_POST["txt_sms"];
			$this->sendSms($phone);
			$this->redirect(array('site/index'));
		}
		else
		{
			$this->render('index');
		}
		
		
	}

	
	public function actionFirstQustion(){
		$comm="select id, pregunta from pregunta where id =	(select min(id) from pregunta)";
		$comand= Yii::app()->db->createCommand($comm);
		$result=$comand->queryAll();
		
		
		print_r("<div class='pregunta'>".$result[0]["pregunta"]). "</div>";
		$respuestas= $this->getRespuestas($result[0]["id"]);
		echo "<br/>";
		
		foreach($respuestas as $row)
		{		
			echo "<div class='row'>";
			echo CHtml::radioButton("",false,array('onClick'=>'nextQuestion('.$result[0]["id"].')'));			
			print_r($row["respuesta"]);
			echo "</div>";
		}
		
		
		
	}
	
	
	
	function sendSms($phone)
	{
		shell_exec('echo "Usted registro una solicitud de ayuda en nuestro sitio favor confirmar con un SI o NO" | gammu sendsms TEXT '.$phone);
		
	}
	
	
	
	
	public function getRespuestas($id)
	{
		$comm="select respuesta from respuesta where pregunta=".$id;
		$comand= Yii::app()->db->createCommand($comm);
		$result=$comand->queryAll();
		return $result;
	}

	
	
	public function actionNextQuestion(){
		$id=$_GET["id"];
		$comm="select id, pregunta from pregunta where id > $id order by id asc limit 1";
		$comand= Yii::app()->db->createCommand($comm);
		$result=$comand->queryAll();
		
		if (isset($result[0]))
			{
			print_r("<div class='pregunta'>".$result[0]["pregunta"]). "</div>";
			$respuestas= $this->getRespuestas($result[0]["id"]);
			echo "<br/>";
			foreach($respuestas as $row)
			{
				echo "<div class='row'>";
				echo CHtml::radioButton("",false,array('onClick'=>'nextQuestion('.$result[0]["id"].')'));			
				print_r($row["respuesta"]);
				echo "</div>";
			}
		}else
		{
		echo "Su información es muy importante para nosotros..
		<br/><br/>Con el fin de validar su información por favor introdusca su número telefónico<br/>";
		
		echo CHtml::textField('txt_sms');
		echo CHtml::submitButton('submit');
		}
	}
	
	
	
}



?>



