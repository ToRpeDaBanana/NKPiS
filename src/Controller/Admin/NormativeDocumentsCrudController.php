<?php

namespace App\Controller\Admin;

use App\Entity\NormativeDocuments;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class NormativeDocumentsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NormativeDocuments::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('text')->setLabel('Текст'),
            ImageField::new('file')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setFormTypeOption('multiple', true)
            ->setLabel('Выбрать файл'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Нормативные документы приёмной комиссии');
    }
}
