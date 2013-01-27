<?php
$this->breadcrumbs=array(
	'Tipocolas',
);

$this->menu=array(
	array('label'=>'Create Tipocola', 'url'=>array('create')),
	array('label'=>'Manage Tipocola', 'url'=>array('admin')),
);
?>

<h1>Tipocolas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
