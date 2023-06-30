<?php

namespace App\Controller\Admin;

use App\Entity\BannersVacancies;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class BannersVacanciesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BannersVacancies::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('photo')->setUploadDir('public\assets\upload\img')
            ->setBasePath('public\assets\upload\files')
            ->setLabel('Выбрать банер вакансии'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Банеры вакансий');
    }

}
