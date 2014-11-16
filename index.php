		<?php include 'header.php';?>

		<section id="hero">
		    <div>
		        <h1>Next gen layout</h1>
		        <h2>An elastic front-end framework for<br>well executed modern web development.</h2>
		        <a href="https://github.com/FredricCastelius/Lumbr" class="button">Download Lumbr</a>
		        <!--<span>Latest build: v0.0.1</span> <a href="https://github.com/FredricCastelius/Lumbr" target=>View Source on Github</a> <a href="#demo">The docs</a>-->
		    </div>
		</section>

	<div id="wrapper">
		<main>
			<div>
				<h1>Lumbr</h1>
				<h2>Another damn framework</h2>
				<p>Seriously, there are great frameworks out there that are kinda all built the same way but with different styles and with a lot of classes in the markup. Lumbr is not just another framework, it's another way of thinking in the crafting and coding process. Lumbr is for you who want everything beautifully taken care of but still create whatever you want without limitations.</p>
				
				<p>The most powerful about lumbr is the layout mixin. Check this out:</p>

				<p>This SCSS:</p>
<pre class="snippet"><span>@include layout(</span><span class="comment">$horisontal-alignment, $direction, $grid, $grid-padding-horisontal, $grid-padding-vertical, $max-width, $grid-margin</span><span>);</span></pre>
				
				<section id="first-example">
					<div>
						<div>I'm in the grid</div>
					</div>
					<div>
						<div>I'm in the grid</div>
					</div>
					<div>
						<div>I'm in the grid</div>
					</div>
				</section>

				<!--<h3>Whats included</h3>

				<section>
					<div>
						<h4>One config file for everything</h4>
						<p>Lumbr is built for convinience and power. Focusing only on the most nessisary configs for you to setting the base and kickstart your project.</p>
					</div>
					<div>
						<h4>Beautiful typography</h4>
						<p>Troughout the whole of lumbr there is a focus on beautiful typography were you are in charge of the look at all times.</p>
					</div>
					<div>
						<h4>Animations</h4>
						<p>Troughout the whole of lumbr there is a focus on beautiful typography were you are in charge of the look at all times.</p>
					</div>
					<div>
						<h4>Elasticness</h4>
						<p>Of course it's responsive, it's actually elastic posistioning which is font base. Creates a more consistent and flexiable layout.</p>
					</div>
					<div>
						<h4>Low code to text ratio</h4>
						<p>More efficent code, cleaner markup, both better for reading and SEO.</p>
					</div>
					<div>
						<h4>Alignment & Widths</h4>
						<p>Vertical alignment & auto calulation of width.</p>
					</div>
					<div>
						<h4>Grids</h4>
						<p>Deploy grids super easy with just one line of code</p>
					</div>
					<div>
						<h4>Snippets</h4>
						<p>Variaety of usefule mixins always at your fingertips</p>
					</div>
					<div>
						<h4>Embedded correctly</h4>
						<p>Embedded content like videos from sites like youtube and Vimeo embedds beautifully perfect.</p>
					</div>
					<div>
						<h4>Badbrowser</h4>
						<p>Lumbr is a built for modern browsers, users with not so awesome browser will automatically see a info box on how to update.</p>
					</div>
				</section>

				<h2>Building bricks</h2>

				<h4>When element should stop</h4>
				<p>Perfect for wrapping the main content of the page. First value is the margin that is added on browser width that are smaller then the later value. This creates a smooth transisiton between the fixed and fluid layout.</p>-->
			</div>

			<div>
				<nav class="docs-nav" style="z-index: 1000;">
		          <h4 class="docs-h4">Table of contents</h4>
		          <h5 class="docs-h5"><a href="#who-for">Getting Started</a></h5>
		          <ul id="gettingstartedNav" class="current-section"><li><a href="#who-for" class="doc-nav-link"><strong>1.1 </strong>Who Is This For</a></li><li><a href="#comes-with" class="doc-nav-link"><strong>1.2 </strong>What is Included</a></li><li><a href="#get-started" class="doc-nav-link"><strong>1.3 </strong>Download Timber</a></li><li><a href="#theme-editing" class="doc-nav-link"><strong>1.4 </strong>Theme Editing</a></li><li><a href="#demos" class="doc-nav-link"><strong>1.5 </strong>Sell Your Theme</a></li></ul>
		          <h5 class="docs-h5"><a href="#sass">Grid and Sass</a></h5>
		          <ul id="basicNav"><li><a href="#sass" class="doc-nav-link"><strong>2.1 </strong>Sass</a></li><li><a href="#breakpoints" class="doc-nav-link"><strong>2.2 </strong>Breakpoints</a></li><li><a href="#grid" class="doc-nav-link"><strong>2.3 </strong>Grid</a></li><li><a href="#helper-classes" class="doc-nav-link"><strong>2.4 </strong>Helper Classes</a></li><li><a href="#sass-mixins" class="doc-nav-link"><strong>2.5 </strong>Sass Mixins</a></li></ul>
		          <h5 class="docs-h5"><a href="#pagination">Shopify Components</a></h5>
		          <ul id="moduleNav"><li><a href="#pagination" class="doc-nav-link"><strong>3.1 </strong>Pagination</a></li><li><a href="#tags" class="doc-nav-link"><strong>3.2 </strong>Tags</a></li><li><a href="#breadcrumbs" class="doc-nav-link"><strong>3.3 </strong>Breadcrumbs</a></li><li><a href="#newsletter" class="doc-nav-link"><strong>3.4 </strong>Newsletter Form</a></li></ul>
		          <h5 class="docs-h5"><a href="#ajax-cart">JavaScript Modules</a></h5>
		          <ul id="jsModuleNav"><li><a href="#ajax-cart" class="doc-nav-link"><strong>4.1 </strong>Ajaxify Cart</a></li></ul>
		          <h5 class="docs-h5"><a href="#typography">Style Guide</a></h5>
		          <ul id="styleguideNav"><li><a href="#typography" class="doc-nav-link"><strong>5.1 </strong>Typography</a></li><li><a href="#forms" class="doc-nav-link"><strong>5.2 </strong>Forms</a></li><li><a href="#buttons" class="doc-nav-link"><strong>5.3 </strong>Buttons</a></li><li><a href="#notes" class="doc-nav-link"><strong>5.4 </strong>Notes and Errors</a></li><li><a href="#misc" class="doc-nav-link"><strong>5.5 </strong>Misc. Elements</a></li><li><a href="#icons" class="doc-nav-link"><strong>5.6 </strong>Icon Font</a></li></ul>
		        </nav>
	    	</div>
    	</main>
    </div>

		<?php include 'footer.php';?>