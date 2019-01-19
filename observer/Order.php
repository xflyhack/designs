<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17
 * Time: 9:22
 */



class Order implements Observable
{
    //保存观察者
    /**
     * @var array Observer[]
     */
    private $observers = array();

    //订单状态
    private $state = 0;

    /**
     * 添加观察者
     * @param Observer $observer
     */
    public function attach(Observer $observer)
    {

        // TODO: Implement attach() method.
        $key = array_search($observer, $this->observers);
        if($key === false){
            $this->observers[] = $observer;
        }
    }

    /**
     * 删除观察者
     * @param Observer $observer
     */
    public function detach(Observer $observer)
    {
        // TODO: Implement detach() method.
        $key = array_search($observer, $this->observers);
        if($key !== false){
            unset($this->observers[$key]);
        }
    }

    /**
     * 遍历观察者的 update() 方法
     */
    public function notify()
    {

        // TODO: Implement notify() method.
//        var_dump($this->observers);exit;
        foreach($this->observers as $observer){
            $observer->update($this);
        }
    }

    /**
     * 订单有变化时发送通知
     */
    public function addOrder()
    {

        $this->state = 1;
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
}