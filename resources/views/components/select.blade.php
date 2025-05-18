@props(['name'])

<select name="{{ $name }}" id="status"
    class="border-gray-300 dark:border-gray-700 dark:text-white focus:border-indigo-500 dark:bg-gray-800 focus:ring-indigo-500 rounded-md shadow-sm">
    {{ $slot }}
</select>
