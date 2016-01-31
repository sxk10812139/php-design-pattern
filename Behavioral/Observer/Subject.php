<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/28 14:27
 */

namespace Behavioral\Observer;


use SplObserver;

class Subject implements \SplSubject
{
    protected $observers;
    protected $data = array();

    /**
     * Subject constructor.
     */
    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }
    
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach($this->observers as $observer){
            $observer->update($this);
        }
    }
    
    public function __set($key,$value){
        $this->data[$key] = $value;
        $this->notify();
    }

}