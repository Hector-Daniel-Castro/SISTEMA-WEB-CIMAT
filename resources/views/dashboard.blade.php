<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido al Repositorio CIMAT') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-semibold mb-4">Descarga aplicaciones educativas</h1>
                
                <p class="mb-4">Bienvenido al Repositorio CIMAT, tu fuente confiable para descargar aplicaciones educativas de lectura, matemáticas y realidad virtual.</p>

                <p class="mb-4">Aquí encontrarás una amplia variedad de aplicaciones diseñadas para ayudarte en tu proceso de aprendizaje y exploración. Nuestro objetivo es proporcionarte herramientas de alta calidad para enriquecer tu educación en diferentes áreas.</p>

                <a href="/realidad-virtual" class="text-blue-600 hover:underline">Explorar aplicaciones de Realidad virtual</a><br><br>
                <a href="/realidad-virtual" class="text-blue-600 hover:underline">Explorar aplicaciones de Matemáticas</a><br><br>
                <a href="/realidad-virtual" class="text-blue-600 hover:underline">Explorar aplicaciones de Lectura</a><br><br>
            </div>
        </div>
    </div>
</x-app-layout>

