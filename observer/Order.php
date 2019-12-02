<?php
require_once 'Observable.php';
require_once 'Email.php';
require_once 'Log.php';
require_once 'Message.php';
class Order implements Observable
{
    // 订单状态
    private $state      = 0;
    private $orderInfo = [];
    // 观察者列表
    private $observers  = [];

    /**
     * 加入观察者对象
     * @param Observer $observer
     */
    public function attach(Observer $observer)
    {
        $key = array_search($observer,$this->observers);
        if(false === $key) {
            $this->observers[] = $observer;
        }
    }

    /**
     * 删除观察者对象
     * @param Observer $observer
     */
    public function detach(Observer $observer)
    {
        $key = array_search($observer,$this->observers);
        if($key) {
            unset($this->observers[$key]);
        }

    }


    /**
     * 通知具体业务
     */
    public function notify()
    {
        // 循环指定被观察者的update方法
        foreach($this->observers as $obj) {
            $obj->update($this);
        }
    }
    /**
     * 创建订单
     */
    public function addOrder()
    {
        // 插入数据库




        // 获取到订单信息
        $this->orderInfo = [
            'title' => '商品标题',
            'price' => 200,
            'intro' => '商品的简介......',
        ];

        // 订单变更
        $state = 1;
        $this->state =$state;


        // 订单完成 执行推送邮件、记录日志通知
        $this->notify();
    }
    /**
     * 获取订单状态
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    public function getOrderInfo()
    {
        return $this->orderInfo;
    }
}


$orderObj = new Order();
$orderObj->attach(new Email());
$orderObj->attach(new Log());
$orderObj->attach(new Message());
$orderObj->addOrder();
