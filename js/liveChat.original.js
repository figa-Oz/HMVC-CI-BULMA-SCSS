// if (/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
// 	var swtJS = '<script language="javascript" src="http://kln.zoossoft.net/JS/LsJS.aspx?siteid=KLN19529695&lng=en&float=1"></script>';
// 	document.write(swtJS);
// } else {
	var swtJS = '<script language="javascript" src="http://kln.zoossoft.net/JS/LsJS.aspx?siteid=KLN19529695&lng=en"></script>';
	document.write(swtJS);
	document.write('<style>#LRfloater0{display:none;}#LRdiv1{display:none!important;}</style>');
	document.writeln("<style>");
	document.writeln(".id908ad {display:none;}");
	document.writeln("</style>");
	var ie = -[1, ];
	var pos = ['center', 'right', 'bottom', 'left', 'top', 'topLeft', 'topRight', 'bottomLeft', 'bottomRight'];
	var swt = {
		createNew: function() {
			var swt = {};
			swt.status = 1;
			swt.position = 0;
			swt.autoDisplayTime = 0;
			swt.sideSize = 0;
			swt.topSize = 0;
			swt.change = 1;
			swt.reDisplay = 0;
			swt.margins = '0'
			swt.hiddenPlay = '';
			swt.id = '';
			swt.scr = 0;
			swt.inner = '';
			swt.closeText = 'close';
			swt.closeTextColor = 'black';
			swt.fontSize = '12px';
			swt.closePlus = '';
			swt.cursor = 1;
			swt.timer = '';
			swt.e = document.createElement('div');
			swt.x = document.createElement('a');
			swt.show = function() {
				swt.x.innerHTML = this.closeText;
				swt.x.style.color = this.closeTextColor;
				swt.x.style.padding = '0px';
				swt.x.style.background = 'url(about:blank)'; //解决IE6789 下面 解决ie下空标签不显示的问题
				swt.x.style.margin = swt.margins;
				swt.x.style.fontSize = swt.fontSize;
				swt.x.style.position = 'absolute';
				swt.x.style.right = 0;
				swt.x.style.top = 0;
				swt.x.target = '_self';
				if (swt.id != '') {
					swt.x.href = 'javascript:closeAd("' + swt.id + '",' + swt.reDisplay + ',"' + swt.hiddenPlay + '","' + swt.change + '")';
					swt.e.id = 'id' + swt.id + 'ad';
				} else {
					var i = Math.ceil(Math.random() * 1000);
					swt.x.href = 'javascript:closeAd("' + i + '",' + swt.reDisplay + ',"' + swt.hiddenPlay + '","' + swt.change + '")';
					swt.e.id = 'id' + i + 'ad';
				}
				swt.e.innerHTML += swt.inner;
				swt.e.style.position = 'absolute';
				swt.e.style.zIndex = 998;
				swt.e.style.visibility = 'hidden';
				if (swt.cursor != '') swt.e.style.cursor = 'pointer';
				if (swt.closePlus != '') {
					var xp = document.createElement('a');
					var sty = getStyle('position:absolute;' + swt.closePlus);
					for (st in sty) {
						xp.style[st] = sty[st];
					}
					xp.style.background = 'url(about:blank)'; //解决IE6789 下面 解决ie下空标签不显示的问题
					xp.target = '_self';
					xp.href = swt.x.href;
					swt.e.appendChild(xp);
				}
				if (ie) {
					window.addEventListener('load', function() {
						document.body.appendChild(swt.e);
						swt.e.appendChild(swt.x);
						setTimeout(function() {
							swt.display(swt.e);
						}, swt.autoDisplayTime * 1000)
					}, false);
					window.addEventListener('scroll', function() {
						swt.scroll(swt.e)
					}, false);
					window.addEventListener('resize', function() {
						swt.resize(swt.e)
					}, false);
				} else {
					window.attachEvent('onload', function() {
						document.body.appendChild(swt.e);
						swt.e.appendChild(swt.x);
						setTimeout(function() {
							swt.display(swt.e);
						}, swt.autoDisplayTime * 1000)
					});
					window.attachEvent('onscroll', function() {
						swt.scroll(swt.e)
					});
					window.attachEvent('onresize', function() {
						swt.resize(swt.e)
					});
				}
			}
			swt.display = function(e) {
				var size = GetPageSize();
				switch (swt.position) {
					case 0:
						e.style.left = (size['WinW'] - e.offsetWidth) / 2 + swt.sideSize + 'px';
						e.style.top = size['scroll'] + (size['WinH'] - e.offsetHeight) / 2 + swt.topSize + 'px';
						break;
					case 1:
						e.style.right = swt.sideSize + 'px';
						e.style.top = size['scroll'] + (size['WinH'] - e.offsetHeight) / 2 + swt.topSize + 'px';
						break;
					case 2:
						e.style.left = (size['WinW'] - e.offsetWidth) / 2 + swt.sideSize + 'px';
						e.style.top = size['scroll'] + size['WinH'] - e.offsetHeight + swt.topSize + 'px';
						break;
					case 3:
						e.style.left = swt.sideSize + 'px';
						e.style.top = size['scroll'] + (size['WinH'] - e.offsetHeight) / 2 + swt.topSize + 'px';
						break;
					case 4:
						e.style.left = (size['WinW'] - e.offsetWidth) / 2 + swt.sideSize + 'px';
						e.style.top = size['scroll'] + swt.topSize + 'px';
						break;
					case 5:
						e.style.left = swt.sideSize + 'px';
						e.style.top = size['scroll'] + swt.topSize + 'px';
						break;
					case 6:
						e.style.right = swt.sideSize + 'px';
						e.style.top = size['scroll'] + swt.topSize + 'px';
						break;
					case 7:
						e.style.left = swt.sideSize + 'px';
						e.style.top = size['scroll'] + size['WinH'] - e.offsetHeight + swt.topSize + 'px';
						break;
					case 8:
						e.style.right = swt.sideSize + 'px';
						e.style.top = size['scroll'] + size['WinH'] - e.offsetHeight + swt.topSize + 'px';
						break;
				}
				if (swt.status == 1) e.style.visibility = 'visible';
			}
			swt.scroll = function(e) {
				var c = GetPageSize();
				if (swt.scr == 0) {
					clearInterval(swt.timer);
					swt.timer = setInterval(function() {
						if (swt.position == 0 || swt.position == 1 || swt.position == 3) {
							var h = Math.ceil(c['scroll'] + (c['WinH'] - e.offsetHeight) / 2 - e.offsetTop + swt.topSize);
							if (h != 0) {
								e.style.top = e.offsetTop + Math.ceil(Math.abs(h) / 20) * (h > 0 ? 1 : (-1)) + 'px';
							} else clearInterval(swt.timer);
						} else if (swt.position == 2 || swt.position == 7 || swt.position == 8) {
							var h = Math.ceil(c['scroll'] + c['WinH'] - e.offsetHeight - e.offsetTop + swt.topSize);
							if (h != 0) {
								e.style.top = e.offsetTop + Math.ceil(Math.abs(h) / 20) * (h > 0 ? 1 : (-1)) + 'px';
							} else clearInterval(swt.timer);
						} else {
							var h = Math.ceil(c['scroll'] - e.offsetTop + swt.topSize);
							if (h != 0) {
								e.style.top = e.offsetTop + Math.ceil(Math.abs(h) / 20) * (h > 0 ? 1 : (-1)) + 'px';
							} else clearInterval(swt.timer);
						}
					}, 10);
				} else {
					if (swt.position == 0 || swt.position == 1 || swt.position == 3) e.style.top = c['scroll'] + (c['WinH'] - e.offsetHeight) / 2 + swt.topSize + 'px';
					else if (swt.position == 2 || swt.position == 7 || swt.position == 8) e.style.top = c['scroll'] + c['WinH'] - e.offsetHeight + swt.topSize + 'px';
					else e.style.top = c['scroll'] + swt.topSize + 'px';
				}
			}
			swt.resize = function(e) {
				var l = GetPageSize();
				if (swt.position == 0 || swt.position == 2 || swt.position == 4) {
					e.style.left = (l['WinW'] - e.offsetWidth) / 2 + swt.sideSize + 'px';
				}
			}
			return swt;
		}
	}

	function GetPageSize() {
		var scrW, scrH;
		if (window.innerHeight && window.scrollMaxY) {
			// Mozilla
			scrW = window.innerWidth + window.scrollMaxX;
			scrH = window.innerHeight + window.scrollMaxY;
		} else if (document.body.scrollHeight > document.body.offsetHeight) {
			// all but IE Mac
			scrW = document.body.scrollWidth;
			scrH = document.body.scrollHeight;
		} else if (document.body) { // IE Mac
			scrW = document.body.offsetWidth;
			scrH = document.body.offsetHeight;
		}

		var winW, winH;
		if (window.innerHeight) { // all except IE
			winW = window.innerWidth;
			winH = window.innerHeight;
		} else if (document.documentElement &&
			document.documentElement.clientHeight) {
			// IE 6 Strict Mode
			winW = document.documentElement.clientWidth;
			winH = document.documentElement.clientHeight;
		} else if (document.body) { // other
			winW = document.body.clientWidth;
			winH = document.body.clientHeight;
		}
		var scrollPos;
		if (typeof window.pageYOffset != 'undefined') {
			scrollPos = window.pageYOffset;
		} else if (typeof document.compatMode != 'undefined' &&
			document.compatMode != 'BackCompat') {
			scrollPos = document.documentElement.scrollTop;
		} else if (typeof document.body != 'undefined') {
			scrollPos = document.body.scrollTop;
		}
		var pageW = (scrW < winW) ? winW : scrW;
		var pageH = (scrH < winH) ? winH : scrH;

		return {
			PageW: pageW,
			PageH: pageH,
			WinW: winW,
			WinH: winH,
			scroll: scrollPos
		};
	}

	function openChat(text) {
		if (text != "" || text != null || text != undefined) {
			openZoosUrl('SLHD', '&e=SJHD');
			return false;
		} else {
			openZoosUrl(text);
			return false;
		}
	}

	function closeAd(o, b, c, e) {
		var obj = document.getElementById('id' + o + 'ad');
		obj.style.visibility = 'hidden';
		if (b != 0) {
			setTimeout(function() {
				obj.style.visibility = 'visible';
			}, b * 1000);
		}
		if (c != '') {
			document.getElementById('id' + c + 'ad').style.visibility = 'visible';
			if (e != 0 && b != 0) {
				setTimeout(function() {
					document.getElementById('id' + c + 'ad').style.visibility = 'hidden';
				}, b * 1000);
			}
		}
	}

	function getStyle(string) {
		if (string.charAt(string.length - 1) == ';') {
			string = string.substring(0, string.length - 1);
		}
		var cssArray = string.split(';');
		var styleArray = new Array();
		for (var k = 0; k < cssArray.length; k++) {
			var style = cssArray[k].split(':');
			styleArray[style[0]] = style[1];
		}
		return styleArray;
	}

	var center = swt.createNew();
	var base_url = "http://localhost/gracia/";
	center.position = 4;
	center.topSize = 190;
	center.margins = '0px';
	center.reDisplay = 120;
	center.status = 1;
	center.autoDisplayTime = 0;
	center.hiddenPlay = 3;
	center.id = 2;
	center.scr = '1';
	center.inner = '<a href="javascript:void(0);" onclick="openChat();" target="_blank"><img src="'+base_url+'images/liveChat/chat-center-new.gif" /></a>';
	center.closeText = '<img src="'+base_url+'images/liveChat/blackClose.png"/>';
	center.show();

	var left = swt.createNew();
	left.position = 3;
	left.inner = '<a href="javascript:void(0);" onclick="openChat();" target="_blank"><img src="'+base_url+'images/liveChat/chat-left.gif" style="width:50px !important; top:expression(eval(document.documentElement.scrollTop))" /></a>';
	left.closeText = '<img src="'+base_url+'images/liveChat/blueClose.png"/>';
	left.hiddenPlay = 2;
	left.status = 0;
	left.id = 3;
	left.scr = 1;
	left.topSize = -50;
	left.show();
// }