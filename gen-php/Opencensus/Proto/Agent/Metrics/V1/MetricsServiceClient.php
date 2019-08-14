<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2018, OpenCensus Authors
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Opencensus\Proto\Agent\Metrics\V1;

/**
 * Service that can be used to push metrics between one Application
 * instrumented with OpenCensus and an agent, or between an agent and a
 * central collector.
 */
class MetricsServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * For performance reasons, it is recommended to keep this RPC
     * alive for the entire life of the application.
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Export($metadata = [], $options = []) {
        return $this->_bidiRequest('/opencensus.proto.agent.metrics.v1.MetricsService/Export',
        ['\Opencensus\Proto\Agent\Metrics\V1\ExportMetricsServiceResponse','decode'],
        $metadata, $options);
    }

}
