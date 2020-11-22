<?php

namespace App\Controller\Admin;

use App\Entity\Item;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use \EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use \EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use \EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
class ItemCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Item::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
           
            TextField::new('name'),
            IntegerField::new('price'),
            IntegerField::new('number'),
           // AssociationField::new('orders')
        ];
    }
    
}
