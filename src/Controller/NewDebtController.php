<?php

namespace App\Controller;

use App\Form\DebtType;
use App\Entity\Debt;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NewDebtController extends Controller
{
    /**
     * @Route("/newdebt", name="newdebt")
     */
    public function addAction(Request $request)
    {
        // 1) build the form
        $debt = new Debt();
        $form = $this->createForm(DebtType::class, $debt);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($debt);
            $entityManager->flush();
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            $request->getSession()->getFlashBag()->add('notice', 'Debt saved');
            return $this->redirectToRoute('profil');
        }

        return $this->render(
            'Debt/index.html.twig',
            array('form' => $form->createView())
        );
    }
}


