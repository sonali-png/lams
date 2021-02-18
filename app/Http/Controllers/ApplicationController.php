<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\applications;
class ApplicationController extends Controller
{
    public function getApplicationList() {
        $apps = applications::find(1)->mappedModules();
        print_r($apps);exit;
    }
}
