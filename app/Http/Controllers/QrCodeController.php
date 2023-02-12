<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Image;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function index($id)
    {
        $img = QrCode::size(400)->BTC($id);
        return response($img)->header('Content-Type', 'image/svg+xml');
        // return view('qrcode', [
        //     'code' => $id,
        // ]);
    }
}
