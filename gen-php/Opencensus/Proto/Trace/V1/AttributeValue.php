<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opencensus/proto/trace/v1/trace.proto

namespace Opencensus\Proto\Trace\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The value of an Attribute.
 *
 * Generated from protobuf message <code>opencensus.proto.trace.v1.AttributeValue</code>
 */
class AttributeValue extends \Google\Protobuf\Internal\Message
{
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Opencensus\Proto\Trace\V1\TruncatableString $string_value
     *           A string up to 256 bytes long.
     *     @type int|string $int_value
     *           A 64-bit signed integer.
     *     @type bool $bool_value
     *           A Boolean value represented by `true` or `false`.
     *     @type float $double_value
     *           A double value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opencensus\Proto\Trace\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * A string up to 256 bytes long.
     *
     * Generated from protobuf field <code>.opencensus.proto.trace.v1.TruncatableString string_value = 1;</code>
     * @return \Opencensus\Proto\Trace\V1\TruncatableString
     */
    public function getStringValue()
    {
        return $this->readOneof(1);
    }

    /**
     * A string up to 256 bytes long.
     *
     * Generated from protobuf field <code>.opencensus.proto.trace.v1.TruncatableString string_value = 1;</code>
     * @param \Opencensus\Proto\Trace\V1\TruncatableString $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkMessage($var, \Opencensus\Proto\Trace\V1\TruncatableString::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A 64-bit signed integer.
     *
     * Generated from protobuf field <code>int64 int_value = 2;</code>
     * @return int|string
     */
    public function getIntValue()
    {
        return $this->readOneof(2);
    }

    /**
     * A 64-bit signed integer.
     *
     * Generated from protobuf field <code>int64 int_value = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A Boolean value represented by `true` or `false`.
     *
     * Generated from protobuf field <code>bool bool_value = 3;</code>
     * @return bool
     */
    public function getBoolValue()
    {
        return $this->readOneof(3);
    }

    /**
     * A Boolean value represented by `true` or `false`.
     *
     * Generated from protobuf field <code>bool bool_value = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoolValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A double value.
     *
     * Generated from protobuf field <code>double double_value = 4;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(4);
    }

    /**
     * A double value.
     *
     * Generated from protobuf field <code>double double_value = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

