<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

// contrainte sur les attributs de la classe Advert
use Symfony\Component\Validator\Constraints as Assert;

// vérification de l'unicité de la classe unique
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

// pareil validation du formulaire
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * Advert
 *
 * @ORM\Table(name="ref_type_entity")
 * @ORM\Entity(repositoryClass="App\Entity\Repository\RefTypeEntityRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class RefTypeEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type_entity", type="text")
     * @Assert\NotBlank
     */
    private $typeEntity;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTypeEntity(): string
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
}
