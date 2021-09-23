@extends('index.layout')
<html lang="zh-Hans">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="dave,">
    </head>
    <style>
        .home_page_introduce{
            background-color: #6c757d;
        }
        .home_page_brief{
            background-color: #545b62;
        }
    </style>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 home_page_introduce">
                    <img/>
                    <h3>果然</h3>
                    <p>php&python</p>
                    <p>中国 深圳</p>
                </div>
                <div class="col-md-6 home_page_content">
                    <h3>第二列</h3>
                    <p>菜鸟教程</p>
                    <p>学的不仅是技术，更是梦想！！！</p>
                </div>
                <div class="col-md-4 home_page_brief">
                    <h3>第三列</h3>
                    <p>菜鸟教程</p>
                    <p>学的不仅是技术，更是梦想！！！</p>
                </div>
            </div>
        </div>
    </body>
</html>
