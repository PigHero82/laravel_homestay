@extends('layouts.layout')

@section('title')
    Data Customer
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection

@section('content')
    <!-- Card Statistic -->
    <section>
        <x-table class="" title="Daftar Data Customer" description="" id="">
            <x-slot name="floatRight">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalTambah"><i class="feather icon-plus"></i> Tambah</button>
            </x-slot>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>8322</td>
                    <td>Dew</td>
                    <td>Perempuan</td>
                    <td>3 Juli 1999</td>
                    <td>Denpasar</td>
                    <td>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-light modal-popup" data-toggle="modal" data-target="#modalUbah"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light modal-popup"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>8323</td>
                    <td>Asih</td>
                    <td>Perempuan</td>
                    <td>4 Juli 1999</td>
                    <td>Denpasar</td>
                    <td>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-light modal-popup" data-toggle="modal" data-target="#modalUbah"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light modal-popup"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>8324</td>
                    <td>Sutri</td>
                    <td>Perempuan</td>
                    <td>5 Juli 1999</td>
                    <td>Denpasar</td>
                    <td>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-light modal-popup" data-toggle="modal" data-target="#modalUbah"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light modal-popup"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </x-table>
    </section>

    <x-modal title="Tambah Customer" class="modal-lg modal-dialog-centered" id="modalTambah">
        <div class="form">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <x-input-form label="ID">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Nama">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Jenis Kelamin">
                            <select class="form-control">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Tanggal Lahir">
                            <input type="date" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-8">
                        <x-input-form label="Alamat">
                            <textarea class="form-control" rows="5"></textarea>
                        </x-input-form>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="feather icon-check"></i> Simpan</button>
            </div>
        </div>
    </x-modal>

    <x-modal title="Ubah Customer | Dew" class="modal-xl modal-dialog-centered" id="modalUbah">
        <div class="form">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="text-center">Dew</h3>
                        <hr>
                        <p class="text-center">INFORMASI DETAIL</p>
                        <hr>
                        <div class="row">
                            <div class="col-4">ID :</div>
                            <div class="col-8">#8322</div>
                            <div class="col-4">Nama :</div>
                            <div class="col-8">Dew</div>
                            <div class="col-4">Jenis Kelamin :</div>
                            <div class="col-8">Perempuan</div>
                            <div class="col-4">Tanggal Lahir :</div>
                            <div class="col-8">6 Juli 1999</div>
                            <div class="col-4">Alamat :</div>
                            <div class="col-8">Denpasar</div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                <x-input-form label="ID">
                                    <input type="text" class="form-control" value="8322">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Nama">
                                    <input type="text" class="form-control" value="Dew">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Jenis Kelamin">
                                    <select class="form-control">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan" selected>Perempuan</option>
                                    </select>
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Tanggal Lahir">
                                    <input type="date" class="form-control" value="2020-07-03">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-8">
                                <x-input-form label="Alamat">
                                    <textarea class="form-control" rows="5">Denpasar</textarea>
                                </x-input-form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="feather icon-check"></i> Ubah</button>
            </div>
        </div>
    </x-modal>
    <!--/ Card Statistic -->
@endsection

@section('js')
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('table').DataTable();
        });
    </script>
@endsection