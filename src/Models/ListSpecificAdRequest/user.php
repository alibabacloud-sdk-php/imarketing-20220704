<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ListSpecificAdRequest;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description uid
     *
     * @example 76403197902848
     *
     * @var string
     */
    public $id;

    /**
     * @description uidtype
     *
     * @example ALIPAY_OPEN_ID
     *
     * @var string
     */
    public $usertype;
    protected $_name = [
        'id'       => 'Id',
        'usertype' => 'Usertype',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->usertype) {
            $res['Usertype'] = $this->usertype;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Usertype'])) {
            $model->usertype = $map['Usertype'];
        }

        return $model;
    }
}
