<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ContactCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Contact::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('category')->setChoices([
                'Директор'=>'1',
                'Секретарь'=>'2',
                'Инспектор округа'=>'3',
                'Куратор округа'=>'4',
                'Межрайонный совет'=>'5',
                'Представитель управ. совета'=>'6',
            ])->setLabel('Категория'),
            TextField::new('surname')->setLabel('Фамилия'),
            TextField::new('name')->setLabel('Имя'),
            TextField::new('othestvo')->setLabel('Отчество'),
            TextField::new('phone')->setLabel('Контактный телефон'),
            EmailField::new('email')->setLabel('Эл. почта'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Контактные данные');
    }
}
