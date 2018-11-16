<?php
// src/AppBundle/Entity/User.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @ORM\HasLifecycleCallbacks()
 */
class User extends BaseUser
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="raison_social", type="text")
     */
    private $raisonSocial;
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Image", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="App\Entity\RefTypeEntity", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $typeEntity;

    /**
     * @ORM\Column(name="adress1", type="text")
     * @Assert\NotBlank()
     */
    private $adress1;

    /**
     * @ORM\Column(name="adress2", type="text")
     */
    private $adress2;

    /**
     * @ORM\Column(name="adress3", type="text")
     */
    private $adress3;

    /**
     * @ORM\Column(name="code_postal", type="integer")
     * @Assert\NotBlank()
     */
    private $codePostal;

    /**
     * @ORM\Column(name="ville", type="string")
     * @Assert\NotBlank()
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\RefDepartement")
     * @Assert\Valid()
     */
    private $departement;

    /**
     * @ORM\Column(name="latitude", type="integer")
     */
    private $latitude;

    /**
     * @ORM\Column(name="longitude", type="integer")
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\RefType")
     * @Assert\Valid()
     */
    private $type;

    /**
     * @return mixed
     */
    public function getAdress1()
    {
        return $this->adress1;
    }

    /**
     * @param mixed $adress1
     */
    public function setAdress1($adress1): void
    {
        $this->adress1 = $adress1;
    }

    /**
     * @return mixed
     */
    public function getAdress2()
    {
        return $this->adress2;
    }

    /**
     * @param mixed $adress2
     */
    public function setAdress2($adress2): void
    {
        $this->adress2 = $adress2;
    }

    /**
     * @return mixed
     */
    public function getAdress3()
    {
        return $this->adress3;
    }

    /**
     * @param mixed $adress3
     */
    public function setAdress3($adress3): void
    {
        $this->adress3 = $adress3;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * @param mixed $codePostal
     */
    public function setCodePostal($codePostal): void
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return string
     */
    public function getDepartement(): string
    {
        return $this->departement;
    }

    /**
     * @param string $departement
     */
    public function setDepartement(string $departement): void
    {
        $this->departement = $departement;
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
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getRaisonSocial()
    {
        return $this->raisonSocial;
    }

    /**
     * @param mixed $raisonSocial
     */
    public function setRaisonSocial($raisonSocial): void
    {
        $this->raisonSocial = $raisonSocial;
    }

    /**
     * @return string
     */
    public function getTypeEntity(): ?string
    {
        return $this->typeEntity;
    }

    /**
     * @param string $typeEntity
     */
    public function setTypeEntity(string $typeEntity): void
    {
        $this->typeEntity = $typeEntity;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     * @ORM\PrePersist()
     */
    public function setLatitude($latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     * @ORM\PrePersist()
     */
    public function setLongitude($longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }
}