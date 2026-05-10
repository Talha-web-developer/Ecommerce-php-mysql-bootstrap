<?php

$project_folder = "Nexus-Cart";

include_once('connect.php');
$common_function_path = $_SERVER['DOCUMENT_ROOT'] . $project_folder . '/functions/common_functions.php';

if (file_exists($common_function_path)) {
    include_once($common_function_path);
} else {
    error_log("Common functions file not found at: " . $common_function_path);
}

if (!isset($base_url)) {
    $base_url = "/Nexus-Cart/";
}

function get_absolute_link($path, $base_url)
{
    $clean_path = ltrim($path, './');
    return rtrim($base_url, '/') . '/' . $clean_path;
}

?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top px-4">
    <div class="container-fluid">
        <a class="navbar-brand logo-link" href="<?php echo get_absolute_link('index.php', $base_url); ?>">
            <img src="<?php echo get_absolute_link('images/logo.png', $base_url); ?>" alt="Gleam Create Logo"
                class="d-inline-block align-text-top gleam-logo">
        </a>
        <!-- toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Nav Items -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_absolute_link('index.php', $base_url); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="<?php echo get_absolute_link('display_all.php', $base_url); ?>">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="<?php echo get_absolute_link('users_area/user_registration.php', $base_url) ?>">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <sup>0</sup>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Total: $0</a>
                </li>


            </ul>
            <form class="d-flex" role="search" method="get"
                action="<?php echo get_absolute_link('search_product.php', $base_url); ?>">
                <input class="form-control me-2" type="search" name="search_data" placeholder="Search Products..."
                    style="min-width:200px;" />
                <button class="btn btn-custom" type="submit" name="search_data_product"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</nav>