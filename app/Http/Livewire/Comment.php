<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Comment as CommentModel;

class Comment extends Component
{
    public $newComment;
    public $comments = [
        [
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, vitae!',
            'created_at'=>'3 min ago',
            'creator'=>'Tanvir'
        ]
    ];

    
    
    public function addComment(){

        array_unshift($this->comments,[
            
            'body'=>$this->newComment,
            'created_at'=>Carbon::now()->diffForHumans(),
            'creator'=>'Farhana'
            
        ]);

        $this->newComment = "";

    }




    public function mount()
    {
        $this->comments = CommentModel::all();
    }






    public function render()
    {
        return view('livewire.comment');
    }
}
