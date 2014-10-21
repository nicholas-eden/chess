<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 10/19/14
 * Time: 11:50 PM
 */

namespace Chess\Board;


class Board {

    const WIDTH = 8;
    const HEIGHT = 8;

    /**
     * @var [][]Location
     */
    private $grid = [];

    public function __construct() {
        $this->populateGrid();
    }

    /**
     * Populates the grid with 8 columns and 8 rows of Location
     */
    private function populateGrid() {
        for ($x = 0; $x < self::HEIGHT; $x++) {
            $this->grid[$x] = [];
            for ($y = 0; $y < self::HEIGHT; $y++) {
                $location = new Location();
                $location->setX($x);
                $location->setY($y);
                $this->grid[$x][$y] = $location;
            }
        }
    }

    /**
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function isValidLocation($x, $y) {
        $x = (int)$x;
        $y = (int)$y;

        if ($x < 0 || $x > self::WIDTH - 1) {
            return false;
        } else if ($y < 0 || $y > self::HEIGHT - 1) {
            return false;
        }

        return true;
    }

    /**
     * @param int $x
     * @param int $y
     * @return Location
     */
    public function getLocation($x, $y) {
        $x = (int)$x;
        $y = (int)$y;
        return $this->grid[$x][$y];
    }





}