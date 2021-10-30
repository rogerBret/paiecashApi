<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Qrcodes;
use App\Models\Trader;
use App\Http\Resources\QrcoderResource;

class QrcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = new Qrcodes();
        //id du trader et la reference du qrcode sont requis
        $code->trader_id = $request->trader_id;
        $code->reference_qrcode = $request->reference_qrcode ;

        $qrcode = QrCode::size(200)->generate($code);
        
        if($code->save())
        {
            return new QrcoderResource($code);
        }
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
        $info=$code->id;
        $info.='; https://testpaiecash.mt-eyer.com/';
        $info.='si vous lisez ceci c\'est que votre paeiment est éffectué'; 
        //$qrcode = QrCode::size(200)->generate($info);

        return view("qrcode", compact('info'));
       // return QrcoderResource::collection($qrcode);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    public function referance()
   {
       return random_bytes();
   }
}
