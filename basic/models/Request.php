<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property int $id_marka
 * @property int $id_model
 * @property int $id_restayling
 * @property int $id_obyem
 * @property int $id_created
 * @property string $data
 * @property int $status
 *
 * @property Created $created
 * @property Marka $marka
 * @property Model $model
 * @property Obyem $obyem
 * @property Restayling $restayling
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_marka', 'id_model', 'id_restayling', 'id_obyem', 'id_created', 'status'], 'required'],
            [['id_marka', 'id_model', 'id_restayling', 'id_obyem', 'id_created', 'status'], 'integer'],
            [['data'], 'safe'],
            [['id_marka'], 'exist', 'skipOnError' => true, 'targetClass' => Marka::class, 'targetAttribute' => ['id_marka' => 'id']],
            [['id_created'], 'exist', 'skipOnError' => true, 'targetClass' => Created::class, 'targetAttribute' => ['id_created' => 'id']],
            [['id_model'], 'exist', 'skipOnError' => true, 'targetClass' => Model::class, 'targetAttribute' => ['id_model' => 'id']],
            [['id_obyem'], 'exist', 'skipOnError' => true, 'targetClass' => Obyem::class, 'targetAttribute' => ['id_obyem' => 'id']],
            [['id_restayling'], 'exist', 'skipOnError' => true, 'targetClass' => Restayling::class, 'targetAttribute' => ['id_restayling' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_marka' => 'Марка автомобиля',
            'id_model' => 'Модель',
            'id_restayling' => 'Рестайлинг',
            'id_obyem' => 'Обьем двигателяч',
            'id_created' => 'Дата выпуска',
            'data' => 'Data',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Created]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreated()
    {
        return $this->hasOne(Created::class, ['id' => 'id_created']);
    }

    /**
     * Gets query for [[Marka]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarka()
    {
        return $this->hasOne(Marka::class, ['id' => 'id_marka']);
    }

    /**
     * Gets query for [[Model]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModel()
    {
        return $this->hasOne(Model::class, ['id' => 'id_model']);
    }

    /**
     * Gets query for [[Obyem]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObyem()
    {
        return $this->hasOne(Obyem::class, ['id' => 'id_obyem']);
    }

    /**
     * Gets query for [[Restayling]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRestayling()
    {
        return $this->hasOne(Restayling::class, ['id' => 'id_restayling']);
    }
}
