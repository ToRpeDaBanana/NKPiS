<?php

namespace App\Controller\Admin;

use App\Entity\Documents;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DocumentsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Documents::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('title_category')->setChoices([
                    'Правоустанавливающие документы'=>'1',
                    'Локальные акты'=>'2',
                    'Коллективно - договорное регулирование'=>'3',
                    'Финансовая деятельность'=>'4',
                    'Отчет о результатах самообследования'=>'5',
                    'Результаты проверок'=>'6',
                ]
            )
            ->setLabel('Категория документа'),
            TextField::new('title_document')->setLabel('Заголовок документа'),
            ImageField::new('document')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Документ'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Документы');
    }

}
