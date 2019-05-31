## Style.css for a Child Theme

If your theme is a Child Theme, the Template line is required in style.css header.

```css
/*
Theme Name: My Child Theme
Template: Twenty Seventeen
*/
```

There are other variables you can include, but these are the most important ones you should include to identify your Child Theme.

Here is an explanation of the different variables in style.css:

- Theme Name: The Name of the theme. This is the name that shows up in the WordPress Dashboard under Appearance > Themes.
- Description: A short description for the theme. You can put anything you like here. This shows up in the WordPress Dashboard under Appearance > Themes once the theme is activated.
- Author: The author of the Child Theme, which can be a person’s name or company name.
- Author URI: The URL for the author of the Child Theme.
- Template: <b>Very Important!</b> This is the folder name of the parent theme. If this variable is not correct the Child Theme will not work.
- Version: The version of the Child Theme.

All of these variables are optional, with the exception of <b>Template</b>:. If this line is not present or contains typos the Child Theme will not work.


https://make.wordpress.org/training/handbook/lesson-plans/theme-school/child-themes/child-themes-twentyseventeen/
