---
layout: page
title: ThreeSeee
tagline: Welcome to the blog
---
{% include JB/setup %}


Hey there! We're running this on Jekyll because github only hosts static pages. 

Read [Jekyll Quick Start](http://jekyllbootstrap.com/usage/jekyll-quick-start.html)

Complete usage and documentation available at: [Jekyll Bootstrap](http://jekyllbootstrap.com)

We should update author attributes at some point. 

<script type="text/javascript" src="http://veranochileno.tumblr.com/js?num=3"></script>

<div id="images"></div>  
<div class="flickrNav">
    <a id="prev" href="#">Prev</a><a id="next" href="#">Next</a>
</div>

## Post List

<ul class="posts">
  {% for post in site.posts %}
    <li><span>{{ post.date | date_to_string }}</span> &raquo; <a href="{{ BASE_PATH }}{{ post.url }}">{{ post.title }}</a></li>
  {% endfor %}
</ul>

## Posts

<!-- Loop in you posts -->
{% for post in site.posts %}
  <!-- Here's the header -->
  <header>
    <h2 class="title"><a href="{{ post.url }}">{{ post.title }}</a></h2>
  </header>

  <!-- Your post's summary goes here -->
  <article>{{ post.excerpt }}</article> 
  <br>
  <a href="{{ post.url }}">See full post</a>
  <hr>
{% endfor %}

