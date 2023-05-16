@extends('admin.defaultadmin')
@section('content')


    <!-- Start Card Body -->
    <div class="card-body">
      <!-- Start Form -->
      <form action="{{ route('users.store') }}" method="post">
        @csrf
        <!-- Start Input Name -->
        <div class="form-group">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="enter name" required />
          <small class="form-text text-muted">Please fill your name</small>
        </div>
        <!-- End Input Name -->

        <!-- Start Input Email -->
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
         
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
      <!-- End Form -->
    </div>
    <!-- End Card Body -->
  </div>
  <!-- End Card -->
  <footer>
    <div class="my-4 text-muted text-center">
      <p>© My Company</p>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 

 </body>
@endsection
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Start Scritp for Form -->
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
  <script>
  // Get all room type radio buttons
  const roomTypeRadios = document.querySelectorAll('input[name="roomType"]');

  // Add event listener to update hidden field value when a room type is selected
  roomTypeRadios.forEach((radio) => {
    radio.addEventListener('change', (event) => {
      const selectedValue = event.target.value;
      document.getElementById('selectedRoomType').value = selectedValue;
    });
  });
  
</script>
  <!-- End Scritp for Form -->

