<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opencensus/proto/agent/trace/v1/trace_service.proto

namespace Opencensus\Proto\Agent\Trace\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>opencensus.proto.agent.trace.v1.ExportTraceServiceRequest</code>
 */
class ExportTraceServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * This is required only in the first message on the stream or if the
     * previous sent ExportTraceServiceRequest message has a different Node (e.g.
     * when the same RPC is used to send Spans from multiple Applications).
     *
     * Generated from protobuf field <code>.opencensus.proto.agent.common.v1.Node node = 1;</code>
     */
    private $node = null;
    /**
     * A list of Spans that belong to the last received Node.
     *
     * Generated from protobuf field <code>repeated .opencensus.proto.trace.v1.Span spans = 2;</code>
     */
    private $spans;
    /**
     * The resource for the spans in this message that do not have an explicit
     * resource set.
     * If unset, the most recently set resource in the RPC stream applies. It is
     * valid to never be set within a stream, e.g. when no resource info is known.
     *
     * Generated from protobuf field <code>.opencensus.proto.resource.v1.Resource resource = 3;</code>
     */
    private $resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Opencensus\Proto\Agent\Common\V1\Node $node
     *           This is required only in the first message on the stream or if the
     *           previous sent ExportTraceServiceRequest message has a different Node (e.g.
     *           when the same RPC is used to send Spans from multiple Applications).
     *     @type \Opencensus\Proto\Trace\V1\Span[]|\Google\Protobuf\Internal\RepeatedField $spans
     *           A list of Spans that belong to the last received Node.
     *     @type \Opencensus\Proto\Resource\V1\Resource $resource
     *           The resource for the spans in this message that do not have an explicit
     *           resource set.
     *           If unset, the most recently set resource in the RPC stream applies. It is
     *           valid to never be set within a stream, e.g. when no resource info is known.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opencensus\Proto\Agent\Trace\V1\TraceService::initOnce();
        parent::__construct($data);
    }

    /**
     * This is required only in the first message on the stream or if the
     * previous sent ExportTraceServiceRequest message has a different Node (e.g.
     * when the same RPC is used to send Spans from multiple Applications).
     *
     * Generated from protobuf field <code>.opencensus.proto.agent.common.v1.Node node = 1;</code>
     * @return \Opencensus\Proto\Agent\Common\V1\Node
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * This is required only in the first message on the stream or if the
     * previous sent ExportTraceServiceRequest message has a different Node (e.g.
     * when the same RPC is used to send Spans from multiple Applications).
     *
     * Generated from protobuf field <code>.opencensus.proto.agent.common.v1.Node node = 1;</code>
     * @param \Opencensus\Proto\Agent\Common\V1\Node $var
     * @return $this
     */
    public function setNode($var)
    {
        GPBUtil::checkMessage($var, \Opencensus\Proto\Agent\Common\V1\Node::class);
        $this->node = $var;

        return $this;
    }

    /**
     * A list of Spans that belong to the last received Node.
     *
     * Generated from protobuf field <code>repeated .opencensus.proto.trace.v1.Span spans = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpans()
    {
        return $this->spans;
    }

    /**
     * A list of Spans that belong to the last received Node.
     *
     * Generated from protobuf field <code>repeated .opencensus.proto.trace.v1.Span spans = 2;</code>
     * @param \Opencensus\Proto\Trace\V1\Span[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpans($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opencensus\Proto\Trace\V1\Span::class);
        $this->spans = $arr;

        return $this;
    }

    /**
     * The resource for the spans in this message that do not have an explicit
     * resource set.
     * If unset, the most recently set resource in the RPC stream applies. It is
     * valid to never be set within a stream, e.g. when no resource info is known.
     *
     * Generated from protobuf field <code>.opencensus.proto.resource.v1.Resource resource = 3;</code>
     * @return \Opencensus\Proto\Resource\V1\Resource
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The resource for the spans in this message that do not have an explicit
     * resource set.
     * If unset, the most recently set resource in the RPC stream applies. It is
     * valid to never be set within a stream, e.g. when no resource info is known.
     *
     * Generated from protobuf field <code>.opencensus.proto.resource.v1.Resource resource = 3;</code>
     * @param \Opencensus\Proto\Resource\V1\Resource $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Opencensus\Proto\Resource\V1\Resource::class);
        $this->resource = $var;

        return $this;
    }

}

