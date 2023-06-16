<?php

namespace App\Controller\Admin;

use App\Entity\MedicalExamAdm;
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
            TextEditorField::new('Медицинский осмотр для поступления текст')->setLabel(''),
        ];
    }

}
