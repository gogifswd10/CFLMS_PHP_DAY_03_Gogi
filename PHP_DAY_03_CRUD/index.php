<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>PHP CAR AGENCY</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
   <style type="text/css">
       .manageUser {
           width : 55%;
           margin: auto;
       }

        table {
          height: 150px;
          width: 100%;
          margin-top: 20px;
          border: 2px solid green;
       }

        body {
          background-image: url("car.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          font-family: 'Quicksand', sans-serif;

        }

        th {
          font-size: 1.8em;
          font-weight: bold;
          color: yellow;
          padding: 10px;
        }

        td {
          font-size: 1.8em;
          font-weight: bold;
          color: #79cff2;
          text-align: center;
        }

        button {
            border-radius: 10px;
            width: 150px;
            height: 50px;
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 5px;
            text-decoration: none;
            font-size: 20px;
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


   </style>

</head>
<body>

<div class ="manageUser">
   <table border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Availability</th>
               <th>Make</th>
               <th>Model</th>
               <th>Price</th>
               <th>Location</th>
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT * FROM cars";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['availability']."</td>
                       <td>" .$row['make' ]."</td>
                       <td>" .$row['model']."</td>
                       <td>" .$row['price']."</td>
                       <td>" .$row['location']."</td>
                       <td>
                           <a href='update.php?id=" .$row['id']."'><button type='button'>Edit</button></a>
                        </td>
                        <td>
                           <a href='delete.php?id=" .$row['id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>
       </tbody>
   </table>
      <a href= "create.php"><button type="button">Add Car</button></a>

</div>

</body>
</html>