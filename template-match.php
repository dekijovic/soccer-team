<?php
/**
 * @var $lineup
 * @var $stats
 * @var $number
 */
echo '<h2>Line Up Match '.$number.'</h2>';
echo '<table>
        <thead>
            <th>Position</th>
            <th>NUmber</th>
            <th>Strength</th>
            <th>Speed</th>
        </thead>';
foreach ($lineup['GK'] as $player){
    echo '<tr>
            <td>GK</td>
            <td>'.$player->getNumber().'</td>
            <td>'.$player->getStrength().'</td>
            <td>'.$player->getSpeed().'</td>
          </tr>';
}
foreach ($lineup['DF'] as $player){
    echo '<tr>
            <td>DF</td>
            <td>'.$player->getNumber().'</td>
            <td>'.$player->getStrength().'</td>
            <td>'.$player->getSpeed().'</td>
          </tr>';
}
foreach ($lineup['MF'] as $player){
    echo '<tr>
            <td>MF</td>
            <td>'.$player->getNumber().'</td>
            <td>'.$player->getStrength().'</td>
            <td>'.$player->getSpeed().'</td>
          </tr>';
}
foreach ($lineup['ST'] as $player){
    echo '<tr>
            <td>ST</td>
            <td>'.$player->getNumber().'</td>
            <td>'.$player->getStrength().'</td>
            <td>'.$player->getSpeed().'</td>
          </tr>';
}
echo '</table>';

echo '<br>Injured player:' .$stats["injured"]['position'].', '.$stats["injured"]['number'];
echo '<br>Result:' .$stats["result"]['home'].' - '.$stats["result"]['away'];
echo '<br><br>';