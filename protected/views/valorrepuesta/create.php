<?php
$this->breadcrumbs=array(
	'Valorrepuestas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Valorrepuesta', 'url'=>array('index')),
	array('label'=>'Manage Valorrepuesta', 'url'=>array('admin')),
);
?>

<h1>Create Valorrepuesta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>