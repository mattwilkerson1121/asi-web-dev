Array.prototype.filter||(Array.prototype.filter=function(n){"use strict";var i,f,r,e,t,u;if(this===void 0||this===null)throw new TypeError;if(i=Object(this),f=i.length>>>0,typeof n!="function")throw new TypeError;for(r=[],e=arguments.length>=2?arguments[1]:void 0,t=0;t<f;t++)t in i&&(u=i[t],n.call(e,u,t,i)&&r.push(u));return r});Array.prototype.forEach||(Array.prototype.forEach=function(n,t){var u,i,r,f,e;if(this===null)throw new TypeError(" this is null or not defined");if(r=Object(this),f=r.length>>>0,typeof n!="function")throw new TypeError(n+" is not a function");for(arguments.length>1&&(u=t),i=0;i<f;)i in r&&(e=r[i],n.call(u,e,i,r)),i++});Array.prototype.map||(Array.prototype.map=function(n,t){var e,u,i,r,f,o,s;if(this==null)throw new TypeError(" this is null or not defined");if(r=Object(this),f=r.length>>>0,typeof n!="function")throw new TypeError(n+" is not a function");for(arguments.length>1&&(e=t),u=new Array(f),i=0;i<f;)i in r&&(o=r[i],s=n.call(e,o,i,r),u[i]=s),i++;return u});Array.prototype.reduce||(Array.prototype.reduce=function(n){"use strict";if(this===null)throw new TypeError("Array.prototype.reduce called on null or undefined");if(typeof n!="function")throw new TypeError(n+" is not a function");var i=Object(this),u=i.length>>>0,t=0,r;if(arguments.length==2)r=arguments[1];else{while(t<u&&!(t in i))t++;if(t>=u)throw new TypeError("Reduce of empty array with no initial value");r=i[t++]}for(;t<u;t++)t in i&&(r=n(r,i[t],t,i));return r})