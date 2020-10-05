<?php


class Controller
{

    public function render()
    {
        $team = (new TeamCreator())->create();

        $lineup1 = (new Strategy($team, Strategy::DEFENSE))->getLineUp();
        $match1 = new Match($lineup1);
        $team->reinitialize($match1->injuredPlayer());

        $lineup2 = (new Strategy($team, Strategy::EQUAL))->getLineUp();
        $match2 = new Match($lineup2);
        $team->reinitialize($match2->injuredPlayer());

        $lineup3 = (new Strategy($team, Strategy::ATACK))->getLineUp();
        $match3 = new Match($lineup3);

        include_once 'template.php';
        $this->renderMatch($lineup1, $match1->stats(), 1);
        $this->renderMatch($lineup2, $match2->stats(), 2);
        $this->renderMatch($lineup3, $match3->stats(), 3);
    }

    public function renderMatch($lineup, $stats, $number)
    {
        include 'template-match.php';
    }
}