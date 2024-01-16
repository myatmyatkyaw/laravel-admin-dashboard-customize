@extends('dashboard.index')

@section('content')
<div class="container">
    <form method="POST" action="{{route('item.store')}}">
        @csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
   
            <div class="card">
                <div class="align-items-center m-4">
                    
    
                    <div class="col-auto">
                        <label for="inputname" class="col-form-label">Name<small class="text-danger">*</small></label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputname" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                        @error('name')
                        <div class="text-danger">*{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-auto">
                        <label for="inputprice" class="col-form-label">Price<small class="text-danger">*</small></label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputprice" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}">
                        @error('price')
                        <div class="text-danger">*{{$message}}</div>
                        @enderror
                    </div>
                    <label for="category_id">Select Category:</label>   
                     <select name="category_id" id="category_id">       
                         @foreach($categories as $category)             
                         <option value="{{ $category->id }}">{{ $category->name }}</option>       
                         @endforeach    
                         </select>

                    <div class="col-auto">
                        <label for="inputdate" class="col-form-label">Expired Date<small class="text-danger">*</small></label>
                    </div>
                    <div class="col-auto">
                        <input type="datetime" id="inputdate" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}">
                        @error('date')
                        <div class="text-danger">*{{$message}}</div>
                        @enderror
                    </div>
                    
                  
    
                  
                    <div class="col-sm mt-3">
                    <a href="{{ route('item.index') }}" class="btn btn-outline-dark">Back</a>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
