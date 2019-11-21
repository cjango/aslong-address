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
     * @return int
     */
    public function getProvinceId()
    {
        return $this->province_id;
    }

    /**
     * @return int
     */
    public function getCityId()
    {
        return $this->city_id;
    }

    /**
     * @return int
     */
    public function getDistrictId()
    {
        return $this->district_id;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Notes: 收件人完整地址
     * @Author: <C.Jason>
     * @Date: 2019/11/21 11:35 上午
     * @param string $seperator 分隔符
     * @return string
     */
    public function getFullAddress($seperator = ' ')
    {
        return
            $this->province->name . $seperator .
            $this->city->name . $seperator .
            $this->district->name . $seperator .
            $this->address;
    }

}
