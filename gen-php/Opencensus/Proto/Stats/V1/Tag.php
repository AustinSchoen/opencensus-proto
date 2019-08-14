<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opencensus/proto/stats/v1/stats.proto

namespace Opencensus\Proto\Stats\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TODO(bdrutu): Consider if this should be moved to a "tags" directory to match the API structure.
 *
 * Generated from protobuf message <code>opencensus.proto.stats.v1.Tag</code>
 */
class Tag extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string key = 1;</code>
     */
    private $key = '';
    /**
     * Generated from protobuf field <code>string value = 2;</code>
     */
    private $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *     @type string $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opencensus\Proto\Stats\V1\Stats::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}

