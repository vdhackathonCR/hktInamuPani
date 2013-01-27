<?php
$this->breadcrumbs=array(
	'Colas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cola', 'url'=>array('index')),
	array('label'=>'Create Cola', 'url'=>array('create')),
	array('label'=>'View Cola', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cola', 'url'=>array('admin')),
);
?>

<h1>Update Cola <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>