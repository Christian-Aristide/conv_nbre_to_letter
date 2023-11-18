# conv_nbre_to_letter
Conversion des nombres en lettre--------------------------------
Url     : http://codes-sources.commentcamarche.net/source/44435-conversion-des-nombres-en-lettreAuteur  : bricegalaDate    : 09/04/2014
Licence :
=========

Ce document intitulé « Conversion des nombres en lettre » issu de CommentCaMarche
(codes-sources.commentcamarche.net) est mis à disposition sous les termes de
la licence Creative Commons. Vous pouvez copier, modifier des copies de cette
source, dans les conditions fixées par la licence, tant que cette note
apparaît clairement.

Description :
=============

Permet de convertir des nombres(chiffres) en leur &eacute;quivalent en lettre (e
x: 1=un). Respecte l'accord prescrit par la langue fran&ccedil;aise. Peut &ecirc
;tre utile dans des applications comptables ou pour les sites commerciaux : &agr
ave; vous de voir.
<br /><a name='source-exemple'></a><h2> Source / Exemple : <
/h2>

<br /><pre class='code' data-mode='basic'>
// JavaScript Document
/****
************************************************************************

<ul>
<li>________________________________________________________________________	*

</li><li>	About 		:	Convertit jusqu'à  999 999 999 999 999 (billion)		*
</li><l
i>					avec respect des accords								*
</li><li>_____________________________
____________________________________________	*			
</li><li>	Auteur  	:	GALA OUS
SE Brice, Engineer programmer of management		*
</li><li>	Mail    	:	bricegala@y
ahoo.fr, bricegala@gmail.com 										*
</li><li>	Tél	    	:	+237 99 37 95 83/
 +237 79 99 82 80										*
</li><li>	Copyright 	:	avril  2007												*
<
/li><li>________________________________________________________________________
_	*
<ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul
><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul
><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul
><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul
><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul
><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul
><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul
><li><ul><li><ul><li><ul><li><ul><li><ul><li><ul><li>
</li></ul></li></ul></li>
</ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li>
</ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li>
</ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li>
</ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li>
</ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li>
</ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li>
</ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li>
</ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li>
</ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li>
</ul></li></ul></li><li>/</li></ul>
function Unite( nombre ){
	var unite;
	sw
itch( nombre ){
		case 0: unite = &quot;zéro&quot;;		break;
		case 1: unite = 
&quot;un&quot;;		break;
		case 2: unite = &quot;deux&quot;;		break;
		case 3: 
unite = &quot;trois&quot;; 	break;
		case 4: unite = &quot;quatre&quot;; 	break
;
		case 5: unite = &quot;cinq&quot;; 	break;
		case 6: unite = &quot;six&quot
;; 		break;
		case 7: unite = &quot;sept&quot;; 	break;
		case 8: unite = &quo
t;huit&quot;; 	break;
		case 9: unite = &quot;neuf&quot;; 	break;
	}//fin swit
ch
	return unite;
}//---------------------------------------------------------
--------------

function Dizaine( nombre ){
	switch( nombre ){
		case 10: di
zaine = &quot;dix&quot;; break;
		case 11: dizaine = &quot;onze&quot;; break;

		case 12: dizaine = &quot;douze&quot;; break;
		case 13: dizaine = &quot;treiz
e&quot;; break;
		case 14: dizaine = &quot;quatorze&quot;; break;
		case 15: d
izaine = &quot;quinze&quot;; break;
		case 16: dizaine = &quot;seize&quot;; bre
ak;
		case 17: dizaine = &quot;dix-sept&quot;; break;
		case 18: dizaine = &qu
ot;dix-huit&quot;; break;
		case 19: dizaine = &quot;dix-neuf&quot;; break;
		
case 20: dizaine = &quot;vingt&quot;; break;
		case 30: dizaine = &quot;trente&
quot;; break;
		case 40: dizaine = &quot;quarante&quot;; break;
		case 50: diz
aine = &quot;cinquante&quot;; break;
		case 60: dizaine = &quot;soixante&quot;;
 break;
		case 70: dizaine = &quot;soixante-dix&quot;; break;
		case 80: dizai
ne = &quot;quatre-vingt&quot;; break;
		case 90: dizaine = &quot;quatre-vingt-d
ix&quot;; break;
	}//fin switch
	return dizaine;
}//-------------------------
----------------------------------------------

function NumberToLetter( nombr
e ){
	var i, j, n, quotient, reste, nb ;
	var ch
	var numberToLetter='';
	//
__________________________________
	
	if(  nombre.toString().replace( / /gi, &
quot;&quot; ).length &gt; 15  )	return &quot;dépassement de capacité&quot;;
	if
(  isNaN(nombre.toString().replace( / /gi, &quot;&quot; ))  )		return &quot;Nomb
re non valide&quot;;

	nb = parseFloat(nombre.toString().replace( / /gi, &quot
;&quot; ));
	if(  Math.ceil(nb) != nb  )	return  &quot;Nombre avec virgule non 
géré.&quot;;
	
	n = nb.toString().length;
	switch( n ){
		 case 1: numberToL
etter = Unite(nb); break;
		 case 2: if(  nb &gt; 19  ){
					   quotient = Ma
th.floor(nb / 10);
					   reste = nb % 10;
					   if(  nb &lt; 71 || (nb &gt
; 79 &amp;&amp; nb &lt; 91)  ){
							 if(  reste == 0  ) numberToLetter = Diz
aine(quotient * 10);
							 if(  reste == 1  ) numberToLetter = Dizaine(quotie
nt * 10) + &quot;-et-&quot; + Unite(reste);
							 if(  reste &gt; 1   ) numbe
rToLetter = Dizaine(quotient * 10) + &quot;-&quot; + Unite(reste);
					   }els
e numberToLetter = Dizaine((quotient - 1) * 10) + &quot;-&quot; + Dizaine(10 + r
este);
				 }else numberToLetter = Dizaine(nb);
				 break;
		 case 3: quotie
nt = Math.floor(nb / 100);
				 reste = nb % 100;
				 if(  quotient == 1 &amp
;&amp; reste == 0   ) numberToLetter = &quot;cent&quot;;
				 if(  quotient == 
1 &amp;&amp; reste != 0   ) numberToLetter = &quot;cent&quot; + &quot; &quot; + 
NumberToLetter(reste);
				 if(  quotient &gt; 1 &amp;&amp; reste == 0    ) num
berToLetter = Unite(quotient) + &quot; cents&quot;;
				 if(  quotient &gt; 1 &
amp;&amp; reste != 0    ) numberToLetter = Unite(quotient) + &quot; cent &quot; 
+ NumberToLetter(reste);
				 break;
		 case 4 :  quotient = Math.floor(nb / 1
000);
					  reste = nb - quotient * 1000;
					  if(  quotient == 1 &amp;&amp
; reste == 0   ) numberToLetter = &quot;mille&quot;;
					  if(  quotient == 1 
&amp;&amp; reste != 0   ) numberToLetter = &quot;mille&quot; + &quot; &quot; + N
umberToLetter(reste);
					  if(  quotient &gt; 1 &amp;&amp; reste == 0    ) nu
mberToLetter = NumberToLetter(quotient) + &quot; mille&quot;;
					  if(  quoti
ent &gt; 1 &amp;&amp; reste != 0    ) numberToLetter = NumberToLetter(quotient) 
+ &quot; mille &quot; + NumberToLetter(reste);
					  break;
		 case 5 :  quot
ient = Math.floor(nb / 1000);
					  reste = nb - quotient * 1000;
					  if( 
 quotient == 1 &amp;&amp; reste == 0   ) numberToLetter = &quot;mille&quot;;
		
			  if(  quotient == 1 &amp;&amp; reste != 0   ) numberToLetter = &quot;mille&q
uot; + &quot; &quot; + NumberToLetter(reste);
					  if(  quotient &gt; 1 &amp;
&amp; reste == 0    ) numberToLetter = NumberToLetter(quotient) + &quot; mille&q
uot;;
					  if(  quotient &gt; 1 &amp;&amp; reste != 0    ) numberToLetter = N
umberToLetter(quotient) + &quot; mille &quot; + NumberToLetter(reste);
					  b
reak;
		 case 6 :  quotient = Math.floor(nb / 1000);
					  reste = nb - quoti
ent * 1000;
					  if(  quotient == 1 &amp;&amp; reste == 0   ) numberToLetter 
= &quot;mille&quot;;
					  if(  quotient == 1 &amp;&amp; reste != 0   ) number
ToLetter = &quot;mille&quot; + &quot; &quot; + NumberToLetter(reste);
					  if
(  quotient &gt; 1 &amp;&amp; reste == 0    ) numberToLetter = NumberToLetter(qu
otient) + &quot; mille&quot;;
					  if(  quotient &gt; 1 &amp;&amp; reste != 0
    ) numberToLetter = NumberToLetter(quotient) + &quot; mille &quot; + NumberTo
Letter(reste);
					  break;
		 case 7: quotient = Math.floor(nb / 1000000);

					  reste = nb % 1000000;
					  if(  quotient == 1 &amp;&amp; reste == 0  )
 numberToLetter = &quot;un million&quot;;
					  if(  quotient == 1 &amp;&amp; 
reste != 0  ) numberToLetter = &quot;un million&quot; + &quot; &quot; + NumberTo
Letter(reste);
					  if(  quotient &gt; 1 &amp;&amp; reste == 0   ) numberToLe
tter = NumberToLetter(quotient) + &quot; millions&quot;;
					  if(  quotient &
gt; 1 &amp;&amp; reste != 0   ) numberToLetter = NumberToLetter(quotient) + &quo
t; millions &quot; + NumberToLetter(reste);
					  break;  
		 case 8: quotien
t = Math.floor(nb / 1000000);
					  reste = nb % 1000000;
					  if(  quotien
t == 1 &amp;&amp; reste == 0  ) numberToLetter = &quot;un million&quot;;
					 
 if(  quotient == 1 &amp;&amp; reste != 0  ) numberToLetter = &quot;un million&q
uot; + &quot; &quot; + NumberToLetter(reste);
					  if(  quotient &gt; 1 &amp;
&amp; reste == 0   ) numberToLetter = NumberToLetter(quotient) + &quot; millions
&quot;;
					  if(  quotient &gt; 1 &amp;&amp; reste != 0   ) numberToLetter = 
NumberToLetter(quotient) + &quot; millions &quot; + NumberToLetter(reste);
				
	  break;  
		 case 9: quotient = Math.floor(nb / 1000000);
					  reste = nb 
% 1000000;
					  if(  quotient == 1 &amp;&amp; reste == 0  ) numberToLetter = 
&quot;un million&quot;;
					  if(  quotient == 1 &amp;&amp; reste != 0  ) numb
erToLetter = &quot;un million&quot; + &quot; &quot; + NumberToLetter(reste);
		
			  if(  quotient &gt; 1 &amp;&amp; reste == 0   ) numberToLetter = NumberToLet
ter(quotient) + &quot; millions&quot;;
					  if(  quotient &gt; 1 &amp;&amp; r
este != 0   ) numberToLetter = NumberToLetter(quotient) + &quot; millions &quot;
 + NumberToLetter(reste);
					  break;  
		 case 10: quotient = Math.floor(nb
 / 1000000000);
						reste = nb - quotient * 1000000000;
						if(  quotient 
== 1 &amp;&amp; reste == 0  ) numberToLetter = &quot;un milliard&quot;;
						i
f(  quotient == 1 &amp;&amp; reste != 0  ) numberToLetter = &quot;un milliard&qu
ot; + &quot; &quot; + NumberToLetter(reste);
						if(  quotient &gt; 1 &amp;&a
mp; reste == 0   ) numberToLetter = NumberToLetter(quotient) + &quot; milliards&
quot;;
						if(  quotient &gt; 1 &amp;&amp; reste != 0   ) numberToLetter = Nu
mberToLetter(quotient) + &quot; milliards &quot; + NumberToLetter(reste);
					
    break;	
		 case 11: quotient = Math.floor(nb / 1000000000);
						reste = 
nb - quotient * 1000000000;
						if(  quotient == 1 &amp;&amp; reste == 0  ) n
umberToLetter = &quot;un milliard&quot;;
						if(  quotient == 1 &amp;&amp; re
ste != 0  ) numberToLetter = &quot;un milliard&quot; + &quot; &quot; + NumberToL
etter(reste);
						if(  quotient &gt; 1 &amp;&amp; reste == 0   ) numberToLett
er = NumberToLetter(quotient) + &quot; milliards&quot;;
						if(  quotient &gt
; 1 &amp;&amp; reste != 0   ) numberToLetter = NumberToLetter(quotient) + &quot;
 milliards &quot; + NumberToLetter(reste);
					    break;	
		 case 12: quotie
nt = Math.floor(nb / 1000000000);
						reste = nb - quotient * 1000000000;
		
				if(  quotient == 1 &amp;&amp; reste == 0  ) numberToLetter = &quot;un millia
rd&quot;;
						if(  quotient == 1 &amp;&amp; reste != 0  ) numberToLetter = &q
uot;un milliard&quot; + &quot; &quot; + NumberToLetter(reste);
						if(  quoti
ent &gt; 1 &amp;&amp; reste == 0   ) numberToLetter = NumberToLetter(quotient) +
 &quot; milliards&quot;;
						if(  quotient &gt; 1 &amp;&amp; reste != 0   ) n
umberToLetter = NumberToLetter(quotient) + &quot; milliards &quot; + NumberToLet
ter(reste);
					    break;	
		 case 13: quotient = Math.floor(nb / 1000000000
000);
						reste = nb - quotient * 1000000000000;
						if(  quotient == 1 &a
mp;&amp; reste == 0  ) numberToLetter = &quot;un billion&quot;;
						if(  quot
ient == 1 &amp;&amp; reste != 0  ) numberToLetter = &quot;un billion&quot; + &qu
ot; &quot; + NumberToLetter(reste);
						if(  quotient &gt; 1 &amp;&amp; reste
 == 0   ) numberToLetter = NumberToLetter(quotient) + &quot; billions&quot;;
		
				if(  quotient &gt; 1 &amp;&amp; reste != 0   ) numberToLetter = NumberToLett
er(quotient) + &quot; billions &quot; + NumberToLetter(reste);
					    break; 
	
		 case 14: quotient = Math.floor(nb / 1000000000000);
						reste = nb - qu
otient * 1000000000000;
						if(  quotient == 1 &amp;&amp; reste == 0  ) numbe
rToLetter = &quot;un billion&quot;;
						if(  quotient == 1 &amp;&amp; reste !
= 0  ) numberToLetter = &quot;un billion&quot; + &quot; &quot; + NumberToLetter(
reste);
						if(  quotient &gt; 1 &amp;&amp; reste == 0   ) numberToLetter = N
umberToLetter(quotient) + &quot; billions&quot;;
						if(  quotient &gt; 1 &am
p;&amp; reste != 0   ) numberToLetter = NumberToLetter(quotient) + &quot; billio
ns &quot; + NumberToLetter(reste);
					    break; 	
		 case 15: quotient = Ma
th.floor(nb / 1000000000000);
						reste = nb - quotient * 1000000000000;
			
			if(  quotient == 1 &amp;&amp; reste == 0  ) numberToLetter = &quot;un billion
&quot;;
						if(  quotient == 1 &amp;&amp; reste != 0  ) numberToLetter = &quo
t;un billion&quot; + &quot; &quot; + NumberToLetter(reste);
						if(  quotient
 &gt; 1 &amp;&amp; reste == 0   ) numberToLetter = NumberToLetter(quotient) + &q
uot; billions&quot;;
						if(  quotient &gt; 1 &amp;&amp; reste != 0   ) numbe
rToLetter = NumberToLetter(quotient) + &quot; billions &quot; + NumberToLetter(r
este);
					    break; 	
	 }//fin switch
	 /*respect de l'accord de quatre-vi
ngt*/
	 if(  numberToLetter.substr(numberToLetter.length-&quot;quatre-vingt&quo
t;.length,&quot;quatre-vingt&quot;.length) == &quot;quatre-vingt&quot;  ) number
ToLetter = numberToLetter + &quot;s&quot;;
	 
	 return numberToLetter;
}//---
--------------------------------------------------------------------
</pre>
<b
r /><a name='conclusion'></a><h2> Conclusion : </h2>

<br />Bonne programmation
 !!!
