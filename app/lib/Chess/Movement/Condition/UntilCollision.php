<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 10/20/14
 * Time: 8:59 PM
 */

namespace Chess\Movement\Condition;


use Chess\Board\Location;
use Chess\Piece\Piece;

class UntilCollision extends Condition {

    /**
     * @param Piece $piece
     * @param Location $locationToEvaluate
     * @param int $moveCount
     * @return bool
     */
    public function continueMoving(Piece $piece, Location $locationToEvaluate, $moveCount) {
        return !$locationToEvaluate->isOccupied();
    }

} 