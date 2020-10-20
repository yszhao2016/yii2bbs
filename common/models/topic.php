<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bbs_topic".
 *
 * @property int $id
 * @property int|null $sid
 * @property int|null $uid 版块id
 * @property string|null $title
 * @property string|null $content
 * @property int|null $reply_count
 * @property int|null $view_count
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class topic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bbs_topic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sid', 'uid', 'reply_count', 'view_count', 'created_at', 'updated_at'], 'integer'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sid' => 'Sid',
            'uid' => 'Uid',
            'title' => 'Title',
            'content' => 'Content',
            'reply_count' => 'Reply Count',
            'view_count' => 'View Count',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
