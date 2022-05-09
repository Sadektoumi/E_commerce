@extends('layouts.app')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        {{-- <div class="form-head align-items-center d-flex mb-sm-4 mb-3">
            <div class="mr-auto">
                <h2 class="text-black font-w600">Users</h2>
            </div>
            <div>
                <a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+Nouveau Produit</a>

            </div>
        </div> --}}
        <!-- Add Order -->
        {{-- <div class="modal fade" id="addOrderModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter Produit</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="text-black font-w500">Produit Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Produit ID</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Disease</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Date Check In</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">CREATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive card-table">
                    <table id="example5" class="display dataTablesCard white-border table-responsive-xl">
                        <thead>
                            <tr>

                                <th>Name</th>
                                <th>email</th>
                                <th>Last Name</th>
                                <th>CIN</th>
                                <th>adresse</th>
                                <th>sexe</th>
                                <th>telephone</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $Users as $User)
                            <tr>

                                <td>{{$User->nom}}</td>
                                <td>{{$User->email}}</td>
                                <td>{{$User->prenom}}</td>
                                <td>{{$User->cin}}</td>
                                <td>{{$User->adresse}}</td>
                                <td>{{$User->sexe}}</td>
                                <td>{{$User->telephone}}</td>
                                <td>


                                    <div class="dropdown ml-auto text-right">
                                        <div class="btn-link" data-toggle="dropdown">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                     z
                                    </div>
                                </td>
                            </tr>
                            @empty

                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
