<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<script>
  (function(d) {
    var config = {
      kitId: 'fad5xsk',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/cmn/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/cmn/apple-touch-icon.png" sizes="180x180">
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/style.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="head">
	<p class="head_ttl">BLOG</p>
</div>
<div class="head-logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.svg" alt="SIESTA" width="100%"></div>

<div class="navWrap">
	<div class="navWrap_logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.svg" alt="SIESTA" width="100%"></div>

	<nav class="gnav">
		<ul class="gnav_list">
			<li class="gnav_list_item"><a href="https://siesta81.com">TOP</a></li>
			<li class="gnav_list_item"><a href="https://store.siesta81.com" target="_blank">WEB SHOP</a></li>
			<li class="gnav_list_item is-active"><a href="<?php echo esc_url(home_url()); ?>">BLOG</a></li>
			<li class="gnav_list_item"><a href="mailto:siesta@siesta81.com">CONTACT</a></li>
		</ul>
	</nav>

	<nav class="snsnav">
		<ul class="snsnav_list">
			<li class="snsnav_list_item"><a href="https://www.instagram.com/siestastore/" target="_blank">
				<svg id="humberger_op" width="24.25" height="24.25" viewBox="0 0 24.25 24.25"><path d="M-177.694-61.673h4.9a6.655,6.655,0,0,1,2.2.42,3.749,3.749,0,0,1,1.39.9,3.753,3.753,0,0,1,.9,1.39,6.418,6.418,0,0,1,.42,2.21v9.79a6.362,6.362,0,0,1-.42,2.2,4.011,4.011,0,0,1-2.2,2.21,6.654,6.654,0,0,1-2.21.41c-1.36.31-1.67.31-4.98.31h-4.89a6.42,6.42,0,0,1-2.21-.42,3.751,3.751,0,0,1-1.39-.9,3.667,3.667,0,0,1-.9-1.39,6.368,6.368,0,0,1-.42-2.2c-.11-1.39-.11-1.7-.11-5.01v-4.89a6.418,6.418,0,0,1,.42-2.21,3.745,3.745,0,0,1,.9-1.39,3.745,3.745,0,0,1,1.39-.9,6.663,6.663,0,0,1,2.21-.42c1.39-.11,1.69-.11,5-.11m0-2.2h-5a8.758,8.758,0,0,0-2.94.64,5.9,5.9,0,0,0-2.2,1.38,5.962,5.962,0,0,0-1.39,2.21,8.662,8.662,0,0,0-.59,2.89v10.01a8.94,8.94,0,0,0,.63,2.93,5.976,5.976,0,0,0,1.39,2.2,5.961,5.961,0,0,0,2.21,1.39,8.928,8.928,0,0,0,2.89.6h10.01a8.745,8.745,0,0,0,2.95-.58,6.161,6.161,0,0,0,3.53-3.61,8.942,8.942,0,0,0,.64-2.93v-10.01a8.84,8.84,0,0,0-.58-2.96,5.918,5.918,0,0,0-1.39-2.2,5.845,5.845,0,0,0-2.2-1.39,8.734,8.734,0,0,0-2.95-.57Z" transform="translate(189.814 63.873)"/><path d="M-183-63.282a6.218,6.218,0,0,0-6.22,6.21,6.22,6.22,0,0,0,6.22,6.22,6.22,6.22,0,0,0,6.22-6.22h0A6.218,6.218,0,0,0-183-63.282Zm0,10.27a4.033,4.033,0,0,1-4.03-4.04,4.031,4.031,0,0,1,4.03-4.03,4.042,4.042,0,0,1,4.04,4.01,4.042,4.042,0,0,1-4.04,4.04Z" transform="translate(195.124 69.192)"/><circle cx="1.455" cy="1.455" r="1.455" transform="translate(17.148 4.186)"/></svg>
			</a></li>
			<!-- <li class="snsnav_list_item"><a href="">
				<svg width="11.78" height="24.29" viewBox="0 0 11.78 24.29"><path d="M-186.191-32.039v-11.38h-3v-4.06h3v-3.55a5.21,5.21,0,0,1,5.1-5.3,5.793,5.793,0,0,1,.72.04,24.359,24.359,0,0,1,2.96.15v3.84h-2.71c-1.48,0-1.72.68-1.72,1.8v3.02h4.41l-.16,4.06h-4.25v11.38Z" transform="translate(189.191 56.329)"/></svg>
			</a></li> -->
			<li class="snsnav_list_item"><a href="https://twitter.com/siestastore" target="_blank">
				<svg width="24.4" height="19.887" viewBox="0 0 24.4 19.887"><path d="M-165.422-46.375a10.131,10.131,0,0,1-2.86.79,5.022,5.022,0,0,0,2.2-2.78,10.01,10.01,0,0,1-3.17,1.21,5,5,0,0,0-7.07-.31,5.008,5.008,0,0,0-1.49,4.88,14.187,14.187,0,0,1-10.31-5.23,5.012,5.012,0,0,0,1.54,6.62,5.2,5.2,0,0,1-2.21-.62h0a5.018,5.018,0,0,0,3.97,5.03,5.1,5.1,0,0,1-2.2,0,5,5,0,0,0,4.61,3.48,10.06,10.06,0,0,1-6.22,2.2,7.89,7.89,0,0,1-1.19,0,14.154,14.154,0,0,0,7.67,2.21,14.15,14.15,0,0,0,14.26-14.04v-.84A10.168,10.168,0,0,0-165.422-46.375Z" transform="translate(189.822 48.782)"/></svg>
			</a></li>
		</ul>
	</nav>

	<p class="navWrap_txt">I LEFT MY HEART IN SAN FRANCISCO</p>
</div>
<div class="btn-nav"><span></span></div>
