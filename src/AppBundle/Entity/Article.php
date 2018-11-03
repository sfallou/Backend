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
     * Set name
     *
     * @param string $name
     *
     * @return Article
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     *
     * @return Article
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return string
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Article
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set ponderation
     *
     * @param integer $ponderation
     *
     * @return Article
     */
    public function setPonderation($ponderation)
    {
        $this->ponderation = $ponderation;

        return $this;
    }

    /**
     * Get ponderation
     *
     * @return integer
     */
    public function getPonderation()
    {
        return $this->ponderation;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Article
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Set optionF2
     *
     * @param integer $optionF2
     *
     * @return Article
     */
    public function setOptionF2($optionF2=1)
    {
        $this->option_f2 = $optionF2;

        return $this;
    }

    /**
     * Get optionF2
     *
     * @return integer
     */
    public function getOptionF2()
    {
        return $this->option_f2;
    }

    /**
     * Set images
     *
     * @param array $images
     *
     * @return Article
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return array
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set dureeLivraison
     *
     * @param string $dureeLivraison
     *
     * @return Article
     */
    public function setDureeLivraison($dureeLivraison)
    {
        $this->dureeLivraison = $dureeLivraison;

        return $this;
    }

    /**
     * Get dureeLivraison
     *
     * @return string
     */
    public function getDureeLivraison()
    {
        return $this->dureeLivraison;
    }
}
