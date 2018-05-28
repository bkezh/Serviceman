<!DOCTYPE html>
<html  lang="en">
<meta charset="UTF-8">
<head>
  <title>Service Man</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
   <script src="../js/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
  
</head>
<body style="padding-top: 70px;">


<!--navbar-->
<nav class="navbar navbar-expand-lg fixed-top bg-info navbar-dark">
  
    
      <!--logo-->
      <a class="navbar-brand" href="main.php">Service Man</a>
      <!--toogle-->
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
    
    <!--navitems-->
    <div class="collapse navbar-collapse" id="myNavbar">
    <!--navbar menu left-->

      <!--navbar menu right-->

<ul class="navbar-nav ml-auto">
        <li><a href="register.php" class="nav-link"> Register</a></li>
      
    
      </ul>
       
  </div><!--navbar-->
</nav>

  <!--content-->
 <div class="container">
  <h1><center>Login</center></h1>
</br>
  <div class="row">
    <div class="col-xl-4"></div>
            <div class="col-xl-4 ">

                <div class="login-panel panel panel-default">
                    
                    <div class="panel-body">
                        <form role="form" name="user" method="POST" >
                            <fieldset>
                              <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text" id="btnGroupAddon">As</div>
    </div>
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="1">Worker</option>
        <option value="2">Client</option>
      </select>
  </div>
</br>
                                <div class="input-group">
                                    <input class="form-control input-lg" placeholder="E-mail" name="pemail" type="email" autofocus>
                                </div>
                                </br>
                                <div class="input-group">
                                    <input class="form-control input-lg" placeholder="Password" name="ppassword" type="password" value="">
                                </div>
                              </br>
                                
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me"> Remember Me 
                                    </label>
                                </div>
                                <hr>
                                </br>
                                <input type="submit" name="btnsubmit" class="btn btn-lg btn-info btn-block" value="Login">
                              </br>

                                <center><a href="#">Forgot Password?</a></center>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4"></div>
        </div><!--row-->
        
</div><!--Container-->





</body>
</html>