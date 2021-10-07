<?php
/*running mysql using user "root" and password " "*/

$server = "localhost";
$user = "root";
$password = "";
$db = "hackup";

//try connecting to the database

$con = mysqli_connect($server,$user,$password,$db);

//CHECK THE CONNECTION


if($con){
   ?>
       <script>
            alert("succesful");
       </script>
       <?php   
}else{
    ?>
    <script>
         alert("unsuccesful");
    </script>
    <?php  
}

?>