<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17
 * Time: 9:39
 */



class Log implements Observer
{
    public function update(Observable $observable)
    {
        // TODO: Implement update() method.
        echo "\t" . '记录日志';
    }
}