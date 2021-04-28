<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types = 1);

namespace Elasticsearch\Namespaces;

use Elasticsearch\Namespaces\AbstractNamespace;

/**
 * Class FleetNamespace
 *
 * NOTE: this file is autogenerated using util/GenerateEndpoints.php
 * and Elasticsearch 7.13.0-SNAPSHOT (ac43a43cdbc491ff54cd72937071183feaded548)
 */
class FleetNamespace extends AbstractNamespace
{

    /**
     * $params['index']            = (string) The name of the index.
     * $params['wait_for_advance'] = (boolean) Whether to wait for the global checkpoint to advance past the specified current checkpoints (Default = true)
     * $params['wait_for_index']   = (boolean) Whether to wait for the target index to exist and all primary shards be active (Default = true)
     * $params['checkpoints']      = (list) Comma separated list of checkpoints (Default = )
     * $params['timeout']          = (time) Timeout to wait for global checkpoint to advance (Default = 30s)
     *
     * @param array $params Associative array of parameters
     * @return array
     *
     * @note This API is EXPERIMENTAL and may be changed or removed completely in a future release
     *
     */
    public function globalCheckpoints(array $params = [])
    {
        $index = $this->extractArgument($params, 'index');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Fleet\GlobalCheckpoints');
        $endpoint->setParams($params);
        $endpoint->setIndex($index);

        return $this->performRequest($endpoint);
    }
}
