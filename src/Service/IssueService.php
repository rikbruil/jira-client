<?php

/*
 * This file is part of the Jira Client library.
 *
 * (c) Rik Bruil <rikbruil@users.noreply.github.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the LICENSE file.
 */

namespace Rb\JiraClient\Service;

use Rb\JiraClient\Client;
use Rb\JiraClient\Issue;

class IssueService extends Client
{
    const URI = '/issue';

    /**
     * @param string $identifier Issue ID or key
     * @param string $issueClass
     *
     * @return Issue\IssueInterface
     */
    public function getIssue($identifier, $issueClass = Issue\Issue::class)
    {
        $data = $this->request('GET', self::URI . '/' . $identifier);

        return $this->deserialize($data, $issueClass);
    }
}
