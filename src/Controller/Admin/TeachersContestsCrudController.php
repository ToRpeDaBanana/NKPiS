<?php

namespace App\Controller\Admin;

use App\Entity\TeachersContests;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class TeachersContestsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TeachersContests::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')->setLabel('Заголовок'),
            UrlField::new('link')->setLabel('Ссылка'),
            ImageField::new('file')->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setLabel('Выбрать файл'),
        ];
    }

}
