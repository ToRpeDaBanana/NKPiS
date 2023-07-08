<?php

namespace App\Controller\Admin;

use App\Entity\ControlSovDocuments;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\Validator\Constraints\Choice;

class ControlSovDocumentsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ControlSovDocuments::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('category_document')->setChoices([
                'Нормативно-правовые документы' => 1,
                'Иные (дополнительные) документы управляющего совета' => 0,
            ])->setLabel('Категория файла'),
            ImageField::new('document')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Выбрать файл')
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Документы');
    }
}
