<?php

namespace App\Controller\Admin;

use App\Entity\ProfessionalEdu;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProfessionalEduCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProfessionalEdu::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('category')->setChoices([
                'Среднее профессиональное образование'=>'1',
                'Профессиональная подготовка'=>'2',
            ])->setLabel('Категория'),
            TextField::new('title')->setLabel('Заголовок документа'),
            ImageField::new('file')
            ->setUploadDir('public/assets/upload/files')
            ->setBasePath('public/assets/upload/files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Документ'),
            ImageField::new('description')
            ->setUploadDir('public/assets/upload/files')
            ->setBasePath('public/assets/upload/files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Описание образовательной программы'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Профессиональное образование');
    }

}
