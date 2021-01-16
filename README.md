# SASS-Personal-Library

"SASS Personal Library" started initially as a way for me to learn the basics of CSS and pre-processor - SASS. As the time passed by, I realized that it's better to have custom made HTML and CSS Components; so that I can reuse them in different projects.

## REPOSITORY STRUCTURE:

- HTML Components;
- Utilities;
- List of Improvements;

## HTML COMPONENTS:

This section consists in different components that can be used in future projects. The classes are constructed following [BEM Methodology](http://getbem.com/naming/ "BEM Methodology") and [D.R.Y. Principles](https://en.wikipedia.org/wiki/Don%27t_repeat_yourself "Don't Repeat Yourself Principles"). For each [HTML Component](https://liviu-voica.ro/sass-personal-library.php#html_components "SASS Personal Library - HTML Components") you will see detailed information regarding the way HTML tags are build. Besides this aspect, you will see how the SASS logic is constructed so that the CSS Styles are applied to each component variation accordingly. These components are responsive only in portrait mode.

- [Accordion](https://liviu-voica.ro/assets/html/accordion.html "Accordion Component") is a custom made component that is constructed using the block classes - *accordion* and a *panel*. The javascript file is changing the behavior of this accordion. This component is responsive only in portrait mode. You can se a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/accordion.html);

- [Alerts](https://liviu-voica.ro/assets/html/alerts.html "Alerts Component") are a set of components with different color variations that are constructed using the block class - *alert*. Modifier classes like: *--standard*, *--primary*, *--secondary* etc. will change the color schema of a certain alert. This component is responsive only in portrait mode. You can se a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/alerts.html);

- [Buttons](https://liviu-voica.ro/assets/html/buttons.html "Buttons Component") are a set of components with different color variations and layouts that are constructed using the block class - *button-group*, *btn* and *pagination-group*. Modifier classes like: *--standard*, *--primary*, *--secondary*, *--outline-standard*, *--outline-primary*, *--outline-secondary* etc. will change the color schema and layout of a certain button. This component is responsive only in portrait mode. You can se a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/buttons.html);

- [Cards](https://liviu-voica.ro/assets/html/cards.html "Cards Component") are custom made component that are constructed using the block classes - *card* and *btn*. Modifier classes like: *--standard*, *--primary*, *--secondary* etc. will change the color schema of a certain button. This component is responsive only in portrait mode. You can se a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/cards.html);

- [Hero Image](https://liviu-voica.ro/assets/html/hero-image.html "Hero Image Component") is custom made component that is constructed using the block classes - *hero-image*, *hero-text* and *btn*. Modifier classes like: *--standard*, *--primary*, *--secondary* etc. will change the color schema of a certain button. This component is responsive only in portrait mode. You can se a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/hero-image.html);

- [Font Awesome Icons](https://liviu-voica.ro/assets/html/icons.html "Font Awesome Icons Component") are custom made component that are constructed using the class structure from [Font Awesome v4.7](https://fontawesome.com/v4.7.0/ "Font Awesome v4.7"). These components are responsive only in portrait mode. You can se a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/icons.html);

- [Image Logo](https://liviu-voica.ro/assets/html/image-logo.html "Image Logo Component") is set of components with different dimensions that is constructed using the block class *img*. The modifier classes like: *--logo-50px*, *--logo-75px* etc. will change the width and height of a certain logo. These components are responsive only in portrait mode. You can se a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/image-logo.html);

- [User Inputs](https://liviu-voica.ro/assets/html/inputs.html "User Inputs Component") are set of components that are constructed using the block class *input*. The element classes like: *__check*, *__text*, *__label* etc. will change the way these inputs are displayed. These components are responsive only in portrait mode. You can se a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/inputs.html);

- [Lists](https://liviu-voica.ro/assets/html/lists.html "Lists Component") are set of components that are constructed using the block class *lists*. The element classes like: *__element*, *__element-type1*, *__text* etc. will change the way these lists are displayed. These components are responsive only in portrait mode. You can se a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/lists.html);

- [Read More Button](https://liviu-voica.ro/assets/html/read-more.html "Read More Button Component") is a custom made component that is constructed using the block class - *btn*. The javascript file is changing the behavior of this read more / read less button. This component is responsive only in portrait mode. You can se a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/read-more.html);

- [Scroll Top Button](https://liviu-voica.ro/assets/html/scroll-top-btn.html "Scroll Top Button Component") is a custom made component that is constructed using the block class - *btn*. The javascript file is changing the behavior of this scroll top button. This component is responsive only in portrait mode. You can se a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/scroll-top-btn.html);

- [Search Menu](https://liviu-voica.ro/assets/html/search-menu.html "Search Menu Component") is a custom made component that is constructed using the block classes - *list-search* and *list*. The javascript file will be triggered every time the user will enter data in the search field. In this search menu, the user can enter whatever he/she likes. This component is responsive only in portrait mode. You can se a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/scroll-top-btn.html);

- [Table](https://liviu-voica.ro/assets/html/tables.html "Table Component") is a component that is constructed using the block class - *table*. The element classes like: *__header*, *__row* and *__cell* will change the layout of the component to a more easy-to-read table. This component is not responsive. You can se a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/tables.html);

- [Text Group with Header](https://liviu-voica.ro/assets/html/text-group.html "Text Group with Header Component") is a component with a header and a paragraph that is constructed using the block classes - *text-group*, *text-header* and *text-content*. This component is responsive only in portrait mode. You can se a live example [here](https://liviu-voica.ro/My%20Portfolio/SASS-Personal-Library/html_components/text-group.html).

## UTILITIES:

This section consists in different CSS Styles that are use to design the HTML Components. The styles are constructed following [D.R.Y. Principles](https://en.wikipedia.org/wiki/Don%27t_repeat_yourself "Don't Repeat Yourself Principles"). For each utility mixin you will see detailed information regarding the way SASS logic is constructed so that the CSS Styles are applied to each component variation accordingly.

- [Box Model](https://liviu-voica.ro/assets/html/box-model.html "Box Model Utilities") consist of a set of functions and mixins like: *margin*, *padding*, *width*, *height* etc. that can be used in future projects;

- [Flex Box](https://liviu-voica.ro/assets/html/flexbox.html "Flex Box Utilities") consist of a set of mixins to center elements to the left, center or right side of the screen by using the following properties: *display*, *justify-content* and *align-items*;

- [Typography](https://liviu-voica.ro/assets/html/typography.html "Typography Utilities") consist of a set of mixins that are useful when the user wants to format a paragraph or a link. Font size function and mixin will convert the *pixels* unit of measurement to *rem*;

## LIST OF IMPROVEMENTS:

- Responsive Navigation Bar with Hamburger Menu;
- Javascript Presentation Page;