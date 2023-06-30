<?php

namespace App\Controller\Admin;

use App\Entity\OraganizationMedicalLink;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;


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
            TextareaField::new('text')->setLabel('Медицинское учреждение')
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Организация медицинского обслуживания');
    }

}
