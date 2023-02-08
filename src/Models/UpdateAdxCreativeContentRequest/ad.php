<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\UpdateAdxCreativeContentRequest;

use AlibabaCloud\SDK\Imarketing\V20220704\Models\UpdateAdxCreativeContentRequest\ad\nativead;
use AlibabaCloud\Tea\Model;

class ad extends Model
{
    /**
     * @var string[]
     */
    public $bundle;

    /**
     * @var string[]
     */
    public $clicks;

    /**
     * @var string
     */
    public $crid;

    /**
     * @var string
     */
    public $enddate;

    /**
     * @var string[]
     */
    public $imps;

    /**
     * @var int
     */
    public $interacttype;

    /**
     * @var string[]
     */
    public $mediaIdList;

    /**
     * @var nativead[]
     */
    public $nativead;

    /**
     * @var int
     */
    public $op;

    /**
     * @var string
     */
    public $ostype;

    /**
     * @var bool
     */
    public $prereview;

    /**
     * @var string
     */
    public $seat;

    /**
     * @var string
     */
    public $startdate;

    /**
     * @var int
     */
    public $template;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'bundle'       => 'Bundle',
        'clicks'       => 'Clicks',
        'crid'         => 'Crid',
        'enddate'      => 'Enddate',
        'imps'         => 'Imps',
        'interacttype' => 'Interacttype',
        'mediaIdList'  => 'MediaIdList',
        'nativead'     => 'Nativead',
        'op'           => 'Op',
        'ostype'       => 'Ostype',
        'prereview'    => 'Prereview',
        'seat'         => 'Seat',
        'startdate'    => 'Startdate',
        'template'     => 'Template',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bundle) {
            $res['Bundle'] = $this->bundle;
        }
        if (null !== $this->clicks) {
            $res['Clicks'] = $this->clicks;
        }
        if (null !== $this->crid) {
            $res['Crid'] = $this->crid;
        }
        if (null !== $this->enddate) {
            $res['Enddate'] = $this->enddate;
        }
        if (null !== $this->imps) {
            $res['Imps'] = $this->imps;
        }
        if (null !== $this->interacttype) {
            $res['Interacttype'] = $this->interacttype;
        }
        if (null !== $this->mediaIdList) {
            $res['MediaIdList'] = $this->mediaIdList;
        }
        if (null !== $this->nativead) {
            $res['Nativead'] = [];
            if (null !== $this->nativead && \is_array($this->nativead)) {
                $n = 0;
                foreach ($this->nativead as $item) {
                    $res['Nativead'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->op) {
            $res['Op'] = $this->op;
        }
        if (null !== $this->ostype) {
            $res['Ostype'] = $this->ostype;
        }
        if (null !== $this->prereview) {
            $res['Prereview'] = $this->prereview;
        }
        if (null !== $this->seat) {
            $res['Seat'] = $this->seat;
        }
        if (null !== $this->startdate) {
            $res['Startdate'] = $this->startdate;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ad
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bundle'])) {
            if (!empty($map['Bundle'])) {
                $model->bundle = $map['Bundle'];
            }
        }
        if (isset($map['Clicks'])) {
            if (!empty($map['Clicks'])) {
                $model->clicks = $map['Clicks'];
            }
        }
        if (isset($map['Crid'])) {
            $model->crid = $map['Crid'];
        }
        if (isset($map['Enddate'])) {
            $model->enddate = $map['Enddate'];
        }
        if (isset($map['Imps'])) {
            if (!empty($map['Imps'])) {
                $model->imps = $map['Imps'];
            }
        }
        if (isset($map['Interacttype'])) {
            $model->interacttype = $map['Interacttype'];
        }
        if (isset($map['MediaIdList'])) {
            if (!empty($map['MediaIdList'])) {
                $model->mediaIdList = $map['MediaIdList'];
            }
        }
        if (isset($map['Nativead'])) {
            if (!empty($map['Nativead'])) {
                $model->nativead = [];
                $n               = 0;
                foreach ($map['Nativead'] as $item) {
                    $model->nativead[$n++] = null !== $item ? nativead::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Op'])) {
            $model->op = $map['Op'];
        }
        if (isset($map['Ostype'])) {
            $model->ostype = $map['Ostype'];
        }
        if (isset($map['Prereview'])) {
            $model->prereview = $map['Prereview'];
        }
        if (isset($map['Seat'])) {
            $model->seat = $map['Seat'];
        }
        if (isset($map['Startdate'])) {
            $model->startdate = $map['Startdate'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
