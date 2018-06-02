<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <link rel="stylesheet" href="css/style.css">
        <script src="./js/reg.js"></script>
    </head>
    <body>
        <nav class="navbar" style="background-color: #19aff5;">
          <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
           </button>
           <a class="navbar-brand crud" href="#">Crud System</a>
           </div>
  </div>
</nav>
   <div class="container">
       <ul class="nav nav-tabs">
           <li><a data-toggle='tab' href="#index">Index</a></li>
           <li><a data-toggle='tab' href="#login">Login</a></li>
           <li><a data-toggle='tab' href="#signup">SignUp</a></li>
           <li><a data-toggle='tab' href="#admin">Admin</a></li>
       </ul>
       <div class="tab-content">
           <div id="index" class="tab-pane fade in">
               <p>Index</p>
           </div>
           <div id="login" class="tab-pane fade ">
               <p>Login</p>
           </div>
           <div id="signup" class="tab-pane fade in">
               <?php include("./user/signup.php"); ?>
           </div>
           <div id="admin" class="tab-pane fade in">
               <p>Admin</p>
           </div>
       </div>
   </div>
   

    </body>
</html>