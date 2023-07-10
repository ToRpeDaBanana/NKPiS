<?php

namespace App\Controller\Admin;

use App\Entity\CalendarStudy;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class CalendarStudyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CalendarStudy::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('file')->setUploadDir('public/assets/upload/files')
            ->setBasePath('public/assets/upload/files')
            ->setFormTypeOption('multiple', true)
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Выбрать файл(ы)'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Календарные учебные графики');
    }

}
