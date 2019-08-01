
<ul>
    @foreach($top['results'] as $top)
    <li>
        <?php $pic = $top['poster_path'] ?>
        <?php echo "<img src='https://image.tmdb.org/t/p/w500/$pic'/>"; ?>
        {{-- <img src="{{ asset('assets/one-movies/images/5.jpg') }}" alt=" "> --}}
        <p class='title'>{{$top['title']}}</p>
        <p class='description'>{{$top['overview']}}</p>
    </li>
    @endforeach
</ul>

<script src="{{ asset('assets/one-movies/js/jquery.slidey.js') }}"></script>
<script src="{{ asset('assets/one-movies/js/jquery.dotdotdot.min.js') }}"></script>
	<script type="text/javascript">
		$("#slidey").slidey({
			interval: 8000,
			listCount: 5,
			autoplay: false,
			showList: true
		});
		$(".slidey-list-description").dotdotdot();
	</script>
