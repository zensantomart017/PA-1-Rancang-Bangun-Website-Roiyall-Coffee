@include('Structure.navbar')
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
      #title-section {
            padding-top: 150px;
            padding-bottom: 50px;
            text-align: center;
            background-color: #f8f9fa;
            background-image: url('/images/foto1.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            color: white;
        }

        #title-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        #title-section .container {
            position: relative;
            z-index: 2;
        }

        .portfolio-section {
            padding-top: 30px;
        }

        .portfolio-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .portfolio-info h4, .portfolio-info p {
            color: gold;
        }

        .portfolio-links {
            margin-top: 15px;
        }

        .portfolio-links button {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .portfolio-links ion-icon {
            margin-left: 5px;
        }

        @media only screen and (max-width: 770px) {
            img {
                width: 200px;
                height: 200px;
                margin-bottom: 20px;
            }
        }

        .fh5co-item-wrap {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .fh5co-item {
            flex: 0 0 calc(25% - 20px);
            margin-top: 250px;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 1.25rem;
            color: gold;
        }

        .card-price {
            font-size: 1rem;
            color: gold;
        }

        .card-body {
            padding: 1.25rem;
        }

        .btn {
            width: 100%;
        }

        .search-form {
            margin: 20px 0;
        }

        .search-form .input-group {
            border-radius: 50px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .search-form input[type="text"] {
            border: none;
            padding: 20px;
            height: 60px;
        }

        .search-form button {
            border: none;
            background-color: #007bff;
            color: white;
            padding: 0 20px;
        }

        .search-form button:hover {
            background-color: #0056b3;
        }

        .search-form .input-group-append .btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
    </style>
    </head>
    <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" data-stellar-background-ratio="0.5">

    <main id="main">
      <!-- Title Section -->
      <section id="title-section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="col-md-12 text-center">
                <div class="display-tc" data-animate-effect="fadeIn">
                  <h1>Mari Lihat Menu Kami</h1>
                  <h2><marquee behavior="" direction="">Ada Beragam Menu Menarik</marquee></h2>
                </div>
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="input-group mb-3">
                <input id="searchInput" type="text" class="form-control" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button id="searchButton" class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-search fa-fw"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div id="searchResults">
            <!-- Tempat untuk menampilkan hasil pencarian -->
          </div>

          <!-- Portfolio Section within Title Section -->
          <div class="row portfolio-container">
            @foreach ($item as $produk)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{ asset('image/' . $produk->gambar) }}" class="card-img-top" alt="{{ $produk->name }}">
                <div class="portfolio-info">
                  <h4>{{ $produk->name }}</h4>
                  <p>{{ $produk->price }}</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('image/' . $produk->gambar) }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                    <form action="{{ route('addpesanan', $produk->id) }}" method="POST">
                      @csrf
                      <input type="hidden" value="{{ $produk->id }}" name="product_id">
                      <input type="hidden" value="{{ $produk->name }}" name="product_name">
                      <input type="hidden" value="{{ $produk->price }}" name="price">
                      <button type="submit" class="btn btn-success">
                        Beli Sekarang
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
    </main>

    @include('Structure.footer')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("searchInput");
            const searchButton = document.getElementById("searchButton");
            const portfolioItems = document.querySelectorAll(".portfolio-item");

            function filterItems() {
                const query = searchInput.value.toLowerCase();
                portfolioItems.forEach(item => {
                    const itemName = item.querySelector("h4").textContent.toLowerCase();
                    if (itemName.includes(query)) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
            }

            searchButton.addEventListener("click", filterItems);

            searchInput.addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    filterItems();
                }
            });
        });
    </script>