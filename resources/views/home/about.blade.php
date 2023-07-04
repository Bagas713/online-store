@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<section id="about" >
    <div class="container">
        <div class="row" style="color: rgb(213, 209, 209);">
            {{--  <h2 class="text-center font-weight:bolder;" style="color: whitesmoke">About Us</h2>  --}}
                <div class="about-content text-justify">
                    Selamat datang di website kami, destinasi terbaik untuk memenuhi kebutuhan laptop Anda. Kami adalah toko online yang menyediakan berbagai pilihan laptop dengan kualitas terbaik dan harga yang kompetitif. Dengan berbagai merek terkenal dan model terbaru, kami berkomitmen untuk menyediakan pengalaman belanja yang mudah, aman, dan memuaskan bagi pelanggan kami.
                    <br>
                    <br>
                    Di sini, Anda dapat menjelajahi katalog lengkap laptop kami yang mencakup berbagai jenis, mulai dari laptop gaming dengan spesifikasi tinggi hingga laptop ringan dan portabel untuk kebutuhan sehari-hari. Kami menawarkan produk-produk terbaru dari produsen terpercaya di industri teknologi, sehingga Anda dapat yakin akan kualitas dan keandalan setiap laptop yang kami jual.

                    Selain itu, kami juga memberikan informasi rinci tentang setiap laptop, termasuk spesifikasi teknis, fitur khusus, dan ulasan pengguna. Dengan demikian, Anda dapat membuat keputusan pembelian yang tepat berdasarkan kebutuhan dan preferensi Anda sendiri.
                    <br>
                    <br>
                    Terima kasih telah mengunjungi website penjualan laptop kami. Kami berharap dapat menjadi mitra terpercaya Anda dalam memilih laptop yang sesuai dengan kebutuhan Anda. Jelajahi koleksi kami dan temukan laptop impian Anda hari ini!
                    <br>
                    <br>

                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif

                    <h4 class="text-center font-weight:bolder;" style="font-size: 36px; color: whitesmoke">Hubungi Kami</h4>
                    <p class="text-center font-weight:bolder;" style="font-size: 20px; color: whitesmoke;">Jika Anda mempunyai pertanyaan ataupun feedback?</p>

                    <form action="{{ route('contact.store') }}" method="post" style="margin: 10px;">

                        @csrf

                        <label for="name">Nama</label>
                        <input class="form-control" type="text" name="name" placeholder="Nama Anda" />
                        <br>

                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Email Address Anda" />
                        <br>

                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="" placeholder="Masukan Anda" cols="30" rows="10"></textarea>

                        <br>
                        <button class="btn btn-primary btn-block">Send</button>
                    <form>
                </div>
            </div>
        </div>
    </div>

@endsection
