<?php
interface  Observable
{
        // 添加观察者
        public function attach(Observer $observer);
        // 删除观察者
        public function detach(Observer $observer);
        // 触发通知
        public function notify();

        // 获取订单状态
        public function getState();
        // 获取到订单的数据信息
        public function getOrderInfo();
}