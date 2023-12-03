<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>


<body>
<div class="headerbar">
        <div class="vittacare">
            <h2>VittaCare</h2>
            <div class="icon"><i class="fas fa-stethoscope" style="color: #ffffff;"></i></div>
        </div>
        <ul>
            <li><a href="index3.php">Add/Delete Doctor</a></li>
            <li><a href="viewdoctor.php">View Doctors</a></li>
            <li><a href="viewpatients.php">View Patients</a></li>
            <li><a href="viewappointments.php">View Appointments</a></li>
            <li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
        </ul>
    </div>
  </div>
</div>	
	<div class="asd">Patients Information</div>
	<table class="table4">
		<tr>
		<th>Patient ID</th>
		<th>Patient Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>Blood Group</th>

		</tr>

		<?php $sql3="SELECT  * FROM  patients " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["UserID"]."</td><td>".$row3["Name"]."</td><td>".$row3["Address"]."</td><td>".$row3["ContactNumber"]."</td><td>".$row3['Email']."</td><td>".$row3['Bloodtype']."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
</body>
</html>