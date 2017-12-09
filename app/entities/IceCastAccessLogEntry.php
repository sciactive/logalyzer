<?php

/**
 * @property string $line The log entry's original log line.
 * @property string $remoteHost
 * @property string $userIdentity
 * @property string $userName
 * @property string $timeString
 * @property string $requestLine
 * @property int $statusCode
 * @property int $responseBytes
 * @property string $referer
 * @property string $userAgent
 * @property string $uaBrowserName
 * @property string $uaBrowserVersion
 * @property string $uaCpuArchitecture
 * @property string $uaDeviceModel
 * @property string $uaDeviceType
 * @property string $uaDeviceVendor
 * @property string $uaEngineName
 * @property string $uaEngineVersion
 * @property string $uaOsName
 * @property string $uaOsVersion
 * @property int $duration
 * @property int $time Unix timestamp of the request in milliseconds.
 * @property int $timeStart Unix timestamp of the request in milliseconds.
 * @property int $timeEnd Unix timestamp of the termination of the request in milliseconds.
 * @property string $method
 * @property string $resource
 * @property string $protocol
 * @property string $timeZone
 * @property string $continentCode
 * @property string $continent
 * @property string $countryCode
 * @property string $country
 * @property string $provinceCode
 * @property string $province
 * @property string $postalCode
 * @property string $city
 */
class IcecastAccessLogEntry extends LogEntry {
  const ETYPE = 'logentry_icecast_access';
  static $clientEnabledStaticMethods = [];
  // These don't need to be private, they just take up space going over the
  // wire.
  protected $privateData = [
    'user',
    'group',
    'ac_user',
    'ac_group',
    'ac_other'
  ];
  protected $whitelistData = [
    'line',
    'remoteHost',
    'userIdentity',
    'userName',
    'timeString',
    'requestLine',
    'statusCode',
    'responseBytes',
    'referer',
    'userAgent',
    'uaBrowserName',
    'uaBrowserVersion',
    'uaCpuArchitecture',
    'uaDeviceModel',
    'uaDeviceType',
    'uaDeviceVendor',
    'uaEngineName',
    'uaEngineVersion',
    'uaOsName',
    'uaOsVersion',
    'duration',
    'time',
    'timeStart',
    'timeEnd',
    'method',
    'resource',
    'protocol',
    'timeZone',
    'continentCode',
    'continent',
    'countryCode',
    'country',
    'provinceCode',
    'province',
    'postalCode',
    'city'
  ];
  protected $protectedTags = [];
  protected $whitelistTags = [];

  public function __construct($id = 0) {
    parent::__construct($id);
  }
}
