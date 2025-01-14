@extends('frontend.app')
@section('Content')
<body class="Projects">
    <div class="totopshow">
      <a href="#" class="back-to-top">
        <img alt="Back to Top" src="images/gototop0.png" />
      </a>
    </div>
    <div id="ttr_page" class="container">
      <div id="ttr_content_and_sidebar_container">
        <div id="ttr_content">
          <div id="ttr_content_margin" class="container-fluid">
            <div style="height: 0px; width: 0px; overflow: hidden; -webkit-margin-top-collapse: separate;"></div>

            <div class="ttr_Projects_html_row0 row">
                <div class="html_content text-center" style="margin-bottom:20px;">
                    <p>
                      <span style="font-family: 'Oxygen', 'Arial'; font-weight: 700; font-size: 2.571em; color: #039A67;">
                        Blogs
                      </span>
                    </p>
                  </div>

              <!-- Project 1 -->
              @foreach ( $blogs as $data )
                <div class="post_column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="ttr_Projects_html_column01">
                    <div class="html_content">
                        <p>
                        <span class="ttr_image" style="float: left; overflow: hidden; margin: 0em 0em 2.14em 0em;">
                            <img class="ttr_uniform" src="{{ asset($data->image) }}" style="max-width: 350px; max-height: 233px; border: 5px solid #ddd; border-radius: 10px; transition: transform 0.3s;">
                        </span>
                        <span style="font-family: 'Oxygen', 'Arial'; font-weight: 700; font-size: 1.714em; color: #303030;">
                            {{$data->title}}
                        </span>
                        </p>
                        <p style="margin: 0.71em 0em 0.36em 0em; line-height: 1.549; font-family: 'Lato', 'Arial'; font-weight: 300; font-size: 1.143em; color: #434444;">
                        {{$data->description}}
                        </p>
                    </div>
                    </div>
                </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
@endsection
