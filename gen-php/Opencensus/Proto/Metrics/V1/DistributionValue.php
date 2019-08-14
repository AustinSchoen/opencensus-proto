<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opencensus/proto/metrics/v1/metrics.proto

namespace Opencensus\Proto\Metrics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Distribution contains summary statistics for a population of values. It
 * optionally contains a histogram representing the distribution of those
 * values across a set of buckets.
 *
 * Generated from protobuf message <code>opencensus.proto.metrics.v1.DistributionValue</code>
 */
class DistributionValue extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of values in the population. Must be non-negative. This value
     * must equal the sum of the values in bucket_counts if a histogram is
     * provided.
     *
     * Generated from protobuf field <code>int64 count = 1;</code>
     */
    private $count = 0;
    /**
     * The sum of the values in the population. If count is zero then this field
     * must be zero.
     *
     * Generated from protobuf field <code>double sum = 2;</code>
     */
    private $sum = 0.0;
    /**
     * The sum of squared deviations from the mean of the values in the
     * population. For values x_i this is:
     *     Sum[i=1..n]((x_i - mean)^2)
     * Knuth, "The Art of Computer Programming", Vol. 2, page 323, 3rd edition
     * describes Welford's method for accumulating this sum in one pass.
     * If count is zero then this field must be zero.
     *
     * Generated from protobuf field <code>double sum_of_squared_deviation = 3;</code>
     */
    private $sum_of_squared_deviation = 0.0;
    /**
     * Don't change bucket boundaries within a TimeSeries if your backend doesn't
     * support this.
     * TODO(issue #152): consider not required to send bucket options for
     * optimization.
     *
     * Generated from protobuf field <code>.opencensus.proto.metrics.v1.DistributionValue.BucketOptions bucket_options = 4;</code>
     */
    private $bucket_options = null;
    /**
     * If the distribution does not have a histogram, then omit this field.
     * If there is a histogram, then the sum of the values in the Bucket counts
     * must equal the value in the count field of the distribution.
     *
     * Generated from protobuf field <code>repeated .opencensus.proto.metrics.v1.DistributionValue.Bucket buckets = 5;</code>
     */
    private $buckets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $count
     *           The number of values in the population. Must be non-negative. This value
     *           must equal the sum of the values in bucket_counts if a histogram is
     *           provided.
     *     @type float $sum
     *           The sum of the values in the population. If count is zero then this field
     *           must be zero.
     *     @type float $sum_of_squared_deviation
     *           The sum of squared deviations from the mean of the values in the
     *           population. For values x_i this is:
     *               Sum[i=1..n]((x_i - mean)^2)
     *           Knuth, "The Art of Computer Programming", Vol. 2, page 323, 3rd edition
     *           describes Welford's method for accumulating this sum in one pass.
     *           If count is zero then this field must be zero.
     *     @type \Opencensus\Proto\Metrics\V1\DistributionValue\BucketOptions $bucket_options
     *           Don't change bucket boundaries within a TimeSeries if your backend doesn't
     *           support this.
     *           TODO(issue #152): consider not required to send bucket options for
     *           optimization.
     *     @type \Opencensus\Proto\Metrics\V1\DistributionValue\Bucket[]|\Google\Protobuf\Internal\RepeatedField $buckets
     *           If the distribution does not have a histogram, then omit this field.
     *           If there is a histogram, then the sum of the values in the Bucket counts
     *           must equal the value in the count field of the distribution.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opencensus\Proto\Metrics\V1\Metrics::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of values in the population. Must be non-negative. This value
     * must equal the sum of the values in bucket_counts if a histogram is
     * provided.
     *
     * Generated from protobuf field <code>int64 count = 1;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * The number of values in the population. Must be non-negative. This value
     * must equal the sum of the values in bucket_counts if a histogram is
     * provided.
     *
     * Generated from protobuf field <code>int64 count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * The sum of the values in the population. If count is zero then this field
     * must be zero.
     *
     * Generated from protobuf field <code>double sum = 2;</code>
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * The sum of the values in the population. If count is zero then this field
     * must be zero.
     *
     * Generated from protobuf field <code>double sum = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setSum($var)
    {
        GPBUtil::checkDouble($var);
        $this->sum = $var;

        return $this;
    }

    /**
     * The sum of squared deviations from the mean of the values in the
     * population. For values x_i this is:
     *     Sum[i=1..n]((x_i - mean)^2)
     * Knuth, "The Art of Computer Programming", Vol. 2, page 323, 3rd edition
     * describes Welford's method for accumulating this sum in one pass.
     * If count is zero then this field must be zero.
     *
     * Generated from protobuf field <code>double sum_of_squared_deviation = 3;</code>
     * @return float
     */
    public function getSumOfSquaredDeviation()
    {
        return $this->sum_of_squared_deviation;
    }

    /**
     * The sum of squared deviations from the mean of the values in the
     * population. For values x_i this is:
     *     Sum[i=1..n]((x_i - mean)^2)
     * Knuth, "The Art of Computer Programming", Vol. 2, page 323, 3rd edition
     * describes Welford's method for accumulating this sum in one pass.
     * If count is zero then this field must be zero.
     *
     * Generated from protobuf field <code>double sum_of_squared_deviation = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setSumOfSquaredDeviation($var)
    {
        GPBUtil::checkDouble($var);
        $this->sum_of_squared_deviation = $var;

        return $this;
    }

    /**
     * Don't change bucket boundaries within a TimeSeries if your backend doesn't
     * support this.
     * TODO(issue #152): consider not required to send bucket options for
     * optimization.
     *
     * Generated from protobuf field <code>.opencensus.proto.metrics.v1.DistributionValue.BucketOptions bucket_options = 4;</code>
     * @return \Opencensus\Proto\Metrics\V1\DistributionValue\BucketOptions
     */
    public function getBucketOptions()
    {
        return $this->bucket_options;
    }

    /**
     * Don't change bucket boundaries within a TimeSeries if your backend doesn't
     * support this.
     * TODO(issue #152): consider not required to send bucket options for
     * optimization.
     *
     * Generated from protobuf field <code>.opencensus.proto.metrics.v1.DistributionValue.BucketOptions bucket_options = 4;</code>
     * @param \Opencensus\Proto\Metrics\V1\DistributionValue\BucketOptions $var
     * @return $this
     */
    public function setBucketOptions($var)
    {
        GPBUtil::checkMessage($var, \Opencensus\Proto\Metrics\V1\DistributionValue_BucketOptions::class);
        $this->bucket_options = $var;

        return $this;
    }

    /**
     * If the distribution does not have a histogram, then omit this field.
     * If there is a histogram, then the sum of the values in the Bucket counts
     * must equal the value in the count field of the distribution.
     *
     * Generated from protobuf field <code>repeated .opencensus.proto.metrics.v1.DistributionValue.Bucket buckets = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuckets()
    {
        return $this->buckets;
    }

    /**
     * If the distribution does not have a histogram, then omit this field.
     * If there is a histogram, then the sum of the values in the Bucket counts
     * must equal the value in the count field of the distribution.
     *
     * Generated from protobuf field <code>repeated .opencensus.proto.metrics.v1.DistributionValue.Bucket buckets = 5;</code>
     * @param \Opencensus\Proto\Metrics\V1\DistributionValue\Bucket[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuckets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opencensus\Proto\Metrics\V1\DistributionValue\Bucket::class);
        $this->buckets = $arr;

        return $this;
    }

}

