@extends('layouts.app')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head align-items-center d-flex mb-sm-4 mb-3">
            <div class="mr-auto">
                <h2 class="text-black font-w600">Interventions</h2>
            </div>

        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive card-table">
                    <table id="example5" class="display dataTablesCard white-border table-responsive-xl">
                        <thead>
                            <tr>

                                <th>Name</th>
                                <th>etat</th>
                                <th>prix</th>
                                <th>type</th>
                                <th>maintenance</th>


                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $interventions as $intervention)
                            <tr>

                                <td>{{$intervention->name}}</td>
                                <td>{{$intervention->etat}}</td>
                                <td>{{$intervention->prix}}</td>
                                <td>{{$intervention->type}}</td>
                                <td>{{$intervention->maintenance}}</td>

                                <td>
                                @if($intervention->etat != 'resolu')
                                <form action="{{route('intervention.update')}}" method="post" >
                                    @csrf
                                    <input name='id' value={{$intervention->id}} hidden >
                                    <input name='etat' value='resolu' hidden >

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">resolu</button>
                                </div>
                                </form>
                                </td>
                                @endif
                                @if($intervention->etat != 'pas resolu')
                                <td>
                                <form action="{{route('intervention.update')}}" method="post" >
                                    @csrf
                                    <input name='id' value={{$intervention->id}} hidden >
                                    <input name='etat' value='pas resolu' hidden >

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">pas resolu</button>
                                </div>
                                </form>
                                </td>
                                @endif
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
