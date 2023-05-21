<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V12\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of video out-stream ad format (ad shown alongside a feed
 * with automatic playback, without sound).
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.VideoOutstreamAdInfo</code>
 */
class VideoOutstreamAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>string headline = 3;</code>
     */
    protected $headline = '';
    /**
     * The description line.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $headline
     *           The headline of the ad.
     *     @type string $description
     *           The description line.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>string headline = 3;</code>
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>string headline = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setHeadline($var)
    {
        GPBUtil::checkString($var, True);
        $this->headline = $var;

        return $this;
    }

    /**
     * The description line.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description line.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

