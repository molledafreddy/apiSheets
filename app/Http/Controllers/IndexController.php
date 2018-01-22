<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $token = $request->user()->access_token;
        Google::setAccessToken($token);
        Sheets::setService(Google::make('sheets'));
        Sheets::setDriveService(Google::make('drive'));
        $spreadsheets = Sheets::spreadsheetList();
        return view('sheets.index')->with(compact('spreadsheets'));
    }
}
