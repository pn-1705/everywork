<div class="default-sidebar sticky">
    <nav class="side-navbar">
        <div class="head-nav">
            <div class="my-cb-center">
                <h2>Quản lí tài khoản</h2>
            </div>
            <ul class="list-unstyled">
                <li> <a href="https://careerbuilder.vn/vi/jobseekers/dashboard" title="Quản lý hồ sơ"> <em class="material-icons">color_lens</em><span>Quản lý hồ sơ</span></a></li>
                <li style="display:none"> <a href="https://careerbuilder.vn/vi/jobseekers/cv-hay/my-profile"> <em class="material-icons">person</em><span>Hồ sơ Careerbuilder</span></a></li>
                <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile"> <em class="material-icons">person</em><span>Hồ sơ Careerbuilder</span></a></li>
                <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/changetemplate"> <em class="material-icons">portrait</em><span>Chỉnh mẫu hồ sơ</span></a></li>
                <li><a class="collapse {{ Route::is('viec-lam-da-luu') ? 'active' : "" }}{{ Route::is('viec-lam-da-nop') ? 'active' : "" }}" href="javascript:;"><em class="material-icons">edit</em><span>Việc làm của tôi</span></a>
                    <ul class="list-unstyled collapse {{ Route::is('viec-lam-da-luu') ? 'd-block' : "" }}{{ Route::is('viec-lam-da-nop') ? 'd-block' : "" }}">
                        <li><a class="{{ Route::is('viec-lam-da-luu') ? 'active' : "" }}" href="{{ route('viec-lam-da-luu') }}">Việc làm đã lưu</a></li>
                        <li><a class="{{ Route::is('viec-lam-da-nop') ? 'active' : "" }}" href="{{ route('viec-lam-da-nop') }}">Việc làm đã nộp</a></li>
                    </ul>
                </li>
                <li> <a href="https://careerbuilder.vn/vi/jobseekers/jobalert"><em class="material-icons">notifications</em><span>Thông Báo Việc Làm</span></a></li>
                <li> <a class="collapse " href="javascript:;"><em class="material-icons">remove_red_eye</em><span>Nhà tuyển dụng của tôi</span></a>
                    <ul class="list-unstyled collapse">
                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp">Nhà tuyển dụng xem hồ sơ của tôi</a></li>
                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/following">Following</a></li>
                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/blacklist">Nhà tuyển dụng được cài đặt hạn chế xem hồ sơ của tôi</a></li>
                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/feedback">Phản hồi từ nhà tuyển dụng</a></li>
                    </ul>
                </li>
                <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/notify" title="Xem tất cả thông báo"> <em class="material-icons">textsms</em><span>Xem tất cả thông báo</span></a></li>
                <li> <a class="collapse {{ Route::is('information') ? 'active' : "" }} " href="javascript:;"><em class="material-icons">settings</em><span>Cài đặt</span></a>
                    <ul class="list-unstyled collapse {{ Route::is('information') ? 'd-block' : "" }}">
                        <li> <a href="{{ route('information') }}" class="{{ Route::is('information') ? 'active' : "" }}" title="Tài Khoản">Tài Khoản</a></li>
                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/member/emailmanagement" title="Cài Đặt Thông Báo">Cài Đặt Thông Báo</a></li>
                    </ul>
                </li>
                <li> <a href="https://careerbuilder.vn/vi/jobseekers/logout" title="Thoát"> <em class="material-icons">power_settings_new</em><span>Thoát</span></a></li>
            </ul>
        </div>
        <div class="toggle-nav"><em class="material-icons">menu_open</em></div>
    </nav>
</div>
<script>/*global.js*/
    function dropdownMenu() {
        $(".dropdown-mobile").each((function () {
            $(this).on("click", (function () {
                $(this).hasClass("show-menu") ? $(".dropdown-mobile").removeClass("show-menu") : ($(".dropdown-mobile").removeClass("show-menu"), $(this).addClass("show-menu")), $(this).hasClass("dropdown-2-menu") && $(this).addClass("show-menu")
            }))
        })), $(".dropdown-mobile-2").each((function () {
            $(this).on("click", (function () {
                $(".dropdown-2-menu").addClass("show-menu"), $(this).hasClass("show-menu-2") ? $(".dropdown-mobile-2").removeClass("show-menu-2") : ($(".dropdown-mobile-2").removeClass("show-menu-2"), $(this).addClass("show-menu-2"))
            }))
        }))
    }

    function menuMobile() {
        $(".button-hambuger").on("click", (function () {
            $(".mobile-menu").toggleClass("show"), $("html").toggleClass("menu-mobile-active"), $(".back-drop").addClass("active"), $("html").hasClass("menu-mobile-active") ? $(".back-drop").addClass("active") : $(".back-drop").removeClass("active")
        })), $(".back-drop").on("click", (function () {
            $(".mobile-menu").removeClass("show"), $("html").removeClass("menu-mobile-active"), $(".back-drop").removeClass("active"), $("header .main-login .dropdown-menu").slideUp(), $(".edit-db-career-goals").removeClass("active"), $(".edit-db-outstanding-achievements").removeClass("active")
        })), $(".dropdown-search-jobs").on("click", (function () {
            $(".dropdown-search-jobs .dropdown-menu").slideToggle()
        })), $("header .main-login .title-login").on("click", (function () {
            $("header .main-login .dropdown-menu").slideToggle(), $(".back-drop").toggleClass("active")
        }))
    }

    function clickMyCareerBuilder() {
        $("header .mobile-menu .header-bottom-bottom .authentication-links .My-CareerBuilder").on("click", (function () {
            $("header .mobile-menu .profile .back-menu-normal").addClass("active"), $("header .mobile-menu .menu").addClass("active"), $("header .mobile-menu .menu .menu-normal").addClass("active"), $("header .mobile-menu .menu .menu-logged").addClass("active"), $("header .mobile-menu .header-bottom-bottom .authentication-links").addClass("active")
        })), $("header .mobile-menu .profile .back-menu-normal").on("click", (function () {
            $("header .mobile-menu .profile .back-menu-normal").removeClass("active"), $("header .mobile-menu .menu").removeClass("active"), $("header .mobile-menu .menu .menu-normal").removeClass("active"), $("header .mobile-menu .menu .menu-logged").removeClass("active"), $("header .mobile-menu .header-bottom-bottom .authentication-links").removeClass("active")
        }))
    }

    function menuDashBoard() {
        $("header .mobile-menu .menu .menu-logged ul .menu-dashboard").on("click", (function () {
            $("header .mobile-menu .menu .menu-logged").addClass("active-2"), $("header .mobile-menu .menu .menu-logged ul .menu-dashboard .list-unstyled").removeClass("active"), $(this).find(".list-unstyled").addClass("active"), $("header .mobile-menu .profile .back-menu-normal-2").addClass("active"), $("header .mobile-menu .profile .back-menu-normal").removeClass("active")
        })), $("header .mobile-menu .profile .back-menu-normal-2").on("click", (function () {
            $(this).removeClass("active"), $("header .mobile-menu .profile .back-menu-normal").addClass("active"), $("header .mobile-menu .menu .menu-logged ul .menu-dashboard .list-unstyled").removeClass("active"), $("header .mobile-menu .menu .menu-logged").removeClass("active-2")
        }))
    }

    !function (e, t) {
        "use strict";
        "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function (e) {
            if (!e.document) throw new Error("jQuery requires a window with a document");
            return t(e)
        } : t(e)
    }("undefined" != typeof window ? window : this, (function (e, t) {
        "use strict";
        var n = [], r = Object.getPrototypeOf, i = n.slice, o = n.flat ? function (e) {
                return n.flat.call(e)
            } : function (e) {
                return n.concat.apply([], e)
            }, a = n.push, s = n.indexOf, l = {}, u = l.toString, c = l.hasOwnProperty, d = c.toString, f = d.call(Object),
            p = {}, h = function (e) {
                return "function" == typeof e && "number" != typeof e.nodeType
            }, m = function (e) {
                return null != e && e === e.window
            }, g = e.document, v = {type: !0, src: !0, nonce: !0, noModule: !0};

        function y(e, t, n) {
            var r, i, o = (n = n || g).createElement("script");
            if (o.text = e, t) for (r in v) (i = t[r] || t.getAttribute && t.getAttribute(r)) && o.setAttribute(r, i);
            n.head.appendChild(o).parentNode.removeChild(o)
        }

        function b(e) {
            return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? l[u.call(e)] || "object" : typeof e
        }

        var x = "3.5.1", w = function (e, t) {
            return new w.fn.init(e, t)
        };

        function C(e) {
            var t = !!e && "length" in e && e.length, n = b(e);
            return !h(e) && !m(e) && ("array" === n || 0 === t || "number" == typeof t && 0 < t && t - 1 in e)
        }

        w.fn = w.prototype = {
            jquery: x, constructor: w, length: 0, toArray: function () {
                return i.call(this)
            }, get: function (e) {
                return null == e ? i.call(this) : e < 0 ? this[e + this.length] : this[e]
            }, pushStack: function (e) {
                var t = w.merge(this.constructor(), e);
                return t.prevObject = this, t
            }, each: function (e) {
                return w.each(this, e)
            }, map: function (e) {
                return this.pushStack(w.map(this, (function (t, n) {
                    return e.call(t, n, t)
                })))
            }, slice: function () {
                return this.pushStack(i.apply(this, arguments))
            }, first: function () {
                return this.eq(0)
            }, last: function () {
                return this.eq(-1)
            }, even: function () {
                return this.pushStack(w.grep(this, (function (e, t) {
                    return (t + 1) % 2
                })))
            }, odd: function () {
                return this.pushStack(w.grep(this, (function (e, t) {
                    return t % 2
                })))
            }, eq: function (e) {
                var t = this.length, n = +e + (e < 0 ? t : 0);
                return this.pushStack(0 <= n && n < t ? [this[n]] : [])
            }, end: function () {
                return this.prevObject || this.constructor()
            }, push: a, sort: n.sort, splice: n.splice
        }, w.extend = w.fn.extend = function () {
            var e, t, n, r, i, o, a = arguments[0] || {}, s = 1, l = arguments.length, u = !1;
            for ("boolean" == typeof a && (u = a, a = arguments[s] || {}, s++), "object" == typeof a || h(a) || (a = {}), s === l && (a = this, s--); s < l; s++) if (null != (e = arguments[s])) for (t in e) r = e[t], "__proto__" !== t && a !== r && (u && r && (w.isPlainObject(r) || (i = Array.isArray(r))) ? (n = a[t], o = i && !Array.isArray(n) ? [] : i || w.isPlainObject(n) ? n : {}, i = !1, a[t] = w.extend(u, o, r)) : void 0 !== r && (a[t] = r));
            return a
        }, w.extend({
            expando: "jQuery" + (x + Math.random()).replace(/\D/g, ""), isReady: !0, error: function (e) {
                throw new Error(e)
            }, noop: function () {
            }, isPlainObject: function (e) {
                var t, n;
                return !(!e || "[object Object]" !== u.call(e) || (t = r(e)) && ("function" != typeof (n = c.call(t, "constructor") && t.constructor) || d.call(n) !== f))
            }, isEmptyObject: function (e) {
                var t;
                for (t in e) return !1;
                return !0
            }, globalEval: function (e, t, n) {
                y(e, {nonce: t && t.nonce}, n)
            }, each: function (e, t) {
                var n, r = 0;
                if (C(e)) for (n = e.length; r < n && !1 !== t.call(e[r], r, e[r]); r++) ; else for (r in e) if (!1 === t.call(e[r], r, e[r])) break;
                return e
            }, makeArray: function (e, t) {
                var n = t || [];
                return null != e && (C(Object(e)) ? w.merge(n, "string" == typeof e ? [e] : e) : a.call(n, e)), n
            }, inArray: function (e, t, n) {
                return null == t ? -1 : s.call(t, e, n)
            }, merge: function (e, t) {
                for (var n = +t.length, r = 0, i = e.length; r < n; r++) e[i++] = t[r];
                return e.length = i, e
            }, grep: function (e, t, n) {
                for (var r = [], i = 0, o = e.length, a = !n; i < o; i++) !t(e[i], i) !== a && r.push(e[i]);
                return r
            }, map: function (e, t, n) {
                var r, i, a = 0, s = [];
                if (C(e)) for (r = e.length; a < r; a++) null != (i = t(e[a], a, n)) && s.push(i); else for (a in e) null != (i = t(e[a], a, n)) && s.push(i);
                return o(s)
            }, guid: 1, support: p
        }), "function" == typeof Symbol && (w.fn[Symbol.iterator] = n[Symbol.iterator]), w.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), (function (e, t) {
            l["[object " + t + "]"] = t.toLowerCase()
        }));
        var T = function (e) {
            var t, n, r, i, o, a, s, l, u, c, d, f, p, h, m, g, v, y, b, x = "sizzle" + 1 * new Date, w = e.document,
                C = 0, T = 0, k = le(), E = le(), A = le(), S = le(), N = function (e, t) {
                    return e === t && (d = !0), 0
                }, D = {}.hasOwnProperty, j = [], $ = j.pop, L = j.push, q = j.push, H = j.slice, M = function (e, t) {
                    for (var n = 0, r = e.length; n < r; n++) if (e[n] === t) return n;
                    return -1
                },
                O = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                P = "[\\x20\\t\\r\\n\\f]",
                R = "(?:\\\\[\\da-fA-F]{1,6}" + P + "?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",
                z = "\\[" + P + "*(" + R + ")(?:" + P + "*([*^$|!~]?=)" + P + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + R + "))|)" + P + "*\\]",
                I = ":(" + R + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + z + ")*)|.*)\\)|)",
                W = new RegExp(P + "+", "g"), B = new RegExp("^" + P + "+|((?:^|[^\\\\])(?:\\\\.)*)" + P + "+$", "g"),
                F = new RegExp("^" + P + "*," + P + "*"), _ = new RegExp("^" + P + "*([>+~]|" + P + ")" + P + "*"),
                U = new RegExp(P + "|>"), X = new RegExp(I), V = new RegExp("^" + R + "$"), G = {
                    ID: new RegExp("^#(" + R + ")"),
                    CLASS: new RegExp("^\\.(" + R + ")"),
                    TAG: new RegExp("^(" + R + "|[*])"),
                    ATTR: new RegExp("^" + z),
                    PSEUDO: new RegExp("^" + I),
                    CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + P + "*(even|odd|(([+-]|)(\\d*)n|)" + P + "*(?:([+-]|)" + P + "*(\\d+)|))" + P + "*\\)|)", "i"),
                    bool: new RegExp("^(?:" + O + ")$", "i"),
                    needsContext: new RegExp("^" + P + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + P + "*((?:-\\d)?\\d*)" + P + "*\\)|)(?=[^-]|$)", "i")
                }, Y = /HTML$/i, Q = /^(?:input|select|textarea|button)$/i, J = /^h\d$/i, K = /^[^{]+\{\s*\[native \w/,
                Z = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, ee = /[+~]/,
                te = new RegExp("\\\\[\\da-fA-F]{1,6}" + P + "?|\\\\([^\\r\\n\\f])", "g"), ne = function (e, t) {
                    var n = "0x" + e.slice(1) - 65536;
                    return t || (n < 0 ? String.fromCharCode(n + 65536) : String.fromCharCode(n >> 10 | 55296, 1023 & n | 56320))
                }, re = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g, ie = function (e, t) {
                    return t ? "\0" === e ? "�" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
                }, oe = function () {
                    f()
                }, ae = xe((function (e) {
                    return !0 === e.disabled && "fieldset" === e.nodeName.toLowerCase()
                }), {dir: "parentNode", next: "legend"});
            try {
                q.apply(j = H.call(w.childNodes), w.childNodes), j[w.childNodes.length].nodeType
            } catch (t) {
                q = {
                    apply: j.length ? function (e, t) {
                        L.apply(e, H.call(t))
                    } : function (e, t) {
                        for (var n = e.length, r = 0; e[n++] = t[r++];) ;
                        e.length = n - 1
                    }
                }
            }

            function se(e, t, r, i) {
                var o, s, u, c, d, h, v, y = t && t.ownerDocument, w = t ? t.nodeType : 9;
                if (r = r || [], "string" != typeof e || !e || 1 !== w && 9 !== w && 11 !== w) return r;
                if (!i && (f(t), t = t || p, m)) {
                    if (11 !== w && (d = Z.exec(e))) if (o = d[1]) {
                        if (9 === w) {
                            if (!(u = t.getElementById(o))) return r;
                            if (u.id === o) return r.push(u), r
                        } else if (y && (u = y.getElementById(o)) && b(t, u) && u.id === o) return r.push(u), r
                    } else {
                        if (d[2]) return q.apply(r, t.getElementsByTagName(e)), r;
                        if ((o = d[3]) && n.getElementsByClassName && t.getElementsByClassName) return q.apply(r, t.getElementsByClassName(o)), r
                    }
                    if (n.qsa && !S[e + " "] && (!g || !g.test(e)) && (1 !== w || "object" !== t.nodeName.toLowerCase())) {
                        if (v = e, y = t, 1 === w && (U.test(e) || _.test(e))) {
                            for ((y = ee.test(e) && ve(t.parentNode) || t) === t && n.scope || ((c = t.getAttribute("id")) ? c = c.replace(re, ie) : t.setAttribute("id", c = x)), s = (h = a(e)).length; s--;) h[s] = (c ? "#" + c : ":scope") + " " + be(h[s]);
                            v = h.join(",")
                        }
                        try {
                            return q.apply(r, y.querySelectorAll(v)), r
                        } catch (t) {
                            S(e, !0)
                        } finally {
                            c === x && t.removeAttribute("id")
                        }
                    }
                }
                return l(e.replace(B, "$1"), t, r, i)
            }

            function le() {
                var e = [];
                return function t(n, i) {
                    return e.push(n + " ") > r.cacheLength && delete t[e.shift()], t[n + " "] = i
                }
            }

            function ue(e) {
                return e[x] = !0, e
            }

            function ce(e) {
                var t = p.createElement("fieldset");
                try {
                    return !!e(t)
                } catch (e) {
                    return !1
                } finally {
                    t.parentNode && t.parentNode.removeChild(t), t = null
                }
            }

            function de(e, t) {
                for (var n = e.split("|"), i = n.length; i--;) r.attrHandle[n[i]] = t
            }

            function fe(e, t) {
                var n = t && e, r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
                if (r) return r;
                if (n) for (; n = n.nextSibling;) if (n === t) return -1;
                return e ? 1 : -1
            }

            function pe(e) {
                return function (t) {
                    return "input" === t.nodeName.toLowerCase() && t.type === e
                }
            }

            function he(e) {
                return function (t) {
                    var n = t.nodeName.toLowerCase();
                    return ("input" === n || "button" === n) && t.type === e
                }
            }

            function me(e) {
                return function (t) {
                    return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && ae(t) === e : t.disabled === e : "label" in t && t.disabled === e
                }
            }

            function ge(e) {
                return ue((function (t) {
                    return t = +t, ue((function (n, r) {
                        for (var i, o = e([], n.length, t), a = o.length; a--;) n[i = o[a]] && (n[i] = !(r[i] = n[i]))
                    }))
                }))
            }

            function ve(e) {
                return e && void 0 !== e.getElementsByTagName && e
            }

            for (t in n = se.support = {}, o = se.isXML = function (e) {
                var t = e.namespaceURI, n = (e.ownerDocument || e).documentElement;
                return !Y.test(t || n && n.nodeName || "HTML")
            }, f = se.setDocument = function (e) {
                var t, i, a = e ? e.ownerDocument || e : w;
                return a != p && 9 === a.nodeType && a.documentElement && (h = (p = a).documentElement, m = !o(p), w != p && (i = p.defaultView) && i.top !== i && (i.addEventListener ? i.addEventListener("unload", oe, !1) : i.attachEvent && i.attachEvent("onunload", oe)), n.scope = ce((function (e) {
                    return h.appendChild(e).appendChild(p.createElement("div")), void 0 !== e.querySelectorAll && !e.querySelectorAll(":scope fieldset div").length
                })), n.attributes = ce((function (e) {
                    return e.className = "i", !e.getAttribute("className")
                })), n.getElementsByTagName = ce((function (e) {
                    return e.appendChild(p.createComment("")), !e.getElementsByTagName("*").length
                })), n.getElementsByClassName = K.test(p.getElementsByClassName), n.getById = ce((function (e) {
                    return h.appendChild(e).id = x, !p.getElementsByName || !p.getElementsByName(x).length
                })), n.getById ? (r.filter.ID = function (e) {
                    var t = e.replace(te, ne);
                    return function (e) {
                        return e.getAttribute("id") === t
                    }
                }, r.find.ID = function (e, t) {
                    if (void 0 !== t.getElementById && m) {
                        var n = t.getElementById(e);
                        return n ? [n] : []
                    }
                }) : (r.filter.ID = function (e) {
                    var t = e.replace(te, ne);
                    return function (e) {
                        var n = void 0 !== e.getAttributeNode && e.getAttributeNode("id");
                        return n && n.value === t
                    }
                }, r.find.ID = function (e, t) {
                    if (void 0 !== t.getElementById && m) {
                        var n, r, i, o = t.getElementById(e);
                        if (o) {
                            if ((n = o.getAttributeNode("id")) && n.value === e) return [o];
                            for (i = t.getElementsByName(e), r = 0; o = i[r++];) if ((n = o.getAttributeNode("id")) && n.value === e) return [o]
                        }
                        return []
                    }
                }), r.find.TAG = n.getElementsByTagName ? function (e, t) {
                    return void 0 !== t.getElementsByTagName ? t.getElementsByTagName(e) : n.qsa ? t.querySelectorAll(e) : void 0
                } : function (e, t) {
                    var n, r = [], i = 0, o = t.getElementsByTagName(e);
                    if ("*" === e) {
                        for (; n = o[i++];) 1 === n.nodeType && r.push(n);
                        return r
                    }
                    return o
                }, r.find.CLASS = n.getElementsByClassName && function (e, t) {
                    if (void 0 !== t.getElementsByClassName && m) return t.getElementsByClassName(e)
                }, v = [], g = [], (n.qsa = K.test(p.querySelectorAll)) && (ce((function (e) {
                    var t;
                    h.appendChild(e).innerHTML = "<a id='" + x + "'></a><select id='" + x + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && g.push("[*^$]=" + P + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || g.push("\\[" + P + "*(?:value|" + O + ")"), e.querySelectorAll("[id~=" + x + "-]").length || g.push("~="), (t = p.createElement("input")).setAttribute("name", ""), e.appendChild(t), e.querySelectorAll("[name='']").length || g.push("\\[" + P + "*name" + P + "*=" + P + "*(?:''|\"\")"), e.querySelectorAll(":checked").length || g.push(":checked"), e.querySelectorAll("a#" + x + "+*").length || g.push(".#.+[+~]")
                })), ce((function (e) {
                    e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                    var t = p.createElement("input");
                    t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && g.push("name" + P + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && g.push(":enabled", ":disabled"), h.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && g.push(":enabled", ":disabled")
                }))), (n.matchesSelector = K.test(y = h.matches || h.webkitMatchesSelector || h.mozMatchesSelector || h.oMatchesSelector || h.msMatchesSelector)) && ce((function (e) {
                    n.disconnectedMatch = y.call(e, "*"), y.call(e, "[s!='']:x"), v.push("!=", I)
                })), g = g.length && new RegExp(g.join("|")), v = v.length && new RegExp(v.join("|")), t = K.test(h.compareDocumentPosition), b = t || K.test(h.contains) ? function (e, t) {
                    var n = 9 === e.nodeType ? e.documentElement : e, r = t && t.parentNode;
                    return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
                } : function (e, t) {
                    if (t) for (; t = t.parentNode;) if (t === e) return !0;
                    return !1
                }, N = t ? function (e, t) {
                    if (e === t) return d = !0, 0;
                    var r = !e.compareDocumentPosition - !t.compareDocumentPosition;
                    return r || (1 & (r = (e.ownerDocument || e) == (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !n.sortDetached && t.compareDocumentPosition(e) === r ? e == p || e.ownerDocument == w && b(w, e) ? -1 : t == p || t.ownerDocument == w && b(w, t) ? 1 : c ? M(c, e) - M(c, t) : 0 : 4 & r ? -1 : 1)
                } : function (e, t) {
                    if (e === t) return d = !0, 0;
                    var n, r = 0, i = e.parentNode, o = t.parentNode, a = [e], s = [t];
                    if (!i || !o) return e == p ? -1 : t == p ? 1 : i ? -1 : o ? 1 : c ? M(c, e) - M(c, t) : 0;
                    if (i === o) return fe(e, t);
                    for (n = e; n = n.parentNode;) a.unshift(n);
                    for (n = t; n = n.parentNode;) s.unshift(n);
                    for (; a[r] === s[r];) r++;
                    return r ? fe(a[r], s[r]) : a[r] == w ? -1 : s[r] == w ? 1 : 0
                }), p
            }, se.matches = function (e, t) {
                return se(e, null, null, t)
            }, se.matchesSelector = function (e, t) {
                if (f(e), n.matchesSelector && m && !S[t + " "] && (!v || !v.test(t)) && (!g || !g.test(t))) try {
                    var r = y.call(e, t);
                    if (r || n.disconnectedMatch || e.document && 11 !== e.document.nodeType) return r
                } catch (e) {
                    S(t, !0)
                }
                return 0 < se(t, p, null, [e]).length
            }, se.contains = function (e, t) {
                return (e.ownerDocument || e) != p && f(e), b(e, t)
            }, se.attr = function (e, t) {
                (e.ownerDocument || e) != p && f(e);
                var i = r.attrHandle[t.toLowerCase()],
                    o = i && D.call(r.attrHandle, t.toLowerCase()) ? i(e, t, !m) : void 0;
                return void 0 !== o ? o : n.attributes || !m ? e.getAttribute(t) : (o = e.getAttributeNode(t)) && o.specified ? o.value : null
            }, se.escape = function (e) {
                return (e + "").replace(re, ie)
            }, se.error = function (e) {
                throw new Error("Syntax error, unrecognized expression: " + e)
            }, se.uniqueSort = function (e) {
                var t, r = [], i = 0, o = 0;
                if (d = !n.detectDuplicates, c = !n.sortStable && e.slice(0), e.sort(N), d) {
                    for (; t = e[o++];) t === e[o] && (i = r.push(o));
                    for (; i--;) e.splice(r[i], 1)
                }
                return c = null, e
            }, i = se.getText = function (e) {
                var t, n = "", r = 0, o = e.nodeType;
                if (o) {
                    if (1 === o || 9 === o || 11 === o) {
                        if ("string" == typeof e.textContent) return e.textContent;
                        for (e = e.firstChild; e; e = e.nextSibling) n += i(e)
                    } else if (3 === o || 4 === o) return e.nodeValue
                } else for (; t = e[r++];) n += i(t);
                return n
            }, (r = se.selectors = {
                cacheLength: 50,
                createPseudo: ue,
                match: G,
                attrHandle: {},
                find: {},
                relative: {
                    ">": {dir: "parentNode", first: !0},
                    " ": {dir: "parentNode"},
                    "+": {dir: "previousSibling", first: !0},
                    "~": {dir: "previousSibling"}
                },
                preFilter: {
                    ATTR: function (e) {
                        return e[1] = e[1].replace(te, ne), e[3] = (e[3] || e[4] || e[5] || "").replace(te, ne), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
                    }, CHILD: function (e) {
                        return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || se.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && se.error(e[0]), e
                    }, PSEUDO: function (e) {
                        var t, n = !e[6] && e[2];
                        return G.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && X.test(n) && (t = a(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3))
                    }
                },
                filter: {
                    TAG: function (e) {
                        var t = e.replace(te, ne).toLowerCase();
                        return "*" === e ? function () {
                            return !0
                        } : function (e) {
                            return e.nodeName && e.nodeName.toLowerCase() === t
                        }
                    }, CLASS: function (e) {
                        var t = k[e + " "];
                        return t || (t = new RegExp("(^|" + P + ")" + e + "(" + P + "|$)")) && k(e, (function (e) {
                            return t.test("string" == typeof e.className && e.className || void 0 !== e.getAttribute && e.getAttribute("class") || "")
                        }))
                    }, ATTR: function (e, t, n) {
                        return function (r) {
                            var i = se.attr(r, e);
                            return null == i ? "!=" === t : !t || (i += "", "=" === t ? i === n : "!=" === t ? i !== n : "^=" === t ? n && 0 === i.indexOf(n) : "*=" === t ? n && -1 < i.indexOf(n) : "$=" === t ? n && i.slice(-n.length) === n : "~=" === t ? -1 < (" " + i.replace(W, " ") + " ").indexOf(n) : "|=" === t && (i === n || i.slice(0, n.length + 1) === n + "-"))
                        }
                    }, CHILD: function (e, t, n, r, i) {
                        var o = "nth" !== e.slice(0, 3), a = "last" !== e.slice(-4), s = "of-type" === t;
                        return 1 === r && 0 === i ? function (e) {
                            return !!e.parentNode
                        } : function (t, n, l) {
                            var u, c, d, f, p, h, m = o !== a ? "nextSibling" : "previousSibling", g = t.parentNode,
                                v = s && t.nodeName.toLowerCase(), y = !l && !s, b = !1;
                            if (g) {
                                if (o) {
                                    for (; m;) {
                                        for (f = t; f = f[m];) if (s ? f.nodeName.toLowerCase() === v : 1 === f.nodeType) return !1;
                                        h = m = "only" === e && !h && "nextSibling"
                                    }
                                    return !0
                                }
                                if (h = [a ? g.firstChild : g.lastChild], a && y) {
                                    for (b = (p = (u = (c = (d = (f = g)[x] || (f[x] = {}))[f.uniqueID] || (d[f.uniqueID] = {}))[e] || [])[0] === C && u[1]) && u[2], f = p && g.childNodes[p]; f = ++p && f && f[m] || (b = p = 0) || h.pop();) if (1 === f.nodeType && ++b && f === t) {
                                        c[e] = [C, p, b];
                                        break
                                    }
                                } else if (y && (b = p = (u = (c = (d = (f = t)[x] || (f[x] = {}))[f.uniqueID] || (d[f.uniqueID] = {}))[e] || [])[0] === C && u[1]), !1 === b) for (; (f = ++p && f && f[m] || (b = p = 0) || h.pop()) && ((s ? f.nodeName.toLowerCase() !== v : 1 !== f.nodeType) || !++b || (y && ((c = (d = f[x] || (f[x] = {}))[f.uniqueID] || (d[f.uniqueID] = {}))[e] = [C, b]), f !== t));) ;
                                return (b -= i) === r || b % r == 0 && 0 <= b / r
                            }
                        }
                    }, PSEUDO: function (e, t) {
                        var n,
                            i = r.pseudos[e] || r.setFilters[e.toLowerCase()] || se.error("unsupported pseudo: " + e);
                        return i[x] ? i(t) : 1 < i.length ? (n = [e, e, "", t], r.setFilters.hasOwnProperty(e.toLowerCase()) ? ue((function (e, n) {
                            for (var r, o = i(e, t), a = o.length; a--;) e[r = M(e, o[a])] = !(n[r] = o[a])
                        })) : function (e) {
                            return i(e, 0, n)
                        }) : i
                    }
                },
                pseudos: {
                    not: ue((function (e) {
                        var t = [], n = [], r = s(e.replace(B, "$1"));
                        return r[x] ? ue((function (e, t, n, i) {
                            for (var o, a = r(e, null, i, []), s = e.length; s--;) (o = a[s]) && (e[s] = !(t[s] = o))
                        })) : function (e, i, o) {
                            return t[0] = e, r(t, null, o, n), t[0] = null, !n.pop()
                        }
                    })), has: ue((function (e) {
                        return function (t) {
                            return 0 < se(e, t).length
                        }
                    })), contains: ue((function (e) {
                        return e = e.replace(te, ne), function (t) {
                            return -1 < (t.textContent || i(t)).indexOf(e)
                        }
                    })), lang: ue((function (e) {
                        return V.test(e || "") || se.error("unsupported lang: " + e), e = e.replace(te, ne).toLowerCase(), function (t) {
                            var n;
                            do {
                                if (n = m ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (n = n.toLowerCase()) === e || 0 === n.indexOf(e + "-")
                            } while ((t = t.parentNode) && 1 === t.nodeType);
                            return !1
                        }
                    })), target: function (t) {
                        var n = e.location && e.location.hash;
                        return n && n.slice(1) === t.id
                    }, root: function (e) {
                        return e === h
                    }, focus: function (e) {
                        return e === p.activeElement && (!p.hasFocus || p.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
                    }, enabled: me(!1), disabled: me(!0), checked: function (e) {
                        var t = e.nodeName.toLowerCase();
                        return "input" === t && !!e.checked || "option" === t && !!e.selected
                    }, selected: function (e) {
                        return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected
                    }, empty: function (e) {
                        for (e = e.firstChild; e; e = e.nextSibling) if (e.nodeType < 6) return !1;
                        return !0
                    }, parent: function (e) {
                        return !r.pseudos.empty(e)
                    }, header: function (e) {
                        return J.test(e.nodeName)
                    }, input: function (e) {
                        return Q.test(e.nodeName)
                    }, button: function (e) {
                        var t = e.nodeName.toLowerCase();
                        return "input" === t && "button" === e.type || "button" === t
                    }, text: function (e) {
                        var t;
                        return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
                    }, first: ge((function () {
                        return [0]
                    })), last: ge((function (e, t) {
                        return [t - 1]
                    })), eq: ge((function (e, t, n) {
                        return [n < 0 ? n + t : n]
                    })), even: ge((function (e, t) {
                        for (var n = 0; n < t; n += 2) e.push(n);
                        return e
                    })), odd: ge((function (e, t) {
                        for (var n = 1; n < t; n += 2) e.push(n);
                        return e
                    })), lt: ge((function (e, t, n) {
                        for (var r = n < 0 ? n + t : t < n ? t : n; 0 <= --r;) e.push(r);
                        return e
                    })), gt: ge((function (e, t, n) {
                        for (var r = n < 0 ? n + t : n; ++r < t;) e.push(r);
                        return e
                    }))
                }
            }).pseudos.nth = r.pseudos.eq, {
                radio: !0,
                checkbox: !0,
                file: !0,
                password: !0,
                image: !0
            }) r.pseudos[t] = pe(t);
            for (t in {submit: !0, reset: !0}) r.pseudos[t] = he(t);

            function ye() {
            }

            function be(e) {
                for (var t = 0, n = e.length, r = ""; t < n; t++) r += e[t].value;
                return r
            }

            function xe(e, t, n) {
                var r = t.dir, i = t.next, o = i || r, a = n && "parentNode" === o, s = T++;
                return t.first ? function (t, n, i) {
                    for (; t = t[r];) if (1 === t.nodeType || a) return e(t, n, i);
                    return !1
                } : function (t, n, l) {
                    var u, c, d, f = [C, s];
                    if (l) {
                        for (; t = t[r];) if ((1 === t.nodeType || a) && e(t, n, l)) return !0
                    } else for (; t = t[r];) if (1 === t.nodeType || a) if (c = (d = t[x] || (t[x] = {}))[t.uniqueID] || (d[t.uniqueID] = {}), i && i === t.nodeName.toLowerCase()) t = t[r] || t; else {
                        if ((u = c[o]) && u[0] === C && u[1] === s) return f[2] = u[2];
                        if ((c[o] = f)[2] = e(t, n, l)) return !0
                    }
                    return !1
                }
            }

            function we(e) {
                return 1 < e.length ? function (t, n, r) {
                    for (var i = e.length; i--;) if (!e[i](t, n, r)) return !1;
                    return !0
                } : e[0]
            }

            function Ce(e, t, n, r, i) {
                for (var o, a = [], s = 0, l = e.length, u = null != t; s < l; s++) (o = e[s]) && (n && !n(o, r, i) || (a.push(o), u && t.push(s)));
                return a
            }

            function Te(e, t, n, r, i, o) {
                return r && !r[x] && (r = Te(r)), i && !i[x] && (i = Te(i, o)), ue((function (o, a, s, l) {
                    var u, c, d, f = [], p = [], h = a.length, m = o || function (e, t, n) {
                            for (var r = 0, i = t.length; r < i; r++) se(e, t[r], n);
                            return n
                        }(t || "*", s.nodeType ? [s] : s, []), g = !e || !o && t ? m : Ce(m, f, e, s, l),
                        v = n ? i || (o ? e : h || r) ? [] : a : g;
                    if (n && n(g, v, s, l), r) for (u = Ce(v, p), r(u, [], s, l), c = u.length; c--;) (d = u[c]) && (v[p[c]] = !(g[p[c]] = d));
                    if (o) {
                        if (i || e) {
                            if (i) {
                                for (u = [], c = v.length; c--;) (d = v[c]) && u.push(g[c] = d);
                                i(null, v = [], u, l)
                            }
                            for (c = v.length; c--;) (d = v[c]) && -1 < (u = i ? M(o, d) : f[c]) && (o[u] = !(a[u] = d))
                        }
                    } else v = Ce(v === a ? v.splice(h, v.length) : v), i ? i(null, a, v, l) : q.apply(a, v)
                }))
            }

            function ke(e) {
                for (var t, n, i, o = e.length, a = r.relative[e[0].type], s = a || r.relative[" "], l = a ? 1 : 0, c = xe((function (e) {
                    return e === t
                }), s, !0), d = xe((function (e) {
                    return -1 < M(t, e)
                }), s, !0), f = [function (e, n, r) {
                    var i = !a && (r || n !== u) || ((t = n).nodeType ? c(e, n, r) : d(e, n, r));
                    return t = null, i
                }]; l < o; l++) if (n = r.relative[e[l].type]) f = [xe(we(f), n)]; else {
                    if ((n = r.filter[e[l].type].apply(null, e[l].matches))[x]) {
                        for (i = ++l; i < o && !r.relative[e[i].type]; i++) ;
                        return Te(1 < l && we(f), 1 < l && be(e.slice(0, l - 1).concat({value: " " === e[l - 2].type ? "*" : ""})).replace(B, "$1"), n, l < i && ke(e.slice(l, i)), i < o && ke(e = e.slice(i)), i < o && be(e))
                    }
                    f.push(n)
                }
                return we(f)
            }

            return ye.prototype = r.filters = r.pseudos, r.setFilters = new ye, a = se.tokenize = function (e, t) {
                var n, i, o, a, s, l, u, c = E[e + " "];
                if (c) return t ? 0 : c.slice(0);
                for (s = e, l = [], u = r.preFilter; s;) {
                    for (a in n && !(i = F.exec(s)) || (i && (s = s.slice(i[0].length) || s), l.push(o = [])), n = !1, (i = _.exec(s)) && (n = i.shift(), o.push({
                        value: n,
                        type: i[0].replace(B, " ")
                    }), s = s.slice(n.length)), r.filter) !(i = G[a].exec(s)) || u[a] && !(i = u[a](i)) || (n = i.shift(), o.push({
                        value: n,
                        type: a,
                        matches: i
                    }), s = s.slice(n.length));
                    if (!n) break
                }
                return t ? s.length : s ? se.error(e) : E(e, l).slice(0)
            }, s = se.compile = function (e, t) {
                var n, i, o, s, l, c, d = [], h = [], g = A[e + " "];
                if (!g) {
                    for (t || (t = a(e)), n = t.length; n--;) (g = ke(t[n]))[x] ? d.push(g) : h.push(g);
                    (g = A(e, (i = h, s = 0 < (o = d).length, l = 0 < i.length, c = function (e, t, n, a, c) {
                        var d, h, g, v = 0, y = "0", b = e && [], x = [], w = u, T = e || l && r.find.TAG("*", c),
                            k = C += null == w ? 1 : Math.random() || .1, E = T.length;
                        for (c && (u = t == p || t || c); y !== E && null != (d = T[y]); y++) {
                            if (l && d) {
                                for (h = 0, t || d.ownerDocument == p || (f(d), n = !m); g = i[h++];) if (g(d, t || p, n)) {
                                    a.push(d);
                                    break
                                }
                                c && (C = k)
                            }
                            s && ((d = !g && d) && v--, e && b.push(d))
                        }
                        if (v += y, s && y !== v) {
                            for (h = 0; g = o[h++];) g(b, x, t, n);
                            if (e) {
                                if (0 < v) for (; y--;) b[y] || x[y] || (x[y] = $.call(a));
                                x = Ce(x)
                            }
                            q.apply(a, x), c && !e && 0 < x.length && 1 < v + o.length && se.uniqueSort(a)
                        }
                        return c && (C = k, u = w), b
                    }, s ? ue(c) : c))).selector = e
                }
                return g
            }, l = se.select = function (e, t, n, i) {
                var o, l, u, c, d, f = "function" == typeof e && e, p = !i && a(e = f.selector || e);
                if (n = n || [], 1 === p.length) {
                    if (2 < (l = p[0] = p[0].slice(0)).length && "ID" === (u = l[0]).type && 9 === t.nodeType && m && r.relative[l[1].type]) {
                        if (!(t = (r.find.ID(u.matches[0].replace(te, ne), t) || [])[0])) return n;
                        f && (t = t.parentNode), e = e.slice(l.shift().value.length)
                    }
                    for (o = G.needsContext.test(e) ? 0 : l.length; o-- && (u = l[o], !r.relative[c = u.type]);) if ((d = r.find[c]) && (i = d(u.matches[0].replace(te, ne), ee.test(l[0].type) && ve(t.parentNode) || t))) {
                        if (l.splice(o, 1), !(e = i.length && be(l))) return q.apply(n, i), n;
                        break
                    }
                }
                return (f || s(e, p))(i, t, !m, n, !t || ee.test(e) && ve(t.parentNode) || t), n
            }, n.sortStable = x.split("").sort(N).join("") === x, n.detectDuplicates = !!d, f(), n.sortDetached = ce((function (e) {
                return 1 & e.compareDocumentPosition(p.createElement("fieldset"))
            })), ce((function (e) {
                return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
            })) || de("type|href|height|width", (function (e, t, n) {
                if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
            })), n.attributes && ce((function (e) {
                return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value")
            })) || de("value", (function (e, t, n) {
                if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue
            })), ce((function (e) {
                return null == e.getAttribute("disabled")
            })) || de(O, (function (e, t, n) {
                var r;
                if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
            })), se
        }(e);
        w.find = T, w.expr = T.selectors, w.expr[":"] = w.expr.pseudos, w.uniqueSort = w.unique = T.uniqueSort, w.text = T.getText, w.isXMLDoc = T.isXML, w.contains = T.contains, w.escapeSelector = T.escape;
        var k = function (e, t, n) {
            for (var r = [], i = void 0 !== n; (e = e[t]) && 9 !== e.nodeType;) if (1 === e.nodeType) {
                if (i && w(e).is(n)) break;
                r.push(e)
            }
            return r
        }, E = function (e, t) {
            for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
            return n
        }, A = w.expr.match.needsContext;

        function S(e, t) {
            return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
        }

        var N = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

        function D(e, t, n) {
            return h(t) ? w.grep(e, (function (e, r) {
                return !!t.call(e, r, e) !== n
            })) : t.nodeType ? w.grep(e, (function (e) {
                return e === t !== n
            })) : "string" != typeof t ? w.grep(e, (function (e) {
                return -1 < s.call(t, e) !== n
            })) : w.filter(t, e, n)
        }

        w.filter = function (e, t, n) {
            var r = t[0];
            return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? w.find.matchesSelector(r, e) ? [r] : [] : w.find.matches(e, w.grep(t, (function (e) {
                return 1 === e.nodeType
            })))
        }, w.fn.extend({
            find: function (e) {
                var t, n, r = this.length, i = this;
                if ("string" != typeof e) return this.pushStack(w(e).filter((function () {
                    for (t = 0; t < r; t++) if (w.contains(i[t], this)) return !0
                })));
                for (n = this.pushStack([]), t = 0; t < r; t++) w.find(e, i[t], n);
                return 1 < r ? w.uniqueSort(n) : n
            }, filter: function (e) {
                return this.pushStack(D(this, e || [], !1))
            }, not: function (e) {
                return this.pushStack(D(this, e || [], !0))
            }, is: function (e) {
                return !!D(this, "string" == typeof e && A.test(e) ? w(e) : e || [], !1).length
            }
        });
        var j, $ = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
        (w.fn.init = function (e, t, n) {
            var r, i;
            if (!e) return this;
            if (n = n || j, "string" == typeof e) {
                if (!(r = "<" === e[0] && ">" === e[e.length - 1] && 3 <= e.length ? [null, e, null] : $.exec(e)) || !r[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
                if (r[1]) {
                    if (t = t instanceof w ? t[0] : t, w.merge(this, w.parseHTML(r[1], t && t.nodeType ? t.ownerDocument || t : g, !0)), N.test(r[1]) && w.isPlainObject(t)) for (r in t) h(this[r]) ? this[r](t[r]) : this.attr(r, t[r]);
                    return this
                }
                return (i = g.getElementById(r[2])) && (this[0] = i, this.length = 1), this
            }
            return e.nodeType ? (this[0] = e, this.length = 1, this) : h(e) ? void 0 !== n.ready ? n.ready(e) : e(w) : w.makeArray(e, this)
        }).prototype = w.fn, j = w(g);
        var L = /^(?:parents|prev(?:Until|All))/, q = {children: !0, contents: !0, next: !0, prev: !0};

        function H(e, t) {
            for (; (e = e[t]) && 1 !== e.nodeType;) ;
            return e
        }

        w.fn.extend({
            has: function (e) {
                var t = w(e, this), n = t.length;
                return this.filter((function () {
                    for (var e = 0; e < n; e++) if (w.contains(this, t[e])) return !0
                }))
            }, closest: function (e, t) {
                var n, r = 0, i = this.length, o = [], a = "string" != typeof e && w(e);
                if (!A.test(e)) for (; r < i; r++) for (n = this[r]; n && n !== t; n = n.parentNode) if (n.nodeType < 11 && (a ? -1 < a.index(n) : 1 === n.nodeType && w.find.matchesSelector(n, e))) {
                    o.push(n);
                    break
                }
                return this.pushStack(1 < o.length ? w.uniqueSort(o) : o)
            }, index: function (e) {
                return e ? "string" == typeof e ? s.call(w(e), this[0]) : s.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
            }, add: function (e, t) {
                return this.pushStack(w.uniqueSort(w.merge(this.get(), w(e, t))))
            }, addBack: function (e) {
                return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
            }
        }), w.each({
            parent: function (e) {
                var t = e.parentNode;
                return t && 11 !== t.nodeType ? t : null
            }, parents: function (e) {
                return k(e, "parentNode")
            }, parentsUntil: function (e, t, n) {
                return k(e, "parentNode", n)
            }, next: function (e) {
                return H(e, "nextSibling")
            }, prev: function (e) {
                return H(e, "previousSibling")
            }, nextAll: function (e) {
                return k(e, "nextSibling")
            }, prevAll: function (e) {
                return k(e, "previousSibling")
            }, nextUntil: function (e, t, n) {
                return k(e, "nextSibling", n)
            }, prevUntil: function (e, t, n) {
                return k(e, "previousSibling", n)
            }, siblings: function (e) {
                return E((e.parentNode || {}).firstChild, e)
            }, children: function (e) {
                return E(e.firstChild)
            }, contents: function (e) {
                return null != e.contentDocument && r(e.contentDocument) ? e.contentDocument : (S(e, "template") && (e = e.content || e), w.merge([], e.childNodes))
            }
        }, (function (e, t) {
            w.fn[e] = function (n, r) {
                var i = w.map(this, t, n);
                return "Until" !== e.slice(-5) && (r = n), r && "string" == typeof r && (i = w.filter(r, i)), 1 < this.length && (q[e] || w.uniqueSort(i), L.test(e) && i.reverse()), this.pushStack(i)
            }
        }));
        var M = /[^\x20\t\r\n\f]+/g;

        function O(e) {
            return e
        }

        function P(e) {
            throw e
        }

        function R(e, t, n, r) {
            var i;
            try {
                e && h(i = e.promise) ? i.call(e).done(t).fail(n) : e && h(i = e.then) ? i.call(e, t, n) : t.apply(void 0, [e].slice(r))
            } catch (e) {
                n.apply(void 0, [e])
            }
        }

        w.Callbacks = function (e) {
            var t, n;
            e = "string" == typeof e ? (t = e, n = {}, w.each(t.match(M) || [], (function (e, t) {
                n[t] = !0
            })), n) : w.extend({}, e);
            var r, i, o, a, s = [], l = [], u = -1, c = function () {
                for (a = a || e.once, o = r = !0; l.length; u = -1) for (i = l.shift(); ++u < s.length;) !1 === s[u].apply(i[0], i[1]) && e.stopOnFalse && (u = s.length, i = !1);
                e.memory || (i = !1), r = !1, a && (s = i ? [] : "")
            }, d = {
                add: function () {
                    return s && (i && !r && (u = s.length - 1, l.push(i)), function t(n) {
                        w.each(n, (function (n, r) {
                            h(r) ? e.unique && d.has(r) || s.push(r) : r && r.length && "string" !== b(r) && t(r)
                        }))
                    }(arguments), i && !r && c()), this
                }, remove: function () {
                    return w.each(arguments, (function (e, t) {
                        for (var n; -1 < (n = w.inArray(t, s, n));) s.splice(n, 1), n <= u && u--
                    })), this
                }, has: function (e) {
                    return e ? -1 < w.inArray(e, s) : 0 < s.length
                }, empty: function () {
                    return s && (s = []), this
                }, disable: function () {
                    return a = l = [], s = i = "", this
                }, disabled: function () {
                    return !s
                }, lock: function () {
                    return a = l = [], i || r || (s = i = ""), this
                }, locked: function () {
                    return !!a
                }, fireWith: function (e, t) {
                    return a || (t = [e, (t = t || []).slice ? t.slice() : t], l.push(t), r || c()), this
                }, fire: function () {
                    return d.fireWith(this, arguments), this
                }, fired: function () {
                    return !!o
                }
            };
            return d
        }, w.extend({
            Deferred: function (t) {
                var n = [["notify", "progress", w.Callbacks("memory"), w.Callbacks("memory"), 2], ["resolve", "done", w.Callbacks("once memory"), w.Callbacks("once memory"), 0, "resolved"], ["reject", "fail", w.Callbacks("once memory"), w.Callbacks("once memory"), 1, "rejected"]],
                    r = "pending", i = {
                        state: function () {
                            return r
                        }, always: function () {
                            return o.done(arguments).fail(arguments), this
                        }, catch: function (e) {
                            return i.then(null, e)
                        }, pipe: function () {
                            var e = arguments;
                            return w.Deferred((function (t) {
                                w.each(n, (function (n, r) {
                                    var i = h(e[r[4]]) && e[r[4]];
                                    o[r[1]]((function () {
                                        var e = i && i.apply(this, arguments);
                                        e && h(e.promise) ? e.promise().progress(t.notify).done(t.resolve).fail(t.reject) : t[r[0] + "With"](this, i ? [e] : arguments)
                                    }))
                                })), e = null
                            })).promise()
                        }, then: function (t, r, i) {
                            var o = 0;

                            function a(t, n, r, i) {
                                return function () {
                                    var s = this, l = arguments, u = function () {
                                        var e, u;
                                        if (!(t < o)) {
                                            if ((e = r.apply(s, l)) === n.promise()) throw new TypeError("Thenable self-resolution");
                                            u = e && ("object" == typeof e || "function" == typeof e) && e.then, h(u) ? i ? u.call(e, a(o, n, O, i), a(o, n, P, i)) : (o++, u.call(e, a(o, n, O, i), a(o, n, P, i), a(o, n, O, n.notifyWith))) : (r !== O && (s = void 0, l = [e]), (i || n.resolveWith)(s, l))
                                        }
                                    }, c = i ? u : function () {
                                        try {
                                            u()
                                        } catch (e) {
                                            w.Deferred.exceptionHook && w.Deferred.exceptionHook(e, c.stackTrace), o <= t + 1 && (r !== P && (s = void 0, l = [e]), n.rejectWith(s, l))
                                        }
                                    };
                                    t ? c() : (w.Deferred.getStackHook && (c.stackTrace = w.Deferred.getStackHook()), e.setTimeout(c))
                                }
                            }

                            return w.Deferred((function (e) {
                                n[0][3].add(a(0, e, h(i) ? i : O, e.notifyWith)), n[1][3].add(a(0, e, h(t) ? t : O)), n[2][3].add(a(0, e, h(r) ? r : P))
                            })).promise()
                        }, promise: function (e) {
                            return null != e ? w.extend(e, i) : i
                        }
                    }, o = {};
                return w.each(n, (function (e, t) {
                    var a = t[2], s = t[5];
                    i[t[1]] = a.add, s && a.add((function () {
                        r = s
                    }), n[3 - e][2].disable, n[3 - e][3].disable, n[0][2].lock, n[0][3].lock), a.add(t[3].fire), o[t[0]] = function () {
                        return o[t[0] + "With"](this === o ? void 0 : this, arguments), this
                    }, o[t[0] + "With"] = a.fireWith
                })), i.promise(o), t && t.call(o, o), o
            }, when: function (e) {
                var t = arguments.length, n = t, r = Array(n), o = i.call(arguments), a = w.Deferred(),
                    s = function (e) {
                        return function (n) {
                            r[e] = this, o[e] = 1 < arguments.length ? i.call(arguments) : n, --t || a.resolveWith(r, o)
                        }
                    };
                if (t <= 1 && (R(e, a.done(s(n)).resolve, a.reject, !t), "pending" === a.state() || h(o[n] && o[n].then))) return a.then();
                for (; n--;) R(o[n], s(n), a.reject);
                return a.promise()
            }
        });
        var z = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
        w.Deferred.exceptionHook = function (t, n) {
            e.console && e.console.warn && t && z.test(t.name) && e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n)
        }, w.readyException = function (t) {
            e.setTimeout((function () {
                throw t
            }))
        };
        var I = w.Deferred();

        function W() {
            g.removeEventListener("DOMContentLoaded", W), e.removeEventListener("load", W), w.ready()
        }

        w.fn.ready = function (e) {
            return I.then(e).catch((function (e) {
                w.readyException(e)
            })), this
        }, w.extend({
            isReady: !1, readyWait: 1, ready: function (e) {
                (!0 === e ? --w.readyWait : w.isReady) || (w.isReady = !0) !== e && 0 < --w.readyWait || I.resolveWith(g, [w])
            }
        }), w.ready.then = I.then, "complete" === g.readyState || "loading" !== g.readyState && !g.documentElement.doScroll ? e.setTimeout(w.ready) : (g.addEventListener("DOMContentLoaded", W), e.addEventListener("load", W));
        var B = function (e, t, n, r, i, o, a) {
            var s = 0, l = e.length, u = null == n;
            if ("object" === b(n)) for (s in i = !0, n) B(e, t, s, n[s], !0, o, a); else if (void 0 !== r && (i = !0, h(r) || (a = !0), u && (a ? (t.call(e, r), t = null) : (u = t, t = function (e, t, n) {
                return u.call(w(e), n)
            })), t)) for (; s < l; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
            return i ? e : u ? t.call(e) : l ? t(e[0], n) : o
        }, F = /^-ms-/, _ = /-([a-z])/g;

        function U(e, t) {
            return t.toUpperCase()
        }

        function X(e) {
            return e.replace(F, "ms-").replace(_, U)
        }

        var V = function (e) {
            return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
        };

        function G() {
            this.expando = w.expando + G.uid++
        }

        G.uid = 1, G.prototype = {
            cache: function (e) {
                var t = e[this.expando];
                return t || (t = {}, V(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
                    value: t,
                    configurable: !0
                }))), t
            }, set: function (e, t, n) {
                var r, i = this.cache(e);
                if ("string" == typeof t) i[X(t)] = n; else for (r in t) i[X(r)] = t[r];
                return i
            }, get: function (e, t) {
                return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][X(t)]
            }, access: function (e, t, n) {
                return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t)
            }, remove: function (e, t) {
                var n, r = e[this.expando];
                if (void 0 !== r) {
                    if (void 0 !== t) {
                        n = (t = Array.isArray(t) ? t.map(X) : (t = X(t)) in r ? [t] : t.match(M) || []).length;
                        for (; n--;) delete r[t[n]]
                    }
                    (void 0 === t || w.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando])
                }
            }, hasData: function (e) {
                var t = e[this.expando];
                return void 0 !== t && !w.isEmptyObject(t)
            }
        };
        var Y = new G, Q = new G, J = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/, K = /[A-Z]/g;

        function Z(e, t, n) {
            var r, i;
            if (void 0 === n && 1 === e.nodeType) if (r = "data-" + t.replace(K, "-$&").toLowerCase(), "string" == typeof (n = e.getAttribute(r))) {
                try {
                    n = "true" === (i = n) || "false" !== i && ("null" === i ? null : i === +i + "" ? +i : J.test(i) ? JSON.parse(i) : i)
                } catch (e) {
                }
                Q.set(e, t, n)
            } else n = void 0;
            return n
        }

        w.extend({
            hasData: function (e) {
                return Q.hasData(e) || Y.hasData(e)
            }, data: function (e, t, n) {
                return Q.access(e, t, n)
            }, removeData: function (e, t) {
                Q.remove(e, t)
            }, _data: function (e, t, n) {
                return Y.access(e, t, n)
            }, _removeData: function (e, t) {
                Y.remove(e, t)
            }
        }), w.fn.extend({
            data: function (e, t) {
                var n, r, i, o = this[0], a = o && o.attributes;
                if (void 0 === e) {
                    if (this.length && (i = Q.get(o), 1 === o.nodeType && !Y.get(o, "hasDataAttrs"))) {
                        for (n = a.length; n--;) a[n] && 0 === (r = a[n].name).indexOf("data-") && (r = X(r.slice(5)), Z(o, r, i[r]));
                        Y.set(o, "hasDataAttrs", !0)
                    }
                    return i
                }
                return "object" == typeof e ? this.each((function () {
                    Q.set(this, e)
                })) : B(this, (function (t) {
                    var n;
                    if (o && void 0 === t) return void 0 !== (n = Q.get(o, e)) || void 0 !== (n = Z(o, e)) ? n : void 0;
                    this.each((function () {
                        Q.set(this, e, t)
                    }))
                }), null, t, 1 < arguments.length, null, !0)
            }, removeData: function (e) {
                return this.each((function () {
                    Q.remove(this, e)
                }))
            }
        }), w.extend({
            queue: function (e, t, n) {
                var r;
                if (e) return t = (t || "fx") + "queue", r = Y.get(e, t), n && (!r || Array.isArray(n) ? r = Y.access(e, t, w.makeArray(n)) : r.push(n)), r || []
            }, dequeue: function (e, t) {
                t = t || "fx";
                var n = w.queue(e, t), r = n.length, i = n.shift(), o = w._queueHooks(e, t);
                "inprogress" === i && (i = n.shift(), r--), i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, (function () {
                    w.dequeue(e, t)
                }), o)), !r && o && o.empty.fire()
            }, _queueHooks: function (e, t) {
                var n = t + "queueHooks";
                return Y.get(e, n) || Y.access(e, n, {
                    empty: w.Callbacks("once memory").add((function () {
                        Y.remove(e, [t + "queue", n])
                    }))
                })
            }
        }), w.fn.extend({
            queue: function (e, t) {
                var n = 2;
                return "string" != typeof e && (t = e, e = "fx", n--), arguments.length < n ? w.queue(this[0], e) : void 0 === t ? this : this.each((function () {
                    var n = w.queue(this, e, t);
                    w._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && w.dequeue(this, e)
                }))
            }, dequeue: function (e) {
                return this.each((function () {
                    w.dequeue(this, e)
                }))
            }, clearQueue: function (e) {
                return this.queue(e || "fx", [])
            }, promise: function (e, t) {
                var n, r = 1, i = w.Deferred(), o = this, a = this.length, s = function () {
                    --r || i.resolveWith(o, [o])
                };
                for ("string" != typeof e && (t = e, e = void 0), e = e || "fx"; a--;) (n = Y.get(o[a], e + "queueHooks")) && n.empty && (r++, n.empty.add(s));
                return s(), i.promise(t)
            }
        });
        var ee = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
            te = new RegExp("^(?:([+-])=|)(" + ee + ")([a-z%]*)$", "i"), ne = ["Top", "Right", "Bottom", "Left"],
            re = g.documentElement, ie = function (e) {
                return w.contains(e.ownerDocument, e)
            }, oe = {composed: !0};
        re.getRootNode && (ie = function (e) {
            return w.contains(e.ownerDocument, e) || e.getRootNode(oe) === e.ownerDocument
        });
        var ae = function (e, t) {
            return "none" === (e = t || e).style.display || "" === e.style.display && ie(e) && "none" === w.css(e, "display")
        };

        function se(e, t, n, r) {
            var i, o, a = 20, s = r ? function () {
                    return r.cur()
                } : function () {
                    return w.css(e, t, "")
                }, l = s(), u = n && n[3] || (w.cssNumber[t] ? "" : "px"),
                c = e.nodeType && (w.cssNumber[t] || "px" !== u && +l) && te.exec(w.css(e, t));
            if (c && c[3] !== u) {
                for (l /= 2, u = u || c[3], c = +l || 1; a--;) w.style(e, t, c + u), (1 - o) * (1 - (o = s() / l || .5)) <= 0 && (a = 0), c /= o;
                c *= 2, w.style(e, t, c + u), n = n || []
            }
            return n && (c = +c || +l || 0, i = n[1] ? c + (n[1] + 1) * n[2] : +n[2], r && (r.unit = u, r.start = c, r.end = i)), i
        }

        var le = {};

        function ue(e, t) {
            for (var n, r, i, o, a, s, l, u = [], c = 0, d = e.length; c < d; c++) (r = e[c]).style && (n = r.style.display, t ? ("none" === n && (u[c] = Y.get(r, "display") || null, u[c] || (r.style.display = "")), "" === r.style.display && ae(r) && (u[c] = (l = a = o = void 0, a = (i = r).ownerDocument, s = i.nodeName, (l = le[s]) || (o = a.body.appendChild(a.createElement(s)), l = w.css(o, "display"), o.parentNode.removeChild(o), "none" === l && (l = "block"), le[s] = l)))) : "none" !== n && (u[c] = "none", Y.set(r, "display", n)));
            for (c = 0; c < d; c++) null != u[c] && (e[c].style.display = u[c]);
            return e
        }

        w.fn.extend({
            show: function () {
                return ue(this, !0)
            }, hide: function () {
                return ue(this)
            }, toggle: function (e) {
                return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each((function () {
                    ae(this) ? w(this).show() : w(this).hide()
                }))
            }
        });
        var ce, de, fe = /^(?:checkbox|radio)$/i, pe = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i,
            he = /^$|^module$|\/(?:java|ecma)script/i;
        ce = g.createDocumentFragment().appendChild(g.createElement("div")), (de = g.createElement("input")).setAttribute("type", "radio"), de.setAttribute("checked", "checked"), de.setAttribute("name", "t"), ce.appendChild(de), p.checkClone = ce.cloneNode(!0).cloneNode(!0).lastChild.checked, ce.innerHTML = "<textarea>x</textarea>", p.noCloneChecked = !!ce.cloneNode(!0).lastChild.defaultValue, ce.innerHTML = "<option></option>", p.option = !!ce.lastChild;
        var me = {
            thead: [1, "<table>", "</table>"],
            col: [2, "<table><colgroup>", "</colgroup></table>"],
            tr: [2, "<table><tbody>", "</tbody></table>"],
            td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
            _default: [0, "", ""]
        };

        function ge(e, t) {
            var n;
            return n = void 0 !== e.getElementsByTagName ? e.getElementsByTagName(t || "*") : void 0 !== e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && S(e, t) ? w.merge([e], n) : n
        }

        function ve(e, t) {
            for (var n = 0, r = e.length; n < r; n++) Y.set(e[n], "globalEval", !t || Y.get(t[n], "globalEval"))
        }

        me.tbody = me.tfoot = me.colgroup = me.caption = me.thead, me.th = me.td, p.option || (me.optgroup = me.option = [1, "<select multiple='multiple'>", "</select>"]);
        var ye = /<|&#?\w+;/;

        function be(e, t, n, r, i) {
            for (var o, a, s, l, u, c, d = t.createDocumentFragment(), f = [], p = 0, h = e.length; p < h; p++) if ((o = e[p]) || 0 === o) if ("object" === b(o)) w.merge(f, o.nodeType ? [o] : o); else if (ye.test(o)) {
                for (a = a || d.appendChild(t.createElement("div")), s = (pe.exec(o) || ["", ""])[1].toLowerCase(), l = me[s] || me._default, a.innerHTML = l[1] + w.htmlPrefilter(o) + l[2], c = l[0]; c--;) a = a.lastChild;
                w.merge(f, a.childNodes), (a = d.firstChild).textContent = ""
            } else f.push(t.createTextNode(o));
            for (d.textContent = "", p = 0; o = f[p++];) if (r && -1 < w.inArray(o, r)) i && i.push(o); else if (u = ie(o), a = ge(d.appendChild(o), "script"), u && ve(a), n) for (c = 0; o = a[c++];) he.test(o.type || "") && n.push(o);
            return d
        }

        var xe = /^key/, we = /^(?:mouse|pointer|contextmenu|drag|drop)|click/, Ce = /^([^.]*)(?:\.(.+)|)/;

        function Te() {
            return !0
        }

        function ke() {
            return !1
        }

        function Ee(e, t) {
            return e === function () {
                try {
                    return g.activeElement
                } catch (e) {
                }
            }() == ("focus" === t)
        }

        function Ae(e, t, n, r, i, o) {
            var a, s;
            if ("object" == typeof t) {
                for (s in "string" != typeof n && (r = r || n, n = void 0), t) Ae(e, s, n, r, t[s], o);
                return e
            }
            if (null == r && null == i ? (i = n, r = n = void 0) : null == i && ("string" == typeof n ? (i = r, r = void 0) : (i = r, r = n, n = void 0)), !1 === i) i = ke; else if (!i) return e;
            return 1 === o && (a = i, (i = function (e) {
                return w().off(e), a.apply(this, arguments)
            }).guid = a.guid || (a.guid = w.guid++)), e.each((function () {
                w.event.add(this, t, i, r, n)
            }))
        }

        function Se(e, t, n) {
            n ? (Y.set(e, t, !1), w.event.add(e, t, {
                namespace: !1, handler: function (e) {
                    var r, o, a = Y.get(this, t);
                    if (1 & e.isTrigger && this[t]) {
                        if (a.length) (w.event.special[t] || {}).delegateType && e.stopPropagation(); else if (a = i.call(arguments), Y.set(this, t, a), r = n(this, t), this[t](), a !== (o = Y.get(this, t)) || r ? Y.set(this, t, !1) : o = {}, a !== o) return e.stopImmediatePropagation(), e.preventDefault(), o.value
                    } else a.length && (Y.set(this, t, {value: w.event.trigger(w.extend(a[0], w.Event.prototype), a.slice(1), this)}), e.stopImmediatePropagation())
                }
            })) : void 0 === Y.get(e, t) && w.event.add(e, t, Te)
        }

        w.event = {
            global: {}, add: function (e, t, n, r, i) {
                var o, a, s, l, u, c, d, f, p, h, m, g = Y.get(e);
                if (V(e)) for (n.handler && (n = (o = n).handler, i = o.selector), i && w.find.matchesSelector(re, i), n.guid || (n.guid = w.guid++), (l = g.events) || (l = g.events = Object.create(null)), (a = g.handle) || (a = g.handle = function (t) {
                    return void 0 !== w && w.event.triggered !== t.type ? w.event.dispatch.apply(e, arguments) : void 0
                }), u = (t = (t || "").match(M) || [""]).length; u--;) p = m = (s = Ce.exec(t[u]) || [])[1], h = (s[2] || "").split(".").sort(), p && (d = w.event.special[p] || {}, p = (i ? d.delegateType : d.bindType) || p, d = w.event.special[p] || {}, c = w.extend({
                    type: p,
                    origType: m,
                    data: r,
                    handler: n,
                    guid: n.guid,
                    selector: i,
                    needsContext: i && w.expr.match.needsContext.test(i),
                    namespace: h.join(".")
                }, o), (f = l[p]) || ((f = l[p] = []).delegateCount = 0, d.setup && !1 !== d.setup.call(e, r, h, a) || e.addEventListener && e.addEventListener(p, a)), d.add && (d.add.call(e, c), c.handler.guid || (c.handler.guid = n.guid)), i ? f.splice(f.delegateCount++, 0, c) : f.push(c), w.event.global[p] = !0)
            }, remove: function (e, t, n, r, i) {
                var o, a, s, l, u, c, d, f, p, h, m, g = Y.hasData(e) && Y.get(e);
                if (g && (l = g.events)) {
                    for (u = (t = (t || "").match(M) || [""]).length; u--;) if (p = m = (s = Ce.exec(t[u]) || [])[1], h = (s[2] || "").split(".").sort(), p) {
                        for (d = w.event.special[p] || {}, f = l[p = (r ? d.delegateType : d.bindType) || p] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = o = f.length; o--;) c = f[o], !i && m !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || r && r !== c.selector && ("**" !== r || !c.selector) || (f.splice(o, 1), c.selector && f.delegateCount--, d.remove && d.remove.call(e, c));
                        a && !f.length && (d.teardown && !1 !== d.teardown.call(e, h, g.handle) || w.removeEvent(e, p, g.handle), delete l[p])
                    } else for (p in l) w.event.remove(e, p + t[u], n, r, !0);
                    w.isEmptyObject(l) && Y.remove(e, "handle events")
                }
            }, dispatch: function (e) {
                var t, n, r, i, o, a, s = new Array(arguments.length), l = w.event.fix(e),
                    u = (Y.get(this, "events") || Object.create(null))[l.type] || [], c = w.event.special[l.type] || {};
                for (s[0] = l, t = 1; t < arguments.length; t++) s[t] = arguments[t];
                if (l.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, l)) {
                    for (a = w.event.handlers.call(this, l, u), t = 0; (i = a[t++]) && !l.isPropagationStopped();) for (l.currentTarget = i.elem, n = 0; (o = i.handlers[n++]) && !l.isImmediatePropagationStopped();) l.rnamespace && !1 !== o.namespace && !l.rnamespace.test(o.namespace) || (l.handleObj = o, l.data = o.data, void 0 !== (r = ((w.event.special[o.origType] || {}).handle || o.handler).apply(i.elem, s)) && !1 === (l.result = r) && (l.preventDefault(), l.stopPropagation()));
                    return c.postDispatch && c.postDispatch.call(this, l), l.result
                }
            }, handlers: function (e, t) {
                var n, r, i, o, a, s = [], l = t.delegateCount, u = e.target;
                if (l && u.nodeType && !("click" === e.type && 1 <= e.button)) for (; u !== this; u = u.parentNode || this) if (1 === u.nodeType && ("click" !== e.type || !0 !== u.disabled)) {
                    for (o = [], a = {}, n = 0; n < l; n++) void 0 === a[i = (r = t[n]).selector + " "] && (a[i] = r.needsContext ? -1 < w(i, this).index(u) : w.find(i, this, null, [u]).length), a[i] && o.push(r);
                    o.length && s.push({elem: u, handlers: o})
                }
                return u = this, l < t.length && s.push({elem: u, handlers: t.slice(l)}), s
            }, addProp: function (e, t) {
                Object.defineProperty(w.Event.prototype, e, {
                    enumerable: !0, configurable: !0, get: h(t) ? function () {
                        if (this.originalEvent) return t(this.originalEvent)
                    } : function () {
                        if (this.originalEvent) return this.originalEvent[e]
                    }, set: function (t) {
                        Object.defineProperty(this, e, {enumerable: !0, configurable: !0, writable: !0, value: t})
                    }
                })
            }, fix: function (e) {
                return e[w.expando] ? e : new w.Event(e)
            }, special: {
                load: {noBubble: !0}, click: {
                    setup: function (e) {
                        var t = this || e;
                        return fe.test(t.type) && t.click && S(t, "input") && Se(t, "click", Te), !1
                    }, trigger: function (e) {
                        var t = this || e;
                        return fe.test(t.type) && t.click && S(t, "input") && Se(t, "click"), !0
                    }, _default: function (e) {
                        var t = e.target;
                        return fe.test(t.type) && t.click && S(t, "input") && Y.get(t, "click") || S(t, "a")
                    }
                }, beforeunload: {
                    postDispatch: function (e) {
                        void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                    }
                }
            }
        }, w.removeEvent = function (e, t, n) {
            e.removeEventListener && e.removeEventListener(t, n)
        }, w.Event = function (e, t) {
            if (!(this instanceof w.Event)) return new w.Event(e, t);
            e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? Te : ke, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && w.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[w.expando] = !0
        }, w.Event.prototype = {
            constructor: w.Event,
            isDefaultPrevented: ke,
            isPropagationStopped: ke,
            isImmediatePropagationStopped: ke,
            isSimulated: !1,
            preventDefault: function () {
                var e = this.originalEvent;
                this.isDefaultPrevented = Te, e && !this.isSimulated && e.preventDefault()
            },
            stopPropagation: function () {
                var e = this.originalEvent;
                this.isPropagationStopped = Te, e && !this.isSimulated && e.stopPropagation()
            },
            stopImmediatePropagation: function () {
                var e = this.originalEvent;
                this.isImmediatePropagationStopped = Te, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation()
            }
        }, w.each({
            altKey: !0,
            bubbles: !0,
            cancelable: !0,
            changedTouches: !0,
            ctrlKey: !0,
            detail: !0,
            eventPhase: !0,
            metaKey: !0,
            pageX: !0,
            pageY: !0,
            shiftKey: !0,
            view: !0,
            char: !0,
            code: !0,
            charCode: !0,
            key: !0,
            keyCode: !0,
            button: !0,
            buttons: !0,
            clientX: !0,
            clientY: !0,
            offsetX: !0,
            offsetY: !0,
            pointerId: !0,
            pointerType: !0,
            screenX: !0,
            screenY: !0,
            targetTouches: !0,
            toElement: !0,
            touches: !0,
            which: function (e) {
                var t = e.button;
                return null == e.which && xe.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && we.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which
            }
        }, w.event.addProp), w.each({focus: "focusin", blur: "focusout"}, (function (e, t) {
            w.event.special[e] = {
                setup: function () {
                    return Se(this, e, Ee), !1
                }, trigger: function () {
                    return Se(this, e), !0
                }, delegateType: t
            }
        })), w.each({
            mouseenter: "mouseover",
            mouseleave: "mouseout",
            pointerenter: "pointerover",
            pointerleave: "pointerout"
        }, (function (e, t) {
            w.event.special[e] = {
                delegateType: t, bindType: t, handle: function (e) {
                    var n, r = e.relatedTarget, i = e.handleObj;
                    return r && (r === this || w.contains(this, r)) || (e.type = i.origType, n = i.handler.apply(this, arguments), e.type = t), n
                }
            }
        })), w.fn.extend({
            on: function (e, t, n, r) {
                return Ae(this, e, t, n, r)
            }, one: function (e, t, n, r) {
                return Ae(this, e, t, n, r, 1)
            }, off: function (e, t, n) {
                var r, i;
                if (e && e.preventDefault && e.handleObj) return r = e.handleObj, w(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this;
                if ("object" == typeof e) {
                    for (i in e) this.off(i, t, e[i]);
                    return this
                }
                return !1 !== t && "function" != typeof t || (n = t, t = void 0), !1 === n && (n = ke), this.each((function () {
                    w.event.remove(this, e, n, t)
                }))
            }
        });
        var Ne = /<script|<style|<link/i, De = /checked\s*(?:[^=]|=\s*.checked.)/i,
            je = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

        function $e(e, t) {
            return S(e, "table") && S(11 !== t.nodeType ? t : t.firstChild, "tr") && w(e).children("tbody")[0] || e
        }

        function Le(e) {
            return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
        }

        function qe(e) {
            return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e
        }

        function He(e, t) {
            var n, r, i, o, a, s;
            if (1 === t.nodeType) {
                if (Y.hasData(e) && (s = Y.get(e).events)) for (i in Y.remove(t, "handle events"), s) for (n = 0, r = s[i].length; n < r; n++) w.event.add(t, i, s[i][n]);
                Q.hasData(e) && (o = Q.access(e), a = w.extend({}, o), Q.set(t, a))
            }
        }

        function Me(e, t, n, r) {
            t = o(t);
            var i, a, s, l, u, c, d = 0, f = e.length, m = f - 1, g = t[0], v = h(g);
            if (v || 1 < f && "string" == typeof g && !p.checkClone && De.test(g)) return e.each((function (i) {
                var o = e.eq(i);
                v && (t[0] = g.call(this, i, o.html())), Me(o, t, n, r)
            }));
            if (f && (a = (i = be(t, e[0].ownerDocument, !1, e, r)).firstChild, 1 === i.childNodes.length && (i = a), a || r)) {
                for (l = (s = w.map(ge(i, "script"), Le)).length; d < f; d++) u = i, d !== m && (u = w.clone(u, !0, !0), l && w.merge(s, ge(u, "script"))), n.call(e[d], u, d);
                if (l) for (c = s[s.length - 1].ownerDocument, w.map(s, qe), d = 0; d < l; d++) u = s[d], he.test(u.type || "") && !Y.access(u, "globalEval") && w.contains(c, u) && (u.src && "module" !== (u.type || "").toLowerCase() ? w._evalUrl && !u.noModule && w._evalUrl(u.src, {nonce: u.nonce || u.getAttribute("nonce")}, c) : y(u.textContent.replace(je, ""), u, c))
            }
            return e
        }

        function Oe(e, t, n) {
            for (var r, i = t ? w.filter(t, e) : e, o = 0; null != (r = i[o]); o++) n || 1 !== r.nodeType || w.cleanData(ge(r)), r.parentNode && (n && ie(r) && ve(ge(r, "script")), r.parentNode.removeChild(r));
            return e
        }

        w.extend({
            htmlPrefilter: function (e) {
                return e
            }, clone: function (e, t, n) {
                var r, i, o, a, s, l, u, c = e.cloneNode(!0), d = ie(e);
                if (!(p.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || w.isXMLDoc(e))) for (a = ge(c), r = 0, i = (o = ge(e)).length; r < i; r++) s = o[r], "input" === (u = (l = a[r]).nodeName.toLowerCase()) && fe.test(s.type) ? l.checked = s.checked : "input" !== u && "textarea" !== u || (l.defaultValue = s.defaultValue);
                if (t) if (n) for (o = o || ge(e), a = a || ge(c), r = 0, i = o.length; r < i; r++) He(o[r], a[r]); else He(e, c);
                return 0 < (a = ge(c, "script")).length && ve(a, !d && ge(e, "script")), c
            }, cleanData: function (e) {
                for (var t, n, r, i = w.event.special, o = 0; void 0 !== (n = e[o]); o++) if (V(n)) {
                    if (t = n[Y.expando]) {
                        if (t.events) for (r in t.events) i[r] ? w.event.remove(n, r) : w.removeEvent(n, r, t.handle);
                        n[Y.expando] = void 0
                    }
                    n[Q.expando] && (n[Q.expando] = void 0)
                }
            }
        }), w.fn.extend({
            detach: function (e) {
                return Oe(this, e, !0)
            }, remove: function (e) {
                return Oe(this, e)
            }, text: function (e) {
                return B(this, (function (e) {
                    return void 0 === e ? w.text(this) : this.empty().each((function () {
                        1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e)
                    }))
                }), null, e, arguments.length)
            }, append: function () {
                return Me(this, arguments, (function (e) {
                    1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || $e(this, e).appendChild(e)
                }))
            }, prepend: function () {
                return Me(this, arguments, (function (e) {
                    if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                        var t = $e(this, e);
                        t.insertBefore(e, t.firstChild)
                    }
                }))
            }, before: function () {
                return Me(this, arguments, (function (e) {
                    this.parentNode && this.parentNode.insertBefore(e, this)
                }))
            }, after: function () {
                return Me(this, arguments, (function (e) {
                    this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
                }))
            }, empty: function () {
                for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (w.cleanData(ge(e, !1)), e.textContent = "");
                return this
            }, clone: function (e, t) {
                return e = null != e && e, t = null == t ? e : t, this.map((function () {
                    return w.clone(this, e, t)
                }))
            }, html: function (e) {
                return B(this, (function (e) {
                    var t = this[0] || {}, n = 0, r = this.length;
                    if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
                    if ("string" == typeof e && !Ne.test(e) && !me[(pe.exec(e) || ["", ""])[1].toLowerCase()]) {
                        e = w.htmlPrefilter(e);
                        try {
                            for (; n < r; n++) 1 === (t = this[n] || {}).nodeType && (w.cleanData(ge(t, !1)), t.innerHTML = e);
                            t = 0
                        } catch (e) {
                        }
                    }
                    t && this.empty().append(e)
                }), null, e, arguments.length)
            }, replaceWith: function () {
                var e = [];
                return Me(this, arguments, (function (t) {
                    var n = this.parentNode;
                    w.inArray(this, e) < 0 && (w.cleanData(ge(this)), n && n.replaceChild(t, this))
                }), e)
            }
        }), w.each({
            appendTo: "append",
            prependTo: "prepend",
            insertBefore: "before",
            insertAfter: "after",
            replaceAll: "replaceWith"
        }, (function (e, t) {
            w.fn[e] = function (e) {
                for (var n, r = [], i = w(e), o = i.length - 1, s = 0; s <= o; s++) n = s === o ? this : this.clone(!0), w(i[s])[t](n), a.apply(r, n.get());
                return this.pushStack(r)
            }
        }));
        var Pe = new RegExp("^(" + ee + ")(?!px)[a-z%]+$", "i"), Re = function (t) {
            var n = t.ownerDocument.defaultView;
            return n && n.opener || (n = e), n.getComputedStyle(t)
        }, ze = function (e, t, n) {
            var r, i, o = {};
            for (i in t) o[i] = e.style[i], e.style[i] = t[i];
            for (i in r = n.call(e), t) e.style[i] = o[i];
            return r
        }, Ie = new RegExp(ne.join("|"), "i");

        function We(e, t, n) {
            var r, i, o, a, s = e.style;
            return (n = n || Re(e)) && ("" !== (a = n.getPropertyValue(t) || n[t]) || ie(e) || (a = w.style(e, t)), !p.pixelBoxStyles() && Pe.test(a) && Ie.test(t) && (r = s.width, i = s.minWidth, o = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = i, s.maxWidth = o)), void 0 !== a ? a + "" : a
        }

        function Be(e, t) {
            return {
                get: function () {
                    if (!e()) return (this.get = t).apply(this, arguments);
                    delete this.get
                }
            }
        }

        !function () {
            function t() {
                if (c) {
                    u.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", c.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", re.appendChild(u).appendChild(c);
                    var t = e.getComputedStyle(c);
                    r = "1%" !== t.top, l = 12 === n(t.marginLeft), c.style.right = "60%", a = 36 === n(t.right), i = 36 === n(t.width), c.style.position = "absolute", o = 12 === n(c.offsetWidth / 3), re.removeChild(u), c = null
                }
            }

            function n(e) {
                return Math.round(parseFloat(e))
            }

            var r, i, o, a, s, l, u = g.createElement("div"), c = g.createElement("div");
            c.style && (c.style.backgroundClip = "content-box", c.cloneNode(!0).style.backgroundClip = "", p.clearCloneStyle = "content-box" === c.style.backgroundClip, w.extend(p, {
                boxSizingReliable: function () {
                    return t(), i
                }, pixelBoxStyles: function () {
                    return t(), a
                }, pixelPosition: function () {
                    return t(), r
                }, reliableMarginLeft: function () {
                    return t(), l
                }, scrollboxSize: function () {
                    return t(), o
                }, reliableTrDimensions: function () {
                    var t, n, r, i;
                    return null == s && (t = g.createElement("table"), n = g.createElement("tr"), r = g.createElement("div"), t.style.cssText = "position:absolute;left:-11111px", n.style.height = "1px", r.style.height = "9px", re.appendChild(t).appendChild(n).appendChild(r), i = e.getComputedStyle(n), s = 3 < parseInt(i.height), re.removeChild(t)), s
                }
            }))
        }();
        var Fe = ["Webkit", "Moz", "ms"], _e = g.createElement("div").style, Ue = {};

        function Xe(e) {
            return w.cssProps[e] || Ue[e] || (e in _e ? e : Ue[e] = function (e) {
                for (var t = e[0].toUpperCase() + e.slice(1), n = Fe.length; n--;) if ((e = Fe[n] + t) in _e) return e
            }(e) || e)
        }

        var Ve = /^(none|table(?!-c[ea]).+)/, Ge = /^--/,
            Ye = {position: "absolute", visibility: "hidden", display: "block"},
            Qe = {letterSpacing: "0", fontWeight: "400"};

        function Je(e, t, n) {
            var r = te.exec(t);
            return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t
        }

        function Ke(e, t, n, r, i, o) {
            var a = "width" === t ? 1 : 0, s = 0, l = 0;
            if (n === (r ? "border" : "content")) return 0;
            for (; a < 4; a += 2) "margin" === n && (l += w.css(e, n + ne[a], !0, i)), r ? ("content" === n && (l -= w.css(e, "padding" + ne[a], !0, i)), "margin" !== n && (l -= w.css(e, "border" + ne[a] + "Width", !0, i))) : (l += w.css(e, "padding" + ne[a], !0, i), "padding" !== n ? l += w.css(e, "border" + ne[a] + "Width", !0, i) : s += w.css(e, "border" + ne[a] + "Width", !0, i));
            return !r && 0 <= o && (l += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - o - l - s - .5)) || 0), l
        }

        function Ze(e, t, n) {
            var r = Re(e), i = (!p.boxSizingReliable() || n) && "border-box" === w.css(e, "boxSizing", !1, r), o = i,
                a = We(e, t, r), s = "offset" + t[0].toUpperCase() + t.slice(1);
            if (Pe.test(a)) {
                if (!n) return a;
                a = "auto"
            }
            return (!p.boxSizingReliable() && i || !p.reliableTrDimensions() && S(e, "tr") || "auto" === a || !parseFloat(a) && "inline" === w.css(e, "display", !1, r)) && e.getClientRects().length && (i = "border-box" === w.css(e, "boxSizing", !1, r), (o = s in e) && (a = e[s])), (a = parseFloat(a) || 0) + Ke(e, t, n || (i ? "border" : "content"), o, r, a) + "px"
        }

        function et(e, t, n, r, i) {
            return new et.prototype.init(e, t, n, r, i)
        }

        w.extend({
            cssHooks: {
                opacity: {
                    get: function (e, t) {
                        if (t) {
                            var n = We(e, "opacity");
                            return "" === n ? "1" : n
                        }
                    }
                }
            },
            cssNumber: {
                animationIterationCount: !0,
                columnCount: !0,
                fillOpacity: !0,
                flexGrow: !0,
                flexShrink: !0,
                fontWeight: !0,
                gridArea: !0,
                gridColumn: !0,
                gridColumnEnd: !0,
                gridColumnStart: !0,
                gridRow: !0,
                gridRowEnd: !0,
                gridRowStart: !0,
                lineHeight: !0,
                opacity: !0,
                order: !0,
                orphans: !0,
                widows: !0,
                zIndex: !0,
                zoom: !0
            },
            cssProps: {},
            style: function (e, t, n, r) {
                if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                    var i, o, a, s = X(t), l = Ge.test(t), u = e.style;
                    if (l || (t = Xe(s)), a = w.cssHooks[t] || w.cssHooks[s], void 0 === n) return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : u[t];
                    "string" == (o = typeof n) && (i = te.exec(n)) && i[1] && (n = se(e, t, i), o = "number"), null != n && n == n && ("number" !== o || l || (n += i && i[3] || (w.cssNumber[s] ? "" : "px")), p.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (u[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, r)) || (l ? u.setProperty(t, n) : u[t] = n))
                }
            },
            css: function (e, t, n, r) {
                var i, o, a, s = X(t);
                return Ge.test(t) || (t = Xe(s)), (a = w.cssHooks[t] || w.cssHooks[s]) && "get" in a && (i = a.get(e, !0, n)), void 0 === i && (i = We(e, t, r)), "normal" === i && t in Qe && (i = Qe[t]), "" === n || n ? (o = parseFloat(i), !0 === n || isFinite(o) ? o || 0 : i) : i
            }
        }), w.each(["height", "width"], (function (e, t) {
            w.cssHooks[t] = {
                get: function (e, n, r) {
                    if (n) return !Ve.test(w.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? Ze(e, t, r) : ze(e, Ye, (function () {
                        return Ze(e, t, r)
                    }))
                }, set: function (e, n, r) {
                    var i, o = Re(e), a = !p.scrollboxSize() && "absolute" === o.position,
                        s = (a || r) && "border-box" === w.css(e, "boxSizing", !1, o), l = r ? Ke(e, t, r, s, o) : 0;
                    return s && a && (l -= Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(o[t]) - Ke(e, t, "border", !1, o) - .5)), l && (i = te.exec(n)) && "px" !== (i[3] || "px") && (e.style[t] = n, n = w.css(e, t)), Je(0, n, l)
                }
            }
        })), w.cssHooks.marginLeft = Be(p.reliableMarginLeft, (function (e, t) {
            if (t) return (parseFloat(We(e, "marginLeft")) || e.getBoundingClientRect().left - ze(e, {marginLeft: 0}, (function () {
                return e.getBoundingClientRect().left
            }))) + "px"
        })), w.each({margin: "", padding: "", border: "Width"}, (function (e, t) {
            w.cssHooks[e + t] = {
                expand: function (n) {
                    for (var r = 0, i = {}, o = "string" == typeof n ? n.split(" ") : [n]; r < 4; r++) i[e + ne[r] + t] = o[r] || o[r - 2] || o[0];
                    return i
                }
            }, "margin" !== e && (w.cssHooks[e + t].set = Je)
        })), w.fn.extend({
            css: function (e, t) {
                return B(this, (function (e, t, n) {
                    var r, i, o = {}, a = 0;
                    if (Array.isArray(t)) {
                        for (r = Re(e), i = t.length; a < i; a++) o[t[a]] = w.css(e, t[a], !1, r);
                        return o
                    }
                    return void 0 !== n ? w.style(e, t, n) : w.css(e, t)
                }), e, t, 1 < arguments.length)
            }
        }), ((w.Tween = et).prototype = {
            constructor: et, init: function (e, t, n, r, i, o) {
                this.elem = e, this.prop = n, this.easing = i || w.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = o || (w.cssNumber[n] ? "" : "px")
            }, cur: function () {
                var e = et.propHooks[this.prop];
                return e && e.get ? e.get(this) : et.propHooks._default.get(this)
            }, run: function (e) {
                var t, n = et.propHooks[this.prop];
                return this.options.duration ? this.pos = t = w.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : et.propHooks._default.set(this), this
            }
        }).init.prototype = et.prototype, (et.propHooks = {
            _default: {
                get: function (e) {
                    var t;
                    return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = w.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0
                }, set: function (e) {
                    w.fx.step[e.prop] ? w.fx.step[e.prop](e) : 1 !== e.elem.nodeType || !w.cssHooks[e.prop] && null == e.elem.style[Xe(e.prop)] ? e.elem[e.prop] = e.now : w.style(e.elem, e.prop, e.now + e.unit)
                }
            }
        }).scrollTop = et.propHooks.scrollLeft = {
            set: function (e) {
                e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
            }
        }, w.easing = {
            linear: function (e) {
                return e
            }, swing: function (e) {
                return .5 - Math.cos(e * Math.PI) / 2
            }, _default: "swing"
        }, w.fx = et.prototype.init, w.fx.step = {};
        var tt, nt, rt, it, ot = /^(?:toggle|show|hide)$/, at = /queueHooks$/;

        function st() {
            nt && (!1 === g.hidden && e.requestAnimationFrame ? e.requestAnimationFrame(st) : e.setTimeout(st, w.fx.interval), w.fx.tick())
        }

        function lt() {
            return e.setTimeout((function () {
                tt = void 0
            })), tt = Date.now()
        }

        function ut(e, t) {
            var n, r = 0, i = {height: e};
            for (t = t ? 1 : 0; r < 4; r += 2 - t) i["margin" + (n = ne[r])] = i["padding" + n] = e;
            return t && (i.opacity = i.width = e), i
        }

        function ct(e, t, n) {
            for (var r, i = (dt.tweeners[t] || []).concat(dt.tweeners["*"]), o = 0, a = i.length; o < a; o++) if (r = i[o].call(n, t, e)) return r
        }

        function dt(e, t, n) {
            var r, i, o = 0, a = dt.prefilters.length, s = w.Deferred().always((function () {
                delete l.elem
            })), l = function () {
                if (i) return !1;
                for (var t = tt || lt(), n = Math.max(0, u.startTime + u.duration - t), r = 1 - (n / u.duration || 0), o = 0, a = u.tweens.length; o < a; o++) u.tweens[o].run(r);
                return s.notifyWith(e, [u, r, n]), r < 1 && a ? n : (a || s.notifyWith(e, [u, 1, 0]), s.resolveWith(e, [u]), !1)
            }, u = s.promise({
                elem: e,
                props: w.extend({}, t),
                opts: w.extend(!0, {specialEasing: {}, easing: w.easing._default}, n),
                originalProperties: t,
                originalOptions: n,
                startTime: tt || lt(),
                duration: n.duration,
                tweens: [],
                createTween: function (t, n) {
                    var r = w.Tween(e, u.opts, t, n, u.opts.specialEasing[t] || u.opts.easing);
                    return u.tweens.push(r), r
                },
                stop: function (t) {
                    var n = 0, r = t ? u.tweens.length : 0;
                    if (i) return this;
                    for (i = !0; n < r; n++) u.tweens[n].run(1);
                    return t ? (s.notifyWith(e, [u, 1, 0]), s.resolveWith(e, [u, t])) : s.rejectWith(e, [u, t]), this
                }
            }), c = u.props;
            for (function (e, t) {
                var n, r, i, o, a;
                for (n in e) if (i = t[r = X(n)], o = e[n], Array.isArray(o) && (i = o[1], o = e[n] = o[0]), n !== r && (e[r] = o, delete e[n]), (a = w.cssHooks[r]) && "expand" in a) for (n in o = a.expand(o), delete e[r], o) n in e || (e[n] = o[n], t[n] = i); else t[r] = i
            }(c, u.opts.specialEasing); o < a; o++) if (r = dt.prefilters[o].call(u, e, c, u.opts)) return h(r.stop) && (w._queueHooks(u.elem, u.opts.queue).stop = r.stop.bind(r)), r;
            return w.map(c, ct, u), h(u.opts.start) && u.opts.start.call(e, u), u.progress(u.opts.progress).done(u.opts.done, u.opts.complete).fail(u.opts.fail).always(u.opts.always), w.fx.timer(w.extend(l, {
                elem: e,
                anim: u,
                queue: u.opts.queue
            })), u
        }

        w.Animation = w.extend(dt, {
            tweeners: {
                "*": [function (e, t) {
                    var n = this.createTween(e, t);
                    return se(n.elem, e, te.exec(t), n), n
                }]
            }, tweener: function (e, t) {
                h(e) ? (t = e, e = ["*"]) : e = e.match(M);
                for (var n, r = 0, i = e.length; r < i; r++) n = e[r], dt.tweeners[n] = dt.tweeners[n] || [], dt.tweeners[n].unshift(t)
            }, prefilters: [function (e, t, n) {
                var r, i, o, a, s, l, u, c, d = "width" in t || "height" in t, f = this, p = {}, h = e.style,
                    m = e.nodeType && ae(e), g = Y.get(e, "fxshow");
                for (r in n.queue || (null == (a = w._queueHooks(e, "fx")).unqueued && (a.unqueued = 0, s = a.empty.fire, a.empty.fire = function () {
                    a.unqueued || s()
                }), a.unqueued++, f.always((function () {
                    f.always((function () {
                        a.unqueued--, w.queue(e, "fx").length || a.empty.fire()
                    }))
                }))), t) if (i = t[r], ot.test(i)) {
                    if (delete t[r], o = o || "toggle" === i, i === (m ? "hide" : "show")) {
                        if ("show" !== i || !g || void 0 === g[r]) continue;
                        m = !0
                    }
                    p[r] = g && g[r] || w.style(e, r)
                }
                if ((l = !w.isEmptyObject(t)) || !w.isEmptyObject(p)) for (r in d && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], null == (u = g && g.display) && (u = Y.get(e, "display")), "none" === (c = w.css(e, "display")) && (u ? c = u : (ue([e], !0), u = e.style.display || u, c = w.css(e, "display"), ue([e]))), ("inline" === c || "inline-block" === c && null != u) && "none" === w.css(e, "float") && (l || (f.done((function () {
                    h.display = u
                })), null == u && (c = h.display, u = "none" === c ? "" : c)), h.display = "inline-block")), n.overflow && (h.overflow = "hidden", f.always((function () {
                    h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2]
                }))), l = !1, p) l || (g ? "hidden" in g && (m = g.hidden) : g = Y.access(e, "fxshow", {display: u}), o && (g.hidden = !m), m && ue([e], !0), f.done((function () {
                    for (r in m || ue([e]), Y.remove(e, "fxshow"), p) w.style(e, r, p[r])
                }))), l = ct(m ? g[r] : 0, r, f), r in g || (g[r] = l.start, m && (l.end = l.start, l.start = 0))
            }], prefilter: function (e, t) {
                t ? dt.prefilters.unshift(e) : dt.prefilters.push(e)
            }
        }), w.speed = function (e, t, n) {
            var r = e && "object" == typeof e ? w.extend({}, e) : {
                complete: n || !n && t || h(e) && e,
                duration: e,
                easing: n && t || t && !h(t) && t
            };
            return w.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in w.fx.speeds ? r.duration = w.fx.speeds[r.duration] : r.duration = w.fx.speeds._default), null != r.queue && !0 !== r.queue || (r.queue = "fx"), r.old = r.complete, r.complete = function () {
                h(r.old) && r.old.call(this), r.queue && w.dequeue(this, r.queue)
            }, r
        }, w.fn.extend({
            fadeTo: function (e, t, n, r) {
                return this.filter(ae).css("opacity", 0).show().end().animate({opacity: t}, e, n, r)
            }, animate: function (e, t, n, r) {
                var i = w.isEmptyObject(e), o = w.speed(t, n, r), a = function () {
                    var t = dt(this, w.extend({}, e), o);
                    (i || Y.get(this, "finish")) && t.stop(!0)
                };
                return a.finish = a, i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a)
            }, stop: function (e, t, n) {
                var r = function (e) {
                    var t = e.stop;
                    delete e.stop, t(n)
                };
                return "string" != typeof e && (n = t, t = e, e = void 0), t && this.queue(e || "fx", []), this.each((function () {
                    var t = !0, i = null != e && e + "queueHooks", o = w.timers, a = Y.get(this);
                    if (i) a[i] && a[i].stop && r(a[i]); else for (i in a) a[i] && a[i].stop && at.test(i) && r(a[i]);
                    for (i = o.length; i--;) o[i].elem !== this || null != e && o[i].queue !== e || (o[i].anim.stop(n), t = !1, o.splice(i, 1));
                    !t && n || w.dequeue(this, e)
                }))
            }, finish: function (e) {
                return !1 !== e && (e = e || "fx"), this.each((function () {
                    var t, n = Y.get(this), r = n[e + "queue"], i = n[e + "queueHooks"], o = w.timers,
                        a = r ? r.length : 0;
                    for (n.finish = !0, w.queue(this, e, []), i && i.stop && i.stop.call(this, !0), t = o.length; t--;) o[t].elem === this && o[t].queue === e && (o[t].anim.stop(!0), o.splice(t, 1));
                    for (t = 0; t < a; t++) r[t] && r[t].finish && r[t].finish.call(this);
                    delete n.finish
                }))
            }
        }), w.each(["toggle", "show", "hide"], (function (e, t) {
            var n = w.fn[t];
            w.fn[t] = function (e, r, i) {
                return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(ut(t, !0), e, r, i)
            }
        })), w.each({
            slideDown: ut("show"),
            slideUp: ut("hide"),
            slideToggle: ut("toggle"),
            fadeIn: {opacity: "show"},
            fadeOut: {opacity: "hide"},
            fadeToggle: {opacity: "toggle"}
        }, (function (e, t) {
            w.fn[e] = function (e, n, r) {
                return this.animate(t, e, n, r)
            }
        })), w.timers = [], w.fx.tick = function () {
            var e, t = 0, n = w.timers;
            for (tt = Date.now(); t < n.length; t++) (e = n[t])() || n[t] !== e || n.splice(t--, 1);
            n.length || w.fx.stop(), tt = void 0
        }, w.fx.timer = function (e) {
            w.timers.push(e), w.fx.start()
        }, w.fx.interval = 13, w.fx.start = function () {
            nt || (nt = !0, st())
        }, w.fx.stop = function () {
            nt = null
        }, w.fx.speeds = {slow: 600, fast: 200, _default: 400}, w.fn.delay = function (t, n) {
            return t = w.fx && w.fx.speeds[t] || t, n = n || "fx", this.queue(n, (function (n, r) {
                var i = e.setTimeout(n, t);
                r.stop = function () {
                    e.clearTimeout(i)
                }
            }))
        }, rt = g.createElement("input"), it = g.createElement("select").appendChild(g.createElement("option")), rt.type = "checkbox", p.checkOn = "" !== rt.value, p.optSelected = it.selected, (rt = g.createElement("input")).value = "t", rt.type = "radio", p.radioValue = "t" === rt.value;
        var ft, pt = w.expr.attrHandle;
        w.fn.extend({
            attr: function (e, t) {
                return B(this, w.attr, e, t, 1 < arguments.length)
            }, removeAttr: function (e) {
                return this.each((function () {
                    w.removeAttr(this, e)
                }))
            }
        }), w.extend({
            attr: function (e, t, n) {
                var r, i, o = e.nodeType;
                if (3 !== o && 8 !== o && 2 !== o) return void 0 === e.getAttribute ? w.prop(e, t, n) : (1 === o && w.isXMLDoc(e) || (i = w.attrHooks[t.toLowerCase()] || (w.expr.match.bool.test(t) ? ft : void 0)), void 0 !== n ? null === n ? void w.removeAttr(e, t) : i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : i && "get" in i && null !== (r = i.get(e, t)) ? r : null == (r = w.find.attr(e, t)) ? void 0 : r)
            }, attrHooks: {
                type: {
                    set: function (e, t) {
                        if (!p.radioValue && "radio" === t && S(e, "input")) {
                            var n = e.value;
                            return e.setAttribute("type", t), n && (e.value = n), t
                        }
                    }
                }
            }, removeAttr: function (e, t) {
                var n, r = 0, i = t && t.match(M);
                if (i && 1 === e.nodeType) for (; n = i[r++];) e.removeAttribute(n)
            }
        }), ft = {
            set: function (e, t, n) {
                return !1 === t ? w.removeAttr(e, n) : e.setAttribute(n, n), n
            }
        }, w.each(w.expr.match.bool.source.match(/\w+/g), (function (e, t) {
            var n = pt[t] || w.find.attr;
            pt[t] = function (e, t, r) {
                var i, o, a = t.toLowerCase();
                return r || (o = pt[a], pt[a] = i, i = null != n(e, t, r) ? a : null, pt[a] = o), i
            }
        }));
        var ht = /^(?:input|select|textarea|button)$/i, mt = /^(?:a|area)$/i;

        function gt(e) {
            return (e.match(M) || []).join(" ")
        }

        function vt(e) {
            return e.getAttribute && e.getAttribute("class") || ""
        }

        function yt(e) {
            return Array.isArray(e) ? e : "string" == typeof e && e.match(M) || []
        }

        w.fn.extend({
            prop: function (e, t) {
                return B(this, w.prop, e, t, 1 < arguments.length)
            }, removeProp: function (e) {
                return this.each((function () {
                    delete this[w.propFix[e] || e]
                }))
            }
        }), w.extend({
            prop: function (e, t, n) {
                var r, i, o = e.nodeType;
                if (3 !== o && 8 !== o && 2 !== o) return 1 === o && w.isXMLDoc(e) || (t = w.propFix[t] || t, i = w.propHooks[t]), void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] = n : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t]
            }, propHooks: {
                tabIndex: {
                    get: function (e) {
                        var t = w.find.attr(e, "tabindex");
                        return t ? parseInt(t, 10) : ht.test(e.nodeName) || mt.test(e.nodeName) && e.href ? 0 : -1
                    }
                }
            }, propFix: {for: "htmlFor", class: "className"}
        }), p.optSelected || (w.propHooks.selected = {
            get: function (e) {
                var t = e.parentNode;
                return t && t.parentNode && t.parentNode.selectedIndex, null
            }, set: function (e) {
                var t = e.parentNode;
                t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
            }
        }), w.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], (function () {
            w.propFix[this.toLowerCase()] = this
        })), w.fn.extend({
            addClass: function (e) {
                var t, n, r, i, o, a, s, l = 0;
                if (h(e)) return this.each((function (t) {
                    w(this).addClass(e.call(this, t, vt(this)))
                }));
                if ((t = yt(e)).length) for (; n = this[l++];) if (i = vt(n), r = 1 === n.nodeType && " " + gt(i) + " ") {
                    for (a = 0; o = t[a++];) r.indexOf(" " + o + " ") < 0 && (r += o + " ");
                    i !== (s = gt(r)) && n.setAttribute("class", s)
                }
                return this
            }, removeClass: function (e) {
                var t, n, r, i, o, a, s, l = 0;
                if (h(e)) return this.each((function (t) {
                    w(this).removeClass(e.call(this, t, vt(this)))
                }));
                if (!arguments.length) return this.attr("class", "");
                if ((t = yt(e)).length) for (; n = this[l++];) if (i = vt(n), r = 1 === n.nodeType && " " + gt(i) + " ") {
                    for (a = 0; o = t[a++];) for (; -1 < r.indexOf(" " + o + " ");) r = r.replace(" " + o + " ", " ");
                    i !== (s = gt(r)) && n.setAttribute("class", s)
                }
                return this
            }, toggleClass: function (e, t) {
                var n = typeof e, r = "string" === n || Array.isArray(e);
                return "boolean" == typeof t && r ? t ? this.addClass(e) : this.removeClass(e) : h(e) ? this.each((function (n) {
                    w(this).toggleClass(e.call(this, n, vt(this), t), t)
                })) : this.each((function () {
                    var t, i, o, a;
                    if (r) for (i = 0, o = w(this), a = yt(e); t = a[i++];) o.hasClass(t) ? o.removeClass(t) : o.addClass(t); else void 0 !== e && "boolean" !== n || ((t = vt(this)) && Y.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : Y.get(this, "__className__") || ""))
                }))
            }, hasClass: function (e) {
                var t, n, r = 0;
                for (t = " " + e + " "; n = this[r++];) if (1 === n.nodeType && -1 < (" " + gt(vt(n)) + " ").indexOf(t)) return !0;
                return !1
            }
        });
        var bt = /\r/g;
        w.fn.extend({
            val: function (e) {
                var t, n, r, i = this[0];
                return arguments.length ? (r = h(e), this.each((function (n) {
                    var i;
                    1 === this.nodeType && (null == (i = r ? e.call(this, n, w(this).val()) : e) ? i = "" : "number" == typeof i ? i += "" : Array.isArray(i) && (i = w.map(i, (function (e) {
                        return null == e ? "" : e + ""
                    }))), (t = w.valHooks[this.type] || w.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, i, "value") || (this.value = i))
                }))) : i ? (t = w.valHooks[i.type] || w.valHooks[i.nodeName.toLowerCase()]) && "get" in t && void 0 !== (n = t.get(i, "value")) ? n : "string" == typeof (n = i.value) ? n.replace(bt, "") : null == n ? "" : n : void 0
            }
        }), w.extend({
            valHooks: {
                option: {
                    get: function (e) {
                        var t = w.find.attr(e, "value");
                        return null != t ? t : gt(w.text(e))
                    }
                }, select: {
                    get: function (e) {
                        var t, n, r, i = e.options, o = e.selectedIndex, a = "select-one" === e.type, s = a ? null : [],
                            l = a ? o + 1 : i.length;
                        for (r = o < 0 ? l : a ? o : 0; r < l; r++) if (((n = i[r]).selected || r === o) && !n.disabled && (!n.parentNode.disabled || !S(n.parentNode, "optgroup"))) {
                            if (t = w(n).val(), a) return t;
                            s.push(t)
                        }
                        return s
                    }, set: function (e, t) {
                        for (var n, r, i = e.options, o = w.makeArray(t), a = i.length; a--;) ((r = i[a]).selected = -1 < w.inArray(w.valHooks.option.get(r), o)) && (n = !0);
                        return n || (e.selectedIndex = -1), o
                    }
                }
            }
        }), w.each(["radio", "checkbox"], (function () {
            w.valHooks[this] = {
                set: function (e, t) {
                    if (Array.isArray(t)) return e.checked = -1 < w.inArray(w(e).val(), t)
                }
            }, p.checkOn || (w.valHooks[this].get = function (e) {
                return null === e.getAttribute("value") ? "on" : e.value
            })
        })), p.focusin = "onfocusin" in e;
        var xt = /^(?:focusinfocus|focusoutblur)$/, wt = function (e) {
            e.stopPropagation()
        };
        w.extend(w.event, {
            trigger: function (t, n, r, i) {
                var o, a, s, l, u, d, f, p, v = [r || g], y = c.call(t, "type") ? t.type : t,
                    b = c.call(t, "namespace") ? t.namespace.split(".") : [];
                if (a = p = s = r = r || g, 3 !== r.nodeType && 8 !== r.nodeType && !xt.test(y + w.event.triggered) && (-1 < y.indexOf(".") && (y = (b = y.split(".")).shift(), b.sort()), u = y.indexOf(":") < 0 && "on" + y, (t = t[w.expando] ? t : new w.Event(y, "object" == typeof t && t)).isTrigger = i ? 2 : 3, t.namespace = b.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + b.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = r), n = null == n ? [t] : w.makeArray(n, [t]), f = w.event.special[y] || {}, i || !f.trigger || !1 !== f.trigger.apply(r, n))) {
                    if (!i && !f.noBubble && !m(r)) {
                        for (l = f.delegateType || y, xt.test(l + y) || (a = a.parentNode); a; a = a.parentNode) v.push(a), s = a;
                        s === (r.ownerDocument || g) && v.push(s.defaultView || s.parentWindow || e)
                    }
                    for (o = 0; (a = v[o++]) && !t.isPropagationStopped();) p = a, t.type = 1 < o ? l : f.bindType || y, (d = (Y.get(a, "events") || Object.create(null))[t.type] && Y.get(a, "handle")) && d.apply(a, n), (d = u && a[u]) && d.apply && V(a) && (t.result = d.apply(a, n), !1 === t.result && t.preventDefault());
                    return t.type = y, i || t.isDefaultPrevented() || f._default && !1 !== f._default.apply(v.pop(), n) || !V(r) || u && h(r[y]) && !m(r) && ((s = r[u]) && (r[u] = null), w.event.triggered = y, t.isPropagationStopped() && p.addEventListener(y, wt), r[y](), t.isPropagationStopped() && p.removeEventListener(y, wt), w.event.triggered = void 0, s && (r[u] = s)), t.result
                }
            }, simulate: function (e, t, n) {
                var r = w.extend(new w.Event, n, {type: e, isSimulated: !0});
                w.event.trigger(r, null, t)
            }
        }), w.fn.extend({
            trigger: function (e, t) {
                return this.each((function () {
                    w.event.trigger(e, t, this)
                }))
            }, triggerHandler: function (e, t) {
                var n = this[0];
                if (n) return w.event.trigger(e, t, n, !0)
            }
        }), p.focusin || w.each({focus: "focusin", blur: "focusout"}, (function (e, t) {
            var n = function (e) {
                w.event.simulate(t, e.target, w.event.fix(e))
            };
            w.event.special[t] = {
                setup: function () {
                    var r = this.ownerDocument || this.document || this, i = Y.access(r, t);
                    i || r.addEventListener(e, n, !0), Y.access(r, t, (i || 0) + 1)
                }, teardown: function () {
                    var r = this.ownerDocument || this.document || this, i = Y.access(r, t) - 1;
                    i ? Y.access(r, t, i) : (r.removeEventListener(e, n, !0), Y.remove(r, t))
                }
            }
        }));
        var Ct = e.location, Tt = {guid: Date.now()}, kt = /\?/;
        w.parseXML = function (t) {
            var n;
            if (!t || "string" != typeof t) return null;
            try {
                n = (new e.DOMParser).parseFromString(t, "text/xml")
            } catch (t) {
                n = void 0
            }
            return n && !n.getElementsByTagName("parsererror").length || w.error("Invalid XML: " + t), n
        };
        var Et = /\[\]$/, At = /\r?\n/g, St = /^(?:submit|button|image|reset|file)$/i,
            Nt = /^(?:input|select|textarea|keygen)/i;

        function Dt(e, t, n, r) {
            var i;
            if (Array.isArray(t)) w.each(t, (function (t, i) {
                n || Et.test(e) ? r(e, i) : Dt(e + "[" + ("object" == typeof i && null != i ? t : "") + "]", i, n, r)
            })); else if (n || "object" !== b(t)) r(e, t); else for (i in t) Dt(e + "[" + i + "]", t[i], n, r)
        }

        w.param = function (e, t) {
            var n, r = [], i = function (e, t) {
                var n = h(t) ? t() : t;
                r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
            };
            if (null == e) return "";
            if (Array.isArray(e) || e.jquery && !w.isPlainObject(e)) w.each(e, (function () {
                i(this.name, this.value)
            })); else for (n in e) Dt(n, e[n], t, i);
            return r.join("&")
        }, w.fn.extend({
            serialize: function () {
                return w.param(this.serializeArray())
            }, serializeArray: function () {
                return this.map((function () {
                    var e = w.prop(this, "elements");
                    return e ? w.makeArray(e) : this
                })).filter((function () {
                    var e = this.type;
                    return this.name && !w(this).is(":disabled") && Nt.test(this.nodeName) && !St.test(e) && (this.checked || !fe.test(e))
                })).map((function (e, t) {
                    var n = w(this).val();
                    return null == n ? null : Array.isArray(n) ? w.map(n, (function (e) {
                        return {name: t.name, value: e.replace(At, "\r\n")}
                    })) : {name: t.name, value: n.replace(At, "\r\n")}
                })).get()
            }
        });
        var jt = /%20/g, $t = /#.*$/, Lt = /([?&])_=[^&]*/, qt = /^(.*?):[ \t]*([^\r\n]*)$/gm, Ht = /^(?:GET|HEAD)$/,
            Mt = /^\/\//, Ot = {}, Pt = {}, Rt = "*/".concat("*"), zt = g.createElement("a");

        function It(e) {
            return function (t, n) {
                "string" != typeof t && (n = t, t = "*");
                var r, i = 0, o = t.toLowerCase().match(M) || [];
                if (h(n)) for (; r = o[i++];) "+" === r[0] ? (r = r.slice(1) || "*", (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n)
            }
        }

        function Wt(e, t, n, r) {
            var i = {}, o = e === Pt;

            function a(s) {
                var l;
                return i[s] = !0, w.each(e[s] || [], (function (e, s) {
                    var u = s(t, n, r);
                    return "string" != typeof u || o || i[u] ? o ? !(l = u) : void 0 : (t.dataTypes.unshift(u), a(u), !1)
                })), l
            }

            return a(t.dataTypes[0]) || !i["*"] && a("*")
        }

        function Bt(e, t) {
            var n, r, i = w.ajaxSettings.flatOptions || {};
            for (n in t) void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]);
            return r && w.extend(!0, e, r), e
        }

        zt.href = Ct.href, w.extend({
            active: 0,
            lastModified: {},
            etag: {},
            ajaxSettings: {
                url: Ct.href,
                type: "GET",
                isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(Ct.protocol),
                global: !0,
                processData: !0,
                async: !0,
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                accepts: {
                    "*": Rt,
                    text: "text/plain",
                    html: "text/html",
                    xml: "application/xml, text/xml",
                    json: "application/json, text/javascript"
                },
                contents: {xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/},
                responseFields: {xml: "responseXML", text: "responseText", json: "responseJSON"},
                converters: {"* text": String, "text html": !0, "text json": JSON.parse, "text xml": w.parseXML},
                flatOptions: {url: !0, context: !0}
            },
            ajaxSetup: function (e, t) {
                return t ? Bt(Bt(e, w.ajaxSettings), t) : Bt(w.ajaxSettings, e)
            },
            ajaxPrefilter: It(Ot),
            ajaxTransport: It(Pt),
            ajax: function (t, n) {
                "object" == typeof t && (n = t, t = void 0), n = n || {};
                var r, i, o, a, s, l, u, c, d, f, p = w.ajaxSetup({}, n), h = p.context || p,
                    m = p.context && (h.nodeType || h.jquery) ? w(h) : w.event, v = w.Deferred(),
                    y = w.Callbacks("once memory"), b = p.statusCode || {}, x = {}, C = {}, T = "canceled", k = {
                        readyState: 0, getResponseHeader: function (e) {
                            var t;
                            if (u) {
                                if (!a) for (a = {}; t = qt.exec(o);) a[t[1].toLowerCase() + " "] = (a[t[1].toLowerCase() + " "] || []).concat(t[2]);
                                t = a[e.toLowerCase() + " "]
                            }
                            return null == t ? null : t.join(", ")
                        }, getAllResponseHeaders: function () {
                            return u ? o : null
                        }, setRequestHeader: function (e, t) {
                            return null == u && (e = C[e.toLowerCase()] = C[e.toLowerCase()] || e, x[e] = t), this
                        }, overrideMimeType: function (e) {
                            return null == u && (p.mimeType = e), this
                        }, statusCode: function (e) {
                            var t;
                            if (e) if (u) k.always(e[k.status]); else for (t in e) b[t] = [b[t], e[t]];
                            return this
                        }, abort: function (e) {
                            var t = e || T;
                            return r && r.abort(t), E(0, t), this
                        }
                    };
                if (v.promise(k), p.url = ((t || p.url || Ct.href) + "").replace(Mt, Ct.protocol + "//"), p.type = n.method || n.type || p.method || p.type, p.dataTypes = (p.dataType || "*").toLowerCase().match(M) || [""], null == p.crossDomain) {
                    l = g.createElement("a");
                    try {
                        l.href = p.url, l.href = l.href, p.crossDomain = zt.protocol + "//" + zt.host != l.protocol + "//" + l.host
                    } catch (t) {
                        p.crossDomain = !0
                    }
                }
                if (p.data && p.processData && "string" != typeof p.data && (p.data = w.param(p.data, p.traditional)), Wt(Ot, p, n, k), u) return k;
                for (d in (c = w.event && p.global) && 0 == w.active++ && w.event.trigger("ajaxStart"), p.type = p.type.toUpperCase(), p.hasContent = !Ht.test(p.type), i = p.url.replace($t, ""), p.hasContent ? p.data && p.processData && 0 === (p.contentType || "").indexOf("application/x-www-form-urlencoded") && (p.data = p.data.replace(jt, "+")) : (f = p.url.slice(i.length), p.data && (p.processData || "string" == typeof p.data) && (i += (kt.test(i) ? "&" : "?") + p.data, delete p.data), !1 === p.cache && (i = i.replace(Lt, "$1"), f = (kt.test(i) ? "&" : "?") + "_=" + Tt.guid++ + f), p.url = i + f), p.ifModified && (w.lastModified[i] && k.setRequestHeader("If-Modified-Since", w.lastModified[i]), w.etag[i] && k.setRequestHeader("If-None-Match", w.etag[i])), (p.data && p.hasContent && !1 !== p.contentType || n.contentType) && k.setRequestHeader("Content-Type", p.contentType), k.setRequestHeader("Accept", p.dataTypes[0] && p.accepts[p.dataTypes[0]] ? p.accepts[p.dataTypes[0]] + ("*" !== p.dataTypes[0] ? ", " + Rt + "; q=0.01" : "") : p.accepts["*"]), p.headers) k.setRequestHeader(d, p.headers[d]);
                if (p.beforeSend && (!1 === p.beforeSend.call(h, k, p) || u)) return k.abort();
                if (T = "abort", y.add(p.complete), k.done(p.success), k.fail(p.error), r = Wt(Pt, p, n, k)) {
                    if (k.readyState = 1, c && m.trigger("ajaxSend", [k, p]), u) return k;
                    p.async && 0 < p.timeout && (s = e.setTimeout((function () {
                        k.abort("timeout")
                    }), p.timeout));
                    try {
                        u = !1, r.send(x, E)
                    } catch (t) {
                        if (u) throw t;
                        E(-1, t)
                    }
                } else E(-1, "No Transport");

                function E(t, n, a, l) {
                    var d, f, g, x, C, T = n;
                    u || (u = !0, s && e.clearTimeout(s), r = void 0, o = l || "", k.readyState = 0 < t ? 4 : 0, d = 200 <= t && t < 300 || 304 === t, a && (x = function (e, t, n) {
                        for (var r, i, o, a, s = e.contents, l = e.dataTypes; "*" === l[0];) l.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
                        if (r) for (i in s) if (s[i] && s[i].test(r)) {
                            l.unshift(i);
                            break
                        }
                        if (l[0] in n) o = l[0]; else {
                            for (i in n) {
                                if (!l[0] || e.converters[i + " " + l[0]]) {
                                    o = i;
                                    break
                                }
                                a || (a = i)
                            }
                            o = o || a
                        }
                        if (o) return o !== l[0] && l.unshift(o), n[o]
                    }(p, k, a)), !d && -1 < w.inArray("script", p.dataTypes) && (p.converters["text script"] = function () {
                    }), x = function (e, t, n, r) {
                        var i, o, a, s, l, u = {}, c = e.dataTypes.slice();
                        if (c[1]) for (a in e.converters) u[a.toLowerCase()] = e.converters[a];
                        for (o = c.shift(); o;) if (e.responseFields[o] && (n[e.responseFields[o]] = t), !l && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), l = o, o = c.shift()) if ("*" === o) o = l; else if ("*" !== l && l !== o) {
                            if (!(a = u[l + " " + o] || u["* " + o])) for (i in u) if ((s = i.split(" "))[1] === o && (a = u[l + " " + s[0]] || u["* " + s[0]])) {
                                !0 === a ? a = u[i] : !0 !== u[i] && (o = s[0], c.unshift(s[1]));
                                break
                            }
                            if (!0 !== a) if (a && e.throws) t = a(t); else try {
                                t = a(t)
                            } catch (e) {
                                return {state: "parsererror", error: a ? e : "No conversion from " + l + " to " + o}
                            }
                        }
                        return {state: "success", data: t}
                    }(p, x, k, d), d ? (p.ifModified && ((C = k.getResponseHeader("Last-Modified")) && (w.lastModified[i] = C), (C = k.getResponseHeader("etag")) && (w.etag[i] = C)), 204 === t || "HEAD" === p.type ? T = "nocontent" : 304 === t ? T = "notmodified" : (T = x.state, f = x.data, d = !(g = x.error))) : (g = T, !t && T || (T = "error", t < 0 && (t = 0))), k.status = t, k.statusText = (n || T) + "", d ? v.resolveWith(h, [f, T, k]) : v.rejectWith(h, [k, T, g]), k.statusCode(b), b = void 0, c && m.trigger(d ? "ajaxSuccess" : "ajaxError", [k, p, d ? f : g]), y.fireWith(h, [k, T]), c && (m.trigger("ajaxComplete", [k, p]), --w.active || w.event.trigger("ajaxStop")))
                }

                return k
            },
            getJSON: function (e, t, n) {
                return w.get(e, t, n, "json")
            },
            getScript: function (e, t) {
                return w.get(e, void 0, t, "script")
            }
        }), w.each(["get", "post"], (function (e, t) {
            w[t] = function (e, n, r, i) {
                return h(n) && (i = i || r, r = n, n = void 0), w.ajax(w.extend({
                    url: e,
                    type: t,
                    dataType: i,
                    data: n,
                    success: r
                }, w.isPlainObject(e) && e))
            }
        })), w.ajaxPrefilter((function (e) {
            var t;
            for (t in e.headers) "content-type" === t.toLowerCase() && (e.contentType = e.headers[t] || "")
        })), w._evalUrl = function (e, t, n) {
            return w.ajax({
                url: e,
                type: "GET",
                dataType: "script",
                cache: !0,
                async: !1,
                global: !1,
                converters: {
                    "text script": function () {
                    }
                },
                dataFilter: function (e) {
                    w.globalEval(e, t, n)
                }
            })
        }, w.fn.extend({
            wrapAll: function (e) {
                var t;
                return this[0] && (h(e) && (e = e.call(this[0])), t = w(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map((function () {
                    for (var e = this; e.firstElementChild;) e = e.firstElementChild;
                    return e
                })).append(this)), this
            }, wrapInner: function (e) {
                return h(e) ? this.each((function (t) {
                    w(this).wrapInner(e.call(this, t))
                })) : this.each((function () {
                    var t = w(this), n = t.contents();
                    n.length ? n.wrapAll(e) : t.append(e)
                }))
            }, wrap: function (e) {
                var t = h(e);
                return this.each((function (n) {
                    w(this).wrapAll(t ? e.call(this, n) : e)
                }))
            }, unwrap: function (e) {
                return this.parent(e).not("body").each((function () {
                    w(this).replaceWith(this.childNodes)
                })), this
            }
        }), w.expr.pseudos.hidden = function (e) {
            return !w.expr.pseudos.visible(e)
        }, w.expr.pseudos.visible = function (e) {
            return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length)
        }, w.ajaxSettings.xhr = function () {
            try {
                return new e.XMLHttpRequest
            } catch (e) {
            }
        };
        var Ft = {0: 200, 1223: 204}, _t = w.ajaxSettings.xhr();
        p.cors = !!_t && "withCredentials" in _t, p.ajax = _t = !!_t, w.ajaxTransport((function (t) {
            var n, r;
            if (p.cors || _t && !t.crossDomain) return {
                send: function (i, o) {
                    var a, s = t.xhr();
                    if (s.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields) for (a in t.xhrFields) s[a] = t.xhrFields[a];
                    for (a in t.mimeType && s.overrideMimeType && s.overrideMimeType(t.mimeType), t.crossDomain || i["X-Requested-With"] || (i["X-Requested-With"] = "XMLHttpRequest"), i) s.setRequestHeader(a, i[a]);
                    n = function (e) {
                        return function () {
                            n && (n = r = s.onload = s.onerror = s.onabort = s.ontimeout = s.onreadystatechange = null, "abort" === e ? s.abort() : "error" === e ? "number" != typeof s.status ? o(0, "error") : o(s.status, s.statusText) : o(Ft[s.status] || s.status, s.statusText, "text" !== (s.responseType || "text") || "string" != typeof s.responseText ? {binary: s.response} : {text: s.responseText}, s.getAllResponseHeaders()))
                        }
                    }, s.onload = n(), r = s.onerror = s.ontimeout = n("error"), void 0 !== s.onabort ? s.onabort = r : s.onreadystatechange = function () {
                        4 === s.readyState && e.setTimeout((function () {
                            n && r()
                        }))
                    }, n = n("abort");
                    try {
                        s.send(t.hasContent && t.data || null)
                    } catch (i) {
                        if (n) throw i
                    }
                }, abort: function () {
                    n && n()
                }
            }
        })), w.ajaxPrefilter((function (e) {
            e.crossDomain && (e.contents.script = !1)
        })), w.ajaxSetup({
            accepts: {script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},
            contents: {script: /\b(?:java|ecma)script\b/},
            converters: {
                "text script": function (e) {
                    return w.globalEval(e), e
                }
            }
        }), w.ajaxPrefilter("script", (function (e) {
            void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
        })), w.ajaxTransport("script", (function (e) {
            var t, n;
            if (e.crossDomain || e.scriptAttrs) return {
                send: function (r, i) {
                    t = w("<script>").attr(e.scriptAttrs || {}).prop({
                        charset: e.scriptCharset,
                        src: e.url
                    }).on("load error", n = function (e) {
                        t.remove(), n = null, e && i("error" === e.type ? 404 : 200, e.type)
                    }), g.head.appendChild(t[0])
                }, abort: function () {
                    n && n()
                }
            }
        }));
        var Ut, Xt = [], Vt = /(=)\?(?=&|$)|\?\?/;
        w.ajaxSetup({
            jsonp: "callback", jsonpCallback: function () {
                var e = Xt.pop() || w.expando + "_" + Tt.guid++;
                return this[e] = !0, e
            }
        }), w.ajaxPrefilter("json jsonp", (function (t, n, r) {
            var i, o, a,
                s = !1 !== t.jsonp && (Vt.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && Vt.test(t.data) && "data");
            if (s || "jsonp" === t.dataTypes[0]) return i = t.jsonpCallback = h(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, s ? t[s] = t[s].replace(Vt, "$1" + i) : !1 !== t.jsonp && (t.url += (kt.test(t.url) ? "&" : "?") + t.jsonp + "=" + i), t.converters["script json"] = function () {
                return a || w.error(i + " was not called"), a[0]
            }, t.dataTypes[0] = "json", o = e[i], e[i] = function () {
                a = arguments
            }, r.always((function () {
                void 0 === o ? w(e).removeProp(i) : e[i] = o, t[i] && (t.jsonpCallback = n.jsonpCallback, Xt.push(i)), a && h(o) && o(a[0]), a = o = void 0
            })), "script"
        })), p.createHTMLDocument = ((Ut = g.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>", 2 === Ut.childNodes.length), w.parseHTML = function (e, t, n) {
            return "string" != typeof e ? [] : ("boolean" == typeof t && (n = t, t = !1), t || (p.createHTMLDocument ? ((r = (t = g.implementation.createHTMLDocument("")).createElement("base")).href = g.location.href, t.head.appendChild(r)) : t = g), o = !n && [], (i = N.exec(e)) ? [t.createElement(i[1])] : (i = be([e], t, o), o && o.length && w(o).remove(), w.merge([], i.childNodes)));
            var r, i, o
        }, w.fn.load = function (e, t, n) {
            var r, i, o, a = this, s = e.indexOf(" ");
            return -1 < s && (r = gt(e.slice(s)), e = e.slice(0, s)), h(t) ? (n = t, t = void 0) : t && "object" == typeof t && (i = "POST"), 0 < a.length && w.ajax({
                url: e,
                type: i || "GET",
                dataType: "html",
                data: t
            }).done((function (e) {
                o = arguments, a.html(r ? w("<div>").append(w.parseHTML(e)).find(r) : e)
            })).always(n && function (e, t) {
                a.each((function () {
                    n.apply(this, o || [e.responseText, t, e])
                }))
            }), this
        }, w.expr.pseudos.animated = function (e) {
            return w.grep(w.timers, (function (t) {
                return e === t.elem
            })).length
        }, w.offset = {
            setOffset: function (e, t, n) {
                var r, i, o, a, s, l, u = w.css(e, "position"), c = w(e), d = {};
                "static" === u && (e.style.position = "relative"), s = c.offset(), o = w.css(e, "top"), l = w.css(e, "left"), ("absolute" === u || "fixed" === u) && -1 < (o + l).indexOf("auto") ? (a = (r = c.position()).top, i = r.left) : (a = parseFloat(o) || 0, i = parseFloat(l) || 0), h(t) && (t = t.call(e, n, w.extend({}, s))), null != t.top && (d.top = t.top - s.top + a), null != t.left && (d.left = t.left - s.left + i), "using" in t ? t.using.call(e, d) : ("number" == typeof d.top && (d.top += "px"), "number" == typeof d.left && (d.left += "px"), c.css(d))
            }
        }, w.fn.extend({
            offset: function (e) {
                if (arguments.length) return void 0 === e ? this : this.each((function (t) {
                    w.offset.setOffset(this, e, t)
                }));
                var t, n, r = this[0];
                return r ? r.getClientRects().length ? (t = r.getBoundingClientRect(), n = r.ownerDocument.defaultView, {
                    top: t.top + n.pageYOffset,
                    left: t.left + n.pageXOffset
                }) : {top: 0, left: 0} : void 0
            }, position: function () {
                if (this[0]) {
                    var e, t, n, r = this[0], i = {top: 0, left: 0};
                    if ("fixed" === w.css(r, "position")) t = r.getBoundingClientRect(); else {
                        for (t = this.offset(), n = r.ownerDocument, e = r.offsetParent || n.documentElement; e && (e === n.body || e === n.documentElement) && "static" === w.css(e, "position");) e = e.parentNode;
                        e && e !== r && 1 === e.nodeType && ((i = w(e).offset()).top += w.css(e, "borderTopWidth", !0), i.left += w.css(e, "borderLeftWidth", !0))
                    }
                    return {
                        top: t.top - i.top - w.css(r, "marginTop", !0),
                        left: t.left - i.left - w.css(r, "marginLeft", !0)
                    }
                }
            }, offsetParent: function () {
                return this.map((function () {
                    for (var e = this.offsetParent; e && "static" === w.css(e, "position");) e = e.offsetParent;
                    return e || re
                }))
            }
        }), w.each({scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, (function (e, t) {
            var n = "pageYOffset" === t;
            w.fn[e] = function (r) {
                return B(this, (function (e, r, i) {
                    var o;
                    if (m(e) ? o = e : 9 === e.nodeType && (o = e.defaultView), void 0 === i) return o ? o[t] : e[r];
                    o ? o.scrollTo(n ? o.pageXOffset : i, n ? i : o.pageYOffset) : e[r] = i
                }), e, r, arguments.length)
            }
        })), w.each(["top", "left"], (function (e, t) {
            w.cssHooks[t] = Be(p.pixelPosition, (function (e, n) {
                if (n) return n = We(e, t), Pe.test(n) ? w(e).position()[t] + "px" : n
            }))
        })), w.each({Height: "height", Width: "width"}, (function (e, t) {
            w.each({padding: "inner" + e, content: t, "": "outer" + e}, (function (n, r) {
                w.fn[r] = function (i, o) {
                    var a = arguments.length && (n || "boolean" != typeof i),
                        s = n || (!0 === i || !0 === o ? "margin" : "border");
                    return B(this, (function (t, n, i) {
                        var o;
                        return m(t) ? 0 === r.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (o = t.documentElement, Math.max(t.body["scroll" + e], o["scroll" + e], t.body["offset" + e], o["offset" + e], o["client" + e])) : void 0 === i ? w.css(t, n, s) : w.style(t, n, i, s)
                    }), t, a ? i : void 0, a)
                }
            }))
        })), w.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], (function (e, t) {
            w.fn[t] = function (e) {
                return this.on(t, e)
            }
        })), w.fn.extend({
            bind: function (e, t, n) {
                return this.on(e, null, t, n)
            }, unbind: function (e, t) {
                return this.off(e, null, t)
            }, delegate: function (e, t, n, r) {
                return this.on(t, e, n, r)
            }, undelegate: function (e, t, n) {
                return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
            }, hover: function (e, t) {
                return this.mouseenter(e).mouseleave(t || e)
            }
        }), w.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), (function (e, t) {
            w.fn[t] = function (e, n) {
                return 0 < arguments.length ? this.on(t, null, e, n) : this.trigger(t)
            }
        }));
        var Gt = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
        w.proxy = function (e, t) {
            var n, r, o;
            if ("string" == typeof t && (n = e[t], t = e, e = n), h(e)) return r = i.call(arguments, 2), (o = function () {
                return e.apply(t || this, r.concat(i.call(arguments)))
            }).guid = e.guid = e.guid || w.guid++, o
        }, w.holdReady = function (e) {
            e ? w.readyWait++ : w.ready(!0)
        }, w.isArray = Array.isArray, w.parseJSON = JSON.parse, w.nodeName = S, w.isFunction = h, w.isWindow = m, w.camelCase = X, w.type = b, w.now = Date.now, w.isNumeric = function (e) {
            var t = w.type(e);
            return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
        }, w.trim = function (e) {
            return null == e ? "" : (e + "").replace(Gt, "")
        }, "function" == typeof define && define.amd && define("jquery", [], (function () {
            return w
        }));
        var Yt = e.jQuery, Qt = e.$;
        return w.noConflict = function (t) {
            return e.$ === w && (e.$ = Qt), t && e.jQuery === w && (e.jQuery = Yt), w
        }, void 0 === t && (e.jQuery = e.$ = w), w
    })), function (e, t) {
        var n = function (e, t) {
            "use strict";
            if (t.getElementsByClassName) {
                var n, r, i = t.documentElement, o = e.Date, a = e.HTMLPictureElement, s = "addEventListener",
                    l = "getAttribute", u = e[s], c = e.setTimeout, d = e.requestAnimationFrame || c,
                    f = e.requestIdleCallback, p = /^picture$/i, h = ["load", "error", "lazyincluded", "_lazyloaded"],
                    m = {}, g = Array.prototype.forEach, v = function (e, t) {
                        return m[t] || (m[t] = new RegExp("(\\s|^)" + t + "(\\s|$)")), m[t].test(e[l]("class") || "") && m[t]
                    }, y = function (e, t) {
                        v(e, t) || e.setAttribute("class", (e[l]("class") || "").trim() + " " + t)
                    }, b = function (e, t) {
                        var n;
                        (n = v(e, t)) && e.setAttribute("class", (e[l]("class") || "").replace(n, " "))
                    }, x = function (e, t, n) {
                        var r = n ? s : "removeEventListener";
                        n && x(e, t), h.forEach((function (n) {
                            e[r](n, t)
                        }))
                    }, w = function (e, r, i, o, a) {
                        var s = t.createEvent("Event");
                        return i || (i = {}), i.instance = n, s.initEvent(r, !o, !a), s.detail = i, e.dispatchEvent(s), s
                    }, C = function (t, n) {
                        var i;
                        !a && (i = e.picturefill || r.pf) ? (n && n.src && !t[l]("srcset") && t.setAttribute("srcset", n.src), i({
                            reevaluate: !0,
                            elements: [t]
                        })) : n && n.src && (t.src = n.src)
                    }, T = function (e, t) {
                        return (getComputedStyle(e, null) || {})[t]
                    }, k = function (e, t, n) {
                        for (n = n || e.offsetWidth; n < r.minSize && t && !e._lazysizesWidth;) n = t.offsetWidth, t = t.parentNode;
                        return n
                    }, E = function () {
                        var e, n, r = [], i = [], o = r, a = function () {
                            var t = o;
                            for (o = r.length ? i : r, e = !0, n = !1; t.length;) t.shift()();
                            e = !1
                        }, s = function (r, i) {
                            e && !i ? r.apply(this, arguments) : (o.push(r), n || (n = !0, (t.hidden ? c : d)(a)))
                        };
                        return s._lsFlush = a, s
                    }(), A = function (e, t) {
                        return t ? function () {
                            E(e)
                        } : function () {
                            var t = this, n = arguments;
                            E((function () {
                                e.apply(t, n)
                            }))
                        }
                    }, S = function (e) {
                        var t, n = 0, i = r.throttleDelay, a = r.ricTimeout, s = function () {
                            t = !1, n = o.now(), e()
                        }, l = f && a > 49 ? function () {
                            f(s, {timeout: a}), a !== r.ricTimeout && (a = r.ricTimeout)
                        } : A((function () {
                            c(s)
                        }), !0);
                        return function (e) {
                            var r;
                            (e = !0 === e) && (a = 33), t || (t = !0, (r = i - (o.now() - n)) < 0 && (r = 0), e || r < 9 ? l() : c(l, r))
                        }
                    }, N = function (e) {
                        var t, n, r = 99, i = function () {
                            t = null, e()
                        }, a = function () {
                            var e = o.now() - n;
                            e < r ? c(a, r - e) : (f || i)(i)
                        };
                        return function () {
                            n = o.now(), t || (t = c(a, r))
                        }
                    };
                !function () {
                    var t, n = {
                        lazyClass: "lazyload",
                        loadedClass: "lazyloaded",
                        loadingClass: "lazyloading",
                        preloadClass: "lazypreload",
                        errorClass: "lazyerror",
                        autosizesClass: "lazyautosizes",
                        srcAttr: "data-src",
                        srcsetAttr: "data-srcset",
                        sizesAttr: "data-sizes",
                        minSize: 40,
                        customMedia: {},
                        init: !0,
                        expFactor: 1.5,
                        hFac: .8,
                        loadMode: 2,
                        loadHidden: !0,
                        ricTimeout: 0,
                        throttleDelay: 125
                    };
                    for (t in r = e.lazySizesConfig || e.lazysizesConfig || {}, n) t in r || (r[t] = n[t]);
                    e.lazySizesConfig = r, c((function () {
                        r.init && $()
                    }))
                }();
                var D = function () {
                    var a, d, f, h, m, k, D, $, L, q, H, M, O = /^img$/i, P = /^iframe$/i,
                        R = "onscroll" in e && !/(gle|ing)bot/.test(navigator.userAgent), z = 0, I = 0, W = 0, B = -1,
                        F = function (e) {
                            W--, e && e.target && x(e.target, F), (!e || W < 0 || !e.target) && (W = 0)
                        }, _ = function (e) {
                            return null == M && (M = "hidden" == T(t.body, "visibility")), M || "hidden" != T(e.parentNode, "visibility") && "hidden" != T(e, "visibility")
                        }, U = function (e, n) {
                            var r, o = e, a = _(e);
                            for ($ -= n, H += n, L -= n, q += n; a && (o = o.offsetParent) && o != t.body && o != i;) (a = (T(o, "opacity") || 1) > 0) && "visible" != T(o, "overflow") && (r = o.getBoundingClientRect(), a = q > r.left && L < r.right && H > r.top - 1 && $ < r.bottom + 1);
                            return a
                        }, X = function () {
                            var e, o, s, u, c, f, p, m, g, v, y, b, x = n.elements;
                            if ((h = r.loadMode) && W < 8 && (e = x.length)) {
                                for (o = 0, B++, y = (v = !r.expand || r.expand < 1 ? i.clientHeight > 500 && i.clientWidth > 500 ? 500 : 370 : r.expand) * r.expFactor, b = r.hFac, M = null, I < y && W < 1 && B > 2 && h > 2 && !t.hidden ? (I = y, B = 0) : I = h > 1 && B > 1 && W < 6 ? v : z; o < e; o++) if (x[o] && !x[o]._lazyRace) if (R) if ((m = x[o][l]("data-expand")) && (f = 1 * m) || (f = I), g !== f && (k = innerWidth + f * b, D = innerHeight + f, p = -1 * f, g = f), s = x[o].getBoundingClientRect(), (H = s.bottom) >= p && ($ = s.top) <= D && (q = s.right) >= p * b && (L = s.left) <= k && (H || q || L || $) && (r.loadHidden || _(x[o])) && (d && W < 3 && !m && (h < 3 || B < 4) || U(x[o], f))) {
                                    if (ee(x[o]), c = !0, W > 9) break
                                } else !c && d && !u && W < 4 && B < 4 && h > 2 && (a[0] || r.preloadAfterLoad) && (a[0] || !m && (H || q || L || $ || "auto" != x[o][l](r.sizesAttr))) && (u = a[0] || x[o]); else ee(x[o]);
                                u && !c && ee(u)
                            }
                        }, V = S(X), G = function (e) {
                            y(e.target, r.loadedClass), b(e.target, r.loadingClass), x(e.target, Q), w(e.target, "lazyloaded")
                        }, Y = A(G), Q = function (e) {
                            Y({target: e.target})
                        }, J = function (e, t) {
                            try {
                                e.contentWindow.location.replace(t)
                            } catch (n) {
                                e.src = t
                            }
                        }, K = function (e) {
                            var t, n = e[l](r.srcsetAttr);
                            (t = r.customMedia[e[l]("data-media") || e[l]("media")]) && e.setAttribute("media", t), n && e.setAttribute("srcset", n)
                        }, Z = A((function (e, t, n, i, o) {
                            var a, s, u, d, h, m;
                            (h = w(e, "lazybeforeunveil", t)).defaultPrevented || (i && (n ? y(e, r.autosizesClass) : e.setAttribute("sizes", i)), s = e[l](r.srcsetAttr), a = e[l](r.srcAttr), o && (d = (u = e.parentNode) && p.test(u.nodeName || "")), m = t.firesLoad || "src" in e && (s || a || d), h = {target: e}, m && (x(e, F, !0), clearTimeout(f), f = c(F, 2500), y(e, r.loadingClass), x(e, Q, !0)), d && g.call(u.getElementsByTagName("source"), K), s ? e.setAttribute("srcset", s) : a && !d && (P.test(e.nodeName) ? J(e, a) : e.src = a), o && (s || d) && C(e, {src: a})), e._lazyRace && delete e._lazyRace, b(e, r.lazyClass), E((function () {
                                (!m || e.complete && e.naturalWidth > 1) && (m ? F(h) : W--, G(h))
                            }), !0)
                        })), ee = function (e) {
                            var t, n = O.test(e.nodeName), i = n && (e[l](r.sizesAttr) || e[l]("sizes")), o = "auto" == i;
                            (!o && d || !n || !e[l]("src") && !e.srcset || e.complete || v(e, r.errorClass) || !v(e, r.lazyClass)) && (t = w(e, "lazyunveilread").detail, o && j.updateElem(e, !0, e.offsetWidth), e._lazyRace = !0, W++, Z(e, t, o, i, n))
                        }, te = function () {
                            if (!d) {
                                if (o.now() - m < 999) return void c(te, 999);
                                var e = N((function () {
                                    r.loadMode = 3, V()
                                }));
                                d = !0, r.loadMode = 3, V(), u("scroll", (function () {
                                    3 == r.loadMode && (r.loadMode = 2), e()
                                }), !0)
                            }
                        };
                    return {
                        _: function () {
                            m = o.now(), n.elements = t.getElementsByClassName(r.lazyClass), a = t.getElementsByClassName(r.lazyClass + " " + r.preloadClass), u("scroll", V, !0), u("resize", V, !0), e.MutationObserver ? new MutationObserver(V).observe(i, {
                                childList: !0,
                                subtree: !0,
                                attributes: !0
                            }) : (i[s]("DOMNodeInserted", V, !0), i[s]("DOMAttrModified", V, !0), setInterval(V, 999)), u("hashchange", V, !0), ["focus", "mouseover", "click", "load", "transitionend", "animationend", "webkitAnimationEnd"].forEach((function (e) {
                                t[s](e, V, !0)
                            })), /d$|^c/.test(t.readyState) ? te() : (u("load", te), t[s]("DOMContentLoaded", V), c(te, 2e4)), n.elements.length ? (X(), E._lsFlush()) : V()
                        }, checkElems: V, unveil: ee
                    }
                }(), j = function () {
                    var e, n = A((function (e, t, n, r) {
                        var i, o, a;
                        if (e._lazysizesWidth = r, r += "px", e.setAttribute("sizes", r), p.test(t.nodeName || "")) for (o = 0, a = (i = t.getElementsByTagName("source")).length; o < a; o++) i[o].setAttribute("sizes", r);
                        n.detail.dataAttr || C(e, n.detail)
                    })), i = function (e, t, r) {
                        var i, o = e.parentNode;
                        o && (r = k(e, o, r), (i = w(e, "lazybeforesizes", {
                            width: r,
                            dataAttr: !!t
                        })).defaultPrevented || (r = i.detail.width) && r !== e._lazysizesWidth && n(e, o, i, r))
                    }, o = N((function () {
                        var t, n = e.length;
                        if (n) for (t = 0; t < n; t++) i(e[t])
                    }));
                    return {
                        _: function () {
                            e = t.getElementsByClassName(r.autosizesClass), u("resize", o)
                        }, checkElems: o, updateElem: i
                    }
                }(), $ = function () {
                    $.i || ($.i = !0, j._(), D._())
                };
                return n = {
                    cfg: r,
                    autoSizer: j,
                    loader: D,
                    init: $,
                    uP: C,
                    aC: y,
                    rC: b,
                    hC: v,
                    fire: w,
                    gW: k,
                    rAF: E
                }
            }
        }(e, e.document);
        e.lazySizes = n, "object" == typeof module && module.exports && (module.exports = n)
    }(window), function (e, t) {
        "function" == typeof define && define.amd ? define([], (function () {
            return t(e)
        })) : "object" == typeof exports ? module.exports = t(e) : e.Mapping = t(e)
    }("undefined" != typeof global ? global : "undefined" != typeof window ? window : this, (function (e) {
        var t = {};
        return t.mapElements = {
            html: "", department: "", destination: "", from: function (e) {
                try {
                    return this.department = document.querySelector(e), this.html = function (e) {
                        if (document.body.contains(e)) return e.parentElement.removeChild(e);
                        throw"Element is not found"
                    }(this.department), this
                } catch (e) {
                }
            }, to: function (e) {
                try {
                    return this.destination = document.querySelector(e), this
                } catch (e) {
                }
            }, use: function (e) {
                try {
                    switch (e) {
                        case"appendTo":
                            this.destination.append(this.html);
                            break;
                        case"prependTo":
                            this.destination.prepend(this.html);
                            break;
                        case"insertBefore":
                            this.destination.parentElement.insertBefore(this.html, this.destination);
                            break;
                        case"insertAfter":
                            t = this.html, (n = this.destination).parentNode.insertBefore(t, n.nextSibling)
                    }
                } catch (e) {
                }
                var t, n
            }
        }, t
    })), function (e, t) {
        "function" == typeof define && define.amd ? define([], (function () {
            return t(e)
        })) : "object" == typeof exports ? module.exports = t(e) : e.MappingListener = t(e)
    }("undefined" != typeof global ? global : "undefined" != typeof window ? window : this, (function (e) {
        "use strict";
        var t;
        t = {breakpoint: 992};
        var n = function () {
            var e = {}, t = !1, r = 0;
            "[object Boolean]" === Object.prototype.toString.call(arguments[0]) && (t = arguments[0], r++);
            for (var i = function (r) {
                for (var i in r) r.hasOwnProperty(i) && (t && "[object Object]" === Object.prototype.toString.call(r[i]) ? e[i] = n(e[i], r[i]) : e[i] = r[i])
            }; r < arguments.length; r++) i(arguments[r]);
            return e
        };
        return function (r) {
            var i, o = {
                switch: function () {
                    e.matchMedia("(min-width:" + i.breakpoint + "px)").matches ? Mapping.mapElements.from(i.selector).to(i.desktopWrapper).use(i.desktopMethod) : Mapping.mapElements.from(i.selector).to(i.mobileWrapper).use(i.mobileMethod)
                }, watch: function () {
                    this.switch(), e.matchMedia("(min-width:" + i.breakpoint + "px)").addListener(o.switch)
                }, init: function (e) {
                    i = function (e) {
                        switch (e.breakpoint) {
                            case"sm":
                                e.breakpoint = 576;
                                break;
                            case"md":
                                e.breakpoint = 768;
                                break;
                            case"lg":
                                e.breakpoint = 992;
                                break;
                            case"xl":
                                e.breakpoint = 1200
                        }
                        return e
                    }(i = n(t, e || {}))
                }
            };
            return o.init(r), o
        }
    })), $(document).ready((function () {
        $(".form-text input").blur((function () {
            $(this).val() ? $(this).addClass("label-active") : $(this).removeClass("label-active")
        }))
    })), $(document).ready((function () {
        $(".side-navbar .toggle-nav").on("click", (function () {
            $(this).toggleClass("active"), $(".page-content").toggleClass("page-content-active"), $(".side-navbar .list-unstyled li .list-unstyled").slideUp("fast"), $(".side-navbar .list-unstyled li a.collapse").removeClass("active")
        })), $(".side-navbar .list-unstyled li").each((function () {
            $(this).hasClass("show-list-unstyled") && ($(this).find("a.collapse").addClass("active"), $(this).find(".list-unstyled.collapse").slideDown())
        })), $(".side-navbar .list-unstyled li a.collapse").each((function () {
            $(this).on("click", (function (e) {
                $(".page-content").hasClass("page-content-active") ? ($(".page-content").removeClass("page-content-active"), 1 == $(this).next().is(":hidden") ? (e.preventDefault(), setTimeout(() => {
                    $(".side-navbar .list-unstyled li a.collapse").removeClass("active"), $(this).addClass("active"), $(".side-navbar .list-unstyled li .list-unstyled.collapse").slideUp(), $(this).next().slideDown()
                }, 500)) : setTimeout(() => {
                    $(this).removeClass("active"), $(".side-navbar .list-unstyled li .list-unstyled.collapse").slideUp()
                }, 100)) : ($(".page-content").removeClass("page-content-active"), 1 == $(this).next().is(":hidden") ? (e.preventDefault(), setTimeout(() => {
                    $(".side-navbar .list-unstyled li a.collapse").removeClass("active"), $(this).addClass("active"), $(".side-navbar .list-unstyled li .list-unstyled.collapse").slideUp(), $(this).next().slideDown()
                }, 100)) : setTimeout(() => {
                    $(this).removeClass("active"), $(".side-navbar .list-unstyled li .list-unstyled.collapse").slideUp()
                }, 100))
            }))
        })), 1 == !!document.documentMode ? $("body").addClass("is-browser-IE") : $("body").removeClass("is-browser-IE")
    })), $(document).ready((function () {
        menuMobile(), menuDashBoard(), clickMyCareerBuilder(), dropdownMenu()
    }));
    /*jquery.lazy.js*/
    ;(function (window, undefined) {
        "use strict";
        var $ = window.jQuery || window.Zepto, lazyInstanceId = 0, windowLoaded = false;
        $.fn.Lazy = $.fn.lazy = function (settings) {
            return new LazyPlugin(this, settings);
        };
        $.Lazy = $.lazy = function (names, elements, loader) {
            if ($.isFunction(elements)) {
                loader = elements;
                elements = [];
            }
            if (!$.isFunction(loader)) {
                return;
            }
            names = $.isArray(names) ? names : [names];
            elements = $.isArray(elements) ? elements : [elements];
            var config = LazyPlugin.prototype.config, forced = config._f || (config._f = {});
            for (var i = 0, l = names.length; i < l; i++) {
                if (config[names[i]] === undefined || $.isFunction(config[names[i]])) {
                    config[names[i]] = loader;
                }
            }
            for (var c = 0, a = elements.length; c < a; c++) {
                forced[elements[c]] = names[0];
            }
        };

        function _executeLazy(instance, config, items, events, namespace) {
            var _awaitingAfterLoad = 0, _actualWidth = -1, _actualHeight = -1, _isRetinaDisplay = false,
                _afterLoad = 'afterLoad', _load = 'load', _error = 'error', _img = 'img', _src = 'src',
                _srcset = 'srcset', _sizes = 'sizes', _backgroundImage = 'background-image';

            function _initialize() {
                _isRetinaDisplay = window.devicePixelRatio > 1;
                items = _prepareItems(items);
                if (config.delay >= 0) {
                    setTimeout(function () {
                        _lazyLoadItems(true);
                    }, config.delay);
                }
                if (config.delay < 0 || config.combined) {
                    events.e = _throttle(config.throttle, function (event) {
                        if (event.type === 'resize') {
                            _actualWidth = _actualHeight = -1;
                        }
                        _lazyLoadItems(event.all);
                    });
                    events.a = function (additionalItems) {
                        additionalItems = _prepareItems(additionalItems);
                        items.push.apply(items, additionalItems);
                    };
                    events.g = function () {
                        return (items = $(items).filter(function () {
                            return !$(this).data(config.loadedName);
                        }));
                    };
                    events.f = function (forcedItems) {
                        for (var i = 0; i < forcedItems.length; i++) {
                            var item = items.filter(function () {
                                return this === forcedItems[i];
                            });
                            if (item.length) {
                                _lazyLoadItems(false, item);
                            }
                        }
                    };
                    _lazyLoadItems();
                    $(config.appendScroll).on('scroll.' + namespace + ' resize.' + namespace, events.e);
                }
            }

            function _prepareItems(items) {
                var defaultImage = config.defaultImage, placeholder = config.placeholder, imageBase = config.imageBase,
                    srcsetAttribute = config.srcsetAttribute, loaderAttribute = config.loaderAttribute,
                    forcedTags = config._f || {};
                items = $(items).filter(function () {
                    var element = $(this), tag = _getElementTagName(this);
                    return !element.data(config.handledName) && (element.attr(config.attribute) || element.attr(srcsetAttribute) || element.attr(loaderAttribute) || forcedTags[tag] !== undefined);
                }).data('plugin_' + config.name, instance);
                for (var i = 0, l = items.length; i < l; i++) {
                    var element = $(items[i]), tag = _getElementTagName(items[i]),
                        elementImageBase = element.attr(config.imageBaseAttribute) || imageBase;
                    if (tag === _img && elementImageBase && element.attr(srcsetAttribute)) {
                        element.attr(srcsetAttribute, _getCorrectedSrcSet(element.attr(srcsetAttribute), elementImageBase));
                    }
                    if (forcedTags[tag] !== undefined && !element.attr(loaderAttribute)) {
                        element.attr(loaderAttribute, forcedTags[tag]);
                    }
                    if (tag === _img && defaultImage && !element.attr(_src)) {
                        element.attr(_src, defaultImage);
                    } else if (tag !== _img && placeholder && (!element.css(_backgroundImage) || element.css(_backgroundImage) === 'none')) {
                        element.css(_backgroundImage, "url('" + placeholder + "')");
                    }
                }
                return items;
            }

            function _lazyLoadItems(allItems, forced) {
                if (!items.length) {
                    if (config.autoDestroy) {
                        instance.destroy();
                    }
                    return;
                }
                var elements = forced || items, loadTriggered = false, imageBase = config.imageBase || '',
                    srcsetAttribute = config.srcsetAttribute, handledName = config.handledName;
                for (var i = 0; i < elements.length; i++) {
                    if (allItems || forced || _isInLoadableArea(elements[i])) {
                        var element = $(elements[i]), tag = _getElementTagName(elements[i]),
                            attribute = element.attr(config.attribute),
                            elementImageBase = element.attr(config.imageBaseAttribute) || imageBase,
                            customLoader = element.attr(config.loaderAttribute);
                        if (!element.data(handledName) && (!config.visibleOnly || element.is(':visible')) && ((attribute || element.attr(srcsetAttribute)) && ((tag === _img && (elementImageBase + attribute !== element.attr(_src) || element.attr(srcsetAttribute) !== element.attr(_srcset))) || (tag !== _img && elementImageBase + attribute !== element.css(_backgroundImage))) || customLoader)) {
                            loadTriggered = true;
                            element.data(handledName, true);
                            _handleItem(element, tag, elementImageBase, customLoader);
                        }
                    }
                }
                if (loadTriggered) {
                    items = $(items).filter(function () {
                        return !$(this).data(handledName);
                    });
                }
            }

            function _handleItem(element, tag, imageBase, customLoader) {
                ++_awaitingAfterLoad;
                var errorCallback = function () {
                    _triggerCallback('onError', element);
                    _reduceAwaiting();
                    errorCallback = $.noop;
                };
                _triggerCallback('beforeLoad', element);
                var srcAttribute = config.attribute, srcsetAttribute = config.srcsetAttribute,
                    sizesAttribute = config.sizesAttribute, retinaAttribute = config.retinaAttribute,
                    removeAttribute = config.removeAttribute, loadedName = config.loadedName,
                    elementRetina = element.attr(retinaAttribute);
                if (customLoader) {
                    var loadCallback = function () {
                        if (removeAttribute) {
                            element.removeAttr(config.loaderAttribute);
                        }
                        element.data(loadedName, true);
                        _triggerCallback(_afterLoad, element);
                        setTimeout(_reduceAwaiting, 1);
                        loadCallback = $.noop;
                    };
                    element.off(_error).one(_error, errorCallback).one(_load, loadCallback);
                    if (!_triggerCallback(customLoader, element, function (response) {
                        if (response) {
                            element.off(_load);
                            loadCallback();
                        } else {
                            element.off(_error);
                            errorCallback();
                        }
                    })) {
                        element.trigger(_error);
                    }
                } else {
                    var imageObj = $(new Image());
                    imageObj.one(_error, errorCallback).one(_load, function () {
                        element.hide();
                        if (tag === _img) {
                            element.attr(_sizes, imageObj.attr(_sizes)).attr(_srcset, imageObj.attr(_srcset)).attr(_src, imageObj.attr(_src));
                        } else {
                            element.css(_backgroundImage, "url('" + imageObj.attr(_src) + "')");
                        }
                        element[config.effect](config.effectTime);
                        if (removeAttribute) {
                            element.removeAttr(srcAttribute + ' ' + srcsetAttribute + ' ' + retinaAttribute + ' ' + config.imageBaseAttribute);
                            if (sizesAttribute !== _sizes) {
                                element.removeAttr(sizesAttribute);
                            }
                        }
                        element.data(loadedName, true);
                        _triggerCallback(_afterLoad, element);
                        imageObj.remove();
                        _reduceAwaiting();
                    });
                    var imageSrc = (_isRetinaDisplay && elementRetina ? elementRetina : element.attr(srcAttribute)) || '';
                    imageObj.attr(_sizes, element.attr(sizesAttribute)).attr(_srcset, element.attr(srcsetAttribute)).attr(_src, imageSrc ? imageBase + imageSrc : null);
                    imageObj.complete && imageObj.trigger(_load);
                }
            }

            function _isInLoadableArea(element) {
                var elementBound = element.getBoundingClientRect(), direction = config.scrollDirection,
                    threshold = config.threshold,
                    vertical = ((_getActualHeight() + threshold) > elementBound.top) && (-threshold < elementBound.bottom),
                    horizontal = ((_getActualWidth() + threshold) > elementBound.left) && (-threshold < elementBound.right);
                if (direction === 'vertical') {
                    return vertical;
                } else if (direction === 'horizontal') {
                    return horizontal;
                }
                return vertical && horizontal;
            }

            function _getActualWidth() {
                return _actualWidth >= 0 ? _actualWidth : (_actualWidth = $(window).width());
            }

            function _getActualHeight() {
                return _actualHeight >= 0 ? _actualHeight : (_actualHeight = $(window).height());
            }

            function _getElementTagName(element) {
                return element.tagName.toLowerCase();
            }

            function _getCorrectedSrcSet(srcset, imageBase) {
                if (imageBase) {
                    var entries = srcset.split(',');
                    srcset = '';
                    for (var i = 0, l = entries.length; i < l; i++) {
                        srcset += imageBase + entries[i].trim() + (i !== l - 1 ? ',' : '');
                    }
                }
                return srcset;
            }

            function _throttle(delay, callback) {
                var timeout, lastExecute = 0;
                return function (event, ignoreThrottle) {
                    var elapsed = +new Date() - lastExecute;

                    function run() {
                        lastExecute = +new Date();
                        callback.call(instance, event);
                    }

                    timeout && clearTimeout(timeout);
                    if (elapsed > delay || !config.enableThrottle || ignoreThrottle) {
                        run();
                    } else {
                        timeout = setTimeout(run, delay - elapsed);
                    }
                };
            }

            function _reduceAwaiting() {
                --_awaitingAfterLoad;
                if (!items.length && !_awaitingAfterLoad) {
                    _triggerCallback('onFinishedAll');
                }
            }

            function _triggerCallback(callback, element, args) {
                if ((callback = config[callback])) {
                    callback.apply(instance, [].slice.call(arguments, 1));
                    return true;
                }
                return false;
            }

            if (config.bind === 'event' || windowLoaded) {
                _initialize();
            } else {
                $(window).on(_load + '.' + namespace, _initialize);
            }
        }

        function LazyPlugin(elements, settings) {
            var _instance = this, _config = $.extend({}, _instance.config, settings), _events = {},
                _namespace = _config.name + '-' + (++lazyInstanceId);
            _instance.config = function (entryName, value) {
                if (value === undefined) {
                    return _config[entryName];
                }
                _config[entryName] = value;
                return _instance;
            };
            _instance.addItems = function (items) {
                _events.a && _events.a($.type(items) === 'string' ? $(items) : items);
                return _instance;
            };
            _instance.getItems = function () {
                return _events.g ? _events.g() : {};
            };
            _instance.update = function (useThrottle) {
                _events.e && _events.e({}, !useThrottle);
                return _instance;
            };
            _instance.force = function (items) {
                _events.f && _events.f($.type(items) === 'string' ? $(items) : items);
                return _instance;
            };
            _instance.loadAll = function () {
                _events.e && _events.e({all: true}, true);
                return _instance;
            };
            _instance.destroy = function () {
                $(_config.appendScroll).off('.' + _namespace, _events.e);
                $(window).off('.' + _namespace);
                _events = {};
                return undefined;
            };
            _executeLazy(_instance, _config, elements, _events, _namespace);
            return _config.chainable ? elements : _instance;
        }

        LazyPlugin.prototype.config = {
            name: 'lazy',
            chainable: true,
            autoDestroy: true,
            bind: 'load',
            threshold: 500,
            visibleOnly: false,
            appendScroll: window,
            scrollDirection: 'both',
            imageBase: null,
            defaultImage: 'data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==',
            placeholder: null,
            delay: -1,
            combined: false,
            attribute: 'data-src',
            srcsetAttribute: 'data-srcset',
            sizesAttribute: 'data-sizes',
            retinaAttribute: 'data-retina',
            loaderAttribute: 'data-loader',
            imageBaseAttribute: 'data-imagebase',
            removeAttribute: true,
            handledName: 'handled',
            loadedName: 'loaded',
            effect: 'show',
            effectTime: 0,
            enableThrottle: true,
            throttle: 250,
            beforeLoad: undefined,
            afterLoad: undefined,
            onError: undefined,
            onFinishedAll: undefined
        };
        $(window).on('load', function () {
            windowLoaded = true;
        });
    })(window);
    /*jquery.fancybox.js*/



</script>

