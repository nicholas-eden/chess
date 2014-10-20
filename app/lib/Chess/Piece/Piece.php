<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 10/19/14
 * Time: 11:37 PM
 */

namespace lib\Chess\Piece;


use lib\Chess\Board\Location;

abstract class Piece {

    /**
     * @var Location
     */
    protected $location;

    abstract public function getAvailableMoves();

    /**
     * @return Location
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * @param Location $location
     * @return $this
     */
    public function setLocation(Location $location) {
        $this->location = $location;
        return $this;
    }



} 