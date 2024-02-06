<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About &#8211;Devsite Studio</title>
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
      id="elementor-post-12-css"
      href="https://kitpapa.net/rankz/wp-content/uploads/elementor/css/post-12.css?ver=1704892527"
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
      href="https://kitpapa.net/rankz/wp-json/wp/v2/pages/12"
    />
    <link
      rel="EditURI"
      type="application/rsd+xml"
      title="RSD"
      href="https://kitpapa.net/rankz/xmlrpc.php?rsd"
    />
    <meta name="generator" content="WordPress 6.4.2" />
    <link rel="canonical" href="https://kitpapa.net/rankz/about/" />
    <link rel="shortlink" href="https://kitpapa.net/rankz/?p=12" />
    <link
      rel="alternate"
      type="application/json+oembed"
      href="https://kitpapa.net/rankz/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkitpapa.net%2Frankz%2Fabout%2F"
    />
    <link
      rel="alternate"
      type="text/xml+oembed"
      href="https://kitpapa.net/rankz/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkitpapa.net%2Frankz%2Fabout%2F&#038;format=xml"
    />
    <meta
      name="generator"
      content="Elementor 3.18.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-swap"
    />
  </head>
  <body
    class="page-template page-template-elementor_header_footer page page-id-12 jkit-color-scheme elementor-default elementor-template-full-width elementor-kit-34 elementor-page elementor-page-12"
  >
<?php include './header.php' ?>
    <div
      data-elementor-type="wp-page"
      data-elementor-id="12"
      class="elementor elementor-12"
    >
      <div
        class="elementor-element elementor-element-49e457eb e-flex e-con-boxed e-con e-parent"
        data-id="49e457eb"
        data-element_type="container"
        data-settings='{"background_background":"gradient","content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-40b2d87a elementor-widget elementor-widget-heading"
            data-id="40b2d87a"
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
                Elevate Your Online Presence with Our Expert SEO & Digital
                Strategies
              </h1>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-4d82326d elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
            data-id="4d82326d"
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
              Consectetur adipiscing elit sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Utenim minim veniam quis nostrud
              exercitation.
            </div>
          </div>
          <div
            class="elementor-element elementor-element-7186810e e-flex e-con-boxed e-con e-child"
            data-id="7186810e"
            data-element_type="container"
            data-settings='{"content_width":"boxed"}'
          >
            <div class="e-con-inner">
              <div
                class="elementor-element elementor-element-7fa6da18 elementor-widget__width-auto elementor-widget elementor-widget-jkit_video_button"
                data-id="7fa6da18"
                data-element_type="widget"
                data-widget_type="jkit_video_button.default"
              >
                <div class="elementor-widget-container">
                  <div
                    class="jeg-elementor-kit jkit-video-button jeg_module_12_2_65c1cb2b0ec66"
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
                class="elementor-element elementor-element-2b5a51aa elementor-align-left elementor-widget__width-auto elementor-widget elementor-widget-button"
                data-id="2b5a51aa"
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
                        <span class="elementor-button-text">Watch intro</span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="elementor-element elementor-element-24a49cfb e-flex e-con-boxed e-con e-parent"
        data-id="24a49cfb"
        data-element_type="container"
        data-settings='{"content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-2df535f2 e-con-full e-flex e-con e-child"
            data-id="2df535f2"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-724a416f e-con-full e-flex e-con e-child"
              data-id="724a416f"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic"}'
            >
              <div
                class="elementor-element elementor-element-5f997d7d elementor-invisible elementor-widget elementor-widget-image"
                data-id="5f997d7d"
                data-element_type="widget"
                data-settings='{"_animation":"fadeIn"}'
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
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
            class="elementor-element elementor-element-301018af e-con-full e-flex e-con e-child"
            data-id="301018af"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-46284fcd e-transform jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
              data-id="46284fcd"
              data-element_type="widget"
              data-settings='{"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
              data-widget_type="jkit_icon_box.default"
            >
              <div class="elementor-widget-container">
                <div
                  class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_12_3_65c1cb2b16314"
                >
                  <div class="jkit-icon-box-wrapper hover-from-left">
                    <div class="icon-box icon-box-header elementor-animation-">
                      <div class="icon style-color">
                        <img
                          decoding="async"
                          src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon-email.png"
                          alt="Our Mission"
                        />
                      </div>
                    </div>
                    <div class="icon-box icon-box-body">
                      <h3 class="title">Our Mission</h3>
                      <p class="icon-box-description">
                        Consectetur adipiscing elit sed do eiusmod tempor
                        incididunt ut labore dolore magna.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-2cd57bc5 e-transform jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
              data-id="2cd57bc5"
              data-element_type="widget"
              data-settings='{"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
              data-widget_type="jkit_icon_box.default"
            >
              <div class="elementor-widget-container">
                <div
                  class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_12_4_65c1cb2b17854"
                >
                  <div class="jkit-icon-box-wrapper hover-from-left">
                    <div class="icon-box icon-box-header elementor-animation-">
                      <div class="icon style-color">
                        <img
                          decoding="async"
                          src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon-growth.png"
                          alt="Our Vision"
                        />
                      </div>
                    </div>
                    <div class="icon-box icon-box-body">
                      <h3 class="title">Our Vision</h3>
                      <p class="icon-box-description">
                        Consectetur adipiscing elit sed do eiusmod tempor
                        incididunt ut labore dolore magna.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-71275e95 e-transform jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
              data-id="71275e95"
              data-element_type="widget"
              data-settings='{"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
              data-widget_type="jkit_icon_box.default"
            >
              <div class="elementor-widget-container">
                <div
                  class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_12_5_65c1cb2b18d8a"
                >
                  <div class="jkit-icon-box-wrapper hover-from-left">
                    <div class="icon-box icon-box-header elementor-animation-">
                      <div class="icon style-color">
                        <img
                          decoding="async"
                          src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/icon-2.png"
                          alt="Our Values"
                        />
                      </div>
                    </div>
                    <div class="icon-box icon-box-body">
                      <h3 class="title">Our Values</h3>
                      <p class="icon-box-description">
                        Consectetur adipiscing elit sed do eiusmod tempor
                        incididunt ut labore dolore magna.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-6b984a06 e-flex e-con-boxed e-con e-child"
              data-id="6b984a06"
              data-element_type="container"
              data-settings='{"content_width":"boxed"}'
            >
              <div class="e-con-inner">
                <div
                  class="elementor-element elementor-element-417e2401 e-con-full e-flex elementor-invisible e-con e-child"
                  data-id="417e2401"
                  data-element_type="container"
                  data-settings='{"content_width":"full","animation":"fadeIn","animation_delay":1000}'
                >
                  <div
                    class="elementor-element elementor-element-295d2243 elementor-widget__width-auto e-transform elementor-widget elementor-widget-jkit_button"
                    data-id="295d2243"
                    data-element_type="widget"
                    data-settings='{"_transform_translateX_effect_hover":{"unit":"px","size":10,"sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="jkit_button.default"
                  >
                    <div class="elementor-widget-container">
                      <div
                        class="jeg-elementor-kit jkit-button icon-position-after jeg_module_12_6_65c1cb2b19f5c"
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
                  class="elementor-element elementor-element-60f28c65 e-con-full elementor-hidden-mobile e-flex elementor-invisible e-con e-child"
                  data-id="60f28c65"
                  data-element_type="container"
                  data-settings='{"content_width":"full","animation":"fadeIn","animation_delay":1200}'
                >
                  <div
                    class="elementor-element elementor-element-44fa9aa0 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                    data-id="44fa9aa0"
                    data-element_type="widget"
                    data-widget_type="image-box.default"
                  >
                    <div class="elementor-widget-container">
                      <style>
                        /*! elementor - v3.18.0 - 20-12-2023 */
                        .elementor-widget-image-box
                          .elementor-image-box-content {
                          width: 100%;
                        }

                        @media (min-width: 768px) {
                          .elementor-widget-image-box.elementor-position-left
                            .elementor-image-box-wrapper,
                          .elementor-widget-image-box.elementor-position-right
                            .elementor-image-box-wrapper {
                            display: flex;
                          }

                          .elementor-widget-image-box.elementor-position-right
                            .elementor-image-box-wrapper {
                            text-align: right;
                            flex-direction: row-reverse;
                          }

                          .elementor-widget-image-box.elementor-position-left
                            .elementor-image-box-wrapper {
                            text-align: left;
                            flex-direction: row;
                          }

                          .elementor-widget-image-box.elementor-position-top
                            .elementor-image-box-img {
                            margin: auto;
                          }

                          .elementor-widget-image-box.elementor-vertical-align-top
                            .elementor-image-box-wrapper {
                            align-items: flex-start;
                          }

                          .elementor-widget-image-box.elementor-vertical-align-middle
                            .elementor-image-box-wrapper {
                            align-items: center;
                          }

                          .elementor-widget-image-box.elementor-vertical-align-bottom
                            .elementor-image-box-wrapper {
                            align-items: flex-end;
                          }
                        }

                        @media (max-width: 767px) {
                          .elementor-widget-image-box .elementor-image-box-img {
                            margin-left: auto !important;
                            margin-right: auto !important;
                            margin-bottom: 15px;
                          }
                        }

                        .elementor-widget-image-box .elementor-image-box-img {
                          display: inline-block;
                        }

                        .elementor-widget-image-box
                          .elementor-image-box-title
                          a {
                          color: inherit;
                        }

                        .elementor-widget-image-box
                          .elementor-image-box-wrapper {
                          text-align: center;
                        }

                        .elementor-widget-image-box
                          .elementor-image-box-description {
                          margin: 0;
                        }
                      </style>
                      <div class="elementor-image-box-wrapper">
                        <figure class="elementor-image-box-img">
                          <img
                            decoding="async"
                            width="160"
                            height="160"
                            src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/testimonial-M6NJPEF.png"
                            class="attachment-full size-full wp-image-80"
                            alt=""
                            srcset="
                              https://kitpapa.net/rankz/wp-content/uploads/2024/01/testimonial-M6NJPEF.png         160w,
                              https://kitpapa.net/rankz/wp-content/uploads/2024/01/testimonial-M6NJPEF-150x150.png 150w
                            "
                            sizes="(max-width: 160px) 100vw, 160px"
                          />
                        </figure>
                        <div class="elementor-image-box-content">
                          <h3 class="elementor-image-box-title">
                            Cassius Greer
                          </h3>
                          <p class="elementor-image-box-description">
                            CEO Rankz
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
      <div
        class="elementor-element elementor-element-2fb4a4a7 e-flex e-con-boxed e-con e-parent"
        data-id="2fb4a4a7"
        data-element_type="container"
        data-settings='{"background_background":"classic","content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-749aaca e-flex e-con-boxed e-con e-child"
            data-id="749aaca"
            data-element_type="container"
            data-settings='{"background_background":"classic","content_width":"boxed"}'
          >
            <div class="e-con-inner">
              <div
                class="elementor-element elementor-element-5de31f02 elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-heading"
                data-id="5de31f02"
                data-element_type="widget"
                data-settings='{"_animation":"fadeIn"}'
                data-widget_type="heading.default"
              >
                <div class="elementor-widget-container">
                  <h5 class="elementor-heading-title elementor-size-default">
                    Our Story
                  </h5>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-41a48362 elementor-invisible elementor-widget elementor-widget-heading"
                data-id="41a48362"
                data-element_type="widget"
                data-settings='{"_animation":"fadeIn","_animation_delay":200}'
                data-widget_type="heading.default"
              >
                <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default">
                    A Decade and a Half of SEO Excellence
                  </h2>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-3820f19d elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
                data-id="3820f19d"
                data-element_type="widget"
                data-settings='{"_animation":"fadeIn","_animation_delay":400}'
                data-widget_type="text-editor.default"
              >
                <div class="elementor-widget-container">
                  Consectetur adipiscing elit sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua. Utenim minim veniam quis
                  nostrud exercitation.
                </div>
              </div>
              <div
                class="elementor-element elementor-element-1aca84de e-flex e-con-boxed e-con e-child"
                data-id="1aca84de"
                data-element_type="container"
                data-settings='{"content_width":"boxed"}'
              >
                <div class="e-con-inner">
                  <div
                    class="elementor-element elementor-element-6f745805 e-con-full e-transform e-flex elementor-invisible e-con e-child"
                    data-id="6f745805"
                    data-element_type="container"
                    data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":600,"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                  >
                    <div
                      class="elementor-element elementor-element-41d70136 elementor-widget__width-auto elementor-widget elementor-widget-jkit_fun_fact"
                      data-id="41d70136"
                      data-element_type="widget"
                      data-widget_type="jkit_fun_fact.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="jeg-elementor-kit jkit-fun-fact align-center hover-from-left elementor-animation- jeg_module_12_7_65c1cb2b213f9"
                        >
                          <div class="fun-fact-inner">
                            <div class="content">
                              <div class="number-wrapper">
                                <span class="prefix"></span>
                                <span
                                  class="number"
                                  data-value="100"
                                  data-animation-duration="3500"
                                  >0</span
                                >
                                <span class="suffix"></span>
                                <sup class="super">+</sup>
                              </div>
                              <span class="title">Trusted Partner</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-7bea6bb6 e-con-full e-transform e-flex elementor-invisible e-con e-child"
                    data-id="7bea6bb6"
                    data-element_type="container"
                    data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":800,"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                  >
                    <div
                      class="elementor-element elementor-element-3764129 elementor-widget__width-auto elementor-widget elementor-widget-jkit_fun_fact"
                      data-id="3764129"
                      data-element_type="widget"
                      data-widget_type="jkit_fun_fact.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="jeg-elementor-kit jkit-fun-fact align-center hover-from-left elementor-animation- jeg_module_12_8_65c1cb2b228bc"
                        >
                          <div class="fun-fact-inner">
                            <div class="content">
                              <div class="number-wrapper">
                                <span class="prefix"></span>
                                <span
                                  class="number"
                                  data-value="99"
                                  data-animation-duration="3500"
                                  >0</span
                                >
                                <span class="suffix"></span>
                                <sup class="super">%</sup>
                              </div>
                              <span class="title">Project Completed</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-dbf3a94 e-con-full e-transform e-flex elementor-invisible e-con e-child"
                    data-id="dbf3a94"
                    data-element_type="container"
                    data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":1000,"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                  >
                    <div
                      class="elementor-element elementor-element-5e483514 elementor-widget__width-auto elementor-widget elementor-widget-jkit_fun_fact"
                      data-id="5e483514"
                      data-element_type="widget"
                      data-widget_type="jkit_fun_fact.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="jeg-elementor-kit jkit-fun-fact align-center hover-from-left elementor-animation- jeg_module_12_9_65c1cb2b23b13"
                        >
                          <div class="fun-fact-inner">
                            <div class="content">
                              <div class="number-wrapper">
                                <span class="prefix"></span>
                                <span
                                  class="number"
                                  data-value="15"
                                  data-animation-duration="3500"
                                  >0</span
                                >
                                <span class="suffix"></span>
                                <sup class="super">+</sup>
                              </div>
                              <span class="title">Years Of Experience</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-5df6454a e-con-full e-transform e-flex elementor-invisible e-con e-child"
                    data-id="5df6454a"
                    data-element_type="container"
                    data-settings='{"content_width":"full","background_background":"classic","animation":"fadeIn","animation_delay":1200,"_transform_translateY_effect_hover":{"unit":"px","size":-16,"sizes":[]},"_transform_translateX_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                  >
                    <div
                      class="elementor-element elementor-element-e62d805 elementor-widget__width-auto elementor-widget elementor-widget-jkit_fun_fact"
                      data-id="e62d805"
                      data-element_type="widget"
                      data-widget_type="jkit_fun_fact.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="jeg-elementor-kit jkit-fun-fact align-center hover-from-left elementor-animation- jeg_module_12_10_65c1cb2b24d7b"
                        >
                          <div class="fun-fact-inner">
                            <div class="content">
                              <div class="number-wrapper">
                                <span class="prefix"></span>
                                <span
                                  class="number"
                                  data-value="10"
                                  data-animation-duration="3500"
                                  >0</span
                                >
                                <span class="suffix"></span>
                                <sup class="super">K</sup>
                              </div>
                              <span class="title">Satisfied Clients</span>
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
        class="elementor-element elementor-element-4852e2ea e-flex e-con-boxed e-con e-parent"
        data-id="4852e2ea"
        data-element_type="container"
        data-settings='{"content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-886fc33 e-con-full e-flex e-con e-child"
            data-id="886fc33"
            data-element_type="container"
            data-settings='{"content_width":"full"}'
          >
            <div
              class="elementor-element elementor-element-2e56d5e0 elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-heading"
              data-id="2e56d5e0"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn"}'
              data-widget_type="heading.default"
            >
              <div class="elementor-widget-container">
                <h5 class="elementor-heading-title elementor-size-default">
                  Our Team
                </h5>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-182c1ab4 elementor-invisible elementor-widget elementor-widget-heading"
              data-id="182c1ab4"
              data-element_type="widget"
              data-settings='{"_animation":"fadeIn","_animation_delay":200}'
              data-widget_type="heading.default"
            >
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">
                  Meet Poeple Behind Rankz
                </h2>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-c03d449 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
              data-id="c03d449"
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
            class="elementor-element elementor-element-2da5efc2 e-flex e-con-boxed e-con e-child"
            data-id="2da5efc2"
            data-element_type="container"
            data-settings='{"content_width":"boxed"}'
          >
            <div class="e-con-inner">
              <div
                class="elementor-element elementor-element-300b36e9 e-con-full e-flex elementor-invisible e-con e-child"
                data-id="300b36e9"
                data-element_type="container"
                data-settings='{"content_width":"full","animation":"fadeIn","animation_delay":600}'
              >
                <div
                  class="elementor-element elementor-element-7758bb87 e-flex e-con-boxed e-con e-child"
                  data-id="7758bb87"
                  data-element_type="container"
                  data-settings='{"content_width":"boxed"}'
                >
                  <div class="e-con-inner">
                    <div
                      class="elementor-element elementor-element-364a97e4 elementor-widget elementor-widget-jkit_heading"
                      data-id="364a97e4"
                      data-element_type="widget"
                      data-widget_type="jkit_heading.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile-center jeg_module_12_11_65c1cb2b2b8f5"
                        >
                          <div
                            class="heading-section-title display-inline-block"
                          >
                            <h3 class="heading-title">Andre Sweeney</h3>
                          </div>
                          <h3 class="heading-section-subtitle style-color">
                            Digital Marketer
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-641cb7f7 elementor-shape-circle e-grid-align-left elementor-grid-0 elementor-widget elementor-widget-social-icons"
                      data-id="641cb7f7"
                      data-element_type="widget"
                      data-widget_type="social-icons.default"
                    >
                      <div class="elementor-widget-container">
                        <style>
                          /*! elementor - v3.18.0 - 20-12-2023 */
                          .elementor-widget-social-icons.elementor-grid-0
                            .elementor-widget-container,
                          .elementor-widget-social-icons.elementor-grid-mobile-0
                            .elementor-widget-container,
                          .elementor-widget-social-icons.elementor-grid-tablet-0
                            .elementor-widget-container {
                            line-height: 1;
                            font-size: 0;
                          }

                          .elementor-widget-social-icons:not(
                              .elementor-grid-0
                            ):not(.elementor-grid-tablet-0):not(
                              .elementor-grid-mobile-0
                            )
                            .elementor-grid {
                            display: inline-grid;
                          }

                          .elementor-widget-social-icons .elementor-grid {
                            grid-column-gap: var(--grid-column-gap, 5px);
                            grid-row-gap: var(--grid-row-gap, 5px);
                            grid-template-columns: var(--grid-template-columns);
                            justify-content: var(--justify-content, center);
                            justify-items: var(--justify-content, center);
                          }

                          .elementor-icon.elementor-social-icon {
                            font-size: var(--icon-size, 25px);
                            line-height: var(--icon-size, 25px);
                            width: calc(
                              var(--icon-size, 25px) + 2 *
                                var(--icon-padding, 0.5em)
                            );
                            height: calc(
                              var(--icon-size, 25px) + 2 *
                                var(--icon-padding, 0.5em)
                            );
                          }

                          .elementor-social-icon {
                            --e-social-icon-icon-color: #fff;
                            display: inline-flex;
                            background-color: #69727d;
                            align-items: center;
                            justify-content: center;
                            text-align: center;
                            cursor: pointer;
                          }

                          .elementor-social-icon i {
                            color: var(--e-social-icon-icon-color);
                          }

                          .elementor-social-icon svg {
                            fill: var(--e-social-icon-icon-color);
                          }

                          .elementor-social-icon:last-child {
                            margin: 0;
                          }

                          .elementor-social-icon:hover {
                            opacity: 0.9;
                            color: #fff;
                          }

                          .elementor-social-icon-android {
                            background-color: #a4c639;
                          }

                          .elementor-social-icon-apple {
                            background-color: #999;
                          }

                          .elementor-social-icon-behance {
                            background-color: #1769ff;
                          }

                          .elementor-social-icon-bitbucket {
                            background-color: #205081;
                          }

                          .elementor-social-icon-codepen {
                            background-color: #000;
                          }

                          .elementor-social-icon-delicious {
                            background-color: #39f;
                          }

                          .elementor-social-icon-deviantart {
                            background-color: #05cc47;
                          }

                          .elementor-social-icon-digg {
                            background-color: #005be2;
                          }

                          .elementor-social-icon-dribbble {
                            background-color: #ea4c89;
                          }

                          .elementor-social-icon-elementor {
                            background-color: #d30c5c;
                          }

                          .elementor-social-icon-envelope {
                            background-color: #ea4335;
                          }

                          .elementor-social-icon-facebook,
                          .elementor-social-icon-facebook-f {
                            background-color: #3b5998;
                          }

                          .elementor-social-icon-flickr {
                            background-color: #0063dc;
                          }

                          .elementor-social-icon-foursquare {
                            background-color: #2d5be3;
                          }

                          .elementor-social-icon-free-code-camp,
                          .elementor-social-icon-freecodecamp {
                            background-color: #006400;
                          }

                          .elementor-social-icon-github {
                            background-color: #333;
                          }

                          .elementor-social-icon-gitlab {
                            background-color: #e24329;
                          }

                          .elementor-social-icon-globe {
                            background-color: #69727d;
                          }

                          .elementor-social-icon-google-plus,
                          .elementor-social-icon-google-plus-g {
                            background-color: #dd4b39;
                          }

                          .elementor-social-icon-houzz {
                            background-color: #7ac142;
                          }

                          .elementor-social-icon-instagram {
                            background-color: #262626;
                          }

                          .elementor-social-icon-jsfiddle {
                            background-color: #487aa2;
                          }

                          .elementor-social-icon-link {
                            background-color: #818a91;
                          }

                          .elementor-social-icon-linkedin,
                          .elementor-social-icon-linkedin-in {
                            background-color: #0077b5;
                          }

                          .elementor-social-icon-medium {
                            background-color: #00ab6b;
                          }

                          .elementor-social-icon-meetup {
                            background-color: #ec1c40;
                          }

                          .elementor-social-icon-mixcloud {
                            background-color: #273a4b;
                          }

                          .elementor-social-icon-odnoklassniki {
                            background-color: #f4731c;
                          }

                          .elementor-social-icon-pinterest {
                            background-color: #bd081c;
                          }

                          .elementor-social-icon-product-hunt {
                            background-color: #da552f;
                          }

                          .elementor-social-icon-reddit {
                            background-color: #ff4500;
                          }

                          .elementor-social-icon-rss {
                            background-color: #f26522;
                          }

                          .elementor-social-icon-shopping-cart {
                            background-color: #4caf50;
                          }

                          .elementor-social-icon-skype {
                            background-color: #00aff0;
                          }

                          .elementor-social-icon-slideshare {
                            background-color: #0077b5;
                          }

                          .elementor-social-icon-snapchat {
                            background-color: #fffc00;
                          }

                          .elementor-social-icon-soundcloud {
                            background-color: #f80;
                          }

                          .elementor-social-icon-spotify {
                            background-color: #2ebd59;
                          }

                          .elementor-social-icon-stack-overflow {
                            background-color: #fe7a15;
                          }

                          .elementor-social-icon-steam {
                            background-color: #00adee;
                          }

                          .elementor-social-icon-stumbleupon {
                            background-color: #eb4924;
                          }

                          .elementor-social-icon-telegram {
                            background-color: #2ca5e0;
                          }

                          .elementor-social-icon-thumb-tack {
                            background-color: #1aa1d8;
                          }

                          .elementor-social-icon-tripadvisor {
                            background-color: #589442;
                          }

                          .elementor-social-icon-tumblr {
                            background-color: #35465c;
                          }

                          .elementor-social-icon-twitch {
                            background-color: #6441a5;
                          }

                          .elementor-social-icon-twitter {
                            background-color: #1da1f2;
                          }

                          .elementor-social-icon-viber {
                            background-color: #665cac;
                          }

                          .elementor-social-icon-vimeo {
                            background-color: #1ab7ea;
                          }

                          .elementor-social-icon-vk {
                            background-color: #45668e;
                          }

                          .elementor-social-icon-weibo {
                            background-color: #dd2430;
                          }

                          .elementor-social-icon-weixin {
                            background-color: #31a918;
                          }

                          .elementor-social-icon-whatsapp {
                            background-color: #25d366;
                          }

                          .elementor-social-icon-wordpress {
                            background-color: #21759b;
                          }

                          .elementor-social-icon-xing {
                            background-color: #026466;
                          }

                          .elementor-social-icon-yelp {
                            background-color: #af0606;
                          }

                          .elementor-social-icon-youtube {
                            background-color: #cd201f;
                          }

                          .elementor-social-icon-500px {
                            background-color: #0099e5;
                          }

                          .elementor-shape-rounded
                            .elementor-icon.elementor-social-icon {
                            border-radius: 10%;
                          }

                          .elementor-shape-circle
                            .elementor-icon.elementor-social-icon {
                            border-radius: 50%;
                          }
                        </style>
                        <div
                          class="elementor-social-icons-wrapper elementor-grid"
                        >
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-jki-facebook-light elementor-repeater-item-c94ce35"
                              target="_blank"
                            >
                              <span class="elementor-screen-only"
                                >Jki-facebook-light</span
                              >
                              <i class="jki jki-facebook-light"></i>
                            </a>
                          </span>
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-c6d37c1"
                              target="_blank"
                            >
                              <span class="elementor-screen-only">Twitter</span>
                              <svg
                                class="e-font-icon-svg e-fab-twitter"
                                viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                                ></path>
                              </svg>
                            </a>
                          </span>
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-038d781"
                              target="_blank"
                            >
                              <span class="elementor-screen-only"
                                >Instagram</span
                              >
                              <svg
                                class="e-font-icon-svg e-fab-instagram"
                                viewBox="0 0 448 512"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                ></path>
                              </svg>
                            </a>
                          </span>
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-jki-linkedin-in elementor-repeater-item-3089857"
                              target="_blank"
                            >
                              <span class="elementor-screen-only"
                                >Jki-linkedin-in</span
                              >
                              <i class="jki jki-linkedin-in"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-5d55f5e4 e-flex e-con-boxed e-con e-child"
                  data-id="5d55f5e4"
                  data-element_type="container"
                  data-settings='{"background_background":"classic","content_width":"boxed"}'
                >
                  <div class="e-con-inner">
                    <div
                      class="elementor-element elementor-element-2afef469 elementor-widget elementor-widget-image"
                      data-id="2afef469"
                      data-element_type="widget"
                      data-widget_type="image.default"
                    >
                      <div class="elementor-widget-container">
                        <img
                          loading="lazy"
                          decoding="async"
                          width="699"
                          height="1004"
                          src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/profile-3.png"
                          class="attachment-full size-full wp-image-210"
                          alt=""
                          srcset="
                            https://kitpapa.net/rankz/wp-content/uploads/2024/01/profile-3.png         699w,
                            https://kitpapa.net/rankz/wp-content/uploads/2024/01/profile-3-209x300.png 209w
                          "
                          sizes="(max-width: 699px) 100vw, 699px"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-56f4fe82 e-con-full e-flex elementor-invisible e-con e-child"
                data-id="56f4fe82"
                data-element_type="container"
                data-settings='{"content_width":"full","animation":"fadeIn","animation_delay":600}'
              >
                <div
                  class="elementor-element elementor-element-7c94bc7a e-flex e-con-boxed e-con e-child"
                  data-id="7c94bc7a"
                  data-element_type="container"
                  data-settings='{"content_width":"boxed"}'
                >
                  <div class="e-con-inner">
                    <div
                      class="elementor-element elementor-element-537d0555 elementor-widget elementor-widget-jkit_heading"
                      data-id="537d0555"
                      data-element_type="widget"
                      data-widget_type="jkit_heading.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_12_12_65c1cb2b2efc9"
                        >
                          <div
                            class="heading-section-title display-inline-block"
                          >
                            <h3 class="heading-title">Marissa Atkins</h3>
                          </div>
                          <h3 class="heading-section-subtitle style-color">
                            Content Strategist
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-28cf9766 elementor-shape-circle e-grid-align-left elementor-grid-0 elementor-widget elementor-widget-social-icons"
                      data-id="28cf9766"
                      data-element_type="widget"
                      data-widget_type="social-icons.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="elementor-social-icons-wrapper elementor-grid"
                        >
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-jki-facebook-light elementor-repeater-item-c94ce35"
                              target="_blank"
                            >
                              <span class="elementor-screen-only"
                                >Jki-facebook-light</span
                              >
                              <i class="jki jki-facebook-light"></i>
                            </a>
                          </span>
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-c6d37c1"
                              target="_blank"
                            >
                              <span class="elementor-screen-only">Twitter</span>
                              <svg
                                class="e-font-icon-svg e-fab-twitter"
                                viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                                ></path>
                              </svg>
                            </a>
                          </span>
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-038d781"
                              target="_blank"
                            >
                              <span class="elementor-screen-only"
                                >Instagram</span
                              >
                              <svg
                                class="e-font-icon-svg e-fab-instagram"
                                viewBox="0 0 448 512"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                ></path>
                              </svg>
                            </a>
                          </span>
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-jki-linkedin-in elementor-repeater-item-3089857"
                              target="_blank"
                            >
                              <span class="elementor-screen-only"
                                >Jki-linkedin-in</span
                              >
                              <i class="jki jki-linkedin-in"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-4814918c e-flex e-con-boxed e-con e-child"
                  data-id="4814918c"
                  data-element_type="container"
                  data-settings='{"background_background":"classic","content_width":"boxed"}'
                >
                  <div class="e-con-inner">
                    <div
                      class="elementor-element elementor-element-1224eae6 elementor-widget elementor-widget-image"
                      data-id="1224eae6"
                      data-element_type="widget"
                      data-widget_type="image.default"
                    >
                      <div class="elementor-widget-container">
                        <img
                          loading="lazy"
                          decoding="async"
                          width="399"
                          height="458"
                          src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/business-finance-and-employment-female-successfu-D3NJMQX-e1694886011960.png"
                          class="attachment-full size-full wp-image-86"
                          alt=""
                          srcset="
                            https://kitpapa.net/rankz/wp-content/uploads/2024/01/business-finance-and-employment-female-successfu-D3NJMQX-e1694886011960.png         399w,
                            https://kitpapa.net/rankz/wp-content/uploads/2024/01/business-finance-and-employment-female-successfu-D3NJMQX-e1694886011960-261x300.png 261w
                          "
                          sizes="(max-width: 399px) 100vw, 399px"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-479dae17 e-flex e-con-boxed e-con e-child"
            data-id="479dae17"
            data-element_type="container"
            data-settings='{"content_width":"boxed"}'
          >
            <div class="e-con-inner">
              <div
                class="elementor-element elementor-element-58bf2890 e-con-full e-flex elementor-invisible e-con e-child"
                data-id="58bf2890"
                data-element_type="container"
                data-settings='{"content_width":"full","animation":"fadeIn","animation_delay":600}'
              >
                <div
                  class="elementor-element elementor-element-1d0e6ab0 e-flex e-con-boxed e-con e-child"
                  data-id="1d0e6ab0"
                  data-element_type="container"
                  data-settings='{"background_background":"classic","content_width":"boxed"}'
                >
                  <div class="e-con-inner">
                    <div
                      class="elementor-element elementor-element-2e3f3ae5 elementor-widget elementor-widget-image"
                      data-id="2e3f3ae5"
                      data-element_type="widget"
                      data-widget_type="image.default"
                    >
                      <div class="elementor-widget-container">
                        <img
                          loading="lazy"
                          decoding="async"
                          width="699"
                          height="1004"
                          src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/Profile-2.png"
                          class="attachment-full size-full wp-image-209"
                          alt=""
                          srcset="
                            https://kitpapa.net/rankz/wp-content/uploads/2024/01/Profile-2.png         699w,
                            https://kitpapa.net/rankz/wp-content/uploads/2024/01/Profile-2-209x300.png 209w
                          "
                          sizes="(max-width: 699px) 100vw, 699px"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-3710999c e-flex e-con-boxed e-con e-child"
                  data-id="3710999c"
                  data-element_type="container"
                  data-settings='{"content_width":"boxed"}'
                >
                  <div class="e-con-inner">
                    <div
                      class="elementor-element elementor-element-1a517ed5 elementor-widget elementor-widget-jkit_heading"
                      data-id="1a517ed5"
                      data-element_type="widget"
                      data-widget_type="jkit_heading.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_12_13_65c1cb2b33140"
                        >
                          <div
                            class="heading-section-title display-inline-block"
                          >
                            <h3 class="heading-title">Jim Doe</h3>
                          </div>
                          <h3 class="heading-section-subtitle style-color">
                            Head of Marketing
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-2087e0b2 elementor-shape-circle e-grid-align-left elementor-grid-0 elementor-widget elementor-widget-social-icons"
                      data-id="2087e0b2"
                      data-element_type="widget"
                      data-widget_type="social-icons.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="elementor-social-icons-wrapper elementor-grid"
                        >
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-jki-facebook-light elementor-repeater-item-c94ce35"
                              target="_blank"
                            >
                              <span class="elementor-screen-only"
                                >Jki-facebook-light</span
                              >
                              <i class="jki jki-facebook-light"></i>
                            </a>
                          </span>
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-c6d37c1"
                              target="_blank"
                            >
                              <span class="elementor-screen-only">Twitter</span>
                              <svg
                                class="e-font-icon-svg e-fab-twitter"
                                viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                                ></path>
                              </svg>
                            </a>
                          </span>
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-038d781"
                              target="_blank"
                            >
                              <span class="elementor-screen-only"
                                >Instagram</span
                              >
                              <svg
                                class="e-font-icon-svg e-fab-instagram"
                                viewBox="0 0 448 512"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                ></path>
                              </svg>
                            </a>
                          </span>
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-jki-linkedin-in elementor-repeater-item-3089857"
                              target="_blank"
                            >
                              <span class="elementor-screen-only"
                                >Jki-linkedin-in</span
                              >
                              <i class="jki jki-linkedin-in"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-6f60525e e-con-full e-flex elementor-invisible e-con e-child"
                data-id="6f60525e"
                data-element_type="container"
                data-settings='{"content_width":"full","animation":"fadeIn","animation_delay":600}'
              >
                <div
                  class="elementor-element elementor-element-540ea7b4 e-flex e-con-boxed e-con e-child"
                  data-id="540ea7b4"
                  data-element_type="container"
                  data-settings='{"background_background":"classic","content_width":"boxed"}'
                >
                  <div class="e-con-inner">
                    <div
                      class="elementor-element elementor-element-475899b9 elementor-widget elementor-widget-image"
                      data-id="475899b9"
                      data-element_type="widget"
                      data-widget_type="image.default"
                    >
                      <div class="elementor-widget-container">
                        <img
                          loading="lazy"
                          decoding="async"
                          width="699"
                          height="1004"
                          src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/Profile-1.png"
                          class="attachment-full size-full wp-image-208"
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
                  class="elementor-element elementor-element-6e9c2b59 e-flex e-con-boxed e-con e-child"
                  data-id="6e9c2b59"
                  data-element_type="container"
                  data-settings='{"content_width":"boxed"}'
                >
                  <div class="e-con-inner">
                    <div
                      class="elementor-element elementor-element-3dbdc6b6 elementor-widget elementor-widget-jkit_heading"
                      data-id="3dbdc6b6"
                      data-element_type="widget"
                      data-widget_type="jkit_heading.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_12_14_65c1cb2b35c41"
                        >
                          <div
                            class="heading-section-title display-inline-block"
                          >
                            <h3 class="heading-title">Scott Spence</h3>
                          </div>
                          <h3 class="heading-section-subtitle style-color">
                            Project Manager
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-12b162f5 elementor-shape-circle e-grid-align-left elementor-grid-0 elementor-widget elementor-widget-social-icons"
                      data-id="12b162f5"
                      data-element_type="widget"
                      data-widget_type="social-icons.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="elementor-social-icons-wrapper elementor-grid"
                        >
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-jki-facebook-light elementor-repeater-item-c94ce35"
                              target="_blank"
                            >
                              <span class="elementor-screen-only"
                                >Jki-facebook-light</span
                              >
                              <i class="jki jki-facebook-light"></i>
                            </a>
                          </span>
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-c6d37c1"
                              target="_blank"
                            >
                              <span class="elementor-screen-only">Twitter</span>
                              <svg
                                class="e-font-icon-svg e-fab-twitter"
                                viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                                ></path>
                              </svg>
                            </a>
                          </span>
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-038d781"
                              target="_blank"
                            >
                              <span class="elementor-screen-only"
                                >Instagram</span
                              >
                              <svg
                                class="e-font-icon-svg e-fab-instagram"
                                viewBox="0 0 448 512"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                ></path>
                              </svg>
                            </a>
                          </span>
                          <span class="elementor-grid-item">
                            <a
                              class="elementor-icon elementor-social-icon elementor-social-icon-jki-linkedin-in elementor-repeater-item-3089857"
                              target="_blank"
                            >
                              <span class="elementor-screen-only"
                                >Jki-linkedin-in</span
                              >
                              <i class="jki jki-linkedin-in"></i>
                            </a>
                          </span>
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
          <div class="e-con-inner">
            <div
              class="elementor-element elementor-element-44a5bc9b e-con-full e-flex e-con e-child"
              data-id="44a5bc9b"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic"}'
            >
              <div
                class="elementor-element elementor-element-6e290b84 e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-child"
                data-id="6e290b84"
                data-element_type="container"
                data-settings='{"content_width":"full"}'
              >
                <div
                  class="elementor-element elementor-element-6cf8d74b elementor-widget elementor-widget-image"
                  data-id="6cf8d74b"
                  data-element_type="widget"
                  data-widget_type="image.default"
                >
                  <div class="elementor-widget-container">
                    <img
                      loading="lazy"
                      width="800"
                      height="854"
                      src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/image-GPPATQ6.png"
                      class="attachment-full size-full wp-image-65"
                      alt=""
                      decoding="async"
                      srcset="
                        https://kitpapa.net/rankz/wp-content/uploads/2024/01/image-GPPATQ6.png         800w,
                        https://kitpapa.net/rankz/wp-content/uploads/2024/01/image-GPPATQ6-281x300.png 281w,
                        https://kitpapa.net/rankz/wp-content/uploads/2024/01/image-GPPATQ6-768x820.png 768w
                      "
                      sizes="(max-width: 800px) 100vw, 800px"
                    />
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-d529199 e-con-full e-flex e-con e-child"
                data-id="d529199"
                data-element_type="container"
                data-settings='{"content_width":"full"}'
              >
                <div
                  class="elementor-element elementor-element-531ea980 elementor-widget elementor-widget-heading"
                  data-id="531ea980"
                  data-element_type="widget"
                  data-widget_type="heading.default"
                >
                  <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">
                      Start Your SEO Journey With Us
                    </h2>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-7266989a elementor-widget elementor-widget-text-editor"
                  data-id="7266989a"
                  data-element_type="widget"
                  data-widget_type="text-editor.default"
                >
                  <div class="elementor-widget-container">
                    Consectetur adipiscing elit sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Utenim minim veniam quis
                    nostrud exercitation.
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-6882ae73 elementor-widget__width-initial elementor-absolute e-transform elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image"
                  data-id="6882ae73"
                  data-element_type="widget"
                  data-settings='{"_position":"absolute","_transform_rotateZ_effect":{"unit":"px","size":5,"sizes":[]},"_transform_rotateZ_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_mobile":{"unit":"deg","size":"","sizes":[]}}'
                  data-widget_type="image.default"
                >
                  <div class="elementor-widget-container">
                    <img
                      loading="lazy"
                      width="211"
                      height="117"
                      src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/arrow.png"
                      class="attachment-large size-large wp-image-69"
                      alt=""
                      decoding="async"
                    />
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-5d523847 elementor-widget__width-auto e-transform elementor-widget elementor-widget-jkit_button"
                  data-id="5d523847"
                  data-element_type="widget"
                  data-settings='{"_transform_translateX_effect_hover":{"unit":"px","size":10,"sizes":[]},"_transform_translateX_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateX_effect_hover_mobile":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_tablet":{"unit":"px","size":"","sizes":[]},"_transform_translateY_effect_hover_mobile":{"unit":"px","size":"","sizes":[]}}'
                  data-widget_type="jkit_button.default"
                >
                  <div class="elementor-widget-container">
                    <div
                      class="jeg-elementor-kit jkit-button icon-position-after jeg_module_12_15_65c1cb2b3cd46"
                    >
                      <a href="#" class="jkit-button-wrapper">
                        Contact Us<i
                          aria-hidden="true"
                          class="jki jki-right-arrow-light"
                        ></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-ffdc3f2 e-con-full e-flex e-con e-child"
              data-id="ffdc3f2"
              data-element_type="container"
              data-settings='{"content_width":"full"}'
            >
              <div
                class="elementor-element elementor-element-49569f82 e-con-full e-flex e-con e-child"
                data-id="49569f82"
                data-element_type="container"
                data-settings='{"content_width":"full"}'
              >
                <div
                  class="elementor-element elementor-element-7a0d94e8 elementor-widget elementor-widget-heading"
                  data-id="7a0d94e8"
                  data-element_type="widget"
                  data-widget_type="heading.default"
                >
                  <div class="elementor-widget-container">
                    <h4 class="elementor-heading-title elementor-size-default">
                      Quick Links
                    </h4>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-4be4058c elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                  data-id="4be4058c"
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
                        <a href="#">
                          <span class="elementor-icon-list-text">About</span>
                        </a>
                      </li>
                      <li class="elementor-icon-list-item">
                        <a href="#">
                          <span class="elementor-icon-list-text">Services</span>
                        </a>
                      </li>
                      <li class="elementor-icon-list-item">
                        <a href="#">
                          <span class="elementor-icon-list-text">Pricing</span>
                        </a>
                      </li>
                      <li class="elementor-icon-list-item">
                        <a href="#">
                          <span class="elementor-icon-list-text">FAQ</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-72ff8371 e-con-full e-flex e-con e-child"
                data-id="72ff8371"
                data-element_type="container"
                data-settings='{"content_width":"full"}'
              >
                <div
                  class="elementor-element elementor-element-207ab0f7 elementor-widget elementor-widget-heading"
                  data-id="207ab0f7"
                  data-element_type="widget"
                  data-widget_type="heading.default"
                >
                  <div class="elementor-widget-container">
                    <h4 class="elementor-heading-title elementor-size-default">
                      Services
                    </h4>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-1e6e2cc5 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                  data-id="1e6e2cc5"
                  data-element_type="widget"
                  data-widget_type="icon-list.default"
                >
                  <div class="elementor-widget-container">
                    <ul class="elementor-icon-list-items">
                      <li class="elementor-icon-list-item">
                        <a href="#">
                          <span class="elementor-icon-list-text"
                            >SEO Services</span
                          >
                        </a>
                      </li>
                      <li class="elementor-icon-list-item">
                        <a href="#">
                          <span class="elementor-icon-list-text"
                            >PPC Advertising</span
                          >
                        </a>
                      </li>
                      <li class="elementor-icon-list-item">
                        <a href="#">
                          <span class="elementor-icon-list-text"
                            >Content Marketing</span
                          >
                        </a>
                      </li>
                      <li class="elementor-icon-list-item">
                        <a href="#">
                          <span class="elementor-icon-list-text"
                            >Social Media Marketing</span
                          >
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-6193f0ee e-con-full e-flex e-con e-child"
                data-id="6193f0ee"
                data-element_type="container"
                data-settings='{"content_width":"full"}'
              >
                <div
                  class="elementor-element elementor-element-6f0a9365 elementor-widget elementor-widget-heading"
                  data-id="6f0a9365"
                  data-element_type="widget"
                  data-widget_type="heading.default"
                >
                  <div class="elementor-widget-container">
                    <h4 class="elementor-heading-title elementor-size-default">
                      Support
                    </h4>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-753e837e elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                  data-id="753e837e"
                  data-element_type="widget"
                  data-widget_type="icon-list.default"
                >
                  <div class="elementor-widget-container">
                    <ul class="elementor-icon-list-items">
                      <li class="elementor-icon-list-item">
                        <a href="#">
                          <span class="elementor-icon-list-text">Support</span>
                        </a>
                      </li>
                      <li class="elementor-icon-list-item">
                        <a href="#">
                          <span class="elementor-icon-list-text"
                            >Terms &amp;Conditions</span
                          >
                        </a>
                      </li>
                      <li class="elementor-icon-list-item">
                        <a href="#">
                          <span class="elementor-icon-list-text">Contact</span>
                        </a>
                      </li>
                      <li class="elementor-icon-list-item">
                        <a href="#">
                          <span class="elementor-icon-list-text"
                            >Privacy Policy</span
                          >
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-24bc4562 e-con-full e-flex e-con e-child"
                data-id="24bc4562"
                data-element_type="container"
                data-settings='{"content_width":"full"}'
              >
                <div
                  class="elementor-element elementor-element-479117f7 elementor-widget__width-inherit elementor-widget elementor-widget-heading"
                  data-id="479117f7"
                  data-element_type="widget"
                  data-widget_type="heading.default"
                >
                  <div class="elementor-widget-container">
                    <h4 class="elementor-heading-title elementor-size-default">
                      Contact Info
                    </h4>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-50f074d3 elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                  data-id="50f074d3"
                  data-element_type="widget"
                  data-widget_type="icon-list.default"
                >
                  <div class="elementor-widget-container">
                    <ul class="elementor-icon-list-items">
                      <li class="elementor-icon-list-item">
                        <span class="elementor-icon-list-icon">
                          <svg
                            aria-hidden="true"
                            class="e-font-icon-svg e-fas-phone-alt"
                            viewBox="0 0 512 512"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"
                            ></path>
                          </svg>
                        </span>
                        <span class="elementor-icon-list-text"
                          >Phone Number :</span
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-3c94aa87 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                  data-id="3c94aa87"
                  data-element_type="widget"
                  data-widget_type="heading.default"
                >
                  <div class="elementor-widget-container">
                    <h4 class="elementor-heading-title elementor-size-default">
                      (+88) 885 148 11
                    </h4>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-6780c97c elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                  data-id="6780c97c"
                  data-element_type="widget"
                  data-widget_type="icon-list.default"
                >
                  <div class="elementor-widget-container">
                    <ul class="elementor-icon-list-items">
                      <li class="elementor-icon-list-item">
                        <span class="elementor-icon-list-icon">
                          <svg
                            aria-hidden="true"
                            class="e-font-icon-svg e-fas-envelope"
                            viewBox="0 0 512 512"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"
                            ></path>
                          </svg>
                        </span>
                        <span class="elementor-icon-list-text">Email Us :</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-67a723b elementor-widget__width-auto elementor-widget elementor-widget-heading"
                  data-id="67a723b"
                  data-element_type="widget"
                  data-widget_type="heading.default"
                >
                  <div class="elementor-widget-container">
                    <h4 class="elementor-heading-title elementor-size-default">
                      support@domain.com
                    </h4>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-7a594e9f elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                  data-id="7a594e9f"
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

                      .elementor-widget-divider .elementor-divider__element {
                        margin: 0 var(--divider-element-spacing);
                        flex-shrink: 0;
                      }

                      .elementor-widget-divider .elementor-icon {
                        font-size: var(--divider-icon-size);
                      }

                      .elementor-widget-divider .elementor-divider-separator {
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

                      .rtl .elementor-widget-divider .elementor-divider__text {
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
                  class="elementor-element elementor-element-592a1607 elementor-shape-circle elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                  data-id="592a1607"
                  data-element_type="widget"
                  data-widget_type="social-icons.default"
                >
                  <div class="elementor-widget-container">
                    <div class="elementor-social-icons-wrapper elementor-grid">
                      <span class="elementor-grid-item">
                        <a
                          class="elementor-icon elementor-social-icon elementor-social-icon-jki-facebook-light elementor-repeater-item-6352c3c"
                          target="_blank"
                        >
                          <span class="elementor-screen-only"
                            >Jki-facebook-light</span
                          >
                          <i class="jki jki-facebook-light"></i>
                        </a>
                      </span>
                      <span class="elementor-grid-item">
                        <a
                          class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-811c3ad"
                          target="_blank"
                        >
                          <span class="elementor-screen-only">Instagram</span>
                          <svg
                            class="e-font-icon-svg e-fab-instagram"
                            viewBox="0 0 448 512"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                            ></path>
                          </svg>
                        </a>
                      </span>
                      <span class="elementor-grid-item">
                        <a
                          class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-11cfdd8"
                          target="_blank"
                        >
                          <span class="elementor-screen-only">Twitter</span>
                          <svg
                            class="e-font-icon-svg e-fab-twitter"
                            viewBox="0 0 512 512"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                            ></path>
                          </svg>
                        </a>
                      </span>
                      <span class="elementor-grid-item">
                        <a
                          class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-d07947a"
                          target="_blank"
                        >
                          <span class="elementor-screen-only">Youtube</span>
                          <svg
                            class="e-font-icon-svg e-fab-youtube"
                            viewBox="0 0 576 512"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"
                            ></path>
                          </svg>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-58d4f3d5 e-con-full e-flex e-con e-child"
              data-id="58d4f3d5"
              data-element_type="container"
              data-settings='{"content_width":"full"}'
            >
              <div
                class="elementor-element elementor-element-13fa1283 e-con-full e-flex e-con e-child"
                data-id="13fa1283"
                data-element_type="container"
                data-settings='{"content_width":"full"}'
              >
                <div
                  class="elementor-element elementor-element-5e963a73 elementor-widget__width-auto elementor-widget elementor-widget-image"
                  data-id="5e963a73"
                  data-element_type="widget"
                  data-widget_type="image.default"
                >
                  <div class="elementor-widget-container">
                    <img
                      loading="lazy"
                      width="656"
                      height="169"
                      src="https://kitpapa.net/rankz/wp-content/uploads/2024/01/Footer-logo.png"
                      class="attachment-full size-full wp-image-178"
                      alt=""
                      decoding="async"
                      srcset="
                        https://kitpapa.net/rankz/wp-content/uploads/2024/01/Footer-logo.png        656w,
                        https://kitpapa.net/rankz/wp-content/uploads/2024/01/Footer-logo-300x77.png 300w
                      "
                      sizes="(max-width: 656px) 100vw, 656px"
                    />
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-78cf59a1 elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                  data-id="78cf59a1"
                  data-element_type="widget"
                  data-widget_type="text-editor.default"
                >
                  <div class="elementor-widget-container">
                    SEO &#038;Digital Marketing Agency Template Kit
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-4d156b50 e-con-full e-flex e-con e-child"
                data-id="4d156b50"
                data-element_type="container"
                data-settings='{"content_width":"full"}'
              >
                <div
                  class="elementor-element elementor-element-1e4ba2c4 elementor-widget elementor-widget-text-editor"
                  data-id="1e4ba2c4"
                  data-element_type="widget"
                  data-widget_type="text-editor.default"
                >
                  <div class="elementor-widget-container">
                    <p>Copyright © 2023 kitpapa.com All rights reserved.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
          id: 12,
          title: "About%20%E2%80%93%20Rankz",
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
      src="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/assets/js/elements/video-button.js?ver=2.6.2"
      id="jkit-element-videobutton-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/assets/js/sweetalert2/sweetalert2.min.js?ver=11.6.16"
      id="sweetalert2-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/jeg-elementor-kit/assets/js/elements/fun-fact.js?ver=2.6.2"
      id="jkit-element-funfact-js"
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