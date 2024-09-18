<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700 font-semibold">{{ $label }}<span class="text-red-500">*</span></label>
    <div class="relative">
        <input type="password" id="{{ $name }}" name="{{ $name }}" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-primary" placeholder="Masukkan {{ $label }} Anda" autocomplete="off">
        <span onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
            <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
            </svg>
        </span>
    </div>
</div>

<script>
    function togglePassword() {
        const passwordField = document.getElementById('{{ $name }}');
        const eyeIcon = document.getElementById('eye-icon');
        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.setAttribute("stroke", "blue");
        } else {
            passwordField.type = "password";
            eyeIcon.setAttribute("stroke", "currentColor");
        }
    }
</script>
