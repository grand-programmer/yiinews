<?php

namespace frontend\controllers;
use frontend\resource\Category;
use frontend\resource\News;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use Yii;
class NewsController extends ActiveController
{
    public $modelClass=News::class;
    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

        return $actions;
    }

    public function prepareDataProvider()
    {
        return new ActiveDataProvider([
            'query' => $this->modelClass::find()->joinWith([
                'categories' => function ($query) {
                    $query->where(['categories.id'=>Yii::$app->request->get('category')])->orWhere(['categories.parent'=>Yii::$app->request->get('category')]);
                },
            ]),
        ]);
    }

}
