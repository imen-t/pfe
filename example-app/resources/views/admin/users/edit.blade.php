@extends('admin.defaultadmin')
@section('content')
 <div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
  <form action="{{ route('users.update', $users->id) }}" method="post">
       @csrf
       @method("PATCH")
 <div class="form-group">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="name" name="name"value="{{$users->name}}" required />
          <small class="form-text text-muted">Please fill your name</small>
        </div>
        <!-- End Input Name -->

        <!-- Start Input Email -->
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{$users->email}}"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
         
        </div>
        <!-- End Input Email -->

        <!-- Start Input Telephone -->
        <div class="form-group">
          <label for="inputPhone">Phone</label>
          <input type="text" class="form-control" id="Mobile" name="Mobile" placeholder="xxxxxxxxxx"  />
        </div>
        <!-- End Input Telephone -->
       <label>Password</label>
        <input type="password" name="password" class="form-control">
     
         
        </div>
        <!-- End Input Date , Start Time and End Time -->

        <!-- Start Check Room Type -->
        <div class="form-group">
          <legend class="col-form-label pt-0">role</legend>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="inlineRadioType1" name="roomType" value="type1" required />
            <label class="form-check-label" for="inlineRadioType1">Room 1 (10 People)</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="inlineRadioType2" name="roomType" value="type2" required />
            <label class="form-check-label" for="inlineRadioType2">Room 2 (20 People)</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="inlineRadioType3" name="roomType" value="type3" required />
            <label class="form-check-label" for="inlineRadioType3">Room 3 (30 People)</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="inlineRadioType4" name="roomType" value="type4" required />
            <label class="form-check-label" for="inlineRadioType4">others</label>
          </div>
          
        </div>
        <input type="hidden" name="selectedRoomType" id="selectedRoomType" value="">
        <!-- End Check Room Type -->

        <hr />

        
        <!-- Start Submit Button -->
        <button class="btn btn-primary btn-block col-lg-2" type="submit" value="Save" >Submit</button>
        <!-- End Submit Button -->
    </form>
  </div>
 </div>
@endsection


