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
                            <h3 class="text-center">All Food</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-borderd" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Person</th>
                                        <th>Time</th>
                                        <th>Calendar</th>
                                        <th>Massage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tables as $table)
                                        <tr>
                                            <td> {{ $table->person }} </td>
                                            <td> {{ $table->time}} </td>
                                            <td> {{ $table->calendar}} </td>
                                            <td> {{ $table->massage }} </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
