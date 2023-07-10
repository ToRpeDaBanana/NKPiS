<?php

namespace App\Controller\Admin;

use App\Entity\ControlSovPastMeetings;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Intl\Locales;

class ControlSovPastMeetingsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ControlSovPastMeetings::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
        
           DateField::new('date_past')->setFormat('dd MM yyyy')->setLabel('Дата'),
           ImageField::new('agenda')->setUploadDir('public/assets/upload/files')
           ->setBasePath('public/assets/upload/files')
           ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
           ->setLabel('Повестка'),
           ImageField::new('protocol')->setUploadDir('public/assets/upload/files')
           ->setBasePath('public/assets/upload/files')
           ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
           ->setLabel('Протокол'),
           TextField::new('link')->setLabel('Ссылка'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Прошедшие заседания');
    }
}
