<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Desyncr\Wtngrm\Beanstalk\Controller\Worker' => 'Desyncr\Wtngrm\Beanstalk\Controller\WorkerController'
        )
    ),
    'console' => array(
        'router' => array(
            'routes' => array(
                'gearman_worker_route' => array(
                    'options' => array(
                        'route' => 'beanstalk worker execute <workerid>',
                        'defaults' => array(
                            '__NAMESPACE__' => 'Desyncr\Wtngrm\Beanstalk\Controller',
                            'controller' => 'Worker',
                            'action' => 'execute'
                        )
                    )
                )
            )
        )
    )
);
