<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1/oslogin.proto

namespace Google\Cloud\OsLogin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for retrieving the login profile information for a user.
 *
 * Generated from protobuf message <code>google.cloud.oslogin.v1.GetLoginProfileRequest</code>
 */
class GetLoginProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique ID for the user in format `users/{user}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The unique ID for the user in format `users/{user}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oslogin\V1\Oslogin::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique ID for the user in format `users/{user}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique ID for the user in format `users/{user}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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

