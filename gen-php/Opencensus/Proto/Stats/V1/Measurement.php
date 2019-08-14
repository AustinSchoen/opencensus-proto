<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opencensus/proto/stats/v1/stats.proto

namespace Opencensus\Proto\Stats\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a data point to be collected for a Measure.
 *
 * Generated from protobuf message <code>opencensus.proto.stats.v1.Measurement</code>
 */
class Measurement extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .opencensus.proto.stats.v1.Tag tags = 1;</code>
     */
    private $tags;
    /**
     * The name of the measure to which the value is applied.
     *
     * Generated from protobuf field <code>string measure_name = 2;</code>
     */
    private $measure_name = '';
    /**
     * The time when this measurement was recorded. If the implementation uses a async buffer to
     * record measurements this may be the time when the measurement was read from the buffer.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 5;</code>
     */
    private $time = null;
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Opencensus\Proto\Stats\V1\Tag[]|\Google\Protobuf\Internal\RepeatedField $tags
     *     @type string $measure_name
     *           The name of the measure to which the value is applied.
     *     @type float $double_value
     *     @type int|string $int_value
     *     @type \Google\Protobuf\Timestamp $time
     *           The time when this measurement was recorded. If the implementation uses a async buffer to
     *           record measurements this may be the time when the measurement was read from the buffer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opencensus\Proto\Stats\V1\Stats::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .opencensus.proto.stats.v1.Tag tags = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Generated from protobuf field <code>repeated .opencensus.proto.stats.v1.Tag tags = 1;</code>
     * @param \Opencensus\Proto\Stats\V1\Tag[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opencensus\Proto\Stats\V1\Tag::class);
        $this->tags = $arr;

        return $this;
    }

    /**
     * The name of the measure to which the value is applied.
     *
     * Generated from protobuf field <code>string measure_name = 2;</code>
     * @return string
     */
    public function getMeasureName()
    {
        return $this->measure_name;
    }

    /**
     * The name of the measure to which the value is applied.
     *
     * Generated from protobuf field <code>string measure_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMeasureName($var)
    {
        GPBUtil::checkString($var, True);
        $this->measure_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double double_value = 3;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>double double_value = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 int_value = 4;</code>
     * @return int|string
     */
    public function getIntValue()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>int64 int_value = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The time when this measurement was recorded. If the implementation uses a async buffer to
     * record measurements this may be the time when the measurement was read from the buffer.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * The time when this measurement was recorded. If the implementation uses a async buffer to
     * record measurements this may be the time when the measurement was read from the buffer.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time = $var;

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

