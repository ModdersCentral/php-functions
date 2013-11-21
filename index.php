
function isWindows(){return substr_count($_SERVER['SERVER_SOFTWARE'], 'Win32');}
function str_truncate($string, $maxLenght = 100, $truncator = "..."){return strlen($string) > $maxLenght ? substr($string, 0, $maxLenght - strlen($truncator)).$truncator : $string;}
function is_https(){if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443){return true;}else{return false;}
function text2bbc($text){ $find = array(  '~\[b\](.*?)\[/b\]~s',  '~\[i\](.*?)\[/i\]~s',  '~\[u\](.*?)\[/u\]~s', '~\[size=(.*?)\](.*?)\[/size\]~s',  '~\[color=(.*?)\](.*?)\[/color\]~s'  );  $replace = array(  '<b>$1</b>', '<i>$1</i>',   '<span style="text-decoration:underline;">$1</span>',  '<span style="font-size:$1px;">$2</span>', '<span style="color:$1;">$2</span>'  ); return preg_replace($find,$replace,$text); } 
function isImage($img){if(!getimagesize($img)){return FALSE;}else{return TRUE;}} 
function birthday($birthday){$age = strtotime($birthday);if($age === false){  return false;  } list($y1,$m1,$d1) = explode("-",date("Y-m-d",$age));  $now = strtotime("now");  list($y2,$m2,$d2) = explode("-",date("Y-m-d",$now)); $age = $y2 - $y1; if((int)($m2.$d2) < (int)($m1.$d1)){$age -= 1; }return $age; } 
function randomAlphaNum($amount=30){ $numchars = $amount; $chars = explode(',','a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,0,1,2,3,4,5,6,7,8,9'); $random=''; for($i=0; $i<$numchars;$i++)  { $random.=$chars[rand(0,count($chars)-1)]; }  return $random; } 
function force_download($file)  {   if ((isset($file))&&(file_exists($file))) { header("Content-length: ".filesize($file));   header('Content-Type: application/octet-stream');  header('Content-Disposition: attachment; filename="' . $file . '"'); readfile("$file"); } else {   echo "No file selected";  }  } 
function makeClickableLinks($text) { $text = eregi_replace('(((f|ht){1}tp://)[-a-zA-Z0-9@:%_+.~#?&//=]+)','<a href="\1">\1</a>', $text);$text = eregi_replace('([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_+.~#?&//=]+)','\1<a href="http://\2">\2</a>', $text);$text = eregi_replace('([_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,3})','<a href="mailto:\1">\1</a>', $text);return $text;}  
function stripExcessWhitespace( $string ) {return preg_replace( '/  +/', ' ', $string );}





