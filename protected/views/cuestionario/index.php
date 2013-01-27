<?php $form=$this->beginWidget('CActiveForm', array(
	'method'=>'Post',
)); ?>

	
		<div id="contenido">
					
		</div>
		


	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script>
	$(document).ready(function () {
	$("#contenido").load("http://localhost/~carguello/hkt/index.php/cuestionario/firstQustion");
	
	});
	
	function nextQuestion(id){
		$("#contenido").load("http://localhost/~carguello/hkt/index.php/cuestionario/nextQuestion?id="+id);
	}
	
	
	</script>
	
<?php $this->endWidget(); ?>