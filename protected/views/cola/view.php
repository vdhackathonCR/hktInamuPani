<?php
$this->breadcrumbs=array(
	'Colas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cola', 'url'=>array('index')),
	array('label'=>'Create Cola', 'url'=>array('create')),
	array('label'=>'Update Cola', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cola', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cola', 'url'=>array('admin')),
);
?>

<h1>View Cola #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		//'tipocola',
	),
)); ?>
