@extends('layouts.app')

@section('content')
<div class="container">
    {{-- @dd($items) --}}
    <div class="justify-content-center">
      <div class="row">
        <div class="col-md-12">

            <div class="card text-bg-secondary">
                <div class="card-body">
                <h1 class="text-center fw-bold fs-1 text-light m-4">GIC Shopping</h1>
                <hr/>

                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            @foreach ($items as $item)
                                <div class="col-md-6 mb-2">
                                    <div class="card card-body text-center mx-auto mt-2">
                                        <img src="/storage/gallery/{{$item->image }}" alt="Image Name" width="300px" height="250px" class="mx-auto d-block"/>
                                        <div class="row mt-3">
                                            <div class="col-md-8 text-start text-dark"> <h5>Name: {{ $item ->name }}</h5>
                                                <h5>Price: {{ $item->price }}</h5>
                                            </div>

                                            <div class="col-md-4 mb-3 text-end">
                                                <a href="#" class="btn btn-outline-info"><i class="fa-solid fa-cart-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-body mb-2 mt-2 pb-5">
                            <h5 class="text-center">Total</h5>
                            <table class="table table-hover">
                                <thead class="table-dark">
                                    <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">Item Name</th>
                                      <th scope="col">Price</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    @foreach ($items as $item)

                                      <tr>
                                          <th scope="row">{{ $item->id }}</th>
                                          <td>{{ $item->name }}</td>
                                          <td>{{ $item->price }}</td>
                                      </tr>
                                      @endforeach
                                      <tr>
                                        <th colspan="2">Total Price: </th>
                                        <th>12</th>
                                      </tr>

                                  </tbody>
                            </table>
                        </div>
                    </div>


                </div>
                </div>
            </div>

        </div>
      </div>
    </div>
</div>
@endsection
