<?php


namespace Unit;

use \UnitTester;
use app\models\Category;

class CategoryTest extends \Codeception\Test\Unit
{

    protected UnitTester $tester;

    protected function _before()
    {
    }

    // tests
    public function testSomeFeature()
    {

    }

    public function testActionProducts()
    {
        $test_name = new Category();
        verify(count($test_name->products(1)))->equals(4);
    }
}
