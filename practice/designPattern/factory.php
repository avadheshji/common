<?php 
/**
*
 */
 // Interface for the Product objects
interface ProductInterface {
    public function getName();
}

// Concrete implementation of a Product
class ConcreteProductA implements ProductInterface {
    public function getName() {
        return "Product A";
    }
}

// Concrete implementation of another Product
class ConcreteProductB implements ProductInterface {
    public function getName() {
        return "Product B";
    }
}

// Factory class for creating Product objects
class ProductFactory {
    public static function createProduct($type) {
        switch ($type) {
            case 'A':
                return new ConcreteProductA();
            case 'B':
                return new ConcreteProductB();
            default:
                throw new InvalidArgumentException("Invalid product type.");
        }
    }
}

// Usage example
$productA = ProductFactory::createProduct('A');
echo $productA->getName();  // Output: Product A

$productB = ProductFactory::createProduct('B');
echo $productB->getName();  // Output: Product B

 ?>