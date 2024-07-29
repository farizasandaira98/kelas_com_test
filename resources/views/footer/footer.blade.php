<div class="container mw-100 m-0 p-0" id="kontak">
<div class="footer-section" style="background-color: #3a2f20; background-image: url('{{ asset('banner-card-class/banner-footer.jpg') }}'); background-size: cover; text-align: center; padding: 100px 0; color: white; margin-top: 60px; background-blend-mode: overlay;">
    <div class="row p-5 w-100">
    <div class="col-sm-12 col-md-12 p-0">
    <h1 style="font-size: 36px; font-weight: bold;">Tingkatkan Kualitas Perusahaan Anda</h1>
    </div>
    <div class="col-sm-12 col-md-12 p-0">
    <p style="font-size: 18px; margin: 20px 0;">Kami ingin membantu dan menunjukkan kepada Anda bagaimana Kelas corp dapat membantu dalam mengelola pelatihan dan membuat prosesnya lebih cepat dan lebih mudah.</p>
    </div>
    <div class="col-sm-12 col-md-12 p-0">
    <a href="#" class="btn" style="background-color: #C2A16B; color: white; border: none; border-radius: 5px; padding: 10px 20px; text-decoration: none; display: inline-block;">Ajukan Demo</a>
    </div>
    </div>
</div>
<div class="footer-contact-section" style="background-color: #1A1A1A; color: white; height: 100%">
    <div class="row w-100" style="padding: 100px;">
        <div class="col-md-6 col-sm-12">
            <div class="row p-0 m-0">
                <div class="col-md-12 col-sm-12">
                    <img src="{{ asset('brand-logo-white.svg') }}" alt="Logo" class="w-100" style="max-width: 150px;">
                </div>
                <div class="col-md-12 col-sm-12 mt-3">
                    <p class="text-white">
                        © 2021 Landify UI Kit. All rights reserved
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="d-flex flex-column align-items-start justify-content-start">
                        <h5 class="text-white fw-bold mb-4">
                        Company
                        </h5>
                        <ul style="list-style: none; color: white; padding: 0;">
                            <li style="padding-top: 5px; padding-bottom: 5px">Tentang Kami</li>
                            <li style="padding-top: 5px; padding-bottom: 5px">Ajukan Demo</li>
                            <li style="padding-top: 5px; padding-bottom: 5px">Kelas.Work</li>
                            <li style="padding-top: 5px; padding-bottom: 5px">Kelas.Com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                <div class="d-flex flex-column align-items-start justify-content-start">
                        <h5 class="text-white fw-bold mb-4">
                        Kebijakan
                        </h5>
                        <ul style="list-style: none; color: white; padding: 0;">
                            <li style="padding-top: 5px; padding-bottom: 5px">Kebijakan Privasi</li>
                            <li style="padding-top: 5px; padding-bottom: 5px">Syarat & Ketentuan</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                <div class="d-flex flex-column align-items-start justify-content-start">
                        <h5 class="text-white fw-bold mb-4">
                        Hubungi Kami
                        </h5>
                        <ul style="list-style: none; color: white; padding: 0;">
                            <li style="padding-top: 5px; padding-bottom: 5px">
                                <div style="display: flex; align-items: center;">
                                    <i class="bi bi-envelope" style="margin-right: 10px; font-size: 14px;"></i>
                                    <p style="margin: 0; font-size: 14px;">Nabilla.Anggraini@kelas.com</p>
                                </div>
                            <li style="padding-top: 5px; padding-bottom: 5px">
                                <div style="display: flex; align-items: center;">
                                    <i class="bi bi-whatsapp" style="margin-right: 10px; font-size: 14px;"></i>
                                    <p style="margin: 0; font-size: 14px;">+62 811 3366 763 (Nabilla Anggraini)</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            var loader = document.getElementById('loader');
            var beranda = document.getElementById('beranda');
            var benefit = document.getElementById('benefit');
            var paket = document.getElementById('paket');
            var navbarFirst = document.getElementById('navbar-first');
            var kelas = document.getElementById('kelas');
            var kontak = document.getElementById('kontak');
            
            setTimeout(function() {
                loader.style.display = 'none';
                beranda.style.display = 'block';
                benefit.style.display = 'block';
                paket.style.display = 'block';
                navbarFirst.style.display = 'block';
                kelas.style.display = 'block';
                kontak.style.display = 'block';
            }, 2000);

            const navbarLinks = document.querySelectorAll('.navbar-nav .nav-link');
            navbarLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = this.getAttribute('href').slice(1);
                    const targetElement = document.getElementById(target);
                    if (targetElement) {
                        targetElement.scrollIntoView({behavior: 'smooth'});
                    }
                });
            });
        });
    </script>
</html>