<?php

namespace EventsBundle\Entity;

class Event {

    protected $id;
    protected $name;
    protected $date;
    protected $description;
    protected $file;
    protected $streets;

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDate() {
        return $this->date;
    }

    function getDescription() {
        return $this->description;
    }

    function getFile() {
        return $this->file;
    }

    function getStreets() {
        return $this->streets;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDate(\DateTime $date) {
        $this->date = $date;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setFile($file) {
        $this->file = $file;
    }

    function setStreets($streets) {
        $this->streets = $streets;
    }

}
