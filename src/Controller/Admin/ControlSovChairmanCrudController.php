<?php

namespace App\Controller\Admin;

use App\Entity\ControlSovChairman;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ControlSovChairmanCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ControlSovChairman::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')->setLabel('ФИО'),
            TextField::new('job_loc')->setLabel('Место работы'),
            TextField::new('job_title')->setLabel('Должность'),
            TextField::new('email')->setLabel('Email'),
            TextField::new('phone')->setLabel('Номер телефона'),
            TextField::new('days_time')->setLabel('Дни и время приёма'),
            ImageField::new('photo')
            ->setUploadDir('public/assets/upload/img')
            ->setBasePath('public/assets/upload/img')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Фото'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Председатель УС');
    }
}
