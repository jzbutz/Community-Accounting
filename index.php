<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Community Accounting is a full service tax, accounting, and business consulting firm located in Bethesda, MD." />
        <meta name="robots" content="index,follow">
        <meta name="google-site-verification" content="verficationtokengoeshere">
        <meta name="author" content="Community Accounting" />

        <title>Community Accounting</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="!#" /> <!--Icon Graphic to be created -->
        <!-- CSS-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <div class="container px-5">
                <a class="navbar-brand"><strong>Community Accounting</strong></a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="portal.html">Client Portal</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>                     
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Top Right Container-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><center><img class="img-fluid rounded mb-4 mb-lg-0" src="https://dummyimage.com/900x400/dee2e6/6c757d.jpg" alt="..." /></center></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Community Accounting</h1>
                    <p>We are a family-owned accounting firm based in Rockville, MD,
                        with over 20 years of experience providing all of your accounting needs:
                        <br><br>
                        Individual Tax Preparation & Tax Planning 
                        <br>
                        Small Business Accounting & Tax Preparation 
                        <br>
                        Bookkeeping & Payroll Tax Returns 
                        <br>
                        Outsourced Accounting 
                        <br>
                        IRS Tax Notice & Audit Resolution 
                        <br>
                        Business Management Services 
                        <br>
                     </p> </center>
                </div>
            </div>
            <!-- Middle Containers -->
            <center><div class="row gx-3 gx-lg-7">
                <!-- Left Box -->
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Accounting</h2>
                            <p class="card-text"> We offer affordable accounting services tailored to your needs, without compromising accuracy.</p>
                        </div>  
                        <center><div class="card-footer"><a class="btn btn-primary btn-sm" style="width:200px" href="services.html">More Info</a></div></center>
                    </div>
                </div>
                <!-- Middle Box -->
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Tax Preparation</h2>
                            <p class="card-text">Preparing your own income tax return can leave you with more questions than answers. Let us take the worry factor out of your taxes.</p>
                        </div>
                        <center><div class="card-footer"><a class="btn btn-primary btn-sm" style="width:200px" href="services.html">More Info</a></div></center>
                    </div>
                </div>
                <!-- Right Box -->
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Advice</h2>
                            <p class="card-text">We provide expert accounting advice that helps you make smart business decisions. Get expert advice and personal attention.</p>
                        </div>
                        <center><div class="card-footer"><a class="btn btn-primary btn-sm" style="width:200px" href="services.html">More Info</a></div></center>
                    </div>
                </div>
            </div></center>
            <br>
            <br>
            <!-- Contact Form Header-->
            <div class="card text-white bg-secondary my-.1 py-2 text-center">
                <div class="card-body"><h1 class="font-weight-light" style="text-shadow: 0 0 5px #000000;" >Schedule your free, no obligation, initial consultation</h1></div>
            </div>
            <!-- Contact Form-->
            <form  method="POST" action="index.php" id="contactForm" name="contact" onsubmit="showMessage()"> 
                            <!-- Name input & Validation -->
                            <div class="form-group">
                            <label for="name">Full name</label>
                            
                                <input class=   "form-control" id="name" type="text" required="required" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('A name is required.')" placeholder="Enter your name..." name ="name"/>
                            </div>
                            <!-- Email address input & Validation -->
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input class="form-control" id="email" type="email"  required="required" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Email is not valid.')" placeholder="name@example.com" name ="email"/>
                            </div>
                            <!-- Inquiry type dropdown -->
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Inquiry Type</label>
                                <select class="form-control" id="exampleFormControlSelect1" name = "inquiry">
                                <option>Individual Tax Preparation & Tax Planning</option>
                                <option>Small Business Accounting</option>
                                <option>Bookkeeping & Payroll Tax Returns</option>
                                <option>Business Management Services</option>
                                <option>IRS Tax Notice & Audit Resolution</option>
                                <option>Other</option>
                            </select>
                            <!-- Message input & Validation -->
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" type="text" required="required" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('A message is required.')" placeholder="Enter your message..." name ="message"></textarea>
                            </div>
                            <!-- Submit Button-->
							<br>
							<script src="https://www.google.com/recaptcha/api.js" async defer></script>
							<div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div> <!-- Public site test key -->
                            <br>
                            </script>
                            <center><button class="btn btn-primary" style="width:200px">Send</button></center>
                            <br>
							  <head>

            </form>
							

            <!-- Review Module -->
            <DIV class = "bg-secondary" STYLE="background-color:#000000; height:10px; width:100%; border-radius: 25px; ">
            </DIV>
            <br>
            <center><h1 class="font-weight-light">Reviews</h1></center>
                <div class="card-body">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                <span class="fa fa-star" style="color:orange;"></span>
                <span class="fa fa-star" style="color:orange;"></span>
                <span class="fa fa-star" style="color:orange;"></span>
                <span class="fa fa-star" style="color:orange;"></span>
                <span class="fa fa-star" style="color:orange;"></span>
                <p style="margin : 0; padding-top:0;"><strong>Full Quickbooks Advisory</strong></p>
                <p>"Community Accounting has always been knowledgeable, accessible and accurate when handling our Quickbooks accounts. Whenever we have a question or a particularly challenging situation, Linda is always able to find the best way forward and to explain in detail why one solution is better than another. Our books are correct and and all necessary filings are always on time a accurate. We highly recommend Linda and Community Accounting!"</p>
                <span class="fa fa-star" style="color:orange;"></span>
                <span class="fa fa-star" style="color:orange;"></span>
                <span class="fa fa-star" style="color:orange;"></span>
                <span class="fa fa-star" style="color:orange;"></span>
                <span class="fa fa-star" style="color:orange;"></span>
                <p style="margin : 0; padding-top:0;"><strong>General Accounting</strong></p>
                <p>"I have worked with Linda since 2014. I can say without hesitation that she is excellent. She is thorough and accurate. She brings issues and irregularities to my attention quickly and offers solutions when appropriate. Linda is a terrific professional and such a pleasure to work with. I highly recommend her services!"</p>
            
            </div>

        </div>
    </div>
        <!-- Footer -->
        <footer class="py-3 bg-dark">
            <div class="container px-4 px-lg-5">
                <p class="m-0 text-center text-white"><strong>Bethesda Office</strong></p>
                <p class="m-0 text-center text-white">6900 Wisconsin Ave</p>
                <p class="m-0 text-center text-white">Suite 200</p>
                <p class="m-0 text-center text-white">Bethesda MD, 20815</p>
                <p class="m-0 text-center text-white">Phone: 301-461-8721</p>
                <br>
                <p class="m-0 text-center text-white">Copyright &copy; Community Accounting 2021</p>
            </div>

    </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Contact Form Validation -->
        <script type="text/javascript">
                                function showMessage() {
                                    alert("Your message has been sent.");

                                }
        </script>
    </body>
</html>

<!-- Contact form backend -->
<?php

    error_reporting(E_ALL ^ E_NOTICE);
    
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];
                            $inquiry = $_POST['inquiry'];
                            $responseheader = "Thanks for contacting me!";
                            $responsemessage = "Hello, ". $name . "\n\nthanks for getting in touch! This is an automatic response to let you know that we have received your message about our ". $inquiry ." services and will reach out to you shortly.\n\nRegards,\n Linda Butz.";
                            $receivedRecaptcha = $_POST['g-recaptcha-response'];
                            $google_secret = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe'; //this is a test key
                            if(strlen($receivedRecaptcha) == 0) {
                                    $msg = "Please complete the reCAPTCHA challenge.";
                            return;
                            } 

                            else {

                            $verifiedRecaptcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$google_secret.'&response='.$receivedRecaptcha);
                            $verResponseData = json_decode($verifiedRecaptcha);
                            if ($verResponseData->{'success'} == 1)
                            {
                                $content="From: $name\nEmail: $email\nMessage: $message";
                                $recipient = "jzbutz@gmail.com";
                                $mailheader = "Contact me submission from: $email \r\n";
                                mail($recipient, $mailheader, $content, ) or die("Error!");
                                mail($email, $responseheader, $responsemessage);
                                echo "Thank you for reaching out, " . $name . "! Your email was successfully sent.";
                            }
                            }
                        ?>