<?php

class Review
{
    private string $profileImage;
    private string $reviewTitle;
    private string $description;

    public function __construct(string $profileImage, string $reviewTitle, string $description)
    {
        $this->profileImage = $profileImage;
        $this->reviewTitle = $reviewTitle;
        $this->description = $description;
    }

    public function getProfileImage(): string
    {
        return $this->profileImage;
    }

    public function getReviewTitle(): string
    {
        return $this->reviewTitle;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
