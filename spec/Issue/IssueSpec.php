<?php

namespace spec\Rb\JiraClient\Issue;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Rb\JiraClient\Issue\Issue;

class IssueSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Issue::class);
    }
}
