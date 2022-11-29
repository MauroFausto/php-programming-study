<?php
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
    else
        $url = "http://";
    
    $url.= $_SERVER['HTTP_HOST'];
    $url.= $_SERVER['REQUEST_URI'];

    $chapter_LanguageBasics = "language-basics";
    $chapter_Functions = "functions";
    $chapter_Strings = "strings";    
    $chapter_Arrays = "arrays";    
    $chapter_Objects = "objects";
    $chapter_DatesAndTimes = "data-and-times";
    $chapter_WebTechniques = "web-techniques";
    $chapter_Databases = "databases";
    $chapter_Graphics = "graphics";
    $chapter_PDF = "pdf";
    $chapter_XML = "xml";
    $chapter_JSON = "json";
    $chapter_Security = "security";
    $chapter_ApplicationTechniques = "application-techniques";
    $chapter_WebServices = "web-services";
    $chapter_DebuggingPHP = "debugging-php";
    $chapter_PHPOnDisparatePlatforms = "php-on-disparate-platforms";
    
    echo("<h1>Programming PHP - 2022</h1><br><br>");

    echo("<br><br>");
    
    echo("<list>");
        echo("<lh>Index</lh>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_LanguageBasics}\">Language Basics</a></ol>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_Functions}\">Functions</a></ol>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_Strings}\">Strings</a></ol>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_Arrays}\">Arrays</a></ol>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_Objects}\">Objects</a></ol>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_DatesAndTimes}\">Dates and Times</a></ol>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_WebTechniques}\">Web Techniques</a></ol>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_Databases}\">Databases</a></ol>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_Graphics}\">Graphics</a></ol>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_XML}\">XML</a></ol>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_JSON}\">JSON</a></ol>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_Security}\">Security</a></ol>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_ApplicationTechniques}\">Application Techniques</a></ol>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_WebServices}\">Web Services</a></ol>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_DebuggingPHP}\">Debugging PHP</a></ol>");
        echo("<ol><a href=\"{$url}.'/'{$chapter_PHPOnDisparatePlatforms}\">PHP on Disparate Platforms</a></ol>");
    echo("</list>");
?>