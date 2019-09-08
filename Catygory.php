<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="Style.css" rel="stylesheet">

</head>
           
   
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
          <li><a href="index.php">Home</a></li>
        <li><a href="conn.html">REGESISTER</a></li> 
     


 
  <!-- Trigger the modal with a button -->
          <li><a href="log-in.html" data-toggle="modal" data-target="#myModal">LOGIN-IN</a></li>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content"> 
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Please input your Email and Password</h4>
        </div>
        <div class="modal-body">
       
       <form action="Login-in.php" method="post">
           Email:<input type="text" name="email" id="email">
           Password:<input type="password" name="pswd" id="pswd"><br>
           <input type="submit">
       </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      

  </div>
  
</div>
          
          
 
      
      </ul>
    </div>
  </div>
</nav>


  
  <h2>What our customers say</h2>
  
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
          <p align="center" width=500px><img src="images/benz%201.jpg"></p>
      </div>
      <div class="item">
        <p align="center" width=500px><img src="images/volvo%204.jpg"></p>
      </div>
      <div class="item">
        <p align="center" width=500px><img src="images/nissan%205.jpg"></p>
      </div>
        <div class="item">
        <p align="center" width=500px><img src="images/jeep%202.jpg"></p>
        </div>
    </div>
    </div></div>
      <?php
$servername="localhost";
$username="root";
$password="";
$dbname="car-rental-users";

$conn = new mysqli($servername,$username,$password,$dbname);

$result = mysqli_query($conn,"SELECT * FROM categories");	
while($row = mysqli_fetch_array($result))
{
$picPath = mysqli_query($conn,"SELECT * FROM `imagestores` WHERE `image_ref` = ".$row['car_id']." LIMIT 3");
?>
<div class="col">
	<div>
	<?php 
    while($picRow = mysqli_fetch_array($picPath))

    {
	?>
		<img src="<?php echo $picRow['img_path']?>" class="img-fluid" />
       
	<?php 
    }
    ?>
	</div>              
	<h1><?php echo $row['car_brand']; ?></h1>
	<h2><?php echo $row['car_model']; ?></h2>
	<div class="row">
		<div class="col">
			<h2>Price</h2>
			<button type="button" class="btn btn-warning">
			  <span class="glyphicon glyphicon-search"></span><h3> <?php echo $row['car_price']; ?></h3> 
			</button> 
		</div>
		<div class="col text-right align-self-end">
		    <form action="/hotelinfo.php" method="get">
    			<button name="car" type="submit" class="btn btn-info btn-sx" value="<?php echo $row['car_id'];?>">More Info >></button>
            </form>

		</div>
	</div>                     
</div>
<?php
}
?>
    <script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
    </div> </body></html>
 