<?php
interface GameRules{
    public function createGameSense();
    public function createTree();
    public function createHousing();
    public function createActor();
}
class Game implements GameRules{

    public function createGameSense()
    {
        // TODO: Implement createGameSense() method.
        echo "creating GameSense....";
    }

    public function createTree()
    {
        // TODO: Implement createTree() method.
        echo "creating Tree....";

    }

    public function createHousing()
    {
        // TODO: Implement createHousing() method.
        echo "creating House....";

    }

    public function createActor()
    {
        // TODO: Implement createActor() method.
        echo "creating Actor....";

    }
}
$obj = new Game();
$obj->createGameSense();
$obj->createHousing();
$obj->createTree();
$obj->createActor();