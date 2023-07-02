<?php

namespace App\Controller\Admin;

use App\Entity\MeansEduUpbringing;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class MeansEduUpbringingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MeansEduUpbringing::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('text')->setLabel('Текст'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Средства обучения и воспитания');
    }
}
