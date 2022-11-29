<?php
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
    else
        $url = "http://";
    
    $url.= $_SERVER['HTTP_HOST'];
    $url.= $_SERVER['REQUEST_URI'];

    $chapter_LanguageBasics = "ch-2-language-basics/subindex-language-basics";
    $chapter_Functions = "subindex-functions";
    $chapter_Strings = "subindex-strings";    
    $chapter_Arrays = "subindex-arrays";    
    $chapter_Objects = "subindex-objects";
    $chapter_DatesAndTimes = "subindex-data-and-times";
    $chapter_WebTechniques = "subindex-web-techniques";
    $chapter_Databases = "subindex-databases";
    $chapter_Graphics = "subindex-graphics";
    $chapter_PDF = "subindex-pdf";
    $chapter_XML = "subindex-xml";
    $chapter_JSON = "subindex-json";
    $chapter_Security = "subindex-security";
    $chapter_ApplicationTechniques = "subindex-application-techniques";
    $chapter_WebServices = "subindex-web-services";
    $chapter_DebuggingPHP = "subindex-debugging-php";
    $chapter_PHPOnDisparatePlatforms = "subindex-php-on-disparate-platforms";

    $postfix = ".php";
    $tgtDirectory = "book/";
    
    echo("<h1>Programming PHP - 2022</h1><br><br>");

    echo("<pre>");
    echo("{$url}"."book/"."{$chapter_LanguageBasics}\")");
    echo("</pre>");

    echo("<br><br>");
    
    echo("<list>");
        echo("<lh>Index</lh>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_LanguageBasics}{$postfix}\">Language Basics</a></ol>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_Functions}{$postfix}\">Functions</a></ol>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_Strings}{$postfix}\">Strings</a></ol>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_Arrays}{$postfix}\">Arrays</a></ol>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_Objects}{$postfix}\">Objects</a></ol>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_DatesAndTimes}{$postfix}\">Dates and Times</a></ol>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_WebTechniques}{$postfix}\">Web Techniques</a></ol>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_Databases}{$postfix}\">Databases</a></ol>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_Graphics}{$postfix}\">Graphics</a></ol>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_XML}{$postfix}\">XML</a></ol>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_JSON}{$postfix}\">JSON</a></ol>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_Security}{$postfix}\">Security</a></ol>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_ApplicationTechniques}{$postfix}\">Application Techniques</a></ol>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_WebServices}{$postfix}\">Web Services</a></ol>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_DebuggingPHP}{$postfix}\">Debugging PHP</a></ol>");
        echo("<ol><a href=\"{$url}{$tgtDirectory}{$chapter_PHPOnDisparatePlatforms}{$postfix}\">PHP on Disparate Platforms</a></ol>");
    echo("</list>");
?>