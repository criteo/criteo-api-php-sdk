<?php
/**
 * AdvertiserApi
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2023_04
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: 2023-04
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\v2023_04\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use criteo\api\marketingsolutions\v2023_04\ApiException;
use criteo\api\marketingsolutions\v2023_04\Configuration;
use criteo\api\marketingsolutions\v2023_04\HeaderSelector;
use criteo\api\marketingsolutions\v2023_04\ObjectSerializer;

/**
 * AdvertiserApi Class Doc Comment
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2023_04
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdvertiserApi
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
        'apiPortfolioGet' => [
            'application/json',
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
     * Operation apiPortfolioGet
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiPortfolioGet'] to see the possible values for this operation
     *
     * @throws \criteo\api\marketingsolutions\v2023_04\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \criteo\api\marketingsolutions\v2023_04\Model\GetPortfolioResponse|\criteo\api\marketingsolutions\v2023_04\Model\GetPortfolioResponse
     */
    public function apiPortfolioGet(string $contentType = self::contentTypes['apiPortfolioGet'][0])
    {
        list($response) = $this->apiPortfolioGetWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation apiPortfolioGetWithHttpInfo
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiPortfolioGet'] to see the possible values for this operation
     *
     * @throws \criteo\api\marketingsolutions\v2023_04\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \criteo\api\marketingsolutions\v2023_04\Model\GetPortfolioResponse|\criteo\api\marketingsolutions\v2023_04\Model\GetPortfolioResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiPortfolioGetWithHttpInfo(string $contentType = self::contentTypes['apiPortfolioGet'][0])
    {
        $request = $this->apiPortfolioGetRequest($contentType);

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
                    if ('\criteo\api\marketingsolutions\v2023_04\Model\GetPortfolioResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\criteo\api\marketingsolutions\v2023_04\Model\GetPortfolioResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\marketingsolutions\v2023_04\Model\GetPortfolioResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\criteo\api\marketingsolutions\v2023_04\Model\GetPortfolioResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\criteo\api\marketingsolutions\v2023_04\Model\GetPortfolioResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\marketingsolutions\v2023_04\Model\GetPortfolioResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\criteo\api\marketingsolutions\v2023_04\Model\GetPortfolioResponse';
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
                        '\criteo\api\marketingsolutions\v2023_04\Model\GetPortfolioResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\criteo\api\marketingsolutions\v2023_04\Model\GetPortfolioResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiPortfolioGetAsync
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiPortfolioGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiPortfolioGetAsync(string $contentType = self::contentTypes['apiPortfolioGet'][0])
    {
        return $this->apiPortfolioGetAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiPortfolioGetAsyncWithHttpInfo
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiPortfolioGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiPortfolioGetAsyncWithHttpInfo(string $contentType = self::contentTypes['apiPortfolioGet'][0])
    {
        $returnType = '\criteo\api\marketingsolutions\v2023_04\Model\GetPortfolioResponse';
        $request = $this->apiPortfolioGetRequest($contentType);

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
     * Create request for operation 'apiPortfolioGet'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiPortfolioGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiPortfolioGetRequest(string $contentType = self::contentTypes['apiPortfolioGet'][0])
    {


        $resourcePath = '/2023-04/advertisers/me';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'text/plain', 'text/json', ],
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
            'GET',
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
