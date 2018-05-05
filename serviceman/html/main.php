<!DOCTYPE html>
<html  lang="en">
<head>
	<title>Service Man</title>
	  <link href="../css/bootstrap.min.css" rel="stylesheet">
   <script src="../js/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
  
</head>
<body>
<!--navbar-->

<header class="navbar navbar-default navbar-fixed-top "  >
  <div class="container-fluid">
    <div class="navbar-header">
    <!--toogle-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--logo-->
      <a class="navbar-brand" href="main.php">Service Man</a>
    </div>
    <!--navitems-->
    <div class="collapse navbar-collapse" id="myNavbar">
    <!--navbar menu left-->

      <ul class="nav navbar-nav">
        <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown" >Services
  
    <b class="caret"></b></a>

  <ul class="dropdown-menu">
    <li><a href="#nowshowing"><b>...</b></a></li>
    <li class="divider"></li>
    <li><a href="#comingsoon"><b>....</b></a></li>
  </ul>
  
        
      </ul>
      <!--navbar menu right-->

<ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"> Register</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php" data-modal="signinPopup"> Login</a></li>
      </ul>
    </div>   
  </div><!--navbar-->
</header>

  <!--content-->
  <div class="container-fluid">
 <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
          <form class="bd-search d-flex align-items-center">
  <input type="search" class="form-control" id="search-input" placeholder="Search..." aria-label="Search for..." autocomplete="off">
  <button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg>
</button>
</form>
</div>
</div>
</body>
</html>