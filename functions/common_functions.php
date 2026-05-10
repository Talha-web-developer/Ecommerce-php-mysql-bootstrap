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

function view_details()
{
    global $con;

    if (isset($_GET['product_id']) && filter_var($_GET['product_id'], FILTER_VALIDATE_INT)) {
        $product_id = (int) $_GET['product_id'];

        $select_product_query = "SELECT * FROM products WHERE product_id = ?";
        $stmt = mysqli_prepare($con, $select_product_query);
        mysqli_stmt_bind_param($stmt, "i", $product_id);
        mysqli_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($result)) {
            $product_title = htmlspecialchars($row["product_title"]);
            $product_description = htmlspecialchars($row["product_description"]);
            $product_image1 = htmlspecialchars($row["product_image1"]);
            $product_image2 = htmlspecialchars($row["product_image2"]);
            $product_image3 = htmlspecialchars($row["product_image3"]);
            $product_price = htmlspecialchars($row["product_price"]);

            $base_image_path = 'images/';

            echo "
            <div class='col-md-6 text-center'>
                <img src='{$base_image_path}{$product_image1}' alt='{$product_title}' class='product-main-image mb-4 img-fluid'>
                <div class='d-flex justify-content-center gap-3'>
                    <img src='{$base_image_path}{$product_image1}' alt='{$product_title}' class='product-small-image'   
                        onclick=\"changeImage('{$base_image_path}{$product_image1}')\">";

            if (!empty($product_image2)) {
                echo "<img src='{$base_image_path}{$product_image2}' alt='{$product_title}' class='product-small-image'
                        onclick=\"changeImage('{$base_image_path}{$product_image2}')\">";
            }

            if (!empty($product_image3)) {
                echo "<img src='{$base_image_path}{$product_image3}' alt='{$product_title}' class='product-small-image'
                        onclick=\"changeImage('{$base_image_path}{$product_image3}')\">";
            }

            echo "</div>
            </div>
    

        <div class='col-md-6'>
            <h2 class='product-title'>{$product_title}</h2>
            <h4 class='product-price'>{$product_price}</h4>
            <p class='product-description'>{$product_description}</p>
            <a href='index.php?add_to_cart={$product_id}' class='btn btn-custom mt-3'>
                <i class='fas fa-shopping-cart me-2'></i>Add To Cart
            </a>
            <a href='index.php' class='btn btn-view-product mt-3'>
                <i class='fas fa-home me-2'></i>Back to Home
            </a>
        </div>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "<h3 class='text-center text-danger'>No products found</h3>";
    }
}


function search_product()
{
    global $con;

    if (isset($_GET['search_data_product'])) {
        $search_data_value = mysqli_real_escape_string($con, $_GET['search_data']);
        $select_query = "SELECT * FROM products WHERE product_title LIKE '%$search_data_value%' OR product_keywords LIKE '%$search_data_value%'";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>No results found for your search</h2>";
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