<?php

namespace Devkind\RytrPhp;

/**
 * Languages interface
 */
interface Languages
{
    /**
     * Our list of valid Languages.
     *
     * @var array
     */
    public const LANGUAGES =  [
        "60c4eb424660040013ca8a9f" => [
            "_id" => "60c4eb424660040013ca8a9f",
            "name" => "🇦🇪 Arabic",
            "slug" => "arabic",
        ],
        "60eddd5676319d000c81dfc5" => [
            "_id" => "60eddd5676319d000c81dfc5",
            "name" => "🇧🇬 Bulgarian",
            "slug" => "bulgarian",
        ],
        "607ae6531208a9000cb1141c" => [
            "_id" => "607ae6531208a9000cb1141c",
            "name" => "🇨🇳 Chinese (S)",
            "slug" => "chinese-simplified",
        ],
        "60f853a39bb0df0013c6a588" => [
            "_id" => "60f853a39bb0df0013c6a588",
            "name" => "🇹🇼 Chinese (T)",
            "slug" => "chinese-traditional",
        ],
        "60d014e9d6e910001341493a" => [
            "_id" => "60d014e9d6e910001341493a",
            "name" => "🇨🇿 Czech",
            "slug" => "czech",
        ],
        "60c653b4bca5d4000cc679e3" => [
            "_id" => "60c653b4bca5d4000cc679e3",
            "name" => "🇩🇰 Danish",
            "slug" => "danish",
        ],
        "607adbdf6f8fe5000c1e6378" => [
            "_id" => "607adbdf6f8fe5000c1e6378",
            "name" => "🇳🇱 Dutch",
            "slug" => "dutch",
        ],
        "607adac76f8fe5000c1e636d" => [
            "_id" => "607adac76f8fe5000c1e636d",
            "name" => "🇺🇸 English",
            "slug" => "english",
        ],
        "60ebc3e06f90af000c8b15f3" => [
            "_id" => "60ebc3e06f90af000c8b15f3",
            "name" => "🇮🇷 Farsi",
            "slug" => "farsi",
        ],
        "6159af6d56a355691567ec9d" => [
            "_id" => "6159af6d56a355691567ec9d",
            "name" => "🇵🇭 Filipino",
            "slug" => "filipino",
        ],
        "60c65338bca5d4000cc679dd" => [
            "_id" => "60c65338bca5d4000cc679dd",
            "name" => "🇫🇮 Finnish",
            "slug" => "finnish",
        ],
        "607adb7b6f8fe5000c1e6375" => [
            "_id" => "607adb7b6f8fe5000c1e6375",
            "name" => "🇫🇷 French",
            "slug" => "french",
        ],
        "607adb536f8fe5000c1e6374" => [
            "_id" => "607adb536f8fe5000c1e6374",
            "name" => "🇩🇪 German",
            "slug" => "german",
        ],
        "607adc966f8fe5000c1e637d" => [
            "_id" => "607adc966f8fe5000c1e637d",
            "name" => "🇬🇷 Greek",
            "slug" => "greek",
        ],
        "607c7c211ebe15000cbbc7b8" => [
            "_id" => "607c7c211ebe15000cbbc7b8",
            "name" => "🇮🇱 Hebrew",
            "slug" => "hebrew",
        ],
        "60ce30891d63cb0013838dfb" => [
            "_id" => "60ce30891d63cb0013838dfb",
            "name" => "🇮🇳 Hindi",
            "slug" => "hindi",
        ],
        "6102aa33280cab000c673c2f" => [
            "_id" => "6102aa33280cab000c673c2f",
            "name" => "🇭🇺 Hungarian",
            "slug" => "hungarian",
        ],
        "6094f9b4addddd000c04c94b" => [
            "_id" => "6094f9b4addddd000c04c94b",
            "name" => "🇮🇩 Indonesian",
            "slug" => "indonesian",
        ],
        "607adb996f8fe5000c1e6376" => [
            "_id" => "607adb996f8fe5000c1e6376",
            "name" => "🇮🇹 Italian",
            "slug" => "italian",
        ],
        "607adc3d6f8fe5000c1e637b" => [
            "_id" => "607adc3d6f8fe5000c1e637b",
            "name" => "🇯🇵 Japanese",
            "slug" => "japanese",
        ],
        "607adc716f8fe5000c1e637c" => [
            "_id" => "607adc716f8fe5000c1e637c",
            "name" => "🇰🇷 Korean",
            "slug" => "korean",
        ],
        "6198d279d3a709c29634bb26" => [
            "_id" => "6198d279d3a709c29634bb26",
            "name" => "🇱🇹 Lithuanian",
            "slug" => "lithuanian",
        ],
        "60ef33e9c218d0000c2eb058" => [
            "_id" => "60ef33e9c218d0000c2eb058",
            "name" => "🇲🇾 Malay",
            "slug" => "malay",
        ],
        "607db96c182478000c9ac2d9" => [
            "_id" => "607db96c182478000c9ac2d9",
            "name" => "🇳🇴 Norwegian",
            "slug" => "norwegian",
        ],
        "607adc056f8fe5000c1e6379" => [
            "_id" => "607adc056f8fe5000c1e6379",
            "name" => "🇵🇱 Polish",
            "slug" => "polish",
        ],
        "607adbb56f8fe5000c1e6377" => [
            "_id" => "607adbb56f8fe5000c1e6377",
            "name" => "🇵🇹 Portuguese",
            "slug" => "portuguese",
        ],
        "609fdbec6cc23d000c7c5e84" => [
            "_id" => "609fdbec6cc23d000c7c5e84",
            "name" => "🇷🇴 Romanian",
            "slug" => "romanian",
        ],
        "607adc2f6f8fe5000c1e637a" => [
            "_id" => "607adc2f6f8fe5000c1e637a",
            "name" => "🇷🇺 Russian",
            "slug" => "russian",
        ],
        "614a2cc9c1babef3e4008d48" => [
            "_id" => "614a2cc9c1babef3e4008d48",
            "name" => "🇸🇰 Slovak",
            "slug" => "slovak",
        ],
        "63309f451a3a1324049f8fac" => [
            "_id" => "63309f451a3a1324049f8fac",
            "name" => "🇸🇮 Slovenian",
            "slug" => "slovenian",
        ],
        "607adad66f8fe5000c1e636e" => [
            "_id" => "607adad66f8fe5000c1e636e",
            "name" => "🇪🇸 Spanish",
            "slug" => "spanish",
        ],
        "6081b157f580d2000c1baf2c" => [
            "_id" => "6081b157f580d2000c1baf2c",
            "name" => "🇸🇪 Swedish",
            "slug" => "swedish",
        ],
        "607c7bec1ebe15000cbbc7b7" => [
            "_id" => "607c7bec1ebe15000cbbc7b7",
            "name" => "🇹🇭 Thai",
            "slug" => "thai",
        ],
        "60a4c3d60b2ef9000ce86d01" => [
            "_id" => "60a4c3d60b2ef9000ce86d01",
            "name" => "🇹🇷 Turkish",
            "slug" => "turkish",
        ],
        "633c17ed746d4421d9656837" => [
            "_id" => "633c17ed746d4421d9656837",
            "name" => "🇺🇦 Ukrainian",
            "slug" => "ukrainian",
        ],
        "60c65522bca5d4000cc679fa" => [
            "_id" => "60c65522bca5d4000cc679fa",
            "name" => "🇻🇳 Vietnamese",
            "slug" => "vietnamese",
        ]
    ];
}
