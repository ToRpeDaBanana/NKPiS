<?php

namespace App\Controller\Admin;

use App\Entity\ControlSovOther;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
class ControlSovOtherCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ControlSovOther::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')->setLabel('ФИО'),
            TextField::new('category_us')->setLabel('Категория члена УС'),
            ChoiceField::new('coop')->setChoices([
                'Да' => 1,
                'Нет' => 0,
            ])->setLabel('Кооптированный член (да/нет)'),
            TextField::new('job_title_us')->setLabel('Должность в УС'),
            TextField::new('job_loc')->setLabel('Место работы'),
            TextField::new('job_title')->setLabel('Должность'),
            TextField::new('email')->setLabel('Адрес электронной почты'),
            TextField::new('notes')->setLabel('Примечание'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Иные участники УС');
    }

}
