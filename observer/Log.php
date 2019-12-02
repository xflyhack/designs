<?php
require_once './Observer.php';
class Log implements Observer
{
    /**
     * 日志监听
     * @param Observable $observable
     */
    public function update(Observable $observable)
    {
        /**
         * 订单更新失败时候执行记录日志
         */
        if(!$observable->getState()) {
            $order = $observable->getOrderInfo();
            $orderJson = $this->formatData($order);
            echo "记录文本日志\r\n" . $orderJson . "\r\n";
        }
    }


    /**
     * 格式化订单信息
     * @param $order
     * @return false|string
     */
    private function formatData($order)
    {
        return json_encode($order,JSON_UNESCAPED_UNICODE);
    }
}

