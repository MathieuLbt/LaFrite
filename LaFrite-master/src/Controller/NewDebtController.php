<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewDebtController extends Controller
{
    /**
     * @Route("/new/debt", name="new_debt")
     */
    public function index()
    {
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $)
        return $this->render('new_debt/index.html.twig', [
            'controller_name' => 'NewDebtController',
        ]);
    }
}
