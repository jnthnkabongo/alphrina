@extends('administration.layouts-admin.entete-admin')
@section('content')
    <main class="mb-5">
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <h1 class="mt-4">Colis</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Liste des colis</li>
                    </ol>
                </div>
                <div class="col-lg-8 col-md-8">

                </div>
                <div class="col-lg-2 col-md-2 mt-5">
                    <button class="btn btn-primary w-100"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp; Nouveau</button>
                </div>
                <hr class="mb-4">
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>N*</th>
                                    <th>Matricule</th>
                                    <th>Nom Emetteur</th>
                                    <th>Nom Récepteur</th>
                                    <th>Téléphone</th>
                                    <th>BL NO</th>
                                    <th>Montant</th>
                                    <th>Date </th>
                                    <th>Motif</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>N*</th>
                                    <th>Matricule</th>
                                    <th>Nom Emetteur</th>
                                    <th>Nom Récepteur</th>
                                    <th>Téléphone</th>
                                    <th>BL NO</th>
                                    <th>Montant</th>
                                    <th>Date </th>
                                    <th>Motif</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>001</td>
                                    <td>Masuaku Ngonga</td>
                                    <td>Gloria</td>
                                    <td>0974133780</td>
                                    <th>1960</th>
                                    <th>1000</th>
                                    <td>2011/04/25</td>
                                    <td>RAS</td>
                                    <td>
                                        <a class="fas fa-eye me-1" href=""></a>
                                        <a class="fas fa-pencil me-1" aria-hidden="true" href=""></a>
                                        <a class="fas fa-trash me-1" href=""></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>

    </main>
@endsection
