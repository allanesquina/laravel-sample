var App = App || {};
App.Login = (function (window, document) {

    'use strict';

    var $form = $('#app-login');
    var $state = $form.find('button > .state');

    return {
        init: function () {
            this.bind();
            console.log('Login loaded');
        },
        doLogin: function () {
            var working = false;
            if (working) return;
            working = true;
            $state = $form.find('button > .state');
            $form.addClass('loading');
            $state.html('Authenticating');
            $.ajax({
                method: "POST",
                url: "/auth/login",
                data: $form.serialize()
            })
            .done(function(res) {
                if(res.auth) {
                    $form.addClass('ok');
                    $state.html('Welcome back!');
                    $form.fadeOut(1000, function () {
                       App.home.page('/tasks');
                    });
                } else {
                    $state.html('Log in');
                    $form.removeClass('ok loading');
                }
            });
       },
       bind: function () {
            $('#send').on('click', function (e) {
                e.preventDefault();
                App.Login.doLogin();
            });
        }
    }
}(window, document));

App.home = (function (window, document) {

    'use strict';

    return {
        init: function () {
            console.log('App loaded');
        },
        page: function (name) {
            $.ajax({
                method: "GET",
                url: name
            })
            .done(function(res) {
                $('.container').addClass('active').html(res);
            });
        }
    }
}(window, document));
App.home.init();
App.Login.init();
