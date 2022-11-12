<?php

namespace Devkind\RytrPhp;

/**
 * Languages interface
 */
interface ILanguages
{
    /**
     * Our list of valid Languages.
     *
     * @var array
     */
    public const LANGUAGES =  [
        "arabic" => [
            "id" => "60c4eb424660040013ca8a9f",
            "name" => "🇦🇪 Arabic",
            "slug" => "arabic",
        ],
        "bulgarian" => [
            "id" => "60eddd5676319d000c81dfc5",
            "name" => "🇧🇬 Bulgarian",
            "slug" => "bulgarian",
        ],
        "chinese-simplified" => [
            "id" => "607ae6531208a9000cb1141c",
            "name" => "🇨🇳 Chinese (S)",
            "slug" => "chinese-simplified",
        ],
        "chinese-traditional" => [
            "id" => "60f853a39bb0df0013c6a588",
            "name" => "🇹🇼 Chinese (T)",
            "slug" => "chinese-traditional",
        ],
        "czech" => [
            "id" => "60d014e9d6e910001341493a",
            "name" => "🇨🇿 Czech",
            "slug" => "czech",
        ],
        "danish" => [
            "id" => "60c653b4bca5d4000cc679e3",
            "name" => "🇩🇰 Danish",
            "slug" => "danish",
        ],
        "dutch" => [
            "id" => "607adbdf6f8fe5000c1e6378",
            "name" => "🇳🇱 Dutch",
            "slug" => "dutch",
        ],
        "english" => [
            "id" => "607adac76f8fe5000c1e636d",
            "name" => "🇺🇸 English",
            "slug" => "english",
        ],
        "farsi" => [
            "id" => "60ebc3e06f90af000c8b15f3",
            "name" => "🇮🇷 Farsi",
            "slug" => "farsi",
        ],
        "filipino" => [
            "id" => "6159af6d56a355691567ec9d",
            "name" => "🇵🇭 Filipino",
            "slug" => "filipino",
        ],
        "finnish" => [
            "id" => "60c65338bca5d4000cc679dd",
            "name" => "🇫🇮 Finnish",
            "slug" => "finnish",
        ],
        "french" => [
            "id" => "607adb7b6f8fe5000c1e6375",
            "name" => "🇫🇷 French",
            "slug" => "french",
        ],
        "german" => [
            "id" => "607adb536f8fe5000c1e6374",
            "name" => "🇩🇪 German",
            "slug" => "german",
        ],
        "greek" => [
            "id" => "607adc966f8fe5000c1e637d",
            "name" => "🇬🇷 Greek",
            "slug" => "greek",
        ],
        "hebrew" => [
            "id" => "607c7c211ebe15000cbbc7b8",
            "name" => "🇮🇱 Hebrew",
            "slug" => "hebrew",
        ],
        "hindi" => [
            "id" => "60ce30891d63cb0013838dfb",
            "name" => "🇮🇳 Hindi",
            "slug" => "hindi",
        ],
        "hungarian" => [
            "id" => "6102aa33280cab000c673c2f",
            "name" => "🇭🇺 Hungarian",
            "slug" => "hungarian",
        ],
        "indonesian" => [
            "id" => "6094f9b4addddd000c04c94b",
            "name" => "🇮🇩 Indonesian",
            "slug" => "indonesian",
        ],
        "italian" => [
            "id" => "607adb996f8fe5000c1e6376",
            "name" => "🇮🇹 Italian",
            "slug" => "italian",
        ],
        "japanese" => [
            "id" => "607adc3d6f8fe5000c1e637b",
            "name" => "🇯🇵 Japanese",
            "slug" => "japanese",
        ],
        "korean" => [
            "id" => "607adc716f8fe5000c1e637c",
            "name" => "🇰🇷 Korean",
            "slug" => "korean",
        ],
        "lithuanian" => [
            "id" => "6198d279d3a709c29634bb26",
            "name" => "🇱🇹 Lithuanian",
            "slug" => "lithuanian",
        ],
        "malay" => [
            "id" => "60ef33e9c218d0000c2eb058",
            "name" => "🇲🇾 Malay",
            "slug" => "malay",
        ],
        "norwegian" => [
            "id" => "607db96c182478000c9ac2d9",
            "name" => "🇳🇴 Norwegian",
            "slug" => "norwegian",
        ],
        "polish" => [
            "id" => "607adc056f8fe5000c1e6379",
            "name" => "🇵🇱 Polish",
            "slug" => "polish",
        ],
        "portuguese" => [
            "id" => "607adbb56f8fe5000c1e6377",
            "name" => "🇵🇹 Portuguese",
            "slug" => "portuguese",
        ],
        "romanian" => [
            "id" => "609fdbec6cc23d000c7c5e84",
            "name" => "🇷🇴 Romanian",
            "slug" => "romanian",
        ],
        "russian" => [
            "id" => "607adc2f6f8fe5000c1e637a",
            "name" => "🇷🇺 Russian",
            "slug" => "russian",
        ],
        "slovak" => [
            "id" => "614a2cc9c1babef3e4008d48",
            "name" => "🇸🇰 Slovak",
            "slug" => "slovak",
        ],
        "slovenian" => [
            "id" => "63309f451a3a1324049f8fac",
            "name" => "🇸🇮 Slovenian",
            "slug" => "slovenian",
        ],
        "spanish" => [
            "id" => "607adad66f8fe5000c1e636e",
            "name" => "🇪🇸 Spanish",
            "slug" => "spanish",
        ],
        "swedish" => [
            "id" => "6081b157f580d2000c1baf2c",
            "name" => "🇸🇪 Swedish",
            "slug" => "swedish",
        ],
        "thai" => [
            "id" => "607c7bec1ebe15000cbbc7b7",
            "name" => "🇹🇭 Thai",
            "slug" => "thai",
        ],
        "turkish" => [
            "id" => "60a4c3d60b2ef9000ce86d01",
            "name" => "🇹🇷 Turkish",
            "slug" => "turkish",
        ],
        "ukrainian" => [
            "id" => "633c17ed746d4421d9656837",
            "name" => "🇺🇦 Ukrainian",
            "slug" => "ukrainian",
        ],
        "vietnamese" => [
            "id" => "60c65522bca5d4000cc679fa",
            "name" => "🇻🇳 Vietnamese",
            "slug" => "vietnamese",
        ]
    ];
}
