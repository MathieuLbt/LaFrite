<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id_user;


    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="string")
     */
    protected $username;

    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="string")
     */
    protected $mail_user;

    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="blob")
     */
    protected $photo_user;
}
