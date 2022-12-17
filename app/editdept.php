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
    if(isset($_POST['update'])){
       // echo $_POST['departmentname'];
        $department_name = $_POST['departmentname'];
		$did = $_POST['did'];
		//echo $department_name."<br>";
        //echo $did;
        $sql_insert = "UPDATE `department` SET `department_name`=? WHERE d_id =?";
        $stmt = $dbh->prepare($sql_insert);
        if($stmt->execute([$department_name,$did]))    {
         echo "Updated";
        }
        else{
          //return print_r($stmt->errorinfo());
          return "Something wrong";
        }
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">

        <input type="text" placeholder="Enter department name" name='departmentname' value="<?php echo $_GET['dname']?>">
		<input type="hidden" name='did' value="<?php echo $_GET['did']?>">
        <input type="submit" value="update" name='update'>
    </form>
    <table border=1>
        <thead>
            <tr>
                <th>NO</th>
                <th>Departement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $i=1;
    $sql_select = "SELECT * FROM `department` ";
    $stmt = $dbh->prepare($sql_select);
    $stmt->execute();
       while($department = $stmt->fetch(PDO::FETCH_ASSOC))
       {
        $did = $department['d_id'];
        ?>
        <tr>
        <td><?php echo $i?></td>
        <td><?php echo $department['department_name']?></td>
        <td><a href="editdept.php?did=<?php echo $department['d_id']?>">Edit</a></td>
        </tr>
 
        <?php
        $i++;
       }
       ?>
        </tbody>
    </table>
</body>
</html>