## The Right Way enqueueing CSS, JS, jQuery, Bootstrap, Fonts


### Bootstrap
Bootstrap, the world’s most popular framework for building responsive, mobile-first sites.
https://getbootstrap.com/docs/4.3/getting-started/introduction/
https://www.bootstrapcdn.com/fontawesome/


### Font Awesome
https://fontawesome.com

Example

```html
<div class="my-button">
    <span class="text"> Settings Menu </span>
</div>
```
```css
/* font-awesome */
.my-button{
	display: inline-block;
	padding: 8px 12px;
	background: #eee;
	border: solid 1px #D5D5D5;
}

.my-button span {
	display: inline-block;
}

.my-button span:before {
	font-family: 'FontAwesome';
	content: '\f085';
	position: relative;
	margin-right: 5px;
	font-size: 110%;
}
```


### jQuery

We will use jQuery from Google Hosted Libraries
https://developers.google.com/speed/libraries/

Libraries
To load a hosted library, copy and paste the HTML snippet for that library (shown below) in your web page. For instance, to load jQuery, embed the <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> snippet in your web page.

We recommend that you load libraries from the CDN via HTTPS, even if your own website only uses HTTP. Nowadays, performance is fast, and caching works just the same. The CDN's files are served with CORS and Timing-Allow headers and allowed to be cached for 1 year.
https://developers.google.com/speed/libraries/


### Fonts

In this example, we will use Google Fonts
https://fonts.google.com/
