@extends('layout.orange')
@section('main_content')

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Detalles del post</h1>
                        <h2>Free html5 templates Made by <a href="http://freehtml5.co" target="_blank">freehtml5.co</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<body>
    <div class="container">
        <div class="about-content">
            <div class="row animate-box">
                <div class="col-md-6 col-md-push-6">
                    <div class="desc">
                        <h3>title: {{ $post['title'] }}</h3>
                        <h3>Autor: {{ $post['author'] }}</h3>
                        <p>Content: {{ $post['content'] }}</p> 
                        <p>created at: {{ $post['created_at'] }}</p>
                    </div>
                    <div class="desc">
                        <h3>Category: {{$post['category']}}</h3></div>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <img class="img-responsive" src="images/img_bg_1.jpg" alt="about">
                </div>
                
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Comentarios</h2>
                <ul class="list-unstyled">
                    @foreach($comments as $comment)
                        <li>
                            <strong>{{ $comment['commenter'] }}</strong> dijo: {{ $comment['comment'] }} ({{ $comment['created_at'] }})
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3>Agregar Comentario</h3>
                <form action="{{ route('addComment', ['post_id' => $post['id']]) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="commenter">Nombre:</label>
                        <input type="text" class="form-control" id="commenter" name="commenter" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comentario:</label>
                        <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Comentario</button>
                </form>
            </div>
        </div>
    </div>


</body>
@endsection