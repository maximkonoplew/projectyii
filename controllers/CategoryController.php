<?php

namespace app\controllers;

use app\models\Category;
use yii\rest\ActiveController;

class CategoryController extends activeController
{
    public $modelClass = 'app\models\Category';
    
    public function actionProducts($id)
    {
        $product_category = new Category;
        return $product_category->products($id); 
    }
}
?>