<?php

/*
 * This file is part of the Jira Client library.
 *
 * (c) Rik Bruil <rikbruil@users.noreply.github.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the LICENSE file.
 */

namespace Rb\JiraClient\Issue;

use Rb\JiraClient\ResourceInterface;

interface IssueInterface extends ResourceInterface
{
    /**
     * Return the fields for this issue.
     *
     * @return IssueFieldsInterface
     */
    public function getFields();

    /**
     * Returns the key of this issue.
     *
     * @return string
     */
    public function getKey();
}
