<?php

function get_occasions()
{
    global $con;
    $select_occasions = "SELECT * FROM occasions";
    $result_occasions = mysqli_query($con, $select_occasions);
    while ($row = mysqli_fetch_assoc($result_occasions)) {
        $occasion_id = $row["occasion_id"];
        $occasion_title = $row["occasion_title"];
        echo " <li class='nav-item'><a href='index.php?occasion=$occasion_id' class='nav-link'>$occasion_title</a></li>";
    }
}
function get_gift_categories()
{
    global $con;
    $select_categories = "SELECT * FROM gift_categories";
    $result_categories = mysqli_query($con, $select_categories);
    while ($row = mysqli_fetch_assoc($result_categories)) {
        $category_id = $row["category_id"];
        $category_title = $row["category_title"];
        echo " <li class='nav-item'><a href='index.php?category=$category_id' class='nav-link'>$category_title</a></li>";
    }
}

function get_products()
{
    global $con;
    if (!isset($_GET['occasion']) && !isset($_GET['category'])) {
        $select_query = "SELECT * FROM products ORDER BY RAND() LIMIT 9";
        $result_query = mysqli_query($con, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row["product_id"];
            $product_title = $row["product_title"];
            $product_description = $row["product_description"];
            $product_image1 = $row["product_image1"];
            $product_price = $row["product_price"];
            echo " <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <img src='./images/$product_image1' alt='product image' class='card-img-top'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>" . substr($product_description, 0, 50) . "...</p>
                            <span class='card-price'>$$product_price</span>
                            <div class='card-actions d-flex gap-2 mt-2'>
                                <a href='index.php?add_to_cart=$product_id' class='btn btn-custom'>
                                    <i class='fas fa-shopping-cart me-2'></i>Add To Cart
                                </a>
                                <a href='product_details.php?product_id=$product_id' class='btn btn-view-product'>
                                    <i class='fas fa-eye me-2'></i>View
                                </a>
                            </div>
                        </div>
                    </div>
                </div>";
        }
    }
}

function get_unique_gift_categories()
{
    global $con;
    if (isset($_GET['category'])) {
        $category_id = intval($_GET['category']);
        $select_query = "SELECT * FROM products WHERE category_id = $category_id";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows == 0) {
            echo "<div class='col-12 text-center'><h2 class='text-danger'>No products found for this category</h2></div>";
        }
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row["product_id"];
            $product_title = $row["product_title"];
            $product_description = $row["product_description"];
            $product_image1 = $row["product_image1"];
            $product_price = $row["product_price"];
            echo " <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <img src='./images/$product_image1' alt='product image' class='card-img-top'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>" . substr($product_description, 0, 50) . "...</p>
                            <span class='card-price'>$$product_price</span>
                            <div class='card-actions d-flex gap-2 mt-2'>
                                <a href='index.php?add_to_cart=$product_id' class='btn btn-custom'>
                                    <i class='fas fa-shopping-cart me-2'></i>Add To Cart
                                </a>
                                <a href='product_details.php?product_id=$product_id' class='btn btn-view-product'>
                                    <i class='fas fa-eye me-2'></i>View
                                </a>
                            </div>
                        </div>
                    </div>
                </div>";
        }

    }
}

function get_unique_occasions()
{
    global $con;
    if (isset($_GET['occasion'])) {
        $occasion_id = intval($_GET['occasion']);
        $select_query = "SELECT * FROM products WHERE occasion_id = $occasion_id";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows == 0) {
            echo "<div class='col-12 text-center'><h2 class='text-danger'>No products found for this occasion</h2></div>";
        }
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row["product_id"];
            $product_title = $row["product_title"];
            $product_description = $row["product_description"];
            $product_image1 = $row["product_image1"];
            $product_price = $row["product_price"];
            echo " <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <img src='./images/$product_image1' alt='product image' class='card-img-top'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>" . substr($product_description, 0, 50) . "...</p>
                            <span class='card-price'>$$product_price</span>
                            <div class='card-actions d-flex gap-2 mt-2'>
                                <a href='index.php?add_to_cart=$product_id' class='btn btn-custom'>
                                    <i class='fas fa-shopping-cart me-2'></i>Add To Cart
                                </a>
                                <a href='product_details.php?product_id=$product_id' class='btn btn-view-product'>
                                    <i class='fas fa-eye me-2'></i>View
                                </a>
                            </div>
                        </div>
                    </div>
                </div>";
        }

    }
}


function get_all_products()
{
    global $con;
    if (!isset($_GET['occasion']) && !isset($_GET['category'])) {
        $select_query = "SELECT * FROM products ORDER BY RAND()";
        $result_query = mysqli_query($con, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row["product_id"];
            $product_title = $row["product_title"];
            $product_description = $row["product_description"];
            $product_image1 = $row["product_image1"];
            $product_price = $row["product_price"];
            echo " <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <img src='./images/$product_image1' alt='product image' class='card-img-top'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>" . substr($product_description, 0, 50) . "...</p>
                            <span class='card-price'>$$product_price</span>
                            <div class='card-actions d-flex gap-2 mt-2'>
                                <a href='index.php?add_to_cart=$product_id' class='btn btn-custom'>
                                    <i class='fas fa-shopping-cart me-2'></i>Add To Cart
                                </a>
                                <a href='product_details.php?product_id=$product_id' class='btn btn-view-product'>
                                    <i class='fas fa-eye me-2'></i>View
                                </a>
                            </div>
                        </div>
                    </div>
                </div>";
        }
    }
}
