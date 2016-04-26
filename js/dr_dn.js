 function dropdownlist(listindex)
 {
 
document.formname.sub.options.length = 0;
 switch (listindex)
 {

 case " " :
 document.formname.sub.options[0]=new Option("Select sub","");
 break;
 
 case "engg" :
 document.formname.sub.options[0]=new Option("Select Sub","");
 document.formname.sub.options[0]=new Option("Civil","civil");
 document.formname.sub.options[1]=new Option("Mechanical","mechanical");
 document.formname.sub.options[2]=new Option("CSE/IT","cse-it");
 document.formname.sub.options[3]=new Option("BioTech","bio");
 document.formname.sub.options[5]=new Option("Electronics","ece");
 document.formname.sub.options[6]=new Option("Chemical","chemical");
 document.formname.sub.options[7]=new Option("Electrical","electrical");
 
 /*
 	document.formname.headings.options[0]=new Option("Select headings","");
 */
 
 document.formname.headings.options[0]=new Option("Study Material","sm");
 document.formname.headings.options[1]=new Option("Ebooks","ebook");
 document.formname.headings.options[2]=new Option("G.A.T.E.","gate");
 document.formname.headings.options[3]=new Option("Internships","intern");
 document.formname.headings.options[4]=new Option("Interview","interview");
 //document.formname.headings.options[4]=new Option("Events","event");
 break;
 
 case "reads" :
 document.formname.sub.options[0]=new Option("Select sub","");
 document.formname.sub.options[1]=new Option("Language","lang");
 document.formname.sub.options[2]=new Option("Novels","novel");
 document.formname.sub.options[3]=new Option("News","news");
 document.formname.sub.options[4]=new Option("BioGraphy","biography");
 document.formname.sub.options[5]=new Option("Research","research");
 document.formname.sub.options[6]=new Option("Magazines","mag");
 break;

 case "entertain" :
 document.formname.sub.options[0]=new Option("Select Entertainment","");
 document.formname.sub.options[1]=new Option("MP3","mp3");
 document.formname.sub.options[2]=new Option("Video","videos");
 document.formname.sub.options[3]=new Option("Movies","movies");
 document.formname.sub.options[4]=new Option("Gaming","games");
 break;
 
 case "daily" :
 document.formname.sub.options[0]=new Option("Select Daily Use sub","");
 document.formname.sub.options[1]=new Option("Shopping","shopp");
 document.formname.sub.options[2]=new Option("U & HOME","u_home");
 document.formname.sub.options[3]=new Option("Travel","travel");
 break;
 
 case "job_entrance" :
 document.formname.sub.options[0]=new Option("Select JOB/Entrance sub","");
 document.formname.sub.options[1]=new Option("UPSC","upsc");
 break;

 }
 return true;
 }



 function dropdownlist1(listindex)
 {
 	switch (listindex)
 {

 case " " :
 document.formname.sub.options[0]=new Option("Select sub","");
 break;

 case "lang" :
 document.formname.headings.options[0]=new Option("Select headings","");
 document.formname.headings.options[1]=new Option("English","en");
 document.formname.headings.options[2]=new Option("German","ge");
 document.formname.headings.options[3]=new Option("Spanish","sp");
 document.formname.headings.options[4]=new Option("Chinese","ch");
 break;
 case "novel" :
 document.formname.headings.options[0]=new Option("Select headings","");
 document.formname.headings.options[1]=new Option("Novels","novel");
 document.formname.headings.options[2]=new Option("BioGraphy","biography");
 break;

 case "news" :
 document.formname.headings.options[0]=new Option("Select headings","");
 document.formname.headings.options[1]=new Option("Hindi","hi");
 document.formname.headings.options[2]=new Option("English","en");
 break;

 case "research" :
 document.formname.headings.options[0]=new Option("Papers","research_paper");
 break;
 
 case "mag" :
 document.formname.headings.options[0]=new Option("Select headings","");
 document.formname.headings.options[1]=new Option("Online Reading","online");
 document.formname.headings.options[2]=new Option("Download and Read","download");
 break;
 
 case "shopp" :
 document.formname.headings.options[0]=new Option("Select headings","");
 document.formname.headings.options[1]=new Option("At Your fingers","one_touch");
 break;

 case "u_home" :
 document.formname.headings.options[0]=new Option("Select headings","");
 document.formname.headings.options[1]=new Option("Sale/Purchase","sale_purchase");
 document.formname.headings.options[2]=new Option("Rent","rent");
 document.formname.headings.options[3]=new Option("Verify Your Property","verify");
 break;
 
 case "travel" :
 document.formname.headings.options[0]=new Option("Select headings","");
 document.formname.headings.options[1]=new Option("Cab","cab");
 document.formname.headings.options[2]=new Option("Bus","bus");
 document.formname.headings.options[3]=new Option("Flight","flight");
 document.formname.headings.options[4]=new Option("Train","train");
 break; 

 case "mp3" : 
// document.formname.typ.options[0]=new Option("Select Type","");
 //document.formname.typ.options[0]=new Option("AUDIO","audio");
 //document.formname.typ.options[1]=new Option("VIDEO","video");

 document.formname.headings.options[0]=new Option("Select headings","");
 document.formname.headings.options[1]=new Option("HD-Bolly","hd_bolly");
 document.formname.headings.options[2]=new Option("HD-ENGLISH","hd_eng");
 document.formname.headings.options[3]=new Option("Normal-BOLLY","n_bolly");
 document.formname.headings.options[4]=new Option("Normal-English","n_eng");
 document.formname.headings.options[5]=new Option("Bhojpuri","bhoj");
 document.formname.headings.options[6]=new Option("Bhakti","devo");
 document.formname.headings.options[7]=new Option("Live Streaming","stream");
 break;

case "videos" :
 //document.formname.typ.options[0]=new Option("Select Type","");
 //document.formname.typ.options[0]=new Option("AUDIO","audio");
 //document.formname.typ.options[1]=new Option("VIDEO","video");

 document.formname.headings.options[0]=new Option("Select headings","");
 document.formname.headings.options[1]=new Option("HD-Bolly","hd_bolly");
 document.formname.headings.options[2]=new Option("HD-ENGLISH","hd_eng");
 document.formname.headings.options[3]=new Option("Normal-BOLLY","n_bolly");
 document.formname.headings.options[4]=new Option("Normal-English","n_eng");
 document.formname.headings.options[5]=new Option("Bhojpuri","bhoj");
 document.formname.headings.options[6]=new Option("Bhakti","devo");
 document.formname.headings.options[7]=new Option("Live Streaming","stream");
 document.formname.headings.options[8]=new Option("MP4","mp4");
 document.formname.headings.options[9]=new Option("3GP","3gp");
 break;

 case "movies" :
 //document.formname.typ.options[0]=new Option("Select Type","");
 //document.formname.typ.options[0]=new Option("AUDIO","audio");
 //document.formname.typ.options[1]=new Option("VIDEO","video");

 document.formname.headings.options[0]=new Option("Select headings","");
 document.formname.headings.options[1]=new Option("Bollywood","bolly");
 document.formname.headings.options[2]=new Option("Hollywood","holly");
 break;

case "games" :
 //document.formname.typ.options[0]=new Option("Select Type","");
 //document.formname.typ.options[0]=new Option("AUDIO","audio");
 //document.formname.typ.options[1]=new Option("VIDEO","video");

 document.formname.headings.options[0]=new Option("Select headings","");
 document.formname.headings.options[1]=new Option("Online","online");
 document.formname.headings.options[2]=new Option("Downloaded","download");
 break;

 case "upsc" :
 document.formname.typ.options[0]=new Option("Select Type","");
 document.formname.typ.options[1]=new Option("CDS","cds");
 document.formname.typ.options[2]=new Option("CISF","cisf");
 document.formname.typ.options[3]=new Option("NDA","nda");
 document.formname.typ.options[4]=new Option("SCRA","scra");
 document.formname.typ.options[5]=new Option("IES-ISS","ies_iss");
 document.formname.typ.options[6]=new Option("CMS","cms");
 document.formname.typ.options[7]=new Option("CGS","cgs");
 document.formname.typ.options[8]=new Option("CAPF","capf");
 
 document.formname.headings.options[0]=new Option("Select headings","");
 document.formname.headings.options[1]=new Option("Exam Details","exam_details");
 document.formname.headings.options[2]=new Option("Syllabus","syllabus");
 document.formname.headings.options[3]=new Option("Study Material","sm");
 document.formname.headings.options[4]=new Option("Previous Question Papers","pre_papers");
 break;
 
 }
 return true;
}


/*
 document.formname.sub.options[0]=new Option("Select sub","");
 document.formname.sub.options[1]=new Option("","");
 document.formname.sub.options[2]=new Option("","");
 document.formname.sub.options[3]=new Option("","");
 document.formname.sub.options[4]=new Option("","");
 document.formname.sub.options[5]=new Option("","");
  
 document.formname.headings.options[0]=new Option("Select headings","");
 document.formname.headings.options[1]=new Option("","");
 document.formname.headings.options[2]=new Option("","");
 document.formname.headings.options[3]=new Option("","");
 document.formname.headings.options[4]=new Option("","");
 document.formname.headings.options[5]=new Option("","");
 break;
 
*/