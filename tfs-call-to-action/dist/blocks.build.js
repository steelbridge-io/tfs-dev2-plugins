!function(e){function t(l){if(n[l])return n[l].exports;var r=n[l]={i:l,l:!1,exports:{}};return e[l].call(r.exports,r,r.exports,t),r.l=!0,r.exports}var n={};t.m=e,t.c=n,t.d=function(e,n,l){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:l})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=1)}([function(e,t,n){var l,r;!function(){"use strict";function n(){for(var e=[],t=0;t<arguments.length;t++){var l=arguments[t];if(l){var r=typeof l;if("string"===r||"number"===r)e.push(l);else if(Array.isArray(l)&&l.length){var c=n.apply(null,l);c&&e.push(c)}else if("object"===r)for(var i in l)a.call(l,i)&&l[i]&&e.push(i)}}return e.join(" ")}var a={}.hasOwnProperty;"undefined"!==typeof e&&e.exports?(n.default=n,e.exports=n):(l=[],void 0!==(r=function(){return n}.apply(t,l))&&(e.exports=r))}()},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});n(2),n(5)},function(e,t,n){"use strict";var l=n(0),r=n.n(l),a=n(3),c=(n.n(a),n(4)),i=(n.n(c),wp.i18n.__),o=wp.blocks.registerBlockType,s=wp.editor,m=s.RichText,u=s.AlignmentToolbar,p=s.BlockControls,d=s.BlockAlignmentToolbar,g=s.PlainText;o("cgb/block-call-to-action",{title:i("call-to-action"),icon:"shield",category:"common",keywords:[i("call-to-action"),i("create-guten-block")],attributes:{title:{source:"text",selector:".block__title"},message:{type:"array",source:"children",selector:".message-body"},textAlignment:{type:"string"},blockAlignment:{type:"string",default:"wide"}},getEditWrapperProps:function(e){var t=e.blockAlignment;if("left"===t||"right"===t||"full"===t)return{"data-align":t}},edit:function(e){var t=e.attributes,n=t.textAlignment,l=t.blockAlignment,r=t.message,a=t.title,c=(e.className,e.setAttributes),o=function(e){c({message:e})},s=function(e){c({title:e})};return wp.element.createElement("div",{className:e.className},wp.element.createElement(p,null,wp.element.createElement(d,{value:l,onChange:function(e){return c({blockAlignment:e})}}),wp.element.createElement(u,{value:n,onChange:function(e){return c({textAlignment:e})}})),wp.element.createElement(g,{tagName:"div",placeholder:i("Your title here"),className:"block__title",value:a,style:{textAlign:n},onChange:s}),wp.element.createElement(m,{tagName:"div",multiline:"p",placeholder:i("Add your CTA here"),value:r,style:{textAlign:n},onChange:o}))},save:function(e){var t=e.attributes,n=t.blockAlignment,l=t.textAlignment,a=t.title,c=t.message;return wp.element.createElement("div",{className:r()("align"+n,"cta-container")},wp.element.createElement("div",{className:r()("align"+n,"block__title"),style:{textAlign:l}},wp.element.createElement("h3",null,a)),wp.element.createElement("div",{className:r()("message-body"),style:{textAlign:l}},c))}})},function(e,t){},function(e,t){},function(e,t,n){"use strict";var l=n(0),r=(n.n(l),n(6)),a=(n.n(r),n(7)),c=(n.n(a),wp.i18n.__),i=wp.blocks.registerBlockType,o=wp.components.Button,s=wp.editor,m=s.RichText,u=s.MediaUpload,p=s.PlainText;i("cgb/card",{title:c("Card"),icon:"heart",category:"common",keywords:[c("card block"),c("card block"),c("create-guten-block")],attributes:{title:{source:"text",selector:".card__title"},body:{type:"array",source:"children",selector:".card__body"},imageAlt:{attribute:"alt",selector:".card__image"},imageUrl:{attribute:"src",selector:".card__image"}},edit:function(e){var t=e.attributes,n=(e.className,e.setAttributes),l=function(e){return t.imageUrl?wp.element.createElement("img",{src:t.imageUrl,onClick:e,className:"image"}):wp.element.createElement("div",{className:"button-container"},wp.element.createElement(o,{onClick:e,className:"button button-large"},"Pick and image"))};return wp.element.createElement("div",{className:"container"},wp.element.createElement(u,{onSelect:function(e){n({imageAlt:e.alt,imageUrl:e.url})},type:"image",value:t.imageID,render:function(e){var t=e.open;return l(t)}}),wp.element.createElement(p,{onChange:function(e){return n({title:e})},value:t.title,placeholder:"Your title here",className:"heading"}),wp.element.createElement(m,{onChange:function(e){return n({body:e})},value:t.body,multiline:"p",placeholder:"Your card text"}))},save:function(e){var t=e.attributes;return wp.element.createElement("div",{className:"card"},function(e,t){return e?t?wp.element.createElement("img",{className:"card__image",src:e,alt:t}):wp.element.createElement("img",{className:"card__image",src:e,alt:"","aria-hidden":"true"}):null}(t.imageUrl,t.imageAlt),wp.element.createElement("div",{className:"card__content"},wp.element.createElement("h3",{className:"card__title"},t.title),wp.element.createElement("div",{className:"card__body"},t.body)))}})},function(e,t){},function(e,t){}]);