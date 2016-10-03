<?php //echo '<pre>'; print_r($desc); die;?>
<table >
  <tr>
  	<th><h3>S.No</h3></th>
    <th><h3>Address</h3></th>
    <th><h3>Location</h3></th>
  </tr>
  <tr>
    <?php 
foreach($desc as $detail){ 
$i=1;
?>	<td><?php echo $i;?></td>
    <td><?php echo $detail['VendorClasseLocationDetail']['location'];?></td>
    <td><?php echo $detail['Locality']['name'];?></td>
  </tr>
  <?php
$i++;
}
?>
</table>
