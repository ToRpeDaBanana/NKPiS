<?php

namespace App\Controller\Admin;

use App\Entity\News;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
class NewsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return News::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')->setLabel('Заголовок'),
            TextEditorField::new('first_text')->setLabel('Текст-1'),
            ImageField::new('first_photo')->setUploadDir('public/assets/img')->setLabel('Фото-1'),
            TextEditorField::new('second_text')->setLabel('Текст-2'),
            ImageField::new('second_photo')->setUploadDir('public/assets/img')->setLabel('Фото-2'),
            ImageField::new('file')->setUploadDir('public/assets/files')->setLabel('Выбрать файл'),
            ChoiceField::new('category')->setChoices([
                'О нас'=>'about',
                'Родителям'=>'parents',
                'Учащимся'=>'students',
                'Педагогам'=>'teachers',
                'Поступление в колледж'=>'admission',
            ])->setLabel('Категория'),
            
        ];
    }

}
