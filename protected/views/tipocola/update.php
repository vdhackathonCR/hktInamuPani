<?php
$this->breadcrumbs=array(
	'Tipocolas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipocola', 'url'=>array('index')),
	array('label'=>'Create Tipocola', 'url'=>array('create')),
	array('label'=>'View Tipocola', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tipocola', 'url'=>array('admin')),
);
?>

<h1>Update Tipocola <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>