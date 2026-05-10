<?php
include('includes/connect.php');
include('functions/common_functions.php');
include('includes/header.php');
?>

<script>document.title = 'Nexus Cart - Product Details';</script>

<?php include('includes/navbar.php'); ?>

<div class="container my-4">
    <div class="hero-banner">Product Details</div>
</div>

<div class="container my-5">
    <div class="row">
        <?php view_details(); ?>
    </div>
</div>

<!-- javascrip -->

<script>
    function changeImage(newSrc) {
        const mainImage = document.querySelector('.product-main-image');
        if (mainImage) {
            mainImage.src = newSrc;
        }
    }
</script>

<?php include('includes/footer.php'); ?>
</body>

</html>