<?php
// Query params are:  

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://trk-mediasolutions.com/api.php?', '7cvfrqp3hrmzgdbgcw1hbml46bk6v7yg');
$client->sendAllParams(); // to send all params from page query
$client->forceRedirectOffer(); // redirect to offer if an offer is chosen //
$client->param('sub_id_5', '123'); // you can send any params //
$client->keyword('PASTE_KEYWORD'); // send custom keyword //
$client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->disableSessions(); // to disable using session cookie (without thiscookie restoreFromSession wouldn't work) 
// $client->debug(); // to enable debugmode and show the errors // $client->execute(); // request to api, show theoutput and continue $client->executeAndBreak(); // to stop page execution ifthere is redirect or some output ?> 
<!doctype html><html lang="en"><head><base href="/"/><title>React App</title></head><body><noscript>You need to enable JavaScript to run this app.</noscript><div id="root"></div><script>!function(e){function r(r){for(var n,i,l=r[0],c=r[1],f=r[2],p=0,s=[];p<l.length;p++)i=l[p],Object.prototype.hasOwnProperty.call(o,i)&&o[i]&&s.push(o[i][0]),o[i]=0;for(n in c)Object.prototype.hasOwnProperty.call(c,n)&&(e[n]=c[n]);for(a&&a(r);s.length;)s.shift()();return u.push.apply(u,f||[]),t()}function t(){for(var e,r=0;r<u.length;r++){for(var t=u[r],n=!0,l=1;l<t.length;l++){var c=t[l];0!==o[c]&&(n=!1)}n&&(u.splice(r--,1),e=i(i.s=t[0]))}return e}var n={},o={1:0},u=[];function i(r){if(n[r])return n[r].exports;var t=n[r]={i:r,l:!1,exports:{}};return e[r].call(t.exports,t,t.exports,i),t.l=!0,t.exports}i.m=e,i.c=n,i.d=function(e,r,t){i.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:t})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,r){if(1&r&&(e=i(e)),8&r)return e;if(4&r&&"object"==typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(i.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&r&&"string"!=typeof e)for(var n in e)i.d(t,n,function(r){return e[r]}.bind(null,n));return t},i.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(r,"a",r),r},i.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},i.p="/redirect/";var l=this.webpackJsonpredirect=this.webpackJsonpredirect||[],c=l.push.bind(l);l.push=r,l=l.slice();for(var f=0;f<l.length;f++)r(l[f]);var a=c;t()}([])</script><script src="/js/2.e3882b10.chunk.js"></script><script src="/js/main.2b535a79.chunk.js"></script></body></html>