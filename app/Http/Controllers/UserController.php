<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use App\Genre;
use App\Game;
use App\User;
use App\Review;
use Auth;

class UserController extends Controller
{
    public function showMenu(){
    	$genres = Genre::all();
    	$games = Game::all();
        // $reviews = Review::withCount('comments')->get();
        // foreach(){
            
        // }
            // foreach($games as $game){
            //     $game_id = $game->id;
            //     $reviews = Review::all()
            //     ->where('game_id', $game_id)
            //     ->get();
            // }
        

    	// dd($genres);
    	return view('/users.menu', compact('genres', 'games', 'reviews'));
    }

    public function showGame($id){
    	$show_game = Game::find($id);
        $reviews = Review::all();

        return view('/users.game', compact('show_game', 'reviews'));

        // $reviews = Review::where('game_id', $id)->get();
    	
    }

    public function reviewGame($gameid, Request $request){
        $review = new Review;
        $review->user_id = Auth::user()->id;
        $review->save();

        $review->games()->attach($gameid, ['review_id'=>$review->id, 'rating' => $request->rating, 'comment' => $request->comment]);     
        Session::flash("addReview", "Review added successfully!");
        return redirect("/menu/$gameid");
    }

    public function showComment(){
        $reviews = Review::all();
        // dd($reviews);
        return view ('/users.comment', compact('reviews'));
    }

    public function deleteReview($id){ //should I make a request?
        $delete_review = Review::find($id);
        // dd($delete_review);
        // $delete_review = Review::where('id',$id)->delete();
        // $gameid = $delete_review->game_id; //wrong! - (calling game_id in pivot)
        // dd($delete_review);

        $delete_review->games()->detach(); //need to detach from pivot table
        $delete_review->delete($id);
        Session::flash("deletedReview", "Review has been deleted.");
        return back();

        // return view('/menu/{id}/delete', compact('delete_review'));

    }

    public function editReview($id){
        $edit_review = Review::find($id);
        // foreach($edit_review->games as $game){
            return view('/users.editReview', compact('edit_review'));
        // }

    }

    public function updateReview($id, Request $request){
        $update_review = Review::find($id);
        // foreach($update_review->games as $game){
            
                // $rules = array(
                //     'comment' => 'required',
                //     'gameid' => 'required'
                // );

                // $this->validate($request, $rules);
                $gameid = $request->gameid;
                $update_review->games()->updateExistingPivot($gameid, ['comment' => $request->comment]);

                

                // $game()withPivot->comment = $request->comment;
            
        // }

            // $update_review ->save();
            Session::flash("updatedReview", "Comment updated!");
            return redirect('/menu/'. $gameid);

       

        // $update_review->games()->attach('$game_id', ['review_id' => $id, 'rating'=> $request->rating, 'comment' => $request->comment]);
        // $update_review->save();

        // return redirect('/users.game'.$id);
        
    }

}
