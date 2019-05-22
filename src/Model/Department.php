<?php


namespace App\Model;


class Department
{
    /**
     * @var null|string
     */
    private $name;

    /**
     * @var null|int
     */
    private $size;

    /**
     * @var null|Boss
     */
    private $boss;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int|null $size
     */
    public function setSize(?int $size): void
    {
        $this->size = $size;
    }

    /**
     * @return Boss|null
     */
    public function getBoss(): ?Boss
    {
        return $this->boss;
    }

    /**
     * @param Boss|null $boss
     */
    public function setBoss(?Boss $boss): void
    {
        $this->boss = $boss;
    }
}