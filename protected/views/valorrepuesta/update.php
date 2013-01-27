<?php
$this->breadcrumbs=array(
	'Valorrepuestas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Valorrepuesta', 'url'=>array('index')),
	array('label'=>'Create Valorrepuesta', 'url'=>array('create')),
	array('label'=>'View Valorrepuesta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Valorrepuesta', 'url'=>array('admin')),
);
?>

<h1>Update Valorrepuesta <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>