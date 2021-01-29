@extends('layouts.layout')

@section('title')
    Data User
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection

@section('content')
    <!-- Card Statistic -->
    <section>
        <x-table class="" title="Daftar Data User" description="" id="">
            <x-slot name="floatRight">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalTambah"><i class="feather icon-plus"></i> Tambah</button>
            </x-slot>
            <thead>
                <tr>
                    <th>Nama User</th>
                    <th>Gender</th>
                    <th>Tempat Lahir</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>E-Mail</th>
                    <th>Level User</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ratih Pradnya</td>
                    <td>Perempuan</td>
                    <td>3 Juli 1999</td>
                    <td>Denpasar</td>
                    <td>081234567890</td>
                    <td>ratih@gmail.com</td>
                    <td>Pimpinan</td>
                    <td>Aktif</td>
                    <td>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-light modal-popup" data-toggle="modal" data-target="#modalUbah"><i class="feather icon-edit-2"></i></button>
                        <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-light modal-popup"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </x-table>
    </section>

    <x-modal title="Tambah User" class="modal-lg modal-dialog-centered" id="modalTambah">
        <div class="form">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <x-input-form label="Nama User">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Gender">
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

                    <div class="col-md-4">
                        <x-input-form label="No Telepon">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Email">
                            <input type="text" class="form-control">
                        </x-input-form>
                    </div>

                    <div class="col-md-4">
                        <x-input-form label="Level User">
                            <select class="form-control">
                                <option value="Pimpinan">Pimpinan</option>
                                <option value="Staff">Staff</option>
                            </select>
                        </x-input-form>
                    </div>
                    
                    <div class="col-md-4">
                        <x-input-form label="Status">
                            <select class="form-control">
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                        </x-input-form>
                    </div>

                    <div class="col-md-8">
                        <x-input-form label="Alamat">
                            <textarea class="form-control" rows="5"></textarea>
                        </x-input-form>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><i class="feather icon-check"></i> Simpan</button>
                </div>
            </div>
        </div>
    </x-modal>

    <x-modal title="Ubah User | Ratih Pradnya" class="modal-xl modal-dialog-centered" id="modalUbah">
        <div class="form">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <div class="text-center">
                            <span><img class="round" src="{{ asset('assets/images/profile/blank.png') }}" alt="avatar" height="150" width="150"></span>
                        </div>
                        <h3 class="text-center">Ratih Pradnya</h3>
                        <hr>
                        <p class="text-center">INFORMASI DETAIL</p>
                        <hr>
                        <div class="row">
                            <div class="col-4">Nama :</div>
                            <div class="col-8">Ratih Pradnya</div>
                            <div class="col-4">Gender :</div>
                            <div class="col-8">Perempuan</div>
                            <div class="col-4">Tanggal Lahir :</div>
                            <div class="col-8">3 Juli 1999</div>
                            <div class="col-4">No Telepon :</div>
                            <div class="col-8">081234567890</div>
                            <div class="col-4">E-Mail :</div>
                            <div class="col-8">ratih@gmail.com</div>
                            <div class="col-4">Level User :</div>
                            <div class="col-8">Pimpinan</div>
                            <div class="col-4">Status :</div>
                            <div class="col-8">Aktif</div>
                            <div class="col-4">Alamat :</div>
                            <div class="col-8">Denpasar</div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                <x-input-form label="Nama User">
                                    <input type="text" class="form-control" value="Ratih Pradnya">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Gender">
                                    <select class="form-control">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan" selected>Perempuan</option>
                                    </select>
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Tanggal Lahir">
                                    <input type="date" class="form-control" value="1999-07-03">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="No Telepon">
                                    <input type="text" class="form-control" value="081234567890">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Email">
                                    <input type="text" class="form-control" value="ratih@gmail.com">
                                </x-input-form>
                            </div>
        
                            <div class="col-md-4">
                                <x-input-form label="Level User">
                                    <select class="form-control">
                                        <option value="Pimpinan" selected>Pimpinan</option>
                                        <option value="Staff">Staff</option>
                                    </select>
                                </x-input-form>
                            </div>
                            
                            <div class="col-md-4">
                                <x-input-form label="Status">
                                    <select class="form-control">
                                        <option value="Aktif" selected>Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
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

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><i class="feather icon-check"></i> Simpan</button>
                </div>
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