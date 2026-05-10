<?php
if (!isset(($page_title))) {
    $page_title = "Nexus Cart - Ecommerce";
}

$path_prefix = "";
if (strpos($_SERVER['PHP_SELF'], 'users_area') !== false) {
    $path_prefix = "../";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>

    <!-- bootstrap css linking -->
    <link rel="stylesheet" href="<?php echo $path_prefix; ?>bootstrap/css/bootstrap.min.css">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

    <!-- Main stylesheet -->
    <link rel="stylesheet" href="<?php echo $path_prefix; ?>style.css">

    <?php
    if (strpos($_SERVER['PHP_SELF'], 'users_area') !== false) {
        ?>
        <link rel="stylesheet" href="<?php echo $path_prefix; ?>users_area/user_style.css">
        <?php
    }
    ?>
</head>

<body>