<?php
/**
 * @author    : JIHAD SINNAOUR
 * @package   : Ebapi
 * @version   : 0.0.1
 * @copyright : (c) 2021 Jihad Sinnaour <mail@jihadsinnaour.com>
 * @link      : https://jakiboy.github.io/ebapi/
 * @license   : MIT
 *
 * This file if a part of Ebapi Lib
 * Based on Swagger API
 */

namespace Ebapi\lib;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Ebapi\exceptions\ApiException;
use Ebapi\Configuration;
use Ebapi\HeaderSelector;
use Ebapi\ObjectSerializer;

class ItemSnapshot
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getItemSnapshotFeed
     *
     * @param  string $x_ebay_c_marketplace_id The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: &amp;nbsp;&amp;nbsp;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US For a list of supported sites see, API Restrictions. (required)
     * @param  string $range This header specifies the range in bytes of the chunks of the gzip file being returned. Format: bytes&#x3D;startpos-endpos For example, the following retrieves the first 10 MBs of the feed file. &amp;nbsp;&amp;nbsp;Range bytes&#x3D;0-10485760 For more information about using this headers, see Retrieving a gzip feed file. Maximum: 100 MB (10MB in the Sandbox) (required)
     * @param  string $category_id An eBay top-level category ID of the items to be returned in the feed file. The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplace, you can use the Taxonomy API getCategoryTree method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the categoryTreeNodeLevel field. For example: &amp;nbsp;&amp;nbsp;&amp;quot;categoryTreeNodeLevel&amp;quot;: 1 For details see Get Categories for Buy APIs. Restriction: Must be a top-level category (required)
     * @param  string $snapshot_date The date and hour of the snapshot feed file you want. Each file contains the items that changed within the hour in the specified category. So, the 9AM file contains the items that changed between 9AM and 9:59AM on the day specified. It takes 2 hours to generate a snapshot file, which means to get the file for 9AM the earliest you could submit the call is at 11AM. There are 7 days of Hourly Snapshot feed files available. Note: The Feed API uses GMT, so you must convert your local time to GMT. For example, if you lived in California and wanted the September 15th 7pm file, you would submit the following call: item_snapshot?category_id&#x3D;625&amp;amp;snapshot_date&#x3D;2017-09-16T02:00:00.000Z Format: UTC format (yyyy-MM-ddThh:00:00.000Z) Files are generated on the hour, so minutes and seconds are always zeros. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\ItemSnapshotResponse
     */
    public function getItemSnapshotFeed($x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date)
    {
        list($response) = $this->getItemSnapshotFeedWithHttpInfo($x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date);
        return $response;
    }

    /**
     * Operation getItemSnapshotFeedWithHttpInfo
     *
     * @param  string $x_ebay_c_marketplace_id The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: &amp;nbsp;&amp;nbsp;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US For a list of supported sites see, API Restrictions. (required)
     * @param  string $range This header specifies the range in bytes of the chunks of the gzip file being returned. Format: bytes&#x3D;startpos-endpos For example, the following retrieves the first 10 MBs of the feed file. &amp;nbsp;&amp;nbsp;Range bytes&#x3D;0-10485760 For more information about using this headers, see Retrieving a gzip feed file. Maximum: 100 MB (10MB in the Sandbox) (required)
     * @param  string $category_id An eBay top-level category ID of the items to be returned in the feed file. The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplace, you can use the Taxonomy API getCategoryTree method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the categoryTreeNodeLevel field. For example: &amp;nbsp;&amp;nbsp;&amp;quot;categoryTreeNodeLevel&amp;quot;: 1 For details see Get Categories for Buy APIs. Restriction: Must be a top-level category (required)
     * @param  string $snapshot_date The date and hour of the snapshot feed file you want. Each file contains the items that changed within the hour in the specified category. So, the 9AM file contains the items that changed between 9AM and 9:59AM on the day specified. It takes 2 hours to generate a snapshot file, which means to get the file for 9AM the earliest you could submit the call is at 11AM. There are 7 days of Hourly Snapshot feed files available. Note: The Feed API uses GMT, so you must convert your local time to GMT. For example, if you lived in California and wanted the September 15th 7pm file, you would submit the following call: item_snapshot?category_id&#x3D;625&amp;amp;snapshot_date&#x3D;2017-09-16T02:00:00.000Z Format: UTC format (yyyy-MM-ddThh:00:00.000Z) Files are generated on the hour, so minutes and seconds are always zeros. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\ItemSnapshotResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getItemSnapshotFeedWithHttpInfo($x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date)
    {
        $returnType = '\Swagger\Client\Model\ItemSnapshotResponse';
        $request = $this->getItemSnapshotFeedRequest($x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\Swagger\Client\Model\ItemSnapshotResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 206:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ItemSnapshotResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getItemSnapshotFeedAsync
     *
     * 
     *
     * @param  string $x_ebay_c_marketplace_id The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: &amp;nbsp;&amp;nbsp;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US For a list of supported sites see, API Restrictions. (required)
     * @param  string $range This header specifies the range in bytes of the chunks of the gzip file being returned. Format: bytes&#x3D;startpos-endpos For example, the following retrieves the first 10 MBs of the feed file. &amp;nbsp;&amp;nbsp;Range bytes&#x3D;0-10485760 For more information about using this headers, see Retrieving a gzip feed file. Maximum: 100 MB (10MB in the Sandbox) (required)
     * @param  string $category_id An eBay top-level category ID of the items to be returned in the feed file. The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplace, you can use the Taxonomy API getCategoryTree method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the categoryTreeNodeLevel field. For example: &amp;nbsp;&amp;nbsp;&amp;quot;categoryTreeNodeLevel&amp;quot;: 1 For details see Get Categories for Buy APIs. Restriction: Must be a top-level category (required)
     * @param  string $snapshot_date The date and hour of the snapshot feed file you want. Each file contains the items that changed within the hour in the specified category. So, the 9AM file contains the items that changed between 9AM and 9:59AM on the day specified. It takes 2 hours to generate a snapshot file, which means to get the file for 9AM the earliest you could submit the call is at 11AM. There are 7 days of Hourly Snapshot feed files available. Note: The Feed API uses GMT, so you must convert your local time to GMT. For example, if you lived in California and wanted the September 15th 7pm file, you would submit the following call: item_snapshot?category_id&#x3D;625&amp;amp;snapshot_date&#x3D;2017-09-16T02:00:00.000Z Format: UTC format (yyyy-MM-ddThh:00:00.000Z) Files are generated on the hour, so minutes and seconds are always zeros. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemSnapshotFeedAsync($x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date)
    {
        return $this->getItemSnapshotFeedAsyncWithHttpInfo($x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getItemSnapshotFeedAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $x_ebay_c_marketplace_id The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: &amp;nbsp;&amp;nbsp;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US For a list of supported sites see, API Restrictions. (required)
     * @param  string $range This header specifies the range in bytes of the chunks of the gzip file being returned. Format: bytes&#x3D;startpos-endpos For example, the following retrieves the first 10 MBs of the feed file. &amp;nbsp;&amp;nbsp;Range bytes&#x3D;0-10485760 For more information about using this headers, see Retrieving a gzip feed file. Maximum: 100 MB (10MB in the Sandbox) (required)
     * @param  string $category_id An eBay top-level category ID of the items to be returned in the feed file. The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplace, you can use the Taxonomy API getCategoryTree method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the categoryTreeNodeLevel field. For example: &amp;nbsp;&amp;nbsp;&amp;quot;categoryTreeNodeLevel&amp;quot;: 1 For details see Get Categories for Buy APIs. Restriction: Must be a top-level category (required)
     * @param  string $snapshot_date The date and hour of the snapshot feed file you want. Each file contains the items that changed within the hour in the specified category. So, the 9AM file contains the items that changed between 9AM and 9:59AM on the day specified. It takes 2 hours to generate a snapshot file, which means to get the file for 9AM the earliest you could submit the call is at 11AM. There are 7 days of Hourly Snapshot feed files available. Note: The Feed API uses GMT, so you must convert your local time to GMT. For example, if you lived in California and wanted the September 15th 7pm file, you would submit the following call: item_snapshot?category_id&#x3D;625&amp;amp;snapshot_date&#x3D;2017-09-16T02:00:00.000Z Format: UTC format (yyyy-MM-ddThh:00:00.000Z) Files are generated on the hour, so minutes and seconds are always zeros. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemSnapshotFeedAsyncWithHttpInfo($x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date)
    {
        $returnType = '\Swagger\Client\Model\ItemSnapshotResponse';
        $request = $this->getItemSnapshotFeedRequest($x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getItemSnapshotFeed'
     *
     * @param  string $x_ebay_c_marketplace_id The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: &amp;nbsp;&amp;nbsp;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US For a list of supported sites see, API Restrictions. (required)
     * @param  string $range This header specifies the range in bytes of the chunks of the gzip file being returned. Format: bytes&#x3D;startpos-endpos For example, the following retrieves the first 10 MBs of the feed file. &amp;nbsp;&amp;nbsp;Range bytes&#x3D;0-10485760 For more information about using this headers, see Retrieving a gzip feed file. Maximum: 100 MB (10MB in the Sandbox) (required)
     * @param  string $category_id An eBay top-level category ID of the items to be returned in the feed file. The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplace, you can use the Taxonomy API getCategoryTree method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the categoryTreeNodeLevel field. For example: &amp;nbsp;&amp;nbsp;&amp;quot;categoryTreeNodeLevel&amp;quot;: 1 For details see Get Categories for Buy APIs. Restriction: Must be a top-level category (required)
     * @param  string $snapshot_date The date and hour of the snapshot feed file you want. Each file contains the items that changed within the hour in the specified category. So, the 9AM file contains the items that changed between 9AM and 9:59AM on the day specified. It takes 2 hours to generate a snapshot file, which means to get the file for 9AM the earliest you could submit the call is at 11AM. There are 7 days of Hourly Snapshot feed files available. Note: The Feed API uses GMT, so you must convert your local time to GMT. For example, if you lived in California and wanted the September 15th 7pm file, you would submit the following call: item_snapshot?category_id&#x3D;625&amp;amp;snapshot_date&#x3D;2017-09-16T02:00:00.000Z Format: UTC format (yyyy-MM-ddThh:00:00.000Z) Files are generated on the hour, so minutes and seconds are always zeros. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getItemSnapshotFeedRequest($x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date)
    {
        // verify the required parameter 'x_ebay_c_marketplace_id' is set
        if ($x_ebay_c_marketplace_id === null || (is_array($x_ebay_c_marketplace_id) && count($x_ebay_c_marketplace_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_ebay_c_marketplace_id when calling getItemSnapshotFeed'
            );
        }
        // verify the required parameter 'range' is set
        if ($range === null || (is_array($range) && count($range) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $range when calling getItemSnapshotFeed'
            );
        }
        // verify the required parameter 'category_id' is set
        if ($category_id === null || (is_array($category_id) && count($category_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $category_id when calling getItemSnapshotFeed'
            );
        }
        // verify the required parameter 'snapshot_date' is set
        if ($snapshot_date === null || (is_array($snapshot_date) && count($snapshot_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $snapshot_date when calling getItemSnapshotFeed'
            );
        }

        $resourcePath = '/item_snapshot';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($category_id !== null) {
            $queryParams['category_id'] = ObjectSerializer::toQueryValue($category_id);
        }
        // query params
        if ($snapshot_date !== null) {
            $queryParams['snapshot_date'] = ObjectSerializer::toQueryValue($snapshot_date);
        }
        // header params
        if ($x_ebay_c_marketplace_id !== null) {
            $headerParams['X-EBAY-C-MARKETPLACE-ID'] = ObjectSerializer::toHeaderValue($x_ebay_c_marketplace_id);
        }
        // header params
        if ($range !== null) {
            $headerParams['Range'] = ObjectSerializer::toHeaderValue($range);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/tab-separated-values']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/tab-separated-values'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
