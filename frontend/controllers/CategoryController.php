<?php


namespace frontend\controllers;
use yii\rest\ActiveController;
use frontend\resource\Category;

class CategoryController extends ActiveController
{
    public $modelClass=Category::class;
}