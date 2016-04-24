<?php

namespace Rb\JiraClient\Service;

use Rb\JiraClient\Client;
use Rb\JiraClient\Project\Project;
use Rb\JiraClient\Project\ProjectInterface;

class ProjectService extends Client
{
    const URI = '/project';

    /**
     * @param string $identifier The project key or ID
     * @param string $className
     *
     * @return ProjectInterface
     */
    public function getProject($identifier, $className = Project::class)
    {
        $data = $this->request('GET', self::URI . '/' . $identifier);

        return $this->deserialize($data, $className);
    }

    /**
     * @param string $className
     *
     * @return ProjectInterface[]
     */
    public function getProjects($className = Project::class)
    {
        $data = $this->request('GET', self::URI);

        return $this->deserialize($data, 'array<' . $className . '>');
    }
}
