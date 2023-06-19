@extends('frontend.layout.app')

@section('seo_title')
    {{ $post_detail->seo_title }}
@endsection

@section('seo_meta_description')
{{ $post_detail->seo_meta_description }}
@endsection

@section('main_content')

<div class="page-banner" style="background-image: url({{ asset('uploads/'.$post_detail->banner ) }})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $post_detail->title }}</h1>
            </div>
        </div>
    </div>
</div>

<div class="page-content blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="photo">
                    <img src="{{ asset('uploads/'.$post_detail->photo) }}" alt="">
                </div>
                <div class="sub d-flex justify-content-start">
                    <div class="author"><span>By:</span> Admin</div>
                    <div class="dash"> - </div>
                    <div class="date"><span>On:</span> {{ $post_detail->created_at->format('D, d M Y') }}</div>
                    <div class="dash"> - </div>
                    <div class="category"><span>Category:</span> <a href="{{ route('category',$post_detail->rPostCategory->category_slug) }}">{{ $post_detail->rPostCategory->category_name }}</a></div>
                </div>
                <div class="text">
                    {!! nl2br($post_detail->description) !!}
                </div>
                
                <div class="share">
                    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=633263d3bfbc4500128cca2f&product=inline-share-buttons" async="async"></script>
                    <div class="sharethis-inline-share-buttons"></div>
                </div>


                @if($post_detail->show_comment == 'Yes')
                <div class="comment">

                    <h2>6 Comments</h2>

                    <div class="comment-section">

                        <div class="comment-box d-flex justify-content-start">
                            <div class="left">
                                <img src="images/t1.jpg" alt="">
                            </div>
                            <div class="right">
                                <div class="name">Patrick Smith</div>
                                <div class="date">September 25, 2022</div>
                                <div class="text">
                                    Qui ea oporteat democritum, ad sed minimum offendit expetendis. Idque volumus platonem eos ut, in est verear delectus. Vel ut option adipisci consequuntur. Mei et solum malis detracto, has iuvaret invenire inciderint no. Id est dico nostrud invenire.
                                </div>
                                <div class="reply">
                                    <a href=""><i class="fas fa-reply"></i> Reply</a>
                                </div>
                            </div>
                        </div>

                        <div class="comment-box reply-box d-flex justify-content-start">
                            <div class="left">
                                <img src="images/t2.jpg" alt="">
                            </div>
                            <div class="right">
                                <div class="name">John Doe</div>
                                <div class="date">September 25, 2022</div>
                                <div class="text">
                                    Qui ea oporteat democritum, ad sed minimum offendit expetendis. Idque volumus platonem eos ut, in est verear delectus. Vel ut option adipisci consequuntur. Mei et solum malis detracto, has iuvaret invenire inciderint no. Id est dico nostrud invenire.
                                </div>
                                <div class="reply">
                                    <a href=""><i class="fas fa-reply"></i> Reply</a>
                                </div>
                            </div>
                        </div>

                        <div class="comment-box reply-box d-flex justify-content-start">
                            <div class="left">
                                <img src="images/t3.jpg" alt="">
                            </div>
                            <div class="right">
                                <div class="name">Brent Smith</div>
                                <div class="date">September 25, 2022</div>
                                <div class="text">
                                    Qui ea oporteat democritum, ad sed minimum offendit expetendis. Idque volumus platonem eos ut, in est verear delectus. Vel ut option adipisci consequuntur. Mei et solum malis detracto, has iuvaret invenire inciderint no. Id est dico nostrud invenire.
                                </div>
                                <div class="reply">
                                    <a href=""><i class="fas fa-reply"></i> Reply</a>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="comment-section">
                        <div class="comment-box d-flex justify-content-start">
                            <div class="left">
                                <img src="images/t2.jpg" alt="">
                            </div>
                            <div class="right">
                                <div class="name">John Doe</div>
                                <div class="date">September 25, 2022</div>
                                <div class="text">
                                    Qui ea oporteat democritum, ad sed minimum offendit expetendis. Idque volumus platonem eos ut, in est verear delectus. Vel ut option adipisci consequuntur. Mei et solum malis detracto, has iuvaret invenire inciderint no. Id est dico nostrud invenire.
                                </div>
                                <div class="reply">
                                    <a href=""><i class="fas fa-reply"></i> Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment-section">
                        <div class="comment-box d-flex justify-content-start">
                            <div class="left">
                                <img src="images/t3.jpg" alt="">
                            </div>
                            <div class="right">
                                <div class="name">John Doe</div>
                                <div class="date">September 25, 2022</div>
                                <div class="text">
                                    Qui ea oporteat democritum, ad sed minimum offendit expetendis. Idque volumus platonem eos ut, in est verear delectus. Vel ut option adipisci consequuntur. Mei et solum malis detracto, has iuvaret invenire inciderint no. Id est dico nostrud invenire.
                                </div>
                                <div class="reply">
                                    <a href=""><i class="fas fa-reply"></i> Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mt_40"></div>

                    <h2>Leave Your Comment</h2>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="3" placeholder="Comment"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                    
                </div>
                @endif

            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="widget">
                        <h2>Search</h2>
                        <div class="search">
                            <form class="row g-3" action="" method="post">
                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="Search Anything ...">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget">
                        <h2>Latest Post</h2>
                        <ul>
                            @foreach ($posts as $item)
                                <li><a href="{{ route('post',$item->slug) }}">{{ $item->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h2>Categories</h2>
                        <ul>
                            @foreach ($post_categories as $item)
                                <li><a href="{{ route('category',$item->category_slug) }}">{{ $item->category_name }}</a></li>    
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h2>Archives</h2>
                        <ul>
                            @foreach($archives as $item)
                                @php
                                if($item->month == '01') {$month='January';}
                                elseif($item->month == '02') {$month='February';}
                                elseif($item->month == '03') {$month='Maret';}
                                elseif($item->month == '04') {$month='April';}
                                elseif($item->month == '05') {$month='Mei';}
                                elseif($item->month == '06') {$month='Juni';}
                                elseif($item->month == '07') {$month='Juli';}
                                elseif($item->month == '08') {$month='Agustus';}
                                elseif($item->month == '09') {$month='September';}
                                elseif($item->month == '10') {$month='Oktober';}
                                elseif($item->month == '11') {$month='November';}
                                elseif($item->month == '12') {$month='Desember';}
                                @endphp
                                <li><a href="{{ route('archive', [$item->month, $item->year]) }}">{{ $month }} {{ $item->year }} ({{ $item->total_post }})</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection