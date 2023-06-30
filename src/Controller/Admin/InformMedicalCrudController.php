<?php

namespace App\Controller\Admin;

use App\Entity\InformMedical;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class InformMedicalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InformMedical::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('text')->setLabel('Медицинское обслуживание'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Медицинское обслуживание');
    }
}
