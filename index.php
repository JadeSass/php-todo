<?php ob_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <title>Todo - Jade Code Studio</title>
</head>
<body>
    <?php include "includes/db.php"?> 
    <?php include "includes/header.php"?>
    <?php include "includes/content.php"?> 
    <!-- Injected Javascript -->
    <script src="js/jquery.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
</body>
</html>