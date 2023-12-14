@extends('layouts.main')

@section('container')


<br>
<br>
<br>
<section id="about">
   
        <div class="group">
        <div class="title" data-aos="fade-right"
        data-aos-anchor="#example-anchor"
        data-aos-offset="500"
        data-aos-duration="500"> About Me </div> <br> <br>
        <img src="/img/profilem.png" alt="provilem" width="300" height="300" data-aos="zoom-in-right"
        data-aos-duration="2000">

        <div class="isi">
            <p>My name is Halimaus sakdiah, i'm a student at vocational high school 2 bangkalan, I majored in software engineering <br> here I develop a Web that focuses on Frontend and backend building Frontend as well as back end with Websites and Web Applications</p>
            <p>Here you will find more information about me, what I do, and my current skills mostly in terms of programming and technology            </p>
        </div>
    </div>
    

    <br><br><br><br><br><hr><br><br>

<div class="engineer">
    <h3>Engineering</h3>
</div>
<br><br>
    <div class="container">

        <div class="row text-center">
            <div class="col-md-8 py-5">
                <p >As an engineer, I have a high dedication to technology and innovation.  I have an  educational background and experience in software development, as well as  expertise in  solving technical challenges. My programming skills include various languages ​​like laravel, JavaScript, etc.</p>
            </div>
            <div class="col-md-4 py-7">
            <img src="/img/engineering.png" alt="provilem" width="250" height="250" data-aos="zoom-in-left" data-aos-duration="2000">
            </div>
        </div>

</div>



<div class="hr"><hr></div>
<br><br><br>


    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="judul">Get to know me!</div><br>
                    I'm a <b>Frontend and back-end Web Developer</b> building the Front-end and back-end of Websites and Web Applications that leads to the success of the overall product. Check out some of my work in the <b>Projects</b> section.

                    I also like sharing content related to the stuff that I have learned over the years in <b>Web Development</b> so it can help other people of the Dev Community. Feel free to Connect or Follow me on my Linkedin where I post useful content related to Web Development and Programming

                    I'm open to <b>Job</b> opportunities where I can contribute, learn and grow. If you have a good opportunity that matches my skills and experience then don't hesitate to contact me.
                    <br><br>
                    
               
                    <div class="vertical-line"></div>
                 
                    

                </div>

                
            <div class="col-lg-6">
                <div class="skil">
                My Skills <br><br>
                </div>
                

                <a href="https://www.w3schools.com/html/default.asp"><button type="button" class="btn btn-outline-warning" >HTML</button></a>
                <a href="https://www.w3schools.com/css/default.asp">
                <button type="button" class="btn btn-outline-info">CSS</button>
                </a>
                <a href="https://www.w3schools.com/js/default.asp">
                <button type="button" class="btn btn-outline-warning">JAVASCRIPT</button>
                </a>
                <a href="https://getbootstrap.com/"><button type="button" class="btn btn-outline-primary">BOOTSTRAP</button></a>
                <a href="https://www.w3schools.com/php/default.asp">
                <button type="button" class="btn btn-outline-primary">PHP</button>
                </a>
                
                <a href="https://laravel.com/">
                <button type="button" class="btn btn-outline-danger">LARAVEL</button>
                </a>               
                <a href="http://localhost/phpmyadmin/">
                <button type="button" class="btn btn-outline-dark">SQL</button>
                </a>
                
                <a href="http://localhost/phpmyadmin/">
                <button type="button" class="btn btn-outline-dark">MYSQL</button>
                </a>
            </div>

            <a href="/contact">
                    <div class="d-grid gap-2 d-md-block mt-4">
                    <button class="btn btn-primary" type="button">Contact</button>
                    </div>
                    </a>
        </div>
    </div>
    <br><br><br><br><br><br><br>
</section>

@endsection