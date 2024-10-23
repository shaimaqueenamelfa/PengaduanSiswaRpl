<x-app-layout>
    <x-slot name="header">
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">lapor sekarang</h2>
                <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- Pastikan untuk menambahkan token CSRF -->
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="pelapor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelapor</label>
                            <input type="text" name="pelapor" id="pelapor" placeholder="Nama pelapor" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                required>
                        </div>
                        <div>
                            <label for="terlapor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Terlapor</label>
                            <input type="text" name="terlapor" id="terlapor" placeholder="Nama terlapor" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                required>
                        </div>
                        <div>
                            <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                            <input type="text" name="kelas" id="kelas" placeholder="Kelas pelapor" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                required>
                        </div>
                        <div>
                            <label for="bukti" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bukti</label>
                            <input type="file" name="bukti" id="bukti" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                accept="image/*" required>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="laporan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Laporan</label>
                            <textarea id="laporan" name="laporan" rows="8" 
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                placeholder="Masukkan laporan di sini" required>
                            </textarea>
                        </div>
                    </div>
                    <button type="submit" 
                            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            lapor sekarang !
                    </button>
                </form>
            </div>
        </section>
    </x-slot>
</x-app-layout>
