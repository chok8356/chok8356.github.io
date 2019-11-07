(function(a){function t(t){for(var r,s,o=t[0],p=t[1],l=t[2],u=0,d=[];u<o.length;u++)s=o[u],Object.prototype.hasOwnProperty.call(n,s)&&n[s]&&d.push(n[s][0]),n[s]=0;for(r in p)Object.prototype.hasOwnProperty.call(p,r)&&(a[r]=p[r]);c&&c(t);while(d.length)d.shift()();return i.push.apply(i,l||[]),e()}function e(){for(var a,t=0;t<i.length;t++){for(var e=i[t],r=!0,o=1;o<e.length;o++){var p=e[o];0!==n[p]&&(r=!1)}r&&(i.splice(t--,1),a=s(s.s=e[0]))}return a}var r={},n={app:0},i=[];function s(t){if(r[t])return r[t].exports;var e=r[t]={i:t,l:!1,exports:{}};return a[t].call(e.exports,e,e.exports,s),e.l=!0,e.exports}s.m=a,s.c=r,s.d=function(a,t,e){s.o(a,t)||Object.defineProperty(a,t,{enumerable:!0,get:e})},s.r=function(a){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(a,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(a,"__esModule",{value:!0})},s.t=function(a,t){if(1&t&&(a=s(a)),8&t)return a;if(4&t&&"object"===typeof a&&a&&a.__esModule)return a;var e=Object.create(null);if(s.r(e),Object.defineProperty(e,"default",{enumerable:!0,value:a}),2&t&&"string"!=typeof a)for(var r in a)s.d(e,r,function(t){return a[t]}.bind(null,r));return e},s.n=function(a){var t=a&&a.__esModule?function(){return a["default"]}:function(){return a};return s.d(t,"a",t),t},s.o=function(a,t){return Object.prototype.hasOwnProperty.call(a,t)},s.p="/github-list/";var o=window["webpackJsonp"]=window["webpackJsonp"]||[],p=o.push.bind(o);o.push=t,o=o.slice();for(var l=0;l<o.length;l++)t(o[l]);var c=p;i.push([0,"chunk-vendors"]),e()})({0:function(a,t,e){a.exports=e("56d7")},"56d7":function(a,t,e){"use strict";e.r(t);e("e260"),e("e6cf"),e("cca6"),e("a79d");var r=e("2b0e"),n=function(){var a=this,t=a.$createElement,e=a._self._c||t;return e("div",{attrs:{id:"app"}},[e("div",{staticClass:"container"},[e("div",{staticClass:"row"},[e("div",{staticClass:"col-md-12"},[e("app-preloader",{attrs:{loading:a.$root.loading||a.loading}},[e("router-view")],1)],1)])])])},i=[],s={name:"Home",data:function(){return{loading:!0}},mounted:function(){this.loading=!1}},o=s,p=(e("5c0b"),e("2877")),l=Object(p["a"])(o,n,i,!1,null,null,null),c=l.exports,u=e("8c4f"),d=function(){var a=this,t=a.$createElement,e=a._self._c||t;return e("div",{staticClass:"home"},[e("div",{staticClass:"app-actions"},[e("div",{staticClass:"app-actions__search app-search"},[e("input",{directives:[{name:"model",rawName:"v-model",value:a.searchQuery,expression:"searchQuery"}],staticClass:"app-search__input",attrs:{type:"text",placeholder:"Enter repository name",readonly:a.loading},domProps:{value:a.searchQuery},on:{input:function(t){t.target.composing||(a.searchQuery=t.target.value)}}})]),e("button",{staticClass:"app-actions__update-btn app-btn",on:{click:a.updateData}},[a.loading?e("span",[a._v("Loading")]):e("span",[a._v("Update")])])]),e("div",{staticClass:"app-repositories"},[e("app-preloader",{attrs:{"in-component":"",loading:a.loading}}),a.isDataItems?[a._l(a.data.items,(function(t,r){return[e("div",{key:r,staticClass:"app-repositories__item app-repository"},[e("a",{staticClass:"app-repository__name",attrs:{href:t.html_url}},[a._v(" "+a._s(t.name)+" ")]),t.description?e("div",{staticClass:"app-repository__decription"},[a._v(" "+a._s(t.description)+" ")]):a._e(),e("div",{staticClass:"app-repository__user app-user"},[e("div",{staticClass:"app-user__image"},[e("img",{attrs:{alt:t.login,src:t.owner.avatar_url}})]),e("a",{staticClass:"app-user__name",attrs:{href:t.owner.html_url}},[a._v(" "+a._s(t.owner.login)+" ")])]),e("div",{staticClass:"app-repository__info app-repository-info"},[t.language?e("div",{staticClass:"app-repository-info__label app-repository-info__label--language app-label"},[e("span",{staticClass:"app-label__name"},[a._v("Language:")]),e("span",{staticClass:"app-label__value"},[a._v(a._s(t.language))])]):a._e(),e("div",{staticClass:"app-repository-info__label app-repository-info__label--starts app-label"},[e("span",{staticClass:"app-label__name"},[a._v("Stars:")]),e("span",{staticClass:"app-label__value"},[a._v(a._s(t.stargazers_count))])]),e("div",{staticClass:"app-repository-info__label app-repository-info__label--forks app-label"},[e("span",{staticClass:"app-label__name"},[a._v("Forks:")]),e("span",{staticClass:"app-label__value"},[a._v(a._s(t.forks))])]),e("div",{staticClass:"app-repository-info__label app-repository-info__label--updated app-label"},[e("span",{staticClass:"app-label__name"},[a._v("Updated:")]),e("span",{staticClass:"app-label__value"},[a._v(a._s(a.getFormattedDate(t.updated_at)))])])])])]}))]:[e("div",{staticClass:"app-repositories__empty"},[a._v("No repositories.")])]],2)])},f=[],_=(e("99af"),e("0d03"),e("d3b7"),e("25f0"),e("4d90"),e("3ca3"),e("ddb0"),e("2b3d"),e("2ef0")),g=e.n(_),h={props:{apiUrl:{type:String,default:"",required:!1}},data:function(){return{data:[],dataApiUrl:"",loading:!1,pagination:{page:0,per_page:10},getDataOnCreate:!0,withoutPagination:!1}},created:function(){this.getDataOnCreate&&this.getData()},watch:{pagination:{deep:!0,handler:function(){this.getData()}}},methods:{appendParams:function(a,t){for(var e in t)t.hasOwnProperty(e)&&a.append(e,t[e])},setPagination:function(){var a=this;if(!0!==a.withoutPagination){var t={page:a.pagination.page,per_page:a.pagination.per_page};return t}return!1},setQuery:function(){return!1},beforeGetData:function(){return!0},afterGetData:function(){this.$emit("afterGetData",this.data)},getData:g.a.debounce((function(){var a=this;return new Promise((function(t){if(a.getApiUrl&&a.beforeGetData()){a.loading=!0;var e=new URLSearchParams,r=a.setPagination(),n=a.setQuery();r&&a.appendParams(e,r),n&&a.appendParams(e,n),a.axios.get(a.$api+a.getApiUrl,e?{params:e}:"").catch((function(a){throw new Error(a)})).then((function(e){a.$set(a,"data",e.data),a.afterGetData(),t(a.data),a.loading=!1}))}}))}),1e3)},computed:{getApiUrl:function(){return this.dataApiUrl?this.dataApiUrl:this.apiUrl?this.apiUrl:""}}},v={name:"Home",data:function(){return{loading:!1,searchQuery:this.getSearchQuery,dataApiUrl:"search/repositories",getDataOnCreate:!1}},created:function(){var a=this;a.getSearchQuery&&(a.searchQuery=a.getSearchQuery,a.getDataOnCreate=!0)},watch:{searchQuery:function(){localStorage.setItem("searchQuery",this.searchQuery),this.updateData()}},methods:{beforeGetData:function(){return!!this.searchQuery||(this.data="",!1)},updateData:function(){var a=this;a.pagination.per_page=10,a.getData()},setQuery:function(){var a=this,t={q:a.searchQuery,sort:"updated",order:"desc"};return t},getFormattedDate:function(a){var t=new Date(a),e=function(a){return a.toString().padStart(2,"0")},r=t.getFullYear(),n=e(1+t.getMonth()),i=e(t.getDate()),s=e(t.getHours()),o=e(t.getMinutes());return"".concat(n,"/").concat(i,"/").concat(r," ").concat(s,":").concat(o)}},computed:{getSearchQuery:function(){return localStorage.getItem("searchQuery")?localStorage.getItem("searchQuery"):""},isDataItems:function(){return!!(this.data.items&&this.data.items.length>0)}},mixins:[h]},m=v,b=Object(p["a"])(m,d,f,!1,null,null,null),y=b.exports;r["a"].use(u["a"]);var C=[{path:"/",name:"Home",component:y}],w=new u["a"]({mode:"history",base:"/github-list/",linkActiveClass:"is-active",linkExactActiveClass:"",routes:C}),D=w,O=e("2f62");r["a"].use(O["a"]);var P=new O["a"].Store({state:{},mutations:{},actions:{},modules:{}}),Q=e("bc3a"),S=e.n(Q),x=e("a7fe"),j=e.n(x),U=(e("4160"),e("b0c0"),e("b64b"),e("159b"),function(){var a=this,t=a.$createElement,e=a._self._c||t;return e("transition",{attrs:{name:"fade",mode:"out-in"}},[a.loading?e("div",{key:1,staticClass:"app-preloader",class:a.classes},[e("div",{staticClass:"app-preloader__icon"},[e("div",{staticClass:"preloader"})])]):this.$slots.default?[a._t("default")]:a._e()],2)}),k=[],A={name:"AppPreloader",props:{loading:{type:Boolean,default:!0},inComponent:Boolean},computed:{classes:function(){return{"app-preloader--in-component":this.inComponent}}}},$=A,E=Object(p["a"])($,U,k,!1,null,null,null),G=E.exports,M={AppPreloader:G};function I(a){Object.keys(M).forEach((function(t){var e=M[t];a.component(e.name,e)}))}"undefined"!==typeof window&&window.Vue&&I(window.Vue);var F={install:I,Components:M};r["a"].config.productionTip=!1,r["a"].use(j.a,S.a),r["a"].use(F),r["a"].prototype.$api="https://api.github.com/";var H=new r["a"]({data:function(){return{loading:!1}},router:D,store:P,render:function(a){return a(c)}}).$mount("#app");D.beforeEach((function(a,t,e){H.loading=!0,e()})),D.afterEach((function(){H.loading=!1}))},"5c0b":function(a,t,e){"use strict";var r=e("9c0c"),n=e.n(r);n.a},"9c0c":function(a,t,e){}});
//# sourceMappingURL=app.bcf82499.js.map