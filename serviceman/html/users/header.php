<?php
	include("connection.php");
	//include("session.php");//look session.php page
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Star Cinema</title>
  <link rel="shortcut icon" type="image/x-icon" href="../images/star.ico" />
  <link href="../css/bootstrap.min.css" rel="stylesheet">
   <script src="../js/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
  <style>
    
    
    
    
    footer {
      background-color: black
      ;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 75%; /* Set width to 100% */
      margin: auto;
      min-height:300px;
      max-height:500px;
  }

  
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;

    }
  



  
  
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top " >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="main.php">Star Cinema</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <div class="btn-group">
        <a class="btn btn-md btn-default" data-toggle="#user" href="#nowshowing"  >Welcome <?php echo $_SESSION['user']?></a>
      
      
        <a class="btn btn-md btn-danger" data-toggle="#logout" href="logout.php"  ><span class="glyphicon glyphicon-log-out"></span>Logout</a>
      </ul>
  </div>

<!--navbar second-->

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      </div>
    </div>

<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown" >Movies
  
    <b class="caret"></b></a>

  <ul class="dropdown-menu">
    <li><a href="#nowshowing"><b>Now Showing</b></a></li>
    <li class="divider"></li>
    <li><a href="#comingsoon"><b>Coming Soon</b></a></li>
  </ul>
  </li>
        <li><a href="login.php">My tickets</a></li>
        <li><a href="login.php">My Loyality</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>

    </div><!--navbar menu left-->
   
  </div><!--navbar-->
</nav>
</nav>


