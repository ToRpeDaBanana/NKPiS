<?php

namespace App\Controller\Admin;

use App\Entity\ControlSovChairman;
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
            TextField::new('job_title')->setLabel('Должность'),
            TextField::new('email')->setLabel('Email'),
            TextField::new('phone')->setLabel('Номер телефона'),
            TextField::new('days_time')->setLabel('Дни и время приёма'),
            ImageField::new('photo')
            ->setUploadDir('public/assets/upload/img')
            ->setBasePath('public/assets/upload/img')
            ->setLabel('Фото'),
        ];
    }
}
