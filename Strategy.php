<?php


class Strategy
{
    const DEFENSE = 1;
    const EQUAL = 2;
    const ATACK = 3;

    public $lineUp = [];

    /**
     * Strategy constructor.
     * @param Team $team
     * @param int $strategy
     */
    public function __construct(Team $team, int $strategy)
    {
        $this->make($team, $strategy);
    }

    /**
     * @return array
     */
    public function getLineUp()
    {
        return $this->lineUp;
    }

    /**
     * @param Team $team
     * @param $strategy
     * @return $this
     */
    public function make(Team $team, $strategy)
    {
        $gks = $this->sortBySkill($team->getGoalKeepers());
        $dfs = $this->sortBySkill($team->getDefenseFielders());
        $mfs = $this->sortBySkill($team->getMiddleFielders());
        $sts = $this->sortBySkill($team->getStrikers());
        if(empty($gks)){
            $this->lineUp['GK'][] = $dfs[0];
            unset($dfs[0]);
        }else{
            $this->lineUp['GK'][] = $gks[0];
        }

        if($strategy == self::DEFENSE){
            $this->lineUp['DF'] = array_slice($dfs, 0, 5);
            $this->lineUp['MF'] = array_slice($mfs, 0, 4);
            $this->lineUp['ST'][] = $sts[0];
        }
        if($strategy == self::EQUAL){
            $this->lineUp['DF'] = array_slice($dfs, 0, 4);
            $this->lineUp['MF'] = array_slice($mfs, 0, 4);
            $this->lineUp['ST'] = array_slice($sts, 0, 2);
        }
        if($strategy == self::ATACK){
            $this->lineUp['DF'] = array_slice($dfs, 0, 3);
            $this->lineUp['MF'] = array_slice($mfs, 0, 4);
            $this->lineUp['ST'] = array_slice($sts, 0, 3);
            if(count($this->lineUp['ST'])> 3){
                $this->lineUp['ST'][] = $mfs[4];
            }
        }
        return $this;
    }

    /**
     * @param array $arr
     * @return array
     */
    private function sortBySkill(array $arr)
    {
        foreach ($arr as $key => $gk){
            if($gk->isInjured()){
                unset($arr[$key]);
            }
        }
        usort($arr, function($a, $b){
            if ($a->getSpeed() + $a->getStrength() == $b->getSpeed() + $b->getStrength()) {
                return 0;
            }
            return ($a->getSpeed() + $a->getStrength() > $b->getSpeed() + $b->getStrength()) ? -1 : 1;
        });

        return $arr;
    }
}