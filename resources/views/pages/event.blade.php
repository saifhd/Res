@extends('layout.app')

@section('content')

<header>
   <div class="view" id ="image" style="">

    <!-- Mask & flexbox options-->
      <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

        <!-- Content -->
        <div class="text-center text-white mx-5 wow fadeIn " style="margin-top:350px;">
          <h1 class="text-weight-bold text-white" style="font-size:80px;">
            <strong>Upcomming Events</strong>
          </h1>

          
          <a target="_blank" href="{{route('event.form')}}" class="btn btn-outline-white btn-lg"><h3 class="text-white">Register Now</h3>
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
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Event Name</th>
                <th scope="col">Date</th>
                <th scope="col">Registered Count</th>
                <th scope="col">Action</th>
                
              </tr>
            </thead>
            <tbody>
            @foreach($events as $row)
              <tr>
                <th scope="row">{{$row->name}}</th>
                <td>{{$row->date}}</td>
                <td>{{count($row->eventregister)}} Persons Registered</td>
                <td><a href="" class="open-add btn btn-sm btn-success" 
                    data-toggle="modal" data-id="{{$row->id}}" data-target="#modaldemo3">Register</a></td>
                
                
              </tr>
            @endforeach
            </tbody>
          </table>
          {{$events->links()}}
          <br><br>
          </div>
      </div>
      <!--/row-->
  </div>

  <div id="modaldemo3" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Register Now</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pd-20">

              @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                            <li class="list-group-item">{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
              @endif

                <form action="{{route('event.register')}}" method="post">
                @csrf
                    <div class="form-group">
                        
                        <input type="text" class="form-control" id="idevent" name="event_id" hidden>
                        <label id="" for="email">Name</label>
                        <input type="text" class="form-control" placeholder="name" id="name" name="name" required="">
                        <label id="" for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email" required="">
                        <label id="" for="contactno">Contact No</label>
                        <input type="text" class="form-control" placeholder="Contact No" id="contactno" name="contactno" required="">
                        <label id="" for="nic">NIC</label>
                        <input type="text" class="form-control" placeholder="NIC" id="nic" name="nic" required="">
                        <label id="" for="address">Address</label>
                        <textarea name="address" class="form-control" id="address" cols="30" rows="2" required=""></textarea>
                        
                    </div>   
              </div><!-- modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                    </div>
                </form> 
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->
<!--container-->
<script>
$(document).on("click", ".open-add", function () {
     var Id = $(this).data('id');
     $("#idevent").val( Id );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
</script>
@endsection