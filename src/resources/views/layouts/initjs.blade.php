<script>
  $(document).ready(function() {
    $.ajax({
      url: "{{ route('panel') }}",
      method: 'get',
      dataType: 'json',
      success: function(data) {
        $('#count_total').text(data.total);
        $('#count_informatika').text(data.informatika);
        $('#count_mesin').text(data.mesin);
        $('#count_elektro').text(data.elektro);
      }
    })
  })
</script>
