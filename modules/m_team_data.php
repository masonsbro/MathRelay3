<!-- Content for Team Data tab -->
<?php
	$resource = db_Query("SELECT team_id,team_nickname,password,points,rank_freetime,last_checkin_time,last_point FROM team_data;");
	$teamData = array();
	while($teamRow = mysqli_fetch_row($resource)){
		$teamData[] = $teamRow;
	}
	
	print "<table id='teamDataTable'>";
	print "<tr><th>Team ID</th><th>Team Nickname</th><th>Password</th><th>Points</th><th>Rank at Freetime</th><th>Last Point Time</th><th>Last Check-in Time</th></tr>";
	for($i=0;$i<count($teamData);$i++){
		print "<tr>";
		for($j=0;$j<count($teamData[$i]);$j++){
			print "<td>" . $teamData[$i][$j] . "</td>";
		}
		print "</tr>";
	}
	print "</table>";
?>
<p> <button id="reset_button">RESET</button> Push RESET to clear all points, change passwords, and change the number of teams. </p>
