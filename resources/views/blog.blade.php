<!DOCTYPE html>
<html lang="en">
@extends('layout.app')
@section('content')
        <section class="mt-6 px-4 pb-16 md:px-8 md:pb-24">
            <div class="max-w-4xl mx-auto lg:max-w-6xl">
                <div class="mb-12 max-w-3xl mx-auto text-center md:mb-16">
                    <h2 class="text-3xl font-bold mb-6 text-slate-900">Blog Post</h2>
                    <p class="text-base text-slate-600 leading-relaxed dark:text-slate-400"> Let’s Explore Some
                        Interesting Articles </p>
                </div>

                <div class="grid gap-6 md:gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <article
                        class="bg-white border border-slate-300 shadow-sm p-4 rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                        <div class="bg-gray-50 aspect-[22/13] rounded-xl overflow-hidden">
                            <img src={{ asset('img/Laravel.png') }} alt="Laravel" class="w-full h-full object-cover" />
                        </div>
                        <div class="mt-6">
                            <h3 class="text-base font-semibold text-slate-900 mb-3 dark:text-slate-50">Laravel: The PHP
                                Framework for Web Artisans</h3>
                            <a href="https://laravel.com/"
                                class="inline-block mt-6 py-1.5 px-3 text-sm rounded-md font-semibold text-white border border-blue-600 bg-blue-600 hover:bg-blue-700 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">See
                                more</a>
                        </div>
                    </article>

                    <article
                        class="bg-white border border-slate-300 shadow-sm p-4 rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                        <div class="bg-gray-50 aspect-[22/13] rounded-xl overflow-hidden">
                            <img src={{ asset("img/Tailwind.png") }} alt="Tailwind"
                                class="w-full h-full object-cover" />
                        </div>
                        <div class="mt-6">
                            <h3 class="text-base font-semibold text-slate-900 mb-3 dark:text-slate-50">Tailwind CSS: A
                                Utility-First CSS Framework for Rapid UI Development</h3>
                            <a href="https://tailwindcss.com/docs/installation/using-vite"
                                class="inline-block mt-6 py-1.5 px-3 text-sm rounded-md font-semibold text-white border border-blue-600 bg-blue-600 hover:bg-blue-700 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">See
                                more</a>
                        </div>
                    </article>

                    <article
                        class="bg-white border border-slate-300 shadow-sm p-4 rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                        <div class="bg-gray-50 aspect-[22/13] rounded-xl overflow-hidden">
                            <img src={{ asset ("img/ReadyMadeUI.png") }} alt="Futuristic Food Tech Trends"
                                class="w-full h-full object-cover" />
                        </div>
                        <div class="mt-6">
                            <h3 class="text-base font-semibold text-slate-900 mb-3 dark:text-slate-50">ReadyMadeUI: A
                                Collection of Pre-Built UI Components and Templates for Web Development</h3>
                            <a href="https://readymadeui.com/"
                                class="inline-block mt-6 py-1.5 px-3 text-sm rounded-md font-semibold text-white border border-blue-600 bg-blue-600 hover:bg-blue-700 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">See
                                more</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        @endsection
        </html>