@section('batchScale')
  <form id="batch-scale" class="form-inline" action="#" method="post">

      <label for="batchScale" class="control-label">Scale Batch: </label>
      <input type="number" id="batchScale" name="batchScale" value="1" class="form-control">

  </form>
@show

@push('head')
  <style media="screen">
    #batch-scale {
      margin-bottom: 3em;
    }
    .control-label {
      padding-right: 2em;
    }

  </style>
@endpush

@push('foot')
  <script type="text/javascript">
  jQuery(document).ready(function($){

    $("#batch-scale").on('submit', function (e) {
      e.preventDefault();
    });

    $("input[name=batchScale]").change(function() {
      $(".ing-qty").each(function(){
        var batch = $("input[name=batchScale]").val();
        if ($(this).attr('data-orig')) {
          var ing = $(this).attr('data-orig');
        } else {
          var ing = $(this).html();
        }


        $(this).attr('data-orig', ing);
        var calc = ing*batch;
        $(this).html(calc);
      });

    });

  });
  </script>
@endpush
