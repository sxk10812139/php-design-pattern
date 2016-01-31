<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/28 14:27
 */

namespace Behavioral\Observer;


use SplSubject;

class SubjectObserver implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        echo get_class($subject).' has been updated';
    }

}