<!DOCTYPE html>
<html lang="en">
    <head>
        <title>UAS | Login</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link
            href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link
            rel="stylesheet"
            href="https://preview.colorlib.com/theme/bootstrap/login-form-15/css/A.style.css.pagespeed.cf.AxmTFBrhes.css"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <script nonce="d17a7e08-641c-4e2d-820a-7476490493ef">
            (function (w, d) {
                !(function (a, e, t, r) {
                    (a.zarazData = a.zarazData || {}),
                        (a.zarazData.executed = []),
                        (a.zaraz = { deferred: [] }),
                        (a.zaraz.q = []),
                        (a.zaraz._f = function (e) {
                            return function () {
                                var t = Array.prototype.slice.call(arguments);
                                a.zaraz.q.push({ m: e, a: t });
                            };
                        });
                    for (const e of ["track", "set", "ecommerce", "debug"])
                        a.zaraz[e] = a.zaraz._f(e);
                    a.addEventListener("DOMContentLoaded", () => {
                        var t = e.getElementsByTagName(r)[0],
                            z = e.createElement(r),
                            n = e.getElementsByTagName("title")[0];
                        for (
                            n &&
                                (a.zarazData.t =
                                    e.getElementsByTagName("title")[0].text),
                                a.zarazData.x = Math.random(),
                                a.zarazData.w = a.screen.width,
                                a.zarazData.h = a.screen.height,
                                a.zarazData.j = a.innerHeight,
                                a.zarazData.e = a.innerWidth,
                                a.zarazData.l = a.location.href,
                                a.zarazData.r = e.referrer,
                                a.zarazData.k = a.screen.colorDepth,
                                a.zarazData.n = e.characterSet,
                                a.zarazData.o = new Date().getTimezoneOffset(),
                                a.zarazData.q = [];
                            a.zaraz.q.length;

                        ) {
                            const e = a.zaraz.q.shift();
                            a.zarazData.q.push(e);
                        }
                        z.defer = !0;
                        for (const e of [localStorage, sessionStorage])
                            Object.keys(e)
                                .filter((a) => a.startsWith("_zaraz_"))
                                .forEach((t) => {
                                    try {
                                        a.zarazData["z_" + t.slice(7)] =
                                            JSON.parse(e.getItem(t));
                                    } catch {
                                        a.zarazData["z_" + t.slice(7)] =
                                            e.getItem(t);
                                    }
                                });
                        (z.referrerPolicy = "origin"),
                            (z.src =
                                "/cdn-cgi/zaraz/s.js?z=" +
                                btoa(
                                    encodeURIComponent(
                                        JSON.stringify(a.zarazData)
                                    )
                                )),
                            t.parentNode.insertBefore(z, t);
                    });
                })(w, d, 0, "script");
            })(window, document);
        </script>
        <style>
            body{
                background:#eee;
                font-family:sans-serif;
            }
            
            .banner-area{
                width:100%;
                height:100vh;
                background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url(https://i.pinimg.com/originals/13/7e/8c/137e8c8ee47a632fb20843fd293a4f61.jpg);
                background-size:cover;
            }        


        </style>
    </head>

    <body>
        <div class="banner-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 col-lg-5">
                        <div
                            class="wrap"
                            style="background-color: rgba(91, 53, 161, 0.603)"
                        >
                            <div class="text-center mt-3">
                                <img
                                    src="https://www.ukdw.ac.id/wp-content/uploads/2017/10/logo-ukdw.png"
                                    width="110"
                                    height="130"
                                    alt=""
                                    class="mb-n4 mt-2"
                                />
                            </div>
                            <div class="login-wrap p-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3 class="mb-4 text-center text-white">
                                            <b>Silahkan Login</b>
                                        </h3>
                                    </div>
                                </div>
                                @if (session('alert-logout'))
                                <div class="alert alert-success alert-dis,issable fade show" role="alert">
                                    <strong>{{ session('alert-logout') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true"><i class="bi bi-check2-square"></i></span>
                                    </button>
                                </div>
                                @endif
                                <form action="/user/ceklogin" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="no_hp"
                                            required
                                        />
                                        <label
                                            class="form-control-placeholder"
                                            for="username"
                                            >No Handphone</label
                                        >
                                    </div>
                                    <div class="form-group">
                                        <input
                                            name="password"
                                            type="password"
                                            class="form-control"
                                            required
                                        />
                                        <label
                                            class="form-control-placeholder"
                                            for="password"
                                            >Password</label
                                        >
                                    </div>
                                    <div class="form-group mt-2">
                                        <button
                                            type="submit"
                                            class="form-control btn btn-primary rounded submit px-3"
                                        >
                                            Sign In
                                        </button>
                                    </div>
                                </form>
                                <p class="text-center">
                                    72200391 - Gilbert Day
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.3YxqA_kpjO.js"></script>
        <script>
            eval(mod_pagespeed_B48vE68w01);
        </script>
        <script>
            eval(mod_pagespeed_M0XlbbKlq8);
        </script>
        <script>
            eval(mod_pagespeed_DUZ_Pnp2XD);
        </script>
        <script
            defer
            src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
            integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
            data-cf-beacon='{"rayId":"714274dc8e3e357a","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
            crossorigin="anonymous"
        ></script>

    </body>
</html>
