<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $(document).ready(function() {
        $(document).on('change', '#sortby', function(e) {
            e.preventDefault();
            let value = $('#sortby').val();

            $.ajax({
                url: "{{url('/product/sortby')}}" ,
                method:'post',
                data:{value:value},
                success:function(res){
                    if(res.status == 'success'){

                        consolo.log(res.productHtml)
                        $('#loadsort').html($(res.productHtml).find('#loadsort').html());
                    }
                }
            })

        });
    });
</script>
