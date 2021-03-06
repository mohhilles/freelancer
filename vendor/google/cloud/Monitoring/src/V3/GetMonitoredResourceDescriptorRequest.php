<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `GetMonitoredResourceDescriptor` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.GetMonitoredResourceDescriptorRequest</code>
 */
class GetMonitoredResourceDescriptorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The monitored resource descriptor to get.  The format is
     * `"projects/{project_id_or_number}/monitoredResourceDescriptors/{resource_type}"`.
     * The `{resource_type}` is a predefined type, such as
     * `cloudsql_database`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The monitored resource descriptor to get.  The format is
     *           `"projects/{project_id_or_number}/monitoredResourceDescriptors/{resource_type}"`.
     *           The `{resource_type}` is a predefined type, such as
     *           `cloudsql_database`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\MetricService::initOnce();
        parent::__construct($data);
    }

    /**
     * The monitored resource descriptor to get.  The format is
     * `"projects/{project_id_or_number}/monitoredResourceDescriptors/{resource_type}"`.
     * The `{resource_type}` is a predefined type, such as
     * `cloudsql_database`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The monitored resource descriptor to get.  The format is
     * `"projects/{project_id_or_number}/monitoredResourceDescriptors/{resource_type}"`.
     * The `{resource_type}` is a predefined type, such as
     * `cloudsql_database`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

