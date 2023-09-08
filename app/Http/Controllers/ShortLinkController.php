<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;
use Str;

class ShortLinkController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'input' => 'required|url',
        ]);
        $clientIP = request()->ip();
        $ranString = Str::random(6);
        $input['link'] = $request->input;
        $input['code'] = $ranString;
        $input['creator_ip'] = $clientIP;

        ShortLink::create($input);

        return response([
            'success' => 'Link Generated!.',
            'link' => 'http://url-shortener.test/' . $ranString,
        ]);
    }

    public function shortenLink($code)
    {
        $find = ShortLink::where('code', $code)->first();
        $hit = $find->hits;
        $find->hits = $hit + 1;
        $find->save();
        return redirect($find->link);
    }
}
