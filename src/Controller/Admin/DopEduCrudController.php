<?php

namespace App\Controller\Admin;

use App\Entity\DopEdu;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DopEduCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DopEdu::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            ChoiceField::new('category')->setChoices([
                'Техническая направленность'=>'1',
                'Физкультурнно-спортивная направленность'=>'2',
                'Социально-педагогическая направленность'=>'3',
                'Художественная направленность'=>'4',
                'Дополнительное профессионально образование'=>'5',
            ])->setLabel('Категория'),
            TextField::new('title')->setLabel('Заголовок документа'),
            ImageField::new('file')
            ->setUploadDir('public/assets/upload/files')
            ->setBasePath('public/assets/upload/files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Документ'),
            ImageField::new('description')
            ->setUploadDir('public/assets/upload/files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setBasePath('public/assets/upload/files')
            ->setLabel('Описание образовательной программы'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Дополнительное образование');
    }

}
