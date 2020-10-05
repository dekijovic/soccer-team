<?php


class Match
{

    /** @var array  */
    private $lineup;

    /** @var Player */
    private $injured;

    public function __construct(array $lineup)
    {
        $this->lineup = $lineup;
        $this->injuries();

    }

    /**
     * @return Player
     */
    public function injuredPlayer():Player
    {
        return $this->injured;
    }

    /**
     * Pick Injured Player
     */
    private function injuries()
    {
        $arr = [];
        $arr = array_merge($arr, $this->lineup['GK'] );
        $arr = array_merge($arr, $this->lineup['DF'] );
        $arr = array_merge($arr, $this->lineup['MF'] );
        $arr = array_merge($arr, $this->lineup['ST'] );

        $this->injured = $arr[array_rand($arr, 1)];

    }

    /**
     * @return array
     */
    public function stats()
    {
        $arr = [];
        $arr['injured'] = ['position' => $this->injured->getPosition(), 'number' =>$this->injured->getNumber()];
        $arr['result'] = ['home' => rand(0,10), 'away' => rand(0,10)];
        return $arr;
    }
}