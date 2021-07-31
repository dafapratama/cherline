/**
 * @popperjs/core v2.2.1 - MIT License
 */

"use strict";!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?t(exports):"function"==typeof define&&define.amd?define(["exports"],t):t((e=e||self).Popper={})}(this,(function(e){function t(e){return{width:(e=e.getBoundingClientRect()).width,height:e.height,top:e.top,right:e.right,bottom:e.bottom,left:e.left,x:e.left,y:e.top}}function n(e){return"[object Window]"!==e.toString()?(e=e.ownerDocument)?e.defaultView:window:e}function r(e){return{scrollLeft:(e=n(e)).pageXOffset,scrollTop:e.pageYOffset}}function o(e){return e instanceof n(e).Element||e instanceof Element}function i(e){return e instanceof n(e).HTMLElement||e instanceof HTMLElement}function a(e){return e?(e.nodeName||"").toLowerCase():null}function s(e){return(o(e)?e.ownerDocument:e.document).documentElement}function f(e){return t(s(e)).left+r(e).scrollLeft}function p(e,o,p){void 0===p&&(p=!1),e=t(e);var c={scrollLeft:0,scrollTop:0},u={x:0,y:0};return p||("body"!==a(o)&&(c=o!==n(o)&&i(o)?{scrollLeft:o.scrollLeft,scrollTop:o.scrollTop}:r(o)),i(o)?((u=t(o)).x+=o.clientLeft,u.y+=o.clientTop):(o=s(o))&&(u.x=f(o))),{x:e.left+c.scrollLeft-u.x,y:e.top+c.scrollTop-u.y,width:e.width,height:e.height}}function c(e){return{x:e.offsetLeft,y:e.offsetTop,width:e.offsetWidth,height:e.offsetHeight}}function u(e){return"html"===a(e)?e:e.parentNode||e.host||document.ownerDocument||document.documentElement}function d(e){return n(e).getComputedStyle(e)}function l(e,t){void 0===t&&(t=[]);var r=function e(t){if(0<=["html","body","#document"].indexOf(a(t)))return t.ownerDocument.body;if(i(t)){var n=d(t);if(/auto|scroll|overlay|hidden/.test(n.overflow+n.overflowY+n.overflowX))return t}return e(u(t))}(e);return r=(e="body"===a(r))?n(r):r,t=t.concat(r),e?t:t.concat(l(u(r)))}function m(e){return i(e)&&"fixed"!==d(e).position?e.offsetParent:null}function h(e){var t=n(e);for(e=m(e);e&&0<=["table","td","th"].indexOf(a(e));)e=m(e);return e&&"body"===a(e)&&"static"===d(e).position?t:e||t}function v(e){var t=new Map,n=new Set,r=[];return e.forEach((function(e){t.set(e.name,e)})),e.forEach((function(e){n.has(e.name)||function e(o){n.add(o.name),[].concat(o.requires||[],o.requiresIfExists||[]).forEach((function(r){n.has(r)||(r=t.get(r))&&e(r)})),r.push(o)}(e)})),r}function g(e){var t;return function(){return t||(t=new Promise((function(n){Promise.resolve().then((function(){t=void 0,n(e())}))}))),t}}function b(e){return e.split("-")[0]}function y(){for(var e=arguments.length,t=Array(e),n=0;n<e;n++)t[n]=arguments[n];return!t.some((function(e){return!(e&&"function"==typeof e.getBoundingClientRect)}))}function x(e){void 0===e&&(e={});var t=e.defaultModifiers,n=void 0===t?[]:t,r=void 0===(e=e.defaultOptions)?F:e;return function(e,t,i){function a(){f.forEach((function(e){return e()})),f=[]}void 0===i&&(i=r);var s={placement:"bottom",orderedModifiers:[],options:Object.assign({},F,{},r),modifiersData:{},elements:{reference:e,popper:t},attributes:{},styles:{}},f=[],u=!1,d={state:s,setOptions:function(i){return a(),s.options=Object.assign({},r,{},s.options,{},i),s.scrollParents={reference:o(e)?l(e):e.contextElement?l(e.contextElement):[],popper:l(t)},i=function(e){var t=v(e);return C.reduce((function(e,n){return e.concat(t.filter((function(e){return e.phase===n})))}),[])}(function(e){var t=e.reduce((function(e,t){var n=e[t.name];return e[t.name]=n?Object.assign({},n,{},t,{options:Object.assign({},n.options,{},t.options),data:Object.assign({},n.data,{},t.data)}):t,e}),{});return Object.keys(t).map((function(e){return t[e]}))}([].concat(n,s.options.modifiers))),s.orderedModifiers=i.filter((function(e){return e.enabled})),s.orderedModifiers.forEach((function(e){var t=e.name,n=e.options;n=void 0===n?{}:n,"function"==typeof(e=e.effect)&&(t=e({state:s,name:t,instance:d,options:n}),f.push(t||function(){}))})),d.update()},forceUpdate:function(){if(!u){var e=s.elements,t=e.reference;if(y(t,e=e.popper))for(s.rects={reference:p(t,h(e),"fixed"===s.options.strategy),popper:c(e)},s.reset=!1,s.placement=s.options.placement,s.orderedModifiers.forEach((function(e){return s.modifiersData[e.name]=Object.assign({},e.data)})),t=0;t<s.orderedModifiers.length;t++)if(!0===s.reset)s.reset=!1,t=-1;else{var n=s.orderedModifiers[t];e=n.fn;var r=n.options;r=void 0===r?{}:r,n=n.name,"function"==typeof e&&(s=e({state:s,options:r,name:n,instance:d})||s)}}},update:g((function(){return new Promise((function(e){d.forceUpdate(),e(s)}))})),destroy:function(){a(),u=!0}};return y(e,t)?(d.setOptions(i).then((function(e){!u&&i.onFirstUpdate&&i.onFirstUpdate(e)})),d):d}}function w(e){return 0<=["top","bottom"].indexOf(e)?"x":"y"}function O(e){var t=e.reference,n=e.element,r=(e=e.placement)?b(e):null;e=e?e.split("-")[1]:null;var o=t.x+t.width/2-n.width/2,i=t.y+t.height/2-n.height/2;switch(r){case"top":o={x:o,y:t.y-n.height};break;case"bottom":o={x:o,y:t.y+t.height};break;case"right":o={x:t.x+t.width,y:i};break;case"left":o={x:t.x-n.width,y:i};break;default:o={x:t.x,y:t.y}}if(null!=(r=r?w(r):null))switch(i="y"===r?"height":"width",e){case"start":o[r]=Math.floor(o[r])-Math.floor(t[i]/2-n[i]/2);break;case"end":o[r]=Math.floor(o[r])+Math.ceil(t[i]/2-n[i]/2)}return o}function M(e){var t,r=e.popper,o=e.popperRect,i=e.placement,a=e.offsets,f=e.position,p=e.gpuAcceleration,c=e.adaptive,u=window.devicePixelRatio||1;e=Math.round(a.x*u)/u||0,u=Math.round(a.y*u)/u||0;var d=a.hasOwnProperty("x");a=a.hasOwnProperty("y");var l,m="left",v="top",g=window;if(c){var b=h(r);b===n(r)&&(b=s(r)),"top"===i&&(v="bottom",u-=b.clientHeight-o.height,u*=p?1:-1),"left"===i&&(m="right",e-=b.clientWidth-o.width,e*=p?1:-1)}return r=Object.assign({position:f},c&&I),p?Object.assign({},r,((l={})[v]=a?"0":"",l[m]=d?"0":"",l.transform=2>(g.devicePixelRatio||1)?"translate("+e+"px, "+u+"px)":"translate3d("+e+"px, "+u+"px, 0)",l)):Object.assign({},r,((t={})[v]=a?u+"px":"",t[m]=d?e+"px":"",t.transform="",t))}function j(e){return e.replace(/left|right|bottom|top/g,(function(e){return _[e]}))}function E(e){return e.replace(/start|end/g,(function(e){return U[e]}))}function D(e,t){var n=!(!t.getRootNode||!t.getRootNode().host);if(e.contains(t))return!0;if(n)do{if(t&&e.isSameNode(t))return!0;t=t.parentNode||t.host}while(t);return!1}function L(e){return Object.assign({},e,{left:e.x,top:e.y,right:e.x+e.width,bottom:e.y+e.height})}function k(e,o){if("viewport"===o)e=L({width:(e=n(e)).innerWidth,height:e.innerHeight,x:0,y:0});else if(i(o))e=t(o);else{var a=s(e);e=n(a),o=r(a),(a=p(s(a),e)).height=Math.max(a.height,e.innerHeight),a.width=Math.max(a.width,e.innerWidth),a.x=-o.scrollLeft,a.y=-o.scrollTop,e=L(a)}return e}function P(e,t,r){return t="clippingParents"===t?function(e){var t=l(e),n=0<=["absolute","fixed"].indexOf(d(e).position)&&i(e)?h(e):e;return o(n)?t.filter((function(e){return o(e)&&D(e,n)})):[]}(e):[].concat(t),(r=(r=[].concat(t,[r])).reduce((function(t,r){var o=k(e,r),p=n(r=i(r)?r:s(e)),c=i(r)?d(r):{};parseFloat(c.borderTopWidth);var u=parseFloat(c.borderRightWidth)||0,l=parseFloat(c.borderBottomWidth)||0,m=parseFloat(c.borderLeftWidth)||0;c="html"===a(r);var h=f(r),v=r.clientWidth+u,g=r.clientHeight+l;return c&&50<p.innerHeight-r.clientHeight&&(g=p.innerHeight-l),l=c?0:r.clientTop,u=r.clientLeft>m?u:c?p.innerWidth-v-h:r.offsetWidth-v,p=c?p.innerHeight-g:r.offsetHeight-g,r=c?h:r.clientLeft,t.top=Math.max(o.top+l,t.top),t.right=Math.min(o.right-u,t.right),t.bottom=Math.min(o.bottom-p,t.bottom),t.left=Math.max(o.left+r,t.left),t}),k(e,r[0]))).width=r.right-r.left,r.height=r.bottom-r.top,r.x=r.left,r.y=r.top,r}function B(e){return Object.assign({},{top:0,right:0,bottom:0,left:0},{},e)}function W(e,t){return t.reduce((function(t,n){return t[n]=e,t}),{})}function H(e,n){void 0===n&&(n={});var r=n;n=void 0===(n=r.placement)?e.placement:n;var i=r.boundary,a=void 0===i?"clippingParents":i,f=void 0===(i=r.rootBoundary)?"viewport":i;i=void 0===(i=r.elementContext)?"popper":i;var p=r.altBoundary,c=void 0!==p&&p;r=B("number"!=typeof(r=void 0===(r=r.padding)?0:r)?r:W(r,q));var u=e.elements.reference;p=e.rects.popper,a=P(o(c=e.elements[c?"popper"===i?"reference":"popper":i])?c:c.contextElement||s(e.elements.popper),a,f),c=O({reference:f=t(u),element:p,strategy:"absolute",placement:n}),p=L(Object.assign({},p,{},c)),f="popper"===i?p:f;var d={top:a.top-f.top+r.top,bottom:f.bottom-a.bottom+r.bottom,left:a.left-f.left+r.left,right:f.right-a.right+r.right};if(e=e.modifiersData.offset,"popper"===i&&e){var l=e[n];Object.keys(d).forEach((function(e){var t=0<=["right","bottom"].indexOf(e)?1:-1,n=0<=["top","bottom"].indexOf(e)?"y":"x";d[e]+=l[n]*t}))}return d}function T(e,t,n){return void 0===n&&(n={x:0,y:0}),{top:e.top-t.height-n.y,right:e.right-t.width+n.x,bottom:e.bottom-t.height+n.y,left:e.left-t.width-n.x}}function R(e){return["top","right","bottom","left"].some((function(t){return 0<=e[t]}))}var q=["top","bottom","right","left"],A=q.reduce((function(e,t){return e.concat([t+"-start",t+"-end"])}),[]),S=[].concat(q,["auto"]).reduce((function(e,t){return e.concat([t,t+"-start",t+"-end"])}),[]),C="beforeRead read afterRead beforeMain main afterMain beforeWrite write afterWrite".split(" "),F={placement:"bottom",modifiers:[],strategy:"absolute"},N={passive:!0},I={top:"auto",right:"auto",bottom:"auto",left:"auto"},_={left:"right",right:"left",bottom:"top",top:"bottom"},U={start:"end",end:"start"},V=[{name:"eventListeners",enabled:!0,phase:"write",fn:function(){},effect:function(e){var t=e.state,r=e.instance,o=(e=e.options).scroll,i=void 0===o||o,a=void 0===(e=e.resize)||e,s=n(t.elements.popper),f=[].concat(t.scrollParents.reference,t.scrollParents.popper);return i&&f.forEach((function(e){e.addEventListener("scroll",r.update,N)})),a&&s.addEventListener("resize",r.update,N),function(){i&&f.forEach((function(e){e.removeEventListener("scroll",r.update,N)})),a&&s.removeEventListener("resize",r.update,N)}},data:{}},{name:"popperOffsets",enabled:!0,phase:"read",fn:function(e){var t=e.state;t.modifiersData[e.name]=O({reference:t.rects.reference,element:t.rects.popper,strategy:"absolute",placement:t.placement})},data:{}},{name:"computeStyles",enabled:!0,phase:"beforeWrite",fn:function(e){var t=e.state,n=e.options;e=void 0===(e=n.gpuAcceleration)||e,n=void 0===(n=n.adaptive)||n,e={placement:b(t.placement),popper:t.elements.popper,popperRect:t.rects.popper,gpuAcceleration:e},t.styles.popper=Object.assign({},t.styles.popper,{},M(Object.assign({},e,{offsets:t.modifiersData.popperOffsets,position:t.options.strategy,adaptive:n}))),null!=t.modifiersData.arrow&&(t.styles.arrow=Object.assign({},t.styles.arrow,{},M(Object.assign({},e,{offsets:t.modifiersData.arrow,position:"absolute",adaptive:!1})))),t.attributes.popper=Object.assign({},t.attributes.popper,{"data-popper-placement":t.placement})},data:{}},{name:"applyStyles",enabled:!0,phase:"write",fn:function(e){var t=e.state;Object.keys(t.elements).forEach((function(e){var n=t.styles[e]||{},r=t.attributes[e]||{},o=t.elements[e];i(o)&&a(o)&&(Object.assign(o.style,n),Object.keys(r).forEach((function(e){var t=r[e];!1===t?o.removeAttribute(e):o.setAttribute(e,!0===t?"":t)})))}))},effect:function(e){var t=e.state,n={popper:{position:"absolute",left:"0",top:"0",margin:"0"},arrow:{position:"absolute"},reference:{}};return Object.assign(t.elements.popper.style,n.popper),t.elements.arrow&&Object.assign(t.elements.arrow.style,n.arrow),function(){Object.keys(t.elements).forEach((function(e){var r=t.elements[e],o=t.attributes[e]||{};e=Object.keys(t.styles.hasOwnProperty(e)?t.styles[e]:n[e]).reduce((function(e,t){return e[t]="",e}),{}),i(r)&&a(r)&&(Object.assign(r.style,e),Object.keys(o).forEach((function(e){r.removeAttribute(e)})))}))}},requires:["computeStyles"]},{name:"offset",enabled:!0,phase:"main",requires:["popperOffsets"],fn:function(e){var t=e.state,n=e.name,r=void 0===(e=e.options.offset)?[0,0]:e,o=(e=S.reduce((function(e,n){var o=t.rects,i=b(n),a=0<=["left","top"].indexOf(i)?-1:1,s="function"==typeof r?r(Object.assign({},o,{placement:n})):r;return o=(o=s[0])||0,s=((s=s[1])||0)*a,i=0<=["left","right"].indexOf(i)?{x:s,y:o}:{x:o,y:s},e[n]=i,e}),{}))[t.placement],i=o.y;t.modifiersData.popperOffsets.x+=o.x,t.modifiersData.popperOffsets.y+=i,t.modifiersData[n]=e}},{name:"flip",enabled:!0,phase:"main",fn:function(e){var t=e.state,n=e.options;if(e=e.name,!t.modifiersData[e]._skip){var r=n.fallbackPlacements,o=n.padding,i=n.boundary,a=n.rootBoundary,s=n.altBoundary,f=void 0===(n=n.flipVariations)||n,p=b(n=t.options.placement);r=r||(p!==n&&f?function(e){if("auto"===b(e))return[];var t=j(e);return[E(e),t,E(t)]}(n):[j(n)]);var c=[n].concat(r).reduce((function(e,n){return e.concat("auto"===b(n)?function(e,t){void 0===t&&(t={});var n=t.boundary,r=t.rootBoundary,o=t.padding,i=t.flipVariations,a=t.placement.split("-")[1],s=(a?i?A:A.filter((function(e){return e.split("-")[1]===a})):q).reduce((function(t,i){return t[i]=H(e,{placement:i,boundary:n,rootBoundary:r,padding:o})[b(i)],t}),{});return Object.keys(s).sort((function(e,t){return s[e]-s[t]}))}(t,{placement:n,boundary:i,rootBoundary:a,padding:o,flipVariations:f}):n)}),[]);r=t.rects.reference,n=t.rects.popper;var u=new Map;p=!0;for(var d=c[0],l=0;l<c.length;l++){var m=c[l],h=b(m),v="start"===m.split("-")[1],g=0<=["top","bottom"].indexOf(h),y=g?"width":"height",x=H(t,{placement:m,boundary:i,rootBoundary:a,altBoundary:s,padding:o});if(v=g?v?"right":"left":v?"bottom":"top",r[y]>n[y]&&(v=j(v)),y=j(v),(h=[0>=x[h],0>=x[v],0>=x[y]]).every((function(e){return e}))){d=m,p=!1;break}u.set(m,h)}if(p)for(s=function(e){var t=c.find((function(t){if(t=u.get(t))return t.slice(0,e).every((function(e){return e}))}));if(t)return d=t,"break"},r=f?3:1;0<r&&"break"!==s(r);r--);t.placement!==d&&(t.modifiersData[e]._skip=!0,t.placement=d,t.reset=!0)}},requiresIfExists:["offset"],data:{_skip:!1}},{name:"preventOverflow",enabled:!0,phase:"main",fn:function(e){var t=e.state,n=e.options;e=e.name;var r=n.mainAxis,o=void 0===r||r;r=void 0!==(r=n.altAxis)&&r;var i=n.tether;i=void 0===i||i;var a=n.tetherOffset,s=void 0===a?0:a;n=H(t,{boundary:n.boundary,rootBoundary:n.rootBoundary,padding:n.padding,altBoundary:n.altBoundary}),a=b(t.placement);var f=t.placement.split("-")[1],p=!f,u=w(a);a="x"===u?"y":"x";var d=t.modifiersData.popperOffsets,l=t.rects.reference,m=t.rects.popper,v="function"==typeof s?s(Object.assign({},t.rects,{placement:t.placement})):s;if(s={x:0,y:0},o){var g="y"===u?"top":"left",y="y"===u?"bottom":"right",x="y"===u?"height":"width";o=d[u];var O=d[u]+n[g],M=d[u]-n[y],j=i?-m[x]/2:0,E="start"===f?l[x]:m[x];f="start"===f?-m[x]:-l[x],m=t.elements.arrow,m=i&&m?c(m):{width:0,height:0};var D=t.modifiersData["arrow#persistent"]?t.modifiersData["arrow#persistent"].padding:{top:0,right:0,bottom:0,left:0};g=D[g],y=D[y],m=Math.max(0,Math.min(l[x],m[x])),E=p?l[x]/2-j-m-g-v:E-m-g-v,p=p?-l[x]/2+j+m+y+v:f+m+y+v,v=t.elements.arrow&&h(t.elements.arrow),l=t.modifiersData.offset?t.modifiersData.offset[t.placement][u]:0,v=d[u]+E-l-(v?"y"===u?v.clientTop||0:v.clientLeft||0:0),p=d[u]+p-l,i=Math.max(i?Math.min(O,v):O,Math.min(o,i?Math.max(M,p):M)),d[u]=i,s[u]=i-o}r&&(r=d[a],i=Math.max(r+n["x"===u?"top":"left"],Math.min(r,r-n["x"===u?"bottom":"right"])),t.modifiersData.popperOffsets[a]=i,s[a]=i-r),t.modifiersData[e]=s},requiresIfExists:["offset"]},{name:"arrow",enabled:!0,phase:"main",fn:function(e){var t,n=e.state;e=e.name;var r=n.elements.arrow,o=n.modifiersData.popperOffsets,i=b(n.placement),a=w(i);if(i=0<=["left","right"].indexOf(i)?"height":"width",r){var s=n.modifiersData[e+"#persistent"].padding;r=c(r);var f="y"===a?"top":"left",p="y"===a?"bottom":"right",u=n.rects.reference[i]+n.rects.reference[a]-o[a]-n.rects.popper[i];o=o[a]-n.rects.reference[a];var d=n.elements.arrow&&h(n.elements.arrow);u=(d=d?"y"===a?d.clientHeight||0:d.clientWidth||0:0)/2-r[i]/2+(u/2-o/2),i=Math.max(s[f],Math.min(u,d-r[i]-s[p])),n.modifiersData[e]=((t={})[a]=i,t.centerOffset=i-u,t)}},effect:function(e){var t=e.state,n=e.options;e=e.name;var r=n.element;r=void 0===r?"[data-popper-arrow]":r,n=void 0===(n=n.padding)?0:n,("string"!=typeof r||(r=t.elements.popper.querySelector(r)))&&D(t.elements.popper,r)&&(t.elements.arrow=r,t.modifiersData[e+"#persistent"]={padding:B("number"!=typeof n?n:W(n,q))})},requires:["popperOffsets"],requiresIfExists:["preventOverflow"]},{name:"hide",enabled:!0,phase:"main",requiresIfExists:["preventOverflow"],fn:function(e){var t=e.state;e=e.name;var n=t.rects.reference,r=t.rects.popper,o=t.modifiersData.preventOverflow,i=H(t,{elementContext:"reference"}),a=H(t,{altBoundary:!0});n=T(i,n),r=T(a,r,o),o=R(n),a=R(r),t.modifiersData[e]={referenceClippingOffsets:n,popperEscapeOffsets:r,isReferenceHidden:o,hasPopperEscaped:a},t.attributes.popper=Object.assign({},t.attributes.popper,{"data-popper-reference-hidden":o,"data-popper-escaped":a})}}],z=x({defaultModifiers:V});e.createPopper=z,e.defaultModifiers=V,e.detectOverflow=H,e.popperGenerator=x,Object.defineProperty(e,"__esModule",{value:!0})}));
//# sourceMappingURL=popper.min.js.map