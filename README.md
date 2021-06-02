# SASS PERSONAL LIBRARY

   "SASS Personal Library" started initially as a way for me to learn the basics of CSS and pre-processor - SASS. As the time passed by, I realized that it's better to have custom made HTML and CSS Components; so that I can reuse them in different projects.

# PROJECT'S WIKI TABLE OF CONTENTS

1. [HTML Snippets](https://github.com/liviu10/SASS-Personal-Library/wiki/HTML-Snippets "HTML Snippets")
2. [Utilities: Box Model](https://github.com/liviu10/SASS-Personal-Library/wiki/Utilities:-Box-Model "Utilities: Box Model")
3. [Utilities: Component Mixin](https://github.com/liviu10/SASS-Personal-Library/wiki/Utilities:-Component-Mixin "Utilities: Component Mixin")
4. [Utilities: Flexbox](https://github.com/liviu10/SASS-Personal-Library/wiki/Utilities:-Flexbox "Utilities: Flexbox")
5. [Utilities: Resets](https://github.com/liviu10/SASS-Personal-Library/wiki/Utilities:-Resets "Utilities: Resets")
6. [Utilities: Typography](https://github.com/liviu10/SASS-Personal-Library/wiki/Utilities:-Typography "Utilities: Typography")

# PROJECT INSTALLATION

You can import the whole library by adding the following line inside your scss file and compile the CSS properties:
   <span style="color:red; font-weight:bold;">
      <pre>@import 'SASS-Personal-Library/main-styles'</pre>
   </span>

If you do not want to import the whole library you have the possibility to add one or more of the following lines in your scss file and compile the CSS properties:
   * Importing the RESET file:

      <span style="color:red; font-weight:bold;">
         <pre>@import 'utilities/resets/_resets';</pre>
      </span>

   * Importing one/all of the BOX MODEL mixin:

      <span style="color:red; font-weight:bold;">
         <pre>@import 'utilities/box_model/_all-border';</pre>
         <pre>@import 'utilities/box_model/_all-margin';</pre>
         <pre>@import 'utilities/box_model/_all-padding';</pre>
         <pre>@import 'utilities/box_model/_border-radius';</pre>
         <pre>@import 'utilities/box_model/_box-shadow';</pre>
         <pre>@import 'utilities/box_model/_width-height';</pre>
      </span>

   * Importing one/all of the HTML Components mixin:

      <span style="color:red; font-weight:bold;">
         <pre>@import 'utilities/component_mixins/_alert';</pre>
         <pre>@import 'utilities/component_mixins/_btn-filled';</pre>
         <pre>@import 'utilities/component_mixins/_btn-outlined';</pre>
         <pre>@import 'utilities/component_mixins/_btn-badge';</pre>
         <pre>@import 'utilities/component_mixins/_button-group';</pre>
         <pre>@import 'utilities/component_mixins/_card';</pre>
         <pre>@import 'utilities/component_mixins/_dropdown-button';</pre>
         <pre>@import 'utilities/component_mixins/_fa-icons';</pre>
         <pre>@import 'utilities/component_mixins/_list';</pre>
         <pre>@import 'utilities/component_mixins/_pagination-group';</pre>
         <pre>@import 'utilities/component_mixins/_text-group';</pre>
         <pre>@import 'utilities/component_mixins/_tooltip-button';</pre>
         <pre>@import 'utilities/component_mixins/_user-input';</pre>
      </span>

   * Importing one/all of the FLEX BOX mixin:

      <span style="color:red; font-weight:bold;">
         <pre>@import 'utilities/flexbox/_flex-center-left';</pre>
         <pre>@import 'utilities/flexbox/_flex-center';</pre>
         <pre>@import 'utilities/flexbox/_flex-center-right';</pre>
      </span>

   * Importing one/all of the TYPOGRAPHY mixin:

      <span style="color:red; font-weight:bold;">
         <pre>@import 'utilities/typography/_a-typography';</pre>
         <pre>@import 'utilities/typography/_btn-typography';</pre>
         <pre>@import 'utilities/typography/_font-size';</pre>
         <pre>@import 'utilities/typography/_h1-typography';</pre>
         <pre>@import 'utilities/typography/_h2-typography';</pre>
         <pre>@import 'utilities/typography/_h3-typography';</pre>
         <pre>@import 'utilities/typography/_h4-typography';</pre>
         <pre>@import 'utilities/typography/_h5-typography';</pre>
         <pre>@import 'utilities/typography/_h6-typography';</pre>
         <pre>@import 'utilities/typography/_letter-spacing';</pre>
         <pre>@import 'utilities/typography/_line-height';</pre>
         <pre>@import 'utilities/typography/_p-typography';</pre>
         <pre>@import 'utilities/typography/_standard-typography';</pre>
         <pre>@import 'utilities/typography/_text-indent';</pre>
      </span>
