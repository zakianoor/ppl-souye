@extends('layouts.main')

@section('title', 'Your Account')

@section('content')
<section class="checkout">
  <div class="form-container">
    <form>
      <h2>Order Detail</h2>
      <p><strong>Transaction ID:</strong> {{ $transaksi->id_transaksi }}</p>
      <p><strong>Total Transaction:</strong> {{ $transaksi->total_transaksi }}</p>
      <p><strong>Transaction Date:</strong> {{ $transaksi->tgl_transaksi }}</p>
      <p><strong>Buyer Name:</strong> {{ $transaksi->nama_buyer }}</p>
      <p><strong>Buyer Address:</strong> {{ $transaksi->alamat_buyer }}</p>
      <p><strong>Buyer Phone:</strong> {{ $transaksi->nohp_buyer }}</p>
      <input type="button" id="pay-button" name="order_btn" value="Checkout Now!" class="form-btn">
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
          window.location.href = '{{ route('done') }}'
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
