@extends('layouts.main')
@section('title', 'Olivia Liptiay | Daftar Kue')
@section('artikel')
<div>
    <div class="mb-3">
    <label class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" placeholder="Masukan Nama Anda">
    </div>
    <div class="mb-3">
    <label class="form-label">Nomor Telepon</label>
    <input type="email" class="form-control" placeholder="Masukan Nomor Telepon Anda">
    </div>
    <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Masukan Email Anda">
    </div>
    <div class="mb-3">
    <label class="form-label">Pilih Kriteria Yang Sesuai</label>
    <select class="custom-select">
        <option selected>Pilih Disini</option>
        <option value="1">Kritik</option>
        <option value="2">Saran</option>
        <option value="3">Petanyaan</option>
        <option value="4">Pengaduan</option>
    </select>
    </div>
    <div class="mb-3">
    <label class="form-label">Pesan: </label>
    <textarea class="form-control"rows="3"></textarea>
    </div>
    <div class="d-grid gap-2 d-md-block">
    <button class="btn btn-secondary" type="button">Kirim</button> 
    </div>
</div>
<footer>
    <div class="container mt-4">
        <div class="row" style="background-color: #333;color: #fff; padding: 20px 0; text-align: center;">
            <div class="col-md-4">
                <h4>Our Store </h4>
                <p> &#128205; Jl. Jembatan Merah, Affandi <br> Gejayan, Yogyakarta, Indonesia </p>
            </div>
            <div class="col-md-4">
                <h4>Operational Hours </h4>
                <p>Monday - Saturday <br> 09.00 - 20.00 WIB </p>
            </div>
            <div class="col-md-4">
                <h4>WhatsApp Booking</h4>
                <p>&#128383; (+62) 812 4220 208</p>
            </div>
        </div>
    </div>

</footer>
    @endsection
