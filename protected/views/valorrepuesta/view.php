<?php
$this->breadcrumbs=array(
	'Valorrepuestas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Valorrepuesta', 'url'=>array('index')),
	array('label'=>'Create Valorrepuesta', 'url'=>array('create')),
	array('label'=>'Update Valorrepuesta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Valorrepuesta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Valorrepuesta', 'url'=>array('admin')),
);
?>

<h1>View Valorrepuesta #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'respuesta',
		'cola',
		'valor',
	),
)); ?>
