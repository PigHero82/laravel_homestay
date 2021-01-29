@extends('layouts.layout')

@section('title')
    Data Pemesanan
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection

@section('content')
    <!-- Card Statistic -->
    <section>
        <x-table class="" title="Daftar Data Pemesanan" description="" id="">
            <x-slot name="floatRight">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalTambah"><i class="feather icon-plus"></i> Tambah</button>
            </x-slot>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Tipe Kamar</th>
                    <th>Jenis Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th>Tanggal Check-In</th>
                    <th>Tanggal Check-Out</th>
                    <th>Total Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>8322</td>
                    <td>Dew</td>
                    <td>Standar</td>
                    <td>Double</td>
                    <td>1</td>
                    <td>1 Januari 2021</td>
                    <td>3 Januari 2021</td>
                    <td>Rp. 750.000</td>
                    <td>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-light modal-popup" data-toggle="modal" data-target="#modalUbah"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light modal-popup"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>8323</td>
                    <td>Asih</td>
                    <td>Premium</td>
                    <td>Twin</td>
                    <td>2</td>
                    <td>2 Januari 2021</td>
                    <td>4 Januari 2021</td>
                    <td>Rp. 1.800.000</td>
                    <td>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-light modal-popup" data-toggle="modal" data-target="#modalUbah"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light modal-popup"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>8324</td>
                    <td>Sutri</td>
                    <td>Delux</td>
                    <td>Double</td>
                    <td>1</td>
                    <td>3 Januari 2021</td>
                    <td>5 Januari 2021</td>
                    <td>Rp. 1.200.000</td>
                    <td>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-light modal-popup" data-toggle="modal" data-target="#modalUbah"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light modal-popup"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </x-table>
    </section>

    <x-modal title="Tambah Pemesanan" class="modal-lg modal-dialog-centered" id="modalTambah">
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
                        <x-input-form label="Tipe Kamar">
                            <select class="form-control">
                                <option value="Standar">Standar</option>
                                <option value="Premium">Premium</option>
                                <option value="Delux">Delux</option>
                            </select>
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Jenis Kamar">
                            <select class="form-control">
                                <option value="Double">Double</option>
                                <option value="Twin">Twin</option>
                            </select>
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Jumlah Kamar">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Tanggal Check-In">
                            <input type="date" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Tanggal Check-Out">
                            <input type="date" class="form-control">
                        </x-input-form>
                    </div>
                    
                    <div class="col-md-4">
                        <x-input-form label="Total Pemesanan">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="feather icon-check"></i> Simpan</button>
            </div>
        </div>
    </x-modal>

    <x-modal title="Ubah Pemesanan | Dew" class="modal-xl modal-dialog-centered" id="modalUbah">
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
                            <div class="col-4">Tipe :</div>
                            <div class="col-8">Standar</div>
                            <div class="col-4">Jenis :</div>
                            <div class="col-8">Double</div>
                            <div class="col-4">Jumlah :</div>
                            <div class="col-8">1</div>
                            <div class="col-4">Check-In :</div>
                            <div class="col-8">1 Januari 2021</div>
                            <div class="col-4">Check-Out :</div>
                            <div class="col-8">3 Januari 2021</div>
                            <div class="col-4">Total :</div>
                            <div class="col-8">Rp. 750.000</div>
                            <hr>
                            <div class="col-4">Status :</div>
                            <div class="col-8">Confirm</div>
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
                                <x-input-form label="Tipe Kamar">
                                    <select class="form-control">
                                        <option value="Standar">Standar</option>
                                        <option value="Premium">Premium</option>
                                        <option value="Delux">Delux</option>
                                    </select>
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Jenis Kamar">
                                    <select class="form-control">
                                        <option value="Double">Double</option>
                                        <option value="Twin">Twin</option>
                                    </select>
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Jumlah Kamar">
                                    <input type="text" class="form-control" value="1">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Tanggal Check-In">
                                    <input type="date" class="form-control" value="2020-01-01">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Tanggal Check-Out">
                                    <input type="date" class="form-control" value="2020-01-03">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Total Pemesanan">
                                    <input type="text" class="form-control" value="750000">
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