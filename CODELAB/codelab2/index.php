<?php

include "Controllers/productcontroller.php";

use Controller\productcontroller;

$productController = new ProductController;

echo $productController -> getAllProduct();