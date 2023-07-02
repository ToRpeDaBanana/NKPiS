<?php

namespace App\Controller\Admin;

use App\Entity\MedicalExamAdm;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class MedicalExamAdmCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MedicalExamAdm::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('text')->setLabel('Медицинский осмотр для поступления текст'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Медицинский осмотр для поступления');
    }

}
