
<h4 class="latest-text w3_latest_text">Featured Movies</h4>
<div class="container">
    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Discover Movie</a></li>
            <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Top viewed</a></li>
            <li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">Top Rating</a></li>
            <li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">Recently Added</a></li>
        </ul>
        @foreach($result['results'] as $result)

        <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                <div class="w3_agile_featured_movies">
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <?php $pic = $result['poster_path'] ?>
                        <a href="single.html" class="hvr-shutter-out-horizontal">
                             <?php echo "<img class='img-responsive' src='https://image.tmdb.org/t/p/w500/$pic'/>"; ?>
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div style="height: 50px !important;" class="w3l-movie-text">
                                <h6>
                                    <a href="single.html">{{$result["title"]}}</a>
                                </h6>
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <?php $date = $result['release_date']; ?>
                                <p>{{date('Y', strtotime($date))}}</p>

                                <?php
                                $number = $result['vote_average'];

                                $stars = round( $number * 2, 0, PHP_ROUND_HALF_UP);
                                ?>

                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        <?php

                                        $i = 1;
                                        while ($i <= $stars - 1) {
                                        echo '<li><i class="fa fa-star" aria-hidden="true"></i></li>';
                                        $i += 2; }

                                        ;?>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
