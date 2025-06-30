<?php
/*
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function (Request $request) {
    dd($request->get('code'));

    //return view('index');
}); 
*/
/*
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/callback', function (Request $request) {
    $grantCode = $request->input('code');
    $response = Http::asForm()->withHeaders([
        'Content-Type'=>'application/x-www-form-urlencoded',
        'Authorization'=>'Basic MXRpZW4xcHFvb2loc2NjYWQ0amVyaWZrYjQ6MW4za2xnc2lzN2IzcTc1M21uamM1OWFxdjdqOGZ1NzUwc3JranY2cGJvMHA3bDd0dnM1Mw=='

    ])->post('https://ap-south-1h2cdtbthk.auth.ap-south-1.amazoncognito.com/oauth2/token',[
        'grant_type'=>'authorization_code',
        'code'=>$grantCode,
        'redirect_uri'=>'http://localhost:8000/callback'

    ]);


    //dd($grantCode, $response->status(), $response->body());
    
    //return redirect('userinfo')->with(['data'=>json_decode($response)]);

    $decodedResponse = json_decode($response);
    $accessToken = $decodedResponse->access_token;
    $response = Http::asForm()->withHeaders([
        'Content-Type'=>'application/x-www-form-urlencoded',
        'Authorization'=>'Bearer '.$accessToken

    ])->get('https://ap-south-1h2cdtbthk.auth.ap-south-1.amazoncognito.com/oauth2/userInfo');

    $data = $userInfoResponse;

    return view('index',['data'=>$data]);
    
    //return view('index',['data'=>json_decode($response)]);

});

/*
Route::get('/userinfo', function () {
    dd(session()->get('data'));
});


/*
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

Route::get('/callback', function (Request $request) {
    $grantCode = $request->input('code');

    // Step 1: Exchange code for tokens
    $tokenResponse = Http::asForm()->withHeaders([
        'Content-Type' => 'application/x-www-form-urlencoded',
        'Authorization' => 'Basic MXRpZW4xcHFvb2loc2NjYWQ0amVyaWZrYjQ6MW4za2xnc2lzN2IzcTc1M21uamM1OWFxdjdqOGZ1NzUwc3JranY2cGJvMHA3bDd0dnM1Mw==',
    ])->withOptions(['verify' => false]) // Only for local development
      ->post('https://ap-south-1h2cdtbthk.auth.ap-south-1.amazoncognito.com/oauth2/token', [
        'grant_type' => 'authorization_code',
        'code' => $grantCode,
        'redirect_uri' => 'http://localhost:8000/callback',
    ]);

    //dd($tokenResponse->status(), $tokenResponse->body());


    // Step 2: Decode token response
    $decoded = json_decode($tokenResponse->body());
    $accessToken = $decoded->access_token ?? null;

    if (!$accessToken) {
        return response()->json(['error' => 'Access token not received'], 400);
    }

    // Step 3: Use access token to get user info
    $userInfoResponse = Http::withHeaders([
        'Authorization' => 'Bearer ' .$accessToken,
    ])->withOptions(['verify' => false]) // Again, only for local dev
      ->get('https://ap-south-1h2cdtbthk.auth.ap-south-1.amazoncognito.com/oauth2/userInfo');

    $userInfo = json_decode($userInfoResponse->body());

    // Step 4: Pass user info to view
    return view('index', ['data' => $userInfo]);
    
});
*/
/*

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

Route::get('/callback', function (Request $request) {
    $grantCode = $request->input('code');

    $tokenResponse = Http::asForm()->withHeaders([
        'Content-Type' => 'application/x-www-form-urlencoded',
        'Authorization' => 'Basic MXRpZW4xcHFvb2loc2NjYWQ0amVyaWZrYjQ6MW4za2xnc2lzN2IzcTc1M21uamM1OWFxdjdqOGZ1NzUwc3JranY2cGJvMHA3bDd0dnM1Mw==',
    ])
    ->withOptions(['verify' => false]) // For local development only
    ->post('https://ap-south-1h2cdtbthk.auth.ap-south-1.amazoncognito.com/oauth2/token', [
        'grant_type' => 'authorization_code',
        'code' => $grantCode,
        'redirect_uri' => 'http://localhost:8000/callback',
    ]);

    // Decode and dump the access token
    $decoded = json_decode($tokenResponse->body());
    $accessToken = $decoded->access_token ?? null;
    $userInfoResponse = Http::withHeaders([
        'Authorization' => 'Bearer ' .$accessToken,
    ])->get('https://ap-south-1h2cdtbthk.auth.ap-south-1.amazoncognito.com/oauth2/userInfo');

    $data = json_decode($userInfoResponse->body());
});
*/

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

Route::get('/callback', function (Request $request) {
    $grantCode = $request->input('code');

    $tokenResponse = Http::asForm()->withHeaders([
        'Content-Type' => 'application/x-www-form-urlencoded',
        'Authorization' => 'Basic MXRpZW4xcHFvb2loc2NjYWQ0amVyaWZrYjQ6MW4za2xnc2lzN2IzcTc1M21uamM1OWFxdjdqOGZ1NzUwc3JranY2cGJvMHA3bDd0dnM1Mw==',
    ])
    ->withOptions(['verify' => false]) // Only for local development
    ->post('https://ap-south-1h2cdtbthk.auth.ap-south-1.amazoncognito.com/oauth2/token', [
        'grant_type' => 'authorization_code',
        'code' => $grantCode,
        'redirect_uri' => 'http://localhost:8000/callback',
    ]);

    $decoded = json_decode($tokenResponse->body());
    $accessToken = $decoded->access_token ?? null;

    if (!$accessToken) {
        return response()->json(['error' => 'Access token not received'], 400);
    }

    $userInfoResponse = Http::withHeaders([
        'Authorization' => 'Bearer ' . $accessToken,
    ])
    ->withOptions(['verify' => false])
    ->get('https://ap-south-1h2cdtbthk.auth.ap-south-1.amazoncognito.com/oauth2/userInfo');

    $data = json_decode($userInfoResponse->body());

    return view('index', ['data' => $data]);
});
