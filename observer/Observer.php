<?php

/**
 * 被观察者实现
 * Interface Observer
 */
interface Observer
{
    public function update(Observable $observable);
}

