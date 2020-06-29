<?php session_start();?>
<?php
    include_once ('connection.php');
    include ('userBean.php');
   
    $empobj = new UpdateEmployee();
    $res = $_POST["update"];
    if(strpos($res, "Update Data") !== false){
        $empobj->updateData($conn);
    }
    
    $res = $_GET["option"];
    $serchval = $_GET["search"];
    if(strcmp($serchval,"")!=0){
        $res = "view";
    }
    if(strpos($res, "view") !== false || strpos($res, "delete") !== false){
        // Only if delete
        if(strpos($res, "delete") !== false) {
           $tempempid = $_GET["empid"];
           $empobj->deleteEmployee($conn,$tempempid);
        }
          // End of calling delete  
           $resultset = $empobj->viewAllEmployee($conn);
           // setting to a session and then retrieve
           $_SESSION['allempInfo'] = serialize($resultset);
           echo "<script type='text/javascript'>location.href = 'viewAllEmployee.php';</script>";
    }else if(strpos($res, "insert") !== false){
        //echo "Inside insert option functionality";
        if(strcmp($_POST["empid"], "") != 0){
            
            $empobj->insertData($conn);
            
        }
        
        //find data from database
        echo "<script type='text/javascript'>location.href = 'viewSingleEmployee.php';</script>";
    }else if(strpos($res, "logout") !== false){
        // empty all session variable
        emptyAllSessionVariable();
        echo "<script type='text/javascript'>location.href = 'welcomeUser.html';</script>";
    }
    
    
    class UpdateEmployee
    {
        // Update Data of Employee
        public function updateData($conn)
        {   
       
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // setting message in a session
                $updatemsg =" Your record has been updated successfully ....";
                $info = unserialize($_SESSION['userInfo']);
                $empid = $info->getEmp_id();
                $age = $this->testValidation($_POST["age"]);
                $dob = $this->testValidation($_POST["dob"]);
                $time = strtotime($dob);
                $newformat = date('Y-m-d',$time);
                $fname = $this->testValidation($_POST["fname"]);
                $email = $this->testValidation($_POST["email"]);
                $city = $this->testValidation($_POST["city"]);
                // Update details to db
                $stmt = $conn->prepare("UPDATE EMPLYOEE_DETAILSS SET AGE =:age,DATEOFBIRTH =:dob, FATHER_NAME =:fname, EMAILID =:email , CITY =:city WHERE EMP_ID =:empid");
                $stmt->bindValue(":age", (int)$age, PDO::PARAM_STR);
                $stmt->bindValue(":dob", $newformat, PDO::PARAM_STR);
                $stmt->bindValue(":fname", $fname, PDO::PARAM_STR);
                $stmt->bindValue(":email", $email, PDO::PARAM_STR);
                $stmt->bindValue(":city", $city, PDO::PARAM_STR);
                $stmt->bindValue(":empid", (int) $empid, PDO::PARAM_STR);
                $stmt->execute();
                // Setting in a session and redirect to welcome page
                $_SESSION['updateInfo'] = $updatemsg;
                echo "<script type='text/javascript'>location.href = 'userValidation.php';</script>";
 
            }
        }
        // View All Employee
        public function viewAllEmployee($conn){
            $tempempid = $this->testValidation($_GET["search"]);
            $addquery = "";
            $insempid = $this->testValidation($_POST["empid"]);
            if(strcmp($tempempid,"") !=0 || strcmp($insempid,"") !=0){
                if(strcmp($insempid,"") !=0)
                    $tempempid = $insempid;
                $addquery = " WHERE EMP_ID = ".(int)$tempempid;
            }
            $stmt = $conn->prepare("SELECT * FROM EMPLYOEE_DETAILSS ".$addquery);
            $stmt->execute();
            $users = $stmt->fetchAll();
            return $users;
        }
        // Delete an Employee
        public function deleteEmployee($conn,$tempempid){
            $stmt = $conn->prepare("DELETE FROM EMPLYOEE_DETAILSS WHERE EMP_ID =:empid");
            $stmt->bindValue(":empid", (int)$tempempid, PDO::PARAM_STR);
            $stmt->execute();
        }
        // Update Data of Employee
        public function insertData($conn) { 
            //$msg = unserialize($_SESSION['updateInfo']);
            
            $updatemsg = "Yours record has been inserted successfully ...";
            $invalidEntry = "There was issue in inserting record.Employee Id already exist";
            // Check for integrity constraint for PK
            $usr = $this->viewAllEmployee($conn);
            if(count($usr)>0){
                $_SESSION['invalidEntryInfo'] = $invalidEntry;
                return;
            }
            
            $usname = $this->testValidation($_POST["username"]);
            $empid = $this->testValidation($_POST["empid"]);
            $age = $this->testValidation($_POST["age"]);
            $dob = $this->testValidation($_POST["dob"]);
            $time = strtotime($dob);
            $newformat = date('Y-m-d',$time);
            
            $fname = $this->testValidation($_POST["fname"]);
            $email = $this->testValidation($_POST["email"]);
            $city = $this->testValidation($_POST["city"]);
            // Update details to db
            $stmt = $conn->prepare("INSERT INTO EMPLYOEE_DETAILSS (NAME, EMP_ID, AGE, DATEOFBIRTH,FATHER_NAME, EMAILID, CITY) VALUES(:usname,:empid, :age,:dob, :fname,:email,:city)");
            $stmt->bindValue(":usname",$usname, PDO::PARAM_STR);
            $stmt->bindValue(":empid",(int)$empid, PDO::PARAM_STR);
            $stmt->bindValue(":age", (int)$age, PDO::PARAM_STR);
            $stmt->bindValue(":dob", $newformat, PDO::PARAM_STR);
            $stmt->bindValue(":fname", $fname, PDO::PARAM_STR);
            $stmt->bindValue(":email", $email, PDO::PARAM_STR);
            $stmt->bindValue(":city", $city, PDO::PARAM_STR);
            // Setting in a session and redirect to welcome page
            if($stmt->execute())
                $_SESSION['successInfo'] = $updatemsg;
                
                
        }
        public function validateEmployee($conn){
            // Pulling data from data base and do validation
            $stmt = $conn->prepare("SELECT * FROM EMPLYOEE_DETAILSS WHERE NAME = '".$usname."' AND EMP_ID = ".$pwd);
            $stmt->execute();
            $users = $stmt->fetchAll();
            if($users>0){
                
                
            }else{
                $updatemsg = "Please enter the correct username and password";
                // Setting in a session and redirect to welcome page
                $_SESSION['loginInfo'] = $updatemsg;
            }
        }
        function testValidation($data){  
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }
    // Empty all session variable
    function emptyAllSessionVariable(){
        session_unset();
        session_destroy();
    }
?>
 