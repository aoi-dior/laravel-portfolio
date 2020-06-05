<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    

    private $fname;

    public function __construct()
    {
        $this->fname = 'sample.txt';
    }


    public function index() {
        $data = [
            'msg'=>'これはHelloを利用したサンプルです。',
        ];
        return view('hello.index', $data);
    }

    public function show()
    {
        $records = DB::select('select * from images');
        $data = [
            'data' => $records,
        ];
        return view('hello.show', $data);
    }

    public function delete(Request $request)
    {
        $records = DB::select('select * from images');
        $data = [
            'data' => $records,
        ];

        $param = [
            'id' => 20,
        ];
        $del_record = DB::select("select * from images where id = :id", $param);

        foreach($del_record as $value)
        {
            $file_name = $value->file_name;
            $url = $value->url;
        }


        var_dump($file_name);
        var_dump($url);

        $dir = 'images';
        $path = '/' . $dir . '/' . $file_name;
        var_dump($path);
        
        
        Storage::disk('s3')->delete($path);

        return view('hello.delete', $data);
    }








    public function storage_index()
    {
        $sample_msg = $this->fname;
        $sample_data = Storage::get($this->fname);

        $data = [
            'msg' => $sample_msg,
            'data' => explode(PHP_EOL, $sample_data),
        ];

        var_dump($data);
    
        return view('hello.storage_index', $data);
    }

    public function other(string $msg)
    {
        Storage::append($this->fname, $msg);

        return redirect()->action('HelloController@storage_index');

    }
}
