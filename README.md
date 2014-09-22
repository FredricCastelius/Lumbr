Liquid
=============

Liquid is a well ececuted combination of the best front-end frameworks out there. Including great typography, next-gen gridsystem with a elastic with a fluid thinking plus a neat code structure its forms a very powerful bootstrap for your next webproduction. All in search for the holy grail.

Goals to achieve with liquid:

* Be able to create any layout
* Totally retina and any device optimized
* SVG with png fallback
* Super low code to text ratio
* Good semantics
* Be able to handle any situations in WP-content
* Good to print


Mixins
-------

### Responsive breakpoints

    @include breakpoint(laptop-and-under) { }
    @include breakpoint(tablet-and-under) { }
    @include breakpoint(phone-and-under) { }

    @include breakpoint(phone-to-tablet) { }
    @include breakpoint(tablet-to-laptop) { }
    @include breakpoint(laptop-to-desktop) { }

    @include breakpoint(phone-and-up) { }
    @include breakpoint(tablet-and-up) { }
    @include breakpoint(laptop-and-up) { }
    @include breakpoint(desktop-and-up) { }

### Retina images

This example states that we have a 100px x 25px img. Change the 100px to your img width and 25px to your img height.

    background: url("img.png") no-repeat;
    @include image-2x("img2x.png", widthpx, heightpx);

### Clearfix

    @include clearfix();

### Clearstyle

Enough is enough: this clears all pre padding, margin, line-heights and font-sizes.

    @include clearstyle();

### Center 

    @include center-block;

### text-truncate

End text when block stops.

    @include text-truncate;

### Absolute posistion

    @include abs-pos(10px, 10px, 5px, 15px);

### Hypens

    @include hyphens("auto");

### Opacity

Transparent to 80 percent.

    @include opacity(0.8);

### Rounded coners

    @include roundedCorners(100%);

### Animations

    @mixin animate();

    Fade Ins
    @mixin fadeIn();
    @mixin fadeInUp();
    @mixin fadeInDown();
    @mixin fadeInLeft();
    @mixin fadeInRight();
    Fade outs
    @mixin fadeOut();
    @mixin fadeOutUp();
    @mixin fadeOutDown();
    @mixin fadeOutLeft();
    @mixin fadeOutRight();

### Example style 

    header[role="banner"] {
        @include flexWrapper();
        @include center();  
        @include clearstyle();

        #logo {
            @include col-6();

            @include breakpoint(tablet-and-down) {
                @include flexWrapper();
                @include center();  
                @include col-12();
            }
        }

        nav[role="navigation"] {
            @include col-6();

            @include breakpoint(tablet-and-down) {
                @include flexWrapper();
                @include center();  
                @include col-12();
            }
            ul {
                li {
                    float: right;
                    display: inline-block;
                    &:before {
                        content: none;
                    }
                }
            }
        }
    }

    section#main {
        @include flexWrapper();

        aside[role="complementary"] { 
            @include col-2();

            @include breakpoint(tablet-and-down) {
                @include col-12();
            }
        }

        article[role="main"] {
            @include col-10();

            @include breakpoint(tablet-and-down) {
                @include col-12();
            }
        }
    }

    footer[role="contentinfo"] { 
        @include flexWrapper;
        @include col-12;
        @include center;
    }