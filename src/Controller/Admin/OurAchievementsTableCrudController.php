<?php

namespace App\Controller\Admin;

use App\Entity\OurAchievementsTable;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
class OurAchievementsTableCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OurAchievementsTable::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('championship')->setLabel('Чемпионат'),
            TextField::new('count')->setLabel('Количество победителей'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Достижения таблица');
    }

}
