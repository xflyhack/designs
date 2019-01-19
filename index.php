<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17
 * Time: 9:44
 */

//require "Observable.php";
//require "Observer.php";

//require "Email.php";
//require "Log.php";
//require "Order.php";

require "vendor/autoload.php";

//require "vendor/autoload.php";

//创建观察者
$email = new Email();

//var_dump($email);exit;
$log = new Log();

//创建被观察者
$order = new Order();

//向订单注册观察者
$order->attach($email);

$order->attach($log);

//var_dump($order);exit;
//添加订单
$order->addOrder();
//exit;

echo "<br/>";
//删除 log 观察者
$order->detach($log);
//添加订单
$order->addOrder();
