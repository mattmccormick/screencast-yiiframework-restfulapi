<?php
/* @var $this FrogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Frogs',
);

$this->menu=array(
	array('label'=>'Create Frog', 'url'=>array('create')),
	array('label'=>'Manage Frog', 'url'=>array('admin')),
);
?>

<h1>Frogs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
