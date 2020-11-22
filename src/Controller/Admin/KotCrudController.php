<?php

namespace App\Controller\Admin;

use App\Entity\Kot;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use \EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use \EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use \EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
class KotCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Kot::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
           // IdField::new('id'),
            TextField::new('name'),
            AssociationField::new('pan'),
        ];
    }
    
}
