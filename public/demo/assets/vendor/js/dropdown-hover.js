!function(){var t={};!function(t){if(t&&t.fn){var o="[data-bs-toggle=dropdown][data-trigger=hover]";t((function(){t("body").on("mouseenter","".concat(o,", ").concat(o," ~ .dropdown-menu"),(function(){t(this).hasClass("dropdown-toggle")?t(this):t(this).prev(".dropdown-toggle");var e,d,n=t(this).hasClass("dropdown-menu")?t(this):t(this).next(".dropdown-menu");"static"!==window.getComputedStyle(n[0],null).getPropertyValue("position")&&(t(this).is(o)&&t(this).data("hovered",!0),e=t(this).hasClass("dropdown-toggle")?t(this):t(this).prev(".dropdown-toggle"),(d=e.data("dd-timeout"))&&(clearTimeout(d),d=null,e.data("dd-timeout",d)),"true"!==e.attr("aria-expanded")&&e.dropdown("toggle"))})).on("mouseleave","".concat(o,", ").concat(o," ~ .dropdown-menu"),(function(){t(this).hasClass("dropdown-toggle")?t(this):t(this).prev(".dropdown-toggle");var e,d,n=t(this).hasClass("dropdown-menu")?t(this):t(this).next(".dropdown-menu");"static"!==window.getComputedStyle(n[0],null).getPropertyValue("position")&&(t(this).is(o)&&t(this).data("hovered",!1),e=t(this).hasClass("dropdown-toggle")?t(this):t(this).prev(".dropdown-toggle"),(d=e.data("dd-timeout"))&&clearTimeout(d),d=setTimeout((function(){var t=e.data("dd-timeout");t&&(clearTimeout(t),t=null,e.data("dd-timeout",t)),"true"===e.attr("aria-expanded")&&e.dropdown("toggle")}),150),e.data("dd-timeout",d))})).on("hide.bs.dropdown",(function(e){t(this).find(o).data("hovered")&&e.preventDefault()}))}))}}(window.jQuery);var o=window;for(var e in t)o[e]=t[e];t.__esModule&&Object.defineProperty(o,"__esModule",{value:!0})}();