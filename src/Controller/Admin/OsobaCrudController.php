<?php

namespace App\Controller\Admin;

use App\Entity\Osoba;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use \EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use \EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use \EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
class OsobaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Osoba::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('name'),
            AssociationField::new('auta'),
        ];
    }
    
}
