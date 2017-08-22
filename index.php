<?php
//Step1
 $db = mysqli_connect('localhost','root','','hnginternship')
 or die('Error connecting to MySQL server.');
?>
<html>
 <head>

 </head>
 <body>
 <h1>PHP File to connect to MySQL</h1>
 <hr>
 <table style="width:60%">
 

   <tr>
   <h3>
   <th>Email</th>
   <th>Name</th>
    </h3>
   </tr>
   </table>
  
<?php
//Step2
$query = "SELECT * FROM users";
mysqli_query($db, $query) or die('Error querying database.');
//Step3
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
while ($row = mysqli_fetch_array($result)) {



  echo  $row['firstname'] .' '.$row['Middlename'] . ' ' . $row['lastname'].' '. ' ';
  
    echo ' '.$row['email'].' '. ' ' ;
 
   echo '<br />';
}
//Step 4
mysqli_close($db);
?>
  
</body>
</html>