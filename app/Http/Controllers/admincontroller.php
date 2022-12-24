<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\{ Request, Response };
use App\Helpers\HttpClient;
use Illuminate\Support\Facades\Hash;

class admincontroller extends Controller
{
    public function login(Request $rq){
        if($rq->method() == "GET"){
            return view('login');
        }

        $email = $rq->input('email');
        $password = $rq->input('password');

        $admin = admin::query()->where('email', $email)->first();
        if($admin == null){
            return redirect()->back()->withErrors([
                "message" => "Email Tidak Ditemukan"
            ]);
        }

        if(!Hash::check($password, $admin->password)){
            return redirect()->back()->withErrors([
                "message" => "Password Salah"
            ]);
        }

        if(!session()->isStarted()) session()->start();
            session()->put("logged", "yes", true);
            session()->put("idadmin", $admin->id);
            return redirect()->route("welcome");

    }

    public function logout(){
        session()->flush();
        return redirect(route('login'));
    }

    public function index(){
        $responseAspirasi = HttpClient::fetch(
            "GET",
            "http://127.0.0.1:9000/api/Aspirasi"
        );
        $aspirasi = $responseAspirasi['data'];
        return view('admin.list', [
            'title' => 'test',
            'icon' => 'test',
            "aspirasi" => $aspirasi
        ]);
    }

    public function show($id){
        $responseAspirasi = HttpClient::fetch(
            "GET",
            "http://127.0.0.1:9000/api/Aspirasi/" . $id
        );
        $aspirasi = $responseAspirasi['data'];
        return view('admin.detail', [
            'title' => 'test',
            'icon' => 'test',
            "aspirasi" => $aspirasi
        ]);
    }
}