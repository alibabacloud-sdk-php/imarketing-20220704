<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class SendSmsRequest extends Model
{
    /**
     * @var int
     */
    public $nowStamp;

    /**
     * @var string
     */
    public $phoneNumbers;

    /**
     * @var string
     */
    public $signKey;
    protected $_name = [
        'nowStamp'     => 'NowStamp',
        'phoneNumbers' => 'PhoneNumbers',
        'signKey'      => 'SignKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nowStamp) {
            $res['NowStamp'] = $this->nowStamp;
        }
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = $this->phoneNumbers;
        }
        if (null !== $this->signKey) {
            $res['SignKey'] = $this->signKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendSmsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NowStamp'])) {
            $model->nowStamp = $map['NowStamp'];
        }
        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbers = $map['PhoneNumbers'];
        }
        if (isset($map['SignKey'])) {
            $model->signKey = $map['SignKey'];
        }

        return $model;
    }
}
