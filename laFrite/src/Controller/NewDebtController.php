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
        return $this->render('new_debt/newDebt.twig', [
            'controller_name' => 'NewDebtController',
        ]);
    }
}
