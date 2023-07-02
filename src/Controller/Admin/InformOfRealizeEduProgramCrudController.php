<?php

namespace App\Controller\Admin;

use App\Entity\InformOfRealizeEduProgram;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class InformOfRealizeEduProgramCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InformOfRealizeEduProgram::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('normativ_edu')->setLabel('Нормативный срок обучения'),
            TextField::new('budget')->setLabel('За счет средств бюджета'),
            TextField::new('contract')->setLabel('По договорам'),
            TextField::new('count_foreign')->setLabel('Численность обучающихся, являющихся иностранными гражданами'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Сведения о реализации образовательных программ');
    }
}
