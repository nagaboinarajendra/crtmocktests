<?php include 'inc/header.php'; ?>

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

<!-- First Container -->
<div id="home" data-spy="scroll" class="container-fluid bg-1 text-center">
  <!--<h3 class="margin" style="color: black">CRT MOCK TESTS</h3> -->
  <div style="height: 500px;">
<section id="login">
    <div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap loginright">
                <h1>Sign up with your email account</h1>
                    <form role="form" action="" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" class="sr-only">NAME</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="NAME">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">USERNAME</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="USERNAME">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="PASSWORD">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="MAIL ID">
                        </div>
                        <div class="checkbox" style="float: left;">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Show password</span>
                        </div>
                        <input type="submit" id="regsubmit" class="btn btn-custom btn-lg btn-block" value="SIGN UP">
                    </form>
                         <p>Already Registered ? <a href="index.php">Signin</a> Here</p>
                         <span id="state"></span>
              </div>
        </div>
      </div> 
    </div> 
</section>
</div>
</div>

<!-- Second Container -->
<div id="about" data-spy="scroll" class="container-fluid bg-2 text-center">
  <h3 class="margin">What is this site?</h3>
  <p>Placement Market Today Every student has a good intention to get a better placement in the corporate world. However, not everyone has the ability to start the career on a promising note. Lot many of the students are a blend of under-skilled and under-exposed mixture. Under-skilled is where the students lack the right skills that industry is looking for. These skills are a mix of Behavioural, Communication, Vocabulary, Interpersonal, Verbal and Aptitude. Under-exposed, is the situation where student has the knowledge of skill-set but is not able to get through the right organization with the kind of skill-set the candidate is carrying.</p>

  <p><b>What is Campus Recruitment?</b> Organizations today have a scheduled process of recruiting fresh talent from Government and private institutions. This gives the students a big opportunity of having a company visit their campus and hire them, even before the completion of their course. However, any good company has a definitive benchmark with respect to the workforce that they intend to hire. Apart from the basic field specific skill-set, they also look for people with ambition, aptitude, effective communication skills and team work.
  </p>
</div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>CRT MOCK TESTS</p> 
</footer>