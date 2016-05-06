<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <title>Welcome to MBoutique - by Lance Seo</title>
</head>
<body>

  <header>
    <div class="nav">
      <?php
      include('header.php');
      ?>
    </div>
      <img src="assets/images/welcome-image.png">
  </header>

  <?php
  include 'get_page.php';
  ?>

  <footer>
    <?
    include 'footer.php'
    ?>
  </footer>

</body>
</html>