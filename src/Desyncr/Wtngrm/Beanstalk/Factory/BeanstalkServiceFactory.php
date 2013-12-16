<?php
namespace Desyncr\Wtngrm\Beanstalk\Factory;
use Desyncr\Wtngrm\Factory as Wtngrm;
use Desyncr\Wtngrm\Beanstalk\Service\GearmanService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class BeanstalkServiceFactory extends Wtngrm\AbstractServiceFactory implements FactoryInterface {
    protected $configuration_key = 'beanstalk-adapter';

    public function createService(ServiceLocatorInterface $serviceLocator) {
        parent::createService($serviceLocator);

        $service = new BeanstalkService();
        $options = isset($this->config[$this->configuration_key]) ? $this->config[$this->configuration_key] : array();
        $service->setOptions($options);
        return $service;

    }
}
