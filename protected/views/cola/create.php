<?php
$this->breadcrumbs=array(
	'Colas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cola', 'url'=>array('index')),
	array('label'=>'Manage Cola', 'url'=>array('admin')),
);
?>

<h1>Create Cola</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>