<div class="clearfix"></div>

<div id="footer">

	<div class="col-xs-12 col-sm-3">
		
		<ul class="list-unstyled weather-list">
		
			<li>
				
				<span class="city">Ardmore, PA</span>
				<div id="weather_ardmore" class="weather">
				    <img src="<?php bloginfo('template_directory'); ?>/images/loading.gif" width="15" height="15">
				</div>
				<script>
				    $(document).ready(function() {
				      $.simpleWeather({
				        location: '19003',
				        woeid: '',
				        unit: 'f',
				        success: function(weather) {
				          html = '<p><span class="icon icon-'+weather.code+'"></span>';
				          html += ''+weather.temp+'&deg;'+weather.units.temp+'</p>';
				      
				          $("#weather_ardmore").html(html);
				        },
				        error: function(error) {
				          $("#weather_ardmore").html('<p>'+error+'</p>');
				        }
				      });
				    });
				</script>
				
			</li>
			
			<li>
			
				<span class="city">Ackworth, GA</span>
				<div id="weather_georgia" class="weather">
				    <img src="<?php bloginfo('template_directory'); ?>/images/loading.gif" width="15" height="15">
				</div>
				<script>
				    $(document).ready(function() {
				      $.simpleWeather({
				        location: '30101',
				        woeid: '',
				        unit: 'f',
				        success: function(weather) {
				          html = '<p><span class="icon icon-'+weather.code+'"></span>';
				          html += ''+weather.temp+'&deg;'+weather.units.temp+'</p>';
				      
				          $("#weather_georgia").html(html);
				        },
				        error: function(error) {
				          $("#weather_georgia").html('<p>'+error+'</p>');
				        }
				      });
				    });
				</script>
			
			</li>
			
			<li>
							
				<span class="city">Denver, PA</span>
				<div id="weather_denver" class="weather">
				    <img src="<?php bloginfo('template_directory'); ?>/images/loading.gif" width="15" height="15">
				</div>
				<script>
				    $(document).ready(function() {
				      $.simpleWeather({
				        location: '17517',
				        woeid: '',
				        unit: 'f',
				        success: function(weather) {
				          html = '<p><span class="icon icon-'+weather.code+'"></span>';
				          html += ''+weather.temp+'&deg;'+weather.units.temp+'</p>';
				      
				          $("#weather_denver").html(html);
				        },
				        error: function(error) {
				          $("#weather_denver").html('<p>'+error+'</p>');
				        }
				      });
				    });
				</script>
							
			</li>
			
			<li>
				
				<span class="city">York, PA</span>
				<div id="weather_york" class="weather">
				    <img src="<?php bloginfo('template_directory'); ?>/images/loading.gif" width="15" height="15">
				</div>
				<script>
				    $(document).ready(function() {
				      $.simpleWeather({
				        location: '17404',
				        woeid: '',
				        unit: 'f',
				        success: function(weather) {
				          html = '<p><span class="icon icon-'+weather.code+'"></span>';
				          html += ''+weather.temp+'&deg;'+weather.units.temp+'</p>';
				      
				          $("#weather_york").html(html);
				        },
				        error: function(error) {
				          $("#weather_york").html('<p>'+error+'</p>');
				        }
				      });
				    });
				</script>
	
			</li>
		
		</ul>
		
	</div>
	
	<div class="col-xs-12 col-sm-9 events">
	
		<div class="row-eq-height">
			
			<?php 
			    $today = current_time( 'md', $gmt = 0 );
			    $posts = get_posts(array(
					'post_type'	=> array(
						'birthdays',
						'anniversaries',
						'holidays'
					),
					'meta_query' => array(
						array(
							'key' => 'event_date',
							'compare' => '>=',
							'value' => $today
						),
					),
					'meta_key' => 'event_date',
					'posts_per_page' => 4,
					'orderby' => 'meta_value_num',
					'order'	=> 'ASC'
				));
				if( $posts ) {
					foreach( $posts as $post ) {
						setup_postdata( $post ); ?>
						
						<?php 
							$date = get_field('event_date', false, false);
							$arr = str_split($date, strlen($date)/2);
							$month = $arr[0];
							if ($month == 01) {
							    $month = 'January';
							} elseif ($month == 02) {
							    $month = 'February';
							} elseif ($month == 03) {
							    $month = 'March';
							} elseif ($month == 04) {
							    $month = 'April';
							} elseif ($month == 05) {
							    $month = 'May';
							} elseif ($month == 06) {
							    $month = 'June';
							} elseif ($month == 07) {
							    $month = 'July';
							} elseif ($month == 8) {
							    $month = 'August';
							} elseif ($month == 9) {
							    $month = 'September';
							} elseif ($month == 10) {
							    $month = 'October';
							} elseif ($month == 11) {
							    $month = 'November';
							} elseif ($month == 12) {
							    $month = 'December';
							}
							$day = $arr[1];
							$day = ltrim($day, '0');
						?>
			
				    <div class="col-xs-6 col-md-3 event">
				    	<span class="month"><?php echo $month; ?></span>
				    	<span class="day"><?php echo $day; ?></span>
				    	<span class="title">
				    	    <?php the_title(); ?><?php if ( 'birthdays' == get_post_type() ) { ?>'s Birthday<?php } elseif ( 'anniversaries' == get_post_type() ) { ?>'s Anniversary<?php } ?>
				    	</span>
				    </div>
			    
			<?php } wp_reset_postdata(); } ?>
		
		</div>
	
	</div>
	
	<div class="col-xs-12 text-center font-size--sm lg-margin--top">
		<p class="no-margin--bottom">
			Copyright &copy; 
			<?php echo date('Y'); ?> 
			<?php bloginfo( 'name' ); ?>
		</p>
	</div>
	
	<div class="clearfix"></div>

</div>

<?php wp_footer(); ?>