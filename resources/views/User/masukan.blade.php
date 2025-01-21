@include('Structure.navbar')

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(/images/foto1.jpg);" data-stellar-background-ratio="0.5">
    <div id="fh5co-contact" class="fh5co-section animate-box">
        <div class=""></div>
        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="padding-top: 90px; margin-bottom: 30px;">
            <h2>Jangan Lupa Ngasihh Feedback yahhh....</h2>
        </div>
        @include('sweetalert::alert')
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3" id="form-wrap" class="text-center" style="background-color:#1B1B1B;">
                <form action="{{ route('masukan') }}" method="POST">
                    @csrf
                    <div class="row form-group">
                        <div class="mb-3 text-center">
                            <label for="email" class="form-label text-light">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email Anda" style="width: 100%; background-color:grey">
                        </div>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3 text-center">
                            <label for="message" class="form-label text-white">Pesan</label>
                            <textarea name="komentar" id="message" class="form-control" placeholder="Masukkan Ulasan Anda" rows="10" style="width: 100%; background-color:grey" ></textarea>
                        </div>
                        @error('komentar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @guest
                            <button type="submit" class="btn btn-primary btn-outline" onclick="event.preventDefault(); location.href='/login';">Kirim Feedback</button>
                        @else
                            <button type="submit" class="btn btn-primary btn-outline">Kirim Feedback</button>
                        @endguest
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>

<div class="mt-4">
    <div class="container">
        <h3 style="color: white;"><center>Daftar Feedback</center></h3>
        @foreach ($masukan as $feedback)
            <div class="card mb-3" style="background-color: white; color: black;">
                <div class="card-body">
                    <h5 class="card-title">{{ $feedback->email }}</h5>
                    <p class="card-text">{{ $feedback->komentar }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('Structure.footer')
