<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 10/19/14
 * Time: 11:42 PM
 */

namespace lib\Chess\Board;


use lib\Chess\Piece\Piece;

class Location {

    const DARK = 'dark';

    const LIGHT = 'light';

    /**
     * @var int
     */
    protected $x;

    /**
     * @var int
     */
    protected $y;

    /**
     * @var Piece|null
     */
    protected $occupyingPiece;

    /**
     * @param Piece $occupyingPiece
     * @return $this
     */
    public function setOccupyingPiece(Piece $occupyingPiece)
    {
        $this->occupyingPiece = $occupyingPiece;
        return $this;
    }

    /**
     * @return Piece|null
     */
    public function getOccupyingPiece()
    {
        return $this->occupyingPiece;
    }

    /**
     * @param $x
     * @return $this
     */
    public function setX($x)
    {
        $this->x = $x;
        return $this;
    }

    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param $y
     * @return $this
     */
    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    public function getColor() {
        $isLight = ($this->getX() % 2) == ($this->getY() % 2);
        return ($isLight) ? self::LIGHT : self::DARK;
    }

    /**
     * @return bool
     */
    public function isOccupied() {
        return !is_null($this->getOccupyingPiece());
    }
} 