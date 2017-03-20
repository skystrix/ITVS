    <?php 
               session_start();     
                //connect to database
                $db=mysqli_connect("localhost","root","", "itvs");
                if(isset($_POST['Register'])){
                    session_start();
                     $order_id = mysql_real_escape_string($_POST['order_id']);
                     $name = mysql_real_escape_string($_POST['name']);
                     $email_id = mysql_real_escape_string($_POST['email_id']);
                     $password = mysql_real_escape_string($_POST['password']);
                     $password2 = mysql_real_escape_string($_POST['password2']);
                     $mobile_number = mysql_real_escape_string($_POST['mobile_number']);
                     $check = mysql_real_escape_string($_POST['check']);
                    
                    if ($password == $password2){
                        // create user
                        $password = md5($password); // security purpose
                        $sql ="INSERT INTO reg(order_id, name, email_id, password, mobile_number, check) VALUES('$order_id','$name','email_id','$password','$mobile_number', 'check');
                        mysqli_quary($db, $sql);
                        $_SESSION['message']= "you are logged in";
                        $_SESSION['name'] = $name;
                        header("location: index.php");
                        
                        
                    } 
                    
                    else
                    {
                    
                   
                        $_SESSION['message'] = "The two password do not match";
                    }
                    
                }
                
                ?>  
            