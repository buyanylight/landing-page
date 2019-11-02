
// const app = new Vue({
//     el: '#app',
// });



    $("#topBtn").click(function(){
       $('html, body').animate({scrollTop: 0}, 800);

    });


(function($) {
    // 本函数每次调用只负责一个轮播图的功能
    // 也就是说只会产生一个轮播图，这个函数的作用域只能分配给一个轮播图
    // 要求在调用本函数的时候务必把当前轮播图的根标签传递过来
    // 这里的形参 ele 就是某个轮播的根标签
    var slide = function(ele,options) {
        var $ele = $(ele);
        // 默认设置选项
        var setting = {
        		// 控制轮播的动画时间
            speed: 1500,
            // 控制 interval 的时间 (轮播速度)
            interval: 5000,
            
        };
        // 对象合并
        $.extend(true, setting, options);
        // 规定好每张图片处于的位置和状态
        var states = [
            { $zIndex: 1, width: 120, height: 150, top: 69, left: 134, $opacity: 0.2 },
            { $zIndex: 2, width: 200, height: 250, top: 33, left: -13, $opacity: 0.4 },
            { $zIndex: 3, width: 200, height: 295, top: 13, left: 125, $opacity: 0.7 },
            { $zIndex: 4, width: 224, height: 320, top: 0, left: 263, $opacity: 1 },
            { $zIndex: 3, width: 200, height: 295, top: 13, left: 430, $opacity: 0.7 },
            { $zIndex: 2, width: 200, height: 250, top: 33, left: 573, $opacity: 0.4 },
            { $zIndex: 1, width: 120, height: 150, top: 69, left: 500, $opacity: 0.2 }
        ];

        var $lis = $ele.find('li');
        var timer = null;

        // 事件
        $ele.find('.hi-next').on('click', function() {
            next();
        });
        $ele.find('.hi-prev').on('click', function() {
            states.push(states.shift());
            move();
        });
        $ele.on('mouseenter', function() {
            clearInterval(timer);
            timer = null;
        }).on('mouseleave', function() {
            autoPlay();
            console.log("Hello");
        });

        move();
        autoPlay();

        // 让每个 li 对应上面 states 的每个状态
        // 让 li 从正中间展开
        function move() {
            $lis.each(function(index, element) {
                var state = states[index];
                $(element).css('zIndex', state.$zIndex).finish().animate(state, setting.speed).find('img').css('opacity', state.$opacity);
            });
        }

        // 切换到下一张
        function next() {
            // 原理：把数组最后一个元素移到第一个
            states.unshift(states.pop());
            move();
        }

        function autoPlay() {
            timer = setInterval(next, setting.interval);
        }
    }
    // 找到要轮播的轮播图的根标签，调用 slide()
    $.fn.hiSlide = function(options) {
        $(this).each(function(index, ele) {
            slide(ele,options);
        });
        // 返回值，以便支持链式调用
        return this;
    }
})(jQuery);


(function($) {
console.log("I am Working!")
// for ie9 doesn't support debug console >>>
if (!window.console) window.console = {};
if (!window.console.log) window.console.log = function () { };
// ^^^

$.fn.euCookieLawPopup = (function() {

    var _self = this;

    ///////////////////////////////////////////////////////////////////////////////////////////////
    // PARAMETERS (MODIFY THIS PART) //////////////////////////////////////////////////////////////
    _self.params = {
        cookiePolicyUrl : '/?privacy',
        popupPosition : 'top',
        colorStyle : 'default',
        compactStyle : false,
        popupTitle : 'This website is using cookies',
        popupText : 'We use cookies to ensure that we give you the best experience on our website. If you continue without changing your settings, we\'ll assume that you are happy to receive all cookies on this website.',
        buttonContinueTitle : 'Continue',
        buttonLearnmoreTitle : 'Learn&nbsp;more',
        buttonLearnmoreOpenInNewWindow : true,
        agreementExpiresInDays : 30,
        autoAcceptCookiePolicy : false,
        htmlMarkup : null
    };

    ///////////////////////////////////////////////////////////////////////////////////////////////
    // VARIABLES USED BY THE FUNCTION (DON'T MODIFY THIS PART) ////////////////////////////////////
    _self.vars = {
        INITIALISED : false,
        HTML_MARKUP : null,
        COOKIE_NAME : 'EU_COOKIE_LAW_CONSENT'
    };

    ///////////////////////////////////////////////////////////////////////////////////////////////
    // PRIVATE FUNCTIONS FOR MANIPULATING DATA ////////////////////////////////////////////////////

    // Overwrite default parameters if any of those is present
    var parseParameters = function(object, markup, settings) {

        if (object) {
            var className = $(object).attr('class') ? $(object).attr('class') : '';
            if (className.indexOf('eupopup-top') > -1) {
                _self.params.popupPosition = 'top';
            }
            else if (className.indexOf('eupopup-fixedtop') > -1) {
                _self.params.popupPosition = 'fixedtop';
            }
            else if (className.indexOf('eupopup-bottomright') > -1) {
                _self.params.popupPosition = 'bottomright';
            }
            else if (className.indexOf('eupopup-bottomleft') > -1) {
                _self.params.popupPosition = 'bottomleft';
            }
            else if (className.indexOf('eupopup-bottom') > -1) {
                _self.params.popupPosition = 'bottom';
            }
            else if (className.indexOf('eupopup-block') > -1) {
                _self.params.popupPosition = 'block';
            }
            if (className.indexOf('eupopup-color-default') > -1) {
                _self.params.colorStyle = 'default';
            }
            else if (className.indexOf('eupopup-color-inverse') > -1) {
                _self.params.colorStyle = 'inverse';
            }
            if (className.indexOf('eupopup-style-compact') > -1) {
                _self.params.compactStyle = true;
            }
        }

        if (markup) {
            _self.params.htmlMarkup = markup;
        }

        if (settings) {
            if (typeof settings.cookiePolicyUrl !== 'undefined') {
                _self.params.cookiePolicyUrl = settings.cookiePolicyUrl;
            }
            if (typeof settings.popupPosition !== 'undefined') {
                _self.params.popupPosition = settings.popupPosition;
            }
            if (typeof settings.colorStyle !== 'undefined') {
                _self.params.colorStyle = settings.colorStyle;
            }
            if (typeof settings.popupTitle !== 'undefined') {
                _self.params.popupTitle = settings.popupTitle;
            }
            if (typeof settings.popupText !== 'undefined') {
                _self.params.popupText = settings.popupText;
            }
            if (typeof settings.buttonContinueTitle !== 'undefined') {
                _self.params.buttonContinueTitle = settings.buttonContinueTitle;
            }
            if (typeof settings.buttonLearnmoreTitle !== 'undefined') {
                _self.params.buttonLearnmoreTitle = settings.buttonLearnmoreTitle;
            }
            if (typeof settings.buttonLearnmoreOpenInNewWindow !== 'undefined') {
                _self.params.buttonLearnmoreOpenInNewWindow = settings.buttonLearnmoreOpenInNewWindow;
            }
            if (typeof settings.agreementExpiresInDays !== 'undefined') {
                _self.params.agreementExpiresInDays = settings.agreementExpiresInDays;
            }
            if (typeof settings.autoAcceptCookiePolicy !== 'undefined') {
                _self.params.autoAcceptCookiePolicy = settings.autoAcceptCookiePolicy;
            }
            if (typeof settings.htmlMarkup !== 'undefined') {
                _self.params.htmlMarkup = settings.htmlMarkup;
            }
        }

    };

    var createHtmlMarkup = function() {

        if (_self.params.htmlMarkup) {
            return _self.params.htmlMarkup;
        }

        var html =
            '<div class="eupopup-container' +
                ' eupopup-container-' + _self.params.popupPosition +
                (_self.params.compactStyle ? ' eupopup-style-compact' : '') +
                ' eupopup-color-' + _self.params.colorStyle + '">' +
                '<div class="eupopup-head">' + _self.params.popupTitle + '</div>' +
                '<div class="eupopup-body">' + _self.params.popupText + '</div>' +
                '<div class="eupopup-buttons">' +
                  '<a href="#" class="eupopup-button eupopup-button_1 btn btn-BAL">' + _self.params.buttonContinueTitle + '</a>' +
                  '<a href="' + _self.params.cookiePolicyUrl + '"' +
                    (_self.params.buttonLearnmoreOpenInNewWindow ? ' target=_blank ' : '') +
                    ' class="eupopup-button eupopup-button_2 btn btn-BAL">' + _self.params.buttonLearnmoreTitle + '</a>' +
                  '<div class="clearfix"></div>' +
                '</div>' +
                '<a href="#" class="eupopup-closebutton">x</a>' +
            '</div>';

        return html;
    };

    // Storing the consent in a cookie
    var setUserAcceptsCookies = function(consent) {
        var d = new Date();
        var expiresInDays = _self.params.agreementExpiresInDays * 24 * 60 * 60 * 1000;
        d.setTime( d.getTime() + expiresInDays );
        var expires = "expires=" + d.toGMTString();
        document.cookie = _self.vars.COOKIE_NAME + '=' + consent + "; " + expires + ";path=/";

        $(document).trigger("user_cookie_consent_changed", {'consent' : consent});
    };

    // Let's see if we have a consent cookie already
    var userAlreadyAcceptedCookies = function() {
        var userAcceptedCookies = false;
        var cookies = document.cookie.split(";");
        for (var i = 0; i < cookies.length; i++) {
            var c = cookies[i].trim();
            if (c.indexOf(_self.vars.COOKIE_NAME) == 0) {
                userAcceptedCookies = c.substring(_self.vars.COOKIE_NAME.length + 1, c.length);
            }
        }

        return userAcceptedCookies;
    };

    var hideContainer = function() {
        // $('.eupopup-container').slideUp(200);
        $('.eupopup-container').animate({
            opacity: 0,
            height: 0
        }, 200, function() {
            $('.eupopup-container').hide(0);
        });
    };

    ///////////////////////////////////////////////////////////////////////////////////////////////
    // PUBLIC FUNCTIONS  //////////////////////////////////////////////////////////////////////////
    var publicfunc = {

        // INITIALIZE EU COOKIE LAW POPUP /////////////////////////////////////////////////////////
        init : function(settings) {

            parseParameters(
                $(".eupopup").first(),
                $(".eupopup-markup").html(),
                settings);

            // No need to display this if user already accepted the policy
            if (userAlreadyAcceptedCookies()) {
        $(document).trigger("user_cookie_already_accepted", {'consent': true});
                return;
            }

            // We should initialise only once
            if (_self.vars.INITIALISED) {
                return;
            }
            _self.vars.INITIALISED = true;

            // Markup and event listeners >>>
            _self.vars.HTML_MARKUP = createHtmlMarkup();

            if ($('.eupopup-block').length > 0) {
                $('.eupopup-block').append(_self.vars.HTML_MARKUP);
            } else {
                $('BODY').append(_self.vars.HTML_MARKUP);
            }

            $('.eupopup-button_1').click(function() {
                setUserAcceptsCookies(true);
                hideContainer();
                console.log('1');
                return false;
            });
            $('.eupopup-closebutton').click(function() {
                setUserAcceptsCookies(true);
                hideContainer();
                return false;
            });
            // ^^^ Markup and event listeners

            // Ready to start!
            $('.eupopup-container').show();

            // In case it's alright to just display the message once
            if (_self.params.autoAcceptCookiePolicy) {
                setUserAcceptsCookies(true);
            }

        }

    };

    return publicfunc;
});

$(document).ready( function() {
    if ($(".eupopup").length > 0) {
        $(document).euCookieLawPopup().init({
            'info' : 'YOU_CAN_ADD_MORE_SETTINGS_HERE',
            'cookiePolicyUrl' : '/privacy',
            'popupTitle' : '',
            'popupText' : 'We use cookies to offer you a better browsing experience, analyze site traffic, personalize content. Read about how we use cookies and how you can control them on our Privacy Policy. If you continue to use this site, you consent to our use of cookies.'
        });
    }
});

$(document).bind("user_cookie_consent_changed", function(event, object) {
    console.log("User cookie consent changed: " + $(object).attr('consent') );
});

}(jQuery));


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

