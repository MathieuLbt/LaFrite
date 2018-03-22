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
     * @ORM\ManyToOne(targetEntity="Debt")
     * @ORM\JoinColumn(name="debt_id", referencedColumnName="id")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $username;

    /**
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @ORM\Column(type="string")
     */
    protected $mail;

    /**
     * @ORM\Column(type="string")
     */
    protected $photoUser;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $subscribeDate;

    /**
     * @ORM\Column(type="string")
     */
    protected $profilState;

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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getPhotoUser()
    {
        return $this->photoUser;
    }

    /**
     * @param mixed $photoUser
     */
    public function setPhotoUser($photoUser)
    {
        $this->photoUser = $photoUser;
    }

    /**
     * @return mixed
     */
    public function getSubscribeDate()
    {
        return $this->subscribeDate;
    }

    /**
     * @param mixed $subscribeDate
     */
    public function setSubscribeDate()
    {
        $this->subscribeDate = new \DateTime("now");
    }

    /**
     * @return mixed
     */
    public function getProfilState()
    {
        return $this->profilState;
    }

    /**
     * @param mixed $profilState
     */
    public function setProfilState($profilState)
    {
        $this->profilState = $profilState;
    }


}




