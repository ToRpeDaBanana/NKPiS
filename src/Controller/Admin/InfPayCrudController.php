<?php

namespace App\Controller\Admin;

use App\Entity\InfPay;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class InfPayCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InfPay::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('inn')->setLabel('ИНН'),
            TextField::new('kpp')->setLabel('КПП'),
            TextField::new('okato')->setLabel('ОКАТО'),
            TextField::new('ogrn')->setLabel('ОГРН'),
            TextField::new('oktmo')->setLabel('ОКТМО'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('ИНН, КПП, ОКАТО, ОГРН, ОКТМО');
    }

}
