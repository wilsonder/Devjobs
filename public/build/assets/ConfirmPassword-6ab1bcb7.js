import{T as l,o as m,c as d,w as t,a,u as o,Z as c,b as e,d as p,n as u,e as f}from"./app-4e64106e.js";import{_}from"./GuestLayout-96cfd2e2.js";import{_ as w,a as b,b as h}from"./TextInput-f6c2a0f1.js";import{_ as x}from"./PrimaryButton-389b2131.js";import"./ApplicationLogo-b5993cb2.js";const g=e("div",{class:"mb-4 text-sm text-gray-600"}," This is a secure area of the application. Please confirm your password before continuing. ",-1),V=["onSubmit"],v={class:"flex justify-end mt-4"},T={__name:"ConfirmPassword",setup(y){const s=l({password:""}),i=()=>{s.post(route("password.confirm"),{onFinish:()=>s.reset()})};return(C,r)=>(m(),d(_,null,{default:t(()=>[a(o(c),{title:"Confirm Password"}),g,e("form",{onSubmit:f(i,["prevent"])},[e("div",null,[a(w,{for:"password",value:"Password"}),a(b,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:o(s).password,"onUpdate:modelValue":r[0]||(r[0]=n=>o(s).password=n),required:"",autocomplete:"current-password",autofocus:""},null,8,["modelValue"]),a(h,{class:"mt-2",message:o(s).errors.password},null,8,["message"])]),e("div",v,[a(x,{class:u(["ml-4",{"opacity-25":o(s).processing}]),disabled:o(s).processing},{default:t(()=>[p(" Confirm ")]),_:1},8,["class","disabled"])])],40,V)]),_:1}))}};export{T as default};
