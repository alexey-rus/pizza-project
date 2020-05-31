<section class="ftco-menu">
    <div class="container-fluid">
        <div class="row d-md-flex">
            <div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(/images/about.jpg);">
            </div>
            <div class="col-lg-8 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @foreach($categories as $id => $category)
                            <a class="nav-link {{ $category->name === 'Pizza' ? 'active' : '' }}" id="v-pills-{{$id}}-tab" data-toggle="pill" href="#v-pills-{{$id}}"
                               role="tab" aria-controls="v-pills-{{$id}}" aria-selected="{{ $category->name === 'Pizza' ? 'true' : 'false' }}">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="products col-md-12 d-flex align-items-center">

                        <div class="tab-content ftco-animate" id="v-pills-tabContent">
                            @foreach($categories as $id => $category)
                            <div class="tab-pane fade {{ $category->name === 'Pizza' ? 'show active' : '' }}" id="v-pills-{{$id}}" role="tabpanel" aria-labelledby="v-pills-{{$id}}-tab">
                                <div class="row">
                                    @foreach($category->products as $product)
                                    <div class="product col-md-3 text-center" data-id="{{ $product->id }}">
                                        <div class="menu-wrap">
                                            <a href="#" class="js-add-cart menu-img img mb-4" style="background-image: url({{ asset('images/' . $product->image) }});"></a>
                                            <div class="text">
                                                <h3><a href="#">{{$product->name}}</a></h3>
                                                <p>{{$product->description}}</p>
                                                <p class="price"><span>${{$product->price}}</span></p>
                                                <p><a href="#" class="js-add-cart btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>