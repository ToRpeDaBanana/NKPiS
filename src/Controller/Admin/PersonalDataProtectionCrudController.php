<?php

namespace App\Controller\Admin;

use App\Entity\PersonalDataProtection;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PersonalDataProtectionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PersonalDataProtection::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('category')->setChoices([
                'Законы'=>'1',
                'Приказы'=>'2',
                'Указы, постановления, распоряжения'=>'3',
                'Рекомендации'=>'4',
            ])
            ->setLabel('Категория документа'),
            TextField::new('title')->setLabel('Заголовок документа'),
            ImageField::new('file')
            ->setUploadDir('public/assets/upload/files')
            ->setBasePath('public/assets/upload/files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Документ'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Защита персональных данных');
    }
}
