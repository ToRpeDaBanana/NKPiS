<?php

namespace App\Controller\Admin;

use App\Entity\ProfDocument;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class ProfDocumentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProfDocument::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('collective_agreement')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setLabel('Коллективно - договорное регулирование'),
            ImageField::new('agreement_change')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setLabel('Соглашение об изменении коллективного договора'),
            ImageField::new('inform_about')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setLabel('Сведения по результатам уведомительной регистрации коллективного договора'),
            ImageField::new('commission_documents')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setLabel('Документы о комиссии по подготовке, заключению и контролю выполнения коллективного договора'),
            ImageField::new('implementation_documents')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setLabel('Документы по реализации и контролю за выполнением коллективного договора'),
        ];
    }

}
