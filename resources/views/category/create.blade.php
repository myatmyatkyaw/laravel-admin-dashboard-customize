@extends('dashboard.index')

@section('content')
<div class="container">
    <form method="POST" action="{{route('category.store')}}">
        @csrf
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="align-items-center m-4">


                    <div class="col-auto">
                        <label for="inputname" class="col-form-label">Create Category Name<small class="text-danger">*</small></label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputname" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                        @error('name')
                        <div class="text-danger">*{{$message}}</div>
                        @enderror
                    </div>




                    <div class="col-sm mt-3">
                    <a href="{{ route('category.index') }}" class="btn btn-outline-dark">Back</a>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
