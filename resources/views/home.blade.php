<!doctype html>
<html>
@extends('layout.app')
@section('content')
        <section class="mt-6 px-4 md:px-8" aria-labelledby="jumbotron-heading-2">
            <div
                class="bg-gray-50 grid items-center gap-4 max-w-7xl mx-auto rounded-lg overflow-hidden md:grid-cols-2 lg:grid-cols-3">
                <div class="lg:col-span-2 p-6 md:p-8">
                    <h2 id="jumbotron-heading-2" class="text-2xl font-bold text-slate-900 md:text-3xl">
                        Welcome To My Portofolio
                    </h2>
                    <p class="mt-4 text-base text-slate-600 leading-relaxed">
                        Hi, Perkenalkan saya Revaline. Saya berasal dari Universitas Ciputra Mkassar. Pada saat ini saya
                        sedang membuat website portofolio untuk melengkapi tugas saya. mohon untuk menekan selanjutnya
                        untuk mengetahui lebih dalam tentang saya.
                    </p>

                    <a href="/about"
                        class="py-2 px-3.5 text-sm rounded-md font-semibold cursor-pointer text-white border border-blue-600 bg-blue-600 mt-6 inline-block hover:bg-blue-700 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                        Selanjutnya ->
                    </a>
                </div>

                <div class="hidden md:flex items-center justify-center p-6">
                    <div class="bg-blue-100 rounded-full p-4">
                        <img src="{{ asset('img/Repa.jpg') }}" alt="Loopy"
                            class="w-56 h-56 lg:w-72 lg:h-72 rounded-full object-cover" />
                    </div>
                </div>
            </div>
        </section>
        @endsection
</html>

