<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 10/20/14
 * Time: 8:41 PM
 */

namespace Chess\Movement\Behavior;


use Chess\Movement\Condition\ConditionSet;

abstract class Behavior {

    protected $conditionSet;

    /**
     * @param ConditionSet $conditionSet
     * @return $this
     */
    public function setConditionSet(ConditionSet $conditionSet) {
        $this->conditionSet = $conditionSet;
        return $this;
    }

} 