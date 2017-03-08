<?php
/**
 * UserProfileApi
 * PHP version 5
 *
 * @category Class
 * @package  AutodeskForge\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AutodeskForge\Client\Api;

use \AutodeskForge\Client\ApiException;

/**
 * UserProfileApi Class Doc Comment
 *
 * @category Class
 * @package  AutodeskForge\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserProfileApi extends AbstractApi
{
    /**
     * Operation getUserProfile
     *
     * Returns the profile information of an authorizing end user.
     *
     * @throws \AutodeskForge\Client\ApiException on non-2xx response
     * @return \AutodeskForge\Client\Model\UserProfile
     */
    public function getUserProfile()
    {
        list($response) = $this->getUserProfileWithHttpInfo();
        return $response;
    }

    /**
     * Operation getUserProfileWithHttpInfo
     *
     * Returns the profile information of an authorizing end user.
     *
     * @throws \AutodeskForge\Client\ApiException on non-2xx response
     * @return array of \AutodeskForge\Client\Model\UserProfile, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserProfileWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/userprofile/v1/users/@me";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\AutodeskForge\Client\Model\UserProfile',
                '/userprofile/v1/users/@me'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\AutodeskForge\Client\Model\UserProfile', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AutodeskForge\Client\Model\UserProfile', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
