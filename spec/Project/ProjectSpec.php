<?php

namespace spec\Rb\JiraClient\Project;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Rb\JiraClient\Project;

class ProjectSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Project\Project::class);
        $this->shouldImplement(Project\ProjectInterface::class);
    }
}
