<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Userinfo;
use App\Phones;
use App\Userphones;

class AdminController extends Controller
{
    public function createUser(Request $request) {


        $userinfo = new Userinfo();

        $userinfo->username = $request->input('username');
        $userinfo->password = $request->input('password');
        $userinfo->name = $request->input('name');
        $userinfo->isActive = 1;

        $userinfo->save();
        // return response()->json($userinfo);
        return 1;
    }

    public function createPhoneNumber(Request $request) {
        $phone = new Phones();
        $phone->phonenumber = $request->input('phonenumber');
        $phone->isActive = 1;

        $phone->save();
        return 1;
    }


    public function getUser() {
        $userinfo = Userinfo::all();
        return response()->json($userinfo);
    }

    public function getUserById($sysid) {
        $userinfo = Userinfo::find($sysid);
        return response()->json($userinfo);
    }    

    public function getPhones() {
        $phones = Phones::all();
        return response()->json($phones);
    }

    public function linkPhoneToUser(Request $request) {
        $userphones = new Userphones();
        $userphones->userid = $request->input('userid');
        $userphones->phoneid = $request->input('phoneid');
        $userphones->isActive = 1;

        $userphones->save();
        return 1;
    }

    public function getPhonesLinktouser($sysid) {
        $result = DB::table('userinfo')->select('userinfo.sysid','phones.phonenumber')
        ->join('userphones','userphones.userid','=','userinfo.sysid')
        ->join('phones','userphones.phoneid','=','phones.sysid')
        ->where(['userinfo.sysid' => $sysid])->get();

        return response()->json($result);

    }

}
