<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/31 02:39
 */

namespace Structural\Adapter;


/**
 * Class EbookAdapter
 * @package Structural
 * @property Ebook $adaptee
 */
class EbookAdapter implements Book
{
    protected $adaptee;

    /**
     * @param mixed $adaptee
     */
    public function setAdaptee(Ebook $adaptee)
    {
        $this->adaptee = $adaptee;
    }
    
    public function open()
    {
        $this->adaptee->start();
    }

    public function close()
    {
        $this->adaptee->stop();
    }

}