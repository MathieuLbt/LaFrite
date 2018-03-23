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
    protected $id;


    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="string")
     */
    protected $username;

    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="string")
     */
    private $plainPassword;

    /**
     * The below length depends on the "algorithm" you use for encoding
     * the password, but this works well with bcrypt.
     *
     * @ORM\Column(type="string", length=64)
     */
    private $password;

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

    // other properties and methods

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getMailUser()
    {
        return $this->mail_user;
    }

    /**
     * @param mixed $mail_user
     */
    public function setMailUser($mail_user)
    {
        $this->mail_user = $mail_user;
    }

    /**
     * @return mixed
     */
    public function getPhotoUser()
    {
        return $this->photo_user;
    }

    /**
     * @param mixed $photo_user
     */
    public function setPhotoUser($photo_user)
    {
        $this->photo_user = $photo_user;
    }

    public function getSalt()
    {
        // The bcrypt and argon2i algorithms don't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }
}
