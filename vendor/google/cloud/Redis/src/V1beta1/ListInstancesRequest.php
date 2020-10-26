<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1beta1/cloud_redis.proto

namespace Google\Cloud\Redis\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for [ListInstances][google.cloud.redis.v1beta1.CloudRedis.ListInstances].
 *
 * Generated from protobuf message <code>google.cloud.redis.v1beta1.ListInstancesRequest</code>
 */
class ListInstancesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the instance location using the form:
     *     `projects/{project_id}/locations/{location_id}`
     * where `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * The maximum number of items to return.
     * If not specified, a default value of 1000 will be used by the service.
     * Regardless of the page_size value, the response may include a partial list
     * and a caller should only rely on response's
     * [next_page_token][CloudRedis.ListInstancesResponse.next_page_token]
     * to determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The next_page_token value returned from a previous List request,
     * if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the instance location using the form:
     *               `projects/{project_id}/locations/{location_id}`
     *           where `location_id` refers to a GCP region.
     *     @type int $page_size
     *           The maximum number of items to return.
     *           If not specified, a default value of 1000 will be used by the service.
     *           Regardless of the page_size value, the response may include a partial list
     *           and a caller should only rely on response's
     *           [next_page_token][CloudRedis.ListInstancesResponse.next_page_token]
     *           to determine if there are more instances left to be queried.
     *     @type string $page_token
     *           The next_page_token value returned from a previous List request,
     *           if any.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\V1Beta1\CloudRedis::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the instance location using the form:
     *     `projects/{project_id}/locations/{location_id}`
     * where `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the instance location using the form:
     *     `projects/{project_id}/locations/{location_id}`
     * where `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of items to return.
     * If not specified, a default value of 1000 will be used by the service.
     * Regardless of the page_size value, the response may include a partial list
     * and a caller should only rely on response's
     * [next_page_token][CloudRedis.ListInstancesResponse.next_page_token]
     * to determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return.
     * If not specified, a default value of 1000 will be used by the service.
     * Regardless of the page_size value, the response may include a partial list
     * and a caller should only rely on response's
     * [next_page_token][CloudRedis.ListInstancesResponse.next_page_token]
     * to determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The next_page_token value returned from a previous List request,
     * if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value returned from a previous List request,
     * if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

