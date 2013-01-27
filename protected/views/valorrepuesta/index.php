<?php
$this->breadcrumbs=array(
	'Valorrepuestas',
);

$this->menu=array(
	array('label'=>'Create Valorrepuesta', 'url'=>array('create')),
	array('label'=>'Manage Valorrepuesta', 'url'=>array('admin')),
);
?>

<h1>Valorrepuestas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
