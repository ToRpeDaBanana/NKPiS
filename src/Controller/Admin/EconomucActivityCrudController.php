<?php

namespace App\Controller\Admin;

use App\Entity\EconomucActivity;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class EconomucActivityCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return EconomucActivity::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            DateField::new('date')->setLabel('Дата'),
            IntegerField::new('sybsidy_state_task')->setLabel('Субсидия на выполнение гос. задания'),
            IntegerField::new('extra_budget')->setLabel('Внебюджетные средства'),
            IntegerField::new('target_subsidies')->setLabel('Целевые субсидии'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('таблицу')
            ->setEntityLabelInPlural('Сведения об остатках денежных средств');
    }
}
