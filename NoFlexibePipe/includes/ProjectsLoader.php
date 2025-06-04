<?php

class ProjectsLoader
{
    private array $projects;

    public function __construct()
    {
        $jsonData = file_get_contents('./databases/projects.json');
        $this->projects = json_decode($jsonData, true);
    }

    public function getProjects(): array
    {
        return $this->projects;
    }
}

$projectsLoader = new ProjectsLoader();
?>
