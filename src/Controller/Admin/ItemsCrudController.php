<?php

namespace App\Controller\Admin;

use App\Entity\Items;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use \EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use \EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use \EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
class ItemsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Items::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
           
            AssociationField::new('orders'),
        ];
    }
   
}
