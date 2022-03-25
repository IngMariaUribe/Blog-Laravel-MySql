@extends('theme.base')
@section('content')
<div class="container py-5  "> 
    <div class="container border p-5 col-6">
        <div>
          <h2>New publication</h2>
          <p>Please enter the following information</p>
        </div>
        <form action="{{ route('publication.store') }}" method="POST">
            @csrf
           
            <div class="row">            
                <div class="form-group col-sm-10 mb-3">
                    <label for="title">Title</label>
                    <input name="title" formControlName="title" type="text" class="form-control" placeholder="Publication title"  >
                    @error('title')
                        <p class="form-text text-danger">{{$message}}</p>
                    @enderror
                </div>     
                <div class="form-group col-sm-12 mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" formControlName="description"  rows="4" class="form-control" placeholder="Publication Description"  ></textarea>   
                    @error('description')
                        <p class="form-text text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="btn-group">
                    <button type="submit" class="btn btn-primary ">Send</button>
                </div>             
            </div>
          </div>
        </form>
      </div>         
</div>
@endsection


