<?php
$this->breadcrumbs=array(
	'Tipocolas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipocola', 'url'=>array('index')),
	array('label'=>'Manage Tipocola', 'url'=>array('admin')),
);
?>

<h1>Create Tipocola</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>