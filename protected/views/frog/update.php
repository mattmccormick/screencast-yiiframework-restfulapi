<?php
/* @var $this FrogController */
/* @var $model Frog */

$this->breadcrumbs=array(
	'Frogs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Frog', 'url'=>array('index')),
	array('label'=>'Create Frog', 'url'=>array('create')),
	array('label'=>'View Frog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Frog', 'url'=>array('admin')),
);
?>

<h1>Update Frog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>