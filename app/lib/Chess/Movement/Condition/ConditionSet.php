<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 10/20/14
 * Time: 8:50 PM
 */

namespace Chess\Movement\Condition;


class ConditionSet {

    /**
     * @var []Condition
     */
    protected $conditions = [];

    /**
     * @param Condition $condition
     * @return $this
     */
    public function addCondition(Condition $condition) {
        $this->conditions[]= $condition;
        return $this;
    }

    /**
     * @return []Condition
     */
    public function getConditions() {
        return $this->conditions;
    }
} 