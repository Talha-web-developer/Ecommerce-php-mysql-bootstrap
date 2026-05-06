<?php
if (!isset(($page_title))) {
    $page_title = "Nexus Cart - Ecommerce";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>

    <!-- bootstrap css linking -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

    <!-- Main stylesheet -->
     <link rel="stylesheet" href="/nexus-cart/style.css">
</head>

<body>