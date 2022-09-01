@include('components/header')

<nav class="navbar bg-dark nav-dark">
    <div class="container-fluid">
        <h2 class="navbar-brand text-white">Admin Dashboard</h2>
        <a role="button" class="btn btn-warning" href="api">Back To Home</a>
    </div> 
    <hr>
</nav>

<div class="container p-1 mt-3">
    <div class="row mt-3">
        <div class="card col-sm-12">
            <h4 class="text-primary card-header">
                Create Trade Bybit-sell
            </h4>
            <div class="card-body">    
                <div class="row">
                    <form method="post" action="{{ route('sellBybit') }}" class="col-sm-6">
                        @csrf              
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="text" step="any" name="quantity" placeholder="Enter quantity value" class="form-control" id="quantity">
                        </div>
                        <button type="submit" class="btn btn-dark">Sell</button>
                    </form>   

                </div>           
        </div>
    </div>

</div>

@include('components/footer')