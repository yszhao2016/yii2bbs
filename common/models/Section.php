<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bbs_section".
 *
 * @property int $id
 * @property string|null $name 版块名称
 * @property string|null $poster 封面
 * @property string|null $desc 描述
 * @property int|null $topic_count 评论数
 * @property int|null $view_count 浏览数
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Section extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bbs_section';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['desc'], 'string'],
            [['topic_count', 'view_count', 'created_at', 'updated_at'], 'integer'],
            [['name', 'poster'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'poster' => 'Poster',
            'desc' => 'Desc',
            'topic_count' => 'Topic Count',
            'view_count' => 'View Count',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
