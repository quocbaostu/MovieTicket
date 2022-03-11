<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Movies Tickets</title>
    <link href="{{asset('public/user/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/user/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/user/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/user/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/user/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/user/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/user/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('public/user/js/html5shiv.js')}}"></script>
    <script src="{{asset('public/user/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{('public/user/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{('public/user/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{('public/user/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{('public/user/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{('public/user/images/ico/apple-touch-icon-57-precomposed.png')}}">
    <!--Form helper-->
    <link href="{{asset('public/user/css/bootstrap-formhelpers.min.css')}}" rel="stylesheet" media="screen">
</head><!--/head-->

<body>
    @include('layout.user.header')


    @yield('content')

    @include('layout.user.footer')


    <script src="{{asset('public/user/js/jquery.js')}}"></script>
	<script src="{{asset('public/user/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/user/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/user/js/price-range.js')}}"></script>
    <script src="{{asset('public/user/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/user/js/main.js')}}"></script>

    <!-- Script rating -->
    <script>
        var __slice = [].slice;
        (function($, window) {
            var Starrr;

            Starrr = (function() {
                Starrr.prototype.defaults = {
                    rating: void 0,
                    numStars: 5,
                    change: function(e, value) {}
                };

                function Starrr($el, options) {
                    var i, _, _ref,
                        _this = this;

                    this.options = $.extend({}, this.defaults, options);
                    this.$el = $el;
                    _ref = this.defaults;
                    for (i in _ref) {
                        _ = _ref[i];
                        if (this.$el.data(i) != null) {
                            this.options[i] = this.$el.data(i);
                        }
                    }
                    this.createStars();
                    this.syncRating();
                    this.$el.on('mouseover.starrr', 'span', function(e) {
                        return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
                    });
                    this.$el.on('mouseout.starrr', function() {
                        return _this.syncRating();
                    });
                    this.$el.on('click.starrr', 'span', function(e) {
                        return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
                    });
                    this.$el.on('starrr:change', this.options.change);
                }

                Starrr.prototype.createStars = function() {
                    var _i, _ref, _results;

                    _results = [];
                    for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
                        _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
                    }
                    return _results;
                };

                Starrr.prototype.setRating = function(rating) {
                    if (this.options.rating === rating) {
                        rating = void 0;
                    }
                    this.options.rating = rating;
                    this.syncRating();
                    return this.$el.trigger('starrr:change', rating);
                };

                Starrr.prototype.syncRating = function(rating) {
                    var i, _i, _j, _ref;

                    rating || (rating = this.options.rating);
                    if (rating) {
                        for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
                            this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
                        }
                    }
                    if (rating && rating < 5) {
                        for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
                            this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                        }
                    }
                    if (!rating) {
                        return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                    }
                };

                return Starrr;

            })();
            return $.fn.extend({
                starrr: function() {
                    var args, option;

                    option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
                    return this.each(function() {
                        var data;

                        data = $(this).data('star-rating');
                        if (!data) {
                            $(this).data('star-rating', (data = new Starrr($(this), option)));
                        }
                        if (typeof option === 'string') {
                            return data[option].apply(data, args);
                        }
                    });
                }
            });
        })(window.jQuery, window);

        $(function() {
            return $(".starrr").starrr();
        });

        $( document ).ready(function() {

            $('#stars').on('starrr:change', function(e, value){
                $('#count').html(value);
            });

            $('#stars-existing').on('starrr:change', function(e, value){
                $('#count-existing').html(value);
            });
        });
    </script>

    <!-- Bootstrap Form Helpers -->
    <script src="{{asset('public/user/js/bootstrap-formhelpers.min.js')}}"></script>
    <script>
</body>
</html>
