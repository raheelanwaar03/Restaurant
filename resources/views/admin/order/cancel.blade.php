@extends('admin.layout.app')

@section('link')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <h2 class="mb-3 me-auto">Admin Dashboard</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Cancelled Orders</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-borderd" id="myTable">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Item Name</th>
                                        <th>Item Price</th>
                                        <th>Item Quantity</th>
                                        <th>Item Image</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orderFood as $food)
                                        <tr>
                                            <td>{{ $food->userOrders->name }}</td>
                                            <td>{{ $food->title }}</td>
                                            <td>{{ $food->item_price }}</td>
                                            <td>{{ $food->item_qty }}</td>
                                            <td>
                                                <img src="{{ asset('images/' . $food->image) }}"
                                                    class="img-fluid img-thumbnail" width="90px" height="90px"
                                                    alt="{{ $food->image }}">
                                            </td>
                                            <td>{{ $food->total_price }}</td>
                                            <td>{{ $food->status }}</td>
                                            <td>
                                                <a href="{{ route('Admin.Cancel.Order', ['id' => $food->id]) }}"
                                                    class="btn btn-danger">Cancel</a>
                                                <a href="{{ route('Admin.Deliver.Order',['id'=>$food->id]) }}" class="btn btn-success">Delivered</a>
                                                <a href="{{ route('Admin.User.Address',['user_id'=>$food->user_id]) }}" class="btn btn-info">User Address</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <h4 class="text-dark text-center">No Order Placed yet!</h4>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
