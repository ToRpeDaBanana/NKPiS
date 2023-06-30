<?php

namespace App\Controller\Admin;

use App\Entity\MedicalExam;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MedicalExamCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MedicalExam::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('title')->setLabel('Работы медицинских кабинетов в (указать период учебного года)'),
            TextField::new('monday')->setLabel('Понедельник'),
            TextField::new('tuesday')->setLabel('Вторник'),
            TextField::new('wednesday')->setLabel('Среда'),
            TextField::new('trursday')->setLabel('Четверг'),
            TextField::new('friday')->setLabel('Пятница'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('График проведения медицинских осмотров');
    }

}
