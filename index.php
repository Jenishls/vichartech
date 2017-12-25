<?php
  require_once "dynamic/dynamic.php";
   $dynamic =new dynamic();

?>
<!DOCTYPE html>
<html>
<head>
	<title> Vichartech</title>
   <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">

    

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 
 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
  


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
        <button class="btn nav-btn"  onclick="document.getElementById('id01').style.display='block'">
          <span class="glyphicon glyphicon-user"></span> 
          SIGN UP
        </button>

      </li>
      <li>
        <button class="btn nav-btn" onclick="document.getElementById('id02').style.display='block'">
          <span class="glyphicon glyphicon-log-in"></span> 
          LOGIN
        </button>
      </li>
      
    </ul>
    
	</div>
  </div>
</nav>

<!--SIGN UP Modal-->

  <div id="id01" class="modal">
  
  <form  action="action.php" method="POST">
    <div class="modal-content modal-lg animate">
    <div>
     
       <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
      
      <h2 class="text-center">SIGN UP</h2>
   

    <div class="modal-body" >
      <div class=" row ">
        <div class=" col-md-6">
          <label>First Name</label>
          
          <input type="text" autofocus="autofocus" required name="fname" id="fname" tabindex="1" class=" form-control validate-input" placeholder="Firstname" />
        </div>

        <div class="col-md-6">
          <label for="lname">Last Name</label>
          
          <input type="text" required name="lname" id="lname" tabindex="1" class=" form-control validate-input" placeholder="Lastname" />
        </div>
      </div>  
      
      <div class="form-group ">
        
        <label >Username</label>
        
        <input type="text" required="required" name="username" id="username" tabindex="1" onkeyup="javascript: loadme()" class=" form-control validate-input" placeholder="Username" />
      </div>
      <div id="mydiv"></div>

      <div class="form-group ">
        <label for="email">Email Address</label>
        
        <input type="text" name="email" id="email" tabindex="2" required="required" class="form-control " placeholder="Email Address" />
      </div>

        <div class="form-group">
          <label >Password</label>

          <input type="password" name="password" id="password" required="required" tabindex="3" class="form-control" placeholder="Password" />
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>

          <input type="password" name="confirm-password" onkeyup="javascript:checkPassword()"  required="required" tabindex="4" id="confirm-password" class="form-control" placeholder="Confirm Password"/>
        </div>
        <div id="matchPassword"></div>
      
      
      <input type="submit" id="register-submit"        name="submit" class="form-control btn-success btn-login" value="SIGN UP">         
        
      
      <div class="form-group">

        <input type="checkbox" checked="checked"> Remember me
      </div>
    </div>
    <div class="modal-footer">
      
    </div>

    </div>
  </form>
</div>

<!--/SIGN UP Modal-->


<!--login modal-->
<div id="id02" class="modal">
  
  <form class="modal-content modal-sm animate" action="action.php" method="POST">
    <div>
     
       <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
      
      <h2 class="text-center">LOGIN</h2>
   

    <div class="modal-body" >
      
      
      
      <label><b>Username</b></label>
      <div class="form-group">
        <input type="text" autofocus class="form-control" placeholder="Enter Username" name="uname" required>
      </div>

      <label><b>Password</b></label>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
      </div> 
       
      <button type="submit" class="form-control btn-success btn-login" name="login">Login</button>
         
        
      
      <div class="form-group">

        <input type="checkbox" checked="checked"> Remember me
      </div>
    </div>
    <div class="modal-footer">
      <p class="text-center">
        Forgot Password?
      </p>
    </div>

    
  </form>
</div>
<!--/login modal-->

<!-- scroll to top -->
  
  <button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>

<!-- /scrol to top -->


<!--carasoul-->
 
<div class="carousel slide gap" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->


    <div class="carousel-inner">
      <div class="item active">
        <?php 
          $data=$dynamic->firstSlider();
          foreach ($data as $key) {
        ?>
        <img src="images/<?php echo $key['name']?>.jpg" alt="Slider" style="width:100%; height:100%">
        <?php }?>

      </div>

      <div class="item">
         <?php 
          $data=$dynamic->secondSlider();
          foreach ($data as $key) {
        ?>
        <img src="images/<?php echo $key['name']?>.jpg" alt="Chicago" style="width:100%;">
         <?php }?>
      </div>
    
      <div class="item">
          <?php 
          $data=$dynamic->thirdSlider();
          foreach ($data as $key) {
        ?>
        <img src="images/<?php echo $key['name']?>.jpg" alt="New york" style="width:100%;">
        <?php }?>

      </div>

    </div>
    

 

</div>
<!--/carasoul-->


<?php 
  if (isset($_GET['send'])) 
  {
    
  
    $msg=$_GET['send'];
   if($msg=="true")
   {
    echo "<script type='text/javascript'>alert ('Your query has been sent')</script>";
   }
     }
?>
<!-- About-->

<div id="about" class="container-fluid  section-one">

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


<!--/About us-->

<!-- Why choose us -->

  <div id="whyus" class="section section-two container-fluid text-center">

    <h2 class="display" style="color: #e8edf3; text-shadow: 0px 15px 25px rgba(0, 0, 0, 8);"><strong>Why Choose Us</strong> </h2>
    <div class="row ">
      <?php 
        $data=$dynamic->why();
        foreach($data as $key)
    {
      ?>
      <div class="col-sm-4">

        <div class="card">
          
        <h3> <?php echo $key['heading'];?></h3>

        <p class="glyphicon-size">
          <span class="glyphicon <?php echo $key['glyphicon'];?>"></span>
          
        </p>

     <?php  echo $key['body']; ?>
        </div>
      </div>
      <?php }?>


     
    </div>

  </div>
  
<!-- /why choose us -->

<!-- services -->
<div id="services" class="container-fluid section-three section ">
  <div class="container">
 
  <p class=" display text-center">
    <strong> Our Services </strong>
  </p>

<?php 
  $data=$dynamic->services();
  foreach ($data as $key) {
    $id=$key['id'];
    
    if($id%2==1)
    {
      
?>
      <div class="row section">
    <div class="col-sm-5"  >
    
      
  
      <p class="display-2">
        <strong><?php echo $key['heading']; ?></strong>
      

      <p class="break">
      <?php echo $key["body"];?>
      </p>
      </p>

      <ul class="list-group ">
        <li class="list-group-item list-group-item-success break"><?php echo $key["bullet1"]?></li>        
        <li class="list-group-item list-group-item-success break"> <?php echo $key["bullet2"]?></li>
        <li class="list-group-item list-group-item-success break"><?php echo $key["bullet3"]?></li>
        <li class="list-group-item list-group-item-success break"><?php echo $key["bullet4"]?></li>
      </ul>
    
    </div>
    
    
    <div class="col-sm-7 text-center " >
      <div>
        <p><br></p>
      </div>
      <img src="images/<?php echo $key["image"]?>.png" class="media img-responsive">
    </div>
  </div>

  <?php }

    
    else
    {
      
      ?>
      <div class="row section">
    <div class="col-sm-6">

      <div class="row">
        <p> <br> </p>
      </div>
        <div class="row">
        <p><br></p><p><br></p>
      </div>
      <img src="images/<?php echo $key['image']?>.png" class="media img-responsive">
    
    </div>

    <div class="col-sm-6 ">
      <p class=" display-2">
        <strong> <?php echo $key['heading']?> </strong>

      <p class="break">
        <?php echo $key['body']?>
      </p>

      </p>
      <ul class="list-group services">
        <li class="list-group-item list-group-item-success break"><?php echo $key['bullet1']?></li>
        <li class="list-group-item list-group-item-success break"><?php echo $key['bullet2']?></li>
        
        <li class="list-group-item list-group-item-success  break"><?php echo $key['bullet3']?></li>
        <li class="list-group-item list-group-item-success  break"><?php echo $key['bullet4']?></li>
          
        </ul>
     

    </div>
  </div>


 <?php   }
  }
   
?>
  
  </div>
</div>


<!--/services-->




<!--contact -->

  <div id="contact" class="container-fluid section-one">
      
        <h2 class="text-center">Contact Us</h2>
        <p><br></p>
        <div class="row" >
           <?php 
              $data=$dynamic->contact();
              foreach ($data as $key) {
                
            
            ?>
          <div class="col-sm-4" >
            
            <div class="row">
              <div class="col-sm-2">
                <span class="glyphicon  glyphicon-size glyphicon-flag "></span>
              </div>

              <div class="col-sm-10">
                <p class="lead"><?php echo $key['location']?></p>
              </div>
              
            </div>
           
           <br/>

            <div class="row">
              <div class="col-sm-2">
                <span class="glyphicon glyphicon-size glyphicon-envelope"></span> 
              </div>

              <div class="col-sm-10">
                 <p class="lead"><?php echo $key['mail']?></p>
              </div>
              
            </div>

            <br/>
            
            <div class="row">
              <div class="col-sm-2">
                <span class="glyphicon glyphicon-size glyphicon-phone"></span>
              </div>

              <div class="col-sm-10">
                <p class="lead"><?php echo $key['phone']?></p>
              </div>
              
            </div>
           
          </div>
           <?php }       
            
            ?>
          
          <div class="col-sm-6" >
            <div class="form">
                           
              <form method="post" action="action.php" class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control"  placeholder="Your Name"  />
                    
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  />
                    
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
                   
                  </div>
                  <div class="form-group">
                    <textarea class="form-control form-inline" name="message" rows="4" data-rule="required" ></textarea>
                    
                  </div>
                  <div>
                    <input type="submit" class="btn btn-lg btn-color" name="contactSubmit" value="Submit"/>
                  </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    
<footer>
  <?php 
    $data=$dynamic->footer();
    foreach ($data as $key)
     {
   
  ?>
  <div class="container ">
    <div class="row" style="padding-left: 25px" >
    <div class="col-sm-4">
      <h2><?php echo $key['heading']?></h2>
      <p >
        <?php echo $key['body']?>  
      </p>
      <br>
    </div>

    <div class="col-sm-5 text-center">
      
    </div>

    <div class="col-sm-3">
      <p><br/></p>
      <h4>  <?php echo $key['label1']?></h4>
      <h4><?php echo $key['label2']?></h4>
      <h4><?php echo $key['label3']?></h4>
    </div>
  </div>
  <?php }?>
</footer>
<!--/contact-->
<script >

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("topBtn").style.display = "block";
    } else {
        document.getElementById("topBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

  function checkPassword()
  {
    var password=document.getElementById('password').value;
    var chkPassword= document.getElementById('confirm-password').value;
    if(password!=chkPassword)
    {
      document.getElementById('matchPassword').innerHTML="Password Mismatch";
      document.getElementById('register-submit').disabled=true;

    }
    else
    {
      document.getElementById('matchPassword').innerHTML="";
      document.getElementById('register-submit').disabled=false;
    }
  }

 </script>

</body>
</html>

