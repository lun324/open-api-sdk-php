<?php

namespace OpenApiSDK\Common;

/**
 * Class ApiGlobalConst
 * @package OpenApiSDK\Common
 */
class CardUtil
{
    /**
     * @param $encryptString
     * @param $appSecret
     * @return string
     */
    public static function decode($encryptString, $appSecret)
    {
        $encryptString = base64_decode($encryptString);
        $decryptedData = rtrim(openssl_decrypt($encryptString, 'aes-256-ecb', $appSecret, OPENSSL_RAW_DATA));

        return trim($decryptedData);
    }
}
