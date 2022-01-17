<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>File Uploading</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <form class="" action="" enctype="multipart/form-data" method="post">
        <input type="file" name="images" accept="image/*">
        <button type="submit" name="button">Upload</button>
        <script src="js/script.js" ></script>
      </form>
    </header>
    <?php
    //replace All Code In to One Singel File
    include 'upload.php';
    ?>

    <div class="container">
      <?php include 'load.php'; ?>
      </div>

      <div style="clear: both;"> </div>
    </div>
  </body>
</html>
