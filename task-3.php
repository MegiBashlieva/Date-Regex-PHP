<?php
// 1.words with is in the word, in the end and in the beggining
// ako iskame samo dumi, v koito da ima "is" bez edinchno "is" slagame + vmesto * 
$string="Nulla ultrices aliquet enim sed blandit. 
		Sed quam nisi, ornare isvitae facilisis id,
		sagittis ac arcu. Nam mollis mi eget justo viverra,
		nec tincidunt lorem rhoncus.";

$pattern="/\w*is\w*/";

preg_match_all($pattern, $string,$matches);

echo "1. words with is -> ".implode(" ", $matches[0]);
echo PHP_EOL;
echo PHP_EOL;


// 2. words that ends with ting
$string2="asdasdting asdasda ..ting 
		?ting asdadating asdakdn adadsatingadada 111ting adating
         asdating";

$pattern2="/[A-Za-z]+ting\b/";

preg_match_all($pattern2, $string2,$matches2);

echo "2. word that ends  with \"ting\" -> ".implode(" ", $matches2[0]);

echo PHP_EOL;
echo PHP_EOL;

// 3. valid word
$string3="SAdasdaa ads523554 a 
			sadasd.Sda?fgwwaxv! 
				sad-asdasdf!sd 54654sdas.";

$pattern3="/\b[A-Za-z]+\b/";

preg_match_all($pattern3, $string3,$matches3);

echo "3. valid worsd -> ".implode(" ", $matches3[0]);

echo PHP_EOL;
echo PHP_EOL;

// 4. valid sentence
$string4="  ne e izrechenie?Fay: Hey -Jerry, how often do you use the Internet?
Jerry: Oh, I use it everyday! I check my email, read the news, chat with family and friends all around the world. I love the Internet!

Fay: Yeah, it's great, isn't it? Sometimes I stay online for hours. So, how do you connect to the Net?

Jerry: Usually I just dial 163 or 96600 to log on, and I get billed directly to my telephone account. It's quite convenient.
asdasd.
Fay: That must be slow! I have an ADSL connection, so I can download pictures and music.
 Well Fay, I'm going to-ewf";

$pattern4="/[A-Z]+[A-Za-z\s\d\,\-\"\']*[.?!]/";

preg_match_all($pattern4, $string4,$matches4);

echo "4. valid sentence-> ".implode(" ".PHP_EOL, $matches4[0]);

