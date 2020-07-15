

<!DOCTYPE html>
<html>
<head>
  <title>Car Agency</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

  <style type="text/css">
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
          margin: 4px 4px;
          transition-duration: 0.4s;
          cursor: pointer;
          border-style: none;
          }

        button:hover {
          width: 250px;
          background-color: yellow; 
          color: black; 
          border: 2px solid #4CAF50;
        }

        p {
          font-size: 2em;
        }

         body {
          background-image: url("../car.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          font-family: 'Quicksand', sans-serif;

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
       $id = $_POST['id'];

       $sql = "UPDATE cars SET availability = '$available', make = '$make', model = '$model', price = '$price', location = '$location' WHERE id = {$id}" ;
       if($connect->query($sql) === TRUE) {
       header("Refresh:7; url=../index.php");
          echo "<p>Successfully updated!</p>";
           echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
           echo  "<a href='../index.php'><button type='button'>Home</button></a>";
       } else {
            echo "Error while updating record : ". $connect->error;
       }

       $connect->close();

    }

?>
</body>
</html>