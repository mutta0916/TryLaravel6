<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function __invoke()
    {
        return <<<EOF
        <html>
        <head>
        <title>Hello</title>
        <style>
        body {font-size: 16pt; color:#999; margin: 5px;}
        h1 {font-size: 50pt; text-align:right; color:#f6f6f6;  margin:-20px 0px -30px 0px; letter-spacing: -4pt;}
        </style>
        </head>
        <body>
            <p>シングルアクションコントローラー(Laravel6)</p>
        </body>
        </html>
        EOF;
    }
}
