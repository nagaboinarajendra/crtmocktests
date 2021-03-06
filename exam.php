<?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
 ?>

<head>
 	
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
	

<!-- second Container (Grid) -->
<div id="practice" data-spy="scroll" class="container-fluid bg-2 text-center">    
  <h3 class="margin">Practice Makes Man Perfect</h3><br>
  <p>“I believe that we learn by practice. Whether it means to learn to dance by practicing dancing or to learn to live by practicing living, the principles are the same. In each, it is the performance of a dedicated precise set of acts, physical or intellectual, from which comes shape of achievement, a sense of one's being, a satisfaction of spirit. One becomes, in some area, an athlete of God. Practice means to perform, over and over again in the face of all obstacles, some act of vision, of faith, of desire. Practice is a means of inviting the perfection desired.”
  ― Martha Graham</p>
  <a href="bootstrap-sidebar/index.html"><button type="button" class="btn btn-info tabs"><div class="col-sm-12  ">Practice</div></button></a>
</div>

<!-- Third Container (Grid) -->
<div id="exam" data-spy="scroll" class="container-fluid bg-3 text-center">    
  <h3 class="margin">ONLINE TEST</h3><br>
  <p>There is no end to education. It is not that you read a book, pass an examination, and finish with education. The whole of life, from the moment you are born to the moment you die, is a process of learning.</p>
  <a href="starttest.php"><button type="button" class="btn btn-info tabs"><div class="col-sm-12  ">START TEST</div></button></a>
</div>

  <!-- Footer -->
  <footer class="container-fluid bg-4 text-center">
  <p>CRT MOCK TESTS</p> 
  </footer>
</body>




