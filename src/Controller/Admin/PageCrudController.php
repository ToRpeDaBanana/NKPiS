<?php

namespace App\Controller\Admin;

use App\Entity\Page;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;

class PageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Page::class;
    }


    public function configureFields(string $pageName): iterable
    {   
        yield IdField::new('Title');
        yield TextEditorField::new('Text');
        yield TextField::new('tag')->stripTags();
        yield ChoiceField::new('category')->setChoices([
            'О нас'=>'about',
            'Родителям'=>'parents',
            'Учащимся'=>'students',
            'Педагогам'=>'teachers',
            'Поступление в колледж'=>'admission',
        ]);
        // return [
            
        //     IdField::new('Title'),
        //     TextEditorField::new('Text'),
        //     TextField::new('Tag'),
        //     ChoiceField::new('category')->setChoices([
        //         'О нас'=>'about',
        //         'Родителям'=>'parents',
        //         'Учащимся'=>'students',
        //         'Педагогам'=>'teachers',
        //         'Поступление в колледж'=>'admission',
        //     ]),
            
        // ];
    }

}
