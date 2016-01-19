<?php
// create_product.php
require_once __DIR__ . "/../bootstrap.php";

$newProductName = 'Test' . time();

$product = new \DoctrineTest\Entity\Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";

