<?php
namespace Desyncr\Wtngrm\Beanstalk\Service;
use Desyncr\Wtngrm\Service as Wtngrm;

class BeanstalkService extends Wtngrm\AbstractService {
    protected $instance = null;

    public function __construct($instance, $options) {
        $this->setOptions($options);
        $this->instance = $instance;
    }

    public function dispatch() {
        foreach ($this->jobs as $job) {
            $this->instance
                  ->useTube($job->getId())
                  ->put(json_encode($job->serialize()));
        }
    }
}
