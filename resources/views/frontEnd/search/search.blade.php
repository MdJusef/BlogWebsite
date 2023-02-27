@extends('frontEnd.master')

@section('title')
    Search Result
@endsection

@section('content')
    <section id="search-result" class="search-result" style="margin-top: 80px">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3 class="category-title">Search Results</h3>

                    <div class="d-md-flex post-entry-2 small-img">
                        <a href=" {{ route('single-post') }}" class="me-4 thumbnail">
                            <img src="{{ asset('frontEndAsset') }}/assets/img/post-landscape-6.jpg" alt="" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h3><a href=" {{ route('single-post') }}">What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas.</p>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="{{ asset('frontEndAsset') }}/assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Wade Warren</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-md-flex post-entry-2 small-img">
                        <a href=" {{ route('single-post') }}" class="me-4 thumbnail">
                            <img src="{{ asset('frontEndAsset') }}/assets/img/post-landscape-1.jpg" alt="" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h3><a href=" {{ route('single-post') }}">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas.</p>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="{{ asset('frontEndAsset') }}/assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Wade Warren</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-md-flex post-entry-2 small-img">
                        <a href=" {{ route('single-post') }}" class="me-4 thumbnail">
                            <img src="{{ asset('frontEndAsset') }}/assets/img/post-landscape-2.jpg" alt="" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h3><a href=" {{ route('single-post') }}">The Best Homemade Masks for Face (keep the Pimples Away)</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas.</p>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="{{ asset('frontEndAsset') }}/assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Wade Warren</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-md-flex post-entry-2 small-img">
                        <a href=" {{ route('single-post') }}" class="me-4 thumbnail">
                            <img src="{{ asset('frontEndAsset') }}/assets/img/post-landscape-3.jpg" alt="" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h3><a href=" {{ route('single-post') }}">10 Life-Changing Hacks Every Working Mom Should Know</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas.</p>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="{{ asset('frontEndAsset') }}/assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Wade Warren</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-md-flex post-entry-2 small-img">
                        <a href=" {{ route('single-post') }}" class="me-4 thumbnail">
                            <img src="{{ asset('frontEndAsset') }}/assets/img/post-landscape-4.jpg" alt="" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h3><a href=" {{ route('single-post') }}">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas.</p>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="{{ asset('frontEndAsset') }}/assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Wade Warren</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paging -->
                    <div class="text-start py-4">
                        <div class="custom-pagination">
                            <a href="#" class="prev">Prevous</a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#" class="next">Next</a>
                        </div>
                    </div><!-- End Paging -->

                </div>

                <div class="col-md-3">
                    <!-- ======= Sidebar ======= -->
                    @include('frontEnd.include.sidebar')

                </div>

            </div>
        </div>
    </section> <!-- End Search Result -->
@endsection
