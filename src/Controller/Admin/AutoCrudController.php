<?php

namespace App\Controller\Admin;

use App\Entity\Auto;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use \EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use \EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use \EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
class AutoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Auto::class;
    }

  
    public function configureFields(string $pageName): iterable
    {
        return [
           
            TextField::new('marka'),
            DateTimeField::new('date'),
            AssociationField::new('osoba')
        ];
    }
    
}
