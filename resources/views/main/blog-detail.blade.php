@extends('main.layouts.default')
@section('title', $blog->title)

@push('css')
<link rel="stylesheet" href="{{ asset('assets/main/styles/custom-blog-detail.css')}}">
@endpush

@section('content')
<div class="content ">

	@if ($blog)
	<div class="pb-3">

		<div class="ad-wrap mb-3">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Ads Blog Detail Horizontal -->
			<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7614452738762603" data-ad-slot="1924873538" data-ad-format="auto" data-full-width-responsive="true"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>

		<header class="header-post">
			<h1 class="title title--h1">{{ $blog->title }}</h1>
			{{-- <div class="caption-post">
				<p>Above all, think of life as a prototype. We can conduct experiments, make discoveries, and change our perspectives. We can look for opportunities to turn processes into projects that have tangible outcomes.</p>
			</div> --}}
			<div class="header-post__image-wrap">
				<img class="cover lazyload" data-zoom src="{{ asset($blog->thumbnail) }}" alt="" />
			</div>
		</header>

		<div class="row">
			<div class="col-md-8">

				{!! $blog->content !!}

				<footer class="footer-post">
					<div class="addthis_inline_share_toolbox"></div>
				</footer>
				<hr>
				<div id="disqus_thread"></div>
			</div>
			<div class="col-md-4">

				<div class="right-sidebar">
					<div class="right-sidebar-ads mt-3">
						<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- Ads Blog Detail Vertical -->
						<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7614452738762603" data-ad-slot="1124897379" data-ad-format="auto" data-full-width-responsive="true"></ins>
						<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
				</div>

				<div class="right-sidebar">
					<h5>Contact Me</h5>
					<a target="_blank" class="btn btn-sm btn-block" href="{{ route('contact') }}"><i class="font-icon icon-envelope"></i>Contact Me</a>
				</div>

				<div class="right-sidebar">
					<h5>Other Blogs</h5>
					<div class="row">
						@foreach ($otherBlog as $b)
						<div class="col-md-6">
							<div class="polaroid">
								<a href="{{ route('blog.detail', $b->slug) }}" class="other-blog-text">
									<img src="{{ asset($b->thumbnail) }}" width="100%" height="100%" alt="" />
									<h3>{{ (Str::length($b->title)>40) ? substr($b->title, 0, 40).'...' : $b->title }}</h3>
								</a>
							</div>
						</div>
						@endforeach
					</div>
				</div>

				<div class="right-sidebar">
					<div class="social-media">
						<h5>Follow Me</h5>
						<a href="{!! Info::where('key','LINK_FACEBOOK')->value('value') !!}" class="social-media-button icon facebook">
							<i class="fab fa-facebook-f"></i>
							<span>Facebook</span>
						</a>
						<a href="{!! Info::where('key','LINK_INSTAGRAM')->value('value') !!}" class="social-media-button icon instagram">
							<i class="fab fa-instagram"></i>
							<span>Instagram</span>
						</a>
						<a href="{!! Info::where('key','LINK_TWITTER')->value('value') !!}" class="social-media-button icon twitter">
							<i class="fab fa-twitter"></i>
							<span>Twitter</span>
						</a>
						<a href="{!! Info::where('key','LINKEDIN')->value('value') !!}" class="social-media-button icon linkedin">
							<i class="fab fa-linkedin-in"></i>
							<span>LinkedIn</span>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	@else
	<p>Oops, not available at this time</p>
	@endif
</div>
@endsection

@push('js')
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5edb1a20894e63c7"></script>
<script type="text/javascript" charset="utf-8">
	// Place this code snippet near the footer of your page before the close of the /body tag
// LEGAL NOTICE: The content of this website and all associated program code are protected under the Digital Millennium Copyright Act. Intentionally circumventing this code may constitute a violation of the DMCA.							
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}(';k O=\'\',29=\'1X\';1D(k i=0;i<12;i++)O+=29.X(D.L(D.J()*29.H));k 2E=5,2A=4y,2s=4z,39=79,2y=F(t){k i=!1,o=F(){z(q.1j){q.2Q(\'2P\',e);G.2Q(\'1S\',e)}R{q.2R(\'32\',e);G.2R(\'24\',e)}},e=F(){z(!i&&(q.1j||4A.2p===\'1S\'||q.35===\'36\')){i=!0;o();t()}};z(q.35===\'36\'){t()}R z(q.1j){q.1j(\'2P\',e);G.1j(\'1S\',e)}R{q.2Z(\'32\',e);G.2Z(\'24\',e);k n=!1;2V{n=G.4C==4D&&q.1U}2S(r){};z(n&&n.2T){(F a(){z(i)I;2V{n.2T(\'16\')}2S(e){I 4E(a,50)};i=!0;o();t()})()}}};G[\'\'+O+\'\']=(F(){k t={t$:\'1X+/=\',4x:F(e){k a=\'\',d,n,i,c,s,l,o,r=0;e=t.e$(e);1c(r<e.H){d=e.17(r++);n=e.17(r++);i=e.17(r++);c=d>>2;s=(d&3)<<4|n>>4;l=(n&15)<<2|i>>6;o=i&63;z(2X(n)){l=o=64}R z(2X(i)){o=64};a=a+10.t$.X(c)+10.t$.X(s)+10.t$.X(l)+10.t$.X(o)};I a},11:F(e){k n=\'\',d,l,c,s,r,o,a,i=0;e=e.1m(/[^A-4F-4H-9\\+\\/\\=]/g,\'\');1c(i<e.H){s=10.t$.1M(e.X(i++));r=10.t$.1M(e.X(i++));o=10.t$.1M(e.X(i++));a=10.t$.1M(e.X(i++));d=s<<2|r>>4;l=(r&15)<<4|o>>2;c=(o&3)<<6|a;n=n+S.T(d);z(o!=64){n=n+S.T(l)};z(a!=64){n=n+S.T(c)}};n=t.n$(n);I n},e$:F(t){t=t.1m(/;/g,\';\');k n=\'\';1D(k i=0;i<t.H;i++){k e=t.17(i);z(e<1z){n+=S.T(e)}R z(e>4I&&e<4J){n+=S.T(e>>6|4K);n+=S.T(e&63|1z)}R{n+=S.T(e>>12|33);n+=S.T(e>>6&63|1z);n+=S.T(e&63|1z)}};I n},n$:F(t){k i=\'\',e=0,n=4L=1C=0;1c(e<t.H){n=t.17(e);z(n<1z){i+=S.T(n);e++}R z(n>4M&&n<33){1C=t.17(e+1);i+=S.T((n&31)<<6|1C&63);e+=2}R{1C=t.17(e+1);2l=t.17(e+2);i+=S.T((n&15)<<12|(1C&63)<<6|2l&63);e+=3}};I i}};k a=[\'4N==\',\'4O\',\'4G=\',\'4v\',\'4l\',\'4u=\',\'4d=\',\'4e=\',\'4f\',\'4g\',\'4h=\',\'4i=\',\'4j\',\'4c\',\'4k=\',\'4m\',\'4n=\',\'4o=\',\'4p=\',\'4q=\',\'4r=\',\'4s=\',\'4t==\',\'4P==\',\'4w==\',\'4Q==\',\'5d=\',\'5f\',\'5g\',\'5h\',\'5i\',\'5j\',\'5k\',\'5l==\',\'5e=\',\'5m=\',\'5o=\',\'5p==\',\'5q=\',\'5r\',\'5s=\',\'5t=\',\'5u==\',\'5v=\',\'5n==\',\'5c==\',\'52=\',\'5b=\',\'5w\',\'4T==\',\'4U==\',\'4V\',\'4W==\',\'4X=\'],f=D.L(D.J()*a.H),w=t.11(a[f]),Y=w,Z=1,W=\'#4Y\',r=\'#4Z\',g=\'#4S\',b=\'#51\',A=\'\',v=\'53 54.\',p=\'55... 56 57 58 1W 2z.  59\\\'s 5a.  4R 1V 4b 2B.\',y=\'3R 49 1W 3h, 1V 3j\\\'t 3m 2w 2x. 3n 1V 3u 3v 2w 2x 3y 3z.\',s=\'3g 3t 3A 1W 2z 3x 2j 2B 3p.\',i=0,u=0,n=\'3s.3r\',l=0,Q=e()+\'.3e\';F h(t){z(t)t=t.1E(t.H-15);k i=q.2D(\'3q\');1D(k n=i.H;n--;){k e=S(i[n].1K);z(e)e=e.1E(e.H-15);z(e===t)I!0};I!1};F m(t){z(t)t=t.1E(t.H-15);k e=q.3k;x=0;1c(x<e.H){1g=e[x].1r;z(1g)1g=1g.1E(1g.H-15);z(1g===t)I!0;x++};I!1};F e(t){k n=\'\',i=\'1X\';t=t||30;1D(k e=0;e<t;e++)n+=i.X(D.L(D.J()*i.H));I n};F o(i){k o=[\'3B\',\'3D==\',\'3T\',\'48\',\'2q\',\'47==\',\'46=\',\'45==\',\'44=\',\'43==\',\'3C==\',\'41==\',\'3Z\',\'3Y\',\'3X\',\'2q\'],r=[\'2r=\',\'3U==\',\'3S==\',\'3E==\',\'3Q=\',\'3P\',\'3O=\',\'3N=\',\'2r=\',\'3K\',\'3J==\',\'3I\',\'3H==\',\'3G==\',\'3F==\',\'3L=\'];x=0;1H=[];1c(x<i){c=o[D.L(D.J()*o.H)];d=r[D.L(D.J()*r.H)];c=t.11(c);d=t.11(d);k a=D.L(D.J()*2)+1;z(a==1){n=\'//\'+c+\'/\'+d}R{n=\'//\'+c+\'/\'+e(D.L(D.J()*20)+4)+\'.3e\'};1H[x]=1Z 21();1H[x].23=F(){k t=1;1c(t<7){t++}};1H[x].1K=n;x++}};F C(t){};I{3d:F(t,r){z(3M q.N==\'3V\'){I};k i=\'0.1\',r=Y,e=q.1b(\'1p\');e.19=r;e.j.1i=\'1Q\';e.j.16=\'-1h\';e.j.V=\'-1h\';e.j.1e=\'2d\';e.j.U=\'3W\';k d=q.N.2Y,a=D.L(d.H/2);z(a>15){k n=q.1b(\'2b\');n.j.1i=\'1Q\';n.j.1e=\'1n\';n.j.U=\'1n\';n.j.V=\'-1h\';n.j.16=\'-1h\';q.N.42(n,q.N.2Y[a]);n.1a(e);k o=q.1b(\'1p\');o.19=\'34\';o.j.1i=\'1Q\';o.j.16=\'-1h\';o.j.V=\'-1h\';q.N.1a(o)}R{e.19=\'34\';q.N.1a(e)};l=3l(F(){z(e){t((e.1Y==0),i);t((e.27==0),i);t((e.1J==\'2v\'),i);t((e.1L==\'2t\'),i);t((e.1R==0),i)}R{t(!0,i)}},28)},1P:F(e,c){z((e)&&(i==0)){i=1;G[\'\'+O+\'\'].1B();G[\'\'+O+\'\'].1P=F(){I}}R{k y=t.11(\'3w\'),u=q.3o(y);z((u)&&(i==0)){z((2A%3)==0){k l=\'5y=\';l=t.11(l);z(h(l)){z(u.1O.1m(/\\s/g,\'\').H==0){i=1;G[\'\'+O+\'\'].1B()}}}};k f=!1;z(i==0){z((2s%3)==0){z(!G[\'\'+O+\'\'].2e){k d=[\'68==\',\'7h==\',\'6U=\',\'6Y=\',\'70=\'],m=d.H,r=d[D.L(D.J()*m)],a=r;1c(r==a){a=d[D.L(D.J()*m)]};r=t.11(r);a=t.11(a);o(D.L(D.J()*2)+1);k n=1Z 21(),s=1Z 21();n.23=F(){o(D.L(D.J()*2)+1);s.1K=a;o(D.L(D.J()*2)+1)};s.23=F(){i=1;o(D.L(D.J()*3)+1);G[\'\'+O+\'\'].1B()};n.1K=r;z((39%3)==0){n.24=F(){z((n.U<8)&&(n.U>0)){G[\'\'+O+\'\'].1B()}}};o(D.L(D.J()*3)+1);G[\'\'+O+\'\'].2e=!0};G[\'\'+O+\'\'].1P=F(){I}}}}},1B:F(){z(u==1){k M=2i.7e(\'2k\');z(M>0){I!0}R{2i.7d(\'2k\',(D.J()+1)*28)}};k h=\'7b==\';h=t.11(h);z(!m(h)){k c=q.1b(\'77\');c.26(\'76\',\'75\');c.26(\'2p\',\'1k/6S\');c.26(\'1r\',h);q.2D(\'72\')[0].1a(c)};71(l);q.N.1O=\'\';q.N.j.14+=\'P:1n !13\';q.N.j.14+=\'1A:1n !13\';k Q=q.1U.27||G.3a||q.N.27,f=G.6Z||q.N.1Y||q.1U.1Y,a=q.1b(\'1p\'),Z=e();a.19=Z;a.j.1i=\'2m\';a.j.16=\'0\';a.j.V=\'0\';a.j.U=Q+\'1x\';a.j.1e=f+\'1x\';a.j.2h=W;a.j.1T=\'7i\';q.N.1a(a);k d=\'<a 1r="6X://6W.6V"><2H 19="2I" U="2F" 1e="40"><2C 19="2K" U="2F" 1e="40" 5x:1r="6T:2C/74;7p,7z+7A+7D+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+7E+7G+7x/7w/7v/7s/7q/7n+/7m/7l+7j/7k+7o/7r/7t/7u/7C/7F/7B+73/6R+6e+6P+5T+5U+5V/5W+5X/5Y+5S/5Z+62+66+67+6Q/69+6a/6b/61/5Q+5H+5P/5A+5B+5C+5D+E+5E/5F/5z/5G/5I/5J/+5K/5L++5M/5N/5O+6c/5R+6d+6x==">;</2H></a>\';d=d.1m(\'2I\',e());d=d.1m(\'2K\',e());k o=q.1b(\'1p\');o.1O=d;o.j.1i=\'1Q\';o.j.1y=\'1G\';o.j.16=\'1G\';o.j.U=\'6A\';o.j.1e=\'6B\';o.j.1T=\'2f\';o.j.1R=\'.6\';o.j.2M=\'2n\';o.1j(\'2j\',F(){n=n.6C(\'\').6D().6E(\'\');G.2g.1r=\'//\'+n});q.1F(Z).1a(o);k i=q.1b(\'1p\'),C=e();i.19=C;i.j.1i=\'2m\';i.j.V=f/7+\'1x\';i.j.6F=Q-6y+\'1x\';i.j.6G=f/3.5+\'1x\';i.j.2h=\'#6J\';i.j.1T=\'2f\';i.j.14+=\'K-1w: "6K 6L", 1v, 1u, 1t-1s !13\';i.j.14+=\'6M-1e: 6O !13\';i.j.14+=\'K-1f: 6H !13\';i.j.14+=\'1k-1o: 1q !13\';i.j.14+=\'1A: 6w !13\';i.j.1J+=\'3b\';i.j.2U=\'1G\';i.j.6n=\'1G\';i.j.6g=\'2J\';q.N.1a(i);i.j.6h=\'1n 6i 6j -6k 6l(0,0,0,0.3)\';i.j.1L=\'2u\';k Y=30,w=22,A=18,x=18;z((G.3a<37)||(6f.U<37)){i.j.2W=\'50%\';i.j.14+=\'K-1f: 6m !13\';i.j.2U=\'6p;\';o.j.2W=\'65%\';k Y=22,w=18,A=12,x=12};i.1O=\'<2O j="1l:#6r;K-1f:\'+Y+\'1I;1l:\'+r+\';K-1w:1v, 1u, 1t-1s;K-1N:6s;P-V:1d;P-1y:1d;1k-1o:1q;">\'+v+\'</2O><38 j="K-1f:\'+w+\'1I;K-1N:6t;K-1w:1v, 1u, 1t-1s;1l:\'+r+\';P-V:1d;P-1y:1d;1k-1o:1q;">\'+p+\'</38><6u j=" 1J: 3b;P-V: 0.3c;P-1y: 0.3c;P-16: 2c;P-2G: 2c; 2L:4a 6q #6o; U: 25%;1k-1o:1q;"><p j="K-1w:1v, 1u, 1t-1s;K-1N:2o;K-1f:\'+A+\'1I;1l:\'+r+\';1k-1o:1q;">\'+y+\'</p><p j="P-V:6v;"><2b 6N="10.j.1R=.9;" 6I="10.j.1R=1;"  19="\'+e()+\'" j="2M:2n;K-1f:\'+x+\'1I;K-1w:1v, 1u, 1t-1s; K-1N:2o;2L-6z:2J;1A:1d;7y-1l:\'+g+\';1l:\'+b+\';1A-16:2d;1A-2G:2d;U:60%;P:2c;P-V:1d;P-1y:1d;" 7c="G.2g.7g();">\'+s+\'</2b></p>\'}}})();G.3f=F(t,e){k n=7f.7a,i=G.78,a=n(),o,r=F(){n()-a<e?o||i(r):t()};i(r);I{3i:F(){o=1}}};k 2N;z(q.N){q.N.j.1L=\'2u\'};2y(F(){z(q.1F(\'2a\')){q.1F(\'2a\').j.1L=\'2v\';q.1F(\'2a\').j.1J=\'2t\'};2N=G.3f(F(){G[\'\'+O+\'\'].3d(G[\'\'+O+\'\'].1P,G[\'\'+O+\'\'].4B)},2E*28)});',62,477,'|||||||||||||||||||style|var||||||document|||||||||if||vr6||Math||function|window|length|return|random|font|floor||body|rSiCtHyeQAis|margin||else|String|fromCharCode|width|top||charAt|||this|decode||important|cssText||left|charCodeAt||id|appendChild|createElement|while|10px|height|size|thisurl|5000px|position|addEventListener|text|color|replace|0px|align|DIV|center|href|serif|sans|geneva|Helvetica|family|px|bottom|128|padding|LDkUfECDIt|c2|for|substr|getElementById|30px|spimg|pt|display|src|visibility|indexOf|weight|innerHTML|MZHFreWcCi|absolute|opacity|load|zIndex|documentElement|we|ad|ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789|clientHeight|new||Image||onerror|onload||setAttribute|clientWidth|1000|ltZTfZYGYa|babasbmsgx|div|auto|60px|ranAlready|10000|location|backgroundColor|sessionStorage|click|babn|c3|fixed|pointer|300|type|cGFydG5lcmFkcy55c20ueWFob28uY29t|ZmF2aWNvbi5pY28|zPCBcGgNts|none|visible|hidden|be|here|JWhqBzuyCX|blocker|DwcPODkWnr|to|image|getElementsByTagName|uoLEjQjLuR|160|right|svg|FILLVECTID1|15px|FILLVECTID2|border|cursor|BlcmdEKNlU|h3|DOMContentLoaded|removeEventListener|detachEvent|catch|doScroll|marginLeft|try|zoom|isNaN|childNodes|attachEvent|||onreadystatechange|224|banner_ad|readyState|complete|640|h1|IpnztzRXfH|innerWidth|block|5em|WVQdlsDGQf|jpg|GWlrBuiKgD|Please|revenue|clear|wouldn|styleSheets|setInterval|even|And|querySelector|continue|script|kcolbdakcolb|moc|disable|might|not|aW5zLmFkc2J5Z29vZ2xl|and|much|longer|your|YWRuLmViYXkuY29t|YWRzLnlhaG9vLmNvbQ|YWQubWFpbC5ydQ|NzIweDkwLmpwZw|d2lkZV9za3lzY3JhcGVyLmpwZw|bGFyZ2VfYmFubmVyLmdpZg|YmFubmVyX2FkLmdpZg|ZmF2aWNvbjEuaWNv|c3F1YXJlLWFkLnBuZw|YWQtbGFyZ2UucG5n|YWR2ZXJ0aXNlbWVudC0zNDMyMy5qcGc|typeof|Q0ROLTMzNC0xMDktMTM3eC1hZC1iYW5uZXI|YWRjbGllbnQtMDAyMTQ3LWhvc3QxLWJhbm5lci1hZC5qcGc|MTM2N19hZC1jbGllbnRJRDI0NjQuanBn|c2t5c2NyYXBlci5qcGc|But|NDY4eDYwLmpwZw|anVpY3lhZHMuY29t|YmFubmVyLmpwZw|undefined|468px|YXMuaW5ib3guY29t|YWRzYXR0LmVzcG4uc3RhcndhdmUuY29t|YWRzYXR0LmFiY25ld3Muc3RhcndhdmUuY29t||YWRzLnp5bmdhLmNvbQ|insertBefore|cHJvbW90ZS5wYWlyLmNvbQ|Y2FzLmNsaWNrYWJpbGl0eS5jb20|YWR2ZXJ0aXNpbmcuYW9sLmNvbQ|YWdvZGEubmV0L2Jhbm5lcnM|YS5saXZlc3BvcnRtZWRpYS5ldQ|YWQuZm94bmV0d29ya3MuY29t|without|1px|do|QWQzMDB4MjUw|YWQtbGFiZWw|YWQtbGI|YWQtZm9vdGVy|YWQtY29udGFpbmVy|YWQtY29udGFpbmVyLTE|YWQtY29udGFpbmVyLTI|QWQzMDB4MTQ1|QWQ3Mjh4OTA|YWQtaW1n|QWRBcmVh|QWRGcmFtZTE|QWRGcmFtZTI|QWRGcmFtZTM|QWRGcmFtZTQ|QWRMYXllcjE|QWRMYXllcjI|QWRzX2dvb2dsZV8wMQ|YWQtaW5uZXI|YWQtaGVhZGVy|QWRzX2dvb2dsZV8wMw|encode|268|193|event|fyKRCyJGji|frameElement|null|setTimeout|Za|YWQtZnJhbWU|z0|127|2048|192|c1|191|YWQtbGVmdA|YWRCYW5uZXJXcmFw|QWRzX2dvb2dsZV8wMg|QWRzX2dvb2dsZV8wNA|Sometimes|00acb5|cG9wdXBhZA|YWRzZW5zZQ|Z29vZ2xlX2Fk|b3V0YnJhaW4tcGFpZA|c3BvbnNvcmVkX2xpbms|eeeeee|393e46||FFFFFF|YWRzZXJ2ZXI|Hey|there|So|you|use|an|That|cool|YmFubmVyaWQ|YWRfY2hhbm5lbA|RGl2QWQ|QWREaXY|RGl2QWQx|RGl2QWQy|RGl2QWQz|RGl2QWRB|RGl2QWRC|RGl2QWRD|QWRJbWFnZQ|QWRCb3gxNjA|IGFkX2JveA|QWRDb250YWluZXI|Z2xpbmtzd3JhcHBlcg|YWRUZWFzZXI|YmFubmVyX2Fk|YWRCYW5uZXI|YWRiYW5uZXI|YWRBZA|YmFubmVyYWQ|YWRzbG90|xlink|Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvanMvYWRzYnlnb29nbGUuanM|CGf7SAP2V6AjTOUa8IzD3ckqe2ENGulWGfx9VKIBB72JM1lAuLKB3taONCBn3PY0II5cFrLr7cCp|E5HlQS6SHvVSU0V|j9xJVBEEbWEXFVZQNX9|1HX6ghkAR9E5crTgM|0t6qjIlZbzSpemi|MjA3XJUKy|SRWhNsmOazvKzQYcE0hV5nDkuQQKfUgm4HmqA2yuPxfMU1m4zLRTMAqLhN6BHCeEXMDo2NsY8MdCeBB6JydMlps3uGxZefy7EO1vyPvhOxL7TPWjVUVvZkNJ|UIWrdVPEp7zHy7oWXiUgmR3kdujbZI73kghTaoaEKMOh8up2M8BVceotd|F2Q|BNyENiFGe5CxgZyIT6KVyGO2s5J5ce|14XO7cR5WV1QBedt3c|QhZLYLN54|e8xr8n5lpXyn|u3T9AbDjXwIMXfxmsarwK9wUBB5Kj8y2dCw|Kq8b7m0RpwasnR|uJylU|bTplhb|x0z6tauQYvPxwT0VM1lH9Adt5Lp|Uv0LfPzlsBELZ|iqKjoRAEDlZ4soLhxSgcy6ghgOy7EeC2PI4DHb7pO7mRwTByv5hGxF|1FMzZIGQR3HWJ4F1TqWtOaADq0Z9itVZrg1S6JLi7B1MAtUCX1xNB0Y0oL9hpK4|YbUMNVjqGySwrRUGsLu6|uWD20LsNIDdQut4LXA|KmSx|0nga14QJ3GOWqDmOwJgRoSme8OOhAQqiUhPMbUGksCj5Lta4CbeFhX9NN0Tpny|BKpxaqlAOvCqBjzTFAp2NFudJ5paelS5TbwtBlAvNgEdeEGI6O6JUt42NhuvzZvjXTHxwiaBXUIMnAKa5Pq9SL3gn1KAOEkgHVWBIMU14DBF2OH3KOfQpG2oSQpKYAEdK0MGcDg1xbdOWy|I1TpO7CnBZO||pyQLiBu8WDYgxEZMbeEqIiSM8r|QcWrURHJSLrbBNAxZTHbgSCsHXJkmBxisMvErFVcgE||||h0GsOCs9UwP2xo6|UimAyng9UePurpvM8WmAdsvi6gNwBMhPrPqemoXywZs8qL9JZybhqF6LZBZJNANmYsOSaBTkSqcpnCFEkntYjtREFlATEtgxdDQlffhS3ddDAzfbbHYPUDGJpGT|Ly93d3cuZ29vZ2xlLmNvbS9hZHNlbnNlL3N0YXJ0L2ltYWdlcy9mYXZpY29uLmljbw|uI70wOsgFWUQCfZC1UI0Ettoh66D|szSdAtKtwkRRNnCIiDzNzc0RO|kmLbKmsE|dEflqX6gzC4hd1jSgz0ujmPkygDjvNYDsU0ZggjKBqLPrQLfDUQIzxMBtSOucRwLzrdQ2DFO0NDdnsYq0yoJyEB0FHTBHefyxcyUy8jflH7sHszSfgath4hYwcD3M29I5DMzdBNO2IFcC5y6HSduof4G5dQNMWd4cDcjNNeNGmb02|3eUeuATRaNMs0zfml|qdWy60K14k|screen|borderRadius|boxShadow|14px|24px|8px|rgba|18pt|marginRight|CCC|45px|solid|999|200|500|hr|35px|12px|gkJocgFtzfMzwAAAABJRU5ErkJggg|120|radius|160px|40px|split|reverse|join|minWidth|minHeight|16pt|onmouseout|fff|Arial|Black|line|onmouseover|normal|CXRTTQawVogbKeDEs2hs4MtJcNVTY2KgclwH2vYODFTa4FQ|UADVgvxHBzP9LUufqQDtV|RUIrwGk|css|data|Ly9hZHZlcnRpc2luZy55YWhvby5jb20vZmF2aWNvbi5pY28|com|blockadblock|http|Ly9hZHMudHdpdHRlci5jb20vZmF2aWNvbi5pY28|innerHeight|Ly93d3cuZG91YmxlY2xpY2tieWdvb2dsZS5jb20vZmF2aWNvbi5pY28|clearInterval|head|EuJ0GtLUjVftvwEYqmaR66JX9Apap6cCyKhiV|png|stylesheet|rel|link|requestAnimationFrame||now|Ly95dWkueWFob29hcGlzLmNvbS8zLjE4LjEvYnVpbGQvY3NzcmVzZXQvY3NzcmVzZXQtbWluLmNzcw|onclick|setItem|getItem|Date|reload|Ly93d3cuZ3N0YXRpYy5jb20vYWR4L2RvdWJsZWNsaWNrLmljbw|9999|cIa9Z8IkGYa9OGXPJDm5RnMX5pim7YtTLB24btUKmKnZeWsWpgHnzIP5UucvNoDrl8GUrVyUBM4xqQ|ISwIz5vfQyDF3X|ejIzabW26SkqgMDA7HByRAADoM7kjAAAAInRSTlM6ACT4xhkPtY5iNiAI9PLv6drSpqGYclpM5bengkQ8NDAnsGiGMwAABetJREFUWMPN2GdTE1EYhmFQ7L339rwngV2IiRJNIGAg1SQkFAHpgnQpKnZBAXvvvXf9mb5nsxuTqDN|b29vlvb2xn5|v7|MgzNFaCVyHVIONbx1EDrtCzt6zMEGzFzFwFZJ19jpJy2qx5BcmyBM|base64|aa2thYWHXUFDUPDzUOTno0dHipqbceHjaZ2dCQkLSLy|oGKmW8DAFeDOxfOJM4DcnTYrtT7dhZltTW7OXHB1ClEWkPO0JmgEM1pebs5CcA2UCTS6QyHMaEtyc3LAlWcDjZReyLpKZS9uT02086vu0tJa|PzNzc3myMjlurrjsLDhoaHdf3|Lnx0tILMKp3uvxI61iYH33Qq3M24k|VOPel7RIdeIBkdo|v792dnbbdHTZYWHZXl7YWlpZWVnVRkYnJib8|Ly8vKysrDw8O4uLjkt7fhnJzgl5d7e3tkZGTYVlZPT08vLi7OCwu|fn5EREQ9PT3SKSnV1dXks7OsrKypqambmpqRkZFdXV1RUVHRISHQHR309PTq4eHp3NzPz8|background|iVBORw0KGgoAAAANSUhEUgAAAKAAAAAoCAMAAABO8gGqAAAB|1BMVEXr6|0idvgbrDeBhcK|HY9WAzpZLSSCNQrZbGO1n4V4h9uDP7RTiIIyaFQoirfxCftiht4sK8KeKqPh34D2S7TsROHRiyMrAxrtNms9H5Qaw9ObU1H4Wdv8z0J8obvOo|sAAADr6|sAAADMAAAsKysKCgokJCRycnIEBATq6uoUFBTMzMzr6urjqqoSEhIGBgaxsbHcd3dYWFg0NDTmw8PZY2M5OTkfHx|wd4KAnkmbaePspA|enp7TNTUoJyfm5ualpaV5eXkODg7k5OTaamoqKSnc3NzZ2dmHh4dra2tHR0fVQUFAQEDPExPNBQXo6Ohvb28ICAjp19fS0tLnzc29vb25ubm1tbWWlpaNjY3dfX1oaGhUVFRMTEwaGhoXFxfq5ubh4eHe3t7Hx8fgk5PfjY3eg4OBgYF'.split('|'),0,{}));
</script>
@endpush