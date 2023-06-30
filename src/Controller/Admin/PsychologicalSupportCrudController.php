<?php

namespace App\Controller\Admin;

use App\Entity\PsychologicalSupport;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PsychologicalSupportCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PsychologicalSupport::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('text_one')->setLabel('Психологическая поддержка ребенка'),
            TextEditorField::new('text_two')->setLabel(' '),
            TextField::new('sub_title')->setLabel('Подзаголовок'),
            TextEditorField::new('text_tree')->setLabel(' '),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Психологическая поддержка ребёнка');
    }

}
