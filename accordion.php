<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">

    

  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<h2>Accordion with symbols</h2>
<p>In this example we have added a "plus" sign to each button. When the user clicks on the button, the "plus" sign is replaced with a "minus" sign.</p>

<div class="container">

<button class="accordion">Section 1</button>
<div class="panel">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-1"></div>
    
    <div class="col-md-10">
      <table border="1" class="table table-striped table-bordered table-hover">
      <tr>
        <th>ID </th>
        <th>Name</th>
        <th>EDIT</th>
      </tr>
    </table>
</div>
</div>
</div>
</div>


<button class="accordion">Section 2</button>
<div class="panelAccordion">
  <!--Content-->
</div>

<button class="accordion">Section 3</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</body>
</html>
