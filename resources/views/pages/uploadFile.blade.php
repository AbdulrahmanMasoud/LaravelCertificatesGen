@extends('layout.master')
@section('title','Upload Data')
@section('content')
<section class="form">
    <div class="jumbotron text-center h-100">
        <div class="container">
        <h1 class="display-4">Hello, world!</h1>
        <p class="w-50 mx-auto text-capitalize ">
            now you can generate a lot of certificates for your students.
first, one gets an excl sheet for students and convert it to a JSON file and upload it or get JSON file and upload it that's only</p>
        <div class="alert alert-warning" role="alert">
            You Should Upload <b>.Json</b> Files Only Thank You :)
        </div>
        <hr class="my-4">
        
            <div class="row">
                <div class="col-6 mx-auto">
                    <form action="{{route('generat.certifiacts')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" class="form-control" id="upFile" name="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
      
      </div>
</section>

@endsection
   
