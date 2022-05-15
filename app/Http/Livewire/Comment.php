<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
// use app\Models\Comment;

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




    public function mount($initialComments)
    {
        
        $this->comments = $initialComments;
    }






    public function render()
    {
        return view('livewire.comment');
    }
}
