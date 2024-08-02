import{v as u,o,c as l,a,B as c,G as p,H as f,l as z,C as h,t as d,m as A,j as C,b as v}from"./runtime-dom.esm-bundler.tPRhSV4q.js";import{_ as y}from"./_plugin-vue_export-helper.BN1snXvA.js";const b={emits:["startAnalyzing"],props:{header:String,description:String,isAnalyzing:Boolean,analyzeTime:{type:Number,default(){return 8}},placeholder:{type:String,default(){return""}},inputError:{type:Boolean,default(){return!1}}},data(){return{input:null,strings:{analyze:this.$t.__("Analyze",this.$td)}}},watch:{isAnalyzing(s){s||(this.input=null)}}},S={class:"analyze-main"},T=["innerHTML"],V=["innerHTML"],x={class:"analyze-input"},B={key:0,class:"analyze-progress"};function L(s,n,e,_,t,i){const m=u("base-input"),g=u("base-button");return o(),l("div",S,[a("div",{class:"analyze-header",innerHTML:e.header},null,8,T),a("div",{class:"analyze-description",innerHTML:e.description},null,8,V),a("div",x,[c(m,{modelValue:t.input,"onUpdate:modelValue":n[0]||(n[0]=r=>t.input=r),placeholder:e.placeholder,class:p({"aioseo-error":e.inputError}),onKeyup:n[1]||(n[1]=f(r=>s.$emit("startAnalyzing",t.input),["enter"]))},null,8,["modelValue","placeholder","class"]),c(g,{type:"green",onClick:n[2]||(n[2]=r=>s.$emit("startAnalyzing",t.input)),loading:e.isAnalyzing,disabled:!t.input},{default:z(()=>[h(d(t.strings.analyze),1)]),_:1},8,["loading","disabled"])]),A(s.$slots,"errors"),e.isAnalyzing?(o(),l("div",B,[a("div",{class:"analyze-progress-value",style:C({animationDuration:`${e.analyzeTime}s`})},null,4)])):v("",!0)])}const w=y(b,[["render",L]]),N={props:{score:{type:Number,required:!0}},computed:{getColorClass(){return 33>=this.score?"red":66>=this.score?"orange":"green"}}};function H(s,n,e,_,t,i){return o(),l("div",{class:p(["aioseo-analyze-score",i.getColorClass])},[a("span",null,d(e.score)+"/100",1)],2)}const E=y(N,[["render",H]]);export{w as C,E as a};