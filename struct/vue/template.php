<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
</head>

<body>

    <?php include("navbar.php"); ?>

    <?php 
        include("../struct/controler/controlContent.php");
    ?>

        <!-- End Page Content -->
    </div>

    <?php include("footer.php"); ?>


    <script src="js/main.js"></script>
</body>

</html> 