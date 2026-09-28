<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index() {

        $authors = Author::all();

        return view('authors/index', [ 'authors' => $authors ]);
    }

    public function create () {

        return view('authors/create');
    }

    public function store(Request $request) {


        try {

            $author = new Author();
            $author->first_name = $request->first_name;
            $author->last_name = $request->last_name;
            $author->save();

            return redirect()->action([AuthorsController::class, 'index']);


        } catch (Exception $ex) {

            Log::error($ex);
            return redirect()->back();
        }
    }

    #edit

    public function edit($id) {

        $author = Author::find($id);

        return view('authors/edit', ['author' => $author ]);

    }


    public function update(Request $request) {


        try {

            $author = Author::find($request->id);

            $author->first_name = $request->first_name;
            $author->last_name = $request->last_name;
            $author->save();

            return redirect()->action([AuthorsController::class, 'index']);


        } catch (Exception $ex) {

            Log::error($ex);
            return redirect()->back();
        }
    }



}
