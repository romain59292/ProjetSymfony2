<?php

namespace RL\TestBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;


class Produit
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
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer")
     * @Assert\Length(
     *      min = 9,
     *      max = 9
     * )
     * 
     */
    private $aid;

    /**
     * @var integer
     *
     * @ORM\Column(name="subscriptionId", type="integer")
     */
    private $subscriptionId;

    /**
     * @var string
     *@Assert\Length(min = 5)
     * @ORM\Column(name="nomDomaine", type="string", length=255)
     */
    private $nomDomaine;

    /**
     * @var string
     *
     * @ORM\Column(name="ISE2", type="string", length=255)
     * @Assert\Regex(pattern="/[a-zA-Z0-9\_\-]{9}$")
     * @Assert\Length(
     *      max = "15"
     * )
     */
    private $iSE2;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * 
     */
    private $email;


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
     * Set aid
     *
     * @param integer $aid
     * @return Produit
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return integer 
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set subscriptionId
     *
     * @param integer $subscriptionId
     * @return Produit
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * Get subscriptionId
     *
     * @return integer 
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * Set nomDomaine
     *
     * @param string $nomDomaine
     * @return Produit
     */
    public function setNomDomaine($nomDomaine)
    {
        $this->nomDomaine = $nomDomaine;

        return $this;
    }

    /**
     * Get nomDomaine
     *
     * @return string 
     */
    public function getNomDomaine()
    {
        return $this->nomDomaine;
    }

    /**
     * Set iSE2
     *
     * @param string $iSE2
     * @return Produit
     */
    public function setISE2($iSE2)
    {
        $this->iSE2 = $iSE2;

        return $this;
    }

    /**
     * Get iSE2
     *
     * @return string 
     */
    public function getISE2()
    {
        return $this->iSE2;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Produit
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
