@extends('layouts.main')

@section('container')


<article>
    <h2 style="color: white;">{{ $post->title }}</h2>



<p class="text-center" style="margin-top: 100px; font-size:20px; color: white;">halamannya berisi studi kasus Proyek Sumber Terbuka Dopefolio yang mencakup Ikhtisar Proyek, Alat yang Digunakan, dan Tautan Langsung ke produk resmi</p>
<br><br>
<div class="tombolpost">
    <button type="button" class="btn btn-primary btn-lg">Project Link</button>
</div>

<br><br><br><br><br>
<img src="/img/project1.png" class="img-fluid" alt="..."><br><br>
<img src="/img/project2.png" class="img-fluid" alt="..."><br><br>
<img src="/img/project4.png" class="img-fluid" alt="...">
<br><br><br><br><br>
<div class="overview">
    <h2>Project Overview</h2>
    <p>{!! $post->body !!}</p>
</div>

<div class="tools">
    <h2>Tools</h2>
    <a class="btn btn-primary" href="#" role="button">HTML</a>
    <a class="btn btn-primary" href="#" role="button">CSS</a>
    <a class="btn btn-primary" href="#" role="button">JAVA SCRIPT</a>
    <a class="btn btn-primary" href="#" role="button">LARAVEL</a>
    
</div>


</article>











<br><br><br><br><br><br>

    <button type="button" class="btn btn-light">
        <a href="/posts"> Back To Blog</a>
    </button>


<br><br><br><br><br><br><br><br><br><br>
@endsection