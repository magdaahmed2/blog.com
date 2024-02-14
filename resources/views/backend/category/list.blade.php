@extends('backend.layouts.app')
@section('style')

@endsection
@section('content')


  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        @include('layout._message')
        <div class="card">

            <div class="card-body">

              <h5 class="card-title">Category list
                <a href="{{url('panel/category/add')}}" class="btn btn-primary" style="float: right; margin-top: -6px;"> Add New</a>
              </h5>


              <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Title</th>
                        <th scope="col">Meta Title</th>
                        <th scope="col">Meta description</th>
                        <th scope="col">Meta keyword</th>
                        <th scope="col">status</th>
                        <th scope="col">created date</th>
                        <th scope="col">Action</th>
                      </tr>
                    @forelse ($getRecord as $value)
                    <tr>
                        <th scope="col">{{$value->id}}</th>
                        <th scope="col">{{$value->name}}</th>
                        <th scope="col">{{$value->slug}}</th>
                        <th scope="col">{{$value->title}}</th>
                        <th scope="col">{{$value->meta_title}}</th>
                        <th scope="col">{{$value->meta_description}}</th>
                        <th scope="col">{{$value->meta_keyword}}</th>
                        <th scope="col">{{!empty($value->status)?'active':'inactive'}}</th>
                        <th scope="col">{{date('d-m-y H:i A',strtotime($value->created_at))}}</th>
                        <th>
                            <div class="btn-group">
                                <a href="{{url('panel/category/edit/'.$value->id)}}" class="btn btn-primary btn-sm mr-2">edit</a>
                                <a onclick="return confirm('Are you sure you want to delete this user?');"
                                   href="{{url('panel/category/delete/'.$value->id)}}" class="btn btn-danger btn-sm">delete</a>
                            </div>
                        </th>



                      </tr>
                    @empty
                       <tr>
                        <td>record not found</td>
                    </tr>
                    @endforelse

                </thead>

              </table>

            {!!$getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links()!!}

            </div>
          </div>


      </div>

    </div>
  </section>

@endsection

@section('script')

@endsection


