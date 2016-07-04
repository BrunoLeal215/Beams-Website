 

<!DOCTYPE html>
<html>
<head>
    <?php include_once('Template/Head.php'); ?>
   
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="Scripts/jquery.simple-dtpicker.js"></script>
    <link type="text/css" href="Content/jquery.simple-dtpicker.css" rel="stylesheet" />
    
    <script type="text/javascript" >
    $(function(){
            $('*[name=date]').appendDtpicker({
            "autodateOnStart": false
            });
    });
    </script>
</head>
<body class="page-template-contact full-content wide red header-absolute menu-hover-edge">
    
    <?php $page = 'contact'; include_once('Template/TopMenu.php'); ?>
    
<!--MAIN PAGE-->

<section id="featured-title" class="featured-title row-background row-parallax img-wrapper">
    <div class="strip-bg"></div>
    <div class="container">
        <div class="row">
            <div class="title">
                <div class="fitsc-space"></div>
                <div class="fitsc-space"></div>
                <h1>Contact</h1>
                <h6>Get in touch with us through different ways</h6>
            </div>
        </div>
    </div>
</section>

<main id="main" class="main contact-main clearfix">
    <div class="container-fluid">
        <div class="row">
            <section id="content" class="site-content hfeed site-content col-xs-12 col-sm-12 col-md-12" role="main">
                <div class="ct-contact-info">
                    <ul class="container">
                        <li class="ct-address col-md-4 col-xs-12">
                            <span class="ct-address-1"><a href="http://www.google.com/maps?q=U2/117 Dundas Road High Wycombe WA 6057">U2/117 Dundas Road</a></span>
                            <span class="ct-address-2">PO Box 2373 High Wycombe WA 6057</span> <i class="fa fa-map-marker"></i>
                        </li>
                        <li class="ct-phone-email col-md-4 col-xs-12">
                            <span class="ct-phone"><a href="tel:94547760">(08) 9454 7760</a></span>
                            <span class="ct-email">enquiries@beamsbuild.com.au </span> <i class="fa fa-phone"></i>
                        </li>
                        <li class="ct-opening-time col-md-4 col-xs-12">
                            <span class="ct-day">Monday to Friday</span>
                            <span class="ct-time">from 9:00 am to 4:30 pm AWST</span> <i class="fa fa-clock-o"></i>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>

                <!-- end .ct-contact-info -->
                <div class="fitsc-space"></div>
                <div class="ct-form container center_text">
                    <div class="ct-cf">
                        <div lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            
                        </div>
                    </div>
                </div>
                
            </section>
        </div></div>
                
                <?php
                    // Initialize variables to null.
                    $nameError ="";
                    $companyError ="";
                    $emailError ="";
                    $mobileError ="";
                    $enquiryError = "";
                    $dateError="";
                    
                    $date="";
                    $name ="";
                    $company ="";
                    $email ="";
                    $mobile ="";
                    $enquiry = "";
                    $message = "";
                    $option = "";
                    
                    $flag = true;
                    // On submitting form below function will execute.
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $message = $_POST["message"];
                        $option=$_POST["EnquiryId"];
                        $date = $_POST["date"];
                        
                        if($_POST["EnquiryId"] == "Select Enquiry")
                        {
                           $enquiryError = "* Select enquiry";
                           if($flag == true){$flag = false;}
                        }
                        if(empty($_POST["date"]) && $_POST["EnquiryId"]=="Book A Demo")
                        {
                           $dateError = "* Date and Time are required.";
                           if($flag == true){$flag = false;}
                        }

                        if (empty($_POST["name"])) {
                            $nameError = "* Name is required";
                            if($flag == true){$flag = false;}
                        } 
                        else {
                            $name = test_input($_POST["name"]);
                        // check name only contains letters and whitespace
                            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                            $nameError = "* Only letters and white space allowed";
                            if($flag == true){$flag = false;}
                            }
                        }

                        if (empty($_POST["company"])) {
                            $companyError = "* Companys name is required";
                            if($flag == true){$flag = false;}
                        } 
                        else {
                            $company = test_input($_POST["company"]);
                        // check name only contains letters and whitespace
                            if (!preg_match("/^[a-zA-Z ]*$/",$company)) {
                            $companyError = "* Only letters and white space allowed";
                            if($flag == true){$flag = false;}
                            }
                        }

                        if (empty($_POST["email"])) {
                        $emailError = "* Email is required";
                        if($flag == true){$flag = false;}
                        } else {
                            $email = test_input($_POST["email"]);
                            // check if e-mail address syntax is valid or not
                            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
                            $emailError = "* Invalid email format";
                            if($flag == true){$flag = false;}
                            }
                        }

                        if (empty($_POST["mobile"])) {
                        $mobileError = "* Mobile is required";
                        if($flag == true){$flag = false;}
                        } else {
                            $mobile = test_input($_POST["mobile"]);
//                            if(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $mobile)) {
                            if(!is_numeric($mobile)) {
                            $mobileError = "* Invalid mobile number";
                            if($flag == true){$flag = false;}
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
                
                <script>
                    function enquiry(option) {
                        if(option == 'Book A Demo')
                            {
                                document.getElementById('date').style.display = 'block';
                                document.getElementById('dateSpan').style.display = 'block';
                            }else 
                            {
                                document.getElementById('date').style.display = 'none';
                                document.getElementById('dateSpan').style.display = 'none';
                            }
                            if(option == 'Download Trial')
                            {
                                document.getElementById('download').style.display = 'block';
                                document.getElementById('purchaseSpan').style.display = 'block';
                            }else 
                            {
                                document.getElementById('download').style.display = 'none';
                                document.getElementById('purchaseSpan').style.display = 'none';
                            }
                            if(option == 'How to purchase')
                            {
                                document.getElementById('purchaseid').style.display = 'block';
                                
                            }else 
                            {
                                document.getElementById('purchaseid').style.display = 'none';
                                
                            }
                    }
                    
                </script>
                  
    <div class="container">
        <div class="row">
            <section id="content" class="site-content hfeed site-content col-xs-12 col-sm-12 col-md-12" role="main">
            <div class="fitsc-row ">
                <div class="row">
                    <h5 class="fitsc-heading fitsc-heading-default fitsc-font-medium clearfix"><span>CONTACT US</span></h5>
                    <div class="fitsc-column col-md-12 col-sm-12 col-xs-12 text-center">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <p>
                                <select id="EnquiryId" name="EnquiryId" style="width: 350px;height: 40px" onchange="enquiry(this.value);">
                                    <option>Select Enquiry</option>
                                    <?php
                                        $enquiry = $_GET['enquiry'];
                                        $training= $_GET['training'];
                                        $support= $_GET['support'];
                                        $datepicker = "";
                                        $purchaseYesNo ="";
                                        $purchaseQuestion = "";
                                        
                                        if ($enquiry == "bookademo" || $option == "Book A Demo")
                                        {   
                                            echo '<option selected="selected">Book A Demo</option>';
                                            $datepicker = "<p><input type='text' placeholder='Select a date and time (required)' name='date' id='date' size='40px' style='display: block'/><span class='your-name' id='dateSpan' style='display: block'><font color='red'>".$dateError."</font></span></p>";
                                        }
                                        else
                                        {
                                            echo '<option>Book A Demo</option>';  
                                            $datepicker = "<p><input type='text' placeholder='Select a date and time (required)' name='date' id='date' size='40px' style='display: none'/><span class='your-name' id='dateSpan' style='display: none'><font color='red'>".$dateError."</font></span></p>";
                                        }

                                        if ($enquiry == "downloadtrial" || $option == "Download Trial")
                                        {
                                            echo '<option selected="selected">Download Trial</option>';
                                            $purchaseYesNo = "<p><input type='text' placeholder='Yes / No' name='download' id='download' size='40px' style='display: block'/><span class='your-name' id='purchaseSpan' style='display: block'><font color='red'>Are you planning to purchase the software in the next 30 days?</font></span></p>";
                                        }
                                        else
                                        {
                                            echo '<option>Download Trial</option>';
                                            $purchaseYesNo = "<p><input type='text' placeholder='Yes / No' name='download' id='download' size='40px' style='display: none'/><span class='your-name' id='purchaseSpan' style='display: none'><font color='red'>Are you planning to purchase the software in the next 30 days?</font></span></p>";
                                        }
                                        if ($enquiry == "purchasenow" || $option == "How to purchase")
                                        {
                                            echo '<option selected="selected">How to purchase</option>';
                                            $purchaseQuestion = "<div style='margin-left: auto;margin-right: auto;width: 350px;display: block' id='purchaseid'><div style='text-align: left'>Are you interested in purchasing your software:<br/><input type='radio' name='purchase' if (isset($purchase) && $purchase=='outright') {echo 'checked';} value='outright'> Outright with maintenance agreement<br/><input type='radio' name='purchase' if (isset($purchase) && $purchase=='ongoing') echo 'checked'; value='ongoing'> Ongoing monthly<br/><input type='radio' name='purchase' if (isset($purchase) && $purchase=='both') echo 'checked'; value='both'> Both</div></div><br/>";
                                        }
                                        else
                                        {
                                            echo '<option>How to purchase</option>';
                                            $purchaseQuestion = "<div style='margin-left: auto;margin-right: auto;width: 350px;display: none' id='purchaseid'><div style='text-align: left'>Are you interested in purchasing your software:<br/><input type='radio' name='purchase' if (isset($purchase) && $purchase=='outright') {echo 'checked';} value='outright'> Outright with maintenance agreement<br/><input type='radio' name='purchase' if (isset($purchase) && $purchase=='ongoing') echo 'checked'; value='ongoing'> Ongoing monthly<br/><input type='radio' name='purchase' if (isset($purchase) && $purchase=='both') echo 'checked'; value='both'> Both</div></div><br/>";
                                        }

                                        if ($training == "training" || $option == "Training")
                                        {
                                            echo '<option selected="selected">Training</option>';
                                        }
                                        else
                                        {
                                            echo '<option>Training</option>';
                                        }

                                        if ($support == "support" || $option == "Support Request")
                                        {
                                            echo '<option selected="selected">Support Request</option>';
                                        }
                                        else
                                        {
                                            echo '<option>Support Request</option>';
                                        }
                                        
                                        if ($option == "Sales Enquiry")
                                        {
                                            echo '<option selected="selected">Sales Enquiry</option>';
                                        }
                                        else
                                        {
                                            echo '<option>Sales Enquiry</option>';
                                        }
                                        
                                        if ($option == "Accounts")
                                        {
                                            echo '<option selected="selected">Accounts</option>';
                                        }
                                        else
                                        {
                                            echo '<option>Accounts</option>';
                                        }
                                    ?>
                                </select>
                                
                                <span class="your-name"><br/><font color="red"><?php echo $enquiryError;?></font></span>
                                
                                <center><?php echo $datepicker;?></center>
                                
                                <center><?php echo $purchaseQuestion;?></center>
                                
                                 <p><input type="text" name="company" id="company" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Company Name (required)" value="<?php echo $company; ?>"/><br/><span class="your-name"><font color="red"><?php echo $companyError;?></font></span></p>

                                <p><input type="text" name="name" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Name (required)" value="<?php echo $name; ?>"/><br/><span class="your-name"><font color="red"><?php echo $nameError;?></font></span></p>

                                <p><input type="email" name="email" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Email (required)" value="<?php echo $email; ?>"/><br/><span class="your-email"><font color="red"><?php echo $emailError;?></font></span></p>
                                <p><input type="text" name="mobile" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Mobile (required)" onblur="mask(this)" value="<?php echo $mobile; ?>"/><br/><span class="your-subject"><font color="red"><?php echo $mobileError;?></font></span></p>
                                
                                <center><?php echo $purchaseYesNo;?></center>
                                
                            </p>

                            <p><span class="your-message"><textarea name="message" cols="40" rows="10" class="" aria-invalid="false" placeholder="Message" value="<?php echo $message; ?>"></textarea></span></p><p><input type="submit" value="Submit Enquiry" class="" name="button_pressed" /></p>

                        </form>
                        
                        <!--begin - email confirmation-->
                        <?php
                        require 'phpmailer/class.phpmailer.php'; // path to the PHPMailer class
                        require 'phpmailer/class.smtp.php';
                        
                        $fromEnquiry = "";
                        $subjectEnquiry = "";
                        $bodyEnquiry = "";
                        $bodyAltEnquiry = "";
                        $beamsEmail ="";
                        $purchaseQ = "";
                        
                        if($_SERVER["REQUEST_METHOD"] == "POST" && $flag == true)
                        {
                            //client confirmation email
                            if($_POST['EnquiryId']=="Book A Demo")
                            {
                                $fromEnquiry = "enquiries@beamsbuild.com.au";
                                $beamsEmail = "enquiries@beamsbuild.com.au";
                                $subjectEnquiry = "BEAMS Demonstration Resquest";
                                $bodyEnquiry = 'Thank you for your request to book a BEAMS demonstration. We will contact you shortly to confirm your preferred date and time is available.<br/><br/>The team at BEAMS.';
                                $bodyAltEnquiry = 'Thank you for your request to book a BEAMS demonstration. We will contact you shortly to confirm your preferred date and time is available.The team at BEAMS.';
                            }
                            if($_POST['EnquiryId']=="Download Trial")
                            {
                                $fromEnquiry = "enquiries@beamsbuild.com.au";
                                $beamsEmail = "enquiries@beamsbuild.com.au";
                                $subjectEnquiry = "BEAMS Software Trial";
                                $bodyEnquiry = "Thank you for your request to trial BEAMS Software please click the link below to begin your download.<br/><br/>DOWNLOAD TRIAL<br/><br/>The team at BEAMS.";
                                $bodyAltEnquiry = "Thank you for your request to trial BEAMS Software please click the link below to begin you download.DOWNLOAD TRIAL.The team at BEAMS.";
                            }
                            if($_POST['EnquiryId']=="How to purchase")
                            {
                                $fromEnquiry = "sales@beamsbuild.com.au";
                                $beamsEmail = "sales@beamsbuild.com.au";
                                $subjectEnquiry = "BEAMS Purchase";
                                $bodyEnquiry = "Thank you for your request. A sales representative will contact you shortly.<br/><br/>The team at BEAMS.";
                                $bodyAltEnquiry = "Thank you for your request. A sales representative will contact you shortly.The team at BEAMS.";
                            }
                            if($_POST['EnquiryId']=="Training")
                            {
                                $fromEnquiry = "enquiries@beamsbuild.com.au";
                                $beamsEmail = "enquiries@beamsbuild.com.au";
                                $subjectEnquiry = "BEAMS Training request";
                                $bodyEnquiry = "Thank you for your request. A team member will contact you shortly.<br/><br/>The team at BEAMS.";
                                $bodyAltEnquiry = "Thank you for your request. A team member will contact you shortly.The team at BEAMS.";
                            }
                            if($_POST['EnquiryId']=="Support Request")
                            {
                                $fromEnquiry = "enquiries@beamsbuild.com.au";
                                $beamsEmail = "enquiries@beamsbuild.com.au";
                                $subjectEnquiry = "BEAMS Support Request";
                                $bodyEnquiry = "Thank you for your request. A team member will contact you shortly.<br/><br/>The team at BEAMS.";
                                $bodyAltEnquiry = "Thank you for your request. A team member will contact you shortly.The team at BEAMS.";
                            }
                            if($_POST['EnquiryId']=="Sales Enquiry")
                            {
                                $fromEnquiry = "sales@beamsbuild.com.au";
                                $beamsEmail = "sales@beamsbuild.com.au";
                                $subjectEnquiry = "BEAMS Sales Enquiry";
                                $bodyEnquiry = "Thank you for enquiring about BEAMS Software. Some one from BEAM will be in contact shortly.<br/><br/>The team at BEAMS.";
                                $bodyAltEnquiry = "Thank you for enquiring about BEAMS Software. Some one from BEAM will be in contact shortly.The team at BEAMS.";
                            }
                            if($_POST['EnquiryId']=="Accounts")
                            {
                                $fromEnquiry = "enquiries@beamsbuild.com.au";
                                $beamsEmail = "enquiries@beamsbuild.com.au";
                                $subjectEnquiry = "BEAMS Account Request";
                                $bodyEnquiry = "Thank you for your enquiry. A team member will contactyou shortly.<br/><br/>The team at BEAMS.";
                                $bodyAltEnquiry = "Thank you for your enquiry. A team member will contactyou shortly.The team at BEAMS.";
                            }
                            
                         // Inicia a classe PHPMailer
                            $mail = new PHPMailer();
                            $mail->setLanguage('en');
                            $from = $fromEnquiry;
                            $fromName = 'BEAMS Software';


                            $mail->isSendmail();
//                            $mail->isSMTP();
//                            $mail->Host = $host;
//                            $mail->SMTPAuth = true;
//                            $mail->Username = $username;
//                            $mail->Password = $password;
//                            $mail->Port =$port;
                            
//                            $host ='smtp.gmail.com';
//                            $username ='xx@xx.com';
//                            $password = 'xxx';
//                            $port = 587;
//                            $secure = 'tls';

//                            $mail->SMTPDebug = 3;

//                            $mail->isSendmail();
//                            $mail->Host = $host;
//                            $mail->SMTPAuth = true;
//                            $mail->Username = $username;
//                            $mail->Password = $password;
//                            $mail->Port =$port;

                            $mail->From = $from;
                            $mail->FromName = $fromName;
                            $mail->addReplyTo($from,$fromName);

                            $mail->addAddress($_POST['email'],$_POST['name']);
                            $mail->isHTML(true);
                            $mail->CharSet = 'utf-8';
                            $mail->WordWrap = 70;

                            $mail->Subject = $subjectEnquiry;
                            $mail->Body = $bodyEnquiry;
                            $mail->AltBody = $bodyAltEnquiry;
                            $sendClient = $mail->send();

                            //BEAMS confirmation email
                            
                            if($_POST['purchase']=="outright")
                            {
                                    $purchaseQ="Outright with maintenance agreement";
                            }
                            if($_POST['purchase']=="ongoing")
                            {
                                $purchaseQ="Ongoing monthly";
                            }
                            if($_POST['purchase']=="both")
                            {
                                $purchaseQ="Both";
                            }
                            
                             if($_POST['EnquiryId']=="Book A Demo")
                            {
                                $fromEnquiry = $_POST['email'];
                                $subjectEnquiry = "BEAMS Demonstration Resquest";
                                $bodyEnquiry = 'BEAMS Demonstration Resquest<br/><br/>Company: '.$_POST["company"].'<br/>Name: '.$_POST["name"].'<br/>Preferred Date: '.$_POST['date'].'<br/>Email: '.$_POST["email"].'<br/>Mobile Number: '.$_POST["mobile"].'<br/>Message: '.$_POST["message"];
                                $bodyAltEnquiry = 'BEAMS Demonstration Resquest - Company: '.$_POST["company"].'Name: '.$_POST["name"].'Email: '.$_POST["email"].'Mobile Number: '.$_POST["mobile"].'Message: '.$_POST["message"];
                            }
                            if($_POST['EnquiryId']=="Download Trial")
                            {
                                $fromEnquiry = $_POST['email'];
                                $subjectEnquiry = "BEAMS Software Trial";
                                $bodyEnquiry = 'BEAMS Software Trial Request<br/><br/>Company: '.$_POST["company"].'<br/>The client intent to purchase in the next 30 days: '.$_POST['download'].'<br/>Name: '.$_POST["name"].'<br/>Email: '.$_POST["email"].'<br/>Mobile Number: '.$_POST["mobile"].'<br/>Message: '.$_POST["message"];
                                $bodyAltEnquiry = 'BEAMS Software Trial Request - Company: '.$_POST["company"].'<br/>The client intent to purchase in the next 30 days: '.$_POST['download'].'Name: '.$_POST["name"].'Email: '.$_POST["email"].'Mobile Number: '.$_POST["mobile"].'Message: '.$_POST["message"];
                            }
                            if($_POST['EnquiryId']=="How to purchase")
                            {
                                $fromEnquiry = $_POST['email'];
                                $subjectEnquiry = "BEAMS Purchase";
                                $bodyEnquiry = 'BEAMS Purchase Request<br/><br/>Company: '.$_POST["company"].'<br/>Name: '.$_POST["name"].'<br/>Interested in purchasing the software:'.$purchaseQ.' <br/>Email: '.$_POST["email"].'<br/>Mobile Number: '.$_POST["mobile"].'<br/>Message: '.$_POST["message"];
                                $bodyAltEnquiry = 'BEAMS Purchase Request - Company: '.$_POST["company"].'Name: '.$_POST["name"].'Email: '.$_POST["email"].'Mobile Number: '.$_POST["mobile"].'Message: '.$_POST["message"];
                            }
                            if($_POST['EnquiryId']=="Training")
                            {
                                $fromEnquiry = $_POST['email'];
                                $subjectEnquiry = "BEAMS Training request";
                                $bodyEnquiry = 'BEAMS Training Request<br/><br/>Company: '.$_POST["company"].'<br/>Name: '.$_POST["name"].'<br/>Email: '.$_POST["email"].'<br/>Mobile Number: '.$_POST["mobile"].'<br/>Message: '.$_POST["message"];
                                $bodyAltEnquiry = 'BEAMS Training Request - Company: '.$_POST["company"].'Name: '.$_POST["name"].'Email: '.$_POST["email"].'Mobile Number: '.$_POST["mobile"].'Message: '.$_POST["message"];
                            }
                            if($_POST['EnquiryId']=="Support Request")
                            {
                                $fromEnquiry = $_POST['email'];
                                $subjectEnquiry = "BEAMS Support Request";
                                $bodyEnquiry = 'BEAMS Support Request<br/><br/>Company: '.$_POST["company"].'<br/>Name: '.$_POST["name"].'<br/>Email: '.$_POST["email"].'<br/>Mobile Number: '.$_POST["mobile"].'<br/>Message: '.$_POST["message"];
                                $bodyAltEnquiry = 'BEAMS Support Request - Company: '.$_POST["company"].'Name: '.$_POST["name"].'Email: '.$_POST["email"].'Mobile Number: '.$_POST["mobile"].'Message: '.$_POST["message"];
                            }
                            if($_POST['EnquiryId']=="Sales Enquiry")
                            {
                                $fromEnquiry = $_POST['email'];
                                $subjectEnquiry = "BEAMS Sales Enquiry";
                                $bodyEnquiry = 'BEAMS Sales Enquiry Request<br/><br/>Company: '.$_POST["company"].'<br/>Name: '.$_POST["name"].'<br/>Email: '.$_POST["email"].'<br/>Mobile Number: '.$_POST["mobile"].'<br/>Message: '.$_POST["message"];
                                $bodyAltEnquiry = 'BEAMS Sales Enquiry Request - Company: '.$_POST["company"].'Name: '.$_POST["name"].'Email: '.$_POST["email"].'Mobile Number: '.$_POST["mobile"].'Message: '.$_POST["message"];
                            }
                            if($_POST['EnquiryId']=="Accounts")
                            {
                                $fromEnquiry = $_POST['email'];
                                $subjectEnquiry = "BEAMS Account Request";
                                $bodyEnquiry = 'BEAMS Account Request<br/><br/>Company: '.$_POST["company"].'<br/>Name: '.$_POST["name"].'<br/>Email: '.$_POST["email"].'<br/>Mobile Number: '.$_POST["mobile"].'<br/>Message: '.$_POST["message"];
                                $bodyAltEnquiry = 'BEAMS Account Request - Company: '.$_POST["company"].'Name: '.$_POST["name"].'Email: '.$_POST["email"].'Mobile Number: '.$_POST["mobile"].'Message: '.$_POST["message"];
                            }
                            
                         // Inicia a classe PHPMailer
                            $mail = new PHPMailer();
                            $mail->setLanguage('en');
                            $from = $fromEnquiry;
                            $fromName = $_POST["name"];

                            $host ='smtp.gmail.com';
                            $username ='xxx@gmail.com';
                            $password = 'xxx';
                            $port = 587;
                            $secure = 'tls';

//                            $mail->SMTPDebug = 3;

                            $mail->isSendmail();
//                            $mail->isSMTP();
//                            $mail->Host = $host;
//                            $mail->SMTPAuth = true;
//                            $mail->Username = $username;
//                            $mail->Password = $password;
//                            $mail->Port =$port;

                            $mail->From = $from;
                            $mail->FromName = $fromName;
                            $mail->addReplyTo($from,$fromName);

                            $mail->addAddress($beamsEmail,'BEAMS Confirmation');
                            $mail->isHTML(true);
                            $mail->CharSet = 'utf-8';
                            $mail->WordWrap = 70;

                            $mail->Subject = $subjectEnquiry;
                            $mail->Body = $bodyEnquiry;
                            $mail->AltBody = $bodyAltEnquiry;
                            $sendBeams = $mail->send();
                            
                            if($sendClient && $sendBeams) 
                            {
                                echo '<script language="javascript">';
                                echo 'alert("Your enquiry was succesfully sent.")';
                                echo '</script>';
                            }
                            else 
                            {
                                echo '<script language="javascript">';
                                echo 'alert('.'Erro : ' .$mail->ErrorInfo.')';
                                echo '</script>';  
                                echo 'Erro : ' .$mail->ErrorInfo;      
                            }
                        }                                        
                        ?> 
                        <!--end - email confirmation-->
                    </div>
                </div>
                <div class="fitsc-space"></div>
            </div>
            </section>
        </div>
    </div>
</main>
<!--END MAIN PAGE-->
 <?php include_once('Template/BottomMenu.php'); ?>

</body>
</html>
