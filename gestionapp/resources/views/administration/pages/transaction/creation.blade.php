@extends('administration.layouts-admin.entete-admin')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Transactions</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Création Transaction</li>
            </ol>
            <hr class="mb-4">
            <div class="row">
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-10 col-md-10">
                    <div class="card">
                        <div class="card-header pt-4"></div>
                        <div class="card-body">
                            <form class="row g-3">
                                <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Numéro Réçu</label>
                                <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Nom</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Matricule</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Montant</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Date du jour</label>
                                <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-6">
                                <label for="inputAddress" class="form-label">Motif</label>
                                <input type="text" class="form-control" id="inputAddress" >
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
