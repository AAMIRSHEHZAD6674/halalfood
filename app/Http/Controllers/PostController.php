<?php

namespace App\Http\Controllers;

use App\Models\TestModel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public  function  index(){

        $data = [
            ['postName'=>'postname1','postDate'=>'2023-01-01','postType'=>'General Type1'],
            ['postName'=>'postname2','postDate'=>'2023-01-02','postType'=>'General Type2'],
            ['postName'=>'postname3','postDate'=>'2023-01-03','postType'=>'General Type3'],
            ['postName'=>'postname4','postDate'=>'2023-01-04','postType'=>'General Type4'],
            ['postName'=>'postname5','postDate'=>'2023-01-05','postType'=>'General Type5'],
            ['postName'=>'postname6','postDate'=>'2023-01-06','postType'=>'General Type6'],


        ]

        ;
        return view('posts')->with('data',$data);
    }


    public  function  show(){

        $data =TestModel::all();
           return view('show',[
             'data'=>$data,
           ]);



    }

    public  function  deletePost($id){


        return id;
    }
}
