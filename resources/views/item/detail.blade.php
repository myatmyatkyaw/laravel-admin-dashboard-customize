
@extends('dashboard.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body shadow">
                    <div class="mb-3 text-secondary"><h3>Item Details</h3></div>
                    <table class="table">
                        <thead class="table-primary">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category ID</th>
                            <th scope="col">Expired Date</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->category_id }}</td>
                                <td>{{ $item->expired_date }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mb-4">
                        <a href="{{ route('item.index') }}" class="btn btn-outline-dark">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

