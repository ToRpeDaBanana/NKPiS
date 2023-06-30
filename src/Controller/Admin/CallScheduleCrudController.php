<?php

namespace App\Controller\Admin;

use App\Entity\CallSchedule;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CallScheduleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CallSchedule::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('first_pair')->setLabel('1 пара'),
            TextField::new('second_pair')->setLabel('2 пара'),
            TextField::new('third_pair')->setLabel('3 пара'),
            TextField::new('fourth_pair')->setLabel('4 пара'),
            TextField::new('fifth_pair')->setLabel('5 пара'),
            TextField::new('sixth_pair')->setLabel('6 пара'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Расписание звонков');
    }
}
