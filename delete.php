<?php
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  echo "string";
  // connect to mongodb
   $con = new MongoClient();
  
  //  Select Database
  $db = $con->occasions;
  
  //  Select Collection
  $collection = $db->venue;
    
  $qry = array("_id" => new MongoID($id));
  $result = $collection->findOne($qry);

  $db->venue->remove($qry);  
  header("Location:updatelist.php");                
}
?>