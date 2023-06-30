<?php

namespace App\Controller\Admin;

use App\Entity\StudentSupport;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class StudentSupportCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return StudentSupport::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('text')->setLabel('Текст'),
            TextField::new('graduates')->setLabel('Выпускники'),
            TextField::new('graduate_employment')->setLabel('Каналы занятости выпускников на'),
            IntegerField::new('boys')->setLabel('Юношей'),
            IntegerField::new('girls')->setLabel('Девушек'),
            IntegerField::new('ovz')->setLabel('Лица с ОВЗ'),
            IntegerField::new('actual_employment')->setLabel('Всего'),
            IntegerField::new('actual_employment_prof')->setLabel('Из них по профилю'),
            IntegerField::new('continue_edu_vyz')->setLabel('ВУЗ'),
            IntegerField::new('continue_edu_spo')->setLabel('ПССЗ(СПО)'),
            IntegerField::new('other')->setLabel('Другое'),
            IntegerField::new('vs_rf')->setLabel('Призваны в ВС РФ'),
            IntegerField::new('dtiz')->setLabel('Присвоен статус безработного в ДТиЗ'),

        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Стипендии и меры поддержки обучающихся');
    }

}
