import{o as r,c as m,a as e,M as h,W as g,b as l,t as P,V as S}from"./js/runtime-dom.esm-bundler.tPRhSV4q.js";import{l as x}from"./js/index.0vjAWxAz.js";import{l as b}from"./js/index.Dbgw3oZ8.js";import{l as E}from"./js/index.3BJ3ZnWB.js";import{b as k,F as a,l as y}from"./js/links.Byq_3x2e.js";import{e as L}from"./js/elemLoaded.COgXIo-H.js";import{s as v}from"./js/metabox.BEL0zdkw.js";import{_ as M}from"./js/_plugin-vue_export-helper.BN1snXvA.js";import"./js/default-i18n.DXRQgkn2.js";import"./js/constants.CPpKID74.js";import"./js/Caret.Ke5gylGO.js";import"./js/helpers.CXsRrhc8.js";const B={setup(){return{postEditorStore:k()}},emits:["standalone-update-post"],data(){return{strings:{label:this.$t.__("Don't update the modified date",this.$td)}}},methods:{addLimitModifiedDateAttribute(){a()&&window.wp.data.dispatch("core/editor").editPost({aioseo_limit_modified_date:this.postEditorStore.currentPost.limit_modified_date})}},computed:{canShowSvg(){return a()&&this.postEditorStore.currentPost.limit_modified_date}},watch:{"postEditorStore.currentPost.limit_modified_date"(t){window.aioseoBus.$emit("standalone-update-post",{limit_modified_date:t})}}},D={key:0},A={class:"components-checkbox-control__input-container"},C={key:0,xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24",width:"24",height:"24",role:"img",class:"components-checkbox-control__checked","aria-hidden":"true",focusable:"false"},V=e("path",{d:"M18.3 5.6L9.9 16.9l-4.6-3.4-.9 1.2 5.8 4.3 9.3-12.6z"},null,-1),I=[V],N={class:"components-checkbox-control__label",for:"aioseo-limit-modified-date-input"};function U(t,o,d,i,w,n){return i.postEditorStore.currentPost.id?(r(),m("div",D,[e("span",A,[h(e("input",{id:"aioseo-limit-modified-date-input",class:"components-checkbox-control__input",type:"checkbox","onUpdate:modelValue":o[0]||(o[0]=s=>i.postEditorStore.currentPost.limit_modified_date=s),onChange:o[1]||(o[1]=(...s)=>n.addLimitModifiedDateAttribute&&n.addLimitModifiedDateAttribute(...s))},null,544),[[g,i.postEditorStore.currentPost.limit_modified_date]]),n.canShowSvg?(r(),m("svg",C,I)):l("",!0)]),e("label",N,P(w.strings.label),1)])):l("",!0)}const z=M(B,[["render",U]]);var u,p,f,_;if(a()&&window.wp){const{createElement:t}=window.wp.element,{registerPlugin:o}=window.wp.plugins,d=((p=(u=window.wp)==null?void 0:u.editor)==null?void 0:p.PluginPostStatusInfo)||((_=(f=window.wp)==null?void 0:f.editPost)==null?void 0:_.PluginPostStatusInfo);o("aioseo-limit-modified-date",{render:()=>t(d,{},t("div",{id:"aioseo-limit-modified-date"}))})}const c=()=>{let t=S({...z,name:"Standalone/LimitModifiedDate"});t=x(t),t=b(t),t=E(t),y(t),t.mount("#aioseo-limit-modified-date")};v()&&window.aioseo&&window.aioseo.currentPost&&window.aioseo.currentPost.context==="post"&&(document.getElementById("aioseo-limit-modified-date")?c():(L("#aioseo-limit-modified-date","aioseoLimitModifiedDate"),document.addEventListener("animationstart",function(o){o.animationName==="aioseoLimitModifiedDate"&&c()},{passive:!0})));
