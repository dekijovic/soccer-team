<?php


class TeamCreator
{

    /**
     * Create team, factory method
     * @return Team
     */
    public function create(): Team
    {
        $collection = [];

        for($i = 1; $i<23; $i++){

            $position = $this->getPosition($i);
            $strength = rand(1, 10);
            $speed = rand(1, 10);

            $collection[] = new Player($position, $strength, $speed, $i);
        }


        return new Team($collection);
    }

    /**
     * @param $number
     * @return string
     */
    protected function getPosition($number): string
    {
        if(in_array($number, [1, 12])) {
            $position = 'GK';
        }
        if(in_array($number, [2,3,5,6, 13,14,15,16])) {
            $position = 'DF';
        }
        if(in_array($number, [4,7,8,11,17,18,19,20])) {
            $position = 'MF';
        }
        if(in_array($number, [9,10,21,22])) {
            $position = 'ST';
        }

        return $position;
    }


}