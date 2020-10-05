<?php


class Team
{
    /** @var Player[]  */
    protected $goalKeepers = [];

    /** @var Player[]  */
    protected $middleFielders = [];

    /** @var Player[]  */
    protected $defenseFielders = [];

    /** @var Player[]  */
    protected $strikers = [];

    /**
     * Team constructor.
     * @param Player[] $collection
     */
    public function __construct(array $collection)
    {
        foreach ($collection as $player)
        {
            if($player->getPosition() == 'GK'){
                $this->goalKeepers[] = $player;
            }
            if($player->getPosition() == 'MF'){
                $this->middleFielders[] = $player;
            }
            if($player->getPosition() == 'DF'){
                $this->defenseFielders[] = $player;
            }
            if($player->getPosition() == 'ST'){
                $this->strikers[] = $player;
            }
        }

    }

    /**
     * @param Player $injuredPlayer
     */
    public function reinitialize(Player $injuredPlayer)
    {
        if($injuredPlayer->getPosition() == 'GK'){
            foreach ($this->goalKeepers as $key => $player){
                if($player->getNumber() == $injuredPlayer->getNumber()){
                    $this->goalKeepers[$key]->setInjured();
                }
            }
        }
        if($injuredPlayer->getPosition() == 'MF'){
            foreach ($this->middleFielders as $key => $player){
                if($player->getNumber() == $injuredPlayer->getNumber()){
                    $this->middleFielders[$key]->setInjured();
                }
            }
        }
        if($injuredPlayer->getPosition() == 'DF'){
            foreach ($this->defenseFielders as $key => $player){
                if($player->getNumber() == $injuredPlayer->getNumber()){
                    $this->defenseFielders[$key]->setInjured();
                }
            }
        }
        if($injuredPlayer->getPosition() == 'ST'){
            foreach ($this->strikers as $key => $player){
                if($player->getNumber() == $injuredPlayer->getNumber()){
                    $this->strikers[$key]->setInjured();
                }
            }
        }

    }

    /**
     * @return Player[]
     */
    public function getGoalKeepers(): array
    {
        return $this->goalKeepers;
    }

    /**
     * @return Player[]
     */
    public function getMiddleFielders(): array
    {
        return $this->middleFielders;
    }

    /**
     * @return Player[]
     */
    public function getDefenseFielders(): array
    {
        return $this->defenseFielders;
    }

    /**
     * @return Player[]
     */
    public function getStrikers(): array
    {
        return $this->strikers;
    }


}