<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "basket".
 *
 * @property int $id_product
 * @property int $price
 * @property int $number
 */
class Basket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return 'basket';
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
            'id_product' => 'ID',
            'price' => 'Price',
            'number' => 'Number'
        ];
    }
}
