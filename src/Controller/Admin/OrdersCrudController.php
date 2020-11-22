<?php

namespace App\Controller\Admin;
use App\Entity\Items;
use App\Entity\Orders;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use \EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use \EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
class OrdersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Orders::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
            
          
            AssociationField::new('Items'),
        ];
    }
    
}
