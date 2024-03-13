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
                        <h3>Titulo</h3>
                        <h3>autor</h3>
                        <p>content</p> 
                        <p>created_at</p>
                    </div>
                    <div class="desc">
                        <h3>Categorias</h3></div>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <img class="img-responsive" src="images/img_bg_1.jpg" alt="about">
                </div>
                
            </div>
        </div>
    </div>
</body>
@endsection