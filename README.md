TABLE OF CONTENTS:

- [Box Model: all-border() <a name="all_border"></a>](#box-model-all-border-)
- [Box Model: all-margin() <a name="all_margin"></a>](#box-model-all-margin-)
- [Box Model: all-padding() <a name="all_padding"></a>](#box-model-all-padding-)
- [Box Model: border-radius() <a name="border_radius"></a>](#box-model-border-radius-)
- [Box Model: box-shadow() <a name="box_shadow"></a>](#box-model-box-shadow-)
- [Box Model: width() and height() <a name="width_height"></a>](#box-model-width-and-height-)
- [Flexbox: flex-center-left() <a name="flex_center_left"></a>](#flexbox-flex-center-left-)
- [Flexbox: flex-center() <a name="flex_center"></a>](#flexbox-flex-center-)
- [Flexbox: flex-center-right() <a name="flex_center_right"></a>](#flexbox-flex-center-right-)

## Box Model: all-border() <a name="all_border"></a>

   The <span style="color:red; font-style:italic; font-weight:bold;">all-border</span> mixin is accepting 4 arguments: <span style="font-style:italic; font-weight:bold;">\$var_border_top_width</span>, <span style="font-style:italic; font-weight:bold;">\$var_border_right_width</span>, <span style="font-style:italic; font-weight:bold;">\$var_border_bottom_width</span> and <span style="font-style:italic; font-weight:bold;">\$var_border_left_width</span>. This mixin will set up the following CSS properties: border-width, border-style: solid and border-color: #000000. Examples of usage:
   
   * Setting up the top border:
      <span style="color:red; font-weight:bold;">
         <pre>all-border(1px, 0px, 0px, 0px);</pre>
      </span>
   * Setting up the right border:
      <span style="color:red; font-weight:bold;">
         <pre>all-border(0px, 1px, 0px, 0px);</pre>
      </span>
   * Setting up the bottom border:
      <span style="color:red; font-weight:bold;">
         <pre>all-border(0px, 0px, 1px, 0px);</pre>
      </span>
   * Setting up the left border:
      <span style="color:red; font-weight:bold;">
         <pre>all-border(0px, 0px, 0px, 1px);</pre>
      </span>
   * Setting up all the borders to the same value:
      <span style="color:red; font-weight:bold;">
         <pre>all-border(1px, 1px, 1px, 1px);</pre>
      </span>
   * Setting up the top and bottom borders:
      <span style="color:red; font-weight:bold;">
         <pre>all-border(1px, 0px, 1px, 0px);</pre>
      </span>
   * Setting up the left and right borders:
      <span style="color:red; font-weight:bold;">
         <pre>all-border(0px, 1px, 0px, 1px);</pre>
      </span>
   * Setting up all the borders to 0:
      <span style="color:red; font-weight:bold;">
         <pre>all-border(0px, 0px, 0px, 0px);</pre>
      </span>
## Box Model: all-margin() <a name="all_margin"></a>

   The <span style="color:red; font-style:italic; font-weight:bold;">all-margin</span> and <span style="color:red; font-style:italic; font-weight:bold;">horizontal-vertical-margin</span> mixin accepts 4 arguments: <span style="font-style:italic; font-weight:bold;">\$var_margin_top</span>, <span style="font-style:italic; font-weight:bold;">\$var_margin_right</span>, <span style="font-style:italic; font-weight:bold;">\$var_margin_bottom</span> and <span style="font-style:italic; font-weight:bold;">\$var_margin_left</span>. These mixins will set up the following CSS properties: margin top, right, bottom or left and will convert the number of pixels to rem unit of measure. Examples of usage:

   * Setting up the top margin:
      <span style="color:red; font-weight:bold;">
         <pre>all-margin(10px, 0px, 0px, 0px);</pre>
      </span>
   * Setting up the right margin:
      <span style="color:red; font-weight:bold;">
         <pre>all-margin(0px, 10px, 0px, 0px);</pre>
      </span>
   * Setting up the bottom margin:
      <span style="color:red; font-weight:bold;">
         <pre>all-margin(0px, 0px, 10px, 0px);</pre>
      </span>
   * Setting up the left margin:
      <span style="color:red; font-weight:bold;">
         <pre>all-margin(0px, 0px, 0px, 10px);</pre>
      </span>
   * Setting up all the margins to 0:
      <span style="color:red; font-weight:bold;">
         <pre>all-margin(0px, 0px, 0px, 0px);</pre>
      </span>
   * Setting up all the margins to the different values but not equal to 0:
      <span style="color:red; font-weight:bold;">
         <pre>all-margin(10px, 20px, 30px, 40px);</pre>
      </span>
   * Setting up all the margins to the same value:
      <span style="color:red; font-weight:bold;">
         <pre>all-margin(10px, 10px, 10px, 10px);</pre>
      </span>
   * Setting up the horizontal and vertical margins to different values but not equal to 0:
      <span style="color:red; font-weight:bold;">
         <pre>horizontal-vertical-margin(10px, 20px, 10px, 20px);</pre>
      </span>
   * Setting up the left and right margins:
      <span style="color:red; font-weight:bold;">
         <pre>horizontal-vertical-margin(0px, 20px, 0px, 20px);</pre>
      </span>
   * Setting up the top and bottom margins:
      <span style="color:red; font-weight:bold;">
         <pre>horizontal-vertical-margin(10px, 0px, 10px, 0px);</pre>
      </span>
## Box Model: all-padding() <a name="all_padding"></a>

   The <span style="color:red; font-style:italic; font-weight:bold;">all-padding</span> and <span style="color:red; font-style:italic; font-weight:bold;">horizontal-vertical-padding</span> mixin accepts 4 arguments: <span style="font-style:italic; font-weight:bold;">\$var_padding_top</span>, <span style="font-style:italic; font-weight:bold;">\$var_padding_right</span>, <span style="font-style:italic; font-weight:bold;">\$var_padding_bottom</span> and <span style="font-style:italic; font-weight:bold;">\$var_padding_left</span>. These mixins will set up the following CSS properties: padding top, right, bottom or left and will convert the number of pixels to rem unit of measure. Examples of usage:

   * Setting up the top padding:
      <span style="color:red; font-weight:bold;">
         <pre>all-padding(10px, 0px, 0px, 0px);</pre>
      </span>
   * Setting up the right padding:
      <span style="color:red; font-weight:bold;">
         <pre>all-padding(0px, 10px, 0px, 0px);</pre>
      </span>
   * Setting up the bottom padding:
      <span style="color:red; font-weight:bold;">
         <pre>all-padding(0px, 0px, 10px, 0px);</pre>
      </span>
   * Setting up the left padding:
      <span style="color:red; font-weight:bold;">
         <pre>all-padding(0px, 0px, 0px, 10px);</pre>
      </span>
   * Setting up all the paddings to 0:
      <span style="color:red; font-weight:bold;">
         <pre>all-padding(0px, 0px, 0px, 0px);</pre>
      </span>
   * Setting up all the paddings to the different values but not equal to 0:
      <span style="color:red; font-weight:bold;">
         <pre>all-padding(10px, 20px, 30px, 40px);</pre>
      </span>
   * Setting up all the paddings to the same value:
      <span style="color:red; font-weight:bold;">
         <pre>all-padding(10px, 10px, 10px, 10px);</pre>
      </span>
   * Setting up the horizontal and vertical paddings to different values but not equal to 0:
      <span style="color:red; font-weight:bold;">
         <pre>horizontal-vertical-padding(10px, 20px, 10px, 20px);</pre>
      </span>
   * Setting up the left and right paddings:
      <span style="color:red; font-weight:bold;">
         <pre>horizontal-vertical-padding(0px, 20px, 0px, 20px);</pre>
      </span>
   * Setting up the top and bottom paddings:
      <span style="color:red; font-weight:bold;">
         <pre>horizontal-vertical-padding(10px, 0px, 10px, 0px);</pre>
      </span>
## Box Model: border-radius() <a name="border_radius"></a>

   The <span style="color:red; font-style:italic; font-weight:bold;">border-radius</span>, <span style="color:red; font-style:italic; font-weight:bold;">left-border-radius</span> and <span style="color:red; font-style:italic; font-weight:bold;">right-border-radius</span> mixin accepts 2 to 4 arguments: <span style="font-style:italic; font-weight:bold;">\$var_border_top_left_radius</span>, <span style="font-style:italic; font-weight:bold;">\$var_border_top_right_radius</span>, <span style="font-style:italic; font-weight:bold;">\$var_border_bottom_right_radius</span> and <span style="font-style:italic; font-weight:bold;">\$var_border_bottom_left_radius</span>. These mixins will set up the following CSS properties: padding top, right, bottom or left and will convert the number of pixels to rem unit of measure. Examples of usage:

   * Setting up all the corners to be rounded:
      <span style="color:red; font-weight:bold;">
         <pre>border-radius(10px, 10px, 10px, 10px);</pre>
      </span>
   * Setting up all the corners to be square:
      <span style="color:red; font-weight:bold;">
         <pre>border-radius(0px, 0px, 0px, 0px);</pre>
      </span>
   * Setting up the left side to have rounded corners:
      <span style="color:red; font-weight:bold;">
         <pre>left-border-radius(10px, 10px);</pre>
      </span>
   * Setting up the right side to have rounded corners:
      <span style="color:red; font-weight:bold;">
         <pre>right-border-radius(10px, 10px);</pre>
      </span>
## Box Model: box-shadow() <a name="box_shadow"></a>

   The <span style="color:red; font-style:italic; font-weight:bold;">box-shadow</span> mixin accepts 4 arguments: <span style="font-style:italic; font-weight:bold;">\$var_h-offset</span>, <span style="font-style:italic; font-weight:bold;">\$var_v-offset</span>, <span style="font-style:italic; font-weight:bold;">\$var_blur</span> and <span style="font-style:italic; font-weight:bold;">\$var_color</span>. These mixins will set up the following CSS properties: padding top, right, bottom or left and will convert the number of pixels to rem unit of measure. Examples of usage:

   * Setting up all the corners to be rounded:
      <span style="color:red; font-weight:bold;">
         <pre>box-shadow(20px, 20px, 50px, #000000);</pre>
      </span>
## Box Model: width() and height() <a name="width_height"></a>

   The <span style="color:red; font-style:italic; font-weight:bold;">width</span> and <span style="color:red; font-style:italic; font-weight:bold;">height</span> mixin accepts 1 argument: <span style="font-style:italic; font-weight:bold;">\$var_width</span> and <span style="font-style:italic; font-weight:bold;">\$var_height</span>. These mixins will set up the following CSS properties: width or height and will convert the number of pixels to rem unit of measurement. Examples of usage:

   * Setting up width to 100px:
      <span style="color:red; font-weight:bold;">
         <pre>width(100px);</pre>
      </span>
   * Setting up width to 0px:
      <span style="color:red; font-weight:bold;">
         <pre>width(0px);</pre>
      </span>
   * Setting up height to 100px:
      <span style="color:red; font-weight:bold;">
         <pre>height(100px);</pre>
      </span>
   * Setting up height to 0px:
      <span style="color:red; font-weight:bold;">
         <pre>height(0px);</pre>
      </span>
## Flexbox: flex-center-left() <a name="flex_center_left"></a>

   The <span style="color:red; font-style:italic; font-weight:bold;">flex-center-left</span> file consist of 3 mixins: <span style="font-style:italic; font-weight:bold;">\$flex-center-left-top</span>, <span style="font-style:italic; font-weight:bold;">\$flex-center-left-center</span> and <span style="font-style:italic; font-weight:bold;">\$flex-center-left-bottom</span>. These mixins will set up the following CSS properties: display, justify-content and align-items. Examples of usage:

   * Setting up width to 100px:
      <span style="color:red; font-weight:bold;">
         <pre>@include flex-center-left-center();</pre>
      </span>
   * Setting up width to 0px:
      <span style="color:red; font-weight:bold;">
         <pre>@include flex-center-left-center();</pre>
      </span>
   * Setting up height to 100px:
      <span style="color:red; font-weight:bold;">
         <pre>@include flex-center-left-bottom();</pre>
      </span>
## Flexbox: flex-center() <a name="flex_center"></a>

   The <span style="color:red; font-style:italic; font-weight:bold;">flex-center</span> file consist of 3 mixins: <span style="font-style:italic; font-weight:bold;">\$flex-center-top</span>, <span style="font-style:italic; font-weight:bold;">\$flex-center-center</span> and <span style="font-style:italic; font-weight:bold;">\$flex-center-bottom</span>. These mixins will set up the following CSS properties: display, justify-content and align-items. Examples of usage:

   * Setting up width to 100px:
      <span style="color:red; font-weight:bold;">
         <pre>@include flex-center-top();</pre>
      </span>
   * Setting up width to 0px:
      <span style="color:red; font-weight:bold;">
         <pre>@include flex-center-left();</pre>
      </span>
   * Setting up height to 100px:
      <span style="color:red; font-weight:bold;">
         <pre>@include flex-center-bottom();</pre>
      </span>
## Flexbox: flex-center-right() <a name="flex_center_right"></a>

   The <span style="color:red; font-style:italic; font-weight:bold;">flex-center-right</span> file consist of 3 mixins: <span style="font-style:italic; font-weight:bold;">\$flex-center-right-top</span>, <span style="font-style:italic; font-weight:bold;">\$flex-center-right-center</span> and <span style="font-style:italic; font-weight:bold;">\$flex-center-right-bottom</span>. These mixins will set up the following CSS properties: display, justify-content and align-items. Examples of usage:

   * Setting up width to 100px:
      <span style="color:red; font-weight:bold;">
         <pre>@include flex-center-right-center();</pre>
      </span>
   * Setting up width to 0px:
      <span style="color:red; font-weight:bold;">
         <pre>@include flex-center-right-center();</pre>
      </span>
   * Setting up height to 100px:
      <span style="color:red; font-weight:bold;">
         <pre>@include flex-center-right-bottom();</pre>
      </span>

