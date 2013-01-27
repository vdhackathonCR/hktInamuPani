<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php //echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<?php $this->widget('bootstrap.widgets.TbNavbar', array(
		'type'=>'inverse',
		'fixed'=>'top',
		'brand'=>'Hackaton',
		'brandUrl'=>'#',
		'collapse'=>true, // requires bootstrap-responsive.css
		'items'=>array(
			array(
				'class'=>'bootstrap.widgets.TbMenu',
				'items'=>array(
					array('label'=>'Mantenimientos', 'url'=>'#', 'items'=>array(
						array('label'=>'GENERAL'),
						array('label'=>'Colas', 'url'=>array('/cola'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Preguntas', 'url'=>array('/pregunta'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Respuestas', 'url'=>array('/respuesta'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'ads', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
					), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Cuestionario', 'url'=>array('/cuestionario'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Inicio Sesion', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),
			),//'<img src="http://172.30.200.44/~app/tarificacion/images/quantus.png" class="logo">',
		),
	)); ?>
	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'homeLink'=>CHtml::link('Inicio', Yii::app()->homeUrl),
			'links'=>$this->breadcrumbs,
		)); ?>		
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

</div><!-- page -->

</body>
</html>
