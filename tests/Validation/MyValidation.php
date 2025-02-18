<?php
/*
 * Project: webgeeker-validation
 * File: MyValidation.php
 * CreateTime: 2018/9/29 01:07
 * Author: photondragon
 * Email: photondragon@163.com
 */

/**
 * @file MyValidation.php
 * @brief brief description
 *
 * elaborate description
 */

namespace WebParams\ValidationTest;

/**
 * @class MyValidation
 * @package WebGeeker\RestTest
 * @brief brief description
 *
 * elaborate description
 */
class MyValidation extends CustomValidation
{
    /**
     * “错误提示信息模版”翻译对照表
     * @deprecated
     */
    protected static $langCodeToErrorTemplates = [
        "zh-tw" => [
            "“{{param}}”必须是整数" => "“{{param}}”必須是整數",
            "“{{param}}”必须是字符串" => "“{{param}}”必須是字符串",
        ],
        "en-us" => [
            "“{{param}}”必须是整数" => "{{param}} must be a integer",
            "“{{param}}”必须是字符串" => "{{param}} must be a string",
        ],
    ];

    // 文本翻译对照表
    protected static $langCodeToTranslations = [
        "zh-tw" => [
            "变量" => "變量",
            "变量必须是整数" => "變量必須是整數",
            "自定义变量" => '自定義變量',
            "自定义变量必须是Custom整数" => "自定義變量必須是Custom整數",
        ],
        "en-us" => [
            "变量" => "variable",
            "变量必须是整数" => "variable must be an integer",
            "自定义变量" => 'custom variable',
            "自定义变量必须是Custom整数" => "custom variable must be a custom integer",
        ],
    ];

}
