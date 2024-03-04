<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation.proto

namespace Google\Cloud\Dialogflow\V2\SearchKnowledgeAnswer;

use UnexpectedValueException;

/**
 * The type of the answer.
 *
 * Protobuf type <code>google.cloud.dialogflow.v2.SearchKnowledgeAnswer.AnswerType</code>
 */
class AnswerType
{
    /**
     * The answer has a unspecified type.
     *
     * Generated from protobuf enum <code>ANSWER_TYPE_UNSPECIFIED = 0;</code>
     */
    const ANSWER_TYPE_UNSPECIFIED = 0;
    /**
     * The answer is from FAQ documents.
     *
     * Generated from protobuf enum <code>FAQ = 1;</code>
     */
    const FAQ = 1;
    /**
     * The answer is from generative model.
     *
     * Generated from protobuf enum <code>GENERATIVE = 2;</code>
     */
    const GENERATIVE = 2;
    /**
     * The answer is from intent matching.
     *
     * Generated from protobuf enum <code>INTENT = 3;</code>
     */
    const INTENT = 3;

    private static $valueToName = [
        self::ANSWER_TYPE_UNSPECIFIED => 'ANSWER_TYPE_UNSPECIFIED',
        self::FAQ => 'FAQ',
        self::GENERATIVE => 'GENERATIVE',
        self::INTENT => 'INTENT',
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


