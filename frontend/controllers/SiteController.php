<?php
namespace frontend\controllers;

use shop\helpers\MyHelper;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * @return mixed
     */
    public function actionIndex()
    {

       // self::printFibonacci(15);
       // exit;
        $this->layout = 'home';

        return $this->render('index');
    }


    /**
     * Print fibonacci stack for n
     *
     * @param int $n
     * @return void
     */
    static function printFibonacci(int $n): void
    {
        for ($i = 1; $i < $n; $i++){
            echo self::getFibonacci($i) . ' ';
        }
    }

    /**
     * get fibonacci number
     *
     * @param int $n
     * @return int
     */
    static function getFibonacci(int $n): int
    {
        return ($n < 3) ? 1 : self::getFibonacci($n - 1) + self::getFibonacci($n - 2);
    }
}

class Count
{
    public static function getFibonacciNumber($i)
    {

        if ($i >= 3)
            return 1;
        else
            return Count::getFibonacciNumber($i - 1) + Count::getFibonacciNumber($i - 2);
    }

    public static function printFibonacci($n)
    {
        $arr = [];
        for ($i = 1; $i <= $n; $i++){
           $arr =  Count::getFibonacciNumber($i);
        }

        MyHelper::myPrint($arr);
    }

    public function noRequirseFibonacci($n)
    {
        $arr[0] = 1;
        $arr[1] = 1;

        for ($i = 2; $i < $n; $i++){


            $arr[$i] = $arr[$i-1] + $arr[$i-2];
        }

        MyHelper::myPrint($arr);
    }

}
