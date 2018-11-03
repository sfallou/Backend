<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticleRepository")
 */
class Article
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="thumb", type="string", length=255, nullable=true)
     */
    private $thumb;
    
    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="option_f2", type="integer")
     */
    private $option_f2;

    /**
     * @var float
     *
     * @ORM\Column(name="ponderation", type="float")
     */

    private $ponderation;

    /**
     * @var string
     *
     * @ORM\Column(name="dureeLivraison", type="string", length=255, nullable=true)
     */
    private $dureeLivraison;

    /**
     * @var simple_array
     *
     * @ORM\Column(name="images", type="simple_array")
     */

    private $images;
    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="articles")
     */
    private $category;
}

