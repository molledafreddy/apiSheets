<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Sheets;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Google_Client;
use Google_Service_Sheets;
use Sheets;
use Google;
use Auth;
use Socialite;

class SheetController extends Controller
{

    public function getSheets(Request $request){
        
        Log::info('Ingreso exitoso a sheetController: ');
        $spreadsheetId = '1KP5MOWaQkaCx_59wh5Kb1BrcBPwt36LFR_MWEoPSLqs';
        $sheetId = 'hoja';
       

        
        
        Sheets::setService(Google::make('sheets'));
        Sheets::spreadsheet($spreadsheetId);

        $rows = Sheets::sheet($sheetId)->get();

        $headers = $rows->pull(0);
       
        return view('index')->with([
            'headers' => $headers,
            'rows' => $rows    
        ]);
    }
}
