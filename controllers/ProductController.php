<?php

namespace app\controllers;

use app\models\Product;
use yii\rest\ActiveController;

class ProductController extends activeController
{
    public $modelClass = 'app\models\Product';
    
    public function actionBuy($id)
    {
        $product = Product::find()->where(['id' => $id])->one();
        return 'Товар ' . $product['name'] . ' добавлен в корзину';
    }

    public function actionCompare($id1, $id2)
    {
        $product_compare_1 = Product::find()->where(['id' => $id1])->one();
        $product_compare_2 = Product::find()->where(['id' => $id2])->one();

        if (strlen($product_compare_1['name']) > strlen($product_compare_2['name'])){
            return $product_compare_1;
        }elseif(strlen($product_compare_1['name']) < strlen($product_compare_2['name'])){
            return $product_compare_2;
        }else{
            return "Количество букв в словах одинаково";
        }
   }
}
?>