<?php

namespace App\Controller\Admin;

use App\Entity\PaymentAccount;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PaymentAccountCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PaymentAccount::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')->setLabel('Наименование банка'),
            TextField::new('otdel')->setLabel('Отделение банка'),
            TextField::new('number_payment')->setLabel('№ расчетного счета'),
            TextField::new('number_korr')->setLabel('№ корреспондентского счета'),
            TextField::new('bik')->setLabel('БИК'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Расчетный счет учреждения');
    }
}
