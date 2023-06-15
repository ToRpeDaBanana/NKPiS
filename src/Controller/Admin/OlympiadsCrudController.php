<?php

namespace App\Controller\Admin;

use App\Entity\Olympiads;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class OlympiadsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Olympiads::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')->setLabel('Заголовок'),
            UrlField::new('link')->setLabel('Ссылка'),
        ];
    }

}
