<footer class="bd-footer py-5 mt-5 bg-light">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-3 mb-3">
          <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">
            <img src="{{asset('image/')}}/Lumos.png" alt="" width="80" height="32" class="d-block me-2" viewBox="0 0 118 94" role="img">
            <span class="fs-5">Hotel</span>
          </a>
          <ul class="list-unstyled small text-muted">
            <li class="mb-2">
              Lumos Hotel, merupakan salah satu hotel terbaik di kota Bandung yang dekat dengan pusat kota. 
              Didukung dengan kolam renang serta fasilitas lainnya akan membuat liburan Anda semakin menyenangkan.
            </li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 offset-lg-1 mb-3">
          <h5>Fasilitas</h5>
          @if (@$fasilitashotel)
            @foreach ($fasilitashotel as $item)
              <ul class="list-unstyled">
                <li class="mb-2">{{$item->nama_fasilitas}}</li>
              </ul>
            @endforeach
          @endif 
        </div>
        <div class="col-6 col-lg-2 offset-lg-1 mb-3">
          <h5>Halaman</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href={{route('dashboard.index')}}>Admin</a></li>
            <li class="mb-2"><a href={{route('search')}}>Resepsionis</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 offset-lg-1 mb-3">
          <h5>Kontak Kami</h5>
          <ul class="list-unstyled">
            <li class="mb-2">lumoshotel@gmail.com</li>
            <li class="mb-2">nisaeni53@gmail.com</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>