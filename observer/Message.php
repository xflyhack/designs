<?php
require_once './Observer.php';
class Message implements Observer
{
    /**
     * 推送消息
     * @param Observable $observable
     */
    public function update(Observable $observable)
    {
        $orderInfo = $observable->getOrderInfo();
        if($observable->getState()) {
            echo "推送消息\r\n" . print_r($orderInfo,true) . "\r\n";
        }else{
            echo "不推送消息\r\n";
        }
    }
}

