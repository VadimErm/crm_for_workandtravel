webpackJsonp([1,5],{

/***/ 333:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AboutComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var AboutComponent = (function () {
    function AboutComponent() {
    }
    AboutComponent.prototype.ngOnInit = function () {
        function heightDetect() {
            $(".section").css("height", $(window).height());
        }
        ;
        heightDetect();
        $(window).resize(function () {
            heightDetect();
        });
    };
    AboutComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'about',
            template: __webpack_require__(769),
            styles: [__webpack_require__(717)]
        }), 
        __metadata('design:paramtypes', [])
    ], AboutComponent);
    return AboutComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/about.component.js.map

/***/ }),

/***/ 334:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AboutcontactComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var AboutcontactComponent = (function () {
    function AboutcontactComponent() {
    }
    AboutcontactComponent.prototype.ngOnInit = function () {
        $('#scroll').perfectScrollbar({
            suppressScrollX: true
        });
        $('#scrollable-content-contact').perfectScrollbar({
            suppressScrollX: true
        });
        $('#scrollable-content-history').perfectScrollbar({
            suppressScrollX: true
        });
        $(function () {
            var offset = $(".sideleft.sideleft-fixed").offset();
            var topPadding = 15;
            $('.scrollableContent').scroll(function () {
                if ($('.scrollableContent').scrollTop() > offset.top) {
                    $(".sideleft.sideleft-fixed").stop().animate({
                        top: $('.scrollableContent').scrollTop() - offset.top + topPadding
                    });
                }
                else {
                    $(".sideleft.sideleft-fixed").stop().animate({
                        top: 0
                    });
                }
                ;
            });
        });
        $('.our-instagram-photo').bxSlider({
            pagerCustom: '#our-instagram-photo-thumb'
        });
        $('.scrollableContent').perfectScrollbar({
            suppressScrollX: true
        });
        //
        function heightDetect() {
            $(".section").css("height", $(window).height());
        }
        ;
        heightDetect();
        $(window).resize(function () {
            heightDetect();
        });
    };
    AboutcontactComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'aboutcontact',
            template: __webpack_require__(770),
            styles: [__webpack_require__(718)]
        }), 
        __metadata('design:paramtypes', [])
    ], AboutcontactComponent);
    return AboutcontactComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/aboutcontact.component.js.map

/***/ }),

/***/ 335:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AbouthistoryComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var AbouthistoryComponent = (function () {
    function AbouthistoryComponent() {
    }
    AbouthistoryComponent.prototype.ngOnInit = function () {
        $('#scroll').perfectScrollbar({
            suppressScrollX: true
        });
        $('#scrollable-content-contact').perfectScrollbar({
            suppressScrollX: true
        });
        $('#scrollable-content-history').perfectScrollbar({
            suppressScrollX: true
        });
        $('.scrollableContent').perfectScrollbar({
            suppressScrollX: true
        });
        $(function () {
            var offset = $(".sideleft.sideleft-fixed").offset();
            var topPadding = 15;
            $('.scrollableContent').scroll(function () {
                if ($('.scrollableContent').scrollTop() > offset.top) {
                    $(".sideleft.sideleft-fixed").stop().animate({
                        top: $('.scrollableContent').scrollTop() - offset.top + topPadding
                    });
                }
                else {
                    $(".sideleft.sideleft-fixed").stop().animate({
                        top: 0
                    });
                }
                ;
            });
        });
        //
        $('.our-instagram-photo').bxSlider({
            pagerCustom: '#our-instagram-photo-thumb'
        });
        $('.scrollableContent').perfectScrollbar({
            suppressScrollX: true
        });
        //
        function heightDetect() {
            $(".section").css("height", $(window).height());
        }
        ;
        heightDetect();
        $(window).resize(function () {
            heightDetect();
        });
    };
    AbouthistoryComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'abouthistory',
            template: __webpack_require__(772),
            styles: [__webpack_require__(720)]
        }), 
        __metadata('design:paramtypes', [])
    ], AbouthistoryComponent);
    return AbouthistoryComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/abouthistory.component.js.map

/***/ }),

/***/ 336:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AboutpartnerComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var AboutpartnerComponent = (function () {
    function AboutpartnerComponent() {
    }
    AboutpartnerComponent.prototype.ngOnInit = function () {
        $('#scroll').perfectScrollbar({
            suppressScrollX: true
        });
        $('#scrollable-content-partner').perfectScrollbar({
            suppressScrollX: true
        });
        $('#scrollable-content-contact').perfectScrollbar({
            suppressScrollX: true
        });
        $('#scrollable-content-history').perfectScrollbar({
            suppressScrollX: true
        });
        $(function () {
            var offset = $(".sideleft.sideleft-fixed").offset();
            var topPadding = 15;
            $('.scrollableContent').scroll(function () {
                if ($('.scrollableContent').scrollTop() > offset.top) {
                    $(".sideleft.sideleft-fixed").stop().animate({
                        top: $('.scrollableContent').scrollTop() - offset.top + topPadding
                    });
                }
                else {
                    $(".sideleft.sideleft-fixed").stop().animate({
                        top: 0
                    });
                }
                ;
            });
        });
        $('.our-instagram-photo').bxSlider({
            pagerCustom: '#our-instagram-photo-thumb'
        });
        $('.scrollableContent').perfectScrollbar({
            suppressScrollX: true
        });
        //
        function heightDetect() {
            $(".section").css("height", $(window).height());
        }
        ;
        heightDetect();
        $(window).resize(function () {
            heightDetect();
        });
        $('.carousel').bxSlider({
            mode: 'horizontal',
            slideMargin: 10,
            minSlides: 3
        });
    };
    AboutpartnerComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'aboutpartner',
            template: __webpack_require__(774),
            styles: [__webpack_require__(722)]
        }), 
        __metadata('design:paramtypes', [])
    ], AboutpartnerComponent);
    return AboutpartnerComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/aboutpartner.component.js.map

/***/ }),

/***/ 337:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ArticlesComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ArticlesComponent = (function () {
    function ArticlesComponent() {
    }
    ArticlesComponent.prototype.ngOnInit = function () {
        function heightDetect() {
            $(".section").css("height", $(window).height());
        }
        ;
        heightDetect();
        $(window).resize(function () {
            heightDetect();
        });
        $('.scrollableContent').perfectScrollbar({
            suppressScrollX: true
        });
    };
    ArticlesComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'app-articles',
            template: __webpack_require__(775),
            styles: [__webpack_require__(723)]
        }), 
        __metadata('design:paramtypes', [])
    ], ArticlesComponent);
    return ArticlesComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/articles.component.js.map

/***/ }),

/***/ 338:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return FrendsComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var FrendsComponent = (function () {
    function FrendsComponent() {
    }
    FrendsComponent.prototype.ngOnInit = function () {
        function heightDetect() {
            $(".section").css("height", $(window).height());
        }
        ;
        heightDetect();
        $(window).resize(function () {
            heightDetect();
        });
        $('#scroll').perfectScrollbar({
            suppressScrollX: true
        });
        $('#scroll01').perfectScrollbar({
            suppressScrollX: true
        });
        $('.carousel-partners').bxSlider({
            minSlides: 3,
            moveSlides: 1,
            slideMargin: 10,
            onSliderLoad: function () {
                $('.carousel-partners>div:not(.bx-clone)').eq(1).addClass('active-slide');
            },
            onSlideAfter: function ($slideElement, oldIndex, newIndex) {
                $('.carousel__item').removeClass('active-slide');
                $($slideElement).next().addClass('active-slide');
            }
        });
        $(document).ready(function () {
            $(".toggleMenu").on("click", function (e) {
                $(".slideoutMenu").toggleClass("collapseMenu");
            });
            $('#scroll03').perfectScrollbar({
                suppressScrollX: true
            });
            $('.scrollableContent').perfectScrollbar({
                suppressScrollX: true
            });
        });
    };
    FrendsComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'frends',
            template: __webpack_require__(780),
            styles: [__webpack_require__(728)]
        }), 
        __metadata('design:paramtypes', [])
    ], FrendsComponent);
    return FrendsComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/frends.component.js.map

/***/ }),

/***/ 339:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return IndexComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var IndexComponent = (function () {
    function IndexComponent() {
    }
    IndexComponent.prototype.ngOnInit = function () {
        function heightDetect() {
            $(".section").css("height", $(window).height());
        }
        ;
        heightDetect();
        $(window).resize(function () {
            heightDetect();
        });
        $('#scroll').perfectScrollbar({
            suppressScrollX: true
        });
        $('#mobileScroll01').perfectScrollbar({
            suppressScrollX: true
        });
        $('#scene').parallax();
        $(".select").selectmenu();
        $(".select__nationality").select2();
        $(".radio").checkboxradio();
    };
    IndexComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'index',
            template: __webpack_require__(787),
            styles: [__webpack_require__(735)]
        }), 
        __metadata('design:paramtypes', [])
    ], IndexComponent);
    return IndexComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/index.component.js.map

/***/ }),

/***/ 340:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return OffersComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var OffersComponent = (function () {
    function OffersComponent() {
    }
    OffersComponent.prototype.ngOnInit = function () {
        function heightDetect() {
            $(".section").css("height", $(window).height());
        }
        ;
        heightDetect();
        $(window).resize(function () {
            heightDetect();
        });
        //jqueri in angular2
        $('.scrollableContent').perfectScrollbar({
            suppressScrollX: true
        });
        $(".toggleMenu").on("click", function (e) {
            $(".slideoutMenu").toggleClass("collapseMenu");
            //jqueri in angular2
        });
    };
    OffersComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'app-offers',
            template: __webpack_require__(797),
            styles: [__webpack_require__(745)]
        }), 
        __metadata('design:paramtypes', [])
    ], OffersComponent);
    return OffersComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/offers.component.js.map

/***/ }),

/***/ 341:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ProductComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ProductComponent = (function () {
    function ProductComponent() {
    }
    ProductComponent.prototype.ngOnInit = function () {
        function heightDetect() {
            $(".section").css("height", $(window).height());
        }
        ;
        // 
        $(".select").selectmenu();
        heightDetect();
        $(window).resize(function () {
            heightDetect();
        });
        $(document).ready(function () {
            $(".toggleMenu").on("click", function (e) {
                $(".slideoutMenu").toggleClass("collapseMenu");
            });
            $('#scroll03').perfectScrollbar({
                suppressScrollX: true
            });
            $('.scrollableContent').perfectScrollbar({
                suppressScrollX: true
            });
        });
    };
    ProductComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'app-product',
            template: __webpack_require__(801),
            styles: [__webpack_require__(749)]
        }), 
        __metadata('design:paramtypes', [])
    ], ProductComponent);
    return ProductComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/product.component.js.map

/***/ }),

/***/ 342:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ProgramComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ProgramComponent = (function () {
    function ProgramComponent() {
    }
    ProgramComponent.prototype.ngOnInit = function () {
        function heightDetect() {
            $(".section").css("height", $(window).height());
        }
        ;
        heightDetect();
        $(window).resize(function () {
            heightDetect();
        });
        //
        var $container = $('.program__list');
        $container.masonry({
            itemSelector: '.program__item',
            percentPosition: true,
            gutter: 20
        });
        //
        $(document).ready(function () {
            $('#scroll').perfectScrollbar({
                suppressScrollX: true
            });
        });
        //
        $(document).ready(function () {
            $(".toggleMenu").on("click", function (e) {
                $(".slideoutMenu").toggleClass("collapseMenu");
            });
        });
        //
    };
    ProgramComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'app-program',
            template: __webpack_require__(805),
            styles: [__webpack_require__(753)]
        }), 
        __metadata('design:paramtypes', [])
    ], ProgramComponent);
    return ProgramComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/program.component.js.map

/***/ }),

/***/ 343:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ProgramSchoolchildrenComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ProgramSchoolchildrenComponent = (function () {
    function ProgramSchoolchildrenComponent() {
    }
    ProgramSchoolchildrenComponent.prototype.ngOnInit = function () {
        function heightDetect() {
            $(".section").css("height", $(window).height());
        }
        ;
        heightDetect();
        $(window).resize(function () {
            heightDetect();
        });
        //
        var $container = $('.program__list');
        $container.masonry({
            itemSelector: '.program__item',
            percentPosition: true,
            gutter: 20
        });
        //
        $(document).ready(function () {
            $('#scroll').perfectScrollbar({
                suppressScrollX: true
            });
        });
        //
        $(document).ready(function () {
            $(".toggleMenu").on("click", function (e) {
                $(".slideoutMenu").toggleClass("collapseMenu");
            });
        });
    };
    ProgramSchoolchildrenComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'programschoolchildren',
            template: __webpack_require__(806),
            styles: [__webpack_require__(754)]
        }), 
        __metadata('design:paramtypes', [])
    ], ProgramSchoolchildrenComponent);
    return ProgramSchoolchildrenComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/programschoolchildren.component.js.map

/***/ }),

/***/ 398:
/***/ (function(module, exports) {

function webpackEmptyContext(req) {
	throw new Error("Cannot find module '" + req + "'.");
}
webpackEmptyContext.keys = function() { return []; };
webpackEmptyContext.resolve = webpackEmptyContext;
module.exports = webpackEmptyContext;
webpackEmptyContext.id = 398;


/***/ }),

/***/ 399:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser_dynamic__ = __webpack_require__(500);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__environments_environment__ = __webpack_require__(563);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__app_app_module__ = __webpack_require__(536);




if (__WEBPACK_IMPORTED_MODULE_2__environments_environment__["a" /* environment */].production) {
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_1__angular_core__["a" /* enableProdMode */])();
}
__webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_platform_browser_dynamic__["a" /* platformBrowserDynamic */])().bootstrapModule(__WEBPACK_IMPORTED_MODULE_3__app_app_module__["a" /* AppModule */]);
//# sourceMappingURL=/home/alex/ksetjsontest/src/main.js.map

/***/ }),

/***/ 530:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AboutcontentComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var AboutcontentComponent = (function () {
    function AboutcontentComponent() {
    }
    AboutcontentComponent.prototype.ngOnInit = function () {
        $(".select").selectmenu();
        $(".select__nationality").select2();
        $(".radio").checkboxradio();
        $('#scroll').perfectScrollbar({
            suppressScrollX: true
        });
        $('#mobileScroll01').perfectScrollbar({
            suppressScrollX: true
        });
        $(function () {
            $("#tabs").tabs();
            $('.tabs__content_scroll').perfectScrollbar({
                suppressScrollX: true
            });
        });
    };
    AboutcontentComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'aboutcontent',
            template: __webpack_require__(771),
            styles: [__webpack_require__(719)],
        }), 
        __metadata('design:paramtypes', [])
    ], AboutcontentComponent);
    return AboutcontentComponent;
}());
/*$( function() {
     
$( "#tabs" ).tabs();
  $(".select").selectmenu();
  $(".select__nationality").select2();
  $(".radio").checkboxradio();
$('#scroll').perfectScrollbar({
  suppressScrollX: true
});
$('#mobileScroll01').perfectScrollbar({
  suppressScrollX: true
});
$('.tabs__content_scroll').perfectScrollbar({
      suppressScrollX: true
  });
} );*/
//# sourceMappingURL=/home/alex/ksetjsontest/src/aboutcontent.component.js.map

/***/ }),

/***/ 531:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return Aboutmenu3Component; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var Aboutmenu3Component = (function () {
    function Aboutmenu3Component() {
    }
    Aboutmenu3Component.prototype.ngOnInit = function () {
    };
    Aboutmenu3Component = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'aboutmenu3',
            template: __webpack_require__(773),
            styles: [__webpack_require__(721)]
        }), 
        __metadata('design:paramtypes', [])
    ], Aboutmenu3Component);
    return Aboutmenu3Component;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/aboutmenu3.component.js.map

/***/ }),

/***/ 532:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return Aboutmenu2Component; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var Aboutmenu2Component = (function () {
    function Aboutmenu2Component() {
    }
    Aboutmenu2Component.prototype.ngOnInit = function () {
    };
    Aboutmenu2Component = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'aboutmenu2',
            template: __webpack_require__(776),
            styles: [__webpack_require__(724)]
        }), 
        __metadata('design:paramtypes', [])
    ], Aboutmenu2Component);
    return Aboutmenu2Component;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/aboutmenu2.component.js.map

/***/ }),

/***/ 533:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AboutsocialComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var AboutsocialComponent = (function () {
    function AboutsocialComponent() {
    }
    AboutsocialComponent.prototype.ngOnInit = function () {
    };
    AboutsocialComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'aboutsocial',
            template: __webpack_require__(777),
            styles: [__webpack_require__(725)]
        }), 
        __metadata('design:paramtypes', [])
    ], AboutsocialComponent);
    return AboutsocialComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/aboutsocial.component.js.map

/***/ }),

/***/ 534:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return TopAboutComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var TopAboutComponent = (function () {
    function TopAboutComponent() {
    }
    TopAboutComponent.prototype.ngOnInit = function () {
    };
    TopAboutComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'topabout',
            template: __webpack_require__(778),
            styles: [__webpack_require__(726)]
        }), 
        __metadata('design:paramtypes', [])
    ], TopAboutComponent);
    return TopAboutComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/topabout.component.js.map

/***/ }),

/***/ 535:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AppComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var AppComponent = (function () {
    function AppComponent() {
    }
    AppComponent.prototype.ngOnInit = function () {
    };
    AppComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'app-root',
            template: "<router-outlet></router-outlet>",
        }), 
        __metadata('design:paramtypes', [])
    ], AppComponent);
    return AppComponent;
}());
/*
   constructor(router: Router) {
       router.events.subscribe((url:any) => console.log(url));
      //console.log(router.url);
 }*/ 
//# sourceMappingURL=/home/alex/ksetjsontest/src/app.component.js.map

/***/ }),

/***/ 536:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser__ = __webpack_require__(149);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__angular_forms__ = __webpack_require__(491);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__angular_http__ = __webpack_require__(309);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__app_router__ = __webpack_require__(537);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__app_component__ = __webpack_require__(535);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__services_city_component__ = __webpack_require__(560);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__menu_menu_component__ = __webpack_require__(553);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__index_index_component__ = __webpack_require__(339);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__index_top_top_component__ = __webpack_require__(551);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_10__about_about_component__ = __webpack_require__(333);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11__about_topabout_topabout_component__ = __webpack_require__(534);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_12__product_product_component__ = __webpack_require__(341);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_13__frends_frends_component__ = __webpack_require__(338);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_14__frends_topfrends_topfrends_component__ = __webpack_require__(541);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_15__index_birds_birds_component__ = __webpack_require__(542);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_16__index_indexmenu2_indexmenu2_component__ = __webpack_require__(547);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_17__index_socialindex_socialindex_component__ = __webpack_require__(548);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_18__index_indexcontent1_indexcontent1_component__ = __webpack_require__(545);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_19__index_indexcontent2_indexcontent2_component__ = __webpack_require__(546);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_20__logo_logo_component__ = __webpack_require__(552);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_21__about_aboutmenu2_aboutmenu2_component__ = __webpack_require__(532);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_22__about_aboutsocial_aboutsocial_component__ = __webpack_require__(533);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_23__about_aboutcontent_aboutcontent_component__ = __webpack_require__(530);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_24__product_productmenu2_productmenu2_component__ = __webpack_require__(558);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_25__product_productsocial_productsocial_component__ = __webpack_require__(559);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_26__product_productcontent_productcontent_component__ = __webpack_require__(557);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_27__frends_frendsmenu2_frendsmenu2_component__ = __webpack_require__(539);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_28__frends_frendsocial_frendsocial_component__ = __webpack_require__(540);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_29__frends_frendcontent_frendcontent_component__ = __webpack_require__(538);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_30__offers_offers_component__ = __webpack_require__(340);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_31__offers_offerssocial_offerssocial_component__ = __webpack_require__(555);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_32__offers_offerscontent_offerscontent_component__ = __webpack_require__(554);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_33__program_program_component__ = __webpack_require__(342);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_34__podpiska_podpiska_component__ = __webpack_require__(556);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_35__index_bonusforpartners_bonusforpartners_component__ = __webpack_require__(543);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_36__index_top_forma_forma_component__ = __webpack_require__(550);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_37__index_top_authorization_authorization_component__ = __webpack_require__(549);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_38__index_bonusforpartners_contactmanager_contactmanager_component__ = __webpack_require__(544);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_39__about_aboutcontent_abouthistory_abouthistory_component__ = __webpack_require__(335);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_40__about_aboutcontent_aboutcontact_aboutcontact_component__ = __webpack_require__(334);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_41__about_aboutcontent_aboutpartner_aboutpartner_component__ = __webpack_require__(336);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_42__about_aboutcontent_aboutmenu3_aboutmenu3_component__ = __webpack_require__(531);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_43__about_aboutcontent_articles_articles_component__ = __webpack_require__(337);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_44__programschoolchildren_programschoolchildren_component__ = __webpack_require__(343);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AppModule; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};













































var AppModule = (function () {
    function AppModule() {
    }
    AppModule = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_1__angular_core__["b" /* NgModule */])({
            declarations: [
                __WEBPACK_IMPORTED_MODULE_5__app_component__["a" /* AppComponent */],
                __WEBPACK_IMPORTED_MODULE_6__services_city_component__["a" /* CityComponent */],
                __WEBPACK_IMPORTED_MODULE_7__menu_menu_component__["a" /* MenuComponent */],
                __WEBPACK_IMPORTED_MODULE_8__index_index_component__["a" /* IndexComponent */],
                __WEBPACK_IMPORTED_MODULE_9__index_top_top_component__["a" /* TopComponent */],
                __WEBPACK_IMPORTED_MODULE_10__about_about_component__["a" /* AboutComponent */],
                __WEBPACK_IMPORTED_MODULE_11__about_topabout_topabout_component__["a" /* TopAboutComponent */],
                __WEBPACK_IMPORTED_MODULE_12__product_product_component__["a" /* ProductComponent */],
                __WEBPACK_IMPORTED_MODULE_13__frends_frends_component__["a" /* FrendsComponent */],
                __WEBPACK_IMPORTED_MODULE_14__frends_topfrends_topfrends_component__["a" /* TopFrendsComponent */],
                __WEBPACK_IMPORTED_MODULE_15__index_birds_birds_component__["a" /* BirdsComponent */],
                __WEBPACK_IMPORTED_MODULE_16__index_indexmenu2_indexmenu2_component__["a" /* Indexmenu2Component */],
                __WEBPACK_IMPORTED_MODULE_17__index_socialindex_socialindex_component__["a" /* SocialindexComponent */],
                __WEBPACK_IMPORTED_MODULE_18__index_indexcontent1_indexcontent1_component__["a" /* Indexcontent1Component */],
                __WEBPACK_IMPORTED_MODULE_19__index_indexcontent2_indexcontent2_component__["a" /* Indexcontent2Component */],
                __WEBPACK_IMPORTED_MODULE_20__logo_logo_component__["a" /* LogoComponent */],
                __WEBPACK_IMPORTED_MODULE_21__about_aboutmenu2_aboutmenu2_component__["a" /* Aboutmenu2Component */],
                __WEBPACK_IMPORTED_MODULE_22__about_aboutsocial_aboutsocial_component__["a" /* AboutsocialComponent */],
                __WEBPACK_IMPORTED_MODULE_23__about_aboutcontent_aboutcontent_component__["a" /* AboutcontentComponent */],
                __WEBPACK_IMPORTED_MODULE_24__product_productmenu2_productmenu2_component__["a" /* Productmenu2Component */],
                __WEBPACK_IMPORTED_MODULE_25__product_productsocial_productsocial_component__["a" /* ProductsocialComponent */],
                __WEBPACK_IMPORTED_MODULE_26__product_productcontent_productcontent_component__["a" /* ProductcontentComponent */],
                __WEBPACK_IMPORTED_MODULE_27__frends_frendsmenu2_frendsmenu2_component__["a" /* Frendsmenu2Component */],
                __WEBPACK_IMPORTED_MODULE_28__frends_frendsocial_frendsocial_component__["a" /* FrendsocialComponent */],
                __WEBPACK_IMPORTED_MODULE_29__frends_frendcontent_frendcontent_component__["a" /* FrendcontentComponent */],
                __WEBPACK_IMPORTED_MODULE_30__offers_offers_component__["a" /* OffersComponent */],
                __WEBPACK_IMPORTED_MODULE_31__offers_offerssocial_offerssocial_component__["a" /* OfferssocialComponent */],
                __WEBPACK_IMPORTED_MODULE_32__offers_offerscontent_offerscontent_component__["a" /* OfferscontentComponent */],
                __WEBPACK_IMPORTED_MODULE_33__program_program_component__["a" /* ProgramComponent */],
                __WEBPACK_IMPORTED_MODULE_34__podpiska_podpiska_component__["a" /* PodpiskaComponent */],
                __WEBPACK_IMPORTED_MODULE_35__index_bonusforpartners_bonusforpartners_component__["a" /* BonusforpartnersComponent */],
                __WEBPACK_IMPORTED_MODULE_36__index_top_forma_forma_component__["a" /* FormaComponent */],
                __WEBPACK_IMPORTED_MODULE_37__index_top_authorization_authorization_component__["a" /* AuthorizationComponent */],
                __WEBPACK_IMPORTED_MODULE_38__index_bonusforpartners_contactmanager_contactmanager_component__["a" /* ContactmanagerComponent */],
                __WEBPACK_IMPORTED_MODULE_39__about_aboutcontent_abouthistory_abouthistory_component__["a" /* AbouthistoryComponent */],
                __WEBPACK_IMPORTED_MODULE_40__about_aboutcontent_aboutcontact_aboutcontact_component__["a" /* AboutcontactComponent */],
                __WEBPACK_IMPORTED_MODULE_41__about_aboutcontent_aboutpartner_aboutpartner_component__["a" /* AboutpartnerComponent */],
                __WEBPACK_IMPORTED_MODULE_42__about_aboutcontent_aboutmenu3_aboutmenu3_component__["a" /* Aboutmenu3Component */],
                __WEBPACK_IMPORTED_MODULE_43__about_aboutcontent_articles_articles_component__["a" /* ArticlesComponent */],
                __WEBPACK_IMPORTED_MODULE_44__programschoolchildren_programschoolchildren_component__["a" /* ProgramSchoolchildrenComponent */],
            ],
            imports: [
                __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser__["a" /* BrowserModule */],
                __WEBPACK_IMPORTED_MODULE_2__angular_forms__["a" /* FormsModule */],
                __WEBPACK_IMPORTED_MODULE_3__angular_http__["a" /* HttpModule */],
                __WEBPACK_IMPORTED_MODULE_4__app_router__["a" /* routes */],
            ],
            providers: [],
            bootstrap: [__WEBPACK_IMPORTED_MODULE_5__app_component__["a" /* AppComponent */]],
        }), 
        __metadata('design:paramtypes', [])
    ], AppModule);
    return AppModule;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/app.module.js.map

/***/ }),

/***/ 537:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_router__ = __webpack_require__(327);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__index_index_component__ = __webpack_require__(339);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__about_about_component__ = __webpack_require__(333);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__product_product_component__ = __webpack_require__(341);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__frends_frends_component__ = __webpack_require__(338);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__offers_offers_component__ = __webpack_require__(340);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__program_program_component__ = __webpack_require__(342);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__about_aboutcontent_abouthistory_abouthistory_component__ = __webpack_require__(335);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__about_aboutcontent_aboutcontact_aboutcontact_component__ = __webpack_require__(334);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__about_aboutcontent_aboutpartner_aboutpartner_component__ = __webpack_require__(336);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_10__about_aboutcontent_articles_articles_component__ = __webpack_require__(337);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11__programschoolchildren_programschoolchildren_component__ = __webpack_require__(343);
/* unused harmony export router */
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return routes; });












var router = [
    { path: '', redirectTo: 'index', pathMatch: 'full' },
    { path: 'index', component: __WEBPACK_IMPORTED_MODULE_1__index_index_component__["a" /* IndexComponent */] },
    { path: 'about', component: __WEBPACK_IMPORTED_MODULE_2__about_about_component__["a" /* AboutComponent */] },
    { path: 'product', component: __WEBPACK_IMPORTED_MODULE_3__product_product_component__["a" /* ProductComponent */] },
    { path: 'frends', component: __WEBPACK_IMPORTED_MODULE_4__frends_frends_component__["a" /* FrendsComponent */] },
    { path: 'offers', component: __WEBPACK_IMPORTED_MODULE_5__offers_offers_component__["a" /* OffersComponent */] },
    { path: 'program', component: __WEBPACK_IMPORTED_MODULE_6__program_program_component__["a" /* ProgramComponent */] },
    { path: 'abouthistory', component: __WEBPACK_IMPORTED_MODULE_7__about_aboutcontent_abouthistory_abouthistory_component__["a" /* AbouthistoryComponent */] },
    { path: 'aboutcontact', component: __WEBPACK_IMPORTED_MODULE_8__about_aboutcontent_aboutcontact_aboutcontact_component__["a" /* AboutcontactComponent */] },
    { path: 'aboutpartner', component: __WEBPACK_IMPORTED_MODULE_9__about_aboutcontent_aboutpartner_aboutpartner_component__["a" /* AboutpartnerComponent */] },
    { path: 'articles', component: __WEBPACK_IMPORTED_MODULE_10__about_aboutcontent_articles_articles_component__["a" /* ArticlesComponent */] },
    { path: 'programschoolchildren', component: __WEBPACK_IMPORTED_MODULE_11__programschoolchildren_programschoolchildren_component__["a" /* ProgramSchoolchildrenComponent */] },
];
var routes = __WEBPACK_IMPORTED_MODULE_0__angular_router__["a" /* RouterModule */].forRoot(router);
/*import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { IndexComponent } from './index/index.component';
import { AboutComponent } from './about/about.component';
import { ProductComponent } from './product/product.component';
import { FrendsComponent } from './frends/frends.component';
const routes: Routes = [
    {path: '', redirectTo: 'index', pathMatch: 'full'},
    {path: 'index', component: IndexComponent},
    {path: 'about', component: AboutComponent},
    {path: 'product', component: ProductComponent},
    {path: 'frends', component: FrendsComponent},
];

@NgModule({
    imports: [RouterModule.forRoot(routes)],
    exports: [RouterModule],
    providers: []
})

export class RoutingModule {}*/ 
//# sourceMappingURL=/home/alex/ksetjsontest/src/app.router.js.map

/***/ }),

/***/ 538:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return FrendcontentComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var FrendcontentComponent = (function () {
    function FrendcontentComponent() {
    }
    FrendcontentComponent.prototype.ngOnInit = function () {
    };
    FrendcontentComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'frendcontent',
            template: __webpack_require__(779),
            styles: [__webpack_require__(727)]
        }), 
        __metadata('design:paramtypes', [])
    ], FrendcontentComponent);
    return FrendcontentComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/frendcontent.component.js.map

/***/ }),

/***/ 539:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return Frendsmenu2Component; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var Frendsmenu2Component = (function () {
    function Frendsmenu2Component() {
    }
    Frendsmenu2Component.prototype.ngOnInit = function () {
    };
    Frendsmenu2Component = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'frendsmenu2',
            template: __webpack_require__(781),
            styles: [__webpack_require__(729)]
        }), 
        __metadata('design:paramtypes', [])
    ], Frendsmenu2Component);
    return Frendsmenu2Component;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/frendsmenu2.component.js.map

/***/ }),

/***/ 540:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return FrendsocialComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var FrendsocialComponent = (function () {
    function FrendsocialComponent() {
    }
    FrendsocialComponent.prototype.ngOnInit = function () {
    };
    FrendsocialComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'frendsocial',
            template: __webpack_require__(782),
            styles: [__webpack_require__(730)]
        }), 
        __metadata('design:paramtypes', [])
    ], FrendsocialComponent);
    return FrendsocialComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/frendsocial.component.js.map

/***/ }),

/***/ 541:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return TopFrendsComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var TopFrendsComponent = (function () {
    function TopFrendsComponent() {
    }
    TopFrendsComponent.prototype.ngOnInit = function () {
    };
    TopFrendsComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'topfrends',
            template: __webpack_require__(783),
            styles: [__webpack_require__(731)]
        }), 
        __metadata('design:paramtypes', [])
    ], TopFrendsComponent);
    return TopFrendsComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/topfrends.component.js.map

/***/ }),

/***/ 542:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return BirdsComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var BirdsComponent = (function () {
    function BirdsComponent() {
    }
    BirdsComponent.prototype.ngOnInit = function () {
    };
    BirdsComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'birds',
            template: __webpack_require__(784),
            styles: [__webpack_require__(732)]
        }), 
        __metadata('design:paramtypes', [])
    ], BirdsComponent);
    return BirdsComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/birds.component.js.map

/***/ }),

/***/ 543:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return BonusforpartnersComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var BonusforpartnersComponent = (function () {
    function BonusforpartnersComponent() {
    }
    BonusforpartnersComponent.prototype.ngOnInit = function () {
        $('#scroll__horizontal').perfectScrollbar({
            suppressScrollY: true
        });
        $(".toggle-modal-bonuses").on("click", function (e) {
            $("body").toggleClass("open-modal-bonuses");
        });
        $("#bonuses").animatedModal({
            modalTarget: 'bonusesModal',
            animatedIn: 'fadeInUpBig',
            animatedOut: 'fadeOutDownBig',
            animationDuration: '1s'
        });
        $("#bonuses01").animatedModal({
            beforeOpen: function () {
                $('.toggleMenu').trigger('click');
            },
            modalTarget: 'bonusesModal',
            animatedIn: 'fadeInUpBig',
            animatedOut: 'fadeOutDownBig',
            animationDuration: '1s'
        });
        $("#contact-manager").animatedModal({
            beforeOpen: function () {
                $('.close-bonusesModal').trigger('click');
            },
            modalTarget: 'managerModal',
            animatedIn: 'fadeInUpBig',
            animatedOut: 'fadeOutDownBig',
            animationDuration: '1s'
        });
        /*$(".toggle-modal-manager").on("click", function(e){
              $("body").toggleClass("open-modal-manager");
          });
        $("#contact-manager02").animatedModal({
              beforeOpen: function(){
               $('.close-bonusesModal').trigger('click');
              },
              modalTarget:'managerModal',
              animatedIn:'fadeInUpBig',
              animatedOut:'fadeOutDownBig',
              animationDuration:'1s'
          });
          $("#contact-manager03").animatedModal({
              beforeOpen: function(){
               $('.close-bonusesModal').trigger('click');
              },
              modalTarget:'managerModal',
              animatedIn:'fadeInUpBig',
              animatedOut:'fadeOutDownBig',
              animationDuration:'1s'
          });
          $("#contact-manager03").animatedModal({
              beforeOpen: function(){
               $('.close-bonusesModal').trigger('click');
              },
              modalTarget:'managerModal',
              animatedIn:'fadeInUpBig',
              animatedOut:'fadeOutDownBig',
              animationDuration:'1s'
          });
          $("#contact-manager04").animatedModal({
              beforeOpen: function(){
               $('.close-bonusesModal').trigger('click');
              },
              modalTarget:'managerModal',
              animatedIn:'fadeInUpBig',
              animatedOut:'fadeOutDownBig',
              animationDuration:'1s'
          });
          $("#contact-manager05").animatedModal({
              modalTarget: 'managerModal',
              animatedIn:'fadeInUpBig',
              animatedOut:'fadeOutDownBig',
              animationDuration:'1s'
          });*/
    };
    BonusforpartnersComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'bonusforpartners',
            template: __webpack_require__(785),
            styles: [__webpack_require__(733)]
        }), 
        __metadata('design:paramtypes', [])
    ], BonusforpartnersComponent);
    return BonusforpartnersComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/bonusforpartners.component.js.map

/***/ }),

/***/ 544:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ContactmanagerComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ContactmanagerComponent = (function () {
    function ContactmanagerComponent() {
    }
    ContactmanagerComponent.prototype.ngOnInit = function () {
        $(".toggle-modal-manager").on("click", function (e) {
            $("body").toggleClass("open-modal-manager");
        });
        $("#contact-manager02").animatedModal({
            beforeOpen: function () {
                $('.close-bonusesModal').trigger('click');
            },
            modalTarget: 'managerModal',
            animatedIn: 'fadeInUpBig',
            animatedOut: 'fadeOutDownBig',
            animationDuration: '1s'
        });
        $("#contact-manager03").animatedModal({
            beforeOpen: function () {
                $('.close-bonusesModal').trigger('click');
            },
            modalTarget: 'managerModal',
            animatedIn: 'fadeInUpBig',
            animatedOut: 'fadeOutDownBig',
            animationDuration: '1s'
        });
        $("#contact-manager03").animatedModal({
            beforeOpen: function () {
                $('.close-bonusesModal').trigger('click');
            },
            modalTarget: 'managerModal',
            animatedIn: 'fadeInUpBig',
            animatedOut: 'fadeOutDownBig',
            animationDuration: '1s'
        });
        $("#contact-manager04").animatedModal({
            beforeOpen: function () {
                $('.close-bonusesModal').trigger('click');
            },
            modalTarget: 'managerModal',
            animatedIn: 'fadeInUpBig',
            animatedOut: 'fadeOutDownBig',
            animationDuration: '1s'
        });
        $("#contact-manager05").animatedModal({
            modalTarget: 'managerModal',
            animatedIn: 'fadeInUpBig',
            animatedOut: 'fadeOutDownBig',
            animationDuration: '1s'
        });
    };
    ContactmanagerComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'contactmanager',
            template: __webpack_require__(786),
            styles: [__webpack_require__(734)]
        }), 
        __metadata('design:paramtypes', [])
    ], ContactmanagerComponent);
    return ContactmanagerComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/contactmanager.component.js.map

/***/ }),

/***/ 545:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return Indexcontent1Component; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var Indexcontent1Component = (function () {
    function Indexcontent1Component() {
    }
    Indexcontent1Component.prototype.ngOnInit = function () {
    };
    Indexcontent1Component = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'indexcontent1',
            template: __webpack_require__(788),
            styles: [__webpack_require__(736)]
        }), 
        __metadata('design:paramtypes', [])
    ], Indexcontent1Component);
    return Indexcontent1Component;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/indexcontent1.component.js.map

/***/ }),

/***/ 546:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return Indexcontent2Component; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var Indexcontent2Component = (function () {
    function Indexcontent2Component() {
    }
    Indexcontent2Component.prototype.ngOnInit = function () {
    };
    Indexcontent2Component = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'indexcontent2',
            template: __webpack_require__(789),
            styles: [__webpack_require__(737)]
        }), 
        __metadata('design:paramtypes', [])
    ], Indexcontent2Component);
    return Indexcontent2Component;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/indexcontent2.component.js.map

/***/ }),

/***/ 547:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return Indexmenu2Component; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var Indexmenu2Component = (function () {
    function Indexmenu2Component() {
    }
    Indexmenu2Component.prototype.ngOnInit = function () {
    };
    Indexmenu2Component = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'indexmenu2',
            template: __webpack_require__(790),
            styles: [__webpack_require__(738)]
        }), 
        __metadata('design:paramtypes', [])
    ], Indexmenu2Component);
    return Indexmenu2Component;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/indexmenu2.component.js.map

/***/ }),

/***/ 548:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return SocialindexComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var SocialindexComponent = (function () {
    function SocialindexComponent() {
    }
    SocialindexComponent.prototype.ngOnInit = function () {
    };
    SocialindexComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'socialindex',
            template: __webpack_require__(791),
            styles: [__webpack_require__(739)]
        }), 
        __metadata('design:paramtypes', [])
    ], SocialindexComponent);
    return SocialindexComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/socialindex.component.js.map

/***/ }),

/***/ 549:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AuthorizationComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var AuthorizationComponent = (function () {
    function AuthorizationComponent() {
    }
    AuthorizationComponent.prototype.ngOnInit = function () {
        $(".toggle-modal-authorization").on("click", function (e) {
            $("body").toggleClass("open-modal-authorization");
        });
        $("#authorization").animatedModal({
            modalTarget: 'authorizationModal',
            animatedIn: 'fadeInUpBig',
            animatedOut: 'fadeOutDownBig',
            animationDuration: '1s'
        });
        $("#remember-me").checkboxradio();
    };
    AuthorizationComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'authorization',
            template: __webpack_require__(792),
            styles: [__webpack_require__(740)]
        }), 
        __metadata('design:paramtypes', [])
    ], AuthorizationComponent);
    return AuthorizationComponent;
}());
//
//# sourceMappingURL=/home/alex/ksetjsontest/src/authorization.component.js.map

/***/ }),

/***/ 550:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return FormaComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var FormaComponent = (function () {
    function FormaComponent() {
    }
    FormaComponent.prototype.ngOnInit = function () {
        $('#scroll__horizontal').perfectScrollbar({
            suppressScrollY: true
        });
        $(".toggle-modal-request").on("click", function (e) {
            $("body").toggleClass("open-modal-request");
        });
        $("#request").animatedModal({
            modalTarget: 'requestModal',
            animatedIn: 'fadeInUpBig',
            animatedOut: 'fadeOutDownBig',
            animationDuration: '1s'
        });
        $("#request01").animatedModal({
            modalTarget: 'requestModal',
            animatedIn: 'fadeInUpBig',
            animatedOut: 'fadeOutDownBig',
            animationDuration: '1s'
        });
    };
    FormaComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'forma',
            template: __webpack_require__(793),
            styles: [__webpack_require__(741)]
        }), 
        __metadata('design:paramtypes', [])
    ], FormaComponent);
    return FormaComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/forma.component.js.map

/***/ }),

/***/ 551:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return TopComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var TopComponent = (function () {
    function TopComponent() {
    }
    TopComponent.prototype.ngOnInit = function () {
    };
    TopComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'top',
            template: __webpack_require__(794),
            styles: [__webpack_require__(742)]
        }), 
        __metadata('design:paramtypes', [])
    ], TopComponent);
    return TopComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/top.component.js.map

/***/ }),

/***/ 552:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return LogoComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var LogoComponent = (function () {
    function LogoComponent() {
    }
    LogoComponent.prototype.ngOnInit = function () {
    };
    LogoComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'logo',
            template: __webpack_require__(795),
            styles: [__webpack_require__(743)]
        }), 
        __metadata('design:paramtypes', [])
    ], LogoComponent);
    return LogoComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/logo.component.js.map

/***/ }),

/***/ 553:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return MenuComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var MenuComponent = (function () {
    function MenuComponent() {
    }
    MenuComponent.prototype.ngOnInit = function () {
    };
    MenuComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'mainmenu',
            template: __webpack_require__(796),
            styles: [__webpack_require__(744)]
        }), 
        __metadata('design:paramtypes', [])
    ], MenuComponent);
    return MenuComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/menu.component.js.map

/***/ }),

/***/ 554:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return OfferscontentComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var OfferscontentComponent = (function () {
    function OfferscontentComponent() {
    }
    OfferscontentComponent.prototype.ngOnInit = function () {
    };
    OfferscontentComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'offerscontent',
            template: __webpack_require__(798),
            styles: [__webpack_require__(746)]
        }), 
        __metadata('design:paramtypes', [])
    ], OfferscontentComponent);
    return OfferscontentComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/offerscontent.component.js.map

/***/ }),

/***/ 555:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return OfferssocialComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var OfferssocialComponent = (function () {
    function OfferssocialComponent() {
    }
    OfferssocialComponent.prototype.ngOnInit = function () {
    };
    OfferssocialComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'offerssocial',
            template: __webpack_require__(799),
            styles: [__webpack_require__(747)]
        }), 
        __metadata('design:paramtypes', [])
    ], OfferssocialComponent);
    return OfferssocialComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/offerssocial.component.js.map

/***/ }),

/***/ 556:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return PodpiskaComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var PodpiskaComponent = (function () {
    function PodpiskaComponent() {
    }
    PodpiskaComponent.prototype.ngOnInit = function () {
        $(".toggle-modal-subscription").on("click", function (e) {
            $("body").toggleClass("open-modal-subscription");
        });
        $("#subscription").animatedModal({
            modalTarget: 'subscriptionModal',
            animatedIn: 'fadeInUpBig',
            animatedOut: 'fadeOutDownBig',
            animationDuration: '1s'
        });
        $("#subscription02").animatedModal({
            beforeOpen: function () {
                $('.close-newsModal').trigger('click');
            },
            modalTarget: 'subscriptionModal',
            animatedIn: 'fadeInUpBig',
            animatedOut: 'fadeOutDownBig',
            animationDuration: '1s'
        });
    };
    PodpiskaComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'podpiska',
            template: __webpack_require__(800),
            styles: [__webpack_require__(748)]
        }), 
        __metadata('design:paramtypes', [])
    ], PodpiskaComponent);
    return PodpiskaComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/podpiska.component.js.map

/***/ }),

/***/ 557:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ProductcontentComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ProductcontentComponent = (function () {
    function ProductcontentComponent() {
    }
    ProductcontentComponent.prototype.ngOnInit = function () {
    };
    ProductcontentComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'productcontent',
            template: __webpack_require__(802),
            styles: [__webpack_require__(750)]
        }), 
        __metadata('design:paramtypes', [])
    ], ProductcontentComponent);
    return ProductcontentComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/productcontent.component.js.map

/***/ }),

/***/ 558:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return Productmenu2Component; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var Productmenu2Component = (function () {
    function Productmenu2Component() {
    }
    Productmenu2Component.prototype.ngOnInit = function () {
    };
    Productmenu2Component = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'productmenu2',
            template: __webpack_require__(803),
            styles: [__webpack_require__(751)]
        }), 
        __metadata('design:paramtypes', [])
    ], Productmenu2Component);
    return Productmenu2Component;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/productmenu2.component.js.map

/***/ }),

/***/ 559:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ProductsocialComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ProductsocialComponent = (function () {
    function ProductsocialComponent() {
    }
    ProductsocialComponent.prototype.ngOnInit = function () {
    };
    ProductsocialComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'productsocial',
            template: __webpack_require__(804),
            styles: [__webpack_require__(752)]
        }), 
        __metadata('design:paramtypes', [])
    ], ProductsocialComponent);
    return ProductsocialComponent;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/productsocial.component.js.map

/***/ }),

/***/ 560:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__city_service__ = __webpack_require__(561);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return CityComponent; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var CityComponent = (function () {
    function CityComponent(cityService) {
        var _this = this;
        this.cityService = cityService;
        this.cityService.getAll().subscribe(function (items) {
            console.log('City reaponce');
            console.log(items);
            _this.content = items['content'];
        });
    }
    CityComponent = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_5" /* Component */])({
            selector: 'city',
            template: "{{content}}",
            providers: [__WEBPACK_IMPORTED_MODULE_1__city_service__["a" /* CityService */],],
        }), 
        __metadata('design:paramtypes', [(typeof (_a = typeof __WEBPACK_IMPORTED_MODULE_1__city_service__["a" /* CityService */] !== 'undefined' && __WEBPACK_IMPORTED_MODULE_1__city_service__["a" /* CityService */]) === 'function' && _a) || Object])
    ], CityComponent);
    return CityComponent;
    var _a;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/city.component.js.map

/***/ }),

/***/ 561:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_http__ = __webpack_require__(309);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__angular_router__ = __webpack_require__(327);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__rxjs_operators__ = __webpack_require__(562);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return CityService; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};




var CityService = (function () {
    function CityService(http, router) {
        this.http = http;
        this.router = router;
        this._citiesUrl = '/admin/content-api/get?slug=';
    }
    CityService.prototype.getAll = function () {
        var slug = this.router.url;
        slug = slug.substr(1);
        this._citiesUrl += slug;
        console.log(this._citiesUrl);
        console.info(slug);
        //var res = this.http.get(this._citiesUrl).map((res: Response) => res.json());
        return this.http.get(this._citiesUrl).map(function (res) {
            /*console.log(res.json());*/
            console.log(res);
            return res.json();
        });
    };
    CityService = __decorate([
        __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["B" /* Injectable */])(), 
        __metadata('design:paramtypes', [(typeof (_a = typeof __WEBPACK_IMPORTED_MODULE_1__angular_http__["b" /* Http */] !== 'undefined' && __WEBPACK_IMPORTED_MODULE_1__angular_http__["b" /* Http */]) === 'function' && _a) || Object, (typeof (_b = typeof __WEBPACK_IMPORTED_MODULE_2__angular_router__["b" /* Router */] !== 'undefined' && __WEBPACK_IMPORTED_MODULE_2__angular_router__["b" /* Router */]) === 'function' && _b) || Object])
    ], CityService);
    return CityService;
    var _a, _b;
}());
//# sourceMappingURL=/home/alex/ksetjsontest/src/city.service.js.map

/***/ }),

/***/ 562:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_rxjs_add_observable_throw__ = __webpack_require__(811);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_rxjs_add_observable_throw___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_rxjs_add_observable_throw__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_rxjs_add_operator_catch__ = __webpack_require__(812);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_rxjs_add_operator_catch___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_rxjs_add_operator_catch__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_rxjs_add_operator_debounceTime__ = __webpack_require__(813);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_rxjs_add_operator_debounceTime___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2_rxjs_add_operator_debounceTime__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_rxjs_add_operator_distinctUntilChanged__ = __webpack_require__(814);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_rxjs_add_operator_distinctUntilChanged___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3_rxjs_add_operator_distinctUntilChanged__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4_rxjs_add_operator_map__ = __webpack_require__(815);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4_rxjs_add_operator_map___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_4_rxjs_add_operator_map__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5_rxjs_add_operator_switchMap__ = __webpack_require__(816);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5_rxjs_add_operator_switchMap___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_5_rxjs_add_operator_switchMap__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6_rxjs_add_operator_toPromise__ = __webpack_require__(817);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6_rxjs_add_operator_toPromise___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_6_rxjs_add_operator_toPromise__);
// import 'rxjs/Rx'; // adds ALL RxJS statics & operators to Observable







//# sourceMappingURL=/home/alex/ksetjsontest/src/rxjs-operators.js.map

/***/ }),

/***/ 563:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return environment; });
// The file contents for the current environment will overwrite these during build.
// The build system defaults to the dev environment which uses `environment.ts`, but if you do
// `ng build --env=prod` then `environment.prod.ts` will be used instead.
// The list of which env maps to which file can be found in `angular-cli.json`.
var environment = {
    production: false
};
//# sourceMappingURL=/home/alex/ksetjsontest/src/environment.js.map

/***/ }),

/***/ 717:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 718:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 719:
/***/ (function(module, exports) {

module.exports = "#md-tab-label{\r\n    width: 10px;\r\n\theight: 10px;\r\n\tbackground: red;\r\n\tborder-radius: 50px;\r\n}"

/***/ }),

/***/ 720:
/***/ (function(module, exports) {

module.exports = "\t\t\t\t\t\t\t\t\t.bx-wrapper{\n\t\t\t\t\t\t\t\t\t\tbox-shadow: none;\n\t\t\t\t\t\t\t\t\t\tborder: 0;\n\t\t\t\t\t\t\t\t\t\tbackground-color: transparent;\n\t\t\t\t\t\t\t\t\t\tmargin: 55px auto 0;\n\t\t\t\t\t\t\t\t\t\ttext-align: center\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-pager{\n\t\t\t\t\t\t\t\t\t\tpadding-top: 0;\n\t\t\t\t\t\t\t\t\t\tdisplay: none;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.carousel__item{\n\t\t\t\t\t\t\t\t\t\twidth: 275px !important;\n\t\t\t\t\t\t\t\t\t\t/*float: none;*/\n\t\t\t\t\t\t\t\t\t\theight: 195px;\n\t\t\t\t\t\t\t\t\t\tmargin-right: 15px !important;\n\t\t\t\t\t\t\t\t\t\t/*display: inline-block;*/\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.carousel__item img{\n\t\t\t\t\t\t\t\t\t\tposition: relative;\n\t\t\t\t\t\t\t\t\t\tmin-height: 100%;\n\t\t\t\t\t\t\t\t\t\tmin-width: 100%;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.carousel__item{\n\t\t\t\t\t\t\t\t\t\tdisplay: block;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a{\n\t\t\t\t\t\t\t\t\t\ttop: 0;\n\t\t\t\t\t\t\t\t\t\tmargin-top: 0;\n\t\t\t\t\t\t\t\t\t\theight: 100%;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-prev{\n\t\t\t\t\t\t\t\t\t\tleft: -2px;\n\t\t\t\t\t\t\t\t\t\tbackground: #27318b url(\"images/carousel-prev-yellow.png\") no-repeat center center;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-next{\n\t\t\t\t\t\t\t\t\t\tright: -2px;\n\t\t\t\t\t\t\t\t\t\tbackground: #27318b url(\"images/carousel-next-yellow.png\") no-repeat center center;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.fancybox-overlay{\n\t\t\t\t\t\t\t\t\t\tz-index: 99998 !important;\n\t\t\t\t\t\t\t\t\t\toverflow: hidden !important;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.fancybox-opened{\n\t\t\t\t\t\t\t\t\t\tz-index: 99999 !important;\n\t\t\t\t\t\t\t\t\t}"

/***/ }),

/***/ 721:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 722:
/***/ (function(module, exports) {

module.exports = "\t\t\t\t\t.bx-wrapper{\n\t\t\t\t\t\t\t\t\t\tbox-shadow: none;\n\t\t\t\t\t\t\t\t\t\tborder: 0;\n\t\t\t\t\t\t\t\t\t\tbackground-color: transparent;\n\t\t\t\t\t\t\t\t\t\tmargin: 55px auto 0;\n\t\t\t\t\t\t\t\t\t\ttext-align: center\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-pager{\n\t\t\t\t\t\t\t\t\t\tpadding-top: 0;\n\t\t\t\t\t\t\t\t\t\tdisplay: none;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.carousel__item{\n\t\t\t\t\t\t\t\t\t\twidth: 275px !important;\n\t\t\t\t\t\t\t\t\t\t/*float: none;*/\n\t\t\t\t\t\t\t\t\t\theight: 195px;\n\t\t\t\t\t\t\t\t\t\tmargin-right: 15px !important;\n\t\t\t\t\t\t\t\t\t\t/*display: inline-block;*/\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.carousel__item img{\n\t\t\t\t\t\t\t\t\t\tposition: relative;\n\t\t\t\t\t\t\t\t\t\tmin-height: 100%;\n\t\t\t\t\t\t\t\t\t\tmin-width: 100%;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.carousel__item{\n\t\t\t\t\t\t\t\t\t\tdisplay: block;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a{\n\t\t\t\t\t\t\t\t\t\ttop: 0;\n\t\t\t\t\t\t\t\t\t\tmargin-top: 0;\n\t\t\t\t\t\t\t\t\t\theight: 100%;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-prev{\n\t\t\t\t\t\t\t\t\t\tleft: -2px;\n\t\t\t\t\t\t\t\t\t\tbackground: #27318b url(\"images/carousel-prev-yellow.png\") no-repeat center center;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-next{\n\t\t\t\t\t\t\t\t\t\tright: -2px;\n\t\t\t\t\t\t\t\t\t\tbackground: #27318b url(\"images/carousel-next-yellow.png\") no-repeat center center;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.fancybox-overlay{\n\t\t\t\t\t\t\t\t\t\tz-index: 99998 !important;\n\t\t\t\t\t\t\t\t\t\toverflow: hidden !important;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.fancybox-opened{\n\t\t\t\t\t\t\t\t\t\tz-index: 99999 !important;\n\t\t\t\t\t\t\t\t\t}"

/***/ }),

/***/ 723:
/***/ (function(module, exports) {

module.exports = "\t\t\t\t\t\t\t\t\t.bx-wrapper{\n\t\t\t\t\t\t\t\t\t\tbackground-color: transparent;\n\t\t\t\t\t\t\t\t\t\tbox-shadow: none;\n\t\t\t\t\t\t\t\t\t\tborder: 0;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.carousel-vertical__item{\n\t\t\t\t\t\t\t\t\t\theight: 146px !important;\n\t\t\t\t\t\t\t\t\t\twidth: 205px !important;\n\t\t\t\t\t\t\t\t\t\toverflow: hidden;\n\t\t\t\t\t\t\t\t\t\tmargin: 0 auto 10px !important\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.carousel-vertical__item img{\n\t\t\t\t\t\t\t\t\t\tposition: relative;\n\t\t\t\t\t\t\t\t\t\tleft: 50%;\n\t\t\t\t\t\t\t\t\t\ttop: 0;\n\t\t\t\t\t\t\t\t\t\theight: 100%;\n\t\t\t\t\t\t\t\t\t\tmin-width: 100%;\n\t\t\t\t\t\t\t\t\t\t-webkit-transform: translateX(-50%);\n\t\t\t\t\t\t\t\t\t\ttransform: translateX(-50%);\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper{\n\t\t\t\t\t\t\t\t\t\tmax-width: 320px !important;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-pager{\n\t\t\t\t\t\t\t\t\t\tdisplay: none;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-prev{\n\t\t\t\t\t\t\t\t\t\ttop: -50px;\n\t\t\t\t\t\t\t\t\t\tleft: 0;\n\t\t\t\t\t\t\t\t\t\tright: 0;\n\t\t\t\t\t\t\t\t\t\tmargin: auto;\n\t\t\t\t\t\t\t\t\t\tbackground: url(\"images/carousel-prev.png\") no-repeat center center;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-next{\n\t\t\t\t\t\t\t\t\t\ttop: auto;\n\t\t\t\t\t\t\t\t\t\tbottom: -50px;\n\t\t\t\t\t\t\t\t\t\tleft: 0;\n\t\t\t\t\t\t\t\t\t\tright: 0;\n\t\t\t\t\t\t\t\t\t\tmargin: auto;\n\t\t\t\t\t\t\t\t\t\tbackground: url(\"images/carousel-next.png\") no-repeat center center;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.fancybox-overlay{\n\t\t\t\t\t\t\t\t\t\tz-index: 99998 !important;\n\t\t\t\t\t\t\t\t\t\toverflow: hidden !important;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.fancybox-opened{\n\t\t\t\t\t\t\t\t\t\tz-index: 99999 !important;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.fancybox-skin{\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t}"

/***/ }),

/***/ 724:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 725:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 726:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 727:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 728:
/***/ (function(module, exports) {

module.exports = ".bx-wrapper{\r\n\t\tbox-shadow: none;\r\n\t\tborder: 0;\r\n\t\tbackground-color: transparent;\r\n\t\tmargin: 55px auto 0;\r\n\t\ttext-align: center\r\n\t}\r\n\t.bx-wrapper .bx-pager{\r\n\t\tpadding-top: 0;\r\n\t\tdisplay: none;\r\n\t}\r\n\t.carousel__item{\r\n\t\twidth: 275px !important;\r\n\t\t/*float: none;*/\r\n\t\theight: 195px;\r\n\t\tmargin-right: 15px !important;\r\n\t\t/*display: inline-block;*/\r\n\t}\r\n\t.carousel__item img{\r\n\t\tposition: relative;\r\n\t\tmin-height: 100%;\r\n\t\tmin-width: 100%;\r\n\t}\r\n\t.carousel__item{\r\n\t\tdisplay: block;\r\n\t}\r\n\t.bx-wrapper .bx-controls-direction a{\r\n\t\ttop: 0;\r\n\t\tmargin-top: 0;\r\n\t\theight: 100%;\r\n\t}\r\n\t.bx-wrapper .bx-controls-direction a.bx-prev{\r\n\t\tleft: 0;\r\n\t\tbackground: #27318b url(\"images/carousel-prev-yellow.png\") no-repeat center center;\r\n\t}\r\n\t.bx-wrapper .bx-controls-direction a.bx-next{\r\n\t\tright: 0;\r\n\t\tbackground: #27318b url(\"images/carousel-next-yellow.png\") no-repeat center center;\r\n\t}\r\n\t.fancybox-overlay{\r\n\t\tz-index: 99998 !important;\r\n\t\toverflow: hidden !important;\r\n\t}\r\n\t.fancybox-opened{\r\n\t\tz-index: 99999 !important;\r\n\t}"

/***/ }),

/***/ 729:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 730:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 731:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 732:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 733:
/***/ (function(module, exports) {

module.exports = "\r\n.bx-wrapper{\r\nbox-shadow: none;\r\nborder: 0;\r\nbackground-color: transparent;\r\nmargin: 55px auto 0;\r\ntext-align: center\r\n}\r\n.bx-wrapper .bx-pager{\r\npadding-top: 0;\r\ndisplay: none;\r\n}\r\n.carousel__item{\r\nwidth: 275px !important;\r\n/*float: none;*/\r\nheight: 195px;\r\nmargin-right: 15px !important;\r\n/*display: inline-block;*/\r\n}\r\n.carousel__item img{\r\nposition: relative;\r\nmin-height: 100%;\r\nmin-width: 100%;\r\n}\r\n.carousel__item{\r\ndisplay: block;\r\n}\r\n.bx-wrapper .bx-controls-direction a{\r\ntop: 0;\r\nmargin-top: 0;\r\nheight: 100%;\r\n}\r\n.bx-wrapper .bx-controls-direction a.bx-prev{\r\nleft: 0;\r\nbackground: #27318b url(\"images/carousel-prev-yellow.png\") no-repeat center center;\r\n}\r\n.bx-wrapper .bx-controls-direction a.bx-next{\r\nright: 0;\r\nbackground: #27318b url(\"images/carousel-next-yellow.png\") no-repeat center center;\r\n}\r\n.fancybox-overlay{\r\nz-index: 99998 !important;\r\noverflow: hidden !important;\r\n}\r\n.fancybox-opened{\r\nz-index: 99999 !important;\r\n}"

/***/ }),

/***/ 734:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 735:
/***/ (function(module, exports) {

module.exports = ".bx-wrapper{\r\n\t\t\t\t\t\t\t\t\t\tbox-shadow: none;\r\n\t\t\t\t\t\t\t\t\t\tborder: 0;\r\n\t\t\t\t\t\t\t\t\t\tbackground-color: transparent;\r\n\t\t\t\t\t\t\t\t\t\tmargin: 55px auto 0;\r\n\t\t\t\t\t\t\t\t\t\ttext-align: center\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-pager{\r\n\t\t\t\t\t\t\t\t\t\tpadding-top: 0;\r\n\t\t\t\t\t\t\t\t\t\tdisplay: none;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.carousel__item{\r\n\t\t\t\t\t\t\t\t\t\twidth: 275px !important;\r\n\t\t\t\t\t\t\t\t\t\t/*float: none;*/\r\n\t\t\t\t\t\t\t\t\t\theight: 195px;\r\n\t\t\t\t\t\t\t\t\t\tmargin-right: 15px !important;\r\n\t\t\t\t\t\t\t\t\t\t/*display: inline-block;*/\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.carousel__item img{\r\n\t\t\t\t\t\t\t\t\t\tposition: relative;\r\n\t\t\t\t\t\t\t\t\t\tmin-height: 100%;\r\n\t\t\t\t\t\t\t\t\t\tmin-width: 100%;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.carousel__item{\r\n\t\t\t\t\t\t\t\t\t\tdisplay: block;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a{\r\n\t\t\t\t\t\t\t\t\t\ttop: 0;\r\n\t\t\t\t\t\t\t\t\t\tmargin-top: 0;\r\n\t\t\t\t\t\t\t\t\t\theight: 100%;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-prev{\r\n\t\t\t\t\t\t\t\t\t\tleft: 0;\r\n\t\t\t\t\t\t\t\t\t\tbackground: #27318b url(\"images/carousel-prev-yellow.png\") no-repeat center center;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-next{\r\n\t\t\t\t\t\t\t\t\t\tright: 0;\r\n\t\t\t\t\t\t\t\t\t\tbackground: #27318b url(\"images/carousel-next-yellow.png\") no-repeat center center;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.fancybox-overlay{\r\n\t\t\t\t\t\t\t\t\t\tz-index: 99998 !important;\r\n\t\t\t\t\t\t\t\t\t\toverflow: hidden !important;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.fancybox-opened{\r\n\t\t\t\t\t\t\t\t\t\tz-index: 99999 !important;\r\n\t\t\t\t\t\t\t\t\t}"

/***/ }),

/***/ 736:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 737:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 738:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 739:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 740:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 741:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 742:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 743:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 744:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 745:
/***/ (function(module, exports) {

module.exports = ".bx-wrapper{\r\n\t\t\t\t\t\t\t\t\t\tbackground-color: transparent;\r\n\t\t\t\t\t\t\t\t\t\tbox-shadow: none;\r\n\t\t\t\t\t\t\t\t\t\tborder: 0;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.carousel-vertical__item{\r\n\t\t\t\t\t\t\t\t\t\theight: 146px !important;\r\n\t\t\t\t\t\t\t\t\t\twidth: 205px !important;\r\n\t\t\t\t\t\t\t\t\t\toverflow: hidden;\r\n\t\t\t\t\t\t\t\t\t\tmargin: 0 auto 10px !important\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.carousel-vertical__item img{\r\n\t\t\t\t\t\t\t\t\t\tposition: relative;\r\n\t\t\t\t\t\t\t\t\t\tleft: 50%;\r\n\t\t\t\t\t\t\t\t\t\ttop: 0;\r\n\t\t\t\t\t\t\t\t\t\theight: 100%;\r\n\t\t\t\t\t\t\t\t\t\tmin-width: 100%;\r\n\t\t\t\t\t\t\t\t\t\t-webkit-transform: translateX(-50%);\r\n\t\t\t\t\t\t\t\t\t\ttransform: translateX(-50%);\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.bx-wrapper{\r\n\t\t\t\t\t\t\t\t\t\tmax-width: 320px !important;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-pager{\r\n\t\t\t\t\t\t\t\t\t\tdisplay: none;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-prev{\r\n\t\t\t\t\t\t\t\t\t\ttop: -50px;\r\n\t\t\t\t\t\t\t\t\t\tleft: 0;\r\n\t\t\t\t\t\t\t\t\t\tright: 0;\r\n\t\t\t\t\t\t\t\t\t\tmargin: auto;\r\n\t\t\t\t\t\t\t\t\t\tbackground: url(\"images/carousel-prev.png\") no-repeat center center;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-next{\r\n\t\t\t\t\t\t\t\t\t\ttop: auto;\r\n\t\t\t\t\t\t\t\t\t\tbottom: -50px;\r\n\t\t\t\t\t\t\t\t\t\tleft: 0;\r\n\t\t\t\t\t\t\t\t\t\tright: 0;\r\n\t\t\t\t\t\t\t\t\t\tmargin: auto;\r\n\t\t\t\t\t\t\t\t\t\tbackground: url(\"images/carousel-next.png\") no-repeat center center;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.fancybox-overlay{\r\n\t\t\t\t\t\t\t\t\t\tz-index: 99998 !important;\r\n\t\t\t\t\t\t\t\t\t\toverflow: hidden !important;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.fancybox-opened{\r\n\t\t\t\t\t\t\t\t\t\tz-index: 99999 !important;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.fancybox-skin{\r\n\t\t\t\t\t\t\t\t\t\t\r\n\t\t\t\t\t\t\t\t\t}"

/***/ }),

/***/ 746:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 747:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 748:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 749:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 750:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 751:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 752:
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ 753:
/***/ (function(module, exports) {

module.exports = ".bx-wrapper{\r\n\t\t\t\t\t\t\t\t\t\tbox-shadow: none;\r\n\t\t\t\t\t\t\t\t\t\tborder: 0;\r\n\t\t\t\t\t\t\t\t\t\tbackground-color: transparent;\r\n\t\t\t\t\t\t\t\t\t\tmargin: 55px auto 0;\r\n\t\t\t\t\t\t\t\t\t\ttext-align: center\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-pager{\r\n\t\t\t\t\t\t\t\t\t\tpadding-top: 0;\r\n\t\t\t\t\t\t\t\t\t\tdisplay: none;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.carousel__item{\r\n\t\t\t\t\t\t\t\t\t\twidth: 275px !important;\r\n\t\t\t\t\t\t\t\t\t\t/*float: none;*/\r\n\t\t\t\t\t\t\t\t\t\theight: 195px;\r\n\t\t\t\t\t\t\t\t\t\tmargin-right: 15px !important;\r\n\t\t\t\t\t\t\t\t\t\t/*display: inline-block;*/\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.carousel__item img{\r\n\t\t\t\t\t\t\t\t\t\tposition: relative;\r\n\t\t\t\t\t\t\t\t\t\tmin-height: 100%;\r\n\t\t\t\t\t\t\t\t\t\tmin-width: 100%;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.carousel__item{\r\n\t\t\t\t\t\t\t\t\t\tdisplay: block;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a{\r\n\t\t\t\t\t\t\t\t\t\ttop: 0;\r\n\t\t\t\t\t\t\t\t\t\tmargin-top: 0;\r\n\t\t\t\t\t\t\t\t\t\theight: 100%;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-prev{\r\n\t\t\t\t\t\t\t\t\t\tleft: 0;\r\n\t\t\t\t\t\t\t\t\t\tbackground: #27318b url(\"images/carousel-prev-yellow.png\") no-repeat center center;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-next{\r\n\t\t\t\t\t\t\t\t\t\tright: 0;\r\n\t\t\t\t\t\t\t\t\t\tbackground: #27318b url(\"images/carousel-next-yellow.png\") no-repeat center center;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.fancybox-overlay{\r\n\t\t\t\t\t\t\t\t\t\tz-index: 99998 !important;\r\n\t\t\t\t\t\t\t\t\t\toverflow: hidden !important;\r\n\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t.fancybox-opened{\r\n\t\t\t\t\t\t\t\t\t\tz-index: 99999 !important;\r\n\t\t\t\t\t\t\t\t\t}"

/***/ }),

/***/ 754:
/***/ (function(module, exports) {

module.exports = ".bx-wrapper{\n\t\t\t\t\t\t\t\t\t\tbox-shadow: none;\n\t\t\t\t\t\t\t\t\t\tborder: 0;\n\t\t\t\t\t\t\t\t\t\tbackground-color: transparent;\n\t\t\t\t\t\t\t\t\t\tmargin: 55px auto 0;\n\t\t\t\t\t\t\t\t\t\ttext-align: center\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-pager{\n\t\t\t\t\t\t\t\t\t\tpadding-top: 0;\n\t\t\t\t\t\t\t\t\t\tdisplay: none;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.carousel__item{\n\t\t\t\t\t\t\t\t\t\twidth: 275px !important;\n\t\t\t\t\t\t\t\t\t\t/*float: none;*/\n\t\t\t\t\t\t\t\t\t\theight: 195px;\n\t\t\t\t\t\t\t\t\t\tmargin-right: 15px !important;\n\t\t\t\t\t\t\t\t\t\t/*display: inline-block;*/\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.carousel__item img{\n\t\t\t\t\t\t\t\t\t\tposition: relative;\n\t\t\t\t\t\t\t\t\t\tmin-height: 100%;\n\t\t\t\t\t\t\t\t\t\tmin-width: 100%;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.carousel__item{\n\t\t\t\t\t\t\t\t\t\tdisplay: block;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a{\n\t\t\t\t\t\t\t\t\t\ttop: 0;\n\t\t\t\t\t\t\t\t\t\tmargin-top: 0;\n\t\t\t\t\t\t\t\t\t\theight: 100%;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-prev{\n\t\t\t\t\t\t\t\t\t\tleft: 0;\n\t\t\t\t\t\t\t\t\t\tbackground: #27318b url(\"images/carousel-prev-yellow.png\") no-repeat center center;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-next{\n\t\t\t\t\t\t\t\t\t\tright: 0;\n\t\t\t\t\t\t\t\t\t\tbackground: #27318b url(\"images/carousel-next-yellow.png\") no-repeat center center;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.fancybox-overlay{\n\t\t\t\t\t\t\t\t\t\tz-index: 99998 !important;\n\t\t\t\t\t\t\t\t\t\toverflow: hidden !important;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.fancybox-opened{\n\t\t\t\t\t\t\t\t\t\tz-index: 99999 !important;\n\t\t\t\t\t\t\t\t\t}"

/***/ }),

/***/ 769:
/***/ (function(module, exports) {

module.exports = "<div id=\"about-us\" class=\"base-container\">\n<topabout></topabout>\n<section class=\"section about-us\">\n<div class=\"coulds\"></div>\n<div class=\"scrollableContent\">\n<div class=\"container-alignment\">\n<div class=\"alignment\">\n<div class=\"centered\">\t\t\n<div class=\"container\">\n<div class=\"banner__image\">\n    <img src=\"images/banner-photo-about-us.png\" alt=\"\">\n</div>\n<div class=\"row\">\n<div class=\"col-lg-3 col-md-4 mobile-hidden\">\n<nav class=\"vertical-navbar animated fadeInLeft\">\n<logo></logo>\n<mainmenu></mainmenu>\n<aboutmenu2></aboutmenu2>\n</nav>\n</div>\n<div class=\"col-lg-9 col-md-8 col-xs-12\">\n<div class=\"content-container about-us__content\">\n<div class=\"content__head clearfix\">\n<div class=\"content__title mobile-hidden\">\n<h1>Kazakhstan Counсil for Educational Travel</h1>\n</div>\n<aboutsocial></aboutsocial>\n</div>\n<aboutcontent></aboutcontent>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\t\n</section>\n</div>\n<podpiska></podpiska>\n<forma></forma>\n<authorization></authorization>"

/***/ }),

/***/ 770:
/***/ (function(module, exports) {

module.exports = "<!-- <aboutmenu3></aboutmenu3>\n<p>\n  aboutcontact works!\n</p>\n-->\n<div class=\"base-container\">\n\n\t\t<!-- our-contacts -->\n\t\t<section class=\"section additional-pages additional-page-contacts\">\n\t\t\t<!-- scrollableContent -->\n\t\t\t<div class=\"scrollableContent\">\n\t\t\t\t<!-- __head -->\t\t\t\n\t\t\t<aboutmenu3></aboutmenu3><!-- /.__head -->\n\n\t\t\t\t<header class=\"mastheadModal-default mastheadModal-additional-pages mobile-visible\">\n\t\t\t\t\t<div class=\"container\">\n\t\t\t\t\t\t<div class=\"row\">\n\n\t\t\t\t\t\t\t<div class=\"col-xs-3 text-left\">\n\t\t\t\t\t\t\t\t<div class=\"mobile-navbar__actions text-left\">\n\t\t\t\t\t\t\t\t\t<a href=\"\">Назад</a>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-xs-6 text-center\">\n\t\t\t\t\t\t\t\t<div class=\"mobile-navbar__title\">\n\t\t\t\t\t\t\t\t\tКонтакты\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-xs-3 text-right\">\n\t\t\t\t\t\t\t\t<div class=\"close\"> \n\t\t\t\t\t\t\t\t\t<a href=\"about-us.html\"></a>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</header>\n\n\t\t\t\t<!-- __body -->\n\t\t\t\t<div class=\"additional-page-body\">\n\t\t\t\t\t<div class=\"overlay-bg-static mobile-hidden\"></div>\n\t\t\t\t\t<!-- __content -->\n\t\t\t\t\t<div class=\"additional-pages-container\">\n\t\t\t\t\t\t<!-- __container -->\n\t\t\t\t\t\t<div class=\"container\">\n\t\t\t\t\t\t\t<!-- __row -->\n\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t<!-- __col -->\n\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-9\">\n\n\t\t\t\t\t\t\t\t\t<!-- __heading -->\t\n\t\t\t\t\t\t\t\t\t<div class=\"additional-page__heading mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__caption additional-page__caption-large\">\n\t\t\t\t\t\t\t\t\t\t\t<h1>Контакты</h1>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__subcaption\">\n\t\t\t\t\t\t\t\t\t\t\t<h3>\n\t\t\t\t\t\t\t\t\t\t\t\tKazakhstan Counсil for Educational Travel\n\t\t\t\t\t\t\t\t\t\t\t\t<span>Казахстан Каунсл фо Эдьюкейшнл Трэвел (кратко КСЕТ)</span>\n\t\t\t\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__heading -->\n\n\t\t\t\t\t\t\t\t\t<!-- __body -->\n\t\t\t\t\t\t\t\t\t<div class=\"additional-page__body\">\n\t\t\t\t\t\t\t\t\t\t<!-- __cover -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__cover mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/personages.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__cover-mobile mobile-visible\">\n\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/student.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__cover -->\n\t\t\t\t\t\t\t\t\t\t<!-- __content -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__content\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption-contact\"><i class=\"icon icon-location\"></i>Наш адрес:</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tКазахстан, г. Алматы (главный офис)\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tПроспект Сейфуллина 500 офис 47, \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tуг. ул.Карасай батыра (бывшая ул.Виноградова)\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</address>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tel:+7 727 2723722\">Тел./факс: +7 727 2723722</a></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"container-phone\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon icon-phone\"></i><a href=\"tel:+7 727 2723722\">+7 727 2723722</a>, 2676160, 2676163;</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon icon-mobile\"></i><a href=\"tel:+7 777 024 8394\">+7 777 024 8394,</a> <a href=\"tel:+7 747 350 7777\">+7 747 350 7777,</a> <a href=\"tel:+7 747 250 7777\">+7 747 250 7777</a></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul> \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption-contact\"><i class=\"icon icon-time\"></i>Время работы:</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Пн - Пт: sc 10:00 до 19:00</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Сб: c 11:00 до 16:00</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"container-feedback\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon icon-letter-outline\"></i><a href=\"mailto: info@kcet.kz\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tinfo@kcet.kz</a>, <a href=\"mailto: shiba@kcet.kz\">shiba@kcet.kz</a></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>(По общим вопросам)</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mobile-visible\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption-contact\"><i class=\"icon icon-location\"></i>Наш адрес:</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<ul style=\"padding-left: 15px; border-left: 4px solid #fce22c;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tКазахстан, г. Алматы (главный офис)\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tПроспект Сейфуллина 500 офис 47, \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tуг. ул.Карасай батыра (бывшая ул.Виноградова)\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</address>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tel:+7 727 2723722\">Тел./факс: +7 727 2723722</a></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon icon-phone\"></i><a href=\"tel:+7 727 2723722\">+7 727 2723722</a>, 2676160, 2676163;</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon icon-mobile\"></i><a href=\"tel:+7 777 024 8394\">+7 777 024 8394,</a> <a href=\"tel:+7 747 350 7777\">+7 747 350 7777,</a> <a href=\"tel:+7 747 250 7777\">+7 747 250 7777</a></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mobile-visible\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption-contact\"><i class=\"icon icon-time\"></i>Время работы:</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Пн - Пт: sc 10:00 до 19:00</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Сб: c 11:00 до 16:00</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption-contact\">E-mail:</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"mailto: info@kcet.kz\">info@kcet.kz</a></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"mailto: info@kcet.kz\">shiba@kcet.kz</a></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mobile-visible\" style=\"margin-bottom: 0; position: relative;\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- __social -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-widget-social widget__social-network inline yellow\" style=\"margin-bottom: 0 !important; padding-bottom: 30px\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social-network__list\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-mail\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-skype\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-facebook\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-twitter\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-instagram\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-vk\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /. __social -->\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-bg bg-modal-history bg-modal-history-mobile mobile-visible\" style=\"top: -120px; bottom: auto; opacity: .2;\"></div>\t\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-8\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption-contact\">Представительства компании в других регионах:</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"container-phone\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tКазахстан, г. Костанай, Ул. Тарана 83, офис 910\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</address>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li style=\"display: inline-block; margin-right: 5px\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-phone\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:+7 714 2531894\">+7 714 2531894;</a> </li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li style=\"display: inline-block;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mobile\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel: +7 705 184 2760\">+7 705 184 2760;</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Руководитель: Дубровина Наталья Юрьевна</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- </div> -->\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/contacts-banner.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mobile-visible\" style=\"background-color: #fff; text-align: center; padding-top: 10px; padding-bottom: 30px\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption-contact\" style=\"color: #002c6f\">Представительства компании в других регионах:</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"container-phone\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address style=\"color: #151a22\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tКазахстан, г. Костанай, Ул. Тарана 83, офис 910\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</address>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li style=\"display: inline-block; margin-right: 5px\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-phone\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"color: #151a22\" href=\"tel:+7 714 2531894\">+7 714 2531894;</a> </li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li style=\"display: inline-block;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mobile\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"color: #151a22\" href=\"tel: +7 705 184 2760\">+7 705 184 2760;</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li style=\"color: #151a22\">Руководитель: Дубровина Наталья Юрьевна</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row container-certificates mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-8\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-certificates\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-3\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-certificate item-certificate-md\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/certificate01.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-certificate item-certificate-md\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/certificate04.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-certificate item-certificate-lg\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/certificate03.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-3\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-certificate item-certificate-md\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/certificate02.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-certificate item-certificate-md\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/certificate04.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 container-coordinators\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption-contact mobile-section section-feedback-mail mobile-visible\"><p>Вы также можете связаться с нами по электронной почте:</p></div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption-contact mobile-hidden\">Вы также можете связаться с нами по электронной почте:</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"subcaption-contact\">Зарубежный отдел:</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-coordinators\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Координатор программы «Работа на круизных лайнерах»:  <a href=\"mailto: cruise@kcet.kz\">cruise@kcet.kz</a></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Координатор по различным программам стажировок, таких как «Sandwich course in England»,  Internship USA, Internship Greece, Emirates, Work and Travel France: <a href=\"mailto: internship@kcet.kz\"></a>internship@kcet.kz</li>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tКоординатор программы AU PAIR USA & Europe: <a href=\"mailto: aupair@kcet.kz\">aupair@kcet.kz</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tКоординатор программ по обучению: <a href=\"mailto: edu@kcet.kz\">edu@kcet.kz</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Координатор по программам “Work and Travel USA”: <a href=\"mailto: wat@kcet.kz\">wat@kcet.kz,</a> <a href=\"mailto: watkcet@kcet.kz\">watkcet@kcet.kz</a></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tКоординатор детских образовательных программ: <a href=\"mailto: childtrip@kcet.kz\">childtrip@kcet.kz</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Авиакассир: <a href=\"mailto: ticket@kcet.kz\"></a>ticket@kcet.kz</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>По вопросам сотрудничества, по вопросам приобретения контрактов (job-offers) по программе “Work and Travel USA”: <a href=\"mailto: job@kcet.kz\">job@kcet.kz</a>, <a href=\"mailto: shiba@kcet.kz\">shiba@kcet.kz</a></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>По вопросам возврата налогов после работы по программам в США, Великобритании, Австралии, Канаде, Новой Зеландии, Европе: <a href=\"mailto: tax@kcet.kz\">tax@kcet.kz</a></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tПо вопросам бухгалтерии: <a href=\"mailto: accountant@kcet.kz\">accountant@kcet.kz</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tПо вопросам рекламы: <a href=\"mailto: reklama@kcet.kz \">reklama@kcet.kz</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>По вопросам коммерческого характера: <a href=\"mailto: managercom@kcet.kz\"></a>managercom@kcet.kz</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"margin-bottom: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-map\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"map\"></div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-section mobile-visible btn-offset-up\">\n\t\t\t\t\t\t\t\t\t\t\t\tВверх\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\t\t\t\t\t\t\t\t\t</div><!-- /.__body -->\n\n\t\t\t\t\t\t\t\t</div><!-- /.__col -->\n\n\t\t\t\t\t\t\t\t<!-- __col -->\n\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-3 mobile-hidden\">\n\t\t\t\t\t\t\t\t\t<!-- __sideleft -->\n\t\t\t\t\t\t\t\t\t<aside class=\"sideleft sideleft-fixed\">\n\n\t\t\t\t\t\t\t\t\t\t<!-- __logo -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"sideleft__logo\">\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/logo.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__logo -->\n\n\n\t\t\t\t\t\t\t\t\t\t<!-- __additional -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"sideleft__links\">\n\t\t\t\t\t\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__cursor\"></i>Почему мы?</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__pencil\"></i>Кратко про Summer W&amp;T</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__list\"></i>Требования для участия</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__note\"></i>Документы для участия  \n\t\t\t\t\t\t\t\t\t\t\t\t\tв программе</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__question\"></i>Пошаговое оформление</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__dollar\"></i>Стоимость программы \n\t\t\t\t\t\t\t\t\t\t\t\t\tWork and Travel 2017</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__search-engine\"></i>Поиск работы</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__rocket\"></i>Рабочие перспективы</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__briefcase\"></i>Деловой портфель</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__conversion\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\tНалоги</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__home\"></i>Проживание в США</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__comments\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\tНепутевые заметки</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"link-additional-articles\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a [routerLink]=\"['/articles']\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tВсе статьи</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</aside>\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t</div><!-- /.__row -->\t\n\t\t\t\t\t\t</div><!-- /.__container -->\n\t\t\t\t\t\t<div class=\"overlay-bg bg-modal-contact mobile-hidden\"></div>\n\t\t\t\t\t</div><!-- /.__content -->\n\t\t\t\t</div><!-- /.__body -->\n\t\t\t</div><!-- /.__scrollableContent -->\t\n\t\t</section><!-- our-contacts -->\n\n\t</div>\n\n\t<!-- __modal-news-subscription -->\n\t<div id=\"subscriptionModal\" class=\"news-subscription\">\n\t\t<div class=\"container mobile-hidden\">\n\t\t\t<div class=\"close close-subscriptionModal\"> \n\t\t\t\t<button type=\"button\" class=\"toggle-modal-subscription\"></button>\n\t\t\t</div>\n\t\t</div>\n\t\t<!-- __scrollable-Modal -->\n\t\t<div class=\"scrollableContent\">\n\t\t\t<div class=\"container-alignment\">\n\t\t\t\t<div class=\"alignment\">\n\t\t\t\t\t<div class=\"centered\">\n\n\t\t\t\t\t\t<div class=\"container\">\n\n\n\t\t\t\t\t\t\t<!-- __modal-content -->\n\t\t\t\t\t\t\t<div class=\"modal-content\">\n\n\t\t\t\t\t\t\t\t<!-- __headline -->\n\t\t\t\t\t\t\t\t<div class=\"request__headline mobile-hidden clearfix\">\n\n\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 headline__title\">\n\t\t\t\t\t\t\t\t\t\t<p> - на рассылку</p>\n\t\t\t\t\t\t\t\t\t\t<h4>Подписка</h4>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t<!-- __content -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 headline__content\">\n\t\t\t\t\t\t\t\t\t\t<p>Необходимо заполнить поле, для <span>того чтобы быть в курсе всех событий</span></p>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\n\t\t\t\t\t\t\t\t\t<!-- __logo -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 headline__logo\">\n\t\t\t\t\t\t\t\t\t\t<img src=\"images/headline-logo.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t</div><!-- /. __logo -->\n\n\t\t\t\t\t\t\t\t</div><!-- /.__headline -->\t\n\n\t\t\t\t\t\t\t\t<div class=\"container-form form-subscription\">\n\n\t\t\t\t\t\t\t\t\t<!-- content -->\n\t\t\t\t\t\t\t\t\t<div class=\"content-form content-form-subscription\">\n\t\t\t\t\t\t\t\t\t\t<form action=\"\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Email</label>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 btn-submit\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"\" id=\"\">отправить</button>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</form>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div><!-- /.__modal-content -->\n\n\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\t\n\t\t</div><!-- /.__scrollable-Modal -->\n\t</div><!-- /.__modal-news-subscription -->\n\n\t<!-- __modal-authorization -->\n\t<div id=\"authorizationModal\">\n\n\t\t<!-- __scrollable-Modal -->\n\t\t<div class=\"scrollableContent\">\n\t\t\t<div class=\"container-alignment\">\n\t\t\t\t<div class=\"alignment\">\n\t\t\t\t\t<div class=\"centered\">\n\n\t\t\t\t\t\t<div class=\"container\">\n\n\n\t\t\t\t\t\t\t<!-- __modal-content -->\n\t\t\t\t\t\t\t<div class=\"modal-content\">\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"sign-in-modal\">\n\t\t\t\t\t\t\t\t\t<div class=\"modal-title\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-title-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tВойти\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-title-action\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"close close-authorizationModal\"> \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"toggle-authorization-manager\"></button>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">\n\t\t\t\t\t\t\t\t\t\t<!-- <p class=\"login-form-welcome\">Привет</p> -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"login-form-container\">\n\t\t\t\t\t\t\t\t\t\t\t<form action=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-input-error\" style=\"display: none;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"error-message\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t*Введите свой адрес электронной почты.\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"login-email login-text-input\" placeholder=\"Адрес электронной почты\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-input-error\" style=\"display: none;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"error-message\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t*Введите свой адрес электронной почты.\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"login-password login-text-input\" placeholder=\"Пароль\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 text-left login-checkbox-input\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"remember-me\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked id=\"remember-me\" name=\"\" value=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-top: -1px\">Запомнить</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 text-right\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"\" name=\"\" class=\"login-submit-button\">Войти</button>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 forgot-password\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Забыли пароль?</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</form>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"hr-divider\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hr-divider-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tили\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"login-social-container\">\n\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"buttons-social-network\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-vk\">1</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-fb\">2</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-gp\">3</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-tw\">4</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div><!-- /.__modal-content -->\n\n\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\t\n\t\t</div><!-- /.__scrollable-Modal -->\n\n\t</div>\n<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?callback=myMap\"></script>\n"

/***/ }),

/***/ 771:
/***/ (function(module, exports) {

module.exports = "<div class=\"content__body animated fadeInUp\">\n<div class=\"mobile-section clearfix mobile-about-us mobile-visible\">\n<div class=\"mobile__logo\">\n<img src=\"images/mobile-Logo.png\" alt=\"\">\n</div>\n<ul class=\"nav__content\">\n<li class=\"nav__item animated fadeInLeft\">\n<a [routerLink]=\"['/abouthistory']\">История компании<i class=\"icon mobile-visible\"></i></a>\n</li>\n<li class=\"nav__item animated fadeInLeft\">\n<a [routerLink]=\"['/abouthistory']\">Контакты<i class=\"icon mobile-visible\"></i></a>\n</li>\n<li class=\"nav__item animated fadeInLeft\">\n<a [routerLink]=\"['/abouthistory']\">Для партнеров<i class=\"icon mobile-visible\"></i></a>\n</li>\n</ul>\n<div class=\"widget__social-network inline yellow animated bounceInRight mobile-visible\">\n<ul class=\"social-network__list\">\n<li>\n<a href=\"#\"><i class=\"icon icon-mail\"></i></a>\n</li>\n<li>\n<a href=\"#\"><i class=\"icon icon-skype\"></i></a>\n</li>\n<li>\n<a href=\"#\"><i class=\"icon icon-facebook\"></i></a>\n</li>\n<li>\n<a href=\"#\"><i class=\"icon icon-twitter\"></i></a>\n</li>\n<li>\n<a href=\"#\"><i class=\"icon icon-instagram\"></i></a>\n</li>\n<li>\n<a href=\"#\"><i class=\"icon icon-vk\"></i></a>\n</li>\n</ul>\n</div>\n</div>\n<ul class=\"nav__content mobile-hidden\">\n<li class=\"nav__item animated fadeInLeft\">\n<a [routerLink]=\"['/abouthistory']\">История компании<i class=\"icon mobile-visible\"></i></a>\n</li>\n<li class=\"nav__item animated fadeInLeft\">\n<a [routerLink]=\"['/aboutcontact']\">Контакты<i class=\"icon mobile-visible\"></i></a>\n</li>\n<li class=\"nav__item animated fadeInLeft\">\n<a [routerLink]=\"['/aboutpartner']\">Для партнеров<i class=\"icon mobile-visible\"></i></a>\n</li>\n</ul><div id=\"tabs\" class=\"tabs mobile-hidden\">\n<div class=\"tabs__controls tabs__indicators mobile-hidden\">\n<ul>\n<li class=\"tabs__item\"><a href=\"about#tab-1\"></a></li>\n<li class=\"tabs__item\"><a href=\"about#tab-2\"></a></li>\n<li class=\"tabs__item\"><a href=\"about#tab-3\"></a></li>\n<li class=\"tabs__item\"><a href=\"about#tab-4\"></a></li>\n<li class=\"tabs__item\"><a href=\"about#tab-5\"></a></li>\n</ul>\n</div>\n<div class=\"tabs__content\">\n<div id=\"tab-1\" class=\"animated fadeInUp\">\n<div class=\"tabs__content_scroll\">\n<h3 class=\"headline normal\" style=\"padding-left: 25px\">ЗАРАБАТЫВАЙ В ПУТЕШЕСТВИЯХ - С КСЕТ!</h3>\n<p>\nТы амбициозный студент? Мечтаешь увидеть мир не на фотографиях? Хочешь получать зарплату в десятки раз больше, чем тебе предложат в твоем городе прямо сейчас? Мы поможем совместить путешествие и заработок (Work and Travel), а также пройти стажировку или обучение за рубежом (Work and Study): в США, Австралии, Канаде, Великобритании, Европе и Азии.</p>\n<h3 class=\"headline icon italic red\">С нами попасть за границу проще!</h3>\n<p>\nНаша компания возьмет на себя всю сложную работу по организации твоей поездки. Подбор подходящей программы, бронирование места для участия, помощь в оформлении документов, открытие виз, заблаговременный выкуп авиабилетов — все это сделают наши сотрудники, пока ты будешь подтягивать английский и паковать чемоданы.</p>\n</div>\n</div>\n<div id=\"tab-2\" class=\"animated fadeInUp\">\n<div class=\"tabs__content_scroll\">\n<h3 class=\"headline icon red italic\">От Work and Study Canada до Internship Malta — у нас обширный выбор программ в Азии.</h3>\n<p>Наша компания имеет прямые договоренности с ведущими проектами в сфере привлечения иностранных студентов и сотрудников:</p>\n<ul>\n<li>Хочешь подзаработать, улучшить свой английский и целый месяц путешествовать по Америке — участвуй в Summer Work and Travel USA, предпочитаешь Штатам Францию — выбирай Work and Travel France, вдохновляешься древним Китаем — Work and Travel China.</li>\n<li>Мечтаешь о кругосветном путешествии, за участие в котором тебе еще и заплатят, не страдаешь от морской болезни — тебя ждет работа на круизном лайнере.\nТвое детство прошло в лагерях, и ты хочешь туда вернуться — получи работу в США в рамках программы Camp America.</li>\n<li>\nУмеешь находить контакт с маленькими детьми — регистрируйся на Au Pair в США и Европе.\n</li>\n</ul>\n</div>\n</div>\n<div id=\"tab-3\" class=\"animated fadeInUp\">\n<div class=\"tabs__content_scroll\">\n<ul>\n<li>Необходим профессиональный опыт, который станет козырем на любом собеседовании — мы организуем стажировки за рубежом по следующим программам: Professional Career Internship Program USA, Internship Spain, Malta, Thailand, China, India, Work and Study Canada, Work and Study USA, Work and Study Ireland, Hospitality Internship Australia.</li>\n<p>А, если ты ищешь что-то особенное и необычное, то у нас есть для тебя специальное предложение — работа на Аляске. Здесь студентам из-за рубежа дают возможность отлично заработать — до 20 тысяч долларов за три месяца — и насладиться видом фьордов, ледниковых озер и вулканов. И, если раньше работа на Аляске была связана больше с рыбным промыслом и подразумевала сложный график, КСЕТ всегда так же могли подобрать для тебя вакансию в одном из престижных отелей или ресторанов. Сейчас этот вид деятельности остается самым популярным среди студентов Work and Travel Alaska KCET.</p>\n</ul> \n</div>\n</div>\n<div id=\"tab-4\" class=\"animated fadeInUp\">\n<div class=\"tabs__content_scroll\">\n<h3 class=\"headline italic red icon\">Работа за рубежом не возможна без знания языка</h3>\n<p>Участие в большинстве из предложенных программ предполагает достаточно длительный подготовительный период (например, прием заявок для участия в Summer Work and Travel USA продолжается с августа по март, а сама поездка в Штаты состоится только в мае).</p>\n<p>Время, оставшееся до поездки, лучше всего провести за углублением своих познаний в английском языке — от его уровня напрямую будет зависеть то, какую должность получит участник программы.\nВладение английским на среднем уровне позволит устроиться мойщиком посуды или уборщиком номеров, но для официанта или менеджера на ресепшн ключевым требованием будет грамотная беглая речь. О разнице в зарплате официанта и мойщика говорить, пожалуй, излишне, упомянем лишь о таком приятном бонусе как чаевые.</p>\n<p>Мы освободим твое время для изучения английского, взяв на себя большинство хлопот подготовительного этапа поездки, подыщем вакансию, исходя из твоих языковых навыков, поможем избежать недобросовестных работодателей.</p>\n</div>\n</div>\n<div id=\"tab-5\" class=\"animated fadeInUp\">\n<div class=\"tabs__content_scroll\">\n<h3 class=\"headline icon italic\">Звучит слишком заманчиво? Ищешь подвох?</h3>\n<p>Никакого подвоха нет. Мы не благотворительная организация, которая занимается отправкой студентов на заработки и на стажировки за рубежом за собственные деньги. Но мы гарантируем выполнение своих обязательств — начиная с помощи в оформлении визы и в трудоустройстве, заканчивая посадкой на самолет и организацией трансфера до конечного пункта следования — мы подбираем лучшие и самые выгодные для наших клиентов варианты.</p>\n<p>\nМы предоставляем возможность для казахстанцев отправиться в путешествие, из которого возвращаются с бесценным опытом и круглой суммой в кошельке. Ты с нами?</p>\n<a id=\"request\" class=\"toggle-modal-request tabs__link tabs__link-request\" href=\"#requestModal\">\nПрисоединиться \n</a>\n</div>\n</div>\n</div>\n</div>\n<div class=\"banner__caption animated zoomInLeft mobile-hidden\">\n<h2>Travel \n<span>&amp; education</span></h2>\n<div class=\"aircraft animated zoomInUp\"></div>\t\n</div>\n</div>\n"

/***/ }),

/***/ 772:
/***/ (function(module, exports) {

module.exports = "<!--<aboutmenu3></aboutmenu3>\n<p>\n  abouthistory works!\n</p>-->\t\n\t<div class=\"base-container\">\n\n\t\t<!-- our-contacts -->\n\t\t<section class=\"section additional-pages additional-page-history\">\n\t\t\t<!-- scrollableContent -->\n\t\t\t<div class=\"scrollableContent\">\n\t\t\t\t<!-- __head -->\t\t\t\n<aboutmenu3></aboutmenu3>\n<!-- __head -->\t\n\t\t\t\t<header class=\"mastheadModal-default mastheadModal-additional-pages mobile-visible\">\n\t\t\t\t\t<div class=\"container\">\n\t\t\t\t\t\t<div class=\"row\">\n\n\t\t\t\t\t\t\t<div class=\"col-xs-3 text-left\">\n\t\t\t\t\t\t\t\t<div class=\"mobile-navbar__actions text-left\">\n\t\t\t\t\t\t\t\t\t<a href=\"index.html\">Назад</a>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-xs-6 text-center\">\n\t\t\t\t\t\t\t\t<div class=\"mobile-navbar__title\">\n\t\t\t\t\t\t\t\t\tИстория компании\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-xs-3 text-right\">\n\t\t\t\t\t\t\t\t<div class=\"close\"> \n\t\t\t\t\t\t\t\t\t<a href=\"about-us.html\"></a>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</header>\n\n\t\t\t\t<!-- __body -->\n\t\t\t\t<div class=\"additional-page-body\">\n\t\t\t\t\t<div class=\"overlay-bg-static mobile-hidden\"></div>\n\t\t\t\t\t<!-- __content -->\n\t\t\t\t\t<div class=\"additional-pages-container\">\n\t\t\t\t\t\t<!-- __container -->\n\t\t\t\t\t\t<div class=\"container\">\n\t\t\t\t\t\t\t<!-- __row -->\n\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t<!-- __col -->\n\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-9\">\n\n\t\t\t\t\t\t\t\t\t<!-- __heading -->\t\n\t\t\t\t\t\t\t\t\t<div class=\"additional-page__heading mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__caption additional-page__caption-large\">\n\t\t\t\t\t\t\t\t\t\t\t<h1>История  КСЕТ</h1>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__subcaption\">\n\t\t\t\t\t\t\t\t\t\t\t<h3>\n\t\t\t\t\t\t\t\t\t\t\t\tKazakhstan Counсil for Educational Travel\n\t\t\t\t\t\t\t\t\t\t\t\t<span>Казахстан Каунсл фо Эдьюкейшнл Трэвел (кратко КСЕТ)</span>\n\t\t\t\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__heading -->\n\n\t\t\t\t\t\t\t\t\t<!-- __body -->\n\t\t\t\t\t\t\t\t\t<div class=\"additional-page__body\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__cover mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ship.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__cover-mobile mobile-visible\">\n\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/personages.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__head-mobile mobile-visible\">\n\t\t\t\t\t\t\t\t\t\t\t<h3>Kazakhstan Council for Educational Travel</h3> \n\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<!-- __content -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__content\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<p> ТОО <q>Kazakhstan Council for Educational Travel</q>, зарегистрированное в Департаменте юстиции города Алматы 29 сентября 2008 года, регистрационный номер 94348-1910-TOO ИУ, имеет лицензию на занятие Турагентской деятельностью серии АА-13 № 0059856 от 10 ноября 2008 года и лицензию на занятие деятельностью, связанной с вывозом рабочей силы из Республики Казахстан за границу Серии АА № 0004564 от 07 апреля 2009 года.<span class=\"highlight-text yellow\"> Штат компании насчитывает 12 человек</span> – директор, коммерческий директор, старшие менеджеры зарубежных отделов, руководители представительств компании, менеджеры зарубежного отдела, главный бухгалтер, юрист.</p>\t\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\t\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<p> ТОО <q>Kazakhstan Council for Educational Travel</q>, Казахстан Каунсл фо Эдьюкейшнл Трэвел (кратко КСЕТ) работает по студенческим программам культурного обмена в США, Великобританию, Европу. Предлагает программы профессиональных стажировок за рубежом и занимается профессиональной переподготовкой преподавателей в Англии, США, Европе. Так же наша компания преподает курсы английского языка для студентов и взрослой аудитории. Мы официально зарегистрированы на сайте www.enbek.kz Министерства труда и социальной защиты населения Республики Казахстан. Одним из основных направлений так же является трудоустройство молодежи за рубежом. В рамках этого направления КСЕТ сотрудничает с Американскими и Европейскими круизными компаниями в рамках  программы «Работа на круизных лайнерах США, Европы, Великобритании», организуя интервью с представителями круизных лайнеров для молодежи от 21 года до 35 лет.</p>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-5 col-xs-12 mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/aircraft.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figcaption>Travel <span>&amp; education</span></figcaption>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-7 col-xs-12\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- __social -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-widget-social widget__social-network inline yellow mobile-visible\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social-network__list\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-mail\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-skype\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-facebook\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-twitter\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-instagram\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-vk\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /. __social -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"qoutes qoute-top\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tНаша стратегия занятости в условиях мирового кризиса направлена на переподготовку кадров и переобучение населения. Мы предлагаем получить образование за рубежом или пройти профессиональную стажировку по специальности, полученной в одном из Казахстанских ВУЗов. Каждый имеет возможность обучаться. Так, мы тесно сотрудничаем по программам кредитования с Казкоммерцбанком г. Алматы, так же предлагаем наивыгодные программы обслуживания по картам для студентов, едущих за границу. Это наш общий проект с Казкоммерцбанком.\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"qoutes qoute-bottom\"></i> \n\t\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t<!-- \t\t\t\t\t\t\t\t\t\t<div class=\"overlay-bg bg-modal-history bg-modal-history-mobile mobile-visible\" style=\"top: -145px; bottom: 0; opacity: .2;\"></div> -->\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Мы собираемся сократить количество иностранных рабочих в Казахстане и заменить нашими специалистами. Т.о. у нашей молодежи есть возможность получить зарубежный опыт работы в США, Англии, Ирландии, Канаде, Австралии, Новой Зеландии, Европе, Эмиратах, Китае и Индии с нашей помощью. По всем программам выдаются сертификаты зарубежного образца и соответствующие дипломы, которые оказывают большое влияние при трудоустройстве во многие крупные компании Казахстана. </p>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t<!-- __our-instagram -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row our-instagram\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Образовательный туризм занимает самое важное место в деятельности</h3>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-our-instagram\"><a href=\"\">Новое из инстаграм</a></div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 mobile-visible\" style=\" height: 255px;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"our-instagram-photo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel01.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel01.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel01.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel01.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"our-instagram-photo-thumb\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-slide-index=\"0\" href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-slide-index=\"1\" href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-slide-index=\"2\" href=\"\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-slide-index=\"3\" href=\"\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__our-instagram -->\n\n\t\t\t\t\t\t\t\t\t\t\t<style type=\"text/css\">\n\n\t\t\t\t\t\t\t\t</style>\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\t\t\t\t\t\t\t\t\t</div><!-- /.__body -->\n\n\t\t\t\t\t\t\t\t</div><!-- /.__col -->\n\n\t\t\t\t\t\t\t\t<!-- __col -->\n\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-3 mobile-hidden\">\n\t\t\t\t\t\t\t\t\t<!-- __sideleft -->\n\t\t\t\t\t\t\t\t\t<aside class=\"sideleft sideleft-fixed\">\n\n\t\t\t\t\t\t\t\t\t\t<!-- __logo -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"sideleft__logo\">\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/logo.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__logo -->\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"sideleft__links\">\n\t\t\t\t\t\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__cursor\"></i>Почему мы?</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__pencil\"></i>Кратко про Summer W&amp;T</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__list\"></i>Требования для участия</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__note\"></i>Документы для участия  \n\t\t\t\t\t\t\t\t\t\t\t\t\tв программе</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__question\"></i>Пошаговое оформление</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__dollar\"></i>Стоимость программы \n\t\t\t\t\t\t\t\t\t\t\t\t\tWork and Travel 2017</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__search-engine\"></i>Поиск работы</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__rocket\"></i>Рабочие перспективы</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__briefcase\"></i>Деловой портфель</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__conversion\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\tНалоги</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__home\"></i>Проживание в США</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__comments\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\tНепутевые заметки</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"link-additional-articles\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a [routerLink]=\"['/articles']\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tВсе статьи</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__additional -->\n\n\t\t\t\t\t\t\t\t\t</aside><!-- /.__sideleft -->\n\t\t\t\t\t\t\t\t</div><!-- /.__col -->\n\n\t\t\t\t\t\t\t</div><!-- /.__row -->\t\n\t\t\t\t\t\t</div><!-- /.__container -->\n\t\t\t\t\t\t\n\t\t\t\t\t</div><!-- /.__content -->\n\t\t\t\t\t<div class=\"additional-page-banner blue mobile-visible\">\n\t\t\t\t\t\t<div class=\"additional-page-banner__image\">\n\t\t\t\t\t\t\t<img src=\"images/aircraft.png\" alt=\"\">\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"additional-page-banner__caption\">\n\t\t\t\t\t\t\t<h3>Travel<span>&amp; education</span></h3>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"overlay-bg bg-modal-history mobile-hidden\"></div>\n\t\t\t\t\t<div class=\"overlay-bg bg-modal-history bg-modal-history-mobile mobile-visible\" style=\"background-position: top center\"></div>\n\t\t\t\t</div><!-- /.__body -->\n\t\t\t</div><!-- /.__scrollableContent -->\t\n\t\t</section><!-- our-contacts -->\n\n\t</div>\n\n\n\n\n\t<!-- __modal-news-subscription -->\n\t<div id=\"subscriptionModal\" class=\"news-subscription\">\n\t\t<div class=\"container mobile-hidden\">\n\t\t\t<div class=\"close close-subscriptionModal\"> \n\t\t\t\t<button type=\"button\" class=\"toggle-modal-subscription\"></button>\n\t\t\t</div>\n\t\t</div>\n\t\t<!-- __scrollable-Modal -->\n\t\t<div class=\"scrollableContent\">\n\t\t\t<div class=\"container-alignment\">\n\t\t\t\t<div class=\"alignment\">\n\t\t\t\t\t<div class=\"centered\">\n\n\t\t\t\t\t\t<div class=\"container\">\n\n\n\t\t\t\t\t\t\t<!-- __modal-content -->\n\t\t\t\t\t\t\t<div class=\"modal-content\">\n\n\t\t\t\t\t\t\t\t<!-- __headline -->\n\t\t\t\t\t\t\t\t<div class=\"request__headline mobile-hidden clearfix\">\n\n\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 headline__title\">\n\t\t\t\t\t\t\t\t\t\t<p> - на рассылку</p>\n\t\t\t\t\t\t\t\t\t\t<h4>Подписка</h4>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t<!-- __content -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 headline__content\">\n\t\t\t\t\t\t\t\t\t\t<p>Необходимо заполнить поле, для <span>того чтобы быть в курсе всех событий</span></p>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\n\t\t\t\t\t\t\t\t\t<!-- __logo -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 headline__logo\">\n\t\t\t\t\t\t\t\t\t\t<img src=\"images/headline-logo.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t</div><!-- /. __logo -->\n\n\t\t\t\t\t\t\t\t</div><!-- /.__headline -->\t\n\n\t\t\t\t\t\t\t\t<div class=\"container-form form-subscription\">\n\n\t\t\t\t\t\t\t\t\t<!-- content -->\n\t\t\t\t\t\t\t\t\t<div class=\"content-form content-form-subscription\">\n\t\t\t\t\t\t\t\t\t\t<form action=\"\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Email</label>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 btn-submit\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"\" id=\"\">отправить</button>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</form>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div><!-- /.__modal-content -->\n\n\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\t\n\t\t</div><!-- /.__scrollable-Modal -->\n\t</div><!-- /.__modal-news-subscription -->\n\n\t<!-- __modal-authorization -->\n\t<div id=\"authorizationModal\">\n\n\t\t<!-- __scrollable-Modal -->\n\t\t<div class=\"scrollableContent\">\n\t\t\t<div class=\"container-alignment\">\n\t\t\t\t<div class=\"alignment\">\n\t\t\t\t\t<div class=\"centered\">\n\n\t\t\t\t\t\t<div class=\"container\">\n\n\n\t\t\t\t\t\t\t<!-- __modal-content -->\n\t\t\t\t\t\t\t<div class=\"modal-content\">\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"sign-in-modal\">\n\t\t\t\t\t\t\t\t\t<div class=\"modal-title\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-title-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tВойти\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-title-action\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"close close-authorizationModal\"> \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"toggle-authorization-manager\"></button>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">\n\t\t\t\t\t\t\t\t\t\t<!-- <p class=\"login-form-welcome\">Привет</p> -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"login-form-container\">\n\t\t\t\t\t\t\t\t\t\t\t<form action=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-input-error\" style=\"display: none;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"error-message\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t*Введите свой адрес электронной почты.\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"login-email login-text-input\" placeholder=\"Адрес электронной почты\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-input-error\" style=\"display: none;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"error-message\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t*Введите свой адрес электронной почты.\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"login-password login-text-input\" placeholder=\"Пароль\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 text-left login-checkbox-input\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"remember-me\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked id=\"remember-me\" name=\"\" value=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-top: -1px\">Запомнить</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 text-right\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"\" name=\"\" class=\"login-submit-button\">Войти</button>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 forgot-password\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Забыли пароль?</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</form>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"hr-divider\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hr-divider-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tили\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"login-social-container\">\n\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"buttons-social-network\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-vk\">1</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-fb\">2</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-gp\">3</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-tw\">4</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\t\n\t\t</div>\n\t</div>"

/***/ }),

/***/ 773:
/***/ (function(module, exports) {

module.exports = "<div class=\"additional-page-head additional-page-navbar mobile-hidden\">\n\t\t\t\t\t<div class=\"container\">\n\t\t\t\t\t\t<div class=\"row\">\n\n\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-3\">\n\t\t\t\t\t\t\t\t<ul class=\"selection-language\">\n\t\t\t\t\t\t\t\t\t<li class=\"current-language\"><a href=\"\">ru</a></li>\n\t\t\t\t\t\t\t\t\t<li><a href=\"\">eng</a></li>\n\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">\n\t\t\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\t\t<li><a [routerLink]=\"['/abouthistory']\">История компании</a></li>\n\t\t\t\t\t\t\t\t\t<li><a [routerLink]=\"['/aboutcontact']\">Контакты</a></li>\n\t\t\t\t\t\t\t\t\t<li><a [routerLink]=\"['/aboutpartner']\">Для партнеров</a></li>\n\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-3\">\n\t\t\t\t\t\t\t\t<div class=\"close\"> \n\t\t\t\t\t\t\t\t\t<a [routerLink]=\"['/about']\"></a>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n"

/***/ }),

/***/ 774:
/***/ (function(module, exports) {

module.exports = "\n\t<div class=\"base-container\">\n\n\t\t<!-- our-contacts -->\n\t\t<section class=\"section additional-pages additional-page-partner\">\n\t\t\t<!-- scrollableContent -->\n\t\t\t<div class=\"scrollableContent\">\n\t\t\t\t<!-- __head -->\t\t\t\n\t\t\t\t<aboutmenu3></aboutmenu3>\n\n\t\t\t\t<header class=\"mastheadModal-default mastheadModal-additional-pages mobile-visible\">\n\t\t\t\t\t<div class=\"container\">\n\t\t\t\t\t\t<div class=\"row\">\n\n\t\t\t\t\t\t\t<div class=\"col-xs-3 text-left\">\n\t\t\t\t\t\t\t\t<div class=\"mobile-navbar__actions text-left\">\n\t\t\t\t\t\t\t\t\t<a href=\"index.html\">Назад</a>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-xs-6 text-center\">\n\t\t\t\t\t\t\t\t<div class=\"mobile-navbar__title\">\n\t\t\t\t\t\t\t\t\tДля партнеров\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-xs-3 text-right\">\n\t\t\t\t\t\t\t\t<div class=\"close\">\n\t\t\t\t\t\t\t\t\t<a href=\"about-us.html\"></a>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</header>\n\n\t\t\t\t<!-- __body -->\n\t\t\t\t<div class=\"additional-page-body\">\n\t\t\t\t\t<div class=\"overlay-bg-static mobile-hidden\"></div>\n\t\t\t\t\t<!-- __content -->\n\t\t\t\t\t<div class=\"additional-pages-container\">\n\t\t\t\t\t\t<!-- __container -->\n\t\t\t\t\t\t<div class=\"container\">\n\t\t\t\t\t\t\t<!-- __row -->\n\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t<!-- __col -->\n\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-9\">\n\n\t\t\t\t\t\t\t\t\t<!-- __heading -->\t\n\t\t\t\t\t\t\t\t\t<div class=\"additional-page__heading mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__caption additional-page__caption-large\">\n\t\t\t\t\t\t\t\t\t\t\t<h1>Для партнеров</h1>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__subcaption\">\n\t\t\t\t\t\t\t\t\t\t\t<h3>\n\t\t\t\t\t\t\t\t\t\t\t\tKazakhstan Counсil for Educational Travel\n\t\t\t\t\t\t\t\t\t\t\t\t<span>Казахстан Каунсл фо Эдьюкейшнл Трэвел (кратко КСЕТ)</span>\n\t\t\t\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__heading -->\n\n\t\t\t\t\t\t\t\t\t<!-- __body -->\n\t\t\t\t\t\t\t\t\t<div class=\"additional-page__body\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__cover mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ship.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__cover-mobile mobile-visible\">\n\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/personages.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__head-mobile mobile-visible\">\n\t\t\t\t\t\t\t\t\t\t\t<h3>ТОО <q>Kazakhstan Council for Educational Travel</q></h3> \n\t\t\t\t\t\t\t\t\t<p>Казахстан Каунсл фо Эдьюкейшнл Трэвел </p>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<!-- __content -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"additional-page__content\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t<p>КСЕТ является партнером многих Университетов, колледжей, спонсорских организаций за рубежом, таких как INTRAX Work/Travel, IENA, 3Adventures, CHI, Alliance Abroad Group, ISE, Geo Visions, American Work Adventures, Experts AUPAIR, SIDC GROUP, ISMIRA, Steiner, International Language Schools of Canada Montreal, Regency College Brighton, Eurospeak College England, Concord International, St. Giles International, St. Andrew’s Cambridge, Enforex, Niagara College Toronto, Alpha Schools of English Malta, The Language Academy Florida USA и многих, многих других. Список наших иностранных партнеров постоянно пополняется, с их помощью мы осуществляем новые и интересные программы, открываем неизведанные маршруты нашим участникам!</p>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"row col-lg-12-col-md-12 mobile-visible container-carousel-mobile\">\n\t\t\t\t\t\t\t\t\t\t<!-- __carousel -->\n\t\t\t\t\t\t\t\t\t\t<ul class=\"carousel\">\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel01.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel02.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel02.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel03.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel03.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel01.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel02.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel02.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel03.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel03.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t</ul><!-- /.__carousel -->\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 \">\n\t\t\t\t\t\t\t\t\t\t\t<p>5 декабря 2017 года компания Kazakhstan Council for Educational Travel официально была принята в мировую ассоциацию - WYSE Travel Confederation, что еще больше повысило статус организации, как на рынке Казахстане, так и на международном уровне. Являясь членом международной ассоциации, у компании появляются права продвижения ряда международных программ в Казахстане и, конечно,  представление своей страны и культуры для других стран. Вступление в ассоциацию влечет ряд преимуществ перед множеством компаний, помогает активно продвигать программы и сотрудничать с самыми ведущими мировыми организациями.</p>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"position: relative;\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"caption mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t<h3>Образовательный туризм занимает самое важное место в деятельности компании!</h3>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-5 mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t\t<figure>\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/aircraft.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t<figcaption>Work <span>&amp; travel</span></figcaption>\n\t\t\t\t\t\t\t\t\t\t\t</figure>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-7 col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t<!-- __social -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-widget-social widget__social-network inline white mobile-visible\">\n\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social-network__list\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-mail\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-skype\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-facebook\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-twitter\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-instagram\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-vk\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /. __social -->\n\t\t\t\t\t\t\t\t\t\t\t<blockquote>\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"qoutes qoute-top\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\tВ рамках взаимовыгодного сотрудничества осуществляется ряд программ для студентов и молодежи от 18 до 45 лет. Главное требование для всех наших участников – знание английского языка на разговорном уровне, желание работать на иностранного работодателя, энергия и оптимизм, жажда путешествий, это основные критерии отбора. Все остальное – повышение квалификации, получение международного опыта работы, улучшение языковых навыков, познание новой культуры, новых людей и стран, улучшение благосостояния – все это будет неотъемлемой частью каждой из наших программ. Вы сможете осуществить мечту и достигнуть желаемого результата! Весь мир у ваших ног вместе с КСЕТ!\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"qoutes qoute-bottom\"></i> \n\t\t\t\t\t\t\t\t\t\t\t</blockquote>\n\t\t\t\t\t\t\t\t\t\t</div>\n<!-- \t\t\t\t\t\t\t\t\t\t<div class=\"overlay-bg bg-modal-history bg-modal-history-mobile mobile-visible\" style=\"top: -145px; bottom: 0; opacity: .2;\"></div> -->\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t<div class=\"mobile-visible btn-become-partner\">\t\n\t\t\t\t\t\t\t\t\t\t<a id=\"contact-manager05\" href=\"#managerModal\" class=\"toggle-modal-manager\">Стать партнером КСЕТ</a>\n\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t<div class=\"mobile-section mobile-visible section-brand-partners\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"brand-partner brand-partner-lg\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/Certificate_of_membership_201_17_KCET.jpg\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"brand-partner brand-partner-sm\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/IAPA-FULL-large.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"brand-partner brand-partner-sm\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ISIC61-1475148132-095d10ea90c2da9e172ea95983247a1d.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"brand-partner brand-partner-sm\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/2b3ccbb.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"brand-partner brand-partner-sm\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/b4ec73d1600fee60a4b252e55c5bcf32.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\n<div class=\"mobile-section mobile-visible btn-offset-up\">\n\t\t\t\t\t\t\t\t\t\t<!-- <a href=\"\" class=\"scrollable-up\">Вверх</a> -->\n\t\t\t\t\t\t\t\t\t\tВверх\n\t\t\t\t\t\t\t\t\t</div>\t\n\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-hidden\">\n                     \n\t\t\t\t\t\t\t\t<!-- __carousel -->\n\t\t\t\t\t\t\t\t<ul class=\"carousel\">\n\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel01.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel02.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel02.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel03.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel03.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel01.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel02.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel02.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel03.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel03.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t</ul><!-- /.__carousel -->\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\n                 <style>\n  \t\t\t\t\t.bx-wrapper{\n\t\t\t\t\t\t\t\t\t\tbox-shadow: none;\n\t\t\t\t\t\t\t\t\t\tborder: 0;\n\t\t\t\t\t\t\t\t\t\tbackground-color: transparent;\n\t\t\t\t\t\t\t\t\t\tmargin: 55px auto 0;\n\t\t\t\t\t\t\t\t\t\ttext-align: center\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-pager{\n\t\t\t\t\t\t\t\t\t\tpadding-top: 0;\n\t\t\t\t\t\t\t\t\t\tdisplay: none;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.carousel__item{\n\t\t\t\t\t\t\t\t\t\twidth: 275px !important;\n\t\t\t\t\t\t\t\t\t\t/*float: none;*/\n\t\t\t\t\t\t\t\t\t\theight: 195px;\n\t\t\t\t\t\t\t\t\t\tmargin-right: 15px !important;\n\t\t\t\t\t\t\t\t\t\t/*display: inline-block;*/\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.carousel__item img{\n\t\t\t\t\t\t\t\t\t\tposition: relative;\n\t\t\t\t\t\t\t\t\t\tmin-height: 100%;\n\t\t\t\t\t\t\t\t\t\tmin-width: 100%;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.carousel__item{\n\t\t\t\t\t\t\t\t\t\tdisplay: block;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a{\n\t\t\t\t\t\t\t\t\t\ttop: 0;\n\t\t\t\t\t\t\t\t\t\tmargin-top: 0;\n\t\t\t\t\t\t\t\t\t\theight: 100%;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-prev{\n\t\t\t\t\t\t\t\t\t\tleft: -2px;\n\t\t\t\t\t\t\t\t\t\tbackground: #27318b url(\"images/carousel-prev-yellow.png\") no-repeat center center;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.bx-wrapper .bx-controls-direction a.bx-next{\n\t\t\t\t\t\t\t\t\t\tright: -2px;\n\t\t\t\t\t\t\t\t\t\tbackground: #27318b url(\"images/carousel-next-yellow.png\") no-repeat center center;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.fancybox-overlay{\n\t\t\t\t\t\t\t\t\t\tz-index: 99998 !important;\n\t\t\t\t\t\t\t\t\t\toverflow: hidden !important;\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t.fancybox-opened{\n\t\t\t\t\t\t\t\t\t\tz-index: 99999 !important;\n\t\t\t\t\t\t\t\t\t}\n  </style>\n\n\t\t\t\t\t\t\t\t\t</div><!-- /.__body -->\n\n\t\t\t\t\t\t\t\t</div><!-- /.__col -->\n\n\t\t\t\t\t\t\t\t<!-- __col -->\n\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-3 mobile-hidden\">\n\t\t\t\t\t\t\t\t\t<!-- __sideleft -->\n\t\t\t\t\t\t\t\t\t<aside class=\"sideleft sideleft-fixed\">\n\n\t\t\t\t\t\t\t\t\t\t<!-- __logo -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"sideleft__logo\">\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/logo.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__logo -->\n\n\n\t\t\t\t\t\t\t\t\t\t<!-- __additional -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"sideleft__links\">\n\t\t\t\t\t\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__cursor\"></i>Почему мы?</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__pencil\"></i>Кратко про Summer W&amp;T</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__list\"></i>Требования для участия</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__note\"></i>Документы для участия  \n\t\t\t\t\t\t\t\t\t\t\t\t\tв программе</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__question\"></i>Пошаговое оформление</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__dollar\"></i>Стоимость программы \n\t\t\t\t\t\t\t\t\t\t\t\t\tWork and Travel 2017</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__search-engine\"></i>Поиск работы</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__rocket\"></i>Рабочие перспективы</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__briefcase\"></i>Деловой портфель</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__conversion\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\tНалоги</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__home\"></i>Проживание в США</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__comments\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\tНепутевые заметки</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"link-additional-articles\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a [routerLink]=\"['/articles']\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tВсе статьи</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__additional -->\n\n\t\t\t\t\t\t\t\t\t</aside><!-- /.__sideleft -->\n\t\t\t\t\t\t\t\t</div><!-- /.__col -->\n\n\t\t\t\t\t\t\t</div><!-- /.__row -->\t\n\t\t\t\t\t\t</div><!-- /.__container -->\n\t\t\t\t\t\t<div class=\"overlay-bg bg-modal-history mobile-hidden\"></div>\n\t\t\t\t\t\t<div class=\"overlay-bg bg-modal-history bg-modal-history-mobile mobile-visible\" style=\"background-position: top center\"></div>\n\t\t\t\t\t</div><!-- /.__content -->\n\t\t\t\t</div><!-- /.__body -->\n\t\t\t</div><!-- /.__scrollableContent -->\t\n\t\t</section><!-- our-contacts -->\n\n\t</div>\n\n\t<!-- __modal-news-subscription -->\n\t<div id=\"subscriptionModal\" class=\"news-subscription\">\n\t\t<div class=\"container mobile-hidden\">\n\t\t\t<div class=\"close close-subscriptionModal\"> \n\t\t\t\t<button type=\"button\" class=\"toggle-modal-subscription\"></button>\n\t\t\t</div>\n\t\t</div>\n\t\t<!-- __scrollable-Modal -->\n\t\t<div class=\"scrollableContent\">\n\t\t\t<div class=\"container-alignment\">\n\t\t\t\t<div class=\"alignment\">\n\t\t\t\t\t<div class=\"centered\">\n\n\t\t\t\t\t\t<div class=\"container\">\n\n\n\t\t\t\t\t\t\t<!-- __modal-content -->\n\t\t\t\t\t\t\t<div class=\"modal-content\">\n\n\t\t\t\t\t\t\t\t<!-- __headline -->\n\t\t\t\t\t\t\t\t<div class=\"request__headline mobile-hidden clearfix\">\n\n\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 headline__title\">\n\t\t\t\t\t\t\t\t\t\t<p> - на рассылку</p>\n\t\t\t\t\t\t\t\t\t\t<h4>Подписка</h4>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t<!-- __content -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 headline__content\">\n\t\t\t\t\t\t\t\t\t\t<p>Необходимо заполнить поле, для <span>того чтобы быть в курсе всех событий</span></p>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\n\t\t\t\t\t\t\t\t\t<!-- __logo -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 headline__logo\">\n\t\t\t\t\t\t\t\t\t\t<img src=\"images/headline-logo.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t</div><!-- /. __logo -->\n\n\t\t\t\t\t\t\t\t</div><!-- /.__headline -->\t\n\n\t\t\t\t\t\t\t\t<div class=\"container-form form-subscription\">\n\n\t\t\t\t\t\t\t\t\t<!-- content -->\n\t\t\t\t\t\t\t\t\t<div class=\"content-form content-form-subscription\">\n\t\t\t\t\t\t\t\t\t\t<form action=\"\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Email</label>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 btn-submit\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"\" id=\"\">отправить</button>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</form>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div><!-- /.__modal-content -->\n\n\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\t\n\t\t</div><!-- /.__scrollable-Modal -->\n\t</div><!-- /.__modal-news-subscription -->\n\n\t<!-- __modal-authorization -->\n\t<div id=\"authorizationModal\">\n\n\t\t<!-- __scrollable-Modal -->\n\t\t<div class=\"scrollableContent\">\n\t\t\t<div class=\"container-alignment\">\n\t\t\t\t<div class=\"alignment\">\n\t\t\t\t\t<div class=\"centered\">\n\n\t\t\t\t\t\t<div class=\"container\">\n\n\n\t\t\t\t\t\t\t<!-- __modal-content -->\n\t\t\t\t\t\t\t<div class=\"modal-content\">\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"sign-in-modal\">\n\t\t\t\t\t\t\t\t\t<div class=\"modal-title\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-title-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tВойти\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-title-action\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"close close-authorizationModal\"> \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"toggle-authorization-manager\"></button>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">\n\t\t\t\t\t\t\t\t\t\t<!-- <p class=\"login-form-welcome\">Привет</p> -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"login-form-container\">\n\t\t\t\t\t\t\t\t\t\t\t<form action=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-input-error\" style=\"display: none;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"error-message\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t*Введите свой адрес электронной почты.\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"login-email login-text-input\" placeholder=\"Адрес электронной почты\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-input-error\" style=\"display: none;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"error-message\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t*Введите свой адрес электронной почты.\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"login-password login-text-input\" placeholder=\"Пароль\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 text-left login-checkbox-input\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"remember-me\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked id=\"remember-me\" name=\"\" value=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-top: -1px\">Запомнить</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 text-right\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"\" name=\"\" class=\"login-submit-button\">Войти</button>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 forgot-password\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Забыли пароль?</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</form>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"hr-divider\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hr-divider-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tили\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"login-social-container\">\n\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"buttons-social-network\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-vk\">1</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-fb\">2</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-gp\">3</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-tw\">4</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div><!-- /.__modal-content -->\n\n\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\t\n\t\t</div><!-- /.__scrollable-Modal -->\n\n\t</div>\n\t<!-- /.__modal-login -->\n\n\t<!-- __modal-contact-manager -->\n\t<div id=\"managerModal\" class=\"contact-manager\">\n\n\t\t<div class=\"container mobile-hidden\">\n\t\t\t<div class=\"close close-managerModal\"> \n\t\t\t\t<button type=\"button\" class=\"toggle-modal-manager\"></button>\n\t\t\t</div>\n\t\t</div>\n\n\t\t<header class=\"mastheadModal-default mastheadModal-manager mobile-visible\">\n\t\t\t<div class=\"container\">\n\t\t\t\t<div class=\"row\">\n\n\t\t\t\t\t<div class=\"col-xs-3 text-left\">\n\t\t\t\t\t\t<div class=\"mobile-navbar__actions text-left\">\n\t\t\t\t\t\t\t<a href=\"\">Назад</a>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\n\t\t\t\t\t<div class=\"col-xs-6 text-center\">\n\t\t\t\t\t\t<div class=\"mobile-navbar__title\">\n\t\t\t\t\t\t\tСвязаться с менеджером по рекламе\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\n\t\t\t\t\t<div class=\"col-xs-3 text-right\">\n\t\t\t\t\t\t<div class=\"close close-managerModal\"> \n\t\t\t\t\t\t\t<button type=\"button\" class=\"toggle-modal-manager\"></button>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</header>\t\n\t\t\t\n\t\t<!-- __scrollable-Modal -->\n\t\t<div class=\"scrollableContent\">\n\t\t\t<div class=\"container-alignment\">\n\t\t\t\t<div class=\"alignment\">\n\t\t\t\t\t<div class=\"centered\">\n\n\t\t\t\t\t\t<div class=\"container\">\n\n\n\t\t\t\t\t\t\t<!-- __modal-content -->\n\t\t\t\t\t\t\t<div class=\"modal-content\">\n\n\t\t\t\t\t\t\t\t<!-- __headline -->\n\t\t\t\t\t\t\t\t<div class=\"request__headline mobile-hidden clearfix\">\n\n\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 headline__title\">\n\t\t\t\t\t\t\t\t\t\t<p> - связаться с менеджером</p>\n\t\t\t\t\t\t\t\t\t\t<h4>Реклама</h4>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t<!-- __content -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 headline__content\">\n\t\t\t\t\t\t\t\t\t\t<p>Необходимо заполнить все поля, после чего \n\t\t\t\t\t\t\t\t\t\t<span>с Вами свяжутся наши представители</span></p>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\n\t\t\t\t\t\t\t\t\t<!-- __logo -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 headline__logo\">\n\t\t\t\t\t\t\t\t\t\t<img src=\"images/headline-logo.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t</div><!-- /. __logo -->\n\n\t\t\t\t\t\t\t\t</div><!-- /.__headline -->\t\n\n\t\t\t\t\t\t\t\t<div class=\"container-form form-contact-manager\">\n\n\t\t\t\t\t\t\t\t\t<!-- content -->\n\t\t\t\t\t\t\t\t\t<div class=\"content-form content-contact-manager\">\n\t\t\t\t\t\t\t\t\t\t<form action=\"\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Название компании</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input-default\" id=\"\" name=\"\">\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\" style=\"padding-left: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\" style=\"padding-left: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Имя</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\" style=\"padding-left: 0; padding-right: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\" style=\"padding-left: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Фамилия</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\" style=\"padding-right: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\" style=\"padding-left: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\" style=\"padding-left: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Email </label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\" style=\"padding-left: 0; padding-right: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\" style=\"padding-left: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Телефон</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\" style=\"padding-right: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"\" id=\"\" class=\"input-default\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Описание</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"\" id=\"\" cols=\"30\" rows=\"10\" class=\"input-default\"></textarea>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-visible\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"caption-content-form\">Необходимо заполнить поле, для \n\t\t\t\t\t\t\t\t\t\t\t\t\t<span>того чтобы быть в курсе всех событий</span></p>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"field-input\" id=\"\" name=\"\" placeholder=\"Название компании\">\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"field-input\" id=\"\" name=\"\" placeholder=\"Имя\">\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"field-input\" id=\"\" name=\"\" placeholder=\"Фамилия\">\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"field-input\" id=\"\" name=\"\" placeholder=\"Email\">\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"field-input\" id=\"\" name=\"\" placeholder=\"Телефон\">\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"\" id=\"\" cols=\"30\" rows=\"10\" class=\"field-input\" placeholder=\"Описание\"></textarea>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 btn-submit\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"\" id=\"\">отправить</button>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</form>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div><!-- /.__modal-content -->\n\n\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\t\n\t\t</div><!-- /.__scrollable-Modal -->\n\n\t</div>\n\t<!-- /.__modal-contact-manager -->\n\n\n"

/***/ }),

/***/ 775:
/***/ (function(module, exports) {

module.exports = "\n\t\t<div id=\"slideoutMenu\" class=\"slideoutMenu mobile-visible\">\n\t\t<div class=\"mobile-navbar mobile-visible clearfix\">\n\t\t\t<button type=\"button\" class=\"toggleMenu\">Collapse</button>\n\t\t</div>\n\t\t<!-- __cover -->\n\t\t<div class=\"slideoutMenu__cover\">\n\t\t\t<div class=\"mobile-navbar mobile-visible clearfix\">\n\t\t\t\t<h3>Kazakhstan Counсil <span>for Educational Travel</span></h3>\n\t\t\t\t<button type=\"button\" class=\"toggleMenu\">Collapse</button>\n\t\t\t</div>\n\t\t\t<div class=\"slideoutMenu__action\">\n\t\t\t\t<ul>\n\t\t\t\t\t<li><button type=\"button\"><i class=\"icon icon-phone\">1</i></button></li>\n\t\t\t\t\t<li><button type=\"button\"><i class=\"icon icon-user\">2</i></button></li>\n\t\t\t\t\t<li><button type=\"button\"><i class=\"icon icon-mail\">3</i></button></li>\n\t\t\t\t</ul>\n\t\t\t</div>\n\t\t</div><!-- /.__cover -->\n\n\t\t<!-- __logo -->\n\t\t<div class=\"slideoutMenu__logo\">\n\t\t\t<a href=\"\">\n\t\t\t\t<img src=\"images/mobile-Logo.png\" alt=\"\">\n\t\t\t</a>\n\t\t</div><!-- /.__logo -->\n\n\t\t<div class=\"slideoutMenu__content\">\n\n\t\t\t<!-- __nav -->\n\t\t\t<nav class=\"slideoutMenu__nav\" id=\"scroll03\">\n\t\t\t\t<ul>\n\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"about-us.html\">На главную<i class=\"icon\"></i></a>\n\t\t\t\t\t</li>\t\n\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"about-us.html\">О компании <i class=\"icon\"></i></a>\n\t\t\t\t\t</li>\n\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"project.html\">Прокты КСЕТ <i class=\"icon\"></i></a>\n\t\t\t\t\t</li>\n\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"\">Друзья и попутчики <i class=\"icon\"></i></a>\n\t\t\t\t\t</li>\n\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"\">Форум <i class=\"icon\"></i></a>\n\t\t\t\t\t</li>\n\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"partners.html\">Партнеры и друзья <i class=\"icon\"></i></a>\n\t\t\t\t\t</li>\n\t\t\t\t\t<!-- <li>\n\t\t\t\t\t\t<a id=\"bonuses01\" class=\"toggle-modal-bonuses\" href=\"#bonusesModal\">Бонусы от партнеров <i class=\"icon\"></i></a>\n\t\t\t\t\t</li> -->\n\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"offers.html\">Горячие предложения <i class=\"icon\"></i></a>\n\t\t\t\t\t</li>\n\t\t\t\t</ul>\n\t\t\t</nav><!-- /.__nav -->\n\n\t\t\t<!-- __action -->\n\t\t\t<div class=\"slideoutMenu__action\">\n\t\t\t\t<ul>\n\t\t\t\t\t<li><button type=\"button\"><i class=\"icon icon-phone\">1</i></button></li>\n\t\t\t\t\t<li><button type=\"button\"><i class=\"icon icon-user\">2</i></button></li>\n\t\t\t\t\t<li><button type=\"button\"><i class=\"icon icon-mail\">3</i></button></li>\n\t\t\t\t</ul>\n\t\t\t</div><!-- /.__action -->\n\n\t\t\t<!-- __address -->\n\t\t\t<div class=\"slideoutMenu__address\">\n\t\t\t\t<i class=\"icon-address\"></i>\n\t\t\t\t<address>\n\t\t\t\t\t<span>Казахстан, г. Алматы (главный офис)</span>\n\t\t\t\t\tПроспект Сейфуллина 500, офис 47\n\t\t\t\t</address>\n\t\t\t</div><!-- /.__address -->\n\n\t\t</div>\n\t</div>\n\t\n\t<div id=\"articles\" class=\"base-container\">\n\n\t<!-- __masthead -->\n\t\t<header class=\"masthead\">\n\t\t\t<div class=\"container\">\n\t\t\t\t<div class=\"row mobile-hidden\">\n\t\t\t\t\t<a [routerLink]=\"['/index']\" class=\"link__back\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t<i class=\"icon\"></i>\n\t\t\t\t\t</a>\n\t\t\t\t\t<ul class=\"caterories__list\">\n\t\t\t\t\t\t<li class=\"caterories__item\">\n\t\t\t\t\t\t\t<a [routerLink]=\"['/programschoolchildren']\">\n\t\t\t\t\t\t\t\tПрограммы<br/> для школьников\n\t\t\t\t\t\t\t</a>  \n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li class=\"caterories__item current-link\">\n\t\t\t\t\t\t\t<a [routerLink]=\"['/articles']\">\n\t\t\t\t\t\t\t\tПрограммы<br/> для студентов и не только\n\t\t\t\t\t\t\t</a>  \n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li class=\"caterories__item\">\n\t\t\t\t\t\t\t<a [routerLink]=\"['/articles']\">\n\t\t\t\t\t\t\t\tДрузья и попутчики         \n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li class=\"caterories__item\">\n\t\t\t\t\t\t\t<a [routerLink]=\"['/articles']\">\n\t\t\t\t\t\t\t\tПерейти на форум\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<!-- __mobile -->\n\t\t\t<div class=\"mobile-navbar mobile-visible clearfix\">\n\t\t\t\t<div class=\"container text-center\">\n\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t<div class=\"col-xs-3\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__actions\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"pull-left toggleMenu\">Menu</button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"col-xs-6\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__title\">\n\t\t\t\t\t\t\t\tСписок статей\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"col-xs-3\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__actions text-right\">\n\t\t\t\t\t\t\t\t<div class=\"mobile-navbar__search\">\n\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"\" class=\"toggleSearch\" name=\"\"><i class=\"icon\"></i></button>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t\n\n\t\t\t\t<div class=\"container\">\n\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t<div class=\"mobile-navbar-search__form\">\n\t\t\t\t\t\t\n\t\t\t\t\t\t\t<form action=\"\" class=\"clearfix\">\n\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" id=\"\" placeholder=\"Что, будем искать?\" class=\"field-input\">\n\t\t\t\t\t\t\t\t\t<button type=\"button\" name=\"\" id=\"\" class=\"button-submit\"></button>\n\t\t\t\t\t\t\t\t\t<button type=\"button\" name=\"\" id=\"\" class=\"toggleSearch button-collapsed\"></button>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</form>\n<!-- collapsedSearch -->\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\n\t\t\t</div><!-- /.__mobile -->\n\t\t</header><!-- /.__masthead -->\n\n\t<!-- __wrap-container -->\n\t<section class=\"section articles\">\n\n\t\t<div class=\"scrollableContent\">\n\n\t\t<!-- __container-alignment -->\n\t\t\t<div class=\"container-alignment\">\n\t\t\t\t\n\t\t\t\t<div class=\"alignment\">\n\t\t\t\t\t\n\t\t\t\t\t<div class=\"centered\">\t\t\n\n\t\t\t\t\t<div class=\"container\">\n\t\t\t\t\t\t<!-- __row -->\n\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t<!-- col -->\n\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-9 col-xs-12\">\n\t\t\t\t\t\t\t\t<div class=\"content-container articles__content\">\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<!-- __scrollable-Modal -->\n\t\t\t\t\t\t\t\t<div class=\"scrollableContent\">\n\n\t\t\t\t\t\t\t\t<div class=\"list-articles\">\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t<div class=\"article article-short clearfix\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"article-thumbnail-wrap\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-thumbnail\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"article-content-wrap\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-heading\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"article-title\">Lorem ipsum dolor sit.</h4>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-xs-12 text-right\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"article-date-publication\">13.02.2016 г.</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-content article-short-description\">\n\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae sequi rerum quod modi, maiores amet, ipsum, dolor consequatur, nisi nobis vero. Ab consequatur, iste ullam sed fugiat quibusdam omnis eligendi.\n\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae sequi rerum quod modi, maiores amet, ipsum, dolor consequatur, nisi nobis vero. Ab consequatur, iste ullam sed fugiat quibusdam omnis eligendi.</p>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"view-article.html\" class=\"article-button\">Подробнее</a>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t<div class=\"article article-short clearfix\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"article-thumbnail-wrap\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-thumbnail\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"article-content-wrap\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-heading\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"article-title\">Lorem ipsum dolor sit.</h4>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 text-right\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"article-date-publication\">13.02.2016 г.</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-content article-short-description\">\n\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae sequi rerum quod modi, maiores amet, ipsum, dolor consequatur, nisi nobis vero. Ab consequatur, iste ullam sed fugiat quibusdam omnis eligendi.\n\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae sequi rerum quod modi, maiores amet, ipsum, dolor consequatur, nisi nobis vero. Ab consequatur, iste ullam sed fugiat quibusdam omnis eligendi.</p>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"view-article.html\" class=\"article-button\">Подробнее</a>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t<div class=\"article article-short clearfix\">\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t<div class=\"article-content-wrap\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-heading\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"article-title\">Lorem ipsum dolor sit.</h4>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 text-right\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"article-date-publication\">13.02.2016 г.</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-content article-short-description\">\n\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae sequi rerum quod modi, maiores amet, ipsum, dolor consequatur, nisi nobis vero. Ab consequatur, iste ullam sed fugiat quibusdam omnis eligendi.\n\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae sequi rerum quod modi, maiores amet, ipsum, dolor consequatur, nisi nobis vero. Ab consequatur, iste ullam sed fugiat quibusdam omnis eligendi.</p>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"view-article.html\" class=\"article-button\">Подробнее</a>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t<div class=\"article article-short clearfix\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"article-thumbnail-wrap\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-thumbnail\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"article-content-wrap\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-heading\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"article-title\">Lorem ipsum dolor sit.</h4>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 text-right\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"article-date-publication\">13.02.2016 г.</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-content article-short-description\">\n\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae sequi rerum quod modi, maiores amet, ipsum, dolor consequatur, nisi nobis vero. Ab consequatur, iste ullam sed fugiat quibusdam omnis eligendi.\n\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae sequi rerum quod modi, maiores amet, ipsum, dolor consequatur, nisi nobis vero. Ab consequatur, iste ullam sed fugiat quibusdam omnis eligendi.</p>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"view-article.html\" class=\"article-button\">Подробнее</a>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t</div>\t\t\n\n\t\t\t\t\t\t\t\t</div><!-- /.__scrollable-Modal -->\n\n\t\t\t\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\t\t</div><!-- /.__col -->\n\n\t\t\t\t\t\t\t<!-- __col -->\n\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-3 mobile-hidden\">\n\t\t\t\t\t\t\t\t<!-- __sideleft -->\n\t\t\t\t\t\t\t\t<aside class=\"sideleft categories-articles\">\n\n\t\t\t\t\t\t\t\t\t<!-- __additional -->\n\t\t\t\t\t\t\t\t\t<div class=\"sideleft__links\">\n\t\t\t\t\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__cursor\"></i>Почему мы?</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__pencil\"></i>Кратко про Summer W&amp;T</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__list\"></i>Требования для участия</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__note\"></i>Документы для участия  \n\t\t\t\t\t\t\t\t\t\t\t\tв программе</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__question\"></i>Пошаговое оформление</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__dollar\"></i>Стоимость программы \n\t\t\t\t\t\t\t\t\t\t\t\tWork and Travel 2017</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__search-engine\"></i>Поиск работы</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"link__icon icon__rocket\"></i>Рабочие перспективы</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__briefcase\"></i>Деловой портфель</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__conversion\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\tНалоги</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__home\"></i>Проживание в США</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"link__icon icon__comments\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\tНепутевые заметки</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"link-additional-articles\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a [routerLink]=\"['/articles']\">\n\t\t\t\t\t\t\t\t\t\t\t\tВсе статьи</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__additional -->\n\n\t\t\t\t\t\t\t\t</aside><!-- /.__sideleft -->\n\t\t\t\t\t\t\t</div><!-- /.__col -->\n\n\t\t\t\t\t\t\t\t\t\t\n<div class=\"mobile-section mobile-visible btn-offset-up\">\n\t\t\t\t\t\t\t\t\t\t\tВверх\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div><!-- /.__row -->\n\t\t\t\t\t</div>\n\n\n\t\t\t\t\t</div>\n\n\t\t\t\t</div>\n\n\t\t\t</div><!--/.__container-alignment -->\n\n\t\t</div>\t\n\n\t</section>\n\n\t</div>\n\n<div class=\"additional-pages page-view-news\" id=\"newsModal\">\n\n\t<!-- __scrollable -->\n\t<div class=\"scrollableContent\">\n\t\n\n\t\t<!-- __mobile -->\n\t\t\t<div class=\"mobile-navbar mobile-navbar-light mobile-visible clearfix\">\n\t\t\t\t<div class=\"container text-center\">\n\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t<div class=\"col-xs-3\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__actions text-left\">\n\t\t\t\t\t\t\t\t<a href=\"index.html\">Назад</a>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"col-xs-6\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__title\">\n\t\t\t\t\t\t\t\tГорящие предложения\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"col-xs-3\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__actions text-right\">\n\t\t\t\t\t\t\t\t<div class=\"close close-newsModal\"> \n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"toggle-additional-page\"></button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div><!-- /.__mobile -->\t\n\t\t<!-- __body -->\n\t\t<div class=\"modal-body\">\n\t\t\t<div class=\"additional-pages-container modal-content\">\n\t\t\t\t<div class=\"container\">\n\n\t\t\t\t<div class=\"view-news\">\n\t\t\t\t\t<div class=\"img-news\">\n\t\t\t\t\t\t<img src=\"images/9233032c-5e28-45b8-89d3-6485a3c7679e1.jpg\" alt=\"\">\n\t\t\t\t\t</div>\n\t\t\t\t\t<!-- text -->\n\t\t\t\t\t<div class=\"text-news\">\n\t\t\t\t\t\t<h5>Что такое <strong>Lorem Ipsum?</strong></h5>\n\t\t\t\t\t\t<p><strong>Lorem Ipsum</strong> - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. </p>\n\n\t\t\t\t\t\t<a id=\"subscription02\" href=\"#subscriptionModal\" class=\"toggle-modal-subscription btn-subscribe-news\">\n\t\t\t\t\t\t\t<p>Подписаться на рассылку новостей\n\t\t\t\t\t\t\t<span>Kazakhstan Council for Educational Travel</span></p>\n\t\t\t\t\t\t</a>\t\n\n\t\t\t\t\t\t<p>Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>\n\n\t\t\t\t\t\t<a id=\"contact-manager04\" href=\"#managerModal\" class=\"toggle-modal-manager btn-feedback\">Связаться </a>\n\n\t\t\t\t\t</div>\n\t\t\t\t\n\t\t\t\t</div>\n\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div><!-- /.__body -->\n\n\n\t</div><!-- /.__scrollable -->\n\n\t\n\t\t\n\t</div>\n\n\n<!-- __modal-news-subscription -->\n\t<div id=\"subscriptionModal\" class=\"news-subscription\">\n\t\t<div class=\"container mobile-hidden\">\n\t\t\t<div class=\"close close-subscriptionModal\"> \n\t\t\t\t<button type=\"button\" class=\"toggle-modal-subscription\"></button>\n\t\t\t</div>\n\t\t</div>\n\t\t<header class=\"mastheadModal-default mastheadModal-subscription mobile-visible\">\n\t\t\t<div class=\"container\">\n\t\t\t\t<div class=\"row\">\n\n\t\t\t\t\t<div class=\"col-xs-3 text-left\">\n\t\t\t\t\t\t<div class=\"mobile-navbar__actions text-left\">\n\t\t\t\t\t\t\t<a href=\"\">Назад</a>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\n\t\t\t\t\t<div class=\"col-xs-6 text-center\">\n\t\t\t\t\t\t<div class=\"mobile-navbar__title\">\n\t\t\t\t\t\t\tПодписка на рассылку\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\n\t\t\t\t\t<div class=\"col-xs-3 text-right\">\n\t\t\t\t\t\t<div class=\"close close-subscriptionModal\"> \n\t\t\t\t\t\t\t<button type=\"button\" class=\"toggle-modal-subscription\"></button>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</header>\n\t\t<!-- __scrollable-Modal -->\n\t\t<div class=\"scrollableContent\">\n\t\t\t<div class=\"container-alignment\">\n\t\t\t\t<div class=\"alignment\">\n\t\t\t\t\t<div class=\"centered\">\n\n\t\t\t\t\t\t<div class=\"container\">\n\n\n\t\t\t\t\t\t\t<!-- __modal-content -->\n\t\t\t\t\t\t\t<div class=\"modal-content\">\n\n\t\t\t\t\t\t\t\t<!-- __headline -->\n\t\t\t\t\t\t\t\t<div class=\"request__headline mobile-hidden clearfix\">\n\n\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 headline__title\">\n\t\t\t\t\t\t\t\t\t\t<p> - на рассылку</p>\n\t\t\t\t\t\t\t\t\t\t<h4>Подписка</h4>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t<!-- __content -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 headline__content\">\n\t\t\t\t\t\t\t\t\t\t<p>Необходимо заполнить поле, для <span>того чтобы быть в курсе всех событий</span></p>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\n\t\t\t\t\t\t\t\t\t<!-- __logo -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 headline__logo\">\n\t\t\t\t\t\t\t\t\t\t<img src=\"images/headline-logo.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t</div><!-- /. __logo -->\n\n\t\t\t\t\t\t\t\t</div><!-- /.__headline -->\t\n\n\t\t\t\t\t\t\t\t<div class=\"container-form form-subscription\">\n\n\t\t\t\t\t\t\t\t\t<!-- content -->\n\t\t\t\t\t\t\t\t\t<div class=\"content-form content-form-subscription\">\n\t\t\t\t\t\t\t\t\t\t<form action=\"\">\n\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mobile-hidden\">\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Email</label>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10 col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mobile-visible\">\n\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"caption-content-form\">Необходимо заполнить поле, для <span>того чтобы быть в курсе всех событий</span></p>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mobile-visible\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" id=\"\" class=\"field-input\" placeholder=\"Email\">\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 btn-submit\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"\" id=\"\">отправить</button>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</form>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div><!-- /.__modal-content -->\n\n\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\t\n\t\t</div><!-- /.__scrollable-Modal -->\n\t</div><!-- /.__modal-news-subscription -->\n\n\t<!-- __modal-authorization -->\n\t<div id=\"authorizationModal\">\n\n\t\t<!-- __scrollable-Modal -->\n\t\t<div class=\"scrollableContent\">\n\t\t\t<div class=\"container-alignment\">\n\t\t\t\t<div class=\"alignment\">\n\t\t\t\t\t<div class=\"centered\">\n\n\t\t\t\t\t\t<div class=\"container\">\n\n\n\t\t\t\t\t\t\t<!-- __modal-content -->\n\t\t\t\t\t\t\t<div class=\"modal-content\">\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"sign-in-modal\">\n\t\t\t\t\t\t\t\t\t<div class=\"modal-title\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-title-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tВойти\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-title-action\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"close close-authorizationModal\"> \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"toggle-authorization-manager\"></button>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">\n\t\t\t\t\t\t\t\t\t\t<!-- <p class=\"login-form-welcome\">Привет</p> -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"login-form-container\">\n\t\t\t\t\t\t\t\t\t\t\t<form action=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-input-error\" style=\"display: none;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"error-message\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t*Введите свой адрес электронной почты.\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"login-email login-text-input\" placeholder=\"Адрес электронной почты\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-input-error\" style=\"display: none;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"error-message\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t*Введите свой адрес электронной почты.\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"login-password login-text-input\" placeholder=\"Пароль\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 text-left login-checkbox-input\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"remember-me\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked id=\"remember-me\" name=\"\" value=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-top: -1px\">Запомнить</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 text-right\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"\" name=\"\" class=\"login-submit-button\">Войти</button>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 forgot-password\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Забыли пароль?</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</form>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"hr-divider\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hr-divider-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tили\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"login-social-container\">\n\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"buttons-social-network\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-vk\">1</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-fb\">2</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-gp\">3</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-tw\">4</button></li>\n\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div><!-- /.__modal-content -->\n\n\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\t\n\t\t</div><!-- /.__scrollable-Modal -->\n\n\t</div>\n\t<!-- /.__modal-login -->\n\n\t<!-- __modal-project -->\n\t<div id=\"projectModal\">\n\t\t<!-- __inner -->\n\t\t<div class=\"scrollableContent\">\n\n\t\t\t<div class=\"overlay-bg-static mobile-hidden\"></div>\n\n\t\t\t\n\t\t\t<!-- __head -->\n\t\t\t<div class=\"modal__head mobile-hidden\">\n\t\t\t\t<div class=\"container\">\n\t\t\t\t\t<div class=\"close close-projectModal\"> \n\t\t\t\t\t  <button type=\"button\" class=\"toggle-modal toggle-modal-project\"></button>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div><!-- /.__head -->\n\n\t\t\t<header class=\"mastheadModal-default mastheadModal-additional-pages mobile-visible\">\n\t\t\t\t<div class=\"container\">\n\t\t\t\t\t<div class=\"row\">\n\n\t\t\t\t\t\t<div class=\"col-xs-3 text-left\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__actions text-left\">\n\t\t\t\t\t\t\t\t<a href=\"index.html\">Назад</a>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t<div class=\"col-xs-6 text-center\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__title\">\n\t\t\t\t\t\t\t\tНазвание статьи\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t<div class=\"col-xs-3 text-right\">\n\t\t\t\t\t\t\t<div class=\"close close-projectModal\"> \n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"toggle-modal toggle-modal-project\"></button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</header>\n\t\t\t\n\t\t\t<!-- __body -->\n\t\t\t<div class=\"modal__body\">\n\n\t\t\t\t\n\t\t\t\n\t\t\t\t\t<!-- __modal-content -->\n\t\t\t\t\t<div class=\"modal-content\">\n\t\t\t\t\t<div class=\"overlay-bg bg-modal-project mobile-hidden\"></div>\n\n\t\t\t\t\t<!-- __container -->\n\t\t\t\t\t<div class=\"container\">\n\n\t\t\t\t\t\t<!-- __row -->\n\t\t\t\t\t\t<div class=\"row\">\n\n\t\t\t\t\t\t\t<!-- __col -->\n\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-8\">\n\n\t\t\t\t\t\t\t\t<div class=\"article article-full\">\n\n\t\t\t\t\t\t\t\t\t<div class=\"article-heading\">\n\t\t\t\t\t\t\t\t\t\t<h3 class=\"article-title article-title-wordart\">lorem Ipsum</h3>\n\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10 text-center\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"article-title\">Lorem Ipsum is  simply dummy text</h4>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 text-right\">\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"article-date-publication\">13.02.2016 г.</span>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t<div class=\"article-content article-full-description\">\n\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n\t\t\t\t\t\t\t\t\t\t<figure>\n\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/thumb01.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t<figcaption>\n\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why do we use it?</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\tIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\n\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>\n\t\t\t\t\t\t\t\t\t\t\t</figcaption>\n\t\t\t\t\t\t\t\t\t\t</figure>\n\t\t\t\t\t\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\n\t\t\t\t\t\t\t\t\t\t<p>·There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\n\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t</div> \n\n\t\t\t\t\t\t\t\t<div class=\"additional-articles\">\n\t\t\t\t\t\t\t\t\t<div class=\"similar-articles\">\n\t\t\t\t\t\t\t\t\t\t<h3 class=\"similar-articles-title\">Lorem ipsum dolor sit amet</h3>\n\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dignissimos inventore obcaecati numquam voluptatum tempora ad tempore. Molestiae beatae maiores, provident fuga, eos dolorem, dicta consectetur culpa numquam atque facilis.</p>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<!-- __list -->\n\t\t\t\t\t\t\t\t\t<div class=\"row program__list clearfix\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t<!-- __item -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"program__small program__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __date -->\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- day -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t02\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__day -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- month-year -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__month-year -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__date -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __detail -->\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- __text -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t..........................................</p>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- __link -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a><!-- /.__link -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__text -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__detail -->\n\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__item -->\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t<!-- __item -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"program__small program__item\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __date -->\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- day -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t02\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__day -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- month-year -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__month-year -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__date -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __detail -->\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- __text -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t..........................................</p>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- __link -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a><!-- /.__link -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__text -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__detail -->\n\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__item -->\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t<!-- __item -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"program__small program__item\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __date -->\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- day -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t02\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__day -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- month-year -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__month-year -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__date -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __detail -->\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- __text -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t..........................................</p>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- __link -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a><!-- /.__link -->\n\t<!-- \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-white\"></div> -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__text -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__detail -->\n\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__item -->\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t<!-- __item -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"program__small program__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __date -->\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- day -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t02\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__day -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- month-year -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__month-year -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__date -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __detail -->\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- __text -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t..........................................</p>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- __link -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a><!-- /.__link -->\n\t<!-- \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-white\"></div> -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__text -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__detail -->\n\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__item -->\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__list -->\n\t\t\t\t\t\t\t\t</div>\t\n\n\t\t\t\t\t\t\t</div><!-- /.__col -->\n\n\t\t\t\t\t\t\t<!-- __col -->\n\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 mobile-hidden\">\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<!-- __sideleft -->\n\t\t\t\t\t\t\t\t<aside class=\"sideleft\">\n\n\t\t\t\t\t\t\t\t\t<!-- __logo -->\n\t\t\t\t\t\t\t\t\t<div class=\"sideleft__logo\">\n\t\t\t\t\t\t\t\t\t\t<a href=\"\">\n\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/logo.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__logo -->\n\n\t\t\t\t\t\t\t\t\t<ul class=\"carousel-vertical carousel-vertical-min\" style=\"padding: 0;\">\n\n\t\t\t\t\t\t\t\t\t\t<li class=\"carousel-vertical__item\">\n\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/ir4.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ir4.jpg\">\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t<li class=\"carousel-vertical__item\">\n\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/ir4.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY) 01\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ir4.jpg\">\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t<li class=\"carousel-vertical__item\">\n\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/ir4.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY) 02\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ir4.jpg\">\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t<li class=\"carousel-vertical__item\">\n\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/ir4.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY) 03\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ir4.jpg\">\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t<li class=\"carousel-vertical__item\">\n\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/ir4.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY) 04\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ir4.jpg\">\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t<li class=\"carousel-vertical__item\">\n\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/ir4.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY) 05\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ir4.jpg\">\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t<li class=\"carousel-vertical__item\">\n\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/ir4.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY) 06\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ir4.jpg\">\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t<li class=\"carousel-vertical__item\">\n\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/ir4.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY) 07\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ir4.jpg\">\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t</ul><!-- /.__carousel-vertical -->\n\n\t\t\t\t\t\t\t\t</aside><!-- /.__sideleft -->\n\n\t\t\t\t\t\t\t</div><!-- /.__col -->\n\n\t\t\t\t\t\t</div><!-- /.__row -->\n\n\t\t\t\t\t\t</div><!-- /.__container -->\n\t\t\t\t\t\n\t\t\t\t\t</div><!-- /.__modal-content -->\n\n\t\t\t</div><!-- /.body -->\n\n\t\t</div><!-- /.__inner -->\n\n\t</div><!-- /.__modal-project -->\n\n\n"

/***/ }),

/***/ 776:
/***/ (function(module, exports) {

module.exports = "<div class=\"vertical-navbar__subscribe\">\n    <a id=\"subscription\" href=\"#subscriptionModal\" class=\"toggle-modal-subscription\">Подписка на рассылку</a>\n</div>"

/***/ }),

/***/ 777:
/***/ (function(module, exports) {

module.exports = "<div class=\"widget__social-network inline blue pull-right animated bounceInRight mobile-hidden\">\n  <ul class=\"social-network__list\">\n    <li>\n      <a href=\"#\"><i class=\"icon icon-mail\"></i></a>\n    </li>\n    <li>\n      <a href=\"#\"><i class=\"icon icon-skype\"></i></a>\n    </li>\n    <li>\n      <a href=\"#\"><i class=\"icon icon-facebook\"></i></a>\n    </li>\n    <li>\n      <a href=\"#\"><i class=\"icon icon-twitter\"></i></a>\n    </li>\n    <li>\n      <a href=\"#\"><i class=\"icon icon-instagram\"></i></a>\n    </li>\n    <li>\n      <a href=\"#\"><i class=\"icon icon-vk\"></i></a>\n    </li>\n  </ul>\n</div>"

/***/ }),

/***/ 778:
/***/ (function(module, exports) {

module.exports = "<header class=\"masthead\">\n  <div class=\"container\">\n    <div class=\"masthead__select-languages mobile-hidden\">\n      <div class=\"select-language__button\">\n        <button type=\"button\">ru</button>\n      </div>\n      <div class=\"select-language__button\">\n        <button type=\"button\">eng</button>\n      </div>\n    </div>\n    <div class=\"masthead__our-contacts mobile-hidden\">\n        <div class=\"contact__phone\">\n          <a href=\"tel: +7 (747) 250-7777\">+7 (747) 250-7777</a>\n        </div>\n        <div class=\"contact__email\">\n          или пишите на <a href=\"mailto: wat@kcet.kz\">wat@kcet.kz</a>\n        </div>\n    </div> \n    <div class=\"masthead__our-address mobile-hidden\">\n\t\t\t\t\t<address>\n              Казахстан, г. Алматы (главный офис)\n              <span>Проспект Сейфуллина 500, офис 47</span>\n\t\t\t\t\t</address>\n\t\t</div>\n    <div class=\"masthead__user mobile-hidden\">\n      <div class=\"user__search\">\n        <form action=\"\" name=\"\" id=\"\">\n          <input type=\"text\" name=\"\" id=\"\">\n          <button type=\"submit\" name=\"\" id=\"\"></button>\n        </form>\n      </div>\n      <div class=\"user__login\">\n        <a id=\"authorization\" class=\"toggle-modal-authorization\" href=\"#authorizationModal\">1</a>\n      </div>\n    </div>\n    </div>\n    <div class=\"mobile-navbar mobile-visible clearfix\">\n      <div class=\"container\">\n        <h3>Kazakhstan Counсil <span>for Educational Travel</span></h3>\n        <button type=\"button\" class=\"toggleMenu\">Menu</button>\n      </div>\n    </div>\n</header>\n"

/***/ }),

/***/ 779:
/***/ (function(module, exports) {

module.exports = "<div class=\"content__head clearfix\">\n<div class=\"content__head-cover mobile-visible\">\n<img src=\"images/personages.png\" alt=\"\">\n</div>\n<div class=\"content__title animated fadeInUp mobile-hidden\">\n<h1>Kazakhstan Counсil for Educational Travel</h1>\n</div>\n<div class=\"content__title content__title-mobile animated fadeInUp mobile-visible\">\n<h4>КСЕТ давно сотрудничает со многими представителями в разных городах Казахстана и России.</h4>\n</div>\n<div class=\"content__caption animated fadeInUp mobile-hidden\">\n<p>КСЕТ давно сотрудничает со многими представителями в разных городах Казахстана и России. <a href=\"#\">Среди наших партнеров</a> многие университеты, колледжи, спонсорские организации за рубежом, такие как: INTRAX, Council for Educational Travel USA (CETUSA), Alliance Abroad Group, IENA, Cultural Homestay International, International Student Exchange, American Work Adventures, SIDC GROUP (Latvia), Ismira, Kaplan Aspect и многие другие.</p>\n</div>\n<div class=\"content__caption content__caption-mobile animated fadeInUp mobile-visible\">\n<p> \n<a href=\"#\">Среди наших партнеров</a> многие университеты, колледжи, спонсорскиеорганизаций за рубежом, такихе как: INTRAX, Council for Educational Travel USA (CETUSA), Alliance Abroad Group, IENA, Cultural Homestay International, International Student Exchange, American Work Adventures, SIDC GROUP (Latvia), Ismira, Kaplan Aspect и многие </p>\n</div>\n</div>\n<div class=\"content__body animated fadeInUp\">\n<div class=\"content__scroll mobile-hidden\" id=\"scroll\">\n<div class=\"partners__brand-logo\">\n<div class=\"row brand-logo__list\">\n<div class=\"col-lg-2 col-md-2 col-xs-2 brand-logo__item\">\n<a href=\"\"><img src=\"images/brand-logo01.png\" alt=\"\"></a>\n</div>\n<div class=\"col-lg-2 col-md-2 col-xs-2 brand-logo__item\">\n<a href=\"\"><img src=\"images/brand-logo01.png\" alt=\"\"></a>\n</div>\n<div class=\"col-lg-2 col-md-2 col-xs-2 brand-logo__item\">\n<a href=\"\"><img src=\"images/brand-logo01.png\" alt=\"\"></a>\n</div>\n<div class=\"col-lg-2 col-md-2 col-xs-2 brand-logo__item\">\n<a href=\"\"><img src=\"images/brand-logo01.png\" alt=\"\"></a>\n</div>\n<div class=\"col-lg-2 col-md-2 col-xs-2 brand-logo__item\">\n<a href=\"\"><img src=\"images/brand-logo01.png\" alt=\"\"></a>\n</div>\t\n<div class=\"col-lg-2 col-md-2 col-xs-2 brand-logo__item\">\n<a href=\"\"><img src=\"images/brand-logo01.png\" alt=\"\"></a>\n</div>\n<div class=\"col-lg-2 col-md-2 brand-logo__item\">\n<a href=\"\"><img src=\"images/brand-logo01.png\" alt=\"\"></a>\n</div>\n<div class=\"col-lg-2 col-md-2 col-xs-2 brand-logo__item\">\n<a href=\"\"><img src=\"images/brand-logo01.png\" alt=\"\"></a>\n</div>\n<div class=\"col-lg-2 col-md-2 col-xs-2 brand-logo__item\">\n<a href=\"\"><img src=\"images/brand-logo01.png\" alt=\"\"></a>\n</div>\n<div class=\"col-lg-2 col-md-2 col-xs-2 brand-logo__item\">\n<a href=\"\"><img src=\"images/brand-logo01.png\" alt=\"\"></a>\n</div>\n<div class=\"col-lg-2 col-md-2 col-xs-2 brand-logo__item\">\n<a href=\"\"><img src=\"images/brand-logo01.png\" alt=\"\"></a>\n</div>\n<div class=\"col-lg-2 col-md-2 col-xs-2 brand-logo__item\">\n<a href=\"\"><img src=\"images/brand-logo01.png\" alt=\"\"></a>\n</div><!-- /.__item -->\n\n</div><!-- /.__list -->\t\n\n</div>\n<!-- /.__brand-logo -->\n\n</div>\n\n<div class=\"section-mobile mobile-partners-brand-logo container-carousel-mobile mobile-visible\">\n<!-- __carousel -->\n<ul class=\"carousel carousel-partners\">\n<li class=\"carousel__item\">\n<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/brand-logo01.png\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n<img src=\"images/logoKCET.png\" alt=\"CarouselItem\">\n</a>\n</li>\n<li class=\"carousel__item active-slide\">\n<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/brand-logo01.png\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n<img src=\"images/logoKCET.png\" alt=\"CarouselItem\">\n</a>\n</li>\n<li class=\"carousel__item\">\n<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/brand-logo01.png\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n<img src=\"images/logoKCET.png\" alt=\"CarouselItem\">\n</a>\n</li>\n<li class=\"carousel__item\">\n<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/brand-logo01.png\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n<img src=\"images/logoKCET.png\" alt=\"CarouselItem\">\n</a>\n</li>\n<li class=\"carousel__item\">\n<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/brand-logo01.png\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n<img src=\"images/logoKCET.png\" alt=\"CarouselItem\">\n</a>\n</li>\n<li class=\"carousel__item\">\n<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/brand-logo01.png\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n<img src=\"images/logoKCET.png\" alt=\"CarouselItem\">\n</a>\n</li>\n</ul><!-- /.__carousel -->\n</div>\n<!-- </div> -->\n\n<!-- __coordinator -->\t\t\t\t\t\n<div class=\"partners__coordinator\">\n\n<!-- __headline -->\n<div class=\"coordinator__headline\">\n<h3>OPEN POOL</h3>\n</div><!-- /.__headline -->\n\n\n<!-- __list -->\n<div class=\"coordinator__list\">\n\n<div id=\"scroll01\">\n\n<ul>\n\n<!-- __item -->\n<li class=\"coordinator__item\">\n<a href=\"\">\n<h3>Coordinator of International Programs (is open at Almaty office)</h3>\n</a>\t\n<p>Координатор зарубежных программ). Открыта в офисе Алматы.</p>\n</li><!-- /.__item -->\n\n<!-- __item -->\n<li class=\"coordinator__item\">\n<a href=\"\">\n<h3>Regional Representative of KCET (is open in Kazakhstan)</h3>\n</a>\t\n<p>Региональный представитель KCET (открыта в Казахстане)</p>\n</li><!-- /.__item -->\n\n<!-- __item -->\n<li class=\"coordinator__item\">\n<a href=\"\">\n<h3>KCET Promoter (is open in Almaty, Astana, Karaganda, Taraz, Kostanay)</h3>\n</a>\t\n<p>KCET Промоутер (раздача листовок, расклейка объявлений, организация и   \n<span>проведение презентаций на территории ВУЗов). Открыта в Алматы, Астане,</span> \nКараганде, Таразе, Костанае.</p>\n</li><!-- /.__item -->\n\n<!-- __item -->\n<li class=\"coordinator__item\">\n<a href=\"\">\n<h3>KCET University Representative (is open in Almaty, Astana, Taraz, Kostanay, Karaganda). </h3>\n</a>\t\n<p>Представитель ВУЗа КСЕТ (открыта в Алматы, Астане, Таразе, Костанае, Караганде).</p>\n</li><!-- /.__item -->\n\n<!-- __item -->\n<li class=\"coordinator__item\">\n<a href=\"\">\n<h3>KCET School Representative (is open in Almaty, Astana, Karaganda, Kostanay, Taraz).</h3>\n</a>\t\n<p>Представитель школы КСЕТ (открыта в Алматы, Астане, Караганде, Костанае, Таразе).</p>\n</li><!-- /.__item -->\n\n</ul>\n\n</div>\n\n</div><!-- /.__list -->\n\n<!-- </div> -->\n\n</div><!-- /.__coordinator -->\n\n<!-- __social -->\n<div class=\"mobile-widget-social widget__social-network inline white mobile-visible\">\n\n<ul class=\"social-network__list\">\n<li>\n<a href=\"#\"><i class=\"icon icon-mail\"></i></a>\n</li>\n<li>\n<a href=\"#\"><i class=\"icon icon-skype\"></i></a>\n</li>\n<li>\n<a href=\"#\"><i class=\"icon icon-facebook\"></i></a>\n</li>\n<li>\n<a href=\"#\"><i class=\"icon icon-twitter\"></i></a>\n</li>\n<li>\n<a href=\"#\"><i class=\"icon icon-instagram\"></i></a>\n</li>\n<li>\n<a href=\"#\"><i class=\"icon icon-vk\"></i></a>\n</li>\n</ul>\n</div><!-- /. __social -->\n\n<div class=\"row download-instruction mobile-visible\">\t\n<div class=\"col-xs-12\">\n<!-- __caption -->\n<div class=\"file__caption\">Этапы сотрудничества</div><!-- /.__caption -->\n<!-- __button -->\n\n<div class=\"file__button\">\n<a href=\"/path..\" download>cкачать pdf</a>\n</div><!-- /.__button -->\n</div>\n</div>\n\n<!-- __additional -->\n<div class=\"additional__links mobile-visible\">\n<ul>\n<li>\n<a href=\"\"><i class=\"link__icon icon__cursor\"></i>Почему мы?</a>\n</li>\n<li>\n<a href=\"\"><i class=\"link__icon icon__pencil\"></i>Кратко про Summer W&amp;T</a>\n</li>\n<li>\n<a href=\"\"><i class=\"link__icon icon__list\"></i>Требования для участия</a>\n</li>\n<li>\n<a href=\"\"><i class=\"link__icon icon__note\"></i>Документы для участия  \nв программе</a>\n</li>\n<li>\n<a href=\"\"><i class=\"link__icon icon__question\"></i>Пошаговое оформление</a>\n</li>\n<li>\n<a href=\"\"><i class=\"link__icon icon__dollar\"></i>Стоимость программы \nWork and Travel 2017</a>\n</li>\n<li>\n<a href=\"\"><i class=\"link__icon icon__search-engine\"></i>Поиск работы</a>\n</li>\n<li>\n<a href=\"\"><i class=\"link__icon icon__rocket\"></i>Рабочие перспективы</a>\n</li>\n<li>\n<a href=\"\">\n<i class=\"link__icon icon__briefcase\"></i>Деловой портфель</a>\n</li>\n<li>\n<a href=\"\">\n<i class=\"link__icon icon__conversion\"></i>\nНалоги</a>\n</li>\n<li>\n<a href=\"\">\n<i class=\"link__icon icon__home\"></i>Проживание в США</a>\n</li>\n<li>\n<a href=\"\">\n<i class=\"link__icon icon__comments\"></i>\nНепутевые заметки</a>\n</li>\n</ul>\n</div>"

/***/ }),

/***/ 780:
/***/ (function(module, exports) {

module.exports = "<div class=\"base-container\">\r\n    <topfrends></topfrends>\r\n    <section class=\"section partners\">\r\n        <div class=\"scrollableContent\">\r\n            <div class=\"container-alignment\">\r\n                <div class=\"alignment\">\r\n                    <div class=\"centered\">\r\n                        <div class=\"container\">\r\n                            <div class=\"row\">\r\n                                <div class=\"col-lg-3 col-md-3 mobile-hidden\">\r\n                                    <nav class=\"vertical-navbar animated fadeInLeft\">\r\n                                        <logo></logo>\r\n                                        <mainmenu></mainmenu>\r\n                                        <frendsmenu2></frendsmenu2>\r\n                                    </nav>\r\n                                </div>\r\n                                <div class=\"col-lg-9 col-md-9 col-xs-12\">\r\n                                    <div class=\"content-container partners__content\">\r\n                                        <frendsocial></frendsocial>\r\n                                        <frendcontent></frendcontent>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\t\t\t\t\t\r\n    </section>\r\n</div>\r\n<podpiska></podpiska>\r\n<forma></forma>\r\n<authorization></authorization>"

/***/ }),

/***/ 781:
/***/ (function(module, exports) {

module.exports = "<div class=\"vertical-navbar__subscribe\">\n  <a id=\"subscription\" href=\"#subscriptionModal\" class=\"toggle-modal-subscription\">Подписка на рассылку</a>\n</div>\n<div class=\"vertical-navbar__suitcase\">\n  <img src=\"images/suitcase.png\" alt=\"\">\n</div>\n\n"

/***/ }),

/***/ 782:
/***/ (function(module, exports) {

module.exports = "<div class=\"widget__social-network yellow mobile-hidden\">\n  <ul class=\"social-network__list\">\n    <li>\n      <a href=\"#\"><i class=\"icon icon-mail\"></i></a>\n    </li>\n    <li>\n      <a href=\"#\"><i class=\"icon icon-skype\"></i></a>\n    </li>\n    <li>\n      <a href=\"#\"><i class=\"icon icon-facebook\"></i></a>\n    </li>\n    <li>\n      <a href=\"#\"><i class=\"icon icon-twitter\"></i></a>\n    </li>\n    <li>\n      <a href=\"#\"><i class=\"icon icon-instagram\"></i></a>\n    </li>\n    <li>\n      <a href=\"#\"><i class=\"icon icon-vk\"></i></a>\n    </li>\n  </ul>\n</div>\n"

/***/ }),

/***/ 783:
/***/ (function(module, exports) {

module.exports = "<header class=\"masthead\">\n  <div class=\"container\">\n    <div class=\"masthead__select-languages mobile-hidden\">\n      <div class=\"select-language__button\">\n        <button type=\"button\">ru</button>\n      </div>\n      <div class=\"select-language__button\">\n        <button type=\"button\">eng</button>\n      </div>\n    </div>\n    <div class=\"masthead__our-contacts mobile-hidden\">\n        <div class=\"contact__phone\">\n          <a href=\"tel: +7 (747) 250-7777\">+7 (747) 250-7777</a>\n        </div>\n        <div class=\"contact__email\">\n          или пишите на <a href=\"mailto: wat@kcet.kz\">wat@kcet.kz</a>\n        </div>\n    </div>\n    \n    <div class=\"masthead__file mobile-hidden\">\n\t\t\t\t\t<div class=\"file__caption\">Этапы сотрудничества</div>\n\t\t\t\t\t<div class=\"file__button\">\n\t\t\t\t\t\t<a href=\"/path..\" download>cкачать pdf</a>\n\t\t\t\t\t</div>\n\t </div>\n\n    <div class=\"masthead__user mobile-hidden\">\n      <div class=\"user__search\">\n        <form action=\"\" name=\"\" id=\"\">\n          <input type=\"text\" name=\"\" id=\"\">\n          <button type=\"submit\" name=\"\" id=\"\"></button>\n        </form>\n      </div>\n      <div class=\"user__login\">\n        <a id=\"authorization\" class=\"toggle-modal-authorization\" href=\"#authorizationModal\">1</a>\n      </div>\n    </div>\n    </div>\n    <div class=\"mobile-navbar mobile-visible clearfix\">\n      <div class=\"container\">\n        <h3>Kazakhstan Counсil <span>for Educational Travel</span></h3>\n        <button type=\"button\" class=\"toggleMenu\">Menu</button>\n      </div>\n    </div>\n</header>\n"

/***/ }),

/***/ 784:
/***/ (function(module, exports) {

module.exports = "<div class=\"parallax-container\" id=\"scene\">\n\t\t\t\t\t<div class=\"layer item-parallax item-parallax-01 animated zoomInLeft\" data-depth=\"1.00\">\n\t\t\t\t\t\t<div class=\"animated zoomInLeft\"></div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"layer item-parallax item-parallax-02 animated zoomIn\" data-depth=\"0.20\">\n\t\t\t\t\t\t<div class=\"animated\"></div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"layer item-parallax item-parallax-03 animated zoomInRight\" data-depth=\"1.00\">\n\t\t\t\t\t\t<div class=\"animated zoomInRight\"></div>\n\t\t\t\t\t</div>\n\n</div>\n"

/***/ }),

/***/ 785:
/***/ (function(module, exports) {

module.exports = "<div id=\"bonusesModal\">\n<div class=\"scrollableContent\">\n<div class=\"mobile-navbar mobile-navbar-light mobile-visible clearfix\">\n<div class=\"container text-center\">\n<div class=\"row\">\n<div class=\"col-xs-3\">\n<div class=\"mobile-navbar__actions text-left\">\n<a href=\"index.html\">Назад</a>\n</div>\n</div>\n<div class=\"col-xs-6\">\n<div class=\"mobile-navbar__title\">\nБонусы от партнеров\n</div>\n</div>\n<div class=\"col-xs-3\">\n<div class=\"close close-bonusesModal\"> \n<button type=\"button\" class=\"toggle-modal-bonuses\"></button>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"container-alignment\">\n<div class=\"alignment\">\n<div class=\"centered\">\n<div class=\"container\">\n<div class=\"container mobile-hidden\">\n<div class=\"close close-bonusesModal\"> \n<button type=\"button\" class=\"toggle-modal-bonuses\"></button>\n</div>\n</div>\n<div class=\"modal-content\">\n<div class=\"bonuses-mobile mobile-visible\">\n<div class=\"partners-cover\">\t\n<img src=\"http://placehold.it/350x150\" alt=\"\">\t\n</div>\t\n<div class=\"partners-links\">\t\n<a href=\"\">Необходимая дополнительная информация</a>\n<a href=\"\">Необходимая дополнительная информация</a>\n<a href=\"\">Необходимая дополнительная информация</a>\n<a href=\"\">Необходимая дополнительная информация</a>\n<a href=\"\">Необходимая дополнительная информация</a>\n<a href=\"\">Необходимая дополнительная информация</a>\n<a href=\"\">Необходимая дополнительная информация</a>\n<a href=\"\">Необходимая дополнительная информация</a>\t\t\t\n</div>\n<div class=\"partner-brands\">\n<div class=\"partner-brand col-xs-6\">\n<div class=\"partner-brand-img\">\n<img src=\"http://placehold.it/350x150\" alt=\"\">\n</div>\n</div>\n<div class=\"partner-brand col-xs-6\">\n<div class=\"partner-brand-img\">\n<img src=\"http://placehold.it/350x150\" alt=\"\">\n</div>\n</div>\n<div class=\"partner-brand col-xs-6\">\n<div class=\"partner-brand-img\">\n<img src=\"http://placehold.it/350x150\" alt=\"\">\n</div>\n</div>\n<div class=\"partner-brand col-xs-6\">\n<div class=\"partner-brand-img\">\n<img src=\"http://placehold.it/350x150\" alt=\"\">\n</div>\n</div>\n<div class=\"partner-brand col-xs-6\">\n<div class=\"partner-brand-img\">\n<img src=\"http://placehold.it/350x150\" alt=\"\">\n</div>\n</div>\n<div class=\"partner-brand col-xs-6\">\n<div class=\"partner-brand-img\">\n<img src=\"http://placehold.it/350x150\" alt=\"\">\n</div>\n</div>\t\t\t\t\n</div>\n<div class=\"partners-ad-here\">\n<p>Здесь может быть и ваша реклама! </p>\n<a id=\"contact-manager03\" href=\"#managerModal\" class=\"toggle-modal-manager\">Связаться с менеджером по рекламе</a>\t\t\t\t\t\n</div>\n<div class=\"partners-links\">\t\n<a href=\"\">Необходимая дополнительная информация</a>\n<a href=\"\">Необходимая дополнительная информация</a>\n<a href=\"\">Необходимая дополнительная информация</a>\n<a href=\"\">Необходимая дополнительная информация</a>\n<a href=\"\">Необходимая дополнительная информация</a>\n<a href=\"\">Необходимая дополнительная информация</a>\n<a href=\"\">Необходимая дополнительная информация</a>\n<a href=\"\">Необходимая дополнительная информация</a>\t\t\t\n</div>\n<div class=\"partners-banner\">\t\n<img src=\"http://placehold.it/350x150\" alt=\"\">\n</div>\n<div class=\"partner-brands\">\n<div class=\"partner-brand col-xs-6\">\n<div class=\"partner-brand-img\">\n<img src=\"http://placehold.it/350x150\" alt=\"\">\n</div>\n</div>\n<div class=\"partner-brand col-xs-6\">\n<div class=\"partner-brand-img\">\n<img src=\"http://placehold.it/350x150\" alt=\"\">\n</div>\n</div>\t\t\t\n</div>\n</div>\t\n<div class=\"bonuses mobile-hidden\">\n<div class=\"bonuses__headline clearfix\">\n<div class=\"headline__offset_right\">\n<h4>Здесь может быть и ваша реклама!</h4>\n<a id=\"contact-manager\" href=\"#managerModal\" class=\"toggle-modal-manager\">Связаться с менеджером по рекламе</a>\n</div>\t\n</div>\n<div class=\"bonuses__content_scroll mobile-hidden\" id=\"scroll__horizontal\">\n<div class=\"bonuses__content\">\n<div class=\"bonuses__card\">\n<div class=\"card col-md-2\">\n<div class=\"card__image\">\n<img src=\"\" alt=\"\">\n</div>\n</div>\n<div class=\"card col-md-4\">\n<div class=\"card__image\">\n<img src=\"\" alt=\"\">\n</div>\n</div>\n<div class=\"card col-md-3\">\n<div class=\"card__image\">\n<img src=\"\" alt=\"\">\n</div>\n</div>\n<div class=\"card col-md-2\">\n<div class=\"card__image\">\n<img src=\"\" alt=\"\">\n</div>\n</div>\n<div class=\"card col-md-2\">\n<div class=\"card__image\">\n<img src=\"\" alt=\"\">\n</div>\n</div>\n<div class=\"card col-md-2\">\n<div class=\"card__image\">\n<img src=\"\" alt=\"\">\n</div>\n</div>\n<div class=\"card col-md-2\">\n<div class=\"card__image\">\n<img src=\"\" alt=\"\">\n</div>\n</div>\n<div class=\"card col-md-2\">\n<div class=\"card__image\">\n<img src=\"\" alt=\"\">\n</div>\n</div>\n<div class=\"card col-md-2\">\n<div class=\"card__image\">\n<img src=\"\" alt=\"\">\n</div>\n</div>\n<div class=\"card col-md-2\">\n<div class=\"card__image\">\n<img src=\"\" alt=\"\">\n</div>\n</div>\n<div class=\"card col-md-2\">\n<div class=\"card__image\">\n<img src=\"\" alt=\"\">\n</div>\n</div>\n</div>\n<div class=\"bonuses__link\">\n<ul>\n<li class=\"link__item\"><a href=\"#\">НЕобходимая дополнительная информация</a></li>\n<li class=\"link__item\"><a href=\"#\">НЕобходимая дополнительная информация</a></li>\n<li class=\"link__item\"><a href=\"#\">НЕобходимая дополнительная информация</a></li>\n<li class=\"link__item\"><a href=\"#\">НЕобходимая дополнительная информация</a></li>\n<li class=\"link__item\"><a href=\"#\">НЕобходимая дополнительная информация</a></li>\n</ul>\n</div>\n</div>\n</div>\n<div class=\"row col-lg-12-col-md-12 mobile-visible container-carousel-mobile\" style=\"margin: 20px 0\">\n<ul class=\"carousel\">\n<li class=\"carousel__item\">\n<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel01.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n</a>\n</li>\n<li class=\"carousel__item\">\n<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel02.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n<img src=\"images/carousel02.jpg\" alt=\"CarouselItem\">\n</a>\n</li>\n<li class=\"carousel__item\">\n<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel03.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n<img src=\"images/carousel03.jpg\" alt=\"CarouselItem\">\n</a>\n</li>\n<li class=\"carousel__item\">\n<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel01.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n</a>\n</li>\n<li class=\"carousel__item\">\n<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel02.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n<img src=\"images/carousel02.jpg\" alt=\"CarouselItem\">\n</a>\n</li>\n<li class=\"carousel__item\">\n<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel03.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n<img src=\"images/carousel03.jpg\" alt=\"CarouselItem\">\n</a>\n</li>\n</ul>\n</div>\n<div class=\"bonuses__link bonuses__link-manager\">\n<a id=\"contact-manager02\" href=\"#managerModal\" class=\"toggle-modal-manager\">Связаться с менеджером по рекламе</a>\n</div>\n<div class=\"bonuses__button\">\n<a id=\"bonuses\" class=\"toggle-modal-bonuses close-bonusesModal\" href=\"#\">бонусы от партнеров</a>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n"

/***/ }),

/***/ 786:
/***/ (function(module, exports) {

module.exports = "<div id=\"managerModal\" class=\"contact-manager\">\n\n\t\t<div class=\"container mobile-hidden\">\n\t\t\t<div class=\"close close-managerModal\"> \n\t\t\t\t<button type=\"button\" class=\"toggle-modal-manager\"></button>\n\t\t\t</div>\n\t\t</div>\n\n\t\t<header class=\"mastheadModal-default mastheadModal-manager mobile-visible\">\n\t\t\t<div class=\"container\">\n\t\t\t\t<div class=\"row\">\n\n\t\t\t\t\t<div class=\"col-xs-3 text-left\">\n\t\t\t\t\t\t<div class=\"mobile-navbar__actions text-left\">\n\t\t\t\t\t\t\t<a href=\"\">Назад</a>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\n\t\t\t\t\t<div class=\"col-xs-6 text-center\">\n\t\t\t\t\t\t<div class=\"mobile-navbar__title\">\n\t\t\t\t\t\t\tСвязаться с менеджером по рекламе\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\n\t\t\t\t\t<div class=\"col-xs-3 text-right\">\n\t\t\t\t\t\t<div class=\"close close-managerModal\"> \n\t\t\t\t\t\t\t<button type=\"button\" class=\"toggle-modal-manager\"></button>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</header>\t\n\t\t\t\n\t\t<!-- __scrollable-Modal -->\n\t\t<div class=\"scrollableContent\">\n\t\t\t<div class=\"container-alignment\">\n\t\t\t\t<div class=\"alignment\">\n\t\t\t\t\t<div class=\"centered\">\n\n\t\t\t\t\t\t<div class=\"container\">\n\n\n\t\t\t\t\t\t\t<!-- __modal-content -->\n\t\t\t\t\t\t\t<div class=\"modal-content\">\n\n\t\t\t\t\t\t\t\t<!-- __headline -->\n\t\t\t\t\t\t\t\t<div class=\"request__headline mobile-hidden clearfix\">\n\n\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 headline__title\">\n\t\t\t\t\t\t\t\t\t\t<p> - связаться с менеджером</p>\n\t\t\t\t\t\t\t\t\t\t<h4>Реклама</h4>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t<!-- __content -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 headline__content\">\n\t\t\t\t\t\t\t\t\t\t<p>Необходимо заполнить все поля, после чего \n\t\t\t\t\t\t\t\t\t\t<span>с Вами свяжутся наши представители</span></p>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\n\t\t\t\t\t\t\t\t\t<!-- __logo -->\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 headline__logo\">\n\t\t\t\t\t\t\t\t\t\t<img src=\"images/headline-logo.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t</div><!-- /. __logo -->\n\n\t\t\t\t\t\t\t\t</div><!-- /.__headline -->\t\n\n\t\t\t\t\t\t\t\t<div class=\"container-form form-contact-manager\">\n\n\t\t\t\t\t\t\t\t\t<!-- content -->\n\t\t\t\t\t\t\t\t\t<div class=\"content-form content-contact-manager\">\n\t\t\t\t\t\t\t\t\t\t<form action=\"\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Название компании</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input-default\" id=\"\" name=\"\">\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\" style=\"padding-left: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\" style=\"padding-left: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Имя</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\" style=\"padding-left: 0; padding-right: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\" style=\"padding-left: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Фамилия</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\" style=\"padding-right: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\" style=\"padding-left: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\" style=\"padding-left: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Email </label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\" style=\"padding-left: 0; padding-right: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\" style=\"padding-left: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Телефон</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\" style=\"padding-right: 0\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"\" id=\"\" class=\"input-default\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Описание</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"\" id=\"\" cols=\"30\" rows=\"10\" class=\"input-default\"></textarea>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-visible\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"caption-content-form\">Необходимо заполнить поле, для \n\t\t\t\t\t\t\t\t\t\t\t\t\t<span>того чтобы быть в курсе всех событий</span></p>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"field-input\" id=\"\" name=\"\" placeholder=\"Название компании\">\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"field-input\" id=\"\" name=\"\" placeholder=\"Имя\">\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"field-input\" id=\"\" name=\"\" placeholder=\"Фамилия\">\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"field-input\" id=\"\" name=\"\" placeholder=\"Email\">\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"field-input\" id=\"\" name=\"\" placeholder=\"Телефон\">\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"\" id=\"\" cols=\"30\" rows=\"10\" class=\"field-input\" placeholder=\"Описание\"></textarea>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 btn-submit\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"\" id=\"\">отправить</button>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</form>\n\t\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div><!-- /.__modal-content -->\n\n\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\t\n\t\t</div><!-- /.__scrollable-Modal -->\n\n\t</div>\n"

/***/ }),

/***/ 787:
/***/ (function(module, exports) {

module.exports = "<div id=\"home\" class=\"base-container\">\n    <top></top>\n    <section class=\"section welcome\" id=\"firstPage\">\n        <div class=\"scrollableContent\">\n            <birds></birds>\n        <div class=\"container-alignment\">\n            <div class=\"alignment\">\n                <div class=\"centered\">\n                    <div class=\"container\">\t\n                        <div class=\"row\">\n                            <div class=\"col-lg-3 col-md-3 mobile-hidden\">\n                                <nav class=\"vertical-navbar animated fadeInLeft\">\n                                    <logo></logo>\n                                    <mainmenu></mainmenu>\n                                    <indexmenu2></indexmenu2>\n                                </nav>\n\t\t\t\t\t\t\t</div>\n<div class=\"col-lg-9 col-md-9 col-xs-12\">\n<div class=\"welcome__content\">\n<socialindex></socialindex>\n\n<indexcontent1></indexcontent1>\n</div>\n</div>\n                        </div>\n                        <div class=\"welcome__info animated fadeInUp\">\n                            <p>\n                                Если у вас есть желание выехать за рубеж на работу, для получения образования или навсегда, вы обратились по адресу. Основной деятельностью компании КСЕТ являются образовательные программы для школьников, взрослых и молодежи, программы стажировок, рабочие программы, миграции. Если вы молоды, энергичны, полны решимости и настроены на успех, тогда Kazakhstan Council for Educational Travel поможет Вам осуществить Вашу мечту и реализовать самые заветные Ваши идеи!\n                            </p>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n        </div>\n    </section>\n    <section id=\"secondPage\" class=\"section info\">\n    <indexcontent2></indexcontent2>\n    </section> \n</div>\n<podpiska></podpiska>\n<authorization></authorization>\n<bonusforpartners></bonusforpartners>\n<forma></forma>\n<contactmanager></contactmanager>\n"

/***/ }),

/***/ 788:
/***/ (function(module, exports) {

module.exports = "<div class=\"welcome__headline mobile-hidden\">\n<h1><city></city></h1>\n</div><!-- /. __headline -->\n<!--slug-->\n<!--Kazakhstan Counсil <span>for Educational Travel</span>-->\n<!--slug-->\n<div class=\"welcome__hero clearfix\">\n\n<!-- __image -->\n<div class=\"banner__image animated fadeInUp mobile-hidden\">\n<img src=\"images/banner.png\" alt=\"\">\n</div><!-- /. __image -->\n\n<!-- __caption -->\n<div class=\"banner__caption animated fadeInUp mobile-hidden\">\n<h2>\nWork \n<span>&amp; Travel</span>\n</h2>\n\n</div><!-- /. __caption -->\n\n<!-- __image -->\n<div class=\"banner__image mobile-visible\">\n<img src=\"images/banner.png\" alt=\"\">\n</div><!-- /. __image -->\n\n<!-- __caption -->\n<div class=\"banner__caption mobile-visible\">\n<h2>\nWork \n<span>&amp; Travel</span>\n</h2>\n</div>\n<div class=\"user__actions animated fadeInUp mobile-hidden\">\n<div class=\"actions__caption animated fadeInLeft\">\n<p>Выбрать \n<span>программу</span>\n</p>\n</div>\n<div class=\"action__link link__select-program clearfix animated fadeInLeft\">\n<a href=\"index#secondPage\">Work &amp; Travel USA  <i class=\"icon icon-arrow\"></i></a>\n</div>\n<div class=\"action__link clearfix animated fadeInLeft\">\n<a [routerLink]=\"['/program']\">Круизы <i class=\"icon icon-arrow\"></i></a>\n</div>\n</div>"

/***/ }),

/***/ 789:
/***/ (function(module, exports) {

module.exports = "<div class=\"scrollableContent\">\n\t\t\t\n\t\t\t\t<!-- __container-alignment -->\t\n\t\t\t\t<div class=\"container-alignment\">\n\t\t\t\t\t\n\t\t\t\t\t<div class=\"alignment\">\n\t\t\t\t\t\t\n\t\t\t\t\t\t<div class=\"centered\">\n\n\n\t\t\t\t\t\t\t<div class=\"container\">\n\n\n\t\t\t\t\t\t\t\t<!-- __content -->\n\t\t\t\t\t\t\t\t<div class=\"info__content\">\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-xs-12  mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t\t<!-- __banner -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"info__banner\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/banner-02.png\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /. __banner -->\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-8 col-xs-12\">\n\n\t\t\t\t\t\t\t\t\t\t<!-- __caption -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"info__caption\">\n\t\t\t\t\t\t\t\t\t\t\t<!-- __headline -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"info__headline\">\n\t\t\t\t\t\t\t\t\t\t\t<h3>Дорогие участники!</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /. __headline -->\n\n\t\t\t\t\t\t\t\t\t\t<!-- __subheadline -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"info__subheadline\">\n\t\t\t\t\t\t\t\t\t\t<h3><span>Несколько важных моментов</span> перед тем, как мы расскажем вам подробнее об оформлении: </h3>\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /. __subheadline -->\n\n\t\t\t\t\t\t\t\t\t\t<!-- __text -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"info__text\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __scroll -->\n\t\t\t\t\t\t\t\t\t\t\t<div id=\"scroll01\">\n\t\t\t\t\t\t\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Казахстан, так же как и Россия, до сих пор является страной третьего мира, и нашим гражданам запрещено приезжать, жить, работать и учиться в странах первого мира без специального разрешения: виза, work permit, study permit.</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Большинство этих разрешений выдается посольством, которое может вам отказать, если заподозрит в иммиграционных намерениях.</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li>При участии в иммиграционных программах эти подозрения не уместны, и при правильном оформлении документов визы выдаются практически в 100% случаев.</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li>При участии в программах культурного обмена или получения высшего образования за рубежом визы также выдаются практически в 100% случаев из политических соображений.</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Начинать реализацию вашего плана уехать за рубеж с поиска работы бесперспективно. Наши кандидаты за рубежом нравятся, но все компании просят сначала решить вопрос с визой и разрешением на работу, а уже потом обращаться.</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Иммиграция не ведет к потере вашего нынешнего гражданства, оно вместе с пропиской и паспортом остается у вас, если вы не захотите сами от него отказаться.</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Почти во всех странах первого мира для иностранного студента предусмотрена возможность после получения образования остаться для работы и получения ПМЖ, даже в таких «закрытых» странах, как Швеция и Испания.</li>\n\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>И самое главное: из-за демографического кризиса и социальной пассивности коренного населения в странах первого мира уже давно ощущается постоянная нехватка специалистов, поэтому, если вы образованы, готовы изучать иностранный язык, и у вас есть желание перемен — вас там ждут!</p>\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__scroll -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__text -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /. __caption -->\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t<!-- __additionally -->\n\t\t\t\t\t\t\t\t\t<div class=\"info__additionally\">\n\t\t\t\t\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon icon-cursor\"></i>Почему мы?</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon icon-pensil\"></i>Кратко про Summer W&amp;T</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon icon-list\"></i>Требования для участия</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon icon-note\"></i>Документы для участия  в программе</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon icon-question\"></i>Пошаговое оформление</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon icon-dollar\"></i>Стоимость программы Work and Travel 2017</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"no-active\"><a href=\"#\"><i class=\"icon icon-search-engine\"></i>Поиск работы</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"no-active\"><a href=\"#\"><i class=\"icon icon-rocket\"></i>Рабочие перспективы</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"no-active\"><a href=\"#\"><i class=\"icon icon-briefcase\"></i>Деловой портфель</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon icon-conversion\"></i>Налоги</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon icon-home\"></i>Проживание в США</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"no-active\"><a href=\"#\"><i class=\"icon icon-comments\"></i>Непутевые заметки</a></li>\n\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t</div><!-- /. __additionally -->\n\n\t\t\t\t\t\t\t\t</div><!-- /.__content -->\n\t\t\t\t\t\t\t\t<!-- __btn-move-up -->\n\t\t\t\t\t\t\t\t<a href=\"index#firstPage\" class=\"btn-move-up\"></a><!-- /. __btn-move-up -->\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t</div>\n\n\t\t\t\t\t</div>\n\n\t\t\t\t</div><!-- /.__container-alignment -->\t\t\n\n\t\t\t</div>"

/***/ }),

/***/ 790:
/***/ (function(module, exports) {

module.exports = "<div class=\"vertical-navbar__subscribe\">\n  <a id=\"subscription\" href=\"#subscriptionModal\" class=\"toggle-modal-subscription\">Подписка на рассылку</a>\n</div>\n<div class=\"vertical-navbar__adt\">\n  <div class=\"adt__caption clearfix\">\n    <a [routerLink]=\"['/offers']\" class=\"animated infinite pulse\" >Горящие <span>предложения</span></a>\n  </div>\n</div>\n<div class=\"vertical-navbar__bonuses\">\n  <a id=\"bonuses\" class=\"toggle-modal-bonuses\" href=\"#bonusesModal\">бонусы от партнеров</a>\n</div>"

/***/ }),

/***/ 791:
/***/ (function(module, exports) {

module.exports = "<div class=\"widget__social-network white mobile-hidden\">\n\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social-network__list\">\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-mail\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-skype\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-facebook\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-twitter\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-instagram\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-vk\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t</ul>\n</div>"

/***/ }),

/***/ 792:
/***/ (function(module, exports) {

module.exports = "<div id=\"authorizationModal\">\n<div class=\"scrollableContent\">\n<div class=\"container-alignment\">\n<div class=\"alignment\">\n<div class=\"centered\">\n<div class=\"container\">\n<div class=\"modal-content\">\n<div class=\"sign-in-modal\">\n<div class=\"modal-title\">\n<div class=\"row\">\n<div class=\"col-md-8\">\n<div class=\"modal-title-text\">\nВойти\n</div>\n</div>\n<div class=\"col-md-4\">\n<div class=\"modal-title-action\">\n<div class=\"close close-authorizationModal\"> \n<button type=\"button\" class=\"toggle-authorization-manager\"></button>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"modal-content\">\n<div class=\"login-form-container\">\n<form action=\"\">\n<div class=\"row\">\n<div class=\"text-input-error\" style=\"display: none;\">\n<span class=\"error-message\">\n*Введите свой адрес электронной почты.\n</span>\n</div>\n<div class=\"col-md-12\">\n<input type=\"text\" class=\"login-email login-text-input\" placeholder=\"Адрес электронной почты\">\n</div>\n</div>\n<div class=\"row\">\n<div class=\"text-input-error\" style=\"display: none;\">\n<span class=\"error-message\">\n*Введите свой адрес электронной почты.\n</span>\n</div>\n<div class=\"col-md-12\">\n<input type=\"password\" class=\"login-password login-text-input\" placeholder=\"Пароль\">\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-md-6 text-left login-checkbox-input\">\n<label for=\"remember-me\">\n    <input type=\"checkbox\" checked id=\"remember-me\" name=\"\" value=\"\">\n    <span style=\"margin-top: -1px\">Запомнить</span>\n</label>\n</div>\n<div class=\"col-md-6 text-right\">\n<button type=\"submit\" id=\"\" name=\"\" class=\"login-submit-button\">Войти</button>\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-md-12 forgot-password\">\n<a href=\"#\">Забыли пароль?</a>\n</div>\n</div>\n</form>\n<div class=\"hr-divider\">\n<div class=\"hr-divider-text\">\nили\n</div>\n</div>\n<div class=\"login-social-container\">\n<ul class=\"buttons-social-network\">\n<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-vk\">1</button></li>\n<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-fb\">2</button></li>\n<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-gp\">3</button></li>\n<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-tw\">4</button></li>\n</ul>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\t\n</div>\n</div>\n"

/***/ }),

/***/ 793:
/***/ (function(module, exports) {

module.exports = "\n\n<div id=\"authorizationModal\">\n\n<!-- __scrollable-Modal -->\n<div class=\"scrollableContent\">\n<div class=\"container-alignment\">\n<div class=\"alignment\">\n<div class=\"centered\">\n\n<div class=\"container\">\n\n\n<!-- __modal-content -->\n<div class=\"modal-content\">\n\n<div class=\"sign-in-modal\">\n<div class=\"modal-title\">\n<div class=\"row\">\n<div class=\"col-md-8\">\n<div class=\"modal-title-text\">\nВойти\n</div>\n</div>\n<div class=\"col-md-4\">\n<div class=\"modal-title-action\">\n<div class=\"close close-authorizationModal\"> \n<button type=\"button\" class=\"toggle-authorization-manager\"></button>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"modal-content\">\n<!-- <p class=\"login-form-welcome\">Привет</p> -->\n<div class=\"login-form-container\">\n<form action=\"\">\n<div class=\"row\">\n<div class=\"text-input-error\" style=\"display: none;\">\n<span class=\"error-message\">\n*Введите свой адрес электронной почты.\n</span>\n</div>\n<div class=\"col-md-12\">\n<input type=\"text\" class=\"login-email login-text-input\" placeholder=\"Адрес электронной почты\">\n</div>\n</div>\n<div class=\"row\">\n<div class=\"text-input-error\" style=\"display: none;\">\n<span class=\"error-message\">\n*Введите свой адрес электронной почты.\n</span>\n</div>\n<div class=\"col-md-12\">\n<input type=\"password\" class=\"login-password login-text-input\" placeholder=\"Пароль\">\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-md-6 text-left login-checkbox-input\">\n<label for=\"remember-me\">\n<input type=\"checkbox\" checked id=\"remember-me\" name=\"\" value=\"\">\n<span style=\"margin-top: -1px\">Запомнить</span>\n</label>\n</div>\n<div class=\"col-md-6 text-right\">\n<button type=\"submit\" id=\"\" name=\"\" class=\"login-submit-button\">Войти</button>\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-md-12 forgot-password\">\n<a href=\"#\">Забыли пароль?</a>\n</div>\n</div>\n</form>\n<div class=\"hr-divider\">\n\n<div class=\"hr-divider-text\">\nили\n</div>\n\n</div>\n<div class=\"login-social-container\">\n<ul class=\"buttons-social-network\">\n<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-vk\">1</button></li>\n<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-fb\">2</button></li>\n<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-gp\">3</button></li>\n<li><button type=\"button\" id=\"\" name=\"\" class=\"btn-social-tw\">4</button></li>\n</ul>\n</div>\n</div>\n</div>\n</div>\n</div><!-- /.__modal-content -->\n\n\n</div>\n</div>\n</div>\n</div>\t\n</div><!-- /.__scrollable-Modal -->\n\n</div>\n<!-- /.__modal-login -->\n\n\n\n<!-- __modal-request -->\n<div id=\"requestModal\">\n\n\n\n<div class=\"container mobile-hidden\">\n<div class=\"close close-requestModal\"> \n<button type=\"button\" class=\"toggle-modal-request\"></button>\n</div>\n</div>\n\n<header class=\"mastheadModal-default mastheadModal-request mobile-visible\">\n<div class=\"container\">\n<div class=\"row\">\n\n<div class=\"col-xs-3 text-left\">\n<div class=\"mobile-navbar__actions text-left\">\n<a href=\"\">Назад</a>\n</div>\n</div>\n\n<div class=\"col-xs-6 text-center\">\n<div class=\"mobile-navbar__title\">\nОнлайн-заявка\n</div>\n</div>\n\n<div class=\"col-xs-3 text-right\">\n<div class=\"close close-requestModal\"> \n<button type=\"button\" class=\"toggle-modal-request\"></button>\n</div>\n</div>\n</div>\n</div>\n</header>\n\n\n<!-- __scrollable-programModal -->\n<div class=\"scrollableContent\">\n\n\n<!-- __container-alignment -->\n<div class=\"container-alignment\">\n\n<div class=\"alignment\">\n\n<div class=\"centered\">\n\n\n<div class=\"container\">\n\n<!-- __modal-content -->\n<div class=\"modal-content\">\n\n<!-- __headline -->\n<div class=\"request__headline mobile-hidden clearfix\">\n\n<!-- __title -->\n<div class=\"col-lg-4 headline__title\">\n<p>- заявка</p>\n<h4>Онлайн</h4>\n</div><!-- /.__title -->\n\n<!-- __content -->\n<div class=\"col-lg-6 headline__content\">\n<p>Необходимо заполнить все поля, после чего \n<span>с Вами свяжутся наши представители</span></p>\n</div><!-- /.__content -->\n\n<!-- __logo -->\n<div class=\"col-lg-2 headline__logo\">\n<img src=\"images/headline-logo.png\" alt=\"\">\n</div><!-- /. __logo -->\n\n</div><!-- /.__headline -->\n\n<!-- __form -->\n<form action=\"\" id=\"\" name=\"\" class=\"questionary mobile-hidden\">\n\n<div class=\"questionary__content_scroll\" id=\"scroll\">\n\n<!-- __row -->\n<div class=\"row\">\n\n<!-- __col -->\n<div class=\"col-lg-3 col-md-3 user-photo\" style=\"padding-right: 0;\">\n<div class=\"user-photo__area\">\n<img src=\"\" alt=\"\">\n<div class=\"user-photo__cover\"></div>\n</div>\n<div class=\"user-photo__button\">\n<div class=\"button__upload\">\n<div class=\"button__label\">загрузить фото</div>\n<input type=\"file\" id=\"\" name=\"\">\n</div>\t\n</div>\n</div><!-- __col -->\n\n<!-- __col -->\n<div class=\"col-lg-9 col-md-9 questionary__primary-info\">\n\n<div class=\"row form-group\">\n<div class=\"col-lg-2 col-md-2\">\n<label for=\"\" class=\"legend-headline\">1.Фамилия</label>\n</div>\n<div class=\"col-lg-10 col-md-10\">\n<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n<span class=\"input-checked\"></span>\n</div>\n</div>\n\n<div class=\"row form-group\">\n<div class=\"col-lg-6 col-md-6\">\n<div class=\"col-lg-2 col-md-2\" style=\"padding-left: 0\">\n<label for=\"\">Имя</label>\n</div>\n<div class=\"col-lg-10 col-md-10\" style=\"padding-right: 0\">\n<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n</div>\n</div>\n<div class=\"col-lg-6 col-md-6\">\n<div class=\"col-lg-3 col-md-3\">\n<label for=\"\">Отчество</label>\n</div>\n<div class=\"col-lg-9 col-md-9\" style=\"padding-right: 0\">\n<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n</div>\n</div>\n</div>\n\n<div class=\"row form-group\">\n<div class=\"col-lg-4 col-md-4\">\n<label for=\"\">Last Name (как в загранпаспорте)</label>\n</div>\n<div class=\"col-lg-8 col-md-8\">\n<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n</div>\n</div>\n<div class=\"row form-group\">\n<div class=\"col-lg-4 col-md-4\">\n<label for=\"\">First Name (как в загранпаспорте)</label>\n</div>\n<div class=\"col-lg-8 col-md-8\">\n<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n</div>\n</div>\n\n<div class=\"row form-group\">\n<div class=\"col-lg-6 col-md-6 datepicker-options\" style=\"position: relative;\">\n<div class=\"col-lg-4 col-md-5\" style=\"padding-left: 0\">\n<label for=\"\">2. Дата рождения</label>\n</div>\n<div class=\"col-lg-8 col-md-7\">\n<input type=\"text\" name=\"\" id=\"\" class=\"datepicker input-default\">\n</div>\n</div>\n<div class=\"col-lg-6 col-md-6 select-options\">\n<div class=\"col-lg-4 col-md-5\">\n<label for=\"\">3. Гражданство </label>\n</div>\n<div class=\"col-lg-8 col-md-7\" style=\"padding-right: 0\">\n<select name=\"\" id=\"\" class=\"select__nationality\">\n<option value=\"\" selected disabled>Выберите гражданство</option>\n<option value=\"\">России</option>\n<option value=\"\">Республики Беларусь</option>\n<option value=\"\">Украины</option>\n<option value=\"\">России</option>\n<option value=\"\">Республики Беларусь</option>\n<option value=\"\">Украины</option>\n<option value=\"\">России</option>\n<option value=\"\">Республики Беларусь</option>\n<option value=\"\">Украины</option>\n<option value=\"\">России</option>\n<option value=\"\">Республики Беларусь</option>\n<option value=\"\">Украины</option>\n</select>\n</div>\n</div>\n</div>\n\n<div class=\"row form-group\">\n<div class=\"col-lg-3 col-md-3\">\n<label for=\"\">4. Образование</label>\n</div>\n<div class=\"col-lg-9 col-md-9\">\n<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n</div>\n</div>\n<div class=\"row form-group\">\n<div class=\"col-lg-3 col-md-3\" style=\"padding-left: 30px\">\n<label for=\"\">Год окончания</label>\n</div>\n<div class=\"col-lg-9 col-md-9\">\n<input type=\"text\" name=\"\" id=\"\" class=\"input-default datepicker\">\n</div>\n</div>\n<div class=\"row form-group\">\n<div class=\"col-lg-12\">\n<label for=\"\">5. Занятие в настоящее время (должность, место работы, учёбы)</label>\n</div>\n<div class=\"col-lg-12\">\n<textarea name=\"\" id=\"\" cols=\"30\" rows=\"10\" class=\"input-default\"></textarea>\n</div>\n</div>\n<div class=\"row form-group\">\n<div class=\"col-lg-3\">\n<label for=\"\">6. Родной язык </label>\n</div>\n<div class=\"col-lg-9\">\n<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-lg-12\">\n<div class=\"divider\"></div>\n</div>\n</div>\n</div><!-- /.__col -->\n\n</div><!-- /.__row -->\n\n<fieldset>\n<legend>\n7. Знание иностранных языков:\n</legend>\n\n<!-- __row -->\n<div class=\"row\">\n\n<!-- __col -->\n<div class=\"col-lg-4 col-md-4 col-xs-12\">\n<span>Язык</span>\n<div class=\"form-group\">\n<input type=\"text\" id=\"\" name=\"\" class=\"input-border-alpha\">\n</div>\n<div class=\"form-group\">\n<input type=\"text\" id=\"\" name=\"\" class=\"input-border-alpha\">\n</div>\n<div class=\"form-group\">\n<input type=\"text\" id=\"\" name=\"\" class=\"input-border-alpha\">\n</div>\n<div class=\"form-group\">\n<input type=\"text\" id=\"\" name=\"\" class=\"input-border-alpha\">\n</div>\n</div><!-- /.__col -->\n\n<!-- __col -->\n<div class=\"col-lg-8 col-md-8 col-xs-12 text-center radio-options\">\n<!-- __row -->\n<div class=\"row\">\n<!-- __col -->\n<div class=\"col-lg-3 col-md-3\">\n<span>начальный</span>\n<div class=\"form-group\">\n<label for=\"optionsRadios-1\">\n<input type=\"radio\" id=\"optionsRadios-1\" class=\"radio\" name=\"knowledge-language-elementary\">\n</label>\n</div>\n<div class=\"form-group\">\n<label for=\"optionsRadios-2\">\n<input type=\"radio\" id=\"optionsRadios-2\" class=\"radio\" name=\"knowledge-language-elementary\">\n</label>\n</div>\n<div class=\"form-group\">\n<label for=\"optionsRadios-3\">\n<input type=\"radio\" id=\"optionsRadios-3\" class=\"radio\" name=\"knowledge-language-elementary\">\n</label>\n</div>\n<div class=\"form-group\">\n<label for=\"optionsRadios-4\">\n<input type=\"radio\" id=\"optionsRadios-4\" class=\"radio\" name=\"knowledge-language-elementary\">\n</label>\n</div>\n</div><!-- /.__col -->\n<!-- __col -->\n<div class=\"col-lg-3 col-md-3\">\n<span>объясняюсь</span>\n<div class=\"form-group\">\n<label for=\"optionsRadios-5\">\n<input type=\"radio\" id=\"optionsRadios-5\" class=\"radio\" name=\"knowledge-language-explain-myself\">\n</label>\n</div>\n<div class=\"form-group\">\n<label for=\"optionsRadios-6\">\n<input type=\"radio\" id=\"optionsRadios-6\" class=\"radio\" name=\"knowledge-language-explain-myself\">\n</label>\n</div>\n<div class=\"form-group\">\n<label for=\"optionsRadios-7\">\n<input type=\"radio\" id=\"optionsRadios-7\" class=\"radio\" name=\"knowledge-language-explain-myself\">\n</label>\n</div>\n<div class=\"form-group\">\n<label for=\"optionsRadios-8\">\n<input type=\"radio\" id=\"optionsRadios-8\" class=\"radio\" name=\"knowledge-language-explain-myself\">\n</label>\n</div>\n</div><!-- /.__col -->\n<!-- __col -->\n<div class=\"col-lg-3 col-md-3\">\n<span>разговорный</span>\n<div class=\"form-group\">\n<label for=\"optionsRadios-9\">\n<input type=\"radio\" id=\"optionsRadios-9\" class=\"radio\" name=\"knowledge-language-\ncolloquial\">\n</label>\n</div>\n<div class=\"form-group\">\n<label for=\"optionsRadios-10\">\n<input type=\"radio\" id=\"optionsRadios-10\" class=\"radio\" name=\"knowledge-language-\ncolloquial\">\n</label>\n</div>\n<div class=\"form-group\">\n<label for=\"optionsRadios-11\">\n<input type=\"radio\" id=\"optionsRadios-11\" class=\"radio\" name=\"knowledge-language-\ncolloquial\">\n</label>\n</div>\n<div class=\"form-group\">\n<label for=\"optionsRadios-12\">\n<input type=\"radio\" id=\"optionsRadios-12\" class=\"radio\" name=\"knowledge-language-\ncolloquial\">\n</label>\n</div>\n</div><!-- /.__col -->\n<!-- __col -->\n<div class=\"col-lg-3 col-md-3\">\n<span>свободно</span>\n<div class=\"form-group\">\n<label for=\"optionsRadios-13\">\n<input type=\"radio\" id=\"optionsRadios-13\" class=\"radio\" name=\"knowledge-language-\nfreely\">\n</label>\n</div>\n<div class=\"form-group\">\n<label for=\"optionsRadios-14\">\n<input type=\"radio\" id=\"optionsRadios-14\" class=\"radio\" name=\"knowledge-language-\nfreely\">\n</label>\n</div>\n<div class=\"form-group\">\n<label for=\"optionsRadios-15\">\n<input type=\"radio\" id=\"optionsRadios-15\" class=\"radio\" name=\"knowledge-language-\nfreely\">\n</label>\n</div>\n<div class=\"form-group\">\n<label for=\"optionsRadios-16\">\n<input type=\"radio\" id=\"optionsRadios-16\" class=\"radio\" name=\"knowledge-language-\nfreely\">\n</label>\n</div>\n</div><!-- /.__col -->\n</div><!-- /.__row -->\n\n</div><!-- /.__col -->\n\n</div><!-- /.__row -->\n\n</fieldset>\n\n<fieldset>\n<legend>\n8. Семейное положение:\n</legend>\n\n<div class=\"form-inline radio-options\">\n<div class=\"row text-center\">\n<div class=\"col-lg-3 col-md-3\" style=\"width: 22%\">\n<div class=\"form-group\">\n<label for=\"optionsRadios-17\"><span class=\"text-label\">Холост/Не замужем</span></label>\n<input type=\"radio\" id=\"optionsRadios-17\" name=\"marital-status\" class=\"radio\">\n</div>\n</div>\n<div class=\"col-lg-3 col-md-3\" style=\"width: 22%\">\n<div class=\"form-group\">\n<label for=\"optionsRadios-18\"><span class=\"text-label\">Не проживаем вместе</span></label>\n<input type=\"radio\" id=\"optionsRadios-18\" name=\"marital-status\" class=\"radio\">\n</div>\n</div>\n<div class=\"col-lg-2 col-md-2\" style=\"width: 18%\">\n<div class=\"form-group\">\n<label for=\"optionsRadios-19\"><span class=\"text-label\">Вдовец/Вдова</span></label>\n<input type=\"radio\" id=\"optionsRadios-19\" name=\"marital-status\" class=\"radio\">\n</div>\n</div>\n<div class=\"col-lg-3 col-md-3\" style=\"width: 20%\">\n<div class=\"form-group\">\n<label for=\"optionsRadios-20\"><span class=\"text-label\">Женат/Замужем</span></label>\n<input type=\"radio\" id=\"optionsRadios-20\" name=\"marital-status\" class=\"radio\">\n</div>\n</div>\n<div class=\"col-lg-3 col-md-3\" style=\"width: 18%\">\n<div class=\"form-group\">\n<label for=\"optionsRadios-21\"><span class=\"text-label\">Разведен(а)</span></label>\n<input type=\"radio\" id=\"optionsRadios-21\" name=\"marital-status\" class=\"radio\">\n</div>\n</div>\n</div>\n\n</div>\n\n<div class=\"form-group\">\n<label for=\"\">Дети</label>\n<input type=\"text\" id=\"\" name=\"\" class=\"input-default\">\t\t\t\t\n</div>\n\n</fieldset>\n\n<fieldset>\n<legend>\n9. Адрес:\n</legend>\n\n<!-- __row -->\n<div class=\"row\">\n<!-- __col -->\n<div class=\"col-lg-3 col-md-3 col-xs-12\">\n<div class=\"form-group\">\n<input type=\"text\" id=\"\" name=\"\" placeholder=\"Cтрана\" class=\"input-border\">\n</div>\n</div><!-- /.__col -->\n\n<!-- __col -->\n<div class=\"col-lg-3 col-md-3 col-xs-12\">\n<div class=\"form-group\">\n<input type=\"text\" id=\"\" name=\"\" placeholder=\"Город\" class=\"input-border\">\n</div>\n</div><!-- /.__col -->\n\n<!-- __col -->\n<div class=\"col-lg-3 col-md-3 col-xs-12\">\n<div class=\"form-group\">\n<input type=\"text\" id=\"\" name=\"\" placeholder=\"Индекс\" class=\"input-border\">\n</div>\n</div><!-- /.__col -->\n\n<!-- __col -->\n<div class=\"col-lg-3 col-md-3 col-xs-12\">\n<div class=\"form-group\">\n<input type=\"text\" id=\"\" name=\"\" placeholder=\"Телефон (дом., сот., факс)\" class=\"input-border\">\n</div>\n</div><!-- /.__col -->\n</div><!-- /.__row -->\n\n<!-- row -->\n<div class=\"row\">\n<!-- __col -->\n<div class=\"col-lg-6 col-md-6 col-xs-12\">\n<div class=\"form-group\">\n<input type=\"text\" id=\"\" name=\"\" placeholder=\"E-mail:\" class=\"input-border-alpha\">\n</div>\n<div class=\"form-group\">\n<input type=\"text\" id=\"\" name=\"\" placeholder=\"VK:\" class=\"input-border-alpha\">\n</div>\n<div class=\"form-group\">\n<input type=\"text\" id=\"\" name=\"\" placeholder=\"Skype:\" class=\"input-border-alpha\">\n</div>\n</div><!-- /.__col -->\n\n<!-- __col -->\n<div class=\"col-lg-6 col-md-6 col-xs-12\">\n<div class=\"form-group\">\n<input type=\"text\" id=\"\" name=\"\" placeholder=\"Facebook:\" class=\"input-border-alpha\">\n</div>\n<div class=\"form-group\">\n<input type=\"text\" id=\"\" name=\"\" placeholder=\"Twitter:\" class=\"input-border-alpha\">\n</div>\n</div><!-- /.__col -->\n\n</div><!-- /.__row -->\n\n<!-- row -->\n<div class=\"row\">\n<!-- col -->\n<div class=\"col-lg-6 col-md-6 col-xs-12\">\n<div class=\"form-group radio-options\">\n<span style=\"margin-right: 15px\">10. Вы имеете действующий загранпаспорт?</span>\n<label for=\"optionsRadios-30\"><span class=\"text-label\">Да</span>\n<input type=\"radio\" name=\"international-passport\" id=\"optionsRadios-30\" class=\"radio\">\n</label>\n<label for=\"optionsRadios-31\"><span class=\"text-label\">Нет</span>\n<input type=\"radio\" name=\"international-passport\" id=\"optionsRadios-31\" class=\"radio\">\n</label>  \n</div>\n</div><!-- /.__col -->\n<!-- col -->\n<div class=\"col-lg-6 col-md-6 col-xs-12\">\n<div class=\"form-group\">\n<span class=\"col-lg-12\" style=\"margin-bottom: 5px; margin-right: 15px\">Дата окончания действия загранпаспорта, номер</span>\n<div class=\"col-lg-5 col-md-5\" style=\"padding-left: 0\">\n<input type=\"text\" id=\"\" name=\"\" class=\"input-border-alpha placeholder-alpha\" placeholder=\"№\">\n</div>\n<div class=\"col-lg-7 col-md-7\" style=\"padding-right: 0\">\n<!-- <select name=\"\" id=\"\" class=\"select\">\n<option value=\"\" selected>действителен до</option>\n<option value=\"\">действителен до</option>\n<option value=\"\">действителен до</option>\n</select> -->\n<input type=\"text\" id=\"\" name=\"\" class=\"input-border-alpha datepicker placeholder-alpha\" placeholder=\"действителен до\">\n</div>\n</div>\n</div><!-- /.__col -->\n</div><!-- /.__row -->\n\n<!-- row -->\n<div class=\"row\">\n<!-- col -->\n<div class=\"col-lg-6 col-xs-12\">\n<span style=\"margin-right: 15px;\">12. Номер проездного документа</span>\n<div class=\"form-group\">\n<div class=\"col-lg-3 col-md-3\">\n<label for=\"\">Дата выдачи</label>\n</div>\n<div class=\"col-lg-9 col-md-9\">\n<input type=\"text\" name=\"\" id=\"\" class=\"input-default datepicker\">\n</div>\n</div>\n<div class=\"form-group\">\n<div class=\"col-lg-3 col-md-3\">\n<label for=\"\">Кем выдан</label>\n</div>\n<div class=\"col-lg-9 col-md-9\">\n<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n</div>\n</div>\n</div><!-- /.__col -->\n\n<!-- col -->\n<div class=\"col-lg-6 col-xs-12\" style=\"margin-top: 20px; padding-right: 0;\">\n<div class=\"form-group\">\n<div class=\"col-lg-3 col-md-3\" style=\"padding-left: 0;\">\n<label for=\"\">\nДействителен до </label>\n</div>\n<div class=\"col-lg-9 col-md-9\" style=\"padding-right: 0;\">\n<input type=\"text\" name=\"\" id=\"\" class=\"input-default datepicker\">\n</div>\n</div>\n<div class=\"form-group\">\n<div class=\"col-lg-4 col-md-4\" style=\"padding-left: 0\">\n<label for=\"\">\nНомер удостоверения </label>\n</div>\n<div class=\"col-lg-8 col-md-8\" style=\"padding-right: 0\">\n<input type=\"text\" name=\"\" id=\"\" class=\"input-default\">\n</div>\n</div>\t\n</div><!-- /.__col -->\n</div><!-- /.__row -->\n\n</fieldset>\n\n<fieldset>\n<legend>\n13. Желаемая дата отъезда, страна и срок пребывания по программе:\n</legend>\n\n<!-- row -->\n<div class=\"row\">\n<!-- col -->\n<div class=\"col-lg-4 col-md-6 select-options\" style=\"padding-left: 0\">\n<div class=\"form-group\">\n<div class=\"col-lg-4 col-md-4\">\n<label for=\"\">Дата</label>\n</div>\n<div class=\"col-lg-8 col-md-8\" >\n<!-- <select name=\"\" id=\"\" class=\"select\">\n<option value=\"\" selected disabled>выбрать</option>\n<option value=\"\">выбрать</option>\n<option value=\"\">выбрать</option>\n</select> -->\n<input type=\"text\" name=\"\" id=\"\" class=\"input-default datepicker\">\n</div>\n</div>\n</div><!-- /.__col -->\n<!-- col -->\n<div class=\"col-lg-4 col-md-6 select-options\">\n<div class=\"form-group\">\n<div class=\"col-lg-4 col-md-4\">\n<label for=\"\">Страна</label>\n</div>\n<div class=\"col-lg-8 col-md-8\">\n<select name=\"\" id=\"\" class=\"select__nationality\">\n<option value=\"\" selected disabled>выбрать</option>\n<option value=\"\">выбрать</option>\n<option value=\"\">выбрать</option>\n</select>\n</div>\n</div>\n</div><!-- /.__col -->\n</div><!-- /.__row -->\t\n\n<div class=\"form-group\">\n<label for=\"\">Почему?</label>\n<textarea name=\"\" id=\"\" cols=\"30\" rows=\"10\" class=\"border-bottom-alpha\"></textarea>\n</div>\n\n\n<div class=\"form-group radio-options\">\n<span style=\"margin-right: 15px\">14. У Вас есть знакомые или друзья в стране, куда Вы хотите поехать?</span>\n<label for=\"optionsRadios-22\"><span class=\"text-label\">Да</span>\n<input type=\"radio\" name=\"country\" id=\"optionsRadios-22\" class=\"radio\">\n</label>\n<label for=\"optionsRadios-23\"><span class=\"text-label\">Нет</span>\n<input type=\"radio\" name=\"country\" id=\"optionsRadios-23\" class=\"radio\">\n</label>  \n</div>\n\n<div class=\"form-group radio-options\">\n<span style=\"margin-right: 15px\">15. Где  Вы предпочитаете работать?</span>\n<label for=\"optionsRadios-24\"><span class=\"text-label\">Большой  город</span>\n<input type=\"radio\" name=\"city\" id=\"optionsRadios-24\" class=\"radio\">\n</label>\n<label for=\"optionsRadios-25\"><span class=\"text-label\">Маленький город</span>\n<input type=\"radio\" name=\"city\" id=\"optionsRadios-25\" class=\"radio\">\n</label>  \n</div>\n\n<div class=\"form-group radio-options\">\n<span style=\"margin-right: 15px\">16. Вы хотели бы посещать языковые курсы ?</span>\n<label for=\"optionsRadios-26\"><span class=\"text-label\">Да</span>\n<input type=\"radio\" name=\"courses\" id=\"optionsRadios-26\" class=\"radio\">\n</label>\n<label for=\"optionsRadios-27\"><span class=\"text-label\">Нет</span>\n<input type=\"radio\" name=\"courses\" id=\"optionsRadios-27\" class=\"radio\">\n</label>  \n</div>\n\n<div class=\"form-group radio-options\">\n<span style=\"margin-right: 15px\">17. Водительские права:</span>\n<label for=\"optionsRadios-28\"><span class=\"text-label\">Есть</span>\n<input type=\"radio\" name=\"drivers-license\" id=\"optionsRadios-28\" class=\"radio\">\n</label>\n<label for=\"optionsRadios-29\"><span class=\"text-label\">Нет</span>\n<input type=\"radio\" name=\"drivers-license\" id=\"optionsRadios-29\" class=\"radio\">\n</label>  \n</div>\n\n</fieldset>\n\n<fieldset>\n<div class=\"row\">\n<div class=\"col-lg-6 col-md-6\"><legend>18. Какая программа вас больше интересует?</legend></div>\n<div class=\"col-lg-6 col-md-6 select-options\" style=\"margin-top: 25px\">\n<select name=\"\" id=\"\" class=\"select__nationality\">\n<option value=\"\" selected disabled>выбрать программy</option>\n<option value=\"\">выбрать программy</option>\n<option value=\"\">выбрать программy</option>\n</select>\n</div>\n</div>\n</fieldset>\n\n<div class=\"row\">\n<div class=\"col-lg-12 submit-request\">\n<button type=\"submit\" name=\"\" id=\"\">отправить</button>\n</div>\n</div>\n\n</div>\t\n</form>\n<!-- /.__form -->\n\n\n</div><!-- /.__modal-content -->\n</div>\n\n<!-- __Step byStep -->\n<form action=\"\">\n<div class=\"request-steps-filling mobile-visible\">\n\n\n\n<h1 class=\"request-step__tab\"></h1>\n\n<!-- __content -->\n<div class=\"request-step__content\">\n\n<div class=\"container\">\n\n\n<div class=\"row\">\n<div class=\"col-md-4 col-xs-12\">\n<input type=\"text\" name=\"\" class=\"field-input\" placeholder=\"ФИО\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-xs-12\">\n<input type=\"text\" name=\"\" class=\"field-input\" placeholder=\"First / Last name (как в загран паспорте)\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n<div class=\"row\">\t\n<div class=\"col-xs-12\">\n<div class=\"button-upload upload-photo\">\n<div class=\"upload-label\"><span><i class=\"icon\"></i>Загрузить фотографию</span></div>\n<input type=\"file\">\n</div>\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\t\n<div class=\"row\">\n<div class=\"selecmenu\">\n<div class=\"col-md-3 col-xs-4 gutter-width right\">\n<select name=\"\" class=\"selectMobile\" id=\"selectmenuMobile01\">\n<option selected>Число</option>\n<option>Slow</option>\n<option>Medium</option>\n<option>Fast</option>\n<option>Faster</option>\n</select>\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n<div class=\"col-md-6 col-xs-4 gutter-width left right\">\n<select name=\"\" class=\"selectMobile\" id=\"selectmenuMobile02\">\n<option selected>Месяц</option>\n<option>Slow</option>\n<option>Medium</option>\n<option>Fast</option>\n<option>Faster</option>\n</select>\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n<div class=\"col-md-3 col-xs-4 gutter-width left\">\n<select name=\"\" class=\"selectMobile\" id=\"selectmenuMobile03\">\n<option selected>Год</option>\n<option>Slow</option>\n<option>Medium</option>\n<option>Fast</option>\n<option>Faster</option>\n</select>\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n</div>\n<div class=\"row\">\n<div class=\"selecmenu\">\n<div class=\"col-xs-12\">\n<select name=\"\" class=\"selectMobile\" id=\"selectmenuMobile06\">\n<option selected>Гражданство                                                    </option>\n<option>Slow</option>\n<option>Medium</option>\n<option>Fast</option>\n<option>Faster</option>\n</select>\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n</div>\n<div class=\"row\">\n<div class=\"note-filling\">\n<div class=\"col-xs-3\">\n<div class=\"image image-brand\">\n<img src=\"images/brand-KCET.png\" alt=\"\">\n</div>\n</div>\n<div class=\"col-xs-9\">\n<div class=\"aligned-text\">\n<div class=\"align-text-middle\">\n<div class=\"text\">\n<p>Необходимо заполнить все поля, после чего с Вами свяжутся наши специалисты и помогут подобрать программу именно для Вас!</p>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"row\">\n<div class=\"agreement-users clearfix\">\n<div class=\"col-xs-10 caption\">\n<p>Я согласен с <a href=\"\">условиями передачи информации</a></p>\n</div>\n<div class=\"col-xs-2 checkbox\">\n<label for=\"agreement\">\n<input type=\"checkbox\" checked name=\"agreement\" id=\"agreement\">\n</label>\n</div>\n</div>\n</div>\n</div>\n\n</div><!-- /.__content -->\n\n<h1 class=\"request-step__tab\"></h1>\n<!-- __content -->\n<div class=\"request-step__content\">\n\n<div class=\"container\">\n\n\n<div class=\"row\">\n<div class=\"col-xs-12\">\n<input type=\"text\" name=\"\" class=\"field-input\" placeholder=\"Родной язык\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-xs-12\">\n<input type=\"text\" name=\"\" class=\"field-input\" placeholder=\"Образование, год окончания\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-xs-12\">\n<input type=\"text\" name=\"\" class=\"field-input\" placeholder=\"Работа (должность)/учеба в настоящее время\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-xs-12 caption caption-default\">\n<span>\n7. Знание иностранных языков\n</span>\n</div>\n</div>\n<!-- __row -->\n<div class=\"row group-fields\">\n<div class=\"col-md-5 col-xs-5\">\n<div class=\"caption caption-language-selection\">\n<span>Языки</span>\n</div>\n<!-- __row -->\n<div class=\"row\">\t\n<div class=\"col-xs-12\" style=\"margin: 2px 0\">\t\n<input type=\"text\" name=\"\" class=\"field-input field-border-bottom\" placeholder=\"Каким языками владеете?\">\t\n</div>\n<div class=\"col-xs-12\" style=\"margin: 2px 0\">\t\n<input type=\"text\" name=\"\" class=\"field-input field-border-bottom\" placeholder=\"Каким языками владеете?\">\n</div>\n<div class=\"col-xs-12\" style=\"margin: 2px 0\">\t\n<input type=\"text\" name=\"\" class=\"field-input field-border-bottom\" placeholder=\"Каким языками владеете?\">\n</div>\n</div><!-- /.__row -->\t\n</div>\n<div class=\"col-md-7 col-xs-7 group-radio\">\n<!-- __row -->\t\n<div class=\"row\">\n<div class=\"col-xs-4 remove-padding\">\n<div class=\"caption caption-knowledge-language\">\n<span>Начальный</span>\n</div>\n<div class=\"row\">\n<div class=\"col-xs-12\">\n<div class=\"radio-button\">\t\n<label>\n<input type=\"radio\" name=\"level-knowledge-language01\" id=\"\" class=\"knowledge-language\">\n</label>\n</div>\t\n</div>\n<div class=\"col-xs-12\">\n<div class=\"radio-button\">\n<label>\n<input type=\"radio\" name=\"level-knowledge-language02\" id=\"\" class=\"knowledge-language\">\n</label>\n</div>\t\n</div>\n<div class=\"col-xs-12\">\n<div class=\"radio-button\">\t\n<label>\n<input type=\"radio\" name=\"level-knowledge-language03\" id=\"\" class=\"knowledge-language\">\n</label>\n</div>\t\n</div>\n</div>\n</div>\n<div class=\"col-xs-4 remove-padding\">\n<div class=\"caption caption-knowledge-language\">\n<span>\nРазговорный</span>\n</div>\t\t\n<div class=\"row\">\n<div class=\"col-xs-12\">\n<div class=\"radio-button\">\n<label>\n<input type=\"radio\" name=\"level-knowledge-language01\" id=\"\" class=\"knowledge-language\">\n</label>\n</div>\t\n</div>\n<div class=\"col-xs-12\">\n<div class=\"radio-button\">\t\n<label>\n<input type=\"radio\" name=\"level-knowledge-language02\" id=\"\" class=\"knowledge-language\">\n</label>\n</div>\t\n</div>\n<div class=\"col-xs-12\">\n<div class=\"radio-button\">\n<label>\n<input type=\"radio\" name=\"level-knowledge-language03\" id=\"\" class=\"knowledge-language\">\n</label>\n</div>\t\n</div>\n</div>\n</div>\n<div class=\"col-xs-4 remove-padding\">\n<div class=\"caption caption-knowledge-language\">\n<span>\nСвободный\n</span>\n</div>\t\n<div class=\"row\">\n<div class=\"col-xs-12\">\n<div class=\"radio-button\">\t\n<label>\n<input type=\"radio\" name=\"level-knowledge-language01\" id=\"\" class=\"knowledge-language\">\n</label>\n</div>\t\n</div>\n<div class=\"col-xs-12\">\n<div class=\"radio-button\">\t\n<label>\n<input type=\"radio\" name=\"level-knowledge-language02\" id=\"\" class=\"knowledge-language\">\n</label>\n</div>\t\n</div>\n<div class=\"col-xs-12\">\n<div class=\"radio-button\">\n<label>\n<input type=\"radio\" name=\"level-knowledge-language03\" id=\"\" class=\"knowledge-language\">\n</label>\n</div>\t\n</div>\n</div>\n</div>\n</div><!-- __row -->\t\n</div>\n</div><!-- /.__row -->\n</div>\n\n\n\n</div><!-- /.__content -->\n\n<h1 class=\"request-step__tab\"></h1>\n<!-- __content -->\n<div class=\"request-step__content\">\n\n<div class=\"container\">\n\n\n<div class=\"row\">\n<div class=\"col-xs-12 caption caption-default\">\n<span>\n8. Семейное положение\n</span>\n</div>\n</div>\n\n\n<div class=\"row\">\t\n<div class=\"selecmenu\">\n<div class=\"col-xs-12\">\n<select name=\"\" class=\"selectMobile\" id=\"selectmenuMobile04\">\n<option selected>Семейное положение</option>\n<option>Женат / Замужем</option>\n<option>Холост / Не замужем</option>\n<option>Разведен (а)</option>\n<option>Вдовец / Вдова</option>\n</select>\n\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12\">\n<input type=\"text\" name=\"\" class=\"field-input\" placeholder=\"Дети\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12 caption caption-default\">\n<span>\n9. Адрес\n</span>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"selecmenu\">\n<div class=\"col-md-6 col-xs-6 gutter-width right\">\n<select name=\"\" class=\"selectMobile\" id=\"selectmenuMobile05\">\n<option selected>Страна</option>\n<option>Slow</option>\n<option>Medium</option>\n<option>Fast</option>\n<option>Faster</option>\n</select>\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n<div class=\"col-md-6 col-xs-6 gutter-width left\">\n<select name=\"\" class=\"selectMobile\" id=\"selectmenuMobile06\">\n<option selected>Город</option>\n<option>Slow</option>\n<option>Medium</option>\n<option>Fast</option>\n<option>Faster</option>\n</select>\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12\">\n<input type=\"text\" name=\"\" class=\"field-input\" placeholder=\"Индекс\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12\">\n<input type=\"text\" name=\"\" class=\"field-input\" placeholder=\"E-mail\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12\">\n<input type=\"text\" name=\"\" class=\"field-input\" placeholder=\"Facebook\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n\n\n\n\n\n</div>\n\n</div><!-- /.__content -->\n\n\n<h1 class=\"request-step__tab\"></h1>\n<!-- __content -->\n<div class=\"request-step__content\">\n\n<div class=\"container\">\n\n\n\n<div class=\"row\">\n<div class=\"col-xs-12\">\n<input type=\"text\" name=\"\" class=\"field-input\" placeholder=\"VK\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-xs-12\">\n<input type=\"text\" name=\"\" class=\"field-input\" placeholder=\"Twitter\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12\">\n<input type=\"text\" name=\"\" class=\"field-input\" placeholder=\"Skype\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"selecmenu fixed-width-selectmenu-xs\">\n<div class=\"col-md-12 col-xs-12\">\n<select name=\"\" class=\"selectMobile\" id=\"selectmenuMobile05\">\n<option selected>Вы имеете действующий загранпаспорт?</option>\n<option>да</option>\n<option>нет</option>\n</select>\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n</div>\n\n<div class=\"row\">\n<!-- <div class=\"selecmenu\"> -->\n<div class=\"col-md-6 col-xs-6 gutter-width right\">\n<input type=\"text\" name=\"\" class=\"field-input datepicker\" placeholder=\"Номер\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n<div class=\"col-md-6 col-xs-6 gutter-width left\">\n<input type=\"text\" name=\"\" class=\"field-input datepicker\" placeholder=\"Дата окончания действия загранпаспорта\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n<!-- </div> -->\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12 caption caption-default\">\n<span>\n12. Номер проездного документа\n</span>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-6 gutter-width right\">\n<input type=\"text\" name=\"\" class=\"field-input datepicker\" placeholder=\"Дата выдачи\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n<div class=\"col-xs-6 gutter-width left\">\n<input type=\"text\" name=\"\" class=\"field-input datepicker\" placeholder=\"Действителен до\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n\n<div class=\"row\">\n\n<div class=\"col-xs-6 gutter-width right\">\n<input type=\"text\" name=\"\" class=\"field-input\" placeholder=\"Кем выдан\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n<div class=\"col-xs-6 gutter-width left\">\n<input type=\"text\" name=\"\" class=\"field-input\" placeholder=\"Номер удостоверения\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n\n\n\n\n<!-- </div>\t -->\n\n</div>\n\n</div><!-- /.__content -->\t\n\n\n<h1 class=\"request-step__tab\"></h1>\n<!-- __content -->\n<div class=\"request-step__content\">\n\n<div class=\"container\">\n\n\n\n<div class=\"row\">\n<div class=\"col-xs-12 caption caption-default\">\n<span>\n12. Желаемая дата отъезда, <br/>страна и срок пребывания по программе\n</span>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-6 gutter-width right\">\n<input type=\"text\" name=\"\" class=\"field-input datepicker\" placeholder=\"Дата выдачи\">\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n<div class=\"col-xs-6 gutter-width left\">\n<div class=\"selecmenu\">\n<select name=\"\" class=\"selectMobile\" id=\"selectmenuMobile05\">\n<option selected>Страна</option>\n<option>да</option>\n<option>нет</option>\n</select>\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12\">\n<input type=\"text\" name=\"\" class=\"field-input\" placeholder=\"Почему?\">\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12 caption caption-default\">\n<span>\n13. У Вас есть знакомые или друзья <br/> в стране, куда Вы хотите поехать?\n</span>\n</div>\n</div>\t\n<div class=\"row group-radio\">\n<div class=\"col-xs-6 radio-button\" style=\"padding: 15px 0 0;\">\n<label>\n<input type=\"radio\" name=\"\" id=\"\" class=\"radio-default-mobile\">\n<span class=\"text-label\">Да</span>\n</label>\n\n</div>\t\n<div class=\"col-xs-6 radio-button\"  style=\"padding: 15px 0 0;\">\n<label>\n<input type=\"radio\" name=\"\" id=\"\" class=\"radio-default-mobile\">\n<span class=\"text-label\">Нет</span>\n</label>\n\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12 caption caption-default\">\n<span>\n14. Где Вы предпочитаете работать?\n</span>\n</div>\n</div>\t\n<div class=\"row group-radio\">\n<div class=\"col-xs-6 radio-button\" style=\"padding: 30px 0 0;\">\n<label>\n<input type=\"radio\" name=\"\" id=\"\" class=\"radio-default-mobile\">\n<span class=\"text-label\" style=\"width: 85px; text-align: center; top: -35px; left: 50%; margin-left: -42px;\">Большой город</span>\n</label>\n\n</div>\t\n<div class=\"col-xs-6 radio-button\" style=\"padding: 30px 0 0;\">\n<label>\n<input type=\"radio\" name=\"\" id=\"\" class=\"radio-default-mobile\">\n<span class=\"text-label\" style=\"width: 85px; text-align: center; top: -35px; left: 50%; margin-left: -42px;\">Маленький город</span>\n</label>\n\n</div>\n</div>\n\n\n\n\n\n\n\n<!-- </div> -->\n\n</div>\n\n</div><!-- /.__content -->\n\n\n<h1 class=\"request-step__tab\"></h1>\n<!-- __content -->\n<div class=\"request-step__content\">\n\n<div class=\"container\">\n\n<div class=\"row\">\n<div class=\"col-xs-12 caption caption-default\">\n<span>\n14. Вы хотели бы <br/> посещать языковые курсы ?\n</span>\n</div>\n</div>\t\n<div class=\"row group-radio\">\n<div class=\"col-xs-6 radio-button\" style=\"padding: 15px 0 0;\">\n<label>\n<input type=\"radio\" name=\"\" id=\"\" class=\"radio-default-mobile\">\n<span class=\"text-label\">Да</span>\n</label>\n\n</div>\t\n<div class=\"col-xs-6 radio-button\" style=\"padding: 15px 0 0;\">\n<label>\n<input type=\"radio\" name=\"\" id=\"\" class=\"radio-default-mobile\">\n<span class=\"text-label\">Нет</span>\n</label>\n\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"col-xs-12 caption caption-default\">\n<span>\n15. Водительские права:\n</span>\n</div>\n</div>\t\n<div class=\"row group-radio\">\n<div class=\"col-xs-6 radio-button\" style=\"padding: 15px 0 0;\">\n<label>\n<input type=\"radio\" name=\"\" id=\"\" class=\"radio-default-mobile\">\n<span class=\"text-label\">Есть</span>\n</label>\n\n</div>\t\n<div class=\"col-xs-6 radio-button\" style=\"padding: 15px 0 0;\">\n<label>\n<input type=\"radio\" name=\"\" id=\"\" class=\"radio-default-mobile\">\n<span class=\"text-label\">Нет</span>\n</label>\n\n</div>\n</div>\n\n\n<div class=\"row\">\n<div class=\"col-xs-12 caption caption-default\">\n<span>\n16. Какая программа<br/> вас больше интересует?\n</span>\n</div>\n</div>\t\t\n\n<div class=\"row\">\n<div class=\"selecmenu fixed-width-selectmenu-xs\">\n<div class=\"col-md-12 col-xs-12\">\n<select name=\"\" class=\"selectMobile\" id=\"selectmenuMobile05\">\n<option selected>Какая программа вас больше интересует?</option>\n<option>да</option>\n<option>нет</option>\n</select>\n<!-- \t\t\t\t\t\t\t\t\t\t<span class=\"label-warning\"><i class=\"icon\"></i>Это поле обязательно к заполнению</span> -->\n</div>\n</div>\n</div>\n</div>\n\n</div><!-- /.__content -->\n\n\n</div><!-- /.__Step byStep -->\n</form>\n\n</div>\n\n</div>\n\n</div>\t\n\n</div><!-- /.__container-alignment -->\n\n\n\n</div>\n"

/***/ }),

/***/ 794:
/***/ (function(module, exports) {

module.exports = "<header class=\"masthead\">\n  <div class=\"container\">\n    <div class=\"masthead__select-languages mobile-hidden\">\n      <div class=\"select-language__button\">\n        <button type=\"button\">ru</button>\n      </div>\n      <div class=\"select-language__button\">\n        <button type=\"button\">eng</button>\n      </div>\n    </div>\n    <div class=\"masthead__our-contacts mobile-hidden\">\n        <div class=\"contact__phone\">\n          <a href=\"tel: +7 (747) 250-7777\">+7 (747) 250-7777</a>\n        </div>\n        <div class=\"contact__email\">\n          или пишите на <a href=\"mailto: wat@kcet.kz\">wat@kcet.kz</a>\n        </div>\n    </div>\n    \n    <div class=\"masthead__select-program mobile-hidden\" >\n      <div class=\"select-program__caption\">\n        <a [routerLink]=\"['/program']\">Выбрать программу</a>\n      </div>\n      <div class=\"select-program__button\">\n\t\t\t\t\t\t<a id=\"request\" class=\"toggle-modal-request\" href=\"#requestModal\">Онлайн-заявка</a>\n      </div>\n    </div>\n    <div class=\"masthead__user mobile-hidden\">\n      <div class=\"user__search\">\n        <form action=\"\" name=\"\" id=\"\">\n          <input type=\"text\" name=\"\" id=\"\">\n          <button type=\"submit\" name=\"\" id=\"\"></button>\n        </form>\n      </div>\n      <div class=\"user__login\"><!--registration-->\n        <a id=\"authorization\" class=\"toggle-modal-authorization\" href=\"#authorizationModal\">1</a>\n      </div>\n    </div>\n    </div>\n    <div class=\"mobile-navbar mobile-visible clearfix\">\n      <div class=\"container\">\n        <h3>Kazakhstan Counсil <span>for Educational Travel</span></h3>\n        <button type=\"button\" class=\"toggleMenu\">Menu</button>\n      </div>\n    </div>\n</header>\n"

/***/ }),

/***/ 795:
/***/ (function(module, exports) {

module.exports = "<div class=\"vertical-navbar__logo\">\n  <a [routerLink]=\"['/index']\">\n    <img src=\"images/logo.png\" alt=\"\">\n  </a>\n</div>\n"

/***/ }),

/***/ 796:
/***/ (function(module, exports) {

module.exports = "<div class=\"vertical-navbar__nav\">\n  <ul class=\"nav__list\">\n    <li class=\"nav__item\"><a [routerLink]=\"['/about']\">О компании</a></li>\n    <li class=\"nav__item\"><a [routerLink]=\"['/product']\">Прокты КСЕТ</a></li>\n    <li class=\"nav__item\"><a href=\".gtxt.biz/forum/index.php\">Друзья и попутчики</a></li>\n    <li class=\"nav__item\"><a href=\".gtxt.biz/forum/index.php\">Форум</a></li>\n    <li class=\"nav__item\"><a [routerLink]=\"['/frends']\">Партнеры и друзья</a></li>\n  </ul>\n</div>\n"

/***/ }),

/***/ 797:
/***/ (function(module, exports) {

module.exports = "<div id=\"offers\" class=\"base-container\">\n  <topabout></topabout>\n  <section class=\"section offers\">\n    <div class=\"scrollableContent\">\n      <div class=\"container-alignment\">\n        <div class=\"alignment\">\n          <div class=\"centered\">\t\t\n            <div class=\"container\">\n              <div class=\"row\" style=\"position: relative;\">\n                <div class=\"col-lg-3 col-md-3 mobile-hidden\" style=\"position: absolute; top: 0; left: 0; bottom: 0;\">\n                  <nav class=\"vertical-navbar animated fadeInLeft\">\n                    <div class=\"vertical-navbar-stretch\">\n                      <logo></logo>\n                      <mainmenu></mainmenu>\n                      <div style=\"position: absolute; left: 0; right: 0; bottom: 0;\">\n                        <div class=\"vertical-navbar__social-network widget__social-network inline white\">\n                          <offerssocial></offerssocial>\n                        </div>\n                      </div>\n                    </div>\n                  </nav>\n                </div>\n                <div class=\"col-lg-9 col-md-9 col-xs-12 col-lg-offset-3 col-md-offset-3\">\n                  <div class=\"content-container offers__content \">\n                    <div class=\"scrollableContent\">\n                      <div class=\"row list-offers\">\n                        <offerscontent></offerscontent>\n                      </div>\n                    </div>\n                  </div>\n                </div>\n              </div>\n            </div>\n             </div>\n                </div>\n              </div>\n            </div>\t\n  </section>\n</div>\n<authorization></authorization>\n"

/***/ }),

/***/ 798:
/***/ (function(module, exports) {

module.exports = "<div class=\"col-lg-12 col-md-12 item-offers clearfix\">\n  <div class=\"offers-thumbnail\">\n    <div class=\"offers-thumbnail-img\">\t\t\t\t\t\n     <img src=\"http://placehold.it/350x150\" alt=\"\">\n    </div>\n  </div>\n  <div class=\"offers-text\">\n    <div class=\"offers-text-heading clearfix\">\n      <div class=\"offers-text-title\">\n        <h3>Lorem ipsum dolor sit.</h3>\n      </div>\n      <div class=\"offers-text-date\">\n        Опубликовано:<span> 1 февр. 2017 г.</span>\n      </div>\n    </div>\n    <div class=\"offers-text-excerpt\">\n      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta!</p>\n    </div>\n    <div class=\"offers-text-link\">\n      <a href=\"view-article.html\" onclick=\"window.location.href = this.href\">Подробнее</a>\n    </div>\n  </div>\n</div>\n<div class=\"col-lg-12 col-md-12 item-offers clearfix\">\n  <div class=\"offers-thumbnail\">\n    <div class=\"offers-thumbnail-img\">\t\t\t\t\t\n      <img src=\"http://placehold.it/350x150\" alt=\"\">\n    </div>\n  </div>\n  <div class=\"offers-text\">\n    <div class=\"offers-text-heading clearfix\">\n      <div class=\"offers-text-title\">\n        <h3>Lorem ipsum dolor sit.</h3>\n      </div>\n      <div class=\"offers-text-date\">\n        Опубликовано:<span> 1 февр. 2017 г.</span>\n      </div>\n    </div>\n    <div class=\"offers-text-excerpt\">\n      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta!</p>\n    </div>\n    <div class=\"offers-text-link\">\n      <a href=\"view-article.html\" onclick=\"window.location.href = this.href\">Подробнее</a>\n    </div>\n  </div>\n</div>\n<div class=\"col-lg-12 col-md-12 item-offers clearfix\">\n  <div class=\"offers-text\">\n    <div class=\"offers-text-heading clearfix\">\n      <div class=\"offers-text-title\">\n        <h3>Lorem ipsum dolor sit.</h3>\n      </div>\n      <div class=\"offers-text-date\">\n         Опубликовано:<span> 1 февр. 2017 г.</span>\n      </div>\n    </div>\n    <div class=\"offers-text-excerpt\">\n      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta!</p>\n    </div>\n    <div class=\"offers-text-link\">\n      <a href=\"view-article.html\" onclick=\"window.location.href = this.href\">Подробнее</a>\n    </div>\n  </div>\n</div>\n<div class=\"col-lg-12 col-md-12 item-offers clearfix\">\n  <div class=\"offers-thumbnail\">\n    <div class=\"offers-thumbnail-img\">\t\t\t\t\t\n      <img src=\"http://placehold.it/350x150\" alt=\"\">\n    </div>\n  </div>\n  <div class=\"offers-text\">\n    <div class=\"offers-text-heading clearfix\">\n      <div class=\"offers-text-title\">\n        <h3>Lorem ipsum dolor sit.</h3>\n      </div>\n      <div class=\"offers-text-date\">\n        Опубликовано:<span> 1 февр. 2017 г.</span>\n      </div>\n    </div>\n    <div class=\"offers-text-excerpt\">\n      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta!</p>\n    </div>\n    <div class=\"offers-text-link\">\n      <a href=\"view-article.html\" onclick=\"window.location.href = this.href\">Подробнее</a>\n    </div>\n  </div>\n</div>\n<div class=\"col-lg-12 col-md-12 item-offers clearfix\">\n  <div class=\"offers-text\">\n    <div class=\"offers-text-heading clearfix\">\n      <div class=\"offers-text-title\">\n        <h3>Lorem ipsum dolor sit.</h3>\n      </div>\n      <div class=\"offers-text-date\">\n        Опубликовано:<span> 1 февр. 2017 г.</span>\n      </div>\n    </div>\n    <div class=\"offers-text-excerpt\">\n      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta!</p>\n    </div>\n    <div class=\"offers-text-link\">\n      <a href=\"#\" onclick=\"window.location.href = this.href\">Подробнее</a>\n    </div>\n  </div>\n</div>\n<div class=\"col-lg-12 col-md-12 item-offers clearfix\">\n  <div class=\"offers-text\">\n    <div class=\"offers-text-heading clearfix\">\n      <div class=\"offers-text-title\">\n        <h3>Lorem ipsum dolor sit.</h3>\n      </div>\n      <div class=\"offers-text-date\">\n        Опубликовано:<span> 1 февр. 2017 г.</span>\n      </div>\n    </div>\n    <div class=\"offers-text-excerpt\">\n      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta!</p>\n    </div>\n    <div class=\"offers-text-link\">\n      <a href=\"#\" onclick=\"window.location.href = this.href\">Подробнее</a>\n    </div>\n  </div>\n</div>\n<div class=\"col-lg-12 col-md-12 item-offers clearfix\">\n  <div class=\"offers-text\">\n    <div class=\"offers-text-heading clearfix\">\n      <div class=\"offers-text-title\">\n        <h3>Lorem ipsum dolor sit.</h3>\n      </div>\n      <div class=\"offers-text-date\">\n         Опубликовано:<span> 1 февр. 2017 г.</span>\n      </div>\n    </div>\n    <div class=\"offers-text-excerpt\">\n      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta!</p>\n    </div>\n    <div class=\"offers-text-link\">\n      <a href=\"#\" onclick=\"window.location.href = this.href\">Подробнее</a>\n    </div>\n  </div>\n</div>\n<div class=\"col-lg-12 col-md-12 item-offers clearfix\">\n  <div class=\"offers-text\">\n    <div class=\"offers-text-heading clearfix\">\n      <div class=\"offers-text-title\">\n        <h3>Lorem ipsum dolor sit.</h3>\n      </div>\n      <div class=\"offers-text-date\">\n        Опубликовано:<span> 1 февр. 2017 г.</span>\n      </div>\n    </div>\n    <div class=\"offers-text-excerpt\">\n      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut debitis assumenda harum ipsam sint, magni, laboriosam quia excepturi similique reiciendis ea unde cumque numquam voluptatem minus est non soluta!</p>\n    </div>\n    <div class=\"offers-text-link\">\n      <a href=\"#\" onclick=\"window.location.href = this.href\">Подробнее</a>\n    </div>\n  </div>\n</div>\n<!-- -->"

/***/ }),

/***/ 799:
/***/ (function(module, exports) {

module.exports = "\n\n\t\t\t\t\t\t\t\t\t\t<!-- __caption -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"social-network__caption\">\n\t\t\t\t\t\t\t\t\t\t\t<p>Мы в социальных сетях: </p>\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__caption -->\n\n\t\t\t\t\t\t\t\t\t\t<!-- __list -->\n\t\t\t\t\t\t\t\t\t\t<ul class=\"social-network__list\">\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-mail\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-skype\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-facebook\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-twitter\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-instagram\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon icon-vk\"></i></a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t</ul><!-- /.__list -->\n\n"

/***/ }),

/***/ 800:
/***/ (function(module, exports) {

module.exports = "<div id=\"subscriptionModal\" class=\"news-subscription\">\n<div class=\"container mobile-hidden\">\n<div class=\"close close-subscriptionModal\"> \n<button type=\"button\" class=\"toggle-modal-subscription\"></button>\n</div>\n</div>\n<header class=\"mastheadModal-default mastheadModal-subscription mobile-visible\">\n<div class=\"container\">\n<div class=\"row\">\n<div class=\"col-xs-3 text-left\">\n<div class=\"mobile-navbar__actions text-left\">\n<a href=\"\">Назад</a>\n</div>\n</div>\n<div class=\"col-xs-6 text-center\">\n<div class=\"mobile-navbar__title\">\nПодписка на рассылку\n</div>\n</div>\n<div class=\"col-xs-3 text-right\">\n<div class=\"close close-subscriptionModal\"> \n<button type=\"button\" class=\"toggle-modal-subscription\"></button>\n</div>\n</div>\n</div>\n</div>\n</header>\n<div class=\"scrollableContent\">\n<div class=\"container-alignment\">\n<div class=\"alignment\">\n<div class=\"centered\">\n<div class=\"container\">\n<div class=\"modal-content\">\n<div class=\"request__headline mobile-hidden clearfix\">\n<div class=\"col-lg-4 headline__title\">\n<p> - на рассылку</p>\n<h4>Подписка</h4>\n</div>\n<div class=\"col-lg-6 headline__content\">\n<p>Необходимо заполнить поле, для <span>того чтобы быть в курсе всех событий</span></p>\n</div>\n<div class=\"col-lg-2 headline__logo text-right\">\n<img src=\"images/headline-logo.png\" alt=\"\">\n</div>\n</div>\n<div class=\"container-form form-subscription\">\n<div class=\"content-form content-form-subscription\">\n<form action=\"\">\n<div class=\"row mobile-hidden\">\t\t\t\t\t\t\t\t\t\t\t\t\n<div style=\"float: left; padding: 0 15px; width: 10%\">\n<label for=\"\">Email:</label>\n</div>\t\n<div style=\"float: left; width: 90%;\">\n<input type=\"text\" name=\"\" id=\"\" class=\"input-default\" style=\"padding: 10px;\">\n</div>\t\n</div>\n<div class=\"row mobile-visible\">\n<p class=\"caption-content-form\">Необходимо заполнить поле, для <span>того чтобы быть в курсе всех событий</span></p>\n</div>\n<div class=\"row mobile-visible\">\n<div class=\"col-xs-12\">\n<input type=\"text\" name=\"\" id=\"\" class=\"field-input\" placeholder=\"Email\">\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-lg-12 btn-submit\">\n<button type=\"submit\" name=\"\" id=\"\">отправить</button>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\t\n</div>\n</div>"

/***/ }),

/***/ 801:
/***/ (function(module, exports) {

module.exports = "<div class=\"base-container\">\t\n<topabout></topabout>\n<section class=\"section project\">\n<div class=\"scrollableContent\">\n<div class=\"container-alignment\">\n<div class=\"alignment\">\n<div class=\"centered\">\n<div class=\"container\">\n<div class=\"row\" style=\"position: relative;\">\n<div class=\"col-lg-3 col-md-3 mobile-hidden\" style=\"position: absolute; top: 0; left: 0; bottom: 0;\">\n<nav class=\"vertical-navbar animated fadeInLeft\">\n<div class=\"vertical-navbar-stretch\">\n<logo></logo>\n<mainmenu></mainmenu>\n<productmenu2></productmenu2>\n<productsocial></productsocial>\n</div>\n</nav>\n</div>\n<div class=\"col-lg-9 col-md-9 col-xs-12 col-lg-offset-3 col-md-offset-3\">\n<productcontent></productcontent> \n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\t\t\n</section>\n</div>\n<podpiska></podpiska>\n<forma></forma>\n<authorization></authorization>"

/***/ }),

/***/ 802:
/***/ (function(module, exports) {

module.exports = "<div class=\"content-container project__content\">\n<div class=\"content__head-cover mobile-visible\">\n<img src=\"images/ship.png\" alt=\"\">\n</div>\t\n<div class=\"content__head clearfix\">\n<div class=\"content__caption animated fadeInUp\">\n<p>Самые свежие новости дня от компании Kazakhstan Council for Educational Travel. Самые интересные события и факты, последние мероприятия и что планирует компания в будущем. Последние новости посольств, будь в курсе событий. Новые программы и проекты от КСЕТ.<br/> <a href=\"\">Как присоединиться к ленте «Новости компании»?</a> <a href=\"\">Зарегистрируйся здесь и сейчас!</a></p>\n</div>\n</div>\n<div class=\"content__body animated fadeInUp\">\n<div class=\"row\">\n<div class=\"col-lg-10 col-md-9 col-xs-12\">\n<div class=\"content__projects\">\n<div class=\"content__archive mobile-visible\">\n<div class=\"archive__caption text-center\">\n<p>Архив за год</p>\n</div>\n<div class=\"row archive__selects\">\n<div class=\"col-xs-4 archive__select\">\n<div class=\"archive__selecmenu selectmenu__month select-options\" style=\"margin-top: 0\">\n<select name=\"\" id=\"selectmenu__month\" class=\"select\">\n<option value=\"\">Выберите месяц</option>\n<option value=\"\">Январь</option>\n<option value=\"\">Февраль</option>\n<option value=\"\">Март</option>\n<option value=\"\">Апрель</option>\n<option value=\"\">Май</option>\n<option value=\"\">Июнь</option>\n<option value=\"\">Август</option>\n<option value=\"\">Сентябрь</option>\n<option value=\"\">Ноябрь</option>\n<option value=\"\">Октябрь</option>\n<option value=\"\">Декабрь</option>\n</select>\n</div>\n</div>\n<div class=\"col-xs-5 archive__select\">\n<div class=\"archive__selecmenu selectmenu__years select-options\">\n<select name=\"\" id=\"selectmenu__years\" class=\"select\">\n<option value=\"\">Выберите год</option>\n<option value=\"\">2011</option>\n<option value=\"\">2012</option>\n<option value=\"\">2013</option>\n<option value=\"\">2014</option>\n<option value=\"\">2015</option>\n<option value=\"\">2016</option>\n</select>\n</div>\n</div>\n</div>\n</div>\n<div id=\"scroll02\">\n<div class=\"projects__list\">\n<div class=\"project__item\">\n<img src=\"images/project01.jpg\" alt=\"\">\n<div class=\"overlay\">\n<div class=\"overlay__headline\">\n<p>13 февряля</p>\n<h3>Lorem Ipsum is  simply dummy text</h3>\n</div>\n<div class=\"overlay__text\">\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\n</div>\n<div class=\"overlay__link\">\n<a href=\"view-article.html\">Подробнее</a>\n</div>\n</div>\n</div>\n<div class=\"project__item\">\n<img src=\"images/project02.jpg\" alt=\"\">\n<div class=\"overlay\">\n<div class=\"overlay__headline\">\n<p>13 февряля</p>\n<h3>Lorem Ipsum is  simply dummy text</h3>\n</div>\n<div class=\"overlay__text\">\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\n</div>\n<div class=\"overlay__link\">\n<a href=\"view-article.html\">Подробнее</a>\n</div>\n</div>\n</div>\n<div class=\"project__item\">\n<img src=\"images/project03.jpg\" alt=\"\">\n<div class=\"overlay\">\n<div class=\"overlay__headline\">\n<p>13 февряля</p>\n<h3>Lorem Ipsum is  simply dummy text</h3>\n</div>\n<div class=\"overlay__text\">\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\n</div>\n<div class=\"overlay__link\">\n<a href=\"view-article.html\">Подробнее</a>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"col-lg-2 col-md-3 col-xs-12 mobile-hidden\">\n<div class=\"content__archive\">\n<div class=\"archive__caption\">\n<p>Архив за год</p>\n</div>\n<div class=\"archive__selecmenu selectmenu__years select-options\">\n<select name=\"\" id=\"selectmenu__years\" class=\"select\">\n<option value=\"\">2010</option>\n<option value=\"\">2011</option>\n<option value=\"\">2012</option>\n<option value=\"\">2013</option>\n<option value=\"\">2014</option>\n<option value=\"\">2015</option>\n<option value=\"\">2016</option>\n</select>\n</div>\n<div class=\"archive__selecmenu selectmenu__month\">\n<ul>\n<li><a href=\"\">Январь</a></li>\n<li class=\"selectmenu__month-active\"><a href=\"\">Февраль</a></li>\n<li><a href=\"\">Март</a></li>\n<li><a href=\"\">Апрель</a></li>\n<li><a href=\"\">Май</a></li>\n<li><a href=\"\">Июнь</a></li>\n<li><a href=\"\">Июль</a></li>\n<li><a href=\"\">Август</a></li>\n<li><a href=\"\">Сентябрь</a></li>\n<li><a href=\"\">Октябрь</a></li>\n<li><a href=\"\">Ноябрь</a></li>\n<li><a href=\"\">Декабрь</a></li>\n</ul>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n"

/***/ }),

/***/ 803:
/***/ (function(module, exports) {

module.exports = "<div class=\"vertical-navbar__subscribe\">\n  <a id=\"subscription\" href=\"#subscriptionModal\" class=\"toggle-modal-subscription\">Подписка на рассылку</a>\n</div>\n  <p class=\"slogan yellow\">На гребне волны <span>вместе с КСЕТ!</span></p>\n"

/***/ }),

/***/ 804:
/***/ (function(module, exports) {

module.exports = "<div style=\"position: absolute; left: 0; right: 0; bottom: 0;\">\n  <div class=\"vertical-navbar__social-network widget__social-network inline white\">\n    <div class=\"social-network__caption\">\n      <p>Мы в социальных сетях: </p>\n    </div>\n    <ul class=\"social-network__list\">\n      <li>\n        <a href=\"#\"><i class=\"icon icon-mail\"></i></a>\n      </li>\n      <li>\n        <a href=\"#\"><i class=\"icon icon-skype\"></i></a>\n      </li>\n      <li>\n        <a href=\"#\"><i class=\"icon icon-facebook\"></i></a>\n      </li>\n      <li>\n        <a href=\"#\"><i class=\"icon icon-twitter\"></i></a>\n      </li>\n      <li>\n        <a href=\"#\"><i class=\"icon icon-instagram\"></i></a>\n      </li>\n      <li>\n        <a href=\"#\"><i class=\"icon icon-vk\"></i></a>\n      </li>\n    </ul>\n  </div>\n</div>"

/***/ }),

/***/ 805:
/***/ (function(module, exports) {

module.exports = "\n\t<div id=\"slideoutMenu\" class=\"slideoutMenu mobile-visible\">\n\t\t<div class=\"mobile-navbar mobile-visible clearfix\">\n\t\t\t<button type=\"button\" class=\"toggleMenu\">Collapse</button>\n\t\t</div>\n\t\t<div class=\"slideoutMenu__cover\">\n\t\t\t<div class=\"mobile-navbar mobile-visible clearfix\">\n\t\t\t\t<h3>Kazakhstan Counсil <span>for Educational Travel</span></h3>\n\t\t\t\t<button type=\"button\" class=\"toggleMenu\">Collapse</button>\n\t\t\t</div>\n\t\t\t<div class=\"slideoutMenu__action\">\n\t\t\t\t<ul>\n\t\t\t\t\t<li><button type=\"button\"><i class=\"icon icon-phone\">1</i></button></li>\n\t\t\t\t\t<li><button type=\"button\"><i class=\"icon icon-user\">2</i></button></li>\n\t\t\t\t\t<li><button type=\"button\"><i class=\"icon icon-mail\">3</i></button></li>\n\t\t\t\t</ul>\n\t\t\t</div>\n\t\t</div>\n\t\t<div class=\"slideoutMenu__logo\">\n\t\t\t<a href=\"\">\n\t\t\t\t<img src=\"images/mobile-Logo.png\" alt=\"\">\n\t\t\t</a>\n\t\t</div>\n\t\t<div class=\"slideoutMenu__content\">\n\t\t<nav class=\"slideoutMenu__nav\" id=\"scroll03\">\n\t\t\t\t<ul>\n\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"about-us.html\">О компании <i class=\"icon\"></i></a>\n\t\t\t\t\t</li>\n\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"project.html\">Прокты КСЕТ <i class=\"icon\"></i></a>\n\t\t\t\t\t</li>\n\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"\">Друзья и попутчики <i class=\"icon\"></i></a>\n\t\t\t\t\t</li>\n\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"\">Форум <i class=\"icon\"></i></a>\n\t\t\t\t\t</li>\n\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"partners.html\">Партнеры и друзья <i class=\"icon\"></i></a>\n\t\t\t\t\t</li>\n\t\t\t\t\t<li>\n\t\t\t\t\t\t<a id=\"bonuses01\" class=\"toggle-modal-bonuses\" href=\"#bonusesModal\">Бонусы от партнеров <i class=\"icon\"></i></a>\n\t\t\t\t\t</li>\n\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"offers.html\">Горячие предложения <i class=\"icon\"></i></a>\n\t\t\t\t\t</li>\n\t\t\t\t</ul>\n\t\t\t</nav>\n\t\t\t<div class=\"slideoutMenu__action\">\n\t\t\t\t<ul>\n\t\t\t\t\t<li><button type=\"button\"><i class=\"icon icon-phone\">1</i></button></li>\n\t\t\t\t\t<li><button type=\"button\"><i class=\"icon icon-user\">2</i></button></li>\n\t\t\t\t\t<li><button type=\"button\"><i class=\"icon icon-mail\">3</i></button></li>\n\t\t\t\t</ul>\n\t\t\t</div>\n\t\t\t<div class=\"slideoutMenu__address\">\n\t\t\t\t<i class=\"icon-address\"></i>\n\t\t\t\t<address>\n\t\t\t\t\t<span>Казахстан, г. Алматы (главный офис)</span>\n\t\t\t\t\tПроспект Сейфуллина 500, офис 47\n\t\t\t\t</address>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n\t<div id=\"program\" class=\"base-container\">\n\t\t<header class=\"masthead\">\n\t\t\t<div class=\"container\">\n\t\t\t\t<div class=\"row mobile-hidden\">\n            <a [routerLink]=\"['/index']\" class=\"link__back\">\n\t\t\t\t\t\t<i class=\"icon\"></i>\n\t\t\t\t\t</a>\n\t\t\t\t\t<ul class=\"caterories__list\">\n\t\t\t\t\t\t<li class=\"caterories__item\">\n\t\t\t\t\t\t\t<a [routerLink]=\"['/program']\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\tПрограммы<br/> для школьников\n\t\t\t\t\t\t\t</a>  \n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li class=\"caterories__item current-link\">\n\t\t\t\t\t\t\t<a [routerLink]=\"['/program']\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\tПрограммы<br/> для студентов и не только\n\t\t\t\t\t\t\t</a>  \n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li class=\"caterories__item\">\n\t\t\t\t\t\t\t<a [routerLink]=\"['/program']\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\tДрузья и попутчики         \n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li class=\"caterories__item\">\n\t\t\t\t\t\t\t<a [routerLink]=\"['/program']\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\tПерейти на форум\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<div class=\"mobile-navbar mobile-visible clearfix\">\n\t\t\t\t<div class=\"container text-center\">\n\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t<div class=\"col-xs-3\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__actions\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"pull-left toggleMenu\">Menu</button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"col-xs-6\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__title\">\n\t\t\t\t\t\t\t\tПартнеры и друзья\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"col-xs-3\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__actions text-right\">\n\t\t\t\t\t\t\t\t<div class=\"mobile-navbar__search\">\n\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"\" class=\"toggleSearch\" name=\"\"><i class=\"icon\"></i></button>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\t\t\t\n\n\t\t\t\t<div class=\"container\">\n\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t<div class=\"mobile-navbar-search__form\">\n\t\t\t\t\t\t\n\t\t\t\t\t\t\t<form action=\"\" class=\"clearfix\">\n\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" id=\"\" placeholder=\"Что, будем искать?\" class=\"field-input\">\n\t\t\t\t\t\t\t\t\t<button type=\"button\" name=\"\" id=\"\" class=\"button-submit\"></button>\n\t\t\t\t\t\t\t\t\t<button type=\"button\" name=\"\" id=\"\" class=\"toggleSearch button-collapsed\"></button>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</form>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</header>\t\n\t\t<section class=\"section program-selection\" style=\"background-image: url('images/background07.jpg')\">\n\t\t<div class=\"container-alignment\">\t\n\t\t\t<div class=\"alignment\">\n\t\t\t\t<div class=\"centered\">\n\t\t\t\t<div class=\"container\">\n\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2 col-xs-2 container-caption-program mobile-hidden\">\n\t\t\t\t\t\t\t<div class=\"program__caption\">\n\t\t\t\t\t\t\t\t<div class=\"rotate\">\n\t\t\t\t\t\t\t\t\t<div class=\"text\">\n\t\t\t\t\t\t\t\t\t\t<h3>Программы</h3>\n\t\t\t\t\t\t\t\t\t\t<p>стажировок</p>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"brand-logo\">\n\t\t\t\t\t\t\t\t\t<img src=\"images/brand-logo_kcet.png\" alt=\"\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\t\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"col-lg-10 col-md-10 col-xs-12 container-list-programs\">\n\t\t\t\t\t\t\t<div class=\"content-container program__content\">\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t<div class=\"program__list clearfix\" id=\"scroll\">\n\t\t\t\t\t\t\t\t\t<div class=\"program__small program__item\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"border-top border-width-sm border-color-pink\"></div>\t\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t02\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n                      <div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t...........................</p>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-pink\"></div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/program-image03.jpg\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"program__large program__item\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"border-top border-width-lg border-color-pink\"></div>\t\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t11\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"group\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mark-program\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tГорящий тур\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text border-color_pink\">\t\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы.......................................................\n\t\t\t\t\t\t\t\t\t\t\t\t..............................................................\n\t\t\t\t\t\t\t\t\t\t\t\t...............................................</p>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/program-image04.jpg\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"program__small program__item\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"border-top border-width-lg border-color-white\"></div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t11\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t.....................................</p>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-white\"></div>\t\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"program__item program__small\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"border-top border-width-sm border-color-white\"></div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t12\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t......................................</p>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-white\"></div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"program__item program__small\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t13\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t.....................................</p>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-white\"></div>\t\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"program__item program__small\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t14\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t.....................................</p>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-white\"></div>\t\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t                  <div class=\"detail__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/program-image01.jpg\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div> \n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"program__item program__small no-margin-bottom\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t15\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t.....................................</p>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-white\"></div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"program__item program__small no-margin-bottom\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t15\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t.....................................</p>\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-white\"></div>\t\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\t\t\t\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t\t</section>\n\t</div>\n<!--модалка-->\n\t<div id=\"bonusesModal\">\n\t\t<div class=\"scrollableContent\">\n\t\t\t<div class=\"mobile-navbar mobile-navbar-light mobile-visible clearfix\">\n\t\t\t\t<div class=\"container text-center\">\n\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t<div class=\"col-xs-3\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__actions text-left\">\n\t\t\t\t\t\t\t\t<a href=\"index.html\">Назад</a>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"col-xs-6\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__title\">\n\t\t\t\t\t\t\t\tБонусы от партнеров\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"col-xs-3\">\n\t\t\t\t\t\t\t<div class=\"close close-bonusesModal\"> \n\t\t\t\t\t\t\t \t<button type=\"button\" class=\"toggle-modal-bonuses\"></button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t<div class=\"container-alignment\">\n\t\t\t<div class=\"alignment\">\t\n\t\t\t\t<div class=\"centered\">\n\t\t\t\t\t<div class=\"container\">\n\t\t\t\t\t\t<div class=\"container mobile-hidden\">\n\t\t\t\t\t\t\t<div class=\"close close-bonusesModal\"> \n\t\t\t\t\t\t\t \t<button type=\"button\" class=\"toggle-modal-bonuses\"></button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"modal-content\">\n\t\t\t\t\t\t\t<div class=\"bonuses-mobile mobile-visible\">\n\t\t\t\t\t\t\t\t<div class=\"partners-cover\">\t\n\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\t\n\t\t\t\t\t\t\t\t</div>\t\n\t\t\t\t\t\t\t\t<div class=\"partners-links\">\t\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"partner-brands\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\t\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"partners-ad-here\">\n\t\t\t\t\t\t\t\t\t<p>Здесь может быть и ваша реклама! </p>\n\t\t\t\t\t\t\t\t\t<a id=\"contact-manager03\" href=\"#managerModal\" class=\"toggle-modal-manager\">Связаться с менеджером по рекламе</a>\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"partners-links\">\t\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"partners-banner\">\t\n\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"partner-brands\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\t\t\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"bonuses mobile-hidden\">\n\t\t\t\t\t\t\t\t<div class=\"bonuses__headline clearfix\">\n\t\t\t\t\t\t\t\t\t<div class=\"headline__offset_right\">\n\t\t\t\t\t\t\t\t\t\t<h4>Здесь может быть и ваша реклама!</h4>\n\t\t\t\t\t\t\t\t\t\t<a id=\"contact-manager\" href=\"#managerModal\" class=\"toggle-modal-manager\">Связаться с менеджером по рекламе</a>\n\t\t\t\t\t\t\t\t\t</div>\t\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"bonuses__content_scroll mobile-hidden\" id=\"scroll__horizontal\">\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t<div class=\"bonuses__content\">\n\t\t\t\t\t\t\t\t\t<div class=\"bonuses__card\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-4\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-3\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"bonuses__link\">\n\t\t\t\t\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"link__item\"><a href=\"#\">НЕобходимая дополнительная информация</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"link__item\"><a href=\"#\">НЕобходимая дополнительная информация</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"link__item\"><a href=\"#\">НЕобходимая дополнительная информация</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"link__item\"><a href=\"#\">НЕобходимая дополнительная информация</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"link__item\"><a href=\"#\">НЕобходимая дополнительная информация</a></li>\n\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"row col-lg-12-col-md-12 mobile-visible container-carousel-mobile\" style=\"margin: 20px 0\">\n\t\t\t\t\t\t\t\t\t\t<ul class=\"carousel\">\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel01.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel02.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel02.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel03.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel03.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel01.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel02.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel02.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel03.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel03.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"bonuses__link bonuses__link-manager\">\n\t\t\t\t\t\t\t\t\t\t<a id=\"contact-manager02\" href=\"#managerModal\" class=\"toggle-modal-manager\">Связаться с менеджером по рекламе</a>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"bonuses__button\">\n\t\t\t\t\t\t\t\t\t\t<a id=\"bonuses\" class=\"toggle-modal-bonuses close-bonusesModal\" href=\"#\">бонусы от партнеров</a>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t\t</div>\t\n\t</div>\n\t\n"

/***/ }),

/***/ 806:
/***/ (function(module, exports) {

module.exports = "<div id=\"program\" class=\"base-container\">\n\n\t\t<!-- __masthead -->\n\t\t<header class=\"masthead\">\n\t\t\t<div class=\"container\">\n\t\t\t\t<div class=\"row mobile-hidden\">\n\t\t\t\t\t<a [routerLink]=\"['/index']\" class=\"link__back\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t<i class=\"icon\"></i>\n\t\t\t\t\t</a>\n\t\t\t\t\t\n\t\t\t\t\t<ul class=\"caterories__list\">\n\t\t\t\t\t\t<li class=\"caterories__item current-link\">\n\t\t\t\t\t\t\t<a [routerLink]=\"['/programschoolchildren']\">\n\t\t\t\t\t\t\t\tПрограммы<br/> для школьников\n\t\t\t\t\t\t\t</a>  \n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li class=\"caterories__item\">\n\t\t\t\t\t\t\t<a [routerLink]=\"['/articles']\">\n\t\t\t\t\t\t\t\tПрограммы<br/> для студентов и не только\n\t\t\t\t\t\t\t</a>  \n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li class=\"caterories__item\">\n\t\t\t\t\t\t\t<a [routerLink]=\"['/articles']\">\n\t\t\t\t\t\t\t\tДрузья и попутчики         \n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li class=\"caterories__item\">\n\t\t\t\t\t\t\t<a [routerLink]=\"['/articles']\">\n\t\t\t\t\t\t\t\tПерейти на форум\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<!-- __mobile -->\n\t\t\t<div class=\"mobile-navbar mobile-visible clearfix\">\n\t\t\t\t<div class=\"container text-center\">\n\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t<div class=\"col-xs-3\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__actions\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"pull-left toggleMenu\">Menu</button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"col-xs-6\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__title\">\n\t\t\t\t\t\t\t\tПартнеры и друзья\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"col-xs-3\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__actions text-right\">\n\t\t\t\t\t\t\t\t<div class=\"mobile-navbar__search\">\n\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"\" class=\"toggleSearch\" name=\"\"><i class=\"icon\"></i></button>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t\n\n\t\t\t\t<div class=\"container\">\n\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t<div class=\"mobile-navbar-search__form\">\n\t\t\t\t\t\t\n\t\t\t\t\t\t\t<form action=\"\" class=\"clearfix\">\n\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">\n\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" id=\"\" placeholder=\"Что, будем искать?\" class=\"field-input\">\n\t\t\t\t\t\t\t\t\t<button type=\"button\" name=\"\" id=\"\" class=\"button-submit\"></button>\n\t\t\t\t\t\t\t\t\t<button type=\"button\" name=\"\" id=\"\" class=\"toggleSearch button-collapsed\"></button>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</form>\n<!-- collapsedSearch -->\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\n\t\t\t</div><!-- /.__mobile -->\n\t\t</header><!-- /.__masthead -->\n\t\t\n\t\t<!-- __program-selection -->\n\t\t<section class=\"section program-selection\" style=\"background-image: url('images/background08.jpg')\">\n\n\t\t<!-- __container-alignment -->\n\t\t<div class=\"container-alignment\">\n\t\t\t\n\t\t\t<div class=\"alignment\">\n\t\t\t\t\n\t\t\t\t<div class=\"centered\">\n\n\t\t\t\t<div class=\"container\">\n\t\t\t\t\n\t\t\t\t\t<!-- __row -->\n\t\t\t\t\t<div class=\"row\">\n\n\t\t\t\t\t\t<!-- __caption -->\n\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2 col-xs-2 container-caption-program mobile-hidden\">\n\n\n\t\t\t\t\t\t\t<div class=\"program__caption\">\n\t\t\t\t\t\t\t\t<!-- __rotate -->\n\t\t\t\t\t\t\t\t<div class=\"rotate\">\n\t\t\t\t\t\t\t\t\t<div class=\"text\">\n\t\t\t\t\t\t\t\t\t\t<h3>Программы</h3>\n\t\t\t\t\t\t\t\t\t\t<p>для школьников</p>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div><!-- /.__rotate -->\n\n\t\t\t\t\t\t\t\t<!-- __brand-logo -->\n\t\t\t\t\t\t\t\t<div class=\"brand-logo brand-logo-schoolchildren\">\n\t\t\t\t\t\t\t\t\t<img src=\"images/program-schoolchildren.png\" alt=\"\">\n\t\t\t\t\t\t\t\t</div><!-- /.__brand-logo -->\n\t\t\t\t\t\t\t</div>\t\n\n\n\t\t\t\t\t\t</div><!-- __caption -->\n\n\t\t\t\t\t\t<!-- __col -->\n\t\t\t\t\t\t<div class=\"col-lg-10 col-md-10 col-xs-12 container-list-programs\">\n\t\t\t\t\t\t\t<div class=\"content-container program__content\">\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"row\">\n\n\t\t\t\t\t\t\t\t<!-- __list -->\n\t\t\t\t\t\t\t\t<div class=\"program__list clearfix\" id=\"scroll\">\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t<!-- __item -->\n\t\t\t\t\t\t\t\t\t<div class=\"program__small program__item\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"border-top border-width-sm border-color-pink\"></div>\t\n\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t<!-- __date -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- day -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t02\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__day -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- month-year -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__month-year -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__date -->\n\n\t\t\t\t\t\t\t\t\t\t<!-- __detail -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __text -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t..........................................</p>\n\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __link -->\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a><!-- /.__link -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-pink\"></div>\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__text -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __image -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/program-image03.jpg\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__image -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__detail -->\n\n\t\t\t\t\t\t\t\t\t</div><!-- /.__item -->\n\n\t\t\t\t\t\t\t\t\t<!-- __item -->\n\t\t\t\t\t\t\t\t\t<div class=\"program__large program__item\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"border-top border-width-lg border-color-pink\"></div>\t\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t<!-- __date -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- day -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t11\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__day -->\n\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"group\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __mark-program -->\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mark-program\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tГорящий тур\n\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__mark-program -->\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- month-year -->\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__month-year -->\n\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__date -->\n\n\t\t\t\t\t\t\t\t\t\t<!-- __detail -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __text -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text border-color_pink\">\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы.......................................................\n\t\t\t\t\t\t\t\t\t\t\t\t..............................................................\n\t\t\t\t\t\t\t\t\t\t\t\t.................................................\n\t\t\t\t\t\t\t\t\t\t\t\t.............</p>\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __link -->\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a><!-- /.__link -->\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__text -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __image -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/program-image04.jpg\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__image -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__detail -->\n\n\n\t\t\t\t\t\t\t\t\t</div><!-- /.__item -->\n\n\t\t\t\t\t\t\t\t\t<!-- __item -->\n\t\t\t\t\t\t\t\t\t<div class=\"program__small program__item\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"border-top border-width-lg border-color-white\"></div>\n\t\t\t\t\t\t\t\t\t\t<!-- __date -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- day -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t11\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__day -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- month-year -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__month-year -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__date -->\n\n\t\t\t\t\t\t\t\t\t\t<!-- __detail -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __text -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t..........................................</p>\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __link -->\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a><!-- /.__link -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-white\"></div>\t\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__text -->\n\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__detail -->\n\n\t\t\t\t\t\t\t\t\t</div><!-- /.__item -->\n\n\t\t\t\t\t\t\t\t\t<!-- __item -->\n\t\t\t\t\t\t\t\t\t<div class=\"program__item program__small\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"border-top border-width-sm border-color-white\"></div>\n\t\t\t\t\t\t\t\t\t\t<!-- __date -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- day -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t12\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__day -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- month-year -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__month-year -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__date -->\n\n\t\t\t\t\t\t\t\t\t\t<!-- __detail -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __text -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t..........................................</p>\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __link -->\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a><!-- /.__link -->\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-white\"></div>\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__text -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__detail -->\n\n\t\t\t\t\t\t\t\t\t</div><!-- /.__item -->\n\n\t\t\t\t\t\t\t\t\t<!-- __item -->\n\t\t\t\t\t\t\t\t\t<div class=\"program__item program__small\">\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t<!-- __date -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- day -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t13\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__day -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- month-year -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__month-year -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__date -->\n\n\t\t\t\t\t\t\t\t\t\t<!-- __detail -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __text -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t..........................................</p>\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __link -->\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a><!-- /.__link -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-white\"></div>\t\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__text -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__detail -->\n\n\t\t\t\t\t\t\t\t\t</div><!-- /.__item -->\n\n\t\t\t\t\t\t\t\t\t<!-- __item -->\n\t\t\t\t\t\t\t\t\t<div class=\"program__item program__small\">\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t<!-- __date -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- day -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t14\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__day -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- month-year -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__month-year -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__date -->\n\n\t\t\t\t\t\t\t\t\t\t<!-- __detail -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __text -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t..........................................</p>\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __link -->\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a><!-- /.__link -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-white\"></div>\t\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__text -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __image -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/program-image01.jpg\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /.__image -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__detail -->\n\n\t\t\t\t\t\t\t\t\t</div><!-- /.__item -->\n\n\t\t\t\t\t\t\t\t\t<!-- __item -->\n\t\t\t\t\t\t\t\t\t<div class=\"program__item program__small no-margin-bottom\">\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t<!-- __date -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- day -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t15\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__day -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- month-year -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__month-year -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__date -->\n\n\t\t\t\t\t\t\t\t\t\t<!-- __detail -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __text -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t..........................................</p>\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __link -->\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a><!-- /.__link -->\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-white\"></div>\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__text -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__detail -->\n\n\t\t\t\t\t\t\t\t\t</div><!-- /.__item -->\n\n\t\t\t\t\t\t\t\t\t<!-- __item -->\n\t\t\t\t\t\t\t\t\t<div class=\"program__item program__small no-margin-bottom\">\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t<!-- __date -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__date clearfix\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- day -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__day\">\n\t\t\t\t\t\t\t\t\t\t\t\t15\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__day -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- month-year -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"date__month-year\">\n\t\t\t\t\t\t\t\t\t\t\t\tНоябрь, 2016\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__month-year -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__date -->\n\n\t\t\t\t\t\t\t\t\t\t<!-- __detail -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"program__detail\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __title -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<h3>Work&amp;travelUSA</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__title -->\n\n\t\t\t\t\t\t\t\t\t\t\t<!-- __text -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<p>описание программы......................\n\t\t\t\t\t\t\t\t\t\t\t\t..........................................</p>\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- __link -->\n\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"program-overview.html\" class=\"detail__link\" onclick=\"window.location.href = this.href\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tподробнее\n\t\t\t\t\t\t\t\t\t\t\t\t</a><!-- /.__link -->\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-width-lg border-color-white\"></div>\t\n\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.__text -->\n\n\t\t\t\t\t\t\t\t\t\t</div><!-- /.__detail -->\n\n\t\t\t\t\t\t\t\t\t</div><!-- /.__item -->\n\t\t\t\t\t\t\t\t\n\n\t\t\t\t\t\t\t\t</div><!-- /.__list -->\n\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div><!-- /.__col -->\n\n\t\t\t\t\t</div><!-- /.__row -->\n\n\t\t\t\t</div>\n\t\t\t\t\n\t\t\t\t</div>\n\n\t\t\t</div>\n\n\t\t</div><!-- /.__container-alignment -->\t\t\n\n\t\t</section><!-- /.__program-selection -->\n\n\t</div>\n\n<div id=\"slideoutMenu\" class=\"slideoutMenu mobile-visible\">\n\t<!-- __cover -->\n\t<div class=\"slideoutMenu__cover\">\n\t\t<div class=\"mobile-navbar mobile-visible clearfix\">\n\t\t\t<h3>Kazakhstan Counсil <span>for Educational Travel</span></h3>\n\t\t\t<button type=\"button\" class=\"toggleMenu\">Collapse</button>\n\t\t</div>\n\t\t<div class=\"slideoutMenu__action\">\n\t\t\t<ul>\n\t\t\t\t<li><button type=\"button\"><i class=\"icon icon-phone\">1</i></button></li>\n\t\t\t\t<li><button type=\"button\"><i class=\"icon icon-user\">2</i></button></li>\n\t\t\t\t<li><button type=\"button\"><i class=\"icon icon-mail\">3</i></button></li>\n\t\t\t</ul>\n\t\t</div>\n\t</div><!-- /.__cover -->\n\n\t<div class=\"slideoutMenu__content\">\n\n\t\t<!-- __nav -->\n\t\t<nav class=\"slideoutMenu__nav\" id=\"scroll03\">\n\t\t\t<ul>\n\t\t\t\t<li>\n\t\t\t\t\t<a href=\"about-us.html\">О компании <i class=\"icon\"></i></a>\n\t\t\t\t</li>\n\t\t\t\t<li>\n\t\t\t\t\t<a href=\"project.html\">Прокты КСЕТ <i class=\"icon\"></i></a>\n\t\t\t\t</li>\n\t\t\t\t<li>\n\t\t\t\t\t<a href=\"\">Друзья и попутчики <i class=\"icon\"></i></a>\n\t\t\t\t</li>\n\t\t\t\t<li>\n\t\t\t\t\t<a href=\"\">Форум <i class=\"icon\"></i></a>\n\t\t\t\t</li>\n\t\t\t\t<li>\n\t\t\t\t\t<a href=\"partners.html\">Партнеры и друзья <i class=\"icon\"></i></a>\n\t\t\t\t</li>\n\t\t\t\t<li>\n\t\t\t\t\t<a id=\"bonuses01\" class=\"toggle-modal-bonuses\" href=\"#bonusesModal\">Бонусы от партнеров <i class=\"icon\"></i></a>\n\t\t\t\t</li>\n\t\t\t\t<li>\n\t\t\t\t\t<a href=\"offers.html\">Горячие предложения <i class=\"icon\"></i></a>\n\t\t\t\t</li>\n\t\t\t</ul>\n\t\t</nav><!-- /.__nav -->\n\n\t</div>\n</div>\n<script>\n\t$(document).ready(function(){\n\t$('#scroll').perfectScrollbar({\n\t\tsuppressScrollX: true\n\t});\n})\n</script>\n<script type=\"text/javascript\">\n$(document).ready(function(){\n\t$(\".toggleMenu\").on(\"click\", function(e){\n\t\t$(\".slideoutMenu\").toggleClass(\"collapseMenu\");\n\t});\n});\n</script>\n\t<!-- __modal-bonuses -->\n\t<div id=\"bonusesModal\">\n\n\t\t<div class=\"scrollableContent\">\n\t<!-- __mobile -->\n\t\t\t<div class=\"mobile-navbar mobile-navbar-light mobile-visible clearfix\">\n\t\t\t\t<div class=\"container text-center\">\n\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t<div class=\"col-xs-3\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__actions text-left\">\n\t\t\t\t\t\t\t\t<a href=\"index.html\">Назад</a>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"col-xs-6\">\n\t\t\t\t\t\t\t<div class=\"mobile-navbar__title\">\n\t\t\t\t\t\t\t\tБонусы от партнеров\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"col-xs-3\">\n\t\t\t\t\t\t\t<div class=\"close close-bonusesModal\"> \n\t\t\t\t\t\t\t \t<button type=\"button\" class=\"toggle-modal-bonuses\"></button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t\n\n\t\t\t</div><!-- /.__mobile -->\t\n\n\t<!-- __container-alignment -->\n\t\t<div class=\"container-alignment\">\n\t\t\t\n\t\t\t<div class=\"alignment\">\n\t\t\t\t\n\t\t\t\t<div class=\"centered\">\n\n\t\t\t\t\t<div class=\"container\">\n\n\n\t\t\t\t\t\t<div class=\"container mobile-hidden\">\n\t\t\t\t\t\t\t<div class=\"close close-bonusesModal\"> \n\t\t\t\t\t\t\t \t<button type=\"button\" class=\"toggle-modal-bonuses\"></button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t<!-- __modal-content -->\n\t\t\t\t\t\t<div class=\"modal-content\">\n\t\t\t\t\t\t\t<div class=\"bonuses-mobile mobile-visible\">\n\n\t\t\t\t\t\t\t\t<div class=\"partners-cover\">\t\n\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\t\n\t\t\t\t\t\t\t\t</div>\t\n\t\t\t\t\t\t\t\t\n\n\t\t\t\t\t\t\t\t<div class=\"partners-links\">\t\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"partner-brands\">\n<!-- \t\t\t\t\t\t\t\t<div class=\"container\">\t\n\t\t\t\t\t\t\t\t\t<div class=\"row\"> -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<!-- \t</div>\n\t\t\t\t\t\t\t\t</div>\t -->\t\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"partners-ad-here\">\n\t\t\t\t\t\t\t\t\t<p>Здесь может быть и ваша реклама! </p>\n\t\t\t\t\t\t\t\t\t<a id=\"contact-manager03\" href=\"#managerModal\" class=\"toggle-modal-manager\">Связаться с менеджером по рекламе</a>\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"partners-links\">\t\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\n\t\t\t\t\t\t\t\t\t<a href=\"\">Необходимая дополнительная информация</a>\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"partners-banner\">\t\n\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"partner-brands\">\n<!-- \t\t\t\t\t\t\t\t<div class=\"container\">\t\t\n\t\t\t\t\t\t\t\t\t<div class=\"row\"> -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand col-xs-6\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"partner-brand-img\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/350x150\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n<!-- \t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div> -->\t\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t</div>\t\n\t\t\t\t\t\t\t\t\n\n\t\t\t\t\t\t\t<div class=\"bonuses mobile-hidden\">\n\n\t\t\t\t\t\t\t\t<!-- __headline -->\n\t\t\t\t\t\t\t\t<div class=\"bonuses__headline clearfix\">\n\t\t\t\t\t\t\t\t\t<div class=\"headline__offset_right\">\n\t\t\t\t\t\t\t\t\t\t<h4>Здесь может быть и ваша реклама!</h4>\n\t\t\t\t\t\t\t\t\t\t<a id=\"contact-manager\" href=\"#managerModal\" class=\"toggle-modal-manager\">Связаться с менеджером по рекламе</a>\n\t\t\t\t\t\t\t\t\t</div>\t\n\t\t\t\t\t\t\t\t</div><!-- __headline -->\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<!-- __content_scroll -->\n\t\t\t\t\t\t\t\t<div class=\"bonuses__content_scroll mobile-hidden\" id=\"scroll__horizontal\">\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t<div class=\"bonuses__content\">\n\n\t\t\t\t\t\t\t\t\t<!-- __content -->\n\t\t\t\t\t\t\t\t\t<div class=\"bonuses__card\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-4\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-3\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"card col-md-2\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"card__image\">\n\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\">\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div><!-- __content -->\n\n\t\t\t\t\t\t\t\t\t<!-- __link -->\n\t\t\t\t\t\t\t\t\t<div class=\"bonuses__link\">\n\t\t\t\t\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"link__item\"><a href=\"#\">НЕобходимая дополнительная информация</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"link__item\"><a href=\"#\">НЕобходимая дополнительная информация</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"link__item\"><a href=\"#\">НЕобходимая дополнительная информация</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"link__item\"><a href=\"#\">НЕобходимая дополнительная информация</a></li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"link__item\"><a href=\"#\">НЕобходимая дополнительная информация</a></li>\n\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t</div><!--/. __link -->\n\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t</div><!-- /.__content_scroll -->\n\n\t\t\t\t\t\t\t\t\t<div class=\"row col-lg-12-col-md-12 mobile-visible container-carousel-mobile\" style=\"margin: 20px 0\">\n\t\t\t\t\t\t\t\t\t\t<!-- __carousel -->\n\t\t\t\t\t\t\t\t\t\t<ul class=\"carousel\">\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel01.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel02.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel02.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel03.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel03.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel01.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel01.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel02.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel02.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t<li class=\"carousel__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"images/carousel03.jpg\" title=\"Colorful Feldberg II (STEFFEN EGLY)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/carousel03.jpg\" alt=\"CarouselItem\">\n\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t</ul><!-- /.__carousel -->\n\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t<div class=\"bonuses__link bonuses__link-manager\">\n\t\t\t\t\t\t\t\t\t\t<a id=\"contact-manager02\" href=\"#managerModal\" class=\"toggle-modal-manager\">Связаться с менеджером по рекламе</a>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<!-- __bonuses -->\n\t\t\t\t\t\t\t\t\t<div class=\"bonuses__button\">\n\t\t\t\t\t\t\t\t\t\t<a id=\"bonuses\" class=\"toggle-modal-bonuses close-bonusesModal\" href=\"#\">бонусы от партнеров</a>\n\t\t\t\t\t\t\t\t\t</div><!-- /. __bonuses -->\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div><!-- /.__modal-content -->\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\n\t\t\t</div>\n\n\t\t</div><!-- /.__container-alignment -->\n\t\t</div>\t\n\t</div><!-- /. __modal-bonuses -->\n\n"

/***/ }),

/***/ 839:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(399);


/***/ })

},[839]);
//# sourceMappingURL=main.bundle.map