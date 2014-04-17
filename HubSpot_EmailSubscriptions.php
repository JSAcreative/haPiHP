<?php
/**
* Copyright 2013 HubSpot, Inc.
*
*   Licensed under the Apache License, Version 2.0 (the
* "License"); you may not use this file except in compliance
* with the License.
*   You may obtain a copy of the License at
*
*       http://www.apache.org/licenses/LICENSE-2.0
*
*   Unless required by applicable law or agreed to in writing,
* software distributed under the License is distributed on an
* "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND,
* either express or implied.  See the License for the specific
* language governing permissions and limitations under the
* License.
*/
//require_once('class.baseclient.php');

class HubSpot_EmailSubscriptions extends HubSpot_BaseClient{
	//Client for HubSpot Contacts API

	    //Define required client variables
	protected $API_PATH = 'email';
	protected $API_VERSION = 'v1';


    /**
	* Get all Emails
	*
	*
	* @return JSON objects for all Emails in portal
	*
	* @throws HubSpot_Exception
    **/
    public function get_all_emails(){
    	$endpoint = 'public/subscriptions';
    	try{
			
    		return json_decode($this->execute_get_request($this->get_request_url($endpoint,NULL)));
    	}
    	catch(HubSpot_Exception $e){
    		throw new HubSpot_Exception('Unable to get emails: '.$e);
    	}
    }


}

?>
