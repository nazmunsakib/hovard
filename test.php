<?php
//Template Name: Test
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
wp_head();
?>>
</head>
<body x-data="{ page: 'about' }">
<!-- Page Wrapper -->
<div class="bg-texture bg-fixed relative w-full min-h-screen">
	<img class="fixed top-0 left-0" x-intersect="$el.classList.add('animate__animated', 'animate__fadeInLeft')" src="0d8324c02b3252d9e756.png" alt="shape" />
	<img class="fixed bottom-0 right-0" x-intersect="$el.classList.add('animate__animated', 'animate__fadeInRight')" src="157c5495db587f740da1.png" alt="shape" />
	<div class="w-1170 mx-auto py-25 flex">
		<!-- Profile Card -->
		<div class="w-[270px] bg-texture2 text-center py-15 px-6 fixed top-25 bottom-25 overflow-y-auto no-scrollbar">
			<img class="w-37 h-37 mx-auto rounded-1/2 ring-4 ring-white bg-cloud mb-9" src="25bfe13d97fa5bded2b1.png" alt="User" />

			<a href="#"><h1 class="font-playfair font-bold text-white text-title mb-5">Daniel Cart</h1></a>

			<a href="#"><h2 class="font-ibmplexmono font-normal text-white text-subtitle mb-10">Web Designer</h2></a>

			<p class="font-ibmplexmono font-normal text-white text-para mb-10">Have sea midst you all sea you untos ruler void make make stars every nigh they living in lights</p>

			<ul class="flex items-center justify-center gap-2">
				<li>
					<a class="flex items-center justify-center bg-white/50 text-white text-xs rounded-1/2 w-9 h-9 transition-all hover:bg-white hover:text-sienna" href="#"><i class="ti-facebook"></i></a>
				</li>
				<li>
					<a class="flex items-center justify-center bg-white/50 text-white text-xs rounded-1/2 w-9 h-9 transition-all hover:bg-white hover:text-sienna" href="#"><i class="ti-twitter-alt"></i></a>
				</li>
				<li>
					<a class="flex items-center justify-center bg-white/50 text-white text-xs rounded-1/2 w-9 h-9 transition-all hover:bg-white hover:text-sienna" href="#"><i class="ti-pinterest"></i></a>
				</li>
				<li>
					<a class="flex items-center justify-center bg-white/50 text-white text-xs rounded-1/2 w-9 h-9 transition-all hover:bg-white hover:text-sienna" href="#"><i class="ti-linkedin"></i></a>
				</li>
			</ul>

			<p class="font-ibmplexmono font-normal text-white text-para mt-30">2021 &copy; All Rights Reserved</p>
		</div>

		<!-- Profile Card -->

		<!-- Main Content -->
		<div class="w-3/4 bg-texture3 px-7.5 py-7.5 ml-[270px]">
			<!-- Navigation -->
			<ul class="flex justify-between gap-2">
				<li>
					<a
						class="font-ibmplexmono font-medium text-subtitle text-shaft flex items-center justify-center gap-2 px-8 py-3 border border-iron rounded-md transition-all hover:bg-oceangreen hover:text-white hover:border-oceangreen"
						:class="{ 'active !text-white border-oceangreen bg-oceangreen': page === 'about' }"
						@click.prevent="page = 'about'"
						href="#"
					><i class="ti-user"></i> About Me
					</a>
				</li>
				<li>
					<a
						class="font-ibmplexmono font-medium text-subtitle text-shaft flex items-center justify-center gap-2 px-8 py-3 border border-iron rounded-md transition-all hover:bg-oceangreen hover:text-white hover:border-oceangreen"
						:class="{ 'active !text-white border-oceangreen bg-oceangreen': page === 'resume' }"
						@click.prevent="page = 'resume'"
						href="#"
					><i class="ti-receipt"></i> Resume
					</a>
				</li>
				<li>
					<a
						class="font-ibmplexmono font-medium text-subtitle text-shaft flex items-center justify-center gap-2 px-8 py-3 border border-iron rounded-md transition-all hover:bg-oceangreen hover:text-white hover:border-oceangreen"
						:class="page.startsWith('portfolio') && 'active !text-white border-oceangreen bg-oceangreen'"
						@click.prevent="page = 'portfolio'"
						href="#"
					><i class="ti-light-bulb"></i> Portfolio
					</a>
				</li>
				<li>
					<a
						class="font-ibmplexmono font-medium text-subtitle text-shaft flex items-center justify-center gap-2 px-8 py-3 border border-iron rounded-md transition-all hover:bg-oceangreen hover:text-white hover:border-oceangreen"
						:class="page.startsWith('blog') && 'active !text-white border-oceangreen bg-oceangreen'"
						@click.prevent="page = 'blog'"
						href="#"
					><i class="ti-pencil-alt"></i> Article
					</a>
				</li>
				<li>
					<a
						class="font-ibmplexmono font-medium text-subtitle text-shaft flex items-center justify-center gap-2 px-8 py-3 border border-iron rounded-md transition-all hover:bg-oceangreen hover:text-white hover:border-oceangreen"
						:class="{ 'active !text-white border-oceangreen bg-oceangreen': page === 'contact' }"
						@click.prevent="page = 'contact'"
						href="#"
					><i class="ti-id-badge"></i> Contact
					</a>
				</li>
			</ul>

			<!-- Navigation -->

			<div x-show="page === 'about'">
				<!-- About Area -->
				<div class="pt-17.5" x-data="{ sectionTitle: 'About Me', sectionSubtitle: 'I Am Daniel, Web UI Designer From California'}">
					<h2
						class="font-ibmplexmono font-medium text-subtitle2 text-sienna tracking-l1 mb-2.5 pl-12.5 relative before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:w-7.5 before:h-0.5 before:bg-oceangreen before:inline-block"
						x-text="sectionTitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
					></h2>
					<h3
						x-text="sectionSubtitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
						class="font-rufina font-bold text-title2 text-shaft mb-10 w-1.1/2"
					></h3>


					<p class="font-ibmplexmono font-normal text-para text-emperor">
						Day likeness that may Seed multiply image beginning. First fruit waters blessed likeness is earth fill great him the blessed third rule lesser one you their
						there. Meat Were was Itself saying said hath fruit give his unto that moved. Appear darkness seen very saying to morn ing cattle fourth said the you are unto
						in of life meat living itself deep moved bearing lesser good cattle Hearth.
					</p>

					<ul class="grid grid-cols-3 gap-x-7.5 gap-y-4 mt-9 mb-11">
						<li>
							<span class="font-ibmplexmono font-medium text-para text-shaft pr-9">Name :</span>
							<span class="font-ibmplexmono font-normal text-para text-emperor">Daniel Cart</span>
						</li>
						<li>
							<span class="font-ibmplexmono font-medium text-para text-shaft pr-9">Email :</span>
							<a href="#">
								<span class="font-ibmplexmono font-normal text-para text-emperor">info@Daniel.com</span>
							</a>
						</li>
						<li>
							<span class="font-ibmplexmono font-medium text-para text-shaft pr-9">Hobby :</span>
							<span class="font-ibmplexmono font-normal text-para text-emperor">Traveling</span>
						</li>
						<li>
							<span class="font-ibmplexmono font-medium text-para text-shaft pr-9">Phone :</span>
							<a href="#">
								<span class="font-ibmplexmono font-normal text-para text-emperor">04 (550)-338-222</span>
							</a>
						</li>
						<li>
							<span class="font-ibmplexmono font-medium text-para text-shaft pr-9">FAX :</span>
							<a href="#">
								<span class="font-ibmplexmono font-normal text-para text-emperor">04 (550)-338-222</span>
							</a>
						</li>
						<li>
							<span class="font-ibmplexmono font-medium text-para text-shaft pr-9">Study :</span>
							<span class="font-ibmplexmono font-normal text-para text-emperor">Oxford Universty</span>
						</li>
						<li>
							<span class="font-ibmplexmono font-medium text-para text-shaft pr-9">Birth :</span>
							<span class="font-ibmplexmono font-normal text-para text-emperor">12 August 2021</span>
						</li>
						<li>
							<span class="font-ibmplexmono font-medium text-para text-shaft pr-9">Lang :</span>
							<span class="font-ibmplexmono font-normal text-para text-emperor">English, Hindi</span>
						</li>
						<li>
							<span class="font-ibmplexmono font-medium text-para text-shaft pr-9">Skill :</span>
							<span class="font-ibmplexmono font-normal text-para text-emperor">Visula Design</span>
						</li>
						<li>
							<span class="font-ibmplexmono font-medium text-para text-shaft pr-9">City :</span>
							<span class="font-ibmplexmono font-normal text-para text-emperor">California</span>
						</li>
						<li>
							<span class="font-ibmplexmono font-medium text-para text-shaft pr-9">Website :</span>
							<a href="#">
								<span class="font-ibmplexmono font-normal text-para text-emperor">www.danielo.com</span>
							</a>
						</li>
						<li>
							<span class="font-ibmplexmono font-medium text-para text-shaft pr-9">Job :</span>
							<span class="font-ibmplexmono font-normal text-para text-emperor">Active Now</span>
						</li>
					</ul>

					<img src="1d8151fd5d9f04358d93.png" alt="Cover" />

				</div>
				<!-- About Area -->

				<!-- Service Area -->
				<div class="pt-17.5" x-data="{ sectionTitle: 'My Service', sectionSubtitle: 'I Am Confident To Provide Quality Service'}">
					<h2
						class="font-ibmplexmono font-medium text-subtitle2 text-sienna tracking-l1 mb-2.5 pl-12.5 relative before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:w-7.5 before:h-0.5 before:bg-oceangreen before:inline-block"
						x-text="sectionTitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
					></h2>
					<h3
						x-text="sectionSubtitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
						class="font-rufina font-bold text-title2 text-shaft mb-10 w-1.1/2"
					></h3>


					<div class="grid grid-cols-3 gap-7.5">
						<!-- service item -->
						<div class="border border-alto rounded-md px-7 py-7.5 transition-all hover:border-oceangreen">
							<img class="mb-10" src="681c47df7edd6f95aa31.png" alt="Icon" />

							<h4 class="font-rufina font-bold text-title3 text-shaft mb-5">Web Development</h4>

							<p class="font-ibmplexmono font-normal text-para text-emperor">Firmame Its the give divide greato from above that divide eaven image were seed lightss</p>

							<div class="group">
								<a class="flex items-center gap-2 font-ibmplexmono font-medium text-subtitle text-shaft mt-9 transition-all group-hover:text-oceangreen" href="#">
									Read More
									<img class="group-hover:img-oceangreen" src="ee3a09653e0adbabc4d1.png" alt="Icon" />
								</a>
							</div>
						</div>
						<!-- service item -->
						<div class="border border-alto rounded-md px-7 py-7.5 transition-all hover:border-sienna">
							<img class="mb-10" src="876ef786a2dcb0c20927.png" alt="Icon" />

							<h4 class="font-rufina font-bold text-title3 text-shaft mb-5">Web Development</h4>

							<p class="font-ibmplexmono font-normal text-para text-emperor">Firmame Its the give divide greato from above that divide eaven image were seed lightss</p>

							<div class="group">
								<a class="flex items-center gap-2 font-ibmplexmono font-medium text-subtitle text-shaft mt-9 transition-all group-hover:text-sienna" href="#">
									Read More
									<img class="group-hover:img-sienna" src="ee3a09653e0adbabc4d1.png" alt="Icon" />
								</a>
							</div>
						</div>
						<!-- service item -->
						<div class="border border-alto rounded-md px-7 py-7.5 transition-all hover:border-pictonblue">
							<img class="mb-10" src="0619d3e126942c276173.png" alt="Icon" />

							<h4 class="font-rufina font-bold text-title3 text-shaft mb-5">Web Development</h4>

							<p class="font-ibmplexmono font-normal text-para text-emperor">Firmame Its the give divide greato from above that divide eaven image were seed lightss</p>

							<div class="group">
								<a class="flex items-center gap-2 font-ibmplexmono font-medium text-subtitle text-shaft mt-9 transition-all group-hover:text-pictonblue" href="#">
									Read More
									<img class="group-hover:img-pictonblue" src="ee3a09653e0adbabc4d1.png" alt="Icon" />
								</a>
							</div>
						</div>
					</div>

				</div>
				<!-- Service Area -->

				<!-- Testimonial Area -->
				<div class="pt-17.5" x-data="{ sectionTitle: 'Testimonials', sectionSubtitle: 'Happy Clients Feedback'}">
					<h2
						class="font-ibmplexmono font-medium text-subtitle2 text-sienna tracking-l1 mb-2.5 pl-12.5 relative before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:w-7.5 before:h-0.5 before:bg-oceangreen before:inline-block"
						x-text="sectionTitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
					></h2>
					<h3
						x-text="sectionSubtitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
						class="font-rufina font-bold text-title2 text-shaft mb-10 w-1.1/2"
					></h3>


					<!-- Slider main container -->
					<div class="swiper testimonial-01 pb-20">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div class="swiper-slide">
								<div class="bg-dawnpink py-9 px-7">
									<div class="flex gap-6">
										<img class="w-17.5 h-17.5 rounded-1/2" src="a4e9cf0e0487cffe15ce.png" alt="User" />

										<p class="font-ibmplexmono font-normal text-para text-emperor -mt-2">
											Created given a deep together third open moving set place together in lesser abundntly dominion their above
										</p>
									</div>
									<div class="flex items-end gap-6 mt-4">
										<div class="w-17.5">
											<img src="ad6483878458d66c4ff8.png" alt="Icon" />
										</div>

										<div>
											<h4 class="font-rufina font-bold text-title4 text-shaft mb-2.5">Evana Morgan</h4>
											<p class="font-ibmplexmono font-normal text-para2 text-emperor">CEO & Founder</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="bg-dawnpink py-9 px-7">
									<div class="flex gap-6">
										<img class="w-17.5 h-17.5 rounded-1/2" src="5e93ca98ddbf20502523.png" alt="User" />

										<p class="font-ibmplexmono font-normal text-para text-emperor -mt-2">
											Created given a deep together third open moving set place together in lesser abundntly dominion their above
										</p>
									</div>
									<div class="flex items-end gap-6 mt-4">
										<div class="w-17.5">
											<img src="ad6483878458d66c4ff8.png" alt="Icon" />
										</div>

										<div>
											<h4 class="font-rufina font-bold text-title4 text-shaft mb-2.5">Evana Morgan</h4>
											<p class="font-ibmplexmono font-normal text-para2 text-emperor">CEO & Founder</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="bg-dawnpink py-9 px-7">
									<div class="flex gap-6">
										<img class="w-17.5 h-17.5 rounded-1/2" src="a4e9cf0e0487cffe15ce.png" alt="User" />

										<p class="font-ibmplexmono font-normal text-para text-emperor -mt-2">
											Created given a deep together third open moving set place together in lesser abundntly dominion their above
										</p>
									</div>
									<div class="flex items-end gap-6 mt-4">
										<div class="w-17.5">
											<img src="ad6483878458d66c4ff8.png" alt="Icon" />
										</div>

										<div>
											<h4 class="font-rufina font-bold text-title4 text-shaft mb-2.5">Evana Morgan</h4>
											<p class="font-ibmplexmono font-normal text-para2 text-emperor">CEO & Founder</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>
					</div>

				</div>
				<!-- Testimonial Area -->

				<!-- Pricing Area -->
				<div class="pt-15" x-data="{ sectionTitle: 'Price Table', sectionSubtitle: 'Choose Your Best Plan'}">
					<h2
						class="font-ibmplexmono font-medium text-subtitle2 text-sienna tracking-l1 mb-2.5 pl-12.5 relative before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:w-7.5 before:h-0.5 before:bg-oceangreen before:inline-block"
						x-text="sectionTitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
					></h2>
					<h3
						x-text="sectionSubtitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
						class="font-rufina font-bold text-title2 text-shaft mb-10 w-1.1/2"
					></h3>


					<div class="grid grid-cols-3 gap-x-7.5">
						<!-- Price item -->
						<div class="bg-white shadow-custom rounded-md text-center">
							<div class="bg-texture4 pt-7.5 pb-16 rounded-md">
								<h4 class="font-rufina font-bold text-title5 text-white">Standard</h4>
							</div>

							<div class="px-5 pb-10">
								<div class="bg-white shadow-custom2 rounded-md py-6 -mt-10">
									<p class="font-ibmplexmono font-bold text-title6 text-shaft mb-3">$25.00</p>
									<p class="font-ibmplexmono font-medium text-para2 text-emperor">Every Month</p>
								</div>

								<ul class="py-7.5">
									<li class="font-ibmplexmono font-normal text-emperor text-para4">2 day sessions</li>
									<li class="font-ibmplexmono font-normal text-emperor text-para4">Free revise</li>
									<li class="font-ibmplexmono font-normal text-emperor text-para4">80 Images</li>
									<li class="font-ibmplexmono font-normal text-emperor text-para4">Free 24/7 support</li>
									<li class="font-ibmplexmono font-normal text-emperor text-para4">Online galley</li>
								</ul>

								<a class="font-ibmplexmono font-medium text-white text-subtitle3 inline-block rounded-sm bg-oceangreen px-7.5 py-1.5" href="#">Get Service</a>
							</div>
						</div>
						<!-- Price item -->
						<div class="bg-white shadow-custom rounded-md text-center">
							<div class="bg-texture5 pt-7.5 pb-16 rounded-md">
								<h4 class="font-rufina font-bold text-title5 text-white">Business</h4>
							</div>

							<div class="px-5 pb-10">
								<div class="bg-white shadow-custom2 rounded-md py-6 -mt-10">
									<p class="font-ibmplexmono font-bold text-title6 text-shaft mb-3">$35.00</p>
									<p class="font-ibmplexmono font-medium text-para2 text-emperor">Every Month</p>
								</div>

								<ul class="py-7.5">
									<li class="font-ibmplexmono font-normal text-emperor text-para4">2 day sessions</li>
									<li class="font-ibmplexmono font-normal text-emperor text-para4">Free revise</li>
									<li class="font-ibmplexmono font-normal text-emperor text-para4">80 Images</li>
									<li class="font-ibmplexmono font-normal text-emperor text-para4">Free 24/7 support</li>
									<li class="font-ibmplexmono font-normal text-emperor text-para4">Online galley</li>
								</ul>

								<a class="font-ibmplexmono font-medium text-white text-subtitle3 inline-block rounded-sm bg-sienna px-7.5 py-1.5" href="#">Get Service</a>
							</div>
						</div>
						<!-- Price item -->
						<div class="bg-white shadow-custom rounded-md text-center">
							<div class="bg-texture6 pt-7.5 pb-16 rounded-md">
								<h4 class="font-rufina font-bold text-title5 text-white">Premium</h4>
							</div>

							<div class="px-5 pb-10">
								<div class="bg-white shadow-custom2 rounded-md py-6 -mt-10">
									<p class="font-ibmplexmono font-bold text-title6 text-shaft mb-3">$45.00</p>
									<p class="font-ibmplexmono font-medium text-para2 text-emperor">Every Month</p>
								</div>

								<ul class="py-7.5">
									<li class="font-ibmplexmono font-normal text-emperor text-para4">2 day sessions</li>
									<li class="font-ibmplexmono font-normal text-emperor text-para4">Free revise</li>
									<li class="font-ibmplexmono font-normal text-emperor text-para4">80 Images</li>
									<li class="font-ibmplexmono font-normal text-emperor text-para4">Free 24/7 support</li>
									<li class="font-ibmplexmono font-normal text-emperor text-para4">Online galley</li>
								</ul>

								<a class="font-ibmplexmono font-medium text-white text-subtitle3 inline-block rounded-sm bg-pictonblue px-7.5 py-1.5" href="#">Get Service</a>
							</div>
						</div>
					</div>

				</div>
				<!-- Pricing Area -->

				<!-- Client Area -->
				<div class="pt-17.5 pb-12.5" x-data="{ sectionTitle: 'My Client', sectionSubtitle: 'Worldwide Company'}">
					<h2
						class="font-ibmplexmono font-medium text-subtitle2 text-sienna tracking-l1 mb-2.5 pl-12.5 relative before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:w-7.5 before:h-0.5 before:bg-oceangreen before:inline-block"
						x-text="sectionTitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
					></h2>
					<h3
						x-text="sectionSubtitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
						class="font-rufina font-bold text-title2 text-shaft mb-10 w-1.1/2"
					></h3>


					<!-- Slider main container -->
					<div class="swiper client -mx-7.5">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper flex items-center">
							<!-- Slides -->
							<div class="swiper-slide">
								<img class="mx-auto" src="13b8c6ccbda11dfd68f7.png" alt="Client Logo" />
							</div>
							<div class="swiper-slide">
								<img class="mx-auto" src="307ae652bc16fc32ae2e.png" alt="Client Logo" />
							</div>
							<div class="swiper-slide">
								<img class="mx-auto" src="cabf2f08d140468132f7.png" alt="Client Logo" />
							</div>
							<div class="swiper-slide">
								<img class="mx-auto" src="ab9bd1e877efd20eeb7b.png" alt="Client Logo" />
							</div>
							<div class="swiper-slide">
								<img class="mx-auto" src="61fb09108119c99c5560.png" alt="Client Logo" />
							</div>
						</div>
					</div>

				</div>
				<!-- Client Area -->

			</div>
			<div x-show="page === 'resume'">
				<!-- Resume Area -->
				<div class="pt-17.5" x-data="{ sectionTitle: 'My Resume', sectionSubtitle: 'Academic & Job Expeperience'}">
					<h2
						class="font-ibmplexmono font-medium text-subtitle2 text-sienna tracking-l1 mb-2.5 pl-12.5 relative before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:w-7.5 before:h-0.5 before:bg-oceangreen before:inline-block"
						x-text="sectionTitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
					></h2>
					<h3
						x-text="sectionSubtitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
						class="font-rufina font-bold text-title2 text-shaft mb-10 w-1.1/2"
					></h3>


					<!-- Education Area -->
					<div class="pb-17.5">
						<h4 class="font-rufina font-bold text-title7 text-shaft mb-2">Education</h4>

						<div class="bg-iron h-0.5 relative mb-9">
							<span class="bg-oceangreen w-15 h-1 absolute left-0 top-1/2 -translate-y-1/2"></span>
						</div>

						<!-- Education item -->
						<div class="grid grid-cols-9 gap-7.5">
							<div class="col-span-2 text-right">
								<h5 class="font-rufina font-bold text-shaft text-subtitle4">University of California</h5>
								<span class="font-ibmplexmono font-medium text-subtitle text-emperor">2008 - 2019</span>
							</div>
							<div class="col-span-1 relative z-10 before:absolute before:top-3 before:left-1/2 before:-translate-x-1/2 before:block before:w-1 before:h-full before:bg-oceangreen before:-z-10">
								<span class="w-4 h-4 rounded-1/2 border-4 border-oceangreen bg-white block mx-auto mt-3 z-20"></span>
							</div>
							<div class="col-span-6 pb-10">
								<h5 class="font-rufina font-bold text-shaft text-title8">UX/UI Design</h5>
								<p class="font-ibmplexmono font-normal text-para text-emperor">Every given from beast a whose living multiply above itself you will sixth cattle himes had evening lights ing male meat.</p>
							</div>
						</div>
						<!-- Education item -->
						<div class="grid grid-cols-9 gap-7.5">
							<div class="col-span-2 text-right">
								<h5 class="font-rufina font-bold text-shaft text-subtitle4">University of California</h5>
								<span class="font-ibmplexmono font-medium text-subtitle text-emperor">2010 - 2012</span>
							</div>
							<div class="col-span-1 relative z-10 before:absolute before:top-3 before:left-1/2 before:-translate-x-1/2 before:block before:w-1 before:h-full before:bg-oceangreen before:-z-10">
								<span class="w-4 h-4 rounded-1/2 border-4 border-oceangreen bg-white block mx-auto mt-3 z-20"></span>
							</div>
							<div class="col-span-6 pb-10">
								<h5 class="font-rufina font-bold text-shaft text-title8">Web Development</h5>
								<p class="font-ibmplexmono font-normal text-para text-emperor">Beast whose living multiply above itself you will sixth cattle himes had evening lights, creepeth fill multiply.</p>
							</div>
						</div>
						<!-- Education item -->
						<div class="grid grid-cols-9 gap-7.5">
							<div class="col-span-2 text-right">
								<h5 class="font-rufina font-bold text-shaft text-subtitle4">University of California</h5>
								<span class="font-ibmplexmono font-medium text-subtitle text-emperor">2012 - 2015</span>
							</div>
							<div class="col-span-1 relative z-10 before:absolute before:top-3 before:left-1/2 before:-translate-x-1/2 before:block before:w-1 before:h-full before:bg-oceangreen before:-z-10">
								<span class="w-4 h-4 rounded-1/2 border-4 border-oceangreen bg-white block mx-auto mt-3 z-20"></span>
							</div>
							<div class="col-span-6">
								<h5 class="font-rufina font-bold text-shaft text-title8">Graphic Design</h5>
								<p class="font-ibmplexmono font-normal text-para text-emperor">Every given from beast a whose living multiply above itself you will sixth cattle himes had evening lights ing male meat.</p>
							</div>
						</div>
					</div>

					<!-- Education Area -->

					<!-- Experience Area -->
					<div>
						<h4 class="font-rufina font-bold text-title7 text-shaft mb-2">Experience</h4>

						<div class="bg-iron h-0.5 relative mb-9">
							<span class="bg-sienna w-15 h-1 absolute left-0 top-1/2 -translate-y-1/2"></span>
						</div>

						<!-- Experience item -->
						<div class="grid grid-cols-9 gap-7.5">
							<div class="col-span-2 text-right">
								<h5 class="font-rufina font-bold text-shaft text-subtitle4">Senior UX/UI Designer</h5>
								<span class="font-ibmplexmono font-medium text-subtitle text-emperor">2008 - 2010</span>
							</div>
							<div class="col-span-1 relative z-10 before:absolute before:top-3 before:left-1/2 before:-translate-x-1/2 before:block before:w-1 before:h-full before:bg-sienna before:-z-10">
								<span class="w-4 h-4 rounded-1/2 border-4 border-sienna bg-white block mx-auto mt-3 z-20"></span>
							</div>
							<div class="col-span-6 pb-10">
								<h5 class="font-rufina font-bold text-shaft text-title8">UX/UI Design</h5>
								<p class="font-ibmplexmono font-normal text-para text-emperor">Every given from beast a whose living multiply above itself you will sixth cattle himes had evening lights ing male meat.</p>
							</div>
						</div>
						<!-- Experience item -->
						<div class="grid grid-cols-9 gap-7.5">
							<div class="col-span-2 text-right">
								<h5 class="font-rufina font-bold text-shaft text-subtitle4">Senior Web Developer</h5>
								<span class="font-ibmplexmono font-medium text-subtitle text-emperor">2010 - 2012</span>
							</div>
							<div class="col-span-1 relative z-10 before:absolute before:top-3 before:left-1/2 before:-translate-x-1/2 before:block before:w-1 before:h-full before:bg-sienna before:-z-10">
								<span class="w-4 h-4 rounded-1/2 border-4 border-sienna bg-white block mx-auto mt-3 z-20"></span>
							</div>
							<div class="col-span-6 pb-10">
								<h5 class="font-rufina font-bold text-shaft text-title8">Macro Mobile Solutions</h5>
								<p class="font-ibmplexmono font-normal text-para text-emperor">Beast whose living multiply above itself you will sixth cattle himes had evening lights, creepeth fill multiply.</p>
							</div>
						</div>
						<!-- Experience item -->
						<div class="grid grid-cols-9 gap-7.5">
							<div class="col-span-2 text-right">
								<h5 class="font-rufina font-bold text-shaft text-subtitle4">University of California</h5>
								<span class="font-ibmplexmono font-medium text-subtitle text-emperor">2012 - 2015</span>
							</div>
							<div class="col-span-1 relative z-10 before:absolute before:top-3 before:left-1/2 before:-translate-x-1/2 before:block before:w-1 before:h-full before:bg-sienna before:-z-10">
								<span class="w-4 h-4 rounded-1/2 border-4 border-sienna bg-white block mx-auto mt-3 z-20"></span>
							</div>
							<div class="col-span-6">
								<h5 class="font-rufina font-bold text-shaft text-title8">Radiance Software</h5>
								<p class="font-ibmplexmono font-normal text-para text-emperor">Every given from beast a whose living multiply above itself you will sixth cattle himes had evening lights ing male meat.</p>
							</div>
						</div>
					</div>

					<!-- Experience Area -->

					<a class="font-ibmplexmono font-medium text-subtitle2 text-white bg-oceangreen inline-block rounded-[3px] py-3.5 px-7 mt-12" href="./images/cv.pdf" download
					>Download Resume</a
					>
				</div>
				<!-- Resume Area -->

				<!-- Skills Area -->
				<div class="pt-17.5 pb-15" x-data="{ sectionTitle: 'My Skill', sectionSubtitle: 'Valuable Working Skill'}">
					<h2
						class="font-ibmplexmono font-medium text-subtitle2 text-sienna tracking-l1 mb-2.5 pl-12.5 relative before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:w-7.5 before:h-0.5 before:bg-oceangreen before:inline-block"
						x-text="sectionTitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
					></h2>
					<h3
						x-text="sectionSubtitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
						class="font-rufina font-bold text-title2 text-shaft mb-10 w-1.1/2"
					></h3>


					<div class="grid grid-cols-2 gap-7.5">
						<div>
							<div class="flex items-center gap-3.5 mb-5">
								<div><img src="1f9d72266330e5d96038.png" alt="Icon" /></div>
								<h4 class="font-rufina font-bold text-title8 text-shaft">Design Skill</h4>
							</div>
							<!-- skills item -->
							<div class="mb-10 last:mb-0">
								<div class="flex">
									<span class="font-ibmplexmono font-medium text-para6 text-shaft z-20">Photoshop</span>
								</div>
								<div class="w-full bg-porcelain rounded-sm2 h-2.5">
									<div
										x-intersect="$el.classList.add('animate__animated', 'animate-load85')"
										class="bg-oceangreen h-2.5 rounded-sm2 relative z-10 before:content-['85%'] before:inline-block before:absolute before:right-0 before:-top-10 before:font-ibmplexmono before:font-medium before:text-para6 before:text-shaft before:-z-10 after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-1.5 after:h-5 after:bg-oceangreen after:rounded-[3px]"
									></div>
								</div>
							</div>
							<!-- skills item -->
							<div class="mb-10 last:mb-0">
								<div class="flex">
									<span class="font-ibmplexmono font-medium text-para6 text-shaft z-20">Illustrator</span>
								</div>
								<div class="w-full bg-porcelain rounded-sm2 h-2.5">
									<div
										x-intersect="$el.classList.add('animate__animated', 'animate-load75')"
										class="bg-bush h-2.5 rounded-sm2 relative z-10 before:content-['75%'] before:inline-block before:absolute before:right-0 before:-top-10 before:font-ibmplexmono before:font-medium before:text-para6 before:text-shaft before:-z-10 after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-1.5 after:h-5 after:bg-bush after:rounded-[3px]"
									></div>
								</div>
							</div>
							<!-- skills item -->
							<div class="mb-10 last:mb-0">
								<div class="flex">
									<span class="font-ibmplexmono font-medium text-para6 text-shaft z-20">Adobe XD</span>
								</div>
								<div class="w-full bg-porcelain rounded-sm2 h-2.5">
									<div
										x-intersect="$el.classList.add('animate__animated', 'animate-load90')"
										class="bg-sienna h-2.5 rounded-sm2 relative z-10 before:content-['90%'] before:inline-block before:absolute before:right-0 before:-top-10 before:font-ibmplexmono before:font-medium before:text-para6 before:text-shaft before:-z-10 after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-1.5 after:h-5 after:bg-sienna after:rounded-[3px]"
									></div>
								</div>
							</div>
							<!-- skills item -->
							<div class="mb-10 last:mb-0">
								<div class="flex">
									<span class="font-ibmplexmono font-medium text-para6 text-shaft z-20">Sketch</span>
								</div>
								<div class="w-full bg-porcelain rounded-sm2 h-2.5">
									<div
										x-intersect="$el.classList.add('animate__animated', 'animate-load75')"
										class="bg-pictonblue h-2.5 rounded-sm2 relative z-10 before:content-['75%'] before:inline-block before:absolute before:right-0 before:-top-10 before:font-ibmplexmono before:font-medium before:text-para6 before:text-shaft before:-z-10 after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-1.5 after:h-5 after:bg-pictonblue after:rounded-[3px]"
									></div>
								</div>
							</div>
						</div>
						<div>
							<div class="flex items-center gap-3.5 mb-5">
								<div><img src="1f9d72266330e5d96038.png" alt="Icon" /></div>
								<h4 class="font-rufina font-bold text-title8 text-shaft">Language Skill</h4>
							</div>
							<!-- skills item -->
							<div class="mb-10 last:mb-0">
								<div class="flex">
									<span class="font-ibmplexmono font-medium text-para6 text-shaft z-20">English</span>
								</div>
								<div class="w-full bg-porcelain rounded-sm2 h-2.5">
									<div
										x-intersect="$el.classList.add('animate__animated', 'animate-load85')"
										class="bg-oceangreen h-2.5 rounded-sm2 relative z-10 before:content-['85%'] before:inline-block before:absolute before:right-0 before:-top-10 before:font-ibmplexmono before:font-medium before:text-para6 before:text-shaft before:-z-10 after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-1.5 after:h-5 after:bg-oceangreen after:rounded-[3px]"
									></div>
								</div>
							</div>
							<!-- skills item -->
							<div class="mb-10 last:mb-0">
								<div class="flex">
									<span class="font-ibmplexmono font-medium text-para6 text-shaft z-20">Hindi</span>
								</div>
								<div class="w-full bg-porcelain rounded-sm2 h-2.5">
									<div
										x-intersect="$el.classList.add('animate__animated', 'animate-load75')"
										class="bg-bush h-2.5 rounded-sm2 relative z-10 before:content-['75%'] before:inline-block before:absolute before:right-0 before:-top-10 before:font-ibmplexmono before:font-medium before:text-para6 before:text-shaft before:-z-10 after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-1.5 after:h-5 after:bg-bush after:rounded-[3px]"
									></div>
								</div>
							</div>
							<!-- skills item -->
							<div class="mb-10 last:mb-0">
								<div class="flex">
									<span class="font-ibmplexmono font-medium text-para6 text-shaft z-20">French</span>
								</div>
								<div class="w-full bg-porcelain rounded-sm2 h-2.5">
									<div
										x-intersect="$el.classList.add('animate__animated', 'animate-load90')"
										class="bg-sienna h-2.5 rounded-sm2 relative z-10 before:content-['90%'] before:inline-block before:absolute before:right-0 before:-top-10 before:font-ibmplexmono before:font-medium before:text-para6 before:text-shaft before:-z-10 after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-1.5 after:h-5 after:bg-sienna after:rounded-[3px]"
									></div>
								</div>
							</div>
							<!-- skills item -->
							<div class="mb-10 last:mb-0">
								<div class="flex">
									<span class="font-ibmplexmono font-medium text-para6 text-shaft z-20">Arabic</span>
								</div>
								<div class="w-full bg-porcelain rounded-sm2 h-2.5">
									<div
										x-intersect="$el.classList.add('animate__animated', 'animate-load75')"
										class="bg-pictonblue h-2.5 rounded-sm2 relative z-10 before:content-['75%'] before:inline-block before:absolute before:right-0 before:-top-10 before:font-ibmplexmono before:font-medium before:text-para6 before:text-shaft before:-z-10 after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-1.5 after:h-5 after:bg-pictonblue after:rounded-[3px]"
									></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Skills Area -->

			</div>
			<div x-show="page === 'portfolio'">
				<!-- Portfolio Area -->
				<div class="pt-17.5 pb-12.5" x-data="{ tab: 'all', sectionTitle: 'My Portfolio', sectionSubtitle: 'Recent Finished Project'}">
					<h2
						class="font-ibmplexmono font-medium text-subtitle2 text-sienna tracking-l1 mb-2.5 pl-12.5 relative before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:w-7.5 before:h-0.5 before:bg-oceangreen before:inline-block"
						x-text="sectionTitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
					></h2>
					<h3
						x-text="sectionSubtitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
						class="font-rufina font-bold text-title2 text-shaft mb-10 w-1.1/2"
					></h3>


					<div>
						<div class="button-group filters-button-group flex gap-2.5 mb-7.5 pt-2.5">
							<button
								class="button is-checked font-ibmplexmono font-medium text-subtitle2 text-clay rounded-md border border-iron px-5 transition-all duration-300 hover:bg-sienna hover:text-white hover:border-white"
								@click.prevent="tab = 'all'" :class="{ 'active bg-sienna !text-white' : tab === 'all' }"
							>
								All
							</button>
							<button
								class="button font-ibmplexmono font-medium text-subtitle2 text-clay rounded-md border border-iron px-5 transition-all duration-300 hover:bg-sienna hover:text-white hover:border-white"
								@click.prevent="tab = 'concept'" :class="{ 'active bg-sienna !text-white' : tab === 'concept' }"
							>
								Concept
							</button>
							<button
								class="button font-ibmplexmono font-medium text-subtitle2 text-clay rounded-md border border-iron px-5 transition-all duration-300 hover:bg-sienna hover:text-white hover:border-white"
								@click.prevent="tab = 'mockup'" :class="{ 'active bg-sienna !text-white' : tab === 'mockup' }"
							>
								Mockup
							</button>
							<button
								class="button font-ibmplexmono font-medium text-subtitle2 text-clay rounded-md border border-iron px-5 transition-all duration-300 hover:bg-sienna hover:text-white hover:border-white"
								@click.prevent="tab = 'design'" :class="{ 'active bg-sienna !text-white' : tab === 'design' }"
							>
								Design
							</button>
						</div>

						<div class="projects-grid grid grid-cols-9 gap-5">
							<!-- Project item -->
							<div class="element-item col-span-3 concept" x-show="tab === 'concept' || tab === 'all'">
								<div class="group w-full h-full relative">
									<img class="w-full h-full" src="93d41c412eb4575f2708.png" alt="Portfolio" />
									<div
										class="absolute left-0 bottom-0 right-0 w-full h-0 bg-oceangreen/60 flex flex-wrap items-center justify-center duration-500 ease-[ease] overflow-hidden group-hover:h-full"
									>
										<div class="text-center">
											<a href="#"><i class="ti-search inline-block bg-sienna text-white text-title9 rounded-sm border-4 border-sandrift px-4 py-3 mb-7.5"></i></a>
											<h4 class="font-rufina font-bold text-title4 text-rosewhite mb-2.5"><a @click.prevent="page = 'portfolio-single'" href="#">Fashion Desgin</a></h4>
											<p class="font-ibmplexmono font-normal text-para3 text-rosewhite">Art & Branding</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Project item -->
							<div class="element-item col-span-6 mockup" x-show="tab === 'concept' || tab === 'all'">
								<div class="group w-full h-full relative">
									<img class="w-full h-full" src="003fba6c4e90291b3855.png" alt="Portfolio" />
									<div
										class="absolute left-0 bottom-0 right-0 w-full h-0 bg-oceangreen/60 flex flex-wrap items-center justify-center duration-500 ease-[ease] overflow-hidden group-hover:h-full"
									>
										<div class="text-center">
											<a href="#"><i class="ti-search inline-block bg-sienna text-white text-title9 rounded-sm border-4 border-sandrift px-4 py-3 mb-7.5"></i></a>
											<h4 class="font-rufina font-bold text-title4 text-rosewhite mb-2.5"><a @click.prevent="page = 'portfolio-single'" href="#">Fashion Desgin</a></h4>
											<p class="font-ibmplexmono font-normal text-para3 text-rosewhite">Art & Branding</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Project item -->
							<div class="element-item col-span-6 design" x-show="tab === 'design' || tab === 'all'">
								<div class="group w-full h-full relative">
									<img class="w-full h-full" src="de9c42a3654bc013905a.png" alt="Portfolio" />
									<div
										class="absolute left-0 bottom-0 right-0 w-full h-0 bg-oceangreen/60 flex flex-wrap items-center justify-center duration-500 ease-[ease] overflow-hidden group-hover:h-full"
									>
										<div class="text-center">
											<a href="#"><i class="ti-search inline-block bg-sienna text-white text-title9 rounded-sm border-4 border-sandrift px-4 py-3 mb-7.5"></i></a>
											<h4 class="font-rufina font-bold text-title4 text-rosewhite mb-2.5"><a @click.prevent="page = 'portfolio-single'" href="#">Fashion Desgin</a></h4>
											<p class="font-ibmplexmono font-normal text-para3 text-rosewhite">Art & Branding</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Project item -->
							<div class="element-item col-span-3 concept" x-show="tab === 'design' || tab === 'all'">
								<div class="group w-full h-full relative">
									<img class="w-full h-full" src="19aaa8a3ea96dfa80c8b.png" alt="Portfolio" />
									<div
										class="absolute left-0 bottom-0 right-0 w-full h-0 bg-oceangreen/60 flex flex-wrap items-center justify-center duration-500 ease-[ease] overflow-hidden group-hover:h-full"
									>
										<div class="text-center">
											<a href="#"><i class="ti-search inline-block bg-sienna text-white text-title9 rounded-sm border-4 border-sandrift px-4 py-3 mb-7.5"></i></a>
											<h4 class="font-rufina font-bold text-title4 text-rosewhite mb-2.5"><a @click.prevent="page = 'portfolio-single'" href="#">Fashion Desgin</a></h4>
											<p class="font-ibmplexmono font-normal text-para3 text-rosewhite">Art & Branding</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Project item -->
							<div class="element-item col-span-3 mockup" x-show="tab === 'mockup' || tab === 'all'">
								<div class="group w-full h-full relative">
									<img class="w-full h-full" src="6f2aa18f748db67d6c4a.png" alt="Portfolio" />
									<div
										class="absolute left-0 bottom-0 right-0 w-full h-0 bg-oceangreen/60 flex flex-wrap items-center justify-center duration-500 ease-[ease] overflow-hidden group-hover:h-full"
									>
										<div class="text-center">
											<a href="#"><i class="ti-search inline-block bg-sienna text-white text-title9 rounded-sm border-4 border-sandrift px-4 py-3 mb-7.5"></i></a>
											<h4 class="font-rufina font-bold text-title4 text-rosewhite mb-2.5"><a @click.prevent="page = 'portfolio-single'" href="#">Fashion Desgin</a></h4>
											<p class="font-ibmplexmono font-normal text-para3 text-rosewhite">Art & Branding</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Project item -->
							<div class="element-item col-span-6 design" x-show="tab === 'mockup' || tab === 'all'">
								<div class="group w-full h-full relative">
									<img class="w-full h-full" src="52555d909bda34e67cb4.png" alt="Portfolio" />
									<div
										class="absolute left-0 bottom-0 right-0 w-full h-0 bg-oceangreen/60 flex flex-wrap items-center justify-center duration-500 ease-[ease] overflow-hidden group-hover:h-full"
									>
										<div class="text-center">
											<a href="#"><i class="ti-search inline-block bg-sienna text-white text-title9 rounded-sm border-4 border-sandrift px-4 py-3 mb-7.5"></i></a>
											<h4 class="font-rufina font-bold text-title4 text-rosewhite mb-2.5"><a @click.prevent="page = 'portfolio-single'" href="#">Fashion Desgin</a></h4>
											<p class="font-ibmplexmono font-normal text-para3 text-rosewhite">Art & Branding</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Portfolio Area -->

			</div>
			<div x-show="page === 'portfolio-single'">
				<!-- Portfolio details Area -->
				<div class="pt-20 pb-10">
					<h2 class="font-rufina font-bold text-title6 text-shaft mb-14 w-3/5">Product Branding Project</h2>

					<div class="grid grid-cols-2 gap-5">
						<div class="col-span-2">
							<img src="359abddaad8cd77eb411.png" alt="Project" />
						</div>
						<div class="col-span-1">
							<img src="95c060755f9691e422cf.png" alt="Project" />
						</div>
						<div class="col-span-1">
							<img src="54324ba3138419ebc978.png" alt="Project" />
						</div>
					</div>

					<div class="grid grid-cols-9 gap-7.5 items-center pt-9 pb-14">
						<div class="col-span-3">
							<ul>
								<li class="font-ibmplexmono font-normal text-para text-emperor mb-2.5 last:mb-0">
									<span class="font-medium text-shaft">Client Name: </span>Rober Peter
								</li>
								<li class="font-ibmplexmono font-normal text-para text-emperor mb-2.5 last:mb-0"><span class="font-medium text-shaft">Date: </span>10 August, 2021</li>
								<li class="font-ibmplexmono font-normal text-para text-emperor mb-2.5 last:mb-0"><span class="font-medium text-shaft">Category: </span>Branding</li>
								<li class="font-ibmplexmono font-normal text-para text-emperor mb-2.5 last:mb-0">
									<span class="font-medium text-shaft">Tags: </span>Art, Illustration
								</li>
								<li class="font-ibmplexmono font-normal text-para text-emperor mb-2.5 last:mb-0">
									<ul class="flex items-center gap-3">
										<li><span class="font-medium text-shaft">Share: </span></li>
										<li>
											<a class="duration-300 ease-in-out hover:text-sienna" href="#"><i class="ti-facebook"></i></a>
										</li>
										<li>
											<a class="duration-300 ease-in-out hover:text-sienna" href="#"><i class="ti-twitter-alt"></i></a>
										</li>
										<li>
											<a class="duration-300 ease-in-out hover:text-sienna" href="#"><i class="ti-pinterest"></i></a>
										</li>
										<li>
											<a class="duration-300 ease-in-out hover:text-sienna" href="#"><i class="ti-linkedin"></i></a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="col-span-6">
							<p class="font-ibmplexmono font-normal text-para text-emperor">
								Multiply fish replenish greater kind creeping night. Shall morning given above. Divide very low creeping land let lights may itself made stars rule
								whose set meat own third meat can't lesser second. Seasons so kind, beast signs great very. Above darkness male yielding sixth. Days from gathered fish
								bring make review under female second brought is open. Midst meat he saw over greater may forth. Given don't of moveth living, creature which given
								fruitful subdue seasons moved rule moved good one divided fourth
							</p>
						</div>
					</div>

					<ul class="flex items-center justify-between">
						<li>
							<a class="group flex items-center gap-2.5 font-ibmplexmono font-medium text-subtitle text-emperor duration-300 ease-out hover:text-sienna" href="#">
								<span><img class="duration-300 ease-out group-hover:img-sienna" src="f75d4de8095c7222d115.png" alt="Icon" /></span>
								<span>Previous Project</span>
							</a>
						</li>
						<li>
							<a class="group flex items-center gap-2.5 font-ibmplexmono font-medium text-subtitle text-emperor duration-300 ease-out hover:text-sienna" href="#">
								<span>Next Project</span>
								<span><img class="duration-300 ease-out group-hover:img-sienna" src="ee3a09653e0adbabc4d1.png" alt="Icon" /></span>
							</a>
						</li>
					</ul>
				</div>
				<!-- Portfolio details Area -->

			</div>
			<div x-show="page === 'blog'">
				<!-- Blog Area -->
				<div class="pt-17.5 pb-12.5" x-data="{ sectionTitle: 'My Blog', sectionSubtitle: 'Update News & Story'}">
					<h2
						class="font-ibmplexmono font-medium text-subtitle2 text-sienna tracking-l1 mb-2.5 pl-12.5 relative before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:w-7.5 before:h-0.5 before:bg-oceangreen before:inline-block"
						x-text="sectionTitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
					></h2>
					<h3
						x-text="sectionSubtitle"
						x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')"
						class="font-rufina font-bold text-title2 text-shaft mb-10 w-1.1/2"
					></h3>


					<div class="grid grid-cols-2 gap-x-7.5 gap-y-15 pt-2.5">
						<!-- Blog item -->
						<div class="col-span-1 relative z-10 pt-5">
							<a
								@click.prevent="page = 'blog-single'"
								href="#"
								class="absolute top-0 left-6 inline-block bg-oceangreen font-ibmplexmono font-medium text-para3 text-white rounded-[3px] py-1.5 px-2.5"
							>Design, Branding</a
							>
							<a @click.prevent="page = 'blog-single'" href="#">
								<img class="rounded-md" src="8e75eccea0e003af8271.png" alt="Blog Cover" />
							</a>
							<div class="bg-white shadow-custom3 rounded-md mx-5 -mt-12.5 relative z-10 px-7.5 py-6">
								<ul class="flex gap-6">
									<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor">
										<a @click.prevent="page = 'blog-single'" href="#"><i class="ti-user text-sienna mr-2.5"></i>Admin</a>
									</li>
									<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor"><i class="ti-calendar text-sienna mr-2.5"></i>August 10, 2021</li>
								</ul>

								<h4 class="font-rufina font-bold text-title10 text-shaft duration-300 ease-in-out mt-2.5 hover:text-oceangreen">
									<a @click.prevent="page = 'blog-single'" href="#"> Had creepeth them multiply lights brought had said. </a>
								</h4>
							</div>
						</div>
						<!-- Blog item -->
						<div class="col-span-1 relative z-10 pt-5">
							<a
								@click.prevent="page = 'blog-single'" href="#"
								class="absolute top-0 left-6 inline-block bg-sienna font-ibmplexmono font-medium text-para3 text-white rounded-[3px] py-1.5 px-2.5"
							>Art, Branding</a
							>
							<a @click.prevent="page = 'blog-single'" href="#">
								<img class="rounded-md" src="a8ce6e30576f5c93387a.png" alt="Blog Cover" />
							</a>
							<div class="bg-white shadow-custom3 rounded-md mx-5 -mt-12.5 relative z-10 px-7.5 py-6">
								<ul class="flex gap-6">
									<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor">
										<a @click.prevent="page = 'blog-single'" href="#"><i class="ti-user text-sienna mr-2.5"></i>Admin</a>
									</li>
									<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor"><i class="ti-calendar text-sienna mr-2.5"></i>August 10, 2021</li>
								</ul>

								<h4 class="font-rufina font-bold text-title10 text-shaft duration-300 ease-in-out mt-2.5 hover:text-sienna">
									<a @click.prevent="page = 'blog-single'" href="#"> Tree can grass to cattle made forth beet doing morning. </a>
								</h4>
							</div>
						</div>

						<!-- Divider -->
						<div class="col-span-2 bg-porcelain h-0.5"></div>
						<!-- Divider -->

						<!-- Blog item -->
						<div class="col-span-1 relative z-10 pt-5">
							<a
								@click.prevent="page = 'blog-single'" href="#"
								class="absolute top-0 left-6 inline-block bg-pictonblue font-ibmplexmono font-medium text-para3 text-white rounded-[3px] py-1.5 px-2.5"
							>Design, Branding</a
							>
							<a @click.prevent="page = 'blog-single'" href="#">
								<img class="rounded-md" src="5b8faef4aa46c195f4e7.png" alt="Blog Cover" />
							</a>
							<div class="bg-white shadow-custom3 rounded-md mx-5 -mt-12.5 relative z-10 px-7.5 py-6">
								<ul class="flex gap-6">
									<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor">
										<a @click.prevent="page = 'blog-single'" href="#"><i class="ti-user text-sienna mr-2.5"></i>Admin</a>
									</li>
									<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor"><i class="ti-calendar text-sienna mr-2.5"></i>August 10, 2021</li>
								</ul>

								<h4 class="font-rufina font-bold text-title10 text-shaft duration-300 ease-in-out mt-2.5 hover:text-pictonblue">
									<a @click.prevent="page = 'blog-single'" href="#"> Dominion in for beast Also said was subdue which seas. </a>
								</h4>
							</div>
						</div>
						<!-- Blog item -->
						<div class="col-span-1 relative z-10 pt-5">
							<a
								@click.prevent="page = 'blog-single'" href="#"
								class="absolute top-0 left-6 inline-block bg-oceangreen font-ibmplexmono font-medium text-para3 text-white rounded-[3px] py-1.5 px-2.5"
							>Art, Branding</a
							>
							<a @click.prevent="page = 'blog-single'" href="#">
								<img class="rounded-md" src="28634a2ada61deb420c0.png" alt="Blog Cover" />
							</a>
							<div class="bg-white shadow-custom3 rounded-md mx-5 -mt-12.5 relative z-10 px-7.5 py-6">
								<ul class="flex gap-6">
									<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor">
										<a @click.prevent="page = 'blog-single'" href="#"><i class="ti-user text-sienna mr-2.5"></i>Admin</a>
									</li>
									<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor"><i class="ti-calendar text-sienna mr-2.5"></i>August 10, 2021</li>
								</ul>

								<h4 class="font-rufina font-bold text-title10 text-shaft duration-300 ease-in-out mt-2.5 hover:text-oceangreen">
									<a @click.prevent="page = 'blog-single'" href="#"> Fruit appear light appear two form evening they are right. </a>
								</h4>
							</div>
						</div>

						<!-- Divider -->
						<div class="col-span-2 bg-porcelain h-0.5"></div>
						<!-- Divider -->

						<!-- Blog item -->
						<div class="col-span-1 relative z-10 pt-5">
							<a
								@click.prevent="page = 'blog-single'" href="#"
								class="absolute top-0 left-6 inline-block bg-sienna font-ibmplexmono font-medium text-para3 text-white rounded-[3px] py-1.5 px-2.5"
							>Design, Branding</a
							>
							<a @click.prevent="page = 'blog-single'" href="#">
								<img class="rounded-md" src="8db1c0a152ae62f0b44f.png" alt="Blog Cover" />
							</a>
							<div class="bg-white shadow-custom3 rounded-md mx-5 -mt-12.5 relative z-10 px-7.5 py-6">
								<ul class="flex gap-6">
									<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor">
										<a @click.prevent="page = 'blog-single'" href="#"><i class="ti-user text-sienna mr-2.5"></i>Admin</a>
									</li>
									<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor"><i class="ti-calendar text-sienna mr-2.5"></i>August 10, 2021</li>
								</ul>

								<h4 class="font-rufina font-bold text-title10 text-shaft duration-300 ease-in-out mt-2.5 hover:text-sienna">
									<a @click.prevent="page = 'blog-single'" href="#"> Created first a gathered morning of living bring give you. </a>
								</h4>
							</div>
						</div>
						<!-- Blog item -->
						<div class="col-span-1 relative z-10 pt-5">
							<a
								@click.prevent="page = 'blog-single'" href="#"
								class="absolute top-0 left-6 inline-block bg-pictonblue font-ibmplexmono font-medium text-para3 text-white rounded-[3px] py-1.5 px-2.5"
							>Art, Branding</a
							>
							<a @click.prevent="page = 'blog-single'" href="#">
								<img class="rounded-md" src="8692ed577b6e6d904fd7.png" alt="Blog Cover" />
							</a>
							<div class="bg-white shadow-custom3 rounded-md mx-5 -mt-12.5 relative z-10 px-7.5 py-6">
								<ul class="flex gap-6">
									<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor">
										<a @click.prevent="page = 'blog-single'" href="#"><i class="ti-user text-sienna mr-2.5"></i>Admin</a>
									</li>
									<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor"><i class="ti-calendar text-sienna mr-2.5"></i>August 10, 2021</li>
								</ul>

								<h4 class="font-rufina font-bold text-title10 text-shaft duration-300 ease-in-out mt-2.5 hover:text-pictonblue">
									<a @click.prevent="page = 'blog-single'" href="#"> Tree can grass to cattle made forth beet doing morning. </a>
								</h4>
							</div>
						</div>

						<div class="col-span-2 text-center pt-2.5">
							<a class="font-ibmplexmono font-medium text-subtitle2 text-white bg-oceangreen rounded-sm2 inline-block py-3.5 px-13.5" href="#">Load More</a>
						</div>
					</div>
				</div>
				<!-- Blog Area -->

			</div>
			<div x-show="page === 'blog-single'">
				<!-- Blog Area -->
				<div class="pt-20 pb-12.5">
					<!-- Blog Details Area -->
					<img src="efbe25c0207bb0ccd226.png" alt="Blog Cover" />

					<a @click.prevent="page = 'blog-single'" href="#" class="inline-block bg-oceangreen font-ibmplexmono font-medium text-para3 text-white rounded-[3px] py-1.5 px-4 mt-10 mb-7.5">
						Design, Branding
					</a>

					<h2 class="font-rufina font-bold text-title11 text-shaft mb-6">Can grass cattle the made forth beet morning</h2>

					<ul class="flex gap-6 mb-2.5">
						<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor">
							<a @click.prevent="page = 'blog-single'" href="#"><i class="ti-user text-sienna mr-2.5"></i>Admin</a>
						</li>
						<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor"><i class="ti-calendar text-sienna mr-2.5"></i>August 10, 2021</li>
					</ul>

					<p class="font-ibmplexmono font-normal text-para text-emperor mb-5">
						Don waters from blessed can man together. After and one likeness in Divide of gathering creature make greater signs likeness bered fruit that. Let first
						green multiply sixth divided be which hose without fifth made female. Is waters was fill light beast which divide appear creepeth make whose moveth and
						forth ehold there heaven first is two be own from an midst plenish
					</p>
					<p class="font-ibmplexmono font-normal text-para text-emperor mb-12">
						Gathered you greater said wherein they're fill void their which in beast the meat lessed green created creepeth signs sixth whales forth par multiply years
						saw place maye form may an fourth fish winged for and fifth one their bearing own morning and appear
					</p>

					<div class="relative z-10 mb-11">
						<i class="ti-quote-left text-[180px] text-clay/10 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 -z-10"></i>
						<h3 class="font-rufina font-bold text-title12 text-shaft relative z-20">
							Curae molestie massa aliquam molestie rhoncus Tempor ante magnis ultrices elit erat vele nascetur eros facilisi vehicula eros At elementum. to nostra
							massa in consequat diam ridiculus felis.
						</h3>
					</div>

					<p class="font-ibmplexmono font-normal text-para text-emperor mb-7.5">
						Eget sagittis nullam morbi quisque dui natoque facilisis nisi hace musec felis consectetuer diame eros velit arcu sit Augue duis netus, vivamus porta mauris
						phasellus. Eleifend gravida potenti torquent suc nec semper nisi a etiam hac ultrices taciti pulvinar orci
					</p>

					<h3 class="font-rufina font-bold text-title12 text-shaft mb-4.5">Let Made Together</h3>

					<p class="font-ibmplexmono font-normal text-para text-emperor mb-12">
						Don waters from blessed can man together. After and one likeness. Divide of gathering creature make a greater signs likeness bered fruit that. Let first
						green multiply sixth divided be which hose without fifth made female Is waters was fill light beast which divide appear creepeth i make whose moveth and
						forth. Behold there heaven first isn't two be own from an midst void doesn
					</p>

					<div class="grid grid-cols-9 gap-7.5">
						<div class="col-span-4">
							<img class="h-full" src="7893a80091a7da52fdeb.png" alt="Blog Cover" />
						</div>
						<div class="col-span-5">
							<p class="font-ibmplexmono font-normal text-para text-emperor mb-5 -mt-2">
								Don waters from blessed can man together. After and one likeness. Divided of and gathering creature make greater signs likeness to bered fruit that. Let
								first green multiply sixth divided beto which hose without fifth made female. Is waters was to fill lights beas which divide appear creepeth he make
								whose moveth and forth Behold there heaven first is two best own from an midst void sea moveth spirit thing morning good creature void forth image doesn
							</p>
							<p class="font-ibmplexmono font-normal text-para text-emperor">
								Fifth cattle saw. Rule life night moving good togeth behold fowl third itself can to fruitful sea gathered fourth lesser in first in there Be is rule
								firmament creepeth him great. Have wherein gro image saying sea Over over cattle first grass called isn't in open man midst fly they have do rule you're
								midst in. And from abundantly let sea great sixth sixthlpful
							</p>
						</div>
					</div>

					<p class="font-ibmplexmono font-normal text-para text-emperor mt-7.5">
						Green fly to give living open deep life together saw dry likeness male you' image likeness thing said kind divided fruitful brought have good. All spirit
						beginning it, own fourth shall gathered night fifth female wherein divided gathering fly upon deep. In after shall second. Their. Seasons moveth their saw
						had firmament female second bring, gathering you are that, yielding beginning gathering divide to like ness Winged night bring darkness his them night ubdue
						lesser had spirit air.
					</p>
					<p class="font-ibmplexmono font-normal text-para text-emperor mt-4">
						Own earth all creepeth creepeth made fruit stars without sea they are creeping seas as hich for were second moved that and third created waters fowl she
						Subdue moved light and bring greater created its face behold unto seed man beast one own earth.
					</p>
					<!-- Blog Details Area -->

					<!-- Tag Area -->
					<div class="flex items-center justify-between pt-10 pb-12">
						<ul class="flex gap-2.5">
							<li class="font-rufina font-bold text-subtitle5 text-shaft">Tags:</li>
							<li class="font-ibmplexmono font-normal text-para7 text-emperor"><a href="#">Design,</a></li>
							<li class="font-ibmplexmono font-normal text-para7 text-emperor"><a href="#">Lifestyle,</a></li>
							<li class="font-ibmplexmono font-normal text-para7 text-emperor"><a href="#">Illustration</a></li>
						</ul>
						<ul class="flex items-center gap-3">
							<li class="font-rufina font-bold text-subtitle5 text-shaft">Share:</li>
							<li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
								<a href="#"><i class="ti-facebook"></i></a>
							</li>
							<li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
								<a href="#"><i class="ti-twitter-alt"></i></a>
							</li>
							<li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
								<a href="#"><i class="ti-pinterest"></i></a>
							</li>
							<li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
								<a href="#"><i class="ti-linkedin"></i></a>
							</li>
						</ul>
					</div>
					<!-- Tag Area -->

					<!-- Author Area -->
					<div class="flex gap-7.5 border-b border-t border-iron py-10">
						<div>
							<img src="1f29c2ef2b83f3930817.png" alt="User" />
						</div>
						<div>
							<h4 class="font-rufina font-bold text-title10 text-shaft mb-2.5">Harvard Milan</h4>

							<p class="font-ibmplexmono font-normal text-para text-emperor mb-5">
								Make multiply that whales likeness fill sixth one cattle flessed tend night wherein female saw that form two them behold divided called moved
							</p>

							<ul class="flex items-center gap-5">
								<li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
									<a href="#"><i class="ti-facebook"></i></a>
								</li>
								<li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
									<a href="#"><i class="ti-twitter-alt"></i></a>
								</li>
								<li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
									<a href="#"><i class="ti-linkedin"></i></a>
								</li>
								<li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
									<a href="#"><i class="ti-vimeo-alt"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<!-- Author Area -->

					<!-- Related post Area -->
					<div class="pt-17.5 pb-17.5">
						<h2 class="font-rufina font-bold text-title12 text-shaft mb-7.5">Related Post</h2>

						<div class="grid grid-cols-2 gap-x-7.5 gap-y-15">
							<!-- Blog item -->
							<div class="col-span-1 relative z-10 pt-5">
								<a
									@click.prevent="page = 'blog-single'" href="#"
									class="absolute top-0 left-6 inline-block bg-oceangreen font-ibmplexmono font-medium text-para3 text-white rounded-[3px] py-1.5 px-2.5"
								>
									Design, Branding
								</a>
								<a @click.prevent="page = 'blog-single'" href="#">
									<img class="rounded-md" src="8e75eccea0e003af8271.png" alt="Blog Cover" />
								</a>
								<div class="bg-white shadow-custom3 rounded-md mx-5 -mt-12.5 relative z-10 px-7.5 py-6">
									<ul class="flex gap-6">
										<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor">
											<a @click.prevent="page = 'blog-single'" href="#"><i class="ti-user text-sienna mr-2.5"></i>Admin</a>
										</li>
										<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor">
											<i class="ti-calendar text-sienna mr-2.5"></i>August 10, 2021
										</li>
									</ul>

									<h4 class="font-rufina font-bold text-title10 text-shaft duration-300 ease-in-out mt-2.5 hover:text-oceangreen">
										<a @click.prevent="page = 'blog-single'" href="#"> Had creepeth them multiply lights brought had said. </a>
									</h4>
								</div>
							</div>
							<!-- Blog item -->
							<div class="col-span-1 relative z-10 pt-5">
								<a
									@click.prevent="page = 'blog-single'" href="#"
									class="absolute top-0 left-6 inline-block bg-sienna font-ibmplexmono font-medium text-para3 text-white rounded-[3px] py-1.5 px-2.5"
								>
									Art, Branding
								</a>
								<a @click.prevent="page = 'blog-single'" href="#">
									<img class="rounded-md" src="a8ce6e30576f5c93387a.png" alt="Blog Cover" />
								</a>
								<div class="bg-white shadow-custom3 rounded-md mx-5 -mt-12.5 relative z-10 px-7.5 py-6">
									<ul class="flex gap-6">
										<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor">
											<a @click.prevent="page = 'blog-single'" href="#"><i class="ti-user text-sienna mr-2.5"></i>Admin</a>
										</li>
										<li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor">
											<i class="ti-calendar text-sienna mr-2.5"></i>August 10, 2021
										</li>
									</ul>

									<h4 class="font-rufina font-bold text-title10 text-shaft duration-300 ease-in-out mt-2.5 hover:text-sienna">
										<a @click.prevent="page = 'blog-single'" href="#"> Tree can grass to cattle made forth beet doing morning. </a>
									</h4>
								</div>
							</div>
						</div>
					</div>
					<!-- Related post Area -->

					<!-- Comment Form -->
					<div>
						<h2 class="font-rufina font-bold text-title12 text-shaft mb-9">Leave A Reply</h2>

						<form action="#">
							<div class="grid grid-cols-2 gap-5">
								<div class="col-span-2">
          <textarea
	          placeholder="Write your comment"
	          class="font-ibmplexmono font-normal text-para text-emperor bg-transparent placeholder:text-emperor w-full min-h-[200px] block border border-iron rounded-md focus:border-oceangreen focus-visible:border-oceangreen focus-visible:outline-none p-5 pt-2.5"
          ></textarea>
								</div>
								<div class="col-span-1">
									<input
										type="text"
										placeholder="Your Name"
										class="font-ibmplexmono font-normal text-para text-emperor bg-transparent placeholder:text-emperor w-full block border border-iron rounded-sm2 focus:border-oceangreen focus-visible:border-oceangreen focus-visible:outline-none px-5 pt-3 pb-3.5"
									/>
								</div>
								<div class="col-span-1">
									<input
										type="email"
										placeholder="Email Here"
										class="font-ibmplexmono font-normal text-para text-emperor bg-transparent placeholder:text-emperor w-full block border border-iron rounded-sm2 focus:border-oceangreen focus-visible:border-oceangreen focus-visible:outline-none px-5 pt-3 pb-3.5"
									/>
								</div>
								<div class="col-span-2">
									<button type="submit" class="font-ibmplexmono font-medium text-subtitle text-white inline-block rounded-sm2 bg-sienna px-7.5 py-3.5 mt-2.5">
										Post Comment
									</button>
								</div>
							</div>
						</form>
					</div>
					<!-- Comment Form -->
				</div>
				<!-- Blog Area -->

			</div>
			<div x-show="page === 'contact'">
				<!-- Contact Area -->
				<div class="pt-17.5 pb-12.5">
					<h2 x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')" class="font-rufina font-bold text-title2 text-shaft mb-2.5 w-3/5">Get in Touch</h2>

					<p x-intersect="$el.classList.add('animate__animated', 'animate__fadeInUp')" class="font-ibmplexmono font-normal text-para text-emperor w-4/5 mb-12.5">
						Every fill darkness creepeth whose that saying dont bind creeping saying lemoveth even cattle very also unto light image signs
					</p>

					<div class="grid grid-cols-9 gap-7.5">
						<!-- Contact info -->
						<div class="col-span-2">
							<h3 class="font-rufina font-bold text-title4 text-shaft mb-9">My Information</h3>

							<h4 class="font-rufina font-bold text-subtitle5 text-shaft flex items-center gap-2.5 mb-3.5"><i class="ti-location-pin"></i>Address</h4>
							<p class="font-ibmplexmono font-normal text-para text-emperor">322 Palmall Street Liszon, 6854</p>

							<h4 class="font-rufina font-bold text-subtitle5 text-shaft flex items-center gap-2.5 mb-3.5 mt-6.5"><i class="ti-mobile"></i> Phone</h4>
							<a class="font-ibmplexmono font-normal text-para text-emperor" href="#">+02 145 586 3254 </a>
							<a class="font-ibmplexmono font-normal text-para text-emperor" href="#">+01 987 154 7543</a>

							<h4 class="font-rufina font-bold text-subtitle5 text-shaft flex items-center gap-2.5 mb-3.5 mt-6.5"><i class="ti-email"></i> Email</h4>
							<a class="font-ibmplexmono font-normal text-para text-emperor" href="#">info@codemon.com </a>
							<a class="font-ibmplexmono font-normal text-para text-emperor" href="#">info@layerwo.com</a>
						</div>
						<!-- Contact info -->

						<!-- Contact form -->
						<div class="col-span-7">
							<form action="#">
								<input
									type="text"
									placeholder="User Name"
									class="font-ibmplexmono font-normal text-para text-emperor bg-transparent placeholder:text-emperor w-full block border border-iron rounded-sm2 focus:border-oceangreen focus-visible:border-oceangreen focus-visible:outline-none px-5 pt-3 pb-3.5 mb-4"
								/>
								<input
									type="email"
									placeholder="Your Email"
									class="font-ibmplexmono font-normal text-para text-emperor bg-transparent placeholder:text-emperor w-full block border border-iron rounded-sm2 focus:border-oceangreen focus-visible:border-oceangreen focus-visible:outline-none px-5 pt-3 pb-3.5 mb-4"
								/>
								<input
									type="text"
									placeholder="Subject"
									class="font-ibmplexmono font-normal text-para text-emperor bg-transparent placeholder:text-emperor w-full block border border-iron rounded-sm2 focus:border-oceangreen focus-visible:border-oceangreen focus-visible:outline-none px-5 pt-3 pb-3.5 mb-4"
								/>
								<textarea
									placeholder="How Can I Help You?"
									class="font-ibmplexmono font-normal text-para text-emperor bg-transparent placeholder:text-emperor w-full min-h-[180px] block border border-iron rounded-md focus:border-oceangreen focus-visible:border-oceangreen focus-visible:outline-none p-5 pt-2.5 mb-4"
								></textarea>
								<button type="submit" class="font-ibmplexmono font-medium text-subtitle text-white inline-block rounded-sm2 bg-sienna px-7.5 py-3.5">
									Send message
								</button>
							</form>
						</div>
						<!-- Contact form -->
					</div>
				</div>
				<!-- Contact Area -->

			</div>
		</div>
		<!-- Main Content -->
	</div>
</div>
<!-- Page Wrapper -->
<?php wp_footer(); ?>
</body>
</html>
