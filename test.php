
<?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
	if (isset($_GET['q'])) {
		$number=(int)$_GET['q'];
	}else{
		header("location:exam.php");
	}
	$total=$exm->getTotalRows();
	$question=$exm->getQuesByNumber($number);
?>
<?php  
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$process=$pro->processData($_POST);
	}
?>





<head>
  <script type="text/javascript">
  // properties
  var count = 0;
  var counter = null;

  window.onload = function() {
    initCounter();
  };

  function initCounter() {
    // get count from localStorage, or set to initial value of 1000
    count = getLocalStorage('count') || 1000;
    counter = setInterval(timer, 1000); //1000 will  run it every 1 second
  }

  function setLocalStorage(key, val) {
    if (window.localStorage) {
      window.localStorage.setItem(key, val);
    }

    return val;
  }

  function getLocalStorage(key) {
    return window.localStorage ? window.localStorage.getItem(key) : '';
  }

  function timer() {
    count = setLocalStorage('count', count - 1);
    if (count == -1) {
      clearInterval(counter);
      return;
    }

    var seconds = count % 60;
    var minutes = Math.floor(count / 60);
    var hours = Math.floor(minutes / 60);
    minutes %= 60;
    hours %= 60;

    document.getElementById("timer").innerHTML = hours +  "hours "  + minutes +  "minutes and "   + seconds +  "  seconds left"; 
  }
 </script>




 	<style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      /*background-color: #1abc9c; /* Green */
      background-image: url("img/mainphoto.jpg");
      background-size: cover;
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  /*    --------------------------------------------------
  :: Login Section
  -------------------------------------------------- */
#login {
    padding-top: 50px
}
#login .form-wrap {
    width: 30%;
    margin: 0 auto;
}
#login .loginright{
  float: right;
  border: solid 1px black;
  margin: 10px;
  padding: 10px;
  background-color: black;
}
#login h1 {
    color: #1fa67b;
    font-size: 18px;
    text-align: center;
    font-weight: bold;
    padding-bottom: 20px;
}
#login .form-group {
    margin-bottom: 25px;
}
#login .checkbox {
    margin-bottom: 20px;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
#login .checkbox.show:before {
    content: '\e013';
    color: #1fa67b;
    font-size: 17px;
    margin: 1px 0 0 3px;
    position: absolute;
    pointer-events: none;
    font-family: 'Glyphicons Halflings';
}
#login .checkbox .character-checkbox {
    width: 25px;
    height: 25px;
    cursor: pointer;
    border-radius: 3px;
    border: 1px solid #ccc;
    vertical-align: middle;
    display: inline-block;
}
#login .checkbox .label {
    color: #6d6d6d;
    font-size: 13px;
    font-weight: normal;
}
#login .btn.btn-custom {
    font-size: 14px;
  margin-bottom: 20px;
}
#login .forget {
    font-size: 13px;
  text-align: center;
  display: block;
}

/*    --------------------------------------------------
  :: Inputs & Buttons
  -------------------------------------------------- */
.form-control {
    color: #212121;
}
.btn-custom {
    color: #fff;
  background-color: #1fa67b;
}
.btn-custom:hover,
.btn-custom:focus {
    color: #fff;
}

/*    --------------------------------------------------
    :: Footer
  -------------------------------------------------- */
#footer {
    color: #6d6d6d;
    font-size: 12px;
    text-align: center;
}
#footer p {
    margin-bottom: 0;
}
#footer a {
    color: inherit;
}
  </style>

 </head>


<body>




<!-- Third Container (Grid) -->
<div id="#" data-spy="scroll" class="container-fluid bg-3 "> 

 <div id="timer"></div>



  <h3 style="color: red">Question <?php echo $question['quesNo']; ?> of <?php echo $total; ?></h3><br>
   
  		<form method="post" action="">
		<table> 
			<tr>
				<td colspan="2">
				 <h3>Que <?php echo $question['quesNo']; ?>: <?php echo $question['ques']; ?>?</h3>
				</td>
			</tr>
				<?php 
					$answer=$exm->getAnswer($number);
					if ($answer) {
						while ($result = $answer->fetch_assoc()) {
				?>
			<tr>
				<td>
				 <input type="radio" name="ans" value="<?php echo $result['id']; ?>" /><?php echo $result['ans']; ?>
				</td>
			</tr>
				<?php } } ?>
			<tr>
			  <td>
				<button type="submit" class="btn btn-info tabs" name="submit" value="NEXT QUESTION"><div class="col-sm-12  ">NEXT QUESTION</div></button>
				<input type="hidden" name="number" value="<?php echo $number; ?>" />
			</td>
			</tr>
			
		</table>
		</form>
</div>
</body>


<!--<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">-->





 



 <!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>CRT MOCK TESTS</p> 
</footer>


