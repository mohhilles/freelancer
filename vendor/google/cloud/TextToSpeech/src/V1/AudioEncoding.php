<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/texttospeech/v1/cloud_tts.proto

namespace Google\Cloud\TextToSpeech\V1;

use UnexpectedValueException;

/**
 * Configuration to set up audio encoder. The encoding determines the output
 * audio format that we'd like.
 *
 * Protobuf type <code>google.cloud.texttospeech.v1.AudioEncoding</code>
 */
class AudioEncoding
{
    /**
     * Not specified. Will return result [google.rpc.Code.INVALID_ARGUMENT][].
     *
     * Generated from protobuf enum <code>AUDIO_ENCODING_UNSPECIFIED = 0;</code>
     */
    const AUDIO_ENCODING_UNSPECIFIED = 0;
    /**
     * Uncompressed 16-bit signed little-endian samples (Linear PCM).
     * Audio content returned as LINEAR16 also contains a WAV header.
     *
     * Generated from protobuf enum <code>LINEAR16 = 1;</code>
     */
    const LINEAR16 = 1;
    /**
     * MP3 audio.
     *
     * Generated from protobuf enum <code>MP3 = 2;</code>
     */
    const MP3 = 2;
    /**
     * Opus encoded audio wrapped in an ogg container. The result will be a
     * file which can be played natively on Android, and in browsers (at least
     * Chrome and Firefox). The quality of the encoding is considerably higher
     * than MP3 while using approximately the same bitrate.
     *
     * Generated from protobuf enum <code>OGG_OPUS = 3;</code>
     */
    const OGG_OPUS = 3;

    private static $valueToName = [
        self::AUDIO_ENCODING_UNSPECIFIED => 'AUDIO_ENCODING_UNSPECIFIED',
        self::LINEAR16 => 'LINEAR16',
        self::MP3 => 'MP3',
        self::OGG_OPUS => 'OGG_OPUS',
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

