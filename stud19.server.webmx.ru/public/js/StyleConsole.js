var page, startP, endP;

document.getElementById('bold').onclick = function(e) {
	setTag('b', startP, endP);
};

document.getElementById('italic').onclick = function(e) {
	setTag('i', startP, endP);
};

document.getElementById('underline').onclick = function(e) {
	setTag('u', startP, endP);
};

document.getElementById('paragraph').onclick = function(e) {
	setTag('p', startP, endP);
};

document.getElementById('HeaderSecLvl').onclick = function(e) {
	setTag('h2', startP, endP);
};

document.getElementById('HeaderFirLvl').onclick = function(e) {
	setTag('h1', startP, endP);
};

document.getElementById('Alink').onclick = function(e) {
	setTag('a', startP, endP);
};

function setTag(tagname, posb, pose) {
	var value = page.value.substring(posb, pose);
	var usertext =  page.value;
	page.value = usertext.substring(0,posb) + "<" + tagname + ">" + value + "</" + tagname + ">" + usertext.substring(pose,usertext.length);
}

document.getElementById('TArea').onmouseout = function (e) {
	page = document.getElementById('TArea');
	startP = page.selectionStart;
	endP = page.selectionEnd;	
}

document.getElementById('print').onclick = function(e) {
	console.log('ok!');
	document.getElementById('mon').innerHTML = document.getElementById('page').value;
}