@extends('layouts.main')

@section('title', 'payment')

@section('content')
<section class="payment">
    <div class="form-container">
    <form>
        <h2>Order Detail</h2>
        <p>{{ $transaksi->nama_buyer }}</p>
        <p>{{ $transaksi->alamat_buyer }}</p>
        <p>{{ $transaksi->nohp_buyer }}</p>
        <br>
        <p><strong>date:</strong> {{ $transaksi->tgl_transaksi }}</p>
        <p><strong>total:</strong> Rp{{ number_format($transaksi->total_transaksi) }}</p>
        <input type="button" id="pay-button" name="order_btn" value="payment now!" class="form-btn">
    </form>
    </div>
</section>
@endsection

@section('script')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
    document.getElementById('pay-button').onclick = function(){
        snap.pay('{{ $transaksi->snap_token }}', {
        onSuccess: function(result){
          window.location.href = '{{ route('done', $transaksi->id_transaksi) }}'
        },
        onPending: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        },
        onError: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        }
        });
    };
    </script>
@endsection