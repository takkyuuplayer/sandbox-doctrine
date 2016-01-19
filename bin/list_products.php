<?php
require_once __DIR__ . '/../bootstrap.php';

$productRepository = $entityManager->getRepository('\DoctrineTest\Entity\Product');
$products = $productRepository->getProducts();

foreach($products as $product) {
  echo sprintf("-%s\n", $product->getName());
}
