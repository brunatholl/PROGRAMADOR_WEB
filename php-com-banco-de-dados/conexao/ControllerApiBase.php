<?php

require_once("Query.php");
class ControllerApiBase {

    /**
     *
     * @var Query
     */
    private $Query;

    public function getQuery() {
        if (!isset($this->Query)) {
            $this->Query = new Query();
        }
        return $this->Query;
    }

    public function setQuery(Query $Query) {
        $this->Query = $Query;
    }
}