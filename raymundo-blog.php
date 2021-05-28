<?php 
	if(isset($_POST['submit'])){
		$blogtxt = htmlspecialchars($_POST['blog']);
		$fileName = "raymundo-blog.txt";
		$txtfile = fopen($fileName, "a"); //opens imagelist.txt file on append mode or only append can be applied
		fwrite($txtfile, "$blogtxt <br><br><br>"); //write the file path on the text file to be used for displaying it on the gallery
		fclose($txtfile); //properly close the file
		header("Refresh:0");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>2020 realizations</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">BSCS 3A</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php">Home</a></li>
                         <li class="active"><a href="raymundo-blog.php">CARLO</a></li>
                         <li><a href="jamora-blog.php">JOSHUA</a></li>
                         
                    </ul>
               </div>

          </div>
     </section>

     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Realization this 2020</h1>
                    <h3>Raymundo, Carlo O.</h3>

                    <br><br>

                    <p class="lead">
						<?php
							$fileName = "raymundo-blog.txt";
							$file = fopen($fileName, "r");
							if($file == false){
								echo'<script>alert("Error on reading file.")</script>';
							}
							if(filesize($fileName) > 0){
								$fileSize = filesize($fileName);
								$fileText = fread($file, $fileSize);
								echo $fileText;
							}
							else{
								echo"(No experiences nor realization written yet, write down below and save)";
							}
							
						?>
					</p>
               </div>
          </div>
     </section>
	 
	 <section>
		<div style="background-color: #555555; margin-top: 12px;
			border: 1px solid black;
			border-radius: 8px;
			margin-top: 12px;
			padding: 24px;
			padding-top: 22px;
			padding-bottom: 2.5rem;
			position: relative;
			max-width: 50vw;
			margin-right: auto;
			margin-left: auto"
		>
			<form action="<?php $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column;
			align-items: center;
			justify-content: center;">
				<label for="blog" style="color:white;"> Write 2020 experience here: </label>
				<textarea id="blog" name="blog" rows="10" cols="90" placeholder="My 2020 experience..."> </textarea>
				<br/>
				<button type="submit" name="submit" class="section-btn btn btn-default">Save</button>
			</form>
		</div>
	 </section>

     

     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Address</h2>
                              </div>
                              <address>
                                   <p>#27 G. Bunyi St. <br>Buting, Pasig City</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/jancarlo.raymundo" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                   <li><a href="https://www.instagram.com/carloraymundo_/" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020 Pamantasan ng Lungsod ng Pasig</p>
                                   <p>Coded by: Joshua Jamora and Carlo Raymundo </p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>09208001631</p>
                                   <p><a href="mailto:contact@company.com">raymundo_jancarlo@plpasig.edu.ph</a></p>
                              </address>

                              
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>THANK YOU FOR VISITING OUR BLOG, PLEASE COME BACK AGAIN TO SEE NEW CONTENTS</h2>
                              </div>
                              
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>

     <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
                    </div>
                    
                    <div class="modal-body">
                         <form action="#" id="contact-form">
                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up location" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return location" required>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up date/time" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return date/time" required>
                                   </div>
                              </div>
                              <input type="text" class="form-control" placeholder="Enter full name" required>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter email address" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter phone" required>
                                   </div>
                              </div>
                         </form>
                    </div>

                    <div class="modal-footer">
                         <button type="button" class="section-btn btn btn-primary">Book Now</button>
                    </div>
               </div>
          </div>
     </div>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>