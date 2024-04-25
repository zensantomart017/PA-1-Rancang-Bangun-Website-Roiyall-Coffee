@include('Structure.navbar')

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
    <div id="fh5co-contact" class="fh5co-section animate-box">
            <div class="overlay"></div>
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="padding-top: 90px; padding-top: 90px; margin-bottom: 30px;">
                    <h2>Don't be shy, let's chat.</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3" id="form-wrap" class="text-center" style=" background-color:#1B1B1B;">
                    <form action="{{ route('ulasan') }}" method="POST">
                        @csrf
                        <div class="row form-group">
                        <div class="mb-3 text-center">
                            <label for="email" class="form-label text-light">Email</label>
                            <input type="email" name="email" id="email" class="form-control" style="width: 100%;">
                        </div>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3 text-center">
                            <label for="message" class="form-label text-white">Pesan</label>
                            <textarea name="komentar" id="message" class="form-control" rows="10" style="width: 100%;"></textarea>
                        </div>
                        @error('komentar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @guest
                            <button type="submit" class="btn btn-primary btn-outline" onclick="event.preventDefault(); location.href='/login';">Kirim Feedback</button>
                        @else
                            <button type="submit" class="btn btn-primary btn-outline">Kirim Feedback</button>
                        @endguest
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

@include('Structure.footer')
