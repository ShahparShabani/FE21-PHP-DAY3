
<?php 
require_once 'db_connect.php';

if(isset($_GET["id"])){
    echo 'in delete';
   $id = $_GET["id"]; // graphing the id value that is in the url

   $sql = "DELETE FROM dishes WHERE dishID = $id";
   if(mysqli_query($connect, $sql) == true){
       echo "Record deleted <br>
        <a href='challenge.php'>Home</a>";
   }
}

?>