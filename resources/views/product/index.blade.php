        @extends('layouts.app')
        @section('content')
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="form-head align-items-center d-flex mb-sm-4 mb-3">
                    <div class="mr-auto">
                        <h2 class="text-black font-w600">Produits</h2>
                    </div>
                    <div>
                        <a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+Nouveau Produit</a>

                    </div>
                </div>
                <!-- Add Order -->
                <div class="modal fade" id="addOrderModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ajouter Produit</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="create-product" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <label class="text-black font-w500">Produit Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500" required>Price</label>
                                        <input type="number" name="prix" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">image</label>
                                        <input type="text" name="produitImg" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">quatity</label>
                                        <input type="number" name="qteStock" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">description</label>
                                        <input type="text" name="produitDesc" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">CREATE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    @forelse ( $produits as $produit)
                                    <tr>

                                        <td>{{$produit->prix}}</td>
                                        <td>{{$produit->name}}</td>
                                        <td>{{$produit->produitDesc}}</td>
                                        <td>{{$produit->produitImg}}</td>
                                        <td>{{$produit->qteStock}}</td>
                                        <td>

                                            <form action="{{route('product.delete')}}" method="post" >
                                                @csrf
                                                <input name='prod' value={{$produit->id}} hidden >
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">delete</button>
                                            </div>
                                            </form>
                                        </td>
                                        <td>




                                            <div class="form-group">
                                                <input name='prod' value={{$produit->id}} hidden >
                                                <a href="javascript:void(0)" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#updateOrderModal">update</a>
                                            </div>

                                        </td>
                                    </tr>
                                    @empty

                                    @endforelse


                                </tbody>
                            </table>

                            <!-- edit Order -->
                <div class="modal fade" id="updateOrderModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update product</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="update-product" method="post" >
                                    <input name='prod' value={{$produit->id}} hidden >
                                    @csrf
                                    <div class="form-group">
                                        <label class="text-black font-w500">Produit Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500" required>Price</label>
                                        <input type="number" name="prix" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">image</label>
                                        <input type="text" name="produitImg" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">quatity</label>
                                        <input type="number" name="qteStock" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">description</label>
                                        <input type="text" name="produitDesc" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">CREATE</button>
                                    </div>
                                </form>
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
