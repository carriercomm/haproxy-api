<?php
/**
 * This file is part of HAProxyAPI.
 *
 * (c) Philippe Gerber <philippe@bigwhoop.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace BigWhoop\HAProxyAPI\Command;

use BigWhoop\HAProxyAPI\Client\HTTPClient;

interface Executable
{
    /**
     * @param array $params
     * @return Executable
     */
    public function setOptions(array $params);


    /**
     * @param \BigWhoop\HAProxyAPI\Client\HTTPClient $client
     * @return mixed
     */
    public function execute(HTTPClient $client);
}
