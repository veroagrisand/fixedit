@extends('layout.tes')

@section('title', 'Konekin | Users')
@section('tittle', 'Users')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">


            <div class="page-header">
                <h3> Users</h3>
            </div>

            </div><br />
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>ID User</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Birth</th>
                        
                    </tr>

                    <?php
               //foreach ($postingan_kategori as $p) :
                ?>
                    <tr>
                        <td>k001</td>
                        <td>Azwar</td>
                        <td>Yusuf</td>
                        <td>ucup@gmail.com</td>
                        <td>Yusuf123</td>
                        <td>2007-12-08</td>
                    </tr>

                </table>

            </div>
        </div>
    </div>
</div>

@stop