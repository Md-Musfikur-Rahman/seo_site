<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pricing &#8211;Devsite Studio</title>
    <meta name="robots" content="max-image-preview:large" />
    <link
      rel="alternate"
      type="application/rss+xml"
      title="Rankz &raquo; Feed"
      href="https://kitpapa.net/rankz/feed/"
    />
    <link
      rel="alternate"
      type="application/rss+xml"
      title="Rankz &raquo; Comments Feed"
      href="https://kitpapa.net/rankz/comments/feed/"
    />
    <script>
      window._wpemojiSettings = {
        baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        ext: ".png",
        svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        svgExt: ".svg",
        source: {
          concatemoji:
            "https:\/\/kitpapa.net\/rankz\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.2",
        },
      };
      /*! This file is auto-generated */
      !(function (i, n) {
        var o, s, e;
        function c(e) {
          try {
            var t = {
              supportTests: e,
              timestamp: new Date().valueOf(),
            };
            sessionStorage.setItem(o, JSON.stringify(t));
          } catch (e) {}
        }
        function p(e, t, n) {
          e.clearRect(0, 0, e.canvas.width, e.canvas.height),
            e.fillText(t, 0, 0);
          var t = new Uint32Array(
              e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
            ),
            r =
              (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
              e.fillText(n, 0, 0),
              new Uint32Array(
                e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
              ));
          return t.every(function (e, t) {
            return e === r[t];
          });
        }
        function u(e, t, n) {
          switch (t) {
            case "flag":
              return n(
                e,
                "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
              )
                ? !1
                : !n(
                    e,
                    "\ud83c\uddfa\ud83c\uddf3",
                    "\ud83c\uddfa\u200b\ud83c\uddf3"
                  ) &&
                    !n(
                      e,
                      "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                      "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                    );
            case "emoji":
              return !n(
                e,
                "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff"
              );
          }
          return !1;
        }
        function f(e, t, n) {
          var r =
              "undefined" != typeof WorkerGlobalScope &&
              self instanceof WorkerGlobalScope
                ? new OffscreenCanvas(300, 150)
                : i.createElement("canvas"),
            a = r.getContext("2d", {
              willReadFrequently: !0,
            }),
            o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
          return (
            e.forEach(function (e) {
              o[e] = t(a, e, n);
            }),
            o
          );
        }
        function t(e) {
          var t = i.createElement("script");
          (t.src = e), (t.defer = !0), i.head.appendChild(t);
        }
        "undefined" != typeof Promise &&
          ((o = "wpEmojiSettingsSupports"),
          (s = ["flag", "emoji"]),
          (n.supports = {
            everything: !0,
            everythingExceptFlag: !0,
          }),
          (e = new Promise(function (e) {
            i.addEventListener("DOMContentLoaded", e, {
              once: !0,
            });
          })),
          new Promise(function (t) {
            var n = (function () {
              try {
                var e = JSON.parse(sessionStorage.getItem(o));
                if (
                  "object" == typeof e &&
                  "number" == typeof e.timestamp &&
                  new Date().valueOf() < e.timestamp + 604800 &&
                  "object" == typeof e.supportTests
                )
                  return e.supportTests;
              } catch (e) {}
              return null;
            })();
            if (!n) {
              if (
                "undefined" != typeof Worker &&
                "undefined" != typeof OffscreenCanvas &&
                "undefined" != typeof URL &&
                URL.createObjectURL &&
                "undefined" != typeof Blob
              )
                try {
                  var e =
                      "postMessage(" +
                      f.toString() +
                      "(" +
                      [JSON.stringify(s), u.toString(), p.toString()].join(
                        ","
                      ) +
                      "));",
                    r = new Blob([e], {
                      type: "text/javascript",
                    }),
                    a = new Worker(URL.createObjectURL(r), {
                      name: "wpTestEmojiSupports",
                    });
                  return void (a.onmessage = function (e) {
                    c((n = e.data)), a.terminate(), t(n);
                  });
                } catch (e) {}
              c((n = f(s, u, p)));
            }
            t(n);
          })
            .then(function (e) {
              for (var t in e)
                (n.supports[t] = e[t]),
                  (n.supports.everything =
                    n.supports.everything && n.supports[t]),
                  "flag" !== t &&
                    (n.supports.everythingExceptFlag =
                      n.supports.everythingExceptFlag && n.supports[t]);
              (n.supports.everythingExceptFlag =
                n.supports.everythingExceptFlag && !n.supports.flag),
                (n.DOMReady = !1),
                (n.readyCallback = function () {
                  n.DOMReady = !0;
                });
            })
            .then(function () {
              return e;
            })
            .then(function () {
              var e;
              n.supports.everything ||
                (n.readyCallback(),
                (e = n.source || {}).concatemoji
                  ? t(e.concatemoji)
                  : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
            }));
      })((window, document), window._wpemojiSettings);
    </script>
    <link
      rel="stylesheet"
      id="elementor-frontend-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.18.3"
      media="all"
    />
    <link
      rel="stylesheet"
      id="elementor-post-128-css"
      href="https://kitpapa.net/rankz/wp-content/uploads/elementor/css/post-128.css?ver=1704798598"
      media="all"
    />
    <link
      rel="stylesheet"
      id="font-awesome-5-all-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.18.3"
      media="all"
    />
    <link
      rel="stylesheet"
      id="font-awesome-4-shim-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.18.3"
      media="all"
    />
    <link
      rel="stylesheet"
      id="elementor-post-129-css"
      href="https://kitpapa.net/rankz/wp-content/uploads/elementor/css/post-129.css?ver=1704792773"
      media="all"
    />
    <link
      rel="stylesheet"
      id="jkit-elements-main-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/assets/css/elements/main.css?ver=2.6.2"
      media="all"
    />
    <style id="wp-emoji-styles-inline-css">
      img.wp-smiley,
      img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
      }
    </style>
    <style id="classic-theme-styles-inline-css">
      /*! This file is auto-generated */
      .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(0.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em;
      }

      .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none;
      }
    </style>
    <style id="global-styles-inline-css">
      body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(
          135deg,
          rgba(6, 147, 227, 1) 0%,
          rgb(155, 81, 224) 100%
        );
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(
          135deg,
          rgb(122, 220, 180) 0%,
          rgb(0, 208, 130) 100%
        );
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(
          135deg,
          rgba(252, 185, 0, 1) 0%,
          rgba(255, 105, 0, 1) 100%
        );
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(
          135deg,
          rgba(255, 105, 0, 1) 0%,
          rgb(207, 46, 46) 100%
        );
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(
          135deg,
          rgb(238, 238, 238) 0%,
          rgb(169, 184, 195) 100%
        );
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(
          135deg,
          rgb(74, 234, 220) 0%,
          rgb(151, 120, 209) 20%,
          rgb(207, 42, 186) 40%,
          rgb(238, 44, 130) 60%,
          rgb(251, 105, 98) 80%,
          rgb(254, 248, 76) 100%
        );
        --wp--preset--gradient--blush-light-purple: linear-gradient(
          135deg,
          rgb(255, 206, 236) 0%,
          rgb(152, 150, 240) 100%
        );
        --wp--preset--gradient--blush-bordeaux: linear-gradient(
          135deg,
          rgb(254, 205, 165) 0%,
          rgb(254, 45, 45) 50%,
          rgb(107, 0, 62) 100%
        );
        --wp--preset--gradient--luminous-dusk: linear-gradient(
          135deg,
          rgb(255, 203, 112) 0%,
          rgb(199, 81, 192) 50%,
          rgb(65, 88, 208) 100%
        );
        --wp--preset--gradient--pale-ocean: linear-gradient(
          135deg,
          rgb(255, 245, 203) 0%,
          rgb(182, 227, 212) 50%,
          rgb(51, 167, 181) 100%
        );
        --wp--preset--gradient--electric-grass: linear-gradient(
          135deg,
          rgb(202, 248, 128) 0%,
          rgb(113, 206, 126) 100%
        );
        --wp--preset--gradient--midnight: linear-gradient(
          135deg,
          rgb(2, 3, 129) 0%,
          rgb(40, 116, 252) 100%
        );
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
          6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
      }

      :where(.is-layout-flex) {
        gap: 0.5em;
      }

      :where(.is-layout-grid) {
        gap: 0.5em;
      }

      body .is-layout-flow > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
      }

      body .is-layout-flow > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
      }

      body .is-layout-flow > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
      }

      body .is-layout-constrained > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
      }

      body .is-layout-constrained > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
      }

      body .is-layout-constrained > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
      }

      body
        .is-layout-constrained
        > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
      }

      body .is-layout-constrained > .alignwide {
        max-width: var(--wp--style--global--wide-size);
      }

      body .is-layout-flex {
        display: flex;
      }

      body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
      }

      body .is-layout-flex > * {
        margin: 0;
      }

      body .is-layout-grid {
        display: grid;
      }

      body .is-layout-grid > * {
        margin: 0;
      }

      :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
      }

      :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
      }

      :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
      }

      :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
      }

      .has-black-color {
        color: var(--wp--preset--color--black) !important;
      }

      .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }

      .has-white-color {
        color: var(--wp--preset--color--white) !important;
      }

      .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
      }

      .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
      }

      .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }

      .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
      }

      .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
      }

      .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
      }

      .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }

      .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
      }

      .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
      }

      .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }

      .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
      }

      .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
      }

      .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
      }

      .has-luminous-vivid-orange-background-color {
        background-color: var(
          --wp--preset--color--luminous-vivid-orange
        ) !important;
      }

      .has-luminous-vivid-amber-background-color {
        background-color: var(
          --wp--preset--color--luminous-vivid-amber
        ) !important;
      }

      .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
      }

      .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }

      .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }

      .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }

      .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
      }

      .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
      }

      .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }

      .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
      }

      .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
      }

      .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
      }

      .has-luminous-vivid-orange-border-color {
        border-color: var(
          --wp--preset--color--luminous-vivid-orange
        ) !important;
      }

      .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }

      .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
      }

      .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }

      .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }

      .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }

      .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
      }

      .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(
          --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple
        ) !important;
      }

      .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(
          --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan
        ) !important;
      }

      .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(
          --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange
        ) !important;
      }

      .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(
          --wp--preset--gradient--luminous-vivid-orange-to-vivid-red
        ) !important;
      }

      .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(
          --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray
        ) !important;
      }

      .has-cool-to-warm-spectrum-gradient-background {
        background: var(
          --wp--preset--gradient--cool-to-warm-spectrum
        ) !important;
      }

      .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
      }

      .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
      }

      .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
      }

      .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
      }

      .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
      }

      .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
      }

      .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
      }

      .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
      }

      .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
      }

      .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
      }

      .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
      }

      :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
      }

      :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
      }

      :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
      }

      :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
      }

      .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
      }
    </style>
    <link
      rel="stylesheet"
      id="swiper-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5"
      media="all"
    />
    <link
      rel="stylesheet"
      id="elementor-post-34-css"
      href="https://kitpapa.net/rankz/wp-content/uploads/elementor/css/post-34.css?ver=1704446359"
      media="all"
    />
    <link
      rel="stylesheet"
      id="elementor-post-16-css"
      href="https://kitpapa.net/rankz/wp-content/uploads/elementor/css/post-16.css?ver=1704446981"
      media="all"
    />
    <link
      rel="stylesheet"
      id="text-editor-style-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/metform/public/assets/css/text-editor.css?ver=3.8.2"
      media="all"
    />
    <link
      rel="stylesheet"
      id="hello-elementor-css"
      href="https://kitpapa.net/rankz/wp-content/themes/hello-elementor/style.min.css?ver=3.0.0"
      media="all"
    />
    <link
      rel="stylesheet"
      id="hello-elementor-theme-style-css"
      href="https://kitpapa.net/rankz/wp-content/themes/hello-elementor/theme.min.css?ver=3.0.0"
      media="all"
    />
    <link
      rel="stylesheet"
      id="hello-elementor-header-footer-css"
      href="https://kitpapa.net/rankz/wp-content/themes/hello-elementor/header-footer.min.css?ver=3.0.0"
      media="all"
    />
    <link
      rel="stylesheet"
      id="elementor-icons-ekiticons-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css?ver=3.0.4"
      media="all"
    />
    <link
      rel="stylesheet"
      id="ekit-widget-styles-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css?ver=3.0.4"
      media="all"
    />
    <link
      rel="stylesheet"
      id="ekit-responsive-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css?ver=3.0.4"
      media="all"
    />
    <link
      rel="stylesheet"
      id="google-fonts-1-css"
      href="https://fonts.googleapis.com/css?family=Manrope%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CInter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.4.2"
      media="all"
    />
    <link
      rel="stylesheet"
      id="elementor-icons-jkiticon-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/assets/fonts/jkiticon/jkiticon.css?ver=2.6.2"
      media="all"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.18.3"
      id="font-awesome-4-shim-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
      id="jquery-core-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
      id="jquery-migrate-js"
    ></script>
    <link rel="https://api.w.org/" href="https://kitpapa.net/rankz/wp-json/" />
    <link
      rel="alternate"
      type="application/json"
      href="https://kitpapa.net/rankz/wp-json/wp/v2/pages/16"
    />
    <link
      rel="EditURI"
      type="application/rsd+xml"
      title="RSD"
      href="https://kitpapa.net/rankz/xmlrpc.php?rsd"
    />
    <meta name="generator" content="WordPress 6.4.2" />
    <link rel="canonical" href="https://kitpapa.net/rankz/pricing/" />
    <link rel="shortlink" href="https://kitpapa.net/rankz/?p=16" />
    <link
      rel="alternate"
      type="application/json+oembed"
      href="https://kitpapa.net/rankz/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkitpapa.net%2Frankz%2Fpricing%2F"
    />
    <link
      rel="alternate"
      type="text/xml+oembed"
      href="https://kitpapa.net/rankz/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkitpapa.net%2Frankz%2Fpricing%2F&#038;format=xml"
    />
    <meta
      name="generator"
      content="Elementor 3.18.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-swap"
    />
  </head>
  <body
    class="page-template page-template-elementor_header_footer page page-id-16 jkit-color-scheme elementor-default elementor-template-full-width elementor-kit-34 elementor-page elementor-page-16"
  >
    <?php include './header.php' ?>
    <div
      data-elementor-type="wp-page"
      data-elementor-id="16"
      class="elementor elementor-16"
    >
      <div
        class="elementor-element elementor-element-315f5c10 e-flex e-con-boxed e-con e-parent"
        data-id="315f5c10"
        data-element_type="container"
        data-settings='{"background_background":"gradient","content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-f05d2b1 elementor-widget elementor-widget-heading"
            data-id="f05d2b1"
            data-element_type="widget"
            data-widget_type="heading.default"
          >
            <div class="elementor-widget-container">
              <style>
                /*! elementor - v3.18.0 - 20-12-2023 */
                .elementor-heading-title {
                  padding: 0;
                  margin: 0;
                  line-height: 1;
                }

                .elementor-widget-heading
                  .elementor-heading-title[class*="elementor-size-"]
                  > a {
                  color: inherit;
                  font-size: inherit;
                  line-height: inherit;
                }

                .elementor-widget-heading
                  .elementor-heading-title.elementor-size-small {
                  font-size: 15px;
                }

                .elementor-widget-heading
                  .elementor-heading-title.elementor-size-medium {
                  font-size: 19px;
                }

                .elementor-widget-heading
                  .elementor-heading-title.elementor-size-large {
                  font-size: 29px;
                }

                .elementor-widget-heading
                  .elementor-heading-title.elementor-size-xl {
                  font-size: 39px;
                }

                .elementor-widget-heading
                  .elementor-heading-title.elementor-size-xxl {
                  font-size: 59px;
                }
              </style>
              <h1 class="elementor-heading-title elementor-size-default">
                Choose The Right Plan For You
              </h1>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-2ab5093e elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
            data-id="2ab5093e"
            data-element_type="widget"
            data-settings='{"_animation":"fadeIn","_animation_delay":400}'
            data-widget_type="text-editor.default"
          >
            <div class="elementor-widget-container">
              <style>
                /*! elementor - v3.18.0 - 20-12-2023 */
                .elementor-widget-text-editor.elementor-drop-cap-view-stacked
                  .elementor-drop-cap {
                  background-color: #69727d;
                  color: #fff;
                }

                .elementor-widget-text-editor.elementor-drop-cap-view-framed
                  .elementor-drop-cap {
                  color: #69727d;
                  border: 3px solid;
                  background-color: transparent;
                }

                .elementor-widget-text-editor:not(
                    .elementor-drop-cap-view-default
                  )
                  .elementor-drop-cap {
                  margin-top: 8px;
                }

                .elementor-widget-text-editor:not(
                    .elementor-drop-cap-view-default
                  )
                  .elementor-drop-cap-letter {
                  width: 1em;
                  height: 1em;
                }

                .elementor-widget-text-editor .elementor-drop-cap {
                  float: left;
                  text-align: center;
                  line-height: 1;
                  font-size: 50px;
                }

                .elementor-widget-text-editor .elementor-drop-cap-letter {
                  display: inline-block;
                }
              </style>
              <!-- Consectetur adipiscing elit sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Utenim minim veniam quis nostrud
              exercitation. -->
            </div>
          </div>
        </div>
      </div>
      <div
        class="elementor-element elementor-element-52eb5bb1 e-flex e-con-boxed e-con e-parent"
        data-id="52eb5bb1"
        data-element_type="container"
        data-settings='{"content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-3fa70006 e-flex e-con-boxed e-con e-child"
            data-id="3fa70006"
            data-element_type="container"
            data-settings='{"background_background":"classic","content_width":"boxed"}'
          >
            <div class="e-con-inner">
              <div
                class="elementor-element elementor-element-39ec2122 e-flex e-con-boxed elementor-invisible e-con e-child"
                data-id="39ec2122"
                data-element_type="container"
                data-settings='{"animation":"fadeIn","animation_delay":400,"background_background":"classic","content_width":"boxed"}'
              >
                <div class="e-con-inner">
                  <div
                    class="elementor-element elementor-element-73d9d217 elementor-widget elementor-widget-jkit_heading"
                    data-id="73d9d217"
                    data-element_type="widget"
                    data-widget_type="jkit_heading.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-heading align-center align-tablet-center align-mobile-center jeg_module_16_2_65c1cb65667b5"
                      >
                        <div class="heading-section-title display-inline-block">
                          <span class="heading-title">
                            $49
                            <span class="style-color">
                              <span>/month</span>
                            </span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-600e4995 elementor-widget elementor-widget-heading"
                    data-id="600e4995"
                    data-element_type="widget"
                    data-widget_type="heading.default"
                  >
                    <div class="elementor-widget-container">
                      <h3
                        class="elementor-heading-title elementor-size-default"
                      >
                        Basic Plan
                      </h3>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-7a639f0a elementor-widget__width-auto e-transform elementor-widget elementor-widget-jkit_button"
                    data-id="7a639f0a"
                    data-element_type="widget"
                    data-settings='{"_transform_translateX_effect_hover":{"unit":"px","size":10,"sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_button.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-button icon-position-after jeg_module_16_3_65c1cb656790c"
                      >
                        <a href="./contact.php" class="jkit-button-wrapper">
                        Get Started <i> <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"/></svg> </i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-4ab1c7 elementor-widget elementor-widget-spacer"
                    data-id="4ab1c7"
                    data-element_type="widget"
                    data-widget_type="spacer.default"
                  >
                    <div class="elementor-widget-container">
                      <style>
                        /*! elementor - v3.18.0 - 20-12-2023 */
                        .elementor-column .elementor-spacer-inner {
                          height: var(--spacer-size);
                        }

                        .e-con {
                          --container-widget-width: 100%;
                        }

                        .e-con-inner > .elementor-widget-spacer,
                        .e-con > .elementor-widget-spacer {
                          width: var(
                            --container-widget-width,
                            var(--spacer-size)
                          );
                          --align-self: var(
                            --container-widget-align-self,
                            initial
                          );
                          --flex-shrink: 0;
                        }

                        .e-con-inner
                          > .elementor-widget-spacer
                          > .elementor-widget-container,
                        .e-con
                          > .elementor-widget-spacer
                          > .elementor-widget-container {
                          height: 100%;
                          width: 100%;
                        }

                        .e-con-inner
                          > .elementor-widget-spacer
                          > .elementor-widget-container
                          > .elementor-spacer,
                        .e-con
                          > .elementor-widget-spacer
                          > .elementor-widget-container
                          > .elementor-spacer {
                          height: 100%;
                        }

                        .e-con-inner
                          > .elementor-widget-spacer
                          > .elementor-widget-container
                          > .elementor-spacer
                          > .elementor-spacer-inner,
                        .e-con
                          > .elementor-widget-spacer
                          > .elementor-widget-container
                          > .elementor-spacer
                          > .elementor-spacer-inner {
                          height: var(
                            --container-widget-height,
                            var(--spacer-size)
                          );
                        }

                        .e-con-inner
                          > .elementor-widget-spacer.elementor-widget-empty,
                        .e-con
                          > .elementor-widget-spacer.elementor-widget-empty {
                          position: relative;
                          min-height: 22px;
                          min-width: 22px;
                        }

                        .e-con-inner
                          > .elementor-widget-spacer.elementor-widget-empty
                          .elementor-widget-empty-icon,
                        .e-con
                          > .elementor-widget-spacer.elementor-widget-empty
                          .elementor-widget-empty-icon {
                          position: absolute;
                          top: 0;
                          bottom: 0;
                          left: 0;
                          right: 0;
                          margin: auto;
                          padding: 0;
                          width: 22px;
                          height: 22px;
                        }
                      </style>
                      <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-187b0bd3 elementor-align-left elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                    data-id="187b0bd3"
                    data-element_type="widget"
                    data-widget_type="icon-list.default"
                  >
                    <div class="elementor-widget-container">
                      <link
                        rel="stylesheet"
                        href="https://kitpapa.net/rankz/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css"
                      />
                      <ul class="elementor-icon-list-items">
                        <li class="elementor-icon-list-item">
                          <span class="elementor-icon-list-icon">
                            <svg
                              aria-hidden="true"
                              class="e-font-icon-svg e-fas-check"
                              viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                              ></path>
                            </svg>
                          </span>
                          <span class="elementor-icon-list-text"
                            >5 Analytics Campaigns</span
                          >
                        </li>
                        <li class="elementor-icon-list-item">
                          <span class="elementor-icon-list-icon">
                            <svg
                              aria-hidden="true"
                              class="e-font-icon-svg e-fas-check"
                              viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                              ></path>
                            </svg>
                          </span>
                          <span class="elementor-icon-list-text"
                            >Marketing Automation</span
                          >
                        </li>
                        <li class="elementor-icon-list-item">
                          <span class="elementor-icon-list-icon">
                            <svg
                              aria-hidden="true"
                              class="e-font-icon-svg e-fas-check"
                              viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                              ></path>
                            </svg>
                          </span>
                          <span class="elementor-icon-list-text"
                            >100 Keywords for SEO</span
                          >
                        </li>
                        <li class="elementor-icon-list-item">
                          <span class="elementor-icon-list-icon">
                            <svg
                              aria-hidden="true"
                              class="e-font-icon-svg e-fas-check"
                              viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                              ></path>
                            </svg>
                          </span>
                          <span class="elementor-icon-list-text"
                            >24/7 Customer Support</span
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-625203e8 e-flex e-con-boxed elementor-invisible e-con e-child"
                data-id="625203e8"
                data-element_type="container"
                data-settings='{"animation":"fadeIn","animation_delay":800,"background_background":"gradient","content_width":"boxed"}'
              >
                <div class="e-con-inner">
                  <div
                    class="elementor-element elementor-element-4f58f796 e-transform jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                    data-id="4f58f796"
                    data-element_type="widget"
                    data-settings='{"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_icon_box.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_16_4_65c1cb656d4da"
                      >
                        <div class="jkit-icon-box-wrapper hover-from-left">
                          <div
                            class="icon-box icon-box-header elementor-animation-"
                          >
                            <div class="icon style-color">
                              <img
                                decoding="async"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon-2.png"
                              />
                            </div>
                          </div>
                          <div class="icon-box icon-box-body"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-7de3f1f elementor-widget elementor-widget-jkit_heading"
                    data-id="7de3f1f"
                    data-element_type="widget"
                    data-widget_type="jkit_heading.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-heading align-center align-tablet-center align-mobile-center jeg_module_16_5_65c1cb656e619"
                      >
                        <div class="heading-section-title display-inline-block">
                          <span class="heading-title">
                            $149
                            <span class="style-color">
                              <span>/month</span>
                            </span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-7681adfb elementor-widget elementor-widget-heading"
                    data-id="7681adfb"
                    data-element_type="widget"
                    data-widget_type="heading.default"
                  >
                    <div class="elementor-widget-container">
                      <h3
                        class="elementor-heading-title elementor-size-default"
                      >
                        Enterprise Plan
                      </h3>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-39dbdef elementor-widget__width-auto e-transform elementor-widget elementor-widget-jkit_button"
                    data-id="39dbdef"
                    data-element_type="widget"
                    data-settings='{"_transform_translateX_effect_hover":{"unit":"px","size":10,"sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_button.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-button icon-position-after jeg_module_16_6_65c1cb656f4f7"
                      >
                        <a href="./contact.php" class="jkit-button-wrapper">
                        Get Started <i> <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"/></svg> </i>

                        </a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-493ce733 elementor-widget elementor-widget-spacer"
                    data-id="493ce733"
                    data-element_type="widget"
                    data-widget_type="spacer.default"
                  >
                    <div class="elementor-widget-container">
                      <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-2a2be6a0 elementor-align-left elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                    data-id="2a2be6a0"
                    data-element_type="widget"
                    data-widget_type="icon-list.default"
                  >
                    <div class="elementor-widget-container">
                      <ul class="elementor-icon-list-items">
                        <li class="elementor-icon-list-item">
                          <span class="elementor-icon-list-icon">
                            <svg
                              aria-hidden="true"
                              class="e-font-icon-svg e-fas-check"
                              viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                              ></path>
                            </svg>
                          </span>
                          <span class="elementor-icon-list-text"
                            >20 Analytics Campaigns</span
                          >
                        </li>
                        <li class="elementor-icon-list-item">
                          <span class="elementor-icon-list-icon">
                            <svg
                              aria-hidden="true"
                              class="e-font-icon-svg e-fas-check"
                              viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                              ></path>
                            </svg>
                          </span>
                          <span class="elementor-icon-list-text"
                            >Marketing Automation</span
                          >
                        </li>
                        <li class="elementor-icon-list-item">
                          <span class="elementor-icon-list-icon">
                            <svg
                              aria-hidden="true"
                              class="e-font-icon-svg e-fas-check"
                              viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                              ></path>
                            </svg>
                          </span>
                          <span class="elementor-icon-list-text"
                            >1000 Keywords for SEO</span
                          >
                        </li>
                        <li class="elementor-icon-list-item">
                          <span class="elementor-icon-list-icon">
                            <svg
                              aria-hidden="true"
                              class="e-font-icon-svg e-fas-check"
                              viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                              ></path>
                            </svg>
                          </span>
                          <span class="elementor-icon-list-text"
                            >Research & Analysis</span
                          >
                        </li>
                        <li class="elementor-icon-list-item">
                          <span class="elementor-icon-list-icon">
                            <svg
                              aria-hidden="true"
                              class="e-font-icon-svg e-fas-check"
                              viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                              ></path>
                            </svg>
                          </span>
                          <span class="elementor-icon-list-text"
                            >Weekly Reporting</span
                          >
                        </li>
                        <li class="elementor-icon-list-item">
                          <span class="elementor-icon-list-icon">
                            <svg
                              aria-hidden="true"
                              class="e-font-icon-svg e-fas-check"
                              viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                              ></path>
                            </svg>
                          </span>
                          <span class="elementor-icon-list-text"
                            >24/7 Customer Support</span
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-1b901bd6 e-flex e-con-boxed elementor-invisible e-con e-child"
                data-id="1b901bd6"
                data-element_type="container"
                data-settings='{"animation":"fadeIn","animation_delay":600,"background_background":"classic","content_width":"boxed"}'
              >
                <div class="e-con-inner">
                  <div
                    class="elementor-element elementor-element-1eaa5827 elementor-widget elementor-widget-jkit_heading"
                    data-id="1eaa5827"
                    data-element_type="widget"
                    data-widget_type="jkit_heading.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-heading align-center align-tablet-center align-mobile-center jeg_module_16_7_65c1cb65711cf"
                      >
                        <div class="heading-section-title display-inline-block">
                          <span class="heading-title">
                            $89
                            <span class="style-color">
                              <span>/month</span>
                            </span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-1c054ed8 elementor-widget elementor-widget-heading"
                    data-id="1c054ed8"
                    data-element_type="widget"
                    data-widget_type="heading.default"
                  >
                    <div class="elementor-widget-container">
                      <h3
                        class="elementor-heading-title elementor-size-default"
                      >
                        Personal Plan
                      </h3>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-7368a7f elementor-widget__width-auto e-transform elementor-widget elementor-widget-jkit_button"
                    data-id="7368a7f"
                    data-element_type="widget"
                    data-settings='{"_transform_translateX_effect_hover":{"unit":"px","size":10,"sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_button.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-button icon-position-after jeg_module_16_8_65c1cb6571e83"
                      >
                        <a href="./contact.php" class="jkit-button-wrapper">
                        Get Started <i> <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"/></svg> </i>

                        </a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-24dc5347 elementor-widget elementor-widget-spacer"
                    data-id="24dc5347"
                    data-element_type="widget"
                    data-widget_type="spacer.default"
                  >
                    <div class="elementor-widget-container">
                      <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-7675e94e elementor-align-left elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                    data-id="7675e94e"
                    data-element_type="widget"
                    data-widget_type="icon-list.default"
                  >
                    <div class="elementor-widget-container">
                      <ul class="elementor-icon-list-items">
                        <li class="elementor-icon-list-item">
                          <span class="elementor-icon-list-icon">
                            <svg
                              aria-hidden="true"
                              class="e-font-icon-svg e-fas-check"
                              viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                              ></path>
                            </svg>
                          </span>
                          <span class="elementor-icon-list-text"
                            >10 Analytics Campaigns</span
                          >
                        </li>
                        <li class="elementor-icon-list-item">
                          <span class="elementor-icon-list-icon">
                            <svg
                              aria-hidden="true"
                              class="e-font-icon-svg e-fas-check"
                              viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                              ></path>
                            </svg>
                          </span>
                          <span class="elementor-icon-list-text"
                            >Marketing Automation</span
                          >
                        </li>
                        <li class="elementor-icon-list-item">
                          <span class="elementor-icon-list-icon">
                            <svg
                              aria-hidden="true"
                              class="e-font-icon-svg e-fas-check"
                              viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                              ></path>
                            </svg>
                          </span>
                          <span class="elementor-icon-list-text"
                            >300 Keywords for SEO</span
                          >
                        </li>
                        <li class="elementor-icon-list-item">
                          <span class="elementor-icon-list-icon">
                            <svg
                              aria-hidden="true"
                              class="e-font-icon-svg e-fas-check"
                              viewBox="0 0 512 512"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                              ></path>
                            </svg>
                          </span>
                          <span class="elementor-icon-list-text"
                            >24/7 Customer Support</span
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="elementor-element elementor-element-5165ba4a e-flex e-con-boxed e-con e-parent"
        data-id="5165ba4a"
        data-element_type="container"
        data-settings='{"background_background":"classic","content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-31e2c030 e-flex e-con-boxed e-con e-child"
            data-id="31e2c030"
            data-element_type="container"
            data-settings='{"background_background":"classic","content_width":"boxed"}'
          >
            <div class="e-con-inner">
              <div
                class="elementor-element elementor-element-2bfdd8c9 elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-heading"
                data-id="2bfdd8c9"
                data-element_type="widget"
                data-settings='{"_animation":"fadeIn"}'
                data-widget_type="heading.default"
              >
                <div class="elementor-widget-container">
                  <h5 class="elementor-heading-title elementor-size-default">
                    Our Process
                  </h5>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-2327b442 elementor-invisible elementor-widget elementor-widget-heading"
                data-id="2327b442"
                data-element_type="widget"
                data-settings='{"_animation":"fadeIn","_animation_delay":200}'
                data-widget_type="heading.default"
              >
                <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default">
                    Easy Steps To Get Our Services
                  </h2>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-6084bd69 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
                data-id="6084bd69"
                data-element_type="widget"
                data-settings='{"_animation":"fadeIn","_animation_delay":400}'
                data-widget_type="text-editor.default"
              >
                <div class="elementor-widget-container">
                  <!-- Consectetur adipiscing elit sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua. Utenim minim veniam quis
                  nostrud exercitation. -->
                </div>
              </div>
              <div
                class="elementor-element elementor-element-34b9527e e-flex e-con-boxed e-con e-child"
                data-id="34b9527e"
                data-element_type="container"
                data-settings='{"content_width":"boxed"}'
              >
                <div class="e-con-inner">
                  <div
                    class="elementor-element elementor-element-7cee705 e-con-full e-transform e-flex elementor-invisible e-con e-child"
                    data-id="7cee705"
                    data-element_type="container"
                    data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":600,"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                  >
                    <div
                      class="elementor-element elementor-element-431fee24 elementor-widget elementor-widget-heading"
                      data-id="431fee24"
                      data-element_type="widget"
                      data-widget_type="heading.default"
                    >
                      <div class="elementor-widget-container">
                        <h2
                          class="elementor-heading-title elementor-size-default"
                        >
                          01.
                        </h2>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-3c75e4ac elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                      data-id="3c75e4ac"
                      data-element_type="widget"
                      data-widget_type="divider.default"
                    >
                      <div class="elementor-widget-container">
                        <style>
                          /*! elementor - v3.18.0 - 20-12-2023 */
                          .elementor-widget-divider {
                            --divider-border-style: none;
                            --divider-border-width: 1px;
                            --divider-color: #0c0d0e;
                            --divider-icon-size: 20px;
                            --divider-element-spacing: 10px;
                            --divider-pattern-height: 24px;
                            --divider-pattern-size: 20px;
                            --divider-pattern-url: none;
                            --divider-pattern-repeat: repeat-x;
                          }

                          .elementor-widget-divider .elementor-divider {
                            display: flex;
                          }

                          .elementor-widget-divider .elementor-divider__text {
                            font-size: 15px;
                            line-height: 1;
                            max-width: 95%;
                          }

                          .elementor-widget-divider
                            .elementor-divider__element {
                            margin: 0 var(--divider-element-spacing);
                            flex-shrink: 0;
                          }

                          .elementor-widget-divider .elementor-icon {
                            font-size: var(--divider-icon-size);
                          }

                          .elementor-widget-divider
                            .elementor-divider-separator {
                            display: flex;
                            margin: 0;
                            direction: ltr;
                          }

                          .elementor-widget-divider--view-line_icon
                            .elementor-divider-separator,
                          .elementor-widget-divider--view-line_text
                            .elementor-divider-separator {
                            align-items: center;
                          }

                          .elementor-widget-divider--view-line_icon
                            .elementor-divider-separator:after,
                          .elementor-widget-divider--view-line_icon
                            .elementor-divider-separator:before,
                          .elementor-widget-divider--view-line_text
                            .elementor-divider-separator:after,
                          .elementor-widget-divider--view-line_text
                            .elementor-divider-separator:before {
                            display: block;
                            content: "";
                            border-bottom: 0;
                            flex-grow: 1;
                            border-top: var(--divider-border-width)
                              var(--divider-border-style) var(--divider-color);
                          }

                          .elementor-widget-divider--element-align-left
                            .elementor-divider
                            .elementor-divider-separator
                            > .elementor-divider__svg:first-of-type {
                            flex-grow: 0;
                            flex-shrink: 100;
                          }

                          .elementor-widget-divider--element-align-left
                            .elementor-divider-separator:before {
                            content: none;
                          }

                          .elementor-widget-divider--element-align-left
                            .elementor-divider__element {
                            margin-left: 0;
                          }

                          .elementor-widget-divider--element-align-right
                            .elementor-divider
                            .elementor-divider-separator
                            > .elementor-divider__svg:last-of-type {
                            flex-grow: 0;
                            flex-shrink: 100;
                          }

                          .elementor-widget-divider--element-align-right
                            .elementor-divider-separator:after {
                            content: none;
                          }

                          .elementor-widget-divider--element-align-right
                            .elementor-divider__element {
                            margin-right: 0;
                          }

                          .elementor-widget-divider:not(
                              .elementor-widget-divider--view-line_text
                            ):not(.elementor-widget-divider--view-line_icon)
                            .elementor-divider-separator {
                            border-top: var(--divider-border-width)
                              var(--divider-border-style) var(--divider-color);
                          }

                          .elementor-widget-divider--separator-type-pattern {
                            --divider-border-style: none;
                          }

                          .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line
                            .elementor-divider-separator,
                          .elementor-widget-divider--separator-type-pattern:not(
                              .elementor-widget-divider--view-line
                            )
                            .elementor-divider-separator:after,
                          .elementor-widget-divider--separator-type-pattern:not(
                              .elementor-widget-divider--view-line
                            )
                            .elementor-divider-separator:before,
                          .elementor-widget-divider--separator-type-pattern:not(
                              [class*="elementor-widget-divider--view"]
                            )
                            .elementor-divider-separator {
                            width: 100%;
                            min-height: var(--divider-pattern-height);
                            -webkit-mask-size: var(--divider-pattern-size) 100%;
                            mask-size: var(--divider-pattern-size) 100%;
                            -webkit-mask-repeat: var(--divider-pattern-repeat);
                            mask-repeat: var(--divider-pattern-repeat);
                            background-color: var(--divider-color);
                            -webkit-mask-image: var(--divider-pattern-url);
                            mask-image: var(--divider-pattern-url);
                          }

                          .elementor-widget-divider--no-spacing {
                            --divider-pattern-size: auto;
                          }

                          .elementor-widget-divider--bg-round {
                            --divider-pattern-repeat: round;
                          }

                          .rtl
                            .elementor-widget-divider
                            .elementor-divider__text {
                            direction: rtl;
                          }

                          .e-con-inner > .elementor-widget-divider,
                          .e-con > .elementor-widget-divider {
                            width: var(--container-widget-width, 100%);
                            --flex-grow: var(--container-widget-flex-grow);
                          }
                        </style>
                        <div class="elementor-divider">
                          <span class="elementor-divider-separator"></span>
                        </div>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-b7f2dbd jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                      data-id="b7f2dbd"
                      data-element_type="widget"
                      data-widget_type="jkit_icon_box.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="jeg-elementor-kit jkit-icon-box icon-position-top elementor-animation- jeg_module_16_9_65c1cb6576999"
                        >
                          <div class="jkit-icon-box-wrapper hover-from-left">
                            <div
                              class="icon-box icon-box-header elementor-animation-"
                            >
                              <div class="icon style-color">
                                <img
                                  decoding="async"
                                  src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon-2.png"
                                  alt="Select Services"
                                />
                              </div>
                            </div>
                            <div class="icon-box icon-box-body">
                              <h3 class="title">Select Services</h3>
                              <p class="icon-box-description">
                              Choose from our range of services tailored to meet your specific needs and goals.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-2a0f5689 e-con-full e-transform e-flex elementor-invisible e-con e-child"
                    data-id="2a0f5689"
                    data-element_type="container"
                    data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":800,"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                  >
                    <div
                      class="elementor-element elementor-element-2c7ed0d8 elementor-widget elementor-widget-heading"
                      data-id="2c7ed0d8"
                      data-element_type="widget"
                      data-widget_type="heading.default"
                    >
                      <div class="elementor-widget-container">
                        <h2
                          class="elementor-heading-title elementor-size-default"
                        >
                          02.
                        </h2>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-5d8d47aa elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                      data-id="5d8d47aa"
                      data-element_type="widget"
                      data-widget_type="divider.default"
                    >
                      <div class="elementor-widget-container">
                        <div class="elementor-divider">
                          <span class="elementor-divider-separator"></span>
                        </div>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-3e8500f3 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                      data-id="3e8500f3"
                      data-element_type="widget"
                      data-widget_type="jkit_icon_box.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="jeg-elementor-kit jkit-icon-box icon-position-top elementor-animation- jeg_module_16_10_65c1cb6578606"
                        >
                          <div class="jkit-icon-box-wrapper hover-from-left">
                            <div
                              class="icon-box icon-box-header elementor-animation-"
                            >
                              <div class="icon style-color">
                                <img
                                  decoding="async"
                                  src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon3.png"
                                  alt="Start Consultation"
                                />
                              </div>
                            </div>
                            <div class="icon-box icon-box-body">
                              <h3 class="title">Start Consultation</h3>
                              <p class="icon-box-description">
                              Begin your journey to success with a consultation tailored to your business needs.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-23a22bc0 e-con-full e-transform e-flex elementor-invisible e-con e-child"
                    data-id="23a22bc0"
                    data-element_type="container"
                    data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":1000,"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                  >
                    <div
                      class="elementor-element elementor-element-62eede79 elementor-widget elementor-widget-heading"
                      data-id="62eede79"
                      data-element_type="widget"
                      data-widget_type="heading.default"
                    >
                      <div class="elementor-widget-container">
                        <h2
                          class="elementor-heading-title elementor-size-default"
                        >
                          03.
                        </h2>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-53302730 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                      data-id="53302730"
                      data-element_type="widget"
                      data-widget_type="divider.default"
                    >
                      <div class="elementor-widget-container">
                        <div class="elementor-divider">
                          <span class="elementor-divider-separator"></span>
                        </div>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-11199b47 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                      data-id="11199b47"
                      data-element_type="widget"
                      data-widget_type="jkit_icon_box.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="jeg-elementor-kit jkit-icon-box icon-position-top elementor-animation- jeg_module_16_11_65c1cb657a91c"
                        >
                          <div class="jkit-icon-box-wrapper hover-from-left">
                            <div
                              class="icon-box icon-box-header elementor-animation-"
                            >
                              <div class="icon style-color">
                                <img
                                  decoding="async"
                                  src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon-social-media.png"
                                  alt="Completed Payment"
                                />
                              </div>
                            </div>
                            <div class="icon-box icon-box-body">
                              <h3 class="title">Completed Payment</h3>
                              <p class="icon-box-description">
                              Secure your investment by completing your payment securely and conveniently.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-1c3ef130 e-con-full e-transform e-flex elementor-invisible e-con e-child"
                    data-id="1c3ef130"
                    data-element_type="container"
                    data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":1200,"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                  >
                    <div
                      class="elementor-element elementor-element-4086a191 elementor-widget elementor-widget-heading"
                      data-id="4086a191"
                      data-element_type="widget"
                      data-widget_type="heading.default"
                    >
                      <div class="elementor-widget-container">
                        <h2
                          class="elementor-heading-title elementor-size-default"
                        >
                          04.
                        </h2>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-50bb0558 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                      data-id="50bb0558"
                      data-element_type="widget"
                      data-widget_type="divider.default"
                    >
                      <div class="elementor-widget-container">
                        <div class="elementor-divider">
                          <span class="elementor-divider-separator"></span>
                        </div>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-73688a46 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                      data-id="73688a46"
                      data-element_type="widget"
                      data-widget_type="jkit_icon_box.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="jeg-elementor-kit jkit-icon-box icon-position-top elementor-animation- jeg_module_16_12_65c1cb657c946"
                        >
                          <div class="jkit-icon-box-wrapper hover-from-left">
                            <div
                              class="icon-box icon-box-header elementor-animation-"
                            >
                              <div class="icon style-color">
                                <img
                                  decoding="async"
                                  src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon-4.png"
                                  alt="Get Solutions"
                                />
                              </div>
                            </div>
                            <div class="icon-box icon-box-body">
                              <h3 class="title">Get Solutions</h3>
                              <p class="icon-box-description">
                              Sit back and relax as our team gets to work, providing tailored solutions to meet your business objectives.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="elementor-element elementor-element-65abc4a e-flex e-con-boxed e-con e-parent"
        data-id="65abc4a"
        data-element_type="container"
        data-settings='{"content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-49c61d1d e-con-full e-flex e-con e-child"
            data-id="49c61d1d"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-662b17be elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-heading"
              data-id="662b17be"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn"}'
              data-widget_type="heading.default"
            >
              <div class="elementor-widget-container">
                <h5 class="elementor-heading-title elementor-size-default">
                  FAQ
                </h5>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-1d00bf12 elementor-invisible elementor-widget elementor-widget-heading"
              data-id="1d00bf12"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn","_animation_delay":200}'
              data-widget_type="heading.default"
            >
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">
                  Get Your Questions Answered Here
                </h2>
              </div>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-2f2ae23f e-con-full e-flex e-con e-child"
            data-id="2f2ae23f"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-35d96cf4 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
              data-id="35d96cf4"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn","_animation_delay":400}'
              data-widget_type="text-editor.default"
            >
              <div class="elementor-widget-container">
              Discover Comprehensive Solutions to Your Queries Right Here! Our Expert Team is Ready to Provide In-Depth Insights and Guidance to Address All Your Concerns and Propel You Towards Success.
              </div>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-487813e0 e-con-full e-flex e-con e-child"
            data-id="487813e0"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-53eee2f8 e-con-full e-flex elementor-invisible e-con e-child"
              data-id="53eee2f8"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":600}'
            >
              <div
                class="elementor-element elementor-element-2e574f4 elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                data-id="2e574f4"
                data-element_type="widget"
                data-widget_type="jkit_heading.default"
              >
                <div class="elementor-widget-container">
                  <div
                    class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_16_13_65c1cb6580c51"
                  >
                    <div class="heading-section-title display-inline-block">
                      <h6 class="heading-title">
                        Can I Upgrade my Subscription?
                      </h6>
                    </div>
                    <div class="heading-section-description">
                    Yes, you can upgrade your subscription at any time. Simply navigate to your account settings, where you'll find options to upgrade to a higher tier of service.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-37afe54 e-con-full e-flex elementor-invisible e-con e-child"
              data-id="37afe54"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":800}'
            >
              <div
                class="elementor-element elementor-element-3ba22204 elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                data-id="3ba22204"
                data-element_type="widget"
                data-widget_type="jkit_heading.default"
              >
                <div class="elementor-widget-container">
                  <div
                    class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_16_14_65c1cb6581d23"
                  >
                    <div class="heading-section-title display-inline-block">
                      <h6 class="heading-title">
                        First-Page Google Guarantee?
                      </h6>
                    </div>
                    <div class="heading-section-description">
                    While we cannot guarantee first-page placement on Google, we're committed to employing effective SEO strategies to enhance your website's visibility and improve its ranking over time.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-35a3da47 e-con-full e-flex elementor-invisible e-con e-child"
              data-id="35a3da47"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":1000}'
            >
              <div
                class="elementor-element elementor-element-180ca136 elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                data-id="180ca136"
                data-element_type="widget"
                data-widget_type="jkit_heading.default"
              >
                <div class="elementor-widget-container">
                  <div
                    class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_16_15_65c1cb6582cdb"
                  >
                    <div class="heading-section-title display-inline-block">
                      <h6 class="heading-title">
                        Customized Marketing Strategies?
                      </h6>
                    </div>
                    <div class="heading-section-description">
                    Yes, we specialize in crafting customized marketing strategies tailored to meet the unique needs and goals of your business. Our experienced team will work closely with you to develop a comprehensive plan that maximizes your online presence and drives tangible results.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-32ee1369 e-con-full e-flex e-con e-child"
            data-id="32ee1369"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-56a82f6b e-con-full e-flex elementor-invisible e-con e-child"
              data-id="56a82f6b"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":1200}'
            >
              <div
                class="elementor-element elementor-element-3270a958 elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                data-id="3270a958"
                data-element_type="widget"
                data-widget_type="jkit_heading.default"
              >
                <div class="elementor-widget-container">
                  <div
                    class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_16_16_65c1cb65842a1"
                  >
                    <div class="heading-section-title display-inline-block">
                      <h6 class="heading-title">
                        Do You Offer Local SEO Services?
                      </h6>
                    </div>
                    <div class="heading-section-description">
                    Yes, we provide local SEO services tailored to boost your visibility in local search results and drive more foot traffic to your business.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-61772744 e-con-full e-flex elementor-invisible e-con e-child"
              data-id="61772744"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":1400}'
            >
              <div
                class="elementor-element elementor-element-21e905f6 elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                data-id="21e905f6"
                data-element_type="widget"
                data-widget_type="jkit_heading.default"
              >
                <div class="elementor-widget-container">
                  <div
                    class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_16_17_65c1cb65853b9"
                  >
                    <div class="heading-section-title display-inline-block">
                      <h6 class="heading-title">
                        Is Blogging Essential for SEO Success?
                      </h6>
                    </div>
                    <div class="heading-section-description">
                    Yes, blogging is essential for SEO success. Regularly publishing high-quality content on your website helps improve your search engine rankings by demonstrating expertise, authority, and relevance to search engines. It also provides opportunities to target valuable keywords, attract organic traffic, and earn backlinks from other websites.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-39c97278 e-con-full e-flex elementor-invisible e-con e-child"
              data-id="39c97278"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":1600}'
            >
              <div
                class="elementor-element elementor-element-4f46b554 elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                data-id="4f46b554"
                data-element_type="widget"
                data-widget_type="jkit_heading.default"
              >
                <div class="elementor-widget-container">
                  <div
                    class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_16_18_65c1cb6586654"
                  >
                    <div class="heading-section-title display-inline-block">
                      <h6 class="heading-title">
                        What Is the ROI of Digital Marketing?
                      </h6>
                    </div>
                    <div class="heading-section-description">
                    The ROI of digital marketing varies based on factors like industry and campaign goals but generally offers high returns due to precise targeting and real-time optimization.

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <?php include './footer.php' ?>

      </div>
    </div>
    <link
      rel="stylesheet"
      id="jeg-dynamic-style-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/lib/jeg-framework/assets/css/jeg-dynamic-styles.css?ver=1.3.0"
      media="all"
    />
    <link
      rel="stylesheet"
      id="e-animations-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.18.3"
      media="all"
    />
    <script
      src="https://kitpapa.net/rankz/wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=3.0.0"
      id="hello-theme-frontend-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js?ver=3.0.4"
      id="elementskit-framework-js-frontend-js"
    ></script>
    <script id="elementskit-framework-js-frontend-js-after">
      var elementskit = {
        resturl: "https://kitpapa.net/rankz/wp-json/elementskit/v1/",
      };
    </script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js?ver=3.0.4"
      id="ekit-widget-scripts-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.18.3"
      id="elementor-webpack-runtime-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.18.3"
      id="elementor-frontend-modules-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
      id="elementor-waypoints-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2"
      id="jquery-ui-core-js"
    ></script>
    <script id="elementor-frontend-js-before">
      var elementorFrontendConfig = {
        environmentMode: {
          edit: false,
          wpPreview: false,
          isScriptDebug: false,
        },
        i18n: {
          shareOnFacebook: "Share on Facebook",
          shareOnTwitter: "Share on Twitter",
          pinIt: "Pin it",
          download: "Download",
          downloadImage: "Download image",
          fullscreen: "Fullscreen",
          zoom: "Zoom",
          share: "Share",
          playVideo: "Play Video",
          previous: "Previous",
          next: "Next",
          close: "Close",
          a11yCarouselWrapperAriaLabel:
            "Carousel | Horizontal scrolling: Arrow Left & Right",
          a11yCarouselPrevSlideMessage: "Previous slide",
          a11yCarouselNextSlideMessage: "Next slide",
          a11yCarouselFirstSlideMessage: "This is the first slide",
          a11yCarouselLastSlideMessage: "This is the last slide",
          a11yCarouselPaginationBulletMessage: "Go to slide",
        },
        is_rtl: false,
        breakpoints: {
          xs: 0,
          sm: 480,
          md: 768,
          lg: 1025,
          xl: 1440,
          xxl: 1600,
        },
        responsive: {
          breakpoints: {
            mobile: {
              label: "Mobile Portrait",
              value: 767,
              default_value: 767,
              direction: "max",
              is_enabled: true,
            },
            mobile_extra: {
              label: "Mobile Landscape",
              value: 880,
              default_value: 880,
              direction: "max",
              is_enabled: false,
            },
            tablet: {
              label: "Tablet Portrait",
              value: 1024,
              default_value: 1024,
              direction: "max",
              is_enabled: true,
            },
            tablet_extra: {
              label: "Tablet Landscape",
              value: 1200,
              default_value: 1200,
              direction: "max",
              is_enabled: false,
            },
            laptop: {
              label: "Laptop",
              value: 1366,
              default_value: 1366,
              direction: "max",
              is_enabled: false,
            },
            widescreen: {
              label: "Widescreen",
              value: 2400,
              default_value: 2400,
              direction: "min",
              is_enabled: false,
            },
          },
        },
        version: "3.18.3",
        is_static: false,
        experimentalFeatures: {
          e_dom_optimization: true,
          e_optimized_assets_loading: true,
          e_optimized_css_loading: true,
          e_font_icon_svg: true,
          additional_custom_breakpoints: true,
          container: true,
          e_swiper_latest: true,
          "hello-theme-header-footer": true,
          block_editor_assets_optimize: true,
          "landing-pages": true,
          e_image_loading_optimization: true,
          e_global_styleguide: true,
        },
        urls: {
          assets:
            "https:\/\/kitpapa.net\/rankz\/wp-content\/plugins\/elementor\/assets\/",
        },
        swiperClass: "swiper",
        settings: {
          page: [],
          editorPreferences: [],
        },
        kit: {
          active_breakpoints: ["viewport_mobile", "viewport_tablet"],
          global_image_lightbox: "yes",
          lightbox_enable_counter: "yes",
          lightbox_enable_fullscreen: "yes",
          lightbox_enable_zoom: "yes",
          lightbox_enable_share: "yes",
          lightbox_title_src: "title",
          lightbox_description_src: "description",
          hello_header_logo_type: "title",
          hello_header_menu_layout: "horizontal",
          hello_footer_logo_type: "logo",
        },
        post: {
          id: 16,
          title: "Pricing%20%E2%80%93%20Rankz",
          excerpt: "",
          featuredImage: false,
        },
      };
    </script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.18.3"
      id="elementor-frontend-js"
    ></script>
    <script id="elementor-frontend-js-after">
      var jkit_ajax_url =
          "https://kitpapa.net/rankz/?jkit-ajax-request=jkit_elements",
        jkit_nonce = "79221be887";
    </script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/assets/js/elements/sticky-element.js?ver=2.6.2"
      id="jkit-sticky-element-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/assets/js/elements/nav-menu.js?ver=2.6.2"
      id="jkit-element-navmenu-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.min.js?ver=3.0.4"
      id="animate-circle-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js?ver=3.0.4"
      id="elementskit-elementor-js"
    ></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentPageUrl = window.location.href;

        // Get all menu items
        var menuItems = document.querySelectorAll("#menu-main-menu > li");

        // Loop through each menu item
        menuItems.forEach(function(item) {
            var link = item.querySelector("a");

            // Check if the link href matches the current page URL
            if (link.href === currentPageUrl) {
                // Add the "current-menu-item" class to the parent <li> element
                item.classList.add("current-menu-item");
            }
        });
    });
  </script>
  </body>
</html>
