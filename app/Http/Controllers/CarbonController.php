<?php
use Carbon\Carbon;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarbonController extends Controller
{
    public function carbon(currentTime)
    {
    $currentTime = Carbon::now((new \DateTimeZone"Indonesian/Jakarta"));
    'timezone' => 'Indonesian/Jakarta'
    echo $currentTime->toDateTimeString();
    }
}
