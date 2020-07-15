
<!DOCTYPE html>
<html>
<head>
   <title>PHP CAR AGENCY CREATE</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

   <style type= "text/css">
       fieldset {
          margin: auto;
          margin-top: 100px;
          width: 50% ;
       }

       table tr th  {
          padding-top: 20px;
       }

       th {
          font-size: 1.5em;
          font-weight: bold;
          color: yellow ;
        }

        td {
          font-weight: bold;
          color: #00DF38;
        }

        input {
          height: 30px;
          margin-left: 10px;
          border: 2px solid green;
          text-align: center;
        }

       body {
          background-image: url("../car.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          font-family: 'Quicksand', sans-serif;

        }

        button {
            width: 200px;
            height: 50px;
            border-radius: 10px;
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 5px;
            text-decoration: none;
            font-size: 16px;
            margin: 20px 4px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-style: none;
          }

          button:hover {
            width: 230px;
            background-color: yellow; 
            color: black; 
            border: 2px solid #4CAF50;
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
   $available = $_POST['availability'];
   $make = $_POST['make'];
   $model = $_POST[ 'model'];
   $price = $_POST[ 'price'];
   $location = $_POST[ 'location'];

   $sql = "INSERT INTO cars (availability, make, model, price, location) VALUES ('$available', '$make', ' $model', '$price', '$location')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}
?>
</body>
</html>