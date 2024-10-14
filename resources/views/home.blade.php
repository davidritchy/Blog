
@extends('master')
@section('title','Home')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/plage.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Bienvenue sur mon blog</h1>
                            <span class="subheading">Ici vous lirez tous mes experiences de voyage</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="/article">
                            <h2 class="post-title">Mon premier voyage en Australie</h2>
                            <h3 class="post-subtitle">Oh je me souviens encore de ce jour la...</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">admin roger</a>
                            on October 13, 2024
                        </p>
                    </div>
                                        
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase invisible" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
        @endsection
    @section('js')

    @endsection
    