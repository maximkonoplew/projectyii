<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $category
 * @property int $price
 * @property int $number
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    // public function rules()
    // {
    //     return [
    //         [['name', 'category'], 'string', 'max' => 20],
    //         [['description'], 'string', 'max' => 30],
    //     ];
    // }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'category' => 'Category',
            'price' => 'Price',
            'number' => 'Number'
        ];
    }

    public function buy($id)
    {
        $product = Product::find()->where(['id' => $id])->one();
        return 'Товар ' . $product['name'] . ' добавлен в корзину';
    }

    public function compare($id1, $id2)
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

    public function basket($id_product, $number_product)
    {
        $basket = Product::find()->where(['id' => $id_product])->one();
        if ($number_product <= $basket['number']){
            $basket->number = $basket['number'] - $number_product;
            $basket->save();

            $product = new Basket;
            $product->id_product = $id_product;
            $price_product = Product::find()->where(['id' => $id_product])->one();
            $product->price = $price_product['price'] * $number_product;
            $product->number = $number_product;
            $product->save();
            return 'Товар добавлен';
        }else{
            return 'Такого количества товара нет';
        }
    }
}
