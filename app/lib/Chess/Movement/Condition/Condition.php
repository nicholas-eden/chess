<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 10/20/14
 * Time: 8:39 PM
 */

namespace Chess\Movement\Condition;

use \App;
use Chess\Board\Board;
use Chess\Board\Location;
use Chess\Piece\Piece;

abstract class Condition {
    /**
     * @param Piece $piece
     * @param Location $locationToEvaluate
     * @param int $moveCount
     * @return bool
     */
    abstract public function continueMoving(Piece $piece, Location $locationToEvaluate, $moveCount);

    /**
     * @return Board
     */
    protected function getBoard() {
        return App::make('Board');
    }
} 