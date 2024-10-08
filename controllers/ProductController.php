<?php

namespace app\controllers;

use app\models\Product;
use yii\rest\ActiveController;

class ProductController extends activeController
{
    public $modelClass = 'app\models\Product';
    
    public function actionBuy($id)
    {
        $product_model = Product::find()->where(['id' => $id])->one();
        return $product_model->buy();
    }

    public function actionCompare($id1, $id2)
    {
        $product_compare = Product::findAll([$id1, $id2]);
        return Product::compare($product_compare);
    }

   public function actionBasket($id_product, $number_product)
    {
        $product_basket = Product::find()->where(['id' => $id_product])->one();
        return $product_basket->basket($number_product);
    }
}
?>