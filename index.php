<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Coffee Club</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/main-custom.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
	<script src="js/main-custom.js"></script>
</head>

<body>
   <div id="header">
      <div id="headTxt">
         <span class="lrgLetter">C</span>
         <span id="headerTitle">offee </span>
         <span class="lrgLetter">C</span>
         <span id="headerTitle">lub</span
      </div>   
      <div id="loginToggle">
         <button type="button" id="headLogBut" class="btn btn-primary btnWhtBor" data-toggle="modal" data-target="#myModal">Login</button>
      </div>
      <div id="main_nav">
         <ul id="mainNav">
            <li class="li_Nav">Members</li>
            <li class="li_Nav">Coffee</li>
            <li class="li_Nav">Dues</li>
            <li class="li_Nav">Supplies</li>
            <li class="li_Nav">Contact</li>
         </ul>
      </div>
  </div>
  <div id="container">
     <div id="content">
        dffsdfdsf
        sdfdsf
    </div>
  </div>
  <div id="footer">
     sdffsdfdsf
     sdfdsf
  </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Please Log in or Register Below...</h4>
        </div>
        <div class="modal-body">
          <div id="div_login">
            <form class="login" id="login_form" autocomplete="off">
              <p>
                <label for="user">Username:</label>
                <input type="text" name="user" id="user" value="">
              </p>

              <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" value="">
              </p>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="register" class="btn btn-primary">Register</button>
          <button type="button" id="login_user" class="btn btn-primary">Login</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
</body>
</html>
