<div>
    Comment here :
    <input type="text" wire:model.debounce.500ms="newComment">{{$newComment}}
    <br>
    <button wire:click="addComment">Add comment</button>

    @foreach ($comments as $comment)
        <p>
            {{$comment["body"]}}
        </p>
        <h4>{{$comment["created_at"]}}------{{$comment["creator"]}}</h4>
    @endforeach
    
</div>
