<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace Google\Cloud\Monitoring\V3;

use UnexpectedValueException;

/**
 * The regions from which an uptime check can be run.
 *
 * Protobuf type <code>google.monitoring.v3.UptimeCheckRegion</code>
 */
class UptimeCheckRegion
{
    /**
     * Default value if no region is specified. Will result in uptime checks
     * running from all regions.
     *
     * Generated from protobuf enum <code>REGION_UNSPECIFIED = 0;</code>
     */
    const REGION_UNSPECIFIED = 0;
    /**
     * Allows checks to run from locations within the United States of America.
     *
     * Generated from protobuf enum <code>USA = 1;</code>
     */
    const USA = 1;
    /**
     * Allows checks to run from locations within the continent of Europe.
     *
     * Generated from protobuf enum <code>EUROPE = 2;</code>
     */
    const EUROPE = 2;
    /**
     * Allows checks to run from locations within the continent of South
     * America.
     *
     * Generated from protobuf enum <code>SOUTH_AMERICA = 3;</code>
     */
    const SOUTH_AMERICA = 3;
    /**
     * Allows checks to run from locations within the Asia Pacific area (ex:
     * Singapore).
     *
     * Generated from protobuf enum <code>ASIA_PACIFIC = 4;</code>
     */
    const ASIA_PACIFIC = 4;

    private static $valueToName = [
        self::REGION_UNSPECIFIED => 'REGION_UNSPECIFIED',
        self::USA => 'USA',
        self::EUROPE => 'EUROPE',
        self::SOUTH_AMERICA => 'SOUTH_AMERICA',
        self::ASIA_PACIFIC => 'ASIA_PACIFIC',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

