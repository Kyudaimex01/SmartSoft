@extends('layouts.syslayout')

@section('content')

    <section class="posts container">

        @foreach($posts as $post)
            <article class="post no-image">
                <div class="content-post">
                    <header class="container-flex space-between">
                        <div class="date">
                            <span class="c-gray-1">{{ $post->published_at->format('M d') }}</span>
                        </div>
                        <div class="post-category">
                            <span class="category text-capitalize">{{ $post->category->name }}</span>
                        </div>
                    </header>
                    <h1>{{ $post->title }}</h1><!--Presentacion-->
                    <div class="divider"></div>
                    <p>{{ $post->excerpt }}</p>
                    <footer class="container-flex space-between">
                        <div class="read-more">
                            <a href="#" class="text-uppercase c-green">mas...</a>
                        </div>
                        <!--    <div class="tags container-flex">
                            estas lineas se trataban sobre estiquetas, pero no pude manejarlas(FER)
                            </div> -->
                    </footer>
                </div>
            </article>
    @endforeach

    </section><!-- fin del div.posts.container -->


    <div class="pagination">
        <ul class="list-unstyled container-flex space-center">
            <li><a href="#" class="pagination-active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
        </ul>
    </div>

@endsection

