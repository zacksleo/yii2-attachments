<?php

namespace zacksleo\yii2\attachments\models;

use yii\db\ActiveRecord;

/**
 * Class Attachment
 * @package zacksleo\yii2\attachments\models
 * @author zacksleo <zacksleo@gmail.com>
 */
class Attachment extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attachment}}';
    }

    public function rules()
    {
        return [
            [['gallery_id', 'file'], 'required'],
            [['gallery_id', 'position'], 'integer'],
            ['position', 'default', 'value' => 0],
            [['caption', 'file'], 'string', 'max' => 255],
            [['md5', 'size', 'type', 'mime'], 'required'],
            [['size'], 'integer'],
            [['md5', 'type', 'mime'], 'string', 'max' => 255]
        ];
    }
}
