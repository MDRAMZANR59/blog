@extends('frontend.app')
@section('Content')

    <div id="ttr_content_and_sidebar_container">
        <div id="ttr_content">
            <div id="ttr_content_margin" class="container-fluid">

                <div class="ttr_Home_html_row0 row">
                    <div class="ttr_Home_html_column00">

                        <div class="html_content">
                            <p style="text-align: Center">
                                <span
                                    style="
                      font-family: 'Oxygen', 'Calibri';
                      font-weight: 700;
                      font-size: 3.429em;
                      color: rgba(0, 128, 34, 1);
                    ">WELCOME TO MY BLOG
                                    !</span>
                            </p>
                            <p style="margin: 1.43em 0em 0.36em 0em; text-align: Center">
                                <span
                                    style="
                      font-family: 'Lato', 'Arial';
                      font-weight: 300;
                      font-size: 1.429em;
                      color: rgba(67, 68, 68, 1);
                    ">Praesent
                                    vestibulum molestie lacus. Aeneannummy
                                    hendrerit mauris. Phasellus porta. Fusce sumi. Cum
                                    sociis natoque penatibus et magnis dis parturient
                                    mus.</span>
                            </p>
                        </div>

                    </div>

                    <div class="clearfix visible-xs-block"></div>

                    <div class="clearfix visible-xs-block"></div>
                    @foreach ( $data as $item)

                    <div class="post_column col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="ttr_Home_html_column02">
                            <div
                                style="
                      height: 0px;
                      width: 0px;
                      overflow: hidden;
                      -webkit-margin-top-collapse: separate;
                    ">
                            </div>
                            <div class="html_content">
                                <p style="text-align: Center">
                                    <span class="ttr_image"
                                        style="
                          float: none;
                          display: block;
                          text-align: center;
                          overflow: hidden;
                          margin: 0em 0em 2.14em 0em;
                        "><span><img
                                                class="ttr_uniform" src="{{ $item->image }}"
                                                style="
                              max-width: 380px;
                              max-height: 250px;
                            " /></span></span><span
                                        style="
                          font-family: 'Oxygen', 'Arial';
                          font-weight: 700;
                          font-size: 1.714em;
                        ">{{$item->title}}</span>
                                </p>
                            </div>
                            <div
                                style="
                      height: 0px;
                      width: 0px;
                      overflow: hidden;
                      -webkit-margin-top-collapse: separate;
                    ">
                            </div>
                            <div style="clear: both"></div>
                        </div>
                    </div>


                    @endforeach
                    <div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block"></div>
                </div>

            </div>
        </div>
        <div style="clear: both"></div>
    </div>
@endsection
