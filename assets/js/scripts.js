function facebook_click() {
	u=location.href;
	t=document.title;

	window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','resizable=0,scrollbar=0,toolbar=0,status=0,width=626,height=436,left='+(screen.availWidth/2-313)+',top='+(screen.availHeight/2-218)+'');
	return false;
}
   	
function googleplus_click() {
	u=location.href;
	t=document.title;

	window.open('https://plus.google.com/share?url='+encodeURIComponent(u),'sharer','resizable=0,scrollbar=0,toolbar=0,status=0,width=512,height=490,left='+(screen.availWidth/2-256)+',top='+(screen.availHeight/2-245)+'');
	return false;
}
   	
function twitter_click() {
	u=location.href;
	t=document.title;

	window.open('https://twitter.com/share?url='+encodeURIComponent(u)+'&text='+encodeURIComponent(t)+' &via=marcelomenezes','sharer','resizable=0,scrollbar=0,toolbar=0,status=0,width=512,height=260,left='+(screen.availWidth/2-256)+',top='+(screen.availHeight/2-130)+'');
	return false;
}

function linkedin_click() {
	u=location.href;
	t=document.title;

	window.open('http://www.linkedin.com/shareArticle?mini=true&url='+encodeURIComponent(u)+'&title='+encodeURIComponent(t)+'','sharer','resizable=0,scrollbar=0,toolbar=0,status=0,width=600,height=490,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-245)+'');
	return false;
}