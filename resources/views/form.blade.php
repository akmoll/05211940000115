<!-- Menghubungkan dengan view template master -->
@extends('master')

@section('konten')


    <div class="col-sm-6">
        <p1>Dibawah ini merupakan cara pemesanan pada Playstation Store</p1>
        <br>Untuk cara pengisian, customer mengisi data-data diri seperti nama, alamat , dan email. Kemudian memilih barang yang hendak dibeli.Kemudian customer memilih metode pembayaran yang ada.</br>
    </div>

    <div class="container">
        <form>
            <div class="row">
                <div class="col-25">
                    <label for="name">Nama Lengkap</label>
                </div>
                <div class="col-75">
                    <input type="text" id="nama" name="nama" placeholder="nama lengkap">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="notel">Nomor Telepon</label>
                </div>
                <div class="col-75">
                    <input type="text" id="notel" name="notelpon" placeholder="nomor telepon">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="text" id="email" name="email" class="infobox">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="alamat">Alamat</label>
                </div>
                <div class="col-75">
                    <input type="text" id="alamat" name="alamat">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="country">Pesanan</label>
                </div>
                <div class="col-75">
                    <select id="pesanan" name="pesanan">
                        <option value="0" selected="0">Pilih</option>
                        <option value="ps5">Playstation 5</option>
                        <option value="ps4">Playstation 4</option>
                        <option value="cj">Console Joystick</option>
                        <option value="kps5">Kaset PS5</option>
                        <option value="kps4">Kaset PS4</option>
                        <option value="psa">PS Accessories</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="country">Metode Pembayaran</label>
                </div>
                <div class="col-75">
                    <select id="pesanan" name="pesanan">
                        <option value="0" selected="0">Pilih</option>
                        <option value="ovo">OVO</option>
                        <option value="gopay">GO-pay</option>
                        <option value="mandiri">Transfer Bank Mandiri</option>
                        <option value="la">LinkAja</option>
                        <option value="dana">DANA</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    @endsection
