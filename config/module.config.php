<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'Desyncr\Wtngrm\Beanstalk\Service\BeanstalkService'  => 'Desyncr\Wtngrm\Beanstalk\Factory\BeanstalkServiceFactory'
        )
    )
);
