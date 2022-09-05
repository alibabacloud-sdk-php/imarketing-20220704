<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\CreateDeviceRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\CreateDeviceResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\CreateDeviceShrinkRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\DeleteCreativeInfoRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\DeleteCreativeInfoResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetBrandPageRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetBrandPageResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetBusinessIdRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetBusinessIdResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetCreativeInfoRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetCreativeInfoResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetLeadsListPageRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetLeadsListPageResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetMainPartListByUserIdResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetMainPartPageRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetMainPartPageResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetOssUploadSignatureRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetOssUploadSignatureResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetRelatedByCreativeIdRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetRelatedByCreativeIdResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetUserFinishedAdRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetUserFinishedAdResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingShrinkRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\QueryAuditResultRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\QueryAuditResultResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\SendSmsRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\SendSmsResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\SyncInfoRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\SyncInfoResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\UpdateAdxCreativeContentRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\UpdateAdxCreativeContentResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\VerifySmsCodeRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\VerifySmsCodeResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Imarketing extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imarketing', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param CreateDeviceRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDeviceResponse
     */
    public function createDeviceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDeviceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extraMap)) {
            $request->extraMapShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extraMap, 'ExtraMap', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->city)) {
            $body['City'] = $request->city;
        }
        if (!Utils::isUnset($request->deviceModelNumber)) {
            $body['DeviceModelNumber'] = $request->deviceModelNumber;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $body['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->deviceType)) {
            $body['DeviceType'] = $request->deviceType;
        }
        if (!Utils::isUnset($request->district)) {
            $body['District'] = $request->district;
        }
        if (!Utils::isUnset($request->extraMapShrink)) {
            $body['ExtraMap'] = $request->extraMapShrink;
        }
        if (!Utils::isUnset($request->firstScene)) {
            $body['FirstScene'] = $request->firstScene;
        }
        if (!Utils::isUnset($request->floor)) {
            $body['Floor'] = $request->floor;
        }
        if (!Utils::isUnset($request->locationName)) {
            $body['LocationName'] = $request->locationName;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $body['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->outerCode)) {
            $body['OuterCode'] = $request->outerCode;
        }
        if (!Utils::isUnset($request->province)) {
            $body['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->secondScene)) {
            $body['SecondScene'] = $request->secondScene;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDevice',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDeviceRequest $request
     *
     * @return CreateDeviceResponse
     */
    public function createDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCreativeInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteCreativeInfoResponse
     */
    public function deleteCreativeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountNo)) {
            $query['AccountNo'] = $request->accountNo;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->mainId)) {
            $query['MainId'] = $request->mainId;
        }
        if (!Utils::isUnset($request->updateUser)) {
            $query['UpdateUser'] = $request->updateUser;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCreativeInfo',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCreativeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCreativeInfoRequest $request
     *
     * @return DeleteCreativeInfoResponse
     */
    public function deleteCreativeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCreativeInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetBrandPageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetBrandPageResponse
     */
    public function getBrandPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountNo)) {
            $query['AccountNo'] = $request->accountNo;
        }
        if (!Utils::isUnset($request->mainId)) {
            $query['MainId'] = $request->mainId;
        }
        if (!Utils::isUnset($request->mainName)) {
            $query['MainName'] = $request->mainName;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBrandPage',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBrandPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBrandPageRequest $request
     *
     * @return GetBrandPageResponse
     */
    public function getBrandPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBrandPageWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessIdRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetBusinessIdResponse
     */
    public function getBusinessIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessId)) {
            $query['BusinessId'] = $request->businessId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessId',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessIdRequest $request
     *
     * @return GetBusinessIdResponse
     */
    public function getBusinessId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessIdWithOptions($request, $runtime);
    }

    /**
     * @param GetCreativeInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCreativeInfoResponse
     */
    public function getCreativeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountNo)) {
            $query['AccountNo'] = $request->accountNo;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->mainId)) {
            $query['MainId'] = $request->mainId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCreativeInfo',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCreativeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCreativeInfoRequest $request
     *
     * @return GetCreativeInfoResponse
     */
    public function getCreativeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreativeInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetLeadsListPageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetLeadsListPageResponse
     */
    public function getLeadsListPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->componentId)) {
            $query['ComponentId'] = $request->componentId;
        }
        if (!Utils::isUnset($request->contentId)) {
            $query['ContentId'] = $request->contentId;
        }
        if (!Utils::isUnset($request->creativeId)) {
            $query['CreativeId'] = $request->creativeId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->mainId)) {
            $query['MainId'] = $request->mainId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLeadsListPage',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLeadsListPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLeadsListPageRequest $request
     *
     * @return GetLeadsListPageResponse
     */
    public function getLeadsListPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLeadsListPageWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetMainPartListByUserIdResponse
     */
    public function getMainPartListByUserIdWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetMainPartListByUserId',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMainPartListByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetMainPartListByUserIdResponse
     */
    public function getMainPartListByUserId()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMainPartListByUserIdWithOptions($runtime);
    }

    /**
     * @param GetMainPartPageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetMainPartPageResponse
     */
    public function getMainPartPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mainId)) {
            $query['MainId'] = $request->mainId;
        }
        if (!Utils::isUnset($request->mainName)) {
            $query['MainName'] = $request->mainName;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMainPartPage',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMainPartPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMainPartPageRequest $request
     *
     * @return GetMainPartPageResponse
     */
    public function getMainPartPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMainPartPageWithOptions($request, $runtime);
    }

    /**
     * @param GetOssUploadSignatureRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetOssUploadSignatureResponse
     */
    public function getOssUploadSignatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOssUploadSignature',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOssUploadSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOssUploadSignatureRequest $request
     *
     * @return GetOssUploadSignatureResponse
     */
    public function getOssUploadSignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssUploadSignatureWithOptions($request, $runtime);
    }

    /**
     * @param GetRelatedByCreativeIdRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetRelatedByCreativeIdResponse
     */
    public function getRelatedByCreativeIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRelatedByCreativeId',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRelatedByCreativeIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRelatedByCreativeIdRequest $request
     *
     * @return GetRelatedByCreativeIdResponse
     */
    public function getRelatedByCreativeId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRelatedByCreativeIdWithOptions($request, $runtime);
    }

    /**
     * @param GetUserFinishedAdRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetUserFinishedAdResponse
     */
    public function getUserFinishedAdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserFinishedAd',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserFinishedAdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserFinishedAdRequest $request
     *
     * @return GetUserFinishedAdResponse
     */
    public function getUserFinishedAd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserFinishedAdWithOptions($request, $runtime);
    }

    /**
     * @param ListAdvertisingRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ListAdvertisingResponse
     */
    public function listAdvertisingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAdvertisingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->app), 'App', 'json');
        }
        if (!Utils::isUnset($tmpReq->device)) {
            $request->deviceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->device), 'Device', 'json');
        }
        if (!Utils::isUnset($tmpReq->ext)) {
            $request->extShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'Ext', 'json');
        }
        if (!Utils::isUnset($tmpReq->imp)) {
            $request->impShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imp, 'Imp', 'json');
        }
        if (!Utils::isUnset($tmpReq->user)) {
            $request->userShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->user), 'User', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAdvertising',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAdvertisingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAdvertisingRequest $request
     *
     * @return ListAdvertisingResponse
     */
    public function listAdvertising($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAdvertisingWithOptions($request, $runtime);
    }

    /**
     * @param QueryAuditResultRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryAuditResultResponse
     */
    public function queryAuditResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dspId)) {
            $query['DspId'] = $request->dspId;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAuditResult',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAuditResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAuditResultRequest $request
     *
     * @return QueryAuditResultResponse
     */
    public function queryAuditResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuditResultWithOptions($request, $runtime);
    }

    /**
     * @param SendSmsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return SendSmsResponse
     */
    public function sendSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nowStamp)) {
            $query['NowStamp'] = $request->nowStamp;
        }
        if (!Utils::isUnset($request->phoneNumbers)) {
            $query['PhoneNumbers'] = $request->phoneNumbers;
        }
        if (!Utils::isUnset($request->signKey)) {
            $query['SignKey'] = $request->signKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendSms',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendSmsRequest $request
     *
     * @return SendSmsResponse
     */
    public function sendSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendSmsWithOptions($request, $runtime);
    }

    /**
     * @param SyncInfoRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return SyncInfoResponse
     */
    public function syncInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountNo)) {
            $query['AccountNo'] = $request->accountNo;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->chainValue)) {
            $query['ChainValue'] = $request->chainValue;
        }
        if (!Utils::isUnset($request->componentIdList)) {
            $query['ComponentIdList'] = $request->componentIdList;
        }
        if (!Utils::isUnset($request->createUser)) {
            $query['CreateUser'] = $request->createUser;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->mainId)) {
            $query['MainId'] = $request->mainId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextChainValue)) {
            $query['NextChainValue'] = $request->nextChainValue;
        }
        if (!Utils::isUnset($request->ossFileUrl)) {
            $query['OssFileUrl'] = $request->ossFileUrl;
        }
        if (!Utils::isUnset($request->pageId)) {
            $query['PageId'] = $request->pageId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->updateUser)) {
            $query['UpdateUser'] = $request->updateUser;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->urlType)) {
            $query['UrlType'] = $request->urlType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncInfo',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncInfoRequest $request
     *
     * @return SyncInfoResponse
     */
    public function syncInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAdxCreativeContentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAdxCreativeContentResponse
     */
    public function updateAdxCreativeContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ad)) {
            $query['Ad'] = $request->ad;
        }
        if (!Utils::isUnset($request->dspId)) {
            $query['DspId'] = $request->dspId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAdxCreativeContent',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAdxCreativeContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAdxCreativeContentRequest $request
     *
     * @return UpdateAdxCreativeContentResponse
     */
    public function updateAdxCreativeContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAdxCreativeContentWithOptions($request, $runtime);
    }

    /**
     * @param VerifySmsCodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return VerifySmsCodeResponse
     */
    public function verifySmsCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->nowStamp)) {
            $query['NowStamp'] = $request->nowStamp;
        }
        if (!Utils::isUnset($request->phoneNumbers)) {
            $query['PhoneNumbers'] = $request->phoneNumbers;
        }
        if (!Utils::isUnset($request->signKey)) {
            $query['SignKey'] = $request->signKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifySmsCode',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifySmsCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifySmsCodeRequest $request
     *
     * @return VerifySmsCodeResponse
     */
    public function verifySmsCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifySmsCodeWithOptions($request, $runtime);
    }
}
