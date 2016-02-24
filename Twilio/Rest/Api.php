<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Api\V2010;

/**
 * @property \Twilio\Rest\Api\V2010 v2010
 * @property \Twilio\Rest\Api\V2010\AccountContext account
 * @property \Twilio\Rest\Api\V2010\Account\AddressList addresses
 * @property \Twilio\Rest\Api\V2010\Account\ApplicationList applications
 * @property \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppList authorizedConnectApps
 * @property \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryList availablePhoneNumbers
 * @property \Twilio\Rest\Api\V2010\Account\CallList calls
 * @property \Twilio\Rest\Api\V2010\Account\ConferenceList conferences
 * @property \Twilio\Rest\Api\V2010\Account\ConnectAppList connectApps
 * @property \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberList incomingPhoneNumbers
 * @property \Twilio\Rest\Api\V2010\Account\MessageList messages
 * @property \Twilio\Rest\Api\V2010\Account\NotificationList notifications
 * @property \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdList outgoingCallerIds
 * @property \Twilio\Rest\Api\V2010\Account\QueueList queues
 * @property \Twilio\Rest\Api\V2010\Account\RecordingList recordings
 * @property \Twilio\Rest\Api\V2010\Account\SandboxList sandbox
 * @property \Twilio\Rest\Api\V2010\Account\SipList sip
 * @property \Twilio\Rest\Api\V2010\Account\SmsList sms
 * @property \Twilio\Rest\Api\V2010\Account\TokenList tokens
 * @property \Twilio\Rest\Api\V2010\Account\TranscriptionList transcriptions
 * @property \Twilio\Rest\Api\V2010\Account\UsageList usage
 * @property \Twilio\Rest\Api\V2010\Account\ValidationRequestList validationRequests
 */
class Api extends Domain {
    protected $_v2010 = null;
    protected $_account = null;
    protected $_addresses = null;
    protected $_applications = null;
    protected $_authorizedConnectApps = null;
    protected $_availablePhoneNumbers = null;
    protected $_calls = null;
    protected $_conferences = null;
    protected $_connectApps = null;
    protected $_incomingPhoneNumbers = null;
    protected $_messages = null;
    protected $_notifications = null;
    protected $_outgoingCallerIds = null;
    protected $_queues = null;
    protected $_recordings = null;
    protected $_sandbox = null;
    protected $_sip = null;
    protected $_sms = null;
    protected $_tokens = null;
    protected $_transcriptions = null;
    protected $_usage = null;
    protected $_validationRequests = null;

    /**
     * Construct the Api Domain
     * 
     * @param \Twilio\Rest\Client $client Twilio\Rest\Client to communicate with
     *                                    Twilio
     * @return \Twilio\Rest\Api Domain for Api
     */
    public function __construct(Client $client) {
        parent::__construct($client);
        
        $this->baseUrl = 'https://api.twilio.com';
    }

    /**
     * @return \Twilio\Rest\Api\V2010 Version v2010 of api
     */
    protected function getV2010() {
        if (!$this->_v2010) {
            $this->_v2010 = new V2010($this);
        }
        return $this->_v2010;
    }

    /**
     * Magic getter to lazy load version
     * 
     * @param string $name Version to return
     * @return \Twilio\Version The requested version
     * @throws \Twilio\Exceptions\TwilioException For unknown versions
     */
    public function __get($name) {
        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }
        
        throw new TwilioException('Unknown version ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     * 
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return \Twilio\Rest\InstanceContext The requested resource context
     * @throws \Twilio\Exceptions\TwilioException For unknown resource
     */
    public function __call($name, $arguments) {
        $property = $this->$name;
        if (method_exists($property, 'getContext')) {
            return call_user_func_array(array($property, 'getContext'), $arguments);
        }
        
        throw new TwilioException('Resource does not have a context');
    }

    /**
     * @return \Twilio\Rest\Api\V2010\AccountContext Account provided as the
     *                                               authenticating account
     */
    public function account() {
        return $this->v2010->account;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\AccountList 
     */
    public function accounts() {
        return $this->v2010->accounts();
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\AddressList 
     */
    public function getAddresses() {
        return $this->v2010->account->addresses;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\ApplicationList 
     */
    public function getApplications() {
        return $this->v2010->account->applications;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppList 
     */
    public function getAuthorizedConnectApps() {
        return $this->v2010->account->authorizedConnectApps;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryList 
     */
    public function getAvailablePhoneNumbers() {
        return $this->v2010->account->availablePhoneNumbers;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\CallList 
     */
    public function getCalls() {
        return $this->v2010->account->calls;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\ConferenceList 
     */
    public function getConferences() {
        return $this->v2010->account->conferences;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\ConnectAppList 
     */
    public function getConnectApps() {
        return $this->v2010->account->connectApps;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberList 
     */
    public function getIncomingPhoneNumbers() {
        return $this->v2010->account->incomingPhoneNumbers;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\MessageList 
     */
    public function getMessages() {
        return $this->v2010->account->messages;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\NotificationList 
     */
    public function getNotifications() {
        return $this->v2010->account->notifications;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdList 
     */
    public function getOutgoingCallerIds() {
        return $this->v2010->account->outgoingCallerIds;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\QueueList 
     */
    public function getQueues() {
        return $this->v2010->account->queues;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\RecordingList 
     */
    public function getRecordings() {
        return $this->v2010->account->recordings;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\SandboxList 
     */
    public function getSandbox() {
        return $this->v2010->account->sandbox;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\SipList 
     */
    public function getSip() {
        return $this->v2010->account->sip;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\SmsList 
     */
    public function getSms() {
        return $this->v2010->account->sms;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\TokenList 
     */
    public function getTokens() {
        return $this->v2010->account->tokens;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\TranscriptionList 
     */
    public function getTranscriptions() {
        return $this->v2010->account->transcriptions;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\UsageList 
     */
    public function getUsage() {
        return $this->v2010->account->usage;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\Account\ValidationRequestList 
     */
    public function getValidationRequests() {
        return $this->v2010->account->validationRequests;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Api]';
    }
}