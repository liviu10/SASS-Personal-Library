# SASS-Personal-Library

"SASS Personal Library" started initially as a way for me to learn the basics of CSS and pre-processor - SASS. As the time passed by, I realized that it's better to have custom made HTML and CSS Components; so that I can reuse them in different projects.

## TABLE OF CONTENTS:

1. [HTML SNIPPETS](#html_snippets)

   1. [Accordion](#accordion)
   2. [Alerts](#alert)
   3. [Buttons](#button)
   4. [Cards](#card)
   5. [Font Awesome Icons](#social_icons)
   6. [Image Logo](#image_logo)
   7. [User Inputs](#user_input)
   8. [Lists](#list)
   9. [Read More Button](#read_more)
   10. [Scroll Top Button](#scroll_top)
   11. [Search Menu](#search_menu)
   12. [Tables](#table)
   13. [Text Group with Header](#text_group)

2. [UTILITIES](#utilities)
3. [IMPROVEMENTS](#improvements)

## HTML SNIPPETS <a name="html_snippets"></a>:

This section consists in different components that can be used in future projects. The classes are constructed following [BEM Methodology](http://getbem.com/naming/ "BEM Methodology") and [D.R.Y. Principles](https://en.wikipedia.org/wiki/Don%27t_repeat_yourself "Don't Repeat Yourself Principles"). For each HTML Component you will see detailed information regarding the way HTML tags are build. Besides this aspect, you will see how the SASS logic is constructed so that the CSS Styles are applied to each component variation accordingly. These components are responsive only in portrait mode.

- <b><u>Accordion</u></b><a name="accordion"></a> is a custom made component that is constructed using the block classes - *accordion* and a *panel*. The javascript file is changing the behavior of this accordion. This component is responsive only in portrait mode. You can view a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/accordion.html);

- <b><u>Alerts</u></b><a name="alert"></a> are a set of components with different color variations that are constructed using the block class - *alert*. Modifier classes like: *--standard*, *--primary*, *--secondary* etc. will change the color schema of a certain alert. This component is responsive only in portrait mode. You can view a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/alerts.html);

- <b><u>Buttons</u></b><a name="button"></a> are a set of components with different color variations and layouts that are constructed using the block class - *button-group*, *btn* and *pagination-group*. Modifier classes like: *--standard*, *--primary*, *--secondary*, *--outline-standard*, *--outline-primary*, *--outline-secondary* etc. will change the color schema and layout of a certain button. This component is responsive only in portrait mode. You can view a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/buttons.html);

- <b><u>Cards</u></b><a name="card"></a> are custom made component that are constructed using the block classes - *card* and *btn*. Modifier classes like: *--standard*, *--primary*, *--secondary* etc. will change the color schema of a certain button. This component is responsive only in portrait mode. You can se a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/cards.html);

- <b><u>Font Awesome Icons</u></b><a name="social_icons"></a> are custom made component that are constructed using the class structure from [Font Awesome v4.7](https://fontawesome.com/v4.7.0/ "Font Awesome v4.7"). These components are responsive only in portrait mode. You can view a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/icons.html);

- <b><u>Image Logo</u></b><a name="image_logo"></a> is set of components with different dimensions that is constructed using the block class *img*. The modifier classes like: *--logo-50px*, *--logo-75px* etc. will change the width and height of a certain logo. These components are responsive only in portrait mode. You can view a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/image-logo.html);

- <b><u>User Inputs</u></b><a name="user_input"></a> are set of components that are constructed using the block class *input*. The element classes like: *__check*, *__text*, *__label* etc. will change the way these inputs are displayed. These components are responsive only in portrait mode. You can view a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/inputs.html);

- <b><u>Lists</u></b><a name="list"></a> are set of components that are constructed using the block class *lists*. The element classes like: *__element*, *__element-type1*, *__text* etc. will change the way these lists are displayed. These components are responsive only in portrait mode. You can view a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/lists.html);

- <b><u>Read More Button</u></b><a name="read_more"></a> is a custom made component that is constructed using the block class - *btn*. The javascript file is changing the behavior of this read more / read less button. This component is responsive only in portrait mode. You can view a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/read-more.html);

- <b><u>Scroll Top Button</u></b><a name="scroll_top"></a> is a custom made component that is constructed using the block class - *btn*. The javascript file is changing the behavior of this scroll top button. This component is responsive only in portrait mode. You can view a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/scroll-top-btn.html);

- <b><u>Search Menu</u></b><a name="search_menu"></a> is a custom made component that is constructed using the block classes - *list-search* and *list*. The javascript file will be triggered every time the user will enter data in the search field. In this search menu, the user can enter whatever he/she likes. This component is responsive only in portrait mode. You can view a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/scroll-top-btn.html);

- <b><u>Table</u></b><a name="table"></a> is a component that is constructed using the block class - *table*. The element classes like: *__header*, *__row* and *__cell* will change the layout of the component to a more easy-to-read table. This component is not responsive. You can view a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/tables.html);

- <b><u>Text Group with Header</u></b><a name="text_group"></a> is a component with a header and a paragraph that is constructed using the block classes - *text-group*, *text-header* and *text-content*. This component is responsive only in portrait mode. You can view a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/text-group.html).

## UTILITIES <a name="utilities"></a>:

This section consists in different CSS Styles that are use to design the HTML Components. The styles are constructed following [D.R.Y. Principles](https://en.wikipedia.org/wiki/Don%27t_repeat_yourself "Don't Repeat Yourself Principles"). For each utility mixin you will see detailed information regarding the way SASS logic is constructed so that the CSS Styles are applied to each component variation accordingly.

- <b><u>Box Model</u></b> consist of a set of functions and mixins like: *margin*, *padding*, *width*, *height* etc. that can be used in future projects;

- <b><u>Flex Box</u></b> consist of a set of mixins to center elements to the left, center or right side of the screen by using the following properties: *display*, *justify-content* and *align-items*;

- <b><u>Typography</u></b> consist of a set of mixins that are useful when the user wants to format a paragraph or a link. Font size function and mixin will convert the *pixels* unit of measurement to *rem*;

## IMPROVEMENTS <a name="improvements"></a>:

- Responsive Navigation Bar with Hamburger Menu;
- Responsive Hero Image with Button;