<?php session_start();
include('userBean.php');
$info = new LoginBean();
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
  <script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>
</head>
<div class="body"> 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="userValidation.php"><?php emptySessionVariable();?>Home</a></li>
      <li><a href="updateEmployee.php?option=view"><?php emptySessionVariable();?>View</a></li>
      <li class="active"><a href="updateEmployee.php?option=insert">Insert</a></li>
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

<form class='form-horizontal' action='updateEmployee.php?option=insert' method='post'>
                 <?php if(strpos($info->getOption(),"") !== false){
                            echo "Option is for create";
                            echo "<input type='hidden' name='option' value='insert'/>";
                 } else {
                            //echo "Option is for Update";
                            echo "<input type='hidden' name='option' value='update'/>";
                 }
                     ?>
                 <div class='form-group'>
                 <label class='control-label col-sm-4'> EMPLOYEE NAME</label>
                    <div class='col-sm-3'>
                 <input type='text'
                     name='username' value='<?php echo $info->getName(); ?>' required class='form-control' required pattern='[A-Za-z ]+'/>
                        </div>
                     </div>
                 <div class='form-group'>
                 <label class='control-label col-sm-4'> EMPLOYEE ID </label>
                 <div class='col-sm-3'>
                 <input type='text'
                     name='empid' value='<?php echo $info->getEmp_id(); ?>' class='form-control' required onclick="myFunction()" pattern="[0-9]+"/>
                     </div></div>
                 <div class='form-group'>
                 <label class='control-label col-sm-4'>AGE</label>
                 <div class='col-sm-3'>
                 <input type='text'
                     name='age' id="age" value='<?php echo $info->getAge(); ?>' class='form-control'required pattern="[0-9]+"/>
                     </div></div>
                 <div class='form-group'>
                 <label class='control-label col-sm-4'>DATE OF BIRTH</label>
                 <div class='col-sm-3'>
                 <input type='text'
                     name='dob' id="date1" alt="date" class="IP_calendar" title="d/m/Y" value='<?php echo $info->getDob(); ?>' class='form-control' required/>
                     </div></div>
                 <div class='form-group'>
                 <label class='control-label col-sm-4'>FATHER NAME</label>
                 <div class='col-sm-3'>
                 <input type='text'
                     name='fname' value='<?php echo $info->getFathername(); ?>' class='form-control'required pattern='[A-Za-z ]+'/>
                     </div></div>
                 <div class='form-group'>
                 <label class='control-label col-sm-4'>Email</label>
                 <div class='col-sm-3'>
                 <input type='email'
                     name='email' value='<?php echo $info->getEmail(); ?>'class='form-control'required />
                     </div></div>
                 <div class='form-group'>
                 <label class='control-label col-sm-4'>City</label>
                 <div class='col-sm-3'>
                  <input type='text'
                     name='city' value='<?php echo $info->getCity(); ?>' class='form-control'required pattern='[A-Za-z ]+'/>
                     </div></div>
                 <div class='form-group'>
                 <label class='control-label col-sm-4'> </label>
                 <div class='col-sm-3'>
                 <input class='btn btn-info' type='submit'
                     name='create' value='Submit Data' class='btn btn-primary'/>
                     </div></div></form>
                 </br></br></br></br><?php
                 $msg = $_SESSION['successInfo'];
                 $invmsg = $_SESSION['invalidEntryInfo'];
                 if(strpos($msg, "success") !== false)
                        echo "<div class='alert alert-success'><strong><b>Success!</b></strong>".$_SESSION['successInfo']."</div>";
                 else if(strpos($invmsg, "issue") !== false)
                        echo "<div class='alert alert-warning'><strong><b>Warning!</b></strong>".$_SESSION['invalidEntryInfo']."</div>";
                        // Empty all session variable
                        function emptySessionVariable(){
                            unset ($_SESSION["allempInfo"]);
                            unset ($_SESSION['updateInfo']);

                        }
                 ?>
  
</div>
</html>