<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <div class="nav ">
  </div>
  <div class="sfondo pt-5">
    <div class="container">
      <ul>
        <?php 
          include __DIR__ . '/../php-ajax-dischi/data/db.php';
          foreach ($database as $disco){?>
            <li>
              <img src="<?php echo $disco["poster"]?>" alt="">
              <div class="title"><?php echo $disco["title"]?></div>
              <div class="text"><?php echo $disco["author"]?></div>
              <div class="text"><?php echo $disco["year"]?></div>
            </li>
        <?php }?>
      </ul>
    </div>
  </div>
</body>
</html>