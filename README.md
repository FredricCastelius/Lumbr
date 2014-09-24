Lumber
=============

Lumber is a well executed combination of the best front-end frameworks out there. Including great typography, next-gen gridsystem with a elastic with a fluid thinking plus a neat code structure its forms a very powerful bootstrap for your next webproduction. All in search for the holy grail.

Goals to achieve with Lumber:

* Be able to create any layout
* Totally retina and any device optimized
* SVG with png fallback
* Super low code to text ratio
* Good semantics
* Be able to handle any situations in WP-content
* Good to print


How to use
-------

For a head start on your next project we've located all key components for you in the settings.scss file. This is how it looks:

    // base type
    $font-weight: normal;
    $line-height: 1.65;
    $font-size: 112.5; // percentage value (16 * 112.5% = 18px)
    $font-base: 16 * ($font-size/100); // converts our percentage to a pixel value
    $type-scale-unit-value: rem; // typeScale unit

    // paragraphs
    $paragraph-vertical-whitespace: true; // vertical space after paragragh
    $paragraph-spacing: fnGetSpacing(100); // paragraph spacing and indent value

    // heading system
    $headings-hierarchy: true;
    $headings-in-two-sizes: false; 
    $headings-same-size: false;

    // special headings
    $tera: 117; // 117 = 18 × 6.5
    $giga: 90; // 90 = 18 × 5
    $mega: 72; // 72 = 18 × 4
    $alpha: 60; // 60 = 18 × 3.3333
    $beta: 48; // 48 = 18 × 2.6667
    $gamma: 36; // 36 = 18 × 2
    $delta: 24; // 24 = 18 × 1.3333
    $epsilon: 21; // 21 = 18 × 1.1667
    $zeta: 18; // 18 = 18 × 1

    // icon font
    $icon-fonts: null; // ex.1) $icon-fonts: (icon-name); ex.2) $icon-fonts: (icon-name1, icon-name2, icon-name3);

    // desktops
    $desktopWidth: 1200px; // when desktops starts
    $desktopLayoutBase: 150%; 

    // laptops
    $laptopWidth: 960px; // when laptops starts
    $laptopFontBaseSize: 130%;

    // tablets
    $tabletWidth: 768px ; // when tablet starts
    $tabletFontBaseSize: 100%;

    // phones
    $phoneWidth: $tabletWidth - 1px; // when phone ends
    $phoneFontBaseSize:  100%;

    // layout max point
    $layoutMaxPoint: 1280px; 

    // fonts
    $headingsFont: Sans; // Headings font | same as base font as default
    $baseFont: sans-serif; // base font 
    $headingsFontSpacing: fnGetSpacing(-4); // headings font spacing | same as base font as default
    $baseFontSpacing: fnGetSpacing(0); // base font letter spacing 
    $headingsFontWeight: bold; // headings font weight | same as base font as default
    $baseFontWeight: 300; // base font weight
    $baseFontColor: #000; // all regular text color 
    $headingsFontColor: $baseFontColor; // headings font weight | same as base font as default

    // links 
    $linkColor: $baseFontColor; // all regular links color | default: $baseFontColor
    $linkBorderColor: rgba(0, 0, 0, 0.05); // link border color | default: rgba(0, 0, 0, 0.05) | suggestion: $baseFontColor, $bodyBackground

    // links when hover
    $linkHoverColor: $baseFontColor; // link text color when hover | default: $baseFontColor
    $linkHoverBorderPosition: fnGetSpacing(12); // position of the border | default: fnGetSpacing(10)
    $linkHoverBorderSize: fnGetSpacing(5); // size of border | suggestion value: dashed
    $linkHoverBorderColor: $baseFontColor; // border color | default: $baseFontColor
    $linkHoverBorderStyle: solid; // border style

    // links when active
    $linkActiveColor: $baseFontColor; // color when clicking on link | default: $baseFontColor 

    // inputs
    $inputBorderSize: fnGetSpacing(5); // size of border | suggestion value: dashed
    $inputBorderColor: #ccc; // border color | default: #ccc
    $inputBorderStyle: solid; // border style
    $inputBorderRadius: 2px; // border radius
    $inputFocusBorderColor: $inputBorderColor; // border when focusing on input field | default: $inputBorderColor

    // buttons
    $buttonBorderSize: fnGetSpacing(5); // size of border | suggestion value: dashed
    $buttonBackground: transparent;
    $buttonBorderColor: #999; // border color | default: #ccc
    $buttonBorderStyle: solid; // border style
    $buttonBorderRadius: 4px; // border radius
    $buttonFocusBorderColor: $buttonBorderColor; // border when focusing on input field | default: $inputBorderColor

    // buttons when hover
    $buttonHoverColor: #fff;
    $buttonHoverBackground: #000;
    $buttonHoverBorderSize: fnGetSpacing(5);
    $buttonHoverBorderStyle: solid;
    $buttonHoverBorderColor: #111;

    // buttons when active
    $buttonActiveBackground: #555;

    // tables
    $tableBorderColor: #eee;
    $tableBorderStyle: solid;
    $tableBorderSize: fnGetSpacing(5);

    // animation speed
    $animationDuration: 500ms; // animation speed | when page loads animations

    // hover speed
    $hoverTransitionSpeed: 500ms; // transistion speed | when hover over something animations


### Breakpoints

breakpoint(desktop) triggers desktop layout and above
breakpoint(laptop) triggers laptop layout only
breakpoint(tablet) triggers tablet only
breakpoint(phone) triggers phone only

    @include breakpoint(desktop) { 
        
    } 
    @include breakpoint(laptop) { 
        
    } 
    @include breakpoint(tablet) { 
        
    } 
    @include breakpoint(phone) { 
        
    } 

breakpoint(laptopUp) triggers laptop layout and above
breakpoint(laptopDown) triggers laptop layout and below
breakpoint(tabletUp) triggers tablet and above

    @include breakpoint(laptopUp) { 
        
    } 
    @include breakpoint(laptopDown) { 
        
    } 
    @include breakpoint(tabletUp) { 
        
    } 

breakpoint(tabletDesktop) triggers tablet to desktop

    @include breakpoint(tabletDesktop) { 
        
    } 


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