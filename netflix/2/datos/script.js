!function(t){var e={};function r(n){if(e[n])return e[n].exports;var o=e[n]={i:n,l:!1,exports:{}};return t[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}r.m=t,r.c=e,r.d=function(t,e,n){r.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},r.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},r.t=function(t,e){if(1&e&&(t=r(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)r.d(n,o,function(e){return t[e]}.bind(null,o));return n},r.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(e,"a",e),e},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.p="",r(r.s=72)}([function(t,e,r){(function(e){var r=function(t){return t&&t.Math==Math&&t};t.exports=r("object"==typeof globalThis&&globalThis)||r("object"==typeof window&&window)||r("object"==typeof self&&self)||r("object"==typeof e&&e)||Function("return this")()}).call(this,r(73))},function(t,e){t.exports=function(t){try{return!!t()}catch(t){return!0}}},function(t,e,r){var n=r(6);t.exports=function(t){if(!n(t))throw TypeError(String(t)+" is not an object");return t}},function(t,e,r){var n=r(1);t.exports=!n((function(){return 7!=Object.defineProperty({},1,{get:function(){return 7}})[1]}))},function(t,e,r){var n=r(0),o=r(46),i=r(8),u=r(47),a=r(51),l=r(82),c=o("wks"),f=n.Symbol,s=l?f:f&&f.withoutSetter||u;t.exports=function(t){return i(c,t)||(a&&i(f,t)?c[t]=f[t]:c[t]=s("Symbol."+t)),c[t]}},function(t,e,r){var n=r(0),o=r(35).f,i=r(9),u=r(16),a=r(25),l=r(76),c=r(50);t.exports=function(t,e){var r,f,s,d,p,v=t.target,g=t.global,y=t.stat;if(r=g?n:y?n[v]||a(v,{}):(n[v]||{}).prototype)for(f in e){if(d=e[f],s=t.noTargetGet?(p=o(r,f))&&p.value:r[f],!c(g?f:v+(y?".":"#")+f,t.forced)&&void 0!==s){if(typeof d==typeof s)continue;l(d,s)}(t.sham||s&&s.sham)&&i(d,"sham",!0),u(r,f,d,t)}}},function(t,e){t.exports=function(t){return"object"==typeof t?null!==t:"function"==typeof t}},function(t,e){t.exports=function(t){if(null==t)throw TypeError("Can't call method on "+t);return t}},function(t,e){var r={}.hasOwnProperty;t.exports=function(t,e){return r.call(t,e)}},function(t,e,r){var n=r(3),o=r(10),i=r(37);t.exports=n?function(t,e,r){return o.f(t,e,i(1,r))}:function(t,e,r){return t[e]=r,t}},function(t,e,r){var n=r(3),o=r(40),i=r(2),u=r(39),a=Object.defineProperty;e.f=n?a:function(t,e,r){if(i(t),e=u(e,!0),i(r),o)try{return a(t,e,r)}catch(t){}if("get"in r||"set"in r)throw TypeError("Accessors not supported");return"value"in r&&(t[e]=r.value),t}},function(t,e,r){var n=r(3),o=r(1),i=r(8),u=Object.defineProperty,a={},l=function(t){throw t};t.exports=function(t,e){if(i(a,t))return a[t];e||(e={});var r=[][t],c=!!i(e,"ACCESSORS")&&e.ACCESSORS,f=i(e,0)?e[0]:l,s=i(e,1)?e[1]:void 0;return a[t]=!!r&&!o((function(){if(c&&!n)return!0;var t={length:-1};c?u(t,1,{enumerable:!0,get:l}):t[1]=1,r.call(t,f,s)}))}},function(t,e,r){"use strict";r(20),r(53),r(13),r(92),r(62),r(22),Object.defineProperty(e,"__esModule",{value:!0}),e.getUrlParameter=void 0;e.getUrlParameter=function(t){var e;return window.location.search.substr(1).split("&").forEach((function(r){0===r.indexOf(t)&&(e=decodeURIComponent(r.split("=")[1]))})),e}},function(t,e,r){"use strict";var n=r(5),o=r(21);n({target:"RegExp",proto:!0,forced:/./.exec!==o},{exec:o})},function(t,e,r){var n=r(38),o=r(7);t.exports=function(t){return n(o(t))}},function(t,e){var r={}.toString;t.exports=function(t){return r.call(t).slice(8,-1)}},function(t,e,r){var n=r(0),o=r(9),i=r(8),u=r(25),a=r(42),l=r(44),c=l.get,f=l.enforce,s=String(String).split("String");(t.exports=function(t,e,r,a){var l=!!a&&!!a.unsafe,c=!!a&&!!a.enumerable,d=!!a&&!!a.noTargetGet;"function"==typeof r&&("string"!=typeof e||i(r,"name")||o(r,"name",e),f(r).source=s.join("string"==typeof e?e:"")),t!==n?(l?!d&&t[e]&&(c=!0):delete t[e],c?t[e]=r:o(t,e,r)):c?t[e]=r:u(e,r)})(Function.prototype,"toString",(function(){return"function"==typeof this&&c(this).source||a(this)}))},function(t,e,r){var n=r(78),o=r(0),i=function(t){return"function"==typeof t?t:void 0};t.exports=function(t,e){return arguments.length<2?i(n[t])||i(o[t]):n[t]&&n[t][e]||o[t]&&o[t][e]}},function(t,e,r){var n=r(19),o=Math.min;t.exports=function(t){return t>0?o(n(t),9007199254740991):0}},function(t,e){var r=Math.ceil,n=Math.floor;t.exports=function(t){return isNaN(t=+t)?0:(t>0?n:r)(t)}},function(t,e,r){"use strict";var n=r(5),o=r(58);n({target:"Array",proto:!0,forced:[].forEach!=o},{forEach:o})},function(t,e,r){"use strict";var n,o,i=r(31),u=r(61),a=RegExp.prototype.exec,l=String.prototype.replace,c=a,f=(n=/a/,o=/b*/g,a.call(n,"a"),a.call(o,"a"),0!==n.lastIndex||0!==o.lastIndex),s=u.UNSUPPORTED_Y||u.BROKEN_CARET,d=void 0!==/()??/.exec("")[1];(f||d||s)&&(c=function(t){var e,r,n,o,u=this,c=s&&u.sticky,p=i.call(u),v=u.source,g=0,y=t;return c&&(-1===(p=p.replace("y","")).indexOf("g")&&(p+="g"),y=String(t).slice(u.lastIndex),u.lastIndex>0&&(!u.multiline||u.multiline&&"\n"!==t[u.lastIndex-1])&&(v="(?: "+v+")",y=" "+y,g++),r=new RegExp("^(?:"+v+")",p)),d&&(r=new RegExp("^"+v+"$(?!\\s)",p)),f&&(e=u.lastIndex),n=a.call(c?r:u,y),c?n?(n.input=n.input.slice(g),n[0]=n[0].slice(g),n.index=u.lastIndex,u.lastIndex+=n[0].length):u.lastIndex=0:f&&n&&(u.lastIndex=u.global?n.index+n[0].length:e),d&&n&&n.length>1&&l.call(n[0],r,(function(){for(o=1;o<arguments.length-2;o++)void 0===arguments[o]&&(n[o]=void 0)})),n}),t.exports=c},function(t,e,r){var n=r(0),o=r(96),i=r(58),u=r(9);for(var a in o){var l=n[a],c=l&&l.prototype;if(c&&c.forEach!==i)try{u(c,"forEach",i)}catch(t){c.forEach=i}}},function(t,e,r){"use strict";var n=r(24);r(34),r(53),r(55),Object.defineProperty(e,"__esModule",{value:!0}),e.setLangClassForBody=e.getPageLanguage=void 0;var o=n(r(88)),i=r(56),u=r(12),a=function(){var t=(0,u.getUrlParameter)("fl");if(t)return t;if(window.forceLanguage)return window.forceLanguage;var e=o.default[(0,i.getCountry)()],r=navigator.language;if(null==e?void 0:e.includes(r)){var n=e.indexOf(r);return e[n]}return e?e[0]:"en"};e.getPageLanguage=a;e.setLangClassForBody=function(){document.body.classList.add("lang-".concat(a()))}},function(t,e){t.exports=function(t){return t&&t.__esModule?t:{default:t}}},function(t,e,r){var n=r(0),o=r(9);t.exports=function(t,e){try{o(n,t,e)}catch(r){n[t]=e}return e}},function(t,e){t.exports={}},function(t,e,r){var n=r(14),o=r(18),i=r(79),u=function(t){return function(e,r,u){var a,l=n(e),c=o(l.length),f=i(u,c);if(t&&r!=r){for(;c>f;)if((a=l[f++])!=a)return!0}else for(;c>f;f++)if((t||f in l)&&l[f]===r)return t||f||0;return!t&&-1}};t.exports={includes:u(!0),indexOf:u(!1)}},function(t,e){t.exports=["constructor","hasOwnProperty","isPrototypeOf","propertyIsEnumerable","toLocaleString","toString","valueOf"]},function(t,e,r){var n=r(6),o=r(15),i=r(4)("match");t.exports=function(t){var e;return n(t)&&(void 0!==(e=t[i])?!!e:"RegExp"==o(t))}},function(t,e,r){var n=r(89),o=r(38),i=r(60),u=r(18),a=r(90),l=[].push,c=function(t){var e=1==t,r=2==t,c=3==t,f=4==t,s=6==t,d=5==t||s;return function(p,v,g,y){for(var h,m,x=i(p),b=o(x),T=n(v,g,3),S=u(b.length),E=0,A=y||a,V=e?A(p,S):r?A(p,0):void 0;S>E;E++)if((d||E in b)&&(m=T(h=b[E],E,x),t))if(e)V[E]=m;else if(m)switch(t){case 3:return!0;case 5:return h;case 6:return E;case 2:l.call(V,h)}else if(f)return!1;return s?-1:c||f?f:V}};t.exports={forEach:c(0),map:c(1),filter:c(2),some:c(3),every:c(4),find:c(5),findIndex:c(6)}},function(t,e,r){"use strict";var n=r(2);t.exports=function(){var t=n(this),e="";return t.global&&(e+="g"),t.ignoreCase&&(e+="i"),t.multiline&&(e+="m"),t.dotAll&&(e+="s"),t.unicode&&(e+="u"),t.sticky&&(e+="y"),e}},function(t,e,r){"use strict";r(13);var n=r(16),o=r(1),i=r(4),u=r(21),a=r(9),l=i("species"),c=!o((function(){var t=/./;return t.exec=function(){var t=[];return t.groups={a:"7"},t},"7"!=="".replace(t,"$<a>")})),f="$0"==="a".replace(/./,"$0"),s=i("replace"),d=!!/./[s]&&""===/./[s]("a","$0"),p=!o((function(){var t=/(?:)/,e=t.exec;t.exec=function(){return e.apply(this,arguments)};var r="ab".split(t);return 2!==r.length||"a"!==r[0]||"b"!==r[1]}));t.exports=function(t,e,r,s){var v=i(t),g=!o((function(){var e={};return e[v]=function(){return 7},7!=""[t](e)})),y=g&&!o((function(){var e=!1,r=/a/;return"split"===t&&((r={}).constructor={},r.constructor[l]=function(){return r},r.flags="",r[v]=/./[v]),r.exec=function(){return e=!0,null},r[v](""),!e}));if(!g||!y||"replace"===t&&(!c||!f||d)||"split"===t&&!p){var h=/./[v],m=r(v,""[t],(function(t,e,r,n,o){return e.exec===u?g&&!o?{done:!0,value:h.call(e,r,n)}:{done:!0,value:t.call(r,e,n)}:{done:!1}}),{REPLACE_KEEPS_$0:f,REGEXP_REPLACE_SUBSTITUTES_UNDEFINED_CAPTURE:d}),x=m[0],b=m[1];n(String.prototype,t,x),n(RegExp.prototype,v,2==e?function(t,e){return b.call(t,this,e)}:function(t){return b.call(t,this)})}s&&a(RegExp.prototype[v],"sham",!0)}},function(t,e,r){var n=r(15),o=r(21);t.exports=function(t,e){var r=t.exec;if("function"==typeof r){var i=r.call(t,e);if("object"!=typeof i)throw TypeError("RegExp exec method returned something other than an Object or null");return i}if("RegExp"!==n(t))throw TypeError("RegExp#exec called on incompatible receiver");return o.call(t,e)}},function(t,e,r){"use strict";var n=r(5),o=r(27).includes,i=r(81);n({target:"Array",proto:!0,forced:!r(11)("indexOf",{ACCESSORS:!0,1:0})},{includes:function(t){return o(this,t,arguments.length>1?arguments[1]:void 0)}}),i("includes")},function(t,e,r){var n=r(3),o=r(36),i=r(37),u=r(14),a=r(39),l=r(8),c=r(40),f=Object.getOwnPropertyDescriptor;e.f=n?f:function(t,e){if(t=u(t),e=a(e,!0),c)try{return f(t,e)}catch(t){}if(l(t,e))return i(!o.f.call(t,e),t[e])}},function(t,e,r){"use strict";var n={}.propertyIsEnumerable,o=Object.getOwnPropertyDescriptor,i=o&&!n.call({1:2},1);e.f=i?function(t){var e=o(this,t);return!!e&&e.enumerable}:n},function(t,e){t.exports=function(t,e){return{enumerable:!(1&t),configurable:!(2&t),writable:!(4&t),value:e}}},function(t,e,r){var n=r(1),o=r(15),i="".split;t.exports=n((function(){return!Object("z").propertyIsEnumerable(0)}))?function(t){return"String"==o(t)?i.call(t,""):Object(t)}:Object},function(t,e,r){var n=r(6);t.exports=function(t,e){if(!n(t))return t;var r,o;if(e&&"function"==typeof(r=t.toString)&&!n(o=r.call(t)))return o;if("function"==typeof(r=t.valueOf)&&!n(o=r.call(t)))return o;if(!e&&"function"==typeof(r=t.toString)&&!n(o=r.call(t)))return o;throw TypeError("Can't convert object to primitive value")}},function(t,e,r){var n=r(3),o=r(1),i=r(41);t.exports=!n&&!o((function(){return 7!=Object.defineProperty(i("div"),"a",{get:function(){return 7}}).a}))},function(t,e,r){var n=r(0),o=r(6),i=n.document,u=o(i)&&o(i.createElement);t.exports=function(t){return u?i.createElement(t):{}}},function(t,e,r){var n=r(43),o=Function.toString;"function"!=typeof n.inspectSource&&(n.inspectSource=function(t){return o.call(t)}),t.exports=n.inspectSource},function(t,e,r){var n=r(0),o=r(25),i=n["__core-js_shared__"]||o("__core-js_shared__",{});t.exports=i},function(t,e,r){var n,o,i,u=r(74),a=r(0),l=r(6),c=r(9),f=r(8),s=r(45),d=r(26),p=a.WeakMap;if(u){var v=new p,g=v.get,y=v.has,h=v.set;n=function(t,e){return h.call(v,t,e),e},o=function(t){return g.call(v,t)||{}},i=function(t){return y.call(v,t)}}else{var m=s("state");d[m]=!0,n=function(t,e){return c(t,m,e),e},o=function(t){return f(t,m)?t[m]:{}},i=function(t){return f(t,m)}}t.exports={set:n,get:o,has:i,enforce:function(t){return i(t)?o(t):n(t,{})},getterFor:function(t){return function(e){var r;if(!l(e)||(r=o(e)).type!==t)throw TypeError("Incompatible receiver, "+t+" required");return r}}}},function(t,e,r){var n=r(46),o=r(47),i=n("keys");t.exports=function(t){return i[t]||(i[t]=o(t))}},function(t,e,r){var n=r(75),o=r(43);(t.exports=function(t,e){return o[t]||(o[t]=void 0!==e?e:{})})("versions",[]).push({version:"3.6.4",mode:n?"pure":"global",copyright:"© 2020 Denis Pushkarev (zloirock.ru)"})},function(t,e){var r=0,n=Math.random();t.exports=function(t){return"Symbol("+String(void 0===t?"":t)+")_"+(++r+n).toString(36)}},function(t,e,r){var n=r(49),o=r(28).concat("length","prototype");e.f=Object.getOwnPropertyNames||function(t){return n(t,o)}},function(t,e,r){var n=r(8),o=r(14),i=r(27).indexOf,u=r(26);t.exports=function(t,e){var r,a=o(t),l=0,c=[];for(r in a)!n(u,r)&&n(a,r)&&c.push(r);for(;e.length>l;)n(a,r=e[l++])&&(~i(c,r)||c.push(r));return c}},function(t,e,r){var n=r(1),o=/#|\.prototype\./,i=function(t,e){var r=a[u(t)];return r==c||r!=l&&("function"==typeof e?n(e):!!e)},u=i.normalize=function(t){return String(t).replace(o,".").toLowerCase()},a=i.data={},l=i.NATIVE="N",c=i.POLYFILL="P";t.exports=i},function(t,e,r){var n=r(1);t.exports=!!Object.getOwnPropertySymbols&&!n((function(){return!String(Symbol())}))},function(t,e,r){var n=r(49),o=r(28);t.exports=Object.keys||function(t){return n(t,o)}},function(t,e,r){"use strict";var n=r(5),o=r(27).indexOf,i=r(54),u=r(11),a=[].indexOf,l=!!a&&1/[1].indexOf(1,-0)<0,c=i("indexOf"),f=u("indexOf",{ACCESSORS:!0,1:0});n({target:"Array",proto:!0,forced:l||!c||!f},{indexOf:function(t){return l?a.apply(this,arguments)||0:o(this,t,arguments.length>1?arguments[1]:void 0)}})},function(t,e,r){"use strict";var n=r(1);t.exports=function(t,e){var r=[][t];return!!r&&n((function(){r.call(null,e||function(){throw 1},1)}))}},function(t,e,r){"use strict";var n=r(5),o=r(86),i=r(7);n({target:"String",proto:!0,forced:!r(87)("includes")},{includes:function(t){return!!~String(i(this)).indexOf(o(t),arguments.length>1?arguments[1]:void 0)}})},function(t,e,r){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.getCountry=void 0;var n=r(57),o=r(12);e.getCountry=function(){var t=(0,n.getDataParameter)("data-country")||(0,o.getUrlParameter)("country");return null==t?void 0:t.toUpperCase()}},function(t,e,r){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.getDataParameter=void 0;e.getDataParameter=function(t){var e=document.querySelector("#page-data");if(e)return e.getAttribute(t)}},function(t,e,r){"use strict";var n=r(30).forEach,o=r(54),i=r(11),u=o("forEach"),a=i("forEach");t.exports=u&&a?[].forEach:function(t){return n(this,t,arguments.length>1?arguments[1]:void 0)}},function(t,e){t.exports=function(t){if("function"!=typeof t)throw TypeError(String(t)+" is not a function");return t}},function(t,e,r){var n=r(7);t.exports=function(t){return Object(n(t))}},function(t,e,r){"use strict";var n=r(1);function o(t,e){return RegExp(t,e)}e.UNSUPPORTED_Y=n((function(){var t=o("a","y");return t.lastIndex=2,null!=t.exec("abcd")})),e.BROKEN_CARET=n((function(){var t=o("^r","gy");return t.lastIndex=2,null!=t.exec("str")}))},function(t,e,r){"use strict";var n=r(32),o=r(29),i=r(2),u=r(7),a=r(94),l=r(63),c=r(18),f=r(33),s=r(21),d=r(1),p=[].push,v=Math.min,g=!d((function(){return!RegExp(4294967295,"y")}));n("split",2,(function(t,e,r){var n;return n="c"=="abbc".split(/(b)*/)[1]||4!="test".split(/(?:)/,-1).length||2!="ab".split(/(?:ab)*/).length||4!=".".split(/(.?)(.?)/).length||".".split(/()()/).length>1||"".split(/.?/).length?function(t,r){var n=String(u(this)),i=void 0===r?4294967295:r>>>0;if(0===i)return[];if(void 0===t)return[n];if(!o(t))return e.call(n,t,i);for(var a,l,c,f=[],d=(t.ignoreCase?"i":"")+(t.multiline?"m":"")+(t.unicode?"u":"")+(t.sticky?"y":""),v=0,g=new RegExp(t.source,d+"g");(a=s.call(g,n))&&!((l=g.lastIndex)>v&&(f.push(n.slice(v,a.index)),a.length>1&&a.index<n.length&&p.apply(f,a.slice(1)),c=a[0].length,v=l,f.length>=i));)g.lastIndex===a.index&&g.lastIndex++;return v===n.length?!c&&g.test("")||f.push(""):f.push(n.slice(v)),f.length>i?f.slice(0,i):f}:"0".split(void 0,0).length?function(t,r){return void 0===t&&0===r?[]:e.call(this,t,r)}:e,[function(e,r){var o=u(this),i=null==e?void 0:e[t];return void 0!==i?i.call(e,o,r):n.call(String(o),e,r)},function(t,o){var u=r(n,t,this,o,n!==e);if(u.done)return u.value;var s=i(t),d=String(this),p=a(s,RegExp),y=s.unicode,h=(s.ignoreCase?"i":"")+(s.multiline?"m":"")+(s.unicode?"u":"")+(g?"y":"g"),m=new p(g?s:"^(?:"+s.source+")",h),x=void 0===o?4294967295:o>>>0;if(0===x)return[];if(0===d.length)return null===f(m,d)?[d]:[];for(var b=0,T=0,S=[];T<d.length;){m.lastIndex=g?T:0;var E,A=f(m,g?d:d.slice(T));if(null===A||(E=v(c(m.lastIndex+(g?0:T)),d.length))===b)T=l(d,T,y);else{if(S.push(d.slice(b,T)),S.length===x)return S;for(var V=1;V<=A.length-1;V++)if(S.push(A[V]),S.length===x)return S;T=b=E}}return S.push(d.slice(b)),S}]}),!g)},function(t,e,r){"use strict";var n=r(95).charAt;t.exports=function(t,e,r){return e+(r?n(t,e).length:1)}},function(t,e,r){var n=r(1),o=r(4),i=r(99),u=o("species");t.exports=function(t){return i>=51||!n((function(){var e=[];return(e.constructor={})[u]=function(){return{foo:1}},1!==e[t](Boolean).foo}))}},function(t,e,r){var n=r(5),o=r(101).entries;n({target:"Object",stat:!0},{entries:function(t){return o(t)}})},function(t,e,r){var n=r(102),o=r(103),i=r(104);t.exports=function(t,e){return n(t)||o(t,e)||i()}},function(t,e,r){var n=r(3),o=r(0),i=r(50),u=r(107),a=r(10).f,l=r(48).f,c=r(29),f=r(31),s=r(61),d=r(16),p=r(1),v=r(44).set,g=r(110),y=r(4)("match"),h=o.RegExp,m=h.prototype,x=/a/g,b=/a/g,T=new h(x)!==x,S=s.UNSUPPORTED_Y;if(n&&i("RegExp",!T||S||p((function(){return b[y]=!1,h(x)!=x||h(b)==b||"/a/i"!=h(x,"i")})))){for(var E=function(t,e){var r,n=this instanceof E,o=c(t),i=void 0===e;if(!n&&o&&t.constructor===E&&i)return t;T?o&&!i&&(t=t.source):t instanceof E&&(i&&(e=f.call(t)),t=t.source),S&&(r=!!e&&e.indexOf("y")>-1)&&(e=e.replace(/y/g,""));var a=u(T?new h(t,e):h(t,e),n?this:m,E);return S&&r&&v(a,{sticky:r}),a},A=function(t){t in E||a(E,t,{configurable:!0,get:function(){return h[t]},set:function(e){h[t]=e}})},V=l(h),P=0;V.length>P;)A(V[P++]);m.constructor=E,E.prototype=m,d(o,"RegExp",E)}g("RegExp")},function(t,e,r){"use strict";var n=r(16),o=r(2),i=r(1),u=r(31),a=RegExp.prototype,l=a.toString,c=i((function(){return"/a/b"!=l.call({source:"a",flags:"b"})})),f="toString"!=l.name;(c||f)&&n(RegExp.prototype,"toString",(function(){var t=o(this),e=String(t.source),r=t.flags;return"/"+e+"/"+String(void 0===r&&t instanceof RegExp&&!("flags"in a)?u.call(t):r)}),{unsafe:!0})},function(t,e,r){"use strict";var n=r(32),o=r(2),i=r(60),u=r(18),a=r(19),l=r(7),c=r(63),f=r(33),s=Math.max,d=Math.min,p=Math.floor,v=/\$([$&'`]|\d\d?|<[^>]*>)/g,g=/\$([$&'`]|\d\d?)/g;n("replace",2,(function(t,e,r,n){var y=n.REGEXP_REPLACE_SUBSTITUTES_UNDEFINED_CAPTURE,h=n.REPLACE_KEEPS_$0,m=y?"$":"$0";return[function(r,n){var o=l(this),i=null==r?void 0:r[t];return void 0!==i?i.call(r,o,n):e.call(String(o),r,n)},function(t,n){if(!y&&h||"string"==typeof n&&-1===n.indexOf(m)){var i=r(e,t,this,n);if(i.done)return i.value}var l=o(t),p=String(this),v="function"==typeof n;v||(n=String(n));var g=l.global;if(g){var b=l.unicode;l.lastIndex=0}for(var T=[];;){var S=f(l,p);if(null===S)break;if(T.push(S),!g)break;""===String(S[0])&&(l.lastIndex=c(p,u(l.lastIndex),b))}for(var E,A="",V=0,P=0;P<T.length;P++){S=T[P];for(var O=String(S[0]),R=s(d(a(S.index),p.length),0),w=[],L=1;L<S.length;L++)w.push(void 0===(E=S[L])?E:String(E));var _=S.groups;if(v){var C=[O].concat(w,R,p);void 0!==_&&C.push(_);var j=String(n.apply(void 0,C))}else j=x(O,p,R,w,_,n);R>=V&&(A+=p.slice(V,R)+j,V=R+O.length)}return A+p.slice(V)}];function x(t,r,n,o,u,a){var l=n+t.length,c=o.length,f=g;return void 0!==u&&(u=i(u),f=v),e.call(a,f,(function(e,i){var a;switch(i.charAt(0)){case"$":return"$";case"&":return t;case"`":return r.slice(0,n);case"'":return r.slice(l);case"<":a=u[i.slice(1,-1)];break;default:var f=+i;if(0===f)return e;if(f>c){var s=p(f/10);return 0===s?e:s<=c?void 0===o[s-1]?i.charAt(1):o[s-1]+i.charAt(1):e}a=o[f-1]}return void 0===a?"":a}))}}))},function(t,e,r){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.currencyMapPath=e.globalPath=void 0;e.globalPath="/ci/cc_tl/";var n=r(111);e.currencyMapPath=n},function(t,e,r){"use strict";var n=r(24);r(20),r(65),r(67),r(13),r(68),r(69),r(22),Object.defineProperty(e,"__esModule",{value:!0}),e.fillVariables=e.variablesToParse=void 0;var o,i,u=n(r(66)),a=r(70),l=r(56),c=r(23),f=r(12),s=a.currencyMapPath[(0,l.getCountry)()]||a.currencyMapPath.DEFAULT,d=(0,c.getPageLanguage)(),p=(0,f.getUrlParameter)("currency-value"),v={currency:s.symbol,"currency-symbol":s.symbol,"currency-code":s.code,"trial-amount":s.trialAmount,lang:d,"footer-currency":function(){return(0,f.getUrlParameter)("fl")||window.forceLanguage?s.fullValue:s.footerText[d]||s.footerText.default},"currency-value":p||s.trialValue,"currency-full-value":s.fullValue||"","VOD-currency-full-value":(null===(o=s.VOD)||void 0===o?void 0:o.fullValue)||"","VOD-footer-currency":(null===(i=s.VOD)||void 0===i?void 0:i.footerText[d])||""};e.variablesToParse=v;e.fillVariables=function(t){var e=t;return Object.entries(v).forEach((function(t){var r=(0,u.default)(t,2),n=r[0],o=r[1],i=new RegExp("{".concat(n,"}"),"g");e=e.replace(i,o)})),e}},function(t,e,r){"use strict";var n=r(23),o=r(97),i=r(115);(0,o.loadTranslations)(),(0,i.createCustomStyleTag)(),(0,n.setLangClassForBody)()},function(t,e){var r;r=function(){return this}();try{r=r||new Function("return this")()}catch(t){"object"==typeof window&&(r=window)}t.exports=r},function(t,e,r){var n=r(0),o=r(42),i=n.WeakMap;t.exports="function"==typeof i&&/native code/.test(o(i))},function(t,e){t.exports=!1},function(t,e,r){var n=r(8),o=r(77),i=r(35),u=r(10);t.exports=function(t,e){for(var r=o(e),a=u.f,l=i.f,c=0;c<r.length;c++){var f=r[c];n(t,f)||a(t,f,l(e,f))}}},function(t,e,r){var n=r(17),o=r(48),i=r(80),u=r(2);t.exports=n("Reflect","ownKeys")||function(t){var e=o.f(u(t)),r=i.f;return r?e.concat(r(t)):e}},function(t,e,r){var n=r(0);t.exports=n},function(t,e,r){var n=r(19),o=Math.max,i=Math.min;t.exports=function(t,e){var r=n(t);return r<0?o(r+e,0):i(r,e)}},function(t,e){e.f=Object.getOwnPropertySymbols},function(t,e,r){var n=r(4),o=r(83),i=r(10),u=n("unscopables"),a=Array.prototype;null==a[u]&&i.f(a,u,{configurable:!0,value:o(null)}),t.exports=function(t){a[u][t]=!0}},function(t,e,r){var n=r(51);t.exports=n&&!Symbol.sham&&"symbol"==typeof Symbol.iterator},function(t,e,r){var n,o=r(2),i=r(84),u=r(28),a=r(26),l=r(85),c=r(41),f=r(45),s=f("IE_PROTO"),d=function(){},p=function(t){return"<script>"+t+"<\/script>"},v=function(){try{n=document.domain&&new ActiveXObject("htmlfile")}catch(t){}var t,e;v=n?function(t){t.write(p("")),t.close();var e=t.parentWindow.Object;return t=null,e}(n):((e=c("iframe")).style.display="none",l.appendChild(e),e.src=String("javascript:"),(t=e.contentWindow.document).open(),t.write(p("document.F=Object")),t.close(),t.F);for(var r=u.length;r--;)delete v.prototype[u[r]];return v()};a[s]=!0,t.exports=Object.create||function(t,e){var r;return null!==t?(d.prototype=o(t),r=new d,d.prototype=null,r[s]=t):r=v(),void 0===e?r:i(r,e)}},function(t,e,r){var n=r(3),o=r(10),i=r(2),u=r(52);t.exports=n?Object.defineProperties:function(t,e){i(t);for(var r,n=u(e),a=n.length,l=0;a>l;)o.f(t,r=n[l++],e[r]);return t}},function(t,e,r){var n=r(17);t.exports=n("document","documentElement")},function(t,e,r){var n=r(29);t.exports=function(t){if(n(t))throw TypeError("The method doesn't accept regular expressions");return t}},function(t,e,r){var n=r(4)("match");t.exports=function(t){var e=/./;try{"/./"[t](e)}catch(r){try{return e[n]=!1,"/./"[t](e)}catch(t){}}return!1}},function(t,e,r){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;e.default={AR:["es"],AT:["de"],AU:["en"],BA:["bs","hr","sr"],BE:["nl","fr"],BG:["bg"],BH:["ar","en"],CH:["de","fr"],CA:["en","fr"],CL:["es"],CO:["es"],CR:["es"],CY:["el","tr"],CZ:["cs"],DE:["de"],DK:["da"],EC:["es"],EE:["et"],ES:["es"],ET:["am","om"],FI:["fi","sv","se"],FR:["fr"],GR:["el"],HR:["hr"],HU:["hu"],HK:["hk"],IE:["en"],IL:["iw","en"],IN:["hi","en"],IQ:["ar","ku"],IS:["is"],IT:["it","de","fr"],ITG:["it","de","fr"],JP:["ja"],KR:["ko","en"],KW:["ar","en"],LT:["lt"],LU:["lb","fr","de"],LV:["lv"],MC:["fr"],MK:["mk"],MX:["es"],MY:["en","ms"],NL:["nl"],NO:["nb","nn","no","se"],NZ:["en","mi"],OM:["ar","en"],PH:["fil","en"],PL:["pl"],PT:["pt"],RO:["ro"],RS:["sr"],SA:["ar","en"],SE:["sv"],SG:["en","zh","ms"],SI:["sl"],SK:["sk"],TH:["th"],TK:["tkl","en","sm"],TR:["tr"],TW:["zh"],QA:["ar","en"],UA:["uk"],AE:["ar","en"],UK:["en"],UKG:["en"],US:["en"],ZA:["en"]},t.exports=e.default},function(t,e,r){var n=r(59);t.exports=function(t,e,r){if(n(t),void 0===e)return t;switch(r){case 0:return function(){return t.call(e)};case 1:return function(r){return t.call(e,r)};case 2:return function(r,n){return t.call(e,r,n)};case 3:return function(r,n,o){return t.call(e,r,n,o)}}return function(){return t.apply(e,arguments)}}},function(t,e,r){var n=r(6),o=r(91),i=r(4)("species");t.exports=function(t,e){var r;return o(t)&&("function"!=typeof(r=t.constructor)||r!==Array&&!o(r.prototype)?n(r)&&null===(r=r[i])&&(r=void 0):r=void 0),new(void 0===r?Array:r)(0===e?0:e)}},function(t,e,r){var n=r(15);t.exports=Array.isArray||function(t){return"Array"==n(t)}},function(t,e,r){"use strict";var n=r(32),o=r(2),i=r(7),u=r(93),a=r(33);n("search",1,(function(t,e,r){return[function(e){var r=i(this),n=null==e?void 0:e[t];return void 0!==n?n.call(e,r):new RegExp(e)[t](String(r))},function(t){var n=r(e,t,this);if(n.done)return n.value;var i=o(t),l=String(this),c=i.lastIndex;u(c,0)||(i.lastIndex=0);var f=a(i,l);return u(i.lastIndex,c)||(i.lastIndex=c),null===f?-1:f.index}]}))},function(t,e){t.exports=Object.is||function(t,e){return t===e?0!==t||1/t==1/e:t!=t&&e!=e}},function(t,e,r){var n=r(2),o=r(59),i=r(4)("species");t.exports=function(t,e){var r,u=n(t).constructor;return void 0===u||null==(r=n(u)[i])?e:o(r)}},function(t,e,r){var n=r(19),o=r(7),i=function(t){return function(e,r){var i,u,a=String(o(e)),l=n(r),c=a.length;return l<0||l>=c?t?"":void 0:(i=a.charCodeAt(l))<55296||i>56319||l+1===c||(u=a.charCodeAt(l+1))<56320||u>57343?t?a.charAt(l):i:t?a.slice(l,l+2):u-56320+(i-55296<<10)+65536}};t.exports={codeAt:i(!1),charAt:i(!0)}},function(t,e){t.exports={CSSRuleList:0,CSSStyleDeclaration:0,CSSValueList:0,ClientRectList:0,DOMRectList:0,DOMStringList:0,DOMTokenList:1,DataTransferItemList:0,FileList:0,HTMLAllCollection:0,HTMLCollection:0,HTMLFormElement:0,HTMLSelectElement:0,MediaList:0,MimeTypeArray:0,NamedNodeMap:0,NodeList:1,PaintRequestList:0,Plugin:0,PluginArray:0,SVGLengthList:0,SVGNumberList:0,SVGPathSegList:0,SVGPointList:0,SVGStringList:0,SVGTransformList:0,SourceBufferList:0,StyleSheetList:0,TextTrackCueList:0,TextTrackList:0,TouchList:0}},function(t,e,r){"use strict";var n=r(24);r(98),r(20),r(65),r(22),Object.defineProperty(e,"__esModule",{value:!0}),e.loadTranslations=void 0;var o=n(r(66)),i=r(105),u=r(71),a=r(112),l=r(23),c=r(113),f=r(114),s=r(12);e.loadTranslations=function(){var t=(0,i.getTranslationFilesToLoad)(),e=[];t.forEach((function(r,n){(0,i.getTranslationFile)(r,(function(r){e[n]=r,function(t){return t.filter((function(t){return void 0!==t})).length}(e)===t.length&&(e.forEach((function(t){!function(t){var e="ar"===(0,l.getPageLanguage)();Object.entries(t).forEach((function(t){var r=(0,o.default)(t,2),n=r[0],i=r[1],l=(0,a.parseSelector)(n),c=l.selector,f=l.attribute;document.querySelectorAll(c).forEach((function(t){e&&(t.dir="rtl");var r=(0,u.fillVariables)(i);f?t.setAttribute(f,r):t.innerHTML=r}))}))}(t);var e=(0,c.getPublisher)(),r=(0,s.getUrlParameter)("v1");"110"!==e&&"317"!==e||"fe018b37-d84f-4b9b-a803-d704103e42bc"===r||(0,f.addAffiliateURL)(e)})),"function"==typeof window.onTranslationsRendered&&window.onTranslationsRendered())}))}))}},function(t,e,r){"use strict";var n=r(5),o=r(30).filter,i=r(64),u=r(11),a=i("filter"),l=u("filter");n({target:"Array",proto:!0,forced:!a||!l},{filter:function(t){return o(this,t,arguments.length>1?arguments[1]:void 0)}})},function(t,e,r){var n,o,i=r(0),u=r(100),a=i.process,l=a&&a.versions,c=l&&l.v8;c?o=(n=c.split("."))[0]+n[1]:u&&(!(n=u.match(/Edge\/(\d+)/))||n[1]>=74)&&(n=u.match(/Chrome\/(\d+)/))&&(o=n[1]),t.exports=o&&+o},function(t,e,r){var n=r(17);t.exports=n("navigator","userAgent")||""},function(t,e,r){var n=r(3),o=r(52),i=r(14),u=r(36).f,a=function(t){return function(e){for(var r,a=i(e),l=o(a),c=l.length,f=0,s=[];c>f;)r=l[f++],n&&!u.call(a,r)||s.push(t?[r,a[r]]:a[r]);return s}};t.exports={entries:a(!0),values:a(!1)}},function(t,e){t.exports=function(t){if(Array.isArray(t))return t}},function(t,e){t.exports=function(t,e){if(Symbol.iterator in Object(t)||"[object Arguments]"===Object.prototype.toString.call(t)){var r=[],n=!0,o=!1,i=void 0;try{for(var u,a=t[Symbol.iterator]();!(n=(u=a.next()).done)&&(r.push(u.value),!e||r.length!==e);n=!0);}catch(t){o=!0,i=t}finally{try{n||null==a.return||a.return()}finally{if(o)throw i}}return r}}},function(t,e){t.exports=function(){throw new TypeError("Invalid attempt to destructure non-iterable instance")}},function(t,e,r){"use strict";r(20),r(106),r(67),r(13),r(68),r(69),r(22),Object.defineProperty(e,"__esModule",{value:!0}),e.getTranslationFilesToLoad=e.getTranslationFile=void 0;var n=r(70),o=r(71);e.getTranslationFile=function(t,e){var r=new XMLHttpRequest;r.onreadystatechange=function(){4===r.readyState&&200===r.status&&e(JSON.parse(r.responseText))},r.open("GET",t,!0),r.send(null)};e.getTranslationFilesToLoad=function(){var t,e,r=["".concat(n.globalPath,"{lang}.json")];return window.customTranslationFilesToLoad&&window.customTranslationFilesToLoad.forEach((function(t){r.push(t)})),t=r,e=new RegExp("{lang}","g"),t.map((function(t){return t.replace(e,o.variablesToParse.lang)}))}},function(t,e,r){"use strict";var n=r(5),o=r(30).map,i=r(64),u=r(11),a=i("map"),l=u("map");n({target:"Array",proto:!0,forced:!a||!l},{map:function(t){return o(this,t,arguments.length>1?arguments[1]:void 0)}})},function(t,e,r){var n=r(6),o=r(108);t.exports=function(t,e,r){var i,u;return o&&"function"==typeof(i=e.constructor)&&i!==r&&n(u=i.prototype)&&u!==r.prototype&&o(t,u),t}},function(t,e,r){var n=r(2),o=r(109);t.exports=Object.setPrototypeOf||("__proto__"in{}?function(){var t,e=!1,r={};try{(t=Object.getOwnPropertyDescriptor(Object.prototype,"__proto__").set).call(r,[]),e=r instanceof Array}catch(t){}return function(r,i){return n(r),o(i),e?t.call(r,i):r.__proto__=i,r}}():void 0)},function(t,e,r){var n=r(6);t.exports=function(t){if(!n(t)&&null!==t)throw TypeError("Can't set "+String(t)+" as a prototype");return t}},function(t,e,r){"use strict";var n=r(17),o=r(10),i=r(4),u=r(3),a=i("species");t.exports=function(t){var e=n(t),r=o.f;u&&e&&!e[a]&&r(e,a,{configurable:!0,get:function(){return this}})}},function(t,e,r){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;e.default={DEFAULT:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€99",footerText:{default:"ninety-nine euros"}},MY:{symbol:"RM",code:"MYR",trialValue:"RM 5",trialAmount:"5",fullValue:"RM 99",footerText:{en:"ninety nine ringgit"}},AU:{symbol:"A$",code:"AUD",trialValue:"A$1",trialAmount:"1",fullValue:"A$99",footerText:{en:"ninety nine dollars"}},CH:{symbol:"CHF",code:"CHF",trialValue:"1CHF",trialAmount:"1",fullValue:"89CHF",footerText:{de:"neunundachtzig CHF",fr:"quatre vingt neuf CHF"}},CZ:{symbol:"CZK",code:"CZK",trialValue:"25Kč",trialAmount:"25",fullValue:"29€",footerText:{cs:"dvacet devět eur"}},UK:{symbol:"£",code:"GBP",trialValue:"£1",trialAmount:"1",fullValue:"£39",footerText:{en:"thirty nine british pounds"}},JP:{symbol:"¥",code:"JPY",trialValue:"¥100",trialAmount:"100",fullValue:"¥10900",footerText:{ja:"10900 Yen"}},IS:{symbol:"KR",code:"ISK",trialValue:"130KR",trialAmount:"130",fullValue:"29€",footerText:{is:"29 euros"}},NZ:{symbol:"$",code:"NZD",trialValue:"$1",trialAmount:"1",fullValue:"$99",footerText:{en:"ninety-nine dollar"}},ES:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€55",footerText:{es:"cincuenta y cinco euros"}},IT:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€55",footerText:{it:"cinquantacinque o ottantanove euro"}},ITG:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€55",footerText:{it:"cinquantacinque o ottantanove euro"}},HU:{symbol:"Ft",code:"HUF",trialValue:"324 Ft",trialAmount:"324",fullValue:"€29",footerText:{hu:"huszonkilenc eurót"}},DE:{symbol:"€",code:"EURO",trialValue:"1€",trialAmount:"1",fullValue:"89€",footerText:{de:"neunundachtzig Euro"}},SG:{symbol:"S$",code:"SGD",trialValue:"S$1",trialAmount:"1",fullValue:"S$99",footerText:{en:"ninety-nine dollars"}},DK:{symbol:"kr",code:"DKK",trialValue:"7,-",trialAmount:"7",fullValue:"89,-",footerText:{da:"niogfirs euro"}},IE:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€55",footerText:{en:"fifty-five or eighty-nine euro"}},SE:{symbol:"kr",code:"SEK",trialValue:"10,-",trialAmount:"10",fullValue:"89,-",footerText:{sv:"åttio-nio euro"}},TW:{symbol:"NT$",code:"SEK",trialValue:"35 TWD",trialAmount:"35",fullValue:"999TWD",footerText:{zh:"999TWD"}},LV:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€29",footerText:{lv:"divdesmit deviņiem eiro"}},MK:{symbol:"ден",code:"MKD",trialValue:"65 Ден",trialAmount:"65",fullValue:"6098 ДЕН",footerText:{mk:"дваесет и девет евра"}},HR:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€29",footerText:{hr:"dvadeset devet eura"}},NO:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€89",footerText:{nb:"åtti ni euro"}},PT:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€29",footerText:{pt:"vinte e nove euro"}},GR:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€55",footerText:{el:"πενήντα πέντε ευρώ"}},AT:{symbol:"€",code:"EURO",trialValue:"1€",trialAmount:"1",fullValue:"€89",footerText:{de:"neunundachtzig Euro"}},SI:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€29",footerText:{sl:"devetindvajset evrov"}},SK:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€29",footerText:{sk:"dvadsať deväť eur"}},UA:{symbol:"₴",code:"ГРН",trialValue:"₴29.99",trialAmount:"29.99",fullValue:"₴799",footerText:{uk:"сімсот дев'яносто дев'ять гривень"}},TR:{symbol:"₺",code:"TRY",trialValue:"₺6.99",trialAmount:"6.99",fullValue:"₺189",footerText:{tr:"yüz seksen dokuz lira"}},EE:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€29",footerText:{et:"kakskümmend üheksa eurot"}},RO:{symbol:"Leu",code:"Leu",trialValue:"4.99 Leu",trialAmount:"4.99",fullValue:"139 Leu",footerText:{ro:"o sută treizeci și nouă leu"}},KW:{symbol:"$",code:"USD",trialValue:"$1",trialAmount:"1",fullValue:"$55",footerText:{ar:"$55",en:"fifty-five dollars"}},SA:{symbol:"$",code:"USD",trialValue:"$1",trialAmount:"1",fullValue:"$55",footerText:{ar:"$55",en:"fifty-five dollars"}},AE:{symbol:"$",code:"USD",trialValue:"$1",trialAmount:"1",fullValue:"$55",footerText:{ar:"$55",en:"fifty-five dollars"}},OM:{symbol:"$",code:"USD",trialValue:"$1",trialAmount:"1",fullValue:"$55",footerText:{ar:"$55",en:"fifty-five dollars"}},QA:{symbol:"$",code:"USD",trialValue:"$1",trialAmount:"1",fullValue:"$55",footerText:{ar:"$55",en:"fifty-five dollars"}},BH:{symbol:"$",code:"USD",trialValue:"$1",trialAmount:"1",fullValue:"$55",footerText:{ar:"$55",en:"fifty-five dollars"}},BG:{symbol:"Лв",code:"BGN",trialValue:"2 Лв",trialAmount:"2",footerText:{bg:"двадесет и девет евр"}},HK:{symbol:"HK$",code:"HKD",trialValue:"8 HK$",trialAmount:"8",fullValue:"430 HK$",footerText:{hk:"430 HK$"}},PL:{symbol:"ZŁ",code:"PLN",trialValue:"5 ZŁ",trialAmount:"5",fullValue:"99 ZŁ",footerText:{pl:"dziewięćdziesiąt dziewięć zł"}},NL:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€55",footerText:{nl:"vijfenvijftig euro"}},FR:{symbol:"€",code:"EUR",trialValue:"1€",trialAmount:"1",fullValue:"55€",footerText:{fr:"cinquante cinq euro"}},BE:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€55",footerText:{nl:"vijfenvijftig euro",fr:"cinquante cinq euro"}},IL:{symbol:"₪",code:"ILS",trialValue:"4₪",trialAmount:"4",fullValue:"199₪",footerText:{iw:"מאה ותשעים ותשעה שקלים",en:"one hundred and ninety-nine shekels"}},PH:{symbol:"₱",code:"PHP",trialValue:"55 ₱",trialAmount:"55",fullValue:"1499 ₱",footerText:{fil:"isang libo apat na raan siyamnapu't siyam Philippine Peso",en:"one thousand four hundred ninety-nine Philippine Peso"}},KR:{symbol:"₩",code:"KRW",trialValue:"1300₩",trialAmount:"1300",fullValue:"49000₩",footerText:{ko:"49000₩",en:"49000₩"}},LU:{symbol:"€",code:"EUR",trialValue:"€1",trialAmount:"1",fullValue:"€99",footerText:{lb:"nénganechzeg Euro",fr:"quatre-vingt-neuf euro",de:"neunundachtzig Euro"}},CA:{symbol:"CA$",code:"CAD",trialValue:"1CA$",trialAmount:"1",fullValue:"75CA$",footerText:{en:"seventy five Canadian dollars",fr:"soixante-quinze dollars canadien"}},UKG:{symbol:"£",code:"GBP",trialValue:"£1",trialAmount:"1",fullValue:"GBP 39",footerText:{en:"GBP 39"}},US:{symbol:"$",code:"USD",trialValue:"1$",trialAmount:"1",fullValue:"55$",footerText:{en:"fifty-five dollars"},VOD:{fullValue:"45$",footerText:{en:"forty-five dollars"}}},ZA:{symbol:"R",code:"Rand",trialValue:"R15",trialAmount:"15",fullValue:"R440",footerText:{en:"R440",af:"R440"}}},t.exports=e.default},function(t,e,r){"use strict";r(34),r(13),r(55),r(62),Object.defineProperty(e,"__esModule",{value:!0}),e.parseSelector=void 0;e.parseSelector=function(t){if(t.includes(":")){var e=t.split(":");return{selector:e[0],attribute:e[1]}}return{selector:t}}},function(t,e,r){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.getPublisher=void 0;var n=r(57),o=r(12);e.getPublisher=function(){return(0,n.getDataParameter)("data-pub")||(0,o.getUrlParameter)("pub")||null}},function(t,e,r){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.addAffiliateURL=void 0;e.addAffiliateURL=function(t){if(!document.getElementById("affiliates")){var e=document.querySelector(".footer .container, footer"),r=document.createElement("div");r.classList.add("row"),r.classList.add("row-affiliates"),r.style.margin="30px auto 10px",r.style.width="100%",r.innerHTML='<a id="affiliates" href="https://marketingaffiliateclub.com?p='.concat(t,'" target="_blank" style="width: 100%; text-align: center; color: inherit; font-weight: bold">AFFILIATES</a>'),e?e.appendChild(r):console.error("Missing footer element")}}},function(t,e,r){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.createCustomStyleTag=void 0;e.createCustomStyleTag=function(){var t=document.createElement("STYLE");t.classList.add("tl_style"),document.querySelector("head").appendChild(t)}}]);