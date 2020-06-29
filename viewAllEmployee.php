<?php session_start();
 $users = unserialize($_SESSION['allempInfo']);
 ?> 
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<div class="body"> 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="userValidation.php"><?php emptySessionVariable();?>Home</a></li>
      <li class="active"><a href="updateEmployee.php?option=view">View</a></li>
      <li><a href="updateEmployee.php?option=insert"><?php emptySessionVariable();?>Insert</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="updateEmployee.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search" required pattern="[0-9]+">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav">
    <li><a href="updateEmployee.php?option=logout">Log Out</a></li>
    </ul>
  </div>
</nav>
<?php if(count($users)>0){?>
<div class="container">
  <h2>Employee List</h2>
  <table class="table">
    <thead>
           <tr> 
                <th>Employee Name</th> 
                <th>Employee_ID</th> 
                <th>Age</th> 
                <th>Date of Birth</th>
                <th>Father Name</th>
                <th>Email</th> 
                <th>City</th> 
                <th>Delete</th>
            </tr> 

    </thead>
    <tbody>
      <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php   // LOOP TILL END OF DATA
                
                foreach($users as $rows) {             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['NAME'];?></td> 
                <td><?php echo $rows['EMP_ID'];?></td> 
                <td><?php echo $rows['AGE'];?></td> 
                <td><?php echo $rows['DATEOFBIRTH'];?></td> 
                <td><?php echo $rows['FATHER_NAME'];?></td> 
                <td><?php echo $rows['EMAILID'];?></td> 
                <td><?php echo $rows['CITY'];?></td> 
                <td> <a href = "updateEmployee.php?option=delete&empid=<?php echo $rows['EMP_ID'];?>" onclick="return confirm('Are you sure you want to delete this item?');">X</a></td>
                 </tr> 
            <?php 
                } 
             ?> 
    </tbody>
  </table>
</div>
<?php }else{
    echo "</br></br></br></br><div class='alert alert-info'>No records found.Please make another search..</div>";

}
// Empty all session variable
function emptySessionVariable(){
    unset ($_SESSION['updateInfo']);
    unset ($_SESSION["successInfo"]);
    unset ($_SESSION["invalidEntryInfo"]);
}?>
</div>
</html>





