<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Validator;

class FaceController extends Controller
{
    public function Index()
    {
    	return view('facematch',[
    		'data'=>0,
    	]);
    }

	private $access_token;
	public function __contruct()
	{
		$this->access_token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHAiOjE2MjUzOTIyMTYsImp0aSI6IjhkOWZmNTFiLTJiYmItNDc4My1iYmI5LTg5ZWMzNGY3MDNmZiIsImlkZW50aXR5IjoiZGV2LmRvY2JveXpAYWFkaGFhcmFwaS5pbyIsImZyZXNoIjpmYWxzZSwiaWF0IjoxNTkzODU2MjE2LCJuYmYiOjE1OTM4NTYyMTYsInVzZXJfY2xhaW1zIjp7InNjb3BlcyI6WyJyZWFkIl19LCJ0eXBlIjoiYWNjZXNzIn0.f0Ea5UmL_DQsSCBF6sWJzU-n7NPT9TL_IkKFY_a-3KQ";
    }
    public function Operation(Request $request)
    {
    	$rules=[
       			'selfie'=>'required',
       			'id_card'=>'required',
       			'selfie_2'=>'required',
       			];

        $validator=Validator::make($request->all(),$rules);
   			if ($validator->fails()) {
       			return response()->json( $validator->errors(),400);
   			}


   	//     	 $selfie = $request->selfie->getClientOriginalName();
   //     	  $id_card = $request->file('id_card');
   //     	   $selfie_2 = $request->file('selfie_2');
		
		
		 // $path = $request->selfie->getPathname();
		 // $path2 =$request->selfie->getClientOriginalExtension();

		
   		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://sandbox.flowboard.in/api/v1/face/face-match",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => array(
                "selfie" => new \CURLFILE($request->selfie->getPathname(),$request->selfie->getClientOriginalExtension(),$request->selfie->getClientOriginalName()),
                "id_card" => new \CURLFILE($request->id_card->getPathname(),$request->id_card->getClientOriginalExtension(),$request->id_card->getClientOriginalName()),
                "selfie_2" => new \CURLFILE($request->selfie_2->getPathname(),$request->selfie_2->getClientOriginalExtension(),$request->selfie_2->getClientOriginalName()),
			),
			CURLOPT_HTTPHEADER => array(
				//"Content-Type:  application/x-www-form-urlencoded",
				"Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHAiOjE2MjUzOTIyMTYsImp0aSI6IjhkOWZmNTFiLTJiYmItNDc4My1iYmI5LTg5ZWMzNGY3MDNmZiIsImlkZW50aXR5IjoiZGV2LmRvY2JveXpAYWFkaGFhcmFwaS5pbyIsImZyZXNoIjpmYWxzZSwiaWF0IjoxNTkzODU2MjE2LCJuYmYiOjE1OTM4NTYyMTYsInVzZXJfY2xhaW1zIjp7InNjb3BlcyI6WyJyZWFkIl19LCJ0eXBlIjoiYWNjZXNzIn0.f0Ea5UmL_DQsSCBF6sWJzU-n7NPT9TL_IkKFY_a-3KQ",
			),
		));

		$getdata=curl_exec($curl);
        $getdata= json_decode($getdata,true);
        $x=(int)$getdata['data']['confidence'];
    

        if($x<=60)
        {
        	return view('facematch',[
    			'data'=>1,
    			'msg'=>"Your Document Not Match With Your Uploading Image",
    			'pesentage'=>round($getdata['data']['confidence'], 4)
    		]);
        }
        else{
        	 return view('facematch',[
    			'data'=>1,
    			'msg'=>"Your Document  Match With Your Uploading Image",
    			'pesentage'=>round($getdata['data']['confidence'], 4)
    		]);
        }
       
    }
}
