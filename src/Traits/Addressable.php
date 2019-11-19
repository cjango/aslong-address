<?php

namespace AsLong\Address\Traits;

trait Addressable
{

    /**
     * 收件人姓名
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 收件人电话
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * 收件人详细地址
     * @return string
     */
    public function getAddress()
    {
        return
            $this->province->name .
            $this->city->name .
            $this->district->name .
            $this->address;
    }

}