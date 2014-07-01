<?php

namespace RL\TestBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RL\TestBundle\Entity\ClientRepository")
 */
class Client
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
     * @Assert\Regex(pattern="#^[0-9]{9}$#", message ="L'AID doit contenir 9 nombres") 
     */
    private $aid;

    /**
     * @var string
     *
     * @ORM\Column(name="subscriptionId", type="string", length=255)
     * 
     * @Assert\Regex(pattern="#^[0-9]{2,}$#", message ="Le SubscriptionID ne doit contenir que des nombres")
     */
    private $subscriptionId;

    /**
     * @var string
     *
     * @ORM\Column(name="nomDomaine", type="string", length=255)
     * 
     * @Assert\Regex(pattern="#^[a-z0-9._-]{2,}\.[a-z]{2,4}$#", message ="Le nom de domaine ne doit être sous la forme mondomaine.fr")
     */
    private $nomDomaine;

    /**
     * @var url
     * 
     * @ORM\Column(name="ISE2", type="url", length=255)
     * 
     * @Assert\Length(
     *      max = "15"
     * )
     */
    private $iSE2;

    /**
     * @var email
     *
     * @ORM\Column(name="mail", type="email", length=255)
     * 
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.")
     */
    
    private $mail;


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
     * @return Client
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
     * @return Client
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
     * @return Client
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
     * @return Client
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
     * Set mail
     *
     * @param email $mail
     * @return Client
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return mail 
     */
    public function getMail()
    {
        return $this->mail;
    }
}
