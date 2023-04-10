<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatsController extends Controller
{
    public function tokopedia(Request $request)
    {
        return view('chats.tokopedia');
    }
}