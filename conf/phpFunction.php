<?PHP
$_p0	= isset($_REQUEST['_p0']) ? strval($_REQUEST['_p0']) : '';	
$_p1	= isset($_REQUEST['_p1']) ? strval($_REQUEST['_p1']) : '';	
$_p2	= isset($_REQUEST['_p2']) ? strval($_REQUEST['_p2']) : '';	
$_p3	= isset($_REQUEST['_p3']) ? strval($_REQUEST['_p3']) : '';	

function requestRec($loadField, $loadTbl, $loadWhere, $loadOrder, $typeView){
$carouselCount = 0;

	$sql = "SELECT $loadField FROM $loadTbl";
	if(!empty($loadWhere)) { $sql.=" WHERE $loadWhere"; }
	if(!empty($loadOrder)){ $sql.=" ORDER BY $loadOrder"; }

	$rowLoad = '';
	$result = $GLOBALS['mysqli']->query($sql);
	$rowNum = $result->num_rows;
	
	while ($row = $result->fetch_array()) {
		$_val = $row[0];
		$_disp = $row[1];
		
		switch($typeView){
			case 1:
			
				// GET DATA BANNER

				$var1 = $row[1];
				$var2 = $row[2];
				$var3 = 'images/banners/'.$row[3];
				
				$view = '<div style="background-image: url('.$var3.')"></div>';

				break;

			case 2:

					$var1 = $row[1];
					$var2 = $row[2];
					$var3 = $row[3];
					$var4 = $row[4];
					$var5 = 'images/employees/'.$row[5];				
				
				$view = '<div class="col-md-6">
							<div class="about-contentbox">
								<div class="animate" data-animate="fadeInUp">
									<span>'.$var2.'</span>
									<h4 class="text-capitalize">'.$var1.'</h4>
									<!--<p>Credits go to <strong>Unsplash</strong> and <strong>Pexels</strong> for photos and video used in this template. Vivamus tincidunt, augue rutrum convallis volutpat, massa lacus tempus leo.</p>-->
								</div>
								
														<div class="facts-list owl-carousel">
																<div class="item animate" data-animate="fadeInUp">
																	<div class="counter-box">
																		<i class="fa fa-trophy counter-icon" aria-hidden="true"></i><span class="count-number">32</span> Awards Won
																	</div>
																</div>
																<div class="item animate" data-animate="fadeInUp">
																	<div class="counter-box">
																		<i class="fa fa-graduation-cap counter-icon" aria-hidden="true"></i><span class="count-number">4</span> Degrees
																	</div>
																</div>
																<div class="item animate" data-animate="fadeInUp">
																	<div class="counter-box">
																		<i class="fa fa-desktop counter-icon" aria-hidden="true"></i><span class="count-number">12</span> Working Years
																	</div>
																</div>
																<div class="item animate" data-animate="fadeInUp">
																	<div class="counter-box">
																		<i class="fa fa-support counter-icon" aria-hidden="true"></i><span class="count-number">6</span> Team Members
																	</div>
																</div>
																<div class="item animate" data-animate="fadeInUp">
																	<div class="counter-box">
																		<i class="fa fa-certificate counter-icon" aria-hidden="true"></i><span class="count-number">10</span> Certificates
																	</div>
																</div>
														</div>
								
							</div>
						</div>
						<div class="col-md-6">
							<figure class="about-img animate" data-animate="fadeInUp"><img src="'.$var5.'" class="rounded" alt=""></figure>
						</div>';
				break;
			case 3://layanan
				$var2 = strip_tags($row[2]);
				if(!empty($row[3])){
					$var3 = $row[3];
				} else {
					$var3 = '<img src="upload/default/public-service.png">';
				}
				$_max = '100';
				
				/*
				$view = '<div class="item animate" data-animate="fadeInUp">
							<div class="service-box">
								<span class="service-icon">'.$var3.'</span>
								<h3>'.$_disp.'</h3>
								<p>'.substrwords($var2, $_max).'</p>
							</div>
						</div>';
				*/
				
				$view = '<div class="cardLay animate d-flex flex-column" data-animate="fadeInUp" data-wow-delay="5s">
							<div class="cardLay-liner">
								<figure>'.$var3.'</figure>
								<div class="cardLay--title">
									<p>'.$_disp.'</p>
								</div>
								<div class="cardLay--desc">
									<hr />
									<p>'.substrwords($var2, $_max).'</p>
								</div>
								<div class="cardLay--btn mt-auto">
									<a href="#">
										<span class="moreinfo"><i class="fa fa-info-circle"></i> More Info</span>
										<span class="fullprof">View Full Profile</span>
									</a>
								</div>
							</div>
						</div>';
				
				
				
				
				
				
				break;
			case 4://info
				$var2 = strip_tags($row[2]);
				$var3 = $row[3];
				$var4 = 'images/news/'.$row[4];
				$_max = '200';
				
				/*
				$view = '<div class="item animate" data-animate="fadeInUp">
							<div class="portfolio-item">
								<div class="thumb">
									<img src="'.$var4.'" alt="">
								</div>
								<div class="thumb-inner animate mt-0 pt-0" data-animate="fadeInUp">
									<h4>'.$_disp.'</h4>
									<p>'.substrwords($var2, $_max).'</p>
								</div>
							</div>
						</div>';
				*/
				
				$view = '<div class="single-blog-post animate" data-animate="fadeInUp" data-wow-delay="5s">
							<div class="post-thumbnail">
								<img src="'.$var4.'" alt="">
							</div>
							<div class="post-content">
								<a href="#" class="headline">
									<h5>'.$_disp.'</h5>
								</a>
								<p>'.substrwords($var2, $_max).'</p>
								<div class="post-meta">
									<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
								</div>
							</div>
						</div>';
				
				
				break;
			case 5:
				$_val2	= $row[2];
				$_val3	= $row[3];
				$_val4	= $row[4];
				$_val5	= $row[5];
				$_max = '100';
				$_href	= '#view-'.$loadTbl.'-'.$_val.'-'.$_disp;
				
				$view = '<div class="col-md-4">
							<div class="card card-blog">
								<div class="card-image">
									<a href="#"> <img class="img" src="/upload/'.$_val.$_val4.'"> </a>
									<div class="ripple-cont"></div>
								</div>
								<div class="table">
									<h4 class="card-caption">
										<a href="'.$_href.'">'.$_disp.'</a>
									</h4>
									<p class="card-description">'.substrwords($_val2, $_max).'...</p>
									<div class="ftr">
										<div class="author">
											<i class="fa fa-calendar" aria-hidden="true"></i> '.$_val3.'
										</div>
										<div class="stats"> 
											<i class="fa fa-eye"></i> '.$_val5.'
										</div>
									</div>
								</div>
							</div>
						</div>';
				break;
			case 6://side info
				
				$var2 = strip_tags($row[2]);
				$var3 = $row[3];
				$var4 = 'images/news/'.$row[4];
				
				$view = '<div class="single-blog-post post-style-2 d-flex align-items-center wow animate" data-animate="fadeInUp" data-wow-delay="10s">
							<div class="post-thumbnail">
								<img src="'.$var4.'" alt="">
							</div>
							<div class="post-content">
								<a href="#" class="headline">
									<h5>'.$_disp.'</h5>
								</a>
								<div class="post-meta">
									<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
								</div>
							</div>
						</div>';
				
				break;
				

		}
		
		$rowLoad .= $view;
	}
	
	return $rowLoad;
}

function jsonData($loadField, $loadTbl, $loadWhere, $loadOrder, $typeView){

	$sql = "SELECT $loadField FROM $loadTbl";
	if(!empty($loadWhere)) { $sql.=" WHERE $loadWhere"; }
	if(!empty($loadOrder)){ $sql.=" ORDER BY $loadOrder"; }

	$rowLoad = '';
	$result = $GLOBALS['mysqli']->query($sql);
	$rowNum = $result->num_rows;
	
	while ($row = $result->fetch_array()) {
		
		switch($typeView){
			case 1 :
				$_val0	= $row[0];
				$_val1	= $row[1];
				$_val2	= $row[2];
				$_val3	= $row[3];
				//$_val4	= strtotime($row[4]);
				if(!empty($row[4])){
					list($_day, $_tgl, $_bln, $_thn, $_dll) = explode(' ', $row[4]);
					$_val4	= $_thn.'-'.date('m',strtotime($_bln)).'-'.$_tgl;
					//$_val4	= date('m',strtotime($_bln)).'/'.$_tgl.'/'.$_thn;
				}
				$_val5	= $row[5];
				$data[] = ['id'=>$_val0, 'name'=>$_val2, 'description'=>'', 'date'=>$_val4, 'type'=>'event'];
				
				break;
			case 2:
					if($rowNum!=0){
						$data = $result->fetch_assoc();
						
						echo json_encode($data);
					} else {
						echo json_encode(array('stats'=>404,'msgErrors'=>'Data tidak ditemukan'));
					}
				break;
		}
		
	}
	
	return json_encode($data);
}

function hrefAside($field, $tbl, $sqlJoin, $sqlWhere, $sqlOrder){
	
	$sql = "SELECT $field FROM $tbl";
	if(!empty($sqlJoin)) { $sql.=" $sqlJoin"; }
	if(!empty($sqlWhere)) { $sql.=" WHERE $sqlWhere"; }
	if(!empty($sqlOrder)){ $sql.=" ORDER BY $sqlOrder"; }

	$rowLoad = '';
	$result = $GLOBALS['mysqli']->query($sql);
	
	while ($row = $result->fetch_array()) {
		$_var1 = $row[0];
		$_var2 = $row[1];
		$_var2c = str_replace(" ","-","$row[1]");
		$_var3 = $row[2];
		$_var4 = $row[3];
		
		//a.ka_id, a.ka_name, a.fm_id, b.fm_file
		
		$view =	"<li>".
					"<a href=\"javascript:void(0)\" onClick=\"goPublic('$_var4','$_var1','$_var2c','publikasi_data_$_var2c')\">".
					"<span class=\"nav-link-text\" data-i18n=\"nav.settings_user\">$_var2</span>".
					"</a>".
				"</li>";
		
		$rowLoad .= $view;
	}
	
	return $rowLoad;
}

function privAcc($txtbread, $priv){

	//$arBread = explode('_', $txtbread);
	//$bread = end($arBread);

	$result = $GLOBALS['mysqli']->query("SELECT COUNT(*) AS nRec, a.page_id, a.page_name, a.page_addr, b.ro_id, b.rr_read, b.rr_cre, b.rr_up, b.rr_del
								FROM set_page a
									LEFT JOIN set_rules b
										ON a.page_id = b.page_id AND b.ro_id='$priv'
								WHERE a._active=1 AND a.page_addr='$txtbread'
								GROUP BY a.page_id")
							or die('Ada kesalahan pada query tampil data transaksi: '.$mysqli->error);

	
	$row = $result->fetch_assoc();

	//return array('_num'=>$row['nRec'],'_re'=>$row['rr_read'],'_cr'=>$row['rr_cre'],'_up'=>$row['rr_up'],'_de'=>$row['rr_del']);
	
	if($txtbread=$row['page_name']){
		//return array('_re'=>$row['rr_read'],'_cr'=>$row['rr_cre'],'_up'=>$row['rr_up'],'_de'=>$row['rr_del']);
		return array('_num'=>$row['nRec'],'_re'=>$row['rr_read'],'_cr'=>$row['rr_cre'],'_up'=>$row['rr_up'],'_de'=>$row['rr_del']);
	}else {
		header("Location: 404.php");
	}
	
	die();

}
function updateOneField($loadField, $loadTbl, $loadWhere){
	
	$sql = "UPDATE $loadTbl AS t1, (SELECT $loadField FROM $loadTbl WHERE $loadWhere) as t2
				SET t1.$loadField = t2.$loadField+1 
				WHERE $loadWhere";
	
	$result = $GLOBALS['mysqli']->query($sql);
}

function updateField($setField, $setTbl, $setWhere){
	$sql = "UPDATE $setTbl
				SET $setField
				WHERE $setWhere";
	
	$result = $GLOBALS['mysqli']->query($sql);
}

function loadRecText($field, $table, $condition){
	
	$sql = "SELECT $field FROM $table WHERE $condition";
	$result = $GLOBALS['mysqli']->query($sql);
	$row = $result->fetch_assoc();
	
	return $row[$field];
}

function logSites($dt, $IP, $OS, $BR){
	//logSites($dateYMD, getIP(), get_operating_system(), get_the_browser());

	$logid = $dt.str_pad(loadRecText('count(*)', 'counter', 'countid LIKE "'.$dt.'%"')+1, 3, '0', STR_PAD_LEFT);
	
	$sql = "INSERT INTO counter
				VALUES ('$logid', '$IP', '$BR', '$OS', SYSDATE())";
	
	$result = $GLOBALS['mysqli']->query($sql);
	
	//return $rowLoad;
}

function sidebarLi($loadPage, $textdisp){
	$rest = "<li><a href=\"javascript:void(0);\" onClick=\"$loadPage\"><span class=\"sub-item\">$textdisp</span></a></li>";
	return $rest;
}

function tgl_panjang($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun

	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

function tgl_pendek($tanggal){
	$bulan = array (
		1 =>   'Jan',
		'Feb',
		'Mar',
		'Apr',
		'Mei',
		'Jun',
		'Jul',
		'Agust',
		'Sept',
		'Okt',
		'Nov',
		'Des'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun

	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

function tgljam($tanggal){
	list($tgl, $jam) = explode(' ', $tanggal);
	$bulan = array (
		1 =>   'Jan',
		'Feb',
		'Mar',
		'Apr',
		'Mei',
		'Jun',
		'Jul',
		'Agust',
		'Sept',
		'Okt',
		'Nov',
		'Des'
	);
	
	list($th, $bl, $tg) = explode('-', $tgl);
	if($th==date('Y')){
		$th = '';
	}
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun

	return $tg.' '.$bulan[(int)$bl].' '.$th;
}

function substrwords($text, $maxchar, $end='...') {
	$text = strip_tags($text);
	if (strlen($text) > $maxchar || $text == '') {
		$words = preg_split('/\s/', $text);      
		$output = '';
		$i      = 0;
		while (1) {
				$length = strlen($output)+strlen($words[$i]);
				if ($length > $maxchar) {
					break;
				} 
				else {
					$output .= " " . $words[$i];
					++$i;
				}
		}
		$output .= $end;
	} 
	else {
		$output = $text;
	}
	return $output;
}

function beda_waktu($date1, $date2, $format = false) 
{
	$diff = date_diff( date_create($date1), date_create($date2) );
	if ($format)
		return $diff->format($format);
	
	return array('y' => $diff->y,
				'm' => $diff->m,
				'd' => $diff->d,
				'h' => $diff->h,
				'i' => $diff->i,
				's' => $diff->s
			);
}

//START EMAIL HIDDEN//
function mask($str, $first, $last) {
	$len = strlen($str);
	$toShow = $first + $last;
	return substr($str, 0, $len <= $toShow ? 0 : $first).str_repeat("*", $len - ($len <= $toShow ? 0 : $toShow)).substr($str, $len - $last, $len <= $toShow ? 0 : $last);
}

function mask_email($email) {
	$mail_parts = explode("@", $email);
	$domain_parts = explode('.', $mail_parts[1]);

	$mail_parts[0] = mask($mail_parts[0], 2, 1); // show first 2 letters and last 1 letter
	$domain_parts[0] = mask($domain_parts[0], 2, 1); // same here
	$mail_parts[1] = implode('.', $domain_parts);

	return implode("@", $mail_parts);
}
//END EMAIL//

//SIDOARJO DALAM ANGKA
function curWord($cu){
	$cux = number_format($cu, 0);
	$lenCux = strlen($cux);

	if($lenCux>8){
		if(substr($cux,2,1)!=0){
			switch($lenCux){
				case 9:
					$subCux = substr($cux, 0, 3);

					$combine = $subCux.' Juta';
					break;
				case 13:
					$subCux = substr($cux, 0, 3);

					$combine = $subCux.' M';
					break;
				case 17:
					$subCux = substr($cux, 0, 3);

					$combine = $subCux.' T';
					break;
			}
		} else {
			switch($lenCux){
				case 9:
					$subCux = substr($cux, 0, 1);

					$combine = $subCux.' Juta';
					break;
				case 13:
					$subCux = substr($cux, 0, 1);

					$combine = $subCux.' M';
					break;
				case 17:
					$subCux = substr($cux, 0, 1);

					$combine = $subCux.' T';
					break;
			}
		}
	} else {
		$combine = $cux;
	}
	
	return $combine;
}
//END SIDOARJO DALAM ANGKA

//date ago
function TimeAgo ($oldTime, $newTime) {
$timeCalc = strtotime($newTime) - strtotime($oldTime);
if ($timeCalc >= (60*60*24*30*12*2)){
	$timeCalc = intval($timeCalc/60/60/24/30/12) . " years ago";
	}else if ($timeCalc >= (60*60*24*30*12)){
		$timeCalc = intval($timeCalc/60/60/24/30/12) . " year ago";
	}else if ($timeCalc >= (60*60*24*30*2)){
		$timeCalc = intval($timeCalc/60/60/24/30) . " months ago";
	}else if ($timeCalc >= (60*60*24*30)){
		$timeCalc = intval($timeCalc/60/60/24/30) . " month ago";
	}else if ($timeCalc >= (60*60*24*2)){
		$timeCalc = intval($timeCalc/60/60/24) . " days ago";
	}else if ($timeCalc >= (60*60*24)){
		$timeCalc = " Yesterday";
	}else if ($timeCalc >= (60*60*2)){
		$timeCalc = intval($timeCalc/60/60) . " hours ago";
	}else if ($timeCalc >= (60*60)){
		$timeCalc = intval($timeCalc/60/60) . " hour ago";
	}else if ($timeCalc >= 60*2){
		$timeCalc = intval($timeCalc/60) . " minutes ago";
	}else if ($timeCalc >= 60){
		$timeCalc = intval($timeCalc/60) . " minute ago";
	}else if ($timeCalc > 0){
		$timeCalc .= " seconds ago";
	}
return $timeCalc;
}//end date ago

// mail function ============================================================
function sendOTP($email,$otp) {
	require('class/class.phpmailer.php');
	require('class/class.smtp.php');

	$message_body = "Kode OTP :<br/><br/>" . $otp;
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = TRUE;
	$mail->SMTPSecure = 'tls'; // tls or ssl
	$mail->Port     = "587";
	$mail->Username = "hukum@sidoarjokab.go.id";
	$mail->Password = "Hukum1234";
	$mail->Host     = "mail.sidoarjokab.go.id";
	$mail->Mailer   = "smtp";
	$mail->SetFrom("hukum@sidoarjokab.go.id", "Bagian Hukum Kab. Sidoarjo");
	$mail->AddAddress($email);
	$mail->Subject = "OTP Code";
	$mail->MsgHTML($message_body);
	$mail->IsHTML(true);
	$result = $mail->Send();
	
	return $result;
}
//============================================================================

function enc($cry) {
	$cry = base64_encode(md5("pass@w0rd".trim($cry.'--SITES--')));

	return $cry;
}


// log akses site ============================================================

function getIP(){
	if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
		if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
				$addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
				$ip = trim($addr[0]);
		} else {
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
	}
	else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}

	return $ip;
}

function get_operating_system() {
	$u_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
	$operating_system = 'Other';

	//Get the operating_system name
	if($u_agent) {
		if (preg_match('/linux/i', $u_agent)) {
			$operating_system = 'Linux';
		} elseif (preg_match('/macintosh|mac os x|mac_powerpc/i', $u_agent)) {
			$operating_system = 'Mac';
		} elseif (preg_match('/windows|win32|win98|win95|win16/i', $u_agent)) {
			$operating_system = 'Windows';
		} elseif (preg_match('/ubuntu/i', $u_agent)) {
			$operating_system = 'Ubuntu';
		} elseif (preg_match('/iphone/i', $u_agent)) {
			$operating_system = 'IPhone';
		} elseif (preg_match('/ipod/i', $u_agent)) {
			$operating_system = 'IPod';
		} elseif (preg_match('/ipad/i', $u_agent)) {
			$operating_system = 'IPad';
		} elseif (preg_match('/android/i', $u_agent)) {
			$operating_system = 'Android';
		} elseif (preg_match('/blackberry/i', $u_agent)) {
			$operating_system = 'Blackberry';
		} elseif (preg_match('/webos/i', $u_agent)) {
			$operating_system = 'Mobile';
		}
	} else {
		$operating_system = php_uname('s');
	}
	
	return $operating_system;
}

function get_the_browser()
{
if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)
	return 'Internet explorer';
else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== false)
	return 'Internet explorer';
else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false)
	return 'Mozilla Firefox';
else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false)
	return 'Google Chrome';
else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false)
	return "Opera Mini";
else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== false)
	return "Opera";
else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false)
	return "Safari";
else
	return 'Other';
}
//============================================================================

?>