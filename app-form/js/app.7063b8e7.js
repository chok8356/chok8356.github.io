(function(e){function t(t){for(var a,i,l=t[0],s=t[1],u=t[2],c=0,d=[];c<l.length;c++)i=l[c],Object.prototype.hasOwnProperty.call(n,i)&&n[i]&&d.push(n[i][0]),n[i]=0;for(a in s)Object.prototype.hasOwnProperty.call(s,a)&&(e[a]=s[a]);p&&p(t);while(d.length)d.shift()();return o.push.apply(o,u||[]),r()}function r(){for(var e,t=0;t<o.length;t++){for(var r=o[t],a=!0,l=1;l<r.length;l++){var s=r[l];0!==n[s]&&(a=!1)}a&&(o.splice(t--,1),e=i(i.s=r[0]))}return e}var a={},n={app:0},o=[];function i(t){if(a[t])return a[t].exports;var r=a[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,i),r.l=!0,r.exports}i.m=e,i.c=a,i.d=function(e,t,r){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},i.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"===typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(i.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var a in e)i.d(r,a,function(t){return e[t]}.bind(null,a));return r},i.n=function(e){var t=e&&e.__esModule?function(){return e["default"]}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="/app-form/";var l=window["webpackJsonp"]=window["webpackJsonp"]||[],s=l.push.bind(l);l.push=t,l=l.slice();for(var u=0;u<l.length;u++)t(l[u]);var p=s;o.push([0,"chunk-vendors"]),r()})({0:function(e,t,r){e.exports=r("56d7")},"21bb":function(e,t,r){"use strict";var a=r("2dad"),n=r.n(a);n.a},"2dad":function(e,t,r){},"56d7":function(e,t,r){"use strict";r.r(t);r("e260"),r("e6cf"),r("cca6"),r("a79d");var a=r("2b0e"),n=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{attrs:{id:"app"}},[r("div",{staticClass:"container"},[r("div",{staticClass:"row"},[r("div",{staticClass:"col-md-12"},[r("app-preloader",{attrs:{loading:e.loading}},[r("router-view")],1)],1)])])])},o=[],i={name:"Home",data:function(){return{loading:!0}},mounted:function(){this.loading=!1}},l=i,s=(r("5c0b"),r("2877")),u=Object(s["a"])(l,n,o,!1,null,null,null),p=u.exports,c=r("8c4f"),d=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"app-home"},[r("h2",{staticClass:"w-100 text-center mb-5"},[e._v("Simple form")]),r("app-form",{attrs:{rules:e.rules},model:{value:e.form,callback:function(t){e.form=t},expression:"form"}},[r("app-form-item",{attrs:{type:"text",label:"Name",prop:"name"}}),r("app-form-item",{attrs:{type:"dropdown",label:"Count",prop:"count",data:e.countList}}),r("app-form-item",{attrs:{type:"textarea",label:"Comment",prop:"comment"}})],1),r("code",{staticClass:"w-100 text-center mt-5"},[e._v(" form: "+e._s(e.form)+" ")])],1)},m=[],f={name:"Home",data:function(){return{form:{name:"",count:null,comment:""},countList:[1,2,3,4,5],rules:{name:[{required:!0,validator:this.errorName,message:"Please enter 'John Doe'",trigger:"blur"}],count:[{required:!0,validator:this.errorCount,message:"Please select 3 or 4",trigger:"change"}],comment:[{required:!1,validator:this.errorCcomment,message:"Please enter 'Hello'",trigger:"input"}]}}},methods:{errorName:function(e){return"John Doe"!=e},errorCount:function(e){return 3!=e&&4!=e},errorCcomment:function(e){return"Hello"!=e}}},v=f,b=(r("21bb"),Object(s["a"])(v,d,m,!1,null,null,null)),h=b.exports;a["a"].use(c["a"]);var g=[{path:"/",name:"home",component:h}],_=new c["a"]({mode:"history",base:"/app-form/",routes:g}),y=_,w=r("2f62");a["a"].use(w["a"]);var C=new w["a"].Store({state:{},mutations:{},actions:{},modules:{}}),x=(r("4160"),r("b0c0"),r("b64b"),r("159b"),function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("transition",{attrs:{name:"fade",mode:"out-in"}},[e.loading?r("div",{staticClass:"app-preloader",class:e.classes},[r("div",{staticClass:"app-preloader__icon"},[r("div",{staticClass:"preloader"})])]):this.$slots.default?[e._t("default")]:e._e()],2)}),O=[],j={name:"AppPreloader",props:{loading:{type:Boolean,default:!0},inComponent:Boolean},mounted:function(){this.inComponent&&(this.$parent.$el.style.position="relative")},computed:{classes:function(){return{"app-preloader--in-component":this.inComponent}}}},P=j,E=(r("586d"),Object(s["a"])(P,x,O,!1,null,null,null)),$=E.exports,A=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("form",{staticClass:"app-form"},[e._t("default"),r("button",{staticClass:"btn btn-primary",attrs:{type:"submit"}},[e._v("Submit")])],2)},S=[],q={name:"AppForm",props:{value:[Array,Object],rules:[Array,Object]}},N=q,k=(r("fa45"),Object(s["a"])(N,A,S,!1,null,null,null)),F=k.exports,H=function(){var e,t,r,a=this,n=a.$createElement,o=a._self._c||n;return o("div",{staticClass:"app-form-item form-group"},[o("label",{staticClass:"app-form-item__label"},[a._v(a._s(a.label))]),"text"==a.type?o("input",a._g({directives:[{name:"model",rawName:"v-model",value:a.value,expression:"value"}],class:a.fieldClasses,attrs:{placeholder:a.label,required:a.validation.required},domProps:{value:a.value},on:{input:function(e){e.target.composing||(a.value=e.target.value)}}},(e={},e[a.validation.trigger]=a.setError,e))):a._e(),"textarea"==a.type?o("textarea",a._g({directives:[{name:"model",rawName:"v-model",value:a.value,expression:"value"}],class:a.fieldClasses,attrs:{placeholder:a.label,required:a.validation.required},domProps:{value:a.value},on:{input:function(e){e.target.composing||(a.value=e.target.value)}}},(t={},t[a.validation.trigger]=a.setError,t))):a._e(),"dropdown"==a.type?o("select",a._g({directives:[{name:"model",rawName:"v-model",value:a.value,expression:"value"}],class:a.fieldClasses,attrs:{required:a.validation.required},on:{change:function(e){var t=Array.prototype.filter.call(e.target.options,(function(e){return e.selected})).map((function(e){var t="_value"in e?e._value:e.value;return t}));a.value=e.target.multiple?t:t[0]}}},(r={},r[a.validation.trigger]=a.setError,r)),[o("option",{attrs:{disabled:"",selected:""},domProps:{value:a.emptyValue}},[a._v(a._s(a.label))]),a._l(a.data,(function(e,t){return[o("option",{key:t,domProps:{value:e}},[a._v(a._s(e))])]}))],2):a._e(),a.showError?o("small",{staticClass:"app-form-item__error form-text"},[a._v(" "+a._s(a.validation.message)+" ")]):a._e()])},J=[],M=(r("7db0"),r("a9e3"),{name:"AppFormItem",data:function(){return{value:"",showError:!1,validation:{message:"",required:!1,trigger:"",validator:""}}},props:{prop:[String,Number],data:[Array],label:{type:String,default:""},type:{type:String,default:"text"}},watch:{value:function(){this.$parent.value[this.prop]=this.value}},mounted:function(){if(this.value=this.$parent.value[this.prop],this.$parent.rules[this.prop]){var e=this.$parent.rules[this.prop][0];this.validation=e}},methods:{setError:function(e){this.showError=!!this.validation.validator&&this.validation.validator(e.target.value)}},computed:{fieldClasses:function(){return["app-form-item__field form-control"]},emptyValue:function(){var e=this;return[0,"",null,void 0].find((function(t){return t===e.value}))}}}),V=M,T=(r("d500"),Object(s["a"])(V,H,J,!1,null,null,null)),B=T.exports,D={AppPreloader:$,AppForm:F,AppFormItem:B};function I(e){Object.keys(D).forEach((function(t){var r=D[t];e.component(r.name,r)}))}"undefined"!==typeof window&&window.Vue&&I(window.Vue);var L={install:I,AppComponents:D};a["a"].config.productionTip=!1,a["a"].use(L),new a["a"]({router:y,store:C,render:function(e){return e(p)}}).$mount("#app")},"586d":function(e,t,r){"use strict";var a=r("ccde"),n=r.n(a);n.a},"5c0b":function(e,t,r){"use strict";var a=r("9c0c"),n=r.n(a);n.a},"9c0c":function(e,t,r){},b701:function(e,t,r){},be63:function(e,t,r){},ccde:function(e,t,r){},d500:function(e,t,r){"use strict";var a=r("b701"),n=r.n(a);n.a},fa45:function(e,t,r){"use strict";var a=r("be63"),n=r.n(a);n.a}});
//# sourceMappingURL=app.7063b8e7.js.map