<?php
require_once "player.php";

class index
{
    public function __construct()
    {
        $player = new player();
        $player->setMusicPath("C:/users/aungmyooo/music");
        $player->setMusic("Blue_Night.mp3");
        $this->play($player->getPath(), $player->getMusic());
    }

    public function play($path, $music)
    {
        echo "<h1 style='text-align: center'>Playing <b style='color: red'>$music</b> from <b style='color: red'>$path</b></h1>";
    }
}

new index();