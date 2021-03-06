<?php
    $data = $this->data; 
    $user = Session::get('user');
?>
<!-- Loop to get all data for individual article -->
<?php foreach($data as $item) : ?>
	<section id="entity_section" class="entity_section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="entity_wrapper">
						<div class="entity_title">
							<h1 class="mt-5"><?= $item->header; ?></h1>
						</div>
						<!-- entity_title -->
						
						<div class="entity_meta">
							<a href="#" target="_self"> <?= $item->timestamp; ?></a>, by: <a href="#" target="_self"><?= $item->firstname . ' ' . $item->lastname; ?></a>
						</div>
						<!-- entity_meta -->
						
						<div class="entity_rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-full"></i>
						</div>
						<!-- entity_rating -->
						
						<div class="entity_social">
							<a href="#" class="icons-sm sh-ic">
								<i class="fa fa-share-alt"></i>
								<b>424</b> <span class="share_ic">Shares</span>
							</a>
							<a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
							<!--Twitter-->
							<a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
							<!--Google +-->
							<a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
							<!--Linkedin-->
							<a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
							<!--Pinterest-->
							<a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
						</div>
						<!-- entity_social -->
						
						<div class="entity_thumb">
							<img class="img-responsive" src="<?= URL ?><?= $item->image; ?>" alt="feature-top">
						</div>
						<!-- entity_thumb -->
						
						<div class="entity_content"><?= $item->content; ?></div>
						<!-- entity_content -->
						
						<div class="entity_footer">
							<div class="entity_tag">
								<span class="blank"><a href="#"><?= $item->category_name ?></a></span>
							</div>
							<!-- entity_tag -->
							
							<div class="entity_social">
								<span><i class="fa fa-share-alt"></i>424 <a href="#">Shares</a> </span>
								<span><i class="fa fa-comments-o"></i>4 <a href="#">Comments</a> </span>
							</div>
							<!-- entity_social -->
						</div>
						<!-- entity_footer -->
					</div>
					<!-- entity_wrapper -->
					
					<div class="related_news">
						<div class="entity_inner__title header_purple">
							<h2><a href="#">Related News</a></h2>
						</div>
						<!-- entity_title -->
						
						<div class="row">
							<div class="col-md-6">
								<div class="media">
									<div class="media-left">
										<a href="#"><img class="media-object" src="assets/img/cat-mobi-sm1.jpg" alt="Generic placeholder image"></a>
									</div>
									<div class="media-body">
										<span class="tag purple"><a href="category.html" target="_self">Mobile</a></span>
										
										<h3 class="media-heading"><a href="single.html" target="_self">Apple launches photo-centric wrist
												watch for Android</a></h3>
										<span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>
										
										<div class="media_social">
											<span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
											<span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
										</div>
									</div>
								</div>
								<div class="media">
									<div class="media-left">
										<a href="#"><img class="media-object" src="assets/img/cat-mobi-sm3.jpg" alt="Generic placeholder image"></a>
									</div>
									<div class="media-body">
										<span class="tag purple"><a href="category.html" target="_self">Mobile</a></span>
										
										<h3 class="media-heading"><a href="single.html" target="_self">The Portable Charger or data cable</a></h3>
										<span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>
										
										<div class="media_social">
											<span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
											<span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="media">
									<div class="media-left">
										<a href="#"><img class="media-object" src="assets/img/cat-mobi-sm2.jpg" alt="Generic placeholder image"></a>
									</div>
									<div class="media-body">
										<span class="tag purple"><a href="category.html" target="_self">Mobile</a></span>
										
										<h3 class="media-heading"><a href="single.html" target="_self">Iphone 6 launches white & Grey
												colors handset</a></h3>
										<span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>
										
										<div class="media_social">
											<span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
											<span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
										</div>
									</div>
								</div>
								<div class="media">
									<div class="media-left">
										<a href="#"><img class="media-object" src="assets/img/cat-mobi-sm4.jpg"
																		 alt="Generic placeholder image"></a>
									</div>
									<div class="media-body">
										<span class="tag purple"><a href="category.html" target="_self">Mobile</a></span>
										<a href="single.html" target="_self"><h3 class="media-heading">Fully new look slim handset
												like</h3></a>
										<span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>
										
										<div class="media_social">
											<span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
											<span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Related news -->
					
					<!-- Display message when no comments – don't delete if, otherwhise foreach error will occure -->
					<?php if(empty($this->comments)): ?>
						<div class="comment-msg mt-5 mb-3">
							<p class="mb-0">No comment has been submitted yet.</p>
						</div>
					<?php else: ?>
						<?php foreach($this->comments as $comment) : ?>
							<div class="readers_comment">
								<div class="entity_inner__title header_purple">
									<h2>Readers Comment</h2>
								</div>
								<!-- entity_title -->
								
								<div class="media">
									<div class="media-left">
										<a href="#">
											<img alt="64x64" class="media-object" data-src="assets/img/reader_img1.jpg" src="<?= URL ?>/public/assets/img/reader_img1.jpg" data-holder-rendered="true">
										</a>
									</div>
									<div class="media-body">
										<h2 class="media-heading"><a href="#"><?= $comment->firstname ?></a></h2>
										<?= $comment->comment_content ?>
										<small class="text-muted"><?= $comment->timestamp ?></small>
										
										<div class="entity_vote">
											<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
											<a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
											<a href="#"><span class="reply_ic">Reply </span></a>
										</div>
									</div>
								
								</div>
								<!-- media end -->
							</div>
							<!--Readers Comment-->
						<?php endforeach; ?>
					<?php endif;?>
					
					<!-- If user is logged in enable comment feature -->
					<?php if($user) : ?>
						<div class="entity_comments">
							<div class="entity_inner__title header_black">
								<h2>Add a Comment</h2>
							</div>
							<!--Entity Title -->
							<form class="mb-5" action="<?= URL ?>category/insertComment/<?= $getId = $item->id ?>#commentSubmitted" method="POST">
								<div class="form-group">
									<label for="inputName"></label>
									<input type="text" class="form-control" id="inputName" placeholder="Name">
								</div>
								
								<div class="form-group">
									<label for="inputEmail"></label>
									<input type="text" class="form-control" id="inputEmail" placeholder="Email">
								</div>
								
								<div class="form-group comment">
									<label for="comment">Write a comment</label>
									<textarea class="form-control" name="user_comment" id="comment" rows="3"></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Submit comment</button>
							</form>
						</div><!--Entity Comments From -->
					<?php endif; ?>
				</div>
				<!--Entity Comments -->
			
				<!--Left Section-->
				<div class="col-md-4">
					<div class="widget">
						<div class="widget_title widget_black">
							<h2><a href="#">Popular News</a></h2>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="single.html" target="_self">Canon launches photo centric 00214 Model supper shutter camera</a>
								</h3> <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>
								
								<div class="widget_article_social">
							<span>
									<a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
							</span>
									<span>
									<a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
							</span>
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="assets/img/pop_right2.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="single.html" target="_self">Samsung galaxy note are the supper mobile of all products.</a>
								</h3>
								<span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>
								
								<div class="widget_article_social">
							<span>
									<a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
							</span>
									<span>
									<a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
							</span>
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="single.html" target="_self">Apple launches photo-centric wrist watch for Android</a>
								</h3>
								<span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>
								
								<div class="widget_article_social">
							<span>
									<a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
							</span>
									<span>
									<a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
							</span>
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="assets/img/pop_right4.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="single.html" target="_self">Kodak Hi-Speed shutter double shot camera comming soon</a>
								</h3>
								<span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>
								
								<div class="widget_article_social">
							<span>
									<a href="single.html" target="_self"><i class="fa fa-share-alt"></i>424</a> Shares
							</span>
									<span>
									<a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
							</span>
								</div>
							</div>
						</div>
						<p class="widget_divider"><a href="#" target="_self">More News&nbsp;&raquo;</a></p>
					</div>
					<!-- Popular News -->
					
					<div class="widget hidden-xs m30">
						<img class="img-responsive adv_img" src="assets/img/right_add1.jpg" alt="add_one">
						<img class="img-responsive adv_img" src="assets/img/right_add2.jpg" alt="add_one">
						<img class="img-responsive adv_img" src="assets/img/right_add3.jpg" alt="add_one">
						<img class="img-responsive adv_img" src="assets/img/right_add4.jpg" alt="add_one">
					</div>
					<!-- Advertisement -->
					
					<div class="widget hidden-xs m30">
						<img class="img-responsive widget_img" src="assets/img/right_add5.jpg" alt="add_one">
					</div>
					<!-- Advertisement -->
					
					<div class="widget reviews m30">
						<div class="widget_title widget_black">
							<h2><a href="#">Reviews</a></h2>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="single.html" target="_self">DSLR is the most old camera at this time readmore about new
										products</a>
								</h3>
								<span class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-full"></i>
					</span>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="assets/img/pop_right2.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body"><h3 class="media-heading"><a href="single.html" target="_self">Samsung is the best
										mobile in the android market.</a></h3> <span class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-full"></i>
					</span></div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="single.html" target="_self">Apple launches photo-centric wrist watch for Android</a>
								</h3>
								<span class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-full"></i>
					</span></div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="assets/img/pop_right4.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="single.html" target="_self">Yasaki camera launches new generic hi-speed shutter camera.</a>
								</h3>
								<span class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-full"></i>
					</span></div>
						</div>
						<p class="widget_divider"><a href="#" target="_self">More News&nbsp;&raquo;</a></p>
					</div>
					<!-- Reviews News -->
					
					<div class="widget hidden-xs m30">
						<img class="img-responsive widget_img" src="assets/img/right_add6.jpg" alt="add_one">
					</div>
					<!-- Advertisement -->
					
					<div class="widget m30">
						<div class="widget_title widget_black">
							<h2><a href="#">Most Commented</a></h2>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="single.html" target="_self">Yasaki camera launches new generic hi-speed shutter camera.</a>
								</h3>
								
								<div class="media_social">
									<span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="assets/img/pop_right2.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="single.html" target="_self">Samsung is the best mobile in the android market.</a>
								</h3>
								
								<div class="media_social">
									<span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="single.html" target="_self">Apple launches photo-centric wrist watch for Android</a>
								</h3>
								
								<div class="media_social">
									<span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
								</div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="assets/img/pop_right4.jpg" alt="Generic placeholder image"></a>
							</div>
							<div class="media-body">
								<h3 class="media-heading">
									<a href="single.html" target="_self">DSLR is the most old camera at this time readmore about new
										products</a>
								</h3>
								
								<div class="media_social">
									<span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
								</div>
							</div>
						</div>
						<p class="widget_divider"><a href="#" target="_self">More News&nbsp;&nbsp;&raquo; </a></p>
					</div>
					<!-- Most Commented News -->
					
					<div class="widget m30">
						<div class="widget_title widget_black">
							<h2><a href="#">Editor Corner</a></h2>
						</div>
						<div class="widget_body"><img class="img-responsive left" src="assets/img/editor.jpg"
																					alt="Generic placeholder image">
							
							<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
								users after installed base benefits. Dramatically visualize customer directed convergence without</p>
							
							<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
								users after installed base benefits. Dramatically visualize customer directed convergence without
								revolutionary ROI.</p>
							<button class="btn pink">Read more</button>
						</div>
					</div>
					<!-- Editor News -->
					
					<div class="widget hidden-xs m30">
						<img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
						<img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
						<img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
						<img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
					</div>
					<!--Advertisement -->
					
					<div class="widget m30">
						<div class="widget_title widget_black">
							<h2><a href="#">Readers Corner</a></h2>
						</div>
						<div class="widget_body"><img class="img-responsive left" src="assets/img/reader.jpg"
																					alt="Generic placeholder image">
							
							<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
								users after installed base benefits. Dramatically visualize customer directed convergence without</p>
							
							<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
								users after installed base benefits. Dramatically visualize customer directed convergence without
								revolutionary ROI.</p>
							<button class="btn pink">Read more</button>
						</div>
					</div>
					<!--  Readers Corner News -->
					
					<div class="widget hidden-xs m30">
						<img class="img-responsive widget_img" src="assets/img/podcast.jpg" alt="add_one">
					</div>
					<!--Advertisement-->
				</div>
				<!--Right Section-->
			</div>
			<!-- row -->
		</div>
		<!-- container -->
	</section>
	<!-- Entity Section Wrapper -->
<?php endforeach; ?>