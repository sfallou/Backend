<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var int
     *
     * @ORM\Column(name="id_article", type="integer")
     */
    private $id_article;

    /**
     * @var int
     *
     * @ORM\Column(name="qty_f1", type="integer")
     */
    private $qty_f1;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_f1", type="float")
     */
    private $montant_f1;

    /**
     * @var int
     *
     * @ORM\Column(name="qty_f2", type="integer")
     */
    private $qty_f2;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_f2", type="float")
     */
    private $montant_f2;

    /**
     * @ORM\ManyToOne(targetEntity="Panier", inversedBy="commandes")
     * @ORM\JoinColumn(name="panier_id", referencedColumnName="id")
     */
    private $panier;



    /**
     * @var \AppBundle\Entity\Article
     *
     */
    private $article;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Commande
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set idArticle
     *
     * @param integer $idArticle
     *
     * @return Commande
     */
    public function setIdArticle($idArticle)
    {
        $this->id_article = $idArticle;

        return $this;
    }

    /**
     * Get idArticle
     *
     * @return integer
     */
    public function getIdArticle()
    {
        return $this->id_article;
    }

    /**
     * Set qtyF1
     *
     * @param integer $qtyF1
     *
     * @return Commande
     */
    public function setQtyF1($qtyF1)
    {
        $this->qty_f1 = $qtyF1;

        return $this;
    }

    /**
     * Get qtyF1
     *
     * @return integer
     */
    public function getQtyF1()
    {
        return $this->qty_f1;
    }

    /**
     * Set montantF1
     *
     * @param float $montantF1
     *
     * @return Commande
     */
    public function setMontantF1($montantF1)
    {
        $this->montant_f1 = $montantF1;

        return $this;
    }

    /**
     * Get montantF1
     *
     * @return float
     */
    public function getMontantF1()
    {
        return $this->montant_f1;
    }

    /**
     * Set qtyF2
     *
     * @param integer $qtyF2
     *
     * @return Commande
     */
    public function setQtyF2($qtyF2)
    {
        $this->qty_f2 = $qtyF2;

        return $this;
    }

    /**
     * Get qtyF2
     *
     * @return integer
     */
    public function getQtyF2()
    {
        return $this->qty_f2;
    }

    /**
     * Set montantF2
     *
     * @param float $montantF2
     *
     * @return Commande
     */
    public function setMontantF2($montantF2)
    {
        $this->montant_f2 = $montantF2;

        return $this;
    }

    /**
     * Get montantF2
     *
     * @return float
     */
    public function getMontantF2()
    {
        return $this->montant_f2;
    }

    /**
     * Set panier
     *
     * @param \AppBundle\Entity\Panier $panier
     *
     * @return Commande
     */
    public function setPanier(\AppBundle\Entity\Panier $panier = null)
    {
        $this->panier = $panier;

        return $this;
    }

    /**
     * Get panier
     *
     * @return \AppBundle\Entity\Panier
     */
    public function getPanier()
    {
        return $this->panier;
    }


    /**
     * Set Article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Commande
     */
    public function setArticle(\AppBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \AppBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }

}
