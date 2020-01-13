<?php

namespace App\Http\Controllers\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAvtarController extends Controller
{
    /**
     * Update the avatar for the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        $path = $request->file('avatar')->store('avatars');

        return $path;
    }
}