<?php

namespace App\Http\Controllers;

use App\Enums\Vehicle;
use App\Enums\UserStatus;
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
        # ------- laravelのenumライブラリを使用した一例 -------
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

        # ------- phpのenumを使用した例 -------
        // enum値の一覧を配列で取得
        $userStatusAllList = UserStatus::cases();

        // スカラー値からEnumのcaseを返す
        //  存在しない場合エラー
        $isGuestCase = UserStatus::from('test');

        // 　存在しない場合null
        $isGuestCase = UserStatus::tryFrom('test');
    }
}
