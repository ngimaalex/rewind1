<?php
/********************************************************************************************************************
  Consider the following string(bbit3a.txt)                                                                         *
  It constains names(IP address,surname,second_name,first_name),number,country and country code of some individuals *
                                                                                                                    *
  @Required                                                                                                         *
  1. Create a new branch from the develop branch called f eature-rewind-13a                                          *
  2. Display the following data as follows (NB: first_name can be clicked to open the persons IP on a new tab)      *
                                                                                                                    *
      a). first_name second_name,surname (# country_code(0)number[country])                                         *
      b). .......                                                                                                   *
      c). .......                                                                                                   *
      (For example                                                                                                  *
        a) Mosiro Olesaningo Chirchir(# +254 (0) 760 387 482[KENYA])                                                *
      )                                                                                                             *
                                                                                                                    *
    Summary                                                                                                         *
     -- Total names : total.                                                                                        *
     -- Total unique countries : total(list of countries - comma separated)                                         *
  3. Commit changes of the new branch                                                                               *
  4. Merge changes with the development branch                                                                      *
  5. Push the changes to your repo.                                                                                 *
  6. Submit the github url on google classroom (Check Quiz 1 - 3A)                                                  *
 ********************************************************************************************************************/
// echo file_get_contents( "bbit3a.txt" ); // get the contents, and echo it out.
$surName =array('Mosiro    '  , 'Mumbua    '   ,'Luther    '  ,'Wallace    '  ,'Jonathan   '  ,'King   '  ,'Hound    '  ,'Joel    ' ,'Simba    '  ,' BREINARD    '  ,'OWEN    '  ,'BUNYAN     '  ,'gergory   '  ,'Lovi   '  );
$fName= array('<a href="66.249.72.240"> Olesaningo</a>','<a href="192.168.170.25> DOE </a>','<a href="113.193.241.186"> katherina</a>','<a href="197.176.231.200">grommit</a>','<a href="113.193.241.186">edwards</a>','<a href="77.77.7.7">aslan </a>','<a href="172.53.14.2"> Valinor</a>','<a href="113.193.241.18">wafula</a>','<a href="113.193.241.18"> mwabingo</a>','<a href="153.193.241.186">David</a>','<a href="123.19.201.186"> John</a>','<a href="163.193.241.156"> Johann</a>',
'<a href="150.133.10.23"> Luthien</a>' ,'<a href="103.153.211.186"> OWEN</a>');
$sName = array('     Chirchir',   '  Wambua', '    Vonbora' ,'   Boromir', '  Faramir', '  Asaph','  Huan','   Otoyo','  Mapete', '   SARATON','    Legolas','   Puddleglum','   Vonstaupitz','   Beren');
$pNumber = array('   760387482', '    080023450','    0600990033','   0100873901','    0200983729','    02990033', '    02880023','    0777799920','   0987483292','     043899292','   074749292','    09837328','   0600984733','   028403323');
$country = array('   KENYA      ', '     KENYA             ','    GERMANY','    IRELAND','    AMERICA          ','    ISRAEL','    SPAIN            ','   KENYA      ','    TANZANIA       ','    AMERICA       ','     ZAMBIA      ','    UGANDA     ','    GERMANY       ','    SPAIN      ' );
$country_code =array('   +254', '      +254     ','    +32    ','   +98_    ','   +1_   ','    +2_    ','    +26_   ','   +254   ','   +257   ','   +1_   ','   +267_   ','    +256   ','    +32_   ','    +26   s');

echo  "a)". $surName[0]. $fName[0]. $sName[0]. "(#". $country_code[0]. "(0)" .$pNumber[0]. "[      " .$country[0]. "]) <br>",
"b)". $surName[1]. $fName[1]. $sName[1]. "(#". $country_code[1]. "()" .$pNumber[1]. "[      " .$country[1]. "])<br>",
"c)". $surName[2]. $fName[2]. $sName[2]. "(#". $country_code[2]. "(0)" .$pNumber[2]. "[     " .$country[2]. "])<br> ",
"d)". $surName[3]. $fName[3]. $sName[3]. "(#". $country_code[3]. "(0)" .$pNumber[3]. "[     " .$country[3]. "])<br>",
"e)". $surName[4]. $fName[4]. $sName[4]. "(#". $country_code[4]. "(0)" .$pNumber[4]. "[     " .$country[4]. "])<br>",
"f)". $surName[5]. $fName[5]. $sName[5]. "(#". $country_code[5]. "(0)" .$pNumber[5]. "[     " .$country[5]. "])<br>",
"g)". $surName[6]. $fName[6]. $sName[6]. "(#". $country_code[6]. "(0)" .$pNumber[6]. "[     " .$country[6]. "])<br>",
"h)". $surName[7]. $fName[7]. $sName[7]. "(#". $country_code[7]. "(0)" .$pNumber[7]. "[     " .$country[7]. "])<br>",
"i)". $surName[8]. $fName[8]. $sName[8]. "(#". $country_code[8]. "(0)" .$pNumber[8]. "[     " .$country[8]. "])<br>",
"j)". $surName[9]. $fName[9]. $sName[9]. "(#". $country_code[9]. "(0)" .$pNumber[9]. "[     " .$country[9]. "])<br>",
"k)". $surName[10]. $fName[10]. $sName[10]. "(#". $country_code[10]. "(0)" .$pNumber[10]. "[      " .$country[10]. "])<br>",
"l)". $surName[11]. $fName[11]. $sName[11]. "(#". $country_code[11]. "(0)" .$pNumber[11]. "[      " .$country[11]. "])<br>",
"m)". $surName[12]. $fName[12]. $sName[12]. "(#". $country_code[12]. "(0)" .$pNumber[12]. "[       " .$country[12]. "])<br>",
"n)". $surName[13]. $fName[13]. $sName[13]. "(#". $country_code[13]. "(0)" .$pNumber[13]. "[      " .$country[13]. "])<br>";
?>
