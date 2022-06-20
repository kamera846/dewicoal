@extends('layouts.main')

@section('page-content')

<!-- Start Page Title Area -->
<div class="page-title-area bg-8">
    <div class="container">
        <div class="page-title-content">
            <h2>Kontak</h2>

            <ul>
                <li>
                    <a href="index.html"> Beranda </a>
                </li>

                <li class="active">Kontak</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Map Area -->
<div class="map-area pb-100">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15781.630483764986!2d120.31678867940764!3d-8.556744132663864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db382bc86005533%3A0xa021653391381317!2sCoal%2C%20Kec.%20Kuwus%2C%20Kabupaten%20Manggarai%20Barat%2C%20Nusa%20Tenggara%20Tim.!5e0!3m2!1sid!2sid!4v1655204016791!5m2!1sid!2sid"
    ></iframe>
</div>
<!-- End Map Area -->

<!-- Start Contact Area -->
<section class="main-contact-area pb-100">
    <div class="container">
        <div class="contact-bg">
            <div class="contact-info">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-contact-info">
                            <h3>Lokasi</h3>
                            <p>
                                <i class="ri-map-pin-fill"></i>
                                Desa Coal, Kecamatan Kuwus, <br />
                                Kabupaten Manggrai Barat - NTT
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="single-contact-info">
                            <h3>Telepon</h3>

                            <p>
                                <i class="ri-phone-fill"></i>
                                <a href="tel:+6281353262678">+62 813 5326 2678</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="single-contact-info">
                            <h3>Email</h3>

                            <p>
                                <i class="ri-mail-open-fill"></i>
                                <a href="mailto:info@wikin.com">info@wikin.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-title green-title">
                <h2>Lebih Dekat</h2>
                <p>Hubungi kami melalui <a target="_blank" href="https://api.whatsapp.com/send?phone=6281353262678">Whatsapp</a> dengan mengisi formulir yang ada di bawah ini</p>
            </div>

            <form id="contactForm">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Nama anda</label>
                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Alamat email</label>
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Isi pesan</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">Kirim pesan</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Contact Area -->

@endsection
