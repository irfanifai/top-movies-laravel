<div class="container">
    <div class="w3_agile_banner_bottom_grid">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">
                <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">

                    <?php $pic = $pop['poster_path'] ?>
                    <a href="single.html" class="hvr-shutter-out-horizontal">
                        <?php echo "<img class='img-responsive' src='https://image.tmdb.org/t/p/w500/$pic'/>"; ?>
                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                    </a>

                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                        <div class="w3l-movie-text">
                            <h6><a href="single.html">{{$pop["title"]}}</a></h6>
                        </div>
                        <div class="mid-2 agile_mid_2_home">
                            <?php $date = $result['release_date']; ?>
                            <p>{{date('Y', strtotime($date))}}</p>
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
                    <div class="ribben">
                        <p>TOP</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
