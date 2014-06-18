<?php
/* @var $this FrogController */
/* @var $model Frog */

$this->breadcrumbs=array(
	'Frogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Frog', 'url'=>array('index')),
	array('label'=>'Manage Frog', 'url'=>array('admin')),
);
?>

<h1>Create Frog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>