<?php

/**
 * 域名的接口逻辑处理的Demo
 * 
 * @author CLoudXNS <support@cloudxns.net>
 * @link https://www.cloudxns.net/
 * @copyright Copyright (c) 2015 Cloudxns.
 */
require_once 'Config.inc.php';

use Cloudxns\Api;

$api = new Api();
$api->setApiKey('xxxx');
$api->setSecretKey('xxxxx');
$api->setProtocol(true);

/**
 * 域名列表 
 * 
 * @return string
 */
echo $api->domain->domainList();


/**
 * 域名的添加
 * 
 * @param string $domain 域名的名称
 * @return string
 */
echo $api->domain->domainAdd('aaa.com');


/**
 * 域名的删除
 * 
 * @param integer $id 域名ID
 * @return string
 */
echo $api->domain->domainDelete(32221);





