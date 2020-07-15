<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM cars WHERE id = {$id}";
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete car</title>
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

          h3 {
          	font-size: 2em;
          }

          body {
          background-image: url("car.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          font-family: 'Quicksand', sans-serif;

        }
   	</style>

</head>
<body>

<h3>Do you really want to delete this car?</h3>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />
   <button type="submit">Yes, delete it!</button >
   <a href="index.php"><button type="button">No, go back!</button></a>
</form>

</body>
</html>

<?php
}
?>

