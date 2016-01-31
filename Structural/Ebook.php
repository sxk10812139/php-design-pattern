<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/31 02:38
 */

namespace Structural;


class Ebook implements AbstractEbook
{
    public function start()
    {
        echo 'ebook start';
    }

    public function stop()
    {
        echo 'ebook stop';
    }

}