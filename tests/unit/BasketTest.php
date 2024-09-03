<?php


namespace Unit;

use app\models\Product;
use app\models\Basket;
use \UnitTester;

class BasketTest extends \Codeception\Test\Unit
{

    protected UnitTester $tester;

    protected function _before()
    {
    }

    // tests
    public function testSomeFeature()
    {

    }

    public function testActionBasket1()
    {
        $test_name = new Product;
        $test_name->basket(1, 2);
        $product = Basket::find()->where(['id_product' => 1])->one();
        verify($product['id_product'])->equals(1);
    }

    public function testActionBasket2()
    {
        $test_name = new Product;
        $test_name->basket(3, 4);
        $product = Basket::find()->where(['id_product' => 3])->one();
        verify($product['number'])->equals(4);
    }

    public function testActionBasket3()
    {
        $test_name = new Product;
        $test_name->basket(5, 6);
        $product = Basket::find()->where(['id_product' => 5])->one();
        $change_price = Product::find()->where(['id' => 5])->one();
        verify($product['price'])->equals(6 * $change_price['price']);
    }

    public function testActionBasket4()
    {
        $test_name = new Product;
        $start_number = Product::find()->where(['id' => 7])->one();
        $test_name->basket(7, 8);
        $change_number = Product::find()->where(['id' => 7])->one();
        verify($change_number['number'])->equals($start_number['number'] - 8);
    }
}
