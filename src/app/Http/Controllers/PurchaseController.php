<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseRequest;
use App\Models\Item;
use App\Models\Profile;
use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;


class PurchaseController extends Controller
{
    public function confirm($item_id)
    {
        $item = Item::where('id', $item_id)
                ->first();
        $address = Profile::where('user_id', Auth::id())
                   ->first();

        if (is_null($address)) {
            return redirect()->route('profile');
        }

        return view('purchase', compact('item', 'address'));
    }

    public function purchase(PurchaseRequest $request)
    {
        if ($request->payment_id == 1) {
            $item = Item::find($request->item_id);
            $param = [
                'name' => $item->name,
                'user_id' => $request->user_id,
                'item_id' => $request->item_id,
                'price' => $request->price,
                'payment_id' => $request->payment_id
            ];

            return view('payment-button', compact('param'));
        }

        $param = $request->all();
        Purchase::create($param);

        return view('purchase-complete');
    }
}
