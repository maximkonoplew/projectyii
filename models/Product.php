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

    public function buy()
    {
        return 'Товар ' . $this->name . ' добавлен в корзину';
    }

    public static function compare($product_name)
    {
        if (strlen($product_name[0]['name']) > strlen($product_name[1]['name'])){
            return $product_name[0];
        }elseif(strlen($product_name[0]['name']) < strlen($product_name[1]['name'])){
            return $product_name[1];
        }else{
            return "Количество букв в словах одинаково";
        }
    }

    public function basket($number_product)
    {
        if ($number_product <= $this->number){
            $this->number -= $number_product;
            $this->save();

            $basket = new Basket;
            $basket->id_product = $this->id;
            $basket->price = $this->price * $number_product;
            $basket->number = $number_product;
            $basket->save();
            return 'Товар добавлен';
        }else{
            return 'Такого количества товара нет';
        }
    }
}
