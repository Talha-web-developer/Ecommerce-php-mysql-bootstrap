<?php
include('includes/connect.php');
include('functions/common_functions.php');
include('includes/header.php');
?>

<script>document.title = 'Nexus Cart - Searching Products...';</script>

<?php include('includes/navbar.php'); ?>

<!-- Homepage -->

<div class="container my-4">
    <div class="hero-banner">Search Results For:
        "<?php echo isset($_GET['search_data']) ? htmlspecialchars($_GET['search_data']) : '' ?>" </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-3 mb-4 sidebar">
            <h4>Occasions</h4>
            <ul class="navbar-nav">
                <?php get_occasions(); ?>
            </ul>

            <h4>Gift Categories</h4>
            <ul class="navbar-nav">
                <?php get_gift_categories(); ?>
            </ul>
        </div>
        <div class="col-lg-9">
            <div class="row g-4">
                <?php search_product(); ?>
                <?php get_unique_gift_categories(); ?>
                <?php get_unique_occasions(); ?>
            </div>
        </div>
    </div>


</div>

<?php include('includes/footer.php'); ?>
</body>

</html>