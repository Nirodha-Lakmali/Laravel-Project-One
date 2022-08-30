@include('components/header')

<nav class="navbar bg-dark nav-dark">
    <div class="container-fluid">
        <h2 class="navbar-brand text-white">Admin Dashboard</h2>
        <a role="button" class="btn btn-warning" href="home">Back To Home</a>
    </div> 
    <hr>
</nav>

<div class="container p-1 mt-3">
    <div class="row">
        <div class="col-sm-4 offset-sm btn-group">
            <a href="{{ route('buy') }}" class="btn btn-primary">
                Buy binance trade
            </a>
            <a href="{{ route('sell') }}" class="btn btn-primary">
                Sell binance trade
            </a>
        </div>
        <div class="col-sm-4 offset-sm btn-group">
            <a href="{{ route('buyBybit') }}" class="btn btn-success">
                Buy bybit trade
            </a>
            <a href="{{ route('sellBybit') }}" class="btn btn-success">
                Sell bybit trade
            </a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="card col-sm-12">
            <h4 class="text-primary card-header">
                Wallet Balance
            </h4>
            <div class="card-body">
                @if($data)
                    @foreach($data as $item){
                        <div><h3>{{ $item->asset }}</h3><p>{{ $item->balance }}</p></div>
                    }
                    @endforeach
                @endif
             
            </div>
        </div>
        <div class="card col-sm-12">
            <h4 class="text-primary card-header">
                Change Leverage
            </h4>
            <div class="card-body">
                <form method="post" action="{{ route('leverage') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="leverage" class="form-label">Leverage</label>
                        <input type="number" name="leverage" placeholder="Enter levarage value" class="form-control" id="leverage">
                    </div>
                    <button type="submit" class="btn btn-dark">Change</button>
                </form>   
                 
            </div>
        </div>
    </div>

</div>

@include('components/footer')