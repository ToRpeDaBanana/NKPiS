<?php

namespace App\Controller\Admin;

use App\Entity\SliderMain;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class SliderMainCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SliderMain::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('title')->setLabel('Заголовок'),
            TextEditorField::new('text')->setLabel('Текст'),
            UrlField::new('link')->setLabel('Ссылка'),
            ImageField::new('photo')
            ->setUploadDir('\assets\upload\img')
            ->setBasePath('\assets\upload\img')
            ->setLabel('Фото'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('элемент')
            ->setEntityLabelInPlural('Элементы основного слайдера');
    }

}
