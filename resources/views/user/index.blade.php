@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h5>10 újabb felhasználó rögzítéséhez nyomjon a gombra</h5>
          
          <button class="btn btn-primary" type="button" id="user-add">
            <span class="spinner-border spinner-border-sm" id="loading-spinner"></span>
            Felhasználók rögzítése
          </button>

          <div class="alert mt-2" id="alert" style="display: none;"></div>
        </div>
    </div>
</div>

<script>
  $(document).ready(function() {
    $('#loading-spinner').hide();

    $('#user-add').click(function() {
      $('#loading-spinner').show();
      $('#alert').hide();
      $('#alert').removeClass('alert-success alert-danger');

      $.ajax({
        type: 'GET',
        url: '/user/api',
        success: function (data) {
          $('#loading-spinner').hide();
          $('#alert').text('10 új felhasználó sikeresen rögzítve.');
          $('#alert').addClass('alert-success');
          $('#alert').show();
        },
        error: function (data) {
          $('#loading-spinner').hide();
          $('#alert').text('Hiba lépett fel a rögzítés során!');
          $('#alert').addClass('alert-danger');
          $('#alert').show();
        }
      });
    });
  });
</script>
@endsection