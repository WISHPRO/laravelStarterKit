(function () {

    var laroute = (function () {

        var routes = {

            absolute: false,
            rootUrl: 'http://localhost',
            routes : [{"host":null,"methods":["GET","HEAD"],"uri":"superadmin","name":"admin_dashboard","action":"Frozennode\Administrator\AdminController@dashboard"},{"host":null,"methods":["GET","HEAD"],"uri":"superadmin\/file_download","name":"admin_file_download","action":"Frozennode\Administrator\AdminController@fileDownload"},{"host":null,"methods":["GET","HEAD"],"uri":"superadmin\/page\/{page}","name":"admin_page","action":"Frozennode\Administrator\AdminController@page"},{"host":null,"methods":["GET","HEAD"],"uri":"superadmin\/settings\/{settings}","name":"admin_settings","action":"Frozennode\Administrator\AdminController@settings"},{"host":null,"methods":["GET","HEAD"],"uri":"superadmin\/settings\/{settings}\/file","name":"admin_settings_display_file","action":"Frozennode\Administrator\AdminController@displayFile"},{"host":null,"methods":["POST"],"uri":"superadmin\/settings\/{settings}\/save","name":"admin_settings_save","action":"Frozennode\Administrator\AdminController@settingsSave"},{"host":null,"methods":["POST"],"uri":"superadmin\/settings\/{settings}\/custom_action","name":"admin_settings_custom_action","action":"Frozennode\Administrator\AdminController@settingsCustomAction"},{"host":null,"methods":["POST"],"uri":"superadmin\/settings\/{settings}\/{field}\/file_upload","name":"admin_settings_file_upload","action":"Frozennode\Administrator\AdminController@fileUpload"},{"host":null,"methods":["GET","HEAD"],"uri":"superadmin\/switch_locale\/{locale}","name":"admin_switch_locale","action":"Frozennode\Administrator\AdminController@switchLocale"},{"host":null,"methods":["GET","HEAD"],"uri":"superadmin\/{model}","name":"admin_index","action":"Frozennode\Administrator\AdminController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"superadmin\/{model}\/new","name":"admin_new_item","action":"Frozennode\Administrator\AdminController@item"},{"host":null,"methods":["POST"],"uri":"superadmin\/{model}\/update_options","name":"admin_update_options","action":"Frozennode\Administrator\AdminController@updateOptions"},{"host":null,"methods":["GET","HEAD"],"uri":"superadmin\/{model}\/file","name":"admin_display_file","action":"Frozennode\Administrator\AdminController@displayFile"},{"host":null,"methods":["POST"],"uri":"superadmin\/{model}\/rows_per_page","name":"admin_rows_per_page","action":"Frozennode\Administrator\AdminController@rowsPerPage"},{"host":null,"methods":["POST"],"uri":"superadmin\/{model}\/results","name":"admin_get_results","action":"Frozennode\Administrator\AdminController@results"},{"host":null,"methods":["POST"],"uri":"superadmin\/{model}\/custom_action","name":"admin_custom_model_action","action":"Frozennode\Administrator\AdminController@customModelAction"},{"host":null,"methods":["GET","HEAD"],"uri":"superadmin\/{model}\/{id}","name":"admin_get_item","action":"Frozennode\Administrator\AdminController@item"},{"host":null,"methods":["POST"],"uri":"superadmin\/{model}\/{field}\/file_upload","name":"admin_file_upload","action":"Frozennode\Administrator\AdminController@fileUpload"},{"host":null,"methods":["POST"],"uri":"superadmin\/{model}\/{id?}\/save","name":"admin_save_item","action":"Frozennode\Administrator\AdminController@save"},{"host":null,"methods":["POST"],"uri":"superadmin\/{model}\/{id}\/delete","name":"admin_delete_item","action":"Frozennode\Administrator\AdminController@delete"},{"host":null,"methods":["POST"],"uri":"superadmin\/{model}\/{id}\/custom_action","name":"admin_custom_model_item_action","action":"Frozennode\Administrator\AdminController@customModelItemAction"},{"host":null,"methods":["GET","HEAD"],"uri":"\/","name":"welcome.index","action":"App\Http\Controllers\WelcomeController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"home","name":"home.index","action":"App\Http\Controllers\HomeController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"auth\/register\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@getRegister"},{"host":null,"methods":["POST"],"uri":"auth\/register\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@postRegister"},{"host":null,"methods":["GET","HEAD"],"uri":"auth\/login\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@getLogin"},{"host":null,"methods":["POST"],"uri":"auth\/login\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@postLogin"},{"host":null,"methods":["GET","HEAD"],"uri":"auth\/logout\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@getLogout"},{"host":null,"methods":["GET","HEAD","POST","PUT","PATCH","DELETE"],"uri":"auth\/{_missing}","name":null,"action":"App\Http\Controllers\Auth\AuthController@missingMethod"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/email\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@getEmail"},{"host":null,"methods":["POST"],"uri":"password\/email\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@postEmail"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/reset\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@getReset"},{"host":null,"methods":["POST"],"uri":"password\/reset\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@postReset"},{"host":null,"methods":["GET","HEAD","POST","PUT","PATCH","DELETE"],"uri":"password\/{_missing}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@missingMethod"},{"host":null,"methods":["GET","HEAD"],"uri":"mytestpage","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/open","name":"debugbar.openhandler","action":"Barryvdh\Debugbar\Controllers\OpenHandlerController@handle"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/assets\/stylesheets","name":"debugbar.assets.css","action":"Barryvdh\Debugbar\Controllers\AssetController@css"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/assets\/javascript","name":"debugbar.assets.js","action":"Barryvdh\Debugbar\Controllers\AssetController@js"},{"host":null,"methods":["GET","HEAD"],"uri":"img\/{all}","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"stats","name":"tracker.stats.index","action":"PragmaRX\Tracker\Vendor\Laravel\Controllers\Stats@index"},{"host":null,"methods":["GET","HEAD"],"uri":"stats\/log\/{uuid}","name":"tracker.stats.log","action":"PragmaRX\Tracker\Vendor\Laravel\Controllers\Stats@log"},{"host":null,"methods":["GET","HEAD"],"uri":"stats\/api\/pageviews","name":"tracker.stats.api.pageviews","action":"PragmaRX\Tracker\Vendor\Laravel\Controllers\Stats@apiPageviews"},{"host":null,"methods":["GET","HEAD"],"uri":"stats\/api\/pageviewsbycountry","name":"tracker.stats.api.pageviewsbycountry","action":"PragmaRX\Tracker\Vendor\Laravel\Controllers\Stats@apiPageviewsByCountry"},{"host":null,"methods":["GET","HEAD"],"uri":"stats\/api\/log\/{uuid}","name":"tracker.stats.api.log","action":"PragmaRX\Tracker\Vendor\Laravel\Controllers\Stats@apiLog"},{"host":null,"methods":["GET","HEAD"],"uri":"stats\/api\/errors","name":"tracker.stats.api.errors","action":"PragmaRX\Tracker\Vendor\Laravel\Controllers\Stats@apiErrors"},{"host":null,"methods":["GET","HEAD"],"uri":"stats\/api\/events","name":"tracker.stats.api.events","action":"PragmaRX\Tracker\Vendor\Laravel\Controllers\Stats@apiEvents"},{"host":null,"methods":["GET","HEAD"],"uri":"stats\/api\/users","name":"tracker.stats.api.users","action":"PragmaRX\Tracker\Vendor\Laravel\Controllers\Stats@apiUsers"},{"host":null,"methods":["GET","HEAD"],"uri":"stats\/api\/visits","name":"tracker.stats.api.visits","action":"PragmaRX\Tracker\Vendor\Laravel\Controllers\Stats@apiVisits"}],

            route : function (name, parameters, route) {
                route = route || this.getByName(name);

                if ( ! route ) {
                    return undefined;
                }

                return this.toRoute(route, parameters);
            },

            url: function (url, parameters) {
                parameters = parameters || [];

                var uri = url + '/' + parameters.join('/');

                return this.getCorrectUrl(uri);
            },

            toRoute : function (route, parameters) {
                var uri = this.replaceNamedParameters(route.uri, parameters);
                var qs  = this.getRouteQueryString(parameters);

                return this.getCorrectUrl(uri + qs);
            },

            replaceNamedParameters : function (uri, parameters) {
                uri = uri.replace(/\{(.*?)\??\}/g, function(match, key) {
                    if (parameters.hasOwnProperty(key)) {
                        var value = parameters[key];
                        delete parameters[key];
                        return value;
                    } else {
                        return match;
                    }
                });

                // Strip out any optional parameters that were not given
                uri = uri.replace(/\/\{.*?\?\}/g, '');

                return uri;
            },

            getRouteQueryString : function (parameters) {
                var qs = [];
                for (var key in parameters) {
                    if (parameters.hasOwnProperty(key)) {
                        qs.push(key + '=' + parameters[key]);
                    }
                }

                if (qs.length < 1) {
                    return '';
                }

                return '?' + qs.join('&');
            },

            getByName : function (name) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].name === name) {
                        return this.routes[key];
                    }
                }
            },

            getByAction : function(action) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].action === action) {
                        return this.routes[key];
                    }
                }
            },

            getCorrectUrl: function (uri) {
                var url = '/' + uri.replace(/^\/?/, '');

                if(!this.absolute)
                    return url;

                return this.rootUrl.replace('/\/?$/', '') + url;
            }
        };

        var getLinkAttributes = function(attributes) {
            if ( ! attributes) {
                return '';
            }

            var attrs = [];
            for (var key in attributes) {
                if (attributes.hasOwnProperty(key)) {
                    attrs.push(key + '="' + attributes[key] + '"');
                }
            }

            return attrs.join(' ');
        };

        var getHtmlLink = function (url, title, attributes) {
            title      = title || url;
            attributes = getLinkAttributes(attributes);

            return '<a href="' + url + '" ' + attributes + '>' + title + '</a>';
        };

        return {
            // Generate a url for a given controller action.
            // laroute.action('HomeController@getIndex', [params = {}])
            action : function (name, parameters) {
                parameters = parameters || {};

                return routes.route(name, parameters, routes.getByAction(name));
            },

            // Generate a url for a given named route.
            // laroute.route('routeName', [params = {}])
            route : function (route, parameters) {
                parameters = parameters || {};

                return routes.route(route, parameters);
            },

            // Generate a fully qualified URL to the given path.
            // laroute.route('url', [params = {}])
            url : function (route, parameters) {
                parameters = parameters || {};

                return routes.url(route, parameters);
            },

            // Generate a html link to the given url.
            // laroute.link_to('foo/bar', [title = url], [attributes = {}])
            link_to : function (url, title, attributes) {
                url = this.url(url);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given route.
            // laroute.link_to_route('route.name', [title=url], [parameters = {}], [attributes = {}])
            link_to_route : function (route, title, parameters, attributes) {
                var url = this.route(route, parameters);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given controller action.
            // laroute.link_to_action('HomeController@getIndex', [title=url], [parameters = {}], [attributes = {}])
            link_to_action : function(action, title, parameters, attributes) {
                var url = this.action(action, parameters);

                return getHtmlLink(url, title, attributes);
            }

        };

    }).call(this);

    /**
     * Expose the class either via AMD, CommonJS or the global object
     */
    if (typeof define === 'function' && define.amd) {
        define(function () {
            return laroute;
        });
    }
    else if (typeof module === 'object' && module.exports){
        module.exports = laroute;
    }
    else {
        window.laroute = laroute;
    }

}).call(this);

