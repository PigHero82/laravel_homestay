@extends('layouts.layout')

@section('title')
    Data Kamar
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection

@section('content')
    <!-- Card Statistic -->
    <section>
        <x-table class="" title="Daftar Data Kamar" description="" id="">
            <x-slot name="floatRight">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalTambah"><i class="feather icon-plus"></i> Tambah</button>
            </x-slot>
            <thead>
                <tr>
                    <th>Tipe Kamar</th>
                    <th>Harga</th>
                    <th>Jenis</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Standar</td>
                    <td>Rp. 250.000</td>
                    <td>Double</td>
                    <td>Tersedia</td>
                    <td>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-light modal-popup" data-toggle="modal" data-target="#modalUbah"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light modal-popup"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Standar</td>
                    <td>Rp. 250.000</td>
                    <td>Twin</td>
                    <td>Tersedia</td>
                    <td>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-light modal-popup" data-toggle="modal" data-target="#modalUbah"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light modal-popup"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Premium</td>
                    <td>Rp. 300.000</td>
                    <td>Double</td>
                    <td>Tersedia</td>
                    <td>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-light modal-popup" data-toggle="modal" data-target="#modalUbah"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light modal-popup"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Premium</td>
                    <td>Rp. 300.000</td>
                    <td>Twin</td>
                    <td>Tersedia</td>
                    <td>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-light modal-popup" data-toggle="modal" data-target="#modalUbah"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light modal-popup"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Delux</td>
                    <td>Rp. 400.000</td>
                    <td>Double</td>
                    <td>Tersedia</td>
                    <td>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-light modal-popup" data-toggle="modal" data-target="#modalUbah"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light modal-popup"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Delux</td>
                    <td>Rp. 400.000</td>
                    <td>Twin</td>
                    <td>Tersedia</td>
                    <td>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-light modal-popup" data-toggle="modal" data-target="#modalUbah"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light modal-popup"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </x-table>
    </section>

    <x-modal title="Tambah Kamar" class="modal-lg modal-dialog-centered" id="modalTambah">
        <div class="form">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <x-input-form label="ID Kamar">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Jenis">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Tipe Kamar">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Harga">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Status">
                            <select class="form-control">
                                <option value="Tersedia">Tersedia</option>
                                <option value="Tidak Tersedia">Tidak Tersedia</option>
                            </select>
                        </x-input-form>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="feather icon-check"></i> Simpan</button>
            </div>
        </div>
    </x-modal>

    <x-modal title="Ubah Kamar" class="modal-xl modal-dialog-centered" id="modalUbah">
        <div class="form">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <div class="row">
                            <div class="col-4">ID Kamar :</div>
                            <div class="col-8">#1</div>
                            <div class="col-4">Jenis :</div>
                            <div class="col-8">Double</div>
                            <div class="col-4">Tipe :</div>
                            <div class="col-8">Standar</div>
                            <div class="col-4">Harga :</div>
                            <div class="col-8">Rp. 250.000</div>
                            <div class="col-4">Status :</div>
                            <div class="col-8">Tersedia</div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                <x-input-form label="ID Kamar">
                                    <input type="text" class="form-control" value="1">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Jenis">
                                    <input type="text" class="form-control" value="Double">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Tipe Kamar">
                                    <input type="text" class="form-control" value="Standar">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Harga">
                                    <input type="text" class="form-control" value="250000">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Status">
                                    <select class="form-control">
                                        <option value="Tersedia" selected>Tersedia</option>
                                        <option value="Tidak Tersedia">Tidak Tersedia</option>
                                    </select>
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