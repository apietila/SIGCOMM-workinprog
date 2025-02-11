<!DOCTYPE HTML>
<html>
<head>
	<meta charset="iso-8859-1">
	<style type="text/css">
		html, body {
			margin: 0;
			padding: 0;
			border: 0;
		}
		
        .center {
		    margin-left: auto;
		    margin-right: auto;    
		    text-align: center;
		    vertical-align: middle;
        }

        .socialbtn {
			display: inline-block; 
			padding-left: 10px;        	
        }
	</style>
</head>

<body>
	<!-- Google -->
	<script src="https://apis.google.com/js/platform.js" async defer></script>

	<!-- FB like button -->
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<!-- Twitter share -->
	<script>
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
	</script>
	
	<div class="center">
		<div class="socialbtn">
			<div class="fb-like" style="top: -5px;" data-href="http://conferences.sigcomm.org/sigcomm/2016/" data-layout="button_count"></div>
		</div>
		<div class="socialbtn">
			<a class="twitter-share-button" href="https://twitter.com/share" data-url="http://conferences.sigcomm.org/sigcomm/2016/" data-hashtags="sigcomm16">Tweet</a>
		</div>
		<div class="socialbtn">
			<div class="g-plusone" data-size="medium" data-href="http://conferences.sigcomm.org/sigcomm/2016/"></div>
		</div>
	</div>

</body>
</html>