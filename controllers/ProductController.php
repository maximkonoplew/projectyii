<?php

namespace app\controllers;

use app\models\Product;
use yii\rest\ActiveController;

class ProductController extends activeController
{
    public $modelClass = 'app\models\Product';
    
    public function actionBuy($id)
    {
        $product_buy = new Product;
        return $product_buy->buy($id);
    }

    public function actionCompare($id1, $id2)
    {
        $product_compare = new Product;
        return $product_compare->compare($id1, $id2);
    }

   public function actionBasket($id_product, $number_product)
    {
        $product_basket = new Product;
        return $product_basket->basket($id_product, $number_product);
    }
}
?>