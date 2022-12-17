<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
</head>
<body>
    <?php
    require_once'DBConnection.php';
    if(isset($_GET['did'])){
     $did= $_GET['did'];
        $sql_delete= "DELETE FROM `department` WHERE d_id = ?";
        $stmt = $dbh->prepare($sql_delete);
        if($stmt->execute([$did]))    {
         header('location:department.php');
        }
        else{
          //return print_r($stmt->errorinfo());
          return "Something wrong";
        }
    }
    ?>
    
</body>
</html>