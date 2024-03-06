@extends('administration.layouts-admin.entete-admin')
@section('content')
    <main class="mb-5">
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <h1 class="mt-4">Dépôt</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Création Dépôt</li>
                    </ol>
                </div>
                <div class="col-lg-8 col-md-8">

                </div>
                <div class="col-lg-2 col-md-2 mt-5">
                    <a href="{{ route('index-transaction') }}" class="btn btn-primary w-100"><i class="fa fa-columns" aria-hidden="true"></i>&nbsp;&nbsp; Liste Dépôt</a>
                </div>
                <hr class="mb-4">
            </div>
            <div class="row">
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-10 col-md-10">
                    <div class="card">
                        <div class="card-header pt-4"></div>
                        <div class="card-body">
                            <form class="row g-3">
                                <div class="col-md-6">
                                <label class="form-label">Numéro Réçu</label>
                                <input type="email" class="form-control" >
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Matricule</label>
                                    <input type="email" class="form-control" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Nom Emetteur</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Nom Récepteur</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Téléphone</label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">BL NO</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Montant</label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-6">
                                <label  class="form-label">Date du jour</label>
                                <input type="date" class="form-control">
                                </div>
                                <div class="col-6">
                                <label for="inputAddress" class="form-label">Motif</label>
                                <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Somme en chiffres</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-muted  pt-4"></div>
                    </div>

                </div>
                <div></div>
            </div>
        </div>
    </main>
@endsection
