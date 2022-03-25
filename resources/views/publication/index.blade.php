
@extends('theme.base')
@section('content')

<a class="btn btn-primary" href="{{ route('publication.create')}}" >New Publi</a>
{{-- <a class="btn btn-primary" href="{{ route('#')}}" >Log out</a> --}}

<h2 class="text-center ">Publications</h2>
<div class="container border">   
    @if (Session::has('message'))
        <div class="alert alert-info my-5">
            {{Session::get('message')}}
        </div>
    @endif  
    
        <div class="row m-2">  
            @foreach ($pub as $publication)      
            <div class="col-sm  m-3">
                <div class="card card-border mb-0" style="width: 30rem;">
                    <img  class="card-img-top"  src="{{asset('resources/img/message.png')}}" alt="jj">
                    <div class="card-body">
                        <h3 class="css-title">{{$publication->title}}</h3>                
                            <h5>{{$publication->description}}</h5>                               
                        <p  style='text-align:right'>{{$publication->created_at}}</p>    
                    </div>
                </div>        
            </div>    
            @endforeach   
        </div>       
    
    @if ($pub->count())
        <h6>
            {{$pub->links()}}
        </h6> 
    @else
    <div colspan=3>
        <h5>
            There is no entries
        </h5>
    </div>
    @endif   
</div> 
@endsection


