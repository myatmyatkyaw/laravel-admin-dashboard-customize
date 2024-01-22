@extends('dashboard.index')

@section('content')
<div class="container">
    <form action="{{route('item.update' , $item->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="align-items-center m-4">
                    <div class="mb-3 text-secondary"><h3>Edit Item</h3></div>
                <div class="col-auto">
                    <label  class="col-form-label">Item Name<small class="text-danger">*</small></label>
                    <input type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $item->name }}">

                    @error('name')
                    <div class="text-danger">*{{$message}}</div>
                    @enderror

                </div>


                <div class="col-auto">
                    <label class="col-form-label">Price<small class="text-danger">*</small></label>
                    <input type="text"  class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $item->price}}">

                    @error('price')
                    <div class="text-danger">*{{$message}}</div>
                     @enderror

                </div>

                <div class="col-auto">
                    <label for="category_id">Select Category:</label>
                    <select name="category_id" id="category_id" class="form-control">

                        @foreach($categories as $category)
                        <option class="form-control @error('category_id') is-invalid @enderror" name="category_id" value="{{ $category->id }}"{{ $item->category_id == $category->id ? 'selected':'' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>

                        @error('category_id')
                            <div class="text-danger">*{{$message}}</div>
                        @enderror
                </div>

                <div class="col-auto">
                    <label class="col-form-label">Expired Date<small class="text-danger">*</small></label>
                    <input type="datetime"  class="form-control @error('expired_date') is-invalid @enderror" name="expired_date" value="{{ $item->expired_date}}">

                        @error('expired_date')
                        <div class="text-danger">*{{$message}}</div>
                        @enderror

                </div>


                <div class="col-auto">
                    <label class="col-form-label">Upload Image<small class="text-danger">*</small></label><br>
                    <img src="/storage/gallery/{{$item->image }}" alt="Image Name" width="40px" height="40px"/>
                    <input type="file"  class="form-control" name="image">

                    @error('image')
                    <div class="text-danger">*{{$message}}</div>
                    @enderror

                </div>



                <div class="col-sm mt-3">
                <a href="{{ route('item.index') }}" class="btn btn-outline-dark">Back</a>
                <button type="submit" class="btn btn-outline-primary">Update</button>

                </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection


