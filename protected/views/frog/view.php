<?php
/* @var $this FrogController */
/* @var $model Frog */

$this->breadcrumbs=array(
	'Frogs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Frog', 'url'=>array('index')),
	array('label'=>'Create Frog', 'url'=>array('create')),
	array('label'=>'Update Frog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Frog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Frog', 'url'=>array('admin')),
);
?>

<h1>View Frog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'colour',
	),
)); ?>
