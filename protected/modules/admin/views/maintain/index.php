<?php
/* @var $this MaintainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Maintains',
);

$this->menu=array(
	array('label'=>'Create Maintain', 'url'=>array('create')),
);
?>

<h1>Maintains</h1>

<table  class="table">
    <tr>
        <td class="col-sm-5">
            <b>Title</b>
        </td>
        <td  class="col-sm-2">
            <b>Year</b>
	</td>
        <td  class="col-sm-2">
            <b>Date Created</b>
        </td>
        <td  class="col-sm-2">
            <b>Assigned Personnel</b>
        </td>
        <td  class="col-sm-3">
            &nbsp;
        </td>
    </tr>
</table>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
