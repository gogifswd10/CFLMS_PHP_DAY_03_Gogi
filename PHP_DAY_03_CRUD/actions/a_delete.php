

<!DOCTYPE html>
<html>
<head>
	<title>Car agency</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

    <style type="text/css">
    	button {
            border-radius: 10px;
            width: 150px;
            height: 50px;
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 5px;
            text-decoration: none;
            font-size: 16px;
            margin: 10px 10px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-style: none;
          }

          button:hover {
            background-color: yellow; 
            color: black; 
            border: 2px solid #4CAF50;
          }

          body {
          background-image: url("../car.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          font-family: 'Quicksand', sans-serif;

        }

        p {
        	font-size: 2em;
        }
    </style>
</head>
<body>
<?php 

		require_once 'db_connect.php';

		if ($_POST) {
		   $id = $_POST['id'];

		   $sql = "DELETE FROM cars WHERE id = {$id}";
		    if($connect->query($sql) === TRUE) {
		       echo "<p>Successfully deleted!!</p>" ;
		       echo "<a href='../index.php'><button type='button'>Back</button></a>";
		   } else {
		       echo "Error updating record : " . $connect->error;
		   }

		   $connect->close();
		}

?>
</body>
</html>