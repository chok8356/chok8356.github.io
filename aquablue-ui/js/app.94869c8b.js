(function(t){function e(e){for(var n,o,l=e[0],r=e[1],c=e[2],u=0,h=[];u<l.length;u++)o=l[u],Object.prototype.hasOwnProperty.call(a,o)&&a[o]&&h.push(a[o][0]),a[o]=0;for(n in r)Object.prototype.hasOwnProperty.call(r,n)&&(t[n]=r[n]);d&&d(e);while(h.length)h.shift()();return s.push.apply(s,c||[]),i()}function i(){for(var t,e=0;e<s.length;e++){for(var i=s[e],n=!0,o=1;o<i.length;o++){var r=i[o];0!==a[r]&&(n=!1)}n&&(s.splice(e--,1),t=l(l.s=i[0]))}return t}var n={},a={app:0},s=[];function o(t){return l.p+"js/"+({Button:"Button",Checkbox:"Checkbox",Index:"Index",Link:"Link",Page:"Page",Radio:"Radio"}[t]||t)+"."+{Button:"461ec432",Checkbox:"878b1212",Index:"1918bd84",Link:"a3616cfa",Page:"6f6d153e",Radio:"e909dc01"}[t]+".js"}function l(e){if(n[e])return n[e].exports;var i=n[e]={i:e,l:!1,exports:{}};return t[e].call(i.exports,i,i.exports,l),i.l=!0,i.exports}l.e=function(t){var e=[],i=a[t];if(0!==i)if(i)e.push(i[2]);else{var n=new Promise((function(e,n){i=a[t]=[e,n]}));e.push(i[2]=n);var s,r=document.createElement("script");r.charset="utf-8",r.timeout=120,l.nc&&r.setAttribute("nonce",l.nc),r.src=o(t);var c=new Error;s=function(e){r.onerror=r.onload=null,clearTimeout(u);var i=a[t];if(0!==i){if(i){var n=e&&("load"===e.type?"missing":e.type),s=e&&e.target&&e.target.src;c.message="Loading chunk "+t+" failed.\n("+n+": "+s+")",c.name="ChunkLoadError",c.type=n,c.request=s,i[1](c)}a[t]=void 0}};var u=setTimeout((function(){s({type:"timeout",target:r})}),12e4);r.onerror=r.onload=s,document.head.appendChild(r)}return Promise.all(e)},l.m=t,l.c=n,l.d=function(t,e,i){l.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:i})},l.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},l.t=function(t,e){if(1&e&&(t=l(t)),8&e)return t;if(4&e&&"object"===typeof t&&t&&t.__esModule)return t;var i=Object.create(null);if(l.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var n in t)l.d(i,n,function(e){return t[e]}.bind(null,n));return i},l.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return l.d(e,"a",e),e},l.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},l.p="/",l.oe=function(t){throw console.error(t),t};var r=window["webpackJsonp"]=window["webpackJsonp"]||[],c=r.push.bind(r);r.push=e,r=r.slice();for(var u=0;u<r.length;u++)e(r[u]);var d=c;s.push(["e58e","chunk-vendors"]),i()})({"448e":function(t,e,i){},af8f:function(t,e,i){"use strict";var n=i("448e"),a=i.n(n);a.a},e58e:function(t,e,i){"use strict";i.r(e);var n=i("2b0e"),a=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"aq-docs",attrs:{id:"app"}},[t._m(0),i("aside",{staticClass:"aside"},[i("div",{staticClass:"menu"},[i("router-link",{staticClass:"menu__item",attrs:{to:{name:"Button"}}},[t._v("\n\t\t\t\tButton\n\t\t\t")]),i("router-link",{staticClass:"menu__item",attrs:{to:{name:"Link"}}},[t._v("\n\t\t\t\tLink\n\t\t\t")]),i("router-link",{staticClass:"menu__item",attrs:{to:{name:"Checkbox"}}},[t._v("\n\t\t\t\tCheckbox\n\t\t\t")]),i("router-link",{staticClass:"menu__item",attrs:{to:{name:"Radio"}}},[t._v("\n\t\t\t\tRadio\n\t\t\t")]),i("router-link",{staticClass:"menu__item",attrs:{to:{name:"Page"}}},[t._v("\n\t\t\t\tPage\n\t\t\t")])],1)]),i("main",{staticClass:"content"},[this.$route.meta.title?[i("h1",{staticClass:"page-title"},[t._v("\n\t\t\t\t"+t._s(this.$route.meta.title)+"\n\t\t\t")]),i("div",{staticClass:"separator mb-4"})]:t._e(),i("router-view")],2)])},s=[function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("header",{staticClass:"header"},[i("div",{staticClass:"logo"},[i("span",{staticClass:"logo__text"},[t._v("Aquablue UI")])]),i("div",{staticClass:"login"},[i("div",{staticClass:"login__link "},[i("span",{staticClass:"login__icon"},[i("i",{staticClass:"fal fa-user-circle"})]),i("span",{staticClass:"login__text"},[t._v("Login")])])])])}],o={computed:{documentTitle:function(){return this.$route.meta.title+" |  Aquablue UI"}},watch:{$route:function(){document.title=this.documentTitle}},mounted:function(){document.title=this.documentTitle}},l=o,r=(i("af8f"),i("2877")),c=Object(r["a"])(l,a,s,!1,null,null,null),u=c.exports,d=i("8c4f");n["a"].use(d["a"]);var h=new d["a"]({mode:"history",base:"/",routes:[{path:"/",name:"Index",component:function(){return i.e("Index").then(i.bind(null,"c271"))},redirect:"/button",meta:{title:"Index"}},{path:"/page",name:"Page",component:function(){return i.e("Page").then(i.bind(null,"bc53"))},meta:{title:"Page"}},{path:"/button",name:"Button",component:function(){return i.e("Button").then(i.bind(null,"ca9d"))},meta:{title:"Button"}},{path:"/link",name:"Link",component:function(){return i.e("Link").then(i.bind(null,"b692"))},meta:{title:"Link"}},{path:"/checkbox",name:"Checkbox",component:function(){return i.e("Checkbox").then(i.bind(null,"9e6d"))},meta:{title:"Checkbox"}},{path:"/radio",name:"Radio",component:function(){return i.e("Radio").then(i.bind(null,"5749"))},meta:{title:"Radio"}}]}),p=i("2f62");n["a"].use(p["a"]);var f=new p["a"].Store({state:{},mutations:{},actions:{}}),b=(i("7f7f"),i("456d"),i("ac6a"),function(){var t=this,e=t.$createElement,i=t._self._c||e;return i(t.href?"a":"button",{tag:"component",staticClass:"aq-btn",class:t.classes,attrs:{href:t.href?t.disabled?null:t.href:null,disabled:t.disabled},on:{click:t.onClick}},[i("div",{staticClass:"aq-btn__content"},[t.icon||t.$slots.icon||t.loading?i("div",{staticClass:"aq-btn__icon",class:[t.iconRight?"aq-btn__icon--right":"aq-btn__icon--left",{"is-loading":t.loading}]},[t.icon?i("i",{class:t.icon}):this.$slots.icon?t._t("icon"):t.loading?i("i",[i("svg",{staticClass:"feather feather-loader",attrs:{xmlns:"http://www.w3.org/2000/svg",width:"14",height:"14",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round"}},[i("line",{attrs:{x1:"12",y1:"2",x2:"12",y2:"6"}}),i("line",{attrs:{x1:"12",y1:"18",x2:"12",y2:"22"}}),i("line",{attrs:{x1:"4.93",y1:"4.93",x2:"7.76",y2:"7.76"}}),i("line",{attrs:{x1:"16.24",y1:"16.24",x2:"19.07",y2:"19.07"}}),i("line",{attrs:{x1:"2",y1:"12",x2:"6",y2:"12"}}),i("line",{attrs:{x1:"18",y1:"12",x2:"22",y2:"12"}}),i("line",{attrs:{x1:"4.93",y1:"19.07",x2:"7.76",y2:"16.24"}}),i("line",{attrs:{x1:"16.24",y1:"7.76",x2:"19.07",y2:"4.93"}})])]):t._e()],2):t._e(),this.$slots.default?i("span",{staticClass:"aq-btn__text"},[t._t("default")],2):t._e()]),!t.disabled||t.loading?i("aq-ripple-ink"):t._e()],1)}),m=[],v=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"aq-ripple-ink"})},g=[],_=function(t,e){var i=e.currentTarget||e.target;if(i&&!i.classList.contains("aq-ripple-ink")&&(i=i.querySelector(".aq-ripple-ink")),i){var n=i.getAttribute("data-ui-event");if(!n||n===t){i.setAttribute("data-ui-event",t);var a,s=i.getBoundingClientRect(),o=e.clientX-s.left,l=e.clientY-s.top,r=document.createElement("div");a=s.width===s.height?1.412*s.width:Math.sqrt(s.width*s.width+s.height*s.height);var c=2*a+"px";r.style.width=c,r.style.height=c,r.style.marginLeft=-a+o+"px",r.style.marginTop=-a+l+"px",r.className="aq-ripple-ink__ink",i.appendChild(r),setTimeout((function(){r.classList.add("is-held")}),0);var u="mousedown"===t?"mouseup":"touchend",d=function t(){document.removeEventListener(u,t),document.removeEventListener("dragend",t),r.classList.add("is-done");var e=650;setTimeout((function(){i.contains(r)&&(i.removeChild(r),0===i.children.length&&i.removeAttribute("data-ui-event"))}),e)};document.addEventListener(u,d),document.addEventListener("dragend",d)}}},k=function(t){0===t.button&&_(t.type,t)},y=function(t){if(t.changedTouches)for(var e=0;e<t.changedTouches.length;++e)_(t.type,t.changedTouches[e])},x={name:"AqRippleInk",created:function(){this.triggerEl=null},mounted:function(){this.setupRipple()},methods:{setupRipple:function(){this.triggerEl=this.$el.parentElement,this.triggerEl?(this.triggerEl.addEventListener("touchstart",y),this.triggerEl.addEventListener("mousedown",k)):console.error("[UiRippleInk]: Trigger element not found.")},destroyRipple:function(){this.triggerEl&&(this.triggerEl.removeEventListener("mousedown",k),this.triggerEl.removeEventListener("touchstart",y))}}},C=x,q=Object(r["a"])(C,v,g,!1,null,null,null),w=q.exports,B={name:"AqButton",components:{UiRippleInk:w},props:{text:Boolean,light:Boolean,disabled:Boolean,loading:Boolean,round:Boolean,circle:Boolean,href:String,icon:String,iconRight:Boolean,type:{type:String,default:"default",validator:function(t){return-1!==["default","primary","success","error","warning","info"].indexOf(t)}},size:{type:String,validator:function(t){return-1!==["xs","sm","md","lg"].indexOf(t)}}},computed:{buttonSize:function(){return this.size||this.$ELEMENT.size},classes:function(){return[this.type?"aq-btn--".concat(this.type):"",this.buttonSize?"aq-btn--".concat(this.buttonSize):"",{"is-light":this.light,"is-text":this.text,"is-round":this.round,"is-circle":this.circle,"is-link":this.href,"is-disabled":this.disabled,"is-loading":this.loading}]}},methods:{onClick:function(t){this.$emit("click",t)}}},$=B,O=Object(r["a"])($,b,m,!1,null,null,null),E=O.exports,S=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"aq-button-group"},[t._t("default")],2)},V=[],P={name:"AqButtonGroup"},L=P,j=Object(r["a"])(L,S,V,!1,null,null,null),R=j.exports,A=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("a",{staticClass:"aq-link",class:[t.type?"aq-link--"+t.type:"",{"is-disabled":t.disabled,"is-underline":t.underline}],attrs:{href:t.disabled?"javascript:void(0)":t.href},on:{click:t.onClick}},[i("div",{staticClass:"aq-link__content"},[t.icon||t.$slots.icon?i("div",{staticClass:"aq-link__icon",class:[t.iconRight?"aq-link__icon--right":"aq-link__icon--left"]},[t.icon?i("i",{class:t.icon}):this.$slots.icon?t._t("icon"):t._e()],2):t._e(),this.$slots.default?i("span",{staticClass:"aq-link__text"},[t._t("default")],2):t._e()])])},T=[],I={name:"AqLink",props:{disabled:Boolean,underline:{type:Boolean,default:!0},href:{type:String,required:!0},icon:String,iconRight:Boolean,type:{type:String,default:"default",validator:function(t){return-1!==["default","primary","success","error","warning","info"].indexOf(t)}},size:{type:String,validator:function(t){return-1!==["xs","sm","md","lg"].indexOf(t)}}},methods:{onClick:function(t){this.$emit("click",t)}}},F=I,z=Object(r["a"])(F,A,T,!1,null,null,null),N=z.exports,M=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("label",{staticClass:"aq-checkbox",class:t.classes},[i("div",{staticClass:"aq-checkbox__checkmark"},[i("input",{ref:"input",staticClass:"aq-checkbox__input",attrs:{type:"checkbox","aria-hidden":"true",disabled:t.disabled,name:t.name,tabindex:t.tabindex},domProps:{checked:t.isChecked,value:t.value},on:{blur:t.onBlur,change:t.onChange,click:t.onClick,focus:t.onFocus}})]),t.label||this.$slots.default?i("div",{staticClass:"aq-checkbox__text"},[t._t("default",[t._v(t._s(t.label))])],2):t._e()])},G=[],H=(i("c5f6"),{name:"AqCheckbox",props:{name:String,label:String,tabindex:[String,Number],trueValue:{default:!0},falseValue:{default:!1},value:{required:!0},checked:{type:Boolean,default:!1},disabled:Boolean,boxPosition:{type:String,default:"left"},type:{type:String,default:"default",validator:function(t){return-1!==["default","primary","success","error","warning","info"].indexOf(t)}}},data:function(){return{isChecked:this.value||this.checked}},computed:{classes:function(){return[this.type?"aq-checkbox--".concat(this.type):"",{"is-checked":this.isChecked,"is-disabled":this.disabled},"aq-checkbox--box-position-".concat(this.boxPosition)]}},watch:{value:function(){this.isChecked=this.value}},created:function(){this.$emit("input",this.isChecked?this.trueValue:this.falseValue)},methods:{onChange:function(t){var e=t.target.checked;this.disabled||(this.$emit("input",e?this.trueValue:this.falseValue,t),this.$emit("change",e?this.trueValue:this.falseValue,t))},onClick:function(t){this.$emit("click",t)},onFocus:function(t){this.$emit("focus",t)},onBlur:function(t){this.$emit("blur",t)}}}),D=H,U=Object(r["a"])(D,M,G,!1,null,null,null),J=U.exports,X=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"aq-checkbox-group",class:t.classes,attrs:{"aria-label":"checkbox-group",role:"group"}},[this.$slots.default?i("div",{staticClass:"aq-checkbox-group__label-text"},[t._t("default")],2):t._e(),i("div",{staticClass:"aq-checkbox-group__items"},t._l(t.options,(function(e,n){return i("aq-checkbox",{key:e[t.keys.id],staticClass:"aq-checkbox-group__checkbox",attrs:{id:e[t.keys.id],"box-position":t.boxPosition,checked:t.isOptionCheckedByDefault(e),disabled:t.disabled||e[t.keys.disabled],name:t.name||e[t.keys.name],type:t.type},on:{blur:t.onBlur,change:function(i){return t.onChange(arguments,e)},focus:t.onFocus},model:{value:t.checkboxValues[n],callback:function(e){t.$set(t.checkboxValues,n,e)},expression:"checkboxValues[index]"}},[t._v("\n\t\t\t"+t._s(e[t.keys.label]||e)+"\n\t\t")])})),1),t.hasFeedback?i("div",{staticClass:"aq-checkbox-group__feedback"},[t.showError?i("div",{staticClass:"aq-checkbox-group__feedback-text"},[t._t("error",[t._v("\n\t\t\t\t"+t._s(t.error)+"\n\t\t\t")])],2):t.showHelp?i("div",{staticClass:"aq-checkbox-group__feedback-text"},[t._t("help",[t._v("\n\t\t\t\t"+t._s(t.help)+"\n\t\t\t")])],2):t._e()]):t._e()])},Y=[],K=(i("6762"),i("2fdb"),{name:"AqCheckboxGroup",components:{Checkbox:J},props:{name:String,options:{type:Array,required:!0},value:{type:Array,required:!0},keys:{type:Object,default:function(){return{id:"id",name:"name",class:"class",label:"label",value:"value",disabled:"disabled"}}},boxPosition:{type:String,default:"left"},vertical:{type:Boolean,default:!1},help:String,error:String,invalid:{type:Boolean,default:!1},disabled:{type:Boolean,default:!1},type:{type:String,default:"default",validator:function(t){return-1!==["default","primary","success","error","warning","info"].indexOf(t)}}},data:function(){return{checkboxValues:[],initialValue:JSON.parse(JSON.stringify(this.value))}},computed:{classes:function(){return["aq-checkbox-group--box-position-".concat(this.boxPosition),{"is-invalid":this.invalid},{"is-vertical":this.vertical}]},hasFeedback:function(){return this.showError||this.showHelp},showError:function(){return this.invalid&&(Boolean(this.error)||Boolean(this.$slots.error))},showHelp:function(){return Boolean(this.help)||Boolean(this.$slots.help)}},created:function(){var t=this;this.options.forEach((function(e,i){t.checkboxValues[i]=t.isOptionCheckedByDefault(e)}))},methods:{isOptionCheckedByDefault:function(t){return this.initialValue.includes(t[this.keys.value]||t)},onBlur:function(t){this.$emit("blur",t)},onFocus:function(t){this.$emit("focus",t)},onChange:function(t,e){var i=[],n=e[this.keys.value]||e;this.value.includes(n)?(this.value.splice(this.value.indexOf(n),1),i=this.value):i=this.value.concat(n),this.$emit("input",i),this.$emit("change",i,t)}}}),Q=K,W=Object(r["a"])(Q,X,Y,!1,null,null,null),Z=W.exports,tt=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("label",{staticClass:"aq-radio",class:t.classes},[i("div",{staticClass:"aq-radio__circle"},[i("input",{ref:"input",staticClass:"aq-radio__input",attrs:{type:"radio","aria-hidden":"true",name:t.name,tabindex:t.tabindex},domProps:{checked:t.isChecked,value:t.trueValue},on:{change:t.onChange,click:t.onClick,blur:t.onBlur,focus:t.onFocus}})]),t.label||this.$slots.default?i("div",{staticClass:"aq-radio__text"},[t._t("default",[t._v(t._s(t.label))])],2):t._e()])},et=[],it={name:"AqRadio",props:{name:String,label:String,tabindex:[String,Number],trueValue:{type:[Number,String],required:!0},value:{type:[Number,String],required:!0},checked:{type:Boolean,default:!1},disabled:Boolean,circlePosition:{type:String,default:"left"},type:{type:String,default:"default",validator:function(t){return-1!==["default","primary","success","error","warning","info"].indexOf(t)}}},data:function(){return{}},created:function(){this.checked&&this.$emit("input",this.trueValue)},methods:{onChange:function(t){this.$emit("change",this.isChecked,t)},onClick:function(t){this.disabled||this.$emit("input",this.trueValue)},onFocus:function(t){this.$emit("focus",t)},onBlur:function(t){this.$emit("blur",t)}},computed:{classes:function(){return[this.type?"aq-radio--".concat(this.type):"",{"is-checked":this.isChecked,"is-disabled":this.disabled},"aq-radio--circle-position-".concat(this.circlePosition)]},isChecked:function(){return String(this.value).length>0&&this.value==this.trueValue}}},nt=it,at=Object(r["a"])(nt,tt,et,!1,null,null,null),st=at.exports,ot=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"aq-radio-group",class:t.classes,attrs:{role:"group","aria-label":"radio-group"}},[this.$slots.default?i("div",{staticClass:"aq-radio-group__label-text"},[t._t("default")],2):t._e(),i("div",{staticClass:"aq-radio-group__items"},t._l(t.options,(function(e){return i("aq-radio",{key:e[t.keys.id],staticClass:"aq-radio-group__radio",attrs:{id:e[t.keys.id],name:e[t.keys.name],"true-value":e[t.keys.value]||e,type:t.type,"circle-position":t.circlePosition,disabled:e[t.keys.disabled],checked:t.isOptionCheckedByDefault(e)},on:{blur:t.onBlur,focus:t.onFocus},model:{value:t.selectedOptionValue,callback:function(e){t.selectedOptionValue=e},expression:"selectedOptionValue"}},[t._v("\n\t\t\t"+t._s(e[t.keys.label]||e)+"\n\t\t")])})),1),t.hasFeedback?i("div",{staticClass:"aq-radio-group__feedback"},[t.showError?i("div",{staticClass:"aq-radio-group__feedback-text"},[t._t("error",[t._v("\n\t\t\t\t"+t._s(t.error)+"\n\t\t\t")])],2):t.showHelp?i("div",{staticClass:"aq-radio-group__feedback-text"},[t._t("help",[t._v("\n\t\t\t\t"+t._s(t.help)+"\n\t\t\t")])],2):t._e()]):t._e()])},lt=[],rt={name:"AqRadioGroup",components:{Radio:st},props:{name:String,options:{type:Array,required:!0},value:{type:[Number,String],required:!0},keys:{type:Object,default:function(){return{id:"id",class:"class",label:"label",value:"value",checked:"checked",disabled:"disabled"}}},circlePosition:{type:String,default:"left"},vertical:{type:Boolean,default:!1},help:String,error:String,invalid:{type:Boolean,default:!1},disabled:{type:Boolean,default:!1},type:{type:String,default:"default",validator:function(t){return-1!==["default","primary","success","error","warning","info"].indexOf(t)}}},data:function(){return{initialValue:this.value,selectedOptionValue:this.value}},computed:{classes:function(){return["aq-radio-group--circle-position-".concat(this.circlePosition),{"is-invalid":this.invalid},{"is-vertical":this.vertical}]},hasFeedback:function(){return this.showError||this.showHelp},showError:function(){return this.invalid&&(Boolean(this.error)||Boolean(this.$slots.error))},showHelp:function(){return Boolean(this.help)||Boolean(this.$slots.help)}},watch:{selectedOptionValue:function(){this.$emit("input",this.selectedOptionValue),this.$emit("change",this.selectedOptionValue)},value:function(){this.selectedOptionValue=this.value}},created:function(){this.$emit("input",this.initialValue)},methods:{isOptionCheckedByDefault:function(t){return this.initialValue==t[this.keys.value]||this.initialValue==t||t[this.keys.checked]},onBlur:function(t){this.$emit("blur",t)},onFocus:function(t){this.$emit("focus",t)}}},ct=rt,ut=Object(r["a"])(ct,ot,lt,!1,null,null,null),dt=ut.exports,ht={Button:E,ButtonGroup:R,RippleInk:w,Link:N,Checkbox:J,CheckboxGroup:Z,Radio:st,RadioGroup:dt};function pt(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{size:"md"};Object.keys(ht).forEach((function(e){var i=ht[e];t.component(i.name,i)})),t.prototype.$ELEMENT={size:e.size||""}}"undefined"!==typeof window&&window.Vue&&pt(window.Vue);var ft={install:pt,AquablueUI:ht};n["a"].use(ft),n["a"].config.productionTip=!1,new n["a"]({router:h,store:f,render:function(t){return t(u)}}).$mount("#app")}});
//# sourceMappingURL=app.94869c8b.js.map