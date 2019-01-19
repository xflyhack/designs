<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17
 * Time: 9:24
 */


interface Observable
{
    //添加观察者
    public function attach(Observer $observer);

    //删除观察者
    public function detach(Observer $observer);

    //触发通知
    public function notify();

    //获取状态
    public function getState();

}