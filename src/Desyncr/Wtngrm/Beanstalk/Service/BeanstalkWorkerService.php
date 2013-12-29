<?php

namespace Desyncr\Wtngrm\Beanstalk\Service;

class BeanstalkWorkerService extends \Desyncr\Wtngrm\Service\AbstractService
{
    protected $instance = null;
    protected $job = null;

    public function __construct($beanstalk, $options)
    {
        $this->setOptions($options);
        $this->instance = $beanstalk;
    }

    public function add($function, $worker, $target = null)
    {
        $this->job = $this->instance
            ->watch($function);
    }

    public function dispatch()
    {
        $this->job->reserve();
    }
}
