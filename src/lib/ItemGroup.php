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

class ItemGroup
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
     * Operation getItemGroupFeed
     *
     * @param  string $x_ebay_c_marketplace_id The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: &amp;nbsp;&amp;nbsp;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US For a list of supported sites see, API Restrictions. (required)
     * @param  string $feed_scope Specifies the type of file to return. Valid Values: NEWLY_LISTED - Returns the Item Group feed file containing the item group variation information for items in the daily Item feed file that were associated with an item group. The items in this type of Item feed file are items that were listed on the day specified by the date parameter in the category specified by the category_id parameter. /item_group?feed_scope&#x3D;NEWLY_LISTED&amp;amp;category_id&#x3D;15032&amp;amp;date&#x3D;20170925 ALL_ACTIVE - Returns the weekly Item Group Bootstrap file containing the item group variation information for items in the weekly Item Bootstrap feed file that were associated with an item group. The items are Good &#x27;Til Cancelled items in the category specified by the category_id parameter. Note: Bootstrap files are generated every Tuesday and the file is available on Wednesday. However, the exact time the file is available can vary so we recommend you download the Bootstrap file on Thursday. The item groups in the file are for the items that were in the specified category on Sunday. /item_group?feed_scope&#x3D;ALL_ACTIVE&amp;amp;category_id&#x3D;15032 (required)
     * @param  string $category_id An eBay top-level category ID of the items to be returned in the feed file. The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplaces, you can use the Taxonomy API getCategoryTree method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the categoryTreeNodeLevel field. For example: &amp;nbsp;&amp;nbsp;&amp;quot;categoryTreeNodeLevel&amp;quot;: 1 For details see Get Categories for Buy APIs. Restriction: Must be a top-level category (required)
     * @param  string $range This header specifies the range in bytes of the chunks of the gzip file being returned. Format: bytes&#x3D;startpos-endpos For example, the following retrieves the first 10 MBs of the feed file. &amp;nbsp;&amp;nbsp;Range bytes&#x3D;0-10485760 For more information about using this headers, see Retrieving a gzip feed file. Maximum: 100 MB (10MB in the Sandbox) (optional)
     * @param  string $date The date of the daily Item Group feed file (feed_scope&#x3D;NEWLY_LISTED) you want. The date is required only for the daily Item Group feed file. If you specify a date for the Item Group Bootstrap file (feed_scope&#x3D;ALL_ACTIVE), the date is ignored and the latest file is returned. The date the Item Group Bootstrap feed file was generated is returned in the Last-Modified response header. The Item Group feed files are generated every day and there are 14 daily files available. There is a 48 hour latency when generating the files. This means on July 10, the latest feed file you can download is July 8. Note: The generated files are stored using MST (US Mountain Standard Time), which is -7 hours UTC time. Format: yyyyMMdd Requirement: Requirements: Required only when feed_scope&#x3D;NEWLY_LISTED Must be within 3-14 days in the past (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\ItemGroupResponse
     */
    public function getItemGroupFeed($x_ebay_c_marketplace_id, $feed_scope, $category_id, $range = null, $date = null)
    {
        list($response) = $this->getItemGroupFeedWithHttpInfo($x_ebay_c_marketplace_id, $feed_scope, $category_id, $range, $date);
        return $response;
    }

    /**
     * Operation getItemGroupFeedWithHttpInfo
     *
     * @param  string $x_ebay_c_marketplace_id The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: &amp;nbsp;&amp;nbsp;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US For a list of supported sites see, API Restrictions. (required)
     * @param  string $feed_scope Specifies the type of file to return. Valid Values: NEWLY_LISTED - Returns the Item Group feed file containing the item group variation information for items in the daily Item feed file that were associated with an item group. The items in this type of Item feed file are items that were listed on the day specified by the date parameter in the category specified by the category_id parameter. /item_group?feed_scope&#x3D;NEWLY_LISTED&amp;amp;category_id&#x3D;15032&amp;amp;date&#x3D;20170925 ALL_ACTIVE - Returns the weekly Item Group Bootstrap file containing the item group variation information for items in the weekly Item Bootstrap feed file that were associated with an item group. The items are Good &#x27;Til Cancelled items in the category specified by the category_id parameter. Note: Bootstrap files are generated every Tuesday and the file is available on Wednesday. However, the exact time the file is available can vary so we recommend you download the Bootstrap file on Thursday. The item groups in the file are for the items that were in the specified category on Sunday. /item_group?feed_scope&#x3D;ALL_ACTIVE&amp;amp;category_id&#x3D;15032 (required)
     * @param  string $category_id An eBay top-level category ID of the items to be returned in the feed file. The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplaces, you can use the Taxonomy API getCategoryTree method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the categoryTreeNodeLevel field. For example: &amp;nbsp;&amp;nbsp;&amp;quot;categoryTreeNodeLevel&amp;quot;: 1 For details see Get Categories for Buy APIs. Restriction: Must be a top-level category (required)
     * @param  string $range This header specifies the range in bytes of the chunks of the gzip file being returned. Format: bytes&#x3D;startpos-endpos For example, the following retrieves the first 10 MBs of the feed file. &amp;nbsp;&amp;nbsp;Range bytes&#x3D;0-10485760 For more information about using this headers, see Retrieving a gzip feed file. Maximum: 100 MB (10MB in the Sandbox) (optional)
     * @param  string $date The date of the daily Item Group feed file (feed_scope&#x3D;NEWLY_LISTED) you want. The date is required only for the daily Item Group feed file. If you specify a date for the Item Group Bootstrap file (feed_scope&#x3D;ALL_ACTIVE), the date is ignored and the latest file is returned. The date the Item Group Bootstrap feed file was generated is returned in the Last-Modified response header. The Item Group feed files are generated every day and there are 14 daily files available. There is a 48 hour latency when generating the files. This means on July 10, the latest feed file you can download is July 8. Note: The generated files are stored using MST (US Mountain Standard Time), which is -7 hours UTC time. Format: yyyyMMdd Requirement: Requirements: Required only when feed_scope&#x3D;NEWLY_LISTED Must be within 3-14 days in the past (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\ItemGroupResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getItemGroupFeedWithHttpInfo($x_ebay_c_marketplace_id, $feed_scope, $category_id, $range = null, $date = null)
    {
        $returnType = '\Swagger\Client\Model\ItemGroupResponse';
        $request = $this->getItemGroupFeedRequest($x_ebay_c_marketplace_id, $feed_scope, $category_id, $range, $date);

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
                        '\Swagger\Client\Model\ItemGroupResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 206:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ItemGroupResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getItemGroupFeedAsync
     *
     * 
     *
     * @param  string $x_ebay_c_marketplace_id The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: &amp;nbsp;&amp;nbsp;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US For a list of supported sites see, API Restrictions. (required)
     * @param  string $feed_scope Specifies the type of file to return. Valid Values: NEWLY_LISTED - Returns the Item Group feed file containing the item group variation information for items in the daily Item feed file that were associated with an item group. The items in this type of Item feed file are items that were listed on the day specified by the date parameter in the category specified by the category_id parameter. /item_group?feed_scope&#x3D;NEWLY_LISTED&amp;amp;category_id&#x3D;15032&amp;amp;date&#x3D;20170925 ALL_ACTIVE - Returns the weekly Item Group Bootstrap file containing the item group variation information for items in the weekly Item Bootstrap feed file that were associated with an item group. The items are Good &#x27;Til Cancelled items in the category specified by the category_id parameter. Note: Bootstrap files are generated every Tuesday and the file is available on Wednesday. However, the exact time the file is available can vary so we recommend you download the Bootstrap file on Thursday. The item groups in the file are for the items that were in the specified category on Sunday. /item_group?feed_scope&#x3D;ALL_ACTIVE&amp;amp;category_id&#x3D;15032 (required)
     * @param  string $category_id An eBay top-level category ID of the items to be returned in the feed file. The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplaces, you can use the Taxonomy API getCategoryTree method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the categoryTreeNodeLevel field. For example: &amp;nbsp;&amp;nbsp;&amp;quot;categoryTreeNodeLevel&amp;quot;: 1 For details see Get Categories for Buy APIs. Restriction: Must be a top-level category (required)
     * @param  string $range This header specifies the range in bytes of the chunks of the gzip file being returned. Format: bytes&#x3D;startpos-endpos For example, the following retrieves the first 10 MBs of the feed file. &amp;nbsp;&amp;nbsp;Range bytes&#x3D;0-10485760 For more information about using this headers, see Retrieving a gzip feed file. Maximum: 100 MB (10MB in the Sandbox) (optional)
     * @param  string $date The date of the daily Item Group feed file (feed_scope&#x3D;NEWLY_LISTED) you want. The date is required only for the daily Item Group feed file. If you specify a date for the Item Group Bootstrap file (feed_scope&#x3D;ALL_ACTIVE), the date is ignored and the latest file is returned. The date the Item Group Bootstrap feed file was generated is returned in the Last-Modified response header. The Item Group feed files are generated every day and there are 14 daily files available. There is a 48 hour latency when generating the files. This means on July 10, the latest feed file you can download is July 8. Note: The generated files are stored using MST (US Mountain Standard Time), which is -7 hours UTC time. Format: yyyyMMdd Requirement: Requirements: Required only when feed_scope&#x3D;NEWLY_LISTED Must be within 3-14 days in the past (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemGroupFeedAsync($x_ebay_c_marketplace_id, $feed_scope, $category_id, $range = null, $date = null)
    {
        return $this->getItemGroupFeedAsyncWithHttpInfo($x_ebay_c_marketplace_id, $feed_scope, $category_id, $range, $date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getItemGroupFeedAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $x_ebay_c_marketplace_id The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: &amp;nbsp;&amp;nbsp;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US For a list of supported sites see, API Restrictions. (required)
     * @param  string $feed_scope Specifies the type of file to return. Valid Values: NEWLY_LISTED - Returns the Item Group feed file containing the item group variation information for items in the daily Item feed file that were associated with an item group. The items in this type of Item feed file are items that were listed on the day specified by the date parameter in the category specified by the category_id parameter. /item_group?feed_scope&#x3D;NEWLY_LISTED&amp;amp;category_id&#x3D;15032&amp;amp;date&#x3D;20170925 ALL_ACTIVE - Returns the weekly Item Group Bootstrap file containing the item group variation information for items in the weekly Item Bootstrap feed file that were associated with an item group. The items are Good &#x27;Til Cancelled items in the category specified by the category_id parameter. Note: Bootstrap files are generated every Tuesday and the file is available on Wednesday. However, the exact time the file is available can vary so we recommend you download the Bootstrap file on Thursday. The item groups in the file are for the items that were in the specified category on Sunday. /item_group?feed_scope&#x3D;ALL_ACTIVE&amp;amp;category_id&#x3D;15032 (required)
     * @param  string $category_id An eBay top-level category ID of the items to be returned in the feed file. The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplaces, you can use the Taxonomy API getCategoryTree method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the categoryTreeNodeLevel field. For example: &amp;nbsp;&amp;nbsp;&amp;quot;categoryTreeNodeLevel&amp;quot;: 1 For details see Get Categories for Buy APIs. Restriction: Must be a top-level category (required)
     * @param  string $range This header specifies the range in bytes of the chunks of the gzip file being returned. Format: bytes&#x3D;startpos-endpos For example, the following retrieves the first 10 MBs of the feed file. &amp;nbsp;&amp;nbsp;Range bytes&#x3D;0-10485760 For more information about using this headers, see Retrieving a gzip feed file. Maximum: 100 MB (10MB in the Sandbox) (optional)
     * @param  string $date The date of the daily Item Group feed file (feed_scope&#x3D;NEWLY_LISTED) you want. The date is required only for the daily Item Group feed file. If you specify a date for the Item Group Bootstrap file (feed_scope&#x3D;ALL_ACTIVE), the date is ignored and the latest file is returned. The date the Item Group Bootstrap feed file was generated is returned in the Last-Modified response header. The Item Group feed files are generated every day and there are 14 daily files available. There is a 48 hour latency when generating the files. This means on July 10, the latest feed file you can download is July 8. Note: The generated files are stored using MST (US Mountain Standard Time), which is -7 hours UTC time. Format: yyyyMMdd Requirement: Requirements: Required only when feed_scope&#x3D;NEWLY_LISTED Must be within 3-14 days in the past (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemGroupFeedAsyncWithHttpInfo($x_ebay_c_marketplace_id, $feed_scope, $category_id, $range = null, $date = null)
    {
        $returnType = '\Swagger\Client\Model\ItemGroupResponse';
        $request = $this->getItemGroupFeedRequest($x_ebay_c_marketplace_id, $feed_scope, $category_id, $range, $date);

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
     * Create request for operation 'getItemGroupFeed'
     *
     * @param  string $x_ebay_c_marketplace_id The ID of the eBay marketplace where the item is hosted. Note: This value is case sensitive. For example: &amp;nbsp;&amp;nbsp;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US For a list of supported sites see, API Restrictions. (required)
     * @param  string $feed_scope Specifies the type of file to return. Valid Values: NEWLY_LISTED - Returns the Item Group feed file containing the item group variation information for items in the daily Item feed file that were associated with an item group. The items in this type of Item feed file are items that were listed on the day specified by the date parameter in the category specified by the category_id parameter. /item_group?feed_scope&#x3D;NEWLY_LISTED&amp;amp;category_id&#x3D;15032&amp;amp;date&#x3D;20170925 ALL_ACTIVE - Returns the weekly Item Group Bootstrap file containing the item group variation information for items in the weekly Item Bootstrap feed file that were associated with an item group. The items are Good &#x27;Til Cancelled items in the category specified by the category_id parameter. Note: Bootstrap files are generated every Tuesday and the file is available on Wednesday. However, the exact time the file is available can vary so we recommend you download the Bootstrap file on Thursday. The item groups in the file are for the items that were in the specified category on Sunday. /item_group?feed_scope&#x3D;ALL_ACTIVE&amp;amp;category_id&#x3D;15032 (required)
     * @param  string $category_id An eBay top-level category ID of the items to be returned in the feed file. The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplaces, you can use the Taxonomy API getCategoryTree method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the categoryTreeNodeLevel field. For example: &amp;nbsp;&amp;nbsp;&amp;quot;categoryTreeNodeLevel&amp;quot;: 1 For details see Get Categories for Buy APIs. Restriction: Must be a top-level category (required)
     * @param  string $range This header specifies the range in bytes of the chunks of the gzip file being returned. Format: bytes&#x3D;startpos-endpos For example, the following retrieves the first 10 MBs of the feed file. &amp;nbsp;&amp;nbsp;Range bytes&#x3D;0-10485760 For more information about using this headers, see Retrieving a gzip feed file. Maximum: 100 MB (10MB in the Sandbox) (optional)
     * @param  string $date The date of the daily Item Group feed file (feed_scope&#x3D;NEWLY_LISTED) you want. The date is required only for the daily Item Group feed file. If you specify a date for the Item Group Bootstrap file (feed_scope&#x3D;ALL_ACTIVE), the date is ignored and the latest file is returned. The date the Item Group Bootstrap feed file was generated is returned in the Last-Modified response header. The Item Group feed files are generated every day and there are 14 daily files available. There is a 48 hour latency when generating the files. This means on July 10, the latest feed file you can download is July 8. Note: The generated files are stored using MST (US Mountain Standard Time), which is -7 hours UTC time. Format: yyyyMMdd Requirement: Requirements: Required only when feed_scope&#x3D;NEWLY_LISTED Must be within 3-14 days in the past (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getItemGroupFeedRequest($x_ebay_c_marketplace_id, $feed_scope, $category_id, $range = null, $date = null)
    {
        // verify the required parameter 'x_ebay_c_marketplace_id' is set
        if ($x_ebay_c_marketplace_id === null || (is_array($x_ebay_c_marketplace_id) && count($x_ebay_c_marketplace_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_ebay_c_marketplace_id when calling getItemGroupFeed'
            );
        }
        // verify the required parameter 'feed_scope' is set
        if ($feed_scope === null || (is_array($feed_scope) && count($feed_scope) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $feed_scope when calling getItemGroupFeed'
            );
        }
        // verify the required parameter 'category_id' is set
        if ($category_id === null || (is_array($category_id) && count($category_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $category_id when calling getItemGroupFeed'
            );
        }

        $resourcePath = '/item_group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($feed_scope !== null) {
            $queryParams['feed_scope'] = ObjectSerializer::toQueryValue($feed_scope);
        }
        // query params
        if ($category_id !== null) {
            $queryParams['category_id'] = ObjectSerializer::toQueryValue($category_id);
        }
        // query params
        if ($date !== null) {
            $queryParams['date'] = ObjectSerializer::toQueryValue($date);
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
