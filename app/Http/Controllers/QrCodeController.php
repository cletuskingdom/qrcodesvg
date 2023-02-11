<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function index($id)
    {
        return QrCode::size(400)->BTC($id);
        return view('qrcode', [
            'code' => $id,
        ]);
    }
}
