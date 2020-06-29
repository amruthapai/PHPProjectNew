<?php session_start();?><html>
<body>
<head> 
	<meta charset="UTF-8"> 
	<link rel="stylesheet" href= 
     "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<link rel="stylesheet" href="index.css"> 
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>
	<title>Welcome Page</title> 
</head> 
<div class="body"> 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="userValidation.php" >Home</a></li>
      <li><a href="updateEmployee.php?option=view"><?php emptySessionVariable();?>View</a></li>
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


<?php
include_once('connection.php'); 
include('userBean.php');
$usname = $pwd = $info = "";
if($_SERVER["REQUEST_METHOD"]=="POST" || $_SERVER["REQUEST_METHOD"]=="GET"){
    $usname = testValidation($_POST["username"]);
    $pwd = testValidation($_POST["pwd"]);
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $_SESSION['updateInfo'] = "";
        $_SESSION['userInfo'] = "";
        $_SESSION['allempInfo'] = "";
        $_SESSION['successInfo'] = "";
        $_SESSION['invalidEntryInfo'] = "";
    }else{
        $info = unserialize($_SESSION['userInfo']);
        $usname = $info->getName();
        $pwd = (int)$info->getEmp_id();
       // echo "Inside session variable";
    }
  
    // Pulling data from data base and do validation
    $stmt = $conn->prepare("SELECT * FROM EMPLYOEE_DETAILSS WHERE NAME = '".$usname."' AND EMP_ID = ".(int)$pwd);
    $stmt->execute();
    $users = $stmt->fetchAll();
    $flag = "fail";
    foreach($users as $user) {
        if(($user['NAME'] == $usname) &&
            ($user['EMP_ID'] == $pwd)) {
                $flag = "successlogin";
                // Redirect along with messages
                // Set user details to a bean
                 $bean = new LoginBean();
                 $bean->setName($user['NAME']);
                 $bean->setEmp_id($user['EMP_ID']);
                 $bean->setAge($user['AGE']);
                 $bean->setDob($user['DATEOFBIRTH']);
                 $bean->setFathername($user['FATHER_NAME']);
                 $bean->setEmail($user['EMAILID']);
                 $bean->setCity($user['CITY']);
                 // Setting in a session and redirect to welcome page
                 $_SESSION['userInfo'] = serialize($bean);
                 $info = unserialize($_SESSION['userInfo']);
                 
                 echo "<form class='form-horizontal' action='updateEmployee.php' method='post'>";
                 echo " <div class='form-group'>
                 <label class='control-label col-sm-4'> EMPLOYEE NAME</label>
                    <div class='col-sm-3'>
                 <input type='text'
                     name='username' value='".$info->getName()."' class='form-control' required pattern='[A-Za-z ]+' disabled/>
                        </div>
                     </div>";
                 echo "<div class='form-group'>
                 <label class='control-label col-sm-4'> EMPLOYEE ID </label>
                 <div class='col-sm-3'>
                 <input type='text'
                     name='empid' value='".$info->getEmp_id()."' class='form-control' required pattern='[0-9]+' disabled/>
                     </div></div>";
                 echo " <div class='form-group'>
                 <label class='control-label col-sm-4'>AGE</label>
                 <div class='col-sm-3'>
                 <input type='text'
                     name='age' value='".$info->getAge()."' class='form-control' required pattern='[0-9]+'/>
                     </div></div>";
                 echo "<div class='form-group'>
                 <label class='control-label col-sm-4'>DATE OF BIRTH</label>
                 <div class='col-sm-3'>
                 <input type='text'
                     name='dob' id='date1' alt='date' class='IP_calendar' title='d/m/Y' value='".$info->getDob()."' class='form-control' required/>
                     </div></div>";
                 echo "<div class='form-group'>
                 <label class='control-label col-sm-4'>FATHER NAME</label>
                 <div class='col-sm-3'>
                 <input type='text'
                     name='fname' value='".$info->getFathername()."' class='form-control' required pattern='[A-Za-z ]+'/>
                     </div></div>";
                 echo "<div class='form-group'>
                 <label class='control-label col-sm-4'>Email</label>
                 <div class='col-sm-3'>
                 <input type='email'
                     name='email' value='".$info->getEmail()."'class='form-control' required/>
                     </div></div>";
                 echo "<div class='form-group'>
                 <label class='control-label col-sm-4'>City</label>
                 <div class='col-sm-3'>
                  <input type='text'
                     name='city' value='".$info->getCity()."' class='form-control' required pattern='[A-Za-z ]+'/>
                     </div></div>";
                 // UPDATE VALUE OF EMPLOYEE
                 echo "<div class='form-group'>
                 <label class='control-label col-sm-4'> </label>
                 <div class='col-sm-3'>
                 <input class='button' type='submit'
                     name='update' value='Update Data' class='btn btn-primary'/>
                     </div></div></form>";
                 echo "</br></br></br></br>";
                 if(strpos($_SESSION['updateInfo'],"success") !== false)
                 echo "<div class='alert alert-success'>".$_SESSION['updateInfo']."</div>";
                // VIEW ALL RECORDS 
            }
               
            
            
    }
    if(strcmp($flag, "fail") == 0){
        session_unset();
        session_destroy();
        echo "<script type='text/javascript'>alert('Please enter the correct information.Either your username or password is incorrect..');location.href = 'welcomeUser.html';</script>";
    }
    
}
function testValidation($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// Empty all session variable
function emptySessionVariable(){
    unset ($_SESSION["allempInfo"]);
    unset ($_SESSION["successInfo"]);
    unset ($_SESSION["invalidEntryInfo"]);
}
?>
</div>
</body>
</html>