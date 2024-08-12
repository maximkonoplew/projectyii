<?php

namespace app\controllers;

use app\models\Product;
use yii\rest\ActiveController;

class ProductController extends activeController
{
    public $modelClass = 'app\models\Product';
    
    public function actionBuy($id)
    {
        $product = Product::find()->select('name')->all();
        return 'Товар ' . $product[$id - 1]['name'] . ' добавлен в корзину';
    }

    public function actionCompare($id1, $id2)
    {
        $product_compare = Product::find()->select('name')->all();
        if (strlen($product_compare[$id1 - 1]['name']) > strlen($product_compare[$id2 - 1]['name'])){
            return $product_compare[$id1 - 1];
        }elseif(strlen($product_compare[$id2 - 1]['name']) < strlen($product_compare[$id2 - 1]['name'])){
            return $product_compare[$id2 - 1];
        }else{
            return "Количество букв в словах одинаково";
        }
   }
}
?>