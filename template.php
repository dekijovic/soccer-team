<?php
/**
 * @var Team $team
 * @var Player $player
 */
echo '<h1>Whole Team</h1>';
echo '<table>
        <thead>
            <th>Position</th>
            <th>NUmber</th>
            <th>Strength</th>
            <th>Speed</th>
        </thead>';
foreach ($team->getGoalKeepers() as $player){
    echo '<tr>
            <td>GK</td>
            <td>'.$player->getNumber().'</td>
            <td>'.$player->getStrength().'</td>
            <td>'.$player->getSpeed().'</td>
          </tr>';
}
foreach ($team->getDefenseFielders() as $player){
    echo '<tr>
            <td>DF</td>
            <td>'.$player->getNumber().'</td>
            <td>'.$player->getStrength().'</td>
            <td>'.$player->getSpeed().'</td>>
          </tr>';
}
foreach ($team->getMiddleFielders() as $player){
    echo '<tr>
            <td>MF</td>
            <td>'.$player->getNumber().'</td>
            <td>'.$player->getStrength().'</td>
            <td>'.$player->getSpeed().'</td>
          </tr>';
}
foreach ($team->getStrikers() as $player){
    echo '<tr>
            <td>ST</td>
            <td>'.$player->getNumber().'</td>
            <td>'.$player->getStrength().'</td>
            <td>'.$player->getSpeed().'</td>
          </tr>';
}
echo '</table>';
