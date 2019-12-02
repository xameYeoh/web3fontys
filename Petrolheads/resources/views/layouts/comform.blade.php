<!-- Comments Form -->
<div class="card my-4">
    <h5 class="card-header">Leave a Comment:</h5>
    <div class="card-body">

        <form method="POST" action="/posts/{{$post->id}}/comments">
            @csrf

            <div class="form-group">
                <textarea class="form-control" name="content" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Comment</button>
            
        </form>

    </div>
</div>
