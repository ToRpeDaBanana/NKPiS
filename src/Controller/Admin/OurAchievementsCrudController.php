<?php

namespace App\Controller\Admin;

use App\Entity\OurAchievements;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
class OurAchievementsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OurAchievements::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')->setLabel('Заголовок'),
            TextEditorField::new('first_text')->setLabel('Текст-1'),
            TextField::new('title_table')->setLabel('Заголовок Таблицы'),
            TextEditorField::new('second_text')->setLabel('Текст-2'),

        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Достижения');
    }
}
