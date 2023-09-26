<x-layout>
    <input type="text" name="daterange" value="2023-09-01 - 2023-09-30" />
    <table class="table table-bordered table-striped table-hover">
    <thead class="thead-dark">
        <tr>
            <th>Order ID</th>
            <th>Merchant Name</th>
            <th>Status</th>
            <th>Day</th>
            <th>Created At</th>
            <th>Total Ordered</th>
        </tr>
    </thead>
    <tbody >
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->merchant_name }}</td>
                <td>{{ $product->status }}</td>
                <td>{{ $product->day }}</td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->total_ordered }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</x-layout>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Moment.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<!-- Date Range Picker -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
    $('input[name="daterange"]').daterangepicker({
    opens: 'left',
    locale: {
        format: 'YYYY-MM-DD'
        }
    },function(start, end, label) {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            const newUrl = `/your-route?from=${start.valueOf()}&to=${end.valueOf()}&day=Sunday`;
            console.log("Redirecting to:", newUrl);
            window.location.href = newUrl;
        });
    });
</script>

    

