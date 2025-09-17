<?php
session_start();
include 'config.php';

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
    
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>สรุปรายการ</title>

    <link href="<?php echo $base_url; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/assets/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/assets/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/assets/fontawesome/css/solid.min.css" rel="stylesheet">

  </head>

    <body class="bg-body-tertiarry">
            <?php include 'include/menu.php' ?>
            <div class="container" style="margin-top: 30px;">
                <?php if(!empty($_SESSION['message'])): ?>
                    <div class="alert alert-warning alert-dismissibel fade show" role="alert">
                <?php echo $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="cloes"></button>
            </div>
            <?php unset($_SESSION['message']); ?>
            <?php endif; ?>        
        </div>
             
        <script src="<?php echo $base_url; ?>/assets/js/bootstrap.min.js"></script>

</body>
</html>
