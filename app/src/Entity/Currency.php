<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CurrencyRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Currency
{
    use Metadata;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups("default")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=10)
     * @Groups("default")
     */
    private $isoCode;

    public function __construct()
    {
        $this->offers = new ArrayCollection();
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIsoCode(): ?string
    {
        return $this->isoCode;
    }

    public function setIsoCode(string $isoCode): self
    {
        $this->isoCode = $isoCode;

        return $this;
    }
}
