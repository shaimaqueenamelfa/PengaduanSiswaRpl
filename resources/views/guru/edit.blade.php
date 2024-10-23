<x-app-layout>
    <x-slot name="header">
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">edit status</h2>
                <form action="{{ route('guru.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">status</span>
                            <select name="status" class="select select-bordered">
                                <option disabled>{{ $siswa->status }}</option>
                                <option value="sedang dalam tinjauan" {{ $siswa->status == 'sedang dalam tinjauan' ? 'selected' : ''}}>sedang dalam tinjauan</option>
                                <option value="Done" {{ $siswa->status == 'Done' ? 'selected' : '' }}>Done</option>
                            </select>
                        </div>
                    </label>
                    <button type="submit" name="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium">
                        update
                    </button>
                </form>
            </div>
        </section>
    </x-slot>
</x-app-layout>
