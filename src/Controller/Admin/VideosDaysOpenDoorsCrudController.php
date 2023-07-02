<?php

namespace App\Controller\Admin;

use App\Entity\VideosDaysOpenDoors;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class VideosDaysOpenDoorsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return VideosDaysOpenDoors::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')->setLabel('Заголовок'),
            TextEditorField::new('text')->setLabel('Текст'),
            UrlField::new('link')->setLabel('Ссылка'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Дни открытых дверей информация');
    }

}
