@extends('layouts.layout')

@section('title')
    Data Pembayaran
@endsection

@section('content')
    <!-- Card Statistic -->
    <section>
        <x-table class="" title="Daftar Data Pembayaran" description="" id="">
            <x-slot name="floatRight">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalTambah"><i class="feather icon-plus"></i> Tambah</button>
            </x-slot>
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Kamar</th>
                    <th>Pemesan</th>
                    <th>Status</th>
                    <th>Pembayaran</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>S01</td>
                    <td>Mawar</td>
                    <td>Tedy</td>
                    <td>Booking 1 Januari 2021</td>
                    <td>Rp. 550.000</td>
                    <td>Lunas</td>
                    <td>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-light modal-popup" data-toggle="modal" data-target="#modalUbah"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light modal-popup"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>S02</td>
                    <td>Mawar</td>
                    <td>Adi</td>
                    <td>Booking 4 Januari 2021</td>
                    <td>Rp. 550.000</td>
                    <td>Lunas</td>
                    <td>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-light modal-popup" data-toggle="modal" data-target="#modalUbah"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light modal-popup"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </x-table>
    </section>

    <x-modal title="Tambah Pembayaran" class="modal-lg modal-dialog-centered" id="modalTambah">
        <div class="form">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <x-input-form label="Kode">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Nama Kamar">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Pemesan">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Status">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Pembayaran">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Keterangan">
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

    <x-modal title="Ubah Pembayaran | Mawar" class="modal-xl modal-dialog-centered" id="modalUbah">
        <div class="form">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <h3 class="text-center">Mawar</h3>
                        <hr>
                        <p class="text-center">INFORMASI DETAIL</p>
                        <hr>
                        <div class="row">
                            <div class="col-4">Kode :</div>
                            <div class="col-8">#S01</div>
                            <div class="col-4">Kamar :</div>
                            <div class="col-8">Mawar</div>
                            <div class="col-4">Pemesan :</div>
                            <div class="col-8">Tedy</div>
                            <div class="col-4">Status :</div>
                            <div class="col-8">Booking 1 Januari 2021</div>
                            <div class="col-4">Pembayaran :</div>
                            <div class="col-8">Rp. 550.000</div>
                            <div class="col-4">Keterangan :</div>
                            <div class="col-8">Lunas</div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                <x-input-form label="Kode">
                                    <input type="text" class="form-control" value="S01">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Nama Kamar">
                                    <input type="text" class="form-control" value="Mawar">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Pemesan">
                                    <input type="text" class="form-control" value="Tedy">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Status">
                                    <input type="text" class="form-control" value="Booking 1 Januari 2021">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Pembayaran">
                                    <input type="text" class="form-control" value="550000">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Keterangan">
                                    <input type="text" class="form-control" value="Lunas">
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