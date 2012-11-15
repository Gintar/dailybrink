/**
BUG: TODO: Use $.proxy on children objects, avoid SELF = self!
**/
var console=console||{log:function(){}};
{var theory = (function(b,c,fn){
	var self = a = theory;
	self._arguments = Array.prototype.slice.call(arguments, 0);
	self.name = "a";
	self.version = 2;
	if(self._arguments.length){
		return self.get = (function(b){
			var self = {}, r;
			self.args = a.fns.sort(b);
			/**
			
			**/
			if(self.args.t.length == 1){
				r = a.obj.get(
					a
					,a.list.ebb(self.args.t,1)
				);
			}
			return r;
		})(self._arguments);
	}
	self.log = (function(b,c,fn){
		var self = {};
		//console.log(b);
		return self;
	});
	self.fns = (function(b,c,fn){
		var self = fns = {};
		a.log(self.name = 'fns');
		self.is = (function(b,c,fn){
			return b instanceof Function?true:false;
		});
		self.ids = 1;
		self.pass = (function(fn,context){ // from jQuery.proxy()
			if (a.text.is(context)){
				var tmp = fn[context];
				context = fn;
				fn = tmp;
			}
			// Quick check to determine if target is callable, in the spec
			// this throws a TypeError, but we will just return undefined.
			if (!this.is(fn)) {
				return undefined;
			}
			// Simulated bind
			var args = a.list.slit.call(arguments,2),
				proxy = function() {
					return fn.apply(context,args.concat(a.list.slit.call(arguments)));
				};
			// Set the guid of unique handler to the same of original handler, so it can be removed
			proxy.id = fn.id = fn.id || proxy.id || this.ids++;
			return proxy;
		});
		self.sort = (function(b){
			if(!b) return {e:"Empty"};
			var args = a.list.slit.call(b, 0), r = {b:[],n:[],t:[],l:[],o:[],f:[]}
			for(var i in args){
				if (this.is(args[i])){
					r.f.push(args[i]);
				} else if(a.list.is(args[i])){
					r.l.push(args[i]);
				} else if(a.obj.is(args[i])){
					r.o.push(args[i]);
				} else if(a.num.is(args[i])) {
					r.n.push(args[i]);
				} else if(a.text.is(args[i])){
					r.t.push(args[i]);
				} else if(a.bi.is(args[i])){
					r.b.push(args[i]);
				}
			}
			return r;
		});
		return self;
	})();
	self.list = (function(b,c,fn){
		var self = {};
		a.log(self.name = 'list');
		self.is = (function(b,c,fn){
			return b instanceof Array?true:false;
		});
		self.slit = Array.prototype.slice;
		self.ebb = (function(l,i,fn){
			if(!l||!i) return false;
			if(a.text.is(l)) l = l.split("");
			if(i < 0) {
				var r = l.slice(0).reverse();
				i = Math.abs(i);
			}
			for(--i; 0 <= i; i--){		// upgrade to functionalize
				if(r && r[i]) return r[i];
				else if(l[i]) return l[i];
			}
		});
		self.plop = (function(l,s){
			for(var i = l.length-1; 0 <= i; i--){
				if(l[i] == s) {
					return l.splice(i, 1);
				}
			}
		});
		self.get = (function(b,c,fn){
			return self;
		});
		return self;
	})();
	self.obj = (function(b,c,fn){
		var self = {};
		a.log(self.name = 'obj');
		self.is = (function(b,c,fn){
			return b instanceof Object&&!a.list.is(b)?true:false;
		});
		self.empty = (function(o){for(var i in o){return false;}return true;});
		self.each = (function( object, callback, args ) {	// from jQuery.each()
			var name, i = 0,
				length = object.length,
				isObj = length === undefined || a.fns.is( object );

			if ( args ) {
				if ( isObj ) {
					for ( name in object ) {
						if ( callback.apply( object[ name ], args ) === false ) {
							break;
						}
					}
				} else {
					for ( ; i < length; ) {
						if ( callback.apply( object[ i++ ], args ) === false ) {
							break;
						}
					}
				}

			// A special, fast, case for the most common use of each
			} else {
				if ( isObj ) {
					for ( name in object ) {
						if ( callback.call( object[ name ], name, object[ name ] ) === false ) {
							break;
						}
					}
				} else {
					for ( ; i < length; ) {
						if ( callback.call( object[ i ], i, object[ i++ ] ) === false ) {
							break;
						}
					}
				}
			}

			return object;
		});
		self.get = (function(o,l){
			if(!o||!l) return undefined;
			function get(o,l,f) {
				if (l.length === 0) {
					return (f)?(a.fns.is(o))?o:function(){}:o;
				}
				if (!o) {
					return (f)?function(){}:undefined;
				}
				var s = l[0].split(a.text.find._aget.dot);
				if(1<s.length){
					l = s;
				}
				var f = a.text.find._aget.fn.test(a.list.ebb(l,-1));
				return get(o[l.shift().replace(a.text.find._aget.fn,'')], l,f);
			}
			return get(o,(a.text.is(l))?l.split(a.text.find._aget.dot):l);
		});
		return self;
	})();
	self.text = (function(b,c,fn){
		var self = a.text||{};
		a.log(self.name = 'text');
		self.is = (function(b,c,fn){
			return typeof b == 'string'?true:false;
		});
		self.get = (function(b,c,fn){
			return self;
		});
		self.ify = (function(b,c,fn){
			return b.toString? b.toString():b;
		});
		self.find = (function(SELF){
			var self = {};
			a.log(self.name = SELF.name+'.find');
			self.is = /[\.\\\?\*\[\]\{\}\(\)\^\$\+\|\,]/ig
			self.special = {'.':1,'\\':1,'?':1,'*':1,'[':1,']':1,'{':1,'}':1,'(':1,')':1,'^':1,'$':1,'+':1,'|':1,',':1}
			self.mail = /^(("[\w-\s]+")|([\w-]+(?:[\.\+][\w-]+)*)|("[\w-\s]+")([\w-]+(?:[\.\+][\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i;
			self.list = /(,\s|;\s|,|;|\s)/ig;
			self.css = /(.+?):(.+?);/ig;
			self.url = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
			self.ws_ = /\-/ig;
			self.num = {
				'int': /(\-\d+|\d+)/g
			}
			self._aget = {
				fn: /\-\>$/
				,dot: /\./
			}
			return self;
		})(self);
		self.caps = (function(b,c,fn){
			b = (self.is(b))?b:"";
			return b.toUpperCase();
		});
		return self;
	})();
	self.num = (function(b,c,fn){
		var self = {};
		a.log(self.name = 'num');
		self.is = (function(b,c,fn){
			return (!isNaN(b) && !a.bi.is(b))?true:false;
		});
		self.get = (function(b,c,fn){
			return self;
		});
		self.i = (function(val){return parseInt(val,10)});
		self.rr = (function(l){return (Math.pow(Math.random(),Math.random()).toString().slice(-(l||6)))});
		self.ii = (function(n){
			if(!n) {
				return [0]; 
			} else if(a.num.is(n)) {
				return [n] 
			} else {
				r = n.match(a.text.find.num.int) || [0];
				for(var i in r) {
					r[i] = parseInt(r[i]);
				}
				return r;
			}
		});
		return self;
	})();
	self.bi = (function(b,c,fn){
		var self = {};
		a.log(self.name = 'bi');
		self.is = (function(b,c,fn){
			return (b instanceof Boolean || typeof b == 'boolean')?true:false;
		});
		return self;
	})();
	self.time = (function(b,c,fn){
		var self = {};
		a.log(self.name = 'time');
		self.is = (function(b,c,fn){
			return +new Date().getTime()
		});
		self.now = (function(){
			return a.num.i((+new Date().getTime())+a.num.rr(4))
		});
		self.wait = (function(b,c,fn){
			var args = a.fns.sort(a.list.slit.call(arguments, 0));
			return setTimeout(a.list.ebb(args.f,1),a.list.ebb(args.n,1));
		});
		return self;
	})();
	self.test = (function(b,c,fn){
		try{return b()}catch(e){return e};
	});
	return self;
});theory();var a=the=theory;theory.test(function(){exports.theory = theory});
};