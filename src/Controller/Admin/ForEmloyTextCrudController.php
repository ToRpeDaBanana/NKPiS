<?php

namespace App\Controller\Admin;

use App\Entity\ForEmloyText;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class ForEmloyTextCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ForEmloyText::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('text')->setLabel('Работодателям текст'),
        ];
    }

}
