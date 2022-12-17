<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee</title>
</head>
<body>
    <?php
    require_once'DBConnection.php';

    if(isset($_POST['register']))
    {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $salary = $_POST['salary'];
    $d_id = $_POST['d_id'];
    $sql_insert ="INSERT INTO `employee`(`firstname`, `lastname`, `salary`, `d_id`)
     VALUES (?,?,?,?)";
          $stmt = $dbh->prepare($sql_insert);
          if($stmt->execute([$fname,$lname,$salary,$d_id]))    {
           echo "Registered";
          }
          else{
            //return print_r($stmt->errorinfo());
            return "Something wrong";
          }

    }
    ?>
    <form action="" method="post">

    <input type="text" name="fname" placeholder="Enter given name" required >
    <input type="text" name="lname" placeholder="Enter father name" required>
    <input type="text" name='salary' placeholder="Enter salary">
    <select name="d_id" >
    <option value="">Select department</option>
    <?php
    $sql_select = "SELECT * FROM `department` ";
    $stmt = $dbh->prepare($sql_select);
    $stmt->execute();
       while($department = $stmt->fetch(PDO::FETCH_ASSOC))
       {
        ?>
        <option value="<?php echo $department['d_id']?>"><?php echo $department['department_name']?></option>
        <?php
       }
       ?>
        </select>

        <input type="submit" name='register' value="Register">
    </form>
  
</body>
</html>