<?php

namespace spec\Rb\JiraClient\Issue;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Rb\JiraClient\Issue\IssueFields;
use Rb\JiraClient\Issue\IssueFieldsInterface;

class IssueFieldsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(IssueFields::class);
        $this->shouldImplement(IssueFieldsInterface::class);
    }
}
