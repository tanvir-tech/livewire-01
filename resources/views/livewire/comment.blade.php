<div>
    Comment here :
    <input type="text" wire:model.debounce.500ms="newComment">{{$newComment}}
    <br>
    <button wire:click="addComment">Add comment</button>

    @foreach ($comments as $comment)
        <p>
            ::{{$comment["body"]}}
        </p>
        
        ------Created at :{{$comment->created_at->diffForHumans()}}
        <br>
        <h4>------{{$comment["creator"]["name"]}}</h4>
        <br>
        ------{{$comment["creator"]}}
    @endforeach
    
</div>
