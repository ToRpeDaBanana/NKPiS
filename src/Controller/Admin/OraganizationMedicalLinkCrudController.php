<?php

namespace App\Controller\Admin;

use App\Entity\OraganizationMedicalLink;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\TextEditorType;

class OraganizationMedicalLinkCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OraganizationMedicalLink::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            UrlField::new('important_know')->setLabel('Это важно знать'),
            UrlField::new('recommendations')->setLabel('Рекомендации РОСПОТРЕБНАДЗОРА'),
            TextEditorField::new('text')->setLabel('Медицинское учреждение')
        ];
    }

}
