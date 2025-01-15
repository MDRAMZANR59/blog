@extends('frontend.app')

@section('Content')
<body class="single-blog">
    <div id="ttr_page" class="container">
        <div id="ttr_content_and_sidebar_container">
            <div id="ttr_content">
                <div id="ttr_content_margin" class="container-fluid">
                    <div class="ttr_Projects_html_row0 row">
                        <div class="html_content text-center" style="margin-bottom:20px;">
                            <p>
                                <span style="font-family: 'Oxygen', 'Arial'; font-weight: 700; font-size: 2.571em; color: #039A67;">
                                    {{ $blogs->title }}
                                </span>
                            </p>
                        </div>

                        <!-- Single Blog Content -->
                        <div class="col-lg-12">
                            <div class="ttr_Projects_html_column01">
                                <div class="html_content">
                                    <div class="ttr_image">
                                        <img src="{{ asset($blogs->image) }}" style="max-width: 100%; max-height: 400px; border: 5px solid #ddd; border-radius: 10px;">
                                    </div>

                                    <h3 style="margin-top: 20px; font-family: 'Oxygen', 'Arial'; font-weight: 700; font-size: 1.714em; color: #303030;">
                                        {{ $blogs->title }}
                                    </h3>

                                    <p style="text-align: justify; margin-top: 20px; margin-bottom:20px; font-family: 'Lato', 'Arial'; font-weight: 500; font-size: 1.143em; color: #434444;">
                                        {!! nl2br(e($blogs->description)) !!}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
