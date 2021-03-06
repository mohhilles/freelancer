<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/jobs.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Job scheduling options.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.JobScheduling</code>
 */
class JobScheduling extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Maximum number of times per hour a driver may be restarted as
     * a result of driver terminating with non-zero code before job is
     * reported failed.
     * A job may be reported as thrashing if driver exits with non-zero code
     * 4 times within 10 minute window.
     * Maximum value is 10.
     *
     * Generated from protobuf field <code>int32 max_failures_per_hour = 1;</code>
     */
    private $max_failures_per_hour = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $max_failures_per_hour
     *           Optional. Maximum number of times per hour a driver may be restarted as
     *           a result of driver terminating with non-zero code before job is
     *           reported failed.
     *           A job may be reported as thrashing if driver exits with non-zero code
     *           4 times within 10 minute window.
     *           Maximum value is 10.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Maximum number of times per hour a driver may be restarted as
     * a result of driver terminating with non-zero code before job is
     * reported failed.
     * A job may be reported as thrashing if driver exits with non-zero code
     * 4 times within 10 minute window.
     * Maximum value is 10.
     *
     * Generated from protobuf field <code>int32 max_failures_per_hour = 1;</code>
     * @return int
     */
    public function getMaxFailuresPerHour()
    {
        return $this->max_failures_per_hour;
    }

    /**
     * Optional. Maximum number of times per hour a driver may be restarted as
     * a result of driver terminating with non-zero code before job is
     * reported failed.
     * A job may be reported as thrashing if driver exits with non-zero code
     * 4 times within 10 minute window.
     * Maximum value is 10.
     *
     * Generated from protobuf field <code>int32 max_failures_per_hour = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxFailuresPerHour($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_failures_per_hour = $var;

        return $this;
    }

}

