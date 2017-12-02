<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="card")
 */
class Card {
    //put your code here
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $serie;

    /**
     * @ORM\Column(type="integer")
     */
    private $pointNumber;
    /**
     * @ORM\Column(type="string")
     */
    private $description;
    

    /**
     * Set serie
     *
     * @param integer $serie
     *
     * @return Card
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return integer
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set pointNumber
     *
     * @param integer $pointNumber
     *
     * @return Card
     */
    public function setPointNumber($pointNumber)
    {
        $this->pointNumber = $pointNumber;

        return $this;
    }

    /**
     * Get pointNumber
     *
     * @return integer
     */
    public function getPointNumber()
    {
        return $this->pointNumber;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Card
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
}
