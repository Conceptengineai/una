<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Call;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string accountSid
 * @property integer callCount
 * @property integer callFeedbackCount
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 * @property \DateTime endDate
 * @property boolean includeSubaccounts
 * @property string issues
 * @property string qualityScoreAverage
 * @property string qualityScoreMedian
 * @property string qualityScoreStandardDeviation
 * @property string sid
 * @property \DateTime startDate
 * @property string status
 */
class FeedbackSummaryInstance extends InstanceResource {
    /**
     * Initialize the FeedbackSummaryInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid The unique id of the Account responsible for
     *                           creating this Call
     * @param string $sid The sid
     * @return \Twilio\Rest\Api\V2010\Account\Call\FeedbackSummaryInstance 
     */
    public function __construct(Version $version, array $payload, $accountSid, $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'callCount' => Values::array_get($payload, 'call_count'),
            'callFeedbackCount' => Values::array_get($payload, 'call_feedback_count'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'endDate' => Deserialize::dateTime(Values::array_get($payload, 'end_date')),
            'includeSubaccounts' => Values::array_get($payload, 'include_subaccounts'),
            'issues' => Values::array_get($payload, 'issues'),
            'qualityScoreAverage' => Values::array_get($payload, 'quality_score_average'),
            'qualityScoreMedian' => Values::array_get($payload, 'quality_score_median'),
            'qualityScoreStandardDeviation' => Values::array_get($payload, 'quality_score_standard_deviation'),
            'sid' => Values::array_get($payload, 'sid'),
            'startDate' => Deserialize::dateTime(Values::array_get($payload, 'start_date')),
            'status' => Values::array_get($payload, 'status'),
        );

        $this->solution = array('accountSid' => $accountSid, 'sid' => $sid ?: $this->properties['sid'], );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return \Twilio\Rest\Api\V2010\Account\Call\FeedbackSummaryContext Context
     *                                                                    for this
     *                                                                    FeedbackSummaryInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new FeedbackSummaryContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a FeedbackSummaryInstance
     * 
     * @return FeedbackSummaryInstance Fetched FeedbackSummaryInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Deletes the FeedbackSummaryInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete() {
        return $this->proxy()->delete();
    }

    /**
     * Magic getter to access properties
     * 
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Api.V2010.FeedbackSummaryInstance ' . implode(' ', $context) . ']';
    }
}