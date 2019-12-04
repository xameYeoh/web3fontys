<div class="container">

    <div class="row">
<!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">@yield('title', 'Post')</h1>


            <!-- Preview Image -->
            

            

            
            <blockquote class="blockquote">
                <p class="mb-0">@yield('content')</p>
                
            </blockquote>

            <hr>
            
                <div>
                @for($i = 0; $i <= 3; $i++) 
                    <li><a href="/posts/{{$posts[$i]->id}}">{{$posts[$i]->title}}</li>
                @endfor
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->