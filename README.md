# Jefferson's Portfolio Website

Hi fellas! My name is Jefferson Johan. Now i'm at 5th Cawu Computer Science Bina Nusantara x PPTI BCA. This is my improvement of last self learning Web Programing Course.  My lecturer is **Anderies, B.Eng., S.Kom., M.Kom.** Hope you all can enjoy my simple website. Below is my data:

> NIM  : 2502041224
>Class : PPTI 12


# Technology in My Website
1. Laravel (PHP Framework)<br>
![Laravel Logo](https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/200px-Laravel.svg.png)
2. Tailwind (CSS Framework)<br>
![enter image description here](https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Tailwind_CSS_Logo.svg/200px-Tailwind_CSS_Logo.svg.png)
3. HTML, CSS
4. NPM (Node Package Manager)
5. GitHub & Git

# Requirement to Run My Website
Make sure your computer already installed [composer](https://getcomposer.org/download/) and [NPM](https://nodejs.org/en).  We need composer to download all dependecies needed in this project. NPM we need to run Tailwind CSS Framework so that website interface perfectly shown.

# How to install and run my project on your PC?

I want to share simplest way to run this website using Git Clone.

> Remember, make sure your computer already installed **Git** and already **configured your Git & GitHub**

 - First, you need to my project's url for cloning
 ![Step 1](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/clone1.png)
- Open your command prompt, cd your directory to the directory you want to run this project. Then type `git clone https://github.com/jeffersonnjohan/website-portofolio-laravel.git`
![Step 2](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/clone2.png)
- Type `cd website-portofolio-laravel`
![Step 3](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/clone3.png)
- Type `composer install`
![Step 4](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/clone4.png)
- Type `copy .env.example .env`
![Step 5](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/clone5.png)
- Type `php artisan key:generate`
![Step 6](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/clone6.png)
- Type `npm install`
![Step 7](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/clone7.png)
- Type `npm run dev`
![Step 8](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/clone8.png)
- Open other terminal with same path, then type `php artisan composer`
![Step 9](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/clone9.png)
- Done, open the link provided

# What's inside my website?
Below is my website demo:


I can divide my website to **6 main pages**:
- Introduction
>This page contains my biodata, motto, and my short journey. You can navigate to all pages with header or footer.

![Introduction](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/introductionn.png)
- Academic
> In this page, we can navigate to **4 sub pages**, Primary School Pages, Junior High School Pages, Senior High School Pages, and University Pages. Each of pages contain my story and journey until now. I use Route::prefix() in web.php to make it possible.

![Academic](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/academicc.png)
- Project
> This page contains my 2 biggest project. JualanYuk and Eyemorse. This page also link to my Github page.

![Project](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/projectt.png)
- Organization
> From this page, you can access **4 sub pages** of my experience in organization and volunteer. I tell my story and my role in each of pages.

![Organization](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/organizationn.png)
- Hobby
> This page is a kind of landing page, which we can navigate directly to section we want by clicking the menu on the top of page. There is **3 section** on this page: Chess, Badminton, and Cooking.
 
![Hobby](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/hobbyy.png)

- Restaurant
> This page is my favourite restaurant list. There is 3 categories for my restaurant pages: **Gold**, **Silver**, and **Bronze**.

![Restaurant](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/restaurant.png)

 For each restaurant, there is detail page explaining the complete information of the restaurant. For the example:

![Detail Page](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/detailPage.png)
