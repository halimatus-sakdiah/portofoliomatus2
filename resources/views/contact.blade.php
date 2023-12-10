@extends('layouts.main')

@section('container')

<section id="contact">
<div class="contact">
            Contact Me
</div><br><br><br><br>
    <div class="container">
        <div class="row">
            
            <div class="col">
                <div class="col-md-8">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="matus@example.com" autofocus required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autofocus required>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="3" autofocus required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            </div>
        </div>
        
    </div>
</section>
<br><br><br><br><br><br><br>
@endsection