<?php
require_once './Observer.php';
class Email implements Observer
{
    /**
     * 更新用户信息
     * @param Observable $observable
     */
    public function update(Observable $observable)
    {
        $orderInfo = $observable->getOrderInfo();
        if($observable->getState()) {
            echo "发送邮件队列\r\n" . print_r($orderInfo,true) . "\r\n";
        }else{
            echo "不加入队列\r\n";
        }
    }
}

