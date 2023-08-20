<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>جنط</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="vendor/select2/css/select2.min.css">


    <?php
    
if (!empty($_COOKIE["theme"]) && $_COOKIE["theme"] != "default"){ ?>
    <link rel="stylesheet" href="theme/<?php echo $_COOKIE["theme"]; ?>css/style.css">
<?php }else{ ?>
    <!--<link rel="stylesheet" href="css/style.css">-->
        <link rel="stylesheet" href="theme/default/style.css">

<?php } ?>

    
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="fonts/stroyka/stroyka.css">
</head>
