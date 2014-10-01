<?php
$chartsObj = new Charts();
$mycharts = $chartsObj->getCharts();
?>

<h3>Charts Library</h3>
<table id="osMychartstbl" class="widefat">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Chart Type</th>
        <th>ShortCode</th>
        <th>Actions</th>
    </tr>
    <?php foreach($mycharts as $chart){
            $editUrl = admin_url('admin.php?page=osnic_add_charts&chartId='.$chart->id.'&type=edit');
        ?>
    <tr>
        <td><?php echo $chart->id; ?></td>
        <td><?php echo $chart->title ?></td>
        <td><?php echo $chart->type ?></td>
        <td><b><?php  echo '[osnic_charts id="'.$chart->id.'"]'; ?></b></td>
        <td><a href="<?php echo $editUrl; ?>">Edit</a> | <a href="#">Delete</a></td>
    </tr>
    <?php } ?>
</table>
