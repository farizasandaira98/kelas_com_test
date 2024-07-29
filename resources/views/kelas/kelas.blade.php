<div class="container" style="margin-top: 120px" id="kelas">
<div class="row">
  <div class="col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">
    <h1>Lebih Dari 2000+ Learning Video</h1>
    <div class="w-50">
    <p>Kami juga sudah menyediakan banyak pelatihan yang beragam, pelatihan disusun dan dibuat oleh tim kurikulum profesional bersama tim video profesional untuk menghasilkan video dengan kualitas tinggi</p>
    </div>
  </div>
  <div class="col-md-12 col-sm-12 mt-5">
    <div class="row align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-50">
        <div class="col-md-4 col-sm-12">
          <a href="#" class="btn btn-primary btn-block" style="background-color: #C2A16B; border: none;">Kelas.com</a>
        </div>
        <div class="col-md-4 col-sm-12">
          <a href="#" class="btn btn-primary btn-block" style="background-color: #C2A16B; border: none;">Kelas.work</a>
        </div>
        <div class="col-md-4 col-sm-12">
          <a href="#" class="btn btn-primary btn-block" style="background-color: #C2A16B; border: none;">Bootcamp</a>
        </div>
        </div>
    </div>
  </div>
  <div class="col-md-12 col-sm-12 mt-5">
  @php
    $items = [
        ['title' => 'Public Speaking: Merdeka Dalam Bicara', 'speaker' => 'Pandji Pragiwaksono', 'role' => 'Presenter Televisi & Komika', 'image' => 'banner-card-class/banner.jpg'],
        ['title' => 'Public Speaking: Merdeka Dalam Bicara', 'speaker' => 'Pandji Pragiwaksono', 'role' => 'Presenter Televisi & Komika', 'image' => 'banner-card-class/banner.jpg'],
        ['title' => 'Public Speaking: Merdeka Dalam Bicara', 'speaker' => 'Pandji Pragiwaksono', 'role' => 'Presenter Televisi & Komika', 'image' => 'banner-card-class/banner.jpg'],
        ['title' => 'Public Speaking: Merdeka Dalam Bicara', 'speaker' => 'Pandji Pragiwaksono', 'role' => 'Presenter Televisi & Komika', 'image' => 'banner-card-class/banner.jpg'],
        ['title' => 'Public Speaking: Merdeka Dalam Bicara', 'speaker' => 'Pandji Pragiwaksono', 'role' => 'Presenter Televisi & Komika', 'image' => 'banner-card-class/banner.jpg'],
        ['title' => 'Public Speaking: Merdeka Dalam Bicara', 'speaker' => 'Pandji Pragiwaksono', 'role' => 'Presenter Televisi & Komika', 'image' => 'banner-card-class/banner.jpg'],
    ];
    $chunkedItems = array_chunk($items, 3); // Split items into chunks of 3
@endphp

@if(count($items) > 3)
    <div id="customCarousel" class="carousel slide p-3" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
            @foreach($chunkedItems as $index => $chunk)
                <div class="carousel-item @if($index == 0) active @endif">
                    <div class="row">
                        @foreach($chunk as $item)
                            <div class="col-md-4 col-sm-12 mb-3">
                                <div class="card h-100">
                                    <div class="position-relative">
                                        <div class="play-circle position-absolute" style="left: calc(50% - 18px); bottom: calc(50% - 18px);">
                                            <img src="{{ asset('icons/play.svg') }}" alt="play" class="play-icon">
                                        </div>
                                        <img src="{{ asset($item['image']) }}" class="card-img-top" alt="{{ $item['title'] }}">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="d-flex align-items-start">{{ $item['title'] }}</h5>
                                        <p class="d-flex align-items-start">{{ $item['speaker'] }}</p>
                                        <p class="d-flex align-items-start">{{ $item['role'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end align-items-center">
        <a class="custom-next mr-3" href="#customCarousel" role="button" data-slide="prev" style="color: #c09c6c; font-size: 30px; text-decoration: none;">
            <span class="custom-arrow"><</span>
        </a>
        <a class="custom-next" href="#customCarousel" role="button" data-slide="next" style="color: #c09c6c; font-size: 30px; text-decoration: none;">
            <span class="custom-arrow">></span>
        </a>
        </div>
    </div>
@endif
</div>
  <div class="col-md-12 col-sm-12">
  </div>
</div>
</div>
</div>
