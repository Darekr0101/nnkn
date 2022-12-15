;/*FB_PKG_DELIM*/

__d("routeBuilderUtils",[],(function(a,b,c,d,e,f){"use strict";function a(a){a=a.split("/");return a.filter(function(a){return a!==""}).map(function(a){var b=a.split(/{|}/);if(b.length<3)return{isToken:!1,part:a};else{a=b[0];var c=b[1];b=b[2];var d=c[0]==="?",e=c[d?1:0]==="*";c=c.substring((d?1:0)+(e?1:0));return{isToken:!0,optional:d,catchAll:e,prefix:a,suffix:b,token:c}}})}f.getPathParts=a}),66);
__d("jsRouteBuilder",["ConstUriUtils","FBLogger","routeBuilderUtils"],(function(a,b,c,d,e,f,g){"use strict";var h="#";function a(a,b,e,f,g){g===void 0&&(g=!1);var i=d("routeBuilderUtils").getPathParts(a);function j(j){try{var k=f!=null?babelHelpers["extends"]({},f,j):(j=j)!=null?j:{},l={};j="";var m=!1;j=i.reduce(function(a,c){if(!c.isToken)return a+"/"+c.part;else{var d,e=c.optional,f=c.prefix,g=c.suffix;c=c.token;if(e&&m)return a;d=(d=k[c])!=null?d:b[c];if(d==null&&e){m=!0;return a}if(d==null)throw new Error("Missing required template parameter: "+c);if(d==="")throw new Error("Required template parameter is an empty string: "+c);l[c]=!0;return a+"/"+f+d+g}},"");a.slice(-1)==="/"&&(j+="/");j===""&&(j="/");var n=d("ConstUriUtils").getUri(j);for(var o in k){var p=k[o];!l[o]&&p!=null&&n!=null&&(e!=null&&e.has(o)?p!==!1&&(n=n.addQueryParam(o,null)):n=n.addQueryParam(o,p))}return[n,j]}catch(b){p=b==null?void 0:b.message;o=c("FBLogger")("JSRouteBuilder").blameToPreviousFrame().blameToPreviousFrame();g&&(o=o.blameToPreviousFrame());o.mustfix("Failed building URI for base path: %s message: %s",a,p);return[null,h]}}return{buildUri:function(a){a=(a=j(a)[0])!=null?a:d("ConstUriUtils").getUri(h);if(a==null)throw new Error("Not even the fallback URL parsed validly!");return a},buildUriNullable:function(a){return j(a)[0]},buildURL:function(a){a=j(a);var b=a[0];a=a[1];return(b=b==null?void 0:b.toString())!=null?b:a},buildURLStringDEPRECATED:function(a){a=j(a);var b=a[0];a=a[1];return(b=b==null?void 0:b.toString())!=null?b:a}}}g["default"]=a}),98);
__d("isLinkshimURI",["isBulletinDotComURI","isFacebookURI","isMessengerDotComURI"],(function(a,b,c,d,e,f,g){"use strict";function a(a){var b=a.getPath();return(b==="/l.php"||b.indexOf("/si/ajax/l/")===0||b.indexOf("/l/")===0||b.indexOf("l/")===0)&&(c("isFacebookURI")(a)||c("isMessengerDotComURI")(a)||c("isBulletinDotComURI")(a))?!0:!1}g["default"]=a}),98);
__d("debounceCore",["TimeSlice"],(function(a,b,c,d,e,f,g){function a(a,b,d,e,f,g){d===void 0&&(d=null);e===void 0&&(e=setTimeout);f===void 0&&(f=clearTimeout);g===void 0&&(g=!1);var h,i=!0;function j(){for(var k=arguments.length,l=new Array(k),m=0;m<k;m++)l[m]=arguments[m];var n;if(g){n=c("TimeSlice").guard(function(){i=!0,h=null},"debounceCore");if(!i){f(h);h=e(n,b);return}i=!1;a.apply(d,l)}else j.reset(),n=c("TimeSlice").guard(function(){h=null,a.apply(d,l)},"debounceCore");n.__SMmeta=a.__SMmeta;h=e(n,b)}j.reset=function(){f(h),h=null,i=!0};j.isPending=function(){return h!=null};return j}g["default"]=a}),98);
__d("debounce",["clearTimeout","debounceCore","setTimeout"],(function(a,b,c,d,e,f,g){function a(a,b,d,e,f){b===void 0&&(b=100);var g=function(a,b,d){return c("setTimeout")(a,b,d,!e)};return c("debounceCore")(a,b,d,g,c("clearTimeout"),f)}g["default"]=a}),98);
__d("SubscriptionsHandler",["invariant"],(function(a,b,c,d,e,f,g,h){"use strict";function i(a){return a.remove||a.reset||a.unsubscribe||a.cancel||a.dispose}function j(a){i(a).call(a)}a=function(){function a(){this.$1=[]}var b=a.prototype;b.addSubscriptions=function(){for(var a=arguments.length,b=new Array(a),c=0;c<a;c++)b[c]=arguments[c];b.every(i)||h(0,3659);this.$1!=null?this.$1=this.$1.concat(b):b.forEach(j)};b.engage=function(){this.$1==null&&(this.$1=[])};b.release=function(){this.$1!=null&&(this.$1.forEach(j),this.$1=null)};b.releaseOne=function(a){var b=this.$1;if(b==null)return;var c=b.indexOf(a);c!==-1&&(j(a),b.splice(c,1),b.length===0&&(this.$1=null))};return a}();g["default"]=a}),98);
__d("throttle",["TimeSlice","TimeSliceInteractionSV","setTimeout","setTimeoutAcrossTransitions"],(function(a,b,c,d,e,f,g){function a(a,b,d){return h(a,b,d,c("setTimeout"),!1)}Object.assign(a,{acrossTransitions:function(a,b,d){return h(a,b,d,c("setTimeoutAcrossTransitions"),!1)},withBlocking:function(a,b,d){return h(a,b,d,c("setTimeout"),!0)},acrossTransitionsWithBlocking:function(a,b,d){return h(a,b,d,c("setTimeoutAcrossTransitions"),!0)}});function h(a,b,d,e,f){var g=b==null?100:b,h,i=null,j=0,k=null,l=[],m=c("TimeSlice").guard(function(){j=Date.now();if(i){var b=function(b){a.apply(h,b)}.bind(null,i),c=l.length;while(--c>=0)b=l[c].bind(null,b);l=[];b();i=null;k=e(m,g)}else k=null},"throttle_"+g+"_ms",{propagationType:c("TimeSlice").PropagationType.EXECUTION,registerCallStack:!0});m.__SMmeta=a.__SMmeta;return function(){c("TimeSliceInteractionSV").ref_counting_fix&&l.push(c("TimeSlice").getGuardedContinuation("throttleWithContinuation"));for(var a=arguments.length,b=new Array(a),n=0;n<a;n++)b[n]=arguments[n];i=b;h=this;d!==void 0&&(h=d);(k===null||Date.now()-j>g)&&(f===!0?m():k=e(m,0))}}b=a;g["default"]=b}),98);