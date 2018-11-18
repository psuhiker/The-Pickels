<!-- Reset Button -->
<script>
    $('#resetBtn').click(function(){
        $('#filter').val('');
        var rex = new RegExp($(this).val(), 'i');
        $('.searchable .searchableItem').hide();
        $('.reset').hide();
        $('.searchable .searchableItem').filter(function () {
            return rex.test($(this).text());
        }).show();
    });
</script>

<!-- Table Filtering -->
<script>
    $(document).ready(function () {
        (function ($) {
            $('#filter').keyup(function () {
                var rex = new RegExp($(this).val(), 'i');
                $('.searchable .searchableItem').hide();
                $('.reset').show();
                $('.searchable .searchableItem').filter(function () {
                    return rex.test($(this).text());
                }).show();
            });
        }(jQuery));
    });
</script>