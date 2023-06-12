<?php

namespace App\Controller\Admin;

use App\Entity\PaidEduServ;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class PaidEduServCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PaidEduServ::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            CollectionField::new('parent_folder')->onlyOnForms()->setLabel('Выбрать файлы'),
        ];
    }

}
