<?php


class Player
{
    /** @var string */
    protected $position;

    /** @var int */
    protected $strength;

    /** @var int */
    protected $speed;

    /** @var int */
    protected $number;

    /** @var bool */
    protected $injured = false;

    /**
     * Player constructor.
     * @param string $position
     * @param int $strength
     * @param int $speed
     * @param int $number
     */
    public function __construct(string $position, int $strength, int $speed, int $number)
    {
        $this->position = $position;
        $this->strength = $strength;
        $this->speed = $speed;
        $this->number = $number;

    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @return int
     */
    public function getStrength(): int
    {
        return $this->strength;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @return bool
     */
    public function isInjured(): bool
    {
        return $this->injured;
    }

    /**
     * @return $this
     */
    public function setInjured(): self
    {
        $this->injured = true;
        return $this;
    }

}