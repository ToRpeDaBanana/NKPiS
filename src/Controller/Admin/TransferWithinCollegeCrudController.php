<?php

namespace App\Controller\Admin;

use App\Entity\TransferWithinCollege;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TransferWithinCollegeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TransferWithinCollege::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('text')->setLabel('Переводы внутри колледжа'),
            TextField::new('sub_title')->setLabel('Подробную консультацию по данным вопросам можно получить по телефону:'),
        ];
    }

}
