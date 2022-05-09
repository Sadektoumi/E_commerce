@extends('layouts.app')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head align-items-center d-flex mb-sm-4 mb-3">
            <div class="mr-auto">
                <h2 class="text-black font-w600">Commandes</h2>
            </div>

        </div>
        <!-- Add Order -->

        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive card-table">
                    <table id="example5" class="display dataTablesCard white-border table-responsive-xl">
                        <thead>
                            <tr>

                                <th>Prix</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>quantity</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($commandes as $commande)

                            <tr>
                                <td>{{$commande['Description']}}</td>
                                <td>aaaaa</td>
                                <td>aaaaa</td>
                                <td>aaaaa</td>
                            </tr>

                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
