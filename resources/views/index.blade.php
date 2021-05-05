@extends('layouts.header')

@section('content')
<!-- site content
        ================================================== -->
        <div class="s-content">

            <div class="masonry-wrap">

                <div class="masonry">

                    <div class="grid-sizer"></div>
                    @foreach ($post as $post)

                    <article class="masonry__brick entry format-standard animate-this">

                        <div class="entry__thumb">
                            <a href="single-standard.html" class="entry__thumb-link">
                                <img src="/{{$post->image}}"
                                        srcset="/{{$post->image}} 1x, /{{$post->image}} 2x" alt="">
                            </a>
                        </div>

                        <div class="entry__text">
                            <div class="entry__header">

                                <h2 class="entry__title"><a href="single-standard.html">{{$post->titre}}</a></h2>
                                <div class="entry__meta">
                                    <span class="entry__meta-cat">
                                        <a href="category.html">Design</a>
                                        <a href="category.html">Photography</a>
                                    </span>
                                    <span class="entry__meta-date">
                                        <a href="single-standard.html">Apr 29, 2019</a>
                                    </span>
                                </div>

                            </div>
                            <div class="entry__excerpt">
                                <p>
                                    {{$post->content}}
                                </p>
                            </div>

                            <a href="{{route("post.edit",$post->id)}}"><button type="submite" class="btn btn-success" >modifier</button></a>
                            <form action="{{route("post.destroy",$post->id)}}" method="POST" enctype="multipart/form-data">@method('DELETE') <button type="submite" class="btn btn-danger" >supprimer</button></form>

                        </div>

                    </article> <!-- end article -->
                    @endforeach

                    <article class="masonry__brick entry format-quote animate-this">

                        <div class="entry__thumb">
                            <blockquote>
                                <p>Good design is making something intelligible and memorable. Great design is making something memorable and meaningful.</p>

                                <cite>Dieter Rams</cite>
                            </blockquote>
                        </div>

                    </article> <!-- end article -->

                </div> <!-- end masonry -->

            </div> <!-- end masonry-wrap -->


        </div> <!-- end s-content -->


@endsection
