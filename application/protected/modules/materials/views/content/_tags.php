<?php
/* @var $this TagController */
/* @var $data Tag */
?>

<div class="view">
	<?php echo CHtml::link(CHtml::encode(CHtml::encode($data->title)), array('tag/listMaterials', 'alias'=>CHtml::encode($data->alias))); ?>
</div>