"use strict";var KTIntro=function(){var e=function(e){var o=new Date,t=864e6;KTCookie.get("show_intro_2")?KTCookie.get("show_intro_3")?KTCookie.get("show_intro_4")||(setTimeout((function(){!function(){var e=document.querySelector("#kt_header_user_menu_toggle");if(e){var o=new bootstrap.Popover(e,{customClass:"popover-dark",container:"body",trigger:"hover",boundary:"window",placement:"left",html:!0,title:"Advanced User Menu",content:"Explore our updated User Menus that fits perfectly within any project."});o.show(),setTimeout((function(e){o&&o.dispose()}),1e4)}}()}),5e3),KTCookie.set("show_intro_4",1,{expires:new Date(o.getTime()+t)})):(setTimeout((function(){!function(){var e=document.querySelector("#kt_toolbar_primary_button");if(e){var o=new bootstrap.Popover(e,{customClass:"popover-dark",container:"body",trigger:"hover",boundary:"window",placement:"left",html:!0,title:"Modal Form Wizard",content:"Wizard Modals provides an exceptional solution for any ad-hoc form requirement."});o.show(),setTimeout((function(e){o&&o.dispose()}),1e4)}}()}),5e3),KTCookie.set("show_intro_3",1,{expires:new Date(o.getTime()+t)})):(setTimeout((function(){!function(){var e=document.querySelector("#kt_header_search_toggle");if(e){var o=new bootstrap.Popover(e,{customClass:"popover-dark",container:"body",trigger:"hover",boundary:"window",placement:"left",html:!0,title:"Quick Search",content:"Click here to check out our brand new, frontend ready Quick Search feature."});o.show(),setTimeout((function(e){o&&o.dispose()}),1e4)}}()}),5e3),KTCookie.set("show_intro_2",1,{expires:new Date(o.getTime()+t)}))};return{init:function(){!1===KTUtil.inIframe()&&e()}}}();"undefined"!=typeof module&&(module.exports=KTIntro),KTUtil.onDOMContentLoaded((function(){KTIntro.init()}));