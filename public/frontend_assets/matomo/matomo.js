/*!!
 * Matomo - free/libre analytics platform
 *
 * JavaScript tracking client
 *
 * @link https://piwik.org
 * @source https://github.com/matomo-org/matomo/blob/master/js/piwik.js
 * @license https://piwik.org/free-software/bsd/ BSD-3 Clause (also in js/LICENSE.txt)
 * @license magnet:?xt=urn:btih:c80d50af7d3db9be66a4d0a86db0286e4fd33292&dn=bsd-3-clause.txt BSD-3-Clause
 */
;
if (typeof _paq !== "object") {
    _paq = []
}
if (typeof window.Matomo !== "object") {
    window.Matomo = window.Piwik = (function() {
        var q, b = {},
            y = {},
            G = document,
            g = navigator,
            X = screen,
            S = window,
            h = S.performance || S.mozPerformance || S.msPerformance || S.webkitPerformance,
            s = S.encodeURIComponent,
            R = S.decodeURIComponent,
            k = unescape,
            I = [],
            E, t, ah = [],
            x = 0,
            ab = 0,
            T = 0,
            l = false;

        function o(ao) {
            try {
                return R(ao)
            } catch (ap) {
                return unescape(ao)
            }
        }

        function J(ap) {
            var ao = typeof ap;
            return ao !== "undefined"
        }

        function A(ao) {
            return typeof ao === "function"
        }

        function V(ao) {
            return typeof ao === "object"
        }

        function w(ao) {
            return typeof ao === "string" || ao instanceof String
        }

        function ag(ao) {
            return typeof ao === "number" || ao instanceof Number
        }

        function Y(ao) {
            return J(ao) && (ag(ao) || (w(ao) && ao.length))
        }

        function B(ap) {
            if (!ap) {
                return true
            }
            var ao;
            var aq = true;
            for (ao in ap) {
                if (Object.prototype.hasOwnProperty.call(ap, ao)) {
                    aq = false
                }
            }
            return aq
        }

        function ak(ao) {
            var ap = typeof console;
            if (ap !== "undefined" && console && console.error) {
                console.error(ao)
            }
        }

        function af() {
            var au, at, aw, ap, ao;
            for (au = 0; au < arguments.length; au += 1) {
                ao = null;
                if (arguments[au] && arguments[au].slice) {
                    ao = arguments[au].slice()
                }
                ap = arguments[au];
                aw = ap.shift();
                var av, aq;
                var ar = w(aw) && aw.indexOf("::") > 0;
                if (ar) {
                    av = aw.split("::");
                    aq = av[0];
                    aw = av[1];
                    if ("object" === typeof t[aq] && "function" === typeof t[aq][aw]) {
                        t[aq][aw].apply(t[aq], ap)
                    } else {
                        if (ao) {
                            ah.push(ao)
                        }
                    }
                } else {
                    for (at = 0; at < I.length; at++) {
                        if (w(aw)) {
                            aq = I[at];
                            var ax = aw.indexOf(".") > 0;
                            if (ax) {
                                av = aw.split(".");
                                if (aq && "object" === typeof aq[av[0]]) {
                                    aq = aq[av[0]];
                                    aw = av[1]
                                } else {
                                    if (ao) {
                                        ah.push(ao);
                                        break
                                    }
                                }
                            }
                            if (aq[aw]) {
                                aq[aw].apply(aq, ap)
                            } else {
                                var ay = "The method '" + aw + '\' was not found in "_paq" variable.  Please have a look at the Matomo tracker documentation: https://developer.matomo.org/api-reference/tracking-javascript';
                                ak(ay);
                                if (!ax) {
                                    throw new TypeError(ay)
                                }
                            }
                            if (aw === "addTracker") {
                                break
                            }
                            if (aw === "setTrackerUrl" || aw === "setSiteId") {
                                break
                            }
                        } else {
                            aw.apply(I[at], ap)
                        }
                    }
                }
            }
        }

        function an(ar, aq, ap, ao) {
            if (ar.addEventListener) {
                ar.addEventListener(aq, ap, ao);
                return true
            }
            if (ar.attachEvent) {
                return ar.attachEvent("on" + aq, ap)
            }
            ar["on" + aq] = ap
        }

        function m(ao) {
            if (G.readyState === "complete") {
                ao()
            } else {
                if (S.addEventListener) {
                    S.addEventListener("load", ao, false)
                } else {
                    if (S.attachEvent) {
                        S.attachEvent("onload", ao)
                    }
                }
            }
        }

        function p(ar) {
            var ao = false;
            if (G.attachEvent) {
                ao = G.readyState === "complete"
            } else {
                ao = G.readyState !== "loading"
            }
            if (ao) {
                ar();
                return
            }
            var aq;
            if (G.addEventListener) {
                an(G, "DOMContentLoaded", function ap() {
                    G.removeEventListener("DOMContentLoaded", ap, false);
                    if (!ao) {
                        ao = true;
                        ar()
                    }
                })
            } else {
                if (G.attachEvent) {
                    G.attachEvent("onreadystatechange", function ap() {
                        if (G.readyState === "complete") {
                            G.detachEvent("onreadystatechange", ap);
                            if (!ao) {
                                ao = true;
                                ar()
                            }
                        }
                    });
                    if (G.documentElement.doScroll && S === S.top) {
                        (function ap() {
                            if (!ao) {
                                try {
                                    G.documentElement.doScroll("left")
                                } catch (at) {
                                    setTimeout(ap, 0);
                                    return
                                }
                                ao = true;
                                ar()
                            }
                        }())
                    }
                }
            }
            an(S, "load", function() {
                if (!ao) {
                    ao = true;
                    ar()
                }
            }, false)
        }

        function ac(ap, av, aw) {
            if (!ap) {
                return ""
            }
            var ao = "",
                ar, aq, at, au;
            for (ar in b) {
                if (Object.prototype.hasOwnProperty.call(b, ar)) {
                    au = b[ar] && "function" === typeof b[ar][ap];
                    if (au) {
                        aq = b[ar][ap];
                        at = aq(av || {}, aw);
                        if (at) {
                            ao += at
                        }
                    }
                }
            }
            return ao
        }

        function ai() {
            var ao;
            l = true;
            ac("unload");
            ao = new Date();
            var ap = ao.getTimeAlias();
            if ((q - ap) > 3000) {
                q = ap + 3000
            }
            if (q) {
                do {
                    ao = new Date()
                } while (ao.getTimeAlias() < q)
            }
        }

        function n(aq, ap) {
            var ao = G.createElement("script");
            ao.type = "text/javascript";
            ao.src = aq;
            if (ao.readyState) {
                ao.onreadystatechange = function() {
                    var ar = this.readyState;
                    if (ar === "loaded" || ar === "complete") {
                        ao.onreadystatechange = null;
                        ap()
                    }
                }
            } else {
                ao.onload = ap
            }
            G.getElementsByTagName("head")[0].appendChild(ao)
        }

        function K() {
            var ao = "";
            try {
                ao = S.top.document.referrer
            } catch (aq) {
                if (S.parent) {
                    try {
                        ao = S.parent.document.referrer
                    } catch (ap) {
                        ao = ""
                    }
                }
            }
            if (ao === "") {
                ao = G.referrer
            }
            return ao
        }

        function r(ao) {
            var aq = new RegExp("^([a-z]+):"),
                ap = aq.exec(ao);
            return ap ? ap[1] : null
        }

        function d(ao) {
            var aq = new RegExp("^(?:(?:https?|ftp):)/*(?:[^@]+@)?([^:/#]+)"),
                ap = aq.exec(ao);
            return ap ? ap[1] : ao
        }

        function aj(ap, ao) {
            ap = String(ap);
            return ap.lastIndexOf(ao, 0) === 0
        }

        function Q(ap, ao) {
            ap = String(ap);
            return ap.indexOf(ao, ap.length - ao.length) !== -1
        }

        function z(ap, ao) {
            ap = String(ap);
            return ap.indexOf(ao) !== -1
        }

        function f(ap, ao) {
            ap = String(ap);
            return ap.substr(0, ap.length - ao)
        }

        function F(ar, aq, au) {
            ar = String(ar);
            if (!au) {
                au = ""
            }
            var ao = ar.indexOf("#");
            var av = ar.length;
            if (ao === -1) {
                ao = av
            }
            var at = ar.substr(0, ao);
            var ap = ar.substr(ao, av - ao);
            if (at.indexOf("?") === -1) {
                at += "?"
            } else {
                if (!Q(at, "?")) {
                    at += "&"
                }
            }
            return at + s(aq) + "=" + s(au) + ap
        }

        function j(ap, aq) {
            ap = String(ap);
            if (ap.indexOf("?" + aq + "=") === -1 && ap.indexOf("&" + aq + "=") === -1) {
                return ap
            }
            var ar = ap.indexOf("?");
            if (ar === -1) {
                return ap
            }
            var ao = ap.substr(ar + 1);
            var aw = ap.substr(0, ar);
            if (ao) {
                var ax = "";
                var az = ao.indexOf("#");
                if (az !== -1) {
                    ax = ao.substr(az + 1);
                    ao = ao.substr(0, az)
                }
                var at;
                var av = ao.split("&");
                var au = av.length - 1;
                for (au; au >= 0; au--) {
                    at = av[au].split("=")[0];
                    if (at === aq) {
                        av.splice(au, 1)
                    }
                }
                var ay = av.join("&");
                if (ay) {
                    aw = aw + "?" + ay
                }
                if (ax) {
                    aw += "#" + ax
                }
            }
            return aw
        }

        function e(aq, ap) {
            var ao = "[\\?&#]" + ap + "=([^&#]*)";
            var at = new RegExp(ao);
            var ar = at.exec(aq);
            return ar ? o(ar[1]) : ""
        }

        function a(ao) {
            if (ao && String(ao) === ao) {
                return ao.replace(/^\s+|\s+$/g, "")
            }
            return ao
        }

        function D(ao) {
            return unescape(s(ao))
        }

        function am(aE) {
            var aq = function(aK, aJ) {
                    return (aK << aJ) | (aK >>> (32 - aJ))
                },
                aF = function(aM) {
                    var aK = "",
                        aL, aJ;
                    for (aL = 7; aL >= 0; aL--) {
                        aJ = (aM >>> (aL * 4)) & 15;
                        aK += aJ.toString(16)
                    }
                    return aK
                },
                au, aH, aG, ap = [],
                ay = 1732584193,
                aw = 4023233417,
                av = 2562383102,
                at = 271733878,
                ar = 3285377520,
                aD, aC, aB, aA, az, aI, ao, ax = [];
            aE = D(aE);
            ao = aE.length;
            for (aH = 0; aH < ao - 3; aH += 4) {
                aG = aE.charCodeAt(aH) << 24 | aE.charCodeAt(aH + 1) << 16 | aE.charCodeAt(aH + 2) << 8 | aE.charCodeAt(aH + 3);
                ax.push(aG)
            }
            switch (ao & 3) {
                case 0:
                    aH = 2147483648;
                    break;
                case 1:
                    aH = aE.charCodeAt(ao - 1) << 24 | 8388608;
                    break;
                case 2:
                    aH = aE.charCodeAt(ao - 2) << 24 | aE.charCodeAt(ao - 1) << 16 | 32768;
                    break;
                case 3:
                    aH = aE.charCodeAt(ao - 3) << 24 | aE.charCodeAt(ao - 2) << 16 | aE.charCodeAt(ao - 1) << 8 | 128;
                    break
            }
            ax.push(aH);
            while ((ax.length & 15) !== 14) {
                ax.push(0)
            }
            ax.push(ao >>> 29);
            ax.push((ao << 3) & 4294967295);
            for (au = 0; au < ax.length; au += 16) {
                for (aH = 0; aH < 16; aH++) {
                    ap[aH] = ax[au + aH]
                }
                for (aH = 16; aH <= 79; aH++) {
                    ap[aH] = aq(ap[aH - 3] ^ ap[aH - 8] ^ ap[aH - 14] ^ ap[aH - 16], 1)
                }
                aD = ay;
                aC = aw;
                aB = av;
                aA = at;
                az = ar;
                for (aH = 0; aH <= 19; aH++) {
                    aI = (aq(aD, 5) + ((aC & aB) | (~aC & aA)) + az + ap[aH] + 1518500249) & 4294967295;
                    az = aA;
                    aA = aB;
                    aB = aq(aC, 30);
                    aC = aD;
                    aD = aI
                }
                for (aH = 20; aH <= 39; aH++) {
                    aI = (aq(aD, 5) + (aC ^ aB ^ aA) + az + ap[aH] + 1859775393) & 4294967295;
                    az = aA;
                    aA = aB;
                    aB = aq(aC, 30);
                    aC = aD;
                    aD = aI
                }
                for (aH = 40; aH <= 59; aH++) {
                    aI = (aq(aD, 5) + ((aC & aB) | (aC & aA) | (aB & aA)) + az + ap[aH] + 2400959708) & 4294967295;
                    az = aA;
                    aA = aB;
                    aB = aq(aC, 30);
                    aC = aD;
                    aD = aI
                }
                for (aH = 60; aH <= 79; aH++) {
                    aI = (aq(aD, 5) + (aC ^ aB ^ aA) + az + ap[aH] + 3395469782) & 4294967295;
                    az = aA;
                    aA = aB;
                    aB = aq(aC, 30);
                    aC = aD;
                    aD = aI
                }
                ay = (ay + aD) & 4294967295;
                aw = (aw + aC) & 4294967295;
                av = (av + aB) & 4294967295;
                at = (at + aA) & 4294967295;
                ar = (ar + az) & 4294967295
            }
            aI = aF(ay) + aF(aw) + aF(av) + aF(at) + aF(ar);
            return aI.toLowerCase()
        }

        function aa(aq, ao, ap) {
            if (!aq) {
                aq = ""
            }
            if (!ao) {
                ao = ""
            }
            if (aq === "translate.googleusercontent.com") {
                if (ap === "") {
                    ap = ao
                }
                ao = e(ao, "u");
                aq = d(ao)
            } else {
                if (aq === "cc.bingj.com" || aq === "webcache.googleusercontent.com" || aq.slice(0, 5) === "74.6.") {
                    ao = G.links[0].href;
                    aq = d(ao)
                }
            }
            return [aq, ao, ap]
        }

        function L(ap) {
            var ao = ap.length;
            if (ap.charAt(--ao) === ".") {
                ap = ap.slice(0, ao)
            }
            if (ap.slice(0, 2) === "*.") {
                ap = ap.slice(1)
            }
            if (ap.indexOf("/") !== -1) {
                ap = ap.substr(0, ap.indexOf("/"))
            }
            return ap
        }

        function al(ap) {
            ap = ap && ap.text ? ap.text : ap;
            if (!w(ap)) {
                var ao = G.getElementsByTagName("title");
                if (ao && J(ao[0])) {
                    ap = ao[0].text
                }
            }
            return ap
        }

        function O(ao) {
            if (!ao) {
                return []
            }
            if (!J(ao.children) && J(ao.childNodes)) {
                return ao.children
            }
            if (J(ao.children)) {
                return ao.children
            }
            return []
        }

        function U(ap, ao) {
            if (!ap || !ao) {
                return false
            }
            if (ap.contains) {
                return ap.contains(ao)
            }
            if (ap === ao) {
                return true
            }
            if (ap.compareDocumentPosition) {
                return !!(ap.compareDocumentPosition(ao) & 16)
            }
            return false
        }

        function M(aq, ar) {
            if (aq && aq.indexOf) {
                return aq.indexOf(ar)
            }
            if (!J(aq) || aq === null) {
                return -1
            }
            if (!aq.length) {
                return -1
            }
            var ao = aq.length;
            if (ao === 0) {
                return -1
            }
            var ap = 0;
            while (ap < ao) {
                if (aq[ap] === ar) {
                    return ap
                }
                ap++
            }
            return -1
        }

        function i(aq) {
            if (!aq) {
                return false
            }

            function ao(at, au) {
                if (S.getComputedStyle) {
                    return G.defaultView.getComputedStyle(at, null)[au]
                }
                if (at.currentStyle) {
                    return at.currentStyle[au]
                }
            }

            function ar(at) {
                at = at.parentNode;
                while (at) {
                    if (at === G) {
                        return true
                    }
                    at = at.parentNode
                }
                return false
            }

            function ap(av, aB, at, ay, aw, az, ax) {
                var au = av.parentNode,
                    aA = 1;
                if (!ar(av)) {
                    return false
                }
                if (9 === au.nodeType) {
                    return true
                }
                if ("0" === ao(av, "opacity") || "none" === ao(av, "display") || "hidden" === ao(av, "visibility")) {
                    return false
                }
                if (!J(aB) || !J(at) || !J(ay) || !J(aw) || !J(az) || !J(ax)) {
                    aB = av.offsetTop;
                    aw = av.offsetLeft;
                    ay = aB + av.offsetHeight;
                    at = aw + av.offsetWidth;
                    az = av.offsetWidth;
                    ax = av.offsetHeight
                }
                if (aq === av && (0 === ax || 0 === az) && "hidden" === ao(av, "overflow")) {
                    return false
                }
                if (au) {
                    if (("hidden" === ao(au, "overflow") || "scroll" === ao(au, "overflow"))) {
                        if (aw + aA > au.offsetWidth + au.scrollLeft || aw + az - aA < au.scrollLeft || aB + aA > au.offsetHeight + au.scrollTop || aB + ax - aA < au.scrollTop) {
                            return false
                        }
                    }
                    if (av.offsetParent === au) {
                        aw += au.offsetLeft;
                        aB += au.offsetTop
                    }
                    return ap(au, aB, at, ay, aw, az, ax)
                }
                return true
            }
            return ap(aq)
        }
        var ae = {
            htmlCollectionToArray: function(aq) {
                var ao = [],
                    ap;
                if (!aq || !aq.length) {
                    return ao
                }
                for (ap = 0; ap < aq.length; ap++) {
                    ao.push(aq[ap])
                }
                return ao
            },
            find: function(ao) {
                if (!document.querySelectorAll || !ao) {
                    return []
                }
                var ap = document.querySelectorAll(ao);
                return this.htmlCollectionToArray(ap)
            },
            findMultiple: function(aq) {
                if (!aq || !aq.length) {
                    return []
                }
                var ap, ar;
                var ao = [];
                for (ap = 0; ap < aq.length; ap++) {
                    ar = this.find(aq[ap]);
                    ao = ao.concat(ar)
                }
                ao = this.makeNodesUnique(ao);
                return ao
            },
            findNodesByTagName: function(ap, ao) {
                if (!ap || !ao || !ap.getElementsByTagName) {
                    return []
                }
                var aq = ap.getElementsByTagName(ao);
                return this.htmlCollectionToArray(aq)
            },
            makeNodesUnique: function(ao) {
                var au = [].concat(ao);
                ao.sort(function(aw, av) {
                    if (aw === av) {
                        return 0
                    }
                    var ay = M(au, aw);
                    var ax = M(au, av);
                    if (ay === ax) {
                        return 0
                    }
                    return ay > ax ? -1 : 1
                });
                if (ao.length <= 1) {
                    return ao
                }
                var ap = 0;
                var ar = 0;
                var at = [];
                var aq;
                aq = ao[ap++];
                while (aq) {
                    if (aq === ao[ap]) {
                        ar = at.push(ap)
                    }
                    aq = ao[ap++] || null
                }
                while (ar--) {
                    ao.splice(at[ar], 1)
                }
                return ao
            },
            getAttributeValueFromNode: function(at, aq) {
                if (!this.hasNodeAttribute(at, aq)) {
                    return
                }
                if (at && at.getAttribute) {
                    return at.getAttribute(aq)
                }
                if (!at || !at.attributes) {
                    return
                }
                var ar = (typeof at.attributes[aq]);
                if ("undefined" === ar) {
                    return
                }
                if (at.attributes[aq].value) {
                    return at.attributes[aq].value
                }
                if (at.attributes[aq].nodeValue) {
                    return at.attributes[aq].nodeValue
                }
                var ap;
                var ao = at.attributes;
                if (!ao) {
                    return
                }
                for (ap = 0; ap < ao.length; ap++) {
                    if (ao[ap].nodeName === aq) {
                        return ao[ap].nodeValue
                    }
                }
                return null
            },
            hasNodeAttributeWithValue: function(ap, ao) {
                var aq = this.getAttributeValueFromNode(ap, ao);
                return !!aq
            },
            hasNodeAttribute: function(aq, ao) {
                if (aq && aq.hasAttribute) {
                    return aq.hasAttribute(ao)
                }
                if (aq && aq.attributes) {
                    var ap = (typeof aq.attributes[ao]);
                    return "undefined" !== ap
                }
                return false
            },
            hasNodeCssClass: function(aq, ao) {
                if (aq && ao && aq.className) {
                    var ap = typeof aq.className === "string" ? aq.className.split(" ") : [];
                    if (-1 !== M(ap, ao)) {
                        return true
                    }
                }
                return false
            },
            findNodesHavingAttribute: function(at, aq, ao) {
                if (!ao) {
                    ao = []
                }
                if (!at || !aq) {
                    return ao
                }
                var ar = O(at);
                if (!ar || !ar.length) {
                    return ao
                }
                var ap, au;
                for (ap = 0; ap < ar.length; ap++) {
                    au = ar[ap];
                    if (this.hasNodeAttribute(au, aq)) {
                        ao.push(au)
                    }
                    ao = this.findNodesHavingAttribute(au, aq, ao)
                }
                return ao
            },
            findFirstNodeHavingAttribute: function(aq, ap) {
                if (!aq || !ap) {
                    return
                }
                if (this.hasNodeAttribute(aq, ap)) {
                    return aq
                }
                var ao = this.findNodesHavingAttribute(aq, ap);
                if (ao && ao.length) {
                    return ao[0]
                }
            },
            findFirstNodeHavingAttributeWithValue: function(ar, aq) {
                if (!ar || !aq) {
                    return
                }
                if (this.hasNodeAttributeWithValue(ar, aq)) {
                    return ar
                }
                var ao = this.findNodesHavingAttribute(ar, aq);
                if (!ao || !ao.length) {
                    return
                }
                var ap;
                for (ap = 0; ap < ao.length; ap++) {
                    if (this.getAttributeValueFromNode(ao[ap], aq)) {
                        return ao[ap]
                    }
                }
            },
            findNodesHavingCssClass: function(at, ar, ao) {
                if (!ao) {
                    ao = []
                }
                if (!at || !ar) {
                    return ao
                }
                if (at.getElementsByClassName) {
                    var au = at.getElementsByClassName(ar);
                    return this.htmlCollectionToArray(au)
                }
                var aq = O(at);
                if (!aq || !aq.length) {
                    return []
                }
                var ap, av;
                for (ap = 0; ap < aq.length; ap++) {
                    av = aq[ap];
                    if (this.hasNodeCssClass(av, ar)) {
                        ao.push(av)
                    }
                    ao = this.findNodesHavingCssClass(av, ar, ao)
                }
                return ao
            },
            findFirstNodeHavingClass: function(aq, ap) {
                if (!aq || !ap) {
                    return
                }
                if (this.hasNodeCssClass(aq, ap)) {
                    return aq
                }
                var ao = this.findNodesHavingCssClass(aq, ap);
                if (ao && ao.length) {
                    return ao[0]
                }
            },
            isLinkElement: function(ap) {
                if (!ap) {
                    return false
                }
                var ao = String(ap.nodeName).toLowerCase();
                var ar = ["a", "area"];
                var aq = M(ar, ao);
                return aq !== -1
            },
            setAnyAttribute: function(ap, ao, aq) {
                if (!ap || !ao) {
                    return
                }
                if (ap.setAttribute) {
                    ap.setAttribute(ao, aq)
                } else {
                    ap[ao] = aq
                }
            }
        };
        var v = {
            CONTENT_ATTR: "data-track-content",
            CONTENT_CLASS: "matomoTrackContent",
            LEGACY_CONTENT_CLASS: "piwikTrackContent",
            CONTENT_NAME_ATTR: "data-content-name",
            CONTENT_PIECE_ATTR: "data-content-piece",
            CONTENT_PIECE_CLASS: "matomoContentPiece",
            LEGACY_CONTENT_PIECE_CLASS: "piwikContentPiece",
            CONTENT_TARGET_ATTR: "data-content-target",
            CONTENT_TARGET_CLASS: "matomoContentTarget",
            LEGACY_CONTENT_TARGET_CLASS: "piwikContentTarget",
            CONTENT_IGNOREINTERACTION_ATTR: "data-content-ignoreinteraction",
            CONTENT_IGNOREINTERACTION_CLASS: "matomoContentIgnoreInteraction",
            LEGACY_CONTENT_IGNOREINTERACTION_CLASS: "piwikContentIgnoreInteraction",
            location: undefined,
            findContentNodes: function() {
                var ap = "." + this.CONTENT_CLASS;
                var aq = "." + this.LEGACY_CONTENT_CLASS;
                var ao = "[" + this.CONTENT_ATTR + "]";
                var ar = ae.findMultiple([ap, aq, ao]);
                return ar
            },
            findContentNodesWithinNode: function(ar) {
                if (!ar) {
                    return []
                }
                var ap = ae.findNodesHavingCssClass(ar, this.CONTENT_CLASS);
                ap = ae.findNodesHavingCssClass(ar, this.LEGACY_CONTENT_CLASS, ap);
                var ao = ae.findNodesHavingAttribute(ar, this.CONTENT_ATTR);
                if (ao && ao.length) {
                    var aq;
                    for (aq = 0; aq < ao.length; aq++) {
                        ap.push(ao[aq])
                    }
                }
                if (ae.hasNodeAttribute(ar, this.CONTENT_ATTR)) {
                    ap.push(ar)
                } else {
                    if (ae.hasNodeCssClass(ar, this.CONTENT_CLASS)) {
                        ap.push(ar)
                    } else {
                        if (ae.hasNodeCssClass(ar, this.LEGACY_CONTENT_CLASS)) {
                            ap.push(ar)
                        }
                    }
                }
                ap = ae.makeNodesUnique(ap);
                return ap
            },
            findParentContentNode: function(ap) {
                if (!ap) {
                    return
                }
                var aq = ap;
                var ao = 0;
                while (aq && aq !== G && aq.parentNode) {
                    if (ae.hasNodeAttribute(aq, this.CONTENT_ATTR)) {
                        return aq
                    }
                    if (ae.hasNodeCssClass(aq, this.CONTENT_CLASS)) {
                        return aq
                    }
                    if (ae.hasNodeCssClass(aq, this.LEGACY_CONTENT_CLASS)) {
                        return aq
                    }
                    aq = aq.parentNode;
                    if (ao > 1000) {
                        break
                    }
                    ao++
                }
            },
            findPieceNode: function(ap) {
                var ao;
                ao = ae.findFirstNodeHavingAttribute(ap, this.CONTENT_PIECE_ATTR);
                if (!ao) {
                    ao = ae.findFirstNodeHavingClass(ap, this.CONTENT_PIECE_CLASS)
                }
                if (!ao) {
                    ao = ae.findFirstNodeHavingClass(ap, this.LEGACY_CONTENT_PIECE_CLASS)
                }
                if (ao) {
                    return ao
                }
                return ap
            },
            findTargetNodeNoDefault: function(ao) {
                if (!ao) {
                    return
                }
                var ap = ae.findFirstNodeHavingAttributeWithValue(ao, this.CONTENT_TARGET_ATTR);
                if (ap) {
                    return ap
                }
                ap = ae.findFirstNodeHavingAttribute(ao, this.CONTENT_TARGET_ATTR);
                if (ap) {
                    return ap
                }
                ap = ae.findFirstNodeHavingClass(ao, this.CONTENT_TARGET_CLASS);
                if (ap) {
                    return ap
                }
                ap = ae.findFirstNodeHavingClass(ao, this.LEGACY_CONTENT_TARGET_CLASS);
                if (ap) {
                    return ap
                }
            },
            findTargetNode: function(ao) {
                var ap = this.findTargetNodeNoDefault(ao);
                if (ap) {
                    return ap
                }
                return ao
            },
            findContentName: function(ap) {
                if (!ap) {
                    return
                }
                var at = ae.findFirstNodeHavingAttributeWithValue(ap, this.CONTENT_NAME_ATTR);
                if (at) {
                    return ae.getAttributeValueFromNode(at, this.CONTENT_NAME_ATTR)
                }
                var ao = this.findContentPiece(ap);
                if (ao) {
                    return this.removeDomainIfIsInLink(ao)
                }
                if (ae.hasNodeAttributeWithValue(ap, "title")) {
                    return ae.getAttributeValueFromNode(ap, "title")
                }
                var aq = this.findPieceNode(ap);
                if (ae.hasNodeAttributeWithValue(aq, "title")) {
                    return ae.getAttributeValueFromNode(aq, "title")
                }
                var ar = this.findTargetNode(ap);
                if (ae.hasNodeAttributeWithValue(ar, "title")) {
                    return ae.getAttributeValueFromNode(ar, "title")
                }
            },
            findContentPiece: function(ap) {
                if (!ap) {
                    return
                }
                var ar = ae.findFirstNodeHavingAttributeWithValue(ap, this.CONTENT_PIECE_ATTR);
                if (ar) {
                    return ae.getAttributeValueFromNode(ar, this.CONTENT_PIECE_ATTR)
                }
                var ao = this.findPieceNode(ap);
                var aq = this.findMediaUrlInNode(ao);
                if (aq) {
                    return this.toAbsoluteUrl(aq)
                }
            },
            findContentTarget: function(aq) {
                if (!aq) {
                    return
                }
                var ar = this.findTargetNode(aq);
                if (ae.hasNodeAttributeWithValue(ar, this.CONTENT_TARGET_ATTR)) {
                    return ae.getAttributeValueFromNode(ar, this.CONTENT_TARGET_ATTR)
                }
                var ap;
                if (ae.hasNodeAttributeWithValue(ar, "href")) {
                    ap = ae.getAttributeValueFromNode(ar, "href");
                    return this.toAbsoluteUrl(ap)
                }
                var ao = this.findPieceNode(aq);
                if (ae.hasNodeAttributeWithValue(ao, "href")) {
                    ap = ae.getAttributeValueFromNode(ao, "href");
                    return this.toAbsoluteUrl(ap)
                }
            },
            isSameDomain: function(ao) {
                if (!ao || !ao.indexOf) {
                    return false
                }
                if (0 === ao.indexOf(this.getLocation().origin)) {
                    return true
                }
                var ap = ao.indexOf(this.getLocation().host);
                if (8 >= ap && 0 <= ap) {
                    return true
                }
                return false
            },
            removeDomainIfIsInLink: function(aq) {
                var ap = "^https?://[^/]+";
                var ao = "^.*//[^/]+";
                if (aq && aq.search && -1 !== aq.search(new RegExp(ap)) && this.isSameDomain(aq)) {
                    aq = aq.replace(new RegExp(ao), "");
                    if (!aq) {
                        aq = "/"
                    }
                }
                return aq
            },
            findMediaUrlInNode: function(at) {
                if (!at) {
                    return
                }
                var aq = ["img", "embed", "video", "audio"];
                var ao = at.nodeName.toLowerCase();
                if (-1 !== M(aq, ao) && ae.findFirstNodeHavingAttributeWithValue(at, "src")) {
                    var ar = ae.findFirstNodeHavingAttributeWithValue(at, "src");
                    return ae.getAttributeValueFromNode(ar, "src")
                }
                if (ao === "object" && ae.hasNodeAttributeWithValue(at, "data")) {
                    return ae.getAttributeValueFromNode(at, "data")
                }
                if (ao === "object") {
                    var au = ae.findNodesByTagName(at, "param");
                    if (au && au.length) {
                        var ap;
                        for (ap = 0; ap < au.length; ap++) {
                            if ("movie" === ae.getAttributeValueFromNode(au[ap], "name") && ae.hasNodeAttributeWithValue(au[ap], "value")) {
                                return ae.getAttributeValueFromNode(au[ap], "value")
                            }
                        }
                    }
                    var av = ae.findNodesByTagName(at, "embed");
                    if (av && av.length) {
                        return this.findMediaUrlInNode(av[0])
                    }
                }
            },
            trim: function(ao) {
                return a(ao)
            },
            isOrWasNodeInViewport: function(au) {
                if (!au || !au.getBoundingClientRect || au.nodeType !== 1) {
                    return true
                }
                var at = au.getBoundingClientRect();
                var ar = G.documentElement || {};
                var aq = at.top < 0;
                if (aq && au.offsetTop) {
                    aq = (au.offsetTop + at.height) > 0
                }
                var ap = ar.clientWidth;
                if (S.innerWidth && ap > S.innerWidth) {
                    ap = S.innerWidth
                }
                var ao = ar.clientHeight;
                if (S.innerHeight && ao > S.innerHeight) {
                    ao = S.innerHeight
                }
                return ((at.bottom > 0 || aq) && at.right > 0 && at.left < ap && ((at.top < ao) || aq))
            },
            isNodeVisible: function(ap) {
                var ao = i(ap);
                var aq = this.isOrWasNodeInViewport(ap);
                return ao && aq
            },
            buildInteractionRequestParams: function(ao, ap, aq, ar) {
                var at = "";
                if (ao) {
                    at += "c_i=" + s(ao)
                }
                if (ap) {
                    if (at) {
                        at += "&"
                    }
                    at += "c_n=" + s(ap)
                }
                if (aq) {
                    if (at) {
                        at += "&"
                    }
                    at += "c_p=" + s(aq)
                }
                if (ar) {
                    if (at) {
                        at += "&"
                    }
                    at += "c_t=" + s(ar)
                }
                if (at) {
                    at += "&ca=1"
                }
                return at
            },
            buildImpressionRequestParams: function(ao, ap, aq) {
                var ar = "c_n=" + s(ao) + "&c_p=" + s(ap);
                if (aq) {
                    ar += "&c_t=" + s(aq)
                }
                if (ar) {
                    ar += "&ca=1"
                }
                return ar
            },
            buildContentBlock: function(aq) {
                if (!aq) {
                    return
                }
                var ao = this.findContentName(aq);
                var ap = this.findContentPiece(aq);
                var ar = this.findContentTarget(aq);
                ao = this.trim(ao);
                ap = this.trim(ap);
                ar = this.trim(ar);
                return {
                    name: ao || "Unknown",
                    piece: ap || "Unknown",
                    target: ar || ""
                }
            },
            collectContent: function(ar) {
                if (!ar || !ar.length) {
                    return []
                }
                var aq = [];
                var ao, ap;
                for (ao = 0; ao < ar.length; ao++) {
                    ap = this.buildContentBlock(ar[ao]);
                    if (J(ap)) {
                        aq.push(ap)
                    }
                }
                return aq
            },
            setLocation: function(ao) {
                this.location = ao
            },
            getLocation: function() {
                var ao = this.location || S.location;
                if (!ao.origin) {
                    ao.origin = ao.protocol + "//" + ao.hostname + (ao.port ? ":" + ao.port : "")
                }
                return ao
            },
            toAbsoluteUrl: function(ap) {
                if ((!ap || String(ap) !== ap) && ap !== "") {
                    return ap
                }
                if ("" === ap) {
                    return this.getLocation().href
                }
                if (ap.search(/^\/\//) !== -1) {
                    return this.getLocation().protocol + ap
                }
                if (ap.search(/:\/\//) !== -1) {
                    return ap
                }
                if (0 === ap.indexOf("#")) {
                    return this.getLocation().origin + this.getLocation().pathname + ap
                }
                if (0 === ap.indexOf("?")) {
                    return this.getLocation().origin + this.getLocation().pathname + ap
                }
                if (0 === ap.search("^[a-zA-Z]{2,11}:")) {
                    return ap
                }
                if (ap.search(/^\//) !== -1) {
                    return this.getLocation().origin + ap
                }
                var ao = "(.*/)";
                var aq = this.getLocation().origin + this.getLocation().pathname.match(new RegExp(ao))[0];
                return aq + ap
            },
            isUrlToCurrentDomain: function(ap) {
                var aq = this.toAbsoluteUrl(ap);
                if (!aq) {
                    return false
                }
                var ao = this.getLocation().origin;
                if (ao === aq) {
                    return true
                }
                if (0 === String(aq).indexOf(ao)) {
                    if (":" === String(aq).substr(ao.length, 1)) {
                        return false
                    }
                    return true
                }
                return false
            },
            setHrefAttribute: function(ap, ao) {
                if (!ap || !ao) {
                    return
                }
                ae.setAnyAttribute(ap, "href", ao)
            },
            shouldIgnoreInteraction: function(ao) {
                if (ae.hasNodeAttribute(ao, this.CONTENT_IGNOREINTERACTION_ATTR)) {
                    return true
                }
                if (ae.hasNodeCssClass(ao, this.CONTENT_IGNOREINTERACTION_CLASS)) {
                    return true
                }
                if (ae.hasNodeCssClass(ao, this.LEGACY_CONTENT_IGNOREINTERACTION_CLASS)) {
                    return true
                }
                return false
            }
        };

        function W(ap, at) {
            if (at) {
                return at
            }
            ap = v.toAbsoluteUrl(ap);
            if (z(ap, "?")) {
                var ar = ap.indexOf("?");
                ap = ap.slice(0, ar)
            }
            if (Q(ap, "matomo.php")) {
                ap = f(ap, "matomo.php".length)
            } else {
                if (Q(ap, "piwik.php")) {
                    ap = f(ap, "piwik.php".length)
                } else {
                    if (Q(ap, ".php")) {
                        var ao = ap.lastIndexOf("/");
                        var aq = 1;
                        ap = ap.slice(0, ao + aq)
                    }
                }
            }
            if (Q(ap, "/js/")) {
                ap = f(ap, "js/".length)
            }
            return ap
        }

        function N(av) {
            var ax = "Matomo_Overlay";
            var ap = new RegExp("index\\.php\\?module=Overlay&action=startOverlaySession&idSite=([0-9]+)&period=([^&]+)&date=([^&]+)(&segment=.*)?$");
            var aq = ap.exec(G.referrer);
            if (aq) {
                var at = aq[1];
                if (at !== String(av)) {
                    return false
                }
                var au = aq[2],
                    ao = aq[3],
                    ar = aq[4];
                if (!ar) {
                    ar = ""
                } else {
                    if (ar.indexOf("&segment=") === 0) {
                        ar = ar.substr("&segment=".length)
                    }
                }
                S.name = ax + "###" + au + "###" + ao + "###" + ar
            }
            var aw = S.name.split("###");
            return aw.length === 4 && aw[0] === ax
        }

        function Z(ap, av, aq) {
            var au = S.name.split("###"),
                at = au[1],
                ao = au[2],
                ar = au[3],
                aw = W(ap, av);
            n(aw + "plugins/Overlay/client/client.js?v=1", function() {
                Matomo_Overlay_Client.initialize(aw, aq, at, ao, ar)
            })
        }

        function u() {
            var aq;
            try {
                aq = S.frameElement
            } catch (ap) {
                return true
            }
            if (J(aq)) {
                return (aq && String(aq.nodeName).toLowerCase() === "iframe") ? true : false
            }
            try {
                return S.self !== S.top
            } catch (ao) {
                return true
            }
        }

        function P(ce, ca) {
            var bK = this,
                be = "mtm_consent",
                cE = "mtm_cookie_consent",
                cN = "mtm_consent_removed",
                b5 = aa(G.domain, S.location.href, K()),
                cV = L(b5[0]),
                bO = o(b5[1]),
                bp = o(b5[2]),
                cT = false,
                ci = "GET",
                da = ci,
                aI = "application/x-www-form-urlencoded; charset=UTF-8",
                cx = aI,
                aE = ce || "",
                bJ = "",
                c0 = "",
                b7 = ca || "",
                bA = "",
                bP = "",
                a5, bk = "",
                c7 = ["7z", "aac", "apk", "arc", "arj", "asf", "asx", "avi", "azw3", "bin", "csv", "deb", "dmg", "doc", "docx", "epub", "exe", "flv", "gif", "gz", "gzip", "hqx", "ibooks", "jar", "jpg", "jpeg", "js", "mobi", "mp2", "mp3", "mp4", "mpg", "mpeg", "mov", "movie", "msi", "msp", "odb", "odf", "odg", "ods", "odt", "ogg", "ogv", "pdf", "phps", "png", "ppt", "pptx", "qt", "qtm", "ra", "ram", "rar", "rpm", "rtf", "sea", "sit", "tar", "tbz", "tbz2", "bz", "bz2", "tgz", "torrent", "txt", "wav", "wma", "wmv", "wpd", "xls", "xlsx", "xml", "z", "zip"],
                ay = [cV],
                bB = [],
                bM = [],
                a9 = [],
                bL = 500,
                cX = true,
                cK, a6, bS, bQ, ao, cp = ["pk_campaign", "mtm_campaign", "piwik_campaign", "matomo_campaign", "utm_campaign", "utm_source", "utm_medium"],
                bI = ["pk_kwd", "mtm_kwd", "piwik_kwd", "matomo_kwd", "utm_term"],
                bl = "_pk_",
                av = "pk_vid",
                a0 = 180,
                cY, br, bT = false,
                aJ = "Lax",
                bn = false,
                cR, bf, bx, cL = 33955200000,
                cn = 1800000,
                c6 = 15768000000,
                a3 = true,
                bG = false,
                bi = false,
                bR = false,
                aR = false,
                cc, bX = {},
                cm = {},
                bo = {},
                bv = 200,
                ct = {},
                c1 = {},
                c8 = {},
                cb = [],
                cf = false,
                cC = false,
                ap = false,
                c9 = false,
                cO = false,
                aO = false,
                bd = u(),
                cy = null,
                cZ = null,
                aS, bC, b8 = am,
                bq, aM, cq = 0,
                bw = ["id", "ses", "cvar", "ref"],
                cB = false,
                bD = null,
                cM = [],
                cs = [],
                ax = T++,
                aw = false;
            try {
                bk = G.title
            } catch (cz) {
                bk = ""
            }

            function de(dr, dp, dn, dq, dm, dl, dk) {
                if (bn && dr !== cN) {
                    return
                }
                var dj;
                if (dn) {
                    dj = new Date();
                    dj.setTime(dj.getTime() + dn)
                }
                if (!dk) {
                    dk = "Lax"
                }
                G.cookie = dr + "=" + s(dp) + (dn ? ";expires=" + dj.toGMTString() : "") + ";path=" + (dq || "/") + (dm ? ";domain=" + dm : "") + (dl ? ";secure" : "") + ";SameSite=" + dk
            }

            function aD(dl) {
                if (bn) {
                    return 0
                }
                var dj = new RegExp("(^|;)[ ]*" + dl + "=([^;]*)"),
                    dk = dj.exec(G.cookie);
                return dk ? R(dk[2]) : 0
            }
            bD = !aD(cN);

            function b3(dj) {
                var dk;
                dj = j(dj, av);
                if (bQ) {
                    dk = new RegExp("#.*");
                    return dj.replace(dk, "")
                }
                return dj
            }

            function bW(dl, dj) {
                var dm = r(dj),
                    dk;
                if (dm) {
                    return dj
                }
                if (dj.slice(0, 1) === "/") {
                    return r(dl) + "://" + d(dl) + dj
                }
                dl = b3(dl);
                dk = dl.indexOf("?");
                if (dk >= 0) {
                    dl = dl.slice(0, dk)
                }
                dk = dl.lastIndexOf("/");
                if (dk !== dl.length - 1) {
                    dl = dl.slice(0, dk + 1)
                }
                return dl + dj
            }

            function cI(dl, dj) {
                var dk;
                dl = String(dl).toLowerCase();
                dj = String(dj).toLowerCase();
                if (dl === dj) {
                    return true
                }
                if (dj.slice(0, 1) === ".") {
                    if (dl === dj.slice(1)) {
                        return true
                    }
                    dk = dl.length - dj.length;
                    if ((dk > 0) && (dl.slice(dk) === dj)) {
                        return true
                    }
                }
                return false
            }

            function cl(dj) {
                var dk = document.createElement("a");
                if (dj.indexOf("//") !== 0 && dj.indexOf("http") !== 0) {
                    if (dj.indexOf("*") === 0) {
                        dj = dj.substr(1)
                    }
                    if (dj.indexOf(".") === 0) {
                        dj = dj.substr(1)
                    }
                    dj = "http://" + dj
                }
                dk.href = v.toAbsoluteUrl(dj);
                if (dk.pathname) {
                    return dk.pathname
                }
                return ""
            }

            function a4(dk, dj) {
                if (!aj(dj, "/")) {
                    dj = "/" + dj
                }
                if (!aj(dk, "/")) {
                    dk = "/" + dk
                }
                var dl = (dj === "/" || dj === "/*");
                if (dl) {
                    return true
                }
                if (dk === dj) {
                    return true
                }
                dj = String(dj).toLowerCase();
                dk = String(dk).toLowerCase();
                if (Q(dj, "*")) {
                    dj = dj.slice(0, -1);
                    dl = (!dj || dj === "/");
                    if (dl) {
                        return true
                    }
                    if (dk === dj) {
                        return true
                    }
                    return dk.indexOf(dj) === 0
                }
                if (!Q(dk, "/")) {
                    dk += "/"
                }
                if (!Q(dj, "/")) {
                    dj += "/"
                }
                return dk.indexOf(dj) === 0
            }

            function ar(dn, dq) {
                var dk, dj, dl, dm, dp;
                for (dk = 0; dk < ay.length; dk++) {
                    dm = L(ay[dk]);
                    dp = cl(ay[dk]);
                    if (cI(dn, dm) && a4(dq, dp)) {
                        return true
                    }
                }
                return false
            }

            function aW(dm) {
                var dk, dj, dl;
                for (dk = 0; dk < ay.length; dk++) {
                    dj = L(ay[dk].toLowerCase());
                    if (dm === dj) {
                        return true
                    }
                    if (dj.slice(0, 1) === ".") {
                        if (dm === dj.slice(1)) {
                            return true
                        }
                        dl = dm.length - dj.length;
                        if ((dl > 0) && (dm.slice(dl) === dj)) {
                            return true
                        }
                    }
                }
                return false
            }

            function co(dj, dl) {
                dj = dj.replace("send_image=0", "send_image=1");
                var dk = new Image(1, 1);
                dk.onload = function() {
                    E = 0;
                    if (typeof dl === "function") {
                        dl({
                            request: dj,
                            trackerUrl: aE,
                            success: true
                        })
                    }
                };
                dk.onerror = function() {
                    if (typeof dl === "function") {
                        dl({
                            request: dj,
                            trackerUrl: aE,
                            success: false
                        })
                    }
                };
                dk.src = aE + (aE.indexOf("?") < 0 ? "?" : "&") + dj
            }

            function cF(dj) {
                if (da === "POST") {
                    return true
                }
                return dj && (dj.length > 2000 || dj.indexOf('{"requests"') === 0)
            }

            function aL() {
                return "object" === typeof g && "function" === typeof g.sendBeacon && "function" === typeof Blob
            }

            function a7(dn, dr, dq) {
                var dl = aL();
                if (!dl) {
                    return false
                }
                var dm = {
                    type: "application/x-www-form-urlencoded; charset=UTF-8"
                };
                var ds = false;
                var dk = aE;
                try {
                    var dj = new Blob([dn], dm);
                    if (dq && !cF(dn)) {
                        dj = new Blob([], dm);
                        dk = dk + (dk.indexOf("?") < 0 ? "?" : "&") + dn
                    }
                    ds = g.sendBeacon(dk, dj)
                } catch (dp) {
                    return false
                }
                if (ds && typeof dr === "function") {
                    dr({
                        request: dn,
                        trackerUrl: aE,
                        success: true,
                        isSendBeacon: true
                    })
                }
                return ds
            }

            function c5(dk, dl, dj) {
                if (!J(dj) || null === dj) {
                    dj = true
                }
                if (l && a7(dk, dl, dj)) {
                    return
                }
                setTimeout(function() {
                    if (l && a7(dk, dl, dj)) {
                        return
                    }
                    var dp;
                    try {
                        var dn = S.XMLHttpRequest ? new S.XMLHttpRequest() : S.ActiveXObject ? new ActiveXObject("Microsoft.XMLHTTP") : null;
                        dn.open("POST", aE, true);
                        dn.onreadystatechange = function() {
                            if (this.readyState === 4 && !(this.status >= 200 && this.status < 300)) {
                                var dq = l && a7(dk, dl, dj);
                                if (!dq && dj) {
                                    co(dk, dl)
                                } else {
                                    if (typeof dl === "function") {
                                        dl({
                                            request: dk,
                                            trackerUrl: aE,
                                            success: false,
                                            xhr: this
                                        })
                                    }
                                }
                            } else {
                                if (this.readyState === 4 && (typeof dl === "function")) {
                                    dl({
                                        request: dk,
                                        trackerUrl: aE,
                                        success: true,
                                        xhr: this
                                    })
                                }
                            }
                        };
                        dn.setRequestHeader("Content-Type", cx);
                        dn.withCredentials = true;
                        dn.send(dk)
                    } catch (dm) {
                        dp = l && a7(dk, dl, dj);
                        if (!dp && dj) {
                            co(dk, dl)
                        } else {
                            if (typeof dl === "function") {
                                dl({
                                    request: dk,
                                    trackerUrl: aE,
                                    success: false
                                })
                            }
                        }
                    }
                }, 50)
            }

            function cg(dk) {
                var dj = new Date();
                var dl = dj.getTime() + dk;
                if (!q || dl > q) {
                    q = dl
                }
            }

            function bb() {
                bd = true;
                cy = new Date().getTime()
            }

            function dd() {
                var dj = new Date().getTime();
                return !cy || (dj - cy) > a6
            }

            function az() {
                if (dd()) {
                    bS()
                }
            }

            function dg() {
                if (aO || !a6) {
                    return
                }
                aO = true;
                an(S, "focus", bb);
                an(S, "blur", az);
                ab++;
                t.addPlugin("HeartBeat" + ab, {
                    unload: function() {
                        if (aO && dd()) {
                            bS()
                        }
                    }
                })
            }

            function cD(dn) {
                var dk = new Date();
                var dj = dk.getTime();
                cZ = dj;
                if (cC && dj < cC) {
                    var dl = cC - dj;
                    setTimeout(dn, dl);
                    cg(dl + 50);
                    cC += 50;
                    return
                }
                if (cC === false) {
                    var dm = 800;
                    cC = dj + dm
                }
                dn()
            }

            function aP() {
                if (aD(cN)) {
                    bD = false
                } else {
                    if (aD(be)) {
                        bD = true
                    }
                }
            }

            function bH(dk, dj, dl) {
                aP();
                if (!bD) {
                    cM.push(dk);
                    return
                }
                aw = true;
                if (!cR && dk) {
                    if (cB && bD) {
                        dk += "&consent=1"
                    }
                    cD(function() {
                        if (cX && a7(dk, dl, true)) {
                            cg(100);
                            return
                        }
                        if (cF(dk)) {
                            c5(dk, dl)
                        } else {
                            co(dk, dl)
                        }
                        cg(dj)
                    })
                }
                if (!aO) {
                    dg()
                }
            }

            function ck(dj) {
                if (cR) {
                    return false
                }
                return (dj && dj.length)
            }

            function c4(dj, dn) {
                if (!dn || dn >= dj.length) {
                    return [dj]
                }
                var dk = 0;
                var dl = dj.length;
                var dm = [];
                for (dk; dk < dl; dk += dn) {
                    dm.push(dj.slice(dk, dk + dn))
                }
                return dm
            }

            function df(dk, dj) {
                if (!ck(dk)) {
                    return
                }
                if (!bD) {
                    cM.push(dk);
                    return
                }
                aw = true;
                cD(function() {
                    var dn = c4(dk, 50);
                    var dl = 0,
                        dm;
                    for (dl; dl < dn.length; dl++) {
                        dm = '{"requests":["?' + dn[dl].join('","?') + '"],"send_image":0}';
                        if (cX && a7(dm, null, false)) {
                            cg(100)
                        } else {
                            c5(dm, null, false)
                        }
                    }
                    cg(dj)
                })
            }

            function aU(dj) {
                return bl + dj + "." + b7 + "." + bq
            }

            function bZ(dl, dk, dj) {
                de(dl, "", -86400, dk, dj)
            }

            function b6() {
                if (bn) {
                    return "0"
                }
                if (!J(S.showModalDialog) && J(g.cookieEnabled)) {
                    return g.cookieEnabled ? "1" : "0"
                }
                var dj = bl + "testcookie";
                de(dj, "1", undefined, br, cY, bT, aJ);
                var dk = aD(dj) === "1" ? "1" : "0";
                bZ(dj);
                return dk
            }

            function bj() {
                bq = b8((cY || cV) + (br || "/")).slice(0, 4)
            }

            function cJ() {
                if (J(c8.res)) {
                    return c8
                }
                var dk, dm, dn = {
                    pdf: "application/pdf",
                    qt: "video/quicktime",
                    realp: "audio/x-pn-realaudio-plugin",
                    wma: "application/x-mplayer2",
                    fla: "application/x-shockwave-flash",
                    java: "application/x-java-vm",
                    ag: "application/x-silverlight"
                };
                if (!((new RegExp("MSIE")).test(g.userAgent))) {
                    if (g.mimeTypes && g.mimeTypes.length) {
                        for (dk in dn) {
                            if (Object.prototype.hasOwnProperty.call(dn, dk)) {
                                dm = g.mimeTypes[dn[dk]];
                                c8[dk] = (dm && dm.enabledPlugin) ? "1" : "0"
                            }
                        }
                    }
                    if (!((new RegExp("Edge[ /](\\d+[\\.\\d]+)")).test(g.userAgent)) && typeof navigator.javaEnabled !== "unknown" && J(g.javaEnabled) && g.javaEnabled()) {
                        c8.java = "1"
                    }
                    if (!J(S.showModalDialog) && J(g.cookieEnabled)) {
                        c8.cookie = g.cookieEnabled ? "1" : "0"
                    } else {
                        c8.cookie = b6()
                    }
                }
                var dl = parseInt(X.width, 10);
                var dj = parseInt(X.height, 10);
                c8.res = parseInt(dl, 10) + "x" + parseInt(dj, 10);
                return c8
            }

            function bY() {
                var dk = aU("cvar"),
                    dj = aD(dk);
                if (dj && dj.length) {
                    dj = S.JSON.parse(dj);
                    if (V(dj)) {
                        return dj
                    }
                }
                return {}
            }

            function cG() {
                if (aR === false) {
                    aR = bY()
                }
            }

            function cS() {
                var dj = cJ();
                return b8((g.userAgent || "") + (g.platform || "") + S.JSON.stringify(dj) + (new Date()).getTime() + Math.random()).slice(0, 16)
            }

            function aB() {
                var dj = cJ();
                return b8((g.userAgent || "") + (g.platform || "") + S.JSON.stringify(dj)).slice(0, 6)
            }

            function bg() {
                return Math.floor((new Date()).getTime() / 1000)
            }

            function aK() {
                var dk = bg();
                var dl = aB();
                var dj = String(dk) + dl;
                return dj
            }

            function c3(dl) {
                dl = String(dl);
                var dp = aB();
                var dm = dp.length;
                var dn = dl.substr(-1 * dm, dm);
                var dk = parseInt(dl.substr(0, dl.length - dm), 10);
                if (dk && dn && dn === dp) {
                    var dj = bg();
                    if (a0 <= 0) {
                        return true
                    }
                    if (dj >= dk && dj <= (dk + a0)) {
                        return true
                    }
                }
                return false
            }

            function dh(dj) {
                if (!cO) {
                    return ""
                }
                var dn = e(dj, av);
                if (!dn) {
                    return ""
                }
                dn = String(dn);
                var dl = new RegExp("^[a-zA-Z0-9]+$");
                if (dn.length === 32 && dl.test(dn)) {
                    var dk = dn.substr(16, 32);
                    if (c3(dk)) {
                        var dm = dn.substr(0, 16);
                        return dm
                    }
                }
                return ""
            }

            function cP() {
                if (!bP) {
                    bP = dh(bO)
                }
                var dl = new Date(),
                    dj = Math.round(dl.getTime() / 1000),
                    dk = aU("id"),
                    dp = aD(dk),
                    dn, dm;
                if (dp) {
                    dn = dp.split(".");
                    dn.unshift("0");
                    if (bP.length) {
                        dn[1] = bP
                    }
                    return dn
                }
                if (bP.length) {
                    dm = bP
                } else {
                    if ("0" === b6()) {
                        dm = ""
                    } else {
                        dm = cS()
                    }
                }
                dn = ["1", dm, dj];
                return dn
            }

            function aZ() {
                var dm = cP(),
                    dk = dm[0],
                    dl = dm[1],
                    dj = dm[2];
                return {
                    newVisitor: dk,
                    uuid: dl,
                    createTs: dj
                }
            }

            function aH() {
                var dm = new Date(),
                    dk = dm.getTime(),
                    dn = aZ().createTs;
                var dj = parseInt(dn, 10);
                var dl = (dj * 1000) + cL - dk;
                return dl
            }

            function aN(dj) {
                if (!b7) {
                    return
                }
                var dl = new Date(),
                    dk = Math.round(dl.getTime() / 1000);
                if (!J(dj)) {
                    dj = aZ()
                }
                var dm = dj.uuid + "." + dj.createTs + ".";
                de(aU("id"), dm, aH(), br, cY, bT, aJ)
            }

            function bN() {
                var dj = aD(aU("ref"));
                if (dj.length) {
                    try {
                        dj = S.JSON.parse(dj);
                        if (V(dj)) {
                            return dj
                        }
                    } catch (dk) {}
                }
                return ["", "", 0, ""]
            }

            function by(dl) {
                var dk = bl + "testcookie_domain";
                var dj = "testvalue";
                de(dk, dj, 10000, null, dl, bT, aJ);
                if (aD(dk) === dj) {
                    bZ(dk, null, dl);
                    return true
                }
                return false
            }

            function aF() {
                var dk = bn;
                bn = false;
                var dj, dl;
                for (dj = 0; dj < bw.length; dj++) {
                    dl = aU(bw[dj]);
                    if (dl !== cN && dl !== be && 0 !== aD(dl)) {
                        bZ(dl, br, cY)
                    }
                }
                bn = dk
            }

            function b4(dj) {
                b7 = dj
            }

            function di(dn) {
                if (!dn || !V(dn)) {
                    return
                }
                var dm = [];
                var dl;
                for (dl in dn) {
                    if (Object.prototype.hasOwnProperty.call(dn, dl)) {
                        dm.push(dl)
                    }
                }
                var dp = {};
                dm.sort();
                var dj = dm.length;
                var dk;
                for (dk = 0; dk < dj; dk++) {
                    dp[dm[dk]] = dn[dm[dk]]
                }
                return dp
            }

            function cd() {
                de(aU("ses"), "1", cn, br, cY, bT, aJ)
            }

            function bh() {
                var dm = "";
                var dk = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                var dl = dk.length;
                var dj;
                for (dj = 0; dj < 6; dj++) {
                    dm += dk.charAt(Math.floor(Math.random() * dl))
                }
                return dm
            }

            function aA(dk) {
                if (!h) {
                    return dk
                }
                var dl = (typeof h.timing === "object") && h.timing ? h.timing : undefined;
                if (!dl) {
                    dl = (typeof h.getEntriesByType === "function") && h.getEntriesByType("navigation") ? h.getEntriesByType("navigation")[0] : undefined
                }
                if (!dl) {
                    return dk
                }
                var dj = "";
                if (dl.connectEnd && dl.fetchStart) {
                    if (dl.connectEnd < dl.fetchStart) {
                        return
                    }
                    dj += "&pf_net=" + Math.round(dl.connectEnd - dl.fetchStart)
                }
                if (dl.responseStart && dl.requestStart) {
                    if (dl.responseStart < dl.requestStart) {
                        return
                    }
                    dj += "&pf_srv=" + Math.round(dl.responseStart - dl.requestStart)
                }
                if (dl.responseStart && dl.responseEnd) {
                    if (dl.responseEnd < dl.responseStart) {
                        return
                    }
                    dj += "&pf_tfr=" + Math.round(dl.responseEnd - dl.responseStart)
                }
                if (J(dl.domLoading)) {
                    if (dl.domInteractive && dl.domLoading) {
                        if (dl.domInteractive < dl.domLoading) {
                            return
                        }
                        dj += "&pf_dm1=" + Math.round(dl.domInteractive - dl.domLoading)
                    }
                } else {
                    if (dl.domInteractive && dl.responseEnd) {
                        if (dl.domInteractive < dl.responseEnd) {
                            return
                        }
                        dj += "&pf_dm1=" + Math.round(dl.domInteractive - dl.responseEnd)
                    }
                }
                if (dl.domComplete && dl.domInteractive) {
                    if (dl.domComplete < dl.domInteractive) {
                        return
                    }
                    dj += "&pf_dm2=" + Math.round(dl.domComplete - dl.domInteractive)
                }
                if (dl.loadEventEnd && dl.loadEventStart) {
                    if (dl.loadEventEnd < dl.loadEventStart) {
                        return
                    }
                    dj += "&pf_onl=" + Math.round(dl.loadEventEnd - dl.loadEventStart)
                }
                return dk + dj
            }

            function cr(dl, dG, dH) {
                var dF, dk = new Date(),
                    dt = Math.round(dk.getTime() / 1000),
                    dq, dD, dm = 1024,
                    dM, du, dC = aR,
                    dn = aU("ses"),
                    dA = aU("ref"),
                    dx = aU("cvar"),
                    dy = aD(dn),
                    dE = bN(),
                    dI = a5 || bO,
                    dr, dj;
                if (bn) {
                    aF()
                }
                if (cR) {
                    return ""
                }
                var dz = aZ();
                var dw = G.characterSet || G.charset;
                if (!dw || dw.toLowerCase() === "utf-8") {
                    dw = null
                }
                dr = dE[0];
                dj = dE[1];
                dq = dE[2];
                dD = dE[3];
                if (!dy) {
                    if (!bx || !dr.length) {
                        for (dF in cp) {
                            if (Object.prototype.hasOwnProperty.call(cp, dF)) {
                                dr = e(dI, cp[dF]);
                                if (dr.length) {
                                    break
                                }
                            }
                        }
                        for (dF in bI) {
                            if (Object.prototype.hasOwnProperty.call(bI, dF)) {
                                dj = e(dI, bI[dF]);
                                if (dj.length) {
                                    break
                                }
                            }
                        }
                    }
                    dM = d(bp);
                    du = dD.length ? d(dD) : "";
                    if (dM.length && !aW(dM) && (!bx || !du.length || aW(du))) {
                        dD = bp
                    }
                    if (dD.length || dr.length) {
                        dq = dt;
                        dE = [dr, dj, dq, b3(dD.slice(0, dm))];
                        de(dA, S.JSON.stringify(dE), c6, br, cY, bT, aJ)
                    }
                }
                dl += "&idsite=" + b7 + "&rec=1&r=" + String(Math.random()).slice(2, 8) + "&h=" + dk.getHours() + "&m=" + dk.getMinutes() + "&s=" + dk.getSeconds() + "&url=" + s(b3(dI)) + (bp.length ? "&urlref=" + s(b3(bp)) : "") + (Y(bA) ? "&uid=" + s(bA) : "") + "&_id=" + dz.uuid + "&_idn=" + dz.newVisitor + (dr.length ? "&_rcn=" + s(dr) : "") + (dj.length ? "&_rck=" + s(dj) : "") + "&_refts=" + dq + (String(dD).length ? "&_ref=" + s(b3(dD.slice(0, dm))) : "") + (dw ? "&cs=" + s(dw) : "") + "&send_image=0";
                var dL = cJ();
                for (dF in dL) {
                    if (Object.prototype.hasOwnProperty.call(dL, dF)) {
                        dl += "&" + dF + "=" + dL[dF]
                    }
                }
                var dK = [];
                if (dG) {
                    for (dF in dG) {
                        if (Object.prototype.hasOwnProperty.call(dG, dF) && /^dimension\d+$/.test(dF)) {
                            var dp = dF.replace("dimension", "");
                            dK.push(parseInt(dp, 10));
                            dK.push(String(dp));
                            dl += "&" + dF + "=" + s(dG[dF]);
                            delete dG[dF]
                        }
                    }
                }
                if (dG && B(dG)) {
                    dG = null
                }
                for (dF in ct) {
                    if (Object.prototype.hasOwnProperty.call(ct, dF)) {
                        dl += "&" + dF + "=" + s(ct[dF])
                    }
                }
                for (dF in bo) {
                    if (Object.prototype.hasOwnProperty.call(bo, dF)) {
                        var dv = (-1 === M(dK, dF));
                        if (dv) {
                            dl += "&dimension" + dF + "=" + s(bo[dF])
                        }
                    }
                }
                if (dG) {
                    dl += "&data=" + s(S.JSON.stringify(dG))
                } else {
                    if (ao) {
                        dl += "&data=" + s(S.JSON.stringify(ao))
                    }
                }

                function ds(dN, dO) {
                    var dP = S.JSON.stringify(dN);
                    if (dP.length > 2) {
                        return "&" + dO + "=" + s(dP)
                    }
                    return ""
                }
                var dJ = di(bX);
                var dB = di(cm);
                dl += ds(dJ, "cvar");
                dl += ds(dB, "e_cvar");
                if (aR) {
                    dl += ds(aR, "_cvar");
                    for (dF in dC) {
                        if (Object.prototype.hasOwnProperty.call(dC, dF)) {
                            if (aR[dF][0] === "" || aR[dF][1] === "") {
                                delete aR[dF]
                            }
                        }
                    }
                    if (bR) {
                        de(dx, S.JSON.stringify(aR), cn, br, cY, bT, aJ)
                    }
                }
                if (a3 && bG && !bi) {
                    dl = aA(dl);
                    bi = true
                }
                if (aM) {
                    dl += "&pv_id=" + aM
                }
                aN(dz);
                cd();
                dl += ac(dH, {
                    tracker: bK,
                    request: dl
                });
                if (c0.length) {
                    dl += "&" + c0
                }
                if (A(cc)) {
                    dl = cc(dl)
                }
                return dl
            }
            bS = function a8() {
                var dj = new Date();
                dj = dj.getTime();
                if (!cZ) {
                    return false
                }
                if (cZ + a6 <= dj) {
                    bK.ping();
                    return true
                }
                return false
            };

            function bs(dm, dl, dr, dn, dj, du) {
                var dq = "idgoal=0",
                    dk = new Date(),
                    ds = [],
                    dt, dp = String(dm).length;
                if (dp) {
                    dq += "&ec_id=" + s(dm)
                }
                dq += "&revenue=" + dl;
                if (String(dr).length) {
                    dq += "&ec_st=" + dr
                }
                if (String(dn).length) {
                    dq += "&ec_tx=" + dn
                }
                if (String(dj).length) {
                    dq += "&ec_sh=" + dj
                }
                if (String(du).length) {
                    dq += "&ec_dt=" + du
                }
                if (c1) {
                    for (dt in c1) {
                        if (Object.prototype.hasOwnProperty.call(c1, dt)) {
                            if (!J(c1[dt][1])) {
                                c1[dt][1] = ""
                            }
                            if (!J(c1[dt][2])) {
                                c1[dt][2] = ""
                            }
                            if (!J(c1[dt][3]) || String(c1[dt][3]).length === 0) {
                                c1[dt][3] = 0
                            }
                            if (!J(c1[dt][4]) || String(c1[dt][4]).length === 0) {
                                c1[dt][4] = 1
                            }
                            ds.push(c1[dt])
                        }
                    }
                    dq += "&ec_items=" + s(S.JSON.stringify(ds))
                }
                dq = cr(dq, ao, "ecommerce");
                bH(dq, bL);
                if (dp) {
                    c1 = {}
                }
            }

            function b0(dj, dn, dm, dl, dk, dp) {
                if (String(dj).length && J(dn)) {
                    bs(dj, dn, dm, dl, dk, dp)
                }
            }

            function bu(dj) {
                if (J(dj)) {
                    bs("", dj, "", "", "", "")
                }
            }

            function b1(dk, dm, dl) {
                aM = bh();
                var dj = cr("action_name=" + s(al(dk || bk)), dm, "log");
                if (a3 && !bi) {
                    dj = aA(dj)
                }
                bH(dj, bL, dl)
            }

            function a1(dl, dk) {
                var dm, dj = "(^| )(piwik[_-]" + dk + "|matomo[_-]" + dk;
                if (dl) {
                    for (dm = 0; dm < dl.length; dm++) {
                        dj += "|" + dl[dm]
                    }
                }
                dj += ")( |$)";
                return new RegExp(dj)
            }

            function aV(dj) {
                return (aE && dj && 0 === String(dj).indexOf(aE))
            }

            function cv(dn, dj, dp, dk) {
                if (aV(dj)) {
                    return 0
                }
                var dm = a1(bM, "download"),
                    dl = a1(a9, "link"),
                    dq = new RegExp("\\.(" + c7.join("|") + ")([?&#]|$)", "i");
                if (dl.test(dn)) {
                    return "link"
                }
                if (dk || dm.test(dn) || dq.test(dj)) {
                    return "download"
                }
                if (dp) {
                    return 0
                }
                return "link"
            }

            function au(dk) {
                var dj;
                dj = dk.parentNode;
                while (dj !== null && J(dj)) {
                    if (ae.isLinkElement(dk)) {
                        break
                    }
                    dk = dj;
                    dj = dk.parentNode
                }
                return dk
            }

            function dc(dp) {
                dp = au(dp);
                if (!ae.hasNodeAttribute(dp, "href")) {
                    return
                }
                if (!J(dp.href)) {
                    return
                }
                var dn = ae.getAttributeValueFromNode(dp, "href");
                var dk = dp.pathname || cl(dp.href);
                var dq = dp.hostname || d(dp.href);
                var dr = dq.toLowerCase();
                var dl = dp.href.replace(dq, dr);
                var dm = new RegExp("^(javascript|vbscript|jscript|mocha|livescript|ecmascript|mailto|tel):", "i");
                if (!dm.test(dl)) {
                    var dj = cv(dp.className, dl, ar(dr, dk), ae.hasNodeAttribute(dp, "download"));
                    if (dj) {
                        return {
                            type: dj,
                            href: dl
                        }
                    }
                }
            }

            function aQ(dj, dk, dl, dm) {
                var dn = v.buildInteractionRequestParams(dj, dk, dl, dm);
                if (!dn) {
                    return
                }
                return cr(dn, null, "contentInteraction")
            }

            function bc(dj, dk) {
                if (!dj || !dk) {
                    return false
                }
                var dl = v.findTargetNode(dj);
                if (v.shouldIgnoreInteraction(dl)) {
                    return false
                }
                dl = v.findTargetNodeNoDefault(dj);
                if (dl && !U(dl, dk)) {
                    return false
                }
                return true
            }

            function cu(dl, dk, dn) {
                if (!dl) {
                    return
                }
                var dj = v.findParentContentNode(dl);
                if (!dj) {
                    return
                }
                if (!bc(dj, dl)) {
                    return
                }
                var dm = v.buildContentBlock(dj);
                if (!dm) {
                    return
                }
                if (!dm.target && dn) {
                    dm.target = dn
                }
                return v.buildInteractionRequestParams(dk, dm.name, dm.piece, dm.target)
            }

            function aX(dk) {
                if (!cb || !cb.length) {
                    return false
                }
                var dj, dl;
                for (dj = 0; dj < cb.length; dj++) {
                    dl = cb[dj];
                    if (dl && dl.name === dk.name && dl.piece === dk.piece && dl.target === dk.target) {
                        return true
                    }
                }
                return false
            }

            function aY(dj) {
                return function(dn) {
                    if (!dj) {
                        return
                    }
                    var dl = v.findParentContentNode(dj);
                    var dk;
                    if (dn) {
                        dk = dn.target || dn.srcElement
                    }
                    if (!dk) {
                        dk = dj
                    }
                    if (!bc(dl, dk)) {
                        return
                    }
                    if (!dl) {
                        return false
                    }
                    var dp = v.findTargetNode(dl);
                    if (!dp || v.shouldIgnoreInteraction(dp)) {
                        return false
                    }
                    var dm = dc(dp);
                    if (c9 && dm && dm.type) {
                        return dm.type
                    }
                    return bK.trackContentInteractionNode(dk, "click")
                }
            }

            function b2(dl) {
                if (!dl || !dl.length) {
                    return
                }
                var dj, dk;
                for (dj = 0; dj < dl.length; dj++) {
                    dk = v.findTargetNode(dl[dj]);
                    if (dk && !dk.contentInteractionTrackingSetupDone) {
                        dk.contentInteractionTrackingSetupDone = true;
                        an(dk, "click", aY(dk))
                    }
                }
            }

            function bz(dl, dm) {
                if (!dl || !dl.length) {
                    return []
                }
                var dj, dk;
                for (dj = 0; dj < dl.length; dj++) {
                    if (aX(dl[dj])) {
                        dl.splice(dj, 1);
                        dj--
                    } else {
                        cb.push(dl[dj])
                    }
                }
                if (!dl || !dl.length) {
                    return []
                }
                b2(dm);
                var dn = [];
                for (dj = 0; dj < dl.length; dj++) {
                    dk = cr(v.buildImpressionRequestParams(dl[dj].name, dl[dj].piece, dl[dj].target), undefined, "contentImpressions");
                    if (dk) {
                        dn.push(dk)
                    }
                }
                return dn
            }

            function cA(dk) {
                var dj = v.collectContent(dk);
                return bz(dj, dk)
            }

            function ba(dk) {
                if (!dk || !dk.length) {
                    return []
                }
                var dj;
                for (dj = 0; dj < dk.length; dj++) {
                    if (!v.isNodeVisible(dk[dj])) {
                        dk.splice(dj, 1);
                        dj--
                    }
                }
                if (!dk || !dk.length) {
                    return []
                }
                return cA(dk)
            }

            function aG(dl, dj, dk) {
                var dm = v.buildImpressionRequestParams(dl, dj, dk);
                return cr(dm, null, "contentImpression")
            }

            function db(dm, dk) {
                if (!dm) {
                    return
                }
                var dj = v.findParentContentNode(dm);
                var dl = v.buildContentBlock(dj);
                if (!dl) {
                    return
                }
                if (!dk) {
                    dk = "Unknown"
                }
                return aQ(dk, dl.name, dl.piece, dl.target)
            }

            function cQ(dk, dm, dj, dl) {
                return "e_c=" + s(dk) + "&e_a=" + s(dm) + (J(dj) ? "&e_n=" + s(dj) : "") + (J(dl) ? "&e_v=" + s(dl) : "") + "&ca=1"
            }

            function at(dl, dn, dj, dm, dq, dp) {
                if (!Y(dl) || !Y(dn)) {
                    ak("Error while logging event: Parameters `category` and `action` must not be empty or filled with whitespaces");
                    return false
                }
                var dk = cr(cQ(dl, dn, dj, dm), dq, "event");
                bH(dk, bL, dp)
            }

            function b9(dj, dm, dk, dn) {
                var dl = cr("search=" + s(dj) + (dm ? "&search_cat=" + s(dm) : "") + (J(dk) ? "&search_count=" + dk : ""), dn, "sitesearch");
                bH(dl, bL)
            }

            function cU(dj, dn, dm, dl) {
                var dk = cr("idgoal=" + dj + (dn ? "&revenue=" + dn : ""), dm, "goal");
                bH(dk, bL, dl)
            }

            function c2(dm, dj, dr, dq, dl) {
                var dp = dj + "=" + s(b3(dm));
                var dk = cu(dl, "click", dm);
                if (dk) {
                    dp += "&" + dk
                }
                var dn = cr(dp, dr, "link");
                bH(dn, bL, dq)
            }

            function bV(dk, dj) {
                if (dk !== "") {
                    return dk + dj.charAt(0).toUpperCase() + dj.slice(1)
                }
                return dj
            }

            function ch(dp) {
                var dn, dj, dm = ["", "webkit", "ms", "moz"],
                    dl;
                if (!bf) {
                    for (dj = 0; dj < dm.length; dj++) {
                        dl = dm[dj];
                        if (Object.prototype.hasOwnProperty.call(G, bV(dl, "hidden"))) {
                            if (G[bV(dl, "visibilityState")] === "prerender") {
                                dn = true
                            }
                            break
                        }
                    }
                }
                if (dn) {
                    an(G, dl + "visibilitychange", function dk() {
                        G.removeEventListener(dl + "visibilitychange", dk, false);
                        dp()
                    });
                    return
                }
                dp()
            }

            function bt() {
                var dk = bK.getVisitorId();
                var dj = aK();
                return dk + dj
            }

            function cj(dj) {
                if (!dj) {
                    return
                }
                if (!ae.hasNodeAttribute(dj, "href")) {
                    return
                }
                var dk = ae.getAttributeValueFromNode(dj, "href");
                if (!dk || aV(dk)) {
                    return
                }
                if (!bK.getVisitorId()) {
                    return
                }
                dk = j(dk, av);
                var dl = bt();
                dk = F(dk, av, dl);
                ae.setAnyAttribute(dj, "href", dk)
            }

            function bm(dm) {
                var dn = ae.getAttributeValueFromNode(dm, "href");
                if (!dn) {
                    return false
                }
                dn = String(dn);
                var dk = dn.indexOf("//") === 0 || dn.indexOf("http://") === 0 || dn.indexOf("https://") === 0;
                if (!dk) {
                    return false
                }
                var dj = dm.pathname || cl(dm.href);
                var dl = (dm.hostname || d(dm.href)).toLowerCase();
                if (ar(dl, dj)) {
                    if (!cI(cV, L(dl))) {
                        return true
                    }
                    return false
                }
                return false
            }

            function cH(dj) {
                var dk = dc(dj);
                if (dk && dk.type) {
                    dk.href = o(dk.href);
                    c2(dk.href, dk.type, undefined, null, dj);
                    return
                }
                if (cO) {
                    dj = au(dj);
                    if (bm(dj)) {
                        cj(dj)
                    }
                }
            }

            function cw() {
                return G.all && !G.addEventListener
            }

            function cW(dj) {
                var dl = dj.which;
                var dk = (typeof dj.button);
                if (!dl && dk !== "undefined") {
                    if (cw()) {
                        if (dj.button & 1) {
                            dl = 1
                        } else {
                            if (dj.button & 2) {
                                dl = 3
                            } else {
                                if (dj.button & 4) {
                                    dl = 2
                                }
                            }
                        }
                    } else {
                        if (dj.button === 0 || dj.button === "0") {
                            dl = 1
                        } else {
                            if (dj.button & 1) {
                                dl = 2
                            } else {
                                if (dj.button & 2) {
                                    dl = 3
                                }
                            }
                        }
                    }
                }
                return dl
            }

            function bU(dj) {
                switch (cW(dj)) {
                    case 1:
                        return "left";
                    case 2:
                        return "middle";
                    case 3:
                        return "right"
                }
            }

            function a2(dj) {
                return dj.target || dj.srcElement
            }

            function aC(dj) {
                return function(dm) {
                    dm = dm || S.event;
                    var dl = bU(dm);
                    var dn = a2(dm);
                    if (dm.type === "click") {
                        var dk = false;
                        if (dj && dl === "middle") {
                            dk = true
                        }
                        if (dn && !dk) {
                            cH(dn)
                        }
                    } else {
                        if (dm.type === "mousedown") {
                            if (dl === "middle" && dn) {
                                aS = dl;
                                bC = dn
                            } else {
                                aS = bC = null
                            }
                        } else {
                            if (dm.type === "mouseup") {
                                if (dl === aS && dn === bC) {
                                    cH(dn)
                                }
                                aS = bC = null
                            } else {
                                if (dm.type === "contextmenu") {
                                    cH(dn)
                                }
                            }
                        }
                    }
                }
            }

            function aq(dl, dk) {
                var dj = typeof dk;
                if (dj === "undefined") {
                    dk = true
                }
                an(dl, "click", aC(dk), false);
                if (dk) {
                    an(dl, "mouseup", aC(dk), false);
                    an(dl, "mousedown", aC(dk), false);
                    an(dl, "contextmenu", aC(dk), false)
                }
            }

            function bF(dl, dn) {
                ap = true;
                var dm, dk = a1(bB, "ignore"),
                    dp = G.links,
                    dj = null,
                    dq = null;
                if (dp) {
                    for (dm = 0; dm < dp.length; dm++) {
                        dj = dp[dm];
                        if (!dk.test(dj.className)) {
                            dq = typeof dj.matomoTrackers;
                            if ("undefined" === dq) {
                                dj.matomoTrackers = []
                            }
                            if (-1 === M(dj.matomoTrackers, dn)) {
                                dj.matomoTrackers.push(dn);
                                aq(dj, dl)
                            }
                        }
                    }
                }
            }

            function aT(dk, dn, dp) {
                if (cf) {
                    return true
                }
                cf = true;
                var dq = false;
                var dm, dl;

                function dj() {
                    dq = true
                }
                m(function() {
                    function dr(dt) {
                        setTimeout(function() {
                            if (!cf) {
                                return
                            }
                            dq = false;
                            dp.trackVisibleContentImpressions();
                            dr(dt)
                        }, dt)
                    }

                    function ds(dt) {
                        setTimeout(function() {
                            if (!cf) {
                                return
                            }
                            if (dq) {
                                dq = false;
                                dp.trackVisibleContentImpressions()
                            }
                            ds(dt)
                        }, dt)
                    }
                    if (dk) {
                        dm = ["scroll", "resize"];
                        for (dl = 0; dl < dm.length; dl++) {
                            if (G.addEventListener) {
                                G.addEventListener(dm[dl], dj, false)
                            } else {
                                S.attachEvent("on" + dm[dl], dj)
                            }
                        }
                        ds(100)
                    }
                    if (dn && dn > 0) {
                        dn = parseInt(dn, 10);
                        dr(dn)
                    }
                })
            }
            var bE = {
                enabled: true,
                requests: [],
                timeout: null,
                interval: 2500,
                sendRequests: function() {
                    var dj = this.requests;
                    this.requests = [];
                    if (dj.length === 1) {
                        bH(dj[0], bL)
                    } else {
                        df(dj, bL)
                    }
                },
                canQueue: function() {
                    return !l && this.enabled
                },
                pushMultiple: function(dk) {
                    if (!this.canQueue()) {
                        df(dk, bL);
                        return
                    }
                    var dj;
                    for (dj = 0; dj < dk.length; dj++) {
                        this.push(dk[dj])
                    }
                },
                push: function(dj) {
                    if (!dj) {
                        return
                    }
                    if (!this.canQueue()) {
                        bH(dj, bL);
                        return
                    }
                    bE.requests.push(dj);
                    if (this.timeout) {
                        clearTimeout(this.timeout);
                        this.timeout = null
                    }
                    this.timeout = setTimeout(function() {
                        bE.timeout = null;
                        bE.sendRequests()
                    }, bE.interval);
                    var dk = "RequestQueue" + ax;
                    if (!Object.prototype.hasOwnProperty.call(b, dk)) {
                        b[dk] = {
                            unload: function() {
                                if (bE.timeout) {
                                    clearTimeout(bE.timeout)
                                }
                                bE.sendRequests()
                            }
                        }
                    }
                }
            };
            bj();
            aN();
            this.hasConsent = function() {
                return bD
            };
            this.getVisitorId = function() {
                return aZ().uuid
            };
            this.getVisitorInfo = function() {
                return cP()
            };
            this.getAttributionInfo = function() {
                return bN()
            };
            this.getAttributionCampaignName = function() {
                return bN()[0]
            };
            this.getAttributionCampaignKeyword = function() {
                return bN()[1]
            };
            this.getAttributionReferrerTimestamp = function() {
                return bN()[2]
            };
            this.getAttributionReferrerUrl = function() {
                return bN()[3]
            };
            this.setTrackerUrl = function(dj) {
                aE = dj
            };
            this.getTrackerUrl = function() {
                return aE
            };
            this.getMatomoUrl = function() {
                return W(this.getTrackerUrl(), bJ)
            };
            this.getPiwikUrl = function() {
                return this.getMatomoUrl()
            };
            this.addTracker = function(dl, dk) {
                if (!J(dl) || null === dl) {
                    dl = this.getTrackerUrl()
                }
                var dj = new P(dl, dk);
                I.push(dj);
                t.trigger("TrackerAdded", [this]);
                return dj
            };
            this.getSiteId = function() {
                return b7
            };
            this.setSiteId = function(dj) {
                b4(dj)
            };
            this.resetUserId = function() {
                bA = ""
            };
            this.setUserId = function(dj) {
                if (Y(dj)) {
                    bA = dj
                }
            };
            this.setVisitorId = function(dk) {
                var dj = /[0-9A-Fa-f]{16}/g;
                if (w(dk) && dj.test(dk)) {
                    bP = dk
                } else {
                    ak("Invalid visitorId set" + dk)
                }
            };
            this.getUserId = function() {
                return bA
            };
            this.setCustomData = function(dj, dk) {
                if (V(dj)) {
                    ao = dj
                } else {
                    if (!ao) {
                        ao = {}
                    }
                    ao[dj] = dk
                }
            };
            this.getCustomData = function() {
                return ao
            };
            this.setCustomRequestProcessing = function(dj) {
                cc = dj
            };
            this.appendToTrackingUrl = function(dj) {
                c0 = dj
            };
            this.getRequest = function(dj) {
                return cr(dj)
            };
            this.addPlugin = function(dj, dk) {
                b[dj] = dk
            };
            this.setCustomDimension = function(dj, dk) {
                dj = parseInt(dj, 10);
                if (dj > 0) {
                    if (!J(dk)) {
                        dk = ""
                    }
                    if (!w(dk)) {
                        dk = String(dk)
                    }
                    bo[dj] = dk
                }
            };
            this.getCustomDimension = function(dj) {
                dj = parseInt(dj, 10);
                if (dj > 0 && Object.prototype.hasOwnProperty.call(bo, dj)) {
                    return bo[dj]
                }
            };
            this.deleteCustomDimension = function(dj) {
                dj = parseInt(dj, 10);
                if (dj > 0) {
                    delete bo[dj]
                }
            };
            this.setCustomVariable = function(dk, dj, dn, dl) {
                var dm;
                if (!J(dl)) {
                    dl = "visit"
                }
                if (!J(dj)) {
                    return
                }
                if (!J(dn)) {
                    dn = ""
                }
                if (dk > 0) {
                    dj = !w(dj) ? String(dj) : dj;
                    dn = !w(dn) ? String(dn) : dn;
                    dm = [dj.slice(0, bv), dn.slice(0, bv)];
                    if (dl === "visit" || dl === 2) {
                        cG();
                        aR[dk] = dm
                    } else {
                        if (dl === "page" || dl === 3) {
                            bX[dk] = dm
                        } else {
                            if (dl === "event") {
                                cm[dk] = dm
                            }
                        }
                    }
                }
            };
            this.getCustomVariable = function(dk, dl) {
                var dj;
                if (!J(dl)) {
                    dl = "visit"
                }
                if (dl === "page" || dl === 3) {
                    dj = bX[dk]
                } else {
                    if (dl === "event") {
                        dj = cm[dk]
                    } else {
                        if (dl === "visit" || dl === 2) {
                            cG();
                            dj = aR[dk]
                        }
                    }
                }
                if (!J(dj) || (dj && dj[0] === "")) {
                    return false
                }
                return dj
            };
            this.deleteCustomVariable = function(dj, dk) {
                if (this.getCustomVariable(dj, dk)) {
                    this.setCustomVariable(dj, "", "", dk)
                }
            };
            this.deleteCustomVariables = function(dj) {
                if (dj === "page" || dj === 3) {
                    bX = {}
                } else {
                    if (dj === "event") {
                        cm = {}
                    } else {
                        if (dj === "visit" || dj === 2) {
                            aR = {}
                        }
                    }
                }
            };
            this.storeCustomVariablesInCookie = function() {
                bR = true
            };
            this.setLinkTrackingTimer = function(dj) {
                bL = dj
            };
            this.getLinkTrackingTimer = function() {
                return bL
            };
            this.setDownloadExtensions = function(dj) {
                if (w(dj)) {
                    dj = dj.split("|")
                }
                c7 = dj
            };
            this.addDownloadExtensions = function(dk) {
                var dj;
                if (w(dk)) {
                    dk = dk.split("|")
                }
                for (dj = 0; dj < dk.length; dj++) {
                    c7.push(dk[dj])
                }
            };
            this.removeDownloadExtensions = function(dl) {
                var dk, dj = [];
                if (w(dl)) {
                    dl = dl.split("|")
                }
                for (dk = 0; dk < c7.length; dk++) {
                    if (M(dl, c7[dk]) === -1) {
                        dj.push(c7[dk])
                    }
                }
                c7 = dj
            };
            this.setDomains = function(dj) {
                ay = w(dj) ? [dj] : dj;
                var dn = false,
                    dl = 0,
                    dk;
                for (dl; dl < ay.length; dl++) {
                    dk = String(ay[dl]);
                    if (cI(cV, L(dk))) {
                        dn = true;
                        break
                    }
                    var dm = cl(dk);
                    if (dm && dm !== "/" && dm !== "/*") {
                        dn = true;
                        break
                    }
                }
                if (!dn) {
                    ay.push(cV)
                }
            };
            this.enableCrossDomainLinking = function() {
                cO = true
            };
            this.disableCrossDomainLinking = function() {
                cO = false
            };
            this.isCrossDomainLinkingEnabled = function() {
                return cO
            };
            this.setCrossDomainLinkingTimeout = function(dj) {
                a0 = dj
            };
            this.getCrossDomainLinkingUrlParameter = function() {
                return s(av) + "=" + s(bt())
            };
            this.setIgnoreClasses = function(dj) {
                bB = w(dj) ? [dj] : dj
            };
            this.setRequestMethod = function(dj) {
                if (dj) {
                    da = String(dj).toUpperCase()
                } else {
                    da = ci
                }
                if (da === "GET") {
                    this.disableAlwaysUseSendBeacon()
                }
            };
            this.setRequestContentType = function(dj) {
                cx = dj || aI
            };
            this.setGenerationTimeMs = function(dj) {
                ak("setGenerationTimeMs is no longer supported since Matomo 4. The call will be ignored. There is currently no replacement yet.")
            };
            this.setReferrerUrl = function(dj) {
                bp = dj
            };
            this.setCustomUrl = function(dj) {
                a5 = bW(bO, dj)
            };
            this.getCurrentUrl = function() {
                return a5 || bO
            };
            this.setDocumentTitle = function(dj) {
                bk = dj
            };
            this.setAPIUrl = function(dj) {
                bJ = dj
            };
            this.setDownloadClasses = function(dj) {
                bM = w(dj) ? [dj] : dj
            };
            this.setLinkClasses = function(dj) {
                a9 = w(dj) ? [dj] : dj
            };
            this.setCampaignNameKey = function(dj) {
                cp = w(dj) ? [dj] : dj
            };
            this.setCampaignKeywordKey = function(dj) {
                bI = w(dj) ? [dj] : dj
            };
            this.discardHashTag = function(dj) {
                bQ = dj
            };
            this.setCookieNamePrefix = function(dj) {
                bl = dj;
                if (aR) {
                    aR = bY()
                }
            };
            this.setCookieDomain = function(dj) {
                var dk = L(dj);
                if (by(dk)) {
                    cY = dk;
                    bj()
                }
            };
            this.getCookieDomain = function() {
                return cY
            };
            this.hasCookies = function() {
                return "1" === b6()
            };
            this.setSessionCookie = function(dl, dk, dj) {
                if (!dl) {
                    throw new Error("Missing cookie name")
                }
                if (!J(dj)) {
                    dj = cn
                }
                bw.push(dl);
                de(aU(dl), dk, dj, br, cY, bT, aJ)
            };
            this.getCookie = function(dk) {
                var dj = aD(aU(dk));
                if (dj === 0) {
                    return null
                }
                return dj
            };
            this.setCookiePath = function(dj) {
                br = dj;
                bj()
            };
            this.getCookiePath = function(dj) {
                return br
            };
            this.setVisitorCookieTimeout = function(dj) {
                cL = dj * 1000
            };
            this.setSessionCookieTimeout = function(dj) {
                cn = dj * 1000
            };
            this.getSessionCookieTimeout = function() {
                return cn
            };
            this.setReferralCookieTimeout = function(dj) {
                c6 = dj * 1000
            };
            this.setConversionAttributionFirstReferrer = function(dj) {
                bx = dj
            };
            this.setSecureCookie = function(dj) {
                if (dj && location.protocol !== "https:") {
                    ak("Error in setSecureCookie: You cannot use `Secure` on http.");
                    return
                }
                bT = dj
            };
            this.setCookieSameSite = function(dj) {
                dj = String(dj);
                dj = dj.charAt(0).toUpperCase() + dj.toLowerCase().slice(1);
                if (dj !== "None" && dj !== "Lax" && dj !== "Strict") {
                    ak("Ignored value for sameSite. Please use either Lax, None, or Strict.");
                    return
                }
                if (dj === "None") {
                    if (location.protocol === "https:") {
                        this.setSecureCookie(true)
                    } else {
                        ak("sameSite=None cannot be used on http, reverted to sameSite=Lax.");
                        dj = "Lax"
                    }
                }
                aJ = dj
            };
            this.disableCookies = function() {
                bn = true;
                if (b7) {
                    aF()
                }
            };
            this.areCookiesEnabled = function() {
                return !bn
            };
            this.setCookieConsentGiven = function() {
                if (bn && !cR) {
                    bn = false;
                    if (b7 && aw) {
                        aN();
                        var dj = cr("ping=1", null, "ping");
                        bH(dj, bL)
                    }
                }
            };
            this.requireCookieConsent = function() {
                if (this.getRememberedCookieConsent()) {
                    return false
                }
                this.disableCookies();
                return true
            };
            this.getRememberedCookieConsent = function() {
                return aD(cE)
            };
            this.forgetCookieConsentGiven = function() {
                bZ(cE, br, cY);
                this.disableCookies()
            };
            this.rememberCookieConsentGiven = function(dk) {
                if (dk) {
                    dk = dk * 60 * 60 * 1000
                } else {
                    dk = 30 * 365 * 24 * 60 * 60 * 1000
                }
                this.setCookieConsentGiven();
                var dj = new Date().getTime();
                de(cE, dj, dk, br, cY, bT, aJ)
            };
            this.deleteCookies = function() {
                aF()
            };
            this.setDoNotTrack = function(dk) {
                var dj = g.doNotTrack || g.msDoNotTrack;
                cR = dk && (dj === "yes" || dj === "1");
                if (cR) {
                    this.disableCookies()
                }
            };
            this.alwaysUseSendBeacon = function() {
                cX = true
            };
            this.disableAlwaysUseSendBeacon = function() {
                cX = false
            };
            this.addListener = function(dk, dj) {
                aq(dk, dj)
            };
            this.enableLinkTracking = function(dk) {
                c9 = true;
                var dj = this;
                ch(function() {
                    p(function() {
                        bF(dk, dj)
                    });
                    m(function() {
                        bF(dk, dj)
                    })
                })
            };
            this.enableJSErrorTracking = function() {
                if (cT) {
                    return
                }
                cT = true;
                var dj = S.onerror;
                S.onerror = function(dp, dm, dl, dn, dk) {
                    ch(function() {
                        var dq = "JavaScript Errors";
                        var dr = dm + ":" + dl;
                        if (dn) {
                            dr += ":" + dn
                        }
                        if (M(cs, dq + dr + dp) === -1) {
                            cs.push(dq + dr + dp);
                            at(dq, dr, dp)
                        }
                    });
                    if (dj) {
                        return dj(dp, dm, dl, dn, dk)
                    }
                    return false
                }
            };
            this.disablePerformanceTracking = function() {
                a3 = false
            };
            this.enableHeartBeatTimer = function(dj) {
                dj = Math.max(dj || 15, 5);
                a6 = dj * 1000;
                if (cZ !== null) {
                    dg()
                }
            };
            this.disableHeartBeatTimer = function() {
                if (a6 || aO) {
                    if (S.removeEventListener) {
                        S.removeEventListener("focus", bb);
                        S.removeEventListener("blur", az)
                    } else {
                        if (S.detachEvent) {
                            S.detachEvent("onfocus", bb);
                            S.detachEvent("onblur", az)
                        }
                    }
                }
                a6 = null;
                aO = false
            };
            this.killFrame = function() {
                if (S.location !== S.top.location) {
                    S.top.location = S.location
                }
            };
            this.redirectFile = function(dj) {
                if (S.location.protocol === "file:") {
                    S.location = dj
                }
            };
            this.setCountPreRendered = function(dj) {
                bf = dj
            };
            this.trackGoal = function(dj, dm, dl, dk) {
                ch(function() {
                    cU(dj, dm, dl, dk)
                })
            };
            this.trackLink = function(dk, dj, dm, dl) {
                ch(function() {
                    c2(dk, dj, dm, dl)
                })
            };
            this.getNumTrackedPageViews = function() {
                return cq
            };
            this.trackPageView = function(dj, dl, dk) {
                cb = [];
                cM = [];
                cs = [];
                if (N(b7)) {
                    ch(function() {
                        Z(aE, bJ, b7)
                    })
                } else {
                    ch(function() {
                        cq++;
                        b1(dj, dl, dk)
                    })
                }
            };
            this.trackAllContentImpressions = function() {
                if (N(b7)) {
                    return
                }
                ch(function() {
                    p(function() {
                        var dj = v.findContentNodes();
                        var dk = cA(dj);
                        bE.pushMultiple(dk)
                    })
                })
            };
            this.trackVisibleContentImpressions = function(dj, dk) {
                if (N(b7)) {
                    return
                }
                if (!J(dj)) {
                    dj = true
                }
                if (!J(dk)) {
                    dk = 750
                }
                aT(dj, dk, this);
                ch(function() {
                    m(function() {
                        var dl = v.findContentNodes();
                        var dm = ba(dl);
                        bE.pushMultiple(dm)
                    })
                })
            };
            this.trackContentImpression = function(dl, dj, dk) {
                if (N(b7)) {
                    return
                }
                dl = a(dl);
                dj = a(dj);
                dk = a(dk);
                if (!dl) {
                    return
                }
                dj = dj || "Unknown";
                ch(function() {
                    var dm = aG(dl, dj, dk);
                    bE.push(dm)
                })
            };
            this.trackContentImpressionsWithinNode = function(dj) {
                if (N(b7) || !dj) {
                    return
                }
                ch(function() {
                    if (cf) {
                        m(function() {
                            var dk = v.findContentNodesWithinNode(dj);
                            var dl = ba(dk);
                            bE.pushMultiple(dl)
                        })
                    } else {
                        p(function() {
                            var dk = v.findContentNodesWithinNode(dj);
                            var dl = cA(dk);
                            bE.pushMultiple(dl)
                        })
                    }
                })
            };
            this.trackContentInteraction = function(dl, dm, dj, dk) {
                if (N(b7)) {
                    return
                }
                dl = a(dl);
                dm = a(dm);
                dj = a(dj);
                dk = a(dk);
                if (!dl || !dm) {
                    return
                }
                dj = dj || "Unknown";
                ch(function() {
                    var dn = aQ(dl, dm, dj, dk);
                    if (dn) {
                        bE.push(dn)
                    }
                })
            };
            this.trackContentInteractionNode = function(dl, dk) {
                if (N(b7) || !dl) {
                    return
                }
                var dj = null;
                ch(function() {
                    dj = db(dl, dk);
                    if (dj) {
                        bE.push(dj)
                    }
                });
                return dj
            };
            this.logAllContentBlocksOnPage = function() {
                var dl = v.findContentNodes();
                var dj = v.collectContent(dl);
                var dk = typeof console;
                if (dk !== "undefined" && console && console.log) {
                    console.log(dj)
                }
            };
            this.trackEvent = function(dk, dm, dj, dl, dp, dn) {
                ch(function() {
                    at(dk, dm, dj, dl, dp, dn)
                })
            };
            this.trackSiteSearch = function(dj, dl, dk, dm) {
                cb = [];
                ch(function() {
                    b9(dj, dl, dk, dm)
                })
            };
            this.setEcommerceView = function(dn, dj, dl, dk) {
                ct = {};
                if (Y(dl)) {
                    dl = String(dl)
                }
                if (!J(dl) || dl === null || dl === false || !dl.length) {
                    dl = ""
                } else {
                    if (dl instanceof Array) {
                        dl = S.JSON.stringify(dl)
                    }
                }
                var dm = "_pkc";
                ct[dm] = dl;
                if (J(dk) && dk !== null && dk !== false && String(dk).length) {
                    dm = "_pkp";
                    ct[dm] = dk
                }
                if (!Y(dn) && !Y(dj)) {
                    return
                }
                if (Y(dn)) {
                    dm = "_pks";
                    ct[dm] = dn
                }
                if (!Y(dj)) {
                    dj = ""
                }
                dm = "_pkn";
                ct[dm] = dj
            };
            this.getEcommerceItems = function() {
                return JSON.parse(JSON.stringify(c1))
            };
            this.addEcommerceItem = function(dn, dj, dl, dk, dm) {
                if (Y(dn)) {
                    c1[dn] = [String(dn), dj, dl, dk, dm]
                }
            };
            this.removeEcommerceItem = function(dj) {
                if (Y(dj)) {
                    dj = String(dj);
                    delete c1[dj]
                }
            };
            this.clearEcommerceCart = function() {
                c1 = {}
            };
            this.trackEcommerceOrder = function(dj, dn, dm, dl, dk, dp) {
                b0(dj, dn, dm, dl, dk, dp)
            };
            this.trackEcommerceCartUpdate = function(dj) {
                bu(dj)
            };
            this.trackRequest = function(dk, dm, dl, dj) {
                ch(function() {
                    var dn = cr(dk, dm, dj);
                    bH(dn, bL, dl)
                })
            };
            this.ping = function() {
                this.trackRequest("ping=1", null, null, "ping")
            };
            this.disableQueueRequest = function() {
                bE.enabled = false
            };
            this.setRequestQueueInterval = function(dj) {
                if (dj < 1000) {
                    throw new Error("Request queue interval needs to be at least 1000ms")
                }
                bE.interval = dj
            };
            this.queueRequest = function(dj) {
                ch(function() {
                    var dk = cr(dj);
                    bE.push(dk)
                })
            };
            this.isConsentRequired = function() {
                return cB
            };
            this.getRememberedConsent = function() {
                var dj = aD(be);
                if (aD(cN)) {
                    if (dj) {
                        bZ(be, br, cY)
                    }
                    return null
                }
                if (!dj || dj === 0) {
                    return null
                }
                return dj
            };
            this.hasRememberedConsent = function() {
                return !!this.getRememberedConsent()
            };
            this.requireConsent = function() {
                cB = true;
                bD = this.hasRememberedConsent();
                if (!bD) {
                    bn = true
                }
                x++;
                b["CoreConsent" + x] = {
                    unload: function() {
                        if (!bD) {
                            aF()
                        }
                    }
                }
            };
            this.setConsentGiven = function(dk) {
                bD = true;
                bZ(cN, br, cY);
                var dl, dj;
                for (dl = 0; dl < cM.length; dl++) {
                    dj = typeof cM[dl];
                    if (dj === "string") {
                        bH(cM[dl], bL)
                    } else {
                        if (dj === "object") {
                            df(cM[dl], bL)
                        }
                    }
                }
                cM = [];
                if (!J(dk) || dk) {
                    this.setCookieConsentGiven()
                }
            };
            this.rememberConsentGiven = function(dl) {
                if (dl) {
                    dl = dl * 60 * 60 * 1000
                } else {
                    dl = 30 * 365 * 24 * 60 * 60 * 1000
                }
                var dj = true;
                this.setConsentGiven(dj);
                var dk = new Date().getTime();
                de(be, dk, dl, br, cY, bT, aJ)
            };
            this.forgetConsentGiven = function() {
                var dj = 30 * 365 * 24 * 60 * 60 * 1000;
                bZ(be, br, cY);
                de(cN, new Date().getTime(), dj, br, cY, bT, aJ);
                this.forgetCookieConsentGiven();
                this.requireConsent()
            };
            this.isUserOptedOut = function() {
                return !bD
            };
            this.optUserOut = this.forgetConsentGiven;
            this.forgetUserOptOut = function() {
                this.setConsentGiven(false)
            };
            m(function() {
                setTimeout(function() {
                    bG = true
                }, 0)
            });
            t.trigger("TrackerSetup", [this])
        }

        function H() {
            return {
                push: af
            }
        }

        function c(au, at) {
            var av = {};
            var aq, ar;
            for (aq = 0; aq < at.length; aq++) {
                var ao = at[aq];
                av[ao] = 1;
                for (ar = 0; ar < au.length; ar++) {
                    if (au[ar] && au[ar][0]) {
                        var ap = au[ar][0];
                        if (ao === ap) {
                            af(au[ar]);
                            delete au[ar];
                            if (av[ap] > 1 && ap !== "addTracker" && ap !== "enableLinkTracking") {
                                ak("The method " + ap + ' is registered more than once in "_paq" variable. Only the last call has an effect. Please have a look at the multiple Matomo trackers documentation: https://developer.matomo.org/guides/tracking-javascript-guide#multiple-piwik-trackers')
                            }
                            av[ap]++
                        }
                    }
                }
            }
            return au
        }
        var C = ["addTracker", "forgetCookieConsentGiven", "requireCookieConsent", "disableCookies", "setTrackerUrl", "setAPIUrl", "enableCrossDomainLinking", "setCrossDomainLinkingTimeout", "setSessionCookieTimeout", "setVisitorCookieTimeout", "setCookieNamePrefix", "setCookieSameSite", "setSecureCookie", "setCookiePath", "setCookieDomain", "setDomains", "setUserId", "setVisitorId", "setSiteId", "alwaysUseSendBeacon", "enableLinkTracking", "setCookieConsentGiven", "requireConsent", "setConsentGiven", "disablePerformanceTracking"];

        function ad(aq, ap) {
            var ao = new P(aq, ap);
            I.push(ao);
            _paq = c(_paq, C);
            for (E = 0; E < _paq.length; E++) {
                if (_paq[E]) {
                    af(_paq[E])
                }
            }
            _paq = new H();
            t.trigger("TrackerAdded", [ao]);
            return ao
        }
        an(S, "beforeunload", ai, false);
        an(S, "online", function() {
            if (J(g.serviceWorker) && J(g.serviceWorker.ready)) {
                g.serviceWorker.ready.then(function(ao) {
                    if (ao && ao.sync) {
                        return ao.sync.register("matomoSync")
                    }
                })
            }
        }, false);
        an(S, "message", function(au) {
            if (!au || !au.origin) {
                return
            }
            var aw, ar, ap;
            var ax = d(au.origin);
            var at = t.getAsyncTrackers();
            for (ar = 0; ar < at.length; ar++) {
                ap = d(at[ar].getMatomoUrl());
                if (ap === ax) {
                    aw = at[ar];
                    break
                }
            }
            if (!aw) {
                return
            }
            var aq = null;
            try {
                aq = JSON.parse(au.data)
            } catch (av) {
                return
            }
            if (!aq) {
                return
            }

            function ao(aA) {
                var aC = G.getElementsByTagName("iframe");
                for (ar = 0; ar < aC.length; ar++) {
                    var aB = aC[ar];
                    var ay = d(aB.src);
                    if (aB.contentWindow && J(aB.contentWindow.postMessage) && ay === ax) {
                        var az = JSON.stringify(aA);
                        aB.contentWindow.postMessage(az, "*")
                    }
                }
            }
            if (J(aq.maq_initial_value)) {
                ao({
                    maq_opted_in: aq.maq_initial_value && aw.hasConsent(),
                    maq_url: aw.getMatomoUrl(),
                    maq_optout_by_default: aw.isConsentRequired()
                })
            } else {
                if (J(aq.maq_opted_in)) {
                    at = t.getAsyncTrackers();
                    for (ar = 0; ar < at.length; ar++) {
                        aw = at[ar];
                        if (aq.maq_opted_in) {
                            aw.rememberConsentGiven()
                        } else {
                            aw.forgetConsentGiven()
                        }
                    }
                    ao({
                        maq_confirm_opted_in: aw.hasConsent(),
                        maq_url: aw.getMatomoUrl(),
                        maq_optout_by_default: aw.isConsentRequired()
                    })
                }
            }
        }, false);
        Date.prototype.getTimeAlias = Date.prototype.getTime;
        t = {
            initialized: false,
            JSON: S.JSON,
            DOM: {
                addEventListener: function(ar, aq, ap, ao) {
                    var at = typeof ao;
                    if (at === "undefined") {
                        ao = false
                    }
                    an(ar, aq, ap, ao)
                },
                onLoad: m,
                onReady: p,
                isNodeVisible: i,
                isOrWasNodeVisible: v.isNodeVisible
            },
            on: function(ap, ao) {
                if (!y[ap]) {
                    y[ap] = []
                }
                y[ap].push(ao)
            },
            off: function(aq, ap) {
                if (!y[aq]) {
                    return
                }
                var ao = 0;
                for (ao; ao < y[aq].length; ao++) {
                    if (y[aq][ao] === ap) {
                        y[aq].splice(ao, 1)
                    }
                }
            },
            trigger: function(aq, ar, ap) {
                if (!y[aq]) {
                    return
                }
                var ao = 0;
                for (ao; ao < y[aq].length; ao++) {
                    y[aq][ao].apply(ap || S, ar)
                }
            },
            addPlugin: function(ao, ap) {
                b[ao] = ap
            },
            getTracker: function(ap, ao) {
                if (!J(ao)) {
                    ao = this.getAsyncTracker().getSiteId()
                }
                if (!J(ap)) {
                    ap = this.getAsyncTracker().getTrackerUrl()
                }
                return new P(ap, ao)
            },
            getAsyncTrackers: function() {
                return I
            },
            addTracker: function(aq, ap) {
                var ao;
                if (!I.length) {
                    ao = ad(aq, ap)
                } else {
                    ao = I[0].addTracker(aq, ap)
                }
                return ao
            },
            getAsyncTracker: function(at, ar) {
                var aq;
                if (I && I.length && I[0]) {
                    aq = I[0]
                } else {
                    return ad(at, ar)
                }
                if (!ar && !at) {
                    return aq
                }
                if ((!J(ar) || null === ar) && aq) {
                    ar = aq.getSiteId()
                }
                if ((!J(at) || null === at) && aq) {
                    at = aq.getTrackerUrl()
                }
                var ap, ao = 0;
                for (ao; ao < I.length; ao++) {
                    ap = I[ao];
                    if (ap && String(ap.getSiteId()) === String(ar) && ap.getTrackerUrl() === at) {
                        return ap
                    }
                }
            },
            retryMissedPluginCalls: function() {
                var ap = ah;
                ah = [];
                var ao = 0;
                for (ao; ao < ap.length; ao++) {
                    af(ap[ao])
                }
            }
        };
        if (typeof define === "function" && define.amd) {
            define("piwik", [], function() {
                return t
            });
            define("matomo", [], function() {
                return t
            })
        }
        return t
    }())
}
/*!!! pluginTrackerHook */
(function() {
    function b() {
        if ("object" !== typeof _paq) {
            return false
        }
        var c = typeof _paq.length;
        if ("undefined" === c) {
            return false
        }
        return !!_paq.length
    }
    if (window && "object" === typeof window.matomoPluginAsyncInit && window.matomoPluginAsyncInit.length) {
        var a = 0;
        for (a; a < window.matomoPluginAsyncInit.length; a++) {
            if (typeof window.matomoPluginAsyncInit[a] === "function") {
                window.matomoPluginAsyncInit[a]()
            }
        }
    }
    if (window && window.piwikAsyncInit) {
        window.piwikAsyncInit()
    }
    if (window && window.matomoAsyncInit) {
        window.matomoAsyncInit()
    }
    if (!window.Matomo.getAsyncTrackers().length) {
        if (b()) {
            window.Matomo.addTracker()
        } else {
            _paq = {
                push: function(c) {
                    var d = typeof console;
                    if (d !== "undefined" && console && console.error) {
                        console.error("_paq.push() was used but Matomo tracker was not initialized before the matomo.js file was loaded. Make sure to configure the tracker via _paq.push before loading matomo.js. Alternatively, you can create a tracker via Matomo.addTracker() manually and then use _paq.push but it may not fully work as tracker methods may not be executed in the correct order.", c)
                    }
                }
            }
        }
    }
    window.Matomo.trigger("MatomoInitialized", []);
    window.Matomo.initialized = true
}());
(function() {
    var a = (typeof window.AnalyticsTracker);
    if (a === "undefined") {
        window.AnalyticsTracker = window.Matomo
    }
}());
if (typeof window.piwik_log !== "function") {
    window.piwik_log = function(c, e, g, f) {
        function b(h) {
            try {
                if (window["piwik_" + h]) {
                    return window["piwik_" + h]
                }
            } catch (i) {}
            return
        }
        var d, a = window.Matomo.getTracker(g, e);
        a.setDocumentTitle(c);
        a.setCustomData(f);
        d = b("tracker_pause");
        if (d) {
            a.setLinkTrackingTimer(d)
        }
        d = b("download_extensions");
        if (d) {
            a.setDownloadExtensions(d)
        }
        d = b("hosts_alias");
        if (d) {
            a.setDomains(d)
        }
        d = b("ignore_classes");
        if (d) {
            a.setIgnoreClasses(d)
        }
        a.trackPageView();
        if (b("install_tracker")) {
            piwik_track = function(i, j, k, h) {
                a.setSiteId(j);
                a.setTrackerUrl(k);
                a.trackLink(i, h)
            };
            a.enableLinkTracking()
        }
    }
}
/*!! @license-end */
;