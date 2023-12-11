<?php

class player
{
    private $path;
    private $music;

    public function setMusicPath($path)
    {
        $this->path = $path;
    }

    public function setMusic($music)
    {
        $this->music = $music;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getMusic()
    {
        return $this->music;
    }

}