<script type="text/javascript" src="/javascript/highslide/highslide-full.packed.js"></script>
<link rel="stylesheet" type="text/css" href="/javascript/highslide/highslide.css"/>
<style type="text/css">
	.highslide img {
		cursor: url(/javascript/highslide/graphics/zoomin.cur), pointer !important;
	}
	.highslide-header .highslide-move {
		display: none;
	}
	.highslide-header .highslide-close {
		display: none;
	}
</style>
<script type="text/javascript">
	hs.showCredits = false;
	hs.graphicsDir = "/javascript/highslide/graphics/";

	hs.registerOverlay({
		html: '<div class="closebutton" onclick="return hs.close(this)" title="Schlie&szlig;en"></div>',
		position: 'top right',
		useOnHtml: true,
		fade: 2 // fading the semi-transparent overlay looks bad in IE
	});
</script>