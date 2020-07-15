<!DOCTYPE html>
<html>
<head>
   <title>PHP CAR AGENCY | Add Car</title>
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
          background-image: url("car.jpg");
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

           body {
            background-image: url("car.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Quicksand', sans-serif;

        }

          legend {
            font-size: 2em;
            color: white;
          }

   </style>

</head>
<body>

<fieldset >
   <legend>Add Car</legend>

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Availability</th >
               <td><input type="text" name="availability" placeholder="add availability" /></td>
           </tr>    
           <tr>
               <th>Make</th>
               <td><input type="text" name= "make" placeholder="add the make" /></td>
           </tr>
           <tr>
               <th>Model</th>
               <td><input type="text" name="model" placeholder ="add the model" /></td>
           </tr>
           <tr>
               <th>Price</th>
               <td><input type="text" name="price" placeholder ="add price" /></td>
           </tr>
           <tr>
               <th>Location</th>
               <td><input type="text" name="location" placeholder ="add location" /></td>
           </tr>
           <tr>
               <td><button type="submit">Insert Car</button></td>
               <td><a href="index.php"><button type="button">Back</button></a></td>
           </tr>
       </table>
   </form>

</fieldset >

</body>
</html>