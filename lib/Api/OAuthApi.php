<?php
/**
 * OAuthApi
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2022_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: 2022-10
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\v2022_10\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use criteo\api\marketingsolutions\v2022_10\ApiException;
use criteo\api\marketingsolutions\v2022_10\Configuration;
use criteo\api\marketingsolutions\v2022_10\HeaderSelector;
use criteo\api\marketingsolutions\v2022_10\ObjectSerializer;

/**
 * OAuthApi Class Doc Comment
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2022_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OAuthApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getToken' => [
            'application/x-www-form-urlencoded',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getToken
     *
     * Creates a token based either on supplied client credentials or on single use authorization code
     *
     * @param  string $grant_type grant_type (required)
     * @param  string $client_id client_id (required)
     * @param  string $client_secret client_secret (required)
     * @param  string $redirect_uri redirect_uri (optional)
     * @param  string $code code (optional)
     * @param  string $refresh_token refresh_token (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getToken'] to see the possible values for this operation
     *
     * @throws \criteo\api\marketingsolutions\v2022_10\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \criteo\api\marketingsolutions\v2022_10\Model\AccessTokenModel|\criteo\api\marketingsolutions\v2022_10\Model\OAuthErrorModel|\criteo\api\marketingsolutions\v2022_10\Model\OAuthErrorModel
     */
    public function getToken($grant_type, $client_id, $client_secret, $redirect_uri = null, $code = null, $refresh_token = null, string $contentType = self::contentTypes['getToken'][0])
    {
        list($response) = $this->getTokenWithHttpInfo($grant_type, $client_id, $client_secret, $redirect_uri, $code, $refresh_token, $contentType);
        return $response;
    }

    /**
     * Operation getTokenWithHttpInfo
     *
     * Creates a token based either on supplied client credentials or on single use authorization code
     *
     * @param  string $grant_type (required)
     * @param  string $client_id (required)
     * @param  string $client_secret (required)
     * @param  string $redirect_uri (optional)
     * @param  string $code (optional)
     * @param  string $refresh_token (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getToken'] to see the possible values for this operation
     *
     * @throws \criteo\api\marketingsolutions\v2022_10\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \criteo\api\marketingsolutions\v2022_10\Model\AccessTokenModel|\criteo\api\marketingsolutions\v2022_10\Model\OAuthErrorModel|\criteo\api\marketingsolutions\v2022_10\Model\OAuthErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTokenWithHttpInfo($grant_type, $client_id, $client_secret, $redirect_uri = null, $code = null, $refresh_token = null, string $contentType = self::contentTypes['getToken'][0])
    {
        $request = $this->getTokenRequest($grant_type, $client_id, $client_secret, $redirect_uri, $code, $refresh_token, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\criteo\api\marketingsolutions\v2022_10\Model\AccessTokenModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\criteo\api\marketingsolutions\v2022_10\Model\AccessTokenModel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\marketingsolutions\v2022_10\Model\AccessTokenModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\criteo\api\marketingsolutions\v2022_10\Model\OAuthErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\criteo\api\marketingsolutions\v2022_10\Model\OAuthErrorModel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\marketingsolutions\v2022_10\Model\OAuthErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\criteo\api\marketingsolutions\v2022_10\Model\OAuthErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\criteo\api\marketingsolutions\v2022_10\Model\OAuthErrorModel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\marketingsolutions\v2022_10\Model\OAuthErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\criteo\api\marketingsolutions\v2022_10\Model\AccessTokenModel';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\criteo\api\marketingsolutions\v2022_10\Model\AccessTokenModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\criteo\api\marketingsolutions\v2022_10\Model\OAuthErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\criteo\api\marketingsolutions\v2022_10\Model\OAuthErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTokenAsync
     *
     * Creates a token based either on supplied client credentials or on single use authorization code
     *
     * @param  string $grant_type (required)
     * @param  string $client_id (required)
     * @param  string $client_secret (required)
     * @param  string $redirect_uri (optional)
     * @param  string $code (optional)
     * @param  string $refresh_token (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getToken'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokenAsync($grant_type, $client_id, $client_secret, $redirect_uri = null, $code = null, $refresh_token = null, string $contentType = self::contentTypes['getToken'][0])
    {
        return $this->getTokenAsyncWithHttpInfo($grant_type, $client_id, $client_secret, $redirect_uri, $code, $refresh_token, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTokenAsyncWithHttpInfo
     *
     * Creates a token based either on supplied client credentials or on single use authorization code
     *
     * @param  string $grant_type (required)
     * @param  string $client_id (required)
     * @param  string $client_secret (required)
     * @param  string $redirect_uri (optional)
     * @param  string $code (optional)
     * @param  string $refresh_token (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getToken'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokenAsyncWithHttpInfo($grant_type, $client_id, $client_secret, $redirect_uri = null, $code = null, $refresh_token = null, string $contentType = self::contentTypes['getToken'][0])
    {
        $returnType = '\criteo\api\marketingsolutions\v2022_10\Model\AccessTokenModel';
        $request = $this->getTokenRequest($grant_type, $client_id, $client_secret, $redirect_uri, $code, $refresh_token, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getToken'
     *
     * @param  string $grant_type (required)
     * @param  string $client_id (required)
     * @param  string $client_secret (required)
     * @param  string $redirect_uri (optional)
     * @param  string $code (optional)
     * @param  string $refresh_token (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getToken'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTokenRequest($grant_type, $client_id, $client_secret, $redirect_uri = null, $code = null, $refresh_token = null, string $contentType = self::contentTypes['getToken'][0])
    {

        // verify the required parameter 'grant_type' is set
        if ($grant_type === null || (is_array($grant_type) && count($grant_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $grant_type when calling getToken'
            );
        }

        // verify the required parameter 'client_id' is set
        if ($client_id === null || (is_array($client_id) && count($client_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_id when calling getToken'
            );
        }

        // verify the required parameter 'client_secret' is set
        if ($client_secret === null || (is_array($client_secret) && count($client_secret) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_secret when calling getToken'
            );
        }





        $resourcePath = '/oauth2/token';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // form params
        if ($grant_type !== null) {
            $formParams['grant_type'] = ObjectSerializer::toFormValue($grant_type);
        }
        // form params
        if ($client_id !== null) {
            $formParams['client_id'] = ObjectSerializer::toFormValue($client_id);
        }
        // form params
        if ($client_secret !== null) {
            $formParams['client_secret'] = ObjectSerializer::toFormValue($client_secret);
        }
        // form params
        if ($redirect_uri !== null) {
            $formParams['redirect_uri'] = ObjectSerializer::toFormValue($redirect_uri);
        }
        // form params
        if ($code !== null) {
            $formParams['code'] = ObjectSerializer::toFormValue($code);
        }
        // form params
        if ($refresh_token !== null) {
            $formParams['refresh_token'] = ObjectSerializer::toFormValue($refresh_token);
        }

        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', 'application/json', 'text/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
