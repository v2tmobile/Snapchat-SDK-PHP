<?php

namespace Snapchat\API\Request;

use Snapchat\Snapchat;

class ClearConversationRequest extends BaseRequest {

    /**
     * @param $snapchat Snapchat
     * @param $conversationId string Conversation ID
     */
    public function __construct($snapchat, $conversationId){

        parent::__construct($snapchat);
        $this->addParam("conversation_id", $conversationId);

    }

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/loq/clear_conversation";
    }

    public function getResponseObject(){
        return null;
    }

    public function parseResponse(){
        return false;
    }

}