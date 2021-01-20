 <link rel="stylesheet" type="text/css" href="css.css">
 <?php
 if( isset($_GET['uname'])) {
   	  $uname = ($_GET['uname']);
   	}
	if( isset($_GET['fname'])) {
   	  $fname = ($_GET['fname']);
   	}

   	if( isset($_GET['lname'])) {
	   	  $lname = ($_GET['lname']);
   	}
    if( isset($_GET['email'])) {
	   	  $email = ($_GET['email']);
   	}
 if( isset($_GET['password'])) {
	   	  $password = ($_GET['password']);
   	}


	//Provide your server and database information below
	$dbhost = 'fdb29.awardspace.net';
	$dbuser = '3562961_mydb';
	$dbpass = 'W13587089578';
	$dbname = '3562961_mydb';
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(! $conn ) {
		die('Could not connect: ' . mysqli_error());
	}

	echo 'Connected successfully';

	// sql to create table


	$sql = "INSERT INTO UserInformation (FirstName, LastName, Email,Password, UserName)
	VALUES ('$fname', '$lname', '$email', '$password', '$uname')";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>