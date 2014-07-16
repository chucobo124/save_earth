<!DOCTYPE html>
<html lang="zh-tw">
  <head>
    <?php
    session_start();
    include("Language.php");
    $lang = new Language();
    $lang->load("about");
    echo "<a href='index.php?lang=zh-TW'>Chinese</a> | <a href='index.php?lang=en-US'>English</a><br />";
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <?php include("navgation.php") ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <div id="context">
      <?php
        $menu = (isset($_GET['menu'])) ? strtolower($_GET['menu']) : "";
        if ($menu == ""){
        }
        else{
          $menu = str_replace('.php', '', $menu);
          $menu .= '.php';
          include( $menu );
        }
      ?>
    <div>
  </body>
</html>