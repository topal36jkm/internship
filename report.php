
<?php

include 'template_top.php';
echo "<div style='height: 70px'></div>";
if (isset($_SESSION['checkSign']) == 'itoffside')
{

	include 'config.php';

	$meSQL = "SELECT * FROM repair_record join car join member on repair_record.car_license = car.license and car.owner_id = member.id";

	if($_SESSION['active'] ==1 ) $meSQL .= "where member.id = '".$_SESSION['id']."'";
    $meQuery = mysql_query($meSQL);
    if ($meQuery == TRUE)
    {
        echo '
			<center>
				<h4>รายงาน</h4><br>
			</center>
			<div class="table-responsive container">
				<table border="1" cellpadding="5" class="table table-bordered">
				<tr style="background-color:  #b3b3ff">
					<td>No.</td>
					<td>Owner</td>
					<td>Brand</td>
					<td>Model</td>
					<td>License</td>
					<td>Start Date</td>
					<td>Finish Date</td>
					<td>Status</td>';
					// if(admin)
					if($_SESSION['active'] == 2)
					{
						echo '<td>Detail</td>';
					}
					echo '
				</tr>
		';
		$i = 0;
		while ($meResult = mysql_fetch_assoc($meQuery))
		{
			$i++;
			if ($i%2==0) {
                          $c = "#cce6ff";                          
                        }
                        else $c = "white";
			echo '
				<tr style="background-color: '.$c.'">
					<td>'.$i.'</td>
					<td>'.$meResult['firstname'].' '.$meResult['lastname'].'</td>
					<td>'.$meResult['brand'].'</td>
					<td>'.$meResult['model'].'</td>
					<td>'.$meResult['license'].'</td>
					<td>'.$meResult['start_date'].'</td>
					<td>'.$meResult['finish_date'].'</td>
					<td>';
						if($meResult['status'] == 1)
						{
							echo '<font color="red">Not repair yet</font>';
						}
						elseif($meResult['status'] == 2)
						{
							echo '<font>Reparing</font>';
						}
						else
						{
							echo '<font color="green">Repair already</font>';
						}

						// if(admin)
						if($_SESSION['active'] == 2)
						{
							echo '<td>
								<form method="POST" action="report_detail.php" class="col-md-2">
									<input type="hidden" name="repair_id" value="'.$meResult['repair_id'].'">
									<input type="submit" class="btn btn-info" name="submit" value="Detail" />
								</form>
							</td>';
						}
					echo '</td>
				</tr>
			';
		}
		echo '</table>';
		if($i==0)
		{
			echo "<font>There are no record</font>";
		}
    }
    else
    {
    	//ERROR
    	echo "<font>There are no record</font>";
    }

}
// include 'template_buttom.php';
?>
