<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comment extends Component
{
    public $text;
    public $comments = [
        [
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, vitae!',
            'created_at'=>'3 min ago',
            'creator'=>'Tanvir'
        ]
    ];

    
    
    public function addComment(){

        array_unshift($this->comments,[
            
            'body'=>'vitae!',
            'created_at'=>'1 min ago',
            'creator'=>'Farhana'
            
        ]);

    }






    public function render()
    {
        return view('livewire.comment');
    }
}
