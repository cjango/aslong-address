<?php

namespace AsLong\Address\Contracts;

/**
 * 用户地址 契约
 */
interface Addressbook
{

    /**
     * Notes: 收件人姓名
     * @Author: <C.Jason>
     * @Date: 2019/11/21 11:36 上午
     * @return string
     */
    public function getName();

    /**
     * Notes: 收件人电话
     * @Author: <C.Jason>
     * @Date: 2019/11/21 11:36 上午
     * @return string
     */
    public function getMobile();

    /**
     * Notes: 获取省份ID
     * @Author: <C.Jason>
     * @Date: 2019/11/21 11:36 上午
     * @return int
     */
    public function getProvinceId();

    /**
     * Notes: 获取城市ID
     * @Author: <C.Jason>
     * @Date: 2019/11/21 11:34 上午
     * @return int
     */
    public function getCityId();

    /**
     * Notes: 获取地区ID
     * @Author: <C.Jason>
     * @Date: 2019/11/21 11:34 上午
     * @return int
     */
    public function getDistrictId();

    /**
     * Notes: 获取地址
     * @Author: <C.Jason>
     * @Date: 2019/11/21 11:34 上午
     * @return string
     */
    public function getAddress();

    /**
     * Notes: 收件人完整地址
     * @Author: <C.Jason>
     * @Date: 2019/11/21 11:35 上午
     * @param null $seperator 分隔符
     * @return string
     */
    public function getFullAddress($seperator = null);

}
