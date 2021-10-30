<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Qrcodes;
use App\Http\Resources\QrcoderResource;

class TestQrcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $code = new Qrcodes();
        //id du trader et la reference du qrcode sont requis
        $code->trader_id = $request->trader_id;
        $code->reference_qrcode = $request->reference_qrcode ;
        
        $code->save();
         return new QrcoderResource($code);
        
       // return view("qrcode", compact('qrcode'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $code = Qrcodes::findOrFail($id);
        $paiementcode = $code->id.$code->reference_qrcode;
        $info=$paiementcode;
        $info.='; https://testpaiecash.mt-eyer.com/';
        $info.='si vous lisez ceci c\'est que votre paeiment est éffectué'; 
        //$qrcode = QrCode::size(200)->generate($info);

        //return view("qrcode", compact('info'));
       return QrcoderResource::collection($info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
