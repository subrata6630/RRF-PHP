<?php

interface Database {
    public function create();
    public function read();
    public function update();
    public function delete();
}


abstract class AbstractDatabase {
    public function create()
    {

    }
    public abstract function read();
    public abstract function update();
    public abstract function delete();
}
