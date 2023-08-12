<?php

    $name=$email=$num=$order='';
    $nameErr=$mailErr=$phoneErr=$orderErr='';
    $isName=$isEmail=$isPhnNo=$isorder=FALSE;


        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if(isset($_POST['submit'])){
                validateInput();
                insertorderToDB();
            }
        }
    
        function insertorderToDB(){
            if($GLOBALS['isName'] && $GLOBALS['isEmail'] && $GLOBALS['isPhnNo'] && $GLOBALS['isorder']){
            $conn = new mysqli("localhost:3306", "root", "root", "shopdatabase");
        
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
         
            $stmt = $conn->prepare ("INSERT INTO orders (username, email, phonenumber, order) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $GLOBALS['name'], $GLOBALS['email'], $GLOBALS['num'], $GLOBALS['order']);

            $stmt->execute();
        
            echo '<script>alert("New record created successfully")</script>';
        
            $stmt->close();
            $conn->close();
            }

          }
    
    
    function validateInput(){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $GLOBALS['name'] = test_input($_POST["username"]);
            $GLOBALS['email'] = test_input($_POST["email"]);
            $GLOBALS['num'] = test_input($_POST["number"]);
            $GLOBALS['order'] = test_input($_POST["order"]);


        if(empty($GLOBALS['name'])){
            $GLOBALS['nameErr']='Username is required';
            $GLOBALS['isName']=FALSE;
        }else{ 
            $GLOBALS['isName']=TRUE;
        }

        if(empty($GLOBALS['email'])){
            $GLOBALS['mailErr']='Email is required';
            $GLOBALS['isEmail']=FALSE;
        }elseif (!filter_var($GLOBALS['email'], FILTER_VALIDATE_EMAIL)) { //https://alexwebdevelop.com/php-email-validation/#:~:text=You%20can%20validate%20an%20email,string%20contains%20a%20valid%20address.

            $GLOBALS['mailErr']=' enter a valid email address.';
            $GLOBALS['isEmail']=FALSE;
            
        }else{ 
            $GLOBALS['isEmail']=TRUE; 
        }

        if(empty($GLOBALS['num'])){
            $GLOBALS['phoneErr']='Phone number is required';
            $GLOBALS['isPhnNo']=FALSE;
        }elseif(!preg_match('/^[0-9]{10}+$/', $GLOBALS['num'])) {
            $GLOBALS['phoneErr']="Invalid Phone Number";
            $GLOBALS['isPhnNo']=FALSE;

        }else{ 
            $GLOBALS['isPhnNo']=TRUE; 
        }

        if(empty($GLOBALS['order'])){
            $GLOBALS['orderErr']='Please drop a masssage';
            $GLOBALS['isorder']=FALSE;
        }else{ 
            $GLOBALS['isorder']=TRUE; 
        }
        
    }
    }


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
      return $data;
      }

?>