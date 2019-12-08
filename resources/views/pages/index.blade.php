@extends('layouts.master')
@section('content')
                    <div class="col-md-4">
                        <!-- <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">
                                Cras justo odio
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                            <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                        </div> -->

                        @include('partials.product-sidebar')
                    </div>

                    <div class="col-md-8">                        
                            <div class="widget">
                            <h3>Featured Products</h3>
                                <div class="row">

                                    <div class="col-md-3">                
                                        <div class="card">
                                        <img class="card-img-top feature-img" src="{{ asset('images/products/'.'1.png')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">i Phone11</h5>
                                            <p class="card-text">Price:50000</p>
                                            <a href="#" class="btn btn-primary">Add to cart</a>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">                
                                        <div class="card">
                                        <img class="card-img-top feature-img" src="{{ asset('images/products/'.'iphone-11.webp')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">i Phone11</h5>
                                            <p class="card-text">Price:50000</p>
                                            <a href="#" class="btn btn-primary">Add to cart</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">                
                                        <div class="card">
                                        <img class="card-img-top feature-img" src="{{ asset('images/products/'.'iphone-11.webp')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">i Phone11</h5>
                                            <p class="card-text">Price:50000</p>
                                            <a href="#" class="btn btn-primary">Add to cart</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">                
                                        <div class="card">
                                        <img class="card-img-top feature-img" src="{{ asset('images/products/'.'iphone-11.webp')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">i Phone11</h5>
                                            <p class="card-text">Price:50000</p>
                                            <a href="#" class="btn btn-primary">Add to cart</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">                
                                        <div class="card">
                                        <img class="card-img-top feature-img" src="{{ asset('images/products/'.'iphone-11.webp')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">i Phone11</h5>
                                            <p class="card-text">Price:50000</p>
                                            <a href="#" class="btn btn-primary">Add to cart</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">                
                                        <div class="card">
                                        <img class="card-img-top feature-img" src="{{ asset('images/products/'.'iphone-11.webp')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">i Phone11</h5>
                                            <p class="card-text">Price:50000</p>
                                            <a href="#" class="btn btn-primary">Add to cart</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">                
                                        <div class="card">
                                        <img class="card-img-top feature-img" src="{{ asset('images/products/'.'iphone-11.webp')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">i Phone11</h5>
                                            <p class="card-text">Price:50000</p>
                                            <a href="#" class="btn btn-primary">Add to cart</a>
                                        </div>
                                        </div>
                                    </div> 


                                </div>
                    </div>
                    <div class="widget">

                    </div>
                </div>


                </div>
            </div>

            <!-- End Sidebar + Content -->
            @endsection