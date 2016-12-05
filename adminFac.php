<?php
	include('header.php');
?>
	<form action="confirmation.php" method="post">
	
		<ul>
			<li>
				<label >Name:</label>
				<input type="text" name="personname" placeholder="Your Name" required>
			</li>
			<li>
				<label >E-Mail:</label>
				<input type="email" name="personemail" placeholder="YourEmail@winona.edu" required>
			</li>
			<li>
			<label>Phone Number:</label>
			<input id="phonenum" type="tel" pattern="^\d{3}-\d{4}$" maxlength=9>
			</li>
			<li>
			<label>Office Number</label>
			<input id="officnum" type="text" maxlength=6>
			</ul>
			
<?php
		print"<h3>Office Hours</h3>";
    $days = Array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
    foreach($days as $day)
    { 
	  for($count=1;$count<=3; $count++)
	  {
		 
	print"<div id=\"$day$count\" >";
		if($count==1){
			print "$day <br>";
		}
		
		print "<label>Start Time</label><br><select id=\"start$day$count\" name=\"start$day$count\">";
		print "<option label=\" \" value=\"0\"> </option>";
		$miltary_time=7;
		$am=7;
        $pm=1;
        while($am <= 11)
			
        {	
				
            print "<option value=\"start$miltary_time:00\">$am:00 AM </option>";
			print "<option value=\"start$miltary_time:30\">$am:30 AM </option>";
			$miltary_time++;
            $am++;
        }
		print "<option value=\"start$miltary_time:00\">12:00 PM </option>";
		print "<option value=\"start$miltary_time:30\">12:30 PM </option>";
		$miltary_time++;
	while($pm<=6)
	{
		 print "<option value=\"start$miltary_time:00\">$pm:00 PM </option>";
		print "<option value=\"start$miltary_time:30\">$pm:30 PM </option>";
		$miltary_time++;
		$pm++;	
	}
	print"</select>";
	print"<br>";
	print "<label>End Time</label><br><select id=\"end$day$count\" name=\"end$day$count\">";
	print "<option label=\" \" value=\"0\"> </option>";
		$miltary_time=7;
		$am=7;
        $pm=1;
        while($am <= 11)	
        {	
				
            print "<option value=\"end$miltary_time:00\">$am:00 AM </option>";
			print "<option value=\"end$miltary_time:30\">$am:30 AM </option>";
			$miltary_time++;
            $am++;
        }
		print "<option value=\"end$miltary_time\">12:00 PM </option>";
		print "<option value=\"end$miltary_time:30\">12:30 PM </option>";
		$miltary_time++;
	while($pm<=6)
	{
		 print "<option value=\"end$miltary_time:00\">$pm:00 PM </option>";
		print "<option value=\"end$miltary_time:30\">$pm:30 PM </option>";
		$miltary_time++;
		$pm++;	
		
	}
	print"</select><br>";
	if($count<3){
	print"<button type=\"button\" id=\"button$day$count\">Add Time</button>";
	}
	if($count>1){
		print"<button type=\"button\" id=\"clear$day$count\">Remove time</button>";
	}

	print"</div>";
    print"<br>";
	  }//end of for loop

	
    }
?>
<button type="submit" id="submit">Submit</button>
	</form>
 
 </body>
</html>
