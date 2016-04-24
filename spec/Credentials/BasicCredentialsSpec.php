<?php

namespace spec\Rb\JiraClient\Credentials;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Rb\JiraClient\Credentials\BasicCredentials;
use Rb\JiraClient\Credentials\CredentialsInterface;

class BasicCredentialsSpec extends ObjectBehavior
{
    const HOST = 'host';
    const USER = 'user';
    const PASS = 'password';

    function let()
    {
        $this->beConstructedWith(self::HOST, self::USER, self::PASS);
    }

    function it_should_return_correct_values()
    {
        $this->shouldHaveType(BasicCredentials::class);
        $this->shouldImplement(CredentialsInterface::class);

        $this->getDomain()->shouldReturn(self::HOST);
        $this->getUser()->shouldReturn(self::USER);
        $this->getPassword()->shouldReturn(self::PASS);
    }
}
