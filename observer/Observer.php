<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17
 * Time: 9:29
 */



interface Observer
{
    //接受到通知的处理方法
    public function update(Observable $observable);
}