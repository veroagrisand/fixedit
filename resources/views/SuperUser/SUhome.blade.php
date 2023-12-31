@extends('layout.tes')

@section('title', 'Konekin | Home')
@section('tittle', 'Dashboard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">

            <div class="page-header">
                <h3> Dashboard</h3>
            </div>

        

        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-1">
                    <h3 class="card-title">12</h3>
                <p class="card-text">Total Community</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-2">
                    <h3 class="card-title">133</h3>
                  <p class="card-text">Total Users</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-3">
                    <h3 class="card-title">3</h3>
                  <p class="card-text">Total Kategori</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-4">
                    <h3 class="card-title">3</h3>
                  <p class="card-text">Total Kategori</p>
                </div>
            </div>
        </div>
    </div>
</div>


@stop