<?php
namespace Desyncr\Wtngrm\Beanstalk\Factory;

use Desyncr\Wtngrm\Factory\AbstractServiceFactory;
use Desyncr\Wtngrm\Beanstalk\Service\BeanstalkWorkerService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class BeanstalkWorkerServiceFactory extends AbstractServiceFactory implements FactoryInterface
{
    protected $configuration_key = 'beanstalk-adapter';

    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        parent::createService($serviceLocator);

        $beanstalk = $serviceLocator->get('Desyncr\Wtngrm\Beanstalk\Worker\BeanstalkWorker');
        $options = isset($this->config[$this->configuration_key]) ? $this->config[$this->configuration_key] : array();

        return new BeanstalkWorkerService($beanstalk, $options);

    }
}
