# Instagram-Feed-for-Website
How to Add an Instagram Feed to Your Website

Add an Instagram feed into your website using a Behold embed or a custom feed using the Instagram API with Behold.

This method uses a 3rd-party tool called Behold. You can see the full guide over on my blog, The Digital Den: https://declankay.com/blog/how-to-add-an-instagram-feed-to-your-website/

There are two files: index.php and styles.css

**index.php**

I will use PHP to create the markup, but JSON can be used with a language of your choice.

First of all, in the PHP file, set the ‘BeholdFeedURL’ variable to the URL provided by Behold. There is a simple check to see if the feed has any content and an error message is displayed if there are any connection issues.

The next step is to use a couple of simple PHP functions. The first function that we will use is ‘file_get_contents’, which allows us to collect data from the Behold URL. Second, we will use ‘json_decode’, which converts the JSON data into a PHP object. The next step is to create a foreach loop, so we can cycle through each of the Instagram posts.

When inside the loop, we can then access specific content by referencing the object names. For example, ‘permalink’ is used to access the link to the Instagram post and ‘mediaUrl’ allows access to the image URL.

**styles.css**

In the other file, we have some simple CSS that creates the four-column layout and a suitable hover effect. The layout is created using CSS flex but can be changed to a different method if preferred. There are a handful of sitewide styles controlling fonts, images and colours that can be amended to fit the theme of your website.
