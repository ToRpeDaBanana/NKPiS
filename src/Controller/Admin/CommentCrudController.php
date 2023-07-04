<?php

namespace App\Controller\Admin;

use App\Entity\Comment;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CommentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comment::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')->setLabel('ФИО'),
            EmailField::new('email')->setLabel('Эл. Почта'),
            TextEditorField::new('text')->setLabel('Текст отзыва'),
            DateField::new('date')->setLabel('Дата'),
            ImageField::new('file')
            ->setUploadDir('\assets\upload\files')
            ->setBasePath('\assets\upload\files')
            ->setLabel('Файл')
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->disable(Action::EDIT,Action::NEW)
        ;
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Отзывы');
    }
}
