<?php

namespace app\controllers;

use app\models\Category;
use yii\rest\ActiveController;

class CategoryController extends activeController
{
    public $modelClass = 'app\models\Category';
    
    public function actionProducts($id)
    {
        $product = Category::find()->where(['id' => $id])->one();
        return $product->products(); 
    }
}
?>