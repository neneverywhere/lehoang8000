/*
 * jQuery mmenu dividers add-on
 * mmenu.frebsite.nl
 *
 * Copyright (c) Fred Heusschen
 */
!function(i){var e="mmenu",s="dividers";i[e].addons[s]={setup:function(){var d=this,a=this.opts[s];this.conf[s];if(l=i[e].glbl,"boolean"==typeof a&&(a={add:a,fixed:a}),"object"!=typeof a&&(a={}),a=this.opts[s]=i.extend(!0,{},i[e].defaults[s],a),this.bind("initListview:after",function(i){this.__refactorClass(i.find("li"),this.conf.classNames[s].collapsed,"collapsed")}),a.add&&this.bind("initListview:after",function(e){var s;switch(a.addTo){case"panels":s=e;break;default:s=e.filter(a.addTo)}s.length&&s.find("."+t.listview).find("."+t.divider).remove().end().each(function(){var e="";d.__filterListItems(i(this).children()).each(function(){var s=i.trim(i(this).children("a, span").text()).slice(0,1).toLowerCase();s!=e&&s.length&&(e=s,i('<li class="'+t.divider+'">'+s+"</li>").insertBefore(this))})})}),a.collapse&&this.bind("initListview:after",function(e){e.find("."+t.divider).each(function(){var e=i(this),s=e.nextUntil("."+t.divider,"."+t.collapsed);s.length&&(e.children("."+t.next).length||(e.wrapInner("<span />"),e.prepend('<a href="#" class="'+t.next+" "+t.fullsubopen+'" />')))})}),a.fixed){this.bind("initPanels:after",function(){"undefined"==typeof this.$fixeddivider&&(this.$fixeddivider=i('<ul class="'+t.listview+" "+t.fixeddivider+'"><li class="'+t.divider+'"></li></ul>').prependTo(this.$pnls).children())});var o=function(e){if(e=e||this.$pnls.children("."+t.opened),!e.is(":hidden")){var s=e.children("."+t.listview).children("."+t.divider).not("."+t.hidden),d=e.scrollTop()||0,n="";s.each(function(){i(this).position().top+d<d+1&&(n=i(this).text())}),this.$fixeddivider.text(n),this.$pnls[n.length?"addClass":"removeClass"](t.hasdividers)}};this.bind("open:start",o),this.bind("openPanel:start",o),this.bind("updateListview",o),this.bind("initPanel:after",function(i){i.off(n.scroll+"-"+s+" "+n.touchmove+"-"+s).on(n.scroll+"-"+s+" "+n.touchmove+"-"+s,function(e){o.call(d,i)})})}},add:function(){t=i[e]._c,d=i[e]._d,n=i[e]._e,t.add("collapsed uncollapsed fixeddivider hasdividers"),n.add("scroll")},clickAnchor:function(i,e){if(this.opts[s].collapse&&e){var d=i.parent();if(d.is("."+t.divider)){var n=d.nextUntil("."+t.divider,"."+t.collapsed);return d.toggleClass(t.opened),n[d.hasClass(t.opened)?"addClass":"removeClass"](t.uncollapsed),!0}}return!1}},i[e].defaults[s]={add:!1,addTo:"panels",fixed:!1,collapse:!1},i[e].configuration.classNames[s]={collapsed:"Collapsed"};var t,d,n,l}(jQuery);