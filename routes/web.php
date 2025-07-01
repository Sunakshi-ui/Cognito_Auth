<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

Route::get('/callback', function (Request $request) {
    $grantCode = $request->input('code');

    $tokenResponse = Http::asForm()->withHeaders([
        'Content-Type' => 'application/x-www-form-urlencoded',
        'Authorization' => 'Basic SECRET',
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
