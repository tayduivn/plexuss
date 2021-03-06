<?php 
	 // dd($data['featured']);
?>

<div class="blog-back">
	<div class="blog-header-img"></div>	


	<!-- centering  div  -->
	<div class="b2b-9row b2bsub-top text-center">
		
		<div class="news-title-wrapper">
		<div class="blog-header">PLEXUSS NEWS</div>
		<div class="blog-subheader">STORIES OF A LIFE IN HIGHER EDUCATION</div>
		</div>

		<div class="newf-title-wrapper">
		<div class="blog-header">NEW FEATURES</div>
		<div class="blog-subheader">SEE WHAT THE PLEXUSS TEAM IS WORKING ON</div>
		</div>


		<!-- social media links -->
		<div class="blog-smedia-cont mt15">
			<a  class="d-inline" target="_blank" href="http://www.linkedin.com/company/plexuss-com">
				<div class="sm-icon icon-linkedin"></div>
			</a>
			<a class="d-inline" target="_blank" href="http://www.twitter.com/plexussupdates">
				<div class="sm-icon icon-twitter"></div>
			</a>
			<a class="d-inline" target="_blank" href="https://www.facebook.com/pages/Plexusscom/465631496904278">
				<div class="sm-icon icon-fb"></div>
			</a>
			<a class="d-inline" target="_blank" href="https://www.youtube.com/channel/UCLBI8NqybOCZYmjxq8f6P1Q">
				<div class="sm-icon icon-yt"></div>
			</a>
		</div>

		
		<!--///////// blog navigation ////////////-->
		<div class="blog-nav">
			

			<div class="mobile-menu-drop">...</div>
			<ul class="blog-menu">
				<li class="get-blog-from-blog active">BLOG</li>
				<li class="press-btn">PRESS RELEASES</li>
				<li class="new-features-lnk">NEW FEATURES</li>
			</ul>


			<div class="blognav-right">
				<span class="blog-magnifier-icon"><span class="blog-magnifier"></span></span>
			</div>

			<!-- ///////// blog search ////////-->
			<div class="blog-search-box">
				<input placeholder="Search News by keywords..." name="blogSearch" />
				<div class="white-magnifier-container"><div class="blog-white-magnifier"></div></div>

				<h5 class="search-start-text">Search something to get started...</h5>

				<div class="results-container">No results.</div>

				<div id="loadmoreajaxloader-blog" style="display:none;">
				    <center><img src="/images/colleges/loading.gif" alt=""/></center>
				</div>
			
			</div>

		</div>


		<!-- //////// content on blog main page /////////////// -->
		<div class="blog-cont-wrapper">
			<!--?php echo $blog_home ?-->
			@if($showNest && $showNest == true)
				@include('b2b.blog.blogHome')
			@endif

		</div><!-- end cont -->


	</div><!-- end centering div -->


</div>


