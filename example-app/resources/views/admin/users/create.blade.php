@extends('admin.defaultadmin')
@section('content')


<form action="{{ route('users.store') }}" method="post">
        @csrf
<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5>Visteon employee</h5>
             
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-9 mb-3">
                    <h6>full name</h6>
                    <input type="text" class="form-control" id="name" name="name" placeholder="enter name" required />
                  </div>
                 
                </div>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>email</h6>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
                  </div>
                  <div class="col-6 mb-3">
                    <h6>phone number</h6>
                    <input type="text" class="form-control" id="Mobile" name="Mobile" placeholder="xxxxxxxxxx"/>
                  </div>
                </div>
                <h6>departments and ranking</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  
                <label for="role">Department:</label>
                <input type="text" class="form-control" id="Department" name="Department" placeholder="Department" required />

                <label for="role">ranking:</label>
                <select name="ranking" class="form-select" aria-label="Default select example">
                        <option value="Yellow Belt" selected> Yellow Belt</option>
                        <option value="Green Belt">Green Belt</option>
                        <option value=" Black Belt"> Black Belt</option>
                        <option value=" Master Black Belt"> Master Black Belt</option>
                        <option value=" others"> others</option>

                  </select>
                </div>
                <h6>role</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                <label for="role">Role</label>
                    <select name="role" id="role" class="form-control">
                        <option value="0">User</option>
                        <option value="1">Admin</option>
                    </select>
                </div>
                <div class="row pt-1">
                <button class="btn btn-primary " type="submit" value="Save" >Submit</button>
              </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  

        <!-- End Submit Button -->
      </form>


@endsection

<style>
 *{
  overflow-x: hidden;

  }
  .gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style>
