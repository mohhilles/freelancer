<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/transfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1;

use UnexpectedValueException;

/**
 * Represents data transfer run state.
 *
 * Protobuf type <code>google.cloud.bigquery.datatransfer.v1.TransferState</code>
 */
class TransferState
{
    /**
     * State placeholder.
     *
     * Generated from protobuf enum <code>TRANSFER_STATE_UNSPECIFIED = 0;</code>
     */
    const TRANSFER_STATE_UNSPECIFIED = 0;
    /**
     * Data transfer is scheduled and is waiting to be picked up by
     * data transfer backend.
     *
     * Generated from protobuf enum <code>PENDING = 2;</code>
     */
    const PENDING = 2;
    /**
     * Data transfer is in progress.
     *
     * Generated from protobuf enum <code>RUNNING = 3;</code>
     */
    const RUNNING = 3;
    /**
     * Data transfer completed successfully.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 4;</code>
     */
    const SUCCEEDED = 4;
    /**
     * Data transfer failed.
     *
     * Generated from protobuf enum <code>FAILED = 5;</code>
     */
    const FAILED = 5;
    /**
     * Data transfer is cancelled.
     *
     * Generated from protobuf enum <code>CANCELLED = 6;</code>
     */
    const CANCELLED = 6;

    private static $valueToName = [
        self::TRANSFER_STATE_UNSPECIFIED => 'TRANSFER_STATE_UNSPECIFIED',
        self::PENDING => 'PENDING',
        self::RUNNING => 'RUNNING',
        self::SUCCEEDED => 'SUCCEEDED',
        self::FAILED => 'FAILED',
        self::CANCELLED => 'CANCELLED',
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

