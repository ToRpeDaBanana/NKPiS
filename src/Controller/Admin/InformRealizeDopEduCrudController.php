<?php

namespace App\Controller\Admin;

use App\Entity\InformRealizeDopEdu;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class InformRealizeDopEduCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InformRealizeDopEdu::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            
            ChoiceField::new('category')->setChoices([
                'Техническая направленность'=>'1',
                'Физкультурно-спортивная направленность'=>'2',
                'Естественно-научная направленность'=>'3',
                'Социально-гуманитарная направленность'=>'4',
                'Туристско-краеведческая направленность'=>'5',
                'Художественная направленность'=>'6',
            ])->setLabel('Категория'),
            TextField::new('type_activity')->setLabel('Вид деятельности'),
            TextField::new('name_association')->setLabel('Название объединения	'),
            TextField::new('group_name')->setLabel('Название группы'),
            TextField::new('program_category')->setLabel('Категория программы'),
            TextField::new('age')->setLabel('Возрастная группа обучающихся (лет)'),
            TextField::new('fio_teacher')->setLabel('ФИО Педагога'),
            TextField::new('training_free')->setLabel('Бесплатное ли обучение'),
            TextField::new('duration_training')->setLabel('Срок обучения'),
            TextField::new('form_lesson')->setLabel('Форма занятия'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Дополнительное образование');
    }

}
