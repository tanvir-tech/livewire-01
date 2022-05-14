<div>
    Comment here
    <input type="text" wire:model="text">
    <br>
    <h1>{{$text}}</h1>

    <button wire:click="addComment">Add comment</button>

    @foreach ($comments as $comment)
        <p>
            {{$comment["body"]}}
        </p>
        <h4>{{$comment["created_at"]}}------{{$comment["creator"]}}</h4>
    @endforeach
    
</div>
