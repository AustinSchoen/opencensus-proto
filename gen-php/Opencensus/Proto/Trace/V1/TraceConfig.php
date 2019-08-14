<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opencensus/proto/trace/v1/trace_config.proto

namespace Opencensus\Proto\Trace\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Global configuration of the trace service. All fields must be specified, or
 * the default (zero) values will be used for each type.
 *
 * Generated from protobuf message <code>opencensus.proto.trace.v1.TraceConfig</code>
 */
class TraceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The global default max number of attributes per span.
     *
     * Generated from protobuf field <code>int64 max_number_of_attributes = 4;</code>
     */
    private $max_number_of_attributes = 0;
    /**
     * The global default max number of annotation events per span.
     *
     * Generated from protobuf field <code>int64 max_number_of_annotations = 5;</code>
     */
    private $max_number_of_annotations = 0;
    /**
     * The global default max number of message events per span.
     *
     * Generated from protobuf field <code>int64 max_number_of_message_events = 6;</code>
     */
    private $max_number_of_message_events = 0;
    /**
     * The global default max number of link entries per span.
     *
     * Generated from protobuf field <code>int64 max_number_of_links = 7;</code>
     */
    private $max_number_of_links = 0;
    protected $sampler;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Opencensus\Proto\Trace\V1\ProbabilitySampler $probability_sampler
     *     @type \Opencensus\Proto\Trace\V1\ConstantSampler $constant_sampler
     *     @type \Opencensus\Proto\Trace\V1\RateLimitingSampler $rate_limiting_sampler
     *     @type int|string $max_number_of_attributes
     *           The global default max number of attributes per span.
     *     @type int|string $max_number_of_annotations
     *           The global default max number of annotation events per span.
     *     @type int|string $max_number_of_message_events
     *           The global default max number of message events per span.
     *     @type int|string $max_number_of_links
     *           The global default max number of link entries per span.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opencensus\Proto\Trace\V1\TraceConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.opencensus.proto.trace.v1.ProbabilitySampler probability_sampler = 1;</code>
     * @return \Opencensus\Proto\Trace\V1\ProbabilitySampler
     */
    public function getProbabilitySampler()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.opencensus.proto.trace.v1.ProbabilitySampler probability_sampler = 1;</code>
     * @param \Opencensus\Proto\Trace\V1\ProbabilitySampler $var
     * @return $this
     */
    public function setProbabilitySampler($var)
    {
        GPBUtil::checkMessage($var, \Opencensus\Proto\Trace\V1\ProbabilitySampler::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.opencensus.proto.trace.v1.ConstantSampler constant_sampler = 2;</code>
     * @return \Opencensus\Proto\Trace\V1\ConstantSampler
     */
    public function getConstantSampler()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.opencensus.proto.trace.v1.ConstantSampler constant_sampler = 2;</code>
     * @param \Opencensus\Proto\Trace\V1\ConstantSampler $var
     * @return $this
     */
    public function setConstantSampler($var)
    {
        GPBUtil::checkMessage($var, \Opencensus\Proto\Trace\V1\ConstantSampler::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.opencensus.proto.trace.v1.RateLimitingSampler rate_limiting_sampler = 3;</code>
     * @return \Opencensus\Proto\Trace\V1\RateLimitingSampler
     */
    public function getRateLimitingSampler()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.opencensus.proto.trace.v1.RateLimitingSampler rate_limiting_sampler = 3;</code>
     * @param \Opencensus\Proto\Trace\V1\RateLimitingSampler $var
     * @return $this
     */
    public function setRateLimitingSampler($var)
    {
        GPBUtil::checkMessage($var, \Opencensus\Proto\Trace\V1\RateLimitingSampler::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The global default max number of attributes per span.
     *
     * Generated from protobuf field <code>int64 max_number_of_attributes = 4;</code>
     * @return int|string
     */
    public function getMaxNumberOfAttributes()
    {
        return $this->max_number_of_attributes;
    }

    /**
     * The global default max number of attributes per span.
     *
     * Generated from protobuf field <code>int64 max_number_of_attributes = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxNumberOfAttributes($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_number_of_attributes = $var;

        return $this;
    }

    /**
     * The global default max number of annotation events per span.
     *
     * Generated from protobuf field <code>int64 max_number_of_annotations = 5;</code>
     * @return int|string
     */
    public function getMaxNumberOfAnnotations()
    {
        return $this->max_number_of_annotations;
    }

    /**
     * The global default max number of annotation events per span.
     *
     * Generated from protobuf field <code>int64 max_number_of_annotations = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxNumberOfAnnotations($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_number_of_annotations = $var;

        return $this;
    }

    /**
     * The global default max number of message events per span.
     *
     * Generated from protobuf field <code>int64 max_number_of_message_events = 6;</code>
     * @return int|string
     */
    public function getMaxNumberOfMessageEvents()
    {
        return $this->max_number_of_message_events;
    }

    /**
     * The global default max number of message events per span.
     *
     * Generated from protobuf field <code>int64 max_number_of_message_events = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxNumberOfMessageEvents($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_number_of_message_events = $var;

        return $this;
    }

    /**
     * The global default max number of link entries per span.
     *
     * Generated from protobuf field <code>int64 max_number_of_links = 7;</code>
     * @return int|string
     */
    public function getMaxNumberOfLinks()
    {
        return $this->max_number_of_links;
    }

    /**
     * The global default max number of link entries per span.
     *
     * Generated from protobuf field <code>int64 max_number_of_links = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxNumberOfLinks($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_number_of_links = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSampler()
    {
        return $this->whichOneof("sampler");
    }

}

