<?php
include __DIR__ . '/kses.php';

class KsesTests {
	public $num_tests = 1000;

	public $data = array();

	public $results = array();

	public function __construct( $num_tests = 1000 ) {
		$this->num_tests = $num_tests;
	}

	public function run_tests() {
		$tests = array( 'long', 'medium', 'short' );

		foreach ( $tests as $test ) {
			$this->run_test( $this->num_tests, $test );
		}
	}

	public function calculate_results() {
		$tests = array( 'long', 'medium', 'short' );
		$results = array();

		foreach ( $tests as $test ) {
			$results[ $test ] = array(
				'mean'   => $this->get_mean( $this->data[ $test ] ),
				'median' => $this->get_median( $this->data[ $test ] ),
				'min'    => $this->get_min( $this->data[ $test ] ),
				'max'    => $this->get_max( $this->data[ $test ] ),
				'sd'     => $this->get_standard_deviation( $this->data[ $test ] ),
			);
		}

		return $results;
	}

	public function get_results() {
		if ( empty( $this->results ) ) {
			$this->results = $this->calculate_results();
		}

		return $this->results;
	}

	public function run_test( $n, $type ) {
		$text = call_user_func( array( $this, 'get_' . $type . '_text' ) );

		for ( $i = 0; $i < $n; $i++ ) {
			$start = $this->start_timer();
			esc_html( $text );
			$stop = $this->stop_timer();
			$this->add_result( $type, $this->get_elapsed_time( $start, $stop ) );
		}
	}

	public function start_timer() {
		return microtime( true );
	}

	public function stop_timer() {
		return microtime( true );
	}

	public function get_elapsed_time( $start, $stop ) {
		return $stop - $start;
	}

	public function add_result( $bucket, $result ) {
		$this->data[ $bucket ][] = $result;
	}

	public function get_mean( $array ) {
		return array_sum( $array ) / count( $array );
	}

	public function get_median( $array ) {
		rsort( $array );
		$middle = (int) round( count( $array ) / 2 );

		return $array[ $middle - 1 ];
	}

	public function get_standard_deviation( $array ){
		return sqrt( array_sum( array_map( array( $this, 'get_sd_square' ), $array, array_fill( 0, count( $array ), ( array_sum( $array ) / count( $array ) ) ) ) ) / ( count( $array ) - 1 ) );
	}

	function get_sd_square( $x, $mean ) {
		return pow( $x - $mean, 2 );
	}


	public function get_max( $array ) {
		return max( $array );
	}

	public function get_min( $array ) {
		return min( $array );
	}

	public function get_long_text() {
		ob_start(); ?>
		<div class="contentPad article"><!-- headline, byline, etc --><h1 style="visibility: visible; display: block;">Shaw, Blackhawks defeat Coyotes; Kane scores 200th</h1><div class="pubDateLocation">Tuesday, 01.20.2015 / 10:19 PM</div><h3 class="newsByLine"><a class="undMe" shape="rect" href="http://blackhawks.nhl.com/club/newsindex.htm?view=headline&amp;author=2818">Brian Hedger</a>&nbsp;-&nbsp;NHL.com Correspondent</h3><!-- authorAvailable --><link href="http://cdn.nhle.com/projects/ui-t5/com.nhl.ui.t5.components.share/SocialShareBar/dist/css/_SocialShareBar.min.css?v=8.14" media="screen" rel="stylesheet" type="text/css"><script>
				var modalMessages = {
						progress: "Sending E-mail...",
						success: "E-mail sent successfully!",
						failure: "E-mail failed to send. Please try again later.",
						errorTo: "Must specify at least one recipient.",
						errorFrom: "Must specify sender.",
						errorLimit: "Maximum allowed number of recipients is 5",
						errorValidAddress: "Invalid address.",
						header: "Message"
					},
					subject = 'Shaw, Blackhawks defeat Coyotes; Kane scores 200th',
					teaser = 'Arizona Coyotes 1, Chicago Blackhawks 6';
			</script><div class="socialShareBar"><div class="shareBtn left"><div data-share="true" data-layout="button_count" data-href="http://blackhawks.nhl.com/gamecenter/en/recap?id=2014020689" class="fb-like fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=201300416589515&amp;href=http%3A%2F%2Fblackhawks.nhl.com%2Fgamecenter%2Fen%2Frecap%3Fid%3D2014020689&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true"><span style="vertical-align: bottom; width: 121px; height: 20px;"><iframe name="f878d6194" width="1000px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like Facebook Social Plugin" src="http://www.facebook.com/plugins/like.php?app_id=201300416589515&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2F7r8gQb8MIqE.js%3Fversion%3D41%23cb%3Df22d898ca8%26domain%3Dblackhawks.nhl.com%26origin%3Dhttp%253A%252F%252Fblackhawks.nhl.com%252Ff1355339a%26relation%3Dparent.parent&amp;href=http%3A%2F%2Fblackhawks.nhl.com%2Fgamecenter%2Fen%2Frecap%3Fid%3D2014020689&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true" style="border: none; visibility: visible; width: 121px; height: 20px;" class=""></iframe></span></div></div><div class="shareBtn left"><div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 32px; height: 20px; background: transparent;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 32px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1421817443289" name="I0_1421817443289" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;annotation=none&amp;size=medium&amp;hl=en_US&amp;origin=http%3A%2F%2Fblackhawks.nhl.com&amp;url=http%3A%2F%2Fblackhawks.nhl.com%2Fgamecenter%2Fen%2Frecap%3Fid%3D2014020689&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.8BLdY9WtiAI.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Ft%3Dzcms%2Frs%3DAGLTcCPM3pWrLSLr7IAycfKxebSLUj7Syw#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1421817443289&amp;parent=http%3A%2F%2Fblackhawks.nhl.com&amp;pfname=&amp;rpctoken=51672104" data-gapiattached="true" title="+1"></iframe></div></div><div class="shareBtn left"><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.43f27a4bef283162a313ef2984f03c34.en.html#_=1421817443272&amp;count=horizontal&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fblackhawks.nhl.com%2Fgamecenter%2Fen%2Frecap%3Fid%3D2014020689%26navid%3DDL%7CCHI%7Chome&amp;size=m&amp;text=Shaw%2C%20Blackhawks%20defeat%20Coyotes%3B%20Kane%20scores%20200th&amp;url=http%3A%2F%2Fblackhawks.nhl.com%2Fgamecenter%2Fen%2Frecap%3Fid%3D2014020689" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 109px; height: 20px;"></iframe></div><div class="shareBtn right"><a shape="rect" href="javascript:window.print();"><div class="utilBtn"><span class="icon print "></span><span>Print</span></div></a></div><div class="shareBtn right email"><div class="utilBtn"><span class="icon email "></span><span>E-mail</span></div></div><div id="modalContainer" class="emailModal"><div onclick="jQuery('#modalContainer').hide()" class="close"></div><div class="header">Share with your Friends</div><div class="errorArea"></div><form onsubmit="javascript:return Tapestry.waitForPage(event);" action="/gamecenter/en/recap.socialsharebar.emailform" method="post" id="emailForm"><div class="t-invisible"><input value="H4sIAAAAAAAAAFvzloG1XJZBOig1ObHAqjg/OTMxpzgjsSg1KbFIr7g0KTezpLiIwSG/KF0vsSAxOSNVrySxILW4pKjSVC85vyg1JzMJSOcW5Oel5pUU6wWDdagEFOUnpxYXg3nFxZn5eTODP0lu3dLizMTA5MPAkZyTCVTtmVLCIOSTlViWqJ+TmJeuH1xSlJmXbu3DwJ2ak5oLVOCXmJtayFDHwFhRUMLAAXFMvAESEwB5tAClvQAAAA==" name="t:formdata" type="hidden"></div><div class="body"><label for="toField">To:</label><input placeholder="Separate multiple addresses with commas" name="toField" id="toField" type="email"><br><label for="fromField">From:</label><input type="text" name="fromField" id="fromField"><br><label for="message">Message:</label><textarea name="message" class="message" id="message"></textarea><div class="generatedContent"><img src="http://2.cdn.nhle.com/blackhawks/images/upload/2015/01/012015ToewsSmith.jpg" class="thumbnail left"><span class="headline">Shaw, Blackhawks defeat Coyotes; Kane scores 200th</span><br><span class="teaser">Arizona Coyotes 1, Chicago Blackhawks 6</span></div></div><div class="footer"><div class="shareBtn"><div class="utilBtn last"><span class="icon email"></span><input value="Send" class="send" id="submit_0" name="submit_0" type="submit"></div></div></div></form><div class="progress"></div></div></div><script src="http://cdn.nhle.com/projects/ui-t5/com.nhl.ui.t5.components.share/SocialShareBar/dist/js/SocialShareBar.min.js?v=8.14" type="text/javascript"></script><script>
				(function() {
					EmailModal.init({sourceUrl: 'http://blackhawks.nhl.com/gamecenter/en/recap?id=2014020689'});
				})();
			</script><div style="display: block; position: relative;" class="videoPlayer" id="ipVidCont"><object type="application/x-shockwave-flash" id="nhlplayer2014020689" name="nhlplayer2014020689" align="middle" data="http://e1.cdnl3.neulion.com/nhlvc/player/videocenter/player/nhlvc.swf?v=20140924" width="100%" height="100%"><param name="quality" value="high"><param name="bgcolor" value="#000000"><param name="wmode" value="opaque"><param name="allowScriptAccess" value="always"><param name="allowFullScreen" value="true"><param name="flashvars" value="htmlid=nhlplayer2014020689&amp;readyCallback=VideoCenter.listenNLReady&amp;completeCallback=VideoCenter.listenNLVideoComplete&amp;externalTrackCallback=VideoCenter.listenExternalTrack&amp;trackPingInterval=300&amp;server=http://video.nhl.com/videocenter/&amp;pingInterval=300&amp;locImg=http://nhl.cdnllnwnl.neulion.net/u/&amp;playerType=n2&amp;hasTitleBar=true&amp;hasSharing=true&amp;timeoutCallback=sessionTimeout&amp;section=gamecenter"></object></div><script>
				jQuery(document).ready(function(){
					var pSettings = {
						instanceId: 2014020689,
						containerId: "ipVidCont"
					};
					var options = {
						playlist: ['2014020689-X-h'],
						autostart: true
					};
					var settings = jQuery.extend({}, vpGlobalSettings, pSettings);
					VideoCenter.setup(settings);
					VideoCenter.play(options, settings.instanceId);
				});
			</script>
			<div class="medMod right">
				<div id="threeStars" class="section">
					<div class="primary">Three Stars of the Game</div>
					<div class="divider"></div>
					<div class="contentPad">
						<div class="playerStatCard">
							<div class="headshot"><a class="undMe" rel="player1LinkData"
							                         href="http://blackhawks.nhl.com/club/player.htm?id=8476381"><img
										height="90" alt="Andrew Shaw" width="63"
										src="http://1.cdn.nhle.com/blackhawks/v2/photos/mugs/thumb/8476381.jpg"
										border="0"></a>

								<div class="starLabel gradient"><span>1</span><span class="ordinalSuffix">st</span><img
										src="http://3.cdn.nhle.com/nhl/images/gc/v4/threeStars_broadband@2x.png?v=8.14">
								</div>
							</div>
							<div class="header"><span class="fullName"><a class="undMe" rel="player1LinkData"
							                                              href="http://blackhawks.nhl.com/club/player.htm?id=8476381">Andrew
										Shaw</a></span>

								<div class="position">C</div>
							</div>
							<table class="statInfo">
								<tbody>
								<tr>
									<td colspan="1" rowspan="1">G: 2</td>
									<td colspan="1" rowspan="1">Shots: 8</td>
								</tr>
								<tr>
									<td colspan="1" rowspan="1">A: 0</td>
									<td colspan="1" rowspan="1">Hits: 1</td>
								</tr>
								<tr>
									<td colspan="1" rowspan="1">PTS: 2</td>
									<td colspan="1" rowspan="1">PIM: 0</td>
								</tr>
								<tr>
									<td colspan="1" rowspan="1">+/-: 2</td>
									<td colspan="1" rowspan="1">TOI: 18:11</td>
								</tr>
								</tbody>
							</table>
							<div class="logo"><img title="Chicago Blackhawks" alt="Chicago Blackhawks"
							                       class="team-logo  "
							                       src="http://cdn.nhle.com/nhl/images/logos/teams/blackhawks_logo.svgz?v=8.14">
							</div>
						</div>
						<div class="playerStatCard">
							<div class="headshot"><a class="undMe" rel="player1LinkData"
							                         href="http://blackhawks.nhl.com/club/player.htm?id=8474141"><img
										height="90" alt="Patrick Kane" width="63"
										src="http://1.cdn.nhle.com/blackhawks/v2/photos/mugs/thumb/8474141.jpg"
										border="0"></a>

								<div class="starLabel gradient"><span>2</span><span class="ordinalSuffix">nd</span><img
										src="http://3.cdn.nhle.com/nhl/images/gc/v4/threeStars_broadband@2x.png?v=8.14">
								</div>
							</div>
							<div class="header"><span class="fullName"><a class="undMe" rel="player1LinkData"
							                                              href="http://blackhawks.nhl.com/club/player.htm?id=8474141">Patrick
										Kane</a></span>

								<div class="position">RW</div>
							</div>
							<table class="statInfo">
								<tbody>
								<tr>
									<td colspan="1" rowspan="1">G: 1</td>
									<td colspan="1" rowspan="1">Shots: 3</td>
								</tr>
								<tr>
									<td colspan="1" rowspan="1">A: 2</td>
									<td colspan="1" rowspan="1">Hits: 1</td>
								</tr>
								<tr>
									<td colspan="1" rowspan="1">PTS: 3</td>
									<td colspan="1" rowspan="1">PIM: 0</td>
								</tr>
								<tr>
									<td colspan="1" rowspan="1">+/-: 2</td>
									<td colspan="1" rowspan="1">TOI: 20:41</td>
								</tr>
								</tbody>
							</table>
							<div class="logo"><img title="Chicago Blackhawks" alt="Chicago Blackhawks"
							                       class="team-logo  "
							                       src="http://cdn.nhle.com/nhl/images/logos/teams/blackhawks_logo.svgz?v=8.14">
							</div>
						</div>
						<div class="playerStatCard">
							<div class="headshot"><a class="undMe" rel="player1LinkData"
							                         href="http://blackhawks.nhl.com/club/player.htm?id=8476882"><img
										height="90" alt="Teuvo Teravainen" width="63"
										src="http://2.cdn.nhle.com/blackhawks/v2/photos/mugs/thumb/8476882.jpg"
										border="0"></a>

								<div class="starLabel gradient"><span>3</span><span class="ordinalSuffix">rd</span><img
										src="http://3.cdn.nhle.com/nhl/images/gc/v4/threeStars_broadband@2x.png?v=8.14">
								</div>
							</div>
							<div class="header"><span class="fullName"><a class="undMe" rel="player1LinkData"
							                                              href="http://blackhawks.nhl.com/club/player.htm?id=8476882">Teuvo
										Teravainen</a></span>

								<div class="position">C</div>
							</div>
							<table class="statInfo">
								<tbody>
								<tr>
									<td colspan="1" rowspan="1">G: 1</td>
									<td colspan="1" rowspan="1">Shots: 4</td>
								</tr>
								<tr>
									<td colspan="1" rowspan="1">A: 1</td>
									<td colspan="1" rowspan="1">Hits: 1</td>
								</tr>
								<tr>
									<td colspan="1" rowspan="1">PTS: 2</td>
									<td colspan="1" rowspan="1">PIM: 0</td>
								</tr>
								<tr>
									<td colspan="1" rowspan="1">+/-: 2</td>
									<td colspan="1" rowspan="1">TOI: 11:21</td>
								</tr>
								</tbody>
							</table>
							<div class="logo"><img title="Chicago Blackhawks" alt="Chicago Blackhawks"
							                       class="team-logo  "
							                       src="http://cdn.nhle.com/nhl/images/logos/teams/blackhawks_logo.svgz?v=8.14">
							</div>
						</div>
					</div>
				</div>
			</div>
			<p>CHICAGO -- <a href="http://blackhawks.nhl.com/club/player.htm?id=8474141">Patrick Kane</a> scored the
				200th goal of his career, and <a href="http://blackhawks.nhl.com/club/player.htm?id=8476381">Andrew
					Shaw</a> scored two goals to help the Chicago Blackhawks break out of a slump with a 6-1 victory
				against the Arizona Coyotes at United Center on Tuesday.</p>

			<p>The win ended a two-game losing streak for the Blackhawks (29-15-2), who won in Joel Quenneville's 500th
				game as Chicago coach.</p>

			<p>The Blackhawks will play their next seven games on the road, starting with the Pittsburgh Penguins on
				Wednesday.</p>

			<p>Arizona (16-25-5) has lost its past six games (0-5-1) and is 2-7-1 in its past 10.</p>

			<p>Chicago rookie forward <a href="http://blackhawks.nhl.com/club/player.htm?id=8476882">Teuvo
					Teravainen</a> scored a goal and had an assist on Shaw's first goal for his first career multipoint
				game, captain <a href="http://blackhawks.nhl.com/club/player.htm?id=8473604">Jonathan Toews</a> scored
				his first goal since Dec. 21 (11 games), and defenseman <a
					href="http://blackhawks.nhl.com/club/player.htm?id=8475182">David Rundblad</a> scored his second
				goal of the season to complete the scoring in the third.</p>

			<p>Forwards <a href="http://blackhawks.nhl.com/club/player.htm?id=8471254">Bryan Bickell</a> and <a
					href="http://blackhawks.nhl.com/club/player.htm?id=8469544">Patrick Sharp</a> each finished with two
				assists, and goalie <a href="http://blackhawks.nhl.com/club/player.htm?id=8477293">Antti Raanta</a> made
				35 saves for the win.</p>

			<p>The Blackhawks took a 2-0 lead into the second on goals by Toews and Shaw.</p>

			<p>Toews broke through first with his 14th goal to make it 1-0 at 6:53 to cap a power play after Arizona
				forward Lucas Lessio was called for tripping. Crisp passes in the offensive zone by Sharp and Kane got
				the puck to Toews in the slot, and Toews did the rest with a hard wrist shot to beat Coyotes goalie Mike
				Smith (45 saves).</p>

			<p>Shaw, who had one goal in his previous 22 games, made it 2-0 at 12:48 of the first with his seventh
				goal.</p>

			<p>Bickell won a puck battle behind the Coyotes net, and Shaw went straight to the front of the crease,
				received a pass from Teravainen on the right wing, wheeled and shot the puck past Smith.</p>

			<p>Chicago scored three more times in the second to make it 5-1 after 40 minutes on Kane's milestone goal at
				3:51, Teravainen's second goal of the season at 9:42 and Shaw's second of the game3 at 19:19. Kane and
				Terevainen put in rebounds allowed by Smith. Teravainen scored off a follow of his own shot. Shaw scored
				with a wrist shot from the slot.</p>

			<p>Rundblad scored the lone goal of the third at 14:11.</p></div>
		<?php
		return ob_get_clean();
	}

	public function get_medium_text() {
		ob_start(); ?>
		<table width="100%" cellspacing="0" cellpadding="4" class="data">
			<tbody>
			<tr class="hdr">
				<td width="115">Player</td>
				<td width="50">Date</td>
				<td width="100">Due Back</td>
				<td width="200">Injury</td>
				<td width="280">Notes</td>
			</tr>
			<tr class="rwEven">
				<td><img height="90" width="63" border="1" alt="" src="http://3.cdn.nhle.com/blackhawks/v2/photos/mugs/thumb/8471346.jpg"></td>
				<td rowspan="2">1/1</td>
				<td rowspan="2">1 month</td>
				<td rowspan="2">Left hand</td>
				<td rowspan="2">1/6: <a href="http://blackhawks.nhl.com/club/news.htm?id=747435">Had successful procedure</a></td>
			</tr>
			<tr class="rwEven">
				<td>Kris Versteeg</td>
			</tr>
			<tr class="rwOdd">
				<td><img height="90" width="63" border="1" alt="" src="http://3.cdn.nhle.com/blackhawks/v2/photos/mugs/thumb/8477845.jpg"></td>
				<td rowspan="2">11/16</td>
				<td rowspan="2">3-4 months</td>
				<td rowspan="2">Left patella fracture</td>
				<td rowspan="2">1/5: Expected to start rehab soon <br>
					<br>
					11/20: <a href="http://blackhawks.nhl.com/club/news.htm?id=740162">Had successful surgery</a></td>
			</tr>
			<tr class="rwOdd">
				<td>Trevor <br>
					van Riemsdyk</td>
			</tr>
			</tbody>
		</table>
		<?php
		return ob_get_clean();
	}

	public function get_short_text() {
		ob_start(); ?>
		<p><a href="#" class="yolo">Yolo</a></p>
		<?php
		return ob_get_clean();
	}
}

$test = new KsesTests();
$test->run_tests();
$results = $test->get_results();

var_dump( $results );