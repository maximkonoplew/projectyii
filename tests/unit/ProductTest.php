<?php


namespace Unit;

use \UnitTester;
use app\models\Product;

class ProductTest extends \Codeception\Test\Unit
{

    protected UnitTester $tester;

    protected function _before()
    {
    }

    // tests
    public function testSomeFeature()
    {

    }

    public function testActionBuy()
    {
        $test_name = new Product;
        verify($test_name->buy(1))->equals('Товар Мясо добавлен в корзину');
    }

    public function testActionCompare()
    {
        $test_name = new Product;
        verify($test_name->compare(1, 2))->equals('Количество букв в словах одинаково');
    }
}
