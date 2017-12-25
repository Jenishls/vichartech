<?php
 session_start();

 require_once "dynamic/dynamic.php";

 $username=$_SESSION['username'];
 $type=$_SESSION['type'];




 if(!isset($_SESSION['permission']))
 {
 	//header("location:index.php?msg=no-access");
 }
 else
 {
  if ($type!='admin')
   {
      
  }
  else
  {
    header("location:test.php");
  }
 }

  $dynamic =new dynamic();
 if(isset($_GET['sliderId']))
{
	$dynamic->selectRow($_GET['sliderId']);
}
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>VicharTech</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">

    

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 
 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >

        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>   

      </button>
      <a class="navbar-brand" href="#">Vichartech</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
    <ul class="nav navbar-nav navbar-right">
      <li>
       <a href="#">HOME</a>
      </li>
      <li>
        <a href="#about">ABOUT</a>
      </li>
      <li>
        <a href="#whyus">WHY US</a>
      </li>
      <li>
        <a href="#services">SERVICES</a>
      </li>
      <li>
        <a href="#contact">CONTACT</a>
      </li>
 
      <li>
        <a href="logout.php" >
          <span class="glyphicon glyphicon-log-in"></span> 
          LOG OUT
        </a>
      </li>
      
    </ul>
    
	</div>
  </div>
</nav>

<p><br></p>
<p><br></p>
<p><br></p>

<?php if(isset($_GET['sliderId'])) { ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4"      
			style="background-color: #f7f7f7;">

			
			
			<legend> <h2 class="display2"> Slider Update</h2></legend>

			
			<form method="POST"  action="dynamic/action.php" style="padding: 10px;">
				<div class="form-group">
					<label>Choose another image to update Slider Image No. <?php echo $_GET['sliderId']; ?></label>
					
					<input type="file" class="form-control" name="image1" id="image1">
				</div>

			
				<button class="btn btn-md btn-primary" name="imageUpdate" id="update">UPDATE</button>
	
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>

</div>
<br>
<?php } ?>




<div class="container-fluid">

  <!--Content-->
  	<div class="row">
		<div class="col-md-1"></div>
		
		<div class="col-md-10">
			<table border="1" class="table table-striped table-bordered table-hover">
			<tr>
				<th>ID </th>
				<th>Name</th>
				<th>EDIT</th>
			</tr>

			<?php
			 $data = $dynamic->getAllSlider();
			 
			 foreach ($data as $key)
			 
			 	{?>

			<tr>
				<td>
					<?php 
					echo $key['id'];
					
					?>

				</td>

				<td>
					<img class="img-responsive" src="images/<?php echo $key['name'] ?>.jpg"> 
				</td>

				<td>
					
					<a class="btn btn-primary " href="land.php?sliderId=<?php echo $key['id'] ?>">EDIT</a>
						

				



				</td>
			</tr> 
			<?php } ?>

			</table>		

		</div>

		<div class="col-md-1"></div>


  <!--/Content-->
</div>
</div>


<!--About Update-->


<div class="container-fluid">
	<div class="row" style="background-color: #ccc">
		<div class="col-md-6">
			<!--Display-->
			<div id="about" class="container-fluid section-one">

  <div class="row section text-center" >
    <div class="col-sm-2">
      
    </div>

    <div class="col-sm-8">
   <?php 
   $data=$dynamic->about();
   foreach($data as $key)
    {
   
   ?>   
      <h1 class="display">

        <strong>
        <?php echo $key['heading']?>
        </strong>
      </h1>


  <p class="lead break">
   <!-- .--> 
    <?php echo $key['body1']?>
  </p>
  <p class="lead break">
    <?php echo $key['body2']?>
  </p>


  <button class="btn btn-lg btn-color">
   <?php echo $key['button']?>
  </button>
<?php }?>
    </div>

    <div class="col-sm-2">
      
    </div>

  </div>

</div>
			<!--/Display-->
		</div>
		<div class="col-md-6"      
			style="background-color: #f7f7f7;">
			<p><br></p><p><br></p>
			
			
			 <h2 class="display2"> About Section Update</h2>

			
			<form method="POST"  action="dynamic/action.php" style="padding: 10px;">

				<div class="form-group">
					
				</div>

				<div class="form-group">
					<label>Heading</label>
					<input type="text" class="form-control" name="heading" id="heading">
				</div>

				<div class="form-group">
					<label>First Paragraph</label>
					<textarea class="form-control" name="firstPara" rows='4'></textarea>
				</div>

				
				<div class="form-group">
					<label>Second Paragraph</label>
					<textarea class="form-control" name="secondPara" rows='4'></textarea>
				</div>


				<div class="form-group">
					<label>Button Text</label>
					<input type="text" class="form-control" name="btnText" >
				</div>

			
				<button class="btn btn-md btn-primary" name="imageUpdate" id="update">UPDATE</button>
	
			</form>
		</div>
		
	</div>

</div>
<br>

<!--About Update-->

<!-- Why Us Update -->
	
	<!--First Sub-section-->
	
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<!--Display-->


			<!--/Display-->
		</div>
		<div class="col-md-6"      
			style="background-color: #f7f7f7;">

			
			
			 <h2 class="display2">Why Us Section Update</h2>

			
			<form method="POST"  action="dynamic/action.php" style="padding: 10px;">

				<div class="form-group">
					<h3>First sub section</h3>
				</div>
				<input type="hidden" name="id"  value="1"/>
				<div class="form-group">
					<label>Heading</label>
					<input type="text" class="form-control" name="heading" id="heading">
				</div>

					<div class="form-group">
					<label>Glyphicon </label>
					<input type="text" class="form-control" name="glyphicon" id="glyphicon">
				</div>

				<div class="form-group">
					<label>Body</label>
					<textarea class="form-control" name="body" rows='4'></textarea>
				</div>

				
			
				<button class="btn btn-md btn-primary" name="firstUpdate" id="update">UPDATE</button>
	
			</form>
		</div>
		
	</div>

</div>


<!--Second Sub-section-->

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<!--Display-->
		</div>
		<div class="col-md-6"      
			style="background-color: #f7f7f7;">

			<form method="POST"  action="dynamic/action.php" style="padding: 10px;">

				<div class="form-group">
					<h3>Second sub section</h3>
				</div>
				<input type="hidden" name="id"  value="2"/>
				<div class="form-group">
					<label>Heading</label>
					<input type="text" class="form-control" name="heading" id="heading">
				</div>

				<div class="form-group">
					<label>Glyphicon </label>
					<input type="text" class="form-control" name="glyphicon" id="glyphicon">
				</div>

				<div class="form-group">
					<label>Body</label>
					<textarea class="form-control" name="body" rows='4'></textarea>
				</div>

				
			
				<button class="btn btn-md btn-primary" name="secondUpdate" id="update">UPDATE</button>
	
			</form>
		</div>
		
	</div>

</div>


<!--Third Sub-section-->

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<!--Display-->
		</div>
		<div class="col-md-6"      
			style="background-color: #f7f7f7;">

			
			<form method="POST"  action="dynamic/action.php" style="padding: 10px;">

				<div class="form-group">
					<h3>Third sub section</h3>
				</div>
				<input type="hidden" name="id"  value="3"/>
				<div class="form-group">
					<label>Heading</label>
					<input type="text" class="form-control" name="heading" id="heading">
				</div>

				<div class="form-group">
					<label>Glyphicon </label>
					<input type="text" class="form-control" name="glyphicon" id="glyphicon">
				</div>

				<div class="form-group">
					<label>Body</label>
					<textarea class="form-control" name="body" rows='4'></textarea>
				</div>

				
			
				<button class="btn btn-md btn-primary" name="thirdUpdate" id="update">UPDATE</button>
	
			</form>
		</div>
		
	</div>

</div>
<br>
<!-- /Why Us Update -->

<!-- Our Services -->
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<!--Display-->
		</div>
		<div class="col-md-6"      
			style="background-color: #f7f7f7;">

			
			
			 <h2 class="display2">Our Services</h2>

			
			<form method="POST"  action="dynamic/action.php" style="padding: 10px;">

				<div class="form-group">
					<h3>First sub section</h3>
				</div>

				<div class="form-group">
					<label>Heading</label>
					<input type="text" class="form-control" name="heading" id="heading">
				</div>

				<div class="form-group">
					<label>Body</label>
					<textarea class="form-control" name="body" rows='2'></textarea>
				</div>

					<div class="form-group">
					<label>Bullet1</label>
					<input type="text" class="form-control" name="gbullet1" id="bullet1">
				</div>
					
					<div class="form-group">
					<label>Bullet2</label>
					<input type="text" class="form-control" name="gbullet2" id="bullet2">
				</div>

					<div class="form-group">
					<label>Bullet3</label>
					<input type="text" class="form-control" name="gbullet3" id="bullet3">
				</div>


					<div class="form-group">
					<label>Bullet4</label>
					<input type="text" class="form-control" name="gbullet4" id="bullet4">
				</div>

					<div class="form-group">
					<label>Image</label>
					<input type="file" class="form-control" name="image" id="image">
				</div>

			
				<button class="btn btn-md btn-primary" name="imageUpdate" id="update">UPDATE</button>
	
			</form>
		</div>
		
	</div>

</div>
<br>
<!-- /Our Services -->

<!--Services -->
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<!--Display-->
		</div>
		<div class="col-md-6"      
			style="background-color: #f7f7f7;">

			
			
			 <h2 class="display2">Contact Us</h2>

			
			<form method="POST"  action="dynamic/action.php" style="padding: 10px;">

				
				<div class="form-group">
					<label>Location</label>
					<input type="text" class="form-control" name="location" id="location">
				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" name="email" id="email">
				</div>

				<div class="form-group">
					<label>Phone</label>
					<input type="text" class="form-control" name="phone" id="phone">
				</div>

			
				<button class="btn btn-md btn-primary" name="imageUpdate" id="update">UPDATE</button>
			</form>
		</div>
		
	</div>

	</div>
	<br>		


<!--Footer -->
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<!--Display-->
		</div>
		<div class="col-md-6"      
			style="background-color: #f7f7f7;">

			
			
			 <h2 class="display2">Footer</h2>

			
			<form method="POST" action="dynamic/action.php" style="padding: 10px;">

				
				<div class="form-group">
					<label>Heading</label>
					<input type="text" class="form-control" name="heading" id="heading">
				</div>

				<div class="form-group">
					<label>Body</label>
					<textarea class="form-control" name="email" rows="2"></textarea>
				</div>

				<div class="form-group">
					<label>Label1</label>
					<input type="text" class="form-control" name="label1" id="label1">
				</div>

				<div class="form-group">
					<label>Label2</label>
					<input type="text" class="form-control" name="label2" id="label2">
				</div>

				<div class="form-group">
					<label>Label3</label>
					<input type="text" class="form-control" name="label3" id="label3">
				</div>
			
				<button class="btn btn-md btn-primary" name="imageUpdate" id="update">UPDATE</button>				

			</form>
		</div>
		
	</div>

</div>
<br>


</body>
</html>

