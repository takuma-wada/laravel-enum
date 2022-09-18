<?php

namespace App\Http\Controllers;

use App\Enums\Vehicle;
use Illuminate\Http\Request;

class EnumController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // keyを全て取り出す
        $vehicleAllKeys = Vehicle::getKeys();

        // 個別のkeyを取り出す(複数指定可能)
        $individualKeys = Vehicle::getKeys(Vehicle::CAR, Vehicle::BIKE);

        // valueをを全て取り出す
        $vehicleAllValues = Vehicle::getValues();

        // 個別のvalueをを取り出す(複数指定可能))
        $individualValues = Vehicle::getValues('AIRPLANE', 'CAR');

        // ランダムにvalueを返す
        $ramdomValue = Vehicle::getRandomValue();
    }
}
