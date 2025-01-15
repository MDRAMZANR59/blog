@extends('frontend.app')
@section('Content')

<div id="ttr_content_and_sidebar_container">
    <div id="ttr_content">
        <div id="ttr_content_margin" class="container-fluid">

            <div class="ttr_Home_html_row0 row">


                    <div class="html_content">
                        <p class="text-center" style="text-align: center">
                            <span style="font-size:50px;color:green">WELCOME TO MY BLOG</span>
                        </p>
                        <p class="lead text-muted text-center" style="text-align: center">
                            Praesent vestibulum molestie lacus. Aeneanummy hendrerit mauris. Phasellus porta. Fusce sumi. Cum sociis natoque penatibus et magnis dis parturient mus.
                        </p>
                    </div>



                @foreach ($data as $item)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="height: 350px">
                    <div class="ttr_Home_html_column02">
                        <div class="html_content text-center">
                            <!-- Image Container with Hover Effect -->
                            <div class="image-container position-relative">
                                <img class="ttr_uniform" src="{{ $item->image }}" />
                                <a href="{{ route('singleBlog', $item->id) }}" class="btn btn-success read-more-btn position-absolute top-50 start-50 translate-middle">Read More</a>
                            </div>
                            <span class="font-weight-bold" style="font-size: 1.714em;">{{ $item->title }}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>
    <div style="clear: both"></div>
</div>

@endsection

<!-- Additional Styles for Hover Effect -->
@section('styles')
    <style>
        .image-container {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .image-container:hover .read-more-btn {
            opacity: 1;
            visibility: visible;
        }

        .read-more-btn {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
        }
    </style>
@endsection
