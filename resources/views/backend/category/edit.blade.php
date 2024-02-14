@extends('backend.layouts.app')
@section('style')

@endsection
@section('content')

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">edit category</h5>

            <!-- Horizontal Form -->
            <form action="" method="POST">
                @csrf
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> Name *</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText" value="{{$getRecord->name}}" required name="name">
                </div>
                <div style="color:red">{{$errors->first('name') }}</div>
              </div>


              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> slug *</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText" value="{{$getRecord->slug}}" required name="slug">
                </div>
                <div style="color:red">{{$errors->first('slug') }}</div>
              </div>

              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> title *</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText" value="{{$getRecord->title}}" required name="title">
                </div>
                <div style="color:red">{{$errors->first('title') }}</div>
              </div>

              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> meta title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText" value="{{$getRecord->meta_title}}"
                   name="meta_title">
                </div>
                <div style="color:red">{{$errors->first('meta_title') }}</div>
              </div>

              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> meta description</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText" value="{{$getRecord->meta_description}}"
                    name="meta_description">
                </div>
                <div style="color:red">{{$errors->first('meta_description') }}</div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> meta keyword</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText" value="{{$getRecord->meta_keyword}}"
                   required name="meta_keyword">
                </div>
                <div style="color:red">{{$errors->first('meta_keyword') }}</div>
              </div>


              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Status *</label>
                <div class="col-sm-10">
                  <select class="form-control" name="status">
                     <option {{($getRecord->status==1)?'selected':''}} value='1'>Active</option>
                     <option {{($getRecord->status==0)?'selected':''}} value='0'>Inactive</option>
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


