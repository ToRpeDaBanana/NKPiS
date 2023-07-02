<?php

namespace App\Controller\Admin;

use App\Entity\InformResultPriem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class InformResultPriemCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InformResultPriem::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('specialties')->setLabel('Наименование профессии/специальности'),
            TextField::new('budget')->setLabel('За счет средств бюджета'),
            TextField::new('contract')->setLabel('По договорам'),
            TextField::new('avg_ball')->setLabel('Средняя сумма баллов по всем вступительным испытаниям (при наличии)'),
            TextField::new('recovery')->setLabel('Восстановления'),
            TextField::new('deductions')->setLabel('Отчисления'),
            TextField::new('translation')->setLabel('Сведения о результатах перевода'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Сведения о результатах приёма');
    }

}
