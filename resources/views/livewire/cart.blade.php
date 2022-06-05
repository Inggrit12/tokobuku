                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="font-weight-bold">Cart</h3>
                            <table class="table table-sm table-bordered table-hovered">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Harga</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse ($cart['products'] as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td><button wire:click="removeItem({{ $product->id }})" class="btn btn-danger">-</button></td>
                                        </tr>
                                    @empty
                                        <td colspan="3"><h6 class="text-center">Empty Cart</h6></td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                                    @if ($cart['products'])
                                        <button wire:click="checkout" class="btn btn-success float-right">Checkout</button>
                                    @endif
                                </div>
                    </div>
                </div>