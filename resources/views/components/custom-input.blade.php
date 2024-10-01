<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700 font-semibold">
        {{ $label }}<span class="text-red-500">*</span>
    </label>
    <input type="number" id="{{ $name }}" name="{{ $name }}" 
           class="remove-arrow w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-primary" 
           placeholder="Masukkan {{ $label }} Anda" 
           autocomplete="off" 
           oninput="this.value = this.value.replace(/[^0-9]/g, '');"
           inputmode="numeric" pattern="[0-9]*">
</div>

<style>
    .remove-arrow::-webkit-outer-spin-button,
    .remove-arrow::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .remove-arrow {
        -moz-appearance: textfield;
    }
</style>
