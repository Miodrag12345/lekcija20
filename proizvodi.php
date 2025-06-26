<?php

require_once "models/product.php";

$krompir=new Product("Krompir", "beli krompir", 99.99,"test.jpg", 140);
$krompir->save();
