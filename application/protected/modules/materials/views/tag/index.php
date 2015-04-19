<?php
/* @var $this TagController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tags',
);

$this->menu=array(
	array('label'=>'Create Tag', 'url'=>array('create')),
	array('label'=>'Manage Tag', 'url'=>array('admin')),
);
?>

<h1>Tags</h1>

<?php $this->widget('application.extensions.cumulus.Tagcloud',
	  array(
		  'namefield'=>'title',
		  'urlfield'=>'url',
		  'tags' => Tag::model()->findall()
	  ));
?>
