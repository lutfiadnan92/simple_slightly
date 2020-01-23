<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;

class UserController extends Controller
{
    public function createUser(Request $req) {
        $user = new UserModel;
        $user->amount = $req->amount;
        $user->status = 'FAILED';
        $user->timestamp = now();
        $user->bank_code = $req->bank_code;
        $user->account_number = $req->account_number;
        $user->beneficiary_name = 'PT FLIP';
        $user->remark = $req->remark;
        $user->receipt = 'null';
        $user->time_served = date('H-m-d H:i:s', null);
        $user->fee = 400;
        $user->save();

        $print = UserModel::where('status', 'failed')->get();
        return response()->json($print, 201);
    }

    public function readUser($id) {
        if (UserModel::where('id', $id)->exists()) {
            $users = UserModel::find($id);
            $users->status = 'SUCCESS';
            $users->receipt = 'http://test.com';
            $users->time_served = now();
            $users->save();

            $print = UserModel::where('id', $id)->get();
            return response()->json($print, 200);
        } else {
            return response()->json([
                'message' => 'data not found'
            ], 404);
        }
    }

    public function getAllUser() {
        return response()->json(UserModel::get(), 200);
    }
}
