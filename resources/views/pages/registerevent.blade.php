@extends('layout.app')
@section('content')

<header>
   <div class="view" id ="image" style="">

    <!-- Mask & flexbox options-->
      <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

        <!-- Content -->
        <div class="text-center text-white mx-5 wow fadeIn " style="margin-top:350px;">
          <h1 class="text-weight-bold text-white" style="font-size:80px;">
            <strong>Register Now</strong>
          </h1>

          
          <a target="_blank" href="{{route('event')}}" class="btn btn-outline-white btn-lg"><h3 class="text-white">UpComming Events</h3>
            <i class="fas fa-graduation-cap ml-2"></i>
          </a>
        </div>

      </div>
      <!-- Content -->

    </div>
</header>
<div class="sticky-top bg-white hidden-spacer"> </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
            <form method="post" action="{{route('event.register.all')}}">
            @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Name</label>
                        <input type="text" class="form-control" name="name" id="inputName" placeholder="Your Name" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" required="">
                    </div>
                    
                </div>
                
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="contactNo">Contact No</label>
                    <input type="text" class="form-control" id="contactNo" name="contactno" required="">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="eventName">Event Name</label>
                    <select id="eventName" name="eventname" class="form-control" required="">
                        @foreach($events as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="form-group col-md-4">
                    <label for="nic"> NIC</label>
                    <input type="text" class="form-control" id="nic" name="nic" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="No:24,Peradeniya,Kandy" required="">
                </div>
                
                <button type="submit" class="btn btn-primary">Register</button>
                </form>

            </div>
            <br><br>
        </div>
    </div>
</div>
<br><br>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60696847637a6095"></script>

    
@endsection