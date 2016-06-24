<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTest() {
        
        return $this->render('test');
       
    }
    public function actionTest2(){
        $a=1;
        $name="tanchanok";
        //  return $this->render('test2',['a'= $a ,'n'=$name]);
    }
    public function actionTest3($name=null,$fname=null){
        $sms="your name:: $sname <br> lastname :: $fname";
    return $this->render('test3',['ms'=>$sms]);}
   
    
    public  function actionTesturl(){
        return $this->render('testurl');
    }
        
    
}


