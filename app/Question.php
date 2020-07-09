<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Question extends Model
{
    protected $guarded = [];

    public function upvote_count()
    {
        $count = DB::table('vote_questions')
            ->where('question_id', $this->id)
            ->where('voted', '=', true)
            ->count();
        return $count;
    }

    public function downvote_count()
    {
        $count = DB::table('vote_questions')
            ->where('question_id', $this->id)
            ->where('voted', '=', false)
            ->count();
        return $count;
    }

    public function user()
    {
        return $this->belongsTo('\App\User');
    }
    public function tag(){
        return $this->belongsToMany('App\Tag','question_tag','question_id','tag_id');
    }
//     public function comment_question(){
//          return $this->belongsTo('App\Comment_Question','comment_on_question','question_id','user_id');
//  }

    public function point($vote)
    {
        if ($vote == 'upvote') {
            $user = $this->user;
            $user->point += 10;
            $user->save();
        } else if ($vote == 'downvote') {
            $user = $this->user;
            $user->point -= 1;
            $user->save();
        }
    }

    public function upvote($upvote = true, $vote = 'upvote')
    {
        $upvote = $this->votes()->updateOrCreate([
            'user_id' => auth()->id(),
        ], [
            'voted' => $upvote,
        ]);
        if ($upvote->wasRecentlyCreated) {
            $this->point($vote);
        }

    }

    public function downvote()
    {
        return $this->upvote(false, 'downvote');
    }

    public function unvote($vote)
    {
        if ($vote == 'upvote') {
            $this->point($vote);
        } else {
            $this->point('downvote');
        }

        $this->votes()->where('user_id', auth()->id())->first()->delete();
    }

    public function votes()
    {
        return $this->hasMany(VoteQuestion::class);
    }

}