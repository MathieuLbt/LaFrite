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
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;


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

    public function __construct()
    {
        $this->date = new \Datetime();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getGiver()
    {
        return $this->giver;
    }

    /**
     * @param mixed $giver
     */
    public function setGiver($giver)
    {
        $this->giver = $giver;
    }

    /**
     * @return mixed
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param mixed $receiver
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @return mixed
     */
    public function getNameDebtType()
    {
        return $this->nameDebtType;
    }

    /**
     * @param mixed $nameDebtType
     */
    public function setNameDebtType($nameDebtType)
    {
        $this->nameDebtType = $nameDebtType;
    }

    /**
     * @return mixed
     */
    public function getDebtDeadline()
    {
        return $this->debtDeadline;
    }

    /**
     * @param mixed $debtDeadline
     */
    public function setDebtDeadline($debtDeadline)
    {
        $this->debtDeadline = $debtDeadline;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
}
