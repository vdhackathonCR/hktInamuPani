<?php
$this->breadcrumbs=array(
	'Colas',
);

$this->menu=array(
	array('label'=>'Create Cola', 'url'=>array('create')),
	array('label'=>'Manage Cola', 'url'=>array('admin')),
);
?>

<h1>Colas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


<?php
echo Yii::app()->user->id;
?>