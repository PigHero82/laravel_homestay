@extends('layouts.layout')

@section('title')
    Laporan Pembayaran
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection

@section('content')
    <!-- Table -->
    <section>
        <x-table class="" title="Tabel Laporan Pembayaran" description="" id="">
            <x-slot name="floatRight">
                <button type="button" class="btn btn-primary"><i class="feather icon-printer"></i> Cetak</button>
            </x-slot>
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Kamar</th>
                    <th>Pemesan</th>
                    <th>Status</th>
                    <th>Pembayaran</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>P01</td>
                    <td>Mawar</td>
                    <td>Tedy</td>
                    <td>Booking 1 Januari 2021</td>
                    <td>Rp. 550.000</td>
                    <td>Lunas</td>
                </tr>
                <tr>
                    <td>P03</td>
                    <td>Mawar</td>
                    <td>Ayu</td>
                    <td>Booking 7 Januari 2021</td>
                    <td>Rp. 550.000</td>
                    <td>Lunas</td>
                </tr>
            </tbody>
        </x-table>
    </section>
    <!--/ Table -->
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