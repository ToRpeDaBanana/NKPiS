<?php

namespace App\Controller\Admin;

use App\Entity\LicenseEdu;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LicenseEduCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LicenseEdu::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('series')->setLabel('Серия'),
            TextField::new('number')->setLabel('№'),
            TextField::new('reg_number')->setLabel('Рег.номер'),
            TextField::new('date')->setLabel('Дата окончания срока действия'),
            ImageField::new('file')
            ->setUploadDir('public/assets/upload/files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setBasePath('public/assets/upload/files')
            ->setLabel('Лицензия на осуществление образовательной деятельности / выписка из реестра лицензий'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Лицензия документ');
    }

}
