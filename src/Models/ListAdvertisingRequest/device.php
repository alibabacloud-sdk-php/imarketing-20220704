<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingRequest;

use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingRequest\device\geo;
use AlibabaCloud\Tea\Model;

class device extends Model
{
    /**
     * @var string
     */
    public $androidid;

    /**
     * @var string
     */
    public $androidmd5;

    /**
     * @var string
     */
    public $caid;

    /**
     * @var string
     */
    public $carrier;

    /**
     * @var int
     */
    public $connectiontype;

    /**
     * @var int
     */
    public $devicetype;

    /**
     * @var geo
     */
    public $geo;

    /**
     * @var string
     */
    public $idfa;

    /**
     * @var string
     */
    public $imei;

    /**
     * @var string
     */
    public $imeimd5;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var string
     */
    public $macmd5;

    /**
     * @var string
     */
    public $make;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $oaid;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $osv;

    /**
     * @var string
     */
    public $ua;

    /**
     * @var string
     */
    public $utdid;
    protected $_name = [
        'androidid'      => 'Androidid',
        'androidmd5'     => 'Androidmd5',
        'caid'           => 'Caid',
        'carrier'        => 'Carrier',
        'connectiontype' => 'Connectiontype',
        'devicetype'     => 'Devicetype',
        'geo'            => 'Geo',
        'idfa'           => 'Idfa',
        'imei'           => 'Imei',
        'imeimd5'        => 'Imeimd5',
        'ip'             => 'Ip',
        'language'       => 'Language',
        'mac'            => 'Mac',
        'macmd5'         => 'Macmd5',
        'make'           => 'Make',
        'model'          => 'Model',
        'oaid'           => 'Oaid',
        'os'             => 'Os',
        'osv'            => 'Osv',
        'ua'             => 'Ua',
        'utdid'          => 'Utdid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidid) {
            $res['Androidid'] = $this->androidid;
        }
        if (null !== $this->androidmd5) {
            $res['Androidmd5'] = $this->androidmd5;
        }
        if (null !== $this->caid) {
            $res['Caid'] = $this->caid;
        }
        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }
        if (null !== $this->connectiontype) {
            $res['Connectiontype'] = $this->connectiontype;
        }
        if (null !== $this->devicetype) {
            $res['Devicetype'] = $this->devicetype;
        }
        if (null !== $this->geo) {
            $res['Geo'] = null !== $this->geo ? $this->geo->toMap() : null;
        }
        if (null !== $this->idfa) {
            $res['Idfa'] = $this->idfa;
        }
        if (null !== $this->imei) {
            $res['Imei'] = $this->imei;
        }
        if (null !== $this->imeimd5) {
            $res['Imeimd5'] = $this->imeimd5;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->macmd5) {
            $res['Macmd5'] = $this->macmd5;
        }
        if (null !== $this->make) {
            $res['Make'] = $this->make;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->oaid) {
            $res['Oaid'] = $this->oaid;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->osv) {
            $res['Osv'] = $this->osv;
        }
        if (null !== $this->ua) {
            $res['Ua'] = $this->ua;
        }
        if (null !== $this->utdid) {
            $res['Utdid'] = $this->utdid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return device
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Androidid'])) {
            $model->androidid = $map['Androidid'];
        }
        if (isset($map['Androidmd5'])) {
            $model->androidmd5 = $map['Androidmd5'];
        }
        if (isset($map['Caid'])) {
            $model->caid = $map['Caid'];
        }
        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }
        if (isset($map['Connectiontype'])) {
            $model->connectiontype = $map['Connectiontype'];
        }
        if (isset($map['Devicetype'])) {
            $model->devicetype = $map['Devicetype'];
        }
        if (isset($map['Geo'])) {
            $model->geo = geo::fromMap($map['Geo']);
        }
        if (isset($map['Idfa'])) {
            $model->idfa = $map['Idfa'];
        }
        if (isset($map['Imei'])) {
            $model->imei = $map['Imei'];
        }
        if (isset($map['Imeimd5'])) {
            $model->imeimd5 = $map['Imeimd5'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['Macmd5'])) {
            $model->macmd5 = $map['Macmd5'];
        }
        if (isset($map['Make'])) {
            $model->make = $map['Make'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Oaid'])) {
            $model->oaid = $map['Oaid'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['Osv'])) {
            $model->osv = $map['Osv'];
        }
        if (isset($map['Ua'])) {
            $model->ua = $map['Ua'];
        }
        if (isset($map['Utdid'])) {
            $model->utdid = $map['Utdid'];
        }

        return $model;
    }
}
