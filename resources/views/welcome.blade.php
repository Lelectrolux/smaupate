<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name') }}</title>

{{-- Meta --}}

{{-- Fonts --}}

{{-- Styles --}}
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<style>[x-cloak]{display:none!important}</style>

{{-- Scripts --}}
<script src="{{ mix('js/components/dropdown.js') }}" defer></script>
<script src="{{ mix('js/app.js') }}" defer></script>

{{-- Body --}}
<div class="bg-gray-200 text-gray-900 flex flex-col min-h-screen">
  <header class="bg-white border-t-4 border-indigo-700 shadow" x-data="dropdown()" x-on:resize.window="closeOnResize(640)">
    <div class="mx-auto max-w-5xl sm:flex justify-between">
      <div class="flex justify-between items-center p-4">
        <a href="#" class="text-lg text-indigo-700 font-bold">{{ config('app.name') }}</a>
        <button class="hover:text-indigo-700 focus:text-indigo-700 p-2 outline-none sm:hidden" x-on:click="toggle()">
          <svg class="fill-current h-4 cursor-pointer" viewBox="0 0 20 20" x-show="! isOpen">
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
          </svg>
          <svg class="fill-current h-4 cursor-pointer" viewBox="0 0 20 20" x-show="isOpen" x-cloak>
            <path
              d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/>
          </svg>
        </button>
      </div>
      <nav class="block p-4 pt-2 bg-gray-100 sm:flex items-center sm:bg-transparent sm:py-0" x-bind:class="{'hidden': !isOpen}" x-cloak x-on:click.away="close()">
        <ul class="sm:flex">
          @foreach(['Articles' => '#', 'Resources' => '#', 'Packages' => '#'] as $text => $url)
            <li><a class="block p-2 mt-2 sm:mt-0 rounded-lg hover:bg-indigo-100 hover:text-indigo-700 focus:bg-indigo-100 focus:text-indigo-700" href="{{ $url }}">{{ $text }}</a>
          @endforeach
        </ul>
      </nav>
    </div>
  </header>

  <main class="flex-grow py-4 content">
    <h1>Pizza restaurant allowed employees to split all the profits on Christmas Day</h1>

    <p>A pizza restaurant rewarded employees for working on Christmas, by allowing them to split the profits from the entire day.</p>

    <figure>
      <picture>
        <source
          media="(aspect-ratio: 16/9)"
          srcset="https://img.pizza/1888/531 1x, https://img.pizza/1888/531 2x"
          type="image/jpeg"
        >
        <source
          media="(aspect-ratio: 16/10)"
          srcset=""
          type="image/jpeg"
        >
        <source
          media="(aspect-ratio: 4/3)"
          srcset=""
          type="image/jpeg"
        >
        <source
          media="(aspect-ratio: 3/2)"
          srcset=""
          type="image/jpeg"
        >
        <img src="https://img.pizza/1888/531" alt="Pizza!">
      </picture>
      <figcaption>Tasty pizza, credits <cite>Unsplash</cite></figcaption>
    </figure>

    <h2>Pizza restaurant allowed employees to split all the profits on Christmas Day</h2>

    <p>Rockstar Pizza in Brownsburg, Indiana created the tradition five years ago to show appreciation for the hardworking staff who answers phones, kneads dough and makes deliveries. And this year was no different, with employees volunteering their time and pocketing about $700 each.</p>

    <p>On Monday, the restaurant noted the event with a Facebook post outlining the 4 p.m. to 9 p.m. shift during which customers could place pick-up orders. <q>...History has shown that we will be incredibly busy,</q> read the post. <q>Please show [the employees] grace & patience. It's the busiest 4 hour block of the entire year....</q> Management also asked patrons to thank workers, <q>the life blood of our business,</q> by ordering pizza.</p>

    <h3>Pizza restaurant allowed employees to split all the profits on Christmas Day</h3>

    <p>Manager Devon Hayton, who worked on Christmas, tells Yahoo Lifestyle that the day’s profits amounted to about $4,500 divided between seven employees, who were selected by management based on skill, seniority, and necessity. <q>We wanted just the essential staff so they could take home more money,</q> he says.</p>

    <p>The pizza joint was overwhelmed with orders, leaving the crew no choice but to shut down earlier than expected. Another Facebook post read, <q>Thank you for showering our staff with support. Thank you for showing them Grace & patience as they have weathered this tsunami of love. Trust when I say navigating volume of this extent is not easy. They are working extremely hard.</q></p>

    <p>Colby Mathews told Today that she and her husband, who are co-owners, didn’t pocket a dime that day.</p>

    <figure>
      <blockquote>
        <p>They just take over the shop, and whatever money is made, it's divided between them. It's just a way to do more for them than we could otherwise. They worked hard, and they earned it. They earned every dollar of it, and for some of them, it's a very big deal and can make a big difference to make that amount of money in that short a time.</p>
      </blockquote>
      <figcaption>
        Colby Mathews, in <cite>Today</cite>
      </figcaption>
    </figure>

    <p>Hayton is feeling especially lucky, sharing how he will spend his earnings. <q>I’m going to Las Vegas to celebrate my brother’s birthday.</q></p>
  </main>

  <footer class="bg-indigo-900 p-4">
    <nav>
      <ul class="flex flex-wrap justify-center -mx-2">
        @foreach(['Sitemap' => '#', 'Terms of service' => '#', 'Contact' => '#'] as $text => $url)
          <li class="mx-2 mb-2 text-gray-400 hover:text-gray-200"><a href="{{ $url }}">{{ $text }}</a>
        @endforeach
      </ul>
    </nav>
    <a class="text-gray-600 text-xs block text-center mt-2" href="#">© Copyright 2019 — {{ config('app.name') }}</a>
  </footer>
</div>

{{-- Inline scripts --}}
