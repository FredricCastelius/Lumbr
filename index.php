<?php include 'header.php';?>

	<main>

		<h2>Another damn framework</h2>
		<p>Seriously, there are great frameworks out there that are kinda all built the same way but with different styles and with a lot of classes in the markup. Lumbr is not just another framework, it's another way of thinking in the crafting and coding process. Lumbr is for you who want everything beautifully taken care of but still create whatever you want without limitations.</p>
		
		<p>The most powerful about lumbr is the layout mixin. Check this out.</p>

		<p>This:</p>

<pre class="snippet"><span>@include layout(</span><span class="comment">center, center, normal, full-one-fifth, 1.5rem, 1rem, auto, 0rem</span><span>);</span></pre>
		
		<p>Generates this:</p>

		<section id="layout-example">
			<div>
				<div>
					<h1>Neat hipster heading</h1>
					<p>Cappuccino ethical sustainable post-ironic, Blue Bottle typewriter Banksy Truffaut chambray. Meggings chillwave biodiesel, craft beer cliche shabby chic kogi.</p>
					<img src="content/lumber.jpg" alt="Some lumber">
					<p><i>A picture featuring some lumber</i></p>
				</div>
			</div>
			<div>
				<div>
					<h3>Neat navigation</h3>
					<nav>
						<ul>
							<li><a href="#">Skateboring</a></li>
							<li><a href="#">Surf</a></li>
							<li><a href="#">Espresso</a></li>
							<li><a href="#">Cortado</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</section>
		<p> </p>
		<h3>Alright, so what happen</h3>
		<p>With just one line of code we made a responsive / elastic layout which has 2 columns. One that is 75% and the other the remaining 25%. Both automatically stacks and becomes 100% width on smaller devices. We also squeese in some vertical and horisontal padding. On top of that we verticlly center the sidebar to the main column. This is your new way of coding layouts.</p>
		<p>Layout snippet cheat sheet:</p>
<pre class="snippet"><span>@include layout(</span>
<span class="comment"><br>horisontal alignment, 
<br>vertical alignment, 
<br>grid direction, 
<br>grid, 
<br>grid horisontal alignment, 
<br>grid vertical alignment, 
<br>max width of grid wrapper, 
<br>grid wrapper margin</span>
<br><span>);</span></pre>

		<h2>Getting started with Lumbr</h2>

		<p>Simplicity, flexibility and rapidness is what Lumbr is all about. To get going with lumbr you need a SASS preprocessor with autoprefixor on. E.g. Codekit for Mac OS X.</p>

		<p>With that cover fire up the project and set the style.scss to compile to the root /style.min.css</p>

		<p>There you go, set up your projects base settings in: _config.scss<br>After that apply your own layout to: _layout.scss</p>
		
	</main>

<?php include 'footer.php';?>