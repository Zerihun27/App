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
    if(isset($_POST['register'])){
       // echo $_POST['departmentname'];
        $department_name = $_POST['departmentname'];
        $sql_insert = "INSERT INTO `department`(`department_name`) VALUES (?)";
        $stmt = $dbh->prepare($sql_insert);
        if($stmt->execute([$department_name]))    {
         echo "Registered";
        }
        else{
          //return print_r($stmt->errorinfo());
          return "Something wrong";
        }
    }
	 if(isset($_POST['Sereach'])){
      $dname= $_POST['departmentname'];
	  echo $dname;
	   ?>
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
		$sql_select = "SELECT *  FROM `department` WHERE `department_name` =? ";
		$stmt = $dbh->prepare($sql_select);
		$stmt->execute([$dname]);
       while($department = $stmt->fetch(PDO::FETCH_ASSOC))
       {
        $did = $department['d_id'];
        ?>
        <tr>
        <td><?php echo $i?></td>
        <td><?php echo $department['department_name']?></td>
        <td><a href="editdept.php?did=<?php echo $department['d_id']?>&dname=<?php echo $department['department_name']?>">Edit</a>
		|
<a href="deletedept.php?did=<?php echo $department['d_id']?>">Delete</a>
		</td>
        </tr>
 
        <?php
        $i++;
       }
       ?>
        </tbody>
    </table>
	   <?php
	   
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">

        <input type="text" placeholder="Enter department name" name='departmentname'>
        <input type="submit" value="Register" name='register'>
    </form>
	<a href='search.php'>Sereach</a>
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
        <td><a href="editdept.php?did=<?php echo $department['d_id']?>&dname=<?php echo $department['department_name']?>">Edit</a>
		|
<a href="deletedept.php?did=<?php echo $department['d_id']?>">Delete</a>
		</td>
        </tr>
 
        <?php
        $i++;
       }
       ?>
        </tbody>
    </table>
</body>
</html>