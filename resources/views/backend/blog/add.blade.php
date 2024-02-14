@extends('backend.layouts.app')
@section('style')

@endsection
@section('content')

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add New blog</h5>

            <!-- Horizontal Form -->
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> title *</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputText" required name="title">
                    </div>
                    <div style="color:red">{{$errors->first('title') }}</div>
                  </div>


              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> category *</label>
                <div class="col-sm-10">
                 <select class='form-control' name="category">
                  <option value="">Select Category </option>
               @foreach ($getCategory as $value )
                 <option value="{{$value->id}}">{{$value->name}}</option>

               @endforeach
                 </select>
                </div>
              </div>


              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Image *</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" name="image" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">description </label>
                <div class="col-sm-10">
                <textarea  class="form-control tinymce-editor" name="description" ></textarea>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> Tags</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText"  name="tags">
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> meta description</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText" value="{{old('meta_description')}}"
                    name="meta_description">
                </div>
                <div style="color:red">{{$errors->first('meta_description') }}</div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> meta keyword</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText" value="{{old('meta_keyword')}}"
                   required name="meta_keyword">
                </div>
                <div style="color:red">{{$errors->first('meta_keyword') }}</div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">publish*</label>
                <div class="col-sm-10">
                  <select class="form-control" name="publish">
                     <option value='1'>yes</option>
                     <option  value='0'>no</option>
                  </select>
                </div>
              </div>


              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Status *</label>
                <div class="col-sm-10">
                  <select class="form-control" name="status">
                     <option value='1'>Active</option>
                     <option  value='0'>Inactive</option>
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


