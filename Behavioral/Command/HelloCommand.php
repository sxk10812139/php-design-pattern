<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/28 11:31
 */

namespace Behavioral\Command;


class HelloCommand extends AbstractCommand
{
    protected $output;

    /**
     * HelloCommand constructor.
     * @param $output
     */
    public function __construct(Receiver $output)
    {
        $this->output = $output;
    }

    public function execute()
    {
        $this->output->log('hello');
    }

}