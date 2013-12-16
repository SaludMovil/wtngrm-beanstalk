<?php
namespace Desyncr\Wtngrm\Beanstalk\Service;
use Desyncr\Wtngrm\Service as Wtngrm;

class BeanstalkService extends Wtngrm\AbstractService {
    protected $instance = null;
    protected $host = '127.0.0.1';

    public function __construct() {
        $this->instance = new \Pheanstalk_Pheanstalk($this->host);
    }

    public function dispatch() {
        foreach ($this->jobs as $job) {
            $this->instance
                  ->useTube($job->getId())
                  ->put(json_encode($job->serialize()));
        }
    }
}
