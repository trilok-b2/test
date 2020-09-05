<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts   -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
				{{ __('messages.welcome') }} 
                </div>
		
                <div class="">
                    <ul>
					<li><a href="{{ url('locale/en') }}" ><i class="fa fa-language"></i> EN</a></li>
					<li><a href="{{ url('locale/fr') }}" ><i class="fa fa-language"></i> FR</a></li>
					<li><a href="{{ url('locale/hi') }}" ><i class="fa fa-language"></i> Hi</a></li>

					</ul>
					<ul class="sub-menu"><li id="menu-item-wpml-ls-14616-es" class="menu-item-language menu-item wpml-ls-slot-14616 wpml-ls-item wpml-ls-item-es wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-14616-es"><a href="https://wpml.org/es/documentation-2/guia-de-inicio/configuracion-del-idioma/opciones-del-intercambiador-de-idiomas/"><img class="wpml-ls-flag lazyloaded" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/es.png" alt="Spanish" data-ll-status="loaded"><noscript><img class="wpml-ls-flag" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/es.png" alt="Spanish"></noscript></a></li><li id="menu-item-wpml-ls-14616-de" class="menu-item-language menu-item wpml-ls-slot-14616 wpml-ls-item wpml-ls-item-de wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-14616-de"><a href="https://wpml.org/de/documentation-3/ratgeber-zum-loslegen/einstellung-der-sprachen/sprachumschalter-optionen/"><img class="wpml-ls-flag lazyloaded" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/de.png" alt="German" data-ll-status="loaded"><noscript><img class="wpml-ls-flag" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/de.png" alt="German"></noscript></a></li><li id="menu-item-wpml-ls-14616-fr" class="menu-item-language menu-item wpml-ls-slot-14616 wpml-ls-item wpml-ls-item-fr wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-14616-fr"><a href="https://wpml.org/fr/documentation-6/guide-de-demarrage-rapide/configuration-de-la-langue/options-de-selecteur-de-langue/"><img class="wpml-ls-flag lazyloaded" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr.png" alt="French" data-ll-status="loaded"><noscript><img class="wpml-ls-flag" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr.png" alt="French"></noscript></a></li><li id="menu-item-wpml-ls-14616-pt-br" class="menu-item-language menu-item wpml-ls-slot-14616 wpml-ls-item wpml-ls-item-pt-br wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-14616-pt-br"><a href="https://wpml.org/pt-br/documentacao/por-onde-comecar/configuracao-de-idiomas/opcoes-de-seletor-de-idioma/"><img class="wpml-ls-flag lazyloaded" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/pt-br.png" alt="Portuguese (Brazil)" data-ll-status="loaded"><noscript><img class="wpml-ls-flag" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/pt-br.png" alt="Portuguese (Brazil)"></noscript></a></li><li id="menu-item-wpml-ls-14616-ja" class="menu-item-language menu-item wpml-ls-slot-14616 wpml-ls-item wpml-ls-item-ja wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-14616-ja"><a href="https://wpml.org/ja/documentation-5/%e3%82%b9%e3%82%bf%e3%83%bc%e3%83%88%e3%82%ac%e3%82%a4%e3%83%89/%e8%a8%80%e8%aa%9e%e8%a8%ad%e5%ae%9a/%e8%a8%80%e8%aa%9e%e3%82%b9%e3%82%a4%e3%83%83%e3%83%81%e3%83%a3%e3%83%bc%e3%82%aa%e3%83%97%e3%82%b7%e3%83%a7%e3%83%b3/"><img class="wpml-ls-flag lazyloaded" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/ja.png" alt="Japanese" data-ll-status="loaded"><noscript><img class="wpml-ls-flag" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/ja.png" alt="Japanese"></noscript></a></li><li id="menu-item-wpml-ls-14616-ru" class="menu-item-language menu-item wpml-ls-slot-14616 wpml-ls-item wpml-ls-item-ru wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-14616-ru"><a href="https://wpml.org/ru/%d0%b4%d0%be%d0%ba%d1%83%d0%bc%d0%b5%d0%bd%d1%82%d0%b0%d1%86%d0%b8%d1%8f/%d1%80%d1%83%d0%ba%d0%be%d0%b2%d0%be%d0%b4%d1%81%d1%82%d0%b2%d0%be-%d0%bf%d0%be-%d0%bd%d0%b0%d1%87%d0%b0%d0%bb%d1%83-%d1%80%d0%b0%d0%b1%d0%be%d1%82%d1%8b/%d0%bd%d0%b0%d1%81%d1%82%d1%80%d0%be%d0%b9%d0%ba%d0%b8-%d1%8f%d0%b7%d1%8b%d0%ba%d0%be%d0%b2/%d0%bf%d0%b0%d1%80%d0%b0%d0%bc%d0%b5%d1%82%d1%80%d1%8b-%d0%bf%d0%b5%d1%80%d0%b5%d0%ba%d0%bb%d1%8e%d1%87%d0%b0%d1%82%d0%b5%d0%bb%d1%8f-%d1%8f%d0%b7%d1%8b%d0%ba%d0%b0/"><img class="wpml-ls-flag lazyloaded" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/ru.png" alt="Russian" data-ll-status="loaded"><noscript><img class="wpml-ls-flag" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/ru.png" alt="Russian"></noscript></a></li><li id="menu-item-wpml-ls-14616-zh-hans" class="menu-item-language menu-item wpml-ls-slot-14616 wpml-ls-item wpml-ls-item-zh-hans wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-14616-zh-hans"><a href="https://wpml.org/zh-hans/documentation-4/%e5%85%a5%e9%97%a8%e6%8c%87%e5%8d%97/%e8%af%ad%e8%a8%80%e8%ae%be%e7%bd%ae/%e8%af%ad%e8%a8%80%e5%88%87%e6%8d%a2%e5%99%a8%e9%80%89%e9%a1%b9/"><img class="wpml-ls-flag lazyloaded" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/zh.png" alt="Chinese (Simplified)" data-ll-status="loaded"><noscript><img class="wpml-ls-flag" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/zh.png" alt="Chinese (Simplified)"></noscript></a></li><li id="menu-item-wpml-ls-14616-it" class="menu-item-language menu-item wpml-ls-slot-14616 wpml-ls-item wpml-ls-item-it wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-14616-it"><a href="https://wpml.org/it/documentazione/guida-introduttiva/configurazione-della-lingua/opzioni-del-selettore-di-lingua/"><img class="wpml-ls-flag lazyloaded" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/it.png" alt="Italian" data-ll-status="loaded"><noscript><img class="wpml-ls-flag" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/it.png" alt="Italian"></noscript></a></li><li id="menu-item-wpml-ls-14616-he" class="menu-item-language menu-item wpml-ls-slot-14616 wpml-ls-item wpml-ls-item-he wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-14616-he"><a href="https://wpml.org/he/%d7%aa%d7%99%d7%a2%d7%95%d7%93/%d7%94%d7%9e%d7%93%d7%a8%d7%99%d7%9a-%d7%9c%d7%aa%d7%97%d7%99%d7%9c%d7%aa-%d7%94%d7%a2%d7%91%d7%95%d7%93%d7%94/%d7%94%d7%92%d7%93%d7%a8%d7%aa-%d7%a9%d7%a4%d7%94/%d7%90%d7%a4%d7%a9%d7%a8%d7%95%d7%99%d7%95%d7%aa-%d7%9e%d7%a2%d7%91%d7%99%d7%a8-%d7%a9%d7%a4%d7%94/"><img class="wpml-ls-flag lazyloaded" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/he.png" alt="Hebrew" data-ll-status="loaded"><noscript><img class="wpml-ls-flag" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/he.png" alt="Hebrew"></noscript></a></li><li id="menu-item-wpml-ls-14616-ar" class="menu-item-language menu-item wpml-ls-slot-14616 wpml-ls-item wpml-ls-item-ar wpml-ls-menu-item wpml-ls-last-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-14616-ar"><a href="https://wpml.org/ar/%d8%a7%d9%84%d9%88%d8%ab%d8%a7%d8%a6%d9%82/%d8%af%d9%84%d9%8a%d9%84-%d8%a8%d8%af%d8%a1-%d8%a7%d9%84%d8%a7%d8%b3%d8%aa%d8%ae%d8%af%d8%a7%d9%85/%d8%a5%d8%b9%d8%af%d8%a7%d8%af-%d8%a7%d9%84%d9%84%d8%ba%d8%a9/%d8%ae%d9%8a%d8%a7%d8%b1%d8%a7%d8%aa-%d9%85%d8%ad%d9%88%d9%84-%d8%a7%d9%84%d9%84%d8%ba%d8%a9/"><img class="wpml-ls-flag lazyloaded" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/ar.png" alt="Arabic" data-ll-status="loaded"><noscript><img class="wpml-ls-flag" src="https://cdn.wpml.org/wp-content/plugins/sitepress-multilingual-cms/res/flags/ar.png" alt="Arabic"></noscript></a></li></ul>
                </div>
				
				<div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
