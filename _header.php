<?php
$isRTL = isset($_GET['dir']) && $_GET['dir'] === 'rtl';
?>

<!doctype html>

<html dir="<?php echo (isset($_GET['dir'])) ? $_GET['dir'] : 'ltr'; ?>">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tajawal Font -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">

    <!-- icomoon -->
    <link rel="stylesheet" href="assets/css/icomoon/style.css">

    <!-- flag icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

    <!-- Custom CSS -->
    <link href="assets/scss/style.css" rel="stylesheet">

    <title> GFPF 2026 | Home </title>

</head>

<body dir="<?php echo (isset($_GET['dir'])) ? $_GET['dir'] : 'ltr'; ?>">