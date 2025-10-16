<?php 
    // MAIL
    require '../api/PHPMailer-master/src/PHPMailer.php';
    require '../api/PHPMailer-master/src/SMTP.php';
    require '../api/PHPMailer-master/src/Exception.php'; 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Start of Class
    class classSendVerificationCodeOnEmail{
        function sendSixDigitCodeOnEmailF(){
            // PAGE Connection on Database 
            require_once("connectionHF.php");
            // PAGE Session email
            require_once("./signupMF.php");
            
            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();
            
            // Set the session
            if(isset($_SESSION["signUpUserEmail"])){
                $signUpUserEmail = $_SESSION['signUpUserEmail'];

                $query_get_email_code = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_verification_tbl WHERE uvt_email = '$signUpUserEmail' ");
                while($row = mysqli_fetch_assoc($query_get_email_code)){
                    $db_uvt_email_code = $row["uvt_email_code"];

                    $mail = new PHPMailer();

                    //Server settings
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'systemdevx@gmail.com';                     //SMTP username
                    $mail->Password   = 'tikamzpgjesfvpgz';                               //SMTP password
                    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('shawngomo');
                    $mail->addAddress($signUpUserEmail);              //Add a recipient

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Verification';

                    $mail->Body = " <strong> $db_uvt_email_code </strong> <br><br>";
                    $mail->AltBody =  " <strong> $db_uvt_email_code </strong> <br><br>";

                    if($mail->send()){
                        echo "<script>window.location.href='email-verification.php';</script>";
                    }else{
                        echo '
                            <!-- Start of Error Container -->
                            <div id="errorContainer" class="error-container-sign-up ney-flex ney-flex-fd-c-ai-c-jc-c" style="width: 320px;">
                                <div id="closeBtnError" class="close-btn-container-signup">
                                    <h4>X</h4>
                                </div>
                                <div>
                                    <span>Failed to send Code! Try again</span> <br>
                                </div>
                            </div>  <!-- End of Error Container -->
                        ';
                    }
                }
            // Throw an error if the signup email is not set for preventing access the verification page
            }else if(!isset($_SESSION["signUpUserEmail"])){
                die("error");
            }
        }
    } // End of Class
?>



