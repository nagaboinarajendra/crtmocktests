<?php
$filepath = realpath(dirname(__FILE__)); 
include_once ($filepath.'/../lib/Session.php');
Session::init(); 
include_once ($filepath.'/../lib/Database.php'); 
include_once ($filepath.'/../helpers/Format.php');

spl_autoload_register(function($class){
	include_once "classes/".$class.".php";
});
$db= new Database();
$fm= new Format();
$usr =new User();
$exm= new Exam();
$pro = new Process(); 

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: pre-check=0, post-check=0, max-age=0");
header("Pragma: no-cache");
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<!doctype html>
<html>
<head>
	<title>CRT Mock Tests</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" href="css/main.css">

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
	<?php 
		if (isset($_GET['action']) && $_GET['action'] == 'logout') {
			Session::destroy();
			header("Location:index.php");
			exit();
		}
	?>

	<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://localhost/exam_ultimate/index.php">CRT MOCK TESTS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		<?php 
			$login=Session::get("login");
			if ($login==true) {
		?>
			<li><a href="profile.php">PROFILE</a></li>
        	<li><a href="bootstrap-sidebar/index.html">PRACTICE</a></li>
			<li><a href="exam.php">EXAM</a></li>
			<li><a href="?action=logout">LOGOUT</a></li>
			<?php 
				$login=Session::get("login");
				if ($login==true) {
			 ?>
		<li style="color: #888;">
			Welcome <strong><?php echo  Session::get("name");?></strong>
		</li>
		<?php } ?>
        <?php } else{?>
        	<li><a href="http://localhost/exam_ultimate/index.php">HOME</a></li>
        	<li><a href="#about">ABOUT</a></li>
        	<li><a href="register.php">REGISTER</a></li>
          <li><a href="http://localhost/exam_ultimate/admin/login.php">ADMIN</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>


</body>
<script>
  function showPassword() {
    
    var password_attr = $('#password').attr('type');
    
    if(password_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('#password').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('#password').attr('type', 'password');
        
    }
    
}
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
</html>






















	