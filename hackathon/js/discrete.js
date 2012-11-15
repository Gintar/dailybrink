/** -------- REQUIRE JQUERY with Cerdic's jQl ---------- **/
try{
	var theory = theory||require('./theory.js').theory;
}catch(e){};var window = window||false;
if(window && !jQuery){
	var jQl={q:[],dq:[],ready:function(a){typeof a=="function"&&jQl.q.push(a);return jQl},unq:function(){for(var a=0;a<jQl.q.length;a++)jQl.q[a]();jQl.q=[]},bId:null,boot:function(a){if(typeof window.jQuery.fn=="undefined"){if(!jQl.bId)jQl.bId=setInterval(function(){jQl.boot(a)},25)}else{jQl.bId&&clearInterval(jQl.bId);jQl.bId=0;jQl.unqjQdep();$(jQl.unq());typeof a=="function"&&a()}},booted:function(){return jQl.bId===0},loadjQ:function(a,c){setTimeout(function(){var b=document.createElement("script"); b.src=a;document.getElementsByTagName("head")[0].appendChild(b)},1);jQl.boot(c)},loadjQdep:function(a){jQl.loadxhr(a,jQl.qdep)},qdep:function(a){if(a)typeof window.jQuery.fn!=="undefined"&&!jQl.dq.length?jQl.rs(a):jQl.dq.push(a)},unqjQdep:function(){if(typeof window.jQuery.fn=="undefined")setTimeout(jQl.unqjQdep,50);else{for(var a=0;a<jQl.dq.length;a++)jQl.rs(jQl.dq[a]);jQl.dq=[]}},rs:function(a){var c=document.createElement("script");document.getElementsByTagName("head")[0].appendChild(c);c.text= a},loadxhr:function(a,c){var b;b=jQl.getxo();b.onreadystatechange=function(){b.readyState!=4||200!=b.status||c(b.responseText,a)};try{b.open("GET",a,true);b.send("")}catch(d){}},getxo:function(){var a=false;try{a=new XMLHttpRequest}catch(c){for(var b=["MSXML2.XMLHTTP.5.0","MSXML2.XMLHTTP.4.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],d=0;d<b.length;++d){try{a=new ActiveXObject(b[d])}catch(e){continue}break}}finally{return a}}}; if(typeof window.jQuery=="undefined")var $=jQl.ready,jQuery=$;
	jQl.loadjQ('http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js');
}
/** ^^^ dependency ^^^ **/
(function(a){
	if(!a) return false;
	var self = a;
	self.os = (function(b,c,fn){
		var self = {};
		a.log(self.name = 'os');
		self.is = (function(b,c,fn){
			return (window)?{
				win: (navigator.userAgent.search("Win") >= 0)? true:false
				,lin: (navigator.userAgent.search("Linux") >= 0)? true:false
				,mac: (navigator.userAgent.search("Mac") >= 0)? true:false
				,and: (navigator.userAgent.toLowerCase().search("android") >= 0)? true:false
				,ios: (navigator.userAgent.toLowerCase().search('ipod') >= 0 
					|| navigator.userAgent.toLowerCase().search('iphone') >= 0 
					|| navigator.userAgent.toLowerCase().search('ipad') >= 0)? true:false
			}:{node:true}
		})();
		return self;
	})();
	self.device = (function(b,c,fn){
		var self = {};
		a.log(self.name = 'device');
		self.is = (function(b,c,fn){
			return {
			}
		})();
		self.size = (function(b,c,fn){
			var self = {};
			if(!window) return false;
			self.x = self.width = screen.width;
			self.y = self.height = screen.height;
			return self;
		})();
		return self;
	})();
	self.mouse = (function(b,c,fn){
		var self = mouse = {};
		a.log(self.name = 'mouse');
		self.x = 0;
		self.y = 0;
		self.left = false;
		self.right = false;
		self.still = [];
		self.move = (function(e){
			mouse.x_ = mouse.x;
			mouse.y_ = mouse.y;
			if (e.pageX || e.pageY){
				mouse.x = e.pageX;
				mouse.y = e.pageY;
				mouse.target = e.target;
			}
			else if (e.clientX || e.clientY){
				mouse.x = e.clientX + document.body.scrollLeft
					+ document.documentElement.scrollLeft;
				mouse.y = e.clientY + document.body.scrollTop
					+ document.documentElement.scrollTop;
				mouse.target = e.srcElement;
			}
		});
		self.stop = (function(b,c,fn){
			var args = a.fns.sort(a.list.slit.call(arguments, 0));
			args.f = a.list.ebb(args.f,1);
			args.n = a.list.ebb(args.n,1);
			if(args.f && a.num.is(args.n)){
				this.pauses = this.pauses||[];
				this.pauses.push({f:args.f,n:args.n});
			}
			a.obj.each(this.still,function(i,v){
				clearTimeout(v);
			});
			a.obj.each(this.pauses,function(i,v){
				mouse.still.push(a.time.wait(v.f,v.n));
			});
		});
		self.down = (function(e){
			if(!e) return false;
			mouse._x = mouse.x;
			mouse._y = mouse.y;
			$(document).trigger("a:mouse/"+mouse.which(e)+"/down");
			return true; // DETERMINE EXCEPTIONS
		});
		self.up = (function(e){
			if(mouse.left){
				$(document).trigger('a:mouse/left/up');
			} else if(mouse.right){
				$(document).trigger('a:mouse/right/up');
			}
			mouse.left = false;
			mouse.right = false;
			return true;
		});
		self.click = (function(e){
			return true;
		});
		self.which = (function(e){
			function left(e){
				if (e.which) {
					if(e.which == 3) return false;
					else if(e.which == 1) return true;
				} else if (e.button) {
					if(e.button == 2) return false;
					else if(e.button == 1) return true;
				}
			}
			function right(e){
				return !left(e);
			}
			if(left(e)) {
				mouse.left = true;
				return "left";
			} else if(right(e)) {
				mouse.right = true;
				return "right";
			}
		});
		self.on = (function(fltr){
			if(fltr){
			
			}else{
				return $((window.event||{}).target);
			}
		});
		return self;
	})();
	self.key = (function(b,c,fn){
		var self = key = {};
		a.log(self.name = 'key');
		self.e = window.event;
		self.is = '';
		self.is_ = '';
		self.combo = [];
		self.trail = [];
		self.on = {};
		self.down = (function(e){
			if(!e) return false;
			key.e = e;
			key._is = a.text.caps(key.tag(e));
			if(key._is == key.is) return a("key.tame->")();
			key.on[key.is = key._is] = true;
			key.combo.push(key.is);
			key.trail.push(key.is);
			key.trail = key.trail.slice(-12);
			$(document).trigger("a:key/"+key.combo.join('+')+"/down");
			a.obj.each(key.trail,function(i,v){
				$(document).trigger("a:key/"+key.trail.slice(-i).join(',')+"/down");
			});
			$(document).trigger("a:key/down");
			return a("key.tame->")();
		});
		self.up = (function(e){
			if(!e) return false;
			key.e = e;
			key.is_ = a.text.caps(key.tag(e));
			key.on[key.is_] = false;
			a.list.plop(key.combo,key.is_);
			key.is = a.list.ebb(key.combo,-1)||'';
			$(document).trigger("a:key/"+key.is_+"/up");
			$(document).trigger("a:key/up");
			return true; // DETERMINE EXCEPTIONS
		});
		self.tag = (function(code){
			if(!code) return false;
			code = (code.keyCode)?code.keyCode:code;
			code = (typeof code == 'number')? 'kc'+code:code;
			return key.special[code] || String.fromCharCode(a.num.i(code.substring(2)));
		});
		self.code = (function(tag){
			if(!tag) return false;
			return (tag.length == 1)? a.text.caps(tag).charCodeAt(0) : key.special[tag.toLowerCase()];
		});
		self.tame = function(){return !(key._is in key.strange)};
		self.strange = {' ':1,ERASE:1};
		self.reserved = {Z:1,X:1,C:1,V:1,R:1,T:1,N:1,F12:1,F11:1,PU:1,PD:1,pu:1,pd:1}; // reserved keys
		self.special = {
			'esc':27
			,'kc27': 'esc'
			,'escape':27
			,'tab':9
			,'kc9':'tab'
			,'space':32
			,' ':32
			,'kc32':' '
			,'return':13
			,'enter':13
			,'kc13':'enter'
			,'backspace':8
			,'erase':8
			,'kc8': 'erase'
			
			,'kc220':'\\'
			,'\\':220
			
			,'scrolllock':145
			,'scroll_lock':145
			,'scroll':145
			,'kc145':'scroll'
			,'capslock':20
			,'caps_lock':20
			,'caps':20
			,'kc20':'caps'
			,'numlock':144
			,'num_lock':144
			,'num':144
			,'kc144':'num'
			
			,'pause':19
			,'break':19
			
			,'insert':45
			,'home':36
			,'kc36':'home'
			,'delete':46
			,'del':46
			,'kc46':'del'
			,'end':35
			,'kc35':'end'
			
			,'pageup':33
			,'page_up':33
			,'pu':33
			,'kc33':'pu'
			
			,'pagedown':34
			,'page_down':34
			,'pd':34
			,'kc34':'pd'
			
			,'left':37
			,'kc37':'←'
			,'←':37
			
			,'up':38
			,'kc38':'↑'
			,'↑':38

			,'right':39
			,'kc39':'→'
			,'→':39

			,'down':40
			,'kc40':'↓'
			,'↓':40
			
			,'kc16':'shift'
			,'shift':16
			,'kc17':'ctrl'
			,'ctrl':17
			,'kc91':((a.os.is.win||a.os.is.lin||a.os.is.and)?'¤':'cmd')
			,'¤':91
			,'cmd':91
			,'kc18':((a.os.is.win||a.os.is.lin||a.os.is.and)?'alt':'opt')
			
			,'kc219':'['
			,'[':219
			,'kc221':']'
			,']':221
			,'kc192':'`'
			,'`':192
			,'kc189':'-'
			,'-':189
			,'kc187':'='
			,'=':187
			,'kc186':';'
			,';':186
			,'kc222':"'"
			,"'":222
			,'kc191':'/'
			,'/':191
			,'kc190':'.'
			,'.':191
			,'kc188':','
			,',':188
			
			,'f1':112
			,'kc112':'F1'
			,'f2':113
			,'kc113':'F2'
			,'f3':114
			,'kc114':'F3'
			,'f4':115
			,'kc115':'F4'
			,'f5':116
			,'kc116':'F5'
			,'f6':117
			,'kc117':'F6'
			,'f7':118
			,'kc118':'F7'
			,'f8':119
			,'kc119':'F8'
			,'f9':120
			,'kc120':'F9'
			,'f10':121
			,'kc121':'F10'
			,'f11':122
			,'kc122':'F11'
			,'f12':123
			,'kc123':'F12'
		};self.special[((a.os.is.win||a.os.is.lin||a.os.is.and)?'alt':'opt')] = 18;
		return self;
	})();
	self.touch = (function(b,c,fn){
		var self = touch = {};
		a.log(self.name = 'touch');		
		self.opt = {
			click: 250
			,dbl: 500
			,mouse: true
			,react: true
		}
		self.count = 0;
		self.point = [{},{},{},{},{},{},{},{},{},{},{}];
		self.move = (function(e){
			var multi = e.touches;
			mouse.x = mouse.x_ = multi[0].pageX;
			mouse.y = mouse.y_ = multi[0].pageY;
			a.obj.each(multi,function(i,v){
				v.x = v.x_ = v.pageX;
				v.y = v.y_ = v.pageY;
				if(!v.id) touch.point[v.id = (i+1)] = v||{}; // Android does not update without this.
			});
			if(touch.opt.mouse) $(document).trigger('mousemove');
			e.stopPropagation();e.preventDefault();
		});
		self.start = (function(e){
			touch.time = a.time.is();
			var multi = e.touches, on = e.changedTouches;
			mouse._x = mouse.x_ = mouse.x = multi[0].pageX;
			mouse._y = mouse.y_ = mouse.y = multi[0].pageY;
			mouse.target = e.touches[0].target;
			touch.count = multi.length;
			a.obj.each(multi,function(i,v){
				v._x = v.x_ = v.x = v.pageX;
				v._y = v.y_ = v.y = v.pageY;
				touch.point[v.id = (i+1)] = v||{};
			});
			
			if(touch.opt.mouse) $(document).trigger('mousedown');
		});
		self.end = (function(e){
			var t = a.time.is(), multi = e.touches, off = e.changedTouches;
			if((touch.count = multi.length) == 0){
				touch.point = [{},{},{},{},{},{},{},{},{},{},{}];
			}
			if(t-touch.time < touch.opt.click){
				if(touch.opt.mouse) $(mouse.target).trigger('click');
			}
			if(t-touch.dbl < touch.opt.dbl) {
				if(touch.opt.mouse) $(mouse.target).trigger('dblclick');
			}
			touch.dbl = t;
			if(touch.opt.mouse) $(document).trigger('mouseup');
			e.preventDefault();
		});
		self.gest = (function(b,c,fn){			
			var self = gest = {};
			a.log(self.name = 'gest');
			self.angle = 0;
			self.scale = 1.0;
			self.start = (function(e){
			
			});
			self.morph = (function(e){
				gest.angle = e.rotation;
				gest.scale = e.scale;
				$(document).trigger('a:touch/gest/morph');
			});
			self.end = (function(e){
			
			});
			return self;
		})();
		self.feel = (function(e){
			touch.opt.react = e = a.bi.is(e)?e:!touch.opt.react;
			if(e){
				try{
					document.addEventListener("touchmove", touch.move, true);
					document.addEventListener('touchstart', touch.start, true);
					document.addEventListener('touchend', touch.end, true);
					document.addEventListener("gesturechange", touch.gest.morph, true);
					document.addEventListener('gesturestart', touch.gest.start, true);
					document.addEventListener('gestureend', touch.gest.end, true);
				}catch(e){
				}
			} else {
				try{
					document.removeEventListener("touchmove", touch.move, true);
					document.removeEventListener('touchstart', touch.start, true);
					document.removeEventListener('touchend', touch.end, true);
					document.removeEventListener("gesturechange", touch.gest.morph, true);
					document.removeEventListener('gesturestart', touch.gest.start, true);
					document.removeEventListener('gestureend', touch.gest.end, true);
				}catch(e){
				}
			}
		});
	})();
	self.drag = (function(){
		var self = drag = {};
		a.log(self.name = 'drag');		
		self.enter = (function(e){
			console.log("enter! ");
			console.log(mouse.on());
			$(document).trigger('dragenter',[e]);
		});
		self.over = (function(e){
			$(document).trigger('dragover',[e]);
		});
		self.drop = (function(e){
			$(document).trigger('mousemove',[e]);
			$(document).trigger('dragdrop',[e]);
			e.preventDefault();
			return false;
		});
		self.change = (function(e){
			$(document).trigger('dragchange',[e]);
		});
	})();
	self.doc = doc = {
	}
	/** -------- INITIATE JQUERY BINDINGS -------- **/
	if(window){
		$(document).ready(function(){
			$(document).mousemove(function(e,el){
				if(el) e = el;
				if(!e) var e = window.event;
				e.stopPropagation();e.preventDefault();
				mouse.move(e);
				mouse.stop();
			}).mousedown(function(e){
				if(!e) var e = window.event;
				if(mouse.down(e)){
					return true;
				}
				e.stopPropagation();e.preventDefault();
			}).mouseup(function(e){
				if(!e) var e = window.event;
				if(mouse.up(e)){
					return true;
				}
				e.stopPropagation();e.preventDefault();
			}).click(function(e){
				mouse.click(e);
			}).dblclick(function(e){
				
			}).keydown(function(e){
				if(key.down(e)){
					return true;
				}
				e.stopPropagation();e.preventDefault();
			}).keyup(function(e){
				if(key.up(e)){
					return true;
				}
				e.stopPropagation();e.preventDefault();
			}).bind('keydown keypress keyup',function(e){
				//e.stopPropagation();e.preventDefault();
			});
			/** -- DEFAULT SETTINGS -- **/
			mouse.stop(function(){
					$(document).trigger('mousestop');
			},75); // MOUSESTOP DELAY
			$("textarea, input, [contenteditable=true]").live('focus',function(){
				key.tame = function(){return true};
			}).live('blur',function(){
				key.tame = function(){return false}; // PREVENT UNLOAD & SCROLL BOTTOM
			});
		});
	}
	(function(window){if(!window)return{};		
		touch.feel(touch.opt.react);
		function afocus(e){
			if(e) if(e.target != window) return true;
			a.key.combo = [];
			try{
				document.addEventListener('dragenter', drag.enter, false);
				document.addEventListener("change", drag.change, false);
				document.addEventListener('drop', drag.drop, false);
				document.addEventListener('dragover', drag.over, false);
			}catch(e){console.log(e);};
		};
		document.onfocusin = afocus;
		window.onfocus = afocus;
	})(window);
})(theory);
theory.test(function(){exports.theory = theory});