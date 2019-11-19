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
    public function getAddress($seperator = '')
    {
        return
            $this->province->name . $seperator .
            $this->city->name . $seperator .
            $this->district->name . $seperator .
            $this->address;
    }

}
