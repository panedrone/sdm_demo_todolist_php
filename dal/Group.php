<?php

// This code was generated by a tool. Don't modify it manually.
// http://sqldalmaker.sourceforge.net

class Group
{
    /**
     * @var object
     */
    private $gId;
    /**
     * @var object
     */
    private $gName;
    /**
     * @var object
     */
    private $tasksCount;

    public function getGId()
    {
        return $this->gId;
    }

    public function setGId($value)
    {
        $this->gId = $value;
    }

    public function getGName()
    {
        return $this->gName;
    }

    public function setGName($value)
    {
        $this->gName = $value;
    }

    public function getTasksCount()
    {
        return $this->tasksCount;
    }

    public function setTasksCount($value)
    {
        $this->tasksCount = $value;
    }
}