@extends('layout.tes')

@section('title', 'Konekin | Kelola kegiatan')
@section('tittle', 'Kelola kegiatan')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">


            <div class="page-header">
                <h3> Kelola kegiatan</h3>
            </div>


            <a href="<?php //echo base_url().'postingan_kategori/create'; ?>" class="btn btn-primary btn-sm"><span
                    class="glyphicon glyphicon-plus"></span> Buat Kegiatan Baru</a>
            <br /><br />
            <div class="alert alert-success" role="alert">

            </div><br />
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>ID kegiatan</th>
                        <th>Deskripsi kegiatan</th>
                        <th>tgl kegiatan </th>
                        <th>Username</th>
                        <th>Link</th>
                        <th>Aksi</th>
                    </tr>

                    <?php
               //foreach ($postingan_kategori as $p) :
                ?>
                    <tr>
                        <td>k001</td>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td>27-12-2023</td>
                        <td>Erlan</td>
                        <td>abc</td>
                        <td>
                        <form action="" method="post" class="d-inline">
                  <?= csrf_field(); ?>
                 <input type="hidden" name="_method" value="edit">
                  <button type="submit" class="btn btn-primary btn-sm btn-edit" onclick="return confirm('Apakah yakin ingin mengedit?');">Edit</button>
                    </form>
                            <form action="  " method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="Delete">
                                <button type=" submit" class="btn btn-danger btn-sm btn-delete"
                                    onclick="return confirm('Apakah yakin ingin menghapus?' );">Delete</button>

                            </form>
                        </td>
                    </tr>

                </table>

            </div>
        </div>
    </div>
</div>

@stop