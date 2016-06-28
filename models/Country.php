<?php

namespace humanized\countries\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property string $id
 * @property integer $has_postcodes
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['has_postcodes'], 'integer'],
            [['id'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'has_postcodes' => Yii::t('app', 'Has Postcodes'),
        ];
    }
}
