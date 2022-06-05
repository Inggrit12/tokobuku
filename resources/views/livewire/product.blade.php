                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="font-weight-bold">Shopping List <i class="fas fa-cart-plus"></i></h3>
                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <div class="card-head">
                                                <h6 class="text-center">{{ $product->name}}</h6>
                                            </div>
                                            <div class="card-body">
                                                <img class="img" height="200" alt="produk_image" src="{{ asset('foto/'.$product->produk_image) }}">
                                            </div>
                                            <div class="card-footer">
                                                <h6 class="text-center">Harga: {{ $product->price}}</h6>
                                                <h6 class="text-center">Penulis: {{ $product->pengarang}}</h6>
                                                <input type="hidden" name="qty" value="1">
                                                <button wire:click="addToCart({{ $product->id }})" class="btn btn-primary btn-sm btn-block">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>    
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>