{{-- <div class="alert alert-danger">
    <div class="alert-icon"><i class="flaticon-warning"></i></div>
    <div class="alert-text">
        <h5 class="alert-heading">Ops.. Alguns campos não foram preenchidos corretamente.</h5>
        <p>
            <ul style="list-style-type: none; padding: 0;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </p>
    </div>  
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="la la-close"></i></span>
        </button>
    </div>
</div> --}}
@if($msg)
  @php
    if($status == "error")
    {
      $status = "danger";
    }elseif($status == "notification")
    {
      $status = "info";
    }else
    {
      $status = "success";
    }
  @endphp
<div class="alert alert-{{$status}}" role="alert">
    {{$msg}}
</div>
@endif