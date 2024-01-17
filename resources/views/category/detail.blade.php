@extends('dashboard.index')

@section('content')
<div class="container mt-3">


    <div class="row justify-content-center">

      <div class="col-md-4">
      <div class="card">
       <div class="card-body shadow">

        <div class="mb-3 text-secondary"><h3>Category Details</h3></div>


<table class="table ">
  <thead class="table-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>



    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">1</th>
      <td>{{$category->name}}</td>


    </tr>

  </tbody>
</table>
<div class="mb-4">
<a href="{{ route('category.index') }}" class="btn  btn-outline-dark">Back</a>
        </div>
    </div>
    </div>
</div>
</div>
</div>
@endsection
