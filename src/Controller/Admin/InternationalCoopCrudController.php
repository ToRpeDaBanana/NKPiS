<?php

namespace App\Controller\Admin;

use App\Entity\InternationalCoop;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class InternationalCoopCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InternationalCoop::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('inform_contract')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('СВЕДЕНИЯ О ЗАКЛЮЧЕННЫХ И ПЛАНИРУЕМЫХ К ЗАКЛЮЧЕНИЮ ДОГОВОРАХ С ИНОСТРАННЫМИ И (ИЛИ) МЕЖДУНАРОДНЫМИ ОРГАНИЗАЦИЯМИ ПО ВОПРОСАМ ОБРАЗОВАНИЯ И НАУКИ (ПРИ НАЛИЧИИ).'),
            ImageField::new('inform_dogovor')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('СВЕДЕНИЯ О МЕЖДУНАРОДНОЙ АККРЕДИТАЦИИ ОБРАЗОВАТЕЛЬНЫХ ПРОГРАММ (ПРИ НАЛИЧИИ).'),
        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Международное сотрудничество');
    }
}
