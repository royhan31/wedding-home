@if (count($audiences) > 0)
<section class="wpo-blog-single-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-12 col-12">
                <div class="wpo-blog-content">
                    <div class="comments-area">
                        <div class="comments-section">

                            <h3 class="comments-title text-center">{{count($audiences)}} Ucapan</h3>

                            <ol class="comments">
                                <div style="overflow-y: scroll; height: 200px;">
                                    @foreach ($audiences as $audience )
                                        <li class="comment">
                                            <div id="div-comment-1">
                                                <div class="comment-main-area">
                                                    <div class="comment-wrapper">
                                                        <div class="comments-meta">
                                                            <h4>{{$audience->name}} <span class="comments-date"> {{$audience->created_at->diffForHumans()}} </span></h4>
                                                        </div>
                                                        <div class="comment-area">
                                                            <p>{!! html_entity_decode($audience->description) !!}</p>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </div>
                            </ol>
                        </div> <!-- end comments-section -->
                    </div> <!-- end comments-area -->
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
@endif