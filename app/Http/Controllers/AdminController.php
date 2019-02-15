<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use App\Game;
use App\Genre;
use App\Review;

class AdminController extends Controller
{
    public function showDashboard(){
        $genres = Genre::all();
        return view('admin.admindashboard', compact('genres'));
    }

    public function saveGame(Request $request){
        //input name from /addgame form
        $rules = array(
            'title' => 'required',
            'developer' => 'required',
            'date_released' => 'required',
            'content' => 'required',
            'image_path' => 'required|image|',
            'genre' => 'required'
        );
            //to validate $request from form
        $this->validate($request, $rules);

        $game = new Game;
        $game->title = $request->title;
        $game->developer = $request->developer;
        $game->date_released = $request->date_released;
        $game->content = $request->content;
        $game->genre_id = $request->genre;

        $image = $request->file('image_path');
        $image_name = time(). "." .$image->getClientOriginalExtension(); //151688578.jpg
        $destination = "images/";
        $image->move($destination, $image_name);
        $game->image_path = $destination.$image_name;

        $game->save();
        Session::flash("addGame", "Game added.");
        return redirect ('/admindashboard');
    }

    public function deleteGame($id){
        $delete_game = Game::find($id);

        $delete_game->reviews()->detach();//need to detach from pivot table
        // $delete_game->reviews()->delete(); //delete from review still not working
        $delete_game->delete();
        Session::flash("deleteGame", "Game deleted.");
        return redirect('/menu');
    }

    // public function editGame($id){
    //     $edit_game = Game::find($id);
    //     $genres = Genre::all();
    //     return view('/admin.edit', compact('edit_game', 'genres'));
    // }

    public function updateGame($id, Request $request){
        $update_game = Game::find($id);
        $genres = Genre::all();

        $rules = array(
            'title' => 'required',
            'developer' => 'required',
            'date_released' => 'required',
            'content' => 'required',
            // 'image_path' => 'required|image|',
            'genres' => 'required'
        );

        $this->validate($request, $rules);

        $update_game->title         = $request->title;
        $update_game->developer     = $request->developer;
        $update_game->date_released = $request->date_released;
        $update_game->content       = $request->content;
        // $update_game->image_path    = $request->image_path;
        $update_game->genre_id      = $request->genres;

        if($request->file('image_path') != null){
            $image = $request->file('image_path');
            $image_name = time().".".$image->getClientOriginalExtension();
            $destination = "images/";   
            $image->move($destination, $image_name);
            $update_game->image_path = $destination.$image_name;
        } 

        $update_game->save();
        Session::flash("updatedGame", "Game Updated.");
        return redirect('/menu/'.$id);
    }
}
