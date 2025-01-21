@include('Structure.navbar')

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(/images/foto1.jpg);" data-stellar-background-ratio="0.5">
    <div id="fh5co-contact" class="fh5co-section animate-box">
            <!-- <div class="overlay"></div> -->
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="padding-top: 100px; margin-bottom: 30px;">
                    <h2>Daftar Pesanan Anda .</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3" id="form-wrap" class="text-center" style=" background-color:#1B1B1B;">
    <table class="table table-light ">
        <thead>
            <tr>
                <th style="color: white;">No</th>
                <th style="color: white;">Nama</th>
                <th style="color: white;">Harga</th>
                <th style="color: white;">Status</th>
                <th style="color: white;">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $total = 0;
                $count = 1;
            @endphp

            @foreach ($order as $item)
                <tr>
                    <td style="color: white;">{{ $count++ }}</td>
                    <td style="color: white;">{{ $item->product_name }}</td>
                    <td style="color: white;">{{ $item->price }}</td>
                    <td style="color: white;">
                        @if ($item['status']==1)
                            Diterima
                        @elseif ($item['status'] == 2)
                            Ditolak
                        @else
                            Menunggu
                        @endif
                    </td>
                    <td style="color: white;">
                        <form action="{{ route('delete.pesanan', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary px-3">Delete</button>
                        </form>
                    </td>
                </tr>
                @if($item->status == 1)
                @php
                    $total += $item->price;
                @endphp
                @endif
            @endforeach
            <tr>
                <td colspan="4" class="text-center" style="color: white;">Total</td>
                <td style="color: white;">{{ $total }}</td>
            </tr>
        </tbody>
    </table>

</div>
</header>

@include('Structure.footer')