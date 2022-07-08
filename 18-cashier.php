<?php
//**
// * Today you work at a store as the cashier, but 10 minutes before your lunch break, the cash register stops working.
// * Create a function that takes an array of objects (groceries) which calculates the total price and returns it as a number.
// * A grocery object has a product, a quantity and a price.
// */
//
//function cashier(groceries: Grocery[]) { }
//
//export { cashier };
//
//interface Grocery {
//    product: string;
//    quantity: number;
//    price: number;
//}

//test("should return the total price of all groceries", () => {
//        expect(cashier([
//            { product: "Milk", quantity: 1, price: 1.50 }
//        ])).toEqual(1.5);
//        expect(cashier([
//            { product: "Milk", quantity: 1, price: 1.50 },
//            { product: "Cereals", quantity: 1, price: 2.50 }
//        ])).toEqual(4);
//        expect(cashier([
//            { product: "Milk", quantity: 1, price: 1.50 },
//            { product: "Eggs", quantity: 12, price: 0.10 },
//            { product: "Bread", quantity: 2, price: 1.60 },
//            { product: "Cheese", quantity: 1, price: 4.50 }
//        ])).toEqual(10.4);
//    });

class CashRegister
{
    public static function calculate(array $products): float
    {
        $pricePerProduct = [];
        foreach ($products as $product){

            $pricePerProduct[] =  $product->quantity * $product->price;

        }
        return array_sum($pricePerProduct);
    }
}

$milk = new stdClass();
$milk->quantity = 1;
$milk->price = 1.50;

$cereals = new stdClass();
$cereals->quantity = 1;
$cereals->price = 2.50;

$eggs = new stdClass();
$eggs->quantity = 12;
$eggs->price = 0.10;

$bread = new stdClass();
$bread->quantity = 2;
$bread->price = 1.60;

$cheese = new stdClass();
$cheese->quantity = 1;
$cheese->price = 4.50;


$products1 = [$milk];
$products2 = [$milk, $cereals];
$products3= [$milk, $eggs, $bread, $cheese];

echo CashRegister::calculate($products1) . PHP_EOL;
echo CashRegister::calculate($products2) . PHP_EOL;
echo CashRegister::calculate($products3) . PHP_EOL;

