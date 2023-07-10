<?php

namespace App\Controller\Admin;

use App\Entity\QuestionAnswer;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\FormTypeInterface;

class QuestionAnswerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return QuestionAnswer::class;
    }

    public function configureFields(string $pageName): iterable
    {
        if (Crud::PAGE_EDIT === $pageName) {
            // Определите поля, которые нужно отображать только как текст
            yield TextField::new('name')
            ->setTextAlign('left')
            ->setFormTypeOption('disabled', true)
            ->setLabel('ФИО');

            yield TextField::new('email')
            ->setTextAlign('left')
            ->setFormTypeOption('disabled', true)
            ->setLabel('Эл. Почта');

            yield TextField::new('phone')
            ->setTextAlign('left')
            ->setFormTypeOption('disabled', true)
            ->setLabel('Контактный номер');

            yield TextField::new('text_question')
            ->setTextAlign('left')
            ->setFormTypeOption('disabled', true)
            ->setLabel('Текст вопроса');

            // yield ImageField::new('file')
            // ->setUploadDir('public/assets/upload/files')
            // ->setBasePath('\assets\upload\files')
            // ->setLabel('Файл');
            
            yield DateField::new('date')
            ->setTextAlign('left')
            ->setFormTypeOption('disabled', true)
            ->setLabel('Дата вопроса');
            yield DateTimeField::new('date_answer')
            ->onlyOnDetail() // Отображение только на странице деталей
            ->setLabel('Дата редактирования');
            yield TextField::new('name_answer')->setLabel('Имя специалиста');
            yield TextEditorField::new('text_answer')->setLabel('Ответ на вопрос');
        }
        else {
            // Определите обычные поля для других страниц CRUD (например, создание, список)
            yield TextField::new('name')
            ->setTextAlign('left')
            ->setFormTypeOption('disabled', true)
            ->setLabel('ФИО');

            yield TextField::new('email')
            ->setTextAlign('left')
            ->setFormTypeOption('disabled', true)
            ->setLabel('Эл. Почта');

            yield TextField::new('phone')
            ->setTextAlign('left')
            ->setFormTypeOption('disabled', true)
            ->setLabel('Контактный номер');

            yield TextField::new('text_question')
            ->setTextAlign('left')
            ->setFormTypeOption('disabled', true)
            ->setLabel('Текст вопроса');

            yield ImageField::new('file')
            ->setUploadDir('public/assets/upload/files')
            ->setBasePath('\assets\upload\files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Файл');
            
            yield DateField::new('date')
            ->setTextAlign('left')
            ->setFormTypeOption('disabled', true)
            ->setLabel('Дата вопроса');
        }
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->disable(Action::NEW)
        ;
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Вопросы и ответы');
    }
}
