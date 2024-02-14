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
               
              <h5 class="card-title">Users list
                <a href="{{url('panel/user/add')}}" class="btn btn-primary" style="float: right; margin-top: -6px;"> Add New</a>
              </h5>

            
              <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">email</th>
                        <th scope="col">email verified</th>
                        <th scope="col">status</th>
                        <th scope="col">created date</th>
                        <th>action</th>
                      </tr>  
                    @forelse ($getRecord as $value)
                    <tr>
                        <th scope="col">{{$value->id}}</th>
                        <th scope="col">{{$value->name}}</th>
                        <th scope="col">{{$value->email}}</th>
                        <th scope="col">{{!empty($value->email_verified_at)?'Yes':'No'}}</th>
                        <th scope="col">{{!empty($value->status)?'active':'inactive'}}</th>
                        <th scope="col">{{date('d-m-y H:i A',strtotime($value->created_at))}}</th>
                        <th>
                            <a href="{{url('panel/user/edit/'.$value->id)}}" class="btn btn-primary btn-sm" >edit</a>
                            <a onclick="return confirm('Are you sure you want to delete this user?');"
                            href="{{url('panel/user/delete/'.$value->id)}}" class="btn btn-danger btn-sm" >delete</a>

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

 
