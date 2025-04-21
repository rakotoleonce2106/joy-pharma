<?php

namespace App\Controller\Admin;

use App\Controller\Bootstrap\DefaultLayoutController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends DefaultLayoutController
{
    #[Route('/', name:'admin_dashboard')]
    public function index(): Response
    {
        # Include vendors and javascript files for dashboard widgets
        $this->theme->addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

        return $this->render('pages/dashboards/index.html.twig');
    }
}
