<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $pageTitle; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/navbar/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <style>

    #data_container {

      width: 800px;
      height: auto;
      margin-left: 150px;

    }

    #product_box {
        border: 3px solid black;
        width: 310px;
        height: 400px;
        margin-right: 50px;
        text-align: center;
        vertical-align: center;
        font-family: Arial;
        color: orange;
        float: left;
        margin-bottom: 10px;
    }


  </style>
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Ryan Schachte's Web Store</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <?php 
              if ($currentPage == "contact") 
              { echo "
              <li><a href=\"index.php\">Home</a></li>
              <li><a href=\"store.php\">Store</a></li>
              <li class = \"active\"><a href=\"contact.php\">Contact</a></li>";
              }
              else if ($currentPage == "home")
              { echo "
              <li class = \"active\"><a href=\"index.php\">Home</a></li>
              <li><a href=\"store.php\">Store</a></li>
              <li><a href=\"contact.php\">Contact</a></li>";
              } 
              else if ($currentPage == "store")
              { echo "
              <li><a href=\"index.php\">Home</a></li>
              <li class = \"active\"><a href=\"store.php\">Store</a></li>
              <li><a href=\"contact.php\">Contact</a></li>";
              } ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>