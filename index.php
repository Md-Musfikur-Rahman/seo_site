<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Devsite Studio &#8211;SEO and Digital Marketing Agency</title>
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
      id="elementor-post-10-css"
      href="https://kitpapa.net/rankz/wp-content/uploads/elementor/css/post-10.css?ver=1704892521"
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
      href="https://kitpapa.net/rankz/wp-json/wp/v2/pages/10"
    />
    <link
      rel="EditURI"
      type="application/rsd+xml"
      title="RSD"
      href="https://kitpapa.net/rankz/xmlrpc.php?rsd"
    />
    <meta name="generator" content="WordPress 6.4.2" />
    <link rel="canonical" href="https://kitpapa.net/rankz/" />
    <link rel="shortlink" href="https://kitpapa.net/rankz/" />
    <link
      rel="alternate"
      type="application/json+oembed"
      href="https://kitpapa.net/rankz/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkitpapa.net%2Frankz%2F"
    />
    <link
      rel="alternate"
      type="text/xml+oembed"
      href="https://kitpapa.net/rankz/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkitpapa.net%2Frankz%2F&#038;format=xml"
    />
    <meta
      name="generator"
      content="Elementor 3.18.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-swap"
    />
  </head>
  <body
    class="home page-template page-template-elementor_header_footer page page-id-10 jkit-color-scheme elementor-default elementor-template-full-width elementor-kit-34 elementor-page elementor-page-10"
  >

  <?php include './header.php' ?>
    <div
      data-elementor-type="wp-page"
      data-elementor-id="10"
      class="elementor elementor-10"
    >
      <div
        class="elementor-element elementor-element-776cf336 e-flex e-con-boxed e-con e-parent"
        data-id="776cf336"
        data-element_type="container"
        data-settings='{"background_background":"gradient","content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-6448a8b e-con-full e-flex e-con e-child"
            data-id="6448a8b"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-60505afa elementor-widget__width-initial elementor-absolute elementor-hidden-mobile elementor-invisible elementor-widget elementor-widget-image"
              data-id="60505afa"
              data-element_type="widget"
              data-settings='{"_position":"absolute","_animation":"fadeIn"}'
              data-widget_type="image.default"
            >
              <div class="elementor-widget-container">
                <img
                  decoding="async"
                  width="262"
                  height="140"
                  src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/google-with-growth.png"
                  class="attachment-large size-large wp-image-40"
                  alt=""
                />
              </div>
            </div>
            <div
              class="elementor-element elementor-element-27bca306 elementor-invisible elementor-widget elementor-widget-heading"
              data-id="27bca306"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn"}'
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
                  Boost Your Digital Presence with Our Expert
                </h1>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-4ff54762 elementor-invisible elementor-widget elementor-widget-text-editor"
              data-id="4ff54762"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn","_animation_delay":200}'
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
                Consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua utenim minim veniam quis.
              </div>
            </div>
            <div
              class="elementor-element elementor-element-1c931b3d e-flex e-con-boxed e-con e-child"
              data-id="1c931b3d"
              data-element_type="container"
              data-settings='{"content_width":"boxed"}'
            >
              <div class="e-con-inner">
                <div
                  class="elementor-element elementor-element-6c890672 e-con-full e-flex elementor-invisible e-con e-child"
                  data-id="6c890672"
                  data-element_type="container"
                  data-settings='{"content_width":"full","animation":"fadeIn","animation_delay":400}'
                >
                  <div
                    class="elementor-element elementor-element-7b203b39 elementor-widget__width-auto e-transform elementor-widget elementor-widget-jkit_button"
                    data-id="7b203b39"
                    data-element_type="widget"
                    data-settings='{"_transform_translateX_effect_hover":{"unit":"px","size":10,"sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_button.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-button icon-position-after jeg_module_10_2_65c1caffcb0da"
                      >
                        <a href="#" class="jkit-button-wrapper">
                          Get Started<i
                            aria-hidden="true"
                            class="jki jki-right-arrow-light"
                          ></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-1eb2a917 e-con-full e-flex elementor-invisible e-con e-child"
                  data-id="1eb2a917"
                  data-element_type="container"
                  data-settings='{"content_width":"full","animation":"fadeIn","animation_delay":600}'
                >
                  <div
                    class="elementor-element elementor-element-293dfcb7 elementor-widget__width-initial elementor-widget elementor-widget-image"
                    data-id="293dfcb7"
                    data-element_type="widget"
                    data-widget_type="image.default"
                  >
                    <div class="elementor-widget-container">
                      <img
                        decoding="async"
                        width="300"
                        height="300"
                        src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/review-B3X9P3L.jpg"
                        class="attachment-medium size-medium wp-image-46"
                        alt=""
                        srcset="
                          https://kitpapa.net/rankz/wp-content/uploads/2024/01/review-B3X9P3L.jpg         300w,
                          https://kitpapa.net/rankz/wp-content/uploads/2024/01/review-B3X9P3L-150x150.jpg 150w
                        "
                        sizes="(max-width: 300px) 100vw, 300px"
                      />
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-433adcec elementor-widget__width-initial elementor-widget elementor-widget-image"
                    data-id="433adcec"
                    data-element_type="widget"
                    data-widget_type="image.default"
                  >
                    <div class="elementor-widget-container">
                      <img
                        loading="lazy"
                        decoding="async"
                        width="300"
                        height="300"
                        src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/review-EB45RVP.jpg"
                        class="attachment-medium size-medium wp-image-52"
                        alt=""
                        srcset="
                          https://kitpapa.net/rankz/wp-content/uploads/2024/01/review-EB45RVP.jpg         300w,
                          https://kitpapa.net/rankz/wp-content/uploads/2024/01/review-EB45RVP-150x150.jpg 150w
                        "
                        sizes="(max-width: 300px) 100vw, 300px"
                      />
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-5fe2d0fe elementor-widget__width-initial elementor-widget elementor-widget-image"
                    data-id="5fe2d0fe"
                    data-element_type="widget"
                    data-widget_type="image.default"
                  >
                    <div class="elementor-widget-container">
                      <img
                        loading="lazy"
                        decoding="async"
                        width="300"
                        height="300"
                        src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/review-4ZDFMBD.jpg"
                        class="attachment-medium size-medium wp-image-59"
                        alt=""
                        srcset="
                          https://kitpapa.net/rankz/wp-content/uploads/2024/01/review-4ZDFMBD.jpg         300w,
                          https://kitpapa.net/rankz/wp-content/uploads/2024/01/review-4ZDFMBD-150x150.jpg 150w
                        "
                        sizes="(max-width: 300px) 100vw, 300px"
                      />
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-1318e362 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                    data-id="1318e362"
                    data-element_type="widget"
                    data-widget_type="heading.default"
                  >
                    <div class="elementor-widget-container">
                      <span
                        class="elementor-heading-title elementor-size-default"
                        >10K+</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-75670f54 e-con-full e-flex e-con e-child"
            data-id="75670f54"
            data-element_type="container"
            data-settings='{"content_width":"full","background_background":"classic"}'
          >
            <div
              class="elementor-element elementor-element-69be2d57 elementor-widget elementor-widget-image"
              data-id="69be2d57"
              data-element_type="widget"
              data-widget_type="image.default"
            >
              <div class="elementor-widget-container">
                <img
                  loading="lazy"
                  decoding="async"
                  width="800"
                  height="920"
                  src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/2pretty-young-asian-woman-showing-digital-tablet-wi-2024-01-09-08-10-44-utc.png"
                  class="attachment-large size-large wp-image-201"
                  alt=""
                  srcset="
                    https://kitpapa.net/rankz/wp-content/uploads/2024/01/2pretty-young-asian-woman-showing-digital-tablet-wi-2024-01-09-08-10-44-utc.png         890w,
                    https://kitpapa.net/rankz/wp-content/uploads/2024/01/2pretty-young-asian-woman-showing-digital-tablet-wi-2024-01-09-08-10-44-utc-261x300.png 261w,
                    https://kitpapa.net/rankz/wp-content/uploads/2024/01/2pretty-young-asian-woman-showing-digital-tablet-wi-2024-01-09-08-10-44-utc-768x884.png 768w
                  "
                  sizes="(max-width: 800px) 100vw, 800px"
                />
              </div>
            </div>
            <div
              class="elementor-element elementor-element-72a4298b elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
              data-id="72a4298b"
              data-element_type="widget"
              data-settings='{"_position":"absolute","_animation":"fadeIn","_animation_delay":600}'
              data-widget_type="image.default"
            >
              <div class="elementor-widget-container">
                <img
                  loading="lazy"
                  decoding="async"
                  width="344"
                  height="338"
                  src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/graphic-statistic.png"
                  class="attachment-full size-full wp-image-81"
                  alt=""
                  srcset="
                    https://kitpapa.net/rankz/wp-content/uploads/2024/01/graphic-statistic.png         344w,
                    https://kitpapa.net/rankz/wp-content/uploads/2024/01/graphic-statistic-300x295.png 300w
                  "
                  sizes="(max-width: 344px) 100vw, 344px"
                />
              </div>
            </div>
            <div
              class="elementor-element elementor-element-44ab1ed8 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
              data-id="44ab1ed8"
              data-element_type="widget"
              data-settings='{"_position":"absolute","_animation":"fadeIn","_animation_delay":400}'
              data-widget_type="image.default"
            >
              <div class="elementor-widget-container">
                <img
                  loading="lazy"
                  decoding="async"
                  width="440"
                  height="204"
                  src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/graphic-total-revenue.png"
                  class="attachment-full size-full wp-image-82"
                  alt=""
                  srcset="
                    https://kitpapa.net/rankz/wp-content/uploads/2024/01/graphic-total-revenue.png         440w,
                    https://kitpapa.net/rankz/wp-content/uploads/2024/01/graphic-total-revenue-300x139.png 300w
                  "
                  sizes="(max-width: 440px) 100vw, 440px"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="elementor-element elementor-element-4c454e28 e-flex e-con-boxed e-con e-parent"
        data-id="4c454e28"
        data-element_type="container"
        data-settings='{"content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-53892c69 e-con-full e-flex e-con e-child"
            data-id="53892c69"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-43c2c3a7 elementor-invisible elementor-widget elementor-widget-heading"
              data-id="43c2c3a7"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn"}'
              data-widget_type="heading.default"
            >
              <div class="elementor-widget-container">
                <h3 class="elementor-heading-title elementor-size-default">
                  Trusted by Big Companies
                </h3>
              </div>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-2ca621b9 e-con-full e-flex e-con e-child"
            data-id="2ca621b9"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-c39a538 elementor-invisible elementor-widget elementor-widget-jkit_client_logo"
              data-id="c39a538"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn","_animation_delay":200}'
              data-widget_type="jkit_client_logo.default"
            >
              <div class="elementor-widget-container">
                <div
                  class="jeg-elementor-kit jkit-client-logo arrow-bottom-middle jeg_module_10_3_65c1caffd6847"
                  data-id="jeg_module_10_3_65c1caffd6847"
                  data-settings='{"autoplay":true,"autoplay_speed":3000,"autoplay_hover_pause":false,"show_navigation":false,"navigation_left":"&lt;svg aria-hidden=\"true\" class=\"e-font-icon-svg e-fas-angle-left\" viewBox=\"0 0 256 512\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"&gt;&lt;path d=\"M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z\"&gt;&lt;\/path&gt;&lt;\/svg&gt;","navigation_right":"&lt;svg aria-hidden=\"true\" class=\"e-font-icon-svg e-fas-angle-right\" viewBox=\"0 0 256 512\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"&gt;&lt;path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"&gt;&lt;\/path&gt;&lt;\/svg&gt;","show_dots":false,"arrow_position":"bottom","responsive":{"desktop":{"items":4,"margin":10,"breakpoint":1025},"tablet":{"items":4,"margin":10,"breakpoint":768},"mobile":{"items":2,"margin":10,"breakpoint":0}}}'
                >
                  <div class="client-list">
                    <div class="client-track">
                      <div class="client-slider item">
                        <div class="image-list">
                          <div class="content-image">
                            <img
                              decoding="async"
                              src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/partner-7.png"
                              class="main-image"
                              alt="Title"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="client-slider item">
                        <div class="image-list">
                          <div class="content-image">
                            <img
                              decoding="async"
                              src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/partner-1.png"
                              class="main-image"
                              alt="Title"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="client-slider item">
                        <div class="image-list">
                          <div class="content-image">
                            <img
                              decoding="async"
                              src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/partner-2.png"
                              class="main-image"
                              alt="Title"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="client-slider item">
                        <div class="image-list">
                          <div class="content-image">
                            <img
                              decoding="async"
                              src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/partner-4.png"
                              class="main-image"
                              alt="Title"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="client-slider item">
                        <div class="image-list">
                          <div class="content-image">
                            <img
                              decoding="async"
                              src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/partner-3.png"
                              class="main-image"
                              alt="Title"
                            />
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
        class="elementor-element elementor-element-3dba75a6 e-flex e-con-boxed e-con e-parent"
        data-id="3dba75a6"
        data-element_type="container"
        data-settings='{"content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-300c6645 e-flex e-con-boxed e-con e-child"
            data-id="300c6645"
            data-element_type="container"
            data-settings='{"content_width":"boxed"}'
          >
            <div class="e-con-inner">
              <div
                class="elementor-element elementor-element-1bd4ad95 e-con-full e-flex e-con e-child"
                data-id="1bd4ad95"
                data-element_type="container"
                data-settings='{"content_width":"full"}'
              >
                <div
                  class="elementor-element elementor-element-2c3e5f8f elementor-invisible elementor-widget elementor-widget-heading"
                  data-id="2c3e5f8f"
                  data-element_type="widget"
                  data-settings='{"_animation":"fadeIn","_animation_delay":200}'
                  data-widget_type="heading.default"
                >
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">
                      SEO Strategies that Drive Web Traffic & Results
                    </h2>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-11d1f745 e-flex e-con-boxed e-con e-child"
                data-id="11d1f745"
                data-element_type="container"
                data-settings='{"content_width":"boxed"}'
              >
                <div class="e-con-inner">
                  <div
                    class="elementor-element elementor-element-5383ae16 elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="5383ae16"
                    data-element_type="widget"
                    data-settings='{"_animation":"fadeIn","_animation_delay":400}'
                    data-widget_type="text-editor.default"
                  >
                    <div class="elementor-widget-container">
                      Adipiscing elit sed do eiusmod tempor incididunt ut labore
                      et dolore magna aliqua. Utenim ad minim veniam quis
                      nostrud exercitation ullamco laboris dolore magna aliqua.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-41644bd4 e-flex e-con-boxed e-con e-child"
            data-id="41644bd4"
            data-element_type="container"
            data-settings='{"background_background":"classic","content_width":"boxed"}'
          >
            <div class="e-con-inner">
              <div
                class="elementor-element elementor-element-44f80744 e-flex e-con-boxed elementor-invisible e-con e-child"
                data-id="44f80744"
                data-element_type="container"
                data-settings='{"animation":"fadeIn","animation_delay":600,"content_width":"boxed"}'
              >
                <div class="e-con-inner">
                  <div
                    class="elementor-element elementor-element-3132544 e-transform jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                    data-id="3132544"
                    data-element_type="widget"
                    data-settings='{"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_icon_box.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_10_4_65c1caffdeb72"
                      >
                        <div class="jkit-icon-box-wrapper hover-from-left">
                          <div
                            class="icon-box icon-box-header elementor-animation-"
                          >
                            <div class="icon style-color">
                              <img
                                decoding="async"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon-2.png"
                                alt="Boosts Sales"
                              />
                            </div>
                          </div>
                          <div class="icon-box icon-box-body">
                            <h3 class="title">Boosts Sales</h3>
                            <p class="icon-box-description">
                              Consectetur adipiscing elit sed do eiusmod tempor
                              incididunt ut labore.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-5ea1e7bd e-flex e-con-boxed elementor-invisible e-con e-child"
                data-id="5ea1e7bd"
                data-element_type="container"
                data-settings='{"animation":"fadeIn","animation_delay":800,"content_width":"boxed"}'
              >
                <div class="e-con-inner">
                  <div
                    class="elementor-element elementor-element-541c8468 e-transform jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                    data-id="541c8468"
                    data-element_type="widget"
                    data-settings='{"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_icon_box.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_10_5_65c1caffe0895"
                      >
                        <div class="jkit-icon-box-wrapper hover-from-left">
                          <div
                            class="icon-box icon-box-header elementor-animation-"
                          >
                            <div class="icon style-color">
                              <img
                                decoding="async"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon-growth.png"
                                alt="Drive Growth"
                              />
                            </div>
                          </div>
                          <div class="icon-box icon-box-body">
                            <h3 class="title">Drive Growth</h3>
                            <p class="icon-box-description">
                              Adipiscing elit sed do eiusmod tempor incididunt
                              ut labore et dolore.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-40c20601 e-flex e-con-boxed elementor-invisible e-con e-child"
                data-id="40c20601"
                data-element_type="container"
                data-settings='{"animation":"fadeIn","animation_delay":1000,"content_width":"boxed"}'
              >
                <div class="e-con-inner">
                  <div
                    class="elementor-element elementor-element-66ff4ef9 e-transform jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                    data-id="66ff4ef9"
                    data-element_type="widget"
                    data-settings='{"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_icon_box.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_10_6_65c1caffe216b"
                      >
                        <div class="jkit-icon-box-wrapper hover-from-left">
                          <div
                            class="icon-box icon-box-header elementor-animation-"
                          >
                            <div class="icon style-color">
                              <img
                                decoding="async"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon-4.png"
                                alt="Targeted Audience"
                              />
                            </div>
                          </div>
                          <div class="icon-box icon-box-body">
                            <h3 class="title">Targeted Audience</h3>
                            <p class="icon-box-description">
                              Consectetur adipiscing elit sed do eiusmod tempor
                              incid ut labore. Utenim ad minim veniam quis
                              nostrud exercita ullamco laboris dolore.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-2b3f00fe e-flex e-con-boxed elementor-invisible e-con e-child"
                data-id="2b3f00fe"
                data-element_type="container"
                data-settings='{"animation":"fadeIn","animation_delay":1200,"content_width":"boxed"}'
              >
                <div class="e-con-inner">
                  <div
                    class="elementor-element elementor-element-67299c10 e-transform jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                    data-id="67299c10"
                    data-element_type="widget"
                    data-settings='{"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_icon_box.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_10_7_65c1caffe3925"
                      >
                        <div class="jkit-icon-box-wrapper hover-from-left">
                          <div
                            class="icon-box icon-box-header elementor-animation-"
                          >
                            <div class="icon style-color">
                              <img
                                decoding="async"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon3.png"
                                alt="Improved Rankings"
                              />
                            </div>
                          </div>
                          <div class="icon-box icon-box-body">
                            <h3 class="title">Improved Rankings</h3>
                            <p class="icon-box-description">
                              Consectetur adipiscing elit sed do eiusmod tempor
                              incididunt ut labore.
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
      <div
        class="elementor-element elementor-element-7cf2dfe2 e-flex e-con-boxed e-con e-parent"
        data-id="7cf2dfe2"
        data-element_type="container"
        data-settings='{"content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-8aa2eb3 e-con-full e-flex e-con e-child"
            data-id="8aa2eb3"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-296b67a3 e-con-full e-flex e-con e-child"
              data-id="296b67a3"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic"}'
            >
              <div
                class="elementor-element elementor-element-454b78b2 elementor-invisible elementor-widget elementor-widget-image"
                data-id="454b78b2"
                data-element_type="widget"
                data-settings='{"_animation":"fadeIn"}'
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    loading="lazy"
                    decoding="async"
                    width="699"
                    height="1004"
                    src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/Profile-1.png"
                    class="attachment-large size-large wp-image-208"
                    alt=""
                    srcset="
                      https://kitpapa.net/rankz/wp-content/uploads/2024/01/Profile-1.png         699w,
                      https://kitpapa.net/rankz/wp-content/uploads/2024/01/Profile-1-209x300.png 209w
                    "
                    sizes="(max-width: 699px) 100vw, 699px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-5ae95b59 e-con-full e-flex e-con e-child"
            data-id="5ae95b59"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-44653f5c elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-heading"
              data-id="44653f5c"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn","_animation_delay":200}'
              data-widget_type="heading.default"
            >
              <div class="elementor-widget-container">
                <h5 class="elementor-heading-title elementor-size-default">
                  About Rankz
                </h5>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-53f3cf89 elementor-invisible elementor-widget elementor-widget-heading"
              data-id="53f3cf89"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn","_animation_delay":400}'
              data-widget_type="heading.default"
            >
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">
                  A Decade and a Half of SEO Excellence
                </h2>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-79434fa9 elementor-invisible elementor-widget elementor-widget-text-editor"
              data-id="79434fa9"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn","_animation_delay":600}'
              data-widget_type="text-editor.default"
            >
              <div class="elementor-widget-container">
                Consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Utenim minim veniam quis nostrud
                exercitation.
              </div>
            </div>
            <div
              class="elementor-element elementor-element-ef9af8d e-flex e-con-boxed elementor-invisible e-con e-child"
              data-id="ef9af8d"
              data-element_type="container"
              data-settings='{"background_background":"classic","animation":"fadeIn","animation_delay":800,"content_width":"boxed"}'
            >
              <div class="e-con-inner">
                <div
                  class="elementor-element elementor-element-42206250 e-con-full e-flex e-con e-child"
                  data-id="42206250"
                  data-element_type="container"
                  data-settings='{"content_width":"full"}'
                >
                  <div
                    class="elementor-element elementor-element-68b3a50d elementor-widget__width-auto jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                    data-id="68b3a50d"
                    data-element_type="widget"
                    data-widget_type="jkit_icon_box.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-icon-box icon-position-right elementor-animation- jeg_module_10_8_65c1caffe7f53"
                      >
                        <div class="jkit-icon-box-wrapper hover-from-left">
                          <div
                            class="icon-box icon-box-header elementor-animation-"
                          >
                            <div class="icon style-color">
                              <i
                                aria-hidden="true"
                                class="jki jki-trending-up-line"
                              ></i>
                            </div>
                          </div>
                          <div class="icon-box icon-box-body">
                            <h3 class="title">35%</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-38108ad9 elementor-widget elementor-widget-heading"
                    data-id="38108ad9"
                    data-element_type="widget"
                    data-widget_type="heading.default"
                  >
                    <div class="elementor-widget-container">
                      <h4
                        class="elementor-heading-title elementor-size-default"
                      >
                        Account Reached
                      </h4>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-5011efdf e-con-full e-flex e-con e-child"
                  data-id="5011efdf"
                  data-element_type="container"
                  data-settings='{"content_width":"full"}'
                >
                  <div
                    class="elementor-element elementor-element-1d43c8b0 elementor-widget elementor-widget-text-editor"
                    data-id="1d43c8b0"
                    data-element_type="widget"
                    data-widget_type="text-editor.default"
                  >
                    <div class="elementor-widget-container">
                      Consectetur adipiscing elit sed do eiusmod tempor
                      incididunt et dolore magna aliqua minim veniam quis.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-46c7995e e-flex e-con-boxed e-con e-child"
              data-id="46c7995e"
              data-element_type="container"
              data-settings='{"content_width":"boxed"}'
            >
              <div class="e-con-inner">
                <div
                  class="elementor-element elementor-element-58c30e55 e-con-full e-flex elementor-invisible e-con e-child"
                  data-id="58c30e55"
                  data-element_type="container"
                  data-settings='{"content_width":"full","animation":"fadeIn","animation_delay":1000}'
                >
                  <div
                    class="elementor-element elementor-element-12e98324 elementor-widget__width-auto e-transform elementor-widget elementor-widget-jkit_button"
                    data-id="12e98324"
                    data-element_type="widget"
                    data-settings='{"_transform_translateX_effect_hover":{"unit":"px","size":10,"sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_button.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-button icon-position-after jeg_module_10_9_65c1caffea43e"
                      >
                        <a href="#" class="jkit-button-wrapper">
                          More About Us<i
                            aria-hidden="true"
                            class="jki jki-right-arrow-light"
                          ></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-1f5ef7da e-con-full e-flex elementor-invisible e-con e-child"
                  data-id="1f5ef7da"
                  data-element_type="container"
                  data-settings='{"content_width":"full","animation":"fadeIn","animation_delay":1200}'
                >
                  <div
                    class="elementor-element elementor-element-42e4f3e1 elementor-widget__width-auto elementor-hidden-mobile elementor-widget elementor-widget-jkit_video_button"
                    data-id="42e4f3e1"
                    data-element_type="widget"
                    data-widget_type="jkit_video_button.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-video-button jeg_module_10_10_65c1caffebe14"
                        data-autoplay="0"
                        data-loop="0"
                        data-controls="0"
                        data-type="youtube"
                        data-mute="0"
                        data-start="0"
                        data-end="0"
                      >
                        <a
                          href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                          class="jkit-video-popup-btn glow-enable"
                        >
                          <span class="icon-position-before">
                            <i
                              aria-hidden="true"
                              class="jki jki-play-button-light"
                            ></i>
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-3d5aaf2c elementor-align-left elementor-widget__width-auto elementor-hidden-mobile elementor-widget elementor-widget-button"
                    data-id="3d5aaf2c"
                    data-element_type="widget"
                    data-widget_type="button.default"
                  >
                    <div class="elementor-widget-container">
                      <div class="elementor-button-wrapper">
                        <a
                          class="elementor-button elementor-button-link elementor-size-sm"
                          href="#"
                        >
                          <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text"
                              >Watch intro</span
                            >
                          </span>
                        </a>
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
        class="elementor-element elementor-element-2225dbb5 e-flex e-con-boxed e-con e-parent"
        data-id="2225dbb5"
        data-element_type="container"
        data-settings='{"content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-74c7e19c e-con-full e-flex e-con e-child"
            data-id="74c7e19c"
            data-element_type="container"
            data-settings='{"content_width":"full","background_background":"classic"}'
          >
            <div
              class="elementor-element elementor-element-2b14044d elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-heading"
              data-id="2b14044d"
              data-element_type="widget"
              data-settings='{"_position":"absolute","_animation":"fadeIn"}'
              data-widget_type="heading.default"
            >
              <div class="elementor-widget-container">
                <h5 class="elementor-heading-title elementor-size-default">
                  Our Services
                </h5>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-6100c43 elementor-invisible elementor-widget elementor-widget-heading"
              data-id="6100c43"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn","_animation_delay":200}'
              data-widget_type="heading.default"
            >
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">
                  Best SEO Service Just For You
                </h2>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-360989f8 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
              data-id="360989f8"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn","_animation_delay":400}'
              data-widget_type="text-editor.default"
            >
              <div class="elementor-widget-container">
                Consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Utenim minim veniam quis nostrud
                exercitation.
              </div>
            </div>
            <div
              class="elementor-element elementor-element-5c09af3a e-flex e-con-boxed e-con e-child"
              data-id="5c09af3a"
              data-element_type="container"
              data-settings='{"content_width":"boxed"}'
            >
              <div class="e-con-inner">
                <div
                  class="elementor-element elementor-element-2af18b34 e-con-full e-flex elementor-invisible e-con e-child"
                  data-id="2af18b34"
                  data-element_type="container"
                  data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":600}'
                >
                  <div
                    class="elementor-element elementor-element-7501f9de e-transform jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                    data-id="7501f9de"
                    data-element_type="widget"
                    data-settings='{"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_icon_box.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_10_11_65c1caffef7c2"
                      >
                        <div class="jkit-icon-box-wrapper hover-from-left">
                          <div
                            class="icon-box icon-box-header elementor-animation-"
                          >
                            <div class="icon style-color">
                              <img
                                decoding="async"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon-seo.png"
                                alt="SEO Services"
                              />
                            </div>
                          </div>
                          <div class="icon-box icon-box-body">
                            <h3 class="title">SEO Services</h3>
                            <p class="icon-box-description">
                              Consectetur adipiscing elit sed do eiusmod tempor
                              incididunt ut labore.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-108c6f33 e-con-full e-flex elementor-invisible e-con e-child"
                  data-id="108c6f33"
                  data-element_type="container"
                  data-settings='{"content_width":"full","background_background":"gradient","animation":"fadeIn","animation_delay":800}'
                >
                  <div
                    class="elementor-element elementor-element-1aa9d866 e-transform jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                    data-id="1aa9d866"
                    data-element_type="widget"
                    data-settings='{"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_icon_box.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_10_12_65c1cafff0db0"
                      >
                        <div class="jkit-icon-box-wrapper hover-from-left">
                          <div
                            class="icon-box icon-box-header elementor-animation-"
                          >
                            <div class="icon style-color">
                              <img
                                decoding="async"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon-ppc.png"
                                alt="PPC Advertising"
                              />
                            </div>
                          </div>
                          <div class="icon-box icon-box-body">
                            <h3 class="title">PPC Advertising</h3>
                            <p class="icon-box-description">
                              Consectetur adipiscing elit sed do eiusmod tempor
                              incididunt ut labore.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-d94c4c2 e-con-full e-flex elementor-invisible e-con e-child"
                  data-id="d94c4c2"
                  data-element_type="container"
                  data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":1000}'
                >
                  <div
                    class="elementor-element elementor-element-71851c22 e-transform jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                    data-id="71851c22"
                    data-element_type="widget"
                    data-settings='{"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_icon_box.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_10_13_65c1cafff2315"
                      >
                        <div class="jkit-icon-box-wrapper hover-from-left">
                          <div
                            class="icon-box icon-box-header elementor-animation-"
                          >
                            <div class="icon style-color">
                              <img
                                decoding="async"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon-content.png"
                                alt="Content Marketing"
                              />
                            </div>
                          </div>
                          <div class="icon-box icon-box-body">
                            <h3 class="title">Content Marketing</h3>
                            <p class="icon-box-description">
                              Consectetur adipiscing elit sed do eiusmod tempor
                              incididunt ut labore.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-1607827b e-flex e-con-boxed e-con e-child"
              data-id="1607827b"
              data-element_type="container"
              data-settings='{"content_width":"boxed"}'
            >
              <div class="e-con-inner">
                <div
                  class="elementor-element elementor-element-19a9bde3 e-con-full e-flex elementor-invisible e-con e-child"
                  data-id="19a9bde3"
                  data-element_type="container"
                  data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":1200}'
                >
                  <div
                    class="elementor-element elementor-element-37c50712 e-transform jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                    data-id="37c50712"
                    data-element_type="widget"
                    data-settings='{"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_icon_box.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_10_14_65c1cafff3d8e"
                      >
                        <div class="jkit-icon-box-wrapper hover-from-left">
                          <div
                            class="icon-box icon-box-header elementor-animation-"
                          >
                            <div class="icon style-color">
                              <img
                                decoding="async"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon-social-media.png"
                                alt="Social Media Marketing"
                              />
                            </div>
                          </div>
                          <div class="icon-box icon-box-body">
                            <h3 class="title">Social Media Marketing</h3>
                            <p class="icon-box-description">
                              Voluptatem accusantium doloremque laudantium totam
                              rem aperiam, eaque ipsa quae ab illo inventore
                              veritatis et quasi. Consectetur adipiscing elit
                              sed do eiusmod tempor.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-69882fd3 e-con-full e-flex elementor-invisible e-con e-child"
                  data-id="69882fd3"
                  data-element_type="container"
                  data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":1400}'
                >
                  <div
                    class="elementor-element elementor-element-47db5a7a e-transform jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                    data-id="47db5a7a"
                    data-element_type="widget"
                    data-settings='{"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_icon_box.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_10_15_65c1cb00010d4"
                      >
                        <div class="jkit-icon-box-wrapper hover-from-left">
                          <div
                            class="icon-box icon-box-header elementor-animation-"
                          >
                            <div class="icon style-color">
                              <img
                                decoding="async"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon-email.png"
                                alt="Email Marketing"
                              />
                            </div>
                          </div>
                          <div class="icon-box icon-box-body">
                            <h3 class="title">Email Marketing</h3>
                            <p class="icon-box-description">
                              Voluptatem accusantium doloremque laudantium totam
                              rem aperiam, eaque ipsa quae ab illo inventore
                              veritatis et quasi. Consectetur adipiscing elit
                              sed do eiusmod tempor.
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
      <div
        class="elementor-element elementor-element-61358826 e-con-full e-flex e-con e-parent"
        data-id="61358826"
        data-element_type="container"
        data-settings='{"background_background":"classic","content_width":"full"}'
        data-core-v316-plus="true"
      >
        <div
          class="elementor-element elementor-element-a65622e e-con-full e-flex e-con e-child"
          data-id="a65622e"
          data-element_type="container"
          data-settings='{"content_width":"full","background_background":"classic"}'
        >
          <div
            class="elementor-element elementor-element-3327834c elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-heading"
            data-id="3327834c"
            data-element_type="widget"
            data-settings='{"_animation":"fadeIn"}'
            data-widget_type="heading.default"
          >
            <div class="elementor-widget-container">
              <h5 class="elementor-heading-title elementor-size-default">
                Testimonials
              </h5>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-6ebd68da elementor-invisible elementor-widget elementor-widget-heading"
            data-id="6ebd68da"
            data-element_type="widget"
            data-settings='{"_animation":"fadeIn","_animation_delay":200}'
            data-widget_type="heading.default"
          >
            <div class="elementor-widget-container">
              <h2 class="elementor-heading-title elementor-size-default">
                Here's What Our Clients Say
              </h2>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-62ea9682 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
            data-id="62ea9682"
            data-element_type="widget"
            data-settings='{"_animation":"fadeIn","_animation_delay":400}'
            data-widget_type="text-editor.default"
          >
            <div class="elementor-widget-container">
              Consectetur adipiscing elit sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Utenim minim veniam quis nostrud
              exercitation.
            </div>
          </div>
          <div
            class="elementor-element elementor-element-3f21cd10 elementor-invisible elementor-widget elementor-widget-jkit_testimonials"
            data-id="3f21cd10"
            data-element_type="widget"
            data-settings='{"_animation":"fadeIn","_animation_delay":600}'
            data-widget_type="jkit_testimonials.default"
          >
            <div class="elementor-widget-container">
              <div
                class="jeg-elementor-kit jkit-testimonials arrow-top-right style-2 jeg_module_10_16_65c1cb0006d29"
                data-id="jeg_module_10_16_65c1cb0006d29"
                data-settings='{"autoplay":true,"autoplay_speed":3500,"autoplay_hover_pause":true,"show_navigation":false,"navigation_left":"&lt;svg aria-hidden=\"true\" class=\"e-font-icon-svg e-fas-angle-left\" viewBox=\"0 0 256 512\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"&gt;&lt;path d=\"M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z\"&gt;&lt;\/path&gt;&lt;\/svg&gt;","navigation_right":"&lt;svg aria-hidden=\"true\" class=\"e-font-icon-svg e-fas-angle-right\" viewBox=\"0 0 256 512\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"&gt;&lt;path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"&gt;&lt;\/path&gt;&lt;\/svg&gt;","show_dots":false,"arrow_position":"top","responsive":{"desktop":{"items":"4","margin":10,"breakpoint":1025},"tablet":{"items":2,"margin":10,"breakpoint":768},"mobile":{"items":1,"margin":10,"breakpoint":0}}}'
              >
                <div class="testimonials-list">
                  <div class="testimonials-track">
                    <div
                      class="testimonial-item elementor-repeater-item-cda75e6"
                    >
                      <div class="testimonial-box hover-from-left">
                        <div class="comment-content">
                          <p>
                            I can &#039;t believe the results we &#039;ve
                            achieved with Rankz. Their SEO strategies have
                            tripled our website traffic and brought in a flood
                            of new customers. We &#039;re thrilled with their
                            services!
                          </p>
                        </div>
                        <div class="comment-header">
                          <ul class="rating-stars">
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                          </ul>
                        </div>
                        <div class="comment-bio">
                          <div class="bio-details">
                            <div class="profile-image">
                              <img
                                decoding="async"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/review-4ZDFMBD-150x150.jpg"
                                alt="Cyrus Hoover"
                              />
                            </div>
                            <span class="profile-info">
                              <strong class="profile-name">Cyrus Hoover</strong>
                              <p class="profile-des">Businessman</p>
                            </span>
                          </div>
                          <div class="icon-content"></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="testimonial-item elementor-repeater-item-7231c22"
                    >
                      <div class="testimonial-box hover-from-left">
                        <div class="comment-content">
                          <p>
                            Our startup was struggling to make a mark in the
                            digital world until we partnered with Rankz. Their
                            guidance and marketing tactics have propelled us to
                            success. Highly recommended!
                          </p>
                        </div>
                        <div class="comment-header">
                          <ul class="rating-stars">
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                          </ul>
                        </div>
                        <div class="comment-bio">
                          <div class="bio-details">
                            <div class="profile-image">
                              <img
                                decoding="async"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/testimonial-CASCKD8-150x150.jpeg"
                                alt="Romeo Wiley"
                              />
                            </div>
                            <span class="profile-info">
                              <strong class="profile-name">Romeo Wiley</strong>
                              <p class="profile-des">Businessman</p>
                            </span>
                          </div>
                          <div class="icon-content"></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="testimonial-item elementor-repeater-item-b654f98"
                    >
                      <div class="testimonial-box hover-from-left">
                        <div class="comment-content">
                          <p>
                            Rankz has exceeded our expectations. Their social
                            media marketing campaigns have not only increased
                            our brand &#039;s visibility but also engaged our
                            audience like never before. Highly recommended!
                          </p>
                        </div>
                        <div class="comment-header">
                          <ul class="rating-stars">
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                          </ul>
                        </div>
                        <div class="comment-bio">
                          <div class="bio-details">
                            <div class="profile-image">
                              <img
                                decoding="async"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/review-EB45RVP-150x150.jpg"
                                alt="Alyssia Hayes"
                              />
                            </div>
                            <span class="profile-info">
                              <strong class="profile-name"
                                >Alyssia Hayes</strong
                              >
                              <p class="profile-des">Content Creator</p>
                            </span>
                          </div>
                          <div class="icon-content"></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="testimonial-item elementor-repeater-item-360c382"
                    >
                      <div class="testimonial-box hover-from-left">
                        <div class="comment-content">
                          <p>
                            The SEO and content marketing services from Rankz
                            have transformed my online coaching business. I
                            &#039;m reaching a wider audience and clients are
                            finding me more easily. Thank you!
                          </p>
                        </div>
                        <div class="comment-header">
                          <ul class="rating-stars">
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                          </ul>
                        </div>
                        <div class="comment-bio">
                          <div class="bio-details">
                            <div class="profile-image">
                              <img
                                decoding="async"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/review-B3X9P3L-150x150.jpg"
                                alt="Michael Rock"
                              />
                            </div>
                            <span class="profile-info">
                              <strong class="profile-name">Michael Rock</strong>
                              <p class="profile-des">Entrepreneur</p>
                            </span>
                          </div>
                          <div class="icon-content"></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="testimonial-item elementor-repeater-item-441bb58"
                    >
                      <div class="testimonial-box hover-from-left">
                        <div class="comment-content">
                          <p>
                            I was struggling to get my content noticed until I
                            found Rankz. They helped optimize my blog and now my
                            articles are ranking on the first page of Google. I
                            couldn &#039;t be happier! Highly recommended!
                          </p>
                        </div>
                        <div class="comment-header">
                          <ul class="rating-stars">
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                            <li>
                              <i
                                aria-hidden="true"
                                class="jki jki-star-solid"
                              ></i>
                            </li>
                          </ul>
                        </div>
                        <div class="comment-bio">
                          <div class="bio-details">
                            <div class="profile-image">
                              <img
                                decoding="async"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/testimonial-MKLVKTE-150x150.jpeg"
                                alt="Marley Reeves"
                              />
                            </div>
                            <span class="profile-info">
                              <strong class="profile-name"
                                >Marley Reeves</strong
                              >
                              <p class="profile-des">Businessman</p>
                            </span>
                          </div>
                          <div class="icon-content"></div>
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
        class="elementor-element elementor-element-54281c83 e-flex e-con-boxed e-con e-parent"
        data-id="54281c83"
        data-element_type="container"
        data-settings='{"content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-1acb3487 e-con-full e-flex e-con e-child"
            data-id="1acb3487"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-3da3ed27 elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-heading"
              data-id="3da3ed27"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn"}'
              data-widget_type="heading.default"
            >
              <div class="elementor-widget-container">
                <h5 class="elementor-heading-title elementor-size-default">
                  Our Blog
                </h5>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-ee5c61d elementor-invisible elementor-widget elementor-widget-heading"
              data-id="ee5c61d"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn","_animation_delay":200}'
              data-widget_type="heading.default"
            >
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">
                  Explore Our Blog and Articles
                </h2>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-5c6644d elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
              data-id="5c6644d"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn","_animation_delay":400}'
              data-widget_type="text-editor.default"
            >
              <div class="elementor-widget-container">
                Consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Utenim minim veniam quis nostrud
                exercitation.
              </div>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-2879d9fc e-con-full e-flex elementor-invisible e-con e-child"
            data-id="2879d9fc"
            data-element_type="container"
            data-settings='{"content_width":"full","animation":"fadeIn","animation_delay":600}'
          >
            <div
              class="elementor-element elementor-element-2f24dfc7 elementor-widget elementor-widget-jkit_post_block"
              data-id="2f24dfc7"
              data-element_type="widget"
              data-widget_type="jkit_post_block.default"
            >
              <div class="elementor-widget-container">
                <div
                  class="jeg-elementor-kit jkit-postblock postblock-type-2 jkit-pagination-disable post-element jeg_module_10_17_65c1cb000f820"
                  data-id="jeg_module_10_17_65c1cb000f820"
                  data-settings='{"post_type":"post","number_post":{"unit":"px","size":1,"sizes":[]},"post_offset":0,"unique_content":"disable","include_post":"","exclude_post":"","include_category":"","exclude_category":"","include_author":"","include_tag":"","exclude_tag":"","sort_by":"latest","pagination_mode":"disable","pagination_loadmore_text":"Load More","pagination_loading_text":"Loading...","pagination_number_post":{"unit":"px","size":3,"sizes":[]},"pagination_scroll_limit":0,"pagination_icon":{"value":"","library":""},"pagination_icon_position":"before","st_category_position":"center","sg_content_postblock_type":"type-2","sg_content_element_order":"meta,title,excerpt","sg_content_breakpoint":"tablet","sg_content_title_html_tag":"h3","sg_content_category_enable":"yes","sg_content_excerpt_enable":"yes","sg_content_excerpt_length":{"unit":"px","size":19,"sizes":[]},"sg_content_excerpt_more":"...","sg_content_readmore_enable":"","sg_content_readmore_icon":{"value":"fas fa-arrow-right","library":"fa-solid"},"sg_content_readmore_icon_position":"after","sg_content_readmore_text":"Read More","sg_content_comment_enable":"","sg_content_comment_icon":{"value":"fas fa-comment","library":"fa-solid"},"sg_content_comment_icon_position":"before","sg_content_meta_enable":"yes","sg_content_meta_author_enable":"","sg_content_meta_author_by_text":"by","sg_content_meta_author_icon":{"value":"fas fa-user","library":"fa-solid"},"sg_content_meta_author_icon_position":"before","sg_content_meta_date_enable":"","sg_content_meta_date_type":"published","sg_content_meta_date_format":"default","sg_content_meta_date_format_custom":"F j, Y","sg_content_meta_date_icon":{"value":"fas fa-clock","library":"fa-solid"},"sg_content_meta_date_icon_position":"before","sg_content_image_size_imagesize_size":"full","paged":1,"class":"jkit_post_block"}'
                >
                  <div class="jkit-block-container">
                    <div class="jkit-posts jkit-ajax-flag">
                      <article
                        class="jkit-post post-157 post type-post status-publish format-standard has-post-thumbnail hentry category-blog"
                      >
                        <div class="jkit-thumb">
                          <a
                            href="https://kitpapa.net/rankz/ppc-vs-seo-which-digital-advertising-strategy-is-right-for-you-copy-8/"
                          >
                            <div class="thumbnail-container">
                              <img
                                loading="lazy"
                                decoding="async"
                                width="2000"
                                height="1333"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/group-of-intercultural-colleagues-having-discussio-2023-11-27-05-19-20-utc.jpg"
                                class="attachment-full size-full wp-post-image"
                                alt=""
                                srcset="
                                  https://kitpapa.net/rankz/wp-content/uploads/2024/01/group-of-intercultural-colleagues-having-discussio-2023-11-27-05-19-20-utc.jpg           2000w,
                                  https://kitpapa.net/rankz/wp-content/uploads/2024/01/group-of-intercultural-colleagues-having-discussio-2023-11-27-05-19-20-utc-300x200.jpg    300w,
                                  https://kitpapa.net/rankz/wp-content/uploads/2024/01/group-of-intercultural-colleagues-having-discussio-2023-11-27-05-19-20-utc-1024x682.jpg  1024w,
                                  https://kitpapa.net/rankz/wp-content/uploads/2024/01/group-of-intercultural-colleagues-having-discussio-2023-11-27-05-19-20-utc-768x512.jpg    768w,
                                  https://kitpapa.net/rankz/wp-content/uploads/2024/01/group-of-intercultural-colleagues-having-discussio-2023-11-27-05-19-20-utc-1536x1024.jpg 1536w
                                "
                                sizes="(max-width: 2000px) 100vw, 2000px"
                              />
                            </div>
                          </a>
                        </div>
                        <div class="jkit-postblock-content">
                          <div class="jkit-post-category">
                            <span>
                              <a
                                href="https://kitpapa.net/rankz/category/blog/"
                                class="category-blog"
                                >Blog</a
                              >
                            </span>
                          </div>
                          <div class="jkit-post-meta"></div>
                          <h3 class="jkit-post-title">
                            <a
                              href="https://kitpapa.net/rankz/ppc-vs-seo-which-digital-advertising-strategy-is-right-for-you-copy-8/"
                              >The Ultimate Guide to SEO: Boosting Your
                              Website’s Visibility</a
                            >
                          </h3>
                          <div class="jkit-post-excerpt">
                            <p>
                              Marketing PPC vs. SEO: Which Digital Advertising
                              Strategy Is Right for You? Written by Kitpapa
                              Published on January 5,...
                            </p>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-3d62c45a e-con-full e-flex elementor-invisible e-con e-child"
            data-id="3d62c45a"
            data-element_type="container"
            data-settings='{"content_width":"full","animation":"fadeIn","animation_delay":800}'
          >
            <div
              class="elementor-element elementor-element-72d16c58 elementor-widget elementor-widget-jkit_post_block"
              data-id="72d16c58"
              data-element_type="widget"
              data-widget_type="jkit_post_block.default"
            >
              <div class="elementor-widget-container">
                <div
                  class="jeg-elementor-kit jkit-postblock postblock-type-1 jkit-pagination-disable post-element jeg_module_10_18_65c1cb00133ad"
                  data-id="jeg_module_10_18_65c1cb00133ad"
                  data-settings='{"post_type":"post","number_post":{"unit":"px","size":2,"sizes":[]},"post_offset":0,"unique_content":"disable","include_post":"","exclude_post":"","include_category":"","exclude_category":"","include_author":"","include_tag":"","exclude_tag":"","sort_by":"oldest","pagination_mode":"disable","pagination_loadmore_text":"Load More","pagination_loading_text":"Loading...","pagination_number_post":{"unit":"px","size":3,"sizes":[]},"pagination_scroll_limit":0,"pagination_icon":{"value":"","library":""},"pagination_icon_position":"before","st_category_position":"center","sg_content_postblock_type":"type-1","sg_content_element_order":"meta,title,excerpt","sg_content_breakpoint":"tablet","sg_content_title_html_tag":"h3","sg_content_category_enable":"yes","sg_content_excerpt_enable":"yes","sg_content_excerpt_length":{"unit":"px","size":8,"sizes":[]},"sg_content_excerpt_more":"...","sg_content_readmore_enable":"","sg_content_readmore_icon":{"value":"fas fa-arrow-right","library":"fa-solid"},"sg_content_readmore_icon_position":"after","sg_content_readmore_text":"Read More","sg_content_comment_enable":"","sg_content_comment_icon":{"value":"fas fa-comment","library":"fa-solid"},"sg_content_comment_icon_position":"before","sg_content_meta_enable":"yes","sg_content_meta_author_enable":"","sg_content_meta_author_by_text":"by","sg_content_meta_author_icon":{"value":"fas fa-user","library":"fa-solid"},"sg_content_meta_author_icon_position":"before","sg_content_meta_date_enable":"","sg_content_meta_date_type":"published","sg_content_meta_date_format":"default","sg_content_meta_date_format_custom":"F j, Y","sg_content_meta_date_icon":{"value":"fas fa-clock","library":"fa-solid"},"sg_content_meta_date_icon_position":"before","sg_content_image_size_imagesize_size":"full","paged":1,"class":"jkit_post_block"}'
                >
                  <div class="jkit-block-container">
                    <div class="jkit-posts jkit-ajax-flag">
                      <article
                        class="jkit-post post-150 post type-post status-publish format-standard has-post-thumbnail hentry category-blog"
                      >
                        <div class="jkit-thumb">
                          <a
                            href="https://kitpapa.net/rankz/ppc-vs-seo-which-digital-advertising-strategy-is-right-for-you-copy/"
                          >
                            <div class="thumbnail-container">
                              <img
                                loading="lazy"
                                decoding="async"
                                width="2000"
                                height="1333"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/staff-employee-sitting-in-work-place-2023-11-27-05-17-28-utc.jpg"
                                class="attachment-full size-full wp-post-image"
                                alt=""
                                srcset="
                                  https://kitpapa.net/rankz/wp-content/uploads/2024/01/staff-employee-sitting-in-work-place-2023-11-27-05-17-28-utc.jpg           2000w,
                                  https://kitpapa.net/rankz/wp-content/uploads/2024/01/staff-employee-sitting-in-work-place-2023-11-27-05-17-28-utc-300x200.jpg    300w,
                                  https://kitpapa.net/rankz/wp-content/uploads/2024/01/staff-employee-sitting-in-work-place-2023-11-27-05-17-28-utc-1024x682.jpg  1024w,
                                  https://kitpapa.net/rankz/wp-content/uploads/2024/01/staff-employee-sitting-in-work-place-2023-11-27-05-17-28-utc-768x512.jpg    768w,
                                  https://kitpapa.net/rankz/wp-content/uploads/2024/01/staff-employee-sitting-in-work-place-2023-11-27-05-17-28-utc-1536x1024.jpg 1536w
                                "
                                sizes="(max-width: 2000px) 100vw, 2000px"
                              />
                            </div>
                          </a>
                        </div>
                        <div class="jkit-postblock-content">
                          <div class="jkit-post-category">
                            <span>
                              <a
                                href="https://kitpapa.net/rankz/category/blog/"
                                class="category-blog"
                                >Blog</a
                              >
                            </span>
                          </div>
                          <div class="jkit-post-meta"></div>
                          <h3 class="jkit-post-title">
                            <a
                              href="https://kitpapa.net/rankz/ppc-vs-seo-which-digital-advertising-strategy-is-right-for-you-copy/"
                              >Social Media Marketing Strategies for Small
                              Businesses</a
                            >
                          </h3>
                          <div class="jkit-post-excerpt">
                            <p>
                              Marketing PPC vs. SEO: Which Digital Advertising
                              Strategy...
                            </p>
                          </div>
                        </div>
                      </article>
                      <article
                        class="jkit-post post-151 post type-post status-publish format-standard has-post-thumbnail hentry category-insight"
                      >
                        <div class="jkit-thumb">
                          <a
                            href="https://kitpapa.net/rankz/ppc-vs-seo-which-digital-advertising-strategy-is-right-for-you-copy-2/"
                          >
                            <div class="thumbnail-container">
                              <img
                                loading="lazy"
                                decoding="async"
                                width="2000"
                                height="1333"
                                src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/asian-businessman-leads-presentation-with-colleagu-2023-11-27-05-12-46-utc.jpg"
                                class="attachment-full size-full wp-post-image"
                                alt=""
                                srcset="
                                  https://kitpapa.net/rankz/wp-content/uploads/2024/01/asian-businessman-leads-presentation-with-colleagu-2023-11-27-05-12-46-utc.jpg           2000w,
                                  https://kitpapa.net/rankz/wp-content/uploads/2024/01/asian-businessman-leads-presentation-with-colleagu-2023-11-27-05-12-46-utc-300x200.jpg    300w,
                                  https://kitpapa.net/rankz/wp-content/uploads/2024/01/asian-businessman-leads-presentation-with-colleagu-2023-11-27-05-12-46-utc-1024x682.jpg  1024w,
                                  https://kitpapa.net/rankz/wp-content/uploads/2024/01/asian-businessman-leads-presentation-with-colleagu-2023-11-27-05-12-46-utc-768x512.jpg    768w,
                                  https://kitpapa.net/rankz/wp-content/uploads/2024/01/asian-businessman-leads-presentation-with-colleagu-2023-11-27-05-12-46-utc-1536x1024.jpg 1536w
                                "
                                sizes="(max-width: 2000px) 100vw, 2000px"
                              />
                            </div>
                          </a>
                        </div>
                        <div class="jkit-postblock-content">
                          <div class="jkit-post-category">
                            <span>
                              <a
                                href="https://kitpapa.net/rankz/category/insight/"
                                class="category-insight"
                                >Insight</a
                              >
                            </span>
                          </div>
                          <div class="jkit-post-meta"></div>
                          <h3 class="jkit-post-title">
                            <a
                              href="https://kitpapa.net/rankz/ppc-vs-seo-which-digital-advertising-strategy-is-right-for-you-copy-2/"
                              >PPC vs. SEO: Which Digital Advertising Strategy
                              Is Right for You?</a
                            >
                          </h3>
                          <div class="jkit-post-excerpt">
                            <p>
                              Marketing PPC vs. SEO: Which Digital Advertising
                              Strategy...
                            </p>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="elementor-element elementor-element-319e8329 e-flex e-con-boxed e-con e-parent"
        data-id="319e8329"
        data-element_type="container"
        data-settings='{"content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-18d29f16 e-flex e-con-boxed e-con e-child"
            data-id="18d29f16"
            data-element_type="container"
            data-settings='{"content_width":"boxed"}'
          >
            <div class="e-con-inner">
              <div
                class="elementor-element elementor-element-4701e8ce e-con-full e-flex e-con e-child"
                data-id="4701e8ce"
                data-element_type="container"
                data-settings='{"content_width":"full"}'
              >
                <div
                  class="elementor-element elementor-element-52523908 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                  data-id="52523908"
                  data-element_type="widget"
                  data-widget_type="heading.default"
                >
                  <div class="elementor-widget-container">
                    <h5 class="elementor-heading-title elementor-size-default">
                      Pricing
                    </h5>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-49c5ba8d elementor-invisible elementor-widget elementor-widget-heading"
                  data-id="49c5ba8d"
                  data-element_type="widget"
                  data-settings='{"_animation":"fadeIn"}'
                  data-widget_type="heading.default"
                >
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">
                      Choose The Right Plan For You
                    </h2>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-1c63fc9a e-flex e-con-boxed e-con e-child"
                data-id="1c63fc9a"
                data-element_type="container"
                data-settings='{"content_width":"boxed"}'
              >
                <div class="e-con-inner">
                  <div
                    class="elementor-element elementor-element-1eb6df68 elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="1eb6df68"
                    data-element_type="widget"
                    data-settings='{"_animation":"fadeIn","_animation_delay":200}'
                    data-widget_type="text-editor.default"
                  >
                    <div class="elementor-widget-container">
                      Adipiscing elit sed do eiusmod tempor incididunt ut labore
                      et dolore magna aliqua. Utenim ad minim veniam quis
                      nostrud exercitation ullamco laboris dolore magna aliqua.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-2983a0cb e-flex e-con-boxed e-con e-child"
            data-id="2983a0cb"
            data-element_type="container"
            data-settings='{"background_background":"classic","content_width":"boxed"}'
          >
            <div class="e-con-inner">
              <div
                class="elementor-element elementor-element-3ebc8d34 e-flex e-con-boxed elementor-invisible e-con e-child"
                data-id="3ebc8d34"
                data-element_type="container"
                data-settings='{"animation":"fadeIn","animation_delay":400,"background_background":"classic","content_width":"boxed"}'
              >
                <div class="e-con-inner">
                  <div
                    class="elementor-element elementor-element-67ff4f8d elementor-widget elementor-widget-jkit_heading"
                    data-id="67ff4f8d"
                    data-element_type="widget"
                    data-widget_type="jkit_heading.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-heading align-center align-tablet-center align-mobile-center jeg_module_10_19_65c1cb001d05d"
                      >
                        <div class="heading-section-title display-inline-block">
                          <span class="heading-title">
                            $49,9
                            <span class="style-color">
                              <span>/month</span>
                            </span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-728dd8e0 elementor-widget elementor-widget-heading"
                    data-id="728dd8e0"
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
                    class="elementor-element elementor-element-3425ecf2 elementor-widget__width-auto e-transform elementor-widget elementor-widget-jkit_button"
                    data-id="3425ecf2"
                    data-element_type="widget"
                    data-settings='{"_transform_translateX_effect_hover":{"unit":"px","size":10,"sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_button.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-button icon-position-after jeg_module_10_20_65c1cb001dd18"
                      >
                        <a href="#" class="jkit-button-wrapper">
                          Get Started<i
                            aria-hidden="true"
                            class="jki jki-right-arrow-light"
                          ></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-2de48e40 elementor-widget elementor-widget-spacer"
                    data-id="2de48e40"
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
                    class="elementor-element elementor-element-2db91aec elementor-align-left elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                    data-id="2db91aec"
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
                class="elementor-element elementor-element-6a557a08 e-flex e-con-boxed elementor-invisible e-con e-child"
                data-id="6a557a08"
                data-element_type="container"
                data-settings='{"animation":"fadeIn","animation_delay":600,"background_background":"classic","content_width":"boxed"}'
              >
                <div class="e-con-inner">
                  <div
                    class="elementor-element elementor-element-7a92e48f elementor-widget elementor-widget-jkit_heading"
                    data-id="7a92e48f"
                    data-element_type="widget"
                    data-widget_type="jkit_heading.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-heading align-center align-tablet-center align-mobile-center jeg_module_10_21_65c1cb001fb97"
                      >
                        <div class="heading-section-title display-inline-block">
                          <span class="heading-title">
                            $89,9
                            <span class="style-color">
                              <span>/month</span>
                            </span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-71a3681a elementor-widget elementor-widget-heading"
                    data-id="71a3681a"
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
                    class="elementor-element elementor-element-2e474e3 elementor-widget__width-auto e-transform elementor-widget elementor-widget-jkit_button"
                    data-id="2e474e3"
                    data-element_type="widget"
                    data-settings='{"_transform_translateX_effect_hover":{"unit":"px","size":10,"sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_button.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-button icon-position-after jeg_module_10_22_65c1cb002086e"
                      >
                        <a href="#" class="jkit-button-wrapper">
                          Get Started<i
                            aria-hidden="true"
                            class="jki jki-right-arrow-light"
                          ></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-3ee57062 elementor-widget elementor-widget-spacer"
                    data-id="3ee57062"
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
                    class="elementor-element elementor-element-74ad0dd1 elementor-align-left elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                    data-id="74ad0dd1"
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
              <div
                class="elementor-element elementor-element-75e2e5f3 e-flex e-con-boxed elementor-invisible e-con e-child"
                data-id="75e2e5f3"
                data-element_type="container"
                data-settings='{"animation":"fadeIn","animation_delay":800,"background_background":"gradient","content_width":"boxed"}'
              >
                <div class="e-con-inner">
                  <div
                    class="elementor-element elementor-element-18adc833 e-transform jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                    data-id="18adc833"
                    data-element_type="widget"
                    data-settings='{"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_icon_box.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_10_23_65c1cb0024ccd"
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
                    class="elementor-element elementor-element-1c8675f5 elementor-widget elementor-widget-jkit_heading"
                    data-id="1c8675f5"
                    data-element_type="widget"
                    data-widget_type="jkit_heading.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-heading align-center align-tablet-center align-mobile-center jeg_module_10_24_65c1cb0025ad2"
                      >
                        <div class="heading-section-title display-inline-block">
                          <span class="heading-title">
                            $149,9
                            <span class="style-color">
                              <span>/month</span>
                            </span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-34cfe380 elementor-widget elementor-widget-heading"
                    data-id="34cfe380"
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
                    class="elementor-element elementor-element-53a8ab89 elementor-widget__width-auto e-transform elementor-widget elementor-widget-jkit_button"
                    data-id="53a8ab89"
                    data-element_type="widget"
                    data-settings='{"_transform_translateX_effect_hover":{"unit":"px","size":10,"sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_button.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-button icon-position-after jeg_module_10_25_65c1cb00268aa"
                      >
                        <a href="#" class="jkit-button-wrapper">
                          Get Started<i
                            aria-hidden="true"
                            class="jki jki-right-arrow-light"
                          ></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-49cb1a57 elementor-widget elementor-widget-spacer"
                    data-id="49cb1a57"
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
                    class="elementor-element elementor-element-798173ed elementor-align-left elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                    data-id="798173ed"
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
            </div>
          </div>
        </div>
      </div>
      <div
        class="elementor-element elementor-element-34f0346 e-flex e-con-boxed e-con e-parent"
        data-id="34f0346"
        data-element_type="container"
        data-settings='{"content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-3f3f2426 e-con-full e-flex e-con e-child"
            data-id="3f3f2426"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-278ceca7 elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-heading"
              data-id="278ceca7"
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
              class="elementor-element elementor-element-39d8b8a8 elementor-invisible elementor-widget elementor-widget-heading"
              data-id="39d8b8a8"
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
            class="elementor-element elementor-element-264a5498 e-con-full e-flex e-con e-child"
            data-id="264a5498"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-74dff4d7 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
              data-id="74dff4d7"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn","_animation_delay":400}'
              data-widget_type="text-editor.default"
            >
              <div class="elementor-widget-container">
                Consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Utenim minim veniam quis nostrud
                exercitation.
              </div>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-48754310 e-con-full e-flex e-con e-child"
            data-id="48754310"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-42c34e71 e-con-full e-flex elementor-invisible e-con e-child"
              data-id="42c34e71"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":600}'
            >
              <div
                class="elementor-element elementor-element-5f7cba5f elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                data-id="5f7cba5f"
                data-element_type="widget"
                data-widget_type="jkit_heading.default"
              >
                <div class="elementor-widget-container">
                  <div
                    class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_10_26_65c1cb002bd1b"
                  >
                    <div class="heading-section-title display-inline-block">
                      <h6 class="heading-title">
                        Can I Upgrade my Subscription?
                      </h6>
                    </div>
                    <div class="heading-section-description">
                      Voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae ab illo inventore veritatis et
                      quasi.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-6568d4a8 e-con-full e-flex elementor-invisible e-con e-child"
              data-id="6568d4a8"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":800}'
            >
              <div
                class="elementor-element elementor-element-25c3d59d elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                data-id="25c3d59d"
                data-element_type="widget"
                data-widget_type="jkit_heading.default"
              >
                <div class="elementor-widget-container">
                  <div
                    class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_10_27_65c1cb002d189"
                  >
                    <div class="heading-section-title display-inline-block">
                      <h6 class="heading-title">
                        First-Page Google Guarantee?
                      </h6>
                    </div>
                    <div class="heading-section-description">
                      Voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae ab illo inventore veritatis et
                      quasi.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-172e4b10 e-con-full e-flex elementor-invisible e-con e-child"
              data-id="172e4b10"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":1000}'
            >
              <div
                class="elementor-element elementor-element-e25f551 elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                data-id="e25f551"
                data-element_type="widget"
                data-widget_type="jkit_heading.default"
              >
                <div class="elementor-widget-container">
                  <div
                    class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_10_28_65c1cb002e62b"
                  >
                    <div class="heading-section-title display-inline-block">
                      <h6 class="heading-title">
                        Customized Marketing Strategies?
                      </h6>
                    </div>
                    <div class="heading-section-description">
                      Voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae ab illo inventore veritatis et
                      quasi.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-4dfd0ec3 e-con-full e-flex e-con e-child"
            data-id="4dfd0ec3"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-2c4cefbd e-con-full e-flex elementor-invisible e-con e-child"
              data-id="2c4cefbd"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":1200}'
            >
              <div
                class="elementor-element elementor-element-7f450347 elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                data-id="7f450347"
                data-element_type="widget"
                data-widget_type="jkit_heading.default"
              >
                <div class="elementor-widget-container">
                  <div
                    class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_10_29_65c1cb002ff8b"
                  >
                    <div class="heading-section-title display-inline-block">
                      <h6 class="heading-title">
                        Do You Offer Local SEO Services?
                      </h6>
                    </div>
                    <div class="heading-section-description">
                      Voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae ab illo inventore veritatis et
                      quasi.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-2b1eec32 e-con-full e-flex elementor-invisible e-con e-child"
              data-id="2b1eec32"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":1400}'
            >
              <div
                class="elementor-element elementor-element-4dde7366 elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                data-id="4dde7366"
                data-element_type="widget"
                data-widget_type="jkit_heading.default"
              >
                <div class="elementor-widget-container">
                  <div
                    class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_10_30_65c1cb0031291"
                  >
                    <div class="heading-section-title display-inline-block">
                      <h6 class="heading-title">
                        Is Blogging Essential for SEO Success?
                      </h6>
                    </div>
                    <div class="heading-section-description">
                      Voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae ab illo inventore veritatis et
                      quasi.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-1e92ed5a e-con-full e-flex elementor-invisible e-con e-child"
              data-id="1e92ed5a"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":1600}'
            >
              <div
                class="elementor-element elementor-element-603272ec elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                data-id="603272ec"
                data-element_type="widget"
                data-widget_type="jkit_heading.default"
              >
                <div class="elementor-widget-container">
                  <div
                    class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_10_31_65c1cb00325d3"
                  >
                    <div class="heading-section-title display-inline-block">
                      <h6 class="heading-title">
                        What Is the ROI of Digital Marketing?
                      </h6>
                    </div>
                    <div class="heading-section-description">
                      Voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae ab illo inventore veritatis et
                      quasi.
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
      class="ekit-template-content-markup ekit-template-content-footer ekit-template-content-theme-support"
    >
      <div
        data-elementor-type="wp-post"
        data-elementor-id="129"
        class="elementor elementor-129"
      >
        <div
          class="elementor-element elementor-element-4d8c71a6 e-flex e-con-boxed e-con e-parent"
          data-id="4d8c71a6"
          data-element_type="container"
          data-settings='{"background_background":"classic","content_width":"boxed"}'
          data-core-v316-plus="true"
        >
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
      id="tiny-slider-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/assets/js/tiny-slider/tiny-slider.css?ver=2.9.3"
      media="all"
    />
    <link
      rel="stylesheet"
      id="sweetalert2-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/assets/js/sweetalert2/sweetalert2.min.css?ver=11.6.16"
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
          id: 10,
          title:
            "Rankz%20%E2%80%93%20SEO%20and%20Digital%20Marketing%20Agency%20Elementor%20Template%20Kit",
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
      src="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/assets/js/elements/client-logo.js?ver=2.6.2"
      id="jkit-element-clientlogo-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/assets/js/tiny-slider/tiny-slider.js?ver=2.9.3"
      id="tiny-slider-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/assets/js/elements/video-button.js?ver=2.6.2"
      id="jkit-element-videobutton-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/assets/js/sweetalert2/sweetalert2.min.js?ver=11.6.16"
      id="sweetalert2-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/assets/js/elements/testimonials.js?ver=2.6.2"
      id="jkit-element-testimonials-js"
    ></script>
    <script id="jkit-element-pagination-js-extra">
      var jkit_element_pagination_option = {
        element_prefix: "jkit_element_ajax_",
      };
    </script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/assets/js/elements/post-pagination.js?ver=2.6.2"
      id="jkit-element-pagination-js"
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