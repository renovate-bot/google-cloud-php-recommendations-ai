<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/user_event_service.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for PurgeUserEvents method.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.PurgeUserEventsRequest</code>
 */
class PurgeUserEventsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the event_store under which the events are
     * created. The format is
     * `projects/${projectId}/locations/global/catalogs/${catalogId}/eventStores/${eventStoreId}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The filter string to specify the events to be deleted. Empty
     * string filter is not allowed. This filter can also be used with
     * ListUserEvents API to list events that will be deleted. The eligible fields
     * for filtering are:
     * * eventType - UserEvent.eventType field of type string.
     * * eventTime - in ISO 8601 "zulu" format.
     * * visitorId - field of type string. Specifying this will delete all events
     * associated with a visitor.
     * * userId - field of type string. Specifying this will delete all events
     * associated with a user.
     * Example 1: Deleting all events in a time range.
     * `eventTime > "2012-04-23T18:25:43.511Z" eventTime <
     * "2012-04-23T18:30:43.511Z"`
     * Example 2: Deleting specific eventType in time range.
     * `eventTime > "2012-04-23T18:25:43.511Z" eventType = "detail-page-view"`
     * Example 3: Deleting all events for a specific visitor
     * `visitorId = visitor1024`
     * The filtering fields are assumed to have an implicit AND.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $filter = '';
    /**
     * Optional. The default value is false. Override this flag to true to
     * actually perform the purge. If the field is not set to true, a sampling of
     * events to be deleted will be returned.
     *
     * Generated from protobuf field <code>bool force = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $force = false;

    /**
     * @param string $parent Required. The resource name of the event_store under which the events are
     *                       created. The format is
     *                       `projects/${projectId}/locations/global/catalogs/${catalogId}/eventStores/${eventStoreId}`
     *                       Please see {@see UserEventServiceClient::eventStoreName()} for help formatting this field.
     * @param string $filter Required. The filter string to specify the events to be deleted. Empty
     *                       string filter is not allowed. This filter can also be used with
     *                       ListUserEvents API to list events that will be deleted. The eligible fields
     *                       for filtering are:
     *                       * eventType - UserEvent.eventType field of type string.
     *                       * eventTime - in ISO 8601 "zulu" format.
     *                       * visitorId - field of type string. Specifying this will delete all events
     *                       associated with a visitor.
     *                       * userId - field of type string. Specifying this will delete all events
     *                       associated with a user.
     *                       Example 1: Deleting all events in a time range.
     *                       `eventTime > "2012-04-23T18:25:43.511Z" eventTime <
     *                       "2012-04-23T18:30:43.511Z"`
     *                       Example 2: Deleting specific eventType in time range.
     *                       `eventTime > "2012-04-23T18:25:43.511Z" eventType = "detail-page-view"`
     *                       Example 3: Deleting all events for a specific visitor
     *                       `visitorId = visitor1024`
     *                       The filtering fields are assumed to have an implicit AND.
     * @param bool   $force  Optional. The default value is false. Override this flag to true to
     *                       actually perform the purge. If the field is not set to true, a sampling of
     *                       events to be deleted will be returned.
     *
     * @return \Google\Cloud\RecommendationEngine\V1beta1\PurgeUserEventsRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $filter, bool $force): self
    {
        return (new self())
            ->setParent($parent)
            ->setFilter($filter)
            ->setForce($force);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the event_store under which the events are
     *           created. The format is
     *           `projects/${projectId}/locations/global/catalogs/${catalogId}/eventStores/${eventStoreId}`
     *     @type string $filter
     *           Required. The filter string to specify the events to be deleted. Empty
     *           string filter is not allowed. This filter can also be used with
     *           ListUserEvents API to list events that will be deleted. The eligible fields
     *           for filtering are:
     *           * eventType - UserEvent.eventType field of type string.
     *           * eventTime - in ISO 8601 "zulu" format.
     *           * visitorId - field of type string. Specifying this will delete all events
     *           associated with a visitor.
     *           * userId - field of type string. Specifying this will delete all events
     *           associated with a user.
     *           Example 1: Deleting all events in a time range.
     *           `eventTime > "2012-04-23T18:25:43.511Z" eventTime <
     *           "2012-04-23T18:30:43.511Z"`
     *           Example 2: Deleting specific eventType in time range.
     *           `eventTime > "2012-04-23T18:25:43.511Z" eventType = "detail-page-view"`
     *           Example 3: Deleting all events for a specific visitor
     *           `visitorId = visitor1024`
     *           The filtering fields are assumed to have an implicit AND.
     *     @type bool $force
     *           Optional. The default value is false. Override this flag to true to
     *           actually perform the purge. If the field is not set to true, a sampling of
     *           events to be deleted will be returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\UserEventService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the event_store under which the events are
     * created. The format is
     * `projects/${projectId}/locations/global/catalogs/${catalogId}/eventStores/${eventStoreId}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the event_store under which the events are
     * created. The format is
     * `projects/${projectId}/locations/global/catalogs/${catalogId}/eventStores/${eventStoreId}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The filter string to specify the events to be deleted. Empty
     * string filter is not allowed. This filter can also be used with
     * ListUserEvents API to list events that will be deleted. The eligible fields
     * for filtering are:
     * * eventType - UserEvent.eventType field of type string.
     * * eventTime - in ISO 8601 "zulu" format.
     * * visitorId - field of type string. Specifying this will delete all events
     * associated with a visitor.
     * * userId - field of type string. Specifying this will delete all events
     * associated with a user.
     * Example 1: Deleting all events in a time range.
     * `eventTime > "2012-04-23T18:25:43.511Z" eventTime <
     * "2012-04-23T18:30:43.511Z"`
     * Example 2: Deleting specific eventType in time range.
     * `eventTime > "2012-04-23T18:25:43.511Z" eventType = "detail-page-view"`
     * Example 3: Deleting all events for a specific visitor
     * `visitorId = visitor1024`
     * The filtering fields are assumed to have an implicit AND.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Required. The filter string to specify the events to be deleted. Empty
     * string filter is not allowed. This filter can also be used with
     * ListUserEvents API to list events that will be deleted. The eligible fields
     * for filtering are:
     * * eventType - UserEvent.eventType field of type string.
     * * eventTime - in ISO 8601 "zulu" format.
     * * visitorId - field of type string. Specifying this will delete all events
     * associated with a visitor.
     * * userId - field of type string. Specifying this will delete all events
     * associated with a user.
     * Example 1: Deleting all events in a time range.
     * `eventTime > "2012-04-23T18:25:43.511Z" eventTime <
     * "2012-04-23T18:30:43.511Z"`
     * Example 2: Deleting specific eventType in time range.
     * `eventTime > "2012-04-23T18:25:43.511Z" eventType = "detail-page-view"`
     * Example 3: Deleting all events for a specific visitor
     * `visitorId = visitor1024`
     * The filtering fields are assumed to have an implicit AND.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. The default value is false. Override this flag to true to
     * actually perform the purge. If the field is not set to true, a sampling of
     * events to be deleted will be returned.
     *
     * Generated from protobuf field <code>bool force = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Optional. The default value is false. Override this flag to true to
     * actually perform the purge. If the field is not set to true, a sampling of
     * events to be deleted will be returned.
     *
     * Generated from protobuf field <code>bool force = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

