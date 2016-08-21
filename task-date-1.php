<?php
	$errors=[];
	$message = "";
	if(!empty($_POST)){
		
		$day = isset($_POST["day"])?$_POST["day"]:"";
		$month = isset($_POST["month"])?$_POST["month"]:"";
		$year = isset($_POST["year"])?$_POST["year"]:"";
		
		if($day=="" || !is_numeric($day)){
			$errors[]="invalid days";
		}
		
		if($month=="" || !is_numeric($month)){
			$errors[]="invalid month ";
		}
		
		if($year=="" || !is_numeric($year)){
			$errors[]="invalid year";
		}
				
		if(empty($errors)){
			$date =  checkdate ( $month ,  $day ,  $year );
			if($date){
				$message = $day."-".$month."-".$year;
			}else $message = "incorrect date";
		}
		
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>

</head>
<body>
	
	<p><?=$message ?>
	<form action="" method="post">
		<div>
			<label>Month</label>
			<input type="text" name="month">
		</div>
		<div>
			<label>Day</label>
			<input type="text" name="day">
		</div>
		<div>
			<label>Year</label>
			<input type="text" name="year">
		</div>
		<div>
			
			<input type="submit">
		</div>
	</form>
		
	
</body>

</html>