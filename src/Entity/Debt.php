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
     */
    protected $id;

    /**
     * @ORM\Column(name="giver", type="integer", length=255)
     */
    protected $giver;

    /**
     * @ORM\Column(name="receiver", type="integer")
     */
    protected $receiver;

    /**
     * @ORM\Column(name="nameDebtType", type="string"))
     */
    protected $nameDebtType;

    /**
     * @ORM\Column(name="debtDeadline", type="date")
     */
    protected $debtDeadline;

    /**
     * @ORM\Column(type="date")
     */
    protected $date;
    public function __construct()
    {
        $this->date = new \Datetime();
    }


}