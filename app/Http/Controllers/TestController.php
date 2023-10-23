<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostControllerRequest;
use App\Models\TestModel;
use Illuminate\Http\Request;

class TestController extends Controller
{


    public function addPost(PostControllerRequest $request)
    {


        $data = [
            'name' => $request->name,
            'code' => $request->code,

        ];
        TestModel::create($data);
        return redirect('/show')->with('message','Data saved');
    }
}
