<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Sheets;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Google_Client;
use Google_Service_Sheets;
use Revolution\Google\Sheets\Sheets;
use Google;
use Auth;
use Socialite;
class SheetController extends Controller
{


    public function getSheets(Request $request){
        $spreadsheetId = '1KP5MOWaQkaCx_59wh5Kb1BrcBPwt36LFR_MWEoPSLqs';
        $sheet_id = 'Hoja 1';
        $redirect_uri ='http://apisheets.dev.com';
        //$token = $request->user();
        //dd($user);
        $client = new Google_Client();
        $client->setApplicationName(config('google.'.$_ENV['GOOGLE_APPLICATION_NAME']));
        $client->setClientId(config('google.'.$_ENV['GOOGLE_CLIENT_ID']));
        $client->setScopes([config('google.'.$_ENV['SPREADSHEETS_SCOPE'])]);
        $client->setAuthConfig(config('google.KEY_FILE'));
        $client->useApplicationDefaultCredentials();
        //dd($client);
        if ($client->isAccessTokenExpired()) {
            $client->refreshTokenWithAssertion();
        }

        $service_token = $client->getAccessToken();

        $service = new \Google_Service_Sheets($client);

        $sheets = new Sheets();
        $sheets->setService($service);

        $rows = $sheets->spreadsheet('SpreadsheetID')->sheet('Sheet name')->all(); //spreadsheetID is from URL of your google spreadsheet, sheet name is sheet inside it
        dd($rows); //array of rows and columns





    		Sheets::setService(Google::make('sheets'));
			dd(Sheets::spreadsheet($spreadsheetId));
            $rows = Sheets::sheet('hoja')->get();

            
        Google::setAccessToken($token);

        Sheets::setService(Google::make('sheets'));
        Sheets::setDriveService(Google::make('drive'));

        $spreadsheets = Sheets::spreadsheetList();
        

			
    	$token = $request->user()->access_token;

			dd($values);



	}


    
}
