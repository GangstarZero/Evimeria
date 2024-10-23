<script>
    $(document).ready(function (){
        document.getElementById('searchBox').value = "{{ $query }}";
    })

    $('#searchBar').submit(function (e){
        const query = document.getElementById('searchBox').value
        var currentUrl = window.location.href;
        var url = new URL(currentUrl);
        url.searchParams.set("query", query);
        var newUrl = url.href;
    })
</script>