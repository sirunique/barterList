<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDoc;
use App\AdminDoc;

class DocController extends Controller
{
    public function userDoc()
    {
        $userDocs = UserDoc::all();
        return view('admin.doc.userdoc', [
            'userDocs' => $userDocs
        ]);
    }

    public function addUserDoc(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $addoc = UserDoc::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        $addoc->save();

        return redirect()->back();
    }

    public function destroyUserDoc($id)
    {
        $userDocs = UserDoc::where('id', '=', $id)->first();

        $userDocs->delete();

        return redirect()->back();
    }




    public function adminDoc()
    {
        $adminDocs = AdminDoc::all();
        return view('admin.doc.admindoc', [
            'adminDocs' => $adminDocs
        ]);
    }

    public function addAdminDoc(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $create = AdminDoc::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        $create->save();

        return redirect()->back();
    }

    public function destroyAdminDoc($id)
    {
        $userDocs = AdminDoc::where('id', '=', $id)->first();

        $userDocs->delete();

        return redirect()->back();
    }
}
