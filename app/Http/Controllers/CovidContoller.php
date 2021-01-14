<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DB;
class CovidContoller extends Controller
{
    public function WorldData()
    {
    	// $api_world_data='https://api.covid19api.com/world/total';
		// $responce_world_data=	Http::get($api_world_data);
		// $all_world_data=$responce_world_data->json();

		// $api_country_name='https://api.covid19api.com/countries';
		// $responce_country_name=	Http::get($api_country_name);
		// $all_country_name=$responce_country_name->json();

		$api_world_data='https://api.covid19api.com/summary';
		$responce_world_data=Http::get($api_world_data);
		$all_world_data=$responce_world_data->json();
	
    return view('covid_home',[
    	'all_data'=>$all_world_data,
    ]);
    }


    public function SearchCountry()
    {
    		$api='https://api.covid19api.com/countries';
    		$responce=Http::get($api);
    		$country=$responce->json();

    		$api_india='https://api.covid19api.com/total/country/in';
    		$responce_india=Http::get($api_india);
    		$country_india=$responce_india->json();


    	    return view('country',[
    	    	'countries'=>$country,
    	    	'country_india'=>$country_india
    	    ]);
    }


    public function GetCountry(request $request)
    {
    	$country_code = $request->val;

    		$api_india='https://api.covid19api.com/total/country/'.$country_code;
    		$responce_india=Http::get($api_india);
    		$country_india=$responce_india->json();

    		return $country_india;
    }

    public function SearchStates($value='')
    {
    		$api='https://api.covid19india.org/v4/data.json';
    		$responce=Http::get($api);
    		$state=$responce->json();
    		$state=$state['BR']['total'];

    		$api_day_state='https://api.covid19india.org/states_daily.json';
    		$responce_day_state=Http::get($api_day_state);
    		$state_daily=$responce_day_state->json();
    		$l=count($state_daily['states_daily']);
    		$current_state_status=$state_daily['states_daily'][$l-1]['br'];
    		$state_name='br';
    	    return view('india_states',[
    	    	'state'=>$state,
    	    	'current_state_status'=>$current_state_status,
    	    	'state_daily'=>$state_daily,
    	    	'state_name'=>$state_name
    	    ]);
    }



    public function SelectStare(Request $request)
    {
    	$state_name=$request->state_name;



    		$api='https://api.covid19india.org/v4/data.json';
    		$responce=Http::get($api);
    		$state=$responce->json();
    		$state=$state[$state_name]['total'];

    		$state_name=strtolower($state_name);
    		$api_day_state='https://api.covid19india.org/states_daily.json';
    		$responce_day_state=Http::get($api_day_state);
    		$state_daily=$responce_day_state->json();
    		$l=count($state_daily['states_daily']);
    		$current_state_status=$state_daily['states_daily'][$l-1][$state_name];
    		
    	    return view('india_states',[
    	    	'state'=>$state,
    	    	'current_state_status'=>$current_state_status,
    	    	'state_daily'=>$state_daily,
    	    	'state_name'=>$state_name
    	    ]);
    }


    public function StateName(Request $request)
    {
    	$x=$request->val;

    	$state=DB::table('state_code')->where('State_code', $x)->get();

    	return $state;
    }

   public function StateDistrictName()
   {
   		$api='https://api.covid19india.org/v4/data.json';
    	$responce=Http::get($api);
    	$district=$responce->json();
    	$district=$district['BR']['districts']['Bhojpur']['total'];

    	$state_name='br';
    	$district_name='Bhojpur';
   		return view('state_district',[
   				'district'=>$district,
   				'state_name'=>$state_name,
   				'district_name'=>$district_name
   		]);
   }

   public function DistrictName(Request $request)
   {
   		$x=$request->val;
   		$district=DB::table('statedistrict')->where('State_code',$x)->get();
   		return $district;
   }

   public function DistrictData(Request $request)
   {
   		$district_name=$request->district_name;
   		$state=$request->state_name;


   		$api='https://api.covid19india.org/v4/data.json';
    	$responce=Http::get($api);
    	$district=$responce->json();
    	$district=$district[$state]['districts'][$district_name]['total'];

    	try {
    	     $district['deceased'];
    	    } catch (Throwable $e) {
    	        report($e);

    	        return false;
    	    }

    	$state_name=strtolower($state);
    	return view('state_district',[
   				'district'=>$district,
   				'state_name'=>$state_name,
   				'district_name'=>$district_name
   		]);
   }



   public function CountryDate()
   {
   		$api='https://api.covid19api.com/countries';
    	$responce=Http::get($api);
    	$country=$responce->json();


    	$api_india='https://api.covid19api.com/country/in?from=2020-02-20&to=2020-08-04';
    	$responce_india=Http::get($api_india);
    	$country_india=$responce_india->json();
    	
    	$from_date='2020-02-20';
    	$to_date='2020-08-04';
		 return view('world_from_to',[
    	    	'countries'=>$country,
    	    	'country_india'=>$country_india,
    	    	'from_date'=>$from_date,
    	    	'to_date'=>$to_date
    	    ]);

   }


   public function GetCountryDate(Request $request)
   {
   			$country_code=$request->val[0];
   			$from_date_fix=$request->val[1];
   			$to_date_fix=$request->val[2];

   			

   	    	$api_india='https://api.covid19api.com/country/'.$country_code.'?from='.$from_date_fix.'&to='.$to_date_fix;
   	    	$responce_india=Http::get($api_india);
   	    	$country_india=$responce_india->json();
   	    	
   	    	
   			 return [
   	    	    	'country_india'=>$country_india,
   	    	    ];
   }


   public function IndiaDate()
   {
   		return view('india_from_to');
   }
}

