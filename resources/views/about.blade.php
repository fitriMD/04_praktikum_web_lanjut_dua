@extends('layouts.app')

@section('content')

<div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Tentang Kami&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Fila's Cafe</h2>
          <p class="gray-text tm-welcome-description" style="text-align:center"> Fila's Cafe adalah salah satu cafe di Malang yang menyediakan berbagai macam <span class="gold-text"> minuman dan makanan </span> dengan gaya pelayanan kekinian,
                                                                                 selain itu Fila's Cafe juga menyediakan minumam non-kopi bagi para pengunjungnya yang anti dengan kopi.Cafe House Fila's sendiri terkenal dengan cafe yang memiliki desain gedung cukup instagramable, sehingga tidak sedikit para pengunjung berbondong - berbondong
                                                                                 mendatangi Cafe House Fila's untuk mengabadikan momen terlebih di kala malam hari.</p>
          <a href="{{ url('/informasi1') }}" class="tm-more-button tm-more-button-welcome">Details</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">             
      </div>      
    </section>
    </br>
    </br>
    </br>
    </br>
    <div class="tm-popular-item">
              <img src="img/about/cafe6.jpg" alt="Popular" class="tm-popular-item-img" weight="180px" height="148px">
              <div class="tm-popular-item-description">
                <div class="order-now-container">
                <a href="#" class="order-now-link tm-handwriting-font">Fila's Cafe</a>
                </div>
              </div>              
            </div>
    <div class="tm-popular-item">
              <img src="img/about/cafe1.jpg" alt="Popular" class="tm-popular-item-img" weight="200px" height="191px">
              <div class="tm-popular-item-description">
                <div class="order-now-container">
                <a href="#" class="order-now-link tm-handwriting-font">Fila's Cafe</a>
                </div>
              </div>              
            </div>
    <div class="tm-popular-item">
              <img src="img/about/cafe2.jpg" alt="Popular" class="tm-popular-item-img" weight="190px" height="215px">
              <div class="tm-popular-item-description">
                <div class="order-now-container">
                <a href="#" class="order-now-link tm-handwriting-font">Fila's Cafe</a>
                </div>
              </div>              
            </div>        

@endsection