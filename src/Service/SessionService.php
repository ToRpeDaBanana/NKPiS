<?php
namespace App\Service;

use Doctrine\ORM\Mapping\Entity;
use EasyCorp\Bundle\EasyAdminBundle\Event\AfterEntityDeletedEvent;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;


class SessionService{


    public function __construct(){

    }
    
    public function getCustomData(){

        return[
            'fontSize',
            'font',
            'display',
            'checkboxInterval',
            'betweenInterval',
            'colorSite1',
            'colorSite2',
            'imgVisible',
        ];
    }
    public function setSessionData($session, $data){
        
        foreach($data as $k => $item){
            if( in_array($k, $this->getCustomData())){
                $session->set($k, $item);
            }
            
        }
    }

    public function getSessionData($session){
        
        $sessionValues = [];
        foreach($this->getCustomData() as $item){
            if ($session->has($item)){
                $sessionValues[$item] = $session->get($item);
            }
            
        }
        return $sessionValues;
    }
}