<?php
require_once "models/managers/CommentaryManager.php";

class CommentaryController
{
    private $commentaryManager;

    public function __construct()
    {
        $this->articleManager = new CommentaryManager;
    }
}