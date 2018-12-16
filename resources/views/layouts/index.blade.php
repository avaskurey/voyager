
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

		<!-- Banner -->



@yield('content')




<body class=" ">

	@foreach ($posts as $post)
				

			@endforeach

		

    <div class="container ">
      <div class="row" style="margin-top:-10px;">

      <div class="col-sm-12 col-md-9 col-xs-12 col-md-push-3">
        <div class="row">
    <div class="col-sm-12">
      <div class="main-news-row main_news_enhanced_size_8">
      <div class="row">
      <div class="col-sm-8 col-xs-12">
        <div class="">
                                              <a href="news/47151.html">
                <div class="image">
                  <img src="{{Voyager::image($post->image)}}"/>
                </div>
              </a>
                                        </div>
      </div>
      <div class="col-sm-4 col-xs-12">
        <div class="padding-left-on-mobile" style="padding-right:20px;position:relative;">

          
          <a href="/post/{{ $post->slug }}" class="title" style="margin-top:20px;">&quot;{{ $post->title }}&quot;</a>
          <div class="candt clearfix">
            <div class="time"><p>{{ $post->created_at->diffForHumans() }}</p></div>
                          <div class="comments">
                <p>101</p>
              </div>
                      </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
      </div>

  

    <div class="col-sm-12 col-xs-12">
        <div class="row">
      
   @foreach ($posts as $post)
   <div class="col-md-2 col-sm-3 col-xs-6 float-right small">
    <div class="main_news_size_2"> 
   
        <div class="image">
          <a href="/post/{{ $post->slug }}">
            <img src="{{Voyager::image($post->image)}}" width="100%"/>
          </a>
          </div>
       <div class="candt">
        <div class="time"><p>{{ $post->created_at->diffForHumans() }}</p></div>
          <div class="comments">
          
        </div>
                      </div>
      <div class="clr"></div>
      <a href="/post/{{ $post->slug }}" class="title">{{ $post->title }}</a>
      <div class="clr"></div>
    </div>
  </div>
 	
@endforeach

   


    <!-- END MAIN CONTENT -->


  </div>
</div>

<br>

<!-- start home center banner -->

<div>
  <div class="container ">

    <div class="col-sm-12 col-xs-12">

      <!-- latest and trending -->
              <div class="row" style="margin-top:20px;">
  <div class="col-sm-12 col-xs-12" style="padding: 0px;">

    <div class="row">
      <div class="col-xs-12">
        <div style="background:#F1F1F1;height:45px;border-bottom:4px solid #000;margin-bottom:20px;">
          <div class="row">
            <div class="col-sm-6 col-xs-12 col-sm-push-6">
              <ul class="nav nav-tabs tabbed-articles no-margin" role="tablist">
                <li role="presentation" class="active"><a href="#latest" aria-controls="home" role="tab" data-toggle="tab"><span>އެންމެ ފަސް</span></a></li>
                <li role="presentation"><a href="#trending" aria-controls="home" role="tab" data-toggle="tab"><span>ޓްރެންޑިންގ</span></a></li>
                <li role="presentation"><a href="#7days" aria-controls="home" role="tab" data-toggle="tab"><span>7 ދުވަސް</span></a></li>
              </ul>
            </div>

            <div class="col-sm-6 hidden-xs col-sm-pull-6">
              <div style="line-height:45px;margin-left:15px;">
                <!--<span style="color:#6A6A6A;">Follow us</span>-->
                <a href="https://facebook.com/mihaaru" target="_blank"><img src="build/assets/images/facebook-dark.svg" height="27" style="position: relative; top: -2px; margin: 0px 1px;"/></a>
                <a href="https://twitter.com/Mihaarunews" target="_blank"><img src="build/assets/images/twitter-dark.svg" height="27" style="position: relative; top: -2px; margin: 0px 1px;"/></a>
              </div>
            </div>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>


    <div class="tab-content lp">
      <div role="tabpanel" class="tab-pane active" id="latest">
        <div class="row">
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="world/47163.html">
                        <img src="/photos/2018/12/15/218929_3_a96a2053b2b9c8f8da0de86b75835b047b671bff_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">11 minutes ago</span>
                                      </div>

                  <div class="title"><a href="world/47163.html">އިންޑިއާގައި ކުނިބަތެއް ކައިގެން 11 މީހުން މަރުވެއްޖެ</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="world/47160.html">
                        <img src="/photos/2018/12/15/218928_3_44344cc642a6f5b8b14db7d375f9422f0f799a90_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">41 minutes ago</span>
                                          <span class="comments" style="float:left;"><b>3</b></span>
                                      </div>

                  <div class="title"><a href="world/47160.html">އެންމެ ފަހުން ރާޖަޕަކްސާ އިސްތިއުފާ ދެއްވައިފި</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="world/47157.html">
                        <img src="/photos/2018/12/15/218925_3_2c95938d1da2e76db4cb4780a9b237279c26f548_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">1 hour ago</span>
                                          <span class="comments" style="float:left;"><b>2</b></span>
                                      </div>

                  <div class="title"><a href="world/47157.html">މެކްސިކޯގެ ރިޔާސީ ގަނޑުވަރު އާއްމުންނަށް ހުޅުވާލައިފި</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="sports/47149.html">
                        <img src="/photos/2018/12/12/218721_3_2368e98766828efab9bc98d83748ae251002f6ae_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">1 hour ago</span>
                                          <span class="comments" style="float:left;"><b>1</b></span>
                                      </div>

                  <div class="title"><a href="sports/47149.html">ފައިނަލުގެ ފުރަތަމަ ޖާގަ ޓީރެކްސް އަށް</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="sports/47146.html">
                        <img src="/photos/2018/12/15/218915_3_e96559391dab644e1f3ad4342e3c2bdc758ad600_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">1 hour ago</span>
                                      </div>

                  <div class="title"><a href="sports/47146.html">ޗެލްސީން ބޯންމައުތުގެ ފޯވާޑް ވިލްސަން އަށް ބިޑްކުރަނީ</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="sports/47145.html">
                        <img src="/photos/2018/12/15/218914_3_f50eb573e645c3ec0ea5610244db980565ea5ec6_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">2 hours ago</span>
                                      </div>

                  <div class="title"><a href="sports/47145.html">އެފްރިކާގެ މޮޅު ކުޅުންތެރިއަކަށް މި ފަހަރު ވެސް ސަލާހު</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="sports/47147.html">
                        <img src="/photos/2018/08/10/198339_3_33ddb3323916f8a724b3b23885aac24988b59f27_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">2 hours ago</span>
                                      </div>

                  <div class="title"><a href="sports/47147.html">މުހިއްމީ ތަށީގެ ވާހަކަ ދެއްކުން: މޮރީނިއޯ</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="world/47155.html">
                        <img src="/photos/2018/12/15/218923_3_f76f70fc175dcf21b7217cc4e2a7c5fc3d576f42_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">2 hours ago</span>
                                          <span class="comments" style="float:left;"><b>3</b></span>
                                      </div>

                  <div class="title"><a href="world/47155.html">އިޒްރޭލުގެ ވެރިރަށަކީ ހުޅަނގު ގުދުސް: އޮސްޓްރޭލިއާ</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="business/47144.html">
                        <img src="/photos/2016/08/02/119006_3_b5c98a085633bd3a1ddac675542ab9b5082b6fd1_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">3 hours ago</span>
                                          <span class="comments" style="float:left;"><b>4</b></span>
                                      </div>

                  <div class="title"><a href="business/47144.html">ގެސްޓްހައުސް އިންސްޕެކްޓް ކުރުމުގެ ބާރު ކައުންސިލްތަކަށް</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="business/47143.html">
                        <img src="/photos/2018/12/15/218909_3_74c5d251954db81e16f5724f79b7dcb9664a3443_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">4 hours ago</span>
                                      </div>

                  <div class="title"><a href="business/47143.html">ގެސްޓްހައުސް ސިމްޕޯސިއަމް މި މަހުގެ 29 ގައި ބާއްވަނީ</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="lifestyle/47137.html">
                        <img src="/photos/2018/12/14/218902_3_604b9170f0df29fdabacc618c915b500a6fe9398_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">4 hours ago</span>
                                      </div>

                  <div class="title"><a href="lifestyle/47137.html">އެންމެ ބޮޑު އާމްދަނީއެއް ކެންޑަލް ޖެނާ އަށް</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="lifestyle/47119.html">
                        <img src="/photos/2018/12/14/218869_3_e6311c5f80755178532bf9f9bcadf55ea869df5e_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">4 hours ago</span>
                                      </div>

                  <div class="title"><a href="lifestyle/47119.html">ދުވަސް ނުފުރާ އުފަންވާ ކުދިންގެ ފަރުވާއަކަށް ކެފީން</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="lifestyle/47134.html">
                        <img src="/photos/2018/12/14/218900_3_2c909d6922263890738810129e72dc5bd0ab488b_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">4 hours ago</span>
                                          <span class="comments" style="float:left;"><b>3</b></span>
                                      </div>

                  <div class="title"><a href="lifestyle/47134.html">ލޯބިވެވުނު މީހާ ދެކޭ ހިތުން ވަޒީފާ ވެސް ދޫކޮށްލައިފި</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="entertainment/47072.html">
                        <img src="/photos/2018/12/13/218774_3_572e6484686968e5abda18e2d019718ad483ffbb_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">4 hours ago</span>
                                      </div>

                  <div class="title"><a href="entertainment/47072.html">&quot;އެލިޒަބަތު&quot; ސީރީޒްގެ އިތުރު ފިލްމެއް ހަދަން ނިންމައިފި</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="entertainment/47130.html">
                        <img src="/photos/2018/12/14/218882_3_42e9ad51d4908ee7d5a925fec12099c88640cd51_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">4 hours ago</span>
                                      </div>

                  <div class="title"><a href="entertainment/47130.html">ބޮލީވުޑްގެ ޚަބަރުތައް ކުރުކޮށް</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="entertainment/47132.html">
                        <img src="/photos/2018/12/14/218884_3_0d35d035f46b414a1661de0e9ea49c419edf09ac_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">4 hours ago</span>
                                          <span class="comments" style="float:left;"><b>1</b></span>
                                      </div>

                  <div class="title"><a href="entertainment/47132.html">ކާޖޮލް އާއި އަޖޭ ޕްލާސްޓިކާ ދެކޮޅަށް</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="entertainment/47058.html">
                        <img src="/photos/2018/12/13/218741_3_96f7fd4da902090f522614602b79772944233829_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">4 hours ago</span>
                                      </div>

                  <div class="title"><a href="entertainment/47058.html">&quot;ކޮފީ ވިތު ކަރަން&quot; ގައި ކަރީނާ އާއި ޕްރިޔަންކާ</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="world/47141.html">
                        <img src="/photos/2018/12/14/218906_3_859edb23a2500f0bc6eb365fca0fd257f0883cb9_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">14 hours ago</span>
                                          <span class="comments" style="float:left;"><b>1</b></span>
                                      </div>

                  <div class="title"><a href="world/47141.html">ހުޅަނގު އައްސޭރިން ފަލަސްތީނުގެ ގިނަ ބަޔަކު ހައްޔަރު</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="world/47139.html">
                        <img src="/photos/2018/12/02/217474_3_52074879293354b5920822536d7d32acfae62fb0_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">15 hours ago</span>
                                          <span class="comments" style="float:left;"><b>3</b></span>
                                      </div>

                  <div class="title"><a href="world/47139.html">ބޮޑު ވަޒީރުގެ މަގާމުން ރާޖަޕަކްސާ އިސްތިއުފާ ދެއްވަނީ</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="world/47129.html">
                        <img src="/photos/2018/12/05/217895_3_b9ff0e737477d01d09b0dcf092ada574ab427b8e_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">19 hours ago</span>
                                      </div>

                  <div class="title"><a href="world/47129.html">އާ ބޮޑު ވަޒީރަކު ހޯމަ ދުވަހު ސިރިސޭނާ އައްޔަން ކުރަނީ</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="world/47106.html">
                        <img src="/photos/2018/10/24/211850_3_a6f69b23b8f003523e9a8a47324087cba44a10ec_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">19 hours ago</span>
                                          <span class="comments" style="float:left;"><b>1</b></span>
                                      </div>

                  <div class="title"><a href="world/47106.html">ސައުދީގެ ބިޔަ އިންވެސްޓްމަންޓެއް ޕާކިސްތާނަށް</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="sports/47114.html">
                        <img src="/photos/2017/10/02/160814_3_ae21863e2a49411badfd09ed9877efdfd68b9b08_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">1 day ago</span>
                                      </div>

                  <div class="title"><a href="sports/47114.html">ސަތޯގެ ވާހަކަތަކަށް އަދީލް ރައްދުދީފި</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="sports/47116.html">
                        <img src="/photos/2018/12/14/218866_3_f5d78ed1da6ce71b4730db8bd4459bd8f5144b7b_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">1 day ago</span>
                                      </div>

                  <div class="title"><a href="sports/47116.html">ރެއާލުން އެ ފެންނަނީ ރޮނާލްޑޯ ނެތްތަން: ވެން ޑަ ވާޓް</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="sports/47115.html">
                        <img src="/photos/2018/12/13/218865_3_9c184665fc00ee16daeb271e2c5f769050d46dd9_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">1 day ago</span>
                                      </div>

                  <div class="title"><a href="sports/47115.html">ބޮޑު ބަދަލަށް ގައުމުތަކުން ތާއީދު: އިންފަންޓީނޯ</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="sports/47120.html">
                        <img src="/photos/2018/12/14/218871_3_af1264550159f6de199f9163e891d7bf0cba098d_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">1 day ago</span>
                                      </div>

                  <div class="title"><a href="sports/47120.html">ޗެލްސީ އަށް ހުއްޓުމެއް، މިލާނަށް މުބާރާތް ނިމިއްޖެ</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="entertainment/47068.html">
                        <img src="/photos/2018/12/13/218756_3_fff7fdf537ad68ae68b26fa4aa363b949652d8ab_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">1 day ago</span>
                                      </div>

                  <div class="title"><a href="entertainment/47068.html">&quot;ޑޮކްޓާ ސްޓްރޭންޖް&quot; ގެ ދެވަނަ ބައި ވެސް ސްކޮޓަށް</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="entertainment/47054.html">
                        <img src="/photos/2018/12/13/218740_3_0eb3f68dbbeae80d824f18e8d09ce5b6faba5277_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">1 day ago</span>
                                      </div>

                  <div class="title"><a href="entertainment/47054.html">ބޮލީވުޑްގެ ޚަބަރުތައް ކުރުކޮށް</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="entertainment/46898.html">
                        <img src="/photos/2018/12/10/218428_3_229baf297a18db4cf10b754b16106bf950222070_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">1 day ago</span>
                                      </div>

                  <div class="title"><a href="entertainment/46898.html">ސަލްމާންގެ &quot;ނޯޓްބުކް&quot; މާޗް 29 ގައި</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="entertainment/47087.html">
                        <img src="/photos/2018/12/13/218817_3_3195c15bd9d2916bc7e6f67c406d9520c9d4b4b3_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">1 day ago</span>
                                      </div>

                  <div class="title"><a href="entertainment/47087.html">ކަޕިލް ޝަރުމާ ކައިވެނިކޮށްފި</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="entertainment/47030.html">
                        <img src="/photos/2018/12/12/218701_3_3329f76df24a3817061315fcd63131a1bf8f6acd_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">1 day ago</span>
                                      </div>

                  <div class="title"><a href="entertainment/47030.html">ޔޫއްޕެގެ &quot;ނަފުރަތުވުމުން&quot; ވެސް އަންނަ އަހަރު</a></div>
                </div>


              </div>
            </div>
                    <div class="col-xs-12 text-center">
             <a href="#" id="latest-load-more" class="btn btn-default load-more">އިތުރު ލިޔުންތައް</a>
          </div>
        </div>
      </div>

            <div role="tabpanel" class="tab-pane" id="trending">
        <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="news/47142.html">
                        <img src="/photos/2018/12/15/218912_3_fbe899eb2104d4490303df854968c58aa273386e_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">11 hours ago</span>
                                          <span class="comments" style="float:left;"><b>21</b></span>
                                      </div>

                  <div class="title"><a href="news/47142.html">ފުރަން ދިޔަ ދިވެހިން ކޮޗިން އެއާޕޯޓްގައި ތާށިވެފައި!</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="news/47140.html">
                        <img src="/photos/2018/10/15/210892_3_a02aedc5bcb5e55566693a831593ee4a8a2577b4_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">14 hours ago</span>
                                          <span class="comments" style="float:left;"><b>60</b></span>
                                      </div>

                  <div class="title"><a href="news/47140.html">ޔާމީންގެ ދިފާއުގައި ޕީޕީއެމުން މަގުމައްޗަށް</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="news/47061.html">
                        <img src="/photos/2018/12/13/218772_3_1cbf458298b1862ae9c888b98d26913dc0c1017e_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">2 days ago</span>
                                          <span class="comments" style="float:left;"><b>25</b></span>
                                      </div>

                  <div class="title"><a href="news/47061.html">ވެލާ ސަލާމަތް ކުރާ ކޯޓު އޮފިސަރު</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="news/47061.html">
                        <img src="/photos/2018/12/13/218772_3_1cbf458298b1862ae9c888b98d26913dc0c1017e_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">2 days ago</span>
                                          <span class="comments" style="float:left;"><b>25</b></span>
                                      </div>

                  <div class="title"><a href="news/47061.html">ވެލާ ސަލާމަތް ކުރާ ކޯޓު އޮފިސަރު</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="news/47124.html">
                        <img src="/photos/2017/08/25/156596_3_a84373880a308354ef6e6872a9f0501b06afd1eb_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">1 day ago</span>
                                          <span class="comments" style="float:left;"><b>87</b></span>
                                      </div>

                  <div class="title"><a href="news/47124.html">ރަސްރަނި ބަގީޗާގެ ނަން އަލުން ސަލްޓަން ޕާކުގެ ނަމަށް</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="news/47128.html">
                        <img src="/photos/2018/09/20/205003_3_56357092986597931e2869a8eebd12fef8aacfa6_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">19 hours ago</span>
                                          <span class="comments" style="float:left;"><b>32</b></span>
                                      </div>

                  <div class="title"><a href="news/47128.html">އަދީބު ދިން ޑޮލަރުތަކެއް ބޭނުން ކުރިން: ޝައިނީ</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="news/47126.html">
                        <img src="/photos/2018/12/03/217695_3_9627164157b852ef03f55dc97abfa5d18cf9d174_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">21 hours ago</span>
                                          <span class="comments" style="float:left;"><b>116</b></span>
                                      </div>

                  <div class="title"><a href="news/47126.html">ޔާމީންގެ ބޭންކް އެކައުންޓްތައް ފްރީޒްކޮށްފި</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="news/47125.html">
                        <img src="/photos/2017/08/07/154587_3_8c1242ea7731896a5d2fee8dfe94be04ebedd398_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">21 hours ago</span>
                                          <span class="comments" style="float:left;"><b>48</b></span>
                                      </div>

                  <div class="title"><a href="news/47125.html">ހައްޖަން ދާން ޕެންޝަން ފައިސާ ބޭނުންކުރަން ފާސްކޮށްފި</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="news/47111.html">
                        <img src="/photos/2016/10/11/125710_3_df0b6158a13e927383a8705fd1910436301dda27_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">1 day ago</span>
                                          <span class="comments" style="float:left;"><b>159</b></span>
                                      </div>

                  <div class="title"><a href="news/47111.html">ޔާމީން ފުލުސް އޮފީހަށް ހާޒިރުވާން އަންގައިފި</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="news/47136.html">
                        <img src="/photos/2018/12/14/218890_3_2aa59926ce705a5d77c97333393a147f2ac1a3fe_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">17 hours ago</span>
                                          <span class="comments" style="float:left;"><b>12</b></span>
                                      </div>

                  <div class="title"><a href="news/47136.html">ޝައިނީއާ މެދު ފިޔަވަޅު އަޅަން މަޝްވަރާ ކުރަނީ</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="news/47135.html">
                        <img src="/photos/2018/11/20/215867_3_cc8ad3c83541d321e638773f2d51b33c7ebc50bf_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">17 hours ago</span>
                                          <span class="comments" style="float:left;"><b>53</b></span>
                                      </div>

                  <div class="title"><a href="news/47135.html">ދިވެހިންނަށް އިންޑިއާގެ ވިސާގެ ބޮޑެތި ލުއިތަކެއް</a></div>
                </div>


              </div>
            </div>
                      <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
              <div class="row grid-view-listing no_min">
                <div class="col-sm-6 col-sm-push-6">
                                                            <a href="news/47135.html">
                        <img src="/photos/2018/11/20/215867_3_cc8ad3c83541d321e638773f2d51b33c7ebc50bf_thumb.jpg" width="100%"/>
                      </a>
                                                      </div>

                <div class="col-sm-6 col-sm-pull-6 text-right">
                  <div class="clearfix" style="margin-bottom:10px">
                    <span class="time" style="width:90px;">17 hours ago</span>
                                          <span class="comments" style="float:left;"><b>53</b></span>
                                      </div>

                  <div class="title"><a href="news/47135.html">ދިވެހިންނަށް އިންޑިއާގެ ވިސާގެ ބޮޑެތި ލުއިތަކެއް</a></div>
                </div>


              </div>
            </div>
                    <div class="col-xs-12 text-center">
            <a href="#" id="trending-load-more" class="btn btn-default load-more">އިތުރު ލިޔުންތައް</a>
          </div>
        </div>
      </div>
      
              <div role="tabpanel" class="tab-pane" id="7days">
          <div class="row">
                          <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
                <div class="row grid-view-listing no_min">
                  <div class="col-sm-6 col-sm-push-6">
                                                                  <a href="news/47061.html">
                          <img src="/photos/2018/12/13/218772_3_1cbf458298b1862ae9c888b98d26913dc0c1017e_thumb.jpg" width="100%"/>
                        </a>
                                                            </div>

                  <div class="col-sm-6 col-sm-pull-6 text-right">
                    <div class="clearfix" style="margin-bottom:10px">
                      <span class="time" style="width:90px;">2 days ago</span>
                                              <span class="comments" style="float:left;"><b>25</b></span>
                                          </div>

                    <div class="title"><a href="news/47061.html">ވެލާ ސަލާމަތް ކުރާ ކޯޓު އޮފިސަރު</a></div>
                  </div>

                </div>
              </div>
                          <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
                <div class="row grid-view-listing no_min">
                  <div class="col-sm-6 col-sm-push-6">
                                                                  <a href="news/47061.html">
                          <img src="/photos/2018/12/13/218772_3_1cbf458298b1862ae9c888b98d26913dc0c1017e_thumb.jpg" width="100%"/>
                        </a>
                                                            </div>

                  <div class="col-sm-6 col-sm-pull-6 text-right">
                    <div class="clearfix" style="margin-bottom:10px">
                      <span class="time" style="width:90px;">2 days ago</span>
                                              <span class="comments" style="float:left;"><b>25</b></span>
                                          </div>

                    <div class="title"><a href="news/47061.html">ވެލާ ސަލާމަތް ކުރާ ކޯޓު އޮފިސަރު</a></div>
                  </div>

                </div>
              </div>
                          <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
                <div class="row grid-view-listing no_min">
                  <div class="col-sm-6 col-sm-push-6">
                                                                  <a href="news/47111.html">
                          <img src="/photos/2016/10/11/125710_3_df0b6158a13e927383a8705fd1910436301dda27_thumb.jpg" width="100%"/>
                        </a>
                                                            </div>

                  <div class="col-sm-6 col-sm-pull-6 text-right">
                    <div class="clearfix" style="margin-bottom:10px">
                      <span class="time" style="width:90px;">1 day ago</span>
                                              <span class="comments" style="float:left;"><b>157</b></span>
                                          </div>

                    <div class="title"><a href="news/47111.html">ޔާމީން ފުލުސް އޮފީހަށް ހާޒިރުވާން އަންގައިފި</a></div>
                  </div>

                </div>
              </div>
                          <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
                <div class="row grid-view-listing no_min">
                  <div class="col-sm-6 col-sm-push-6">
                                                                  <a href="entertainment/46983.html">
                          <img src="/photos/2018/12/11/218539_3_c422f97a701d51aada1f680d1ae4eacf4b64db8b_thumb.jpg" width="100%"/>
                        </a>
                                                            </div>

                  <div class="col-sm-6 col-sm-pull-6 text-right">
                    <div class="clearfix" style="margin-bottom:10px">
                      <span class="time" style="width:90px;">2 days ago</span>
                                          </div>

                    <div class="title"><a href="entertainment/46983.html">ބޮލީވުޑްގެ ޚަބަރުތައް ކުރުކޮށް</a></div>
                  </div>

                </div>
              </div>
                          <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
                <div class="row grid-view-listing no_min">
                  <div class="col-sm-6 col-sm-push-6">
                                                                  <a href="news/47124.html">
                          <img src="/photos/2017/08/25/156596_3_a84373880a308354ef6e6872a9f0501b06afd1eb_thumb.jpg" width="100%"/>
                        </a>
                                                            </div>

                  <div class="col-sm-6 col-sm-pull-6 text-right">
                    <div class="clearfix" style="margin-bottom:10px">
                      <span class="time" style="width:90px;">1 day ago</span>
                                              <span class="comments" style="float:left;"><b>77</b></span>
                                          </div>

                    <div class="title"><a href="news/47124.html">ރަސްރަނި ބަގީޗާގެ ނަން އަލުން ސަލްޓަން ޕާކުގެ ނަމަށް</a></div>
                  </div>

                </div>
              </div>
                          <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="">
                <div class="row grid-view-listing no_min">
                  <div class="col-sm-6 col-sm-push-6">
                                                                  <a href="news/47099.html">
                          <img src="/photos/2018/11/20/215929_3_801b2054186edd0c97ac8a09ed99f99f3311112b_thumb.jpg" width="100%"/>
                        </a>
                                                            </div>

                  <div class="col-sm-6 col-sm-pull-6 text-right">
                    <div class="clearfix" style="margin-bottom:10px">
                      <span class="time" style="width:90px;">1 day ago</span>
                                              <span class="comments" style="float:left;"><b>7</b></span>
                                          </div>

                    <div class="title"><a href="news/47099.html">ދެ ސަފީރަކަށް ރުހުން ނުދޭން ކޮމިޓީން ފާސްކޮށްފި</a></div>
                  </div>

                </div>
              </div>
                          <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
                <div class="row grid-view-listing no_min">
                  <div class="col-sm-6 col-sm-push-6">
                                                                  <a href="news/47089.html">
                          <img src="/photos/2018/11/17/215428_3_7da7aedf45295e5224e2c92f680c8159082594d0_thumb.jpg" width="100%"/>
                        </a>
                                                            </div>

                  <div class="col-sm-6 col-sm-pull-6 text-right">
                    <div class="clearfix" style="margin-bottom:10px">
                      <span class="time" style="width:90px;">1 day ago</span>
                                              <span class="comments" style="float:left;"><b>86</b></span>
                                          </div>

                    <div class="title"><a href="news/47089.html">ލަތީފް އެމްޑީޕީއަށް: ޑިމޮކްރަސީދަނީ ކޮށައި ކުދިކުރަމުން</a></div>
                  </div>

                </div>
              </div>
                          <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
                <div class="row grid-view-listing no_min">
                  <div class="col-sm-6 col-sm-push-6">
                                                                  <a href="news/47078.html">
                          <img src="/photos/2018/12/13/218816_3_7e00717939310d047bf9b3f46905bb28eb646aea_thumb.jpg" width="100%"/>
                        </a>
                                                            </div>

                  <div class="col-sm-6 col-sm-pull-6 text-right">
                    <div class="clearfix" style="margin-bottom:10px">
                      <span class="time" style="width:90px;">1 day ago</span>
                                              <span class="comments" style="float:left;"><b>37</b></span>
                                          </div>

                    <div class="title"><a href="news/47078.html">ޗާންދަނީ މަގާއި ލިލީ މަގުގެ ޓްރެފިކަށް ބަދަލު ގެންނަނީ</a></div>
                  </div>

                </div>
              </div>
                          <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
                <div class="row grid-view-listing no_min">
                  <div class="col-sm-6 col-sm-push-6">
                                                                  <a href="business/47080.html">
                          <img src="/photos/2018/12/13/218797_3_4a84c95b83739714bec20dddbb2fb62738d4bc8b_thumb.jpg" width="100%"/>
                        </a>
                                                            </div>

                  <div class="col-sm-6 col-sm-pull-6 text-right">
                    <div class="clearfix" style="margin-bottom:10px">
                      <span class="time" style="width:90px;">1 day ago</span>
                                              <span class="comments" style="float:left;"><b>9</b></span>
                                          </div>

                    <div class="title"><a href="business/47080.html">ޒުވާން ކެޔޮޅު އަކްބަރުގެ ދުލުން!</a></div>
                  </div>

                </div>
              </div>
                          <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
                <div class="row grid-view-listing no_min">
                  <div class="col-sm-6 col-sm-push-6">
                                                                  <a href="business/47080.html">
                          <img src="/photos/2018/12/13/218797_3_4a84c95b83739714bec20dddbb2fb62738d4bc8b_thumb.jpg" width="100%"/>
                        </a>
                                                            </div>

                  <div class="col-sm-6 col-sm-pull-6 text-right">
                    <div class="clearfix" style="margin-bottom:10px">
                      <span class="time" style="width:90px;">1 day ago</span>
                                              <span class="comments" style="float:left;"><b>9</b></span>
                                          </div>

                    <div class="title"><a href="business/47080.html">ޒުވާން ކެޔޮޅު އަކްބަރުގެ ދުލުން!</a></div>
                  </div>

                </div>
              </div>
                          <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
                <div class="row grid-view-listing no_min">
                  <div class="col-sm-6 col-sm-push-6">
                                                                  <a href="news/47126.html">
                          <img src="/photos/2018/12/03/217695_3_9627164157b852ef03f55dc97abfa5d18cf9d174_thumb.jpg" width="100%"/>
                        </a>
                                                            </div>

                  <div class="col-sm-6 col-sm-pull-6 text-right">
                    <div class="clearfix" style="margin-bottom:10px">
                      <span class="time" style="width:90px;">21 hours ago</span>
                                              <span class="comments" style="float:left;"><b>94</b></span>
                                          </div>

                    <div class="title"><a href="news/47126.html">ޔާމީންގެ ބޭންކް އެކައުންޓްތައް ފްރީޒްކޮށްފި</a></div>
                  </div>

                </div>
              </div>
                          <div class="col-md-4 col-sm-6 col-xs-6 float-right small" style="display:none">
                <div class="row grid-view-listing no_min">
                  <div class="col-sm-6 col-sm-push-6">
                                                                  <a href="news/47128.html">
                          <img src="/photos/2018/09/20/205003_3_56357092986597931e2869a8eebd12fef8aacfa6_thumb.jpg" width="100%"/>
                        </a>
                                                            </div>

                  <div class="col-sm-6 col-sm-pull-6 text-right">
                    <div class="clearfix" style="margin-bottom:10px">
                      <span class="time" style="width:90px;">19 hours ago</span>
                                              <span class="comments" style="float:left;"><b>25</b></span>
                                          </div>

                    <div class="title"><a href="news/47128.html">އަދީބު ދިން ޑޮލަރުތަކެއް ބޭނުން ކުރިން: ޝައިނީ</a></div>
                  </div>

                </div>
              </div>
                        <div class="col-xs-12 text-center">
              <a href="#" id="weekly-load-more" class="btn btn-default load-more">އިތުރު ލިޔުންތައް</a>
            </div>
          </div>
        </div>
      
    </div>
  </div>
</div>
            <!-- end of latest and trending -->

      
    </div>

    <div class="col-xs-12 visible-xs">
      <div class="social-media-links">
      <span>Follow us on</span>
        <a href="https://facebook.com/mihaaru" target="_blank">
          <img src="build/assets/images/facebook-dark.svg" height="30" /><br />facebook
        </a>

        <a href="https://twitter.com/Mihaarunews" target="_blank">
          <img src="build/assets/images/twitter-dark.svg" height="30" /><br />twitter
        </a>

        <a href="http://viber.com/mihaaru" target="_blank">
          <img src="build/assets/images/viber-dark.svg" height="34" /><br />viber
        </a>

        <a href="http://telegram.me/mihaarulive" target="_blank">
          <img src="build/assets/images/telegram-dark.svg" height="30"/><br />telegram
        </a>
      </div>
    </div>
    <!-- END SIDE CONTENT -->
  </div>
</div>



  <div class="container">
  	<div class="row">
		<div class="col-xs-12">
      <div class="cat_news_holder">

        <div class="section-nav row">
          <div class="col-sm-6 col-sm-push-6">
            <div class="title"><a href="world.html">ދުނިޔެ</a></div>
          </div>

                      <div class="col-sm-6 col-sm-pull-6 hidden-xs">
              <ul class="sub-sections">
                                  <li><a href="donald_trump.html" target="_self">ޑޮނަލްޑް ޓްރަމްޕް</a></li>
                                  <li><a href="middle_east.html" target="_self">މެދު އިރުމަތި</a></li>
                                  <li><a href="europe.html" target="_self">ޔޫރަޕް</a></li>
                                  <li><a href="united_states.html" target="_self">އެމެރިކާ</a></li>
                              </ul>
            </div>
          
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="cat_news_holder">
				<div class="col-sm-6 col-sm-push-6">
          <div class="cat_main_news_holder main_news_size_8" style="margin-top:20px;">
             

              
              <a href="world/47155.html">
                <div class="image">
                  <img src="/photos/2018/12/15/218923_3_f76f70fc175dcf21b7217cc4e2a7c5fc3d576f42_medium.jpg">
                </div>
              </a>

              <div class="candt clearfix">
                <div class="time"><p>2 hours ago</p></div>
                                <div class="comments">
                  <p>3</p>
                </div>
                              </div>

              <a href="world/47155.html" class="title" style="margin-top:20px;margin-bottom:5px;">އިޒްރޭލުގެ ވެރިރަށަކީ ހުޅަނގު ގުދުސް: އޮސްޓްރޭލިއާ</a>
                          
            <p class="summary">ސިޑްނީ (ޑިސެމްބަރު 15) - އިޒްރޭލުގެ ވެރިރަށަކީ ހުޅަނގު ގުދުސް ކަމަށް އޮސްޓްރޭލިއާ އިން ބަލައިގަންނާނެ ކަމަށް އެ ގައުމުގެ ބޮޑު ވަޒީރު ސްކޮޓް މޮރިސަން ވިދާޅުވެއްޖެ އެވެ.</p>
						<div class="clr"></div>
					</div>
				</div>
				<div class="col-sm-6 col-sm-pull-6">
          					<div class="cat_latest_news_holder">
            <div class="row">
            <div class="main_news_size_4 no_min">
              <div class="col-sm-6 col-xs-6 col-xs-push-6">
                                                    <div class="image">
                    <a href="world/47157.html">
                    <img src="/photos/2018/12/15/218925_3_2c95938d1da2e76db4cb4780a9b237279c26f548_thumb.jpg">
                    </a>
                  </div>
                                  							</div>
							<div class="col-sm-6 col-xs-6 col-xs-pull-6">
								<div class="candt">
                  <div class="time inline" style="margin-bottom:5px;">1 hour ago</div>
                                    <a href="world/47157.html" class="title">މެކްސިކޯގެ ރިޔާސީ ގަނޑުވަރު އާއްމުންނަށް ހުޅުވާލައިފި</a>
                  <p class="summary hidden-sm hidden-xs">މެކްސިކޯ (ޑިސެމްބަރު 15) - މެކްސިކޯގެ ރިޔާސީ ގަނޑުވަރުގެ ދޮރުތައް އާ ރައީސް...</p>
								</div>
							</div>
            </div>
            </div>
					</div>
          					<div class="cat_latest_news_holder">
            <div class="row">
            <div class="main_news_size_4 no_min">
              <div class="col-sm-6 col-xs-6 col-xs-push-6">
                                                    <div class="image">
                    <a href="world/47160.html">
                    <img src="/photos/2018/12/15/218928_3_44344cc642a6f5b8b14db7d375f9422f0f799a90_thumb.jpg">
                    </a>
                  </div>
                                  							</div>
							<div class="col-sm-6 col-xs-6 col-xs-pull-6">
								<div class="candt">
                  <div class="time inline" style="margin-bottom:5px;">41 minutes ago</div>
                                    <a href="world/47160.html" class="title">އެންމެ ފަހުން ރާޖަޕަކްސާ އިސްތިއުފާ ދެއްވައިފި</a>
                  <p class="summary hidden-sm hidden-xs">ކޮލަމްބޯ (ޑިސެމްބަރު 15) - ލަންކާގައި އުފެދިފައިވާ ސިޔާސީ މައްސަލަތައް ހައްލު...</p>
								</div>
							</div>
            </div>
            </div>
					</div>
          					<div class="cat_latest_news_holder">
            <div class="row">
            <div class="main_news_size_4 no_min">
              <div class="col-sm-6 col-xs-6 col-xs-push-6">
                                                    <div class="image">
                    <a href="world/47163.html">
                    <img src="/photos/2018/12/15/218929_3_a96a2053b2b9c8f8da0de86b75835b047b671bff_thumb.jpg">
                    </a>
                  </div>
                                  							</div>
							<div class="col-sm-6 col-xs-6 col-xs-pull-6">
								<div class="candt">
                  <div class="time inline" style="margin-bottom:5px;">11 minutes ago</div>
                                    <a href="world/47163.html" class="title">އިންޑިއާގައި ކުނިބަތެއް ކައިގެން 11 މީހުން މަރުވެއްޖެ</a>
                  <p class="summary hidden-sm hidden-xs">ކަރްނާޓަކާ (ޑިސެމްބަރު 15) - އިންޑިއާގެ ފައްޅިއެއްގައި ބޭއްވި ހަފުލާއެއްގެ...</p>
								</div>
							</div>
            </div>
            </div>
					</div>
          				</div>
			<!-- </div> -->
		</div>
  </div>
      <div class="adslot adslot-1248x250" data-slot="dhivehi_home_panorama">
  </div>
  

		<!-- Footer -->
@include('partials.footer')

<script type="text/javascript">
var cdn = 'https://s%d.mihaaru.com/';
</script>
<script type="text/javascript" src="build/assets/js/all-74000570d5.js"></script>
<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
  _atrk_opts = { atrk_acct:"u9Rwn1QolK10fn", domain:"mihaaru.com",dynamic: true};
  (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "../d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>



<script>
  $(document).ready(function(){
    $('.app-promo-close').click(function(){
      $.ajax({
        url: '/ajx/rmapp'
      });
      $('.app-promo').attr('class','row app-promo');
      $('.app-promo').hide();
    });
  });
</script>


<script>
  $(document).ready(function(){
    var $window = $(window),
      $card = $('.articles-slick'),
      toggleSlick;

    toggleSlick = function () {
      if ($window.width() < 768) {
        if($card.hasClass('slick-initialized') == false){
          $card.slick({
            dots: true,
            arrows: false
          });
        }
      } else {
        if($card.hasClass('slick-initialized')){
          $card.slick('unslick');
        }
      }
    }
    $window.resize(toggleSlick);
    toggleSlick();
  });
</script>


	</body>
</html>