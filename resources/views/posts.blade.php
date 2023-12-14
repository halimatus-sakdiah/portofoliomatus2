@extends('layouts.main')

@section('container')

<br>
<br>
<br>
<div class="blog">
    <div class="title" data-aos="fade-right"
    data-aos-anchor="#example-anchor"
    data-aos-offset="500"
    data-aos-duration="500">
      Blog
    </div><br><br>


    <nav>
        <ul>
            <li><a href="#project">project</a> </li>
            <li><a href="#image">Image</a></li>
            <li><a href="#vidio">Vidio</a></li>
        </ul>
    </nav>
<br><br><br>



    <section id="project">
    <div class="projects">
      <div class="project">
          Projects
      </div>
            <br><br><br>
    <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-4 col-md-6 col-lg-4 py-4" data-aos="flip-right"
          data-aos-easing="ease-out-cubic"
          data-aos-duration="1000">
            <div class="card" style="width: 18rem;">
              <img src="/img/project1.png" class="card-img-top" alt="...">
                <div class="card-body bg-dark-subtle">
                  <h5 class="card-title">Make Login</h5>
                  <p class="card-text">Project that contains login</p>
                    <!-- bagian slug -->
                    @foreach ($posts as $post)
                              <article class="mb-5">
                                  <a href="/posts/{{ $post->slug }}">
                                      <h2 class="fs-6">{{ $post->title }}</h2>
                                  </a>
                              </article>
                          @endforeach
                </div>
            </div>
          </div>


          <div class="col-md-4 col-md-6 col-lg-4 py-4" data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1500">
            <div class="card" style="width: 18rem;">
                <img src="/img/project2.png" class="card-img-top" alt="...">
                  <div class="card-body bg-danger-subtle">
                    <h5 class="card-title">Admin LTE</h5>
                    <p class="card-text">Project that contains Admin LTE</p>
                    <!-- bagian slug -->
                    @foreach ($posts as $post2)
                              <article class="mb-5">
                                  <a href="/posts/{{ $post2->slug }}">
                                      <h2 class="fs-6">{{ $post2->title }}</h2>
                                  </a>
                              </article>
                    @endforeach
                </div>
            </div>
          </div>


          <div class="col-md-4 col-md-6 col-lg-4 py-4" data-aos="flip-left"
          data-aos-easing="ease-out-cubic"
          data-aos-duration="1000">
            <div class="card" style="width: 18rem;">
                  <img src="/img/project4.png" class="card-img-top" alt="...">
                    <div class="card-body bg-success-subtle">
                      <h5 class="card-title">Portofolio</h5>
                      <p class="card-text">Project that contains My Self</p>

                      <!-- bagian slug -->
                    @foreach ($posts as $post2)
                              <article class="mb-5">
                                  <a href="/posts/{{ $post2->slug }}">
                                      <h2 class="fs-6">{{ $post2->title }}</h2>
                                  </a>
                              </article>
                    @endforeach
                    </div>
              </div>
          </div>
        </div>
    </div>
  </div>

</div>
</section>
   
















<br><br><br><br><br><br><br>
<section id="image">
<div class="images">
      <div class="image">
            Image
      </div>
        <br><br><br>
    <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-4 col-md-6 col-lg-4 py-4" data-aos="fade-up-right" data-aos-easing="ease-out-cubic"
          data-aos-duration="1000">
            <div class="card" style="width: 18rem;">
              <img src="/img/2.png" class="card-img-top" alt="...">
                <div class="card-body bg-dark-subtle">
                  <h5 class="card-title">Tips</h5>
                  <p class="card-text">Tips Learn Coding</p>
                  <a href='{{ route("post2") }}'>Read More</a>
                </div>
            </div>
          </div>
          

          <div class="col-md-4 col-md-6 col-lg-4 py-4" data-aos="zoom-in" data-aos-easing="ease-out-cubic"
          data-aos-duration="1000">
            <div class="card" style="width: 18rem;">
                <img src="/img/22.png" class="card-img-top" alt="...">
                  <div class="card-body bg-danger-subtle">
                    <h5 class="card-title">Become a Programer</h5>
                    <p class="card-text">how to become a programmer</p>
                    <a href='{{ route("post3") }}'>Read More</a>
                </div>
            </div>
          </div>


          <div class="col-md-4 col-md-6 col-lg-4 py-4" data-aos="fade-up-left" data-aos-easing="ease-out-cubic"
          data-aos-duration="1000">
            <div class="card" style="width: 18rem;">
                  <img src="/img/23.png" class="card-img-top" alt="...">
                    <div class="card-body bg-success-subtle">
                      <h5 class="card-title">Motivation</h5>
                      <p class="card-text">Motivation Learn Coding</p>
                      <a href='{{ route("post4") }}'>Read More</a>
                    </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
</section>





<br><br><br><br><br><br><br>
<section id="vidio">
<div class="vidios">
      <div class="vidio">
            Video
      </div>
        <br><br><br>
    <div class="container">
        <div class="row text-center">
          <div class="col-md-4 col-md-6 col-lg-4 col-xs-12 py-4" data-aos="fade-down-right" data-aos-easing="ease-out-cubic"
          data-aos-duration="1000">
            <div class="card" style="width: 18rem;">
                    <video controls>
                        <source src="/vidio/PART1_CRUD.mp4" type="video/mp4">
                             Your browser does not support the video tag.
                    </video>
                <div class="card-body bg-dark-subtle">
                  <h5 class="card-title">laravel</h5>
                  <p class="card-text">Make CRUD (part1)</p>
                </div>
            </div>
          </div>
          

          <br><br>
          <div class="col-md-4 col-md-6 col-lg-4 py-4" data-aos="flip-down" data-aos-easing="ease-out-cubic"
          data-aos-duration="1000">
            <div class="card" style="width: 18rem;">
                    <video controls>
                         <source src="/vidio/PART2_CRUD.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                    </video>
                  <div class="card-body bg-danger-subtle">
                    <h5 class="card-title">laravel</h5>
                    <p class="card-text">Make CRUD (part2)</p>

                </div>
            </div>
          </div>
          <br><br>


          <div class="col-md-4 col-md-6 col-lg-4 py-4" data-aos="fade-down-left" data-aos-easing="ease-out-cubic"
          data-aos-duration="1000">
            <div class="card" style="width: 18rem;">
                    <video controls>
                         <source src="/vidio/PART3_CRUD.mp4" type="video/mp4">
                             Your browser does not support the video tag.
                    </video>
                    <div class="card-body bg-success-subtle">
                      <h5 class="card-title">laravel</h5>
                      <p class="card-text">Make CRUD (part3)</p>
                    </div>
              </div>
          </div>
          <br><br>
        </div>
    </div>
  </div>
</div>
</section>


<br><br><br><br><br><br><br>



@endsection