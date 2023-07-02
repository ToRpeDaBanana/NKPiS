<?php

namespace App\Controller\Admin;

use App\Entity\PersonalAccount;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PersonalAccountCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PersonalAccount::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('type')->setLabel('Тип лицевого счета'),
            TextField::new('fky')->setLabel('Орган ФКУ'),
            TextField::new('number')->setLabel('№ лицевого счета'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Лицевой счет учреждения');
    }
}
