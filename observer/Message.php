<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/19
 * Time: 15:05
 */

class Message implements Observer
{
    public function update(Observable $observable)
    {
        // TODO: Implement update() method.
        echo "message";
    }
}