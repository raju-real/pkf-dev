!function e(o, r, n) {
    function a(l, t) {
        if (!r[l]) {
            if (!o[l]) {
                var s = "function" == typeof require && require;
                if (!t && s) return s(l, !0);
                if (i) return i(l, !0);
                var c = new Error("Cannot find module '" + l + "'");
                throw c.code = "MODULE_NOT_FOUND", c
            }
            var d = r[l] = { exports: {} };
            o[l][0].call(d.exports,
                function(e) {
                    var r = o[l][1][e];
                    return a(r ? r : e)
                },
                d,
                d.exports,
                e,
                o,
                r,
                n)
        }
        return r[l].exports
    }

    for (var i = "function" == typeof require && require, l = 0; l < n.length; l++) a(n[l]);
    return a
}({
        1: [
            function(e, o, r) {
                !function() {
                    "use strict";
                    $(document).ready(function() {
                        $(window).bind("scroll",
                            function() {
                                var e = 150;
                                $(window).scrollTop() > e
                                    ? $(".header").addClass("header--fixed")
                                    : $(".header").removeClass("header--fixed")
                            }), $(".mobile-nav-handler").click(function(e) {
                            $(".mobile-nav").toggleClass("mobile-nav--open"), $(".header").toggleClass("header--hide"),
                                $("body").toggleClass("no-scroll"), $("#toggle-nav").toggleClass("active")
                        }), $(".nav-link").click(function(e) {
                            $(".mobile-nav").removeClass("mobile-nav--open"), $(".header").removeClass("header--hide"),
                                $("body").removeClass("no-scroll"), $("#toggle-nav").removeClass("active")
                        })
                    })
                }()
            }, {}
        ]
    },
    {},
    [1]);

$(document).on('keydown', '.searchForm input', function (e) {
    if (e.which == 13)
        $(this).parent("form").submit();
    else if (e.which == 27)
        $(this).val("");
});
$(document).on('change', '.searchForm.autoSubmit select', function (e) {
    $(this).parents("form").submit();
});
$(document).on("click", "#CookieNotice button", function () {
    var ExpireDate = new Date(Date.now() + (24 * 60 * 60 * 30 * 6 * 1000));
    document.cookie = "cookieaccepted=true;expires=" + ExpireDate.toUTCString() + ";path=/";
    $("#CookieNotice").slideUp(333, function () {
        $("#CookieNotice").remove();
    });
});
$(document).on("keyup", ".dataTables_filter input[type=search]", function () {
    var val = $(this).val();    
        window.location.hash = "search=" + val;
    
});
$(document).on("click", ".dropdown-toggle", function (e) {
    if (window.innerWidth < 993) {
        e.preventDefault();
        $(this).siblings(".dropdown-menu").toggleClass('show');
    }
});

var table;
$(document).ready(function () {    
    if ($('.dataTable').length > 0) {
        var searchHash = location.hash.substr(1),
            searchString = decodeURI(searchHash.substr(searchHash.indexOf('search='))
                .split('&')[0]
                .split('=')[1]);
        if (searchString === undefined || searchString == 'undefined')
            searchString = '';

        table = $('.dataTable').DataTable({
            "oSearch": { "sSearch": searchString },
            "order": [[0, 'asc'], [1, 'desc']]
        });

        tableFilterHighlight(table);
        table.on('draw', function () {
            tableFilterHighlight(table);
        });
    }
});

function tableFilterHighlight(table) {
    var searchTerm = table.search();
    $(".hilite").each(function (i, el) {
        $(el).after($(el).html()).remove();
    });
    if (searchTerm.length > 0) {
        $(".dataTable a").each(function (i, el) {
            var base = $(el).html();
            var idx = base.toLowerCase().indexOf(searchTerm.toLowerCase());
            if (idx > -1)
                $(el).html(base.substr(0, idx) + "<span class='hilite'>" + base.substr(idx, searchTerm.length)+"</span>" + base.substr(idx + searchTerm.length));
        });
    }
}

$(window).on('scroll', function () {
    if ($(window).scrollTop() > 138) {
        $("body").addClass("sticky");
    }
    else
        $("body").removeClass("sticky");
});