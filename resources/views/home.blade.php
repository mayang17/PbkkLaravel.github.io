@extends('app')
@section('content')
<section id="intro" class="position-relative mt-4">
    <div class="container-lg">
  <div class="swiper main-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="card d-flex flex-row align-items-end border-0 large jarallax-keep-img position-relative">
          <img src="https://i.pinimg.com/736x/c7/4a/08/c74a0808ef8a7d4c18344b668050ff3c.jpg" alt="hair" class="img-fluid jarallax-img">
          <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5 position-absolute bottom-0 left-0">
            <h2 class="card-title display-3 text-white">BABERSHOP</h2>
            <a href="index.html" class="text-uppercase text-white mt-3 d-inline-block text-hover fw-bold border border-light p-2 rounded">Check Now</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="row g-4">
          <div class="col-lg-12 mb-4">
            <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img position-relative">
              <img src="https://id-test-11.slatic.net/p/c5525fb2ce3b2086572c342055f64de6.jpg" alt="shoes" class="img-fluid jarallax-img">
              <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5 position-absolute bottom-0 left-0">
                <h2 class="card-title display-4 text-white">Hair Style</h2>
                <a href="index.html" class="text-uppercase text-white mt-3 d-inline-block text-hover fw-bold border border-light p-2 rounded">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img position-relative">
              <img src="https://i.pinimg.com/736x/42/50/be/4250be353872c01f14142cc8a20284ee.jpg">
              <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5 position-absolute bottom-0 left-0">
                <h2 class="card-title display-4 text-white">Hair Style For Kids</h2>
                <a href="index.html" class="text-uppercase text-white mt-3 d-inline-block text-hover fw-bold border border-light p-2 rounded">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img position-relative">
          <img src="https://images.tokopedia.net/img/cache/1500/VqbcmM/2021/12/18/70ddb709-d303-4580-b5a3-2156d69216d2.jpg" alt="shoes" class="img-fluid jarallax-img">
          <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5 position-absolute bottom-0 left-0">
            <h2 class="card-title display-3 text-white">Hair Style for Men</h2>
            <a href="index.html" class="text-uppercase text-white mt-3 d-inline-block text-hover fw-bold border border-light p-2 rounded">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="row g-4">
          <div class="col-lg-12 mb-4">
            <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img position-relative">
              <img src="https://i.pinimg.com/736x/8d/91/3c/8d913cfd56b6d1790a55c3fb5de05732.jpg" alt="hair" class="img-fluid jarallax-img">
              <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5 position-absolute bottom-0 left-0">
                <h2 class="card-title display-4 text-white"> Hair Style for Kids</h2>
                <a href="index.html" class="text-uppercase text-white mt-3 d-inline-block text-hover fw-bold border border-light p-2 rounded">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img position-relative">
              <img src="https://id-test-11.slatic.net/p/ddd17d9acd2f7ce5759c123d1b8e29a2.jpg" alt="hair" class="img-fluid jarallax-img">
              <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5 position-absolute bottom-0 left-0">
                <h2 class="card-title display-4 text-white">Style Hair for You</h2>
                <a href="index.html" class="text-uppercase text-white mt-3 d-inline-block text-hover fw-bold border border-light p-2 rounded">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-pagination"></div>
</div>

<style>
  .card {
    transition: transform 0.3s ease;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
  }
  
  .card:hover {
    transform: scale(1.05);
  }

  .text-hover:hover {
    background-color: rgba(255, 255, 255, 0.2);
    transition: background-color 0.3s ease;
  }

  .light-border {
    border: 2px solid rgba(255, 255, 255, 0.7);
  }
</style>

  </section>
  <section id="featured-products" class="product-store">
    <div class="container-md">
      <div class="display-header d-flex align-items-center justify-content-between">
        <h2 class="section-title text-uppercase">Style Hair</h2>
        <div class="btn-right">
          <a href="index.html" class="d-inline-block text-uppercase text-hover fw-bold">View all</a>
        </div>
      </div>
      <div class="product-content padding-small">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
          <div class="col mb-4">
            <div class="product-card position-relative">
              <div class="card-img">
                <img src="https://giovanibarbershop.com/wp-content/uploads/2020/05/Gaya-Rambut-Undercut-dengan-Pompadour.jpg" alt="product-item" class="product-image img-fluid">
                <div class="cart-concern position-absolute d-flex justify-content-center">
                  <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                      <svg class="shopping-carriage">
                        <use xlink:href="#shopping-carriage"></use>
                      </svg>
                    </button>
                    <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                      <svg class="quick-view">
                        <use xlink:href="#quick-view"></use>
                      </svg>
                    </button>
                  </div>
                </div>
                <!-- cart-concern -->
              </div>
              <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                <h3 class="card-title fs-6 fw-normal m-0">
                  <a href="index.html">UnderCut Pompadour</a>
                </h3>
                <span class="card-price fw-bold">$99</span>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="product-card position-relative">
              <div class="card-img">
                <img src="https://giovanibarbershop.com/wp-content/uploads/2020/05/French-Crop-dengan-Undercut.jpg" alt="product-item" class="product-image img-fluid">
                <div class="cart-concern position-absolute d-flex justify-content-center">
                  <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                      <svg class="shopping-carriage">
                        <use xlink:href="#shopping-carriage"></use>
                      </svg>
                    </button>
                    <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                      <svg class="quick-view">
                        <use xlink:href="#quick-view"></use>
                      </svg>
                    </button>
                  </div>
                </div>
                <!-- cart-concern -->
              </div>
              <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                <h3 class="card-title fs-6 fw-normal m-0">
                  <a href="index.html">Caesar Cut</a>
                </h3>
                <span class="card-price fw-bold">$99</span>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="product-card position-relative">
              <div class="card-img">
                <img src="https://www.tezzen.com/wp-content/uploads/2019/11/3a4c63baa6836a89b43f51847ace9194.jpg" alt="product-item" class="product-image img-fluid">
                <div class="cart-concern position-absolute d-flex justify-content-center">
                  <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                      <svg class="shopping-carriage">
                        <use xlink:href="#shopping-carriage"></use>
                      </svg>
                    </button>
                    <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                      <svg class="quick-view">
                        <use xlink:href="#quick-view"></use>
                      </svg>
                    </button>
                  </div>
                </div>
                <!-- cart-concern -->
              </div>
              <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                <h3 class="card-title fs-6 fw-normal m-0">
                  <a href="index.html">Buzz Cut</a>
                </h3>
                <span class="card-price fw-bold">$99</span>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="product-card position-relative">
              <div class="card-img">
                <img src="https://www.tezzen.com/wp-content/uploads/2019/11/Short-Mohawk-Fade.jpg" alt="product-item" class="product-image img-fluid">
                <div class="cart-concern position-absolute d-flex justify-content-center">
                  <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                      <svg class="shopping-carriage">
                        <use xlink:href="#shopping-carriage"></use>
                      </svg>
                    </button>
                    <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                      <svg class="quick-view">
                        <use xlink:href="#quick-view"></use>
                      </svg>
                    </button>
                  </div>
                </div>
                <!-- cart-concern -->
              </div>
              <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                <h3 class="card-title fs-6 fw-normal m-0">
                  <a href="index.html">Mohawk</a>
                </h3>
                <span class="card-price fw-bold">$99</span>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="product-card position-relative">
              <div class="card-img">
                <img src="https://giovanibarbershop.com/wp-content/uploads/2020/05/Potongan-Rambut-Pria-Undercut-dengan-Faux-Hawk.jpg" alt="product-item" class="product-image img-fluid">
                <div class="cart-concern position-absolute d-flex justify-content-center">
                  <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                      <svg class="shopping-carriage">
                        <use xlink:href="#shopping-carriage"></use>
                      </svg>
                    </button>
                    <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                      <svg class="quick-view">
                        <use xlink:href="#quick-view"></use>
                      </svg>
                    </button>
                  </div>
                </div>
                <!-- cart-concern -->
              </div>
              <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                <h3 class="card-title fs-6 fw-normal m-0">
                  <a href="index.html">Under cut Faux Hawk</a>
                </h3>
                <span class="card-price fw-bold">$99</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection