<!-- resources/views/products.blade.php -->
<x-layout>
  <div class="container mt-5">
    <h3 class="text-center mb-5 fw-bold">Our Products</h3>

    <div class="row d-flex justify-content-center g-4">
      <!-- Card pertama -->
      <div class="col-md-4">
        <div class="card custom-card">
          <div class="card-img-wrapper">
            <img
              src="https://tse4.mm.bing.net/th?id=OIP.xsJUFz07PBT7S9guxjApCgHaFu&pid=Api&P=0&h=180"
              class="card-img-top img-fluid" alt="Good Time Cookies">
          </div>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Smart Device</h5>
            <p class="card-text flex-grow-1"></p>
            <a href="{{ url('/product/good-time-cookies-assorted-144g') }}" class="btn btn-primary mt-auto">Show More</a>
          </div>
        </div>
      </div>

      <!-- Card kedua -->
      <div class="col-md-4">
        <div class="card custom-card">
          <div class="card-img-wrapper">
            <img src="https://tse1.mm.bing.net/th?id=OIP.59vNATJ_1M5rLt-1NClHoQHaEJ&pid=Api&P=0&h=180" class="card-img-top img-fluid"
              alt="Tango Wafer Chocolate">
          </div>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Smart Appliances</h5>
            <p class="card-text flex-grow-1"></p>
            <a href="{{ url('/product/SmartAppliances') }}" class="btn btn-primary mt-auto">Show More</a>
          </div>
        </div>
      </div>

      <!-- Card ketiga -->
      <div class="col-md-4">
        <div class="card custom-card">
          <div class="card-img-wrapper">
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//95/MTA-30109863/nabati_nabati_coklat_wafer_-300_g-_full05_rmljyh7b.jpg" class="card-img-top img-fluid"
              alt="Nabati Wafer Chocolate">
          </div>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Smart TV</h5>
            <p class="card-text flex-grow-1"></p>
            <a href="{{ url('/product/nabati-wafer-chocolate-240g') }}" class="btn btn-primary mt-auto">Show More</a>
          </div>
        </div>
      </div>

      <!-- Card keempat -->
      <div class="col-md-4">
        <div class="card custom-card">
          <div class="card-img-wrapper">
            <img src="https://c.alfagift.id/product/1/1_A10160000801_20240507140714835_base.jpg" class="card-img-top img-fluid"
              alt="Khong Guan Biscuit">
          </div>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Smart Watch</h5>
            <p class="card-text flex-grow-1"></p>
            <a href="{{ url('/product/khong-guan-biscuit') }}" class="btn btn-primary mt-auto">Show More</a>
          </div>
        </div>
      </div>

      <!-- Card kelima -->
      <div class="col-md-4">
        <div class="card custom-card">
          <div class="card-img-wrapper">
            <img src="https://c.alfagift.id/product/1/1_A10210003008_20250108112310007_base.jpg" class="card-img-top img-fluid"
              alt="Roma Biscuit Kelapa">
          </div>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Smart Home</h5>
            <p class="card-text flex-grow-1"></p>
            <a href="{{ url('/product/roma-biscuit-kelapa') }}" class="btn btn-primary mt-auto">Show More</a>
          </div>
        </div>
      </div>

      <!-- Card keenam -->
      <div class="col-md-4">
        <div class="card custom-card">
          <div class="card-img-wrapper">
            <img src="https://c.alfagift.id/product/1/1_A12370001071_20200221171014575_base.jpg" class="card-img-top img-fluid"
              alt="Marjan Syrup Squash Melon">
          </div>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Smart Learning</h5>
            <p class="card-text flex-grow-1"></p>
            <a href="{{ url('/product/marjan-syrup-squash-melon') }}" class="btn btn-primary mt-auto">Show More</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    /* Mengatur card agar memiliki tinggi yang konsisten */
    .custom-card {
      height: 100%;
      display: flex;
      flex-direction: column;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s;
      overflow: hidden;
    }

    .custom-card:hover {
      transform: translateY(-5px);
    }

    /* Wrapper untuk gambar agar memiliki tinggi tetap */
    .card-img-wrapper {
      height: 200px;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #f8f9fa;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      overflow: hidden;
    }

    /* Mengatur gambar agar sesuai rasio asli tanpa terpotong */
    .card-img-top {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
    }

    /* Mengatur card body */
    .card-body {
      padding: 1.5rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }

    .card-title {
      font-size: 1.25rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .card-text {
      font-size: 1rem;
      color: #555;
      margin-bottom: 1.5rem;
    }

    .btn-primary {
      width: 100%;
      padding: 0.5rem;
      font-size: 1rem;
    }

    /* Menambahkan jarak antar card */
    .row {
      margin: -15px;
    }

    .col-md-4 {
      padding: 15px;
    }
  </style>
</x-layout>