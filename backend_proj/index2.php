<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <title>Welcome to MBoutique - by Lance Seo</title>
</head>
<body>
<?php
  $mArray= [
      'welcome'=>['text'=>'Welcome','url'=>'index.php','default'=>true],
      'macarons'=>['text'=>'Our Macarons','url'=>'our_macarons.php'],
      'gifts'=>['text'=>'Gifts & Parties','url'=>'gift_parties.php'],
      'contact'=>['text'=>'Contact','url'=>'contact.php']
  ];
?>

<?
  include 'header.php';
?>

<?
  if (empty($_GET['page'])) {
   $page_to_load = 'index.php';
  }
  else {
   if (isset($mArray[$_GET['page']])) {
     $page_to_load = $mArray[$_GET['page']]['url'];
   }
   else {
     $page_to_load = '404.php';
   }
  }

  include($page_to_load);

//  print_r($_POST);
?>

<?
  include 'footer.php'
?>

</body>
</html>