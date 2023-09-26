<x-layout>
    <div class="container mt-5 p-b-30">
        <div class="row">
            <!-- Left Side Menu -->
            <div class="col-md-3 p-b-30" >
                <div class="list-group">
                    <button class="list-group-item list-group-item-action" onclick="showSection('section1')">Product</button>
                    <button class="list-group-item list-group-item-action" onclick="showSection('section2')">Section 2</button>
                    <button class="list-group-item list-group-item-action" onclick="showSection('section3')">Marchent Name</button>
                    <button class="list-group-item list-group-item-action" onclick="showSection('section4')">Section 4</button>
                    <button class="list-group-item list-group-item-action" onclick="showSection('section5')">Section 5</button>
                    <button class="list-group-item list-group-item-action" onclick="showSection('section6')">Section 6</button>
                </div>
            </div>
            <!-- Content Area -->
            <div class="col-md-9">
                <div id="section1" class="d-none">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark"> <!-- Added thead-dark for a dark background on headers -->
                            <tr>
                                <th>Name</th>
                                <th>Merchant ID</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->merchant_id }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->status }}</td>
                                    <td>{{ $product->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="section2" class="d-none">
                    <h3>Section 4</h3>
                    <p>Content for section 4...</p>
                </div>
                <div id="section3" class="d-none">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Merchant Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($merchants as $merchant)
                                <tr>
                                    <td>{{ $merchant->merchant_name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="section4" class="d-none">
                    <h3>Section 4</h3>
                    <p>Content for section 4...</p>
                </div>
                <div id="section5" class="d-none">
                    <h3>Section 5</h3>
                    <p>Content for section 5...</p>
                </div>
                <div id="section6" class="d-none">
                    <h3>Section 6</h3>
                    <p>Content for section 6...</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
        