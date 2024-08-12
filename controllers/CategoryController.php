<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use yii\rest\ActiveController;

class CategoryController extends activeController
{
    public $modelClass = 'app\models\Category';
    
    public function actionProducts($id)
    {
        $product = Category::find()->select('name')->all();
        $product_category = Product::find()->where(['category' => $product[$id - 1]['name']])->all();
        return $product_category;
    }
}
?>