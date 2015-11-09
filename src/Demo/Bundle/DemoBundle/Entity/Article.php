<?php

namespace Demo\Bundle\DemoBundle\Entity;

/**
 * Article
 */
class Article
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $secomdName;


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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Article
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set secomdName
     *
     * @param string $secomdName
     *
     * @return Article
     */
    public function setSecomdName($secomdName)
    {
        $this->secomdName = $secomdName;

        return $this;
    }

    /**
     * Get secomdName
     *
     * @return string
     */
    public function getSecomdName()
    {
        return $this->secomdName;
    }
}

