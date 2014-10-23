<?php
  require "database.php";
  $pdo = Database :: connect();
  $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO post (TITLE, TITLE2, CONTENT, CATEGORY_CATID_OID, REFERURL, SUMMARY, MODIFYAT, DISPLAY) value(?,?,?,?,?,?,?,?)";
  if (!empty($_POST)){
  $name = $_POST['name'];
  $name2 = $_POST['name2'];
  $link = $_POST['link'];
  $short = $_POST['short'];
  $class = $_POST['class'];
  $display = $_POST['display'];
  $create = $_POST['create'];
  $modify = $_POST['modify'];
  $text = $_POST['text'];
  $data = $pdo->prepare($sql);
  $data->execute(array($name, $name2, $text, $class, $link, $short, $modify, $display));
  header("location:index.php?menu=add_new_article");
  }
  else{
  header("location:index.php?menu=add_new_article");
  }
?>
