<?php

namespace App\Controller\Admin;

use App\Entity\Pan;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use \EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use \EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use \EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
class PanCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Pan::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('nane'),
            AssociationField::new('name'),
        ];
    }
    
}
