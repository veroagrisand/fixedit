@extends('layout.tes')

@section('title', 'Konekin | Kelola komunitas')
@section('tittle', 'Kelola komunitas')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">

            <div class="container">
                <div class="page-header">
                    <h3> Kelola komunitas</h3>
                    <hr>
                </div>

                <form action="" class="formkelolakomunitas">
                    <div class="row">
                        <div class="col-3">
                            <h4>Nama komunitas</h4>
                        </div>
                        <div class="col-3">
                            <textarea name="namakomunitas" id="namakomunitas" cols="30" rows="3">Pemrograman web</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h4>Deskripsi komunitas</h4>
                        </div>
                        <div class="col-3">
                            <textarea name="namakomunitas" id="namakomunitas" cols="30" rows="3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eum rerum pariatur libero possimus iusto vitae numquam recusandae placeat dolores animi eius maxime omnis, itaque esse modi dicta? Adipisci, ratione?</textarea>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-3">
                            <h4>Nama komunitas</h4>
                        </div>
                        <div class="col-3">
                            <textarea name="namakomunitas" id="namakomunitas" cols="30" rows="3">Pemrograman web</textarea>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-3">
                            <h4>Nama komunitas</h4>
                        </div>
                        <div class="col-3">
                            <textarea name="namakomunitas" id="namakomunitas" cols="30" rows="3">Pemrograman web</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h4>Nama komunitas</h4>
                        </div>
                        <div class="col-3">
                            <textarea name="namakomunitas" id="namakomunitas" cols="30" rows="3">Pemrograman web</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h4>Nama komunitas</h4>
                        </div>
                        <div class="col-3">
                            <textarea name="namakomunitas" id="namakomunitas" cols="30" rows="3">Pemrograman web</textarea>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-3">
                            
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary me-1">Simpan</button> 
                            <button class="btn btn-danger">Hapus komunitas</button> 
                        </div>
                    </div> 
                </form>

            </div>


        </div>
    </div>
</div>

@stop