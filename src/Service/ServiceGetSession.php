<?php

use Symfony\Component\DependencyInjection\Annotation\Service;
use Symfony\Component\DependencyInjection\Annotation\Inject;

/**
 * @Service(name="service_get")
 */
class ServiceGetSession {
    private $myData;

    public function setServiceData($data) {
        $this->myData = $data;
    }

    public function getServiceData() {
        return $this->myData;
    }
}