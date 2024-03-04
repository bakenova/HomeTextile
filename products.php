<?php
require_once "./local/templates/prolog.php";
require_once "./local/source/init.php";
?>
<!DOCTYPE html>
<html lang="en">

<?php
include $_SERVER['DOCUMENT_ROOT'].SITE_DIR."/local/templates/head.php";
?>

<body>
    <?php
    include $_SERVER['DOCUMENT_ROOT'].SITE_DIR."/local/templates/header.php";
    ?>

        <main>
            <div class = "products-page">
                <div class = "products-search">
                    <div class = "welcome-section-products">
                        <h2>Products</h2>
                        <p>
                        Welcome to our Products Page, where every item is a testament to luxury and style. 
                        Dive into the exquisite world of home textiles, where premium bedding sets offer a blend of opulence and comfort, transforming your bedroom into a haven of tranquility. 
                        Explore cozy throws, stylish cushions, and plush pillows that add a touch of personality to your living spaces. Our curated collection extends to towels and linens, providing the perfect 
                        blend of functionality and sophistication for your daily routine. 
                        Each piece is a crafted masterpiece, inviting you to indulge in the finer things in life. At Home Textile store, we're dedicated to enhancing your home with timeless 
                        elegance and unparalleled quality. 
                        Discover the extraordinary and welcome to a space where comfort meets refinement.
                        </p>
                    </div>

                    <div class="filter-box">
                        <p class="box-title">Find everything you need</p>
                        
                        <div class="selects">
                            <div class="select">
                                <div class="select-struct">
                                    <p class="select-text">Product Type</p>
                                    <!-- First Dropdown -->
                                    <select name="firstDropdown" id="firstDropdown">
                                        <!-- Add options for the first dropdown as needed -->
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                    </select>
                                </div>
                                
                                <div class="select-struct">
                                    <p class="select-text">Product Type</p>
                                    <!-- Second Dropdown -->
                                    <select name="secondDropdown" id="secondDropdown">
                                        <!-- Add options for the second dropdown as needed -->
                                        <option value="optionA">Option A</option>
                                        <option value="optionB">Option B</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="select">
                                <div class="select-struct">
                                    <p class="select-text">Product Type</p>
                                    <!-- First Dropdown -->
                                    <select name="firstDropdown" id="firstDropdown">
                                        <!-- Add options for the first dropdown as needed -->
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                    </select>
                                </div>
                                
                                <div class="select-struct">
                                    <p class="select-text">Product Type</p>
                                    <!-- Second Dropdown -->
                                    <select name="secondDropdown" id="secondDropdown">
                                        <!-- Add options for the second dropdown as needed -->
                                        <option value="optionA">Option A</option>
                                        <option value="optionB">Option B</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Find Button -->
                        <button>Find</button>
                    </div>

                </div>

                <div class = "search-block">
                    <div class="search-block">
                        <div class="search-container">
                            <img src="<?= SITE_DIR ?>/local/assets/images/searchIcon1.png" alt="Search Image">
                            <span class="separator">|</span>
                            <input type="text" id="searchInput" name="q" placeholder="Search...">
                            <img src="<?= SITE_DIR ?>/local/assets/images/enter.png" alt="Second Image">
                        </div>
                    </div>
                </div>

                <div class = "catalog"> 
                    <h2>Catalog</h2>
                    <p class="cat-desc">Explore Our Catalog For a Curated Collection Of High-Quality Home Textiles. 
                        <br> Elevate Your Living Space With Our Stylish And Comfortable Products.</p>

                    <!-- Product Section -->
                    <div class="product-container">
                        <div class="product">
                            <div class = "product-images">
                                <div class="main-image">
                                    <!-- Larger Image (250x100px) -->
                                    <img src="<?= SITE_DIR ?>/local/assets/images/image2.jpg" alt="Main Image">
                                </div>
                                <div class="small-images">
                                    <!-- Smaller Images (20x20px) -->
                                    <img id="likeImage" src="<?= SITE_DIR ?>/local/assets/images/heart-empty.png" alt="Like Image" onclick="ToggleLike()">
                                    <img id="cartImage" src="<?= SITE_DIR ?>/local/assets/images/cart.png" alt="Small Image 2">
                                    <div class="shape"></div>
                                </div>
                            </div>

                            <div class="product-details">
                                <p class="product-name">Product Name</p>
                                <p class="product-description">Product Description goes here.</p>
                            </div>
                        </div>
                        <div class="product"></div>
                        <div class="product"></div>
                        <div class="product"></div>
                    </div>
                </div>
            </div>
        </main>

        <?php
            include $_SERVER['DOCUMENT_ROOT'].SITE_DIR."/local/templates/footer.php";
        ?>
</body>

</html>
<?php
require_once "./local/templates/epilog.php";
?>