@extends('layouts.main')

@section('title', 'Your Account')

@section('content')
<section class="payment">
  <div class="form-container">
    <form>
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
