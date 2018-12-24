<?php 
		session_start();
		include 'inc/connection.php';

		$sel_car = mysql_query("select * from car where car_status = 0");
		
		$id= @$_GET['id'];
		// $id= 1;
		
 ?>


<!DOCTYPE html>
<html>

<head>
    <title>Arabian Oryx</title>

    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/arabian.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="js/jquery.min.js"></script>
   
</head>
<style type="text/css">
	body{
		padding-top: 51px;
	}
</style>
<body >

<?php 
if (isset($id)) {

if ($id==2) {
echo "<script>
  $(window).load(function()
{
    $('#myModal').modal('show');
});
</script>";
	
}
if ($id==1) {
echo "<script>
  $(window).load(function()
{
    $('#myModal2').modal('show');
});
</script>";
	
}
if ($id==3) {
echo "<script>
  $(window).load(function()
{
    $('#myModal3').modal('show');
});
</script>";
	
}
}
 ?>



<div class="container">

  <!-- Modal -->
  <div class="modal fade " id="myModal" role="dialog">
    <div class="modal-dialog ">
    
      <!-- Modal content-->
      <div class="modal-content ">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Success!</h4>
        </div>
        <div class="panel-body" style="padding: 0px;">
												<div class="modal-wrapper">
													<div class="modal-icon">
														<i class="fa fa-check fa-3x" style="color: rgb(71, 164, 71);" ></i>
													</div>
													<div class="modal-text" style="color:#777777;" >
														<h4><?php echo $_SESSION['user_name']; ?><small> Login Successfuly !</small></h4>
													</div>
												</div>
											</div>
       
      </div>
      
    </div>
  </div>
  
</div>
<div class="container">

  <!-- Modal -->
  <div class="modal fade " id="myModal2" role="dialog">
    <div class="modal-dialog ">
    
      <!-- Modal content-->
      <div class="modal-content ">
        <div class="modal-header" style="background:rgb(210, 50, 45);">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Something Went Wrong !</h4>
        </div>
        <div class="panel-body" style="padding: 0px;">
												<div class="modal-wrapper">
													<div class="modal-icon">
														<i class="fa fa-times-circle fa-3x" style="color: rgb(210, 50, 45);" ></i>
													</div>
													<div class="modal-text" style="color:#777777;" >
														<h4>Something went wrong <small> Please Login again with your email and password !</small></h4>
													</div>
												</div>
											</div>
       
      </div>
      
    </div>
  </div>
  
</div>
<div class="container">

  <!-- Modal -->
  <div class="modal fade " id="myModal3" role="dialog">
    <div class="modal-dialog ">
    
      <!-- Modal content-->
      <div class="modal-content ">
        <div class="modal-header" style="background:rgb(71, 164, 71);">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Invoice Submited Successfuly!</h4>
        </div>
        <div class="panel-body" style="padding: 0px;">
												<div class="modal-wrapper">
													<div class="modal-icon">
														<i class="fa fa-check fa-3x" style="color: rgb(71, 164, 71);" ></i>
													</div>
													<div class="modal-text" style="color:#777777;margin-right: 5px;" >
														<h4>Your Invoice has been Submited Successfuly ! <small> Our Member will contact you soon.</small></h4>
													</div>
												</div>
											</div>
       
      </div>
      
    </div>
  </div>
  
</div>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container" >	
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.php" class="navbar-brand"><img class="img-responsive" src="img/logo_05.png" alt=""></a>
				</div>
				<?php
								     if (empty($_SESSION['user'])):?>
								           
								    <?php    
								    else:?>
				<ul class="nav navbar-right top-nav"style="margin-right:0px;">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['user_name']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="proccess/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <?php endif; 
								?>	
				<div class="collapse navbar-collapse" id="navbar-collapse">
					
					<ul class="nav navbar-nav" >
						<li><a href="index.php">Home</a></li>
						<li><a href="car.php">Our Cars</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="contact_us.php">Contact Us</a></li>
					</ul>

				</div>

			</div>
		</nav>
	
		<div  class="container">
					<section>
						<div class="carousel slide" id="slider" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#slider" data-slide-to="0"  ></li>
									<li data-target="#slider" data-slide-to="1"></li>
									<li data-target="#slider" data-slide-to="2" class="active"></li>
									<li data-target="#slider" data-slide-to="3"></li>
									<li data-target="#slider" data-slide-to="4"></li>
								</ol>
							
								<div class="carousel-inner">
									<div class="item " >
										<img src="img/car3.jpg" class="img-responsive " alt="Car pic">
									</div>
									<div class="item" id="image">
										<img src="img/car2.jpg" class="img-responsive" alt="Car pic">
									</div>
									<div class="item active" id="image">
										<img src="img/car1.jpg" class="img-responsive" alt="Car pic">
									</div>
									<div class="item" id="image">
										<img src="img/car5.jpg" class="img-responsive" alt="Car pic">
									</div>
									<div class="item" id="image">
										<img src="img/car6.jpg" class="img-responsive" alt="Car pic">
									</div>

								</div>

								<a href="#slider" class="left carousel-control" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" ></span>
								</a>
								<a href="#slider" class="right carousel-control" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" ></span>
								</a>
						</div>
					</section>	
		</div>

		<div class="container">

        <div class="row">

            

            <div class="col-md-8">
            		<section>
				<div class="page-header">
					<h3>Our Top Listed Cars</h3>
				</div>
			</section>
			   <div class="row">

			   			<?php
									while ($row_pro =mysql_fetch_array($sel_car)){  ?>


                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="../admin/img/Prod/<?php echo $row_pro['car_img']; ?>" class="img-responsive car_prod " alt="Car pic" style="height: 160px;" >
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo $row_pro['car_price']; ?> /day</h4>
                                <h4><a href="#"><?php echo substr($row_pro['car_name'],0,12); ?>...</a>
                                </h4>
                                <p>Engine Power: <?php echo $row_pro['car_eng_cap']; ?> (L)<br/>Transition: <?php echo $row_pro['car_trans']; ?><br/>Status: Available<br/></p>
                                <?php
								     if (empty($_SESSION['user'])):?>
								       <a class="btn btn-sm btn-info"  data-toggle="modal" data-target="#ButtonModal" target="_blank" >View more <span class="glyphicon glyphicon-arrow-right"></span></a>
								           
								    <?php    
								    else:?>
								    		<a class="btn btn-sm btn-info" href="car_detail.php?car_id=<?php echo $row_pro['car_id']; ?>">View more <span class="glyphicon glyphicon-arrow-right"></span></a>
								    <?php endif; 
								?>
                            </div>
                            <div class="modal fade" id="ButtonModal" role="dialog">
								    <div class="modal-dialog">
								      <div class="modal-content">
									          <div class=" jumbotron" style="margin-bottom:0px;" >
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <section >
                                              <form class="form-horizontal"action="proccess/user_login_pro.php" method="POST">
                                                        <div class="page_header text-center">
                                                        <h2 class="h4style"><b>Login</b><small > Arabian Oryx</small></h2></div>
                                                        <hr/ style="border-top: 1px solid #a5a4a4;">
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4" for="user_name">User Name:</label>
                                                                <div class="col-sm-8">
                                                                <input type="email" class="form-control" name="user_email" placeholder="Enter your Email ">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4" for="pass">Password:</label>
                                                                <div class="col-sm-8">
                                                                <input type="password" class="form-control" name="user_pass" placeholder="Enter your password">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12">
                                                                <ul class="list-unstyled pull-right text-right ">
                                                                            <li><a href="#">Forgot Password</a></li>
                                                                            <li><a href="sign_up.php">Sign Up </a></li>
                                                                            
                                                                </ul>
                                                            </div>
                                                            <div class="form-group">
                                                                    <div class=" col-sm-offset-5 col-sm-2">
                                                                      <button class="btn btn-md btn-info">Login</button>
                                                                    </div>
                                                                  </div>
                                                    </form>
                                              </section>  
                                              </div>
									  </div>
								      
								    </div>
							</div>
                        </div>
                    </div>

                    <?php } ?>

                    

                </div>

            </div>

            <div class="col-md-4">
                <section>
					<div class="page-header">
						<h3>Special Offer</h3>
					</div>
				</section>
                <div class="well">
                           <div class="carousel slide" id="s_slider" data-ride="carousel">
								
									<div class="carousel-inner">
										<div class="item active " id="image">
											<img src="img/car3.jpg" class="img-responsive " alt="Car pic">
										</div>
										<div class="item" id="image">
											<img src="img/car2.jpg" class="img-responsive" alt="Car pic">
										</div>
										<div class="item" id="image">
											<img src="img/car1.jpg" class="img-responsive" alt="Car pic">
										</div>
										<div class="item" id="image">
											<img src="img/car5.jpg" class="img-responsive" alt="Car pic">
										</div>
										<div class="item" id="image">
											<img src="img/car6.jpg" class="img-responsive" alt="Car pic">
										</div>

									</div>

									<a href="#s_slider" class="left carousel-control" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left" ></span>
									</a>
									<a href="#s_slider" class="right carousel-control" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right" ></span>
									</a>
							</div>
                            <div class="caption">
                                <h4 class="pull-right">$94.99/day</h4>
                                <h4><a href="#">Special Cars</a>
                                </h4>
                                <p>Engine Power: 4.8 (L)<br/>Transition: Automatic<br/>Status: Available<br/></p>
                                
                            </div>
                            <button class="btn btn-md btn-info ">Take it on Rent</button>
                        </div>


                        <section>
					<div class="page-header">
						<h3>Our Clients</h3>
					</div>
				</section>
                <div class="thumbnail">
                            <div class="carousel slide" id="client" data-ride="carousel">
								
									<div class="carousel-inner">
										<div class="item active " id="image">
											<img src="img/client1.png" class=" col-md-offset-4 col-xs-offset-4 img-responsive " alt="Car pic">
										</div>
										<div class="item" id="image">
											<img src="img/client2.png" class="col-md-offset-4 col-xs-offset-4 img-responsive" alt="Car pic">
										</div>
										<div class="item" id="image">
											<img src="img/client3.png" class="col-md-offset-4 col-xs-offset-4 img-responsive" alt="Car pic">
										</div>
										<div class="item" id="image">
											<img src="img/client4.png" class="col-md-offset-4 col-xs-offset-4 img-responsive" alt="Car pic">
										</div>
										<div class="item" id="image">
											<img src="img/client5.png" class="col-md-offset-4 col-xs-offset-4 img-responsive" alt="Car pic">
										</div>
										<div class="item" id="image">
											<img src="img/client6.png" class="col-md-offset-4 col-xs-offset-4 img-responsive" alt="Car pic">
										</div>
										<div class="item" id="image">
											<img src="img/client7.png" class="col-md-offset-4 col-xs-offset-4 img-responsive" alt="Car pic">
										</div>

									</div>

									
							</div>
                </div>
            </div>

        </div>

    </div>

			<div class="jumbotron bac">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<a href="index.html"><img class="img-responsive" style="margin-bottom:30px;" src="img/logo_04.png" alt=""></a>
								2016 © All Rights Reserved.<br>
								<a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>

						</div>

						<div class="col-md-3">
							<div class="posts">
								<div class="page-header margin-top"><h2 class="margin-top">Latest Posts</h2></div>
								<ul class="list-unstyled ">
									<li>
										<a href="#">Coming Soon...</a>
									</li>
								</ul>
							</div>
						</div>
					
						<div class="col-md-3 md-margin-bottom-40">
							<div class="page-header margin-top"><h2 class="margin-top">Useful Links</h2></div>
							<ul class="list-unstyled">
								<li><a href="index.php">Home</a></li>
								<li><a href="cars.php">Our Cars</a></li>
								<li><a href="#">About us</a></li>
								<li><a href="contact_us.php">Contact us</a></li>
							</ul>
						</div>
					
					
						<div class="col-md-3 map-img md-margin-bottom-40">
							<div class="page-header margin-top"><h2 class="margin-top">Contact Us</h2></div>
							<address class="" style="color:#fff;" >
								Lahore, Pakistan <br>
								Phone: 0303-2673511 <br>
								Fax: 1234567890 <br>
								Email: <a href="#" class="">Ahtishamsaghir@gmail.com</a>
							</address>
						</div>
					
				</div>
			</div>
    

    <script src="js/jquery.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
</body>

</html>