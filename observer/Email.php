<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17
 * Time: 9:42
 */



class Email implements Observer
{


    public function update(Observable $observable)
    {

        // TODO: Implement update() method.
        $state = $observable->getState();

        if($state){
            echo '发送邮件，成功下单';
        }else{
            echo '发送邮件，操作失败';
        }
    }
}