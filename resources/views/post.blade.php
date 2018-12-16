
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head prefix="og: http://ogp.me/ns#">
  <meta charset="utf-8">
  <title>{{ setting('site.title')}}</title>
  <meta property="og:type" content="website">
  <meta property="og:title" itemprop="name" content="Mihaaru - The most trusted news source in the Maldives">
  <meta property="og:site_name" content="Mihaaru">
  <meta property="fb:app_id" content="1087775497940743"/>
  
      <meta property="fb:page_id" content="219114221473235"/>
      <meta property="og:description" content="The most trusted news source in the Maldives"/>
    <meta property="og:url" content="index.html"/>
          <meta property="og:image" content="/assets/og-default-2.jpg">
      
  
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:site" content="@Mihaarunews"/>
  <meta name="twitter:creator" content="@Mihaarunews"/>
  <meta name="twitter:title" content="Mihaaru - The most trusted news source in the Maldives" />
  <meta name="twitter:widgets:csp" content="on">
  <meta name="twitter:description" content="The most trusted news source in the Maldives"/>
          <meta name="twitter:image" content="/assets/og-default-2.jpg">
      
    <meta name="description" content="The most trusted news source in the Maldives"/>
    <meta name="keywords" content="Finance News, Maldives News, Breaking News, Maldives Politics, Entertainment, Lifestyle"/>

  <meta name="theme-color" content="#EC1D24"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="f6G8kNiiiFgGyj6hhlGkKEyMZsET50uM77WiiCmv">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="google" content="notranslate" />
  <link rel="manifest" href="manifest.json" />
  <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/icons/57x57.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/icons/114x114.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/icons/72x72.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/icons/144x144.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/icons/60x60.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/icons/120x120.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/icons/76x76.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/icons/152x152.png" />
  <link rel="icon" type="image/png" href="/assets/images/icons/196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="/assets/images/icons/192x192.png" sizes="192x192" />
  <link rel="icon" type="image/png" href="/assets/images/icons/96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="/assets/images/icons/32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="/assets/images/icons/16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="/assets/images/icons/128x128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#EC1D24" />
  <meta name="msapplication-TileImage" content="/assets/images/icons/144x144.png" />
  <meta name="msapplication-square70x70logo" content="/assets/images/icons/70x70.png" />
  <meta name="msapplication-square150x150logo" content="/assets/images/icons/150x150.png" />
  <meta name="msapplication-square310x310logo" content="/assets/images/icons/310x310.png" />

      <link rel="stylesheet" type="text/css" href="/assets/css/style-d67b916ad2.css" />
    <link rel="stylesheet" type="text/css" href="/assets/font-awesome/css/font-awesome.min.css" />

</head>

		<!-- Nav -->
@include('partials.nav')


<div class="container" style="margin-top:20px;">
  <div class="row">
      <div class="col-sm-12 article-details">
         </div>

    <div class="col-sm-8 col-sm-push-4 article-details">
            <!-- image slider -->
            <div class="multimedia-holder">
        <div class="multimedia-slider">
                                      <div class="slide">
                        <a href="#">
              <span data-index="1" class="image-expander"></span>
              <img data-index="1" src="{{ Voyager::image( $post->image ) }}" width="100%" />
              <div style="hello">
                 <div class="grad">
                  <p>
                  ފޮރިން މިނިސްޓަރު ޝާހިދާއި ފިނޭންސް މިނިސްޓަރު އަމީރު މަގާމުގެ ހުވާކުރެއްވުމަށް ފަހު ސަލާމް ކުރައްވަނީ: ބަޖެޓަށް އިތުރު 200 މިލިއަން ޑޮލަރު ބޭނުންވާ ކަމަށް ޝާހިދު ވިދާޅުވި.---ފޮޓޯ: ހުސައިން ވަހީދު/މިހާރު
                  </p>
                </div>
              </div>
            </a>
           </div>
 		</div>        
      </div>

            
            <!-- end image slider -->

      <h1>{{ $post->title }}</h1>

      <div class="by-line">
        <address>{{ $post->author->name }}
                                                  &nbsp;
                  </address>
        <span class="date-time">{{$ldate = date('l jS \\of F Y ')}}</span>
                  <span class="comments no-icon"><b>101</b> comments</span>
              </div>

      

      <div class="row">
        
          
        </div>

        <article class="col-md-12 col-md-pull-1 col-sm-12">


          
{!! $post->body !!}
          
            
                          

         </article>
      </div>




@yield('content')


		<!-- Footer -->
@include('partials.footer')

		

	</body>
</html>