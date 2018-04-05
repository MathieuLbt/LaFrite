<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\User;
use App\Entity\Debt;



class ProfilController extends Controller
{
    /**
     * @Route("/profil", name="profil")
     */
    public function index()
    {
        if (! $this->getUser()){
            throw new NotFoundHttpException();
        }
        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
        ]);
        

    }

    public function getStatut()
    {
//dump($this->receivables);die;
        $month = new \DateTime();
        $month->modify('-30 days');

        $year = new \DateTime();
        $year->modify('-365 days');

        $now = new \DateTime();


        if (count($this->receivables ) . count($this->debts ) < 1 and $this->dateSubscription > $month)
        {
            return $this->statut = 'noob';
        }
        elseif (count($this->receivables ) < 1 and $this->dateSubscription < $month)
        {
            return $this->statut = 'radin';
        }
        elseif (count($this->receivables) > 10)
        {
            return $this->statut = 'généreux';
        }
        elseif (count($this->debts ) > 3)
        {
            return $this->statut = 'profiteur';
        }
        //        elseif (count($this->receivables ) < 1 and $this->dateSubscription < $month)
//        {
//            return $this->statut = 'fiable';
//        }
        elseif (count($this->debts ) > 30)
        {
            return $this->statut = 'fauché';
        }
        //        elseif (count($this->receivables ) < 1 and $this->dateDeadline < $now)
//        {
//            return $this->statut = 'crevard';
//        }
        //        elseif (count($this->receivables ) < 1 and $this->dateSubscription < $month)
//        {
//            return $this->statut = 'pigeon';
//        }
        elseif (count($this->receivables ) > 50)
        {
            return $this->statut = 'dieu';
        }
        elseif (count($this->receivables ) > 25 and count($this->debts ) > 25 and $this->dateSubscription < $year)
        {
            return $this->statut = 'el padre';
        }
        else
        {
            return $this->statut = 'gars sûr';
        }
    }


    /**
     * @Route("/archived/{id}", name="archived")
     */
    public function archived($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        /** @var Debt $debt */
        $debt =  $entityManager->getRepository(Debt::class)->find($id);


        //$debt =  $entityManager->getRepository(Debt::class)->findBy('isArchived' => true);
        $debt->setIsArchived(true);

        $entityManager->flush();

        return $this->redirectToRoute('profil');
    }
    




}
