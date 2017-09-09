<?php



include 'template_top.php';
echo "<div style='height: 70px'></div><center>";
if (isset($_SESSION['checkSign']) == 'itoffside')
{


	include 'config.php';

	$meSQL = "SELECT * FROM repair_record join car join member on repair_record.car_license = car.license and car.owner_id = member.id where repair_id = '".$_POST['repair_id']."'";
    $meQuery = mysql_query($meSQL);
    if ($meQuery == TRUE)
    {
      echo '<center>Repair Record<br></center>
			<div class="table-responsive container">
			<table border="1" cellpadding="5" class="table table-bordered">
				<tr style="background-color:  #b3b3ff">
					<td>Owner</td>
					<td>Brand</td>
					<td>Model</td>
					<td>License</td>
					<td>Start Date</td>
					<td>Finish Date</td>
					<td>Status</td>
				</tr>';
		while ($meResult = mysql_fetch_assoc($meQuery))
		{echo '
			<form action="update_transaction.php" method="post">
					<tr>
						<td>'.$meResult['firstname'].' '.$meResult['lastname'].'</td>
						<td>'.$meResult['brand'].'</td>
						<td>'.$meResult['model'].'</td>
						<td>'.$meResult['license'].'</td>
						<td>'.$meResult['start_date'].'</td>
						<td>'.$meResult['finish_date'].'</td>
						<td>
							<select name="status" ng-model="discussionsSelect" class="form-control">';
								if($meResult['status'] == 1)
								{
									echo '
									<option value="0" style="color: green">Repair already</option>
		                        	<option value="1" style="color: red" selected="TRUE">Not repair yet</option>
		                        	<option value="2" >Repairing</option>';
								}
								elseif($meResult['status'] == 2)
								{
									echo '
									<option value="0" style="color: green">Repair already</option>
		                        	<option value="1" style="color: red">Not repair yet</option>
		                        	<option value="2" selected="TRUE">Repairing</option>';
								}
								else
								{
									echo '
									<option value="0" style="color: green">Repair already</option>
		                        	<option value="1" style="color: red">Not repair yet</option>
		                        	<option value="2" selected="TRUE">Repairing</option>';
								}echo'
							</select>
						</td>
				</tr>';
		}
		echo '</table>
				<input type="hidden" name="car_license" value="'.$meResult['license'].'"></input>
				<br>
				<input type="submit" value="Save" class="btn btn-primary"></button>
				</form>';
    }
    else
    {
    	//ERROR
    }

}

?>
