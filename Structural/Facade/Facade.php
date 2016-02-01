<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/2/1 10:28
 */

namespace Structural\Facade;

/**
 * Class Facade
 * @package Structural\Facade
 * @property SubSystemOne $sysOne
 * @property SubSystemTwo $sysTwo
 */
class Facade
{
    protected $sysOne;
    protected $sysTwo;

    /**
     * Facade constructor.
     * @param $sysOne
     * @param $sysTwo
     */
    public function __construct($sysOne, $sysTwo)
    {
        $this->sysOne = $sysOne;
        $this->sysTwo = $sysTwo;
    }
    
    public function operationOne(){
        $this->sysOne->operationOne();
        $this->sysTwo->operationOne();
    }

    public function operationTwo(){
        $this->sysOne->operationTwo();
        $this->sysTwo->operationTwo();
    }

}