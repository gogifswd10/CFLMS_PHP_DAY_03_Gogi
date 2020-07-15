<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM cars WHERE id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title>Edit Car Data</title>
   <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

   <style type= "text/css">
       fieldset {
          margin : auto;
          margin-top: 100px;
          width: 50%;
       }

       table tr th {
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
        }


       body {
          background-image: url("car.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          font-family: 'Quicksand', sans-serif;
        }
        button {
          width: 100px;
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
          background-color: yellow; 
          color: black; 
          border: 2px solid #4CAF50;
        }

        legend {
          font-size: 2em;
        }

   </style>

</head>
<body>

<fieldset>
   <legend>Update Car Data</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Availability</th>
               <td><input type="text" name="availability" placeholder ="availability" value="<?php echo $data['availability'] ?>"  /></td>
           </tr>    
           <tr>
               <th>Make</th>
               <td><input type= "text" name="make" placeholder="Make" value ="<?php echo $data['make'] ?>" /></td>
           </tr>
           <tr>
               <th>Model</th>
               <td><input type ="text" name= "model" placeholder= "Model" value= "<?php echo $data['model'] ?>" /></td>
           </tr>
           <tr>
               <th>Price</th>
               <td><input type ="text" name= "price" placeholder= "Price" value= "<?php echo $data['price'] ?>" /></td>
           </tr>
           <tr>
               <th>Location</th>
               <td><input type ="text" name= "location" placeholder= "Location" value= "<?php echo $data['location'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <td><a href="index.php"><button type="button">Back</button></a></td>
               <td><button type= "submit">Save changes</button></td>
           </tr>
       </table>
   </form>

</fieldset >

</body >
</html >

<?php
}
?>