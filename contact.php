<!DOCTYPE html>
<html lang="en-US">
  <head>

  <link rel="icon" href="./assets/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact &#8211; Devsite Studio</title>
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
      id="elementor-post-22-css"
      href="https://kitpapa.net/rankz/wp-content/uploads/elementor/css/post-22.css?ver=1704892687"
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
      href="https://kitpapa.net/rankz/wp-json/wp/v2/pages/22"
    />
    <link
      rel="EditURI"
      type="application/rsd+xml"
      title="RSD"
      href="https://kitpapa.net/rankz/xmlrpc.php?rsd"
    />
    <meta name="generator" content="WordPress 6.4.2" />
    <link rel="canonical" href="https://kitpapa.net/rankz/contact/" />
    <link rel="shortlink" href="https://kitpapa.net/rankz/?p=22" />
    <link
      rel="alternate"
      type="application/json+oembed"
      href="https://kitpapa.net/rankz/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkitpapa.net%2Frankz%2Fcontact%2F"
    />
    <link
      rel="alternate"
      type="text/xml+oembed"
      href="https://kitpapa.net/rankz/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkitpapa.net%2Frankz%2Fcontact%2F&#038;format=xml"
    />
    <meta
      name="generator"
      content="Elementor 3.18.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-swap"
    />
  </head>
  <body
    class="page-template page-template-elementor_header_footer page page-id-22 jkit-color-scheme elementor-default elementor-template-full-width elementor-kit-34 elementor-page elementor-page-22"
  >
<?php include './header.php' ?>
    <div
      data-elementor-type="wp-page"
      data-elementor-id="22"
      class="elementor elementor-22"
    >
      <div
        class="elementor-element elementor-element-69d78320 e-flex e-con-boxed e-con e-parent"
        data-id="69d78320"
        data-element_type="container"
        data-settings='{"background_background":"gradient","content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-78a5af20 elementor-widget elementor-widget-heading"
            data-id="78a5af20"
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
                Stay Connected with Devsite Studio
              </h1>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-2784821 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
            data-id="2784821"
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
        class="elementor-element elementor-element-1c4557aa e-flex e-con-boxed e-con e-parent"
        data-id="1c4557aa"
        data-element_type="container"
        data-settings='{"background_background":"classic","content_width":"boxed"}'
        data-core-v316-plus="true"
      >
        <div class="e-con-inner">
          <div
            class="elementor-element elementor-element-53959d08 e-con-full e-flex e-con e-child"
            data-id="53959d08"
            data-element_type="container"
            data-settings='{"content_width":"full","background_background":"classic"}'
          >
            <div
              class="elementor-element elementor-element-6871b462 e-con-full e-flex e-con e-child"
              data-id="6871b462"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic"}'
            >
              <div
                class="elementor-element elementor-element-560945c7 elementor-invisible elementor-widget elementor-widget-heading"
                data-id="560945c7"
                data-element_type="widget"
                data-settings='{"_animation":"fadeIn","_animation_delay":200}'
                data-widget_type="heading.default"
              >
                <div class="elementor-widget-container">
                  <h3 class="elementor-heading-title elementor-size-default">
                    Leave Your Message
                  </h3>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-5929c319 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
                data-id="5929c319"
                data-element_type="widget"
                data-settings='{"_animation":"fadeIn","_animation_delay":400}'
                data-widget_type="text-editor.default"
              >
                <div class="elementor-widget-container">
                Drop us a message with your inquiries or requirements, and we'll get back to you promptly.
                </div>
              </div>
              <div
                class="elementor-element elementor-element-6c8b8dd7 elementor-widget elementor-widget-metform"
                data-id="6c8b8dd7"
                data-element_type="widget"
                data-widget_type="metform.default"
              >
                <div class="elementor-widget-container">
                  <div
                    id="mf-response-props-id-145"
                    data-previous-steps-style=""
                    data-editswitchopen=""
                    data-response_type="alert"
                    data-erroricon="fas fa-exclamation-triangle"
                    data-successicon="fas fa-check"
                    data-messageposition="top"
                    class="mf-scroll-top-no"
                  >
                    <div
                      class="formpicker_warper formpicker_warper_editable"
                      data-metform-formpicker-key="145"
                    >
                      <div class="elementor-widget-container">
                        <div
                          id="metform-wrap-6c8b8dd7-145"
                          class="mf-form-wrapper"
                          data-form-id="145"
                          data-action="https://kitpapa.net/rankz/wp-json/metform/v1/entries/insert/145"
                          data-wp-nonce="266be19d7d"
                          data-form-nonce="fa7ba0a3e4"
                          data-quiz-summery="false"
                          data-save-progress="false"
                          data-form-type="general-form"
                          data-stop-vertical-effect=""
                        ></div>
                        
                        <script type="text/mf" class="mf-template">

                          	function controls_data (value){
                          		let currentWrapper = "mf-response-props-id-145";
                          		let currentEl = document.getElementById(currentWrapper);

                          		return currentEl ? currentEl.dataset[value] : false
                          	}


                          	let is_edit_mode = '' ? true : false;
                          	let message_position = controls_data('messageposition') || 'top';


                          	let message_successIcon = controls_data('successicon') || '';
                          	let message_errorIcon = controls_data('erroricon') || '';
                          	let message_editSwitch = controls_data('editswitchopen') === 'yes' ? true : false;
                          	let message_proClass = controls_data('editswitchopen') === 'yes' ? 'mf_pro_activated' : '';

                          	let is_dummy_markup = is_edit_mode && message_editSwitch ? true : false;


                          	return html`
                          		<form
                          			className="metform-form-content"
                          			ref=${parent.formContainerRef}
                          			onSubmit=${ validation.handleSubmit( parent.handleFormSubmit ) }

                          			>


                          			${is_dummy_markup ? message_position === 'top' ?  props.ResponseDummyMarkup(message_successIcon, message_proClass) : '' : ''}
                          			${is_dummy_markup ? ' ' :  message_position === 'top' ? props.SubmitResponseMarkup`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}

                          			<!--------------------------------------------------------
                          			*** IMPORTANT / DANGEROUS ***
                          			${html``} must be used as in immediate child of "metform-form-main-wrapper"
                          			class otherwise multistep form will not run at all
                          			---------------------------------------------------------->

                          			<div className="metform-form-main-wrapper" key=${'hide-form-after-submit'} ref=${parent.formRef}>
                          			${html`
                          						<div data-elementor-type="wp-post" key="2" data-elementor-id="145" className="elementor elementor-145">
                          					<div className="elementor-element elementor-element-7d355f6a e-flex e-con-boxed e-con e-parent" data-id="7d355f6a" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
                          			<div className="e-con-inner">
                          <div className="elementor-element elementor-element-70e9c43b e-con-full e-flex e-con e-child" data-id="70e9c43b" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                          		<div className="elementor-element elementor-element-64acb099 elementor-widget elementor-widget-mf-text" data-id="64acb099" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-first-name&quot;}" data-widget_type="mf-text.default">
                          		<div className="elementor-widget-container">

                          <div className="mf-input-wrapper">

                          	<input
                          		type="text"
                          		className="mf-input "
                          		id="mf-input-text-64acb099"
                          		name="mf-first-name"
                          		placeholder="${ parent.decodeEntities(`Your Name`) } "
                          							onInput=${parent.handleChange}
                          			onBlur=${parent.handleChange}
                          			aria-invalid=${validation.errors['mf-first-name'] ? 'true' : 'false'}
                          			ref=${el =>{
                          										parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el)
                          			}}
                          						/>

                          					<${validation.ErrorMessage}
                          			errors=${validation.errors}
                          			name="mf-first-name"
                          			as=${html`<span className="mf-error-message"></span>`}
                          			/>

                          			</div>

                          		</div>
                          		</div>
                          		</div>
                          <div className="elementor-element elementor-element-2834644e e-con-full e-flex e-con e-child" data-id="2834644e" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                          		<div className="elementor-element elementor-element-701db0b4 elementor-widget elementor-widget-mf-telephone" data-id="701db0b4" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-tel&quot;}" data-widget_type="mf-telephone.default">
                          		<div className="elementor-widget-container">

                          <div className="mf-input-wrapper">

                          	<input
                          		type="tel"
                          		className="mf-input "
                          		id="mf-input-telephone-701db0b4"
                          		name="mf-tel"
                          		placeholder="${ parent.decodeEntities(`Your Phone`) } "
                          							onInput=${parent.handleChange}
                          			aria-invalid=${validation.errors['mf-tel'] ? 'true' : 'false'}
                          			ref=${el => parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el)}
                          						/>

                          					<${validation.ErrorMessage}
                          			errors=${validation.errors}
                          			name="mf-tel"
                          			as=${html`<span className="mf-error-message"></span>`}
                          			/>


                          </div>

                          		</div>
                          		</div>
                          		</div>
                          <div className="elementor-element elementor-element-4ff17998 e-con-full e-flex e-con e-child" data-id="4ff17998" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                          		<div className="elementor-element elementor-element-3d523367 elementor-widget elementor-widget-mf-text" data-id="3d523367" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                          		<div className="elementor-widget-container">

                          <div className="mf-input-wrapper">

                          	<input
                          		type="text"
                          		className="mf-input "
                          		id="mf-input-text-3d523367"
                          		name="mf-text"
                          		placeholder="${ parent.decodeEntities(`Subject`) } "
                          							onInput=${parent.handleChange}
                          			onBlur=${parent.handleChange}
                          			aria-invalid=${validation.errors['mf-text'] ? 'true' : 'false'}
                          			ref=${el =>{
                          										parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":false,"expression":"null"}, el)
                          			}}
                          						/>

                          					<${validation.ErrorMessage}
                          			errors=${validation.errors}
                          			name="mf-text"
                          			as=${html`<span className="mf-error-message"></span>`}
                          			/>

                          			</div>

                          		</div>
                          		</div>
                          		<div className="elementor-element elementor-element-46a7d7ac elementor-widget elementor-widget-mf-textarea" data-id="46a7d7ac" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-textarea&quot;}" data-widget_type="mf-textarea.default">
                          		<div className="elementor-widget-container">

                          <div className="mf-input-wrapper">

                          	<textarea className="mf-input mf-textarea " id="mf-input-text-area-46a7d7ac"
                          		name="mf-textarea"
                          		placeholder="${ parent.decodeEntities(`Your Message`) } "
                          		cols="30" rows="10"
                          							onInput=${ parent.handleChange }
                          			aria-invalid=${validation.errors['mf-textarea'] ? 'true' : 'false'}
                          			ref=${ el => parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":false,"expression":"null"}, el)}
                          						></textarea>

                          					<${validation.ErrorMessage}
                          			errors=${validation.errors}
                          			name="mf-textarea"
                          			as=${html`<span className="mf-error-message"></span>`}
                          			/>
                          						</div>

                          		</div>
                          		</div>
                          		<div className="elementor-element elementor-element-3765f2e4 mf-btn--justify mf-btn--tablet-justify mf-btn--mobile-justify elementor-widget elementor-widget-mf-button" data-id="3765f2e4" data-element_type="widget" data-widget_type="mf-button.default">
                          		<div className="elementor-widget-container">
                          			<div className="mf-btn-wraper " data-mf-form-conditional-logic-requirement="">
                          					<button type="submit" className="metform-btn metform-submit-btn " id="">
                          			<span>${ parent.decodeEntities(`Send Message`) } </span>
                          		</button>
                          	        </div>
                                		</div>
                          		</div>
                          		</div>
                          			</div>
                          		</div>
                          					</div>
                          					`}
                          			</div>

                          			${is_dummy_markup ? message_position === 'bottom' ? props.ResponseDummyMarkup(message_successIcon, message_proClass) : '' : ''}
                          			${is_dummy_markup ? ' ' : message_position === 'bottom' ? props.SubmitResponseMarkup`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}

                          		</form>
                          	`
                        </script>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-1423fd48 e-con-full e-flex e-con e-child"
              data-id="1423fd48"
              data-element_type="container"
              data-settings='{"content_width":"full","background_background":"classic"}'
            >
              <div
                class="elementor-element elementor-element-13ca1a88 elementor-widget elementor-widget-jkit_heading"
                data-id="13ca1a88"
                data-element_type="widget"
                data-widget_type="jkit_heading.default"
              >
                <div class="elementor-widget-container">
                  <div
                    class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_22_2_65c1cb82a1bdc"
                  >
                    <div class="heading-section-title display-inline-block">
                      <h3 class="heading-title">Our Location</h3>
                    </div>
                    <div class="heading-section-description">
                      Maniknagar, Dhaka 1204, Bangladesh
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-5607f107 elementor-widget elementor-widget-google_maps"
                data-id="5607f107"
                data-element_type="widget"
                data-widget_type="google_maps.default"
              >
                <div class="elementor-widget-container">
                  <style>
                    /*! elementor - v3.18.0 - 20-12-2023 */
                    .elementor-widget-google_maps .elementor-widget-container {
                      overflow: hidden;
                    }

                    .elementor-widget-google_maps .elementor-custom-embed {
                      line-height: 0;
                    }

                    .elementor-widget-google_maps iframe {
                      height: 300px;
                    }
                  </style>
                  <div class="elementor-custom-embed">
                    <iframe
                      loading="lazy"
                      src="https://maps.google.com/maps?q=Jl.%20maniknagar%20-%20Dhaka&#038;t=m&#038;z=17&#038;output=embed&#038;iwloc=near"
                      title="Maniknagar, Dhaka 1204, Bangladesh"
                      aria-label="Maniknagar, Dhaka 1204, Bangladesh"
                    ></iframe>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-512feb6e elementor-tablet-align-left elementor-icon-list--layout-inline elementor-widget__width-inherit elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                data-id="512feb6e"
                data-element_type="widget"
                data-widget_type="icon-list.default"
              >
                <div class="elementor-widget-container">
                  <link
                    rel="stylesheet"
                    href="https://kitpapa.net/rankz/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css"
                  />
                  <ul class="elementor-icon-list-items elementor-inline-items">
                    <li class="elementor-icon-list-item elementor-inline-item">
                      <a href="#">
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
                          >(+880) 1950-375585</span
                        >
                      </a>
                    </li>
                    <li class="elementor-icon-list-item elementor-inline-item">
                      <a href="#">
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
                        <span class="elementor-icon-list-text"
                          >info@devsite-studio.com</span
                        >
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-559ec7c7 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="559ec7c7"
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
                class="elementor-element elementor-element-79209687 e-flex e-con-boxed e-con e-child"
                data-id="79209687"
                data-element_type="container"
                data-settings='{"content_width":"boxed"}'
              >
                <div class="e-con-inner">
                  <div
                    class="elementor-element elementor-element-7efd53a9 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                    data-id="7efd53a9"
                    data-element_type="widget"
                    data-widget_type="heading.default"
                  >
                    <div class="elementor-widget-container">
                      <h4
                        class="elementor-heading-title elementor-size-default"
                      >
                        Our Social Media :
                      </h4>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-5f56dc9d e-grid-align-left elementor-shape-circle elementor-widget__width-auto elementor-grid-0 elementor-widget elementor-widget-social-icons"
                    data-id="5f56dc9d"
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
                            class="elementor-icon elementor-social-icon elementor-social-icon-jki-facebook-light elementor-animation-shrink elementor-repeater-item-0fb8cc7"
                            target="_blank"
                            href="http://facebook.com/devsitestudio"
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" fill-rule="evenodd" d="M10.488 3.788A5.25 5.25 0 0 1 14.2 2.25h2.7a.75.75 0 0 1 .75.75v3.6a.75.75 0 0 1-.75.75h-2.7a.15.15 0 0 0-.15.15v1.95h2.85a.75.75 0 0 1 .728.932l-.9 3.6a.75.75 0 0 1-.728.568h-1.95V21a.75.75 0 0 1-.75.75H9.7a.75.75 0 0 1-.75-.75v-6.45H7a.75.75 0 0 1-.75-.75v-3.6A.75.75 0 0 1 7 9.45h1.95V7.5a5.25 5.25 0 0 1 1.538-3.712M14.2 3.75a3.75 3.75 0 0 0-3.75 3.75v2.7a.75.75 0 0 1-.75.75H7.75v2.1H9.7a.75.75 0 0 1 .75.75v6.45h2.1V13.8a.75.75 0 0 1 .75-.75h2.114l.525-2.1H13.3a.75.75 0 0 1-.75-.75V7.5a1.65 1.65 0 0 1 1.65-1.65h1.95v-2.1z" clip-rule="evenodd"/></svg>                          </a>
                        </span>
                        <span class="elementor-grid-item">
                          <a
                            class="elementor-icon elementor-social-icon elementor-social-icon-jki-twitter-light elementor-animation-shrink elementor-repeater-item-4be5bc7"
                            target="_blank"
                            href="http://twitter.com/devsitestudio"
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="white" d="M17.817 6.989c-.353-.508-1.297-1.222-2.826-.914c-.892.179-1.425.62-1.764 1.202c-.361.62-.536 1.463-.536 2.444a1 1 0 0 1-1 1c-2.366 0-4.618-.703-6.513-2.604a10.52 10.52 0 0 0-.168 2.34c.053 1.086.312 2.175.927 3.108c.605.917 1.6 1.757 3.264 2.285a1 1 0 0 1 .41 1.655a8.52 8.52 0 0 1-1.796 1.405c1.06.11 2.082.118 3.03.032c1.92-.174 3.449-.723 4.405-1.5c2.013-1.632 3.09-4.066 2.89-8.144c-.034-.67.613-1.393.925-1.942c-.471.088-.943.072-1.248-.367M4.594 4.984a1 1 0 0 1 .941.429C7.011 7.572 8.783 8.47 10.75 8.674c.096-.841.323-1.672.75-2.404c.626-1.074 1.644-1.864 3.098-2.156c2.01-.404 3.54.324 4.427 1.215l1.792-.335a1 1 0 0 1 1.053 1.478l-1.72 3.022c.157 4.361-1.055 7.405-3.639 9.502c-1.37 1.112-3.332 1.743-5.485 1.938c-2.17.196-4.623-.041-7.061-.753a1 1 0 0 1 .007-1.922c1.226-.349 2.16-.65 3.003-1.177c-1.199-.636-2.082-1.468-2.707-2.416c-.868-1.318-1.19-2.788-1.254-4.113c-.064-1.325.127-2.553.329-3.438c.115-.505.249-1.011.434-1.495a1 1 0 0 1 .818-.636Z"/></g></svg>
                          </a>
                        </span>
                        <span class="elementor-grid-item">
                          <a
                            class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-shrink elementor-repeater-item-147010a"
                            target="_blank"
                            href="https://www.instagram.com/devsitestudio"
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
                            class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-animation-shrink elementor-repeater-item-df2ad14"
                            target="_blank"
                            href="https://www.youtube.com/@devsitestudio"
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
      id="elementor-post-145-css"
      href="https://kitpapa.net/rankz/wp-content/uploads/elementor/css/post-145.css?ver=1704450348"
      media="all"
    />
    <link
      rel="stylesheet"
      id="metform-ui-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/metform/public/assets/css/metform-ui.css?ver=3.8.2"
      media="all"
    />
    <link
      rel="stylesheet"
      id="metform-style-css"
      href="https://kitpapa.net/rankz/wp-content/plugins/metform/public/assets/css/style.css?ver=3.8.2"
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
          id: 22,
          title: "Contact%20%E2%80%93%20Rankz",
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
      src="https://kitpapa.net/rankz/wp-content/plugins/metform/public/assets/js/htm.js?ver=3.8.2"
      id="htm-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2"
      id="wp-polyfill-inert-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0"
      id="regenerator-runtime-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0"
      id="wp-polyfill-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-includes/js/dist/vendor/react.min.js?ver=18.2.0"
      id="react-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-includes/js/dist/vendor/react-dom.min.js?ver=18.2.0"
      id="react-dom-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-includes/js/dist/escape-html.min.js?ver=03e27a7b6ae14f7afaa6"
      id="wp-escape-html-js"
    ></script>
    <script
      src="https://kitpapa.net/rankz/wp-includes/js/dist/element.min.js?ver=ed1c7604880e8b574b40"
      id="wp-element-js"
    ></script>
    <script id="metform-app-js-extra">
      var mf = {
        postType: "page",
        restURI:
          "https:\/\/kitpapa.net\/rankz\/wp-json\/metform\/v1\/forms\/views\/",
        minMsg1: "Minimum length should be ",
        Msg2: " character long.",
        maxMsg1: "Maximum length should be ",
        maxNum: "Maximum number should be ",
        minNum: "Minimum number should be ",
      };
    </script>
    <script
      src="https://kitpapa.net/rankz/wp-content/plugins/metform/public/assets/js/app.js?ver=3.8.2"
      id="metform-app-js"
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
