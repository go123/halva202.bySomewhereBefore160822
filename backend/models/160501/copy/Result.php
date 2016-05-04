<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "result".
 *
 * @property integer $id
 * @property string $title
 * @property integer $moderation
 * @property integer $listsql_id
 * @property integer $parent_id
 * @property integer $grade_id
 * @property string $comment_TutorAboutPupil1
 * @property integer $mark_TutorAboutPupil1
 * @property string $date_TutorAboutPupil1
 * @property string $comment_Pupil1AboutTutor
 * @property integer $mark_Pupil1AboutTutor
 * @property string $date_Pupil1AboutTutor
 * @property string $commentMaximum_TutorAboutPupil1
 * @property integer $markMaximum_TutorAboutPupil1
 * @property string $dateMaximum_TutorAboutPupil1
 * @property string $commentMaximum_Pupil1AboutTutor
 * @property integer $markMaximum_Pupil1AboutTutor
 * @property string $dateMaximum_Pupil1AboutTutor
 * @property string $comment_Pupil1AboutPupil1
 * @property integer $mark_Pupil1AboutPipil1
 * @property string $date_Pupil1AboutPipil1
 * @property string $commentMaximum_Pupil1AboutPupil1
 * @property integer $markMaximum_Pupil1AboutPipil1
 * @property string $dateMaximum_Pupil1AboutPipil1
 *
 * @property Listsql $listsql
 * @property Grade $grade
 */
class Result extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'result';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'moderation', 'listsql_id', 'parent_id', 'comment_TutorAboutPupil1', 'mark_TutorAboutPupil1', 'date_TutorAboutPupil1', 'comment_Pupil1AboutTutor', 'mark_Pupil1AboutTutor', 'date_Pupil1AboutTutor', 'commentMaximum_TutorAboutPupil1', 'markMaximum_TutorAboutPupil1', 'dateMaximum_TutorAboutPupil1', 'commentMaximum_Pupil1AboutTutor', 'markMaximum_Pupil1AboutTutor', 'dateMaximum_Pupil1AboutTutor', 'comment_Pupil1AboutPupil1', 'mark_Pupil1AboutPipil1', 'date_Pupil1AboutPipil1', 'commentMaximum_Pupil1AboutPupil1', 'markMaximum_Pupil1AboutPipil1', 'dateMaximum_Pupil1AboutPipil1'], 'required'],
            [['moderation', 'listsql_id', 'parent_id', 'grade_id', 'mark_TutorAboutPupil1', 'mark_Pupil1AboutTutor', 'markMaximum_TutorAboutPupil1', 'markMaximum_Pupil1AboutTutor', 'mark_Pupil1AboutPipil1', 'markMaximum_Pupil1AboutPipil1'], 'integer'],
            [['comment_TutorAboutPupil1', 'comment_Pupil1AboutTutor', 'commentMaximum_TutorAboutPupil1', 'commentMaximum_Pupil1AboutTutor', 'comment_Pupil1AboutPupil1', 'commentMaximum_Pupil1AboutPupil1'], 'string'],
            [['date_TutorAboutPupil1', 'date_Pupil1AboutTutor', 'dateMaximum_TutorAboutPupil1', 'dateMaximum_Pupil1AboutTutor', 'date_Pupil1AboutPipil1', 'dateMaximum_Pupil1AboutPipil1'], 'safe'],
            [['title'], 'string', 'max' => 500],
            [['listsql_id'], 'exist', 'skipOnError' => true, 'targetClass' => Listsql::className(), 'targetAttribute' => ['listsql_id' => 'id']],
            [['grade_id'], 'exist', 'skipOnError' => true, 'targetClass' => Grade::className(), 'targetAttribute' => ['grade_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'moderation' => 'Moderation',
            'listsql_id' => 'Listsql ID',
            'parent_id' => 'Parent ID',
            'grade_id' => 'Grade ID',
            'comment_TutorAboutPupil1' => 'Comment  Tutor About Pupil1',
            'mark_TutorAboutPupil1' => 'Mark  Tutor About Pupil1',
            'date_TutorAboutPupil1' => 'Date  Tutor About Pupil1',
            'comment_Pupil1AboutTutor' => 'Comment  Pupil1 About Tutor',
            'mark_Pupil1AboutTutor' => 'Mark  Pupil1 About Tutor',
            'date_Pupil1AboutTutor' => 'Date  Pupil1 About Tutor',
            'commentMaximum_TutorAboutPupil1' => 'Comment Maximum  Tutor About Pupil1',
            'markMaximum_TutorAboutPupil1' => 'Mark Maximum  Tutor About Pupil1',
            'dateMaximum_TutorAboutPupil1' => 'Date Maximum  Tutor About Pupil1',
            'commentMaximum_Pupil1AboutTutor' => 'Comment Maximum  Pupil1 About Tutor',
            'markMaximum_Pupil1AboutTutor' => 'Mark Maximum  Pupil1 About Tutor',
            'dateMaximum_Pupil1AboutTutor' => 'Date Maximum  Pupil1 About Tutor',
            'comment_Pupil1AboutPupil1' => 'Comment  Pupil1 About Pupil1',
            'mark_Pupil1AboutPipil1' => 'Mark  Pupil1 About Pipil1',
            'date_Pupil1AboutPipil1' => 'Date  Pupil1 About Pipil1',
            'commentMaximum_Pupil1AboutPupil1' => 'Comment Maximum  Pupil1 About Pupil1',
            'markMaximum_Pupil1AboutPipil1' => 'Mark Maximum  Pupil1 About Pipil1',
            'dateMaximum_Pupil1AboutPipil1' => 'Date Maximum  Pupil1 About Pipil1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListsql()
    {
        return $this->hasOne(Listsql::className(), ['id' => 'listsql_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrade()
    {
        return $this->hasOne(Grade::className(), ['id' => 'grade_id']);
    }
}
