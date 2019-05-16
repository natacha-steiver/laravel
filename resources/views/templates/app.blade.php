{{--
  ./resources/templates/default.blade.php
  Template par défaut
 --}}
 <!DOCTYPE HTML>
 <html>
 @include('templates.partials.head')

 <body>

 <a name="ancre"></a>

 <!-- CACHE -->
 <div class="cache"></div>

 <!-- HEADER -->

 <div id="wrapper-header">
 	<div id="main-header" class="object">
 		<div class="logo"><img src="img/logo-burst.png" alt="logo platz" height="38" width="90"></div>
         <div id="main_tip_search">
 			<form>
 				<input type="text" name="search" id="tip_search_input" list="search" autocomplete=off required>
 			</form>
 		</div>
         <div id="stripes"></div>
     </div>
 </div>

 <!-- NAVBAR -->


 @include('categories.liste')
     </div>
     @section('contenu')
         @show
 <!-- FILTER -->

 	<div id="main-container-menu" class="object">
     	<div class="container-menu">

             <div id="main-cross">
             	<div id="cross-menu"></div>
             </div>

             <div id="main-small-logo">
             	<div class="small-logo"></div>
             </div>

             <div id="main-premium-ressource">
                 <div class="premium-ressource"><a href="#">Premium resources</a></div>
             </div>

             <div id="main-themes">
                 <div class="themes"><a href="#">Latest themes</a></div>
             </div>

             <div id="main-psd">
                 <div class="psd"><a href="#">PSD goodies</a></div>
             </div>

             <div id="main-ai">
                 <div class="ai"><a href="#">Illustrator freebies</a></div>
             </div>

             <div id="main-font">
                 <div class="font"><a href="#">Free fonts</a></div>
             </div>

             <div id="main-photo">
                 <div class="photo"><a href="#">Free stock photos</a></div>
             </div>

         </div>
     </div>


 <!-- PORTFOLIO -->

 	<div id="wrapper-container">

 		<div class="container object">

 			<div id="main-container-image">

 					<section class="work">

 						<figure class="white">
 							<a href="details.html">
 								<img src="img/psd-4.jpg" alt="" />
 								<dl>
 									<dt>Wordpress theme</dt>
 									<dd>Symphony is a responsive one page website template designed with sketches and coded with html5 and php. Freebie released by Lacoste Xavier.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">Wordpress theme</div>
 							</div>
                         </figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/font-1.jpg" alt="" />
 								<dl>
 									<dt>Free font</dt>
 									<dd>Bavro is a minimal free font best suitable for posters and headlines. Designed and released by Marcelo Melo.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">Free font</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/psd-1.jpg" alt="" />
 								<dl>
 									<dt>PSD Goodies</dt>
 									<dd>A set of high resolution iPhone 6 and Nexus 5 mockups created with smart objects. Free PSD released by Ghani Pradita.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">PSD Goodies</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/psd-2.jpg" alt="" />
 								<dl>
 									<dt>PSD Goodies</dt>
 									<dd>A set of 4 free photorealistic Nexus 5 mockups providing smart objects. Free PSD released by Craftwork.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">PSD Goodies</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/ai-1.jpg" alt="" />
 								<dl>
 									<dt>Illustrator freebies</dt>
 									<dd>A set of 6 outline beer icons created with Adobe Illustrator. Free Ai designed and released by Justas Galaburda.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-ai.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">Illustrator Freebies</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/theme-2.jpg" alt="" />
 								<dl>
 									<dt>Html theme</dt>
 									<dd>Symphony is a responsive one page website template designed with sketches and coded with html5 and php. Freebie released by Lacoste Xavier.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-themes.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">Html theme</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/psd-3.jpg" alt="" />
 								<dl>
 									<dt>PSD goodies</dt>
 									<dd>A set of 9 high-quality Apple Watch mockups created with Photoshop smart objects. Free PSD released by Samuel Medvedowsky.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">PSD Goodies</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/font-2.jpg" alt="" />
 								<dl>
 									<dt>Free font</dt>
 									<dd>Beyno is a free uppercase font with a futuristic feel and look. Designed and released by Fabian Korn.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">Free font</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/font-3.jpg" alt="" />
 								<dl>
 									<dt>Wordpress theme</dt>
 									<dd>Symphony is a responsive one page website template designed with sketches and coded with html5 and php. Freebie released by Lacoste Xavier.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">Wordpress theme</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/ai-2.jpg" alt="" />
 								<dl>
 									<dt>Illustrator icons</dt>
 									<dd>A set of 16 outline space icons created with Adobe Illustrator. Free Ai designed and released by Justas Galaburda.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-ai.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">Illustrator icons</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/icons-1.jpg" alt="" />
 								<dl>
 									<dt>PSD icons</dt>
 									<dd>Grap is a set of 9 simple but coloured icons created with Photoshop. Free PSD released by kamran bhatti.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">PSD icons</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/ui-1.jpg" alt="" />
 								<dl>
 									<dt>UI design</dt>
 									<dd>Acess to our largest database of the web about the ui and look into a ton of professionnal tools</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-premium.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">Premium ui</div>
 							</div>
 						</figure>

                         <figure class="white">
 							<a href="#">
 								<img src="img/font-5.jpg" alt="" />
 								<dl>
 									<dt>Free font</dt>
 									<dd>A set of 6 outline beer icons created with Adobe Illustrator. Free Ai designed and released by Justas Galaburda.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">Free font</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/theme-2.jpg" alt="" />
 								<dl>
 									<dt>Html theme</dt>
 									<dd>Symphony is a responsive one page website template designed with sketches and coded with html5 and php. Freebie released by Lacoste Xavier.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-themes.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">Html theme</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/psd-5.jpg" alt="" />
 								<dl>
 									<dt>PSD mockup</dt>
 									<dd>A very detailed Macbook Air mockup created with Photoshop and providing smart objects. Free PSD released by Barin Cristian.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">PSD mockup</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/icons-3.jpg" alt="" />
 								<dl>
 									<dt>PSD icons</dt>
 									<dd>A set of 16 hand gestures icons you may find useful for your projects. Free PSD released by Rovane Durso.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">PSD icons</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/font-4.jpg" alt="" />
 								<dl>
 									<dt>Free font</dt>
 									<dd>Julep is an elegant and modern free font released in vector formats (Ai, EPS and PDF). Designed and released by Jeremy Ross.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">Free font</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/theme-3.jpg" alt="" />
 								<dl>
 									<dt>HTML theme</dt>
 									<dd>Gorgo is a free HTML portfolio template for freelancers, photographers, agencies, designers and other creative fields. Designed and released by Aristothemes.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-themes.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">HTML theme</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/font-6.jpg" alt="" />
 								<dl>
 									<dt>Free font</dt>
 									<dd>REEF is a rounded font free for commercial and personal use. It's strength lies in simplicity and construction.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">Free font</div>
 							</div>
 						</figure>

 						<figure class="white">
 							<a href="#">
 								<img src="img/theme-4.jpg" alt="" />
 								<dl>
 									<dt>HTML theme</dt>
 									<dd>ActiveBox is a free responsive HTML template featured by clean and minimalistic design. Designed and coded by Kamal Chaneman.</dd>
 								</dl>
 							</a>
                             <div id="wrapper-part-info">
                             	<div class="part-info-image"><img src="img/icon-themes.svg" alt="" width="28" height="28"/></div>
                             	<div id="part-info">HTML theme</div>
 							</div>
 						</figure>

 					</section>

 				</div>

 			</div>

     <div id="wrapper-oldnew">
     	<div class="oldnew">
         	<div class="wrapper-oldnew-prev">
             	<div id="oldnew-prev"></div>
         	</div>
             <div class="wrapper-oldnew-next">
             	<div id="oldnew-next"></div>
     		</div>
         </div>
 	</div>

 	<div id="wrapper-thank">
     	<div class="thank">
         	<div class="thank-text">pl<span style="letter-spacing:-5px;">a</span>tz</div>
     	</div>
 	</div>
  <!-- Footer -->
  @include('templates.partials.footer')

  <!-- Scripts -->
  @include('templates.partials.scripts')


 <!-- SCRIPT -->




 </body>


 </html>
