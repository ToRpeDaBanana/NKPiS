<?php

namespace App\Controller\Admin;

use App\Entity\TeachersDocument;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TeachersDocumentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TeachersDocument::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')->setLabel('Заголовок файла'),
            ImageField::new('file')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setLabel('Документ'),
        ];
    }

}
