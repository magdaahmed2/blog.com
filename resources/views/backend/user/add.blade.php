@extends('backend.layouts.app')
@section('style')
    
@endsection
@section('content')

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add New User</h5>

            <!-- Horizontal Form -->
            <form action="" method="POST">
                @csrf
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText" value="{{old('name')}}" required name="name">
                </div>
                <div style="color:red">{{$errors->first('name') }}</div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail" value="{{old('email')}}" required name="email">
                </div>
                <div class="text-center mt-2" style="color: red;">
                    {{$errors->first('email')}}
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" name="password" required>
                    <div class="text-center" style="color: red;">
                        {{$errors->first('password')}}
                    </div>
                </div>
            </div>
            

              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                  <select class="form-control" name="status">
                     <option {{(old('status')==1)?'selected':''}} value='1'>Active</option>
                     <option  {{(old('status')==0)?'selected':''}} value='0'>Inactive</option>
                  </select>
                </div>
              </div>
           
             
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form><!-- End Horizontal Form -->

          </div>
        </div>       

    </div>
    </div>
  </section>

  
@endsection
 
@section('script')
    
@endsection

 
