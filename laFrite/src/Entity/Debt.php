<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DebtRepository")
 */
class Debt
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
    @ORM\ManyToOne(targetEntity="La barquette\laFrite\src\Entity\Debt")
     * @ORM\JoinColumn(nullable=false)
     */
    private $User;

    protected $id_debt;

    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id_user_giver;

    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id_user_receiver;

    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="string")
     */
    protected $name_debt_type;

    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="date")
     */
    protected $debt_deadline;

    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="date")
     */
    protected $date;
}
