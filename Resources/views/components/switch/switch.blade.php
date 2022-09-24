@push('css')
<style>
    input[type='checkbox']:checked ~ label div.switch-dot {
        transform: translateX(0.75rem);
    }
</style>
@endpush

<div>
    <input type="checkbox" name="" id="switch" class="hidden">
    <label for="switch">
        <div class="flex items-center h-5 p-1 bg-gray-300 rounded-full w-9">
            <div class="w-4 h-4 duration-300 ease-in-out transform bg-white rounded-full shadow-md switch-dot">
            </div>
        </div>
    </label>
</div>
