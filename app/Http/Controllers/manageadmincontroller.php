<?php

namespace App\Http\Controllers;


use App\Models\new_admin;
use Illuminate\Http\Request;

class manageadmincontroller extends Controller
{
    public function index(){
        $admins = new_admin::query()->get();
        return view('admin.listadmin', [
            'admins' => $admins
        ]);
    }

    public function store(){
        return view('admin.storeadmin');
    }

    public function create(Request $rq){
        $admins = [
            'nama' => $rq->input('nama'),
            'email' => $rq->input('email'),
            'password' => $rq->input('password')
        ];

        new_admin::query()->create($admins);
        return redirect(route('admin.listadmin'));
    }

    public function detail($id){
        $admin =  new_admin::query()->where('id', $id)->first();
        return view('admin.detail');
    }

    public function showupdate($id){
        $admin =  new_admin::query()->where('id', $id)->first();
        return view('admin.updateadmin', [
            'admins' => $admin
        ]);
    }

    public function update(Request $rq, $id){
        $admins = [
            'nama' => $rq->input('nama'),
            'email' => $rq->input('email'),
            'password' => $rq->input('password')
        ];

        new_admin::query()->where('id', $id)->update($admins);
        return redirect(route('admin.listadmin'));
    }

    public function delete($id){
        $admin = new_admin::query()->where('id', $id)->delete();
        return redirect()->back();
    }
}
