<?php

class Project
{
    private string $image;
    private string $title;
    private string $details;

    public function __construct(string $image, string $title, string $details)
    {
        $this->image = $image;
        $this->title = $title;
        $this->details = $details;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDetails(): string
    {
        return $this->details;
    }
}
