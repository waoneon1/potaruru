<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Potaruru
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="col-lg-1 hidden-md-down">
				<!-- widget share -->
				<?php get_template_part( 'template/partial/widget', 'share' ) ?>
			</div>
			<div class="col-lg-10">
				
				<!-- post -->
				<div class="post post-single">
					<h2 class="post-title"><?php the_title() ?></h2>

					<?php pota_component( 'post-meta' ) ?>

					<div class="post-thumbnail">
						<img src="<?php pota_image($post->ID, '945x550') ?>" alt="<?php the_title() ?>">
					</div>

					<?php the_content() ?>	
				</div>

				<div class="post-actions">
					<?php pota_component( 'post-tags' ) ?>
					<div class="social-share">
						<a class="btn btn-social btn-facebook btn-circle" href="#" data-toggle="tooltip" title="Share on Facebook" data-placement="bottom" role="button"><i class="fa fa-facebook"></i></a>
						<span>5.345k</span>
						<a class="btn btn-social btn-twitter btn-circle" href="#" data-toggle="tooltip" title="Share on Twitter" data-placement="bottom" role="button"><i class="fa fa-twitter"></i></a>
						<a class="btn btn-social btn-google-plus btn-circle" href="#" data-toggle="tooltip" title="Share on Google Plus" data-placement="bottom" role="button"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>
				<div class="post-related">
					<h6 class="subtitle">Related Posts</h6>
					<div class="row">
						<div class="col-12 col-sm-6 col-md-3">
							<div class="card card-widget">
								<div class="card-img">
									<a href="blog-post-carousel.html"><img src="img/blog/blog-related-1.jpg" alt="Injustice 2 Story Mode Superman Ending"></a>
								</div>
								<div class="card-block">
									<h4 class="card-title"><a href="blog-post-carousel.html">Injustice 2 Story Mode Clark Ending Scene</a></h4>
									<div class="card-meta"><span><i class="fa fa-clock-o"></i> July 21, 2017</span></div>
									<p>Injustice 2's Story Mode features hours of cinematic cutscenes.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-3">
							<div class="card card-widget">
								<div class="card-img">
									<a href="blog-post-video.html"><img src="img/blog/blog-related-2.jpg" alt="New Injustice 2 Video Explains The Gear System"></a>
								</div>
								<div class="card-block">
									<h4 class="card-title"><a href="blog-post-video.html">New Injustice 2 Video Explains The Gear System</a></h4>
									<div class="card-meta"><span><i class="fa fa-clock-o"></i> June 19, 2017</span></div>
									<p>Following the new trailer dedicated to The Flash.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-3">
							<div class="card card-widget">
								<div class="card-img">
									<a href="blog-post-disqus.html"><img src="img/blog/blog-related-3.jpg" alt="An Extra Week Of Double Rewards In GTA V"></a>
								</div>
								<div class="card-block">
									<h4 class="card-title"><a href="blog-post-disqus.html">An Extra Week Of Double Rewards In GTA V</a></h4>
									<div class="card-meta"><span><i class="fa fa-clock-o"></i> June 18, 2017</span></div>
									<p>Grand Theft Auto V players are getting an extra week to earn.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-3">
							<div class="card card-widget">
								<div class="card-img">
									<a href="blog-post-hero.html"><img src="img/blog/blog-related-4.jpg" alt="BioShock: The Collection PC System Requirements Revealed"></a>
								</div>
								<div class="card-block">
									<h4 class="card-title"><a href="blog-post-hero.html">BioShock: The Collection PC System Requirements Revealed</a></h4>
									<div class="card-meta"><span><i class="fa fa-clock-o"></i> June 09, 2017</span></div>
									<p>2K revealed the PC system requirements for BioShock.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="comments" class="comments anchor">
					<div class="comments-header">
						<h5><i class="fa fa-comment-o m-r-5"></i> Comments (5)</h5>
						<div class="dropdown float-right">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Sorted by Best <span class="caret"></span></button>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item active" href="#">Best</a>
								<a class="dropdown-item" href="#">Latest</a>
								<a class="dropdown-item" href="#">Oldest</a>
								<a class="dropdown-item" href="#">Random</a>
							</div>
						</div>
					</div>
					<a class="btn btn-primary text-left m-t-15 btn-block" href="#comments" role="button"><i class="fa fa-spinner fa-pulse m-r-5"></i> Load more 4 comments</a>
					<ul>
						<li>
							<div class="comment">
								<div class="comment-avatar">
									<a href="profile.html"><img src="img/user/user-1.jpg" alt=""></a>
									<a class="badge badge-primary" href="profile.html" data-toggle="tooltip" data-placement="bottom" title="Add as friend"><i class="fa fa-user-plus"></i></a>
								</div>
								<div class="comment-post">
									<div class="comment-header">
										<div class="comment-author">
											<h5><a href="profile.html">Venom</a></h5>
											<span>Member</span>
										</div>
										<div class="comment-action">
											<div class="dropdown float-right">
												<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Moderate</a>
													<a class="dropdown-item" href="#">Embed</a>
													<a class="dropdown-item" href="#">Report</a>
													<a class="dropdown-item" href="#">Mark as spam</a>
												</div>
											</div>
										</div>
									</div>
									<p>Awesome these are news we were looking for, thanks yakuthemes best thing i've heard today, but more game modes are welcome.</p>
									<p>Maecenas at tristique dolor, nec condimentum tellus. Fusce in aliquet augue. Sed non rhoncus ante, sed posuere neque. Suspendisse ac maximus arcu, at ornare nulla. Sed metus tellus, lobortis ut dignissim sed, consequat sit amet mi.</p>
									<div class="comment-footer">
										<ul>
											<li><a href="#"><i class="fa fa-heart-o"></i> Like</a></li>
											<li><a href="#"><i class="icon-reply"></i> Reply</a></li>
											<li><a href="#"><i class="fa fa-clock-o"></i> 3 hours ago</a></li>
										</ul>
									</div>
								</div>
							</div>
							<ul>
								<li>
									<div class="comment">
										<div class="comment-avatar"><img src="img/user/user-2.jpg" alt=""></div>
										<div class="comment-post">
											<div class="comment-header">
												<div class="comment-author">
													<h5><a href="profile.html">Elizabeth</a></h5>
													<span>Member</span>
												</div>
												<div class="comment-action">
													<div class="dropdown float-right">
														<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Moderate</a>
															<a class="dropdown-item" href="#">Embed</a>
															<a class="dropdown-item" href="#">Report</a>
															<a class="dropdown-item" href="#">Mark as spam</a>
														</div>
													</div>
												</div>
											</div>
											<p>Please also consider replacing Battles with Blast (in Skirmish): it can use the same AI and would be much more fun (tokens are annoying and maps are limited)!</p>
											<div class="comment-footer">
												<ul>
													<li><a href="#"><i class="fa fa-heart-o"></i> Like</a></li>
													<li><a href="#"><i class="icon-reply"></i> Reply</a></li>
													<li><a href="#"><i class="fa fa-clock-o"></i> 24 minutes ago</a></li>
												</ul>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li>
							<div class="comment">
								<div class="comment-avatar"><a href="profile.html"><img src="img/user/user-3.jpg" alt=""></a></div>
								<div class="comment-post">
									<div class="comment-header">
										<div class="comment-author">
											<h5>
												<a href="profile.html">Clark</a>
												<span class="badge badge-outline-primary">Admin</span>
											</h5>
										</div>
										<div class="comment-action">
											<div class="comment-action">
												<div class="dropdown float-right">
													<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Moderate</a>
														<a class="dropdown-item" href="#">Embed</a>
														<a class="dropdown-item" href="#">Report</a>
														<a class="dropdown-item" href="#">Mark as spam</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<p>Thank you this news and I can't wait for offline content to drop next week. Aliquam a tortor at erat pulvinar volutpat eget sit amet libero. Quisque pretium lacus augue. Integer lobortis ligula non eleifend hendrerit. Cras venenatis
									laoreet risus, lacinia consectetur nunc scelerisque sed.</p>
									<div class="comment-footer">
										<ul>
											<li><a href="#"><i class="fa fa-heart-o"></i> Like</a></li>
											<li><a href="#"><i class="icon-reply"></i> Reply</a></li>
											<li><a href="#"><i class="fa fa-clock-o"></i> June 16, 2017 8:13pm</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="comment">
								<div class="comment-avatar"><a href="profile.html"><img src="img/user/user-4.jpg" alt=""></a></div>
								<div class="comment-post">
									<div class="comment-header">
										<div class="comment-author">
											<h5><a href="profile.html">Strange</a></h5>
											<span>Member</span>
										</div>
										<div class="comment-action">
											<div class="comment-action">
												<div class="dropdown float-right">
													<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Moderate</a>
														<a class="dropdown-item" href="#">Embed</a>
														<a class="dropdown-item" href="#">Report</a>
														<a class="dropdown-item" href="#">Mark as spam</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<p>To all those reading who have not yet bought this game yet, and are a fan of Uncharted - Don't listen to the nay-sayers on these comments, this game is simply amazing!</p>
									<div class="comment-footer">
										<ul>
											<li><a href="#"><i class="fa fa-heart-o"></i> Like</a></li>
											<li><a href="#"><i class="icon-reply"></i> Reply</a></li>
											<li><a href="#"><i class="fa fa-clock-o"></i> June 11, 2017 14:26am</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<form>
						<h5>Leave a comment</h5>
						<div class="form-group">
							<textarea class="form-control" rows="5" placeholder="Your Comment"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Submit Comment</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->


