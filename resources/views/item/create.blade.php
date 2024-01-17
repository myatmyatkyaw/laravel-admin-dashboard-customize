@extends('dashboard.index')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body align-items-center m-4">
                    <div class="mb-3 text-secondary"><h3>Create Item</h3></div>
                    <form action="{{route('item.store')}}" method="post">
                        @csrf


                        {{-- <div class="btn-group col-auto">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select Category
                            </button>
                            <div class="dropdown-menu">
                                <label class="dropdown-item" for="category_id">Choose a Category:</label>
                                <form class="dropdown-item">
                                    <select name="category_id" id="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                        </div> --}}


                        <!-- Example split danger button -->


                        <div class="col-auto">
                            <label  class="col-form-label">Item Name<small class="text-danger">*</small></label>
                            <input type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">

                            @error('name')
                            <div class="text-danger">*{{$message}}</div>
                            @enderror

                        </div>


                        <div class="col-auto">
                            <label class="col-form-label">Price<small class="text-danger">*</small></label>
                            <input type="text"  class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}">

                            @error('price')
                            <div class="text-danger">*{{$message}}</div>
                            @enderror

                        </div>

                        <div class="col-auto">
                            <label for="category_id">Select Category:</label>
                            <select class="form-control" name="category_id" id="category_id">
                                @foreach($categories as $category)
                                    <option name="category_id" value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                        </div>


                        <div class="col-auto">
                            <label class="col-form-label">Expired Date<small class="text-danger">*</small></label>
                            <input type="date"  class="form-control @error('expired_date') is-invalid @enderror" name="expired_date" value="{{ old('expired_date') }}">

                            @error('expired_date')
                            <div class="text-danger">*{{$message}}</div>
                            @enderror

                        </div>

                        <div class="col-sm mt-3">
                        <a href="{{ route('item.index') }}" class="btn btn-outline-dark">Back</a>
                        <button type="submit" class="btn btn-outline-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
