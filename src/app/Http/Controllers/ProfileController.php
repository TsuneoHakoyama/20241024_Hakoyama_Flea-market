<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Models\Item;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function create()
    {
        $user = Auth::id();
        $profile = Profile::where('user_id', $user)
                   ->first();

        return view('profile', compact('profile'));
    }

    public function store(ProfileRequest $request)
    {
        $dir = 'images/users';
        $file_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/' . $dir, $file_name);

        $user_id = Auth::id();
        $presence = Profile::find($user_id);
        $param = $request->all();
        unset($param['_token']);
        $param['user_id'] = $user_id;
        $param['image'] = 'storage/' . $dir . '/' . $file_name;

        is_null($presence) ? Profile::create($param): Profile::find($user_id)->update($param);

        $info = Profile::find($user_id);
        $items = Item::where('user_id', $user_id)
            ->get();
        return view('mypage', compact('info', 'items'));
    }


    public function updateAddress($item_id)
    {
        $user = Auth::id();
        $profile = Profile::find($user);
        $item_id = $item_id;

        if (empty($profile)) {
            return view('profile', compact(['item_id', 'profile']));
        }

        return view('update-address', compact(['item_id', 'profile']));
    }

    public function storeAddress(UpdateAddressRequest $request)
    {
        $param = [
            'postcode'=>$request->postcode,
            'address'=>$request->address,
            'building'=>$request->building
        ];
        $user = Auth::id();
        Profile::find($user)->update($param);

        return redirect()->route('confirm',['item_id' => $request->item_id]);
    }
}
