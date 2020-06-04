<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\order;
use Carbon\Carbon;
use App\Message;
use Intervention\Image\ImageManagerStatic as Image;
class OrderController extends Controller
{
    public function store(Request $request) {
        $order = order::create([
            'name' => $request->name,
            'home_number' => $request->home_number,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'address' => $request->address,
            'zip_code' => $request->zip_code,
            'type' => $request->type,
            'front_image' => $request->images_uri['front'],
            'back_image' => $request->images_uri['back'],
            'third_image' => $request->images_uri['third'],
            'profile_name' => $request->profile_name,
            'profile_id' => $request->profile_id,
            'note' => $request->note
        ]);

        return response()->json(['success' => true]);
    }

    public function upload_image(Request $request) {
         $image = 'data:image/jpg;base64,'.$request->get('image');
        $imageName = Carbon::now()->timestamp . uniqid() . '.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
        Image::make($image)->save(public_path(('storage/order_images/').$imageName));

        return response()->json(['image'=>'order_images/'.$imageName]);
    }

    public function send_message(Request $request) {
        $Message = Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'confirm' => 0
        ]);

        return response()->json(['success' => true]);
    }
}
