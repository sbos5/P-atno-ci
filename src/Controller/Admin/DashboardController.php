<?php

namespace App\Controller\Admin;
use App\Entity\Items;
use App\Entity\Orders;
use App\Entity\User;
use App\Entity\Osoba;
use App\Entity\Auto;
use App\Entity\Kot;
use App\Entity\Pan;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Controller\CrudControllerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudControlle;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        //return parent::index();
         $routeBuilder = $this->get(CrudUrlGenerator::class)->build();

        return $this->redirect($routeBuilder->setController(ItemsCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Payment');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Item', 'icon class', Items::class);
         yield MenuItem::linkToCrud('Orders', 'icon class', Orders::class);
          yield MenuItem::linkToCrud('User', 'icon class', User::class);
            yield MenuItem::linkToCrud('Auto', 'icon class', Auto::class);
          yield MenuItem::linkToCrud('Osoba', 'icon class', Osoba::class);
             yield MenuItem::linkToCrud('Pan', 'icon class', Pan::class);
          yield MenuItem::linkToCrud('Kot', 'icon class', Kot::class);
    }
}
