<!DOCTYPE html>
<html lang="en">
@extends('layout.app')
@section('content')
        <section aria-labelledby="banner-heading" class="px-4 md:px-8 mt-6">
            <div
                class="px-6 bg-gradient-to-r from-blue-800 via-blue-700 to-blue-600 rounded-lg overflow-hidden min-h-48 max-w-5xl mx-auto md:px-12">
                <div class="py-6 md:py-8 max-w-3xl mx-auto text-center">
                    <h2 id="banner-heading" class="text-3xl font-bold text-slate-50 mb-4 md:text-4xl">
                        Revaline Shirelle Tungerapan
                    </h2>
                    <p class="text-base text-slate-100 leading-relaxed">
                        Saya adalah mahasiswi yang sedang menempuh pendidikan di Universitas Ciputra Makassar dengan
                        program studi Informatika dan saya sedang perjalanan menempuh semester 3. Saya suka mengikuti
                        organisasi dan kepanitiaan karena itu salah satu bagian dari kesenangan saya di kampus.
                        Walaupun saya suka mengikuti organisasi, saya juga masih dapat membagi waktu untuk belajar.
                    </p>
                </div>
            </div>
        </section>

        <div class="grid gap-6 max-w-5xl mx-auto mt-6 px-4 md:px-8 md:grid-cols-2">

            <article class="bg-white border border-slate-200 shadow-sm rounded-lg overflow-hidden">
                <div class="aspect-[16/10] w-full bg-gray-50">
                    <img src="{{ asset('img/IRD.jpg') }}" alt="Kepanitiaan O-week" class="w-full h-full object-cover" />
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="text-slate-900 text-base font-semibold">Organisasi</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Saya cukup banyak mengikuti organisasi dan kepanitiaan di kampus. Salah satunya saya mengikuti
                        Kepanitiaan O-week di kampus. Saya mengambil divisi Inventory and Resource Division yang dimana
                        disini kami diajarkan untuk mengatur semua kebutuhan event.
                    </p>
                </div>
            </article>

            <article class="bg-white border border-slate-200 shadow-sm rounded-lg overflow-hidden">
                <div class="aspect-[16/10] w-full bg-gray-50">
                    <img src="{{ asset('img/Flutter.png') }}" alt="Informatika" class="w-full h-full object-cover" />
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="text-slate-900 text-base font-semibold">Informatika</h3>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        Di kampus saya juga belajar Informatika yang dimana saya diajarkan untuk membuat website bahkan
                        aplikasi mobile menggunakan Flutter. Saya juga diajarkan menggunakan Laravel, Spring Boot,
                        Bootstrap
                        dan berbagai bahasa pemrograman seperti Java, PHP, Python, dan lain sebagainya.
                    </p>
                </div>
            </article>
        </div>
    @endsection
</html>