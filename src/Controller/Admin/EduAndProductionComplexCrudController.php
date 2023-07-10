<?php

namespace App\Controller\Admin;

use App\Entity\EduAndProductionComplex;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class EduAndProductionComplexCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return EduAndProductionComplex::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('text')->setLabel('Текст'),
            ImageField::new('photo')
            ->setUploadDir('public/assets/upload/img')
            ->setBasePath('public/assets/upload/img')
            ->setFormTypeOption('multiple', true)
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Фотографии'),
        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Учебно-производственный комплекс');
    }
}
